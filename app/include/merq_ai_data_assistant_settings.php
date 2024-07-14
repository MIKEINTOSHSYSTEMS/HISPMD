<?php
$tdatamerq_ai_data_assistant = array();
$tdatamerq_ai_data_assistant[".searchableFields"] = array();
$tdatamerq_ai_data_assistant[".ShortName"] = "merq_ai_data_assistant";
$tdatamerq_ai_data_assistant[".OwnerID"] = "";
$tdatamerq_ai_data_assistant[".OriginalTable"] = "MERQ-AI Data Assistant";


$tdatamerq_ai_data_assistant[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatamerq_ai_data_assistant[".originalPagesByType"] = $tdatamerq_ai_data_assistant[".pagesByType"];
$tdatamerq_ai_data_assistant[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatamerq_ai_data_assistant[".originalPages"] = $tdatamerq_ai_data_assistant[".pages"];
$tdatamerq_ai_data_assistant[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatamerq_ai_data_assistant[".originalDefaultPages"] = $tdatamerq_ai_data_assistant[".defaultPages"];

//	field labels
$fieldLabelsmerq_ai_data_assistant = array();
$fieldToolTipsmerq_ai_data_assistant = array();
$pageTitlesmerq_ai_data_assistant = array();
$placeHoldersmerq_ai_data_assistant = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmerq_ai_data_assistant["English"] = array();
	$fieldToolTipsmerq_ai_data_assistant["English"] = array();
	$placeHoldersmerq_ai_data_assistant["English"] = array();
	$pageTitlesmerq_ai_data_assistant["English"] = array();
	if (count($fieldToolTipsmerq_ai_data_assistant["English"]))
		$tdatamerq_ai_data_assistant[".isUseToolTips"] = true;
}


	$tdatamerq_ai_data_assistant[".NCSearch"] = true;



$tdatamerq_ai_data_assistant[".shortTableName"] = "merq_ai_data_assistant";
$tdatamerq_ai_data_assistant[".nSecOptions"] = 0;

$tdatamerq_ai_data_assistant[".mainTableOwnerID"] = "";
$tdatamerq_ai_data_assistant[".entityType"] = 7;
$tdatamerq_ai_data_assistant[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamerq_ai_data_assistant[".strOriginalTableName"] = "MERQ-AI Data Assistant";

	



$tdatamerq_ai_data_assistant[".showAddInPopup"] = false;

$tdatamerq_ai_data_assistant[".showEditInPopup"] = false;

$tdatamerq_ai_data_assistant[".showViewInPopup"] = false;

$tdatamerq_ai_data_assistant[".listAjax"] = false;
//	temporary
//$tdatamerq_ai_data_assistant[".listAjax"] = false;

	$tdatamerq_ai_data_assistant[".audit"] = false;

	$tdatamerq_ai_data_assistant[".locking"] = false;


$pages = $tdatamerq_ai_data_assistant[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamerq_ai_data_assistant[".edit"] = true;
	$tdatamerq_ai_data_assistant[".afterEditAction"] = 1;
	$tdatamerq_ai_data_assistant[".closePopupAfterEdit"] = 1;
	$tdatamerq_ai_data_assistant[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamerq_ai_data_assistant[".add"] = true;
$tdatamerq_ai_data_assistant[".afterAddAction"] = 1;
$tdatamerq_ai_data_assistant[".closePopupAfterAdd"] = 1;
$tdatamerq_ai_data_assistant[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamerq_ai_data_assistant[".list"] = true;
}



$tdatamerq_ai_data_assistant[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamerq_ai_data_assistant[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamerq_ai_data_assistant[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamerq_ai_data_assistant[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamerq_ai_data_assistant[".printFriendly"] = true;
}



$tdatamerq_ai_data_assistant[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamerq_ai_data_assistant[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamerq_ai_data_assistant[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamerq_ai_data_assistant[".isUseAjaxSuggest"] = false;





$tdatamerq_ai_data_assistant[".ajaxCodeSnippetAdded"] = false;

$tdatamerq_ai_data_assistant[".buttonsAdded"] = false;

$tdatamerq_ai_data_assistant[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamerq_ai_data_assistant[".isUseTimeForSearch"] = false;


$tdatamerq_ai_data_assistant[".badgeColor"] = "BC8F8F";


$tdatamerq_ai_data_assistant[".allSearchFields"] = array();
$tdatamerq_ai_data_assistant[".filterFields"] = array();
$tdatamerq_ai_data_assistant[".requiredSearchFields"] = array();





$tdatamerq_ai_data_assistant[".printerPageOrientation"] = 0;
$tdatamerq_ai_data_assistant[".nPrinterPageScale"] = 100;

$tdatamerq_ai_data_assistant[".nPrinterSplitRecords"] = 40;

$tdatamerq_ai_data_assistant[".geocodingEnabled"] = false;










$tdatamerq_ai_data_assistant[".pageSize"] = 20;

$tdatamerq_ai_data_assistant[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamerq_ai_data_assistant[".strOrderBy"] = $tstrOrderBy;

$tdatamerq_ai_data_assistant[".orderindexes"] = array();


$tdatamerq_ai_data_assistant[".sqlHead"] = "";
$tdatamerq_ai_data_assistant[".sqlFrom"] = "";
$tdatamerq_ai_data_assistant[".sqlWhereExpr"] = "";
$tdatamerq_ai_data_assistant[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamerq_ai_data_assistant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamerq_ai_data_assistant[".arrGroupsPerPage"] = $arrGPP;

$tdatamerq_ai_data_assistant[".highlightSearchResults"] = true;

$tableKeysmerq_ai_data_assistant = array();
$tdatamerq_ai_data_assistant[".Keys"] = $tableKeysmerq_ai_data_assistant;


$tdatamerq_ai_data_assistant[".hideMobileList"] = array();






$tables_data["MERQ-AI Data Assistant"]=&$tdatamerq_ai_data_assistant;
$field_labels["MERQ_AI_Data_Assistant"] = &$fieldLabelsmerq_ai_data_assistant;
$fieldToolTips["MERQ_AI_Data_Assistant"] = &$fieldToolTipsmerq_ai_data_assistant;
$placeHolders["MERQ_AI_Data_Assistant"] = &$placeHoldersmerq_ai_data_assistant;
$page_titles["MERQ_AI_Data_Assistant"] = &$pageTitlesmerq_ai_data_assistant;


changeTextControlsToDate( "MERQ-AI Data Assistant" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MERQ-AI Data Assistant"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MERQ-AI Data Assistant"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/merq_ai_data_assistant_ops.php" ) );



	
		;



$tdatamerq_ai_data_assistant[".sqlquery"] = $queryData_merq_ai_data_assistant;



$tdatamerq_ai_data_assistant[".hasEvents"] = false;

?>