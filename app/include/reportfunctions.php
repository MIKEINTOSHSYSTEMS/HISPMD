<?php
require_once(getabspath("include/xml.php"));
require_once(getabspath("classes/cipherer.php"));
require_once(getabspath("classes/searchclause.php"));


function getReportArray($name)
{
	$arr = array();
	$xml = new xml();
	$rpt_strXML = LoadSelectedReport($name);
	$arr=$xml->xml_to_array($rpt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ". $connection->addFieldWrappers("sqlcontent")." FROM ". $connection->addTableWrappers("webreport_sql")
				." WHERE ". $connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"] = $row[0];
		}
	}
	return $arr;
}

function getChartArray($name)
{
	$arr = array();
	$xml = new xml();
	$chrt_strXML = LoadSelectedChart($name);
	$arr=$xml->xml_to_array($chrt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ".$connection->addFieldWrappers("sqlcontent")." FROM ".$connection->addTableWrappers("webreport_sql")
				." WHERE ".$connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"]=$row[0];
		}
	}
	return $arr;
}

function GetUserGroups() {
	global $wr_is_standalone, $cman;
	if( !Security::permissionsAvailable() ) {
		return array();
	}
	if( Security::dynamicPermissions() ) {
		$arr = array(
			array(-1, "<".mlang_message("AA_GROUP_ADMIN").">"),
			array(-2, "<".mlang_message("AA_GROUP_DEFAULT").">"),
			array(-3, "<".mlang_message("AA_GROUP_GUEST").">")
		);

		$groupIdField = "GroupID";
		$groupLabelField = "Label";
		$groupProviderField = "Provider";

		$dataSource = Security::getUgGroupsDatasource();
		$dc = new DsCommand();
		if( storageGet( "groups_provider_field" ) ) {
			$dc->order[] = array( "column" => $groupProviderField, "dir" => "ASC" );
		}
		$dc->order[] = array( "column" => $groupLabelField, "dir" => "ASC" );
		$qResult = $dataSource->getList($dc );

		while( $data = $qResult->fetchNumeric() )
		{
			$arr[] = array($data[ $groupIdField ], $data[ $groupLabelField ] );
		}
	} else {
		//	static permissions
		$arr = array();
		if(!$wr_is_standalone)
		{
			$arr[]=array("Default","<Default>");
		}
		else
		{
			$connection = getWebreportConnection(); // #9875

			$qResult = $connection->query( "select ".$connection->addFieldWrappers("username")
				." from ".$connection->addTableWrappers("webreport_users")." order by ".$connection->addFieldWrappers("username") );

			$arr[] = array("Guest", "<Guest>");
			while( $data = $qResult->fetchNumeric() )
			{
				$arr[] = array($data[0], $data[0]);
			}
		}
	}
	return $arr;
}

function GetUserGroup()
{
	global $wr_is_standalone;
	if( !Security::permissionsAvailable() ) {
		return array();
	}

	if( Security::dynamicPermissions() )
	{
		if( !Security::isGuest() )
		{
			$userRights = &Security::dynamicUserRights();
			return $userRights[".Groups"];
		}
		else {
			return array(-3);
		}
	}
	else
	{
		if(!$wr_is_standalone)
		{
			if( !Security::isGuest() )
			{
				return array("Default");
			}
			else
			{
				return array("Guest");
			}
		}
		else
		{
			if( !Security::isGuest() )
			{
				$connection = getWebreportConnection();	// #9875

				$qResult = $connection->query("select ".$connection->addFieldWrappers("username")." from ".$connection->addTableWrappers("webreport_users")
					." order by ".$connection->addFieldWrappers("username"));
				while( $data = $qResult->fetchNumeric() )
				{
					if ( $data[0] == @$_SESSION["GroupID"] )
						return array($data[0]);
				}
				return array("Guest");
			}
			else
			{
				return array("Guest");
			}
		}
	}
}

function CheckLastID($type)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = '".$type."'";

	$qResult = $connection->query( $strSQL );

	$maxID = 0;
	while( $row = $qResult->fetchNumeric() )
	{
		if ( $maxID < $row[0] )
			$maxID = $row[0];
	}

	return ++$maxID;
}

function GetNumberFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(IsNumberType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function WRGetNBFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(!IsBinaryType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function GetChartsList()
{
	$xml = new xml();
	$arr = array();

	$arrUserGroup = GetUserGroup();
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")
		." FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'chart'"
		." order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$chart_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($chart_arr['permissions']) ) {
			foreach ( $chart_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}
		if(!$chart_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedChart($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities( $rptContent[0] );
}

function SaveChart($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$connection = getWebreportConnection();// #9875

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";


	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$data =  $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.",".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".$connection->prepareString($strXML)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus).", ".$connection->addFieldWrappers("rpt_mdate")."=".$connection->addDateQuotes( now() )
			." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";

		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", ".$connection->addDateQuotes( now() ).", ".$connection->addDateQuotes( now() )
			.", ".$connection->prepareString($strXML).", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'chart')";

		$connection->exec( $strSQL );
	}
}

function DeleteChart($report)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	$connection->exec( $strSQL );
}

function GetReportsList()
{
	$connection = getWebreportConnection();// #9875

	$xml = new xml();
	$arr = array();
	$arrUserGroup = GetUserGroup();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'report' order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$report_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($report_arr['permissions']) ) {
			foreach ( $report_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}

		if(!$report_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities($rptContent[0]);
}

function SaveReport($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";

	// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
	$connection = getWebreportConnection();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$data = $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.", ".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".PrepareString4DB($strXML, $connection)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus)
			.", ".$connection->addFieldWrappers("rpt_mdate")."='".now()."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)
			." and ".$connection->addFieldWrappers("rpt_type")."='report'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";
		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", ".$connection->addDateQuotes( now() ).", ".$connection->addDateQuotes( now() ).", ".PrepareString4DB($strXML, $connection)
			.", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'report')";

		$connection->exec( $strSQL );
	}

	$strSQL = "UPDATE ".$connection->addTableWrappers("webreport_style")." set ".$connection->addFieldWrappers("repname")."=".$connection->prepareString($report)
		." where ".$connection->addFieldWrappers("repname")."='".$_SESSION['webreports_oldname']."'";
	$connection->exec( $strSQL );
}

function DeleteReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
		." and ".$connection->addFieldWrappers("rpt_type")."='report'";
	$connection->exec( $strSQL );
}

function testAdvSearch($table)
{
	if(is_wr_project())
	{
		if($table=="MFR_Dashboard_Report")
		{
			return 1;
		}
		if($table=="MFR_Status_Report")
		{
			return 1;
		}
		if($table=="MFR_Facilities")
		{
			return 1;
		}
		if($table=="MFR_Region_Report")
		{
			return 1;
		}
		if($table=="MFR_Zone_Report")
		{
			return 1;
		}
		if($table=="MFR_Woreda_Report")
		{
			return 1;
		}
		if($table=="DHIS2_Indicators")
		{
			return 1;
		}
		if($table=="DHIS2_Organisation_Units")
		{
			return 1;
		}
		if($table=="DHIS2_Analytics")
		{
			return 1;
		}
		if($table=="DHIS2_Indicator")
		{
			return 1;
		}
		if($table=="DHIS2_Organisation_Unit")
		{
			return 1;
		}
		if($table=="DHIS2_Analytics Chart")
		{
			return 1;
		}
		if($table=="DHIS2_Analytics Report")
		{
			return 1;
		}
		if($table=="DHIS2_Reports")
		{
			return 1;
		}
		if($table=="DHIS2_Datasets")
		{
			return 1;
		}
		if($table=="DHIS2_Reporting_Rate")
		{
			return 1;
		}
		if($table=="DHIS2_Reporting_Rate_Chart")
		{
			return 1;
		}
		if($table=="DHIS2_Reporting_Rate_Report")
		{
			return 1;
		}
		if($table=="DHIS2_Reporting_Rates_Chart")
		{
			return 1;
		}
		if($table=="MFR_AIO_Dashboard")
		{
			return 1;
		}
		if($table=="MFR_Facility")
		{
			return 1;
		}
		if($table=="MFR_Regions")
		{
			return 1;
		}
		if($table=="MFR_Zones")
		{
			return 1;
		}
		if($table=="MFR_Woredas")
		{
			return 1;
		}
		if($table=="MFR_Facility_Types")
		{
			return 1;
		}
		if($table=="MFR_Operational_Statuses")
		{
			return 1;
		}
		if($table=="MFR_Status")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Country")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Regions")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Zone")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Woredas")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Groups")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Group_Sets")
		{
			return 1;
		}
		if($table=="DHIS2_AIO_OrgUnit")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnit_Distributions")
		{
			return 1;
		}
		if($table=="public.ai_data_assistant")
		{
			return 1;
		}
		if($table=="public.dataquality")
		{
			return 1;
		}
		if($table=="public.datause")
		{
			return 1;
		}
		if($table=="public.dhis2_periods")
		{
			return 1;
		}
		if($table=="public.digitalhealth")
		{
			return 1;
		}
		if($table=="public.digitalhealthapps")
		{
			return 1;
		}
		if($table=="public.financialresources")
		{
			return 1;
		}
		if($table=="public.healthfacilities")
		{
			return 1;
		}
		if($table=="public.healthunits")
		{
			return 1;
		}
		if($table=="public.hisgovernance")
		{
			return 1;
		}
		if($table=="public.hispartners")
		{
			return 1;
		}
		if($table=="public.mfr_dashboard_reports")
		{
			return 1;
		}
		if($table=="public.mfr_operational_status")
		{
			return 1;
		}
		if($table=="public.mfr_region")
		{
			return 1;
		}
		if($table=="public.mfr_woreda")
		{
			return 1;
		}
		if($table=="public.mfr_zone")
		{
			return 1;
		}
		if($table=="public.publications")
		{
			return 1;
		}
		if($table=="public.regions")
		{
			return 1;
		}
		if($table=="public.research")
		{
			return 1;
		}
		if($table=="public.workforce")
		{
			return 1;
		}
		if($table=="public.hispmdusers")
		{
			return 1;
		}
		if($table=="mfr_dashboard_reports_chart")
		{
			return 1;
		}
		if($table=="mfr_operational_status_chart")
		{
			return 1;
		}
		if($table=="mfr_region_chart")
		{
			return 1;
		}
		if($table=="public.ethprism_additional_organizational_and_behavioral_assessment")
		{
			return 1;
		}
		if($table=="public.ethprism_facility_level_rhis_performance_diagnostic")
		{
			return 1;
		}
		if($table=="public.ethprism_facility_office_checklist")
		{
			return 1;
		}
		if($table=="public.ethprism_healthpost_level_rhis_performance_diagnostic")
		{
			return 1;
		}
		if($table=="public.ethprism_national_prism_woreda_level_diagnostic")
		{
			return 1;
		}
		if($table=="public.ethprism_organizational_and_behavioral_assessment")
		{
			return 1;
		}
		if($table=="public.hispmd_prism_settings")
		{
			return 1;
		}
		if($table=="PRISM Dashboard")
		{
			return 1;
		}
		if($table=="hispmd_users_audit")
		{
			return 1;
		}
		if($table=="hispmd_system_settings")
		{
			return 1;
		}
		if($table=="hispmd_prism_data_forms")
		{
			return 1;
		}
		if($table=="public.moh_administration_units")
		{
			return 1;
		}
		if($table=="public.moh_assessments")
		{
			return 1;
		}
		if($table=="public.moh_data_sources")
		{
			return 1;
		}
		if($table=="public.moh_facility_types")
		{
			return 1;
		}
		if($table=="public.moh_health_facilities")
		{
			return 1;
		}
		if($table=="public.moh_indicator_data")
		{
			return 1;
		}
		if($table=="public.moh_indicators")
		{
			return 1;
		}
		if($table=="public.moh_regions")
		{
			return 1;
		}
		if($table=="public.moh_indicator_groups")
		{
			return 1;
		}
		if($table=="public.timetracker")
		{
			return 1;
		}
		if($table=="public.mfr_facilities_register")
		{
			return 1;
		}
		if($table=="admin_rights")
		{
			return 1;
		}
		if($table=="admin_members")
		{
			return 1;
		}
		if($table=="admin_users")
		{
			return 1;
		}
		if($table=="System_Users_Activity_Dashboard")
		{
			return 1;
		}
		if($table=="HISPMD_Web_Reports_and_Charts_Builder")
		{
			return 1;
		}
		if($table=="public.mfr_facilities_register_report")
		{
			return 1;
		}
		if($table=="public.hispmd_organisations")
		{
			return 1;
		}
		if($table=="public.hispmd_uggroups")
		{
			return 1;
		}
		if($table=="public.mfr_facilities_register_chart")
		{
			return 1;
		}
		if($table=="public.moh_data_scope")
		{
			return 1;
		}
		if($table=="HISPMD_MOH_Indicators_Dashboard")
		{
			return 1;
		}
		if($table=="MOH_Indicators_Data_Report")
		{
			return 1;
		}
		if($table=="MOH_Indicators_data_Chart")
		{
			return 1;
		}
		if($table=="DHIS2_OrgUnits_Distribution")
		{
			return 1;
		}
		if($table=="public.chat_history")
		{
			return 1;
		}
		if($table=="kbarticles")
		{
			return 1;
		}
		if($table=="kbcategories")
		{
			return 1;
		}
		if($table=="kbcomments")
		{
			return 1;
		}
		if($table=="kbusers")
		{
			return 1;
		}
		if($table=="main")
		{
			return 1;
		}
		if($table=="faicons")
		{
			return 1;
		}
		if($table=="admin_comments")
		{
			return 1;
		}
		if($table=="public.hispmd_noti_view")
		{
			return 1;
		}
		if($table=="public.faicons")
		{
			return 1;
		}
		if($table=="MoH_Indicators_Data_Values_Chart")
		{
			return 1;
		}
		if($table=="Indicators_Dashboard")
		{
			return 1;
		}
		if($table=="hispmd_indicators_data")
		{
			return 1;
		}
		if($table=="public.moh_ir_datasource")
		{
			return 1;
		}
	}
	elseif(is_wr_db())
	{
		global $dal;
		$table_list=WRGetTablesList();
		foreach($table_list as $key=>$value)
		{
			if($table==$value)
			{
				return 1;
			}
		}
	}
	elseif(is_wr_custom())
	{
		return 1;
	}
	return 0;
}

/**
 * convert cars.Make to [cars].[Make]
 */
function WRAddFieldWrappers($field)
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$t = "";
	$f = "";
	WRSplitFieldName($field, $t, $f);

	if(!$t)
	{
		return $connection->addFieldWrappers($f);
	}
	return $connection->addTableWrappers($t).".".$connection->addFieldWrappers($f);
}

function WRSplitFieldName($str, &$table, &$field)
{
	$table="";
	$field=$str;
	$pos=strrpos($field,".");
	if($pos===false)
		return;
	$table=substr($str,0,$pos);
	$field=substr($str,$pos+1);
}

function is_groupby_chart()
{
	if(!(@$_SESSION['webcharts']))
		return false;
	$root=&$_SESSION['webcharts'];
	if(!is_array($root["group_by_condition"]))
		return false;
	return ($root["group_by_condition"]["group_by_toggle"]=="true");
}

function WRChartLabel($str)
{
	$table="";
	$field="";
	WRSplitFieldName($str,$table,$field);
	return $field;
	if(!$table)
		return $field;
	return $table.".".$field;
}

function is_wr_db()
{
	if(@$_SESSION["webobject"]["table_type"]=="db")
		return true;
	else
		return false;
}

function is_wr_project()
{
	if(@$_SESSION["webobject"]["table_type"]=="project")
		return true;
	else
		return false;
}

function is_wr_custom()
{
	if(@$_SESSION["webobject"]["table_type"]=="custom")
		return true;
	else
		return false;
}

function WRGetTablesList()
{
	if(!isset($_SESSION["WRTableList"]))
	{
		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$_SESSION["WRTableList"] = $connection->getTableList();
	}
	return $_SESSION["WRTableList"];
}

function WRGetFieldsList($table)
{
	if(is_wr_project()){
		$pSet = new ProjectSettings($table);
		return $pSet->getFieldsList();
	}

	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldsList($table);
		}
		return dbinfoFieldsList($table);
	}

	if(is_wr_custom())
	{
		$res = array();
		$sql = $_SESSION["object_sql"];

		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$arr = $connection->getFieldsList($sql);

		foreach($arr as $val)
		{
			$res[] = $val["fieldname"];
		}
		return $res;
	}
}

function dbinfoFieldsList($table)
{
	if( isset($_SESSION["WRFieldList"][$table]) )
		return $_SESSION["WRFieldList"][$table];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = array();
	foreach($arr as $val)
	{
		$res[] = $val["fieldname"];
	}

	$_SESSION["WRFieldList"][$table] = $res;
	return $res;
}

function WRCustomGetFieldType($table,$field)
{
	global $conn;
	if(is_wr_project())
	{
		$pSet = new ProjectSettings($_SESSION['webreports']['tables'][0]);
		$type = $pSet->getFieldType($field);
		if($type)
			return $type;
	}
	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldType($table,$field);
		}
		return dbinfoFieldsType($table,$field);
	}

	if(is_wr_custom())
	{
		$res = "";
		$sql = $_SESSION["object_sql"];
		if($sql)
		{
			//The default connection is temporary used #9875
			$connection = getDefaultConnection();

			$arr = $connection->getFieldsList( $sql );
			foreach($arr as $val)
			{
				if($val["fieldname"] == $field)
					$res = $val["type"];
			}
		}
		return $res;
	}
}

function WRGetAllCustomFieldType()
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$res = array();
	$sql = $_SESSION["object_sql"];
	$arr = $connection->getFieldsList($sql);
	foreach($arr as $val)
	{
		$res[ $val["fieldname"] ] = $val["type"];
	}
	return $res;
}

function WRGetFieldType($fld)
{
	$table="";
	$field="";
	WRSplitFieldName($fld,$table,$field);
	return WRCustomGetFieldType($table,$field);
}

function dbinfoFieldsType($table,$field)
{
	if( isset($_SESSION["WRFieldType"][ $table ][ $field ]) )
		return $_SESSION["WRFieldType"][ $table ][ $field ];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = "";
	foreach($arr as $val)
	{
		if( $val["fieldname"] == $field )
			$res = $val["type"];

		$_SESSION["WRFieldType"][$table][$val["fieldname"]]=$val["type"]   ;
	}
	return $res;
}

function WRUseTimepicker($table,$field)
{
	return false;
}

function WRUseListLookup($table,$field)
{
	return false;
}

function getCaptionTable($table)
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	if($table=="MFR_Dashboard_Report")
	{
		return GetTableCaption("MFR_Dashboard_Report");
	}
	if($table=="MFR_Status_Report")
	{
		return GetTableCaption("MFR_Status_Report");
	}
	if($table=="MFR_Facilities")
	{
		return GetTableCaption("MFR_Facilities");
	}
	if($table=="MFR_Region_Report")
	{
		return GetTableCaption("MFR_Region_Report");
	}
	if($table=="MFR_Zone_Report")
	{
		return GetTableCaption("MFR_Zone_Report");
	}
	if($table=="MFR_Woreda_Report")
	{
		return GetTableCaption("MFR_Woreda_Report");
	}
	if($table=="DHIS2_Indicators")
	{
		return GetTableCaption("DHIS2_Indicators");
	}
	if($table=="DHIS2_Organisation_Units")
	{
		return GetTableCaption("DHIS2_Organisation_Units");
	}
	if($table=="DHIS2_Analytics")
	{
		return GetTableCaption("DHIS2_Analytics");
	}
	if($table=="DHIS2_Indicator")
	{
		return GetTableCaption("DHIS2_Indicator");
	}
	if($table=="DHIS2_Organisation_Unit")
	{
		return GetTableCaption("DHIS2_Organisation_Unit");
	}
	if($table=="DHIS2_Analytics Chart")
	{
		return GetTableCaption("DHIS2_Analytics_Chart");
	}
	if($table=="DHIS2_Analytics Report")
	{
		return GetTableCaption("DHIS2_Analytics_Report");
	}
	if($table=="DHIS2_Reports")
	{
		return GetTableCaption("DHIS2_Reports");
	}
	if($table=="DHIS2_Datasets")
	{
		return GetTableCaption("DHIS2_Datasets");
	}
	if($table=="DHIS2_Reporting_Rate")
	{
		return GetTableCaption("DHIS2_Reporting_Rate");
	}
	if($table=="DHIS2_Reporting_Rate_Chart")
	{
		return GetTableCaption("DHIS2_Reporting_Rate_Chart");
	}
	if($table=="DHIS2_Reporting_Rate_Report")
	{
		return GetTableCaption("DHIS2_Reporting_Rate_Report");
	}
	if($table=="DHIS2_Reporting_Rates_Chart")
	{
		return GetTableCaption("DHIS2_Reporting_Rates_Chart");
	}
	if($table=="MFR_AIO_Dashboard")
	{
		return GetTableCaption("MFR_AIO_Dashboard");
	}
	if($table=="MFR_Facility")
	{
		return GetTableCaption("MFR_Facility");
	}
	if($table=="MFR_Regions")
	{
		return GetTableCaption("MFR_Regions");
	}
	if($table=="MFR_Zones")
	{
		return GetTableCaption("MFR_Zones");
	}
	if($table=="MFR_Woredas")
	{
		return GetTableCaption("MFR_Woredas");
	}
	if($table=="MFR_Facility_Types")
	{
		return GetTableCaption("MFR_Facility_Types");
	}
	if($table=="MFR_Operational_Statuses")
	{
		return GetTableCaption("MFR_Operational_Statuses");
	}
	if($table=="MFR_Status")
	{
		return GetTableCaption("MFR_Status");
	}
	if($table=="DHIS2_OrgUnit_Country")
	{
		return GetTableCaption("DHIS2_OrgUnit_Country");
	}
	if($table=="DHIS2_OrgUnit_Regions")
	{
		return GetTableCaption("DHIS2_OrgUnit_Regions");
	}
	if($table=="DHIS2_OrgUnit_Zone")
	{
		return GetTableCaption("DHIS2_OrgUnit_Zone");
	}
	if($table=="DHIS2_OrgUnit_Woredas")
	{
		return GetTableCaption("DHIS2_OrgUnit_Woredas");
	}
	if($table=="DHIS2_OrgUnit_Groups")
	{
		return GetTableCaption("DHIS2_OrgUnit_Groups");
	}
	if($table=="DHIS2_OrgUnit_Group_Sets")
	{
		return GetTableCaption("DHIS2_OrgUnit_Group_Sets");
	}
	if($table=="DHIS2_AIO_OrgUnit")
	{
		return GetTableCaption("DHIS2_AIO_OrgUnit");
	}
	if($table=="DHIS2_OrgUnit_Distributions")
	{
		return GetTableCaption("DHIS2_OrgUnit_Distributions");
	}
	if($table=="public.ai_data_assistant")
	{
		return GetTableCaption("public_ai_data_assistant");
	}
	if($table=="public.dataquality")
	{
		return GetTableCaption("public_dataquality");
	}
	if($table=="public.datause")
	{
		return GetTableCaption("public_datause");
	}
	if($table=="public.dhis2_periods")
	{
		return GetTableCaption("public_dhis2_periods");
	}
	if($table=="public.digitalhealth")
	{
		return GetTableCaption("public_digitalhealth");
	}
	if($table=="public.digitalhealthapps")
	{
		return GetTableCaption("public_digitalhealthapps");
	}
	if($table=="public.financialresources")
	{
		return GetTableCaption("public_financialresources");
	}
	if($table=="public.healthfacilities")
	{
		return GetTableCaption("public_healthfacilities");
	}
	if($table=="public.healthunits")
	{
		return GetTableCaption("public_healthunits");
	}
	if($table=="public.hisgovernance")
	{
		return GetTableCaption("public_hisgovernance");
	}
	if($table=="public.hispartners")
	{
		return GetTableCaption("public_hispartners");
	}
	if($table=="public.mfr_dashboard_reports")
	{
		return GetTableCaption("public_mfr_dashboard_reports");
	}
	if($table=="public.mfr_operational_status")
	{
		return GetTableCaption("public_mfr_operational_status");
	}
	if($table=="public.mfr_region")
	{
		return GetTableCaption("public_mfr_region");
	}
	if($table=="public.mfr_woreda")
	{
		return GetTableCaption("public_mfr_woreda");
	}
	if($table=="public.mfr_zone")
	{
		return GetTableCaption("public_mfr_zone");
	}
	if($table=="public.publications")
	{
		return GetTableCaption("public_publications");
	}
	if($table=="public.regions")
	{
		return GetTableCaption("public_regions");
	}
	if($table=="public.research")
	{
		return GetTableCaption("public_research");
	}
	if($table=="public.workforce")
	{
		return GetTableCaption("public_workforce");
	}
	if($table=="public.hispmdusers")
	{
		return GetTableCaption("public_hispmdusers");
	}
	if($table=="mfr_dashboard_reports_chart")
	{
		return GetTableCaption("mfr_dashboard_reports_chart");
	}
	if($table=="mfr_operational_status_chart")
	{
		return GetTableCaption("mfr_operational_status_chart");
	}
	if($table=="mfr_region_chart")
	{
		return GetTableCaption("mfr_region_chart");
	}
	if($table=="public.ethprism_additional_organizational_and_behavioral_assessment")
	{
		return GetTableCaption("public_ethprism_additional_organizational_and_behavioral_assessment");
	}
	if($table=="public.ethprism_facility_level_rhis_performance_diagnostic")
	{
		return GetTableCaption("public_ethprism_facility_level_rhis_performance_diagnostic");
	}
	if($table=="public.ethprism_facility_office_checklist")
	{
		return GetTableCaption("public_ethprism_facility_office_checklist");
	}
	if($table=="public.ethprism_healthpost_level_rhis_performance_diagnostic")
	{
		return GetTableCaption("public_ethprism_healthpost_level_rhis_performance_diagnostic");
	}
	if($table=="public.ethprism_national_prism_woreda_level_diagnostic")
	{
		return GetTableCaption("public_ethprism_national_prism_woreda_level_diagnostic");
	}
	if($table=="public.ethprism_organizational_and_behavioral_assessment")
	{
		return GetTableCaption("public_ethprism_organizational_and_behavioral_assessment");
	}
	if($table=="public.hispmd_prism_settings")
	{
		return GetTableCaption("public_hispmd_prism_settings");
	}
	if($table=="PRISM Dashboard")
	{
		return GetTableCaption("PRISM_Dashboard");
	}
	if($table=="hispmd_users_audit")
	{
		return GetTableCaption("hispmd_users_audit");
	}
	if($table=="hispmd_system_settings")
	{
		return GetTableCaption("hispmd_system_settings");
	}
	if($table=="hispmd_prism_data_forms")
	{
		return GetTableCaption("hispmd_prism_data_forms");
	}
	if($table=="public.moh_administration_units")
	{
		return GetTableCaption("public_moh_administration_units");
	}
	if($table=="public.moh_assessments")
	{
		return GetTableCaption("public_moh_assessments");
	}
	if($table=="public.moh_data_sources")
	{
		return GetTableCaption("public_moh_data_sources");
	}
	if($table=="public.moh_facility_types")
	{
		return GetTableCaption("public_moh_facility_types");
	}
	if($table=="public.moh_health_facilities")
	{
		return GetTableCaption("public_moh_health_facilities");
	}
	if($table=="public.moh_indicator_data")
	{
		return GetTableCaption("public_moh_indicator_data");
	}
	if($table=="public.moh_indicators")
	{
		return GetTableCaption("public_moh_indicators");
	}
	if($table=="public.moh_regions")
	{
		return GetTableCaption("public_moh_regions");
	}
	if($table=="public.moh_indicator_groups")
	{
		return GetTableCaption("public_moh_indicator_groups");
	}
	if($table=="public.timetracker")
	{
		return GetTableCaption("public_timetracker");
	}
	if($table=="public.mfr_facilities_register")
	{
		return GetTableCaption("public_mfr_facilities_register");
	}
	if($table=="admin_rights")
	{
		return GetTableCaption("admin_rights");
	}
	if($table=="admin_members")
	{
		return GetTableCaption("admin_members");
	}
	if($table=="admin_users")
	{
		return GetTableCaption("admin_users");
	}
	if($table=="System_Users_Activity_Dashboard")
	{
		return GetTableCaption("System_Users_Activity_Dashboard");
	}
	if($table=="HISPMD_Web_Reports_and_Charts_Builder")
	{
		return GetTableCaption("HISPMD_Web_Reports_and_Charts_Builder");
	}
	if($table=="public.mfr_facilities_register_report")
	{
		return GetTableCaption("public_mfr_facilities_register_report");
	}
	if($table=="public.hispmd_organisations")
	{
		return GetTableCaption("public_hispmd_organisations");
	}
	if($table=="public.hispmd_uggroups")
	{
		return GetTableCaption("public_hispmd_uggroups");
	}
	if($table=="public.mfr_facilities_register_chart")
	{
		return GetTableCaption("public_mfr_facilities_register_chart");
	}
	if($table=="public.moh_data_scope")
	{
		return GetTableCaption("public_moh_data_scope");
	}
	if($table=="HISPMD_MOH_Indicators_Dashboard")
	{
		return GetTableCaption("HISPMD_MOH_Indicators_Dashboard");
	}
	if($table=="MOH_Indicators_Data_Report")
	{
		return GetTableCaption("MOH_Indicators_Data_Report");
	}
	if($table=="MOH_Indicators_data_Chart")
	{
		return GetTableCaption("MOH_Indicators_data_Chart");
	}
	if($table=="DHIS2_OrgUnits_Distribution")
	{
		return GetTableCaption("DHIS2_OrgUnits_Distribution");
	}
	if($table=="public.chat_history")
	{
		return GetTableCaption("public_chat_history");
	}
	if($table=="kbarticles")
	{
		return GetTableCaption("kbarticles");
	}
	if($table=="kbcategories")
	{
		return GetTableCaption("kbcategories");
	}
	if($table=="kbcomments")
	{
		return GetTableCaption("kbcomments");
	}
	if($table=="kbusers")
	{
		return GetTableCaption("kbusers");
	}
	if($table=="main")
	{
		return GetTableCaption("main");
	}
	if($table=="faicons")
	{
		return GetTableCaption("faicons");
	}
	if($table=="admin_comments")
	{
		return GetTableCaption("admin_comments");
	}
	if($table=="public.hispmd_noti_view")
	{
		return GetTableCaption("public_hispmd_noti_view");
	}
	if($table=="public.faicons")
	{
		return GetTableCaption("public_faicons");
	}
	if($table=="MoH_Indicators_Data_Values_Chart")
	{
		return GetTableCaption("MoH_Indicators_Data_Values_Chart");
	}
	if($table=="Indicators_Dashboard")
	{
		return GetTableCaption("Indicators_Dashboard");
	}
	if($table=="hispmd_indicators_data")
	{
		return GetTableCaption("hispmd_indicators_data");
	}
	if($table=="public.moh_ir_datasource")
	{
		return GetTableCaption("public_moh_ir_datasource");
	}
	return $table;
}


function getChartTablesList()
{
	return WRGetQueryTables('webcharts');
}

function getReportTablesList()
{
	return WRGetQueryTables('webreports');
}

function WRGetQueryTables($type)
{
	$root=&$_SESSION[$type];
	$ret=array($root['tables'][0]);
	if (strlen(@$root['table_relations']["relations"]) && strpos($root['table_relations']['join_tables'], ",") !== false)
	{
		$joined = explode(",", $root['table_relations']['join_tables']);
		foreach($joined as $t)
		{
			if(strlen($t))
				$ret[]=$t;
		}
	}
	return $ret;
}

function GetDefaultViewFormat($type)
{
	if(IsBinaryType($type))
		return FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return FORMAT_DATE_SHORT;
	else
		return FORMAT_NONE;
}

function GetDefaultEditFormat($type)
{
	if(IsBinaryType($type))
		return EDIT_FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return EDIT_FORMAT_DATE;
	else
		return EDIT_FORMAT_TEXT_FIELD;
}

function GetGenericViewFormat($table,$field)
{
	return GetDefaultViewFormat(WRGetFieldType($table.".".$field));
}


function GetGenericEditFormat($table,$field)
{
	return GetDefaultEditFormat(WRGetFieldType($table.".".$field));
}

function GenericStrWhereAdv($strTable, $strField, $SearchFor, $strSearchOption, $SearchFor2, $etype)
{
	global $dal;
	$sfield=$strField;
	$stable="";
	if(is_wr_db())
	{
		WRSplitFieldName($strField,$stable,$sfield);
		$type=WRGetFieldType($strField);
	}
	else
		$type=WRCustomGetFieldType($strTable,$strField);

	if(GetDatabaseType() != nDATABASE_MSSQLServer)
		$ismssql=false;
	else
		$ismssql=true;

		$btexttype=IsTextType($type);
	if(GetDatabaseType() == nDATABASE_MySQL)
		$btexttype=false;

	if(IsBinaryType($type))
		return "";

	if(GetDatabaseType() == nDATABASE_MSSQLServer)
	{
		if($btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with ..." )
			return "";
	}
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)."='')";
		elseif ($ismssql && $btexttype)
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)." LIKE '')";
		else
			return WRAddFieldWrappers($strField)." is null";
	}
	if(GetDatabaseType() == nDATABASE_PostgreSQL)
		$like="ilike";
	else
		$like="like";
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($strTable);
		if($pSet->multiSelect($sfield))
			$SearchFor=splitLookupValues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchItem)
		{
			$value = $searchItem;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=WRmake_db_value($sfield,$value,$strTable);
					if(!($value=="null" || $value=="Null"))
						$ret.=WRAddFieldWrappers($strField).'='.$value;
				}
				else
				{
					$connection = getWebreportConnection();
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					$ret.=WRAddFieldWrappers($strField)." = ".$connection->prepareString($value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value.",%");
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
		if(NeedQuotes($type))
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>'0' and ".WRAddFieldWrappers($strField)."<>'' and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."='0' or ".WRAddFieldWrappers($strField)."='' or ".WRAddFieldWrappers($strField)." is null)";
		}
		else
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>0 and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."=0 or ".WRAddFieldWrappers($strField)." is null)";
		}
	}
	$value1=WRmake_db_value($sfield,$SearchFor,$strTable);
	$value2=false;
	if($strSearchOption=="Between")
		$value2=WRmake_db_value($sfield,$SearchFor2,$strTable);
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with ..." && ($value1==="null" || $value2==="null" ))
		return "";

	$connection = getWebreportConnection();
	if(IsCharType($type) && !$btexttype)
	{
		$value1=$connection->upper($value1);
		$value2=$connection->upper($value2);
		$strField=$connection->upper(WRAddFieldWrappers($strField));
	}
	elseif ($ismssql && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField="convert(varchar,".WRAddFieldWrappers($strField).")";
	elseif(GetDatabaseType() == nDATABASE_PostgreSQL && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField = "CAST(".WRAddFieldWrappers($strField)." AS TEXT)";
	else
		$strField=WRAddFieldWrappers($strField);
	$ret="";
	if($strSearchOption=="Contains")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString("%".$SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals")
	{
		return $strField."=".$value1;
	}
	else if($strSearchOption=="Starts with ...")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString($SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString($SearchFor."%");
	}
	else if($strSearchOption=="More than ...") return $strField.">".$value1;
	else if($strSearchOption=="Less than ...") return $strField."<".$value1;
	else if($strSearchOption=="Equal or more than ...") return $strField.">=".$value1;
	else if($strSearchOption=="Equal or less than ...") return $strField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$value1;
		$ret.=" and ".$strField."<=".$value2;
		return $ret;
	}
	return "";
}



function GetAdvSearchOptions($table,$field)
{
	$format=GetGenericEditFormat($table,$field);
	$options=array();
	if($format==EDIT_FORMAT_DATE)
	{
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
		$options[]=array("type"=>"More than ...","label"=>mlang_message("MORE_THAN"));
		$options[]=array("type"=>"Less than ...","label"=>mlang_message("LESS_THAN"));
		$options[]=array("type"=>"Equal or more than ...","label"=>mlang_message("EQUAL_OR_MORE"));
		$options[]=array("type"=>"Equal or less than ...","label"=>mlang_message("EQUAL_OR_LESS"));
		$options[]=array("type"=>"Between","label"=>mlang_message("BETWEEN"));
		$options[]=array("type"=>"Empty","label"=>mlang_message("EMPTY"));
	}
	elseif($format==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($table, PAGE_REPORT);
		if($pSet->multiSelect($field))
			$options[]=array("type"=>"Contains","label"=>mlang_message("CONTAINS"));
		else
			$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
	}
	elseif($format==EDIT_FORMAT_TEXT_FIELD
	|| $format==EDIT_FORMAT_TEXT_AREA
	|| $format==EDIT_FORMAT_PASSWORD
	|| $format==EDIT_FORMAT_HIDDEN
	|| $format==EDIT_FORMAT_READONLY	)
	{
		$options[]=array("type"=>"Contains","label"=>mlang_message("CONTAINS"));
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
		$options[]=array("type"=>"Starts with ...","label"=>mlang_message("STARTS_WITH"));
		$options[]=array("type"=>"More than ...","label"=>mlang_message("MORE_THAN"));
		$options[]=array("type"=>"Less than ...","label"=>mlang_message("LESS_THAN"));
		$options[]=array("type"=>"Equal or more than ...","label"=>mlang_message("EQUAL_OR_MORE"));
		$options[]=array("type"=>"Equal or less than ...","label"=>mlang_message("EQUAL_OR_LESS"));
		$options[]=array("type"=>"Between","label"=>mlang_message("BETWEEN"));
		$options[]=array("type"=>"Empty","label"=>mlang_message("EMPTY"));
	}
	else
	{
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
}
	return $options;
}

function CalcSearchParam( $sessPrefix )
{
	$sWhere = "";

	if(@$_SESSION[$sessPrefix."_search"]==2)
//	 advanced search
	{
		foreach(@$_SESSION[$sessPrefix."_asearchfor"] as $f => $sfor)
		{
			$strSearchFor=trim($sfor);
			$strSearchFor2="";
			$type=@$_SESSION[$sessPrefix."_asearchfortype"][$f];
			if(array_key_exists($f,@$_SESSION[$sessPrefix."_asearchfor2"]))
				$strSearchFor2=trim(@$_SESSION[$sessPrefix."_asearchfor2"][$f]);
			if($strSearchFor!="" || true)
			{
				if (!$sWhere)
				{
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
						$sWhere="1=1";
					else
						$sWhere="1=0";
				}
				$strSearchOption=trim($_SESSION[$sessPrefix."_asearchopt"][$f]);
				$where = GenericStrWhereAdv(@$_SESSION[$sessPrefix."_asearchtable"][$f], $f, $strSearchFor, $strSearchOption, $strSearchFor2,$type);
				if($where)
				{
					if($_SESSION[$sessPrefix."_asearchnot"][$f])
						$where="not (".$where.")";
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
	   					$sWhere .= " and ".$where;
					else
	   					$sWhere .= " or ".$where;
				}
			}
		}
	}
	return $sWhere;
}

function WRViewFormat($field,$table="")
{
	$pSet = new ProjectSettings($table);
	return $pSet->getViewFormat($field);
}

function get_chart_series_fields(&$arr_data_series,&$arr_label_series)
{
	if(is_groupby_chart())
		return get_chart_groupbyseries_fields($arr_data_series,$arr_label_series);
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();

	$arr_join_tables = getChartTablesList();

	for ($i=0; $i < count($arr_join_tables); $i++ )
	{
		$t = $arr_join_tables[$i];
		$arr_fields = GetNumberFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_data_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_data_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
		$arr_fields = WRGetNBFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_label_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_label_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function get_chart_groupbyseries_fields(&$arr_data_series,&$arr_label_series)
{
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++)
	{
		$arr = &$root['group_by_condition'][$i];
		$field=$arr["field_opt"];
		$strLabel=WRChartLabel($field);
		$isLabel=false;
		$isData=false;
		if($arr["group_by_value"]!="-1" && $arr["group_by_value"]!="GROUP BY")
		{
			$field=$arr["group_by_value"]."(".$field.")";
			$isData=true;
			$isLabel=true;
		}
		else if($arr["group_by_value"]=="GROUP BY")
		{
			$type = WRGetFieldType($field);
			if(IsNumberType($type))
				$isData=true;
			$isLabel=true;
		}

		$ret = array("field"=>$field,"label"=>$strLabel);
		if($isLabel)
			$arr_label_series[]=$ret;
		if($isData)
			$arr_data_series[]=$ret;
	}
	if(!($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function WRProcessLargeText($text,$field,$recid,$chars,$mode,$strLabel, $isProgectTable = false)
{
	if(!$chars)
		return $text;
	if($mode!=MODE_LIST && $mode!=MODE_PRINT || strlen($text)<$chars+10)
		return $text;

	if($isProgectTable)
		$shortening = GetShorteningForLargeText($text, $cNumberOfChars);
	else
		$shortening = substr($text,0,$chars);

	if($mode==MODE_PRINT)
	{
		return $shortening."...";
	}
//	List page
	$id="textbox_".GoodFieldName($field).$recid;
	$textbox="<span style=\"display:none\" id=\"".$id."\">".$text."</span>";
	$link="<a href=# onclick=\"

	var offset = $(this).offset();
	offset.left -= $(window).scrollLeft();
	offset.top -= $(window).scrollTop();
	$('#".$id."').clone().dialog(
	{
title: '".jsreplace($strLabel)."',
		draggable: true,
		resizable: true,
		bgiframe: true,
		modal: false,
		minheight:400,
		position:[offset.left-50,offset.top-50]
	}
	);
	return false;
	\">&nbsp;".mlang_message("MORE")."...</a>";
	return $shortening.$link.$textbox;
}

function JumpTo()
{
	return "$(\"#jumpto\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var jumpto = $(\"#jumpto\"), menujump = $(\"#menujump\"), framejump = $(\"#framejump\");
		if (jumpto.top + jumpto.height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			if(menujump.height() - jumpto.offset().top + $(window).scrollTop()>0)
			{
				menujump.css(\"top\", $(window).scrollTop()+\"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", $(window).scrollTop()+\"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
			else
			{
				menujump.css(\"top\", ($(this).offset().top - menujump.height()) + \"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", ($(this).offset().top - framejump.height()) + \"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
		} else {
			menujump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
			framejump.css(\"width\", menujump.width());
			framejump.css(\"height\", menujump.height());
			framejump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
		}
		framejump.show();
		menujump.show();
	});

	$(\"#jumpto\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(\"#menujump td\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});

	$(\"#menujump td\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(document.body).click(function(){
		$(\"#menujump\").hide();
		$(\"#framejump\").hide();
	});	";
}

function alertDialog()
{
return	"$(\"#alert\").dialog({
		open: function(event,ui){
			var alertParent = $(\"#alert\").parent(\".ui-dialog\"), aframe = $(\"#aframe\");
			w = alertParent.width();
			h = alertParent.height();
			t = alertParent.offset().top;
			l = alertParent.offset().left;
			aframe.css(\"width\",w+6);
			aframe.css(\"height\",h+6);
			aframe.css(\"top\",t + \"px\");
			aframe.css(\"left\",l + \"px\");
			aframe.show();
		},
		beforeclose: function(event,ui){
			$(\"#aframe\").hide();
		},
		title: \"Message\",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog(\"close\");
			}
		}
	});";
}

function DBGetTableKeys($table)
{
	global $dal,$wr_is_standalone;
	if(!$wr_is_standalone)
	{
		if($dal->Table($table))
			return $dal->GetDBTableKeys($table);
		return array();
	}
	else
		return array();
}

function colorPickerMouse()
{
return "

function GiveDec(Hex)
{
   if(Hex == \"A\")
	  Value = 10;
   else
   if(Hex == \"B\")
	  Value = 11;
   else
   if(Hex == \"C\")
	  Value = 12;
   else
   if(Hex == \"D\")
	  Value = 13;
   else
   if(Hex == \"E\")
	  Value = 14;
   else
   if(Hex == \"F\")
	  Value = 15;
   else
	  Value = eval(Hex);

   return Value;
}

function GiveHex(Dec)
{
   if(Dec == 10)
	  Value = \"A\";
   else
   if(Dec == 11)
	  Value = \"B\";
   else
   if(Dec == 12)
	  Value = \"C\";
   else
   if(Dec == 13)
	  Value = \"D\";
   else
   if(Dec == 14)
	  Value = \"E\";
   else
   if(Dec == 15)
	  Value = \"F\";
   else
	  Value = \"\" + Dec;

   return Value;
}

function HexToDec(value)
{
   Input = value.toUpperCase();

   a = GiveDec(Input.substring(0, 1));
   b = GiveDec(Input.substring(1, 2));
   c = GiveDec(Input.substring(2, 3));
   d = GiveDec(Input.substring(3, 4));
   e = GiveDec(Input.substring(4, 5));
   f = GiveDec(Input.substring(5, 6));

   x = (a * 16) + b; // Red
   y = (c * 16) + d; // Green
   z = (e * 16) + f; // Blue

	return [x,y,z]
}

function DecToHex(Red, Green, Blue)
{
   a = GiveHex(Math.floor(Red / 16));
   b = GiveHex(Red % 16);
   c = GiveHex(Math.floor(Green / 16));
   d = GiveHex(Green % 16);
   e = GiveHex(Math.floor(Blue / 16));
   f = GiveHex(Blue % 16);

   z = a + b + c + d + e + f;

	return z;
}

function rgbToHex(str)
{
	if(str==undefined)
		return \"\";
	if(str.substr(0,1)==\"#\")
		return str.substr(1);
	str=str.substring(4);
	str=str.replace(\")\",\"\");
	arr = new Array();
	arr=str.split(\",\");
	return DecToHex(arr[0],arr[1],arr[2]);
}

	$(\".ColorPickerDivSample\").css(\"cursor\",\"pointer\");

	$(\"#colorPickerVtd td\").each(function(){
        $(this).css(\"border\",\"1px solid \" + $(this).css(\"backgroundColor\"));
    })
		.css(\"cursor\",\"pointer\");

	$(\".selector,.ColorPickerDivSample\").click(function(){
	    click_color_event(this);
	});

	$(\"#colorPickerVtd\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		closetimerpicker = window.setTimeout(function (){
				$('#colorPickerVtd').hide();
				$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(\"div.ColorPickerDivSample.active\").attr(\"color1\"));
			}, timeoutpicker);
	});

	$(\"#colorPickerVtd td\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css(\"border\", \"1px dotted #fff\");
		$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(this).css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").mouseout(function(){
		$(this).css(\"border\", \"1px solid \"+$(\"div.ColorPickerDivSample.active\").css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").click(function(){
		if ( this.id == \"nocolor\" ) {
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", \"\");
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", \"\");
		} else {
			bgcol=$(this).css(\"backgroundColor\");
			if(bgcol.substring(0,1)!=\"#\")
				bgcol=rgbToHex(bgcol);
			else
				bgcol=bgcol.substring(1);
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", bgcol);
			arr = HexToDec(bgcol);
			red = parseInt( arr[0] * 0.85 );
			green = parseInt( arr[1] * 0.85 );
			blue = parseInt( arr[2] * 0.85 );
			hex = DecToHex( red, green, blue );
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", hex);
		}
		$(\"#colorPickerVtd\").hide();
	});

	function click_color_event(th)
	{
		if($(th).css(\"cursor\")==\"pointer\")
	    {
			if(closetimerpicker) {
				window.clearTimeout(closetimerpicker);
				closetimerpicker = null;
		}
		if($(th).attr(\"class\")==\"selector\")
			bc=$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		else
			bc=$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").css(\"background-color\");

		var activeDiv = $(\"div.ColorPickerDivSample.active\"), colorPicker = $(\"#colorPickerVtd\");
		if(activeDiv.length){
			activeDiv.css(\"background-color\", activeDiv.attr(\"color1\"));
			activeDiv.removeClass(\"active\");
		}

		if($(th).attr(\"class\")==\"selector\")
			$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
		else
			$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").addClass(\"active\");


		colorPicker.css(\"top\", $(th).offset().top + \"px\");
		colorPicker.css(\"left\", $(th).offset().left + $(th).width() + 3 + \"px\");
		colorPicker.show();
		$(\"td\", colorPicker).each(function(){
			$(this).css(\"border\", \"1px solid \"+$(this).css(\"background-color\"));
			if(bc==$(this).css(\"background-color\"))
				$(this).css(\"border\", \"1px dotted #fff\");
		});
	    }
	}

	";
}

function MoveTdTotal()
{
return "
function total_td_move(th,direct)
{
	tr=$(th).parent().parent().parent();

	if(direct==\"up\")
		tr2=$(tr).prev();
	else
		tr2=$(tr).next();
	// || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).type=='checkbox'
	if(!$(tr2).find(\"td\").eq(3).find(\"input\").get(0) || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).disabled)
		tr2=\"\";
	if(tr2!=\"\")
	{
		if(direct==\"up\")
			$(tr).insertBefore(tr2);
		else
			$(tr).insertAfter(tr2);
	}
}";
}

/**
 * @param String str
 * @param Connection connection
 * @return String
 */
function PrepareString4DB($str, $connection)
{
	if($connection->dbType != nDATABASE_Oracle)
	{
		return $connection->prepareString($str);
	}

	if( strlen($str) < 4000 )
		return $connection->prepareString($str);

	$chunklen = 3900;
	$chunks = floor(strlen($str) / $chunklen);
	if( strlen($str) % $chunklen != 0 )
		$chunks++;

	$out = "";
	for($i = 0; $i < $chunks; $i++)
	{
		if(strlen($out))
			$out.="||";

		$out.="to_clob(";
		$out.= $connection->prepareString( substr($str, $i*$chunklen, $chunklen) );
		$out.=")";
	}
	return $out;
}

function WRmake_db_value($field,$value,$table="")
{
	$ret=WRprepare_for_db($field,$value,$table);

	if($ret===false)
		return $ret;
	return WRadd_db_quotes($field,$ret,$table);
}

function WRadd_db_quotes($field,$value,$table="")
{
	$connection = getWebreportConnection();

	$type = WRGetFieldType($table.".".$field);
	if(IsBinaryType($type))
	{
		return $connection->addSlashesBinary($value);
	}
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=$connection->prepareString($value);
		else
			$value=$connection->addDateQuotes($value);
	}
	else
	{
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
	}
	return $value;
}

function WRprepare_for_db($field,$value,$table="")
{
	$type=WRGetFieldType($table.".".$field);
	if(is_array($value))
		$value=combinevalues($value);
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "";
	if(IsDateFieldType($type))
		$value=localdatetime2db($value);
	return $value;
}

function DBGetTablesList()
{
	global $dal;
	$tables = WRGetTablesList();
	$ret=array();

	foreach($tables as $value)
	{
		$val_lower=wr_getTableName(strtolower($value));
		if(substr($val_lower,-6)!="_audit" && substr($val_lower,-8)!="_locking" && substr($val_lower,-9)!="_ugrights" && substr($val_lower,-9)!="_uggroups"
		&& substr($val_lower,-10)!="_ugmembers" && $val_lower!="admin_rights" && $val_lower!="admin_users"
		&& $val_lower!="admin_members" && $val_lower!="webreports" && $val_lower!="webreport_style"
		&& $val_lower!="webreport_admin" && $val_lower!="webreport_settings" && $val_lower!="webreport_sql")
			$ret[]=$value;
	}
	return $ret;
}

function WRGetTableListAdmin($db_type)
{
	$connection = getWebreportConnection();// #9875

	$ret = array();
	$sql = "select ".$connection->addFieldWrappers("tablename").",".$connection->addFieldWrappers("group_name")
		." from ".$connection->addTableWrappers("webreport_admin")." where ".$connection->addFieldWrappers("db_type")."='".$db_type."'" ;

	$qResult = $connection->query( $sql );
	while( $data = $qResult->fetchNumeric() )
	{
		$ret[] = array("tablename" => $data[0], "group" => $data[1]);
	}
	return $ret;
}

function GetTablesListReport()
{
	$arr=array();
	$securityFlag = true;
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ai_data_assistant");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ai_data_assistant";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ai_data_assistant";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.dataquality");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.dataquality";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.dataquality";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.datause");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.datause";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.datause";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.dhis2_periods");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.dhis2_periods";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.dhis2_periods";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.digitalhealth");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.digitalhealth";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.digitalhealth";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.digitalhealthapps");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.digitalhealthapps";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.digitalhealthapps";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.financialresources");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.financialresources";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.financialresources";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.healthfacilities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.healthfacilities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.healthfacilities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.healthunits");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.healthunits";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.healthunits";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hisgovernance");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hisgovernance";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hisgovernance";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispartners");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispartners";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispartners";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_dashboard_reports");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_dashboard_reports";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_dashboard_reports";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_operational_status");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_operational_status";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_operational_status";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_region");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_region";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_region";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_woreda");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_woreda";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_woreda";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_zone");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_zone";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_zone";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.publications");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.publications";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.publications";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.regions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.regions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.regions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.research");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.research";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.research";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.workforce");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.workforce";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.workforce";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispmdusers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispmdusers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispmdusers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_additional_organizational_and_behavioral_assessment");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_additional_organizational_and_behavioral_assessment";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_additional_organizational_and_behavioral_assessment";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_facility_level_rhis_performance_diagnostic");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_facility_level_rhis_performance_diagnostic";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_facility_level_rhis_performance_diagnostic";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_facility_office_checklist");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_facility_office_checklist";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_facility_office_checklist";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_healthpost_level_rhis_performance_diagnostic");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_healthpost_level_rhis_performance_diagnostic";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_healthpost_level_rhis_performance_diagnostic";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_national_prism_woreda_level_diagnostic");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_national_prism_woreda_level_diagnostic";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_national_prism_woreda_level_diagnostic";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.ethprism_organizational_and_behavioral_assessment");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.ethprism_organizational_and_behavioral_assessment";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ethprism_organizational_and_behavioral_assessment";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispmd_prism_settings");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispmd_prism_settings";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispmd_prism_settings";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("hispmd_users_audit");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="hispmd_users_audit";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hispmd_users_audit";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("hispmd_system_settings");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="hispmd_system_settings";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hispmd_system_settings";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("hispmd_prism_data_forms");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="hispmd_prism_data_forms";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hispmd_prism_data_forms";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_administration_units");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_administration_units";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_administration_units";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_assessments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_assessments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_assessments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_data_sources");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_data_sources";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_data_sources";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_facility_types");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_facility_types";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_facility_types";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_health_facilities");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_health_facilities";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_health_facilities";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_indicator_data");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_indicator_data";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_indicator_data";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_indicators");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_indicators";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_indicators";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_regions");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_regions";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_regions";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_indicator_groups");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_indicator_groups";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_indicator_groups";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.timetracker");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.timetracker";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.timetracker";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.mfr_facilities_register");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.mfr_facilities_register";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.mfr_facilities_register";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_rights");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_rights";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_rights";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_members");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_members";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_members";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_users");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_users";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_users";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispmd_organisations");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispmd_organisations";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispmd_organisations";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispmd_uggroups");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispmd_uggroups";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispmd_uggroups";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_data_scope");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_data_scope";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_data_scope";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.chat_history");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.chat_history";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.chat_history";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbarticles");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbarticles";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbarticles";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbcategories");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbcategories";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbcategories";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbcomments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbcomments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbcomments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("kbusers");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="kbusers";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="kbusers";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("main");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="main";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="main";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("faicons");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="faicons";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="faicons";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("admin_comments");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="admin_comments";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="admin_comments";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.hispmd_noti_view");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.hispmd_noti_view";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.hispmd_noti_view";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.faicons");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.faicons";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.faicons";
	}
	if( Security::permissionsAvailable() ) {
		$strPerm = GetUserPermissions("public.moh_ir_datasource");
		$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	}
	if($securityFlag)
	{
		$value="public.moh_ir_datasource";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.moh_ir_datasource";
	}
	return $arr;
}

function GetTablesListCustom()
{
	$connection = getWebreportConnection();// #9875
	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("sqlname" => $data["sqlname"], "isStorProc" => IsStoredProcedure($data["sqlcontent"]));
	}
	return $arr;
}

function DBGetTablesListByGroup($db="db")
{
	if($db=="db")
		$tables = DBGetTablesList();
	elseif($db=="project")
		$tables = GetTablesListReport();
	else
		$tables = GetTablesListCustom();
	$ret=array();
	if($db=="db")
		$tables_admin = WRGetTableListAdmin("db");
	elseif($db=="project")
		$tables_admin = WRGetTableListAdmin("project");
	else
		$tables_admin = WRGetTableListAdmin("custom");

	$userGroups = GetUserGroup();

//	all tables
	foreach($tables as $table_name)
	{
		if($db=="custom")
			$tablename=$table_name["sqlname"];
		else
			$tablename=$table_name;
//	permissions
		foreach($tables_admin as $tablerights)
		{
			if($tablerights["tablename"]!=$tablename)
				continue;
//	user groups
			$found=false;
			if(!($userGroups))
			{
//	no groups at all
				$found=true;
			}
			elseif($tablerights["group"]=="")
			{
//	initial table initialization
				$found=true;
			}
			else
			{
				foreach($userGroups as $group)
				{
					if((string)$group == $tablerights["group"])
					{
						$found=true;
						break;
					}
				}
			}
			if($found)
			{
				$ret[]=$table_name;
				break;
			}
		}
	}
	return $ret;
}

function isWRAdmin()
{
	if( !Security::permissionsAvailable() ) {
		return @$_SESSION["WRAdmin"];
	}
	$sUserGroup=@$_SESSION["GroupID"];
	if( !Security::dynamicPermissions() ) {
	} else {
		return IsAdmin();
	}
}

function sortUserGroup($a,$b)
{
	if($a[1]<$b[1])
		return -1;
	else
		return 1;
}

function Convert_Old_Chart($arr)
{
	switch($arr["chart_type"]["type"])
	{
		case "3d_column":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "3d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "2d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_column":
			$arr["chart_type"]["type"]="2d_column";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "line":
			$arr["chart_type"]["type"]="line";
			if(!isset($arr["appearance"]["linestyle"]))
				$arr["appearance"]["linestyle"]=0;
			break;
		case "spline":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=1;
			break;
		case "step_line":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=2;
			break;
		case "area_stacked":
			$arr["chart_type"]["type"]="area";
			$arr["appearance"]["isstacked"]="true";
			break;
	}
	if(!isset($arr['appearance']["cscroll"]))
	{
		$arr['appearance']["cscroll"]="true";
		$arr['appearance']["autoupdate"]="false";
		$arr['appearance']["maxbarscroll"]="10";
		$arr['appearance']["update_interval"]="5";
	}

	for($i=0;$i<4;$i++)
	{
		if(isset($arr['appearance']['color'.($i+1).'1']))
			$arr['parameters'][$i]['series_color']=$arr['appearance']['color'.($i+1).'1'];
	}
	return $arr;
}

function WRGetListCustomSQL()
{
	$connection = getWebreportConnection();// #9875

	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("id" => $data["id"], "sqlname" => $data["sqlname"], "sqlcontent" => $data["sqlcontent"]);
	}
	return $arr;
}

function WRgetCurrentCustomSQL($id)
{
	if( !$id )
		return array(0, "", "");

	$connection = getWebreportConnection();	// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("id")."=".$id;
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function getCustomSQLbyName($sqlname)
{
	$connection = getWebreportConnection();// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("sqlname")."='".$sqlname."'";
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function update_report_totals()
{
	$root=&$_SESSION["webreports"];
//	ensure all fields in reports are listed in the tables
	$tables=getReportTablesList();
	if(is_wr_custom())
		$fields = WRGetFieldsList('');
	$arr_unset=array();
	foreach($root["totals"] as $idx=>$fld)
	{
		if(array_search($fld["table"],$tables)!==false || is_null($fld["table"]) && is_wr_custom())
		{
			if(!is_wr_custom())
				$fields = WRGetFieldsList($fld["table"]);
			if(array_search($fld["name"], $fields)!==false)
				continue;
		}
//	remove $total if found
		$arr_unset[]=$idx;
	}
	foreach($arr_unset as $idx=>$fld)
	{
		unset($root["totals"][$fld]);
	}

//	ensure all fields appear in the totals
	$all_fields=array();
	foreach($tables as $t)
	{
		$fields=WRGetFieldsList($t);
		foreach($fields as $f)
		{
			if(is_wr_db())
				$all_fields[]=$t.".".$f;
			else
				$all_fields[]=$f;
		}
	}

//	ensure all series  fields appear in the totals
	foreach($all_fields as $fieldItem)
	{
		$f = $fieldItem;
		$table="";
		$fld="";
		if(is_wr_db())
			WRSplitFieldName($f,$table,$fld);
		else
		{
			$table=$tables[0];
			$fld=$f;
			$f=$table."_".$f;
		}
		if(array_key_exists(GoodFieldName($f),$root["totals"]))
			continue;
		$pSet = new ProjectSettings($table, PAGE_LIST);
        $root['totals'][GoodFieldName($f)] = array();
        $root['totals'][GoodFieldName($f)]["name"] = $fld;
        $root['totals'][GoodFieldName($f)]["table"] = $table;
		$root['totals'][GoodFieldName($f)]["label"] = $pSet->label($fld);
        $root['totals'][GoodFieldName($f)]["show"] = "true";
        $root['totals'][GoodFieldName($f)]["min"] = "false";
        $root['totals'][GoodFieldName($f)]["max"] = "false";
        $root['totals'][GoodFieldName($f)]["sum"] = "false";
        $root['totals'][GoodFieldName($f)]["avg"] = "false";
		$root['totals'][GoodFieldName($f)]["curr"] = "false";
        $root['totals'][GoodFieldName($f)]["search"] = "";
        $root['totals'][GoodFieldName($f)]["view_format"] = GetGenericViewFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["edit_format"] = GetGenericEditFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["display_field"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["linkfield"] = $pSet->getLinkField($fld);
        $root['totals'][GoodFieldName($f)]["show_thumbnail"] = $pSet->showThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["need_encode"] = $pSet->NeedEncode($fld);
        $root['totals'][GoodFieldName($f)]["thumbnail"] = $pSet->getStrThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgwidth"] = $pSet->getImageWidth($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgheight"] = $pSet->getImageHeight($fld);
        $root['totals'][GoodFieldName($f)]["hlprefix"] = $pSet->getLinkPrefix($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_filename"] = $pSet->getFilenameField($fld);
        $root['totals'][GoodFieldName($f)]["lookupobj_lookuptype"] = $pSet->getLookupType($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_customdispaly"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_table"] = $pSet->getLookupTable($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_where"] = prepareLookupWhere( $fld, $pSet );
	}
	$_SESSION["webreports"]=$root;
}

function Reload_Report($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webreports']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	if(postvalue("edit")=="style" && isset($_SESSION['webreports']))
		return true;
	$arr=getReportArray($name);
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webreports'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
}

function Reload_Chart($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webcharts']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	$arr=getChartArray($name);
	if(!$arr)
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webcharts'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
}

function wr_getTableName($name)
{
	$pos = strrpos($name,".");
	if($pos !== false)
		$name = substr($name, $pos+1);
	return $name;
}

/**
 * Get the conneciton object corresponding to the wizard werbreport tables
 * @return Connetion
 */
function getWebreportConnection()
{
	global $cman;
	return $cman->getForWebReports();
}

/**
 * @param xTempl xt
 * @param String prefix
 */
function SetWRLangVars($xt, $prefix)
{
	$xt->assign("lang_label", true);

	$var = GoodFieldName( mlang_getcurrentlang() )."_langattrs";
	$xt->assign($var, "selected");

	$is508 = isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");

	$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")
		."onchange=\"javascript: window.location='".GetTableLink($prefix)."?language='+this.options[this.selectedIndex].value\"");
}

/**
 * @param String tName
 * @param Array sortFields
 * @param ProjectSettings pSet
 * @param Boolean editmode
 * @return DsCommand
 */
function getProjectWRSubsetDataCommand( $tName, &$sortFields, $pSet, $editmode = false ) {
	$subsetDataCommand = new DsCommand();

	$subsetDataCommand->order = array();
	foreach ( $sortFields as $field ) {
		$subsetDataCommand->order[] = array( "column" => $field['name'], "dir" => $field['desc'] ? "DESC" : "ASC" );
	}

	$subsetDataCommand->filter = Security::SelectCondition( "S", $pSet );

	if ( !$editmode ) {
		/*$cipherer = new RunnerCipherer( $tName );

		$params = array();
		$params['tName'] = $tName;
		$params['cipherer'] = $cipherer;
		$params['searchFieldsArr'] = WRGetFieldsList( $tName );

		$searchClauseObj = new SearchClause( $params );
		$searchClauseObj->parseRequest();*/
		;

		$searchClauseObj = SearchClause::getSearchObject( $tName );
		$searchClauseObj->searchFieldsArr = WRGetFieldsList( $tName );

		$subsetDataCommand->filter = DataCondition::_And( array(
			$subsetDataCommand->filter,
			$searchClauseObj->getSearchDataCondition()
		));
	}

	return $subsetDataCommand;
}
?>