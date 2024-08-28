<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamfr_aio_dashboard = array();
$tdatamfr_aio_dashboard[".ShortName"] = "mfr_aio_dashboard";

$tdatamfr_aio_dashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"MFR_AIO_Reporting_Dashboard\",\"MFR_Facilities_Registery_Dashboard\"]}" );
$tdatamfr_aio_dashboard[".originalPagesByType"] = $tdatamfr_aio_dashboard[".pagesByType"];
$tdatamfr_aio_dashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"MFR_AIO_Reporting_Dashboard\",\"MFR_Facilities_Registery_Dashboard\"]}" ) );
$tdatamfr_aio_dashboard[".originalPages"] = $tdatamfr_aio_dashboard[".pages"];
$tdatamfr_aio_dashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"MFR_AIO_Reporting_Dashboard\"}" );
$tdatamfr_aio_dashboard[".originalDefaultPages"] = $tdatamfr_aio_dashboard[".defaultPages"];


//	field labels
$fieldLabelsmfr_aio_dashboard = array();
$pageTitlesmfr_aio_dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_aio_dashboard["English"] = array();
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_dashboard_reports_type"] = "Type";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_dashboard_reports_name"] = "Name";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_dashboard_reports_count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_operational_status_operationalstatus"] = "Operationalstatus";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_operational_status_status"] = "Status";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_operational_status_count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_dashboard_reports_chart_type"] = "Type";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_dashboard_reports_chart_name"] = "Name";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_dashboard_reports_chart_count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_operational_status_chart_operationalstatus"] = "Operationalstatus";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_operational_status_chart_status"] = "Status";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_operational_status_chart_count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_region_region"] = "Region";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_region_lat"] = "Lat";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_region_lng"] = "Lng";
	$fieldLabelsmfr_aio_dashboard["English"]["public_mfr_region_count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_region_chart_region"] = "Region";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_region_chart_lat"] = "Lat";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_region_chart_lng"] = "Lng";
	$fieldLabelsmfr_aio_dashboard["English"]["mfr_region_chart_count"] = "Count";
}

/*
//	search fields
$tdatamfr_aio_dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_dashboard_reports", "field"=>"type" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_dashboard_reports_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_dashboard_reports", "field"=>"name" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_dashboard_reports_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_dashboard_reports", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_dashboard_reports_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_operational_status", "field"=>"operationalstatus" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_operational_status_operationalstatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_operational_status", "field"=>"status" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_operational_status_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_operational_status", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_operational_status_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_dashboard_reports_chart", "field"=>"type" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_dashboard_reports_chart_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_dashboard_reports_chart", "field"=>"name" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_dashboard_reports_chart_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_dashboard_reports_chart", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_dashboard_reports_chart_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_operational_status_chart", "field"=>"operationalstatus" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_operational_status_chart_operationalstatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_operational_status_chart", "field"=>"status" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_operational_status_chart_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_operational_status_chart", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_operational_status_chart_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_region", "field"=>"region" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_region_region"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_region", "field"=>"lat" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_region_lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_region", "field"=>"lng" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_region_lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"public.mfr_region", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["public_mfr_region_count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_region_chart", "field"=>"region" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_region_chart_region"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_region_chart", "field"=>"lat" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_region_chart_lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_region_chart", "field"=>"lng" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_region_chart_lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"mfr_region_chart", "field"=>"count" );
$tdatamfr_aio_dashboard[".searchFields"]["mfr_region_chart_count"] = $dashField;

// all search fields
$tdatamfr_aio_dashboard[".allSearchFields"] = array();
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_dashboard_reports_type";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_dashboard_reports_name";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_dashboard_reports_count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_operational_status_operationalstatus";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_operational_status_status";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_operational_status_count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_dashboard_reports_chart_type";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_dashboard_reports_chart_name";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_dashboard_reports_chart_count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_operational_status_chart_operationalstatus";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_operational_status_chart_status";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_operational_status_chart_count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_region_region";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_region_lat";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_region_lng";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "public_mfr_region_count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_region_chart_region";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_region_chart_lat";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_region_chart_lng";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "mfr_region_chart_count";

// good like search fields
$tdatamfr_aio_dashboard[".googleLikeFields"] = array();
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "public_mfr_dashboard_reports_type";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "public_mfr_dashboard_reports_name";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "public_mfr_dashboard_reports_count";
*/

/*
$tdatamfr_aio_dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "public_mfr_region_map", "table" => "public.mfr_region",
		 "pageName" => "","type" => 6);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "";
	$dbelement["lonF"] = "";
	$dbelement["descF"] = "";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
			$dbelement["updateMoved"] = true;

	$dbelement["isLocationMarkerIconCustom"] = 0;
	$dbelement["showCurrentLocation"] = 0;
	

	// Advanced map options
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_region_search", "table" => "public.mfr_region",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Region_Chart_chart", "table" => "MFR_Region_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "mfr_dashboard_reports_chart_chart", "table" => "mfr_dashboard_reports_chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "mfr_operational_status_chart_chart", "table" => "mfr_operational_status_chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_region_grid", "table" => "public.mfr_region",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "mfr_region_chart_chart", "table" => "mfr_region_chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_dashboard_reports_search", "table" => "public.mfr_dashboard_reports",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_dashboard_reports_grid", "table" => "public.mfr_dashboard_reports",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_operational_status_search", "table" => "public.mfr_operational_status",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "public_mfr_operational_status_grid", "table" => "public.mfr_operational_status",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
*/
$tdatamfr_aio_dashboard[".shortTableName"] = "mfr_aio_dashboard";
$tdatamfr_aio_dashboard[".entityType"] = 4;




$tdatamfr_aio_dashboard[".hasEvents"] = false;


$tdatamfr_aio_dashboard[".tableType"] = "dashboard";



$tdatamfr_aio_dashboard[".addPageEvents"] = false;

$tdatamfr_aio_dashboard[".isUseAjaxSuggest"] = true;

$tables_data["MFR_AIO_Dashboard"]=&$tdatamfr_aio_dashboard;
$field_labels["MFR_AIO_Dashboard"] = &$fieldLabelsmfr_aio_dashboard;
$page_titles["MFR_AIO_Dashboard"] = &$pageTitlesmfr_aio_dashboard;

?>