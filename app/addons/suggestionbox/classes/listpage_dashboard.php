<?php

class ListPage_Dashboard extends ListPage_Embed
{
	public $showNoData = false;

	/**
	 * @constructor
	 * @param array params
	 */
	function __construct(&$params)
	{
		parent::__construct($params);
		$this->showAddInPopup = true;

		$this->formBricks["header"] = array(
			array( "name" => "details_block", "align" => "right" ),
			array( "name" => "newrecord_controls_block", "align" => "right" ),
			array( "name" => "record_controls_block", "align" => "right" ),
			array( "name" => "details_found", "align" => "right" )
		);

		$this->formBricks["footer"] = array( "pagination_block" );

		if( $this->mapRefresh )
			$this->pageSize = -1;
	}

	/**
	 * Assign seesion prefix
	 */
	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = $this->dashTName."_".$this->tName;
	}

	/**
	 * Fill table settings
	 * @intellisense
	 */
	protected function fillTableSettings( $table = "", $pSet = null )
	{
		parent::fillTableSettings( $table, $pSet );

		if( $this->addAvailable() )
			$this->jsSettings["tableSettings"][ $this->tName ]["showAddInPopup"] = true;

		if( $this->editAvailable() || $this->updateSelectedAvailable() )
			$this->jsSettings["tableSettings"][ $this->tName ]["showEditInPopup"] = true;

		if( $this->viewAvailable() )
			$this->jsSettings["tableSettings"][ $this->tName ]["showViewInPopup"] = true;

		if( $this->inlineEditAvailable() )
			$this->jsSettings["tableSettings"][ $this->tName ]["inlineEditAvailable"] = true;
	}

	/**
	 * Checks if need to display grid
	 */
	function isDispGrid()
	{
		return $this->permis[ $this->tName ]['search'];
	}

	function addCommonJs()
	{
		$this->addJsForGrid();
		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	}

	function addJsForGrid()
	{
		if( $this->isResizeColumns )
			$this->prepareForResizeColumns();

		$this->jsSettings['tableSettings'][ $this->tName ]['showRows'] = ($this->numRowsFromSQL ? true : false);
	}

	function prepareForResizeColumns()
	{
		parent::prepareForResizeColumns();

		include_once getabspath("classes/paramsLogger.php");
		$logger = new paramsLogger( $this->dashTName."_".$this->dashElementName, CRESIZE_PARAMS_TYPE );

		$columnsData = $logger->getData();
		if( $columnsData )
			$this->pageData[ "resizableColumnsData" ] = $columnsData;
	}

	function commonAssign()
	{
		parent::commonAssign();
		$this->xt->assign("details_block", true);
		$this->xt->assign("withSelected", $this->inlineEditAvailable() || $this->deleteAvailable() );

		$this->hideElement("printpanel");
	}

	protected function prepareBreadcrumbs() {
		//	do nothing
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = parent::getSubsetDataCommand();

		if( $this->showNoData ) {
			$dc->filter = DataCondition::_False();
		}
		return $dc;
	}

	/**
	 *
	 */
	function showPage()
	{
		$this->BeforeShowList();

		$this->prepareGridTabs();

		if( $this->mobileTemplateMode() )
			$bricksExcept = array("grid_mobile", "pagination", "details_found");
		else
			$bricksExcept = array("grid", "pagination", "message", "add", "recordcontrols_new", "recordcontrol", "details_found", "reorder_records");

		$this->xt->hideAllBricksExcept( $bricksExcept );
		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
	}

	/**
	 * Display blocks after loaded template of page
	 */
	function showPageAjax()
	{
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();

		global $pagesData;

		$returnJSON = array();
		$returnJSON["pagesData"] = $pagesData;
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;

		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);

		$this->hideForm("above-grid");
		$returnJSON["html"] = $this->fetchBlocksList( array( "above-grid_block", "grid_tabs", "grid_block" ) );
		
		if ( $this->mode == LIST_DASHDETAILS 
			&& $this->dashElementData["item"]["customLabel"]
			&& $this->dashElementData["item"]["dashLabel"] ) {
				
			$returnJSON['headerCont'] = '<span class="rnr-dbebrick">'
				. GetMLString( $this->dashElementData["item"]["dashLabel"] )
				. "</span>";			
		} else {
			$returnJSON['headerCont'] = '<span class="rnr-dbebrick">'
				. $this->getPageTitle( $this->pageName, GoodFieldName($this->tName) )
				. "</span>";			
		}
	
		$returnJSON["footerCont"] = $this->fetchForms( array( "below-grid" ) );
		$icon = getIconHTML( $this->dashElementData["item"]["icon"] );
		if( $icon )
			$returnJSON["iconHtml"] = $icon;


		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;

		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}

	function fillSetCntrlMaps()
	{
		parent::fillSetCntrlMaps();
		$this->controlsHTMLMap[ $this->tName ][ $this->pageType ][ $this->id ]["pageNumber"] = $this->myPage;
		$this->controlsHTMLMap[ $this->tName ][ $this->pageType ][ $this->id ]["numberOfPages"] = $this->maxPages;
	}

	function fillCheckAttr(&$record, $data, $keyblock)
	{
		if( $this->deleteAvailable() || $this->inlineEditAvailable() || $this->updateSelectedAvailable() )
			$record["checkbox"] = true;

		$record["checkbox_attrs"]= "name=\"selection[]\" value=\"".runner_htmlspecialchars($keyblock)."\" id=\"check".$this->id."_".$this->recId."\"";
	}

	function deleteAvailable() {
		return parent::deleteAvailable() && $this->dashElementData["deleteRecord"];
	}

	function editAvailable() {
		return parent::editAvailable() && $this->dashElementData["popupEdit"];
	}

	function copyAvailable() {
		return parent::copyAvailable() && $this->dashElementData["copy"];
	}

	function addAvailable() {
		return parent::addAvailable() && $this->dashElementData["popupAdd"];
	}

	function inlineEditAvailable() {
		return parent::inlineEditAvailable() && $this->dashElementData["inlineEdit"];
	}

	function inlineAddAvailable() {
		return parent::inlineAddAvailable() && $this->dashElementData["inlineAdd"];
	}

	function updateSelectedAvailable() {
		return parent::updateSelectedAvailable() && $this->dashElementData["updateSelected"];
	}

	function viewAvailable() {
		return parent::viewAvailable() && $this->dashElementData["popupView"];
	}


	/**
	 * @return Boolean
	 */
	protected function hasDependentDashMapElem()
	{
		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP && !$dElem["updateMoved"] )
				return true;
		}

		return false;
	}

	/**
	 * @return Boolean
	 */
	protected function hasMainDashMapElem()
	{
		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP && $dElem["updateMoved"] )
				return true;
		}

		return false;
	}

	/**
	 * @return Boolean
	 */
	protected function hasBigMap()
	{
		return parent::hasBigMap() || $this->hasDependentDashMapElem();
	}

	/**
	 * @param &Array data
	 * @param Array keys
	 * @param String editLink
	 */
	function addBigGoogleMapMarkers(&$data, $keys, $editLink = '')
	{
		parent::addBigGoogleMapMarkers( $data, $keys, $editLink );

		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["elementName"] == $this->dashElementName || $dElem["table"] != $this->tName || $dElem["type"] != DASHBOARD_MAP || $dElem["updateMoved"] )
				continue;

			$markerData = array();

			$markerData["lat"] = str_replace( ",", ".", ($data[ $dElem["latF"] ] ? $data[ $dElem["latF"] ] : "") );
			$markerData["lng"] = str_replace( ",", ".", ($data[ $dElem["lonF"] ] ? $data[ $dElem["lonF"] ] : "") );
			$markerData["address"] = $data[ $dElem["addressF"] ] ? $data[ $dElem["addressF"] ] : "";
			$markerData["desc"] = $data[ $dElem["descF"] ] ? $data[ $dElem["descF"] ] : $markerData["address"];
			$markerData["mapIcon"] = $this->dashSet->getDashMapIcon( $dElem["elementName"], $data );

			$markerData["recId"] = $this->recId;
			$markerData["keys"] = $keys;

			$markerData["masterKeys"] = $this->getDetailTablesMasterKeys( $data );

			$mapId = GoodFieldName( $this->dashTName )."_".$dElem["elementName"]."_dashMap";

			if( !isset( $this->googleMapCfg["mapsData"][ $mapId ] ) )
			{
				$this->googleMapCfg["mapsData"][ $mapId ] = array();
				$this->googleMapCfg["mapsData"][ $mapId ]["skipped"] = true;
				$this->googleMapCfg["mapsData"][ $mapId ]["dashMap"] = true;
				$this->googleMapCfg["mapsData"][ $mapId ]["heatMap"] = $dElem["heatMap"];
			}

			if( !isset( $this->googleMapCfg["mapsData"][ $mapId ]["markers"] ) )
				$this->googleMapCfg["mapsData"][ $mapId ]["markers"] = array();

			if( $markerData["lat"] == "" || $markerData["lng"] == "" )
				continue;

			$this->googleMapCfg['mapsData'][ $mapId ]['markers'][] = $markerData;
		}
	}

	protected function isInlineAreaToSet()
	{
		if( $this->mode == LIST_DASHBOARD )
			return true;

		return parent::isInlineAreaToSet();
	}

	/**
	 * A stub
	 */
	function rulePRG() {}

	/**
	 * A stub
	 */
	function buildSearchPanel() {}
	public function assignSimpleSearch() {}


	/**
	 *
	 */
	function printAvailable()
	{
		return false;
	}

	function getTabDataCommand( $tab )
	{
		$this->skipMapFilter = true;
		$dc = parent::getTabDataCommand( $tab );
		$this->skipMapFilter = false;
		return $dc;
	}

	public function setGoogleMapsParams( $params ) {
		parent::setGoogleMapsParams( $params );
		$this->googleMapCfg['isUseMainMaps'] = false;
	}

	function addCenterLink(&$value, $fName) {
		return $value;
	}

	function inDashboardMode() {
		return true;
	}
	function dependsOnDashMap() {
		return $this->hasMainDashMapElem() && $this->mapRefresh;
	}

	protected function detailInGridAvailable( $detailTableData ) {
		$detTable = $detailTableData['dDataSourceTable'];
		if( $this->pSet->detailsPreview( $detTable ) == DP_NONE ) {
			return false;
		}

		return true;
	}

	protected function proceedLinkAvailable( $dTable ) {
		return false;
	}

	protected function detailsHrefAvailable() {
		return false;
	}

	function displayTabsInPage()
	{
		return $this->dashElementData["tabLocation"] == "body";

	}


}
?>