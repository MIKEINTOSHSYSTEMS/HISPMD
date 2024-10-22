<?php

require_once(getabspath("classes/security.php"));
require_once(getabspath("classes/security/openid.php"));


class SecurityPluginOkta extends SecurityPluginOpenId {

	public $domain = "";

	/**
	 * @constructor
	 */
	function __construct( $params )
	{
		parent::__construct( $params );
		$this->domain = $params[ "domain" ];
		$this->configUrl = 'https://' . $this->domain . '/.well-known/openid-configuration';
	}

}
?>