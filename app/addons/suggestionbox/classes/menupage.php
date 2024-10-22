<?php
class MenuPage extends RunnerPage
{
	/**
	 * @constructor
	 */ 
	function __construct(&$params)
	{
		parent::__construct($params);
	}
	
	public function process()
	{
		//	Before Process event
		global $globalEvents;
		
		if( $globalEvents->exists("BeforeProcessMenu") )
			$globalEvents->BeforeProcessMenu( $this );


		// get redirect location for menu page
		$redirect = $this->getRedirectForMenuPage();
		if( $redirect )
		{
			header("Location: ".$redirect); 
			exit();
			return;
		}		
		
		$this->commonAssign();
		$this->doCommonAssignments();
			
		if( $this->isPD() )	
			$this->hideWelcomeItemsIfEmpty( $this->pSet->welcomeItems() );
		
		
		$this->addButtonHandlers();
		$this->addCommonJs();
		
		$this->displayMenuPage();
	}

	/**
	 * Get amount of available welcome items
	 * @return {number}
	 * @intellisense
	 */
	function getAllowedWelcomeMenuItems( $itemsData )
	{
		if( !$itemsData ) {
			return 0;
		}
		$allowedItemCnt = 0;
		foreach( $itemsData as $itemData )
		{
			if ( !$itemData['menutItem'] )
			{
				// non welcome item eg button
				continue;
			}
			
			if ( !$itemData['group'] ) 
			{
				// item is welcome item
				if ( $itemData["linkType"] == 0 && $itemData["table"] && $itemData["page"] ) 
				{
					if ( menuLinkAvailable( $itemData["table"], $itemData["page"], $itemData["pageId"] ) )
						$allowedItemCnt++;
				} else if( $itemData["linkType"] == 1 ) {
					$allowedItemCnt += 2;
				}
				continue;
			} else {
				$allowedItemCnt += $this->getAllowedWelcomeMenuItems( $itemData["items"] );
			}
		}
		return $allowedItemCnt;
	}
	/**
	 * @return {number}
	 * @intellisense
	 */
	function isShowMenu()
	{
		if( !$this->pSet->welcomePageSkip() ) {
			return true;
		}

		if( !$this->menuAppearInLayout() && $this->pageType != PAGE_MENU && $this->pageType != PAGE_ADD  && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT )
			return false;
			

		$allowedMenuItems = $this->getAllowedWelcomeMenuItems( $this->pSet->welcomeItems() );
		if( $allowedMenuItems > 1 )
			return true;

			return false;
	}

	/**
	 * Get redirect location for menu page
	 * @return {string}
	 * @intellisense
	 */
	function getRedirectForMenuPage()
	{
		if($this->isShowMenu())
			return '';

		$redirect = '';
		$menuNodes = $this->getMenuNodes();
		for($i=0;$i<count($menuNodes);$i++)
		{
			if($menuNodes[$i]["linkType"] == "Internal")
			{
				if($this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]))
				{
					$type = $this->getPermisType($menuNodes[$i]['pageType']);
					if($type == "A")
						$redirect = "add";
					if($type == "E")
						$redirect = "edit";
					elseif($menuNodes[$i]["pageType"] == "list" && $type == "S")
						$redirect = "list";
					elseif($menuNodes[$i]["pageType"] == "report" && $type == "S")
						$redirect = "report";
					elseif($menuNodes[$i]["pageType"] == "chart" && $type == "S")
						$redirect = "chart";
					elseif($menuNodes[$i]["pageType"] == "view" && $type == "S")
						$redirect = "view";
					elseif($menuNodes[$i]["pageType"] == "dashboard" && $type == "S")
						$redirect = "dashboard";
					$redirect = GetTableLink(GetTableURL($menuNodes[$i]["table"]), $redirect);
				}
			}
		}
		if( !$redirect ) {
			if( Security::isAdmin() )
				$redirect = GetTableLink("admin_rights", "list");
			else if($this->isAddWebRep)
				$redirect = GetTableLink("webreport");
		}

		return $redirect;
	}	
	
	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->setLangParams();

		$this->xt->assign("menu_block", true);
		$this->assignBody();
	}
	
	/**
	 * @param Array itemsData
	 * @return Boolean
	 */
	function hideWelcomeItemsIfEmpty( $itemsData ) 
	{
		$hide = true;
		foreach( $itemsData as $itemId => $itemData )
		{
			if ( !$itemData['menutItem'] )
			{
				// non welcome item eg button
				$hide = false;
				continue;
			}
			
			if ( !$itemData['group'] ) 
			{
				// item is welcome item
				if ( $itemData["table"] && $itemData["page"] ) 
				{
					if ( menuLinkAvailable( $itemData["table"], $itemData["page"], $itemData["pageId"] ) )
						$hide = false;
					else
						$this->xt->displayItemHidden( $itemId );
				} else {
					//	extrenal link, always show
					$hide = false;
				}
				continue;
			}
			
			// item is welcome group
			if ( !$this->hideWelcomeGroupIfEmpty( $itemId, $itemData ) ) 
				$hide = false;
		}

		return $hide;
	}
	
	
	/**
	 * TODO: move to MenuPage class	
	 * @param String grId
	 * @param Array grData
	 * @return Boolean
	 */
	function hideWelcomeGroupIfEmpty( $grId, $grData ) 
	{	
		if ( !$grData['items'] || count( $grData['items'] ) < 1 )
		{
			$this->xt->displayItemHidden( $grId );
			return true;
		}
		
		$hide = $this->hideWelcomeItemsIfEmpty( $grData['items'] );
		
		if ( $hide ) 
			$this->xt->displayItemHidden( $grId );
		
		return $hide;
	}
	
	function displayMenuPage()
	{
		global $globalEvents;
		$templatefile = $this->templatefile;

		if( $globalEvents->exists("BeforeShowMenu") )
			$globalEvents->BeforeShowMenu( $this->xt, $templatefile, $this );
		
		$this->display( $templatefile );		
	}
}
?>