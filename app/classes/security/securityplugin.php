<?php
class SecurityPlugin
{
	public $code;

	protected $appId = "";
	protected $appSecret = "";

	protected $error = "";

	protected $provider;

	
	/**
	 * @constructor
	 * @param Array $params - SecurityProvider class instance
	 */
	function __construct( $params ) {
		$this->code = $params["code"];
		$this->provider = Security::findProvider( $this->code );
	}

	/**
	 * returns saved token fr automatic logon if any or false/null
	*/
	public function savedToken()
	{
		return false;
	}

	public function getJSSettings()
	{
		return array();
	}

	/**
	 * Returns standardized user info
	 * id: provider-specific user id with provider-specific prefix.
	 * 		fb123423523456
	 * 		go2354098cv0s8
	 * name: user's display name
	 * picture: user's photo
	 * email: user's email address
	 * raw: array of original user info returned from the provider
	 * @return Array
	 */
	public function getUserInfo( $token ) {
		return array();
	}

	public function onLogout()
	{
	}

	/**
	 * Logs out
	 */
	public function logout()
	{
	}
	

	public function getError() {
		return $this->error;
	}

	/**
	 * Redirect to the external login page
	 */
	public function redirectToLogin() {

	}

	/**
	 * Validate code or data received by the callback page
	 */
	public function validateCallback( $code ) {
		return false;
	}
}

?>