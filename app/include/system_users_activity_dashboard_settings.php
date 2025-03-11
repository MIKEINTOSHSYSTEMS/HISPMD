<?php
require_once(getabspath("classes/cipherer.php"));



$tdatasystem_users_activity_dashboard = array();
$tdatasystem_users_activity_dashboard[".ShortName"] = "system_users_activity_dashboard";

$tdatasystem_users_activity_dashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"System_Users_Activity_Dashboard\",\"System_Users_Audit_Logs\",\"System_Users_Time_Tracker\",\"Visitors_Activity_Analytics_Dashboard\"],\"search\":[\"search\"]}" );
$tdatasystem_users_activity_dashboard[".originalPagesByType"] = $tdatasystem_users_activity_dashboard[".pagesByType"];
$tdatasystem_users_activity_dashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"System_Users_Activity_Dashboard\",\"System_Users_Audit_Logs\",\"System_Users_Time_Tracker\",\"Visitors_Activity_Analytics_Dashboard\"],\"search\":[\"search\"]}" ) );
$tdatasystem_users_activity_dashboard[".originalPages"] = $tdatasystem_users_activity_dashboard[".pages"];
$tdatasystem_users_activity_dashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"System_Users_Activity_Dashboard\",\"search\":\"search\"}" );
$tdatasystem_users_activity_dashboard[".originalDefaultPages"] = $tdatasystem_users_activity_dashboard[".defaultPages"];


//	field labels
$fieldLabelssystem_users_activity_dashboard = array();
$pageTitlessystem_users_activity_dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssystem_users_activity_dashboard["English"] = array();
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_id"] = "Id";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_datetime"] = "Datetime";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_ip"] = "Ip";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_user"] = "User";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_table"] = "Table";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_action"] = "Action";
	$fieldLabelssystem_users_activity_dashboard["English"]["hispmd_users_audit_description"] = "Description";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_trackerid"] = "Trackerid";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_pagename"] = "Pagename";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_timeon"] = "Timeon";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_timeoff"] = "Timeoff";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_userid"] = "Userid";
	$fieldLabelssystem_users_activity_dashboard["English"]["public_timetracker_recordid"] = "Recordid";
}

/*
//	search fields
$tdatasystem_users_activity_dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"id" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"datetime" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_datetime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"ip" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_ip"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"user" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"table" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_table"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"action" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_action"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"hispmd_users_audit", "field"=>"description" );
$tdatasystem_users_activity_dashboard[".searchFields"]["hispmd_users_audit_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"trackerid" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_trackerid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"pagename" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_pagename"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"timeon" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_timeon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"timeoff" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_timeoff"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"userid" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_userid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.timetracker", "field"=>"recordid" );
$tdatasystem_users_activity_dashboard[".searchFields"]["public_timetracker_recordid"] = $dashField;

// all search fields
$tdatasystem_users_activity_dashboard[".allSearchFields"] = array();
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_id";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_datetime";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_ip";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_user";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_table";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_action";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "hispmd_users_audit_description";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_trackerid";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_pagename";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_timeon";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_timeoff";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_userid";
$tdatasystem_users_activity_dashboard[".allSearchFields"][] = "public_timetracker_recordid";

// good like search fields
$tdatasystem_users_activity_dashboard[".googleLikeFields"] = array();
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_datetime";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_ip";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_user";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_table";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_action";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "hispmd_users_audit_description";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "public_timetracker_trackerid";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "public_timetracker_pagename";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "public_timetracker_timeon";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "public_timetracker_timeoff";
$tdatasystem_users_activity_dashboard[".googleLikeFields"][] = "public_timetracker_userid";
*/

/*
$tdatasystem_users_activity_dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "hispmd_users_audit_grid", "table" => "hispmd_users_audit",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatasystem_users_activity_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_timetracker_search", "table" => "public.timetracker",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatasystem_users_activity_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_timetracker_grid", "table" => "public.timetracker",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatasystem_users_activity_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "hispmd_users_audit_search", "table" => "hispmd_users_audit",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatasystem_users_activity_dashboard[".dashElements"][] = $dbelement;
*/
$tdatasystem_users_activity_dashboard[".shortTableName"] = "system_users_activity_dashboard";
$tdatasystem_users_activity_dashboard[".entityType"] = 4;




$tdatasystem_users_activity_dashboard[".hasEvents"] = false;


$tdatasystem_users_activity_dashboard[".tableType"] = "dashboard";


	
$tdatasystem_users_activity_dashboard[".addPageEvents"] = false;

$tdatasystem_users_activity_dashboard[".isUseAjaxSuggest"] = true;

$tables_data["System_Users_Activity_Dashboard"]=&$tdatasystem_users_activity_dashboard;
$field_labels["System_Users_Activity_Dashboard"] = &$fieldLabelssystem_users_activity_dashboard;
$page_titles["System_Users_Activity_Dashboard"] = &$pageTitlessystem_users_activity_dashboard;

?>