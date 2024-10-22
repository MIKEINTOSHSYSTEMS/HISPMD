<?php
require_once(getabspath('classes/orderclause.php'));
require_once(getabspath("classes/sql.php"));
require_once(getabspath("classes/projectsettings.php"));

class ListPage extends RunnerPage
{

	public $querySQL = "";

	/**
     * Page size
     * @var integer
     * @intellisense
     */
	public $gPageSize = 0;

	/**
	 * OrderClause object. For order clause building
	 * @type OrderClause
	 */
	protected $orderClause = null;

	/**
	 * Do export or not
	 * @type bool
	 */
	public $exportTo = false;

	/**
	 * Delete records enabled
	 * @type bool
	 */
	public $deleteRecs = false;

	/**
	 * Array of fields that is shown on list
	 * @type array()
	 * array['listFields']= array('fName'=>"@f.strName s", 'viewFormat'=>'@f.strViewFormat');
	 */
	public $listFields = array();


	/**
	 * Record set, that retrieved from DB
	 * @type link
	 */
	protected $recSet = null;

	/**
	 * If use group scurity or not
	 * @type integer
	 */
	public $nSecOptions = 0;


	/**
	 * Number of record
	 * @type integer
	 */
	protected $recNo = 1;

	/**
	 * Id of row
	 * @type integer
	 */
	protected $rowId = 0; //fix it

	/**
	 * Array of selected records for delete
	 * @type array
	 */
	protected $selectedRecs = array();

	/**
	 * Number of record for delete
	 * @type integer
	 */
	protected $recordsDeleted = 0;

	/**
	 * Original table name
	 * @var string
	 */
	public $origTName = ""; //fix it



	/**
	 * Fields that used for search on panel, and should be open on every page load
	 * @type array
	 */
	public $panelSearchFields = array();

	/**
	 * Array of key's fields
	 * @type array
	 */
	public $arrKeyFields = array();

	public $audit = null;

	/**
	 * Are there records on first page or not
	 * @type bool
	 */
	public $noRecordsFirstPage = false;

	/**
	 * String ?? main table owner's Id
	 * @type string
	 */
	public $mainTableOwnerID = "";

	/**
	 * Use print friendly or not
	 * @type bool
	 */
	public $printFriendly = false;

	/**
	 * Create login page or not
	 * @type bool
	 */
	public $createLoginPage = false;

	/**
	 * Searchpanel class builder
	 * @type object
	 */
	protected $searchPanel = null;

	/**
	 * Fields for which span val should be added
	 * @type array
	 */
	 protected $arrFieldSpanVal = array();

	/**
	 * records weren't deleted due locking
	 * @type Array
	 */
	protected $lockDelRec = array();

	public $firstTime = 0;

	protected $gMapFields = array();

	/**
	 * Types of all fields in a list row
	 */
	protected $recordFieldTypes = array(); //fix it

	/**
	 * class names for the fields that were chosen to hide mobile devices
	 * @type array
	 */
	protected $hiddenColumnClasses = array();

	/**
	 * Is show add page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showAddInPopup = false;

	/**
	 * Is show edit page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showEditInPopup = false;

	/**
	 * Is show view page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showViewInPopup = false;

	/**
	 * fieldClass function cache
	 * @type Array
	 */
	protected $fieldClasses = array();

	public $sortBy;

	protected $addedDetailsCountSubqueries = array();

	protected $recordsRenderData = array();

	protected $fieldsWithRawValues = array();

	protected $editPage = null;

	/**
	 * goto field value from the request
	 */
	public $requestGoto = null;
	
	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params)
	{
		// call parent constructor
		parent::__construct($params);

		$this->listFields = array();
		$allfields = $this->pSet->getPageFields();

		foreach($allfields as $f)
		{
			if(!$this->pSet->appearOnPage($f))
				continue;
			$fieldTag = $this->pdfJsonMode() ? GoodFieldName($f)."_pdfvalue" : GoodFieldName($f)."_value";
			$this->listFields[]= array(
				"fName"=>$f,
				"goodFieldName"=>GoodFieldName($f),
				"valueFieldName" => $fieldTag,
				"viewFormat"=>$this->pSet->getViewFormat($f),
				"editFormat"=>$this->pSet->getEditFormat($f)
			);
		}


		$this->showAddInPopup = $this->pSet->isShowAddInPopup();
		$this->showEditInPopup = $this->pSet->isShowEditInPopup();
		$this->showViewInPopup = $this->pSet->isShowViewInPopup();

		$this->pSet->setPageType(PAGE_SEARCH);

		//	Before Process event
		$this->beforeProcessEvent();



		// Set language params, if have more than one language
		$this->setLangParams();

		if($this->searchClauseObj) //for asp & .net
			$this->jsSettings['tableSettings'][$this->tName]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;

		if( $this->pSet->reorderRows() ) {
			$this->jsSettings['tableSettings'][ $this->tName ]['reorderRows'] = true;
		}
		$this->jsSettings['tableSettings'][ $this->tName ]['addToBottom'] = $this->pSet->inlineAddBottom();


	

		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
		{
			// get perm for det tables
			$this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]= $this->getPermissions($this->allDetailsTablesArr[$i]['dDataSourceTable']);

			// field names of detail keys of passed detail table, when current is master
			$this->detailKeysByD[$i] = $this->pSet->getDetailKeysByDetailTable($this->allDetailsTablesArr[$i]['dDataSourceTable']);
		}

		$this->genId();


		// fill span val indicator for totals
		$this->jsSettings['tableSettings'][$this->tName]['totalFields'] = array();
		foreach ($this->totalsFields as $tField)
		{
			$totalFieldData = array('type'=> $tField['totalsType'], 'fName'=> $tField['fName'], 'format'=> $tField['viewFormat']);
			if( FORMAT_NUMBER == $tField['viewFormat'] )
				$totalFieldData["numberOfDigits"] = $this->pSet->isDecimalDigits( $tField['fName'] );

			$this->jsSettings['tableSettings'][ $this->tName ]['totalFields'][] = $totalFieldData;

			if ($tField['totalsType'] == 'COUNT')
			{
				$this->outputFieldValue($tField['fName'], 1);
			}
			else
			{
				$this->outputFieldValue($tField['fName'], 2);
			}
		}

		//if scroll body of grid
		$this->jsSettings['tableSettings'][$this->tName]['scrollGridBody'] = (( $this->listGridLayout == gltHORIZONTAL || $this->listGridLayout == gltFLEXIBLE )&& $this->isScrollGridBody);

		$this->jsSettings['tableSettings'][$this->tName]['permissions'] = $this->permis[$this->tName];
		if($this->pSet->getAdvancedSecurityType() == ADVSECURITY_EDIT_OWN) {
			$this->jsSettings['tableSettings'][$this->tName]['isEditOwn'] = $this->permis[$this->tName];
		}

		$this->settingsMap["tableSettings"]['inlineEdit'] = array("default"=>false,"jsName"=>"isInlineEdit", "option" => array("list", "inlineEdit") );
		$this->settingsMap["tableSettings"]['inlineAdd'] = array("default"=>false,"jsName"=>"isInlineAdd", "option" => array("list", "inlineAdd"));
		$this->settingsMap["tableSettings"]['copy'] = array("default"=>false,"jsName"=>"copy");
		$this->settingsMap["tableSettings"]['view'] = array("default"=>false,"jsName"=>"view");

		$this->jsSettings['tableSettings'][$this->tName]['listFields'] = array();
		for($i=0;$i<count($this->listFields);$i++)
		{
			$this->jsSettings['tableSettings'][$this->tName]['listFields'][] = $this->listFields[$i]['fName'];
			// call addGoogleMapData before call proccessRecordValue!!!
			if ($this->listFields[$i]['viewFormat'] == FORMAT_MAP)
				$this->gMapFields[] = $i;
		}

		$this->processClickAction();

		$this->createOrderByObject();

		// init setting for params in hash URL for ajax list
		if ( $this->listAjax && $this->mode != LIST_DETAILS )
		{
			$this->pageData['urlParams'] = $this->getUrlParams();
		}

		// RunnerPage fillTableSettings doesn't work well with listGridLayout key
		$this->jsSettings['tableSettings'][ $this->tName ]['listGridLayout'] = $this->listGridLayout;
		
		if( $this->spreadsheetGridApplicable() ) {
			$this->pageData['spreadsheet'] = true;
			$this->jsSettings['tableSettings'][ $this->tName ]['autoAddNewRecord'] = $this->pSet->addNewRecordAutomatically();
			$this->setupRelatedInlineEditPage();
		}
	}

	protected function createOrderByObject() {
		//	read order by info from request
		$this->orderClause = OrderClause::createFromPage( $this, true );
	}

	function processClickAction()
	{
		if( strtoupper($this->tName) == "ADMIN_MEMBERS" || strtoupper($this->tName) == "ADMIN_ADMEMBERS" )
			return;

		$clickActionJSON = $this->pSet->getClickActionJSONString();
		if( $clickActionJSON != "" )
		{
			$clickAction = my_json_decode( $clickActionJSON );

			foreach ( $clickAction["fields"] as $field => $fSetting )
			{
				if ( !$this->checkAllowClickAction($fSetting) )
					$clickAction["fields"][$field]["action"] = "noaction";
			}

			if ( !$this->checkAllowClickAction($clickAction["row"]) )
				$clickAction["row"]["action"] = "noaction";

			$this->jsSettings['tableSettings'][$this->tName]["clickActions"] = $clickAction;
 		}
 	}

 	function checkAllowClickAction( $actionSet )
 	{
 		$isActionAllowed = true;
 		if ( $actionSet["action"] == "open" )
		{
			switch ($actionSet["openData"]["page"])
			{
				case 'add':
					$isActionAllowed = $this->addAvailable();
					break;
				case 'edit':
					$isActionAllowed = $this->editAvailable();
					break;
				case 'view':
					$isActionAllowed = $this->viewAvailable();
					break;
				case 'print':
					$isActionAllowed = $this->printAvailable();
					break;
				default:
					$isActionAllowed = true;
					break;
			}
		}

		return $isActionAllowed;
 	}

	/**
	 * add Order data for set in URL
	 */
	function addOrderUrlParam()
	{
		$urlParams = $this->orderClause->getOrderUrlParams();

		if ( strlen($urlParams) > 0 )
		{
			if ( !isset($this->pageData["urlParams"]) )
				$this->pageData["urlParams"] = array();

			$this->pageData["urlParams"]["orderby"] = $urlParams;
		}
	}

	/**
	 * Get list params for using in Url hash (ajax reload)
	 */
	function getUrlParams()
	{
		$params = array();
		if ( @$_SESSION[$this->sessionPrefix."_qs"] )
		{
			$params["qs"] = rawurlencode($_SESSION[$this->sessionPrefix."_qs"]);
		}
		if ( @$_SESSION[$this->sessionPrefix."_q"] )
		{
			$params["q"] = rawurlencode($_SESSION[$this->sessionPrefix."_q"]);
		}
		if ( @$_SESSION[$this->sessionPrefix."_criteriaSearch"] && $_SESSION[$this->sessionPrefix."_criteriaSearch"] != "and" )
		{
			$params["criteria"] = $_SESSION[$this->sessionPrefix."_criteriaSearch"];
		}
		if ( @$_SESSION[$this->sessionPrefix."_filters"] )
		{
			$params["f"] = rawurlencode($_SESSION[$this->sessionPrefix."_filters"]);
		}
		if( !postvalue("qs") && !postvalue("q") && !isset( $_REQUEST["f"] ) && @$_SESSION[$this->sessionPrefix."_pagenumber"] && @$_SESSION[$this->sessionPrefix."_pagenumber"] > 1 )
		{
			$params["goto"] = $_SESSION[$this->sessionPrefix."_pagenumber"];
		}
		if( @$_SESSION[$this->sessionPrefix."_pagesize"] && $this->gPageSize != $_SESSION[$this->sessionPrefix."_pagesize"])
		{
			$params["pagesize"] = $_SESSION[$this->sessionPrefix."_pagesize"];
		}

		if( $this->masterTable )
		{
			$params["mastertable"] = $this->masterTable;

			for($i = 1; $i <= count($this->masterKeysReq); $i++)
			{
				$params["masterkey".$i] = $this->masterKeysReq[$i];
			}
		}

		if( @$_SESSION[$this->sessionPrefix."_masterpage"] )
		{
			$params["masterpage"] = $_SESSION[$this->sessionPrefix."_masterpage"];
		}

		if( $this->searchClauseObj )
		{
			if( $this->searchClauseObj->savedSearchIsRun )
				$params["savedSearch"] = true;
		}

		$tabId = $this->getCurrentTabId();
		if( strlen( $tabId ) )
			$params["tab"] = rawurlencode( $tabId );

		return $params;
	}

	/**
	 * Add common html code for all modes on list page
	 */
	function addCommonHtml()
	{
		if ( !$this->isDashboardElement() && !$this->mobileTemplateMode() && !$this->pdfJsonMode() )
			$this->body["begin"].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

		if($this->is508) {
			$this->body["begin"].= "<a href=\"#skipdata\" title=\""."Skip to table data"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to table data"."</a>";
			$this->body["begin"].= "<a href=\"#skipmenu\" title=\""."Skip to menu"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to menu"."</a>";
			$this->body["begin"].= "<a href=\"#skipsearch\" title=\""."Skip to search"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to search"."</a>";
			$this->body["begin"].= "<a href=\"templates/helpshortcut.htm\" title=\""."Hotkeys reference"."\" class=\"".$this->makeClassName("s508")."\">"."Hotkeys reference"."</a>";
		}

		//prepare for dispaly master table info on details table
		$this->displayMasterTableInfo();
	}

	/**
	 * Add common javascript files and code
	 */
	function addCommonJs()
	{
		parent::addCommonJs();

		$this->addJsForGrid();

		// add button events if exist
		$this->addButtonHandlers();

		if( $this->allDetailsTablesArr )
		{
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
		
		if( $this->spreadsheetGridApplicable() ) {
			$this->editPage->addControlsJSAndCSS();
			$this->includes_js = array_merge( $this->includes_js, $this->editPage->includes_js );
		}
	}

	/**
	 * Add javascript code for grid
	 */
	function addJsForGrid()
	{
		if( $this->isResizeColumns )
			$this->prepareForResizeColumns();

		if( $this->reorderFieldsFeatureEnabled() && $this->isBootstrap() )
		{
			$this->AddJSFile( 'include/jquery.dragtable.js' );
		}

		$this->jsSettings['tableSettings'][$this->tName]['showRows'] = ($this->numRowsFromSQL ? true : false);

		$this->initGmaps();
	}

	/**
	 * If use resizable columns
	 * Prepare for resize main table
	 */
	function prepareForResizeColumns()
	{
		if( $this->isBootstrap() )
		{
			$this->AddJSFile( 'include/colresizable.js' );
			return;
		}

		if( $this->mode != LIST_AJAX )
		{
			if( $this->debugJSMode === true )
				$this->AddJSFile("include/runnerJS/RunnerResizeGrid.js");
		}
	}

	/**
	 * Process master key value from request params
	 * For DPInline mode and use this mode on edit or add page
	 */
	function processMasterKeyValue()
	{
		parent::processMasterKeyValue();

		/*
		// obsolete ?
		//	reset search and page number
		$_SESSION[$this->sessionPrefix."_search"] = 0;
		if($this->firstTime)
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		*/
	}

	/**
	 * Add event before process list
	 */
	function beforeProcessEvent()
	{
		if($this->eventExists("BeforeProcessList"))
			$this->eventsObject->BeforeProcessList( $this );
	}
	/**
	 * Set session variables
	 */
	function setSessionVariables()
	{
		parent::setSessionVariables();

		if( $this->searchClauseObj )
		{
			if( $this->searchClauseObj->isSearchFunctionalityActivated() )
			{
				// if search used serialize clause object
				$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
			}
			else
			{
				// Unset session for search if search not used
				unset($_SESSION[$this->sessionPrefix.'_advsearch']);
			}

			// Unset session for filters if filters  not activated
			if(!$this->searchClauseObj->filtersActivated)
				unset($_SESSION[$this->sessionPrefix.'_filters']);
		}
		else
		{
			unset($_SESSION[$this->sessionPrefix.'_advsearch']);
			unset($_SESSION[$this->sessionPrefix.'_filters']);
		}


		//set session goto
		if( $this->requestGoto )
			$_SESSION[$this->sessionPrefix."_pagenumber"]= $this->requestGoto;



		//	page number
		$this->myPage =(integer) $_SESSION[$this->sessionPrefix."_pagenumber"];
		if(! $this->myPage)
			$this->myPage = 1;

		//set page size
		if(!$this->pageSize)
			$this->pageSize = $this->gPageSize;
		if( $this->pdfJsonMode() ) {
			$this->pageSize = -1;
		}
	}

	protected function assignColumnHeaderClasses()
	{
		for($i = 0; $i < count($this->listFields); $i ++)
		{
			$field = $this->listFields[$i]['fName'];
			$goodName = GoodFieldname($field);
			// add class for field header as field value
			$fieldClassStr = $this->fieldClass($field);
			// add class for mobile columns hiding
			if( isset( $this->hiddenColumnClasses[$goodName] ) )
				$fieldClassStr .= " ".$this->hiddenColumnClasses[$goodName ];
			$this->xt->assign(GoodFieldName($field)."_class", $fieldClassStr);
			$this->xt->assign(GoodFieldName($field)."_align", $this->fieldAlign($field));
		}
	}


	/**
	 * @return Boolean
	 */
	public function isReoderByHeaderClickingEnabled()
	{
		return true;
	}

	/**
	 * Delete selected records
	 */
	function deleteRecords()
	{
		global $globalEvents;
		if( @$_REQUEST["a"] != "delete" )
			return;

		//	CSRF protection
		if( !isPostRequest() )
			return;

		$message_class = "alert-warning";
		$this->deleteMessage = "";
		if(@$_REQUEST["mdelete"])
		{
			foreach(@$_REQUEST["mdelete"] as $ind)
			{
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
				{
					$selectedKeys[ $this->arrKeyFields[$i] ] = refine($_REQUEST["mdelete".($i + 1)][mdeleteIndex($ind)]);
				}
				$this->selectedRecs[] = $selectedKeys;
			}
		}
		elseif(postvalue( "selection" ))
		{
			foreach( postvalue( "selection" ) as $keyblock)
			{
				$arr = explode("&", refine($keyblock));
				if(count($arr) < count($this->arrKeyFields))
					continue;
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
				{
					$selectedKeys[ $this->arrKeyFields[$i] ]= urldecode(@$arr[$i]);
				}
				$this->selectedRecs[] = $selectedKeys;
			}
		}

		$this->recordsDeleted = 0;
		$this->lockDelRec = array();
		foreach($this->selectedRecs as $keys)
		{
			$dc = $this->getDeleteCommand( $keys );

			$retval = true;

			$deletedResult = $this->dataSource->getSingle( $dc );
			$deleted_values = $deletedResult
				? $this->cipherer->DecryptFetchedArray( $deletedResult->fetchAssoc() )
				: array();

			if($globalEvents->exists("IsRecordEditable", $this->tName))
			{
				if(!$globalEvents->IsRecordEditable($deleted_values, true, $this->tName))
					continue;
			}
			if( $this->eventExists("BeforeDelete") || $this->eventExists("AfterDelete") ) {
				$prep = $this->dataSource->prepareSQL( $dc );
				$where = $prep["where"];
			}

			if($this->eventExists("BeforeDelete"))
			{
				RunnerContext::pushRecordContext( $deleted_values, $this );
				$tdeleteMessage = $this->deleteMessage;
				$retval = $this->eventsObject->BeforeDelete($where, $deleted_values, $tdeleteMessage, $this);
				$this->deleteMessage = $tdeleteMessage;
				RunnerContext::pop();
			}

			$lockRecord = false;

			if($this->lockingObj)
			{
				$lockWhere = array();
				foreach($keys as $keysvalue)
				{
					$lockWhere[] = rawurlencode($keysvalue);
				}

				if( $this->lockingObj->isLocked( $this->origTName, implode("&", $lockWhere), "1" ) )
				{
					$lockRecord = true;
					$this->lockDelRec[] = $keys;
				}

				if( $this->mode == LIST_SIMPLE )
					$_SESSION[$this->sessionPrefix."_lockDelRec"] = $this->lockDelRec;
			}

			if(!$lockRecord && @$_REQUEST["a"] == "delete" && $retval)
			{
				$this->recordsDeleted ++;
				// delete associated uploaded files if any
				DeleteUploadedFiles($this->pSet, $deleted_values);

				if( !$this->dataSource->deleteSingle( $dc ) ) {
					$this->deleteMessage .= ( $this->deleteMessage ? '<br>' : '' ) . $this->dataSource->lastError();
				}

				if($this->audit && $deleted_values)
				{
					$fieldsList = $this->pSet->getFieldsList();
					$i=0;
					foreach($deleted_values as $key=>$value)
					{
						if( IsBinaryType( $this->pSet->getFieldType($fieldsList[$i]) ) )
							$deleted_audit_values[ $fieldsList[$i] ] = $value;
						else
							$deleted_audit_values[ $key ] = $value;
						$i++;
					}
					$this->audit->LogDelete($this->tName, $deleted_audit_values, $keys);
				}
				if ( $this->tName == ADMIN_USERS && Security::dynamicPermissions() ) {
					// delete _ugmembers corr. rec.
					$dataSource = Security::getUgMembersDatasource();
					
					$user = $deleted_values[ Security::usernameField() ];
					//	TODO - delete plugin user
					$dc = new DsCommand();
					$dc->filter = DataCondition::FieldEquals( 
						"", 
						$user, 
						0, 
						Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT 
					);
					
					$dataSource->deleteSingle( $dc, false );
				}
				if($this->eventExists("AfterDelete"))
				{
					RunnerContext::pushRecordContext( $deleted_values, $this );
					$tdeleteMessage = $this->deleteMessage;
					$this->eventsObject->AfterDelete($where, $deleted_values,$tdeleteMessage, $this);
					$this->deleteMessage = $tdeleteMessage;
					RunnerContext::pop();
					$message_class = "alert-info";

				}
			}

		}
		if( count($this->selectedRecs) && $this->eventExists("AfterMassDelete") )
			$this->eventsObject->AfterMassDelete($this->recordsDeleted, $this);
		
		if ( $this->deleteMessage ) {
			$this->xt->assignbyref("message", $this->deleteMessage);
			$this->xt->assignbyref( "message_class", $message_class );
			$this->xt->assign("message_block",true);
		}

	}

	/**
	 * PRG rule, to avoid POSTDATA resend
	 */
	function rulePRG()
	{
		if( $this->stopPRG )
			return false;

		if(no_output_done() && count($this->selectedRecs) && !strlen($this->deleteMessage))
		{
			$getParams = implode( '&', array( "a=return", $this->getStateUrlParams() ) );
			
			if ( postvalue("page") )
				$getParams .= "&page=" . postvalue("page");

			// redirect, add a=return param for saving SESSION
			HeaderRedirect($this->shortTableName, $this->getPageType(), $getParams);
			// turned on output buffering, so we need to stop script
			exit();
		}
	}

	/**
	 * Add code from program before show list
	 */
	function BeforeShowList()
	{
		if($this->eventExists("BeforeShowList"))
		{
			$templatefile = $this->templatefile;
			$this->eventsObject->BeforeShowList($this->xt, $templatefile, $this);
			$this->templatefile = $templatefile;
		}
	}

	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 */
	function commonAssign()
	{
		parent::commonAssign();

		$this->xt->assignbyref("body", $this->body);

		$this->xt->assign("newrecord_controls_block", $this->inlineAddAvailable() || $this->addAvailable() );

		if( ( $this->isDispGrid() || $this->listAjax ) 	&& (
				$this->printAvailable()
				||  $this->exportAvailable()
				||  $this->deleteAvailable()
				|| $this->updateSelectedAvailable()
				|| $this->inlineEditAvailable()
				|| $this->inlineAddAvailable()
				|| $this->showAddInPopup && $this->addAvailable()
			)
		)
		{
			$this->xt->assign("record_controls_block", true);
		}

		if( $this->numRowsFromSQL == 0 )
			$this->hideElement("recordcontrol");

		//	add link
		if( $this->addAvailable() )
		{
			$this->xt->assign("add_link", true);
			$add_attrs = 'id="addButton'.$this->id.'"';
			if( !$this->isPD() )
			{
				$add_attrs .= ' href="'.GetTableLink($this->shortTableName, "add") . '"';
			}

			$this->xt->assign("addlink_attrs", $add_attrs);

			if ( $this->dashTName )
			{
				$this->xt->assign("addlink_getparams", "?fromDashboard=" . $this->dashTName);
			}
		}
		//	inline add link
		$this->inlineAddLinksAttrs();

		if($this->isShowMenu() || $this->isAdminTable())
			$this->xt->assign("quickjump_attrs", 'class="'.$this->makeClassName("quickjump").'"');

		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			$this->xt->assign_event($mapId, $this, 'createMapDiv', array('mapId'=>$mapId, 'width'=>$this->googleMapCfg['mapsData'][$mapId]['width'], 'height'=>$this->googleMapCfg['mapsData'][$mapId]['height']));
		}

		$this->assignSortByDropdown();

		//add assign for grid block
		$this->addAssignForGrid();
		$this->xt->assign("grid_block", true);

		//select all link and attr
		$this->selectAllLinkAttrs();

		//edit selected link and attr
		$this->editSelectedLinkAttrs();

		//update selected link and attr
		$this->updateSelectedLinkAttrs();

		//save all link, attr, span
		$this->saveAllLinkAttrs();

		//cansel all link, attr, span
		$this->cancelAllLinkAttrs();

		$this->hideItemType("details_preview");
		$this->hideItemType("grid_inline_save");
		$this->hideItemType("grid_inline_cancel");
	}

	/**
	 * Common assign for grid block in diferent mode on list page
	 */
	function addAssignForGrid()
	{
		if( !$this->rowsFound && $this->listAjax ) {
			$this->deleteSelectedLink();
			$this->hideItem("delete");
		}
		
		
		if( !$this->isDispGrid() )
			return;

		if($this->is508)
		{
			if( $this->isBootstrap() && $this->listGridLayout == gltVERTICAL )
				$this->xt->assign_section("grid_header", "<div style=\"display:none\">Table data</div>", "");
			else
				$this->xt->assign_section("grid_header", "<caption style=\"display:none\">Table data</caption>", "");
		}

		$this->xt->assign("endrecordblock_attrs", "colid=\"endrecord\"");


		for($i = 0; $i < count($this->listFields); $i ++)
		{
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldheadercolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldcolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldfootercolumn", true);
		}

		$colsonpage = $this->recsPerRowList;

		$record_header = array("data" => array());
		$record_footer = array("data" => array());
		if ($colsonpage > $this->recordsOnPage && $this->recordsOnPage && $this->listGridLayout != gltVERTICAL){
			$colsonpage = $this->recordsOnPage;
		}
		if( $this->isPD() ) {
			$colsonpage = 1;
		}

		for($i = 0; $i < $colsonpage; $i ++)
		{
			$rheader = array();
			$rfooter = array();
			if($i < $colsonpage - 1)
			{
				$rheader["endrecordheader_block"] = true;
				$rfooter["endrecordfooter_block"] = true;
			}
			$record_header["data"][] = $rheader;
			$record_footer["data"][] = $rfooter;
		}
		$this->xt->assignbyref("record_header", $record_header);
		$this->xt->assignbyref("record_footer", $record_footer);
		$this->xt->assign("grid_header", true);
		$this->xt->assign("grid_footer", true);

		// hiding header, if no rows
		if(!$this->numRowsFromSQL){
			$this->xt->assign("gridHeader_class", " ".$this->makeClassName("hiddenelem"));
			$this->xt->assign("gridFooter_class", "r-grid-footer ".$this->makeClassName("hiddenelem"));
		}


		// moved from search panel
		$gridTableStyle = "";
		$gridTableStyle = 'style="';
		$gridTableStyle .= $this->recordsOnPage>0 ? '"' : 'width: 50%;"';
		$this->xt->assign('gridTable_attrs', $gridTableStyle);

		//checkbox column
		$this->checkboxColumnAttrs();

		if( $this->editAvailable() )
		{
			$this->xt->assign("edit_column", true);
			$this->xt->assign("edit_headercolumn", true);
			$this->xt->assign("edit_footercolumn", true);
		}

		if( $this->inlineEditAvailable() && !$this->spreadsheetGridApplicable() )
		{
			$this->xt->assign("inlineedit_column", true);
			$this->xt->assign("inlineedit_headercolumn", true);
			$this->xt->assign("inlineedit_footercolumn", true);
		}

		if( $this->inlineEditAvailable() || $this->inlineAddAvailable() )
		{
			$this->xt->assign("inline_cancel", true);
			$this->xt->assign("inline_save", true);
		}

		if( $this->inlineAddAvailable() && $this->spreadsheetGridApplicable() ) {
			$this->xt->assign("grid_inline_add_link", true);
			
		}

		//copy link
		if( $this->copyAvailable() )
			$this->xt->assign("copy_column", true);

		//view column
		if( $this->displayViewLink() )
			$this->xt->assign("view_column", true);

		//for list icons instead of list links
		$this->assignListIconsColumn();

		if( $this->detailsInGridAvailable() )
		{
			$this->xt->assign(GoodFieldName($this->tName)."_dtable_column", true);
			$this->xt->assign("dtables_link", true);
		}

		//delete link and attr
		$this->deleteSelectedLink();

	}

	function createMapDiv(&$params)
	{
		if( $this->isPD() )
			$div = '<div id="'.$params['mapId'].'" style="width: 100%; height: 100%"></div>';
		else
			$div = '<div id="'.$params['mapId'].'" style="width: '.$params['width'].'px; height: '.$params['height'].'px;"></div>';

		echo $div;
	}
	/**
	 * Show import link
	 * Add import link attributes
	 */
	function importLinksAttrs()
	{
		$this->xt->assign("import_link", $this->permis[$this->tName]['import']);
		$this->xt->assign("importlink_attrs", "id=\"import_".$this->id."\" name=\"import_".$this->id."\"");
	}

	/**
	 * Show inline add link
	 * Add inline add attributes
	 */

	function getInlineAddLinksAttrs()
	{
		return "name=\"inlineAdd_".$this->id."\" href='".
			GetTableLink( $this->shortTableName, "add", $this->getStateUrlParams() )."' id=\"inlineAdd".$this->id."\"";
	}

	function getAddLinksAttrs()
	{
		return "href='".GetTableLink($this->shortTableName, "add")."' id=\"addButton".$this->id."\"";
	}

	 function inlineAddLinksAttrs()
	{
		if( !$this->inlineAddAvailable() )
			return;
		//inline add link and attr
		$this->xt->assign("inlineadd_link", true );
		$this->xt->assign("inlineaddlink_attrs", $this->getInlineAddLinksAttrs() );
	}

	/**
	 * Assign selectAll link and attrs
	 */
	function selectAllLinkAttrs()
	{
		$this->xt->assign("selectall_link", $this->deleteAvailable() || $this->permis[$this->tName]['export']|| $this->permis[$this->tName]['edit']);
		$this->xt->assign("selectalllink_span", $this->buttonShowHideStyle());
		$this->xt->assign("selectalllink_attrs",
			"name=\"select_all".$this->id."\"
			id=\"select_all".$this->id."\"
			href=\"#\"");
	}

	/**
	 * Assign checkbox column, header and header attrs
	 */
	function checkboxColumnAttrs()
	{
		$showColumn = $this->deleteAvailable() || $this->exportAvailable() || $this->inlineEditAvailable() || $this->printAvailable() || $this->updateSelectedAvailable();
		$this->xt->assign("checkbox_column", $showColumn);
		$this->xt->assign("checkbox_header", true);
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" class=\"chooseAll".$this->id."\"");
	}

	/**
	 * Get common attrs for Print and Export links
	 */
	function getPrintExportLinkAttrs($page)
	{
		if(!$page)
			return '';
		return "name=\"".$page."_selected".$this->id."\"
				id=\"".$page."_selected".$this->id."\"
				href = '".GetTableLink($this->shortTableName, $page)."'";
	}

	/**
	 * Show or hide current button
	 */
	function buttonShowHideStyle($link="")
	{
		if($link == 'saveall' || $link == 'cancelall')
			return ' style="display:none;" ';

		return $this->numRowsFromSQL > 0 ? '' : ' style="display:none;" ';
	}

	/**
	 * Assign editSelected link and attrs
	 */
	function editSelectedLinkAttrs()
	{
		if( !$this->inlineEditAvailable() )
			return;

		$this->xt->assign("editselected_link", true );
		$this->xt->assign("editselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("editselectedlink_attrs","
					href='".GetTableLink($this->shortTableName, "edit")."'
					name=\"edit_selected".$this->id."\"
					id=\"edit_selected".$this->id."\"");
	}

	function updateSelectedLinkAttrs()
	{
		if( !$this->updateSelectedAvailable() )
			return;

		$this->xt->assign("updateselected_link", true );
		$this->xt->assign("updateselectedlink_attrs", $this->getUpdateSelectedAttrs() . $this->buttonShowHideStyle() );
	}

	protected function getUpdateSelectedAttrs()
	{
		if( $this->isPD() )
			return " name=\"update_selected".$this->id."\" id=\"update_selected".$this->id."\"";
		
		return "href='".GetTableLink($this->shortTableName, "edit")."' name=\"update_selected".$this->id."\" id=\"update_selected".$this->id."\"";
	}

	/**
	 * Assign saveAll link and attrs
	 */
	function saveAllLinkAttrs() {
		if( $this->spreadsheetGridApplicable() ) {
			$this->xt->assign("saveall_link", false);
			return;
		}
		$this->xt->assign("saveall_link", $this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("savealllink_span", $this->buttonShowHideStyle('saveall'));
		$this->xt->assign("savealllink_attrs", "name=\"saveall_edited".$this->id."\" id=\"saveall_edited".$this->id."\"");
	}

	/**
	 * Assign cancelAll link and attrs
	 */
	function cancelAllLinkAttrs() {
		if( $this->spreadsheetGridApplicable() ) {
			$this->xt->assign("cancelall_link", false);
			return;
		}		
		$this->xt->assign("cancelall_link", $this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("cancelalllink_span", $this->buttonShowHideStyle('cancelall'));
		$this->xt->assign("cancelalllink_attrs", "name=\"revertall_edited".$this->id."\" id=\"revertall_edited".$this->id."\"");
	}

	/**
	 * Assign delete selected link
	 */
	function deleteSelectedLink()
	{
		if( !$this->deleteAvailable() )
			return;

		$this->xt->assign("deleteselected_link", true );

		$this->xt->assign("deleteselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("deleteselectedlink_attrs", $this->getDeleteLinksAttrs());
	}

	function getDeleteLinksAttrs()
	{
		return "id=\"delete_selected".$this->id."\" name=\"delete_selected".$this->id."\" ";
	}

	function getEditLinksAttrs()
	{
		return "id=\"edit_selected".$this->id."\" name=\"edit_selected".$this->id."\" ";
	}

	function getFormInputsHTML()
	{
		return '';
	}

	function getFormTargetHTML()
	{
		return '';
	}

	public function getOrderByClause()
	{
		// use builtin orderClause object
		return $this->orderClause->getOrderByExpression();
	}


	/**
	 * Check if its possible to add to the main table query a subquery that contes the number of details. #9875
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex )
	{
		global $cman, $bSubqueriesSupported;

		return $bSubqueriesSupported
			&& $this->connection->checkDBSubqueriesSupport()
			&& $cman->checkTablesSubqueriesSupport( $this->tName, $dDataSourceTName )
			&& $this->checkfDMLinkFieldsOfTheSameType( $dDataSourceTName, $dTableIndex )
			&& !$this->gQuery->HasJoinInFromClause();
	}

	/**
	 * Check if to add a details counting sub-query to the page's sql-query
	 * @return Boolean
	 */
	protected function useDetailsCountBySubquery()
	{
		$entType = $this->pSet->getEntityType();
		if( $entType !== titTABLE && $entType !== titVIEW ) {
			return false;
		}
		//	mind ASP conversion before modifying this code!!!
		$manyPages = false;
		if( $this->numRowsFromSQL > 0 )
			$manyPages = ($this->pageSize / $this->numRowsFromSQL < 0.1);
		if( $this->pageSize < 0 ) {
			$manyPages = false;
		}

		return count($this->allDetailsTablesArr) > 0 &&
			( max($this->pageSize, $this->numRowsFromSQL) <= 20
			|| $manyPages )
			&& !$this->eventExists("BeforeQueryList")
			&& !$this->eventExists("ListGetRowCount");
	}

	/**
	 * #12351
	 * Check if a sub-query counting a number of details is added to the page's SQL-query
	 * @param String table	The detail datasource table name
	 * @return Boolean
	 */
	protected function isDetailTableSubqueryApplied( $table )
	{
		return $this->addedDetailsCountSubqueries[ $table ];
	}

	/**
	 * Check if detail and master tables' link fields have the same type.
	 * They must be of the same type (for not mySQL databases)
	 * to add a subquery counting the number of detais for each record.
	 *
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function checkfDMLinkFieldsOfTheSameType( $dDataSourceTName, $dTableIndex )
	{
		if( $this->allDetailsTablesArr[ $dTableIndex ]['dDataSourceTable'] != $dDataSourceTName )
			return false;

		if( $this->connection->dbType == nDATABASE_MySQL )
			return true;

		foreach($this->masterKeysByD[ $dTableIndex ] as $idx => $val)
		{
			// get field types
			$masterLinkFieldType = $this->pSet->getFieldType( $this->masterKeysByD[ $dTableIndex ][ $idx ] );
			$detailLinkFieldType = $this->pSet->getFieldType( $this->detailKeysByD[ $dTableIndex ][ $idx ] );
			// if different data types we can't use subQ
			if( $masterLinkFieldType != $detailLinkFieldType )
				return false;
		}

		return true;
	}

	/**
	 * @return Boolean
	 */
	protected function isInlineAreaToSet()
	{
		return $this->inlineAddAvailable() 
		|| $this->addAvailable() && $this->showAddInPopup 
		|| $this->spreadsheetGridApplicable() && $this->pSet->addNewRecordAutomatically() && $this->permis[$this->tName]["add"];
	}

	/**
	 * Fills info in array about grid.
	 * For new add row
	 * @param array $rowInfoArr array with total info, that assignes grid
	 */
	function prepareInlineAddArea(&$rowInfoArr)
	{
		$rowInfoArr["data"]= array();
		if( !$this->isInlineAreaToSet() )
			return;

		$editlink = "";
		$copylink = "";
		//	add inline add row
		$row = array();
		$row["rowattrs"] = "data-pageid=\"" . $this->id . "\"";
		$row["rowclass"] = "gridRowAdd ".$this->makeClassName("hiddenelem");
		$row["rsclass"] = "gridRowSepAdd ".$this->makeClassName("hiddenelem");
		if($this->listGridLayout == gltVERTICAL)
			$row["rowattrs"] .= "vertical=\"1\"";

		$record = array();
		$record["recId"] = "add";
		$record["edit_link"]= true;
		$record["inlineedit_link"]= true;
		$record["view_link"]= true;
		$record["copy_link"]= true;
		$record["checkbox"]= true;
		$record["editlink_attrs"]= "id=\"editLink_add".$this->id."\" data-gridlink";

		$record["copylink_attrs"]= "id=\"copyLink_add".$this->id."\" name=\"copyLink_add".$this->id."\" data-gridlink";
		$record["viewlink_attrs"]= "id=\"viewLink_add".$this->id."\" name=\"viewLink_add".$this->id."\" data-gridlink";
		$record["checkbox_attrs"]= "id=\"check_add".$this->id."\" name=\"selection[]\"";

		//	add container for inline add controls
		if( $this->inlineEditAvailable() )
		{
			$record["inlineeditlink_attrs"]= "id=\"iEditLink_add".$this->id."\" ";
		}
		$record["inlinesavelink_attrs"]= "id=\"saveLink_add".$this->id."\" href=#";
		$record["inlinerevertlink_attrs"]= "id=\"revertLink_add".$this->id."\" href=#";

		$record["ieditbuttonsholder_attrs"]= "id=\"ieditbuttonsholder".$this->id."\" ";

		if( $this->detailsInGridAvailable() )
			$record["dtables_link"] = true;

		$hideDPLink = false;
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
		{
			//detail tables
			$dDataSourceTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
			$dShortTable = $this->allDetailsTablesArr[$i]['dShortTable'];

			if( $this->detailInGridAvailable( $this->allDetailsTablesArr[$i] ) ) {
				$record[$dShortTable."_dtable_link"] = ($this->permis[$dDataSourceTable]['add'] || $this->permis[$dDataSourceTable]['search']);
			}

			if( $this->pSet->detailsShowCount( $dDataSourceTable ) )
			{
				$record[ $dShortTable."_childnumber_attr" ] = " id='cntDet_".$dShortTable."_'";
				if( $this->getLayoutVersion() < PD_BS_LAYOUT )
					$record[ $dShortTable."_link_attrs" ] = " href=\"#\" id=\"details_add".$this->id."_".$dShortTable."\" ";
				$record[ $dShortTable."_childcount" ] = true;
			}

			if ( $this->getLayoutVersion() >= PD_BS_LAYOUT )
			{
				$indXTtag = $dShortTable."_link_attrs";
				$indIdAttr = "details_add".$this->id."_".$dShortTable;
			}
			else
			{
				$indXTtag = $dShortTable."_dtablelink_attrs";
				$indIdAttr = $dShortTable."_preview".$this->id;
			}

			$htmlAttributes = array();
			$record[$indXTtag] = "";
			$htmlAttributes["id"] = $indIdAttr;
			$htmlAttributes["style"] = "display:none;";
			if( $this->detailsHrefAvailable() ) {
				$htmlAttributes["href"] = GetTableLink($dShortTable, "list")."?";
			}
			if( $this->pSet->detailsPreview( $dDataSourceTable ) == DP_INLINE )
			{
				$htmlAttributes["caption"] = GetTableCaption(GoodFieldName($dDataSourceTable));
				$htmlAttributes["data-pagetype"] = $this->allDetailsTablesArr[$i]['dType'];
			}
			foreach ($htmlAttributes as $attr => $value)
			{
				$record[$indXTtag] .= $attr . "=\"" . $value . "\" ";
			}

			if( $this->pSet->detailsHideEmpty( $dDataSourceTable ) && !$hideDPLink )
				$hideDPLink = true;
		}
		$record["dtables_link_attrs"] = " href=\"#\" id=\"details_add".$this->id."\" ";

		if( $hideDPLink )
		{
			if ( $this->getLayoutVersion() >= PD_BS_LAYOUT )
				$record["dtables_link_attrs"] .= " data-hidden";
			else
				$record["dtables_link_attrs"] .= " class=\"".$this->makeClassName("hiddenelem")."\"";
		}

		$this->addSpansForGridCells('add', $record);

		for($i = 0; $i < count($this->listFields); $i ++)
		{
			$field = $this->listFields[$i]['fName'];
			$gFieldName = GoodFieldName( $field );

			// code deleted due to #12459

			$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );

			$this->addHiddenColumnClasses($record, $field);

		}

		if($this->colsOnPage > 1)
			$record["endrecord_block"]= true;
		$record["grid_recordheader"]= true;
		$record["grid_vrecord"]= true;
		$row["grid_record"]= array("data" => array());
		//set the $row["grid_record"] value
		$this->setRowsGridRecord($row, $record);

		for($i = 1; $i < $this->colsOnPage; $i ++)
		{
			$rec = array();
			if($i < $this->colsOnPage - 1)
				$rec["endrecord_block"]= true;
			if($row["grid_record"]["data"])
			{
				$row["grid_record"]["data"][]= $rec;
			}
		}

		$row["grid_rowspace"]= true;
		$row["grid_recordspace"]= array("data" => array());
		for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
			$row["grid_recordspace"]["data"][]= true;
		$rowInfoArr["data"][]= $row;

	}
	/**
	 * Incapsulates beforeProccessRow event
	 *
	 * @return array
	 */
	function beforeProccessRow()
	{
		if($this->eventExists("ListFetchArray"))
			$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
		else
			$data = $this->cipherer->DecryptFetchedArray( $this->recSet->fetchAssoc() );

		while($data)
		{
			if($this->eventExists("BeforeProcessRowList"))
			{
				RunnerContext::pushRecordContext( $data, $this );
				$result = $this->eventsObject->BeforeProcessRowList($data, $this);
				RunnerContext::pop();

				if(!$result )
				{
					if($this->eventExists("ListFetchArray"))
						$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
					else
						$data = $this->cipherer->DecryptFetchedArray( $this->recSet->fetchAssoc() );
					continue;
				}
			}
			
			if( $this->spreadsheetGridApplicable() ) {
				if( $this->eventsObject->exists("ProcessValuesEdit") )
					$this->eventsObject->ProcessValuesEdit( $data, $this );
			}
			
			return $data;
		}
	}

	/**
	 * If use list icons instead list of links
	 * Then continue count width for td, which contains icons
	 * And depends of this width assign or not list icons column
	 *
	 * @param {integer} $editPermis - edit permissions
	 * @param {integer} $addPermis - add permissions
	 * @param {integer} $searchPermis - search permissions
	 */
	function assignListIconsColumn()
	{
		if( $this->inlineEditAvailable() || $this->inlineAddAvailable() || $this->displayViewLink() || $this->editAvailable() )
		{
			$this->xt->assign("listIcons_column", true);
		}
	}

	/**
	 * Fills list grid. This method use many other methods
	 */
	function fillGridData()
	{
		global $globalEvents;
		$totals = array();
		//	fill $rowinfo array
		$rowinfo = array();
		$this->prepareInlineAddArea($rowinfo);

		$this->setDetailsBadgeStyles();

		//	add grid data
		$data = $this->beforeProccessRow();
		$prewData = false;
		$lockRecIds = array();

		$tKeys = $this->pSet->getTableKeys();

		$this->controlsMap['gridRows'] = array();

		for($i = 0; $i < count($this->listFields); $i ++)
		{
			$this->recordFieldTypes[ $this->listFields[$i]['fName'] ] = $this->pSet->getFieldType( $this->listFields[$i]["fName"] );
		}

		// calc current page size by records limit for last
		$currentPageSize = $this->pageSize;
		if ( $this->pSet->getRecordsLimit() && $this->maxPages == $this->myPage )
		{
			$currentPageSize = $this->pSet->getRecordsLimit() - ( ($this->myPage-1) * $this->pageSize);
		}

		$_notEmptyFieldColumns = array();

		while($data && ($this->recNo <= $currentPageSize || $currentPageSize == -1 ) )
		{
			$row = array();
			RunnerContext::pushRecordContext( $data, $this );

			$row["grid_record"]= array();
			$row["grid_record"]["data"]= array();
			$this->rowId ++;

			for($col = 1; $data && ($this->recNo <= $currentPageSize || $currentPageSize == -1) && $col <= $this->colsOnPage; $col ++)
			{
				$this->countTotals($totals, $data);
				$record = array();
				$this->genId();

				$row["rowattrs"] = " id=\"gridRow".$this->recId."\"";
				$record["recId"] = $this->recId;
				$gridRowInd = count($this->controlsMap['gridRows']);
				$this->controlsMap['gridRows'][$gridRowInd] = array();
				$currentRow = &$this->controlsMap['gridRows'][$gridRowInd];
				$currentRow['id'] = $this->recId;
				$currentRow['rowInd'] = $gridRowInd;
				//Add the connection with containing row. It's important for vertical layout's multiple records per row mode
				$currentRow['contextRowId'] = $this->recId + $this->colsOnPage - $col;
				$isEditable = Security::userCan('E', $this->tName, $data[$this->mainTableOwnerID] )
					|| Security::userCan('D', $this->tName, $data[$this->mainTableOwnerID] );

				if($globalEvents->exists("IsRecordEditable", $this->tName)) {
					$isEditable = $globalEvents->IsRecordEditable($data, $isEditable, $this->tName);
				}

				//	for compatibility only, use canEditRecord, canDeleteRecord instead
				$currentRow['isEditOwnRow'] = $isEditable;
				
				$currentRow['canEditRecord'] = $isEditable;
				$currentRow['canDeleteRecord'] = $isEditable;
				if( $this->tName == ADMIN_USERS && Security::dynamicPermissions() ) {
					
					if( Security::currentUserRecord( $data ) ) {
						$currentRow['canDeleteRecord'] = false;
					}
				}
				$currentRow['gridLayout'] = $this->listGridLayout;
				$currentRow['keyFields'] = array();
				$currentRow['keys'] = array();
				for($i = 0; $i < count($tKeys); $i ++) {
					$currentRow['keyFields'][$i] = $tKeys[$i];
					$currentRow['keys'][$i] = $data[$tKeys[$i]];
				}
				if( $this->pSet->reorderRows() ) {
					$currentRow['order'] = $data[ $this->pSet->reorderRowsField() ];
				}
				$record["edit_link"] = $isEditable;
				$record["inlineedit_link"] = $isEditable;
				$record["view_link"] = $this->permis[$this->tName]['search'];
				$record["copy_link"] = $this->permis[$this->tName]['add'];


				//get record id for locking record
				if($this->lockingObj)
				{
					if($this->mode == LIST_SIMPLE && !$this->lockDelRec && isset($_SESSION[$this->sessionPrefix."_lockDelRec"]))
					{
						$this->lockDelRec = $_SESSION[$this->sessionPrefix."_lockDelRec"];
						unset($_SESSION[$this->sessionPrefix."_lockDelRec"]);
					}
					for( $i=0; !!$this->lockDelRec && $i < count( $this->lockDelRec ); $i++)
					{
						$lockDelRec = true;
						foreach($this->lockDelRec[$i] as $key => $val)
						{
							if($data[$key]!=$val)
							{
								$lockDelRec = false;
								break;
							}
						}
						if($lockDelRec)
						{
							$lockRecIds[] = $this->recId;
							break;
						}
					}
				}
				//	detail tables
				$this->proccessDetailGridInfo($record, $data, $gridRowInd);

				//	key fields
				$keyblock = "";
				$editlink = "";
				$copylink = "";
				$keylink = "";
				$keys = array(); //to open view pages in popup clicking on markers

				for($i = 0; $i < count($tKeys); $i ++) {
					if($i != 0) {
						$keyblock.= "&";
						$editlink.= "&";
						$copylink.= "&";
					}
					$keyValue = rawurlencode($data[$tKeys[$i]]);
					$keyValueHtml = runner_htmlspecialchars( $keyValue );
					$keyblock.= $keyValue;
					$editlink.= "editid".($i + 1)."=".$keyValueHtml;
					$copylink.= "copyid".($i + 1)."=".$keyValueHtml;
					$keylink.= "&key".($i + 1)."=".$keyValueHtml;
					$keys[$i] = $data[$tKeys[$i]];

				}

				$this->recIds[] = $this->recId;

				$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";

				$record["editlink_attrs"] = "id=\"editLink".$this->recId."\" name=\"editLink".$this->recId."\" data-gridlink";
				$record["copylink_attrs"] = "id=\"copyLink".$this->recId."\" name=\"copyLink".$this->recId."\" data-gridlink";
				$record["viewlink_attrs"] = "id=\"viewLink".$this->recId."\" name=\"viewLink".$this->recId."\" data-gridlink";

				if( !$this->isPD() )
				{
					$record["editlink_attrs"] .= " href='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
					$record["copylink_attrs"] .= " href='".GetTableLink($this->shortTableName, "add", $copylink)."'";
					$record["viewlink_attrs"] .= " href='".GetTableLink($this->shortTableName, "view", $editlink)."'";
				}
				else
				{
					$state = $this->getStateUrlParams();
					$record["editlink"] = $editlink . '&' . $state;
					$record["copylink"] = $copylink . '&' . $state;
				}

				$record["inlineeditlink_attrs"]= "id=\"iEditLink".$this->recId
					."\" name=\"iEditLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "edit", $editlink)."' data-gridlink";
				$record["inlinesavelink_attrs"]= "id=\"saveLink".$this->recId."\" href=#";
				$record["inlinerevertlink_attrs"]= "id=\"revertLink".$this->recId."\" href=#";

				$record["ieditbuttonsholder_attrs"]= "id=\"ieditbuttonsholder".$this->recId."\" ";

				if( $this->mobileTemplateMode() )
				{
					if( $this->displayViewLink() )
						$record["recordattrs"] .= " data-viewlink='".GetTableLink($this->shortTableName, "view", $editlink)."'";
					if( $this->editAvailable() && $isEditable )
						$record["recordattrs"] .= " data-editlink='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
				}

				$this->fillCheckAttr($record, $data, $keyblock);

				if( $this->detailsInGridAvailable() )
					$record["dtables_link"] = true;

				if( $this->hasBigMap() )
					$this->addBigGoogleMapMarkers($data, $keys, $editlink);

				$fieldsToHideIfEmpty = $this->pSet->getFieldsToHideIfEmpty();

				for($i = 0; $i < count($this->listFields); $i ++)
				{
					// call addGoogleMapData before call proccessRecordValue!!!
					if( $this->checkFieldHasMapData($i) )
						$this->addGoogleMapData( $this->listFields[$i]['fName'], $data, $keys, $editlink );

					$record[$this->listFields[$i]['valueFieldName']] = $this->proccessRecordValue($data, $keylink, $this->listFields[$i]);

					if(  in_array( $this->listFields[$i]['fName'], $fieldsToHideIfEmpty ) )
					{
						if( $this->listGridLayout != gltHORIZONTAL &&  $record[ $this->listFields[$i]['valueFieldName'] ] == "" )
						{
							$this->hideField( $this->listFields[$i]['fName'], $this->recId );
						}
						else if ( $this->listGridLayout == gltHORIZONTAL &&  $record[ $this->listFields[$i]['valueFieldName'] ] != "" )
						{
							$_notEmptyFieldColumns[ $this->listFields[$i]['fName'] ] = true;
						}
					}
				}

				$this->addSpansForGridCells('edit', $record, $data);

				if($this->eventExists("BeforeMoveNextList"))
				{
					RunnerContext::pushRecordContext( $data, $this );
					$this->eventsObject->BeforeMoveNextList($data, $row, $record, $record["recId"], $this);
					RunnerContext::pop();
				}

				$this->spreadRowStyles($data, $row, $record);

				$this->setRowCssRules($record);

				for($i = 0; $i < count($this->listFields); $i ++)
				{
					$field = $this->listFields[$i]['fName'];
					$this->setRowClassNames($record, $field);
					$this->addHiddenColumnClasses($record, $field);
				}

				if($col < $this->colsOnPage)
					$record["endrecord_block"]= true;
				$record["grid_recordheader"]= true;
				$record["grid_vrecord"]= true;
				//set the $row["grid_record"] value
				$this->setRowsGridRecord($row, $record);

				// hide group fields
				if ( $prewData )
				{
					$grFields = $this->pSet->getGroupFields();
					foreach ( $grFields as $grF )
					{
						if ( $data[$grF] != $prewData[$grF] )
							break;
						foreach ( $this->pSet->getFieldItems( $grF ) as $fItemId)
							$this->hideItem($fItemId, $this->recId);
					}
				}
				$prewData = $data;

				RunnerContext::pop();
				$data = $this->beforeProccessRow();

				$this->recNo ++;
			}
			if($col <= $this->colsOnPage)
			{
				for($gInd = 0; $gInd < $col - 1; $gInd++)
				{
					$this->controlsMap['gridRows'][$gridRowInd - $gInd]['contextRowId'] = $this->recId;
				}
			}
			if( !$this->isPD() ) {
				//	old stuff
				while($col <= $this->colsOnPage)
				{
					$record = array();
					if($col < $this->colsOnPage)
						$record["endrecord_block"]= true;
					if($row["grid_record"]["data"])
					{
						$row["grid_record"]["data"][]= $record;
					}
					$col ++;
				}
				//	assign row spacings for vertical layout
				$row["grid_rowspace"]= true;
				$row["grid_recordspace"]= array("data" => array());
				for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
					$row["grid_recordspace"]["data"][]= true;
			}

			$rowinfo["data"][]= $row;
			if( $this->isPD() ) {
				$this->recordsRenderData[ $record["recId"] ] = &$rowinfo["data"][ count( $rowinfo["data"] ) - 1 ];
			}
		}
		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['lockRecIds'] = $lockRecIds;

		if(count($rowinfo["data"]))
		{
			$rowinfo["data"][count($rowinfo["data"]) - 1]["grid_rowspace"]= false;

			if($this->listGridLayout == gltVERTICAL && $this->is508)
			{
				if( $this->isBootstrap() )
				$rowinfo["begin"] = "<div style=\"display:none\">Table data</div>";
				else
				$rowinfo["begin"] = "<caption style=\"display:none\">Table data</caption>";
			}

			$this->xt->assignbyref("grid_row", $rowinfo);
		}

		$this->buildTotals($totals);

		if(  $this->listGridLayout == gltHORIZONTAL )
		{
			foreach( $this->pSet->getFieldsToHideIfEmpty() as $f )
			{
				if( !$_notEmptyFieldColumns[ $f ] )
					$this->hideField( $f );
			}
		}
	}

	/**
	 * @return Boolean
	 */
	protected function hasBigMap()
	{
		return $this->pSet->hasMap();
	}

	/**
	 * @param Number fIndex
	 * @return Boolean
	 */
	protected function checkFieldHasMapData( $fIndex )
	{
		return in_array($fIndex, $this->gMapFields);
	}

	/**
	 * Add hidden column classes
	 * If it need for current field
	 *
	 * @param &Array	$record
	 * @param string	$field field name
	 */
	protected function addHiddenColumnClasses(&$record, $field)
	{
		$gFieldName = GoodFieldName( $field );
		if( isset( $this->hiddenColumnClasses[$gFieldName] ) )
		{
			$record[ $gFieldName."_class" ] .= " " . $this->hiddenColumnClasses[$gFieldName];

			if( $this->listGridLayout != gltHORIZONTAL )
				$record[ $gFieldName."_label_class" ] = $this->hiddenColumnClasses[$gFieldName];
		}
	}

	/**
	 * Get the field's class name to align the field's value
	 * basing on its edti and view formats
	 *
	 * @param string	$f field name
	 *
	 * @return string
	 */
	function fieldClass($f)
	{
		if( !isset($this->fieldClasses[$f]) )
			$this->fieldClasses[$f] = $this->calcFieldClass( $f );
		return $this->fieldClasses[$f];
	}

	function calcFieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';

		$format = $this->pSet->getViewFormat($f);

		if( $format == FORMAT_FILE )
			return ' rnr-field-file';

		if( $this->listGridLayout == gltVERTICAL || $this->listGridLayout == gltCOLUMNS )
			return '';

		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';

		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';

		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' r-field-number';

		return 'r-field-text';
	}

	/**
	 * Set the custom css hover rules for the current record
	 * corresponding css rules to the "row_css_rules" string property
	 *
	 * @param string	$rowHoverCssRule
	 * @param string	$fieldName OPTIONAL
	 * @return string
	 */
	protected function setRowHoverCssRule($rowHoverCssRule, $fieldName = "")
	{
		if( $this->listGridLayout != gltHORIZONTAL && $this->listGridLayout != gltFLEXIBLE )
			return;

		if( $fieldName )
		{
			$className = 'rnr-style'.$this->recId.'-'.$fieldName;
			$this->row_css_rules .= ' tr:hover > td.'. $className .'.'. $className .'{'. $this->getCustomCSSRule( $rowHoverCssRule ) ."}\n";
			return $className;
		}
		else
		{
			$this->row_css_rules = ' tr[id="gridRow'. $this->recId .'"]:hover > td:not(.rnr-cs){'. $this->getCustomCSSRule( $rowHoverCssRule ) ."}\n". $this->row_css_rules;
			return '';
		}
	}


	/**
	 * Build and shows totals info on page
	 *
	 * @param array $totals info abount totals
	 */
	function buildTotals(&$totals)
	{
		if(count($this->totalsFields))
		{
			//	process totals
			$this->xt->assign("totals_row", true);
			$totals_records = array("data" => array());
			for($j = 0; $j < $this->colsOnPage; $j++)
			{
				$record = array();
				if($j == 0)
				{
					for($i = 0; $i < count($this->totalsFields); $i ++)
					{
						$goodName = GoodFieldName( $this->totalsFields[$i]['fName'] );
						//	show totals
						$total = GetTotals( $this->totalsFields[$i]['fName'],
							$totals[$this->totalsFields[$i]['fName']],
							$this->totalsFields[$i]['totalsType'],
							$this->totalsFields[$i]['numRows'],
							$this->totalsFields[$i]['viewFormat'],
							PAGE_LIST,
							$this->pSet,
							false,
							$this );

						if( !$this->pdfJsonMode() ) {
							$total = "<span id=\"total".$this->id."_" . $goodName . "\">".$total."</span>";
						}

						$this->xt->assign( $goodName ."_total", $total);

						$this->xt->assign( $goodName . "_showtotal", true);
					}
				}
				if($j < $this->colsOnPage - 1){
					$record["endrecordtotals_block"]= true;
				}
				$totals_records["data"][]= $record;
			}
			$this->xt->assignbyref("totals_record", $totals_records);
			if(!$this->rowsFound)
				$this->xt->assign("totals_attr", "style='display:none;'");
		}
	}

	/**
	 * @param string $field
	 * @param int $state 0 value not need, 1 need for count, 2 need real value
	 */
	function outputFieldValue($field, $state)
	{
		$this->arrFieldSpanVal[$field] = $state;
	}

	/**
	 * Add span val for lookup fields, and average|total|count totals
	 */
	function addSpanVal($fName, &$data)
	{
		if( !$this->printRawValue( $fName ) )
			return;
		$fieldValue = $data[$fName ];
		return "val=\"".runner_htmlspecialchars( $fieldValue )."\" ";


	}

	/**
	 * Proccess grid cells, also add spans if need them
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null)
	{
		if( $this->pdfJsonMode() ) {
			return;
		}
		for($i=0; $i<count($this->listFields); $i++)
		{
			$span = "<span id=\"".$type.($type == 'edit' ? $this->recId : $this->id)."_".$this->listFields[$i]['goodFieldName']."\" ";

			if($type == 'edit')
			{
				$span.= $this->addSpanVal($this->listFields[$i]['fName'], $data).">";
				$span.=	$record[$this->listFields[$i]['valueFieldName']];
			}
			else
				$span.= ">";

			$span.="</span>";

			$record[$this->listFields[$i]['valueFieldName']]= $span;
		}
	}

	/**
	 * Proccess record values
	 *
	 * @param array $record
	 * @param array $data
	 * @param string $keylink
	 */
	function proccessRecordValue( &$data, &$keylink, $listFieldInfo )
	{
		$fName = $listFieldInfo['fName'];
		
		if( $this->spreadsheetGridApplicable() ) {
			if( in_array( $fName, $this->pSet->getInlineEditFields() ) ) {
				return $this->getInlineEditControl( $fName, $this->recId, $data);
			}			
		}

		$dbVal = $this->showDBValue( $fName, $data, $keylink );
		return $this->addCenterLink( $dbVal, $fName );
	}

	/**
	 * new
	 */
	protected function getInlineEditControl( $fName, $recId, &$data ) {
		$controls = $this->editPage->getContolMapData( $fName, $recId, $data, $this->editPage->editFields );
		$this->fillControlsMap( $controls );
		
		if( $this->editPage->getEditFormat( $fName ) == EDIT_FORMAT_READONLY )
			$this->editPage->readOnlyFields[ $fName ] = $this->showDBValue( $fName, $data );	
		
		$ctrlParams = $this->editPage->getEditContolParams( $fName, $recId, $data );
		$ctrlParams["mode"] = MODE_INLINE_EDIT;
		$ctrlParams["extraParams"]["spreadsheet"] = true;
			
		// form control markup
		$ctrl = $this->editPage->getControl( $fName, $recId, $ctrlParams["extraParams"] );
		return $ctrl->getControlMarkup( $ctrlParams, $data );
	}
	
	/**
	 *
	 */
	function addCenterLink( &$value, $fName )
	{
		if( !$this->googleMapCfg['isUseMainMaps'] )
			return $value;

		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			// if no center link than continue;
			if ($this->googleMapCfg['mapsData'][$mapId]['addressField'] != $fName || !$this->googleMapCfg['mapsData'][$mapId]['showCenterLink'])
				continue;

			// if use user defined link if prop = 1 or use value if prop = 2
			if($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
				$value = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];

			return '<a href="#" type="centerOnMarker'.$this->id.'" recId="'.$this->recId.'">'.$value.'</a>';
		}

		return $value;
	}	
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid()
	{
		//	can show data
		if( $this->permis[$this->tName]['search'] && $this->rowsFound )
			return true;

		//	can add data to grid
		if ( $this->inlineAddAvailable() || $this->addAvailable() && $this->showAddInPopup )
			return true;

		return false;
	}

	/**
	 * Build checkbox markup
	 */
	function fillCheckAttr(&$record, $data, $keyblock)
	{
		
		$record["checkbox"]= true;
		$record["checkbox_attrs"]= "name=\"selection[]\" ".
			"value=\"".runner_htmlspecialchars($keyblock)."\" ".
			"id=\"check".$this->id."_".$this->recId."\" ";
			//"data-keys=\"".runner_htmlspecialchars(my_json_encode( $keyValues ))."\"";
	
	}

	protected function getRecordset() {
		$rs = $this->dataSource->getList( $this->queryCommand );
		if( !$rs || !$this->pSet->reorderRows() ) {
			return $rs;
		}
		//	'reorder rows' feature preparations
		$vResult = $this->getVerifiedOrderRecordset( $rs );
		$rs = $vResult[ "rs" ];
		if( !$vResult["hasNulls"] )
			return $rs;

		$orderField = $this->pSet->reorderRowsField();

		// the reorderRowsField is empty. Fill it in the whole table
		$keys = $this->pSet->getTableKeys();

		$updateCommand = new DsCommand;
		$updateCommand->advValues[ $this->pSet->reorderRowsField() ] = new DsOperand( dsotROWNO, '' );
		$updateCommand->order = $this->queryCommand->order;		
		if( !$this->pSet->inlineAddBottom() ) {
			$updateCommand->invertOrder();
		}

		if( $this->dataSource->updateRowNumberAvailable( $updateCommand ) ) {
			// easy way, one requests covers all table
			$updateCommand->filter = DataCondition::FieldIs( $this->pSet->reorderRowsField(), dsopEMPTY, '' );
			$this->dataSource->updateRowNumber( $updateCommand, $this->getMaxOrderValue( $this->pSet ) );
		} else {
			//	hard way. Update all records in the table with null order one by one
			$selectCommand = new DsCommand;
			$selectCommand->filter = DataCondition::FieldIs( $this->pSet->reorderRowsField(), dsopEMPTY, '' );
			$selectCommand->order = $this->queryCommand->order;
			if( !$this->pSet->inlineAddBottom() ) {
				$selectCommand->invertOrder();
			}
			//	fetch all key values from the table where order is null
			$rKeys = array();
			$orderRs = $this->dataSource->getList( $selectCommand );
			while( $data = $orderRs->fetchAssoc() ) {
				$keyValues = array();
				foreach( $keys as $k ) {
					$keyValues[ $k ] = $data[ $k ];
				}
				$rKeys[] = $keyValues;
			}

			//	update all records from $rKeys with incrementing order
			$maxOrder = $this->getMaxOrderValue( $this->pSet );
			foreach( $rKeys as $keyValues ) {
				$updateCommand = new DsCommand;
				$updateCommand->keys = $keyValues;
				
				$updateCommand->values = array();
				$updateCommand->values[ $this->pSet->reorderRowsField() ] = ++$maxOrder;
				$this->dataSource->updateSingle( $updateCommand );
			}
		}
		
		return $this->dataSource->getList( $this->queryCommand );
	}

	/**
	 * Verify that field value is not empty in the whole recordset
	 * If non-unique orders are found, update order in the recordset and at the same time create command to update 
	 * the record in the database
	 * Return the recordset on success or null otherwise
	 * @param DataResult rs
	 * @param String field
	 * @return Array( 
	 * 	"hasNulls" => boolean
	 *  "rs" => DataResult
	 * )
	 */
	protected function getVerifiedOrderRecordset( $rs ) {
		$orderField = $this->pSet->reorderRowsField();
		$keyFields = $this->pSet->getTableKeys();
		$hasNulls = false;
		$commands = array();
		$records = array();
		$orders = array();
		while( $data = $rs->fetchAssoc() ) {
			$order = $data[ $orderField ];
			if(  $order == '' ) {
				$hasNulls = true;
				continue;
			}
			//	fix non unique 'order' field values
			if( $orders[ $order ] ) {
				$updateCommand = new DsCommand;
				foreach( $keyFields as $k ) {
					$updateCommand->keys[ $k ] = $data[ $k ];
				}
				while( $orders[ $order ] )
					++$order;
				$updateCommand->values[ $orderField ] = $order;
				$commands[] = $updateCommand;
				$data[ $orderField ] = $order;
			}
			$orders[ $order ] = true;
			$records[] = $data;
		}

		//	run all the commands, update database
		foreach( $commands as $dc ) {
			$this->dataSource->updateSingle( $dc );
		}
		
		return array(
			"rs" => new ArrayResult( $records ),
			"hasNulls" => $hasNulls
		);
	}

	/**
	 * Main function, call to build page
	 * Do not change methods call oreder!!
	 */
	function prepareForBuildPage()
	{
		if( $this->mode == LIST_DASHDETAILS
			|| $this->mode == LIST_DETAILS && ( $this->masterPageType == PAGE_LIST || $this->masterPageType == PAGE_REPORT ))
			$this->updateDetailsTabTitles();

		//	prepare maps
		loadMaps( $this->pSet );

		// build column hiding CSS
		$this->buildMobileCssRules();

		//Sorting fields
		$this->buildOrderParams();

		// delete record
		$this->deleteRecords();

		// PRG rule, to avoid POSTDATA resend
		$this->rulePRG();

		//	we need to decide which tab to display first
		$this->processGridTabs();

		$this->setGoogleMapsParams($this->listFields);

		
		RunnerContext::pushSearchContext( $this->searchClauseObj );
		
		//	call SQL events, calculate record count
		$this->calculateRecordCount();

		// build pagination block
		$this->buildPagination();

		$this->recSet = $this->getRecordset();
		
		RunnerContext::pop();	//	search context

		if( !$this->recSet ) {
			showError( $this->dataSource->lastError() );
		}
		
		// must run ASAP after dataSource->getList()
		$this->fillGridData();
		$this->fillAdvancedMapData();


		$this->setGridUserParams();
		$this->assignColumnHeaderClasses();


		if( $this->mode != LIST_MASTER ) {
			$this->buildSearchPanel();
			$this->assignSimpleSearch();
		}

		// add common js code
		$this->addCommonJs();

		// add common html code
		$this->addCommonHtml();

		// Set common assign
		$this->commonAssign();

		// Add cells' custom css
		$this->addCustomCss();
	}

	/**
	 * Sorting fields
	 */
	function buildOrderParams()
	{
		$this->assignColumnHeaders();

		if( !$this->isPageSortable() )
			return;

		$this->addOrderUrlParam();
	}

	function assignColumnHeaders()
	{
		//	show headers
		foreach( $this->listFields as $f)
		{
			$this->xt->assign( GoodFieldname( $f['fName'] ) . "_fieldheader", true );
		}

		if ( !$this->isReoderByHeaderClickingEnabled() ) {
			return;
		}

		//	add icons and find already sorted fields
		$orderFields =& $this->orderClause->getOrderFields();

		//	add sorting links and icons
		foreach( $orderFields as $of )
		{
			if( $of['hidden'] ) {
				continue;
			}

			//	add icon
			if( $this->isPD() )
			{
				$this->xt->assign( "arrow_icon_" . GoodFieldname( $of['column'] ),
					"<span data-icon=\"".( $of["dir"] == "ASC" ? "sortasc" : "sortdesc")."\"></span>" );
			}
			else
			{
				$this->xt->assign_section( GoodFieldname( $of['column'] )."_fieldheader",
					"", "<span data-icon=\"".( $of["dir"] == "ASC" ? "sortasc" : "sortdesc")."\"></span>" );
			}
		}

		foreach( $this->listFields as $f )
		{
			$gf = GoodFieldName( $f['fName'] );
			$dir = "a";

		//  build multisort parameter
		//	update direction if the field is already sorted

			$multisort = array();
			foreach( $orderFields as $of )
			{
				if( $of['hidden'] )
					continue;
				if( $of['column'] == $f['fName'] )
				{
					$dir = $of["dir"] == "ASC" ? "d" : "a";
				}
				else
				{
					$multisort[] = ($of["dir"] == "ASC" ? "a" : "d") . GoodFieldName($of['column']);
				}
			}

		//	assign sorting links
			$attrs = array();
			$attrs[] = 'data-href="' . GetTableLink($this->shortTableName, "list", "orderby=" . $dir.$gf ) . '"';
			$attrs[] = 'data-order="' . $dir . $gf . '"';
			$attrs[] = 'id="order_'.$gf.'_'.$this->id.'"';
			$attrs[] = 'name="order_'.$gf.'_'.$this->id.'"';
			$attrs[] = 'data-multisort="' . implode( ';', $multisort ) . '"';
			$attrs[] = 'class="rnr-orderlink"';

			$this->xt->assign( $gf."_orderlinkattrs", implode( " ", $attrs ) );
		}
	}

	/**
	 * @param String fName
	 * @param Boolean desc
	 * @param Boolean showLabelOnly
	 * @return String
	 */
	protected function orderFieldLabelString( $fName, $desc, $showLabelOnly )
	{
		$fName = GetFieldLabel( GoodFieldName( $this->tName ), GoodFieldName( $fName ) );
		if( $showLabelOnly )
			return $fName;

		return $fName." ". ($desc ? "High to Low" : "Low to High");
	}

	/**
	 *
	 */
	protected function assignSortByDropdown()
	{
		if( !$this->pSet->hasSortByDropdown() )
			return;

		// no data
		if( !$this->rowsFound )
		{
			if( $this->listAjax )
			{
				$this->xt->assign("reorder_records", true);
				$this->hideElement("reorder_records");
			}
			else
				$this->hideItem("sort_dropdown");

			return;
		}

		$sortSettings = $this->orderClause->getSortBySettings();
		$sortByIdx = $this->orderClause->getSortByControlIdx();

		$options = array();
		if( $sortByIdx == -1 )
			$options[] = "<option selected> </option>";

		foreach( $sortSettings as $idx => $sData )
		{
			$label = $sData["label"];
			if( !$label )
			{
				$labelParts = array();
				foreach( $sData["fields"] as $fData )
				{
					$labelParts[] = $this->orderFieldLabelString( $fData["field"], $fData["desc"], $fData["labelOnly"] );
				}
				$label = implode( "; ", $labelParts );
			}

			$selected = $sortByIdx == $idx ? " selected" : "";
			$options[] = '<option value="'.($idx + 1).'" '.$selected.'>'.$label.'</option>';
		}

		if( count( $options ) )
			$markup = '<select id="sortBy'.$this->id.'" class="form-control">'.implode("", $options)."</select>";

		$this->xt->assign("reorder_records", true);
		$this->xt->assign("sortByDropdown", $markup);
	}

	/**
	 * show page at the end of its proccess, depending on mode
	 */
	function showPage()
	{
		$this->BeforeShowList();
		$this->display($this->templatefile);
	}

	/**
	 * Static function for create list page
	 * Read params from setting
	 * Create object of class in accordance with mode displaying page
	 * @param String strTableName
	 * @param Array options
	 */
	static function & createListPage($strTableName, $options)
	{
		$gSettings = new ProjectSettings($strTableName, $options['pageType'], $options['pageName']);

		$gQuery = $gSettings->getSQLQuery();
		$params = $options;
		$params['tName'] = $strTableName;
		$params['origTName'] = $gSettings->getOriginalTableName();
		$params['gPageSize'] = $gSettings->getInitialPageSize();

		$params['nSecOptions'] = $gSettings->getAdvancedSecurityType();
		$params['recsPerRowList'] = $gSettings->getRecordsPerRowList();
		$params['mainTableOwnerID'] = $gSettings->getTableOwnerIdField();
		$params['exportTo'] = $gSettings->hasExportPage();
		$params['printFriendly'] = $gSettings->hasPrintPage();
		$params['deleteRecs'] = $gSettings->hasDelete();
		$params['arrKeyFields'] = $gSettings->getTableKeys();
		$params["panelSearchFields"] = $gSettings->getPanelSearchFields();
		$params['listGridLayout'] = $gSettings->getListGridLayout();
		$params['createLoginPage'] = GetGlobalData("createLoginPage",false);
		$params['noRecordsFirstPage'] = $gSettings->noRecordsOnFirstPage();
		$params['totalsFields'] = $gSettings->getTotalsFields();
		$params['listAjax'] = $gSettings->ajaxBasedListPage();
		$params['arrRecsPerPage'] = $gSettings->getRecordsPerPageArray();
		$params['isScrollGridBody'] = $gSettings->getScrollGridBody();
		$params['viewPDF'] = $gSettings->isViewPagePDF() || $gSettings->isPrinterPagePDF();

		$params['audit'] = GetAuditObject($strTableName);


		// choose class by mode
		if ($params["mode"]==LIST_SIMPLE )
			$pageObject = new ListPage_Simple($params);
		else if($params["mode"]==LIST_MASTER)
			$pageObject = new ListPage_Master($params);
		else if($params["mode"]==LIST_AJAX)
			$pageObject = new ListPage_Ajax($params);
		else if($params["mode"]==LIST_LOOKUP)
			$pageObject = new ListPage_Lookup($params);
		else if($params["mode"]==LIST_DETAILS && $params["masterPageType"] == PAGE_LIST)
			$pageObject = new ListPage_DPList($params);
		else if($params["mode"]==LIST_DETAILS || $params["mode"]==LIST_PDFJSON)
			$pageObject = new ListPage_DPInline($params);
		else if($params["mode"]==LIST_POPUPDETAILS )
			$pageObject = new ListPage_DPPopup($params);
		else if( $params["mode"]==LIST_DASHDETAILS )
			$pageObject = new ListPage_DPDash($params);
		else if($params["mode"] == RIGHTS_PAGE)
		{
			$pageObject = new RightsPage($params);
		}
		else if($params["mode"]==MEMBERS_PAGE)
		{
			if( $params[ "providerType" ] == stAD ) {
				$pageObject = new MembersPage_AD($params);
			} else {
				$pageObject = new MembersPage($params);
			}
		}
		else if($params["mode"] == LIST_DASHBOARD)
			$pageObject = new ListPage_Dashboard($params);
		else if( $params["mode"] == MAP_DASHBOARD )
			$pageObject = new MapPage_Dashboard($params);

		$pageObject->init();

		return $pageObject;
	}

	/**
	 * If the page's layout is horizontal and the number of records per row equals 1
	 * It assigns all $record's content to 'grid_row' (to show all rows added to a grid row in 'Visual Editor')
	 * otherwise It assigns the content to 'grid_record' directly.
	 */
	protected function setRowsGridRecord(&$row, $record)
	{
		if( !$this->isPD() )
		{
			//	old stuff
			if($this->listGridLayout == gltVERTICAL || $this->recsPerRowList != 1)
			{
				$row["grid_record"]["data"][]= $record;
				return;
			}
		}
		foreach($record as $index=>$value)
		{
			$row[$index] = $value;
		}
		$row["grid_record"] = true;
	}

	/**
	 * Build CSS rules to hide particular columnns on specific screen sizes
	 */
	protected function buildMobileCssRules()
	{
		if( $this->pSet->isAllowShowHideFields() )
			return;
		$cssBlocks = array();
		$columnsToHide = $this->getColumnsToHide();

		$devices = array(  SMARTPHONE_PORTRAIT, DESKTOP );

		//	build CSS code
		foreach( $this->listFields as $f )
		{
			$gFieldName = GoodFieldName( $f['fName'] );
			$fieldMentioned = false;
			$field = $f['fName'];
			foreach( $devices as $d )
			{
				if( in_array($gFieldName, $columnsToHide[ $d ]) )
				{
					$this->hiddenColumnClasses[$gFieldName] = "column".GoodFieldName( $field );
					$cssBlocks[$d] .= "." . $this->hiddenColumnClasses[$gFieldName] . ":not([data-forced-visible-column]) { display: none !important;; }\n";
					$fieldMentioned = true;
				}
			}
		}

		$this->mobile_css_rules = "";
		foreach( $devices as $d )
		{
			if($cssBlocks[$d])
			{
				$this->mobile_css_rules .= ProjectSettings::getDeviceMediaClause($d)."\n{\n".$cssBlocks[$d]."\n}\n";
			}
		}

	}

	/**
	 * Get indices of the not list page's blob fields
	 * @return Array
	 */
	public function getNotListBlobFieldsIndices()
	{
		$allFields = $this->pSet->getFieldsList();
		$blobIndices = $this->pSet->getBinaryFieldsIndices();

		$indices = array();
		foreach($blobIndices as $idx)
		{

			if( !$this->pSet->appearOnListPage( $allFields[ $idx - 1 ] ) )
				$indices[] = $idx;
		}

		return $indices;
	}

	public static function readListModeFromRequest()
	{
		$postedMode = postvalue("mode");
		if($postedMode == "ajax")
			return LIST_AJAX;
		else if($postedMode == "lookup")
			return LIST_LOOKUP;
		else if($postedMode == "listdetails")
			return LIST_DETAILS;
		else if( $postedMode == "listdetailspopup" )
			return LIST_POPUPDETAILS;
		else if($postedMode == "dashdetails")
			return LIST_DASHDETAILS;
		else if($postedMode == "dashlist")
			return LIST_DASHBOARD;
		else if($postedMode == "dashmap")
			return MAP_DASHBOARD;

		return LIST_SIMPLE;
	}

	protected static function readMainTableSettingsFromRequest( $table )
	{
		$mainTableShortName = GetTableURL( postvalue("table") );
		return getLookupMainTableSettings($table, $mainTableShortName, postvalue("field"));
	}

	protected static function checkLookupPermissions( $table )
	{
		$lookupMainSettings = ListPage::readMainTableSettingsFromRequest( $table );
		if( !$lookupMainSettings )
			return false;

		$mainTable = $lookupMainSettings->getTableName();

		//	page called for List page with search lookup and the user has permissions on the main table
		if( CheckTablePermissions($mainTable, "S") || CheckTablePermissions($mainTable, "E") || CheckTablePermissions($mainTable, "A"))
			return true;

		//	otherwise check if the page is called from the register page
		return false;
	}

	public static function processListPageSecurity( $table )
	{
		//	user has necessary permissions
		if( Security::checkPagePermissions( $table, "S" ) )
			return true;

		$mode = ListPage::readListModeFromRequest();

		//	check special permissions like lookup mode
		if( $mode == LIST_LOOKUP && ListPage::checkLookupPermissions( $table ) )
			return true;

		//	page can not be displayed. Redirect or return error

		//	return error if the page is requested by AJAX
		if( $mode != LIST_SIMPLE )
		{
			Security::sendPermissionError();
			return false;
		}

		// The user is logged in but lacks necessary permissions
		// redirect to List page or Menu.
		if( isLogged() && !Security::isGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Current URL is already saved in session
		redirectToLogin();
		return false;
	}

	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName, $recordId = "")
	{
		if( $this->isPD() ) {
			return parent::hideField( $fieldName, $recordId );
		}
		$this->xt->assign(GoodFieldName($fieldName) ."_fieldheadercolumn", false);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldcolumn", false);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldfootercolumn", false);
	}

	/**
	 * Show the field on the page
	 * @param String fieldName
	 */
	function showField($fieldName)
	{
		if( $this->isPD() ) {
			return parent::showField( $fieldName );
		}
		$this->xt->assign(GoodFieldName($fieldName) ."_fieldheadercolumn", true);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldcolumn", true);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldfootercolumn", true);
	}

	public function isPageSortable()
	{
		return true;
	}

	/**
	 * save user setting
	 * @param String table
	 * @return Boolean
	 */
	public static function processSaveParams( $table )
	{
		if( postvalue("saveParam") )
		{
			$paramType = intval( postvalue("saveParam") );
			$paramData = my_json_decode(postvalue("data"));

			include_once getabspath("classes/paramsLogger.php");

			if( postvalue("onDashboard") )
				$paramsLogger = new paramsLogger( postvalue("dashElementId"), $paramType );
			else
				$paramsLogger = new paramsLogger( $table, $paramType );

			if( $paramType == SHFIELDS_PARAMS_TYPE )
			{
				$macroDeviceClass = RunnerPage::deviceClassToMacro( postvalue("deviceClass") );
				$ps = new ProjectSettings($table);
				if( !$ps->columnsByDeviceEnabled() )
					$macroDeviceClass = 0;
				$paramsLogger->saveShowHideData( $macroDeviceClass, $paramData );
			}
			else
				$paramsLogger->save( $paramData );
			return true;
		}

		return false;
	}
	protected function setGridUserParams()
	{

	}

	protected function displayViewLink() {
		return $this->viewAvailable();
	}

	function gridTabsAvailable() {
		if( $this->mode == LIST_DETAILS && $this->masterPageType == PAGE_ADD )
			return false;
		return true;
	}

	protected function hasMainDashMapElem()
	{
		return false;
	}

	function displayTabsInPage()
	{
		return $this->simpleMode() 
			|| ( $this->mode == LIST_DETAILS && ($this->masterPageType == PAGE_VIEW || $this->masterPageType == PAGE_EDIT));
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "grid_message" );
		} if( $name == "grid" ) {
			return array( "grid" );
		}

		return parent::element2Item( $name );
	}

	function &findRecordAssigns( $recordId ) {
		return $this->recordsRenderData[ $recordId ];
	}

	/**
	 * Add raw values to the grid or not
	 * @return Boolean
	 */
	function printRawValue( $field )
	{
		if( !isset( $this->fieldsWithRawValues[ $field ] )) {
			$type = $this->pSet->getFieldType($field);
			if( IsBinaryType($type) ) {
				$this->fieldsWithRawValues[ $field ] = false;
			} else {
				$this->fieldsWithRawValues[ $field ] = $this->addRawFieldValues
					|| @$this->arrFieldSpanVal[ $field ] == 2
					|| @$this->arrFieldSpanVal[ $field ] == 1
					|| $this->pSet->hasAjaxSnippet()
					|| $this->pSet->hasButtonsAdded();
			}
		}
		return $this->fieldsWithRawValues[ $field ];
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {

		$dc = parent::getSubsetDataCommand();

		//	no records on first page
		if( $this->mode != LIST_DETAILS && $this->noRecordsFirstPage && !$this->isSearchFunctionalityActivated() )
			$dc->filter = DataCondition::_False();

		$dc->reccount = $this->pageSize;
		if( $this->pageSize >= 0 )
			$dc->startRecord = $this->pageSize * ($this->myPage - 1);
		else
			$dc->startRecord = 0;

		if( $this->pSet->getRecordsLimit() )
			$dc->reccount = $this->pSet->getRecordsLimit();	

		$this->reoderCommandForReoderedRows( $this->pSet, $dc );

		return $dc;
	}

	/**
	 * calcualte record count, call BeforeQuery events
	 * update SQL queries if the user wants so
	 */

	function calculateRecordCount()
	{
		$this->queryCommand = $this->getSubsetDataCommand();
		$prep = $this->dataSource->prepareSQL( $this->queryCommand );
		$this->querySQL = $prep["sql"];
		$this->callBeforeQueryEvent( $this->queryCommand );
		$this->numRowsFromSQL = $this->dataSource->getCount( $this->queryCommand );
		$recordLimit = $this->pSet->getRecordsLimit();
		if( $recordLimit && $this->numRowsFromSQL > $recordLimit ) {
			$this->numRowsFromSQL = $recordLimit;
		}
	 }

	 /**
	  * Call event and modify dc if needed
	  */
	function callBeforeQueryEvent( $dc ) {
		if( !$this->eventsObject->exists("BeforeQueryList") ) {
			return;
		}
		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$order = $prep["order"];
		$sql = $prep["sql"];
		$this->eventsObject->BeforeQueryList($sql, $where, $order, $this);

		if( $sql != $prep["sql"] )
			$this->dataSource->overrideSQL( $dc, $sql );
		else {
			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
			if( $order != $prep["order"] )
				$this->dataSource->overrideOrder( $dc, $order );
		}
		$prep = $this->dataSource->prepareSQL( $dc );
		$this->querySQL = $prep["sql"];
	}

	protected function getDeleteCommand( $keys ) {
		$dc = new DsCommand();
		$dc->filter = Security::SelectCondition( "D", $this->pSet );

		//	the admin sghould not be able to delete himself from admin_users table
		if( $this->tName == ADMIN_USERS && Security::dynamicPermissions() ) {
			$dc->filter = DataCondition::_And( array(
				$dc->filter,
				DataCondition::_Not( Security::currentUserCondition() )
			) );
		}

		$dc->keys = $keys;
		return $dc;
	}
	
	protected function spreadsheetGridApplicable() {
		return ( $this->mode == LIST_SIMPLE || $this->mode == LIST_AJAX 
			|| $this->mode == LIST_DASHBOARD || $this->mode == LIST_DETAILS )
			&& $this->pSet->spreadsheetGrid()
			&& $this->permis[$this->tName]["edit"];
	}
	
	protected function setupRelatedInlineEditPage() {
		$this->editPage = $this->getRelatedInlineEditPage( $this->pageName );
	}
	
	/**
	 * Fill field settings for current table
	 * @intellisense
	 */
	function fillFieldSettings()
	{
		parent::fillFieldSettings();
		if( $this->spreadsheetGridApplicable() && $this->editPage ) {
			$this->addFieldsSettings( $this->pSet->getInlineEditFields(), $this->editPage->pSet, PAGE_EDIT );
		}
	}	

	public function updateRowOrder()
	{
		$action = postvalue( "a" );
		$postData = postvalue( "data" );
		if( !$this->pSet->reorderRows() ) {
			return false;
		}	
		if( $action !== "saveRowOrder" ) {
			return false;
		}
		$updateData = runner_json_decode( $postData );
		$newOrder = $updateData[ "newOrder" ];
		$oldOrder = $updateData[ "oldOrder" ];
		$keys = $updateData[ "keys" ];
		$allRecordKeys = $updateData[ "allRecordKeys" ];
		$recordId = $updateData[ "recordId" ];

		if( !$newOrder || !$oldOrder ) {
			echo "wrong parameters";
			return true;
		}
		$orderField = $this->pSet->reorderRowsField();
		
		//	update all records in between the old and the new position
		$updateOrderDc = new DsCommand();
		$updateOrderDc->advValues = array();
		$forward = $newOrder > $oldOrder;
		if( $forward ) {
			//	update table set order=order-1 where order>oldOrder and order<=newOrder
			$updateOrderDc->advValues[ $orderField ] = new DsOperand( dsotSQL, $this->dataSource->wrap( $orderField ) . " - 1 " );
			$updateOrderDc->filter = DataCondition::_And( array(
				DataCondition::FieldIs( $orderField, dsopMORE, $oldOrder ),
				DataCondition::_Not( DataCondition::FieldIs( $orderField, dsopMORE, $newOrder ) ),
			) );

		} else {
			//	update table set order=order+1 where order>=newOrder and order<oldOrder
			$updateOrderDc->advValues[ $orderField ] = new DsOperand( dsotSQL, $this->dataSource->wrap( $orderField ) . " + 1 " );
			$updateOrderDc->filter = DataCondition::_And( array(
				DataCondition::FieldIs( $orderField, dsopLESS, $oldOrder ),
				DataCondition::_Not( DataCondition::FieldIs( $orderField, dsopLESS, $newOrder ) ),
			) );
		}
		$this->dataSource->updateSingle( $updateOrderDc, false );

		//	update the moved record with new order
		//	if there are no keys, the record is being inline-added
		$keyFields = $this->pSet->getTableKeys();
		if( $keys ) {
			$updateDc = new DsCommand;
			foreach( $keyFields as $i => $k ) {
				$updateDc->keys[ $k ] = $keys[ $i ];
			}
			$updateDc->values[ $orderField ] = $newOrder;
			$this->dataSource->updateSingle( $updateDc );
		}

		//	return order values for all records displayed
		$idKeys = array();	//	auxiliary array, used below
		$conditions = array();
		foreach( $allRecordKeys as $rKeys ) {
			if( !$rKeys["keys"] ) {
				//	inline-added record
				continue;
			}
			//	make an associative array
			$keyValues = numericToAssoc( $keyFields, $rKeys["keys"] );
			$conditions[] = DataCondition::FieldsEqual( $keyFields, $keyValues );
			$idKeys[ $rKeys["recordId"] ] = $keyValues;

		}

		$selectDc = new DsCommand;
		$selectDc->filter = DataCondition::_Or( $conditions );
		$selectDc->order = array( array( 
			"column" => $orderField,
			"dir" => "ASC"
		) );
		$rs = $this->dataSource->getList( $selectDc );
		//	assoc array of ( recId => order )
		$orders = array();
		while( $data = $rs->fetchAssoc() ) {
			//	find recId
			$keyValues = array();
			foreach( $keyFields as $k ) {
				$keyValues[ $k ] = $data[ $k ];
			}
			$recId = findArrayInArray( $idKeys, $keyValues );
			if( $recId === false ) {
				//	this should never happen actually
				continue;
			}
			$orders[ $recId ] = $data[ $orderField ];
		}
		//	insert order of the element being moved. If inline add in progress, it is not there yet.
		$orders[ $recordId ] = $newOrder;

		//	for security reasons send it is important to send only the order field values
		echo runner_json_encode( array( "orders" => $orders ) );
		return true;
	}
	

	/**
	 * Returns edit format of a field, apply format overrides
	 */
	public function getEditFormat( $field, $pSet = null ) {
		if( $this->spreadsheetGridApplicable() ) {
			$isDetKeyField = in_array( $field, $this->detailKeysByM );
			
			if( $isDetKeyField )
				return EDIT_FORMAT_READONLY;
		}
		return parent::getEditFormat( $field, $pSet );
	}	
}
?>