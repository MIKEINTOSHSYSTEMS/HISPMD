<?php

require_once( getabspath('classes/controls/Control.php') );
require_once( getabspath('classes/controls/LookupField.php') );


class ListPage_Lookup extends ListPage_Embed
{
	/**
      * Field of link
      *
      * @var string
      */
	var $linkField = "";


	/**
      * Select field of lookup
      *
      * @var string
      */
	var $lookupSelectField = "";

	/**
      * Field customed
      *
      * @var string
      */
	var $customField = "";

	/**
      * Field displayed
      *
      * @var string
      */
	var $dispField = "";

	var $dispFieldAlias = "";

	var $lookupValuesArr = array();

	/**
     * @type Array
     */
	public $parentCtrlsData;

	/**
	 * The name of a table containing a lookup-field
	 * @type String
	 */
	public $mainTable;

	/**
	 * The type of a page containing a lookup-field
	 * @type String
	 */
	public $mainPageType;

	/**
	 * The lookup-field's
	 * @type String
	 */
	public $mainField = "";

	/**
	 * A  settings object for the table
	 * containing the lookup field
	 * @type ProjectSettings
	 */
	protected $mainPSet;

	public $mainRecordData;
	public $mainRecordMasterTable;

	public $mainContext;

	public $showSearchPanel;
	
	
	/**
      * Constructor, set initial params
      *
      * @param array $params
      */
	function __construct(&$params)
	{
		// call parent constructor. always at the first line!!!
		parent::__construct($params);
		// init params
		$this->initLookupParams();

		//always show add in popup
		$this->showAddInPopup = true;
		
		$this->permis[ $this->tName ]["search"] = 1;
		$this->jsSettings['tableSettings'][$this->tName]['permissions'] = $this->permis[$this->tName];
		
		$this->showSearchPanel = false;
		
		/* // turn off ajax suggest
		$this->jsSettings["tableSettings"][ $this->tName ]["ajaxSuggest"] = false;
		$this->isUseAjaxSuggest = false;*/
	}

	/**
	 * Set the correct session prefix
	 */
	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = $this->tName."_lookup_".$this->mainTable.'_'.$this->mainField;
	}

	/**
	 *
	 */
	function initLookupParams()
	{
		if( $this->mainPageType != PAGE_ADD && $this->mainPageType != PAGE_EDIT && $this->mainPageType != PAGE_REGISTER)
			$this->mainPageType = PAGE_SEARCH;

		$this->mainPSet = new ProjectSettings($this->mainTable, $this->mainPageType);

		$this->linkField = $this->mainPSet->getLinkField( $this->mainField );
		$this->dispField = $this->mainPSet->getDisplayField( $this->mainField );

		if( $this->mainPSet->getCustomDisplay( $this->mainField ) )
		{
			$this->dispFieldAlias = generateAlias(); /*GetGlobalData("dispFieldAlias", "rrdf1")*/;

			$this->customField = $this->linkField;
		}

		$this->outputFieldValue($this->linkField, 2);
		$this->outputFieldValue($this->dispField, 2);

		if( $this->dispFieldAlias && $this->pSet->appearOnListPage( $this->dispField ) )
			$this->lookupSelectField = $this->dispField;
		elseif( $this->pSet->appearOnListPage( $this->dispField ) )
			$this->lookupSelectField = $this->dispField;
		else
			$this->lookupSelectField = $this->listFields[0]['fName'];

		$this->mainContext = $this->getMainContext();
	}

	/**
	 * The stub - ListPage Lookup no supported MasterTable
	 */
	function displayMasterTableInfo()
	{
	}

	/**
	 * The stub - ListPage Lookup no supported master-details mode
	 */
	function processMasterKeyValue() {
	}

	/**
	 * @return Array
	 */
	protected function getMainContext()
	{
		$contextParams = array();

		$contextParams["data"] = $this->mainRecordData;

		if ( $this->mainRecordMasterTable && isset($_SESSION[ $this->mainRecordMasterTable . "_masterRecordData" ]) )
			$contextParams["masterData"] = $_SESSION[ $this->mainRecordMasterTable . "_masterRecordData" ];

		return $contextParams;
	}

	/**
	 * clear lookup session data, while loading at first time
	 */
	function clearSessionKeys() {
		parent::clearSessionKeys();
		if( $this->firstTime ) {
			$this->unsetAllPageSessionKeys();
		}
	}

	function addCommonJs() {
		$this->controlsMap['dispFieldAlias'] = $this->dispFieldAlias;

		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	
	}

	/**
	 *
	 */
	function addSpanVal($fName, &$data)
	{
		if ($this->dispFieldAlias && @$this->arrFieldSpanVal[$fName] == 2)
			return "val=\"".runner_htmlspecialchars($data[$this->dispFieldAlias])."\" ";
		else
			return parent::addSpanVal($fName, $data);
	}

	public function getOrderByClause()
	{
		$userStartingSort = false;
		if ( isset($_SESSION[ $this->sessionPrefix . "_orderby" ]) )
		{
			$userStartingSort = true;
		}

		$orderByField = $this->mainPSet->getLookupOrderBy( $this->mainField );
		if( !$userStartingSort && strlen($orderByField) )
		{
			$strOrder = " ORDER BY ".$this->getFieldSQL( $orderByField );
			if( $this->mainPSet->isLookupDesc( $this->mainField ) )
				$strOrder .= ' DESC';
		}
		else
			$strOrder = parent::getOrderByClause();

		return $strOrder;
	}

	protected function getCategoryFilter()
	{
		if( !$this->mainPSet->useCategory( $this->mainField ) )
			return null;

		// add 1=0 if parent control contain empty value and no search used
		if( $this->mainPageType != PAGE_SEARCH && !$this->parentCtrlsData )
		{
			return DataCondition::_False();
		}

		$conditions = array();
		foreach( $this->mainPSet->getParentFieldsData( $this->mainField ) as $cData )
		{
			if( !isset( $this->parentCtrlsData[ $cData["main"] ] ) )
				continue;

			$conditions[] = LookupField::categoryCondition( $this->mainPSet, $cData["main"], $cData["lookup"], $this->parentCtrlsData[ $cData["main"] ] );
		}
		return DataCondition::_And( $conditions );
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {

		$dc = parent::getSubsetDataCommand();
		if ($this->dispFieldAlias)
			$dc->extraColumns[] = new DsFieldData( $this->dispField, $this->dispFieldAlias, "" );
		$filters = array();
		$filters[] = DataCondition::SQLCondition( $this->getLookupWizardWhere() );
		$filters[] = $this->getCategoryFilter();
		$filters[] = $dc->filter;
		$dc->filter = DataCondition::_And( $filters );

		return $dc;
	}

	/**
	 * @return String
	 */
	protected function getLookupWizardWhere()
	{
		RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $this->mainContext ) );
		$where = prepareLookupWhere( $this->mainField, $this->mainPSet );
		RunnerContext::pop();

		return $where;
	}

	/**
	 * Build a lookup's search panel
	 */
	function buildSearchPanel() {
		if( $this->showSearchPanel ) {
			parent::buildSearchPanel();
		}
	}
	
	/**
	 * build simple search control
	 */
	protected function assignSearchControl() {
		$searchforAttrs = 'placeholder="'. "search".'"';
		
		$params = $this->searchClauseObj->getSearchGlobalParams();
		if( $this->searchClauseObj->searchStarted() ) {
			$valSrchFor = $params["simpleSrch"];
			$searchforAttrs.= " value=\"".runner_htmlspecialchars( $valSrchFor )."\"";
		}

		$searchforAttrs.= " size=\"15\" name=\"ctlSearchFor".$this->id."\" id=\"ctlSearchFor".$this->id."\"";
		$this->xt->assign( "searchfor_attrs", $searchforAttrs );
	}

	/**
	 *
	 */
	function addLookupVals()
	{
		$this->controlsMap['lookupVals'] = $this->lookupValuesArr;
	}

	function fillGridData()
	{
		parent::fillGridData();

		$this->addLookupVals();

	}


	function fillCheckAttr(&$record,$data,$keyblock)
	{
		$checkbox_attrs="name=\"selection[]\" value=\"".runner_htmlspecialchars(@$data[$this->linkField])."\" id=\"check".$this->recId."\"";
		$record["checkbox"]=array("begin"=>"<input type='checkbox' ".$checkbox_attrs.">", "data"=>array());
	}

	/**
	 * Name of function came from listpage class, but on listpage_lookup it used for collection link and display field data
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null)
	{
		if($type == 'add')
		{
			parent::addSpansForGridCells($type, $record, $data);
			return;
		}

		if(!is_null($data))
		{
			if ($this->dispFieldAlias)
				$dispVal = $data[$this->dispFieldAlias];
			else
				$dispVal = $data[$this->dispField];

			if ( in_array( $this->mainPSet->getViewFormat( $this->mainField ), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME) ) )
			{
				$viewContainer = new ViewControlsContainer( $this->mainPSet, PAGE_LIST, null );
				$ctrlData = array();
				$ctrlData[ $this->mainField ] = $data[ $this->linkField ];

				$dispVal = $viewContainer->getControl( $this->mainField )->getTextValue( $ctrlData );
			}

			$this->lookupValuesArr[] = array('linkVal' => $data[$this->linkField], 'dispVal' => $dispVal);
		}
	}

	/**
	 *
	 */
	function proccessRecordValue(&$data, &$keylink, $listFieldInfo)
	{
		$value = parent::proccessRecordValue($data, $keylink, $listFieldInfo);

		if ($this->lookupSelectField == $listFieldInfo['fName'])
			$value = '<a href="#" data-ind="'.count( $this->lookupValuesArr ).'" type="lookupSelect'.$this->id.'">'.$value."</a>";

		return $value;
	}

	/**
	 *
	 */
	function showPage() {
		$this->BeforeShowList();

		$this->hideAllFormItems( 'supertop' );
		$this->showItemType( 'simple_search' );
		$this->showItemType( 'simple_search_field' );
		$this->showItemType( 'simple_search_option' );

		$this->hideItemType('columns_control');
		
		if( $this->showSearchPanel ) {
			$this->showItemType( 'search_panel' );
			
			$this->hideItemType( 'logo' );
			$this->hideItemType( 'menu' );
			$this->hideItemType( 'breadcrumb' );
			$this->hideItemType( 'filter_panel' );
		}

		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
	}


	/**
	 * Display blocks after loaded template of page
	 */
	function showPageAjax()
	{
		$lookupSearchControls = $this->xt->fetch_loaded('searchform_text').$this->xt->fetch_loaded('searchform_search')
			.$this->xt->fetch_loaded('searchform_showall');
		$this->xt->assign("lookupSearchControls", $lookupSearchControls);

		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();

		$returnJSON = array();
		global $pagesData;
		$returnJSON["pagesData"] = $pagesData;
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);
		// popup header shows PD items only
		
		$returnJSON["headerCont"] = '<h3 data-itemtype="lookupheader" data-itemid="lookupheader">' . $this->getPageTitle( $this->pageType, GoodFieldName($this->tName) ) . "</h3>";
		
		$superTopHtml = $this->xt->fetch_loaded("supertop_block");
		$footerHtml = $this->xt->fetch_loaded("below-grid_block");
		if( $this->showSearchPanel ) {
			$this->xt->assign("supertop_block", false);
			$this->xt->assign("below-grid_block", false);
			
			$bodyHtml = $this->xt->fetch_loaded("body");
		} else {
			$bodyHtml = $this->fetchBlocksList( array( "above-grid_block", "grid_tabs", "grid_block" ) );
		}
		
		
		$returnJSON["html"] = $superTopHtml
			. '<div class="r-popup-block">'
				. '<div class="r-popup-data">'
					. $bodyHtml
				. "</div>"
			."</div>";

		$returnJSON["footerCont"] = $footerHtml;
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;

		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}


	function displayTabsInPage()
	{
		return true;
	}

	/**
	 * A stub
	 */
	function buildTotals(&$totals)
	{
	}

	/**
	 * Returns where clause for active master-detail relationship
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		return "";
	}

	function deleteAvailable() {
		return false;
	}
	function importAvailable() {
		return false;
	}
	function editAvailable() {
		return false;
	}
	function addAvailable() {
		return parent::addAvailable() && $this->mainPSet->isAllowToAdd( $this->mainField );
	}
	function copyAvailable() {
		return false;
	}
	function inlineAddAvailable() {
		return parent::inlineAddAvailable() && $this->mainPSet->isAllowToAdd( $this->mainField );
	}
	function inlineEditAvailable() {
		return false;
	}
	function viewAvailable() {
		return false;
	}
	function exportAvailable() {
		return false;
	}
	function printAvailable() {
		return false;
	}
	function advSearchAvailable() {
		return false;
	}

	function detailsInGridAvailable()
	{
		return false;
	}

	function updateSelectedAvailable()
	{
		return false;
	}

	function getSecurityCondition() {
		$loginTable = Security::loginTable();

		if( $this->mainPageType == PAGE_REGISTER && $this->mainTable == $loginTable ) {
			$registerPset = new ProjectSettings( $loginTable, PAGE_REGISTER, "", GLOBAL_PAGES);
			if ( $registerPset->appearOnPage( $this->mainField ) )
				return null;
		}

		return parent::getSecurityCondition();
	}
}
?>