<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamfr_geolocation_reports = array();
$tdatamfr_geolocation_reports[".ShortName"] = "mfr_geolocation_reports";

$tdatamfr_geolocation_reports[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatamfr_geolocation_reports[".originalPagesByType"] = $tdatamfr_geolocation_reports[".pagesByType"];
$tdatamfr_geolocation_reports[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatamfr_geolocation_reports[".originalPages"] = $tdatamfr_geolocation_reports[".pages"];
$tdatamfr_geolocation_reports[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatamfr_geolocation_reports[".originalDefaultPages"] = $tdatamfr_geolocation_reports[".defaultPages"];


//	field labels
$fieldLabelsmfr_geolocation_reports = array();
$pageTitlesmfr_geolocation_reports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_geolocation_reports["English"] = array();
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Region_Region"] = "Region";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Region_Lat"] = "Lat";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Region_Lng"] = "Lng";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Region_Count"] = "Count";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Zone_Zone"] = "Zone";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Zone_Lat"] = "Lat";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Zone_Lng"] = "Lng";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Zone_Count"] = "Count";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Woreda_Woreda"] = "Woreda";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Woreda_Lat"] = "Lat";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Woreda_Lng"] = "Lng";
	$fieldLabelsmfr_geolocation_reports["English"]["MFR_Woreda_Count"] = "Count";
}

/*
//	search fields
$tdatamfr_geolocation_reports[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Region" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Region_Region"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Lat" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Region_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Lng" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Region_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Region", "field"=>"Count" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Region_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Zone" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Zone_Zone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Lat" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Zone_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Lng" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Zone_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Zone", "field"=>"Count" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Zone_Count"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Woreda" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Woreda_Woreda"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Lat" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Woreda_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Lng" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Woreda_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MFR_Woreda", "field"=>"Count" );
$tdatamfr_geolocation_reports[".searchFields"]["MFR_Woreda_Count"] = $dashField;

// all search fields
$tdatamfr_geolocation_reports[".allSearchFields"] = array();
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Region_Region";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Region_Lat";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Region_Lng";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Region_Count";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Zone_Zone";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Zone_Lat";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Zone_Lng";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Zone_Count";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Woreda_Woreda";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Woreda_Lat";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Woreda_Lng";
$tdatamfr_geolocation_reports[".allSearchFields"][] = "MFR_Woreda_Count";

// good like search fields
$tdatamfr_geolocation_reports[".googleLikeFields"] = array();
$tdatamfr_geolocation_reports[".googleLikeFields"][] = "MFR_Region_Region";
$tdatamfr_geolocation_reports[".googleLikeFields"][] = "MFR_Zone_Zone";
$tdatamfr_geolocation_reports[".googleLikeFields"][] = "MFR_Woreda_Woreda";
*/

/*
$tdatamfr_geolocation_reports[".dashElements"] = array();

	$dbelement = array( "elementName" => "MFR_Region_grid", "table" => "MFR_Region",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_grid", "table" => "MFR_Zone",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_grid", "table" => "MFR_Woreda",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_map", "table" => "MFR_Zone",
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_map", "table" => "MFR_Woreda",
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Region_grid", "table" => "MFR_Region",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_grid", "table" => "MFR_Zone",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_grid", "table" => "MFR_Woreda",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Zone_map", "table" => "MFR_Zone",
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "MFR_Woreda_map", "table" => "MFR_Woreda",
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
	

	$tdatamfr_geolocation_reports[".dashElements"][] = $dbelement;
*/
$tdatamfr_geolocation_reports[".shortTableName"] = "mfr_geolocation_reports";
$tdatamfr_geolocation_reports[".entityType"] = 4;




$tdatamfr_geolocation_reports[".hasEvents"] = false;


$tdatamfr_geolocation_reports[".tableType"] = "dashboard";



$tdatamfr_geolocation_reports[".addPageEvents"] = false;

$tdatamfr_geolocation_reports[".isUseAjaxSuggest"] = true;

$tables_data["MFR Geolocation Reports"]=&$tdatamfr_geolocation_reports;
$field_labels["MFR_Geolocation_Reports"] = &$fieldLabelsmfr_geolocation_reports;
$page_titles["MFR_Geolocation_Reports"] = &$pageTitlesmfr_geolocation_reports;

?>