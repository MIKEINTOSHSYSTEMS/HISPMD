<?php
/**
 * Class for display admin_rights_list
 *
 */
class RunnerLdap
{
	var $ldapconn = null;
	var $ldapbind = null;

	var $ldapServerAddress = "";

	function __construct( $ldapServerAddress )
	{
		$this->ldapServerAddress = $ldapServerAddress;
	}
	
	/**
	 *
	 */
	function runner_ldap_connect( $usernames, $aPassword, $followRefs)
	{
		// connect to ldap server
		$this->ldapconn = ldap_connect( ldap_getUrl( ldap_getUrl( $this->ldapServerAddress ) ) );
		if ( !$this->ldapconn || ldap_errno($this->ldapconn) != 0 )
			return false;
			
		@ldap_set_option($this->ldapconn, LDAP_OPT_DEBUG_LEVEL, 7);
		@ldap_set_option($this->ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
		@ldap_set_option($this->ldapconn, LDAP_OPT_REFERRALS, $followRefs ? 1 : 0 );
		
		// binding to ldap server
		foreach($usernames as $u)
		{
			$this->ldapbind = @ldap_bind($this->ldapconn, $u , $aPassword);
			if( $this->ldapbind )
				break;
		}
		
		if( !$this->ldapbind )
			return false;
			
		return true;
	}
	
	/**
	* Search LDAP tree
	* @ An LDAP link identifier, returned by ldap_connect()
	* @ string The search filter 
	* @ array An array of the required attributes
	*/
	function runner_ldap_getData($filter, $baseDN, $attributes = array())
	{
		if( !$attributes )
			$query = ldap_search($this->ldapconn, $baseDN, $filter);
		else 
			$query = ldap_search($this->ldapconn, $baseDN, $filter, $attributes);	
		
		if( $query === FALSE ) 
			return FALSE;
		
		// Read all results from search
		$entries = ldap_get_entries($this->ldapconn, $query);
		return $this->runner_convert_entries($entries);
	}
	
	function runner_convert_entries($aData)
	{	
		$resultArr = array();
		if (!sizeof($aData)) 
			return null;

		for ($j = 0; $j < $aData['count']; $j++)
		{
			$result = array();
			foreach ($aData[$j] as $key=>$val)
			{
				if (is_numeric($key))
					continue;
				if(!is_array($val)) 
					$result[$key] = $val;
				
				else if ($val["count"] > 1 || $key == 'memberof') 
				{
					//set array
					$tmpResult = array();
					for ($i=0;$i<$val['count'];$i++)
					{
						$tmpResult[] = $val[$i];
					}
					$result[$key] = $tmpResult;
				}
				else if ($key == 'dn')
					$result[$key] = $val;
				else 
					$result[$key] = $val[0];
			}
			$resultArr[] = $result;
		}
		
		return $resultArr;
	}
	

	/**
	 * Convert OU=users,DC=test,DC=xlinesoft,DC=com
	 * to test.xlinesoft.com
	 */

	
	function runner_ldap_unbind()
	{
		ldap_unbind($this->ldapconn);
	}
	
	function ldap_error()
	{
		global $dDebug;
		if( $dDebug ) {
			@ldap_get_option($this->ldapconn, LDAP_OPT_DIAGNOSTIC_MESSAGE, $error);
			return $error;
		}
		return ldap_err2str(ldap_errno($this->ldapconn));
	}
	
	
	function getGroupSid($userSid, $primaryGroupId)
	{
		$tgroup = bin2hex(substr($userSid,0, strlen($userSid)-4));
		$group = "";
		for($i = 0; $i<strlen($tgroup); $i += 2)
		{
			$group .= '\\'.substr($tgroup,$i,2);
		}
		$group .= sprintf("\\%02x",$primaryGroupId & 255);
		$group .= sprintf("\\%02x",($primaryGroupId >>8) & 255);
		$group .= sprintf("\\%02x",($primaryGroupId >>16) & 255);
		$group .= sprintf("\\%02x",($primaryGroupId >>24) & 255);
		
		return $group;
	}
}
?>