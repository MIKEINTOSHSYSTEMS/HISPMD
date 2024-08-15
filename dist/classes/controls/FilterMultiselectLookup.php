<?php
class FilterMultiselectLookup extends FilterValuesList {
 
	public function __construct( $fName, $pageObject, $id, $viewControls ) {
		parent::__construct( $fName, $pageObject, $id, $viewControls );
		
		$this->aliases[ $this->fName ] = $this->fName;
	}

	protected function getDataCommand() {
		$dc = new DsCommand;
		$dc->filter = $this->pageObject->getDataSourceFilterCriteria( $this->fName );

		return $dc;		
	}


	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{
		$containsFilteredDependentOnDemandFilter = !$this->dependent && !$this->filtered 
			&& $this->hasFilteredDependentOnDemandFilter();
			
		$visibilityClass = $this->filtered && $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";
		$totalOption = $this->pSet->getFilterFieldTotal( $this->fName );

		//query to database with current where settings
		$qResult = $this->dataSource->getList( $this->getDataCommand() );

		$metaData =  array();		
		while( $data = $qResult->fetchAssoc() ) {
			$this->decryptDataRow( $data );

			$parentFiltersData = array();
			$parentString = "";
			if( $this->dependent ) {
				foreach( $this->parentFiltersNames as $pName ) {
					$parentFiltersData[ $pName ] = $data[ $pName ];
				}
				$parentString = my_json_encode( $parentFiltersData );
			}
			
			$values = splitLookupValues( $data[ $this->fName ] );
			foreach( $values as $value ) {
				$hash = md5( $parentString.$value );
				if( !$metaData[ $hash ] ) {
					$total = $data[ $this->totalsfName ];
					if( $totalOption == FT_COUNT )
						$total = 1;
					
					$metaData[ $hash ] = array( "rawValue" => $value, "total" => $total, "parent" => $parentFiltersData );
				} else {
					if( $totalOption == FT_COUNT ) {
						$metaData[ $hash ]["total"] = $metaData[ $hash ]["total"] + 1;
					} else if( $totalOption == FT_MIN ) {
						$metaData[ $hash ]["total"] = min( $data[ $this->totalsfName ], $metaData[ $hash ]["total"] );
					} else if( $totalOption == FT_MAX ) {
						$metaData[ $hash ]["total"] = max( $data[ $this->totalsfName ], $metaData[ $hash ]["total"] );
					}
				}
			}
		}

		foreach( $metaData as $meta ) {
			$data = array();
			$data[ $this->fName ] = $meta["rawValue"];
			$data[ $this->fName."TOTAL" ] = $meta["total"];
			
			$this->valuesObtainedFromDB[] = $meta["rawValue"];

			$filterControl = $this->buildControl( $data, $meta["parent"] );
			if( $containsFilteredDependentOnDemandFilter )
				$filterControl = $this->getDelButtonHtml( $this->gfName, $this->id, $meta["rawValue"] ).$filterControl;
			
			$filterCtrlBlocks[] = $this->getFilterBlockStructure( $filterControl, $visibilityClass, $meta["rawValue"], $meta["parent"] );
		}
	}
	
	public static function getFilterCondition( $fName, $value, $pSet ) {
		return DataCondition::FieldHasList( $fName, dsopALL_IN_LIST, array( $value ) );
	}
}
?>