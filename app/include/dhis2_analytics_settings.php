<?php
$tdatadhis2_analytics = array();
$tdatadhis2_analytics[".searchableFields"] = array();
$tdatadhis2_analytics[".ShortName"] = "dhis2_analytics";
$tdatadhis2_analytics[".OwnerID"] = "";
$tdatadhis2_analytics[".OriginalTable"] = "DHIS2_Analytics";


$tdatadhis2_analytics[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatadhis2_analytics[".originalPagesByType"] = $tdatadhis2_analytics[".pagesByType"];
$tdatadhis2_analytics[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatadhis2_analytics[".originalPages"] = $tdatadhis2_analytics[".pages"];
$tdatadhis2_analytics[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatadhis2_analytics[".originalDefaultPages"] = $tdatadhis2_analytics[".defaultPages"];

//	field labels
$fieldLabelsdhis2_analytics = array();
$fieldToolTipsdhis2_analytics = array();
$pageTitlesdhis2_analytics = array();
$placeHoldersdhis2_analytics = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_analytics["English"] = array();
	$fieldToolTipsdhis2_analytics["English"] = array();
	$placeHoldersdhis2_analytics["English"] = array();
	$pageTitlesdhis2_analytics["English"] = array();
	if (count($fieldToolTipsdhis2_analytics["English"]))
		$tdatadhis2_analytics[".isUseToolTips"] = true;
}


	$tdatadhis2_analytics[".NCSearch"] = true;



$tdatadhis2_analytics[".shortTableName"] = "dhis2_analytics";
$tdatadhis2_analytics[".nSecOptions"] = 0;

$tdatadhis2_analytics[".mainTableOwnerID"] = "";
$tdatadhis2_analytics[".entityType"] = 7;
$tdatadhis2_analytics[".connId"] = "xhispmdathispmdmerqconsultancy";


$tdatadhis2_analytics[".strOriginalTableName"] = "DHIS2_Analytics";

	



$tdatadhis2_analytics[".showAddInPopup"] = false;

$tdatadhis2_analytics[".showEditInPopup"] = false;

$tdatadhis2_analytics[".showViewInPopup"] = false;

$tdatadhis2_analytics[".listAjax"] = false;
//	temporary
//$tdatadhis2_analytics[".listAjax"] = false;

	$tdatadhis2_analytics[".audit"] = false;

	$tdatadhis2_analytics[".locking"] = false;


$pages = $tdatadhis2_analytics[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_analytics[".edit"] = true;
	$tdatadhis2_analytics[".afterEditAction"] = 1;
	$tdatadhis2_analytics[".closePopupAfterEdit"] = 1;
	$tdatadhis2_analytics[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_analytics[".add"] = true;
$tdatadhis2_analytics[".afterAddAction"] = 1;
$tdatadhis2_analytics[".closePopupAfterAdd"] = 1;
$tdatadhis2_analytics[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_analytics[".list"] = true;
}



$tdatadhis2_analytics[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_analytics[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_analytics[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_analytics[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_analytics[".printFriendly"] = true;
}



$tdatadhis2_analytics[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_analytics[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_analytics[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_analytics[".isUseAjaxSuggest"] = false;





$tdatadhis2_analytics[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_analytics[".buttonsAdded"] = false;

$tdatadhis2_analytics[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_analytics[".isUseTimeForSearch"] = false;


$tdatadhis2_analytics[".badgeColor"] = "EDCA00";


$tdatadhis2_analytics[".allSearchFields"] = array();
$tdatadhis2_analytics[".filterFields"] = array();
$tdatadhis2_analytics[".requiredSearchFields"] = array();





$tdatadhis2_analytics[".printerPageOrientation"] = 0;
$tdatadhis2_analytics[".nPrinterPageScale"] = 100;

$tdatadhis2_analytics[".nPrinterSplitRecords"] = 40;

$tdatadhis2_analytics[".geocodingEnabled"] = false;










$tdatadhis2_analytics[".pageSize"] = 20;

$tdatadhis2_analytics[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_analytics[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_analytics[".orderindexes"] = array();


$tdatadhis2_analytics[".sqlHead"] = "";
$tdatadhis2_analytics[".sqlFrom"] = "";
$tdatadhis2_analytics[".sqlWhereExpr"] = "";
$tdatadhis2_analytics[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_analytics[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_analytics[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_analytics[".highlightSearchResults"] = true;

$tableKeysdhis2_analytics = array();
$tdatadhis2_analytics[".Keys"] = $tableKeysdhis2_analytics;


$tdatadhis2_analytics[".hideMobileList"] = array();






$tables_data["DHIS2_Analytics"]=&$tdatadhis2_analytics;
$field_labels["DHIS2_Analytics"] = &$fieldLabelsdhis2_analytics;
$fieldToolTips["DHIS2_Analytics"] = &$fieldToolTipsdhis2_analytics;
$placeHolders["DHIS2_Analytics"] = &$placeHoldersdhis2_analytics;
$page_titles["DHIS2_Analytics"] = &$pageTitlesdhis2_analytics;


changeTextControlsToDate( "DHIS2_Analytics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Analytics"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Analytics"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_analytics_ops.php" ) );



	
				;



$tdatadhis2_analytics[".sqlquery"] = $queryData_dhis2_analytics;



$tdatadhis2_analytics[".hasEvents"] = false;

?>