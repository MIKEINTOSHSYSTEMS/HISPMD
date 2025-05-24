<?php
require_once( getabspath("classes/editpage.php") );

class UserInfoPage extends EditPage {

	protected $cachedRecord = null;

	protected $newRecordData = array();
	protected $oldRecordData = array();

	protected $updatedSuccessfully = false;


	function __construct( &$params ) {
		parent::__construct( $params );
	}


	public static function processUserInfoPageSecurity( $table ) {
		if( !Security::providerUsersInDb( Security::currentProvider() ) ) {
			HeaderRedirect("menu");
		}

		Security::processLogoutRequest();
		$sessionLevel = Security::userSessionLevel();
		if( !Security::isGuest() && $sessionLevel === LOGGED_2FSETUP_PENDING ) {
			if( !Security::verifySafeCSRF() ) {
				return false;
			}
			return true;
		}

		Security::tryRelogin();
		if( isLogged() && !Security::isGuest() ) {
			return true;
		}
		if( Security::isGuest() ) {
			HeaderRedirect("menu");
			return false;
		}
		redirectToLogin();
		return false;
	}

	public function process() {
		global $globalEvents;

		if( $globalEvents->exists("BeforeProcessUserinfo") )
			$globalEvents->BeforeProcessUserinfo( $this );

		if( $this->action == "enable2f" ) {
			$this->enable2f( postvalue("method"), postvalue("value") );
			return;
		}
		if( $this->action == "disable2f" ) {
			$this->disable2f( postvalue( "method" ));
			return;
		}
		if( $this->action == "skip2f" ) {
			$this->skip2f();
			return;
		}
		if( $this->action == "prefer2f" ) {
			$this->prefer2f( postvalue( "method" ));
			return;
		}

		if( $this->action == "confirm2f" ) {
			$this->confirm2f( postvalue( "method" ), postvalue( "code" ) );
			return;
		}

		if( $this->action == "edited" && $this->mode === USERINFO_SIMPLE ) {
			$this->processDataInput();
			$this->reportFieldsSaveStatus();
			return;
		}

		if( $this->action == "generateSecret" ) {
			$this->regenerateTotp();
			return;
		}


		if( $this->pSet->hasCaptcha() )	{
			$this->displayCaptcha();
		}

		$this->prgReadMessage();

		$this->doCommonAssignments();
		$this->prepareBreadcrumbs();
		$this->prepareCollapseButton();

		$this->prepare2fControls();
		if( $this->mode === USERINFO_SIMPLE ) {
			$this->prepareReadonlyFields();
			$this->prepareEditControls();
		} else {
			$this->hideUserinfoItems();
		}

		$this->addButtonHandlers();

		$this->addCommonJs();

		$this->prepareTwoFactorData();

		$templateFile = $this->templatefile;
		if( $globalEvents->exists("BeforeShowUserinfo") )
			$globalEvents->BeforeShowUserinfo( $this->xt, $templateFile, $this->getCurrentrecordInternal(), $this );

		$this->display( $this->templatefile );
	}

	protected function prepareTwoFactorData() {
		$twofData = $this->loadTwofData();
		$this->pageData["twoFactorData"] = $twofData->serialize();
		$this->pageData["twoFactorSettings"] = Security::twoFactorSettings();

		$this->pageData["redirectUrl"] = $_SESSION["MyURL"]
			? $_SESSION["MyURL"]
			: GetTableLink("menu");
	}


	protected function regenerateTotp() {

		$twofData = $this->loadTwofData();
		$twofSettings =& Security::twoFactorSettings();
		if( !$twofSettings["available"] || !$twofSettings["types"]["totp"] ) {
			$this->send2fError( "TOTP authentication is not available" );
		}
		if( !$twofData->enable || $twofData->method != "totp" ) {
			$this->send2fError( "TOTP authentication is not enabled" );
		}
		$twofData->secret = generateTotpSecret();
		$twofData->confirmNeeded = true;
		storageSet( "2factor_update", $twofData->serialize() );

		//	return data to browser
		$this->send2fConfirmRequest( $twofData );
	}

	protected function buildNewRecordData() {

		// define temporary arrays. These are required for ASP conversion
		$evalues = array();
		$efilename_values = array();
		$blobfields = array();

		foreach( $this->pSet->getPageFields() as $f ) {
			// don't read username client value
			if ( $f == Security::usernameField() || $f == Security::extIdField())
				continue;

			$control = $this->getControl( $f, $this->id );
			$control->readWebValue( $evalues, $blobfields, NULL, NULL, $efilename_values );
		}

		foreach( $efilename_values as $ekey => $value ) {
			$evalues[ $ekey ] = $value;
		}

		$this->newRecordData = $evalues;
	}

	/**
	 * Process user data input and save it to the database table
	 */
	public function processDataInput() {
		global $globalEvents;

		//	CSRF protection
		if( !isPostRequest() )
			return false;

		$this->buildNewRecordData();

		if( !$this->recheckUserPermissions() ) {
			//	prevent the page from reading database values
			$this->oldRecordData = $this->newRecordData;
			$this->cachedRecord = $this->newRecordData;
			return false;
		}

		$this->oldRecordData = $this->getFieldControlsData();

		if( !$this->checkCaptcha() )
			return false;

		$dcUpdate = $this->getUpdateDataCommand();
		$prep = $this->dataSource->prepareSQL( $dcUpdate );
		$userInfoWhere = $prep["where"];

		if( $globalEvents->exists("BeforeEditUserinfo") ) {
			$usermessage = "";

			$ret = $globalEvents->BeforeEditUserinfo(
				$this->newRecordData,
				$userInfoWhere,
				$this->oldRecordData,
				$usermessage,
				$this
			);

			if( $usermessage != "" )
				$this->setMessage( $usermessage );

			if( !$ret )
				return false;
		}

		if( !$this->checkDeniedDuplicatedValues() )
			return false;

		$this->updatedSuccessfully = $this->dataSource->updateSingle( $dcUpdate, false );
		if( !$this->updatedSuccessfully ) {
			$this->setDatabaseError( $this->dataSource->lastError() );
			return false;
		}
		$this->auditLog( $dcUpdate->values );

		// clear cached record
		$this->cachedRecord = null;

		$this->ProcessFiles();

		$this->setSuccessfulEditMessage();

		Security::refreshUserdata();
		Security::refreshDisplayName();

		$this->callAfterSuccessfulSave();

		if( $globalEvents->exists("AfterEditUserinfo") ) {
			// Add missing values from oldRecordData to newRecordData
			foreach( $this->oldRecordData as $f => $v ) {
				if( !isset( $this->newRecordData[ $f ] ) )
					$this->newRecordData[ $f ] = $v;
			}

			$globalEvents->AfterEditUserinfo(
				$this->newRecordData,
				$userInfoWhere,
				$this->oldRecordData,
				$this
			);
		}

		return true;
	}

	/**
	 * @param String message
	 */
	public function setDatabaseError( $message )
	{
		if( $this->mode != EDIT_INLINE )
			$this->message = "<strong>"."Record was NOT edited"."</strong><br><br>".$message;
		else
			$this->message = "Record was NOT edited".". ".$message;

		$this->messageType = MESSAGE_ERROR;
	}
	
	/**
	 * Set a successful update message
	 */
	protected function setSuccessfulEditMessage()
	{
		if( $this->isMessageSet() )
			return;

		$this->messageType = MESSAGE_INFO;
		$this->setMessage( "<strong>"."User profile updated"."</strong>" );

		$_SESSION["message_userinfo"] = $this->message . "";
		$_SESSION["message_userinfo_type"] = $this->messageType;
	}

	/**
	 * Check if updated data contains duplicated values
	 * @return Boolean
	 */
	protected function checkDeniedDuplicatedValues() {
		return $this->checkDeniedDuplicatedForUpdate( $this->oldRecordData, $this->newRecordData );
	}


	public function getUpdateDataCommand() {
		$dc = $this->getSubsetDataCommand();
		$dc->values = &$this->newRecordData;
		return $dc;
	}

	/**
	 *	Call each control's afterSuccessfulSave method
	 */
	protected function callAfterSuccessfulSave() {
		foreach( $this->getPageFields() as $f ) {
			$this->getControl( $f, $this->id )->afterSuccessfulSave();
		}
	}

	/**
	 * send updated data to client
	 */
	protected function reportFieldsSaveStatus() {
		$returnJSON = array();
		$returnJSON['success'] = $this->updatedSuccessfully;
		$returnJSON['message'] = $this->message;

		if( !$this->isCaptchaOk )
			$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();

		if( $this->updatedSuccessfully ) {
			$data = $this->getFieldControlsData();
			if( !$data )
				$data = $this->newRecordData;

			foreach( $this->pSet->getPageFields() as $f ) {
				if( !IsBinaryType( $this->pSet->getFieldType( $f ) ) )
					$controlValues[ $f ] = $data[ $f ];
			}

			$returnJSON['controlValues'] = $controlValues;
		}

		echo printJSON( $returnJSON );
		exit();
	}

	protected function prgReadMessage()
	{
		if( !$this->isSimpleMode() || !isset($_SESSION["message_userinfo"]) )
			return;

		$this->setMessage( $_SESSION["message_userinfo"] );
		$this->messageType = $_SESSION["message_userinfo_type"];

		unset($_SESSION["message_userinfo"]);
	}

	public function getCurrentRecordInternal() {
		if( !is_null( $this->cachedRecord ) )
			return $this->cachedRecord;

		$dc = $this->getSubsetDataCommand();

		$fetchedArray = $this->dataSource->getSingle( $dc )->fetchAssoc();
		$this->cachedRecord = $this->cipherer->DecryptFetchedArray( $fetchedArray );

		return $this->cachedRecord;
	}

	function getDataSourceFilterCriteria( $ignoreFilterField = "" ) {
		return Security::currentUserCondition();
	}

	protected function doCommonAssignments() {

		$this->headerCommonAssign();
		$this->setLangParams();

		//	display message
		$this->xt->assign("message_block", true);
		if( $this->isMessageSet() )
		{
			$this->xt->assign("message", $this->message );
			$this->xt->assign("message_class", $this->messageType == MESSAGE_ERROR ? "alert alert-danger" : "alert alert-success" );
		}
		else
		{
			$this->hideElement("message");
		}

		//	body["end"]	- this assignment is very important
		$this->assignFieldBlocksAndLabels();
		$this->assignBody();
	}

	protected function getFieldControlValues()
	{
		return $this->getFieldControlsData();
	}

	public function getEditFormat( $fName, $pSet = null ) {
		if( $fName == Security::usernameField() || $fName == Security::extIdField() ) {
			return EDIT_FORMAT_READONLY;
		}
		return parent::getEditFormat( $fName, $pSet );
	}


	public function prepareEditControls() {
		//	prepare values
		$data = $this->getFieldControlValues();

		foreach( $this->pSet->getPageFields() as $fName ) {
			$this->prepareEditControl( $fName, $data );
		}

		//	prepare userpic control?
	}

	public function getFieldControlsData() {
		return $this->getCurrentRecordInternal();
	}

	protected function recheckUserPermissions() {
		return true;
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "fields_message" );
		}
		return parent::element2Item( $name );
	}

	protected function prepare2fControls() {
		if( !Security::twoFactorAvailable() )
			return;
		$data = $this->getCurrentRecordInternal();
		if( !$data ) {
			return;
		}
		$this->hideItemType( 'twofactor_setup_comment' );

		$twofSettings = &Security::twoFactorSettings();
		$this->xt->assign( "twof_phone_value", $data[ $twofSettings["phoneField"] ] );
		$this->xt->assign( "twof_email_value", $data[ $twofSettings["emailField"] ] );

		$userOption = $data[ $twofSettings["twoFactorField"] ] + 0;
		$settings =& Security::twoFactorSettings();
		$enabledMethods = Security::twoFactorEnabledMethods( $userOption );
		$preferred = Security::twoFactorPreferredMethod( $userOption );

		foreach( Security::twoFactorAllMethods() as $m ) {
			
			if( Security::twoFactorMethodEnabled( $userOption, $m ) ) {
				$this->xt->assign( "twof_enabled".$m, true );
				if( $settings["required"] && count($enabledMethods) == 1 ) {
					$this->xt->assign( "twof_required".$m, true );
				}
			}
			if( $m == $preferred ) {
				$this->xt->assign( "twof_preferred".$m, true );
			}

		}

		if( Security::userSessionLevel() == LOGGED_2FSETUP_PENDING ) {
			$this->xt->assign( "twofactor_continue", true );
			if( !$twofSettings["required"] ) {
				$this->xt->assign( "twofactor_skip", true );
			}
			if( count( $enabledMethods ) ) {
				$this->hideItemType("twofactor_skip");
			} else {
				$this->hideItemType("twofactor_continue");
			}
		} 

	}


	/**
	 * Load current settings from the database
	 * @return TwoFactorData
	 */
	protected function loadTwofData() {

		$data = $this->getCurrentrecordInternal();
		if( !$data ) {
			return null;
		}
		$twofSettings =& Security::twoFactorSettings();

		$twofData = new TwoFactorData;

		$userOption = $data[ $twofSettings["twoFactorField"] ] + 0;

		$twofData->methods = Security::twoFactorEnabledMethods( $userOption );
		$twofData->preferred = Security::twoFactorPreferredMethod( $userOption );
		$twofData->secret = $data[ $twofSettings["codeField"] ];
		$twofData->email = $data[ $twofSettings["emailField"] ];
		$twofData->phone = $data[ $twofSettings["phoneField"] ];
		$twofData->required = $twofSettings["required"];
		return $twofData;

	}


	/**
	 * Verify if user input conflicts with project 2FA settings
	 */
	protected function verify2fSettings( $twofData ) {

		$twofSettings =& Security::twoFactorSettings();

		if( $twofData->enable && !$twofSettings["types"][ $twofData->method ]) {
			$this->send2fError( "Unsupported authentication type" );
			return false;
		}

		if( !$twofData->enable && $twofSettings["required"] ) {
			$twofData->enable = true;
		}
		return true;
	}

	/**
	 * 	read 2FA data from the request and save it to the session
	 */
	protected function enable2f( $method, $data ) {

		//	CSRF protection
		if( !isPostRequest() )
			return;

		if( !Security::twoFactorMethodAvailable($method) ) {
			echo "unknown two factor authentication method";
			exit();
		}
		if( $method != TWOFACTOR_APP && !$data ) {
			echo "no phone number or email provided";
			exit();
		}


		$twofData = $this->loadTwofData();

		if( $method == TWOFACTOR_APP ) {
			$twofData->secret = generateTotpSecret();
		} else if( $method == TWOFACTOR_EMAIL ) {
			$twofData->email = $data;
		} else if( $method == TWOFACTOR_PHONE ) {
			$twofData->phone = $data;
		}

		$twofData->methods[ $method ] = true;
		$twofData->code = generateUserCode( GetGlobalData("smsCodeLength", 6) );
		global $debug2Factor;
		if( $debug2Factor ) {
			$twofData->code = 333;
		}
		//	save data to session, send code to the user
		storageSet( "2factor_update", $twofData->serialize() );

		//	send verification code to the user
		$this->send2fCode( $method, $data, $twofData->code );

		//	return data to browser
		$this->send2fConfirmRequest( $method, $twofData );
	}


	protected function skip2f() {

		//	CSRF protection
		if( !isPostRequest() )
			return;
		
		$twofSettings =& Security::twoFactorSettings();
		if( !$twofSettings["required"] && Security::userSessionLevel() == LOGGED_2FSETUP_PENDING ) {
			$twofData = $this->loadTwofData();
			Security::elevateSession();
			Security::auditLoginSuccess();
			Security::callAfterLogin();
			$this->send2fSuccess( $twofData );
		} else {
			$this->send2fError("Two factor authentication is required");
		}
	}

	protected function disable2f( $method ) {

		//	CSRF protection
		if( !isPostRequest() )
			return;

		$twofData = $this->loadTwofData();
		unset( $twofData->methods[ $method ] );
		$this->save2fData( $twofData );
		$this->send2fSuccess( $twofData );
	}

	protected function prefer2f( $method ) {
		//	CSRF protection
		if( !isPostRequest() )
			return;
		$twofData = $this->loadTwofData();
		$twofData->preferred = Security::twoFactorPreferredMethod( 
			Security::getTwoFactorValue( $twofData->methods, $method )
		);
		$this->save2fData( $twofData );
		$this->send2fSuccess( $twofData );
	}



	protected function send2fError( $message, $status = 'error' ) {
		echo my_json_encode( array(
			"status" => $status,
			"message" => $message
		));
		exit();
	}

	/**
	 * send email or txt message with the code
	 */
	protected function send2fCode( $method, $data, $code ) {

		if( $method != TWOFACTOR_EMAIL && $method != TWOFACTOR_PHONE )
			return;
		$ret = Security::sendTwoFactorCode(
			$method,
			$data,
			$code
		);
		if( !$ret["success"] ) {
			$this->send2fError( "Error sending message. " . $ret["message"] );
		}
	}

	/**
	 * send response data to client, order it display confirm prompt
	 */
	protected function send2fConfirmRequest( $method, $twofData ) {
		$response = array(
			"status" => "confirm",
			"method" => $method
		);
		if( $method == TWOFACTOR_APP  ) {
			//	otpauth://totp/Project1:username?secret=...&issuer=Project1
			$response["secret"] = $twofData->secret;
			$response["totpUrl"] = $this->getTotpUrl( $twofData->secret );
		} else if( $method == TWOFACTOR_EMAIL ) {
			$response["email"] = $twofData->email;
		} else if( $method == TWOFACTOR_PHONE ) {
			$response["phone"] = $twofData->phone;
		}
		echo my_json_encode( $response );
		exit();
	}

	/**
	 * inform user on successful 2FA settings update
	 */
	protected function send2fSuccess( $twofData ) {
		$twofData->preferred = Security::twoFactorPreferredMethod( 
			Security::getTwoFactorValue( $twofData->methods, $twofData->preferred )
		);
		$response = array(
			"status" => "saved",
			"twoFactorData" => $twofData->serialize()
		);
		echo my_json_encode( $response );
		exit();
	}

	protected function getTotpUrl( $secret ) {
		$twofSettings =& Security::twoFactorSettings();
		$encodedProjectName = rawurlencode( $twofSettings["projectName"] );
		$encodedUsername = rawurlencode( $this->getUserName() );
		$encodedSecret = rawurlencode( $secret );
		return "otpauth://totp/" . $encodedProjectName . ":".$encodedUsername."?secret=". $encodedSecret ."&issuer=" . $encodedProjectName;
	}

	/**
	 * Check user-entered code against the one saved in session.
	 * Save new values in the database
	 */
	protected function confirm2f( $method, $code ) {
		$twofData = TwoFactorData::deserialize( storageGet("2factor_update") );
		if( !$twofData ) {
			$this->send2fError( "Session is lost. Refresh the page and try again." );
		}
		if( !$this->verify2fCode( $method, $twofData, $code ) ) {
			//	just wrong code, ask to reype
			$this->send2fError( "Wrong code", 'wrong' );
		}

		//	save data in the database
		$this->save2fData( $twofData );
		if( Security::userSessionLevel() != LOGGED_FULL ) {
			Security::elevateSession();
			Security::auditLoginSuccess();
			Security::callAfterLogin();
		}
		$this->send2fSuccess( $twofData );
	}

	protected function verify2fCode( $method, $twofData, $code ) {
		if( $method == TWOFACTOR_EMAIL || $method == TWOFACTOR_PHONE )  {
			return $twofData->code == $code;
		}
		if( $method == TWOFACTOR_APP ) {
			return $code == calculateTotpCode( $twofData->secret );
		}
	}

	protected function save2fData( $twofData ) {
		$twofSettings =& Security::twoFactorSettings();

		$dc = $this->getSubsetDataCommand();

		$dc->values[ $twofSettings["twoFactorField"] ] = Security::getTwoFactorValue( $twofData->methods, $twofData->preferred );

		if( $twofData->methods[ TWOFACTOR_EMAIL] ) {
			$dc->values[ $twofSettings["emailField"] ] = $twofData->email;
		}
		if( $twofData->methods[ TWOFACTOR_PHONE ] ) {
			$dc->values[ $twofSettings["phoneField"] ] = $twofData->phone;
		}
		if( $twofData->methods[ TWOFACTOR_APP] ) {
			$dc->values[ $twofSettings["codeField"] ] = $twofData->secret;
		}
		
		if( !$this->dataSource->updateSingle( $dc, false ) ) {
			$this->send2fError( $this->dataSource->lastError() );
		}
		$this->auditLog( $dc->values );
		Security::refreshUserdata();

	}

	function addCommonJs()
	{
		parent::addCommonJs();
		$this->AddJSFile("include/qrcode/qrcode2.js");
		$this->AddJSFile("include/qrcode/jquery.qrcode.js");
	}

	protected function getUserName() {
		$sessionLevel = Security::userSessionLevel();
		if( $sessionLevel === LOGGED_FULL ) {
			return Security::getUserName();
		}
		return Security::provisionalUsername();

	}

	public static function readPageModeFromRequest() {
		if( postvalue("mode") == '2factor' || Security::userSessionLevel() == LOGGED_2FSETUP_PENDING ) {
			return USERINFO_2FACTOR;
		}
		return USERINFO_SIMPLE;
	}

	/**
	 * Hide all items not needed for 2factor authentication setup
	 */
	protected function hideUserinfoItems() {
		$this->hideAllFormItems( 'grid' );
		$this->showItemType( 'twofactor_label' );
		if( Security::userSessionLevel() === LOGGED_2FSETUP_PENDING ) {
			$this->showItemType( 'twofactor_setup_comment' );
		} else {
			$this->showItemType( 'twofactor_comment' );
		}

		$this->showItemType( 'twofactor_settings' );

	}

	public function setTemplateFile() {
		return RunnerPage::setTemplateFile();
	}

	protected function prepareBreadcrumbs() {
		$this->xt->assign( "breadcrumb", true );
		$this->xt->assign( "crumb_home_link", runner_htmlspecialchars( GetLocalLink("menu") ) );

		$crumb = array();
		$crumb["crumb_title_span"] = true;
		$crumb["crumb_title"] = $this->getPageTitle( $this->pageType, $this->tName, $this->pSet );
		$breadcrumb = array( $crumb );
		$this->xt->assign_loopsection( "crumb", $breadcrumb );
	}

	public function auditLog( $values ) {
		$audit = GetAuditObject();
		if( !$audit ) {
			return;
		}
		$keys = array( Security::currentUserIdField() => Security::getUserId() );
		$values[ Security::currentUserIdField() ] = Security::getUserId();
		$audit->LogEdit( Security::loginTable(), $values, Security::currentUserData(), $keys );
	}

	public function getSingleRecordCommand() {
		return $this->getSubsetDataCommand();
	}

	function createProjectSettings() {
		$this->pSet = new ProjectSettings( $this->tName, $this->pageType, $this->pageName, $this->pageTable );
	}
}

class TwoFactorData {
	/**
	 * code to be sent to the user
	 * @var string
	 */
	public $code;


	public $methods;
	public $preferred;

	public $secret;
	public $email;
	public $phone;
	public $required;


	public function serialize() {
		$ret = array();
		$ret["code"] = $this->code;
		$ret["methods"] = $this->methods;
		$ret["preferred"] = $this->preferred;
		$ret["secret"] = $this->secret;
		$ret["email"] = $this->email;
		$ret["phone"] = $this->phone;
		$ret["required"] = $this->required;
		return $ret;
	}

	public static function deserialize( $params ) {
		$ret = new TwoFactorData;
		RunnerApply($ret, $params);
		return $ret;
	}

}

?>