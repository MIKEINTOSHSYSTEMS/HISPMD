<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "MFR_Dashboard_Report";
$nonAdminTablesArr[] = "MFR_Status_Report";
$nonAdminTablesArr[] = "MFR_Facilities";
$nonAdminTablesArr[] = "MFR_Region_Report";
$nonAdminTablesArr[] = "MFR_Zone_Report";
$nonAdminTablesArr[] = "MFR_Woreda_Report";
$nonAdminTablesArr[] = "DHIS2_Indicators";
$nonAdminTablesArr[] = "DHIS2_Organisation_Units";
$nonAdminTablesArr[] = "DHIS2_Analytics";
$nonAdminTablesArr[] = "DHIS2_Indicator";
$nonAdminTablesArr[] = "DHIS2_Organisation_Unit";
$nonAdminTablesArr[] = "DHIS2_Analytics Chart";
$nonAdminTablesArr[] = "DHIS2_Analytics Report";
$nonAdminTablesArr[] = "DHIS2_Reports";
$nonAdminTablesArr[] = "DHIS2_Datasets";
$nonAdminTablesArr[] = "DHIS2_Reporting_Rate";
$nonAdminTablesArr[] = "DHIS2_Reporting_Rate_Chart";
$nonAdminTablesArr[] = "DHIS2_Reporting_Rate_Report";
$nonAdminTablesArr[] = "DHIS2_Reporting_Rates_Chart";
$nonAdminTablesArr[] = "MFR_AIO_Dashboard";
$nonAdminTablesArr[] = "MFR_Facility";
$nonAdminTablesArr[] = "MFR_Regions";
$nonAdminTablesArr[] = "MFR_Zones";
$nonAdminTablesArr[] = "MFR_Woredas";
$nonAdminTablesArr[] = "MFR_Facility_Types";
$nonAdminTablesArr[] = "MFR_Operational_Statuses";
$nonAdminTablesArr[] = "MFR_Status";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Country";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Regions";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Zone";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Woredas";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Groups";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Group_Sets";
$nonAdminTablesArr[] = "DHIS2_AIO_OrgUnit";
$nonAdminTablesArr[] = "DHIS2_OrgUnit_Distributions";
$nonAdminTablesArr[] = "public.ai_data_assistant";
$nonAdminTablesArr[] = "public.dataquality";
$nonAdminTablesArr[] = "public.datause";
$nonAdminTablesArr[] = "public.dhis2_periods";
$nonAdminTablesArr[] = "public.digitalhealth";
$nonAdminTablesArr[] = "public.digitalhealthapps";
$nonAdminTablesArr[] = "public.financialresources";
$nonAdminTablesArr[] = "public.healthfacilities";
$nonAdminTablesArr[] = "public.healthunits";
$nonAdminTablesArr[] = "public.hisgovernance";
$nonAdminTablesArr[] = "public.hispartners";
$nonAdminTablesArr[] = "public.mfr_dashboard_reports";
$nonAdminTablesArr[] = "public.mfr_operational_status";
$nonAdminTablesArr[] = "public.mfr_region";
$nonAdminTablesArr[] = "public.mfr_woreda";
$nonAdminTablesArr[] = "public.mfr_zone";
$nonAdminTablesArr[] = "public.publications";
$nonAdminTablesArr[] = "public.regions";
$nonAdminTablesArr[] = "public.research";
$nonAdminTablesArr[] = "public.workforce";
$nonAdminTablesArr[] = "public.hispmdusers";
$nonAdminTablesArr[] = "mfr_dashboard_reports_chart";
$nonAdminTablesArr[] = "mfr_operational_status_chart";
$nonAdminTablesArr[] = "mfr_region_chart";
$nonAdminTablesArr[] = "public.ethprism_additional_organizational_and_behavioral_assessment";
$nonAdminTablesArr[] = "public.ethprism_facility_level_rhis_performance_diagnostic";
$nonAdminTablesArr[] = "public.ethprism_facility_office_checklist";
$nonAdminTablesArr[] = "public.ethprism_healthpost_level_rhis_performance_diagnostic";
$nonAdminTablesArr[] = "public.ethprism_national_prism_woreda_level_diagnostic";
$nonAdminTablesArr[] = "public.ethprism_organizational_and_behavioral_assessment";
$nonAdminTablesArr[] = "public.hispmd_prism_settings";
$nonAdminTablesArr[] = "PRISM Dashboard";
$nonAdminTablesArr[] = "hispmd_users_audit";
$nonAdminTablesArr[] = "hispmd_system_settings";
$nonAdminTablesArr[] = "hispmd_prism_data_forms";
$nonAdminTablesArr[] = "public.moh_administration_units";
$nonAdminTablesArr[] = "public.moh_assessments";
$nonAdminTablesArr[] = "public.moh_data_sources";
$nonAdminTablesArr[] = "public.moh_facility_types";
$nonAdminTablesArr[] = "public.moh_health_facilities";
$nonAdminTablesArr[] = "public.moh_indicator_data";
$nonAdminTablesArr[] = "public.moh_indicators";
$nonAdminTablesArr[] = "public.moh_regions";
$nonAdminTablesArr[] = "public.moh_indicator_groups";
$nonAdminTablesArr[] = "public.timetracker";
$nonAdminTablesArr[] = "public.mfr_facilities_register";
$nonAdminTablesArr[] = "System_Users_Activity_Dashboard";
$nonAdminTablesArr[] = "HISPMD_Web_Reports_and_Charts_Builder";
$nonAdminTablesArr[] = "public.mfr_facilities_register_report";
$nonAdminTablesArr[] = "public.hispmd_organisations";
$nonAdminTablesArr[] = "public.hispmd_uggroups";
$nonAdminTablesArr[] = "public.mfr_facilities_register_chart";
$nonAdminTablesArr[] = "public.moh_data_scope";
$nonAdminTablesArr[] = "HISPMD_MOH_Indicators_Dashboard";
$nonAdminTablesArr[] = "MOH_Indicators_Data_Report";
$nonAdminTablesArr[] = "MOH_Indicators_data_Chart";
$nonAdminTablesArr[] = "DHIS2_OrgUnits_Distribution";
$nonAdminTablesArr[] = "public.chat_history";
$nonAdminTablesArr[] = "kbarticles";
$nonAdminTablesArr[] = "kbcategories";
$nonAdminTablesArr[] = "kbcomments";
$nonAdminTablesArr[] = "kbusers";
$nonAdminTablesArr[] = "main";
$nonAdminTablesArr[] = "faicons";
$nonAdminTablesArr[] = "admin_comments";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "public.hispmd_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "public.hispmd_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "public.hispmd_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}