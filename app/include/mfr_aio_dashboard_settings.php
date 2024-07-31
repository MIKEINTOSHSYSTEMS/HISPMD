<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamfr_aio_dashboard = array();
$tdatamfr_aio_dashboard[".ShortName"] = "mfr_aio_dashboard";

$tdatamfr_aio_dashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"MFR_AIO_Reporting_Dashboard\"]}" );
$tdatamfr_aio_dashboard[".originalPagesByType"] = $tdatamfr_aio_dashboard[".pagesByType"];
$tdatamfr_aio_dashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"MFR_AIO_Reporting_Dashboard\"]}" ) );
$tdatamfr_aio_dashboard[".originalPages"] = $tdatamfr_aio_dashboard[".pages"];
$tdatamfr_aio_dashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"MFR_AIO_Reporting_Dashboard\"}" );
$tdatamfr_aio_dashboard[".originalDefaultPages"] = $tdatamfr_aio_dashboard[".defaultPages"];


//	field labels
$fieldLabelsmfr_aio_dashboard = array();
$pageTitlesmfr_aio_dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_aio_dashboard["English"] = array();
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Chart_Type"] = "Type";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Chart_Name"] = "Name";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Chart_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_Chart_OperationalStatus"] = "Operational Status";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_Chart_Status"] = "Status";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_Chart_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Chart_Zone"] = "Zone";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Chart_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Chart_Woreda"] = "Woreda";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Chart_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Chart_Region"] = "Region";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Chart_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Region"] = "Region";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Lat"] = "Lat";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Lng"] = "Lng";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Region_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Zone"] = "Zone";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Lat"] = "Lat";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Lng"] = "Lng";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Zone_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Woreda"] = "Woreda";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Lat"] = "Lat";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Lng"] = "Lng";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Woreda_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Type"] = "Type";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Name"] = "Name";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Dashboard_Reports_Count"] = "Count";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_OperationalStatus"] = "Operational Status";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_Status"] = "Status";
	$fieldLabelsmfr_aio_dashboard["English"]["MFR_Operational_Status_Count"] = "Count";
}

/*
//	search fields
$tdatamfr_aio_dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports_Chart", "field"=>"Type" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Chart_Type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports_Chart", "field"=>"Name" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Chart_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports_Chart", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Chart_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status_Chart", "field"=>"OperationalStatus" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_Chart_OperationalStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status_Chart", "field"=>"Status" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_Chart_Status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status_Chart", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_Chart_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone_Chart", "field"=>"Zone" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Chart_Zone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone_Chart", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Chart_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda_Chart", "field"=>"Woreda" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Chart_Woreda"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda_Chart", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Chart_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region_Chart", "field"=>"Region" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Chart_Region"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region_Chart", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Chart_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Region" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Region"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Lat" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Lng" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Region_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Zone" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Zone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Lat" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Lng" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Zone_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Woreda" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Woreda"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Lat" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Lng" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Woreda_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports", "field"=>"Type" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports", "field"=>"Name" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Dashboard_Reports", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Dashboard_Reports_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status", "field"=>"OperationalStatus" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_OperationalStatus"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status", "field"=>"Status" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_Status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Operational_Status", "field"=>"Count" );
$tdatamfr_aio_dashboard[".searchFields"]["MFR_Operational_Status_Count"] = $dashField;

// all search fields
$tdatamfr_aio_dashboard[".allSearchFields"] = array();
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Chart_Type";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Chart_Name";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Chart_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_Chart_OperationalStatus";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_Chart_Status";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_Chart_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Chart_Zone";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Chart_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Chart_Woreda";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Chart_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Chart_Region";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Chart_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Region";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Lat";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Lng";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Region_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Zone";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Lat";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Lng";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Zone_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Woreda";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Lat";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Lng";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Woreda_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Type";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Name";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Dashboard_Reports_Count";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_OperationalStatus";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_Status";
$tdatamfr_aio_dashboard[".allSearchFields"][] = "MFR_Operational_Status_Count";

// good like search fields
$tdatamfr_aio_dashboard[".googleLikeFields"] = array();
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Dashboard_Reports_Chart_Type";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Dashboard_Reports_Chart_Name";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Operational_Status_Chart_OperationalStatus";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Operational_Status_Chart_Status";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Zone_Chart_Zone";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Woreda_Chart_Woreda";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Region_Chart_Region";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Region_Region";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Zone_Zone";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Woreda_Woreda";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Dashboard_Reports_Type";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Dashboard_Reports_Name";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Operational_Status_OperationalStatus";
$tdatamfr_aio_dashboard[".googleLikeFields"][] = "MFR_Operational_Status_Status";
*/

/*
$tdatamfr_aio_dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "MFR_Dashboard_Reports_Chart_chart", "table" => "MFR_Dashboard_Reports_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Operational_Status_Chart_chart", "table" => "MFR_Operational_Status_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_Chart_chart", "table" => "MFR_Zone_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_Chart_chart", "table" => "MFR_Woreda_Chart",
		 "pageName" => "","type" => 1);
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
	$dbelement = array( "elementName" => "MFR_Region_map", "table" => "MFR_Region",
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
	$dbelement = array( "elementName" => "MFR_Region_grid", "table" => "MFR_Region",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Dashboard_Reports_grid", "table" => "MFR_Dashboard_Reports",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Operational_Status_grid", "table" => "MFR_Operational_Status",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Region_search", "table" => "MFR_Region",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_search", "table" => "MFR_Zone",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_search", "table" => "MFR_Woreda",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Dashboard_Reports_search", "table" => "MFR_Dashboard_Reports",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Operational_Status_search", "table" => "MFR_Operational_Status",
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_grid", "table" => "MFR_Zone",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_aio_dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_grid", "table" => "MFR_Woreda",
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