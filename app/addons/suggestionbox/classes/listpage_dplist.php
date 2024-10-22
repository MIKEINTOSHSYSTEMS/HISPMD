<?php

class ListPage_DPList extends ListPage_DPInline
{	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params)
	{
		parent::__construct( $params );
	
		$this->formBricks["footer"] = array( "pagination_block" );	
	}
	
	/**
	 * Show the page.
	 * It's supposed to be displayed in response on an ajax-like request
	 */
	public function showPage() {
		$this->BeforeShowList();
		$this->xt->prepare_template( $this->templatefile );
		
		$this->showPageAjax();
	}

	
	/**
	 *
	 */
	function showPageAjax() {
		$returnJSON = array();
		$proceedLink = $this->getProceedLink();
		
		if( !$this->numRowsFromSQL && 
			!$this->addAvailable() && !$this->inlineAddAvailable() && 
			!$this->recordsDeleted && 
			$proceedLink == '' && 
			$this->getGridTabsCount() == 0 ) 
		{
			$returnJSON['success'] = false;
			echo printJSON($returnJSON);
			return;
		}
		
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		global $pagesData;
		$returnJSON["pagesData"] = $pagesData;
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		
		$this->xt->assign("header", false);
		$this->xt->assign("footer", false);
		
		$returnJSON['headerCont'] = $proceedLink . $this->xt->fetch_loaded("above-grid_block");
		$returnJSON["footerCont"] = $this->xt->fetch_loaded("below-grid_block");
		
		$this->xt->prepareContainers();
		
		$returnJSON["html"] = $this->xt->fetch_loaded("grid_block");
		if( $this->listGridLayout == gltVERTICAL ) {
			$returnJSON["html"] = $this->xt->fetch_loaded("message_block") . $returnJSON["html"];
		}
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();
		
		if( $this->deleteMessage != '' )
			$returnJSON["delMess"] = true;
		
		echo printJSON($returnJSON);
	}

	/**
	 * @return String
	 */
	protected function getBSButtonsClass()
	{
		return "btn btn-sm";
	}
		
	
	function showNoRecordsMessage()
	{
		//	show nothing
	}
}
?>