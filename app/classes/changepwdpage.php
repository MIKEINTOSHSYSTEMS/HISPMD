<?php
class ChangePasswordPage extends RunnerPage
{
	protected $pwdStrong = false;

	public $token = "";

	public $action;

	protected $passwordField;
	protected $usernameField;

	protected $auditObj = null;

	protected $changePwdFields;

	protected $changedSuccess = false;

	/**
	 *
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);

		if( !$this->action && !$this->checkToken() )
		{
			Security::saveRedirectURL();
			HeaderRedirect("login");
			return;
		}

		$this->passwordField = Security::passwordField();
		$this->usernameField = Security::usernameField();

		$this->auditObj = GetAuditObject();

		if( $this->token )
		{
			$this->changePwdFields = array("newpass", "confirm");
			// to send it back with a form (user may delete session before submit)
			$this->setProxyValue("token", $this->token);
		}
		else
			$this->changePwdFields = array("oldpass", "newpass", "confirm");

		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);

		if( $this->pwdStrong )
		{
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}

		$this->headerForms = array( "top" );
		$this->footerForms = array( "footer" );
		$this->bodyForms = array( "above-grid", "grid" );
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();
	}

	/**
	 *
	 */
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}

	/**
	 *
	 */
	protected function setReferer()
	{
		$referer = @$_SERVER["HTTP_REFERER"] != ""
				&& strpos($_SERVER["HTTP_REFERER"], GetTableLink("changepwd")) != strlen($_SERVER["HTTP_REFERER"]) - strlen(GetTableLink("changepwd"))
				? $_SERVER["HTTP_REFERER"] : "";

		if( !isset($_SESSION["changepwd_referer"]) )
			$_SESSION["changepwd_referer"] = $referer != "" ? $referer : GetTableLink("menu");
		else if( $referer != "" )
			$_SESSION["changepwd_referer"] = $referer;
	}

	/**
	 * @return DsCondition
	 */
	protected function getTokenCondition() {
		return DataCondition::FieldEquals( "˂Create new˃", $this->token );
	}

	/**
	 * @return DsCondition
	 */
	protected function getUsernameCondition() {
		if( $this->token ) {
			return $this->getTokenCondition();
		}

		$caseInsensitive = Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT;
		return DataCondition::FieldEquals( $this->usernameField, Security::getUserName(), 0, $caseInsensitive );
	}

	/**
	 * @param String newpass
	 * @return 
	 */
	protected function getUpdateCommand( $newpass ) {
		$dc = new DsCommand();

		if( GetGlobalData( "bEncryptPasswords" ) ) {
			if( !$this->cipherer->isFieldEncrypted( $this->passwordField ) )
				$newpass = $this->getPasswordHash( $newpass );
		}

		$values = array();
		$values[ $this->passwordField ] = $newpass;
		if( $this->token ) {
			$values[ "˂Create new˃" ] = "";
			$values[ "˂Create new˃" ] = NULL;
			if( GetGlobalData( "userRequireActivation" ) ) {
				$values[  GetGlobalData( "userActivationField" ) ] = "1";
			}
		}

		$dc->values = $values;
		$dc->filter = $this->getUsernameCondition();
		return $dc;
	}


	/**
	 * @return Array
	 */
	protected function getControlValues()
	{
		$filename_values = array();
		$blobfields = array();
		$values = array();
		foreach( $this->changePwdFields as $fName )
		{
			$fControl = $this->getControl( $fName, $this->id );
			$fControl->readWebValue( $values, $blobfields, NULL, NULL, $filename_values );
		}

		return $values;
	}


	/**
	 * @return Boolean
	 */
	protected function changePassword() {
		//	CSRF protection
		if( !isPostRequest() )
			return;

		global $globalEvents;

		$values = $this->getControlValues();

		$dc = new DsCommand();
		$dc->filter = $this->getUsernameCondition();
		$qResult = $this->dataSource->getList( $dc );

		$data = $qResult->fetchAssoc();
		$row = $this->cipherer->DecryptFetchedArray( $data );

		$dbOldPass = "";
		if( !$row ) {
			$this->message = "Invalid password";
			return false;
		}

		$dbOldPass = $row[ $this->passwordField ];
		$username = $row[ $this->usernameField ];

		if( !$this->token && $this->pSet->hasOldPassField() ) {
			if( !Security::verifyPassword( $values["oldpass"], $dbOldPass ) ) {
				$this->message = "Invalid password";
				return false;
			}
		}

		$oldPass = $dbOldPass;

		$newPass = $values["newpass"];
		if( $this->pwdStrong && !checkpassword( $newPass ) ) {
			$this->message = $this->getPwdStrongFailedMessage();
			$this->jsSettings["tableSettings"][ $this->tName ]["msg_passwordError"] = $this->message;
			return false;
		}

		$retval = true;
		if( $globalEvents->exists("BeforeChangePassword") )
			$retval = $globalEvents->BeforeChangePassword( $oldPass, $newPass, $this );

		$values["newpass"] = $newPass;
		if( $retval ) {
			$dc = $this->getUpdateCommand( $values["newpass"] );
			$this->dataSource->updateSingle( $dc, false );

			if( $this->auditObj )
				$this->auditObj->LogChPassword( $username );

			if( $globalEvents->exists("AfterChangePassword") )
				$globalEvents->AfterChangePassword( $oldPass, $values["newpass"], $this );
		}

		return $retval;
	}

	/**
	 * @return String
	 */
	protected function getPwdStrongFailedMessage()
	{
		$msg = "";
		$pwdLen = GetGlobalData("pwdLen", 0);
		if($pwdLen)
		{
			$fmt = "Password must be at least %% characters length.";
			$fmt = str_replace("%%", "".$pwdLen, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdUnique = GetGlobalData("pwdUnique", 0);
		if($pwdUnique)
		{
			$fmt = "Password must contain %% unique characters.";
			$fmt = str_replace("%%", "".$pwdUnique, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdDigits = GetGlobalData("pwdDigits", 0);
		if($pwdDigits)
		{
			$fmt = "Password must contain %% digits or symbols.";
			$fmt = str_replace("%%", "".$pwdDigits, $fmt);
			$msg.= "<br>".$fmt;
		}
		if(GetGlobalData("pwdUpperLower", false))
		{
			$fmt = "Password must contain letters in upper and lower case.";
			$msg.= "<br>".$fmt;
		}

		if($msg)
			$msg = substr($msg, 4);

		return $msg;
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;

		$this->setReferer();

		//	Before Process event
		if( $globalEvents->exists("BeforeProcessChangePwd") )
			$globalEvents->BeforeProcessChangePwd( $this );

		if( $this->action == "Change" ) {
			$this->changedSuccess = $this->changePassword();
		
			if( !$this->changedSuccess && $this->mode == CHANGEPASS_POPUP ) {
				$returnJSON = array();
				$returnJSON['success'] = false;
					
				if( strlen( $this->message ) )
					$returnJSON['message'] = $this->message;
				
				if( !$this->isCaptchaOk )
					$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();
					
				echo printJSON( $returnJSON );
				exit();
			}
		}

		if( !$this->changedSuccess ) {
			$this->prepareEditControls();
		} else {
			$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );
			$this->pSet = new ProjectSettings( $this->tName, $this->successPageType(), $this->pageName, $this->pageTable );

			$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $this->pSet->buttons() );
			foreach( $this->pSet->buttons() as $b ) {
				$this->AddJSFile( "include/button_".$b.".js" );
			}
		}

		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();
		$this->doCommonAssignments();

		$this->showPage();
	}

	/**
	 * @param Boolean logged
	 */
	protected function reportChangeStatus( $changed )
	{
		$returnJSON = array();

		$returnJSON["message"] = $this->message;
		$returnJSON["success"] = true;

		echo printJSON( $returnJSON );
		exit();
	}	
	
	/**
	 *
	 */
	protected function prepareEditControls()
	{
		foreach($this->changePwdFields as $fName)
		{
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["format"] = "Password";
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = true;
			$parameters["validate"] = array('basicValidate' => array('IsRequired'));

			$parameters["extraParams"] = array();
			$parameters["extraParams"]["getConrirmFieldCtrl"] = true;

			$controls = array('controls' => array());
			$controls["controls"]['id'] = $this->id;
			$controls["controls"]['mode'] = "add";
			$controls["controls"]['ctrlInd'] = 0;
			$controls["controls"]['fieldName'] = $fName;
			$controls["controls"]['suggest'] = $parameters["suggest"];

			$this->xt->assign_function( $fName."_editcontrol", "xt_buildeditcontrol", $parameters );
			$this->xt->assign($fName."_label", true);

			$this->xt->assign("labelfor_" . goodFieldName($fName), "value_".$fName."_".$this->id);

			if( $this->is508 )
				$this->xt->assign_section($fName."_label", "<label for=\"value_".$fName."_".$this->id."\">", "</label>");

			$this->xt->assign($fName."_block", true);

			$this->fillControlsMap($controls);
		}
	}

	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		$this->body["end"] = XTempl::create_method_assignment( "assignBodyEnd", $this );

		$this->xt->assignbyref("body", $this->body);
	}

	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"");
		
		if( $this->mode == CHANGEPASS_POPUP ) {
			$this->hideItemType("changepwd_back");
			if( $this->changedSuccess )
				$this->xt->assign("backlink_attrs", "id=\"backButton".$this->id."\"");
		} else {
			$this->xt->assign("backlink_attrs", "href=\"". runner_htmlspecialchars( $_SESSION["changepwd_referer"] )."\"");
		}
			
		$this->xt->assign("message_block", true);
		if( $this->message ) {
			$this->xt->assign("message_class", "alert-danger" );
			$this->xt->assign("message", $this->message);
		} else {
			$this->hideElement("message");
		}

		$this->assignBody();
	}

	/**
	 *
	 */
	protected function showPage() {
		global $globalEvents;

		if( $this->changedSuccess )
			$this->switchToSuccessPage();

		$templatefile = $this->templatefile;
		
		if( $globalEvents->exists("BeforeShowChangePwd") )
			$globalEvents->BeforeShowChangePwd( $this->xt, $templatefile, $this );

		if( $this->mode == CHANGEPASS_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);

			$this->displayAJAX( $templatefile, $this->id + 1 );
			exit();
		}		
		
		$this->display( $templatefile );
	}

	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];

		return "";
	}

	/**
	 * @return Boolean
	 */
	protected function checkToken()
	{
		if( !$this->token )
			return true;

		$dc = new DsCommand();
		$dc->filter = $this->getTokenCondition();
		$qResult = $this->dataSource->getList( $dc );
		
		$data = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
		if( $data )
			return secondsPassedFrom( $data["˂Create new˃"] ) < 86400;

		return false;
	}
	
	/**
	 * @return Number
	 */
	public static function readModeFromRequest()
	{
		if( postvalue("mode") == "popup" )
			return CHANGEPASS_POPUP;

		return CHANGEPASS_SIMPLE;
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "changepwd_message" );
		}
		return parent::element2Item( $name );
	}	
}
?>