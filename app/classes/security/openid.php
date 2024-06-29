<?php

include_once(getabspath("classes/security.php"));

class SecurityPluginOpenId extends SecurityPlugin {

	public $clientId = "";
	public $clientSecret = "";
	public $scope = "";
	public $configUrl = "";

	public $nameClaim = "";
	public $emailClaim = "";
	public $pictureUrlClaim = "";

	/**
	 * @constructor
	 */
	function __construct( $params )
	{
		parent::__construct( $params );
		$this->clientId = $params[ "clientId" ];
		$this->clientSecret = $params[ "clientSecret" ];
		$this->scope = $params[ "scope" ];
		$this->configUrl = $params[ "configUrl" ];
		$this->nameClaim = $params[ "nameClaim" ];
		$this->emailClaim = $params[ "emailClaim" ];
		$this->pictureUrlClaim = $params[ "pictureUrlClaim" ];
	}

	public function getUserInfo( $id_token )
	{

		global $cCharset;
		$payload = $this->verifyIdToken( $id_token );

		if( $payload["error"] )
			$this->error = "OpenID security plugin: "
				.$payload["error"]." ".$payload["error_description"];

		if( !$payload || $payload["error"] )
			return array();


		$ret = array( "id" => $this->code . $payload["sub"] );
		$ret[ "raw" ] = $payload;
		if( $this->nameClaim ) {
			$ret["name"] = runner_convert_encoding( $payload[ $this->nameClaim ], $cCharset, 'UTF-8' );
		}
		if( $this->emailClaim ) {
			$ret["email"] = $payload[ $this->emailClaim ];
		}

		if( $this->pictureUrlClaim && $payload[ $this->pictureUrlClaim ] ) {
			$picResult = runner_http_request( $payload[ $this->pictureUrlClaim ], "", "GET", array(), false );
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
}
?>