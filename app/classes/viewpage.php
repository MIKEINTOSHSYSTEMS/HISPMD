<?php
class ViewPage extends RunnerPage
{
	public $keys = array();

	public $jsKeys = array();

	public $keyFields = array();

	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->setKeysForJs();

		$this->headerForms = array( "top" );
		$this->footerForms = array( "below-grid" );
		$this->bodyForms = array( "above-grid", "grid" );
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == VIEW_DASHBOARD || $this->mode == VIEW_POPUP && $this->dashTName)
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
		parent::setSessionVariables();

		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize($this->searchClauseObj);
	}

	public static function processEditPageSecurity( $table )
	{
		$pageMode = ViewPage::readViewModeFromRequest();
		$messageLink = "";

		if( !isLogged() || Security::isGuest() )
			$messageLink = " <a href='#' id='loginButtonContinue'>". "Login" . "</a>";

		if( !Security::processPageSecurity( $table, "S", $pageMode != VIEW_SIMPLE, $messageLink) )
			return false;

		return true;
	}

	/**
	 * Set keys values
	 * @param {array} keys
	 */
	public function setKeys($keys)
	{
		$this->data = null;
		$this->keys = $keys;
		$this->setKeysForJs();
	}

	/**
	 * Add table settings
	 */
	protected function prepareJsSettings()
	{
		$this->jsSettings['tableSettings'][ $this->tName ]["keys"] = $this->jsKeys;
		$this->jsSettings['tableSettings'][ $this->tName ]["keyFields"] = $this->pSet->getTableKeys();

		if( $this->mode == VIEW_DASHBOARD )
			$this->pageData['detailsMasterKeys'] = $this->getDetailTablesMasterKeys( $this->getCurrentRecordInternal() );
	}

	public function setKeysForJs()
	{
		$i = 0;
		foreach($this->keys as $field => $value)
		{
			$this->jsKeys[ $i++ ] = $value;
		}
	}

	public function getCurrentRecord()
	{
		// this trick is required for ASP array copying.
		$tdata = $this->getCurrentRecordInternal();
		$data = $tdata;

		$oldData = $data;
		foreach( $oldData as $fName => $val )
		{
			$viewFormat = $this->pSet->getViewFormat($fName);

			if( $viewFormat == FORMAT_DATABASE_FILE || $viewFormat == FORMAT_DATABASE_IMAGE || $viewFormat == FORMAT_FILE_IMAGE )
				$data[ $fName ] = $data[ $fName ] ? true : false;
		}
		return $data;
	}

	/**
	 * Read current values from the database
	 * @return Array 	The current record data
	 */
	public function getCurrentRecordInternal()
	{
		if( !is_null( $this->data ) )
			return $this->data;

		$dc = $this->getSingleRecordCommand();

		if( $this->eventsObject->exists("BeforeQueryView") )
		{
			$prep = $this->dataSource->prepareSQL( $dc );
			$where = $prep["where"];
			$sql = $prep["sql"];

			// call Before Query event
			$this->eventsObject->BeforeQueryView( $sql, $where, $this );

			if( $sql != $prep["sql"] )
				$this->dataSource->overrideSQL( $dc, $sql );
			else if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
		}

		$fetchedArray = $this->dataSource->getSingle( $dc )->fetchAssoc();
		$this->data = $this->cipherer->DecryptFetchedArray( $fetchedArray );

		if( !$this->checkKeysSet() )
		{
			$this->keys = $this->getKeysFromData( $this->data );
			$this->setKeysForJs();
		}

		if( sizeof( $this->data ) && $this->eventsObject->exists("ProcessValuesView") )
			$this->eventsObject->ProcessValuesView( $this->data, $this );

		return $this->data;
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
	 * Check whether the user is allowed to see the page
	 */
	protected function readRecord()
	{
		if( $this->getCurrentRecordInternal() )
			return true;

		if($this->mode == VIEW_SIMPLE)
		{
			HeaderRedirect($this->pSet->getShortTableName(), "list", "a=return");
			exit();
		}
		//	nothing to show.
		//	TODO: add some report or message
		exit();
		return false;
	}

	/**
	 * Process the page
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessView") )
			$this->eventsObject->BeforeProcessView( $this );

		if( !$this->readRecord() )
			return;

		$this->prepareMaps();

		if ( $this->mode == VIEW_SIMPLE ) {
			$this->preparePdfControls();
			$this->pageData['pdfFonts'] = getPdfFonts();
		}

		$this->doCommonAssignments();
		$this->prepareBreadcrumbs();
		$this->prepareCollapseButton();
		$this->prepareMockControls();
		$this->prepareButtons();
		$this->prepareSteps();

		$this->prepareFields();

		$this->prepareJsSettings();

		$this->prepareDetailsTables();

		$this->addButtonHandlers();

		// It also fills the viewControlsMap property
		$this->addCommonJs();

		$this->fillSetCntrlMaps();

		$this->displayViewPage();
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
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{

		if ( $this->mode === VIEW_SIMPLE ) {
			$this->headerCommonAssign();
		} else {
			$this->xt->assign("menu_chiddenattr", "data-hidden" );
		}
		
		$this->setLangParams();

		//	display legacy page caption - key values
		$data = $this->getCurrentRecordInternal();
		foreach( $this->pSet->getTableKeys() as $i => $k )
		{
			$viewFormat = $this->pSet->getViewFormat( $k );
			if( $viewFormat == FORMAT_HTML || $viewFormat == FORMAT_FILE_IMAGE || $viewFormat == FORMAT_FILE ||
				$viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_EMAILHYPERLINK ||
				$viewFormat == FORMAT_CHECKBOX )
			{
				$this->xt->assign( "show_key" . ($i+1), runner_htmlspecialchars( $data[ $k ] ) );
			}
			else
			{
				$this->xt->assign( "show_key" . ($i+1), $this->showDBValue( $k, $data ) );
			}
		}

		$this->assignViewFieldsBlocksAndLabels();

		//	body["end"]	- this assignment is very important
		if($this->mode == VIEW_SIMPLE)
		{
			$this->assignBody();
			$this->xt->assign("flybody", true);
		}

		$this->displayMasterTableInfo();

		$this->xt->assign( "editlink", $this->getEditLink( $data ). '&' . $this->getStateUrlParams() );
	}

	/**
	 * Display the view page
	 */
	protected function displayViewPage()
	{
		// beforeshow event
		$templateFile = $this->templatefile;
		if( $this->eventsObject->exists("BeforeShowView") )
			$this->eventsObject->BeforeShowView($this->xt, $templateFile, $this->getCurrentrecordInternal(), $this);

		if( $this->mode == VIEW_SIMPLE )
		{
				if( $this->pdfMode )
			{
				$this->makePDF();
				return;
			}
			$this->display($templateFile);
			return;
		}
		if( $this->mode == VIEW_PDFJSON )
		{
			$this->preparePDFBackground();
			$this->xt->displayJSON($this->templatefile);
			return;
		}

		$this->xt->assign("footer", false);
		$this->xt->assign("header", false);
		$this->xt->assign("body", $this->body);
		$this->displayAJAX($templateFile, $this->flyId + 1);
		exit();
	}

	protected function makePdf()
	{
		$this->AddCSSFile("styles/defaultPDF.css");
		$this->assignStyleFiles( true );

		$this->hideItemType("hamburger");
		$this->hideItemType("view_back_list");
		$this->xt->load_template($this->templatefile);
		$page = $this->xt->fetch_loaded();

		$landscape = $this->pSet->isLandscapeViewPDFOrientation();
		if( $this->pSet->isViewPagePDFFitToPage() )
		{
			$pagewidth = postvalue("width");
			$pageheight = postvalue("height");
		}
		else
		{
			$pagewidth = ($landscape ? PDF_PAGE_HEIGHT : PDF_PAGE_WIDTH) * 100 / $this->pSet->getViewPagePDFScale();
		}
		include(getabspath("plugins/page2pdf.php"));
	}

	/**
	 * Set details preview on the view master page
	 */
	protected function prepareDetailsTables()
	{
		if( !$this->isShowDetailTables /*|| $this->mode == VIEW_DASHBOARD*/ )
			return;

		$dpParams = $this->getDetailsParams( $this->id );

		if( !$dpParams['ids'] )
			return;

		$this->xt->assign("detail_tables", true);

		if( $this->mode == VIEW_DASHBOARD )
			$dpTablesParams = array();

		for($d = 0; $d < count($dpParams['ids']); $d++)
		{
			if( $this->mode != VIEW_DASHBOARD )
				$this->setDetailPreview( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ],
					$dpParams['ids'][ $d ], $this->getCurrentRecordInternal() );
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

		if( $this->mode == VIEW_DASHBOARD )
			$this->controlsMap["dpTablesParams"] = $dpTablesParams;
	}

	/**
	 *
	 */
	protected function prepareFields()
	{
		$viewFields = $this->pSet->getViewFields();
		$data = $this->getCurrentRecordInternal();

		RunnerContext::pushRecordContext( $data, $this );

		foreach($this->pSet->getTableKeys() as $i=>$kf)
		{
			$keyParams[] = "&key".($i + 1)."=".runner_htmlspecialchars( rawurlencode(@$data[ $kf ]) );
		}
		$keylink = implode("", $keyParams);

		foreach( $viewFields as $f )
		{
			$gname = GoodFieldName( $f );

			if( !$this->pdfJsonMode() ) {
				$value = '<span id="view'.$this->id.'_'.$gname.'" >' . $this->showDBValue( $f, $data, $keylink ). '</span>';
				$this->xt->assign( $gname . "_value", $value );
			} else {
				//	$value = "'" . jsreplace( $this->getTextValue( $f, $data ) ) . "'";
				$this->xt->assign( $gname . "_pdfvalue", $this->showDBValue( $f, $data, $keylink ) );
			}

			$this->xt->assign( $gname . "_fieldblock", true );

			if( $this->pSet->hideEmptyViewFields() && $data[$f] == "" ) {
				$this->hideField( $f );

				// remove this after redoing the whole hideField routine for PD
				$this->xt->assign( GoodFieldName($f) . "_fieldblock", false );
			}
		}

		RunnerContext::pop();
	}

	/**
	 * Prepare Mock controls (support Javascript Control Api)
	 */
	protected function prepareMockControls()
	{
		$controlFields = $this->pSet->getViewFields();
		foreach($controlFields as $fName)
		{
			$control = array();
			$control["id"] = $this->id;
			$control["ctrlInd"] = 0;
			$control["fieldName"] = $fName;
			$control["mode"] = "view";

			$this->controlsMap["controls"][] = $control;
		}
	}

	/**
	 *
	 */
	protected function prepareMaps()
	{
		$fieldsArr = array();
		$viewFields = $this->pSet->getViewFields();
		foreach( $viewFields as $f )
		{
			$fieldsArr[] = array( 'fName' => $f, 'viewFormat' => $this->pSet->getViewFormat( $f ) );
		}
		$this->setGoogleMapsParams($fieldsArr);

		if( $this->googleMapCfg['isUseGoogleMap'] )
			$this->initGmaps();
	}

	protected function prepareNextPrevButtons()
	{
		if( !$this->pSet->useMoveNext() || $this->pdfMode || $this->mode == VIEW_PDFJSON ) {
			$this->hideItemType("prev");
			$this->hideItemType("next");
			return;
		}

		$next = array();
		$prev = array();

		$nextPrev = $this->getNextPrevRecordKeys( $this->getCurrentRecordInternal() );

		//show Prev/Next buttons
		$this->assignPrevNextButtons( !!$nextPrev["next"], !!$nextPrev["prev"], $this->mode == VIEW_DASHBOARD && ($this->hasTableDashGridElement() || $this->hasDashMapElement()) ); // TODO: hasMajorDashElem

		$this->jsSettings["tableSettings"][ $this->tName] ["prevKeys"] = $nextPrev["prev"];
		$this->jsSettings["tableSettings"][ $this->tName ]["nextKeys"] = $nextPrev["next"];
	}

	/**
	 * Assign buttons xt variables
	 */
	protected function prepareButtons()
	{
		global $globalEvents;

		if( $this->pdfMode )
			return;

		$this->prepareNextPrevButtons();

		if( $this->mode == VIEW_DASHBOARD ) {
			$this->xt->assign("groupbutton_class", "rnr-invisible-button");
			return;
		}

		if( $this->mode == VIEW_SIMPLE )
		{
			//	back to list/menu buttons
			if( $this->pSet->hasListPage() )
			{
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

		if( $this->mode == VIEW_POPUP )
		{
			$this->xt->assign("close_button", true);
			$this->xt->assign("closebutton_attrs", "id=\"closeButton".$this->id."\"");
		}

		$editable = false;
		if( $this->editAvailable() )
		{
			$data = $this->getCurrentRecordInternal();
			$editable = Security::userCan( 'E', $this->tName, $data[ $this->pSet->getTableOwnerID() ] );

			if( $globalEvents->exists("IsRecordEditable", $this->tName) )
				$editable = $globalEvents->IsRecordEditable($this->getCurrentRecordInternal(), $editable, $this->tName);

			if( $editable )
			{
				$this->xt->assign("edit_page_button", true);
				$this->xt->assign("edit_page_button_attrs", "id=\"editPageButton".$this->id."\"");
			}
		}

		// show or hide menu button
		$this->xt->assign("view_menu_button", $editable);
	}

	public static function readViewModeFromRequest()
	{
		if( postvalue("mode") == "dashrecord" )
			return VIEW_DASHBOARD;
		elseif( postvalue("onFly") )
			return VIEW_POPUP;
		elseif( postvalue("pdfjson") )
			return VIEW_PDFJSON;
		return VIEW_SIMPLE;
	}

	function editAvailable() {

		if( $this->dashElementData )
			return parent::editAvailable() && $this->dashElementData["details"][$this->tName]["edit"];
		return parent::editAvailable();
	}

	function assignViewFieldsBlocksAndLabels()
	{
		$viewFields = $this->pSet->getViewFields();

		foreach($viewFields as $fName)
		{
			$gfName = GoodFieldName($fName);

			$this->xt->assign($gfName."_fieldblock", true);

			$this->xt->assign($gfName."_label", true);
		}
	}


	protected function checkShowBreadcrumbs()
	{
		return $this->mode == VIEW_SIMPLE;
	}

	function pdfJsonMode() {
		return $this->mode == VIEW_PDFJSON;
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

	public function getSecurityCondition() {
		return Security::SelectCondition( "S", $this->pSet );
	}

	function inDashboardMode() {
		return $this->mode == VIEW_DASHBOARD;
	}

}
?>