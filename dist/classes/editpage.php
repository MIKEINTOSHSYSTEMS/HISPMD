<?php
class EditPage extends RunnerPage
{
	protected $cachedRecord = null;

	public $oldKeys = array();
	protected $keysChanged = false;

	public $jsKeys = array();

	public $keyFields = array();

	public $readEditValues = false;

	public $action = "";

	public $lockingAction = "";
	public $lockingSid = null;
	public $lockingKeys = null;
	public $lockingStart = null;

	protected $lockingMessageAttr = "data-locked";
	protected $lockingMessageText = "";

	protected $lockingMessageBlock = "";

	public $messageType = MESSAGE_ERROR;

	protected $auditObj = null;

	protected $oldRecordData = null;
	protected $newRecordData = array();

	protected $updatedSuccessfully = false;

	/**
	 * It's set up in inline edit mode only
	 */
	public $screenWidth = 0;

	/**
	 * It's set up in inline edit mode only
	 */
	public $screenHeight = 0;

	/**
	 * It's set up in inline edit mode only
	 */
	public $orientation = '';


	/**
	 * @type Number
	 */
	protected $afterEditAction = null;

	/**
	 * @type Array
	 */
	protected $prevKeys = null;
	/**
	 * @type Array
	 */
	protected $nextKeys = null;

	protected $recordValuesToEdit = null;

	public $forSpreadsheetGrid = false;
	public $hostPageName = "";


	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->setKeysForJs();

		$this->auditObj = GetAuditObject($this->tName);

		$this->editFields = $this->getPageFields();

		if( $this->getLayoutVersion() === PD_BS_LAYOUT )
		{
			$this->headerForms = array( "top" );
			$this->footerForms = array( "below-grid" );
			if ( $this->isMultistepped() )
				$this->bodyForms = array( "above-grid", "steps" );
			else
				$this->bodyForms = array( "above-grid", "grid" );
		}
		else
		{
			$this->formBricks["header"] = "editheader";
			$this->formBricks["footer"] = array( "editbuttons", "righteditbuttons");
			$this->assignFormFooterAndHeaderBricks( true );
		}

		$this->addPageSettings();
	}

	/**
	 * Add js page settings
	 */
	protected function addPageSettings()
	{
		if( $_SESSION[ $this->sessionPrefix . "_recordUpdated" ] )
		{
			$this->setProxyValue( $this->shortTableName."_recordUpdated", true );
			unset( $_SESSION[ $this->sessionPrefix . "_recordUpdated" ] );
		}
		else
			$this->setProxyValue( $this->shortTableName."_recordUpdated", false );

		if( !$this->isPopupMode() && !$this->isSimpleMode() )
			return;

		$afterEditAction = $this->getAfterEditAction();
		$this->jsSettings["tableSettings"][ $this->tName ]["afterEditAction"] = $afterEditAction;

		if ( $afterEditAction == AE_TO_DETAIL_LIST )
			$this->jsSettings["tableSettings"][ $this->tName ]["afterEditActionDetTable"] = GetTableURL( $this->pSet->getAEDetailTable() );

		if ( $this->mode == EDIT_POPUP )
		{
			if ( $afterEditAction == AE_TO_NEXT_EDIT )
				$this->jsSettings["tableSettings"][ $this->tName ]["nextKeys"] = $this->getNextKeys();

			if ( $afterEditAction == AE_TO_PREV_EDIT )
				$this->jsSettings["tableSettings"][ $this->tName ]["prevKeys"] = $this->getPrevKeys();
		}
	}

	/**
	 * Get the correct after edit action
	 * basing on the table settings
	 * @return Number
	 */
	protected function getAfterEditAction()
	{
		if( isset( $this->afterEditAction ) && !is_null( $this->afterEditAction ) )
			return $this->afterEditAction;

		$action = $this->pSet->getAfterEditAction();

		if( $this->isPopupMode() && $this->pSet->checkClosePopupAfterEdit()
			|| $action == AE_TO_VIEW && !$this->viewAvailable()
			|| $action == AE_TO_NEXT_EDIT && !$this->getNextKeys() 
			|| $action == AE_TO_PREV_EDIT && !$this->getPrevKeys() )
		{
			$action = AE_TO_LIST;
		}

		if( $action == AE_TO_DETAIL_LIST )
		{
			$dTName = $this->pSet->getAEDetailTable();
			$dPset = new ProjectSettings( $dTName );
			$dPermissions = $this->getPermissions( $dTName );

			if( !$dTName || $action == AE_TO_DETAIL_LIST && (!$dPset->hasListPage() || !$dPermissions["search"]) )
				$action = AE_TO_LIST;
		}

		$this->afterEditAction = $action;
		return $this->afterEditAction;
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == EDIT_DASHBOARD || ( $this->isPopupMode() || $this->mode == EDIT_INLINE ) && $this->dashTName )
		{
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
			return;
		}

		parent::assignSessionPrefix();
	}

	/**
	 * Set session variables
	 */
	public function setSessionVariables()
	{
		$masterTable = $this->masterTable;
		parent::setSessionVariables();
		//	don't use mastertable stored in session
		$this->masterTable = $masterTable;

		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize($this->searchClauseObj);
	}

	/**
	 * Get the page's fields list
	 * @return Array
	 */
	protected function getPageFields()
	{
		if( $this->mode == EDIT_INLINE )
			return $this->pSet->getInlineEditFields();

		return $this->pSet->getEditFields();
	}

	/**
	 * Set keys values
	 * @param Array keys
	 */
	public function setKeys($keys)
	{
		$this->cachedRecord = null;
		$this->recordValuesToEdit = null;
		$this->keys = $keys;
		$this->setKeysForJs();
	}

	public function setKeysForJs()
	{
		$i = 0;
		foreach($this->keys as $field => $value)
		{
			$this->jsKeys[ $i++ ] = $value;
		}
	}

	/**
	 * Tell whether the page was called to update locking state only
	 */
	public function isLockingRequest() {
		return $this->lockingObj && $this->lockingAction != "";
	}

	/**
	 * Perform locking action the page was called for
	 */
	public function doLockingAction()
	{
		$arrkeys = explode("&", urldecode( $this->lockingKeys ));

		foreach(array_keys($arrkeys) as $ind)
			$arrkeys[$ind] = urldecode($arrkeys[$ind]);

		if($this->lockingAction == "unlock")
		{
			$this->lockingObj->UnlockRecord($this->tName, $arrkeys, $this->lockingSid);
		}
		else if($this->lockingAction == "lockadmin" && $this->lockingAdmin() )
		{
			$this->lockingObj->UnlockAdmin($this->tName, $arrkeys, $this->lockingStart == "yes");
			if($this->lockingStart == "no")
				echo "unlock";
			else if($this->lockingStart == "yes")
				echo "lock";
		}
		else if($this->lockingAction == "confirm")
		{
			$lockMessage = "";
			if( !$this->lockingObj->ConfirmLock($this->tName, $arrkeys, $lockMessage) )
				echo $lockMessage;
		}
	}

	/**
	 * Set template file if it empty
	 */
	public function setTemplateFile()
	{
		if($this->mode == EDIT_INLINE)
			$this->templatefile = GetTemplateName($this->shortTableName, "inline_edit");
		parent::setTemplateFile();
	}

	public function init()
	{
		if( $this->eventsObject->exists("BeforeProcessEdit") )
			$this->eventsObject->BeforeProcessEdit( $this );

		parent::init();
	}

	public function process()
	{
		if( $this->action == "edited" )
		{
			$this->processDataInput();

			$this->readEditValues = !$this->updatedSuccessfully;

			if( $this->mode == EDIT_INLINE || $this->isPopupMode() )
			{
				$this->reportInlineSaveStatus();
				return;
			}

			if( $this->updatedSuccessfully )
			{
				if( $this->afterEditActionRedirect() )
					return;
			}
		}

		if( $this->captchaExists() )
		{
			$this->displayCaptcha();
		}

		$this->prgReadMessage();

		//	get the record to edit
		if( !$this->readRecord() )
			return;

		if( !$this->IsRecordEditable( false ) )
			return $this->SecurityRedirect();

		if( !$this->lockRecord() )
			return;

		$this->prepareReadonlyFields();

		$this->doCommonAssignments();
		$this->prepareBreadcrumbs();
		$this->prepareCollapseButton();
		$this->prepareButtons();
		$this->prepareSteps();
		$this->prepareEditControls();

		$this->prepareJsSettings();

		$this->prepareDetailsTables();

		if( $this->mode != EDIT_INLINE )
			$this->addButtonHandlers();

		$this->addCommonJs();

		$this->displayEditPage();
	}

	/**
	 * Add common javascript files and code
	 */
	function addCommonJs()
	{
		parent::addCommonJs();

		if( $this->allDetailsTablesArr )
		{
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
	}

	/**
	 * Add table settings
	 */
	protected function prepareJsSettings()
	{
		$this->pageData['detailsMasterKeys'] = $this->getDetailTablesMasterKeys( $this->getCurrentRecordInternal() );

		$this->jsSettings['tableSettings'][ $this->tName ]["keys"] = $this->jsKeys;
		$this->jsSettings['tableSettings'][ $this->tName ]['keyFields'] = $this->pSet->getTableKeys();

		if( $this->lockingObj ) {
			// $keys, $savedKeys could not be set properly if editid params were not passed, so use $this->keys instead
			$escapedKeys = array();
			foreach( $this->keys as $k ) {
				$escapedKeys[] = rawurlencode( $k );
			}
			$this->jsSettings['tableSettings'][ $this->tName ]["sKeys"] = implode("&", $escapedKeys );
			$this->jsSettings['tableSettings'][ $this->tName ]["confirmTime"] = $this->lockingObj->ConfirmTime;
		}
	}


	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{

		if ( $this->mode === EDIT_SIMPLE )
		{
			$this->headerCommonAssign();
		}
		else
		{
			$this->xt->assign("menu_chiddenattr", "data-hidden" );
		}

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

		//	labels
		$this->assignFieldBlocksAndLabels();

		//	body["end"]	- this assignment is very important
		if($this->isSimpleMode() )
		{
			$this->assignBody();
			// assign body end
			$this->xt->assign("flybody", true);
		}

		$data = $this->getCurrentRecordInternal();
		$this->xt->assign( "editlink", implode( '&', array( $this->getEditLink( $data ), $this->getStateUrlParams() ) ) );
	}

	/**
	 * Display the edit page
	 */
	protected function displayEditPage()
	{
		// beforeshow event
		$templateFile = $this->templatefile;
		if( $this->eventsObject->exists("BeforeShowEdit") )
			$this->eventsObject->BeforeShowEdit($this->xt, $templateFile, $this->getCurrentrecordInternal(), $this);

		if( $this->mode != EDIT_INLINE )
			$this->displayMasterTableInfo();
		// invoked after displayMasterTableInfo to add master viewcontrols maps
		$this->fillSetCntrlMaps();

		if( $this->isSimpleMode() )
		{
			$this->display($templateFile);
			return;
		}

		if( $this->isPopupMode() || $this->mode == EDIT_DASHBOARD )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);
			$this->displayAJAX($templateFile, $this->flyId + 1);
			exit();
		}

		if( $this->mode == EDIT_INLINE )
		{
			$returnJSON = array();

			$this->xt->load_template( $templateFile );
			
			$returnJSON["htmlControls"] = array();
			foreach($this->editFields as $f) {
				// build controls
				$returnJSON["htmlControls"][ $f ] = $this->xt->fetchVar( GoodFieldName($f)."_editcontrol" );
			}

			global $pagesData;
			$returnJSON["pagesData"] = $pagesData;
			$returnJSON["settings"] = $this->jsSettings;
			$returnJSON["controlsMap"] = $this->controlsHTMLMap;
			$returnJSON["viewControlsMap"] = $this->viewControlsHTMLMap;

			$returnJSON["additionalJS"] = $this->grabAllJsFiles();
			$returnJSON["additionalCSS"] = $this->grabAllCSSFiles();
			echo printJSON( $returnJSON );
			exit();
		}
	}

	/**
	 * @param templatefile string
	 * @return string
	 */
	protected function getBodyMarkup( $templatefile )
	{
		$this->xt->assign("locking", "");
		return $this->lockingMessageBlock . $this->fetchForms( $this->bodyForms );
	}

	/**
	 * Get extra JSON params to display the page on AJAX-like request
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return $this->getSaveStatusJSON();
	}

	/**
	 * Set details preview on the edit master page
	 */
	protected function prepareDetailsTables()
	{
		if( !$this->isShowDetailTables /*|| $this->mode == EDIT_DASHBOARD*/ || $this->mode == EDIT_INLINE )
			return;

		$dpParams = $this->getDetailsParams( $this->id );
		$this->jsSettings['tableSettings'][ $this->tName ]['dpParams'] = array('tableNames' => $dpParams['strTableNames'], 'ids' => $dpParams['ids']);

		if( !$dpParams['ids'] )
			return;

		if( $this->mode == EDIT_DASHBOARD )
			$dpTablesParams = array();

		$this->xt->assign("detail_tables", true);

		$this->flyId = $dpParams['ids'][ count($dpParams['ids']) - 1 ] + 1;
		for($d = 0; $d < count($dpParams['ids']); $d++)
		{
			if( $this->mode != EDIT_DASHBOARD )
			{
				$this->setDetailPreview( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ], $this->getCurrentRecordInternal() );
				$this->displayDetailsButtons( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ] );
			}
			else
			{
				$this->xt->assign("details_". $dpParams['shorTNames'][ $d ], true);
				$dpTablesParams[] = array(
					"tName" => $dpParams['strTableNames'][ $d ],
					"id" => $dpParams['ids'][ $d ],
					"pType" => $dpParams['type'][ $d ]
				);
				$this->xt->assign("displayDetailTable_" . $dpParams['shorTNames'][ $d ],
					"<div id='dp_".goodFieldName( $this->tName )."_".$this->pageType."_". $dpParams['ids'][ $d ]."'></div>");
			}
		}

		if( $this->mode == EDIT_DASHBOARD )
			$this->controlsMap["dpTablesParams"] = $dpTablesParams;
	}

	/**
	 *
	 */
	protected function displayDetailsButtons( $dpType, $dpTableName, $dpId )
	{
		if ( !CheckTablePermissions($dpTableName, "S") )
			return;

		if ( $dpType == PAGE_CHART || $dpType == PAGE_REPORT )
			return;

		$listPageObject = $this->getDetailsPageObject( $dpTableName, $dpId );

		if ( $this->isBootstrap() && $listPageObject->isBootstrap() )
		{
			$listPageObject->assignButtonsOnMasterEdit( $this->xt );
		}
	}

	/**
	 * Assign buttons xt variables
	 */
	protected function prepareButtons()
	{
		if( $this->mode == EDIT_INLINE )
			return;

		$this->prepareNextPrevButtons();

		if( $this->isPopupMode() )
		{
			$this->xt->assign("close_button", true);
			$this->xt->assign("closebutton_attrs", "id=\"closeButton".$this->id."\"");
		}

		$this->xt->assign("save_button", true);

		// PD
		if ( $this->mode !== EDIT_SELECTED_SIMPLE && $this->mode !== EDIT_SELECTED_POPUP ) {
			$this->xt->assign("save_edit", true);
		} else {
			$this->xt->assign("save_update", true);
		}

		$addStyle = "";
		if ( $this->isMultistepped() )
		{
			$addStyle = " style=\"display: none;\"";
		}

		$this->xt->assign("savebutton_attrs", "id=\"saveButton".$this->id."\"" . $addStyle );

		$this->xt->assign("resetbutton_attrs", 'id="resetButton'.$this->id.'"');
		$this->xt->assign("reset_button", true);

		if( $this->mode == EDIT_DASHBOARD )
			return;

		if( $this->isSimpleMode() )
		{
			if( isset( $_SESSION["successfulEdit"] ) )
				$this->xt->assign("message_back_button", true);
			//	back to list/menu buttons
			if( $this->pSet->hasListPage() ) {
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backButton".$this->id."\"");
				$this->xt->assign("mbackbutton_attrs", "id=\"extraBackButton".$this->id."\"");
			}
			else if( $this->isShowMenu() )
			{
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backToMenuButton".$this->id."\"");
			}
		}

		if( $this->viewAvailable() )
		{
			$this->xt->assign("view_page_button", true);
			$this->xt->assign("view_page_button_attrs", "id=\"viewPageButton".$this->id."\"");
			if( $_SESSION["successfulEdit"] ) {
				$this->xt->assign("message_view_page_button", true);
			}
		}

		unset( $_SESSION["successfulEdit"] );
	}

	protected function prepareNextPrevButtons()
	{
		if( !$this->pSet->useMoveNext() ) {
			$this->hideItemType("prev");
			$this->hideItemType("next");
			return;
		}

		$nextPrev = $this->getNextPrevRecordKeys( $this->getCurrentRecordInternal() );

		//show Prev/Next buttons
		$this->assignPrevNextButtons( !!$nextPrev["next"], !!$nextPrev["prev"], $this->mode == EDIT_DASHBOARD && ($this->hasTableDashGridElement() || $this->hasDashMapElement()) ); // TODO: haMajorDashElem

		$this->jsSettings["tableSettings"][ $this->tName] ["prevKeys"] = $nextPrev["prev"];
		$this->jsSettings["tableSettings"][ $this->tName ]["nextKeys"] = $nextPrev["next"];
	}

	protected function readRecord()
	{
		if( $this->getCurrentRecordInternal() )
			return true;
		if($this->isSimpleMode() )
		{
			HeaderRedirect($this->pSet->getShortTableName(), "list", "a=return&".$this->getStateUrlParams());
			exit();
		}
		//	nothing to edit.
		//	TODO: add some report or message
		exit();
		return false;
	}

	/**
	 *	Format and prepare readonly field values
	 */
	protected function prepareReadonlyFields()
	{
		$fields = $this->pSet->getFieldsList();
		$data = $this->getCurrentRecordInternal();

		//	prepare field values
		//	keys
		$keyParams = array();
		foreach( $this->pSet->getTableKeys() as $i => $k )
		{
			$keyParams[] = "key" . ($i + 1) . "=" . runner_htmlspecialchars( rawurlencode( $this->keys[ $k ] ) );
		}
		$keylink = "&" . implode("&", $keyParams);

		foreach( $fields as $f )
		{
			if( $this->getEditFormat( $f ) == EDIT_FORMAT_READONLY &&
				( $this->pSet->appearOnEditPage( $f ) || $this->pSet->appearOnInlineEdit( $f ) ) )
				$this->readOnlyFields[ $f ] = $this->showDBValue( $f , $data, $keylink );
		}
	}

	/**
	 *	Locks record for editing.
	 * Returns false if the page can not continue processing. True otherwise.
	 */
	protected function lockRecord() {
		if( !$this->lockingObj )
			return true;

		//	locked OK
		if( $this->lockingObj->LockRecord( $this->tName, $this->keys) ) {
			$this->lockingMessageBlock = '<div class="rnr-locking" style="display:none" '.$this->lockingMessageAttr. '>' 
				.$this->lockingMessageText. '</div>';
				
			$this->xt->assign( "locking", $this->lockingMessageBlock );
			return true;
		}

		//	NOT locked
		if( $this->mode == EDIT_INLINE ) {
			//	inline mode
			$returnJSON = array();
			$returnJSON['success'] = false;
			if( $this->lockingAdmin() )
				$returnJSON['message'] = $this->lockingObj->GetLockInfo( $this->tName, $this->keys, false, $this->id );
			else
				$returnJSON['message'] = $this->lockingObj->LockUser;

			echo printJSON( $returnJSON );
			exit();
		}

		//	other modes
		$this->lockingMessageText = $this->lockingObj->LockUser;
		// send flag to client
		$this->pageData["lockedByOther"] = true;
		
		if( $this->lockingAdmin() ) {
			$ribbonMessage = $this->lockingObj->GetLockInfo( $this->tName, $this->keys, true, $this->id );
			if( $ribbonMessage != "" )
				$this->lockingMessageText = $ribbonMessage;
		}

		$this->lockingMessageBlock = '<div class="rnr-locking" style="display:none">' .$this->lockingMessageText. '</div>';
		$this->xt->assign( "locking", $this->lockingMessageBlock );

		return true;
	}

	/**
	 * Print JSON containing a saved record data on ajax-like request
	 */
	protected function reportInlineSaveStatus()
	{
		echo printJSON( $this->getSaveStatusJSON() );
		exit();
	}

	/**
	 * Get an array containing the record save status
	 * @return Array
	 */
	protected function getSaveStatusJSON()
	{
		$returnJSON = array();

		if( $this->action != "edited" || $this->isSimpleMode() )
			return $returnJSON;

		$returnJSON['success'] = $this->updatedSuccessfully;
		$returnJSON['message'] = $this->message;
		$returnJSON['lockMessage'] = $this->lockingMessageText;

		if( !$this->isCaptchaOk )
			$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();

		if( !$this->updatedSuccessfully )
			return $returnJSON;

		//	successful update. Return new keys and field values
		$data = $this->getCurrentRecordInternal();
		if( !$data )
			$data = $this->newRecordData;

		//	details tables keys
		$returnJSON['detKeys'] = array();
		foreach( $this->pSet->getDetailTablesArr() as $dt )
		{
			$dkeys = array();
			foreach( $dt["masterKeys"] as $idx => $mk )
			{
				$dkeys[ "masterkey".($idx + 1) ] = $data[ $mk ];
			}
			$returnJSON['detKeys'][ $dt['dDataSourceTable'] ] = $dkeys;
		}

		//	prepare field values
		//	keys
		$keyParams = array();
		foreach( $this->pSet->getTableKeys() as $i => $k )
		{
			$keyParams[] = "key" . ($i + 1) . "=" . runner_htmlspecialchars( rawurlencode( $this->keys[ $k ] ) );
		}
		$keylink = "&" . implode("&", $keyParams);

		//	values
		$values = array();
		$rawValues = array();
		$controlValues = array();

		$listPSet = new ProjectSettings( $this->tName, PAGE_LIST, $this->hostPageName, $this->pageTable );
		//	override viewControls so that field values are built for the host List page and not for the Edit
		$this->viewControls = new ViewControlsContainer( $listPSet, PAGE_LIST, $this );

		foreach( $this->pSet->getFieldsList() as $f )
		{
			$value = $this->showDBValue( $f, $data, $keylink );
			$values[ $f ] = $value;
			if( IsBinaryType( $this->pSet->getFieldType( $f ) ) )
				$rawValues[ $f ] = "";
			else {
				$rawValues[ $f ] = runner_substr($data[ $f ], 0, 100);
				$controlValues[ $f ] = $data[ $f ];
			}
		}

		$returnJSON['keys'] = $this->jsKeys;
		$returnJSON['masterKeys'] = $this->getDetailTablesMasterKeys($data);
		$returnJSON['keyFields'] = $this->pSet->getTableKeys();
		$returnJSON['oldKeys'] = array();
		//	add old keys
		$i = 0;
		foreach($this->oldKeys as $field => $value)
		{
			$returnJSON['oldKeys'][ $i++ ] = $value;
		}

		$returnJSON['controlValues'] = $controlValues;		
		
		$returnJSON['vals'] = $values;
		$returnJSON['fields'] = $this->pSet->getFieldsList();
		$returnJSON['rawVals'] = $rawValues;
		$returnJSON['hrefs'] = $this->buildDetailGridLinks( $returnJSON['detKeys'] );

		//	the record might become non-editable after updating
		if( !$this->IsRecordEditable( false ) )
			$returnJSON['nonEditable'] = true;

		$dmapIconsData = $this->getDashMapsIconsData( $data );
		if( !!$dmapIconsData )
			$returnJSON['mapIconsData'] = $dmapIconsData;

		$fieldsIconsData = $this->getFieldMapIconsData( $data );
		if( !!$fieldsIconsData )
			$returnJSON['fieldsMapIconsData'] = $fieldsIconsData;

		$returnJSON['editFields'] = $this->editFields;
		if( $this->forSpreadsheetGrid ) {
			$returnJSON['editFields'] = $listPSet->getInlineEditFields();
		}

		return $returnJSON;
	}

	/**
	 * It redirects to a new page
	 * according to the edit page settings
	 * @return Boolean
	 */
	protected function afterEditActionRedirect()
	{
		if( !$this->isSimpleMode() )
			return false;

		$stateParams = $this->getStateUrlParams();

		switch( $this->getAfterEditAction() )
		{
			case AE_TO_EDIT:
				return $this->prgRedirect();

			case AE_TO_LIST:
				if( $this->pSet->hasListPage() )
					HeaderRedirect($this->shortTableName, PAGE_LIST, "a=return&" . $stateParams);
				else
					HeaderRedirect("menu");
				return true;

			case AE_TO_VIEW:
				HeaderRedirect( $this->shortTableName, PAGE_VIEW, implode( '&', array( $this->getKeyParams(), $stateParams ) ) );
				return true;

			case AE_TO_PREV_EDIT:
				$_SESSION["message_edit"] = $this->message . "";
				$prevKeys = $this->getPrevKeys();

				HeaderRedirect( $this->shortTableName, PAGE_EDIT, implode( '&', array( $this->getKeyParams( $prevKeys ), $stateParams ) ) );
				return true;

			case AE_TO_NEXT_EDIT:
				$_SESSION["message_edit"] = $this->message . "";
				$nextKeys = $this->getNextKeys();

				HeaderRedirect( $this->shortTableName, PAGE_EDIT, implode( '&', array( $this->getKeyParams( $nextKeys ), $stateParams ) ) );
				return true;

			case AE_TO_DETAIL_LIST:
				$dTName = $this->pSet->getAEDetailTable();
				HeaderRedirect( GetTableURL( $dTName ), PAGE_LIST, implode("&", $this->getNewRecordMasterKeys( $dTName ) ). "&mastertable=" .$this->tName );
				return true;

			default:
				return false;
		}
	}


	function getNewRecordMasterKeys( $dTName )
	{
		$data = $this->getCurrentRecordInternal();

		$mKeys = array();
		foreach($this->pSet->getMasterKeysByDetailTable( $dTName ) as $i => $mk)
		{
			$mKeys[] = "masterkey". ($i + 1) . "=" .$data[ $mk ];
		}
		return $mKeys;
	}


	/**
	 * Get the previous record keys
	 * @return Array
	 */
	protected function getPrevKeys()
	{
		if( isset($this->prevKeys) && !is_null($this->prevKeys))
			return $this->prevKeys;

		$keys = $this->getNextPrevRecordKeys( $this->getCurrentRecordInternal(), PREV_RECORD );
		$this->prevKeys = $keys['prev'];
		return $this->prevKeys;
	}

	/**
	 * Get the next record keys
	 * @return Array
	 */
	protected function getNextKeys()
	{
		if( isset($this->nextKeys) && !is_null($this->nextKeys) )
			return $this->nextKeys;

		$keys = $this->getNextPrevRecordKeys( $this->getCurrentRecordInternal(), NEXT_RECORD );
		$this->nextKeys = $keys['next'];
		return $this->nextKeys;
	}


	/**
	 *	POST-REDIRECT-GET
	 *	Redirect after saving the data to avoid saving again on refresh.
	 */
	protected function prgRedirect()
	{
		if( $this->stopPRG )
			return false;
		if( !$this->updatedSuccessfully || !$this->isSimpleMode() || !no_output_done() )
			return false;

		$_SESSION["message_edit"] = $this->message . "";
		$_SESSION["message_edit_type"] = $this->messageType;

		$getParams = implode( '&', array( $this->getKeyParams(), $this->getStateUrlParams() ) );
		if ( $this->pageName )
		{
			$getParams .= "&page=".$this->pageName;
		}
		HeaderRedirect( $this->pSet->getShortTableName(), $this->getPageType(), $getParams );
		exit();
		return true;
	}

	/**
	 *	POST-REDIRECT-GET
	 *	Read the saved message on the GET step.
	 */
	protected function prgReadMessage()
	{
		if( !$this->isSimpleMode() || !isset($_SESSION["message_edit"]) )
			return;

		$this->setMessage( $_SESSION["message_edit"] );
		$this->messageType = $_SESSION["message_edit_type"];

		unset($_SESSION["message_edit"]);
	}

	/**
	 * @return Array
	 */
	public function getCurrentRecord()
	{
		$data = $this->getCurrentRecordInternal();
		$newData = array();

		foreach($data as $fName => $val)
		{
			$editFormat = $this->getEditFormat($fName);
			if( $editFormat == EDIT_FORMAT_DATABASE_FILE || $editFormat==EDIT_FORMAT_DATABASE_IMAGE )
			{
				if( $data[ $fName ] )
					$newData[ $fName ] = true;
				else
					$newData[ $fName ] = false;
			}
		}

		foreach($newData as $fName => $val) // .net compatibility issue
		{
			$data[ $fName ] = $val;
		}

		return $data;
	}

	/**
	 * @param Boolean useOldKeys
	 * @return String
	 */
	public function getKeysWhereClause( $useOldKeys )
	{
		$dc = new DsCommand;
		$dc->keys = $useOldKeys 
			? $this->oldKeys
			: $this->keys;
		$dc->filter = $this->getSecurityCondition();
		$sql = $this->dataSource->prepareSQL($dc );
		return $sql["where"];
	}

	/**
	 * Read current values from the database
	 * @return Array 		The current record data
	 */
	public function getCurrentRecordInternal()
	{
		if( !is_null($this->cachedRecord) )
			return $this->cachedRecord;

		$dc = $this->getSingleRecordCommand();

		if( $this->eventsObject->exists("BeforeQueryEdit") )
		{
			$prep = $this->dataSource->prepareSQL( $dc );
			$where = $prep["where"];
			$sql = $prep["sql"];

			$this->eventsObject->BeforeQueryEdit($sql, $where, $this);

			if( $sql != $prep["sql"] ) {
				$this->dataSource->overrideSQL( $dc, $sql );
			} else if( $where != $prep["where"] ) {
				$this->dataSource->overrideWhere( $dc, $where );
			}
		}

		$fetchedArray = $this->dataSource->getSingle( $dc )->fetchAssoc();
		$this->cachedRecord = $this->cipherer->DecryptFetchedArray( $fetchedArray );

		if( !$this->checkKeysSet() )
		{
			$this->keys = $this->getKeysFromData( $this->cachedRecord );
			$this->setKeysForJs();
		}

		if( !$this->cachedRecord && $this->mode == EDIT_SIMPLE )
			return $this->cachedRecord;

		foreach($this->getPageFields() as $fName)
		{
			if( @$_POST["a"]!= "edited" && $this->pSet->getAutoUpdateValue($fName) !== "" )
				$this->cachedRecord[ $fName ] = $this->pSet->getAutoUpdateValue($fName);
		}

		if($this->readEditValues)
		{
			foreach($this->getPageFields() as $fName)
			{
				$editFormat = $this->getEditFormat($fName);
				if( !ProjectSettings::uploadEditType( $editFormat ) && $editFormat!== EDIT_FORMAT_READONLY )
					$this->cachedRecord[ $fName ] = $this->newRecordData[ $fName ];
			}
		}


		return $this->cachedRecord;
	}

	/**
	 * Check if the keys values were set through GET/POST 'editid' params
	 * or by using the setKeys method directly
	 * @return Boolean
	 */
	protected function checkKeysSet()
	{
		foreach($this->keys as $kValue)
		{
			if( strlen($kValue) )
				return true;
		}
		return false;
	}

	/**
	 * @return Array - field values to be shown in edit controls
	 */
	protected function getFieldControlValues()
	{
		$data = $this->getFieldControlsData();
		if( $this->readEditValues ) {
			foreach( $this->editFields as $f ) {
				if( !isset( $this->newRecordData[ $f ] ) )
					continue;

				$editFormat = $this->getEditFormat( $f );
				if( !ProjectSettings::uploadEditType( $editFormat ) && $editFormat != EDIT_FORMAT_READONLY ) {

					$data[ $f ] = $this->newRecordData[ $f ];
				}
			}
		}
		return $data;
	}

	public function getEditFormat( $field, $pSet = null ) {
		$isDetKeyField = in_array( $field, $this->detailKeysByM );
		if( $isDetKeyField ) {
			return EDIT_FORMAT_READONLY;
		}
		return parent::getEditFormat( $field, $pSet );
	}


	protected function prepareEditControl( $fName, &$data ) {
		$firstElementId = $this->getControl( $fName, $this->id )->getFirstElementId();
		if( $firstElementId )
			$this->xt->assign( "labelfor_" . GoodFieldName( $fName ), $firstElementId );

		$parameters = $this->getEditContolParams( $fName, $this->id, $data );
		$this->xt->assign_function( GoodFieldName( $fName )."_editcontrol", "xt_buildeditcontrol", $parameters );

		$controls = $this->getContolMapData( $fName, $this->id, $data, $this->editFields );
		if ( in_array( $fName, $this->errorFields ) )
			$controls["controls"]["isInvalid"] = true;

		$this->fillControlsMap( $controls );

		$this->fillFieldToolTips( $fName );
		$this->fillControlFlags( $fName );

		// fill special settings for timepicker
		if( $this->getEditFormat($fName) == 'Time' )
			$this->fillTimePickSettings( $fName, $data[ $fName ] );

		if( $this->pSet->getViewFormat($fName) == FORMAT_MAP )
			$this->googleMapCfg['isUseGoogleMap'] = true;
	}
	
	/**
	 * Prepare edit controls
	 */
	public function prepareEditControls() {
		if( $this->mode == EDIT_INLINE ) {
			$this->editFields = $this->removeHiddenColumnsFromInlineFields(
					$this->editFields,
					$this->screenWidth,
					$this->screenHeight,
					$this->orientation
				);
		}

		//	prepare values
		$data = $this->getFieldControlValues();

		foreach( $this->editFields as $fName ) {
			$this->prepareEditControl( $fName, $data );
		}
	}


	public static function readEditModeFromRequest()
	{
		if(postvalue("editType") == "inline")
			return EDIT_INLINE;
		elseif(postvalue("editType") == EDIT_POPUP)
			return EDIT_POPUP;
		elseif(postvalue("mode") == "dashrecord")
			return EDIT_DASHBOARD;
		else
			return EDIT_SIMPLE;
	}

	public static function processEditPageSecurity( $table )
	{
		//	user has necessary permissions
		if( Security::checkPagePermissions( $table, "E" ) )
			return true;

		// display entered data. Give the user chance to relogin. Do nothing for now.
		if( postvalue("a") == "edited" )
			return true;

		//	page can not be displayed. Redirect or return error

		$pageMode = EditPage::readEditModeFromRequest();

		//	return error if the page is requested by AJAX
		if( $pageMode != EDIT_SIMPLE )
		{
			$messageLink = "";
			if( !isLogged() || Security::isGuest() )
				$messageLink = " <a href='#' id='loginButtonContinue'>". "Login" . "</a>";
			Security::sendPermissionError( $messageLink );
			return false;
		}

		// The user is logged in but lacks necessary permissions
		// redirect to List page or Menu.
		if( isLogged() && !Security::isGuest() )
		{
			Security::redirectToList( $table );
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Save current URL in session
		$keyParams = array();
		$i = 1;
		while( postvalue("editid".$i) )
		{
			$keyParams[] = "editid".$i."=".rawurlencode( postvalue("editid".$i) );
			$i++;
		}
		$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"]."?".implode("&", $keyParams);
		redirectToLogin();
		return false;
	}

	/**
	 * Handle broken POST request.
	 */
	public static function handleBrokenRequest()
	{
		if( sizeof($_POST) != 0 || !postvalue('submit') )
			return;
		if( !postvalue("editid1") )
		{
			$returnJSON = array();
			$returnJSON['success'] = false;
			$returnJSON['message'] = "Error occurred";
			$returnJSON['fatalError'] = true;
			echo printJSON($returnJSON);
			exit();
		}
		else
		{
			if( postvalue('fly') )
			{
				echo -1;
				exit();
			}
			else
				$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
		}
	}

	protected function buildNewRecordData()
	{
		// define temporary arrays. These are required for ASP conversion
		$evalues = array();
		$efilename_values = array();
		$blobfields = array();
		$keys = $this->keys;

		foreach($this->editFields as $f)
		{
			$control = $this->getControl( $f, $this->id );
			$control->readWebValue($evalues, $blobfields, NULL, NULL, $efilename_values);
			if( isset($keys[ $f ]) && isset( $evalues[ $f ] ) )
			{
				//	ASP conversion requires this separate "if".
				if( $keys[ $f ] != $control->getWebValue() )
				{
					$keys[ $f ] = $control->getWebValue();
					$this->keysChanged = true;
				}
			}
		}
		if( $this->keysChanged )
			$this->setKeys( $keys );

		foreach($efilename_values as $ekey => $value)
		{
			$evalues[ $ekey ] = $value;
		}
		$this->newRecordData = $evalues;
	}

	/**
	 * Process user data input and save it to the database table
	 */
	public function processDataInput()
	{
		//	CSRF protection
		if( !isPostRequest() )
			return false;

		//	get prepared for the data saving
		$this->oldKeys = $this->keys;

		$this->buildNewRecordData();

		if( !$this->recheckUserPermissions() )
		{
			//	prevent the page from reading database values
			$this->oldRecordData = $this->newRecordData;
			$this->cachedRecord = $this->newRecordData;
			$this->recordValuesToEdit = null;
			return false;
		}

		if( !$this->checkCaptcha() )
			return false;

		if( !$this->isRecordEditable( true ) )
			return $this->SecurityRedirect();

		if( !$this->callBeforeEditEvent() )
			return false;

		$this->setUpdatedLatLng( $this->getNewRecordData(), $this->getOldRecordData() );

		if( !$this->checkDeniedDuplicatedValues() )
			return false;

		if( !$this->confirmLockingBeforeSaving() )
			return false;

		//	do save the record
		if( $this->callCustomEditEvent() )
		{

			$updateResult = $this->dataSource->updateSingle( $this->getUpdateDataCommand() );
			$this->updatedSuccessfully = $updateResult;
			if( !$this->updatedSuccessfully ) {
				$this->setDatabaseError( $this->dataSource->lastError() );
			}
		}

		$this->unlockNewRecord();

		if( !$this->updatedSuccessfully )
		{
			$this->setKeys( $this->oldKeys );
			return false;
		}
		//	after save steps

		if( in_array( $this->getAfterEditAction(), array( AE_TO_EDIT, AE_TO_PREV_EDIT, AE_TO_NEXT_EDIT ) ) )
			$_SESSION[ $this->sessionPrefix . "_recordUpdated" ] = true;

		$this->ProcessFiles();

		$this->messageType = MESSAGE_INFO;
		$this->setSuccessfulEditMessage();

		$this->callAfterSuccessfulSave();

		$this->unlockOldRecord();

		$this->mergeNewRecordData();

		$this->auditLogEdit();

		$this->callAfterEditEvent();

		$this->setKeys( $this->keys );

		return true;
	}

	/**
	 * Set a successful edit message
	 */
	protected function setSuccessfulEditMessage()
	{
		if( $this->isMessageSet() )
			return;

		if( $this->isBootstrap() && $this->isSimpleMode() )
		{
			$_SESSION["successfulEdit"] = $this->updatedSuccessfully;
		}
			
		$this->setMessage( "<strong>&lt;&lt;&lt; "."Record updated". " &gt;&gt;&gt;</strong>" );
	}

	/**
	 * Check if updated data contains duplicated values
	 * @return Boolean
	 */
	protected function checkDeniedDuplicatedValues()
	{
		$oldData = $this->getOldRecordData();
		return $this->checkDeniedDuplicatedForUpdate( $oldData, $this->newRecordData );
	}

	/**
	 * @param Array keys (optional)
	 */
	protected function auditLogEdit( $keys = array() )
	{
		if( !$keys )
			$keys = $this->keys;

		if( $this->auditObj )
			$this->auditObj->LogEdit( $this->tName, $this->newRecordData, $this->getOldRecordData(), $keys );
	}

	/**
	 *	Add missing values from oldRecordData to newRecordData
	 *	This is required for the Audit and the AfterEdit event
	 */
	protected function mergeNewRecordData()
	{
		if( !$this->auditObj && !$this->eventsObject->exists("AfterEdit") )
			return;

		foreach($this->getOldRecordData() as $f => $v)
		{
			if( !isset( $this->newRecordData[ $f ] ) )
				$this->newRecordData[ $f ] = $v;
		}
	}

	/**
	 *	Call After Record Updated event
	 */
	protected function callAfterEditEvent()
	{
		if( !$this->eventsObject->exists("AfterEdit") )
			return;

		$this->eventsObject->AfterEdit( $this->newRecordData,
			$this->getKeysWhereClause( false ),
			$this->getOldRecordData(),
			$this->keys,
			$this->mode == EDIT_INLINE,
			$this );
	}

	/**
	 *	Unlock the record not existing anymore after successful updating.
	 */
	protected function unlockOldRecord()
	{
		if( $this->lockingObj && $this->keysChanged )
			$this->lockingObj->UnlockRecord($this->tName, $this->oldKeys , "");
	}

	/**
	 *	Unlock the record to be created after unsuccessful updating.
	 */
	protected function unlockNewRecord()
	{
		if( $this->lockingObj )
			$this->lockingObj->UnlockRecord($this->tName, $this->keys , "");
	}

	/**
	 *	Call each control's afterSuccessfulSave method
	 */
	protected function callAfterSuccessfulSave()
	{
		foreach($this->editFields as $f)
		{
			$this->getControl($f, $this->id)->afterSuccessfulSave();
		}
	}

	/**
	 *	Call Before Record Updated event
	 */
	protected function callBeforeEditEvent()
	{
		if( !$this->eventsObject->exists("BeforeEdit") )
			return true;

		$usermessage = "";
		$ret = $this->eventsObject->BeforeEdit( $this->newRecordData,
			$this->getKeysWhereClause( true ),
			$this->getOldRecordData(),
			$this->oldKeys,
			$usermessage,
			$this->mode == EDIT_INLINE,
			$this );

		if( $usermessage != "" )
			$this->setMessage( $usermessage );

		return $ret;
	}

	/**
	 *	Call Custom Edit event
	 */
	protected function callCustomEditEvent()
	{
		if( !$this->eventsObject->exists("CustomEdit") )
			return true;

		$usermessage = "";
		$ret = $this->eventsObject->CustomEdit( $this->newRecordData,
			$this->getKeysWhereClause( true ),
			$this->getOldRecordData(),
			$this->oldKeys,
			$usermessage,
			$this->mode == EDIT_INLINE,
			$this );

		if( strlen( $usermessage ) > 0 )
		{
			$this->updatedSuccessfully = false;
			$this->setMessage( $usermessage );
			return false;
		}

		if( $ret )
			return true;

		$this->updatedSuccessfully = true;

		return false;
	}

	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		if ( $this->mode == ADD_ONTHEFLY || $this->mode == ADD_INLINE || $this->mode == EDIT_INLINE )
		{
			return false;
		}

		return $this->pSet->hasCaptcha();
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{
		return $this->captchaName;
	}

	protected function recheckUserPermissions()
	{
		if( CheckTablePermissions($this->tName, "E") )
			return true;
		
		return parent::recheckUserPermissions();
	}

	/**
	 *	Do locking stuff before saving the data.
	 *	Returns false if locking was unsuccessful and the saving action is impossible
	 */
	protected function confirmLockingBeforeSaving()
	{
		if( !$this->lockingObj )
			return true;
		
		$lockmessage = "";
		if( $this->keysChanged )
		{
			//	confirm and acquire locks on both old and new sets of keys
			$lockConfirmed = $this->lockingObj->ConfirmLock($this->tName, $this->oldKeys, $lockmessage);
			if( $lockConfirmed )
				$lockConfirmed = $this->lockingObj->LockRecord($this->tName, $this->keys);
		}
		else
		{
			//	confirm lock on the edited record
			$lockConfirmed = $this->lockingObj->ConfirmLock($this->tName, $this->oldKeys, $lockmessage);
		}

		if( !$lockConfirmed )
		{
			$this->lockingMessageAttr = "";
			if( $this->mode == EDIT_INLINE )
			{
				if( $this->lockingAdmin() )
					$lockmessage = $this->lockingObj->GetLockInfo($this->tName, $this->oldKeys, false, $this->id);

				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				echo printJSON( $returnJSON );
				exit();
			}
			else
			{
				if( $this->lockingAdmin() )
					$this->lockingMessageText = $this->lockingObj->GetLockInfo($this->tName, $this->oldKeys, true, $this->id);
				else
					$this->lockingMessageText = $lockmessage;
			}
			$this->readEditValues = true;
			return false;
		}
		return true;
	}

	/**
	 *	Redirect the user from the page due to security reasons.
	 */
	protected function SecurityRedirect()
	{
		if($this->mode == EDIT_INLINE)
		{
			echo printJSON(array("success" => false, "message" => "The record is not editable"));
			exit();
		}
		Security::redirectToList( $this->tName );
		return;
	}

	/**
	 * @param Boolean useOldData
	 * @return Boolean
	 */
	protected function isRecordEditable( $useOldData )
	{
		global $globalEvents;
		if( $globalEvents->exists("IsRecordEditable", $this->tName) )
		{
			if( !$globalEvents->IsRecordEditable($useOldData ? $this->getOldRecordData() : $this->getCurrentRecordInternal(), true, $this->tName) )
				return false;
		}

		return true;
	}

	/**
	 * @return Array
	 */
	public function getOldRecordData()
	{
		if( $this->oldRecordData === null )
		{

			$dc = new DsCommand();
			$dc->filter = $this->getSecurityCondition();
			$dc->keys = $this->oldKeys;
			$fetchedArray = $this->dataSource->getSingle( $dc )->fetchAssoc();
			$this->oldRecordData = $this->cipherer->DecryptFetchedArray( $fetchedArray );
		}

		return $this->oldRecordData;
	}

	public function getUpdateDataCommand() {
		$dc = new DsCommand();
		$dc->filter = $this->getSecurityCondition();
		$dc->keys = $this->oldKeys;
		$dc->values = &$this->newRecordData;
		return $dc;
	}

	public function & getNewRecordData()
	{
		return $this->newRecordData;
	}

	/**
	 * Check if the page's message is set
	 * @return Boolean
	 */
	protected function isMessageSet()
	{
		return strlen( $this->message ) > 0;
	}

	/**
	 * @param String message
	 */
	public function setDatabaseError( $message )
	{
		if( $this->mode != EDIT_INLINE )
		{
			$this->message = "<strong>&lt;&lt;&lt; "."Record was NOT edited"."</strong> &gt;&gt;&gt;<br><br>".$message;
		}
		else
			$this->message = "Record was NOT edited".". ".$message;

		$this->messageType = MESSAGE_ERROR;
	}

	/**
	 * @param String fName
	 * @return Boolean
	 */
	protected function checkFieldOnPage( $fName )
	{
		if( $this->mode == EDIT_INLINE )
			return $this->pSet->appearOnInlineEdit( $fName );

		return $this->pSet->appearOnEditPage( $fName );
	}

	/**
	 * Get the current record data to build correct edit controls (xt_buildeditcontrol)
	 * @return Array
	 */
	public function getFieldControlsData()
	{
		if( $this->recordValuesToEdit )
			return $this->recordValuesToEdit;

		$editValues = $this->getCurrentRecordInternal();
		if( $this->eventsObject->exists("ProcessValuesEdit") )
			$this->eventsObject->ProcessValuesEdit($editValues, $this);
		$this->recordValuesToEdit = $editValues;
		return $this->recordValuesToEdit;
	}

	function viewAvailable()
	{

		if( $this->dashElementData )
			return parent::viewAvailable() && $this->dashElementData["details"][$this->tName]["view"];
		return parent::viewAvailable();
	}

	/**
	 *	API
	 *
	 */
	public function setMessageType( $type )
	{
		$this->messageType = $type;
	}


	protected function isPopupMode()
	{
		return $this->mode == EDIT_POPUP;
	}

	protected function isSimpleMode()
	{
		return $this->mode == EDIT_SIMPLE;
	}

	public static function EditPageFactory( $params ) {
		if( !$params["selection"] || !is_array( $params["selection"] ) )
		{
			//	PRG after update Selected
			$params["selection"] = $_SESSION["edit_seletion"];
			unset( $_SESSION["edit_seletion"] );
		}

		if( $params["selection"] && is_array( $params["selection"] ) )
		{
			if( !!$params["selection"] )
			{
				if( $params["mode"] == EDIT_SIMPLE )
					$params["mode"] = EDIT_SELECTED_SIMPLE;

				if( $params["mode"] == EDIT_POPUP )
					$params["mode"] = EDIT_SELECTED_POPUP;

				require_once( getabspath("classes/editselectedpage.php") );
				return new EditSelectedPage( $params );
			}
		}

		return new EditPage($params);
	}

	function getSecurityCondition() {
		return Security::SelectCondition( "E", $this->pSet );
	}

	function inDashboardMode() {
		return $this->mode == EDIT_DASHBOARD;
	}

	public function getSingleRecordCommand() {
		if( $this->checkKeysSet() ) {
			$dc = new DsCommand();
			$dc->filter = $this->getSecurityCondition();
			$dc->keys = $this->keys;
		} else {
			return $this->getSubsetDataCommand();
		}
		return $dc;
	}


	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "edit_message" );
		}
		return parent::element2Item( $name );
	}

	protected function checkShowBreadcrumbs()
	{
		return $this->mode == EDIT_SIMPLE;
	}

	function createProjectSettings() {
		$this->pSet = new ProjectSettings($this->tName, $this->pageType, $this->pageName, $this->pageTable );
		if( $this->mode != EDIT_INLINE && $this->pSet->getPageType() !== PAGE_EDIT )
		{
			$this->pSet = new ProjectSettings($this->tName, $this->pageType, null, $this->pageTable );
		}

		if( $this->mode == EDIT_INLINE || $this->mode == EDIT_POPUP && $this->action == "edited" ) {
			$this->pSet->setPageType( "list" );
		}
	}

	/**
	 * @param String fName
	 * @param Number recId
	 * @param Array data
	 * @return String
	 */
	public function getSpreadsheetControlMarkup( $fName, $recId, &$data ) {
		$ctrlParams = $this->getEditContolParams( $fName, $recId, $data );
		$ctrlParams["mode"] = MODE_INLINE_EDIT;
		$ctrlParams["extraParams"]["spreadsheet"] = true;

		$ctrl = $this->getControl( $fName, $recId, $ctrlParams["extraParams"] );
		return $ctrl->getControlMarkup( $ctrlParams, $data );
	}
}
?>