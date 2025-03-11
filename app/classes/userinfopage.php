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

		if( $this->action == "save2f" ) {
			$this->process2f();
			return;
		}

		if( $this->action == "confirm2f" ) {
			$this->confirm2f();
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

		$templateFile = $this->templatefile;
		if( $globalEvents->exists("BeforeShowUserinfo") )
			$globalEvents->BeforeShowUserinfo( $this->xt, $templateFile, $this->getCurrentrecordInternal(), $this );

		$this->display( $this->templatefile );
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
		$this->xt->assign( "twof_". Security::twoFactorMethod( $userOption )."_attrs", "checked" );

		if( Security::twoFactorEnabled( $userOption ) ) {
			$this->xt->assign("twof_enable_attrs", "checked");
		}

		if( $this->mode == USERINFO_SIMPLE ) {
			$this->xt->assign( "twof_save_attrs", "disabled" );
		}

		if( Security::userSessionLevel() !== LOGGED_2FSETUP_PENDING ) {
			$this->pageData["saved2fEnable"] = Security::twoFactorEnabled( $userOption );
			$this->pageData["saved2fMethod"] = Security::twoFactorMethod( $userOption );
			if( $this->pageData["saved2fMethod"] == "email" ) {
				$this->pageData["saved2fEmail"] = Security::twoFactorMethod( $data[ $twofSettings["emailField"] ] );
			}
			if( $this->pageData["saved2fMethod"] == "phone" ) {
				$this->pageData["saved2fPhone"] = Security::twoFactorMethod( $data[ $twofSettings["phoneField"] ] );
			}
		} else {
			$this->xt->assign("twof_enable_attrs", "checked");
		}

	}

	protected static function get2fDataFromRequest() {
		$enable = postvalue("enable");
		$method = postvalue("method");
		$email = postvalue("email");
		$phone = postvalue("phone");

		//	prepare 2FA data and save it to the session
		$twofData = new TwoFactorData;
		$twofData->enable = $enable;

		$twofData->method = $method;
		if( $method === "email" ) {
			$twofData->email = $email;
		} else if( $method === "phone" ) {
			$twofData->phone = $phone;
		} else if( $method !== "totp"  ) {
			//	unknown method, clear settings
			$twofData->enable = false;
		}
		return $twofData;
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

		$twofData->enable = Security::twoFactorEnabled( $userOption );
		$twofData->method = Security::twoFactorMethod( $userOption );
		$twofData->secret = $data[ $twofSettings["codeField"] ];
		$twofData->email = $data[ $twofSettings["emailField"] ];
		$twofData->phone = $data[ $twofSettings["phoneField"] ];
		return $twofData;

	}

	/**
	 * compare 2FA data values with those stored in the database and make adjustments
	 * fill in missing settings and set "confirmNeeded" flag
	 */
	protected function update2fAuthData( $twofData ) {

		//	turning off, no action needed
		if( !$twofData->enable ) {
			return;
		}
		$data = $this->getCurrentrecordInternal();
		$twofSettings =& Security::twoFactorSettings();

		$userOption = $data[ $twofSettings["twoFactorField"] ] + 0;
		if( !Security::twoFactorEnabled( $userOption ) ) {
			//	2FA was turned off, now being enabled.
			$twofData->confirmNeeded = true;
		}

		if( $twofData->method === "totp" ) {
			$twofData->secret = $data[ $twofSettings["codeField"] ];
			if( !validateTotpSecret( $twofData->secret ) ) {
				//	generate new TOTP secret if there was none
				$twofData->secret = generateTotpSecret();
				$twofData->confirmNeeded = true;
			}
		} else if( $twofData->method === "email" ) {
			$email = $data[ $twofSettings["emailField"] ];
			if( $email == "" || $twofData->email !== $email ) {
				//	email was changed, confirmation needed
				$twofData->confirmNeeded = true;
			}
		} else if( $twofData->method === "phone" ) {
			$phone = $data[ $twofSettings["phoneField"] ];
			if( $phone == "" || $twofData->phone !== $phone ) {
				//	phone number was changed, confirmation needed
				$twofData->confirmNeeded = true;
			}
		}
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
	protected function process2f() {

		//	CSRF protection
		if( !isPostRequest() )
			return;

		$twofData = UserInfoPage::get2fDataFromRequest();
		if( !$this->verify2fSettings( $twofData ) ) {
			return;
		}
		$this->update2fAuthData( $twofData );

		if( !$twofData->confirmNeeded ) {

			//	save data to the database
			$this->save2fData( $twofData );
			if( Security::userSessionLevel() != LOGGED_FULL ) {
				Security::elevateSession();
				Security::auditLoginSuccess();
				Security::callAfterLogin();
			}
			$this->send2fSuccess( $twofData );
			return;
		}

		//	save data to session, send code to the user
		$twofData->code = generateUserCode( GetGlobalData("smsCodeLength", 6) );

		storageSet( "2factor_update", $twofData->serialize() );

		//	send verification code to the user
		$this->send2fCode( $twofData );

		//	return data to browser
		$this->send2fConfirmRequest( $twofData );
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
	protected function send2fCode( $twofData ) {

		if( $twofData->method != "email" && $twofData->method != "phone" )
			return;
		$ret = Security::sendTwoFactorCode(
			$twofData->method,
			$twofData->method === "email"
				? $twofData->email
				: $twofData->phone,
			$twofData->code
		);
		if( !$ret["success"] ) {
			$this->send2fError( "Error sending message. " . $ret["message"] );
		}
	}

	/**
	 * send response data to client, order it display confirm prompt
	 */
	protected function send2fConfirmRequest( $twofData ) {
		$response = array(
			"status" => "confirm",
			"method" => $twofData->method
		);
		if( $twofData->method === 'totp' ) {
			//	otpauth://totp/Project1:username?secret=...&issuer=Project1
			$response["secret"] = $twofData->secret;
			$response["totpUrl"] = $this->getTotpUrl( $twofData->secret );
		} else if( $twofData->method === 'email' ) {
			$response["email"] = $twofData->email;
		} else if( $twofData->method === 'phone' ) {
			$response["phone"] = $twofData->phone;
		}
		echo my_json_encode( $response );
		exit();
	}

	/**
	 * inform user on successful 2FA settings update
	 */
	protected function send2fSuccess( $twofData ) {
		$response = array(
			"enable" => $twofData->enable,
			"status" => "saved",
			"method" => $twofData->method,
		);
		if( $twofData->method == "email" ) {
			$response["email"] = $twofData->email;
		}
		if( $twofData->method == "phone" ) {
			$response["phone"] = $twofData->phone;
		}
		if( $this->mode === USERINFO_2FACTOR ) {
			if( $_SESSION["MyURL"] ) {
				$response["redirect"] = $_SESSION["MyURL"];
			} else {
				$response["redirect"] = GetTableLink("menu");
			}
		}
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
	protected function confirm2f() {
		$code = postvalue( "code" );
		$twofData = TwoFactorData::deserialize( storageGet("2factor_update") );
		if( !$twofData ) {
			$this->send2fError( "Session is lost. Refresh the page and try again." );
		}
		if( !$this->verify2fCode( $twofData, $code ) ) {
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

	protected function verify2fCode( $twofData, $code ) {
		if( $twofData->method === "email" || $twofData->method === "phone" )  {
			return $twofData->code == $code;
		}
		if( $twofData->method === "totp" ) {
			return $code == calculateTotpCode( $twofData->secret );
		}
	}

	protected function save2fData( $twofData ) {
		$twofSettings =& Security::twoFactorSettings();

		$dc = $this->getSubsetDataCommand();
		if( !$twofData->enable ) {
			//	read current value to keep method as is
			$data = $this->getCurrentRecordInternal();
			$method = Security::twoFactorMethod( $data[ $twofSettings["twoFactorField"] ] );
		} else {
			$method = $twofData->method;
		}
		$data = $this->getCurrentRecordInternal();

		$dc->values[ $twofSettings["twoFactorField"] ] = Security::getTwoFactorValue( $twofData->enable, $method );

		if( $twofData->enable ) {
			if( $twofData->method === "email" ) {
				$dc->values[ $twofSettings["emailField"] ] = $twofData->email;
			} else if( $twofData->method === "phone" ) {
				$dc->values[ $twofSettings["phoneField"] ] = $twofData->phone;
			} else if( $twofData->method === "totp" ) {
				$dc->values[ $twofSettings["codeField"] ] = $twofData->secret;
			}
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
	 * whether enable or disable 2FA
	 * @var boolean
	 */
	public $enable;

	/**
	 * code to be sent to the user
	 * @var string
	 */
	public $code;


	public $method;

	public $secret;
	public $email;
	public $phone;

	public $confirmNeeded;

	public function serialize() {
		$ret = array();
		$ret["enable"] = $this->enable;
		$ret["code"] = $this->code;
		$ret["method"] = $this->method;
		$ret["secret"] = $this->secret;
		$ret["email"] = $this->email;
		$ret["phone"] = $this->phone;
		$ret["confirmNeeded"] = $this->confirmNeeded;
		return $ret;
	}

	public static function deserialize( $params ) {
		$ret = new TwoFactorData;
		RunnerApply($ret, $params);
		return $ret;
	}

}

?>