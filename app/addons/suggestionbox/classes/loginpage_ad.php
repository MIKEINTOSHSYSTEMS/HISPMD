<?php
include_once(getabspath("classes/runnerldap.php"));
/**
 * Class for login page with Active Directory
 *
 */
class LoginPage_AD extends LoginPage
{
	public $ldapObj = null;

	public $ldap_domainName = null;

	public $ldap_serverIP = null;

	public $useCustomLDAP = false;

	protected $adSubmit = false;

	protected $userData = array();


	function __construct(&$params)
	{
		// call parent constructor
		parent::__construct($params);

		$this->twoFactAuth = false;

		$this->auditObj = GetAuditObject();
		$this->ldap_domainName = GetGlobalData("ADDomain", "");
		$this->ldap_serverIP = GetGlobalData("ADServer", "localhost");

		$this->useCustomLDAP = GetGlobalData("customLDAP", false);
	}

	/**
	 *
	 */
	protected function initCredentials()
	{
		if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] != '' )
		{
			$this->adSubmit = true;
		}
	}

	/**
	 * @return Boolean
	 */
	protected function isActionSubmit()
	{
		return $this->action == "Login" || $this->adSubmit;
	}

	/**
	 * @return String
	 */
	protected function getRemoteUserName()
	{
		$arrUsername = explode('\\', $_SERVER["REMOTE_USER"]);
		if( isset( $arrUsername[1] ) )
			return $arrUsername[1];

		return $_SERVER["REMOTE_USER"];
	}

	/**
	 *
	 */
	protected function LogInAuto()
	{
		$pUsername = $this->getRemoteUserName();
		$provider = Security::getAuthPlugin( $this->providerCode );
		Security::createUserSession( $provider, $pUsername );
		Security::auditLoginSuccess();
		$this->callAfterSuccessfulLoginEvent( $pUsername );
		return true;
	}

	/**
	 *
	 */
	public function LogIn($pUsername, $pPassword, $skipPasswordCheck = false, $fireEvents = true)
	{
		global $customLDAPSettings;

		if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] && !Security::dynamicPermissions() )
		{
			return $this->LogInAuto();
		}


		/**
		 * 	Even with AutoLogin but with dynamic permissions enabled we have to read
		 *  user info from the database to determine her group membership
		 */
		if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] ) {
			$ldapUsername = GetGlobalData("ADLogin", '');
			$ldapPassword = GetGlobalData("ADPassword", '');
		} else {
			$ldapUsername = $pUsername;
			$ldapPassword = $pPassword;
		}

		$this->ldapObj = ldap_factory();
		$ldapconn = $this->ldapObj->runner_ldap_connect( $ldapUsername, $ldapPassword );
		if( $ldapconn && $this->isCaptchaOk )
		{
			if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] )
				$pUsername = $this->getRemoteUserName();

			$filter = $this->getLoginFilter( $pUsername );
			$attributes = array();
				$entries = $this->ldapObj->runner_ldap_getData( $filter, $attributes );

			if( $entries )
			{
				$userData =& $entries[0];
				$distinguishedName = $userData['distinguishedname'];
				$displayName = $pUsername;

				if( !$this->useCustomLDAP )
				{
					if( $userData['displayname'] != null && $userData['displayname'] != '' )
						$displayName = runner_htmlspecialchars( $userData['displayname'] );
				}
				else
				{
					$displayNameAttr = $customLDAPSettings["displayNameAttr"];
					if( $displayNameAttr && $userData[ $displayNameAttr ] != '')
						$displayName = runner_htmlspecialchars( $userData[ $displayNameAttr ] );
				}

				$userGroups = $this->getUserGroups( $pUsername, $userData );

				if( Security::dynamicPermissions() && $distinguishedName != "" ) {
					$this->addGroupsFromAD( $userGroups, $distinguishedName );
				}
				$provider = Security::getAuthPlugin( $this->providerCode );
				Security::createUserSession( $provider, $pUsername, $displayName, $userData, $userGroups );
				Security::auditLoginSuccess();

				if( Security::dynamicPermissions() ) {
					//	save password for the subsequent LDAP access, for Admin pages
					storageSet( "UserPass", $pPassword );
				}
				$this->callAfterSuccessfulLoginEvent( $pUsername, $pPassword, $userData );
				return true;
			}

			$this->message = "Invalid Login";//"Invalid Login";
		}
		else
		{
			if( !$ldapconn )
				$this->message = $this->ldapObj->ldap_error();
		}

		Security::auditLoginFail( $pUsername );
		$this->callAfterUnsuccessfulLoginEvent( $pUsername, $pPassword );

		$this->ldapObj->runner_ldap_unbind();
		return false;
	}


	/**
	 * Get a list of user groups
	 * @param String pUsername
	 * @param Array loginEntry
	 * @return Array
	 */
	protected function getUserGroups( $pUsername, $loginEntry )
	{
		global $customLDAPSettings;

		if( !$this->useCustomLDAP )
		{
			$i = 0;
			$userGroups = array();
			while ($i < sizeof($loginEntry['memberof']))
			{
				$userGroups[] = $this->ldapObj->ldap_getCN($loginEntry['memberof'][$i]);
				$i++;
			}
			if(array_key_exists('primarygroupid', $loginEntry))
			{
				$filter = "(&(objectSID=".$this->ldapObj->getGroupSid($loginEntry['objectsid'], $loginEntry['primarygroupid'])."))";
				$attributes = array("cn");
				$entries = $this->ldapObj->runner_ldap_getData($filter,$attributes);
				if(count($entries))
				{
					$userGroups[] = $entries[0]["cn"];
				}
			}

			return $userGroups;
		}

		$userGroups = array( $pUsername );

		$groupNameAttr = $customLDAPSettings["groupNameAttr"];
		$groupFilter = $customLDAPSettings["groupFilter"];
		if( !$groupFilter || !$groupNameAttr )
			return $userGroups;

		//	read groups the user belongs to
		$filter = $this->ldapObj->getProcessedPattern($groupFilter, $pUsername);
		$entries = $this->ldapObj->runner_ldap_getData($filter);

		if($entries !== FALSE)
		{
			foreach($entries as $group)
			{
				$userGroups[] = $this->ldapObj->processAttrValue( $group[ $groupNameAttr ] );
			}
		}

		return $userGroups;
	}

	/**
	 * Get the uset login filter
	 * @param String pUsername
	 * @return String
	 */
	protected function getLoginFilter( $pUsername )
	{
		global $customLDAPSettings;

		if( !$this->useCustomLDAP )
			return "(&(objectCategory=person)(|(sAMAccountName=".$pUsername.")(userprincipalname=".$pUsername."@".ldap_DN2Domain( GetGlobalData("ADDomain","") ).")(userprincipalname=".$pUsername.")))";
//			return "(&(objectCategory=person)(sAMAccountName=".$pUsername."))";
//			return "(&(objectCategory=person)(|(sAMAccountName=".$pUsername.")(userprincipalname=".$pUsername."@".GetGlobalData("ADDomain","").")(userprincipalname=".$pUsername.")))";

		$loginFilter = $customLDAPSettings['loginFilter'];
		if( $loginFilter )
			return $this->ldapObj->getProcessedPattern($loginFilter, $pUsername);

		return "";
	}

	/**
	 *
	 */
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
			$dbgroups[ $tdata[ "" ] ] = true;
		}

		$filter = "(member:1.2.840.113556.1.4.1941:=". $distinguishedName .")";
		$entries_dn = $this->ldapObj->runner_ldap_getData($filter, array("cn"));
		if( !$entries_dn )
			return;

		for($n = 0; $n < count($entries_dn); ++$n)
		{
			$adgroup = $entries_dn[$n]["cn"];
			if( $dbgroups[ $adgroup ] && !in_array($adgroup, $userGroups) )
				$userGroups[] = $adgroup;
		}
	}

	public function createSession( $username, $password ) {
		return $this->LogIn( $username, $password );
	}
}