<?php

require_once(getabspath("classes/security.php"));
require_once(getabspath("classes/runnerldap.php"));

class SecurityPluginAd extends SecurityPlugin {

	public $useCustomLDAP = false;

	public $ldapURL = "";
	public $ldapDomain = "";
	public $ldapBaseDN = "";
	public $ldapLoginFilter = "(&(objectCategory=person)(|(sAMAccountName=%u)(userprincipalname=%u@%d)(userprincipalname=%u)))";
	public $ldapLoginAttrs = array();
	public $ldapUsernames = array();
	public $ldapMemberAttrMap = array();
	public $ldapDisplayNameAttr = "cn";
	public $ldapGroupFilter = "";
	public $ldapGroupNameAttr = "";
	public $ldapMemberFilter = "(&(|(objectCategory=group)(objectCategory=user))(|(cn=*%s*)(samaccountname=*%s*)))";

	public $ldapObj = null;

	public $followReferrals = "";
	public $loginAutomatically = "";

	public $username = "";
	public $password = "";
	public $useAdGroups = false;
	public $useDbGroups = false;


	public $configUrl = "";
	public $scope = null;
	public $clientId = "";
	public $clientSecret = "";

	/**
	 * @constructor
	 */
	function __construct( $params )
	{
		global $customLDAPSettings;

		parent::__construct( $params );

		$this->ldapURL = $params[ "url" ];
		$this->ldapDomain = $params[ "domain" ];
		$this->ldapBaseDN = $params[ "baseDN" ];
		$this->followReferrals = $params[ "followReferrals" ];
		$this->loginAutomatically = $params[ "loginAutomatically" ];
		$this->username = $params[ "username" ];
		$this->password = $params[ "password" ];
		$this->useAdGroups = $params[ "useAdGroups" ];
		$this->useDbGroups = !!$params[ "useDbGroups" ] && !!Security::extIdField();

		$this->ldapUsernames = $this->getDefaultUserNames();
		$this->ldapMemberAttrMap = $this->getDefaultMemberAttrMap();

	
		$this->ldapObj = new RunnerLdap( $this->ldapURL );

		$this->useCustomLDAP = GetGlobalData( "customLDAP", false );

		if ( $this->useCustomLDAP ) {
			$this->ldapLoginFilter = $customLDAPSettings["loginFilter"];
			$this->ldapDisplayNameAttr = $customLDAPSettings["displayNameAttr"];
			$this->ldapGroupFilter = $customLDAPSettings["groupFilter"];
			$this->ldapGroupNameAttr = $customLDAPSettings["groupNameAttr"];
			$this->ldapUsernames = $customLDAPSettings["usernames"];
			$this->ldapMemberFilter = $customLDAPSettings["memberFilter"];
			$this->ldapMemberAttrMap = $customLDAPSettings["memberAttrMap"];
			$this->ldapLoginAttrs = array();
		}

	}

	/**
	 *
	 * @return Array
	 */
	protected function getDefaultUserNames()
	{
		$usernames = array();
		$usernames[] = "%u@%d"; // Active Directory string
		$usernames[] = "%d\\%u"; // old format Active Directory string
		$usernames[] = "%u";
		$usernames[] = "uid=%u,%e"; // OpenLDAP string
		$usernames[] = "cname=%u,cname=Users,%e"; // AD string
		$usernames[] = "cn=%u,%e"; // AD string
		return $usernames;
	}

	/**
	 *
	 * @return Array
	 */
	protected function getDefaultMemberAttrMap()
	{
		return array(
			"name" => "samaccountname",
			"displayname" => array("displayname", "cn", "distinguishedname"),
			"category" => "objectcategory",
			"email" => "mail"
		);
	}

	public function getProcessedSearchPattern( $pattern, $value )
	{
		$queryStr = str_replace( array( "%s" ), array( $value ), $pattern );

		return str_replace("**", "*", $queryStr);
	}

	/**
	 * @param String
	 */
	public function getProcessedPattern( $pattern, $username )
	{
		return str_replace( array("%u", "%d", "%e"), array( $username, $this->ldapDomain, $this->ldapBaseDN ), $pattern );
	}

	/**
	 * if $dn is RDN sequence, returns value of first RDN
	 * else returns $dn.
	 * $dn = CN=Users,CN=Builtin,DC=test,DC=xlinesoft,DC=com
	 * return Users
	 * Or
	 * $dn = Users
	 * return Users
	 */
	protected function ldap_getCN($dn)
	{
		$rdnList = explode( ",", $dn );
		$firstRdn = $rdnList[0];
		$rdnEqualPos = strpos( $firstRdn, "=" );

		if( $rdnEqualPos ) {
			return substr( $firstRdn, $rdnEqualPos + 1 );
		}

		return $firstRdn;
	}

	/**
	 * This function searchs in LDAP tree ($ad -LDAP link identifier)
 	 * entry specified by samaccountname and returns its DN or epmty
 	 * string on failure.
	 * $samaccountname = Users
	 * $basedn = DC=test,DC=xlinesoft,DC=com
	 * return CN=Users,CN=Builtin,DC=test,DC=xlinesoft,DC=com
	 */
	protected function ldap_getDN( $samaccountname )
	{
		$attributes = array('dn');
		return $this->ldapObj->runner_ldap_getData("(samaccountname={$samaccountname})", $this->ldapBaseDN, $attributes);
	}


	/**
	 * @param String aUsername
	 * @return Array
	 */
	protected function getUserNames( $aUsername )
	{
		$usernames = array();
		foreach( $this->ldapUsernames as $usernamePattern )
		{
			$usernames[] = $this->getProcessedPattern( $usernamePattern, $aUsername );
		}

		return $usernames;
	}

	/**
	 * Get the uset login filter
	 * @param String pUsername
	 * @return String
	 */
	protected function getLoginFilter( $username )
	{
		return $this->getProcessedPattern( $this->ldapLoginFilter, $username);
	}

	/**
	 * Returns userdata and groups array or false
	 * @param String username - username to access the LDAP server
	 * @param String password - password to access the LDAP server
	 * @param String loginUsername - name of the user to login to the application if differs from $username
	 * @return array(
	 * 		"userdata" => array of user fields. Differs depending on $this->useDbGroups
	 * 					when true, userdata has unified format, see PluginOpenID::getUserInfo
	 * 					when false - data from LDAP server as is
	 * 		"groups" => array of AD groups the user belongs. Don't confuse with database groups
	 * 		"displayname" => string display name, used when $this->useDbGroups is false only
	 * 		"username" => string username, used when $this->useDbGroups is false only
	 * )
	 */
	public function login( $username, $password, $loginUsername = "" ) {

		$usernames = $this->getUserNames( $username );
		$ldapconn = $this->ldapObj->runner_ldap_connect( $usernames, $password, $this->followReferrals );
		if( !$ldapconn ) {
			$this->error = $this->error = $this->ldapObj->ldap_error();
			return false;
		}

		storageSet( "ldapPassword", $password );

		if( !$loginUsername ) {
			$loginUsername = $username;
		}
		$filter = $this->getLoginFilter( $loginUsername );
		$entries = $this->ldapObj->runner_ldap_getData( $filter, $this->ldapBaseDN, $this->ldapLoginAttrs );
		if( !$entries ) {
			$this->error = "Invalid Login"; //"Invalid Login";
			return false;
		}

		$rawData =& $entries[0];
		$displayName = $this->getAttrValue( $rawData, $this->ldapMemberAttrMap["displayname"] );
		$userId = $this->getAttrValue( $rawData, $this->ldapMemberAttrMap["name"] );

		//	use the server-provided username, not the user-provided
		if( $userId )  {
			$loginUsername = $userId;
		}

		if( !$displayName ) {
			$displayName = $loginUsername;
		}

		if( $this->useDbGroups ) {
			$userData = array();
			if( $userId ) {
				$userData["id"] = $this->code . $userId;
			}
			$userData["username"] = $loginUsername;

			$userData["name"] = $displayName;

			$userData["email"] = $this->getAttrValue( $rawData, $this->ldapMemberAttrMap["email"] );

			$userData["raw"] = $rawData;

		} else {
			$userData = $rawData;
		}

		if( $this->useAdGroups ) {
			//	read list of groups the user directly belongs to
			$userGroups = $this->getUserGroups( $loginUsername, $rawData );

			//	read list of groups the user belongs to through another group
			//	"user" belongs to "A", "A" belongs to "B". Add "B" to the list of groups.
			if( Security::dynamicPermissions() && $rawData['distinguishedname'] ) {
				$this->addGroupsFromAD( $userGroups, $rawData['distinguishedname'] );
			}
		}

		return array(
			"userdata" => $userData,
			"groups" => $userGroups,
			"displayname" => $displayName,
			"username" => $loginUsername
		);
	}

	protected function getUserGroups( $username, $loginEntry )
	{
		if( !$this->useCustomLDAP )
		{
			$i = 0;
			$userGroups = array();
			foreach( $loginEntry['memberof'] as $groupEntry )
			{
				$userGroups[] = $this->ldap_getCN( $groupEntry );
				$i++;
			}
			if(array_key_exists('primarygroupid', $loginEntry))
			{
				$filter = "(&(objectSID=".$this->ldapObj->getGroupSid($loginEntry['objectsid'], $loginEntry['primarygroupid'])."))";
				$attributes = array("cn");
				$entries = $this->ldapObj->runner_ldap_getData($filter, $this->ldapBaseDN, $attributes);
				if(count($entries))
				{
					$userGroups[] = $entries[0]["cn"];
				}
			}
			return $userGroups;
		}

		$userGroups = array();

		if( !$this->ldapGroupFilter )
			return $userGroups;

		//	read groups the user belongs to
		$filter = $this->getProcessedPattern($this->ldapGroupFilter, $username);
		$entries = $this->ldapObj->runner_ldap_getData($filter, $this->ldapBaseDN);

		if($entries !== FALSE)
		{
			foreach($entries as $group)
			{
				$userGroups[] = $this->processAttrValue( $group[ $this->ldapGroupNameAttr ] );
			}
		}

		return $userGroups;
	}


	/**
	 * Returns allowed domains from appsettings as array
	 * @return Array
	 */
	private function getDomainList() {
		$rawDomain = GetGlobalData("GoogleDomain", "");
		$domainList = explode(',', $rawDomain);
		$result = array();
		foreach($domainList as $domain) {
			$trimDomain = trim($domain);
			if ( $trimDomain ) {
				$result[] = $trimDomain;
			}
		}
		return $result;
	}

	/**
	 * Verify token and return parsed paylod
	 * @param String token
	 * @return Array|false
	 */
	public function verifyIdToken( $token ) {
		$config = $this->getConfig();

		$jwk = Security::getOpenIdJWK( $token, $config );
		if( !$jwk )
			return false;

		$verifiedTokenData = Security::openIdVerifyToken( $token, $jwk );
		if( !$verifiedTokenData )
			return false;

		return $verifiedTokenData["payload"];
	}

	public function getConfig() {
		$wellKnown =& storageFindOrCreate( "openIdConfig" );
		if( !$wellKnown[ $this->code ] ) {
			$wellKnown[ $this->code ] = Security::getOpenIdConfiguration( $this->configUrl );
		}
		return $wellKnown[ $this->code ];
	}

	/**
	 * Redirect to the external login page
	 */
	public function redirectToLogin() {
		//	create and save the state parameter
		$openIdStateMap =& storageFindOrCreate( "openIdStateMap" );
		$state = generatePassword(10);
		$openIdStateMap[ $state ] = $this->code;

		//	create the URL
		$config = $this->getConfig();
		$request = new HttpRequest( $config["authorization_endpoint"], "GET", array(
			"response_type" => "code",
			"scope" => $this->scope,
			"client_id" => $this->clientId,
			"state" => $state,
			"redirect_uri" => projectURL() . GetTableLink("openidcallback")
		));

		header( "Location: " . $request->getUrl() );
	}

	public function getIdToken( $code ) {
		$config = $this->getConfig();
		$request = new HttpRequest( $config["token_endpoint"], "POST" );
		$request->postPayload = array(
			'grant_type'	=> 'authorization_code',
			'code'			=> $code,
			'redirect_uri' 	=> projectURL() . GetTableLink("openidcallback")
		);
		$request->addBasicAuthorization( $this->clientId, $this->clientSecret );
		$request->headers["Content-Type"] = 'application/x-www-form-urlencoded';

		$response = $request->run();
		if( $response["error"] ) {
			$this->error = "Unable to obtain authorization token.";
			$this->error .= $response["header"] . $response["content"];
			return false;
		}
		$result = HttpRequest::parseResponseArray( $response );

		if( !$result || !$result["id_token"] ) {
			$this->error = "Unable to parse autorization token.";
			$this->error .= $response["header"] . $response["content"];
			return false;
		}
		return $result["id_token"];
	}

	protected function addGroupsFromAD( &$userGroups, $distinguishedName )
	{
		global $adNestedPermissions;

		if( !$adNestedPermissions )
			return;

		//	add only those groups that are present in the database
		$dbgroups = array();

		$dataSource = Security::getUgGroupsDatasource();
		$qResult = $dataSource->getList( new DsCommand() );
		while( $tdata = $qResult->fetchAssoc() )
		{
			$dbgroups[ $tdata[ "Label" ] ] = true;
		}

		$filter = "(member:1.2.840.113556.1.4.1941:=". $distinguishedName .")";
		$entries_dn = $this->ldapObj->runner_ldap_getData($filter, array("cn"));
		if( !$entries_dn )
			return;

		foreach( $entries_dn as $group ) {
			$adgroup = $group["cn"];
			if( $dbgroups[ $adgroup ] && !in_array($adgroup, $userGroups) )
				$userGroups[] = $adgroup;

		}
	}

	function loginAuto( $remoteUsername ) {
		if( !$this->loginAutomatically ) {
			return false;
		}
		$username = SecurityPluginAd::refineRemoteUsername( $remoteUsername );
		if( !$username ) {
			return false;
		}
		if( $this->username || Security::dynamicPermissions() && $this->useAdGroups) {
		//	connect to LDAP	server
			$userInfo = $this->login( $this->username, $this->password, $username );
			if( !$userInfo ) {
				return false;
			}
		} else {
			$userInfo = array(
				"userdata" => array( "id" => $this->code . $username ),
				"displayname" => $username,
				"username" => $username,
				"groups" => array()
			);
		}
		return $this->createUserSession( $userInfo, true );
	}

	static function refineRemoteUsername( $remoteUsername ) {
		$parts = explode('\\', $remoteUsername );
		if( isset( $parts[1] ) )
			return $parts[1];
		return $remoteUsername;
	}

	/**
	 * @param userInfo - array returned by the SecurityPluginAd::login function
	 */
	function createUserSession( $userInfo, $autoLogin = false, $nextSessionLevel = LOGGED_FULL ) {
		if( !$userInfo ) {
			return false;
		}
		$userData = $userInfo["userdata"];
		$adGroups = array();
		if( $this->useDbGroups ) {
			//	$userData contains standartized
			$dbUserData = Security::fetchUpdateDatabaseUser( $userData, true );
			$data = $dbUserData["data"];
			$username = $userData["username"];
			$displayName = $userData["name"];
		} else {
			//	userdata contains raw input from LDAP server for legacy compatibility
			$data = $userData;
			$username = $userInfo["username"];
			$displayName = $userInfo["displayname"];
		}

		if( $this->useAdGroups ) {
			$adGroups = $userInfo["groups"];
		}

		if( $nextSessionLevel != LOGGED_FULL ) {
			Security::createProvisionalSession( $this->provider, $nextSessionLevel, $username, $displayName, $data );
			return true;
		}

		Security::createUserSession( $this->provider, $username, $displayName, $data, $adGroups, $autoLogin );
		return true;

	}

	/**
	 * Returns list of groups and users from AD where name contains the search string
	 * @param search
	 * @param Boolean hideUntilSearch
	 * @return Array of array(
	 * 		"name" =>
	 * 		"displayName" =>
	 * 		"category" =>
	 * 		"email" =>
	 * )
	 */
	function getGroupList( $search, $hideUntilSearch = false ) {

		$ldapconn = $this->ldapObj->runner_ldap_connect( $this->getUserNames( $this->ldapUsername() ), $this->ldapPassword(), $this->followReferrals );
		if( !$ldapconn ) {
			return array();
		}

		if( !strlen( $search ) && $hideUntilSearch ) {
			// hide data until search
			return array();
		}

		$filter = $this->getMembersFilter( $search );
		$attributes = array();
		$attrMapNames = array( "name", "displayname", "category", "email" );
		foreach( $attrMapNames as $an ) {
			$attr = $this->ldapMemberAttrMap[ $an ];
			if( !$attr ) {
				continue;
			}
			if( is_array( $attr ) ) {
				foreach( $attr as $a ) {
					$attributes[] = $a;
				}
			} else {
				$attributes[] = $attr;
			}
		}
		if( !$attributes ) {
			return array();
		}
		$data = $this->ldapObj->runner_ldap_getData($filter, $this->ldapBaseDN, $attributes );
		$this->ldapObj->runner_ldap_unbind();

		if($data)
		{
			$result = $this->getMembersResult( $data );
			return $result;
		}
		return null;
	}

	protected function ldapUsername() {
		return Security::getUserName();
	}

	protected function ldapPassword() {
		return storageGet( "ldapPassword" );
	}

	protected function getMembersFilter( $aGrName )
	{
		return $this->getProcessedSearchPattern( $this->ldapMemberFilter, $aGrName );
	}

	/**
	 * @param Mixed attValue
	 * @return String
	 */
	public function processAttrValue($attValue)
	{
		if( !is_array($attValue) )
			return $attValue;

		foreach( $attValue as $value )
		{
			return $value;
		}
	}

	protected function getMembersResult( &$data )
	{

		$result = array();
		foreach( $data as $row )
		{
			$nameAttr = $this->getAttrValue( $row, $this->ldapMemberAttrMap["name"] );
			if( !$nameAttr ) {
				continue;
			}
			$result[] = array(
				"name" => $this->processAttrValue( $nameAttr ),
				"displayname" => $this->ldap_getCN( $this->processAttrValue( $this->getAttrValue( $row, $this->ldapMemberAttrMap["displayname"] ) ) ),
				"category" => $this->ldap_getCN( $this->processAttrValue( $this->getAttrValue( $row, $this->ldapMemberAttrMap["category"] ) ) ),
				"email" => $this->processAttrValue( $this->getAttrValue( $row, $this->ldapMemberAttrMap["email"] ) )
			);
		}

		return $result;
	}

	/**
	 * @param &Array data
	 * @param Mixed attrNames
	 * @return Mixed
	 */
	protected function getAttrValue( &$data, $attrNames )
	{
		$attrs = $attrNames;
		if( !is_array( $attrs ) )
			$attrs = array( $attrNames );

		foreach( $attrs as $attrName )
		{
			if( $data[ $attrName ] )
				return $data[ $attrName ];
		}

		return '';
	}

	function loginAsUser( $username ) {
		if( $this->username ) {
			$userInfo = $this->login( $this->username, $this->password, $username );
		} else {
			$userInfo = array(
				"userdata" => array( "id" => $this->code . $username ),
				"displayname" => $username,
				"username" => $username,
				"groups" => array()
			);
		}

		return $this->createUserSession( $userInfo );
	}

}
?>