<?php
class FilterBoolean extends FilterControl
{
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);
		
		$this->separator = "~checked~";
		$this->filterFormat = FF_BOOLEAN;
		
		if( $this->totals == FT_NONE || $this->totals == FT_COUNT ) 
			$this->totalsfName = $this->fName;
	}
	
	/**
	 * Get the view controls' value 
	 * @param String value
	 * @return String
	 */
	protected function getValueToShow( $value ) {	
		return $this->getShownValue( $value == "on" );
	}
	
	/**
	 * Get the filter's label
	 * @param Boolean checked
	 * @return String
	 */
	protected function getShownValue( $checked ) {
		$mData = $this->pSet->getBooleanFilterMessageData( $this->fName, $checked );
		return $this->getLabel( $mData["type"], $mData["text"] );
	}
	
	/**
	 * Form complex totals by aggregating SQL CASE statements, eg:
		SELECT MAX( case when %field is on% then %total field% else null end ) AS `on_max`,
			COUNT( case when %field is on% then 1 else null end ) AS `on_count`,
			MAX( case when %field is off% then %total field% else null end ) AS `off_max`,
			COUNT( case when %field is off%  then 1 else null end ) AS `off_count`
		FROM (...)
	 */
	protected function getDataCommand() {
		$dc = new DsCommand;
		$dc->filter = $this->pageObject->getDataSourceFilterCriteria( $this->fName );
		
		$total = $this->dataTotalsName();
		if( !$total )
			$total = "count";
	
		$values = array("on", "off");
		foreach( $values as $v ) {
			if( $total == "count" ) {
				$caseExpr = DataCondition::CaseConstOrNull( 
					FilterBoolean::getFilterCondition( $this->fName, $v, $this->pSet ), 
					1
				);
			} else {
				$caseExpr = DataCondition::CaseFieldOrNull( 
					FilterBoolean::getFilterCondition( $this->fName, $v, $this->pSet ),
					$this->totalsfName
				);
			}
			$dc->totals[] = array(
				"total" => $total,
				"alias" => $v."_".$total,
				"caseStatement" => $caseExpr
/*
				"ifCondition" => FilterBoolean::getFilterCondition( $this->fName, $v, $this->pSet ),
				"thenField" => $this->totalsfName,
				"elseConst" => 'null'
*/				
			);

			if( $total != "count" ) {
				$dc->totals[] = array(
					"total" => "count",
					"alias" => $v."_count",
					"caseStatement" => DataCondition::CaseConstOrNull( 
						FilterBoolean::getFilterCondition( $this->fName, $v, $this->pSet ),
						1
					)
				);				
			}
		}
		
		return $dc;
	}	
	
	/**
	 * Add new filter blocks fetched from db
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks ) {
		//$data = $this->connection->query( $this->strSQL )->fetchAssoc();
		
		$qResult = $this->dataSource->getTotals( $this->getDataCommand() );
		$data = $qResult->fetchAssoc();
		
		$this->decryptDataRow( $data );
		
		if( $data["on_count"] == 0 && $data["off_count"] == 0 ) {
			// no records found, hide filter
			return;
		}
		
		$values = array("on", "off");
		foreach( $values as $v ) {
			$ctrlData = array( "value" => $v );
			if( $this->dataTotalsName() )
				$ctrlData["total"] = $data[ $v."_".$this->dataTotalsName() ];
			
			$filterControl = $this->buildControl( $ctrlData );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure( $filterControl );
		}
	}
	
	/**
	 * Get a control's markup
	 * @params Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() ) {		
		$showValue = $this->getShownValue( $data["value"] == "on" );
		$totalValue = $this->getTotalValueToShow( $data["total"] );
	
		return $this->getControlHTML( $data["value"], $showValue, $data["value"], $totalValue, $this->separator );
	}

	public static function getFilterCondition( $fName, $value, $pSet ) {
		include_once getabspath("classes/controls/Control.php");
		include_once getabspath("classes/controls/CheckboxField.php");
		
		return CheckboxField::getFieldCondition( $fName, $value );
	}
}	
?>