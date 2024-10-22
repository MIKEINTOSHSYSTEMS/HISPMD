<?php

class FilterIntervalList extends FilterControl
{
	public function __construct( $fName, $pageObject, $id, $viewControls )
	{
		parent::__construct( $fName, $pageObject, $id, $viewControls );

		$this->separator = "~interval~";
		$this->filterFormat = FF_INTERVAL_LIST;

		if( $this->totals == FT_NONE || $this->totals == FT_COUNT ) 
			$this->totalsfName = $this->fName;		

		$this->useApllyBtn = $this->multiSelect == FM_ALWAYS;
	}

	/**
	 * Form complex totals by aggregating SQL CASE statements, eg:
		SELECT MIN( ( CASE WHEN %field is > 0% and %field is <= 10% ) THEN %total_field%  ELSE NULL END ) ) AS %field%1_min,
			COUNT( ( CASE WHEN %field is > 0% and %field is <= 10% THEN 1 ELSE NULL END ) ) AS %field%1_count,
			MIN( ( CASE WHEN %field is > 10% and %field is <= 20% THEN %total_field% ELSE NULL END ) ) AS %field%2_min,
			COUNT( ( CASE WHEN %field is > 10% and %field is <= 20% THEN 1 ELSE NULL END ) ) AS %field%2_count,
			...
		FROM ( ... )
	 */
	protected function getDataCommand() {
		$dc = new DsCommand;
		$dc->filter = $this->pageObject->getDataSourceFilterCriteria( $this->fName );

		$intervalsRowData = $this->pSet->getFilterIntervals($this->fName);
		foreach( $intervalsRowData as $intervalData ) {
			$idx = $intervalData["index"];
			
			$total = $this->dataTotalsName();
			if( !$total )
				$total = "count";
			
			if( $total == "count" ) {
				$caseExpr = DataCondition::CaseConstOrNull( 
					FilterIntervalList::getFilterCondition( $this->fName, $idx, $this->pSet ), 
					1
				);
			} else {
				$caseExpr = DataCondition::CaseFieldOrNull( 
					FilterIntervalList::getFilterCondition( $this->fName, $idx, $this->pSet ),
					$this->totalsfName
				);
			}			
			
			$dc->totals[] = array(
				"total" => $total,
				"alias" => $this->fName.$idx."_".$total,
				"caseStatement" => $caseExpr
			);
			
			if( $total != "count" ) {
				$dc->totals[] = array(
					"total" => "count",
					"alias" => $this->fName.$idx."_count",
					"caseStatement" => DataCondition::CaseConstOrNull( 
						FilterIntervalList::getFilterCondition( $this->fName, $idx, $this->pSet ), 
						1
					)
				);				
			}
		}		
		
		return $dc;
	}


	/**
	 * Get label
	 * @param String index
	 * @return String
	 */
	protected function getValueToShow( $value ) {
		return $this->getIntervalLabel( $value );
	}
	
	protected function getIntervalLabel( $index ) {
		$iData = $this->pSet->getFilterIntervalDatabyIndex( $this->fName, $index );
		return $this->getLabel( $iData["intervalLabelNameType"], $iData["intervalLabelText"] );		
	}

	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{
		$visibilityClass = $this->filtered && $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";

		//query to database
		$qResult = $this->dataSource->getTotals( $this->getDataCommand() );
		$data = $qResult->fetchAssoc();		
		
		$this->decryptDataRow( $data );
	
		$intervalsRowData = $this->pSet->getFilterIntervals( $this->fName );
		foreach( $intervalsRowData as $iData ) {
			if( !$this->pSet->showWithNoRecords( $this->fName ) && $data[ $this->fName.$iData["index"]."_count" ] == 0 )
				continue;
			
			$this->valuesObtainedFromDB[] = $iData["index"];
			
			$ctrlData = array();
			$ctrlData["index"] = $iData["index"];
			
			if( $this->dataTotalsName() )
				$ctrlData["total"] = $data[ $this->fName.$iData["index"]."_".$this->dataTotalsName() ];

			$filterControl = $this->buildControl( $ctrlData );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure( $filterControl, $visibilityClass, $iData["index"] );			
		}
	}

	/**
	 * Get the arrray with keys corresponding to filter blocks markup
	 * @param String filterControl
	 * @param String visibilityClass
	 * @param String value							The Interval's index
	 * @param Array parentFiltersData (optional)
	 * @return Array
	 */
	protected function getFilterBlockStructure( $filterControl, $visibilityClass = "", $value = "", $parentFiltersData = array() )
	{
		if( $this->multiSelect != FM_ALWAYS )
			$visibilityClass.= " filter-link";

		return array(
			$this->gfName."_filter" => $filterControl,
			"visibilityClass_".$this->gfName => $visibilityClass,
			"sortValue" => $value
		);
	}

	/**
	 * Sort filter blocks depending on the field's type and format
	 * @param &Array filterCtrlBlocks
	 */
	protected function sortFilterBlocks( &$filterCtrlBlocks )
	{
		usort( $filterCtrlBlocks, array("FilterControl", "compareBlocksByNumericValues") );
	}

	/**
	 * Get the multiselect filters' filterblocks for values
	 * that are out of range. And add them to the existing filter blocks
	 * @param &Array filterCtrlBlocks
	 */
	protected function addOutRangeValuesToFilter( &$filterCtrlBlocks )
	{
		$visibilityClass = $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";

		foreach( $this->filteredFields[ $this->fName ]["values"] as $index )
		{
			if( in_array( $index, $this->valuesObtainedFromDB ) )
				continue;

			$filterControl = $this->buildControl( array( "index" => $index ) );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure( $filterControl, $visibilityClass, $index );
		}
	}

	/**
	 * Get the html markup representing the control on the page
	 * @params Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() )
	{
		$showValue = $this->getIntervalLabel( $data["index"] );
		$totalValue = $this->getTotalValueToShow( $data["total"] );

		return $this->getControlHTML( $data["index"], $showValue, $data["index"], $totalValue, $this->separator );
	}
	
	
	public static function getOrdinaryIntervalCondition( $fName, $intervalData, $pSet ) {
		$lowerCondition = null;
		$caseInsensitive = $intervalData["caseSensitive"] ? dsCASE_DEFAULT : dsCASE_INSENSITIVE;
	
		$lowerLimit = $intervalData[ "lowerLimit" ];
		if( $intervalData[ "lowerUsesExpression" ] )
			$lowerLimit = getIntervalLimitsExpressions( $pSet->getTableName(), $fName, $intervalData["index"], true );
		
		if( $intervalData["lowerLimitType"] == FIL_MORE_THAN ) {
			$lowerCondition = DataCondition::FieldIs( $fName, dsopMORE, $lowerLimit, $caseInsensitive );
		} else if( $intervalData["lowerLimitType"] == FIL_MORE_THAN_OR_EQUAL ) {
			$lowerCondition = DataCondition::_Not( 
				DataCondition::FieldIs( $fName, dsopLESS, $lowerLimit, $caseInsensitive )
			);
		}		

		$upperCondition = null;
		$upperLimit = $intervalData[ "upperLimit" ];
		if( $intervalData[ "upperUsesExpression" ] )
			$upperLimit = getIntervalLimitsExpressions( $pSet->getTableName(), $fName, $intervalData["index"], false );		
		
		if( $intervalData["upperLimitType"] == FIL_LESS_THAN  ) {
			$upperCondition = DataCondition::FieldIs( $fName, dsopLESS, $upperLimit, $caseInsensitive );
		} else if( $intervalData["upperLimitType"] == FIL_LESS_THAN_OR_EQUAL  ) {
			$upperCondition = DataCondition::_Not(
				DataCondition::FieldIs( $fName, dsopMORE, $upperLimit, $caseInsensitive )
			);
		}

		if( $lowerCondition && $upperCondition ) {
			return DataCondition::_And( array( $lowerCondition, $upperCondition ) );
		}
		
		if( $lowerCondition )
			return $lowerCondition;
		
		if( $upperCondition )
			return $upperCondition;
		
		return null;		
	}
	

	public static function getFilterCondition( $fName, $index, $pSet ) {
		
		$intervalData = $pSet->getFilterIntervalDatabyIndex( $fName, $index );
		if( !$intervalData )
			return null;
		
		if( $intervalData["remainder"] ) {
			$conditions = array();
			
			foreach( $pSet->getFilterIntervals( $fName ) as $_intervalData ) {
				if( $_intervalData["index"] == $index )
					continue;
				
				if( $_intervalData["noLimits"] )
					return DataCondition::_False();

				$conditions[] = DataCondition::_Not( 
					FilterIntervalList::getOrdinaryIntervalCondition( $fName, $_intervalData, $pSet ) 
				);
			}
			
			return DataCondition::_And( $conditions );
		}

		if( $intervalData["noLimits"] ) {
			return DataCondition::_Not( 
				DataCondition::FieldIs( $fName, dsopEMPTY, $index ) 
			);
		}
		
		return FilterIntervalList::getOrdinaryIntervalCondition( $fName, $intervalData, $pSet );	
	}	
}
?>