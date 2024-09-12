<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "hispmdathispmdmerqconsultancyo" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "hispmdathispmdmerqconsultancyo";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "hispmdathispmdmerqconsultancyo" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "hispmdathispmdmerqconsultancyo" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "hispmdathispmdmerqconsultancyo";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "hispmdathispmdmerqconsultancyo";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "hispmdathispmdmerqconsultancyo";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["MFR_Status_Report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Facilities"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Region_Report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Zone_Report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Woreda_Report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["DHIS2_Indicators"] = "xhispmdathispmdmerqconsultancy";
		$connectionsIds["DHIS2_Organisation_Units"] = "xhispmdathispmdmerqconsultancy";
		$connectionsIds["DHIS2_Analytics"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Indicator"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Organisation_Unit"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Analytics Chart"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Analytics Report"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Reports"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Datasets"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Reporting_Rate"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Reporting_Rate_Chart"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Reporting_Rate_Report"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Reporting_Rates_Chart"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["MFR_Facility"] = "hispmdathispmdmerqconsultanmfr";
		$connectionsIds["MFR_Regions"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Zones"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Woredas"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Facility_Types"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Operational_Statuses"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MFR_Status"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["DHIS2_OrgUnit_Country"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Regions"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Zone"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Woredas"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Groups"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Group_Sets"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_AIO_OrgUnit"] = "hispmdathispmdmerqconsultdhis2";
		$connectionsIds["DHIS2_OrgUnit_Distributions"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["public.ai_data_assistant"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.dataquality"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.datause"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.dhis2_periods"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.digitalhealth"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.digitalhealthapps"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.financialresources"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.healthfacilities"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.healthunits"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hisgovernance"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hispartners"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_dashboard_reports"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_operational_status"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_region"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_woreda"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_zone"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.publications"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.regions"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.research"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.workforce"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hispmdusers"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["mfr_dashboard_reports_chart"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["mfr_operational_status_chart"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["mfr_region_chart"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_additional_organizational_and_behavioral_assessment"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_facility_level_rhis_performance_diagnostic"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_facility_office_checklist"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_healthpost_level_rhis_performance_diagnostic"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_national_prism_woreda_level_diagnostic"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.ethprism_organizational_and_behavioral_assessment"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hispmd_prism_settings"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["hispmd_users_audit"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["hispmd_system_settings"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["hispmd_prism_data_forms"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_administration_units"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_assessments"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_data_sources"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_facility_types"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_health_facilities"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_indicator_data"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_indicators"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_regions"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_indicator_groups"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.timetracker"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_facilities_register"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["admin_rights"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["admin_members"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["admin_users"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_facilities_register_report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hispmd_organisations"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.hispmd_uggroups"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.mfr_facilities_register_chart"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["public.moh_data_scope"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MOH_Indicators_Data_Report"] = "hispmdathispmdmerqconsultancyo";
		$connectionsIds["MOH_Indicators_data_Chart"] = "hispmdathispmdmerqconsultancyo";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>