<?php
/**
 * Search panel builder
 */
class SearchPanelSimple {
	protected $pageObj = null;
	
	protected $searchClauseObj = null;
	protected $tName = '';
	protected $pSet = null;	
	protected $id = 1;
	
	/**
	 * The page's xTeml instance
	 */
	protected $xt;	
	
	/**
	 * Object of PanelSearchControl class.
	 * @var object
	 */
	protected $controlBuilder = null;


	/**
	 * Fields that used for search on panel, and should be open on every page load
	 * @var array
	 */
	protected $panelSearchFields = array();
	
	/**
	 * Array of key's fields
	 * @var array
	 */
	protected $allSearchFields = array();
	

	protected $searchOptions = array();	
	
	
	/**
	 * Constructor, accepts array of parametres, which will be copied to object properties by link
	 *
	 * @param array $params
	 * @return SearchPanel
	 */
	function __construct( &$params ) {
		$this->pageObj = $params['pageObj'];
		
		$this->searchClauseObj = &$this->pageObj->searchClauseObj;	
		
		$this->id = $this->pageObj->id;
		$this->pSet = $this->pageObj->pSetSearch;
		$this->tName = $this->pageObj->searchTableName;
		$this->xt = $this->pageObj->xt;
				
		if( !isset( $params['panelSearchFields'] ) )
			$this->panelSearchFields = $this->pSet->getPanelSearchFields();
		else
			$this->panelSearchFields = $params['panelSearchFields'];	
		
		if( !isset( $params['allSearchFields'] ) )
			$this->allSearchFields = $this->pSet->getAllSearchFields();
		else
			$this->allSearchFields = $params['allSearchFields'];
		
		$this->controlBuilder = new PanelSearchControl( $this->id, $this->tName, $this->searchClauseObj, $this->pageObj );	
	}
	
	/**
	 *
	 */
	public function buildSearchPanel() {	
		/*$searchPerm = true;
		if( isEnableSection508() ) {
			$searchPerm = array();
			$searchPerm["begin"] = "<a name=\"skipsearch\"></a>";
		}
		$this->xt->assign( "searchformbuttons_block", $searchPerm );*/
	
		if( $this->pSet->showSearchPanel() ) {			
			$this->searchOptions = $this->pSet->getSearchPanelOptions();
			$this->displaySearchPanel();
		}
	}
	
	/**
	 * Show search panel
	 */
	function displaySearchPanel() {
		$this->xt->assign('id', $this->id);
		$this->xt->assign('searchPanel', true);
		
		// 'show\hide search panel' buttons
		$this->xt->assign('searchPanelTopButtons', true );
		
		if( !$this->pSet->isFlexibleSearch() )
			$this->xt->assign('controls_block_class', 'flexibleSearchPanel');
			
		// assign the search panel radio buttons 
		$radio = $this->controlBuilder->getSearchRadio();
		$this->xt->assign_section( "all_checkbox_label", $radio['all_checkbox_label'][0], $radio['all_checkbox_label'][1] );
		$this->xt->assign_section( "any_checkbox_label", $radio['any_checkbox_label'][0], $radio['any_checkbox_label'][1] );
		$this->xt->assignbyref( "all_checkbox", $radio['all_checkbox'] );
		$this->xt->assignbyref( "any_checkbox", $radio['any_checkbox'] );
		
		$srchPanelAttrs = $this->searchClauseObj->getSrchPanelAttrs();
		// assign the 'Show/Hide options' button 
		$showHideOpt_mess = $srchPanelAttrs['ctrlTypeComboStatus'] ? 
			"Hide options" : "Show options";		
		$this->xt->assign("showHideOpt_mess", $showHideOpt_mess);
		$this->xt->assign("showHideCtrlsOpt_attrs", 'style="display: none;"');
		
		if( $this->searchClauseObj->getUsedCtrlsCount() <= 0 )
			$this->xt->assign("bottomSearchButt_attrs", 'style="display: none;"');
	
		$this->assignSearchBlocks();
		
		$this->pageObj->controlsMap["search"]["searchPanelRunByUserApi"] = $this->searchClauseObj->isSearchPanelByUserApiRun();
		
		$showallbutton_attrs = 'id="showAll'.$this->id.'"';
		
		if( !$this->searchClauseObj->isShowAll() ) {
			$dispNoneStyle = 'style="display: none;"';
			$showallbutton_attrs.= ' '.$dispNoneStyle;
			$this->xt->assign("showAllCont_attrs", $dispNoneStyle);
		}

		$this->xt->assign( 'showallbutton_attrs', $showallbutton_attrs );
	}
	
	/**
	 * Assign controls blocks for the search panel's,
	 * added-by-user and cached fields	
	 */
	function assignSearchBlocks() {
		global $gLoadSearchControls;
		
		$searchPanelFieldsBlocks = array();
		$otherFieldsBlocks = array();
		$notAddedFileds = array();
		$srchCtrlBlocksNumber = 0;
		
		$recId = $this->pageObj->genId();
	
		// build search controls for each field, first we need to build used controls, because cached must have last index	
		foreach( $this->allSearchFields as $searchField ) {
			$this->pageObj->fillFieldToolTips($searchField);
			$srchFields = $this->searchClauseObj->getSearchCtrlParams($searchField);
			$isSrchPanelField = in_array($searchField, $this->panelSearchFields);

			if( !$srchFields ) {
				$defaultValue = $this->pSet->getDefaultValue( $searchField );
				
				if( $isSrchPanelField ) {
					$opt = '';
					//set the field's option chosen for the inflexible search panel 
					if( !$this->pSet->isFlexibleSearch() )
						$opt = $this->searchOptions[$searchField];

					// add a search panel field that should be always shown on the panel	
					$srchFields[] = array('opt' => $opt, 'not' => '', 'value1' => $defaultValue, 'value2' => '');
				}
			}
					
			if( $srchFields ) {
				if( $isSrchPanelField ) 
					$srchFields[ count($srchFields) - 1 ]['immutable'] = true;

				foreach( $srchFields as $srchField ) {
					// build used ctrl
					$block = $this->controlBuilder->buildSearchCtrlBlockArr(
						$recId, 
						$searchField, 
						0, 
						$srchField['opt'], 
						$srchField['not'], 
						false, 
						$srchField['value1'], 
						$srchField['value2'], 
						$isSrchPanelField, 
						$this->pSet->isFlexibleSearch(), 
						$srchField['immutable']
					);
					
					if($isSrchPanelField)
						$searchPanelFieldsBlocks[$searchField][] = $block;
					else
						$otherFieldsBlocks[] = $block;
					
					$srchCtrlBlocksNumber++;
					$this->addSearchFieldToControlsMap($searchField, $recId);
				}
			} 
			else
				$notAddedFileds[] = $searchField;			
		}
			
		// assign search panel fields (default and added-by-user)		
		foreach( $searchPanelFieldsBlocks as $name => $namedBlocks ) {		
			$this->xt->assign_loopsection_byValue('searchCtrlBlock_'.GoodFieldName($name), $namedBlocks);
		}
			
		if( !$this->pSet->isFlexibleSearch() )
			return;
		
		//add cached searhc fields
		if( $srchCtrlBlocksNumber > 0 && $srchCtrlBlocksNumber < $gLoadSearchControls ) {
			$otherSearchControlsMaxNumber = $gLoadSearchControls - $srchCtrlBlocksNumber + count($otherFieldsBlocks);
			foreach( $notAddedFileds as $searchField ) {			
				$defaultValue = $this->pSet->getDefaultValue( $searchField );
				// add cached ctrl
				$otherFieldsBlocks[] = $this->controlBuilder->buildSearchCtrlBlockArr(
					$recId, 
					$searchField, 
					0, 
					'', 
					false, 
					true, 
					$defaultValue, 
					''
				);
				
				$this->addSearchFieldToControlsMap($searchField, $recId);
				
				if( count($otherFieldsBlocks) >= $otherSearchControlsMaxNumber )
					break;
			}		
		}

		// assign cached and non search panel fields' blocks
		$this->xt->assign_loopsection('searchCtrlBlock', $otherFieldsBlocks);
	}
	
	/**
	 * Add the search field block's data to the page's ControlsMap array
	 * Generate the new value for the recId
	 * @param String fName
	 * @param &Number recId
	 */
	function addSearchFieldToControlsMap( $fName, &$recId ) {
		$isFieldNeedSecCtrl = $this->controlBuilder->isNeedSecondCtrl($fName);
		$searchBlock = array('fName'=>$fName, 'recId'=>$recId);
		$ctrlInd = 0;
		
		$searchBlock['ctrlsMap'][0] = $ctrlInd;
		if($isFieldNeedSecCtrl)
			$searchBlock['ctrlsMap'][1] = $ctrlInd + 1;

		if( !$this->pSet->isFlexibleSearch() )
			$searchBlock['inflexSearchOption'] = $this->searchOptions[$fName];
		
		$this->pageObj->controlsMap["search"]["searchBlocks"][] = $searchBlock;
		$recId = $this->pageObj->genId();
	}
	
	/**
	 * Refine the open seach panel fields array:
	 * It removes all non search fields and each one 
	 * of the always shown fields (search panel fields)
	 * from the array.
	 * @param Array openFilters
	 * @return Array
	 */
	function refineOpenFilters( $openFilters ) {
		$openFiltersRefined = array();

		foreach( $this->panelSearchFields as $panelFiled ) {
			$key = array_search($panelFiled, $openFilters);
			if( $key !== FALSE )
				array_splice($openFilters, $key, 1);
		}

		foreach( $openFilters as $field ) {
			if( in_array($field, $this->allSearchFields) ) 
				$openFiltersRefined[] = $field;
		}

		return $openFiltersRefined;
	}
}

?>