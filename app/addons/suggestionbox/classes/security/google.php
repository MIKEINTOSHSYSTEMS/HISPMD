<?php

include_once(getabspath("classes/security.php"));

class SecurityPluginGoogle extends SecurityPlugin {

	protected $appId = "";
	protected $domain = "";
	/**
	 * @constructor
	 */
	function __construct( $params )
	{
		parent::__construct( $params );
		// client id
		$this->appId = $params["clientId"];
		$this->domain = $params["domain"];
	}

	public function getUserInfo( $id_token )
	{
		global $cCharset;


		$payload = $this->verifyIdToken( $id_token );

		if( $payload["error"] )
			$this->error = "Google security plugin: "
				.$payload["error"]." ".$payload["error_description"];

		if( !$payload || $payload["error"] )
			return array();

		//	save token in cookies
		setProjectCookie( 'google_token', $id_token, time() + 30 * 1440 * 60, true );

		$ret = array(
				"id" => "go".$payload["sub"],
				"name" => runner_convert_encoding( $payload["name"], $cCharset, 'UTF-8' ),
				"email" => $payload["email"],
				"raw" => $payload
			);

		if( $payload["picture"] ) {
			$picResult = runner_http_request( $payload["picture"], "", "GET", array(), false );
			if( $picResult["content"] )
				$ret["picture"] = $picResult["content"];
		}

		return $ret;
	}

	/**
	 * Returns allowed domains from appsettings as array
	 * @return Array
	 */
	private function getDomainList() {
		$rawDomain = $this->domain;
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
	 * Verify token and get parsed paylod
	 * @param String token
	 * @return Array|false
	 */
	public function verifyIdToken( $token ) {
		//	OpenId standard verification routine
		$wellKnown = Security::getOpenIdConfiguration( "https://accounts.google.com/.well-known/openid-configuration" );

		$jwk = Security::getOpenIdJWK( $token, $wellKnown );
		if( !$jwk )
			return false;

		$verifiedTokenData = Security::openIdVerifyToken( $token, $jwk );
		if( !$verifiedTokenData )
			return false;

		$payload = $verifiedTokenData["payload"];

		$domainList = $this->getDomainList();

		if( $domainList ) {
			if( !in_array($payload["hd"], $domainList) ) {
				$domains = implode(", ", $domainList);
				$this->error = str_replace( "%s", $domains, mlang_message( 'GOOGLE_DOMAIN' ));
				return false;
			}
		}

		return $payload;
	}

	public function getJSSettings()
	{
		return array(
			"isGoogleSignIn" => true,
			"GoogleClientId" => $this->appId
		);
	}

	public function onLogout()
	{
		setProjectCookie( 'google_token', "", time() - 1, true );
	}

	public function savedToken()
	{
		return $_COOKIE[ 'google_token' ];
	}
}
?>