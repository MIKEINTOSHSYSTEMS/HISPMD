<?php
include_once(getabspath("classes/paramsLogger.php"));
class searchParamsLogger extends paramsLogger
{
	/**
	 * This property is used to store 
	 * the 'getSavedSeachesParams' method`s cash
	 * @type Array
	 */
	protected $savedSearchesParams = array(); 
	
	
	public function __construct( $tableNameId, $type = SSEARCH_PARAMS_TYPE ) {
		// type 1 - saved search
		parent::__construct( $tableNameId, SSEARCH_PARAMS_TYPE );
		
		//	.NET conversion needs this
		$this->type = SSEARCH_PARAMS_TYPE;
	}

	/**
	 * Save the search under a particular name
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function saveSearch( $searchName, $searchParams ) {
		$savedSearchNames = $this->getSavedSeachesParams();
		if( array_key_exists( $searchName, $savedSearchNames ) ) {
			$this->updateSearch( $searchName, $searchParams );
			return;
		}
		
		$values = array();
		$values["NAME"] = $searchName;
		
		$this->save( $searchParams, $values );
	}

	/**
	 * Update the existing saved search
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function updateSearch( $searchName, $searchParams ) {
		$dc = $this->getUpdateCommand( $searchParams );
		$dc->filter = DataCondition::_And( array( 
			$dc->filter, 
			DataCondition::FieldEquals( "NAME", $searchName )
		));
		
		$this->dataSource->updateSingle( $dc, false );
	}


	/**
	 * Delete the saved search 
	 * @param String searchName
	 */	
	public function deleteSearch( $searchName ) {
		$dc = $this->getDataCommand();
		$dc->filter = DataCondition::_And( array(
			$dc->filter,  
			DataCondition::FieldEquals( "NAME", $searchName )
		));
		
		$this->dataSource->deleteSingle( $dc, false );
	}	
		
	/**
	 * Get the save searches` names basing on 
	 * security params and current page`s table name
	 * @return Array
	 */
	public function getSavedSeachesParams() {
		if( count( $this->savedSearchesParams ) )
			return $this->savedSearchesParams; 
		
		$dc = $this->getDataCommand();
		
		$dc->order = array();
		$dc->order[] = array( "column" => "NAME" );
		
		$qResult = $this->dataSource->getList( $dc );
		if( !$qResult )
			return array();
		
		$names = array();
		while( $data = $qResult->fetchAssoc() ) {
			if( !$data["TYPE"] || $data["TYPE"] == 1 ) {
				if( substr($data["SEARCH"], 0, 2) != "{\"" )
					$names[ $data["NAME"] ] = runner_unserialize_array( $data["SEARCH"] );
				else
					$names[ $data["NAME"] ] = $this->decode( $data["SEARCH"] );
			}
		}
		
		$this->savedSearchesParams = $names;
		return $names;
	}
}
?>