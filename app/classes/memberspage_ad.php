<?php
/**
 * Class for display members_list with Active directory data
 */
class MembersPage_AD extends ListPage_Lookup
{
	var $resultData = array();

	var $strFilterClause = '';  //? 

	var $issetRecords = array();

	var $recNumber = 1;


	var $plugin = null;

	var $providerCode = "";



	function __construct($params)
	{
		ListPage_Embed::__construct($params);

		$this->issetRecords = $this->getDBMembers();
		
		$this->headerForms = array( "top" );
		$this->footerForms = array( "below-grid" );
		$this->pageData["provider"] = $params["providerCode"];
		$this->plugin = Security::getAuthPlugin( $params["providerCode"] );
		$this->pageSize = 10;
	}

	/**
	 *
	 */
	function getDBMembers()
	{
		$dc = new DsCommand();
		$dataSource = Security::getUgGroupsDatasource();
		
		if( !Security::ADonlyLogin() || storageGet( "groups_provider_field" ) ) {
			$dc->filter = DataCondition::FieldEquals( "Provider", $this->providerCode );
		}
		
		$qResult = $dataSource->getList( $dc );
		
		$members = array();
		while( $tdata = $qResult->fetchAssoc() )
		{
			$members[] = $tdata[ "Label" ];
		}

		return $members;
	}

	function isIssetRecord($name)
	{
		if (!in_array($name,$this->issetRecords))
			return true;
		return false;
	}
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 */
	function commonAssign()
	{
		parent::commonAssign();
		$this->xt->assign("add_link", true);
		$this->xt->assign("addselectlink_attrs","id = \"addSelBtn\" ");
		$this->xt->assign("recordcontrolsad_block",true);
		$this->xt->assign("checkbox_header", true);
		
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" data-checked=\"0\"");
	}

	/**
	 * Checks if need to display grid
	 */
	function isDispGrid()
	{
		return true;
	}

	/**
	 * Calcs pagination info
	 */
	function buildPagination()
	{
		parent::buildPagination();
		$this->recNumber = $this->pageSize * ($this->myPage - 1);
	}

	/**
	 * Seeks recs, depending on page number etc.
	 * @param string $strSQL
	 */
	function seekPageInRecSet() {
		$this->resultData = $this->plugin->getGroupList( 
				$this->searchClauseObj->getAllFieldsSearchValue(), 
				$this->pSet->hideAdGroupsUntilSearch() 
			);
		
		$this->numRowsFromSQL = $this->resultData ? count( $this->resultData ) : 0;
		$this->recSet = $this->numRowsFromSQL;
	}

	function beforeProccessRow()
	{
		if( $this->recNumber <= $this->pageSize * $this->myPage - 1 
			&& $this->recNumber <= $this->numRowsFromSQL - 1 )
		{
			return $this->resultData[ $this->recNumber ];
		}
		
		return false;
	}

	function fillGridData()
	{
		$rowInfo = array();	
		$data = $this->beforeProccessRow();
		$this->controlsMap['gridRows'] = array();

		while( $data )
		{
			$row = array();
			$row["rowattrs"] = " id=\"gridRow".$this->recNumber."\"";

			$gridRowInd = count($this->controlsMap['gridRows']);
			$this->controlsMap['gridRows'][ $gridRowInd ]['id'] = $this->recNumber;
			$this->controlsMap['gridRows'][ $gridRowInd ]['rowInd'] = $gridRowInd;
			$this->controlsMap['gridRows'][ $gridRowInd ]['keys'] = array('name' => $data["name"]);

			$row["grid_record"] = array();
			$row["grid_record"]["data"] = array();

			$row["add_link"] = $this->isIssetRecord($data["name"]);
			$row["checkbox"] = $this->isIssetRecord($data["name"]);

			$row["addlink_attrs"] = "href='#' id='iAddLink".$this->recNumber."' ";
			$row["checkbox_attrs"] = "name=\"selection[]\" value=\"".$this->recNumber."\" 
				id=\"check".$this->id."_".$this->recNumber."\" data-checked=\"0\"";
			
			$row["username"] = runner_htmlspecialchars($data["name"]);
			$row["displayusername"] = runner_htmlspecialchars($data["displayname"]);
			$row["categoryuser"] = runner_htmlspecialchars($data["category"]);
			$row["emailuser"] = runner_htmlspecialchars($data["email"]);
			$row["recNo"] = $this->recNumber;
			$this->recNumber++;

			//	assign row spacings for vertical layout
			$row["grid_rowspace"] = true;
			$row["grid_recordspace"] = array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i++)
				$row["grid_recordspace"]["data"][] = true;

			if($this->eventExists("BeforeMoveNextList"))
				$this->eventsObject->BeforeMoveNextList($data, $row, $record,$record["recId"], $this);

			$rowInfo[] = $row;

			$data = $this->beforeProccessRow();
		}

		// assign grid rows
		$this->xt->assign_loopsection("grid_row", $rowInfo);
	}

	function prepareForBuildPage()
	{
		//Sorting fields
		$this->buildOrderParams();


		$this->strFilterClause = $this->searchClauseObj->_where[ "_simpleSrch" ];
		$this->seekPageInRecSet();

		// build pagination block
		$this->buildPagination();

		$this->fillGridData();
		$this->assignSimpleSearch();

		$this->addCommonJs();
		$this->addCommonHtml();
		$this->commonAssign();
		
		$this->assignColumnHeaderClasses();		
	}

	function showPage()
	{
		$this->BeforeShowList();

		$this->xt->prepare_template( $this->templatefile );
		$this->showPageAjax();
		
		exit(); // .net compatibility issue
	}
	
	function inlineAddAvailable() 
	{
		return false;
	}
	
	function noRecordsMessage() {
		if( $this->pSet->hideAdGroupsUntilSearch() && !$this->isSearchFunctionalityActivated() ) {
			return "Nothing to see. Run some search.";
		}

		return parent::noRecordsMessage();
	}
}
?>