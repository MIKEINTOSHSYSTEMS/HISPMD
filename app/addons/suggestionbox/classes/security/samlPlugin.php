<?php

include_once(getabspath("classes/security.##@ext##"));

class SecurityPluginSaml extends SecurityPlugin {

	public $issuer = "";
	public $SSOUrl = "";
	public $code = "";
	
	public $publicKey = "";
	public $privateKey = "";
	
	public $idClaim = "";
	public $nameClaim = "";
	public $emailClaim = "";	
	

	/**
	 * @constructor
	 */
	function __construct( $params ) {
		parent::__construct( $params );

		$this->publicKey = $params[ "certificate" ];
		$this->issuer = $params[ "issuer" ];
		// Single Sign-On URL 
		$this->SSOUrl = $params[ "url" ];
		$this->code = $params[ "code" ];
		
		$this->privateKey = $params[ "privateKey" ];

		$this->idClaim = $params[ "idClaim" ];
		$this->nameClaim = $params[ "nameClaim" ];
		$this->emailClaim = $params[ "emailClaim" ];
	}

	/**
	 * @param String samlResponce
	 * @return Array
	 */
	public function getUserInfo( $samlResponce ) {
		global $cCharset;
		$payload = $this->verifySAMLResponse( $samlResponce );
		
		if( !$payload || !$this->idClaim && !$payload["id"] ) {
			$this->error = "SAML security plugin: no data to identify user";
			return array();
		}

		$ret = array( "id" => $this->code . $payload["id"] );
		if( $this->idClaim ) {
			$ret["id"] = $this->code . $payload[ $this->idClaim ];
		}
		
		
		if( $this->nameClaim ) {
			$ret["name"] = $payload[ $this->nameClaim ];
		}
		
		if( $this->emailClaim ) {
			$ret["email"] = $payload[ $this->emailClaim ];
		}
		
		return $ret;
	}

	/**
	 * Verify saml auth response
	 * @param String samlResponce
	 * @return Array|false
	 */
	public function verifySAMLResponse( $samlResponce ) {
		return verifySamlResponse( $samlResponce, $this->publicKey, $this->privateKey );
	}

	/**
	 * Redirect to the external login page
	 */
	public function redirectToLogin() {
		// send an authentification request to identity provider 
		// using HTTP Redirect to Single Sign-On URL 
		header( "Location: " . $this->SSOUrl );
	}
}
?>