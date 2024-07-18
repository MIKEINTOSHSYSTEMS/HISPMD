<?php
require_once( getabspath('connections/rest.php') );

class RestManager
{
	protected $_tablesConnectionIds;
	protected $_connectionsData;
	protected $_connectionsIdByName = array();

	function __construct()
	{
		$this->_setConnectionsData();
//		$this->_setTablesConnectionIds();
	}

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
		$connectionsIds["DHIS2PeriodsView"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Indicator"] = "devdhis2hispmdathispmdmerqcons";
		$connectionsIds["DHIS2_Organisation_Unit"] = "devdhis2hispmdathispmdmerqcons";
		$this->_tablesConnectionIds = &$connectionsIds;
	}

	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["connId"] = "hispmdathispmdmerqconsultancyo";
		$data["connName"] = "MOH_MFR_Report_Dash_API_Const";

		$this->_connectionsIdByName["MOH_MFR_Report_Dash_API_Const"] = "hispmdathispmdmerqconsultancyo";

		$data["url"] = "https://mfr-be.k8s.sandboxaddis.com/api";
		$data["authType"] = "none";
				
	$connectionsData["hispmdathispmdmerqconsultancyo"] = $data;
		$data = array();
		$data["connId"] = "xhispmdathispmdmerqconsultancy";
		$data["connName"] = "MOH_DHIS2_Report_Dash_API_Const";

		$this->_connectionsIdByName["MOH_DHIS2_Report_Dash_API_Const"] = "xhispmdathispmdmerqconsultancy";

		$data["url"] = "https://dhis2.merqconsultancy.org";
		$data["authType"] = "basic";
			$data["username"] = "admin";
		$data["password"] = "district";
			
	$connectionsData["xhispmdathispmdmerqconsultancy"] = $data;
		$data = array();
		$data["connId"] = "devdhis2hispmdathispmdmerqcons";
		$data["connName"] = "MOH_DHIS2_Analytics_Report_API";

		$this->_connectionsIdByName["MOH_DHIS2_Analytics_Report_API"] = "devdhis2hispmdathispmdmerqcons";

		$data["url"] = "https://hispmd.merqconsultancy.org";
		$data["authType"] = "basic";
			$data["username"] = "admin";
		$data["password"] = "district";
			
	$connectionsData["devdhis2hispmdathispmdmerqcons"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	public function getConnection( $id ) {
		if( $id == spidGOOGLEDRIVE ) {
			return getGoogleDriveConnection();
		}
		if( $id == spidONEDRIVE ) {
			return getOneDriveConnection();
		}
		if( $id == spidDROPBOX ) {
			return getDropboxConnection();
		}
		if( !$this->_connectionsData[$id] ) {
			return null;
		}
		return new RestConnection( $this->_connectionsData[ $id ] );
	}

	public function idByName( $name ) {
		foreach( $this->_connectionsData as $id => $data ) {
			if( $data["connName"] == $name ) {
				return $id;
			}
		}
		
		//	return first available
		foreach( $this->_connectionsData as $id => $data ) {
			return $id;
		}

	}


}


?>