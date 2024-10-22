<?php
require_once(getabspath("classes/cipherer.php"));
/**
 * Class for login page
 *
 */
class LoginPage extends RunnerPage
{
	public $auditObj = null;

	public $rememberPassword = 0;
	public $rememberMachine = 0;

	public $var_pUsername = "";
	public $var_pPassword = "";
	public $action = "";

	public $redirectAfterLogin = false;

	protected $myurl = "";

	public $loggedWithSP = false;

	protected $loggedByCredentials = false;
	public $messageType = MESSAGE_ERROR;

	/**
	 * Second message displayed after the first one
	 */

	public $twoFactorCode;

	protected $twoFactAuth = false;

	protected $SMSCodeSent = false;

	protected $pnoneNotInQuery = false;

	protected $skipSecondStep = false;

	protected $securityPlugins;

	protected $controlsData = array();

	// tp restore session on add/edit pages
	public $restore = "";

	/**
	 * Two-letter provider code
	 */
	public $providerCode = "";


	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->pSetEdit = $this->pSet;
		$this->auditObj = GetAuditObject();

		$this->headerForms = array( "top" );
		$this->footerForms = array( "footer" );
		$this->bodyForms = array( "above-grid", "grid", "superbottom" );

		$this->initMyURL();
		$this->body = array( "begin" =>"", "end" => "" );

		$this->initSecurityPlugins();
	}

	protected function initSecurityPlugins()
	{
		$this->securityPlugins = Security::GetPlugins();

		$this->addJSSettingsForSP();
	}

	protected function addJSSettingsForSP()
	{
		foreach( $this->securityPlugins as $sp )
		{
			$settings = $sp->getJSSettings();
			foreach( $settings as $sKey => $s )
			{
				$this->pageData[ $sKey ] = $s;
			}
		}
	}

	/**
	 * Set the 'connection' property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();
	}

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;

		if( $globalEvents->exists("BeforeProcessLogin") )
			$globalEvents->BeforeProcessLogin( $this );


		$twoFactorSettings =& Security::twoFactorSettings();
		if ( !GetGlobalData( "keepLoggedIn" ) || $twoFactorSettings["available"] )
		{
			$this->hideItemType("remember_password");
		}


		$sessionLevel = Security::userSessionLevel();

		if( $this->action == "" ) {
			if( $sessionLevel !== LOGGED_FULL && $sessionLevel !== LOGGED_NONE ) {
				Security::clearSecuritySession();
				$sessionLevel = Security::userSessionLevel();
			}
		}


		if( $this->action == "resendCode" && $sessionLevel === LOGGED_2F_PENDING )
		{
			$this->sendTwoFactorCode();
		}

		if( $this->action == "verifyCode" && $sessionLevel === LOGGED_2F_PENDING )
		{
			$this->verifyTwoFactorCode( $this->twoFactorCode );
		}

		if( $this->action == "resendActivation" && $sessionLevel === LOGGED_ACTIVATION_PENDING )
		{
			$this->resendActivation();
		}

		if( $this->action == "logout" )
		{
			$this->Logout( true );
			return;
		}
		if( $this->action == "providerlogin"  )
		{
			$provider = Security::getAuthPlugin( $this->providerCode );
			if( $provider ) {
				$provider->redirectToLogin();
				exit();
			}
			return;
		}

		if( $this->action == "pluginLogin" )
		{
			$plugin = $this->securityPlugins[ postvalue("plugin") ];
			if( $plugin )
			{
				$this->LoginWithSP( $plugin, postvalue('plugin_token') );
				// stay and show errors
			}
		}

		$this->refineMessage();

		$this->readControls();

		if( $this->isActionSubmit() )
		{
			$this->doLoginRoutine();

			if( Security::userSessionLevel() === LOGGED_2F_PENDING ) {
				$this->sendTwoFactorCode();
			}
		}

		$this->prepareEditControls();

		//	show page depending on session level and mode
		$sessionLevel = Security::userSessionLevel();

		//	logged in ok
		if( $sessionLevel === LOGGED_FULL && !Security::isGuest()) {

			if( $this->mode == LOGIN_POPUP ) {
				if( !$this->restore )
					$this->pageData["redirectUrl"] = $this->getLoggedInRedirectUrl();
			} else {
				$this->redirectAfterSuccessfulLogin();
				return;
			}

		} else if( $sessionLevel === LOGGED_2F_PENDING ) {
		//	prompt for 2factor code
			$this->hideMainLoginItems();
			$this->prepareTwoFactorMessage();

		} else if( $sessionLevel === LOGGED_ACTIVATION_PENDING ) {
			//	tell about activation
			$this->hideTwoFactorItems();

			if( $this->action != "resendActivation" )
				$this->prepareActivationMessage();

		} else if( $sessionLevel === LOGGED_2FSETUP_PENDING ) {
			if( $this->mode == LOGIN_POPUP ) {
				$this->pageData["redirectUrl"] = GetTableLink("userinfo");
			} else {
				$this->redirectToUserInfo();
				return;
			}
		} else {
		//	nothing, just first page access

			$this->hideTwoFactorItems();

			if( $this->mode == LOGIN_SIMPLE ) {
				//	try logging in with saved credentials
				if( !isLogged() || Security::isGuest() )
				{
					Security::tryRelogin();
				}
				if( isLogged() && !Security::isGuest() )
				{
					HeaderRedirect("menu");
					return;
				}
			}
		}

		$_SESSION["MyURL"] = $this->myurl;
		$this->assignFieldBlocksAndLabels();

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->addButtonHandlers();

		$this->fillSetCntrlMaps();
		$this->doCommonAssignments();

		$this->showPage();
	}

	protected function hideMainLoginItems()
	{
		$this->hideItemType("login_button");
		$this->hideItemType("username");
		$this->hideItemType("password");
		$this->hideItemType("username_label");
		$this->hideItemType("password_label");
		$this->hideItemType("guest_login");
		$this->hideItemType("remember_password");
		$this->hideItemType("login_external");
		$this->hideItemType("login_provider");

		$this->hideElement("bsloginregister");
	}

	protected function hideTwoFactorItems()
	{
		$this->hideItemType("auth_code");
		$this->hideItemType("verify_button");
		$this->hideItemType("resend_button");
		$this->hideItemType("remember_machine");
		$this->hideItemType("twofactor_message");
	}

	protected function isActionSubmit()
 	{
		return $this->action == "Login";
 	}

	/**
	 * try login, create session, call events
	 */
	protected function doLoginRoutine()
	{
		//	block after 3 attempts feature
		if( !$this->isLoginAccessAllowed() ) {
			return false;
		}

		if( !$this->checkCaptcha()) {
			return false;
		}

		$this->readControls();

		if( !$this->callBeforeLoginEvent() )
			return false;

		$userFound = $this->createSession( $this->var_pUsername, $this->var_pPassword );

		if( !$userFound )
		{
			Security::auditLoginFail( $this->var_pUsername );
			$this->callAfterUnsuccessfulLoginEvent( $this->var_pUsername, $this->var_pPassword );
			return false;
		}

		$sessionLevel = Security::userSessionLevel();

		//	remeber this machine is in effect, skip 2FA
		if( $sessionLevel === LOGGED_2F_PENDING ) {
			if( $this->verifyRememberMachineCookie( $_COOKIE['2ftoken']) ) {
				Security::elevateSession();
			}
			$sessionLevel = Security::userSessionLevel();
		}

		//	successful login, call events
		if( $sessionLevel === LOGGED_FULL && !Security::isGuest() ) {
			if( $this->rememberPassword ) {
				Security::setKeepLoggedCookie( true );
			} else {
				Security::setKeepLoggedCookie( false );
			}
			Security::auditLoginSuccess();
			$this->callAfterSuccessfulLoginEvent( $this->var_pUsername, $this->var_pPassword, Security::currentUserData() );
		}

		return true;
	}


	/**
	 * @param Boolean codeSent
	 */
	protected function doAssignForSecondAuthStep( $codeSent )
	{
		$this->xt->assign("user_code", true);
		if( !$codeSent )
			$this->xt->assign("userCodeFieldClass", "rnr-hiddenblock");

		$this->xt->assign("user_code_buttons", true);
		if( !$codeSent )
			$this->xt->assign("verifyButtonClass", "rnr-invisible-button");

		if( $this->pnoneNotInQuery )
			$this->xt->assign("resendButtonClass", "rnr-invisible-button");
	}


	protected function prepareTwoFactorMessage() {
		$destination = Security::twoFactorDeliveryInfo( Security::provisionalUserData() );
		$twofMessage = "";
		if( $destination["method"] === "phone" ) {
			$twofMessage = str_replace( "%phone%", $destination["address"], "A text message with your code has been sent to: %phone%" );
		} else if( $destination["method"] === "email" ) {
			$twofMessage = str_replace( "%email%", $destination["address"], "An email with your code has been sent to: %email%." );
		} else if( $destination["method"] === "totp" ) {
			$twofMessage = str_replace(
				array( "%username%", "%site%" ),
				array( "<br><b>".Security::provisionalUsername()."</b>", "<b>".$destination["address"]."</b>" ),
				"Enter the code from your authentication app corresponding to %username% at %site%."
			);
			$this->hideItemType("resend_button");
		}
		$this->xt->assign('twofactor_message', $twofMessage );

	}
	protected function sendTwoFactorCode()
	{
		$ret = Security::generateAndSendTwoFactorCode();
		if( !$ret ) {
			return true;
		}
		if( !$ret["success"] )
		{
			$this->message = "Error sending message"." ".$ret["error"];
			$this->messageType = MESSAGE_ERROR;
			return false;
		}

		//return true; //?
	}


	/**
	 */
	protected function verifyTwoFactorCode( $code )
	{
		if( Security::checkTwoFactorCode( $code ) ) {


			Security::elevateSession();
			$this->setRememberMachineCookie( true );

			Security::auditLoginSuccess();
			$this->callAfterSuccessfulLoginEvent( Security::getUserName(), '', Security::currentUserData() );
		} else {

			$this->setRememberMachineCookie( false );
			$this->message = "Wrong code";
		}
	}

	/**
	 *
	 */
	protected function prepareActivationMessage() {
		$this->xt->assign( "resend_activation_button", true );
		$this->message = mlang_message( "LOGIN_USER_NOT_ACTIVATED" );
		$this->messageType = MESSAGE_ERROR;
	}


	/**
	 * @param String code
	 * @return Boolean
	 */
	protected function verifySMSCode( $code )
	{
		return $code == $_SESSION["smsCode"];
	}


	/**
	 * @return String
	 */
	protected function getLoggedInRedirectUrl()
	{
		if( $this->myurl )
			return $this->myurl. (strpos($this->myurl, '?') !== FALSE ? '&a=login' : '?a=login');

		return GetTableLink("menu");
	}


	/**
	 *	????
	 */
	protected function refineMessage()
	{
		if( $this->message == "expired" )
			$this->message = "Your session has expired." . " " . "Please login again.";
		elseif( $this->message == "invalidlogin" )
			$this->message = "Invalid Login";
		elseif( $this->message == "loginblocked" && strlen( $_SESSION["loginBlockMessage"] ) )
			$this->message = $_SESSION["loginBlockMessage"];

		if( $this->message )
		{
			$this->xt->assign("message_class", "alert-danger" );
		}

		unset( $_SESSION["loginBlockMessage"] );
	}

	/**
	 *
	 */
	protected function initMyURL()
	{
		$this->myurl = @$_SESSION["MyURL"];

		if( $this->redirectAfterLogin || $this->mode == LOGIN_POPUP || $this->action == "Login" || $this->twoFactAuth ) {
			// save $this->myurl value
		}
		else
		{
			//	discard. Go to menu.php after login
			$this->myurl = "";
		}
	}

	protected function callAfterSuccessfulLoginEvent( $username, $password = '', $userData = array() )
	{
		global $globalEvents;

		if( $globalEvents->exists("AfterSuccessfulLogin") )
		{
			$globalEvents->AfterSuccessfulLogin( $username, $password, $userData, $this );
		}
	}

	/**
	 *
	 */
	public function redirectAfterSuccessfulLogin()
	{
		unset( $_SESSION["MyURL"] );

		if( $this->myurl )
			header("Location: ".$this->myurl);
		else
			HeaderRedirect("menu");
	}


	protected function redirectToUserInfo()
	{
		HeaderRedirect("userinfo");
	}

	/**
	 * Run AfterUnsuccessfulLogin event
	 */
	public function callAfterUnsuccessfulLoginEvent( $username, $password = "" )
	{
		global $globalEvents;

		$message = "";

		// invalid login
		if( $globalEvents->exists("AfterUnsuccessfulLogin") )
			$globalEvents->AfterUnsuccessfulLogin( $username, $password, $message, $this, $this->controlsData );

		if( $message == "" && !$this->message )
			$this->message = "Invalid Login";
		else if( $message )
			$this->message = $message;
	}

	/**
	 * @return Boolean
	 */
	protected function isLoginAccessAllowed()
	{
		if( !$this->auditObj )
			return true;

		if( !$this->auditObj->LoginAccess() )
			return true;

		$this->message = mysprintf( "Access denied for %s minutes", array($this->auditObj->LoginAccess()) );
		$_SESSION["loginBlockMessage"] = $this->message;

		return false;
	}

	/**
	 * run before login event
	 * @return Boolean
	 */
	protected function callBeforeLoginEvent( $data = null )
	{
		global $globalEvents;

		if( !$globalEvents->exists("BeforeLogin") )
			return true;

		$message = "";
		if( !$data ) {
			$data = &$this->controlsData;
		}
		if( !$data ) {
			$data = array();
		}
		$ret = $globalEvents->BeforeLogin( $this->var_pUsername, $this->var_pPassword, $message, $this, $data );

		if( $message )
			$this->message = $message;

		return $ret;
	}

	/**
	 * @param String pUsername
	 * @param String pPassword
	 * @return Boolean
	 */
	protected function logInHardcoded( $username, $password )
	{
		//	 username and password are hardcoded
		if( Security::verifyHardcodedLogin( $username, $password ) )
		{
			Security::createHardcodedSession();
			return true;
		}
		return false;
	}

	/**
	 * @param String username
	 */
	public function doAfterUnsuccessfulLog( $username )
	{
		if( $this->auditObj )
		{
			$this->auditObj->LogLoginFailed( $username );
			$this->auditObj->LoginUnsuccessful( $username );
		}
	}

	protected function createDBSesssion( $provider, $username, $password ) {
		$data = Security::fetchUserData( $username, $password, false, $this->controlsData );
		if( !$data ) {
			return false;
		}

		$displayName = $data[ Security::fullnameField() ];

		//	always use username from DB to avoid upper/lower case issues
		$username = $data[ Security::usernameField() ];

		if( $displayName == '' ) {
			$displayName = $username;
		}

		//	verify activation status
		if( GetGlobalData( "userRequireActivation" ) ) {
			if( $data[ GetGlobalData( "userActivationField" ) ] != 1 ) {
				Security::createProvisionalSession( $provider, LOGGED_ACTIVATION_PENDING, $username, $displayName, $data );
				return true;
			}
		}

		$twoFPendingLevel = Security::twoFactorPendingLevel( $data );
		if( $twoFPendingLevel != LOGGED_FULL ) {
			Security::createProvisionalSession( $provider, $twoFPendingLevel, $username, $displayName, $data );
			return true;
		}

		//	good to go, log in
		Security::createUserSession( $provider, $username, $displayName, $data );
		return true;
	}

	protected function createADSesssion( $provider, $username, $password ) {
		$plugin = Security::getAuthPlugin( $provider["code"] );
		$userInfo = $plugin->login( $username, $password );
		if( !$userInfo ) {
			$this->message = $plugin->getError();
			return false;
		}

		$sessionLevel = LOGGED_FULL;
		if( Security::providerInDb( $provider["code"] ) ) {
			$fetchResult = Security::fetchUpdateDatabaseUser( $userInfo["userdata"], true );
			if( $fetchResult["data"] ) {
				$sessionLevel = Security::twoFactorPendingLevel( $fetchResult["data"] );
			}
		}

		return $plugin->createUserSession( $userInfo, false, $sessionLevel );
	}


	/**
	 * try create user session
	 * @param String username
	 * @param String password
	 * @return Boolean true when session created, false otherwise
	 */
	public function createSession( $username, $password )
	{
		$provider = $this->currentProvider();
		if( !$provider ) {
			return false;
		}

		if( $provider["type"] == stHARDCODED ) {
			return $this->logInHardcoded( $username, $password );
		}

		if( $provider["type"] == stDB ) {
			return $this->createDBSesssion( $provider, $username, $password );
		}

		if( $provider["type"] == stAD ) {
			return $this->createADSesssion( $provider, $username, $password );
		}

		return true;
	}


	/**
	 * Logout
	 * @param Boolean redirectToLogin
	 */
	public function Logout($redirectToLogin = false)
	{
		global $globalEvents;

		if( $this->auditObj )
			$this->auditObj->LogLogout();

		$username = Security::isGuest()
			? ""
			: Security::getUserName();

		unset( $_SESSION["MyURL"] );

		Security::clearSecuritySession();

		foreach( $this->securityPlugins as $sp ) {
			$sp->onLogout();
		}

		if( $globalEvents->exists("AfterLogout") )
			$globalEvents->AfterLogout( $username );

		// redirect to login page and show message
		if ($redirectToLogin)
		{
			header("Location: ".GetTableLink("login"));
			exit();
		}
	}

	/**
	 * @param String url
	 */
	function LogoutAndRedirect($url = "")
	{
		$this->Logout();

		if ($url == "")
			$url = GetTableLink("menu");

		header("Location: ".$url);
		exit();
	}

	/**
	 * @return DsCommand
	 */
	protected function pluginUserCommand( $externalId ) {
		$externalIdField = Security::extIdField();
		if( $externalIdField ) {
			$dc = new DsCommand();
			$dc->filter = DataCondition::FieldEquals( $externalIdField, $externalId );
			$commands[] = $dc;
		}
	}


	/**
	 *	@param Object $plugin - Security Plugin object
	 *	@param string $token - token received from third-party server
	 *	@param Boolean $addNewUser - add a new user into the database if none exists
	 */
	public function LoginWithSP( $plugin, $token, $addNewUser = true )
	{
		$provider = Security::findProvider( $plugin->code );
		//info may contain following keys: 'id', 'name', 'email'
		$info = $plugin->getUserInfo( $token );
		if ( !$info )
		{
			$this->message = $plugin->getError();
			return false;
		}

		if( !$this->callBeforeLoginEvent( $info ) ) {
			return false;
		}

		if( Security::extIdField() ) {
			// check if the user already has a record in the users table. Create new record if needed
			$dbUserData = Security::fetchUpdateDatabaseUser( $info, $addNewUser );
			$data = $dbUserData["data"];
			if( !$data ) {
				$this->message = $dbUserData["errorMessage"] ? $dbUserData["errorMessage"] : "Database error";
				return false;
			}
		} else {
			$data = array();
			$data[ Security::emailField() ? Security::emailField() : "email" ] = $info[ "email" ];
			$data[ Security::fullnameField() ? Security::fullnameField() : "name" ] = $info[ "name" ];
			$data[ Security::userpicField() ? Security::userpicField() : "picture" ] = $info[ "picture" ];
		}

		$this->loggedWithSP = true;

		Security::createUserSession( $provider, $info["id"], $info[ "name" ], $data );
		Security::auditLoginSuccess();
		$this->callAfterSuccessfulLoginEvent( $info["id"], $data[ Security::passwordField() ], $data );

		return true;
	}


	/**
	 * @return String
	 */
	function getCaptchaId()
	{
		return "login";
	}

	/**
	 * @param String messageText
	 */
	public function setDatabaseError( $messageText )
	{
		$this->message = $messageText;
	}

	/**
	 * calc some checksum of the two factor settings
	 */
	protected function remeberMachineChecksum() {
		$twofSettings =& Security::twoFactorSettings();
		$elements = array();
		$data =& Security::currentUserData();
		if( !$data ) {
			return false;
		}
		$elements[] = $data[ $twofSettings["twoFactorField"] ];
		$elements[] = $data[ $twofSettings["phoneField"] ];
		$elements[] = $data[ $twofSettings["emailField"] ];
		$elements[] = $data[ $twofSettings["codeField"] ];
		return implode( '', $elements );
	}


	/**
	 * This function is supposed to be called with $success=true after session elevation
	 */
	public function setRememberMachineCookie( $success = true )
	{
		//	set jwt cookie
		$twofSettings =& Security::twoFactorSettings();
		if( $success && $this->rememberMachine && $twofSettings["remember"] ) {
			$secondsIn30 = 30 * 1440 * 60;
			setProjectCookie("2ftoken", jwt_encode( array(
				"2fusername" => Security::getUserName(),
				"host" => projectHost(),
				"checksum" => getPasswordHash( $this->remeberMachineChecksum() )
			), $secondsIn30 ), time() + $secondsIn30, true );
		} else {
			setProjectCookie("2ftoken", "", time() - 1, true );
		}
	}

	public function verifyRememberMachineCookie( $jwt ) {
		$twofSettings =& Security::twoFactorSettings();
		if( !$twofSettings["remember"] ) {
			return false;
		}
		$payload = jwt_verify_decode( $jwt );
		if( !$payload )
			return false;
		return $payload["2fusername"] === Security::provisionalUsername()
			&& passwordVerify( $this->remeberMachineChecksum(), $payload["checksum"] );
	}


	/**
	 *
	 */
	public function setLangParams()
	{
	}

	/**
	 *
	 */
	protected function assignBody()
	{
		global $pagesData;
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		$this->body["begin"] .= "<form method=\"post\" action='".GetTableLink("login", "", "page=".rawurlencode( $this->pageName ))."' ".
								"id=\"form".$this->id."\" name=\"form".$this->id."\">"
									."<input type=\"hidden\" name=\"btnSubmit\" value=\"Login\">";
		$this->body["end"] .= "</form>";

		$this->body['end'] .= '<script>';
		$this->body['end'] .= "window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";";
		$this->body['end'] .= "window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";";
		$this->body['end'] .= "Runner.applyPagesData( ".my_json_encode( $pagesData )." );";
		$this->body['end'] .= "window.settings = ".my_json_encode($this->jsSettings).";</script>";

		$this->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js?39925")."\"></script>";
		$this->body["end"] .= '<script>'.$this->PrepareJS()."</script>";

		$this->xt->assignbyref("body", $this->body);
	}

	/**
	 *
	 */
	protected function assignSPButtons()
	{
		if ( $this->twoFactAuth )
			return;

		$this->xt->assign("facebookbutton", true);
		$this->xt->assign("google_signin", true);

		if( GetEmailField() )
			$this->xt->assign("fb_loginbutton_params", " data-scope=\"email\" ");
	}

	/**
	 *
	 */
	public function doCommonAssignments()
	{
		$this->xt->assign("loginlink_attrs", 'id="submitLogin'.$this->id.'"');

		$this->assignSPButtons();

		$this->setLangParams();

		$rememberbox_checked = "";
		if( $this->rememberPassword )
			$this->xt->assign("rememberbox_attrs", "checked" );

		$this->xt->assign( "guestlink_block", $this->mode == LOGIN_SIMPLE && Security::guestLoginAvailable() );

		$this->xt->assign("username_label", true);
		$this->xt->assign("password_label", true);


		if( $this->is508 && !$this->isBootstrap() )
		{
			$this->xt->assign_section("username_label", "<label for=\"username\">", "</label>");
			$this->xt->assign_section("password_label", "<label for=\"password\">", "</label>");
		}


		if( strlen( $this->var_pUsername ) )
		{
			$this->xt->assign("username_attrs",($this->is508? "id=\"username\" " : "")
				."value=\"".runner_htmlspecialchars($this->var_pUsername)."\"");
		}
		else if ( !$this->twoFactAuth )
		{
			$this->xt->assign("username_attrs",($this->is508 ? "id=\"username\" " : ""));
		}

		else if ( !$this->twoFactAuth )
		{
			$this->xt->assign("password_attrs", ($this->is508 ? " id=\"password\"": ""));
		}

		if( $this->myurl && $_SESSION["MyUrlAccess"] )
			$this->xt->assign("guestlink_attrs", "href=\"".$this->myurl."\"");
		else
			$this->xt->assign("guestlink_attrs", "href=\"".GetTableLink("menu")."\"");



		$this->xt->assign("main_loginfields", true);
		$this->xt->assign("signin_button", true);
		$this->xt->assign("login_logo", true );

		if( $this->mode == LOGIN_POPUP )
		{
			if( $this->restore && Security::userSessionLevel() === LOGGED_FULL && !Security::isGuest() ) {
				$continuebutton_attrs = 'href="#" id="continueButton"';

				if ( $this->getLayoutVersion() !== PD_BS_LAYOUT )
					$continuebutton_attrs .= 'style="display:none"';

				$this->xt->assign("continuebutton_attrs", $continuebutton_attrs);
				$this->xt->assign("continue_button", true);

				$this->hideMainLoginItems();
				$this->hideTwoFactorItems();
				$this->message = mlang_message("SUCCES_LOGGED_IN");
				$this->messageType = MESSAGE_INFO;
			}

			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);

			$this->xt->assign("registerlink_attrs", 'name="RegisterPage" data-table="'.runner_htmlspecialchars( Security::loginTable() ).'"');
			$this->xt->assign("forgotpasswordlink_attrs", 'name="ForgotPasswordPage"');
			$this->xt->assign("login_logo", false );
		}

		if( $this->message || $this->mode == LOGIN_POPUP || $this->twoFactAuth || $this->securityPlugins )
		{
			$this->xt->assign("message_block", true);
			$this->xt->assign("message",  $this->message );

			if( $this->isBootstrap() )
				$this->xt->assign("message_class", $this->messageType == MESSAGE_INFO ? "alert-success" : "alert-danger" );

			if( !$this->message )
				$this->hideElement("message");
		}

		$twofSettings =& Security::twoFactorSettings();
		if( !$twofSettings["remember"] ) {
			$this->hideItemType("remember_machine");
		}
	}

	/**
	 * Show the page
	 */
	public function showPage()
	{
		global $globalEvents;

		if( $globalEvents->exists("BeforeShowLogin") )
			$globalEvents->BeforeShowLogin($this->xt, $this->templatefile, $this);

		// load popup login page
		if( $this->mode == LOGIN_POPUP ) {
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		if( $this->mode == LOGIN_SIMPLE )
			$this->assignBody();

		$this->display( $this->templatefile );
	}

	/**
	 * @return Number
	 */
	public static function readLoginModeFromRequest()
	{
		$pageMode = postvalue("mode");

		if( $pageMode == "popup" )
			return LOGIN_POPUP;

		return LOGIN_SIMPLE;
	}

	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{
		$action = postvalue("a");

		if( $action )
			return $action;

		return @$_POST["btnSubmit"];
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "login_message" );
		} else if( $name == "bsloginregister" ) {
			return array( 'login_remind', 'loginform_register_link' );
		}
		return parent::element2Item( $name );
	}

	function createProjectSettings() {
		$loginTable = Security::loginTable();
		$table = $this->tName;	// GLOBAL_PAGES
		if( GetTableURL( $loginTable ) ) {
			//	users table is added tothe project
			$table = $loginTable;
		}
		$this->pSet = new ProjectSettings($table, $this->pageType, $this->pageName, $this->pageTable );
		/**
		 * Page type here has priority over page name. If supplied pageName is not compatible with the pageType, ignore the former.
		 * ATTENTION! It is not so in the PageSettings class. On the opposite, pageName has priority there.
		 */
		if( $this->pSet->getPageType() !== $this->pageType ) {
			$this->pSet = new ProjectSettings($table, $this->pageType, null, $this->pageTable );
		}
	}

	protected function prepareEditControls()
	{
		if( Security::userSessionLevel() === LOGGED_2F_PENDING )
			return;

		/*if( $this->mode == LOGIN_EMBEDED )
			return;*/

		$defvalues = $this->controlsData;
		$controlFields = $this->pSet->getPageFields();

		foreach( $controlFields as $fName )
		{
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["value"] = $defvalues[ $fName ];
			$parameters["pageObj"] = $this;

			$this->xt->assign_function( GoodFieldName( $fName )."_editcontrol", "xt_buildeditcontrol", $parameters );

			if( $this->pSet->isUseRTE( $fName ) )
				$_SESSION[ $this->sessionPrefix."_".$fName."_rte" ] = $defvalues[ $fName ];

			$firstElementId = $this->getControl( $fName, $this->id )->getFirstElementId();
			if( $firstElementId )
				$this->xt->assign("labelfor_" . goodFieldName( $fName ), $firstElementId);


			$controls = array();
			$controls["controls"] = array();
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["mode"] = "add";
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]["fieldName"] = $fName;

			$preload = $this->fillPreload( $fName, $controlFields, $defvalues );
			if( $preload !== false )
			{
				$controls["controls"]["preloadData"] = $preload;
				if( !$defvalues[ $fName ] && count( $preload["vals"] ) > 0 )
					$defvalues[ $fName ] = $preload["vals"][0];
			}

			$this->fillControlsMap( $controls );
			$this->fillControlFlags( $fName );

			// fill special settings for a time picker
			if( $this->pSet->getEditFormat( $fName ) == "Time" )
				$this->fillTimePickSettings( $fName, $defvalues[ $fName ] );
		}
	}

	/**
	 * read values from page's controls
	 */
	protected function readControls()
	{
		$avalues = array();
		$blobfields = array();
		$filename_values = array();

		foreach( $this->pSet->getPageFields() as $f )
		{
			$control = $this->getControl( $f, $this->id );
			$control->readWebValue( $avalues, $blobfields, NULL, NULL, $filename_values );
		}

		foreach( $avalues as $f => $value )
		{
			// skip blob fields
			if( !in_array( $f, $blobfields ) )
				$this->controlsData[ $f ] = $value;
		}
	}

	/**
	 * Get where from added page's controls
	 */
	protected function getControlsWhere( $cipherer )
	{
		if( !$this->controlsData )
			return "";

		$controlsWhereParts = array();
		foreach( $this->controlsData as $f => $value )
		{
			// prepare_for_db has been already applied in Contol::readWebValue
			$_value = $cipherer->MakeDBValue( $f, $value, "", true );
			$controlsWhereParts[] = $this->getFieldSQLDecrypt( $f ) . ' = ' . $_value;
		}

		return " and " . implode( " and ", $controlsWhereParts );
	}

	/**
	 * Remove excessive validation for page.
	 * Unset "DenyDuplicated" for login controls
	 */
	protected function refineVaidationData( &$fData )
	{
		if( $fData && $fData["basicValidate"] )
		{
			$denyPos = array_search( "DenyDuplicated", $fData["basicValidate"] );
			if( $denyPos !== FALSE )
				array_splice( $fData["basicValidate"], $denyPos, 1 );
		}

		if( $fData && $fData["customMessages"] )
			unset( $fData["customMessages"]["DenyDuplicated"] );

		return $fData;
	}

	protected function hasProvisionalSession() {
		$sessionLevel = Security::userSessionLevel();
		return $sessionLevel == LOGGED_2F_PENDING || $sessionLevel == LOGGED_ACTIVATION_PENDING;
	}


	/**
	 * send an email with activation link
	 */
	protected function resendActivation() {

		$uData = Security::currentUserData();
		$email = $uData[ Security::emailField() ];
		$username = $uData[ Security::usernameField() ];


		$activationCode = Security::getActivationCode(
				$email,
				$uData[ Security::passwordField() ],
				$this->cipherer
			);

		$data = array();
		$data["activateurl"] = $this->getUserActivationUrl( $username, $activationCode );

		foreach( $this->pSet->getPageFields() as $f ) {
			$data[ GoodFieldName( $f . "_value" ) ] = $uData[ $f ];
		}

		$data["email_value"] = $email;
		$data[ GoodFieldName( Security::usernameField() . "_value" ) ] = $username;
		$data[ GoodFieldName( Security::emailField() . "_value" ) ] = $email;

		$html = isEmailTemplateUseHTML("userregister");
		$sent = RunnerPage::sendEmailByTemplate( $email, "userregister", $data, $html );
		if( !$sent["mailed"] ) {
			$this->message = $sent["message"];
			$this->messageType = MESSAGE_ERROR;
		} else {
			$this->message = str_replace( "%email%", runner_htmlspecialchars( $email ), mlang_message( "REGISTER_ACTIVATE" ) );
			$this->messageType = MESSAGE_INFO;
		}
	}

	/**
	 * Returns current security provider when there is any
	 */
	protected function currentProvider() {
		if( Security::hardcodedLogin() ) {
			$providers =& Security::providersByType( stHARDCODED );
			return $providers[0];
		}
		if( $this->providerCode ) {
			$provider = Security::findProvider( $this->providerCode );
			if( $provider ) {
				return $provider;
			}
		}
		return Security::defaultProvider();
	}
}
?>