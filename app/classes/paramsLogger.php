<?php
class paramsLogger
{
	/**
	 * @type String
	 */
	protected $paramsTableName = "";

	/**
	 * 1 - saved searches
	 * 2 - columns sizes
	 * 3 - show/hide fields
	 * 4 - reordering fields
	 *
	 * @type Number
	 */
	protected $type;

	/**
	 * @type String
	 */
	protected $userID = "";

	/**
	 * @type String
	 */
	protected $cookie = "";

	/**
	 * @type String
	 */
	protected $tableNameId;

	protected $dataSource;
	

	public function __construct( $tableNameId, $type ) {
		global $cman;
		
		$this->type = $type;
		$this->tableNameId = $tableNameId;
		
		$this->assignUserId();
		$this->assignCookieParams();
		
		$this->dataSource = getTableDataSource( $this->paramsTableName, $cman->getSavedSearchesConnId() );
	}

	/**
	 * Assign the userID prop with the currenly logged in user`s name
	 */
	protected function assignUserId() {
		if( Security::isLoggedIn() )
			$this->userID = Security::getUserName();
	}

	/**
	 * Set a COOKIE 'searchSaving' param If It isn`t set before.
	 * Assign the 'cookie' property with the COOKIE 'searchSaving' param
	 */
	protected function assignCookieParams() {
		if( !strlen($_COOKIE["paramsLogger"]) && !$this->userID )
			runner_setcookie("paramsLogger", generatePassword(24), time() + 5 * 365 * 86400, "", "", false, false);
		
		$this->cookie = $_COOKIE["paramsLogger"];
	}

	/**
	 *
	 */
	protected function getCommonFilter() {
		$userConditions = array();
		
		if( $this->userID )
			$userConditions[] = DataCondition::FieldEquals( "USERNAME", $this->userID );
		
		if( $this->cookie )
			$userConditions[] = DataCondition::FieldEquals( "COOKIE", $this->cookie );
		
		if( !$userConditions )
			return DataCondition::_False();
		
		$conditions = array(
			DataCondition::_Or( $userConditions ),
			DataCondition::FieldEquals( "TABLENAME", $this->tableNameId )
		);
		
		// if not searchParamsLogger
		if( $this->type !== SSEARCH_PARAMS_TYPE )
			$conditions[] = DataCondition::FieldEquals( "TYPE", $this->type );
		
		return DataCondition::_And( $conditions );
	}

	/**
	 * Save params
	 * @param array $data
	 * @param array values (optional)
	 */
	public function save( $data, $_values = array() ) {
		$issetData = strlen( $this->readData() ) != 0;
		if ( $issetData && $this->type != SSEARCH_PARAMS_TYPE ) {
			$dc = $this->getUpdateCommand( $data );
			$this->dataSource->updateSingle( $dc, false );
			return;
		}
		
		$dc = new DsCommand();
		
		$values = $_values;
		$values["SEARCH"] = my_json_encode( $data );
		$values["TABLENAME"] = $this->tableNameId;
		
		if ( $this->userID ) {
			$values["USERNAME"] = $this->userID;
		} else if ( $this->cookie ) {
			$values["COOKIE"] = $this->cookie;
		}
		
		if ( $this->type != SSEARCH_PARAMS_TYPE )
			$values["TYPE"] = $this->type;
		
		$dc->values = $values;
		
		$this->dataSource->insertSingle( $dc );
	}


	/**
	 * Save show/hide
	 * @param array $data
	 */
	public function saveShowHideData( $deviceClass, $data )
	{
		if( $this->getShowHideData( $deviceClass ) ) {
			$dc = $this->getUpdateCommand( $data );
			
			$dc->filter = DataCondition::_And( array( 
				$dc->filter, 
				DataCondition::FieldEquals( "NAME", $deviceClass )
			));
			
			$this->dataSource->updateSingle( $dc, false );	
			return;
		}
		
		$dc = new DsCommand();
		
		$values = array();
		$values["NAME"] = $deviceClass;
		$values["SEARCH"] = my_json_encode( $data );
		$values["TABLENAME"] = $this->tableNameId;
		$values["TYPE"] = $this->type;
		
		if ( $this->userID ) {
			$values["USERNAME"] = $this->userID;
		} else if ( $this->cookie ) {
			$values["COOKIE"] = $this->cookie;
		}
		
		$dc->values = $values;
		
		$this->dataSource->insertSingle( $dc );
	}

	/**
	 * Update the existing params
	 *
	 * @param array $data
	 * @param String $addWhere (optional)
	 * @deprecated ?
	 */
	protected function update( $data, $addWhere = '' ) {
		$dc = $this->getUpdateCommand( $data );
		$this->dataSource->updateSingle( $dc );
	}
	
	protected function getUpdateCommand( $data ) {
		$dc = $this->getDataCommand();
		$dc->values = array();
		$dc->values[ "SEARCH" ] = my_json_encode( $data );
		return $dc;
	}

	/**
	 * Delete param
	 * @param String $addWhere (optional)
	 */
	protected function delete() {
		$dc = $this->getDataCommand();
		$dataSource->deleteSingle( $dc, false );
	}


	/**
	 * @return array or null
	 */
	public function getData() {
		return $this->decode( $this->readData() );
	}

	/**
	 * @return array or null
	 */
	public function decode( $data ) {
		$parsed = my_json_decode( $data );
		if( !is_array( $parsed ) )
			return runner_unserialize_array( $data );
		return $parsed;
	}


	protected function getDataCommand() {
		$dc = new DsCommand();
		$dc->filter = $this->getCommonFilter();
		return $dc;
	}


	protected function readData() {
		$dc = $this->getDataCommand();
		
		$qResult = $this->dataSource->getSingle( $dc );
		if( !$qResult )
			return "";
		
		$data = $qResult->fetchAssoc();
		if( !isset( $data["SEARCH"] ) )
			return false;
		
		return $data["SEARCH"];
	}

	/**
	 * @return array
	 */
	public function getShowHideData( $deviceClass = -1 ) {
		$dc = $this->getDataCommand();
		
		if( $deviceClass >= 0 ) {
			$dc->filter = DataCondition::_And( array(
				$dc->filter, 
				DataCondition::FieldEquals( "NAME", $deviceClass ) 
			));
		}
		
		$qResult = $this->dataSource->getList( $dc );
		
		if( !$qResult )
			return array();	
		
		$ret = array();
		while( $data = $qResult->fetchAssoc() ) {
			$ret[ $data["NAME"] ] = $this->decode( $data["SEARCH"] );
		}
		return $ret;
	}
}
?>