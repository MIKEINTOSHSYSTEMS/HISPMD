<?php
class RemindPasswordPage extends RunnerPage
{
	public $action = "";
	public $userEmail = "";

	protected $reminded = false;


	function __construct( &$params ) {
		parent::__construct( $params );

		$this->headerForms = array( "top" );
		$this->footerForms = array( "footer" );
		$this->bodyForms = array( "above-grid", "grid", "superbottom" );
	}
	
	protected function setDataSource() {
		$this->dataSource = getLoginDataSource();
	}
	
	/**
	 * Set the connection property
	 */
	protected function setTableConnection() {
		global $cman;
		$this->connection = $cman->getForLogin();
	}

	protected function assignCipherer() {
		$this->cipherer = RunnerCipherer::getForLogin();
	}

	function getCaptchaId() {
		return "remind";
	}

	/**
	 *
	 */
	public function process() {
		global $globalEvents;

		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRemind") )
			$globalEvents->BeforeProcessRemind( $this );

		if ( $this->action == "Remind" )
		{
			$this->reminded = $this->remindPassword();

			if( !$this->reminded && $this->mode == REMIND_POPUP )
			{
				$returnJSON = array();
				$returnJSON['message'] = $this->message;

				echo printJSON( $returnJSON );
				exit();
			}
		}

		if ( $this->reminded )
		{
			$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );
			$this->pSet = new ProjectSettings( $this->tName, $this->successPageType(), $this->pageName, $this->pageTable );

			$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $this->pSet->buttons() );
			foreach( $this->pSet->buttons() as $b ) {
				$this->AddJSFile( "include/button_".$b.".js" );
			}
		}

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();

		$this->doCommonAssignments();

		$this->showPage();
	}
	
	/**
	 * @return String
	 */
	protected function getNotRegisteredMessage() {
		return "User"." "
				.runner_htmlspecialchars( $this->userEmail )
					." "."is not registered.";
	}

	/**
	 * @return Boolean
	 */
	protected function remindPassword() {
		global $globalEvents;

		if( !$this->checkCaptcha() ) {
			$this->message = "Invalid security code.";
			return false;
		}
		
		if( !strlen( $this->userEmail ) ) {
			$this->message = $this->getNotRegisteredMessage();
			return false;
		}
		
		$dc = $this->getSubsetDataCommand();
		
		$fetchedArray = $this->dataSource->getSingle( $dc )->fetchAssoc();
		$data = $this->cipherer->DecryptFetchedArray( $fetchedArray );
		if( $data ) {
			$username = $data[ Security::usernameField() ];
			$email = $data[ Security::emailField() ];
			$password = $data[ Security::passwordField() ];
		} 
		
		if( $globalEvents->exists("BeforeRemindPassword") )
			$globalEvents->BeforeRemindPassword( $username, $email, $this );

		if( !$data ) {
			$this->message = $this->getNotRegisteredMessage();		
			return false;
		}
		
		
		$token = "";
		$dbPassword = $password;
		
		if( $this->remindMethod() == RPM_RESET ) {
			$token = generatePassword(20);
			$this->dataSource->updateSingle( $this->getUpdateTokenCommand( $token ), false );
			
		} else if( GetGlobalData( "bEncryptPasswords" ) ) {
			if( !$this->cipherer->isFieldEncrypted( Security::passwordField() ) ) {
				$password = generatePassword(10);
				$dbPassword = $this->getPasswordHash( $password );

				$this->dataSource->updateSingle( $this->getUpdatePasswordCommand( $dbPassword ), false );
			}
		}

		$reminded = $this->sendRemindEmail( $username, $password, $email, $token, $dbPassword );

		if( $reminded ) {
			if( $globalEvents->exists("AfterRemindPassword") )
				$globalEvents->AfterRemindPassword( $username, $email, $this );
		}

		return $reminded;
	}
	
	/**
	 * @param String token
	 * @return DsCommand
	 */
	protected function getUpdateTokenCommand( $token ) {
		$dc = new DsCommand();
		$dc->filter = $this->getUserCondition();

		$newData = array(); 
		$newData[ Security::resetTokenField() ] = $token;
		$newData[ Security::resetDateField() ] = now();
		
		$dc->values = $newData;
		return $dc;
	}

	/**
	 * @param String token	
	 * @return DsCommand
	 */	
	protected function getUpdatePasswordCommand( $dbPassword ) {
		$dc = new DsCommand();
		$dc->filter = $this->getUserCondition();

		$newData = array(); 
		$newData[ Security::passwordField() ] = $dbPassword;
		
		$dc->values = $newData;
		return $dc;
	}	

	/**
	 * @return Number
	 */
	protected function remindMethod() {
		$option = getSecurityOption("registration");
		return $option["remindMethod"];
	}

	/**
	 * @param String username
	 * @param String password
	 * @param String email
	 * @param String token
	 * @param String dbPassword
	 * @return Boolean
	 */
	protected function sendRemindEmail( $username, $password, $email, $token, $dbPassword ) {		
		$data = array();
		$url = projectURL() . GetTableLink( "remind" ) ;

		$userData = Security::getUserData( $username );
		if( $userData ) {
			foreach ($userData as $field => $value) {
				$data[ goodFieldName($field) ] = $value;
			}
		}

		if( $this->remindMethod() == RPM_RESET ) {
			$template = "resetpassword";
			$data["reseturl"] = str_replace("/remind", "/changepwd", $url)."?token=".$token;
		} else {
			$template = "remindpassword";
			if( GetGlobalData( "userRequireActivation" ) ) {
				if( !@$userData[ GetGlobalData("userActivationField") ] ) {
					// user is not activated
					if( !GetGlobalData( "bEncryptPasswords" ) )
						$dbPassword = md5( $dbPassword );
					
					$data["activateurl"] = str_replace("/remind", "/register", $url);
					$data["activateurl"] .= "?a=activate&u=".rawurlencode( base64_encode( $username ) )."&code=";
					$data["activateurl"] .= rawurlencode( md5( $username.$dbPassword ) );
				}
			}

			$data["loginurl"] = str_replace("/remind", "/login", $url)."?username=".rawurlencode( $username );
			$data["username"] = $username;
			$data["password"] = $password;
		}

		$html = isEmailTemplateUseHTML( $template );
		$sentMailResults = RunnerPage::sendEmailByTemplate( $email, $template, $data, $html );
 
		if( !@$sentMailResults["mailed"] ) {
			$this->message = $sentMailResults["message"];
			if( !$this->message )
				$this->message = $this->getNotRegisteredMessage();
		}

		return @$sentMailResults["mailed"];
	}

	/**
	 * @return DsCommand
	 */
	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = new DsCommand();
		$dc->filter = $this->getUserCondition();

		return $dc;
	}

	/**
	 * @return DsCondition
	 */	
	protected function getUserCondition() {
		$conditions = array();
		
		$conditions[] = DataCondition::FieldEquals( 
			Security::usernameField(), 
			$this->userEmail, 
			0, 
			Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT 
		);
			
		$conditions[] = DataCondition::FieldEquals( 
			Security::emailField(), 
			$this->userEmail, 
			0, 
			dsCASE_INSENSITIVE 
		);

		return DataCondition::_Or( $conditions );
	}

	/**
	 *
	 */
	protected function doCommonAssignments() {

		$this->xt->assign(
			"username_email_attrs", 
			($this->is508 ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars( $this->userEmail )."\""
		);

		$this->xt->assign("submit_attrs", "onclick='document.forms.form1.submit();return false;'");
		if( $this->mode == REMIND_POPUP && !$this->reminded ) {
			$this->xt->assign("backlink_attrs", 'style="display:none"');
			$this->xt->assign("submit_attrs","id='submitRemind'");
		}

		$this->xt->assign("username_email_label", true);

		if( $this->is508 )
			$this->xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");

		if( $this->message || ( $this->mode == REMIND_POPUP && !$this->reminded ) ) {

			$this->xt->assign("message_class", "alert-danger" );
			$this->xt->assign("message", $this->message);
			$this->xt->assign("message_block", true);

			if( $this->mode == REMIND_POPUP && !$this->reminded )
				$this->hideElement("message");
		}

		$this->xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');

		if( $this->mode == REMIND_SIMPLE )
			$this->assignBody();
	}

	/**
	 *
	 */
	protected function assignBody() {
		$this->body["begin"].= GetBaseScriptsForPage(false);

		$this->body["begin"].= "<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
		<input type=hidden name=btnSubmit value=\"Remind\">";

		$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
		$this->xt->assign("body", $this->body);
	}

	/**
	 * Assign body end
	 * @intellisense
	 */
	function assignBodyEnd( $params = "" ) {
		global $pagesData;

		$this->fillSetCntrlMaps();
		echo "</form>";
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			Runner.applyPagesData( ".my_json_encode( $pagesData )." );
			window.settings = ".my_json_encode($this->jsSettings).";
			</script>\r\n";

		echo "<script language=\"JavaScript\" src=\""
			.GetRootPathForResources("include/runnerJS/RunnerAll.js?39558")."\"></script>\r\n";

		echo "<script>".$this->PrepareJS()."</script>";
	}

	/**
	 *
	 */
	protected function showPage() {
		global $globalEvents;

		if( $this->reminded )
			$this->switchToSuccessPage();

		if( $globalEvents->exists("BeforeShowRemindPwd") )
			$globalEvents->BeforeShowRemindPwd( $this->xt, $this->templatefile, $this );


		if( $this->mode == REMIND_POPUP ) {
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);

			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		$this->display( $this->templatefile );
	}

	/**
	 * @return String
	 */
	public static function readActionFromRequest() {
		return postvalue("btnSubmit");
	}

	/**
	 * @return Number
	 */
	public static function readRemindModeFromRequest() {
		$pageMode = postvalue("mode");

		if( $pageMode == "popup" )
			return REMIND_POPUP;

		return REMIND_SIMPLE;
	}
}
?>