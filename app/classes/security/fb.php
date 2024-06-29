<?php

class SecurityPluginFB extends SecurityPlugin {

	/**
	 * Facebook plugin
	 */
	public $fbObj;

	protected $appId = "";
	protected $appSecret = "";


	/**
	 * @constructor
	 */
	function __construct( $params )
	{
		parent::__construct( $params );
		$this->appId = $params["appId"];
		$this->appSecret = $params["secretId"];

		$this->fbObj = fbCreateObject( $this->appId, $this->appSecret );
	}

	public function getUserInfo( $token )
	{
		global $cCharset;

		//	facebook API ignores $token and uses $_REQUEST["signed_request"] instead
		$infoData = fbGetUserInfo( $this->fbObj, $token );
		$fbme = $infoData["info"];

		if( !$fbme )
		{
			$this->error = $infoData["error"];
			return array();
		}

		// save signed request token in cookies
		setProjectCookie( 'fb_sr_token', $token, time() + 30 * 1440 * 60, true );

		$ret = array(
				"id" => "fb".(string)$fbme["id"],
				"name" => runner_convert_encoding( (string)$fbme["name"], $cCharset, 'UTF-8' ),
				"email" => (string)$fbme["email"],
				"raw" => $fbme
			);

		if( $fbme["picture"] && is_array( $fbme["picture"] )) {
			$picResult = runner_http_request( @$fbme["picture"]["data"]["url"], "", "GET", array(), false );
			if( $picResult["content"] )
				$ret["picture"] = $picResult["content"];
		}

		return $ret;
	}

	public function getJSSettings()
	{
		return array(
			"isFB" => true,
			"FBappId" => $this->appId
		);
	}

	public function onLogout()
	{
		fbDestroySession( $this->fbObj );
		setProjectCookie( 'fb_sr_token', "", time() - 1, true );
	}

	public function savedToken()
	{
		// get fb signed request from cookie
		return $_COOKIE['fb_sr_token'];
	}
}

?>