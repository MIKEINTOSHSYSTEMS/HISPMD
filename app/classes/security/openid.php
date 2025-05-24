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

	// sign out from provider on application logout
	public $logOut = false;

	public $access_token = "";

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
		$this->logOut = $params[ "logOut" ];
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

		// #16845: try request userinfo, if name or email required, but it is empty
		if ( $this->nameClaim && !$ret["name"] || $this->emailClaim && !$ret["email"] ) {
			$claimData = $this->getClaimData();

			if ( $claimData && !$claimData["error"] ) {
				$ret[ "raw" ] = array_merge($ret[ "raw" ], $claimData);
				if ($this->nameClaim && !$ret["name"]) {
					$ret["name"] = runner_convert_encoding( $claimData[$this->nameClaim], $cCharset, 'UTF-8' );
				}
				if ($this->emailClaim && !$ret["email"]) {
					$ret["email"] = $claimData[$this->emailClaim];
				}
			}
		}

		return $ret;
	}

	public function getClaimData()
	{
		$config = $this->getConfig();
		$headers = array("Authorization" => "Bearer " . $this->access_token);
		$response = runner_http_request($config["userinfo_endpoint"], "", "GET", $headers, false);
		if ($response["error"]) {
			return array("error" => "OpenID security plugin: " . $response["header"] . $response["content"]);
		}
		return HttpRequest::parseResponseArray($response);
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
		$this->access_token = $result["access_token"];
		return $result["id_token"];
	}

	public function hasExternalLogout() {
		$config = $this->getConfig();
		return $config[ "end_session_endpoint" ] != null && $this->logOut;
	}

	public function redirectToLogout( $token, $redirectUri ) {
		header( "Location: " . $this->externalLogoutUrl( $token, $redirectUri ) );
		exit();
	}

	protected function externalLogoutUrl( $token, $redirectUri ) {
		$config = $this->getConfig();
		$endpoint = $config[ "end_session_endpoint" ];

		$request = new HttpRequest( $endpoint, "GET", array(
			"id_token_hint" => $token,
			"post_logout_redirect_uri" => $redirectUri
		));

		return $request->getUrl();
	}

}
?>