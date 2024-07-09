<?php
class AddPage extends RunnerPage
{
	/**
	 * The page's message type
	 * @type Number
	 */
	public $messageType = MESSAGE_ERROR;

	protected $auditObj = null;

	/**
	 * The page's fields array
	 */
	protected $addFields = array();

	protected $readAddValues = false;

	/**
	 * The record is being added through the 'List page with search' InlineAdd controls
	 */
	protected $insertedSuccessfully = false;

	protected $defvalues = array();

	protected $newRecordData = array();

	/**
	 * It could be set up in ADD_MASTER mode only
	 */
	public $afterAdd_id = '';

	/**
	 * The page's action
	 * @type String
	 */
	public $action = "";

	/**
	 * It's set up in inline add mode only
	 */
	public $screenWidth = 0;

	/**
	 * It's set up in inline add mode only
	 */
	public $screenHeight = 0;

	/**
	 * It's set up in inline add mode only
	 */
	public $orientation = '';

	/**
	 * It's equal to true when a record is added
	 * through the 'List page with search' InlineAdd controls
	 */
	public $forListPageLookup = false;

	/**
	 * The short lookup table name
	 * It's set up properly when a record is being added
	 * in a lookup 'Add new' popup
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $lookupTable = "";

	/**
	 * It's set up properly when a record is being added
	 * in a lookup 'Add new' popup
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $lookupField = "";

	/**
	 * It's set up properly when a record is being added
	 * in a lookup 'Add new' popup
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $lookupPageType = "";

	/**
	 * @type Array
	 */
	public $parentCtrlsData;


	/**
	 * @type Number
	 */
	protected $afterAddAction = null;

	/**
	 *
	 */
	public $fromDashboard = "";

	public $forSpreadsheetGrid = false;
	public $hostPageName = "";
	public $newRowId;
	
	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->addFields = $this->getPageFields();
		$this->auditObj = GetAuditObject($this->tName);

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
			$this->formBricks["header"] = "addheader";
			$this->formBricks["footer"] = "addbuttons";
			$this->assignFormFooterAndHeaderBricks( true );
		}

		$this->addPageSettings();
	}

	function setSessionVariables() {
		parent::setSessionVariables();
		//	don't use mastertable pre-stroed in session
		if( !postvalue("mastertable")) {
			$this->masterTable = "";
		} 
	}

	/**
	 * Add js page settings
	 */
	protected function addPageSettings()
	{
		if( $_SESSION[ $this->sessionPrefix . "_recordAdded" ] )
		{
			$this->setProxyValue( $this->shortTableName."_recordAdded", true );
			unset( $_SESSION[ $this->sessionPrefix . "_recordAdded" ] );
		}
		else
			$this->setProxyValue( $this->shortTableName."_recordAdded", false );

		if( $this->mode != ADD_SIMPLE && $this->mode != ADD_POPUP )
			return;

		$afterAddAction = $this->getAfterAddAction();
		$this->jsSettings["tableSettings"][ $this->tName ]["afterAddAction"] = $afterAddAction;

		if ( $afterAddAction == AA_TO_DETAIL_LIST || $afterAddAction == AA_TO_DETAIL_ADD )
			$this->jsSettings["tableSettings"][ $this->tName ]["afterAddActionDetTable"] = GetTableURL( $this->pSet->getAADetailTable() );
	}

	/**
	 * Get the correct after add action
	 * basing on the table settings
	 * @return Number
	 */
	protected function getAfterAddAction()
	{
		if( isset( $this->afterAddAction ) && !is_null( $this->afterAddAction ) )
			return $this->afterAddAction;

		$action = $this->pSet->getAfterAddAction();

		if( $this->mode == ADD_POPUP && $this->pSet->checkClosePopupAfterAdd()
			|| $action == AA_TO_VIEW && !$this->viewAvailable()
			|| $action == AA_TO_EDIT && !$this->editAvailable() )
		{
			$action = AA_TO_LIST;
		}

		if( $action == AA_TO_DETAIL_LIST || $action == AA_TO_DETAIL_ADD )
		{
			$dTName = $this->pSet->getAADetailTable();
			$dPset = new ProjectSettings( $dTName );
			$dPermissions = $this->getPermissions( $dTName );

			$listPageAllowed = $dPset->hasListPage() && $dPermissions["search"];

			if( !$dTName || $action == AA_TO_DETAIL_LIST && !$listPageAllowed
				|| $action == AA_TO_DETAIL_ADD && ( !$dPset->hasAddPage() || !$dPermissions["add"] && !$listPageAllowed ) )
			{
				$action = AA_TO_LIST;
			}
		}

		$this->afterAddAction = $action;
		return $this->afterAddAction;
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == ADD_DASHBOARD || $this->mode == ADD_MASTER_DASH 
			|| ($this->mode == ADD_POPUP || $this->mode == ADD_INLINE || $this->fromDashboard != "" ) && $this->dashTName )
		{
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
			return;
		}

		parent::assignSessionPrefix();

		if( $this->mode == ADD_ONTHEFLY )
			$this->sessionPrefix.= "_add";
	}

	/**
	 * Set template file
	 */
	public function setTemplateFile()
	{
		if( $this->mode == ADD_INLINE )
			$this->templatefile = GetTemplateName($this->shortTableName, "inline_add");

		parent::setTemplateFile();
	}

	/**
	 * Get the page's fields list
	 * @return Array
	 */
	protected function getPageFields()
	{
		if( $this->mode == ADD_INLINE )
		{
			if( $this->masterTable && !$this->inlineAddAvailable() && $this->masterPageType == PAGE_ADD )  // #12518
			{
				if( $this->isPD() )
					return $this->pSet->getInlineAddFields();

				return $this->pSet->getAddFields();
			}

			return $this->pSet->getInlineAddFields();
		}

		return $this->pSet->getAddFields();
	}

	/**
	 * Process a broken request
	 */
	public static function handleBrokenRequest()
	{
		if( sizeof($_POST) != 0 || !postvalue('submit') )
			return;

		if( postvalue("inline") )
		{
			$returnJSON = array();
			$returnJSON['success'] = false;
			$returnJSON['message'] = "Error occurred";
			$returnJSON['fatalError'] = true;
			echo printJSON($returnJSON);
			exit();
		}

		if( postvalue("fly") )
		{
			echo -1;
			exit();
		}

		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}

	/**
	 * Redirect after details saved
	 */
	public function redirectAfterAdd()
	{
		if( $_SESSION['after_add_data'] ) {
			$aaData =& $_SESSION['after_add_data'];
		} else {
			$aaData = array();
		}
		if( isset($aaData[ $this->afterAdd_id ]) && $aaData[ $this->afterAdd_id ] )
		{
			$data = $aaData[ $this->afterAdd_id ];
			$this->keys = $data['keys'];
			$this->newRecordData = $data['avalues'];
		}
		if( $this->eventsObject->exists("AfterAdd") && isset($aaData[ $this->afterAdd_id ]) && $aaData[ $this->afterAdd_id ] )
		{
			$this->eventsObject->AfterAdd( $data['avalues'], $data['keys'], $data['inlineadd'], $this );

		}
		unset( $aaData[ $this->afterAdd_id ] );

		foreach( $aaData as $k => $v)
		{
			if( !is_array($v) or !array_key_exists('time', $v) )
			{
				unset( $aaData[ $k ] );
				continue;
			}

			if( $v['time'] < time() - 3600 )
				unset($aaData[ $k ]);
		}
		$this->afterAddActionRedirect();
	}

	/**
	 * Process the page
	 */
	public function process()
	{
		if( strlen($this->afterAdd_id) )
		{
			$this->redirectAfterAdd();
			return;
		}

		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessAdd") )
			 $this->eventsObject->BeforeProcessAdd( $this );

		if( $this->action == "added" )
		{
			// insert new record if we have to
			$this->processDataInput();

			$this->readAddValues = !$this->insertedSuccessfully;

			if( $this->mode != ADD_SIMPLE && $this->mode != ADD_DASHBOARD && $this->mode != ADD_MASTER_DASH )
			{
				$this->reportSaveStatus();
				return;
			}

			if( $this->insertedSuccessfully )
			{
				// VBScript fix! don't &&-join these two conditions
				if( $this->afterAddActionRedirect() )
					return;
			}
		}

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->prgReadMessage();

		$this->prepareDefvalues();

		if( $this->eventsObject->exists("ProcessValuesAdd") )
			$this->eventsObject->ProcessValuesAdd( $this->defvalues, $this );

		$this->prepareReadonlyFields();
		$this->prepareEditControls();

		$this->prepareButtons();
		$this->prepareSteps();
		$this->prepareDetailsTables();

		// add button events if exist
		if( $this->mode == ADD_SIMPLE || $this->mode == ADD_ONTHEFLY )
			$this->addButtonHandlers();

		$this->addCommonJs();

		$this->doCommonAssignments();
		$this->prepareBreadcrumbs();
		$this->prepareCollapseButton();

		$this->displayAddPage();
	}

	/**
	 * Insert a new record to db
	 */
	protected function processDataInput()
	{
		if( $this->action != "added" )
			return;

		//	CSRF protection
		if( !isPostRequest() )
			return;

		$this->buildNewRecordData();

		if( !$this->checkCaptcha() )
			return;

		if( !$this->recheckUserPermissions() )
			return;

		if( !$this->callBeforeAddEvent() )
			return;

		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		$this->setUpdatedLatLng( $this->newRecordData );

		if( !$this->checkDeniedDuplicatedValues() )
			return;

		if( $this->callCustomAddEvent() )
		{
			$insertResult = $this->dataSource->insertSingle( $this->getInsertDataCommand() );
			$this->insertedSuccessfully = $insertResult !== false;

			if( !$this->insertedSuccessfully )
				$this->setDatabaseError( $this->dataSource->lastError() );
			else
			{
				$this->newRecordData = $insertResult;
				// set up keys
				foreach( $this->pSet->getTableKeys() as $kf ) {
					if( isset( $this->newRecordData[ $kf ] ) )
						$this->keys[ $kf ] = $this->newRecordData[ $kf ];
				}
				
				if ( count( $this->pSet->getTableKeys() ) != count( $this->keys ) )
					$this->keys = array();
			}
		}

		if( !$this->insertedSuccessfully )
			return;

		if( $this->getAfterAddAction() == AA_TO_ADD )
			$_SESSION[ $this->sessionPrefix . "_recordAdded" ] = true;

		$this->ProcessFiles();

		if( $this->auditObj )
			$this->auditObj->LogAdd( $this->tName, $this->newRecordData, $this->keys );

		$this->callAfterSuccessfulSave();
		$this->callAfterAddEvent();

		$this->messageType = MESSAGE_INFO;
		$this->setSuccessfulUpdateMessage();
	}

	/**
	 * Fill newRecordData properties
	 */
	protected function buildNewRecordData()
	{
		$avalues = array();
		$blobfields = array();
		$afilename_values = array();

		foreach($this->addFields as $f)
		{
			$control = $this->getControl( $f, $this->id );
			$control->readWebValue($avalues, $blobfields, NULL, NULL, $afilename_values);
		}

		if( Security::advancedSecurityAvailable() ) {
			$securityType = $this->pSet->getAdvancedSecurityType();
			if( !$this->isAdminTable() && ($securityType == ADVSECURITY_EDIT_OWN || $securityType == ADVSECURITY_VIEW_OWN) )
			{
				$tableOwnerIdField = $this->pSet->getTableOwnerIdField();
				// insert owner id value if it exists an It hasn't already set by user
				if( $this->checkIfToAddOwnerIdValue( $tableOwnerIdField, $avalues[ $tableOwnerIdField ] ) )
					$avalues[ $tableOwnerIdField ] = prepare_for_db( $tableOwnerIdField, $_SESSION["_".$this->tName."_OwnerID"] );
			}
		}
		$masterTables = $this->pSet->getMasterTablesArr( );
		// insert master key value if exists and if not specified
		foreach( $masterTables as $mTableData )
		{
			if( $this->masterTable == $mTableData["mDataSourceTable"] )
			{
				foreach( $mTableData["detailKeys"] as $idx => $dk )
				{
					$masterkeyIdx = "masterkey".($idx + 1);
					if( strlen( postvalue($masterkeyIdx) ) )
						$_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ] = postvalue($masterkeyIdx);

					if( !isset( $avalues[ $dk ] ) || $avalues[ $dk ] == "" )
						$avalues[ $dk ] = prepare_for_db( $dk, $_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ] );
				}
			}
		}

		$this->addLookupFilterFieldValue( $avalues, $avalues );

		foreach($afilename_values as $fileFName => $value)
		{
			$avalues[ $fileFName ] = $value;
		}

		//	calculate order for the reorderRows feature
		$listPSet = $this->getListPSet();
		if( $listPSet->reorderRows() ) {
			$order = postvalue("order"); 
			if( $order ) {
				$order = $this->getUniqueOrder( $listPSet, $order );
			} else {
				$order = $this->getMaxOrderValue( $listPSet ) + 1;
			}
			$avalues[ $listPSet->reorderRowsField() ] = $order;
		}

		$this->newRecordData = $avalues;
	}

	/**
	 * Add to the values array the data about lookup filter field
	 * if it hasn't been set yet
	 * @param Array recordData
	 * @param &Array values
	 */
	protected function addLookupFilterFieldValue( $recordData, &$values )
	{
		$lookupPSet = getLookupMainTableSettings($this->tName, $this->lookupTable, $this->lookupField);
		if( !$lookupPSet )
			return;

		if( $lookupPSet->useCategory( $this->lookupField ) )
		{
			foreach( $lookupPSet->getParentFieldsData( $this->lookupField ) as $cData )
			{
				if( isset( $this->parentCtrlsData[ $cData['main'] ]) && !isset( $recordData[ $cData['lookup'] ] ) )
					$values[ $cData['lookup'] ]= $this->parentCtrlsData[ $cData['main'] ];
			}
		}
	}

	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		if ( $this->mode == ADD_ONTHEFLY || $this->mode == ADD_INLINE )
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

	/**
	 * @return Boolean
	 */
	protected function recheckUserPermissions()
	{
		if( CheckTablePermissions($this->tName, "A") )
			return true;

		return parent::recheckUserPermissions();
	}

	/**
	 * Execute before Add event
	 * @return Boolean
	 */
	protected function callBeforeAddEvent()
	{
		if( !$this->eventsObject->exists("BeforeAdd") )
			return true;

		$usermessage = "";
		$ret = $this->eventsObject->BeforeAdd( $this->newRecordData, $usermessage, $this->mode == ADD_INLINE, $this );
		if( $usermessage != "" )
			$this->setMessage( $usermessage );

		return $ret;
	}

	/**
	 * Check if some values are duplicated for the fields not allowing duplicates
	 * @return Boolean
	 */
	public function checkDeniedDuplicatedValues()
	{
		$usermessage = "";
		$ret = $this->hasDeniedDuplicateValues( $this->newRecordData, $usermessage );
		if( $ret )
			$this->setMessage( $usermessage );

		return !$ret;
	}

	/**
	 * #7374
	 * @return Boolean
	 */
	protected function callCustomAddEvent()
	{
		if( !$this->eventsObject->exists("CustomAdd") )
			return true;

		$keys = array();
		$customAddError = "";
		$ret = $this->eventsObject->CustomAdd( $this->newRecordData, $keys, $customAddError, $this->mode == ADD_INLINE, $this );

		if( strlen( $customAddError ) > 0 )
		{
			$this->insertedSuccessfully = false;
			$this->setMessage( $customAddError );
			$this->keys = array();
			return false;
		}

		//	do standard Add processing
		if( $ret )
			return true;

		$this->insertedSuccessfully = true;

		// update keys and inserted data
		$keyFields = $this->pSet->getTableKeys();

		if( !is_array( $keys ) && count( $keyFields ) == 1 )
			$keys = array( $keyFields[0] => $keys );

		foreach( $keyFields as $kf ) {
			if( strlen( $keys[ $kf ] ) )
				$this->keys[ $kf ] = $kf;
			else if( array_key_exists( $kf, $this->newRecordData ) )
				$this->keys[ $kf ] = $this->newRecordData[ $kf ];
			else
				$this->keys[ $kf ] = $this->dataSource->lastAutoincValue( $kf );

			$this->newRecordData[ $kf ] = $this->keys[ $kf ];
		}

		return false;
	}

	/**
	 * Give possibility to all edit controls to clean their data
	 */
	protected function callAfterSuccessfulSave()
	{
		foreach($this->addFields as $f)
		{
			$this->getControl( $f, $this->id )->afterSuccessfulSave();
		}
	}

	/**
	 * Execute After Add event or prepare all necessary data for its execution after redirect
	 */
	protected function callAfterAddEvent()
	{
		if( !$this->eventsObject->exists("AfterAdd") )
			return;

		if( $this->mode != ADD_MASTER )
		{
			$this->eventsObject->AfterAdd( $this->newRecordData, $this->keys, $this->mode == ADD_INLINE, $this );
			return;
		}

		$this->afterAdd_id = generatePassword(20);

		if( !$_SESSION['after_add_data'] ) {
			$_SESSION['after_add_data'] = array();
		}
		$_SESSION['after_add_data'][ $this->afterAdd_id ] = array(
			'avalues' => $this->newRecordData,
			'keys'=> $this->keys,
			'inlineadd' => $this->mode == ADD_INLINE,
			'time' => time()
		);
	}

	/**
	 * Set a successful update message.
	 * Add the corresponding edit/view links to the info message
	 */
	protected function setSuccessfulUpdateMessage()
	{
		if( $this->isMessageSet() )
			return;

		if( $this->mode == ADD_INLINE )
			$infoMessage = ""."Record was added"."";
		else
			$infoMessage = "<strong><<< "."Record was added"." >>></strong>";

		if( $this->mode != ADD_SIMPLE && $this->mode != ADD_MASTER || !$this->keys )
		{
			$this->setMessage( $infoMessage );
			return;
		}

		$k = 0;
		$keyParams = array();
		$keysArray = array();
		foreach( $this->keys as $idx => $val )
		{
			$keyParams[] = "editid".( ++$k )."=".runner_htmlspecialchars(rawurlencode(@$val));
			$keysArray[] = $val;
		}
		$keylink = implode("&", $keyParams);

		if ( $this->isBootstrap() && count($keysArray) > 0 && $this->mode == ADD_SIMPLE )
		{
			$_SESSION["successKeys"] = $keysArray;
		}
		else
		{
			$infoMessage.= "<br>";

			if( $this->editAvailable() )
				$infoMessage.= "&nbsp;<a href='".GetTableLink( $this->pSet->getShortTableName(), "edit", $keylink )."'>"."Edit"."</a>&nbsp;";

			if( $this->viewAvailable() )
				$infoMessage.= "&nbsp;<a href='".GetTableLink( $this->pSet->getShortTableName(), "view", $keylink )."'>"."View"."</a>&nbsp;";
		}

		$this->setMessage( $infoMessage );
	}

	/**
	 * Print JSON containing a saved record data on ajax-like request
	 */
	protected function reportSaveStatus()
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
		global $globalEvents;
		$returnJSON = array();
		
		if( $this->action != "added" || $this->mode == ADD_SIMPLE )
			return $returnJSON;

		$returnJSON['success'] = $this->insertedSuccessfully;
		$returnJSON['message'] = $this->message;

		if( !$this->isCaptchaOk )
		{
			$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();
		}
		elseif( $this->mode == ADD_POPUP || $this->mode == ADD_MASTER || $this->mode == ADD_MASTER_POPUP || $this->mode == ADD_MASTER_DASH )
		{
			$sessPrefix = $this->tName . "_" . $this->pageType;
			if( isset($_SESSION["count_passes_captcha"]) || $_SESSION["count_passes_captcha"] > 0 || $_SESSION["count_passes_captcha"] < 5 )
				$returnJSON['hideCaptcha'] = true;
		}


		if( !$this->insertedSuccessfully )
			return $returnJSON;

		$jsKeys = array();
		$keyFields = $this->pSet->getTableKeys();
		if ( $this->keys ) {
			foreach( $keyFields as $idx => $f) {
				$jsKeys[ $idx ] = $this->keys[ $f ];
			}
		}

		if( $this->mode == ADD_ONTHEFLY )
		{
			$lokupData = $this->getLookupData();
			$returnJSON['linkValue'] = $lokupData['linkValue'];
			$returnJSON['displayValue'] = $lokupData['displayValue'];
			$returnJSON['vals'] = $lokupData['vals'];

			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;

			return $returnJSON;
		}

		//	get current values and show edit controls
		$data = array();
		$haveData = true;

		if( $this->keys )
			$data = $this->getRecordData( $this->keys );

		if( !$data )
		{
			$data = $this->newRecordData;
			$haveData = false;
		}

		$keyParams = array();
		foreach( $this->pSet->getTableKeys() as $i => $kf ) {
			$keyParams[] = "key".($i + 1). "=". runner_htmlspecialchars( rawurlencode( @$data[ $kf ] ));
		}
		$keylink = "&" . implode("&", $keyParams);

		$showValues = array();
		$showFields = array();
		$showRawValues = array();

		$listPSet = $this->getListPSet();

		$listViewControls = new ViewControlsContainer( 
			$listPSet,
			$this->pageType, 
			$this 
		);

		foreach( $this->pSet->getFieldsList() as $f )
		{
			$control = $listViewControls->getControl( $f );
			$showValues[ $f ] = $control->showDBValue( $data, $keylink, true );
			$showFields[] = $f;

			if( IsBinaryType( $this->pSet->getFieldType( $f ) ) )
				$showRawValues[ $f ] = "";
			else
				$showRawValues[ $f ] = runner_substr($data[ $f ], 0, 100);
		}

		//	reorderRows stuff
		if( $listPSet->reorderRows() ) {
			$returnJSON['order'] = $data[ $listPSet->reorderRowsField() ];
		}

		$returnJSON['keys'] = $jsKeys;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;

		$returnJSON['detKeys'] = $this->getShowDetailKeys( $data );

		$dmapIconsData = $this->getDashMapsIconsData( $data );
		if( !!$dmapIconsData )
			$returnJSON['mapIconsData'] = $dmapIconsData;

		$fieldsIconsData = $this->getFieldMapIconsData( $data );
		if( !!$fieldsIconsData )
			$returnJSON['fieldsMapIconsData'] = $fieldsIconsData;

		
		if( $this->forSpreadsheetGrid && $haveData ) {
			//  new added grid row id	
			$newRowId = $this->newRowId ? $this->newRowId : $this->id;
			$editPage = $this->getRelatedInlineEditPage( $this->hostPageName, $this->keys, $newRowId );

			$returnJSON["editFields"] = $listPSet->getInlineEditFields();
			
			// use "htmlControls" key no to interfire with dash html data
			$returnJSON["htmlControls"] = array();
			foreach( $listPSet->getInlineEditFields() as $fName ) {
				$controls = $editPage->getContolMapData( $fName, $newRowId, $data, $editPage->editFields );
				// set edit page controlsMap
	