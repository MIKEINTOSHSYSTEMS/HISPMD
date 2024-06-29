<?php
/**
 * Class for list page with mode ajax
 *
 */
class ListPage_Ajax extends ListPage_Simple
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */
	function __construct(&$params)
	{
		// call parent constructor
		ListPage::__construct($params);
	}
	/**
	 * Add common assign for ajax mode on list page
	 */
	function commonAssign()
	{
		parent::commonAssign();

		$this->xt->assign("filterPanelStateClass", "filter-ajaxReloaded");
	}

	/**
	 * Add common html code for ajax mode on list page
	 */
	function addCommonHtml()
	{
		return true;
	}

	/**
	 * Add common javascript code for ajax mode on list page
	 */
	function addCommonJs()
	{
		$this->addJsForGrid();
	}

	/**
	 * Show page method
	 */
	function showPage() {
		global $pagesData;
		
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		$this->BeforeShowList();

		$this->xt->load_template( $this->templatefile );
		
		$returnJSON = array();
		$returnJSON["success"] = true;
		$returnJSON["idStartFrom"] = $this->flyId;
		$returnJSON["pagesData"] = $pagesData;
	
		$returnJSON["controlsMap"] = $this->controlsHTMLMap;
		$returnJSON["viewControlsMap"] = $this->viewControlsMap;
		$returnJSON["settings"] = $this->jsSettings;
		$returnJSON["cellStyles"] = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
		$returnJSON["numberOfRecs"] = $this->numRowsFromSQL;
		$returnJSON["recPerPage"] = $this->pageSize;
		
		if( $this->deleteMessage != '' )
			$returnJSON["usermessage"] = true;

		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		
		echo printJSON( $returnJSON );
		exit();
		return;
	}

	/**
	 * A stub
	 */
	function rulePRG() {
	}
}
?>