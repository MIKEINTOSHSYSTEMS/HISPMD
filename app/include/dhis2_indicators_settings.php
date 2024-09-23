<?php
$tdatadhis2_indicators = array();
$tdatadhis2_indicators[".searchableFields"] = array();
$tdatadhis2_indicators[".ShortName"] = "dhis2_indicators";
$tdatadhis2_indicators[".OwnerID"] = "";
$tdatadhis2_indicators[".OriginalTable"] = "DHIS2_Indicators";


$tdatadhis2_indicators[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_indicators[".originalPagesByType"] = $tdatadhis2_indicators[".pagesByType"];
$tdatadhis2_indicators[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_indicators[".originalPages"] = $tdatadhis2_indicators[".pages"];
$tdatadhis2_indicators[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_indicators[".originalDefaultPages"] = $tdatadhis2_indicators[".defaultPages"];

//	field labels
$fieldLabelsdhis2_indicators = array();
$fieldToolTipsdhis2_indicators = array();
$pageTitlesdhis2_indicators = array();
$placeHoldersdhis2_indicators = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_indicators["English"] = array();
	$fieldToolTipsdhis2_indicators["English"] = array();
	$placeHoldersdhis2_indicators["English"] = array();
	$pageTitlesdhis2_indicators["English"] = array();
	$fieldLabelsdhis2_indicators["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_indicators["English"]["displayName"] = "";
	$placeHoldersdhis2_indicators["English"]["displayName"] = "";
	$fieldLabelsdhis2_indicators["English"]["id"] = "Id";
	$fieldToolTipsdhis2_indicators["English"]["id"] = "";
	$placeHoldersdhis2_indicators["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_indicators["English"]))
		$tdatadhis2_indicators[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_indicators["Amharic"] = array();
	$fieldToolTipsdhis2_indicators["Amharic"] = array();
	$placeHoldersdhis2_indicators["Amharic"] = array();
	$pageTitlesdhis2_indicators["Amharic"] = array();
	$fieldLabelsdhis2_indicators["Amharic"]["displayName"] = "የማሳያ ስም";
	$fieldToolTipsdhis2_indicators["Amharic"]["displayName"] = "";
	$placeHoldersdhis2_indicators["Amharic"]["displayName"] = "";
	$fieldLabelsdhis2_indicators["Amharic"]["id"] = "መለያ";
	$fieldToolTipsdhis2_indicators["Amharic"]["id"] = "";
	$placeHoldersdhis2_indicators["Amharic"]["id"] = "";
	if (count($fieldToolTipsdhis2_indicators["Amharic"]))
		$tdatadhis2_indicators[".isUseToolTips"] = true;
}


	$tdatadhis2_indicators[".NCSearch"] = true;



$tdatadhis2_indicators[".shortTableName"] = "dhis2_indicators";
$tdatadhis2_indicators[".nSecOptions"] = 0;

$tdatadhis2_indicators[".mainTableOwnerID"] = "";
$tdatadhis2_indicators[".entityType"] = 7;
$tdatadhis2_indicators[".connId"] = "xhispmdathispmdmerqconsultancy";


$tdatadhis2_indicators[".strOriginalTableName"] = "DHIS2_Indicators";

	



$tdatadhis2_indicators[".showAddInPopup"] = false;

$tdatadhis2_indicators[".showEditInPopup"] = false;

$tdatadhis2_indicators[".showViewInPopup"] = false;

$tdatadhis2_indicators[".listAjax"] = false;
//	temporary
//$tdatadhis2_indicators[".listAjax"] = false;

	$tdatadhis2_indicators[".audit"] = true;

	$tdatadhis2_indicators[".locking"] = false;


$pages = $tdatadhis2_indicators[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_indicators[".edit"] = true;
	$tdatadhis2_indicators[".afterEditAction"] = 1;
	$tdatadhis2_indicators[".closePopupAfterEdit"] = 1;
	$tdatadhis2_indicators[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_indicators[".add"] = true;
$tdatadhis2_indicators[".afterAddAction"] = 1;
$tdatadhis2_indicators[".closePopupAfterAdd"] = 1;
$tdatadhis2_indicators[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_indicators[".list"] = true;
}



$tdatadhis2_indicators[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_indicators[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_indicators[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_indicators[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_indicators[".printFriendly"] = true;
}



$tdatadhis2_indicators[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_indicators[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_indicators[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_indicators[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_indicators[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_indicators[".buttonsAdded"] = false;

$tdatadhis2_indicators[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_indicators[".isUseTimeForSearch"] = false;


$tdatadhis2_indicators[".badgeColor"] = "008B8B";


$tdatadhis2_indicators[".allSearchFields"] = array();
$tdatadhis2_indicators[".filterFields"] = array();
$tdatadhis2_indicators[".requiredSearchFields"] = array();

$tdatadhis2_indicators[".googleLikeFields"] = array();
$tdatadhis2_indicators[".googleLikeFields"][] = "displayName";
$tdatadhis2_indicators[".googleLikeFields"][] = "id";




$tdatadhis2_indicators[".printerPageOrientation"] = 0;
$tdatadhis2_indicators[".nPrinterPageScale"] = 100;

$tdatadhis2_indicators[".nPrinterSplitRecords"] = 40;

$tdatadhis2_indicators[".geocodingEnabled"] = false;










$tdatadhis2_indicators[".pageSize"] = 20;

$tdatadhis2_indicators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_indicators[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_indicators[".orderindexes"] = array();


$tdatadhis2_indicators[".sqlHead"] = "";
$tdatadhis2_indicators[".sqlFrom"] = "";
$tdatadhis2_indicators[".sqlWhereExpr"] = "";
$tdatadhis2_indicators[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_indicators[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_indicators[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_indicators[".highlightSearchResults"] = true;

$tableKeysdhis2_indicators = array();
$tdatadhis2_indicators[".Keys"] = $tableKeysdhis2_indicators;


$tdatadhis2_indicators[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Indicators","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "indicators/*/displayName";

	
		$fdata["FullName"] = "displayName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_indicators["displayName"] = $fdata;
		$tdatadhis2_indicators[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Indicators","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "indicators/*/id";

	
		$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_indicators["id"] = $fdata;
		$tdatadhis2_indicators[".searchableFields"][] = "id";


$tables_data["DHIS2_Indicators"]=&$tdatadhis2_indicators;
$field_labels["DHIS2_Indicators"] = &$fieldLabelsdhis2_indicators;
$fieldToolTips["DHIS2_Indicators"] = &$fieldToolTipsdhis2_indicators;
$placeHolders["DHIS2_Indicators"] = &$placeHoldersdhis2_indicators;
$page_titles["DHIS2_Indicators"] = &$pageTitlesdhis2_indicators;


changeTextControlsToDate( "DHIS2_Indicators" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Indicators"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Indicators"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_indicators_ops.php" ) );



	
																												;

		

$tdatadhis2_indicators[".sqlquery"] = $queryData_dhis2_indicators;



$tdatadhis2_indicators[".hasEvents"] = false;

?>