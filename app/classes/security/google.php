<?php

require_once(getabspath("classes/security.php"));
require_once(getabspath("classes/security/openid.php"));

class SecurityPluginGoogle extends SecurityPluginOpenId
{
	/**
	 * limit Google logins to members of specific Google Cloud organizations, e.g. "example.com, sample.com"
	 */
	public $domain = "";

	/**
	 * @constructor
	 */
	function __construct($params)
	{
		parent::__construct($params);
		$this->domain = $params["domain"];
		$this->configUrl = 'https://accounts.google.com/.well-known/openid-configuration';
	}

	/**
	 * Returns allowed domains from appsettings as array
	 * @return Array
	 */
	private function getDomainList()
	{
		$domainList = explode(',', $this->domain);
		$result = array();
		foreach ($domainList as $domain) {
			$trimDomain = trim($domain);
			if ($trimDomain) {
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
	public function verifyIdToken($token)
	{
		$payload = parent::verifyIdToken($token);

		if (!$payload || $payload["error"])
			return $payload;

		// verify that the value of the iss claim in the ID token is equal to https://accounts.google.com or accounts.google.com.
		if ($payload["iss"] != "https://accounts.google.com" && $payload["iss"] != "accounts.google.com")
			return false;

		// verify that the value of the aud claim in the ID token is equal to your app's client ID.
		if ($payload["aud"] != $this->clientId)
			return false;

		// verify that the ID token has a hd claim that matches an accepted domain associated with a Google Cloud organization.
		$allowedDomains = $this->getDomainList();
		if (count($allowedDomains) > 0 && !in_array($payload["hd"], $allowedDomains)) {
			$domains = implode(", ", $allowedDomains);
			$this->error = str_replace( "%s", $domains, mlang_message( 'GOOGLE_DOMAIN' ));
			return false;
		}

		return $payload;
	}

	public function hasExternalLogout() {
		$config = $this->getConfig();
		return $config[ "revocation_endpoint" ] != null && $this->logOut;
	}

	public function redirectToLogout( $token, $redirectUri ) {
		$config = $this->getConfig();
		$endpoint = $config[ "revocation_endpoint" ];

		// try revoke access token
		$request = new HttpRequest(
			$endpoint, "POST", array(), array( "token" => $token ),
			array( "Cache-Control" => "no-store", "Content-Type" => "application/x-www-form-urlencoded" )
		);
		$request->run();

		// redirect to login
		header( "Location: " . $redirectUri );
		exit();
	}

	public function saveStorageData() {
		storageSet( "logout_token_hint", $this->access_token );
	}
}
