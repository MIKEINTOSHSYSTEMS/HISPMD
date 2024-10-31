<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}	
			else
				$orderClause = array( "column" => $userOrder );
			
			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "hispmdathispmdmerqconsultancyo" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "ai_data_assistant", "varname" => "hispmdathispmdmerqconsultancyo_public_ai_data_assistant", "altvarname" => "ai_data_assistant", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "chat_history", "varname" => "hispmdathispmdmerqconsultancyo_public_chat_history", "altvarname" => "chat_history", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "dataquality", "varname" => "hispmdathispmdmerqconsultancyo_public_dataquality", "altvarname" => "dataquality", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "datause", "varname" => "hispmdathispmdmerqconsultancyo_public_datause", "altvarname" => "datause", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "dhis2_periods", "varname" => "hispmdathispmdmerqconsultancyo_public_dhis2_periods", "altvarname" => "dhis2_periods", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "digitalhealth", "varname" => "hispmdathispmdmerqconsultancyo_public_digitalhealth", "altvarname" => "digitalhealth", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "digitalhealthapps", "varname" => "hispmdathispmdmerqconsultancyo_public_digitalhealthapps", "altvarname" => "digitalhealthapps", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_additional_organizational_and_behavioral_assessment", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_additional_organizational_and_behavioral_assessment", "altvarname" => "ethprism_additional_organizational_and_behavioral_assessment", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_facility_level_rhis_performance_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_facility_level_rhis_performance_diagnostic", "altvarname" => "ethprism_facility_level_rhis_performance_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_facility_office_checklist", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_facility_office_checklist", "altvarname" => "ethprism_facility_office_checklist", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_healthpost_level_rhis_performance_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_healthpost_level_rhis_performance_diagnostic", "altvarname" => "ethprism_healthpost_level_rhis_performance_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_national_prism_woreda_level_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_national_prism_woreda_level_diagnostic", "altvarname" => "ethprism_national_prism_woreda_level_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "ethprism_organizational_and_behavioral_assessment", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_organizational_and_behavioral_assessment", "altvarname" => "ethprism_organizational_and_behavioral_assessment", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "faicons", "varname" => "hispmdathispmdmerqconsultancyo_public_faicons", "altvarname" => "faicons", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "financialresources", "varname" => "hispmdathispmdmerqconsultancyo_public_financialresources", "altvarname" => "financialresources", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "healthfacilities", "varname" => "hispmdathispmdmerqconsultancyo_public_healthfacilities", "altvarname" => "healthfacilities", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "healthunits", "varname" => "hispmdathispmdmerqconsultancyo_public_healthunits", "altvarname" => "healthunits", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hisgovernance", "varname" => "hispmdathispmdmerqconsultancyo_public_hisgovernance", "altvarname" => "hisgovernance", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispartners", "varname" => "hispmdathispmdmerqconsultancyo_public_hispartners", "altvarname" => "hispartners", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd__audit", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd__audit", "altvarname" => "hispmd__audit", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd__locking", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd__locking", "altvarname" => "hispmd__locking", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_noti", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_noti", "altvarname" => "hispmd_noti", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_organisations", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_organisations", "altvarname" => "hispmd_organisations", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_prism_settings", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_prism_settings", "altvarname" => "hispmd_prism_settings", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_settings", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_settings", "altvarname" => "hispmd_settings", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_uggroups", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_uggroups", "altvarname" => "hispmd_uggroups", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_ugmembers", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_ugmembers", "altvarname" => "hispmd_ugmembers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmd_ugrights", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_ugrights", "altvarname" => "hispmd_ugrights", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "hispmdusers", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmdusers", "altvarname" => "hispmdusers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "kbarticles", "varname" => "hispmdathispmdmerqconsultancyo_public_kbarticles", "altvarname" => "kbarticles", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "kbcategories", "varname" => "hispmdathispmdmerqconsultancyo_public_kbcategories", "altvarname" => "kbcategories", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "kbcomments", "varname" => "hispmdathispmdmerqconsultancyo_public_kbcomments", "altvarname" => "kbcomments", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "kbusers", "varname" => "hispmdathispmdmerqconsultancyo_public_kbusers", "altvarname" => "kbusers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_dashboard_reports", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_dashboard_reports", "altvarname" => "mfr_dashboard_reports", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_facilities_register", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_facilities_register", "altvarname" => "mfr_facilities_register", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_operational_status", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_operational_status", "altvarname" => "mfr_operational_status", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_region", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_region", "altvarname" => "mfr_region", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_woreda", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_woreda", "altvarname" => "mfr_woreda", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "mfr_zone", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_zone", "altvarname" => "mfr_zone", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_administration_units", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_administration_units", "altvarname" => "moh_administration_units", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_assessments", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_assessments", "altvarname" => "moh_assessments", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_data_scope", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_data_scope", "altvarname" => "moh_data_scope", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_data_sources", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_data_sources", "altvarname" => "moh_data_sources", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_facility_types", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_facility_types", "altvarname" => "moh_facility_types", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_health_facilities", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_health_facilities", "altvarname" => "moh_health_facilities", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_indicator_data", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicator_data", "altvarname" => "moh_indicator_data", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_indicator_groups", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicator_groups", "altvarname" => "moh_indicator_groups", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_indicators", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicators", "altvarname" => "moh_indicators", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_ir_datasource", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_ir_datasource", "altvarname" => "moh_ir_datasource", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_months", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_months", "altvarname" => "moh_months", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_period_types", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_period_types", "altvarname" => "moh_period_types", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_quarters", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_quarters", "altvarname" => "moh_quarters", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_regions", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_regions", "altvarname" => "moh_regions", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "moh_years", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_years", "altvarname" => "moh_years", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "publications", "varname" => "hispmdathispmdmerqconsultancyo_public_publications", "altvarname" => "publications", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "regions", "varname" => "hispmdathispmdmerqconsultancyo_public_regions", "altvarname" => "regions", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "research", "varname" => "hispmdathispmdmerqconsultancyo_public_research", "altvarname" => "research", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "timetracker", "varname" => "hispmdathispmdmerqconsultancyo_public_timetracker", "altvarname" => "timetracker", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "webreport_admin", "varname" => "hispmdathispmdmerqconsultancyo_public_webreport_admin", "altvarname" => "webreport_admin", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "webreport_style", "varname" => "hispmdathispmdmerqconsultancyo_public_webreport_style", "altvarname" => "webreport_style", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "webreports", "varname" => "hispmdathispmdmerqconsultancyo_public_webreports", "altvarname" => "webreports", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
			$dalTables[$conn->connId][] = array("name" => "workforce", "varname" => "hispmdathispmdmerqconsultancyo_public_workforce", "altvarname" => "workforce", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql, 
		$arg1 = null,
		$arg2 = null, 
		$arg3 = null, 
		$arg4 = null, 
		$arg5 = null, 
		$arg6 = null, 
		$arg7 = null, 
		$arg8 = null, 
		$arg9 = null, 
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);
			
			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}
			
			
			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}
			
			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>