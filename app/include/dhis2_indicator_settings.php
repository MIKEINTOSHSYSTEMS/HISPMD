<?php
$tdatadhis2_indicator = array();
$tdatadhis2_indicator[".searchableFields"] = array();
$tdatadhis2_indicator[".ShortName"] = "dhis2_indicator";
$tdatadhis2_indicator[".OwnerID"] = "";
$tdatadhis2_indicator[".OriginalTable"] = "DHIS2_Indicator";


$tdatadhis2_indicator[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_indicator[".originalPagesByType"] = $tdatadhis2_indicator[".pagesByType"];
$tdatadhis2_indicator[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_indicator[".originalPages"] = $tdatadhis2_indicator[".pages"];
$tdatadhis2_indicator[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_indicator[".originalDefaultPages"] = $tdatadhis2_indicator[".defaultPages"];

//	field labels
$fieldLabelsdhis2_indicator = array();
$fieldToolTipsdhis2_indicator = array();
$pageTitlesdhis2_indicator = array();
$placeHoldersdhis2_indicator = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_indicator["English"] = array();
	$fieldToolTipsdhis2_indicator["English"] = array();
	$placeHoldersdhis2_indicator["English"] = array();
	$pageTitlesdhis2_indicator["English"] = array();
	$fieldLabelsdhis2_indicator["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_indicator["English"]["displayName"] = "";
	$placeHoldersdhis2_indicator["English"]["displayName"] = "";
	$fieldLabelsdhis2_indicator["English"]["id"] = "Id";
	$fieldToolTipsdhis2_indicator["English"]["id"] = "";
	$placeHoldersdhis2_indicator["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_indicator["English"]))
		$tdatadhis2_indicator[".isUseToolTips"] = true;
}


	$tdatadhis2_indicator[".NCSearch"] = true;



$tdatadhis2_indicator[".shortTableName"] = "dhis2_indicator";
$tdatadhis2_indicator[".nSecOptions"] = 0;

$tdatadhis2_indicator[".mainTableOwnerID"] = "";
$tdatadhis2_indicator[".entityType"] = 7;
$tdatadhis2_indicator[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_indicator[".strOriginalTableName"] = "DHIS2_Indicator";

	



$tdatadhis2_indicator[".showAddInPopup"] = false;

$tdatadhis2_indicator[".showEditInPopup"] = false;

$tdatadhis2_indicator[".showViewInPopup"] = false;

$tdatadhis2_indicator[".listAjax"] = false;
//	temporary
//$tdatadhis2_indicator[".listAjax"] = false;

	$tdatadhis2_indicator[".audit"] = true;

	$tdatadhis2_indicator[".locking"] = true;


$pages = $tdatadhis2_indicator[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_indicator[".edit"] = true;
	$tdatadhis2_indicator[".afterEditAction"] = 1;
	$tdatadhis2_indicator[".closePopupAfterEdit"] = 1;
	$tdatadhis2_indicator[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_indicator[".add"] = true;
$tdatadhis2_indicator[".afterAddAction"] = 1;
$tdatadhis2_indicator[".closePopupAfterAdd"] = 1;
$tdatadhis2_indicator[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_indicator[".list"] = true;
}



$tdatadhis2_indicator[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_indicator[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_indicator[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_indicator[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_indicator[".printFriendly"] = true;
}



$tdatadhis2_indicator[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_indicator[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_indicator[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_indicator[".isUseAjaxSuggest"] = false;





$tdatadhis2_indicator[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_indicator[".buttonsAdded"] = false;

$tdatadhis2_indicator[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_indicator[".isUseTimeForSearch"] = false;


$tdatadhis2_indicator[".badgeColor"] = "8FBC8B";


$tdatadhis2_indicator[".allSearchFields"] = array();
$tdatadhis2_indicator[".filterFields"] = array();
$tdatadhis2_indicator[".requiredSearchFields"] = array();

$tdatadhis2_indicator[".googleLikeFields"] = array();
$tdatadhis2_indicator[".googleLikeFields"][] = "displayName";
$tdatadhis2_indicator[".googleLikeFields"][] = "id";




$tdatadhis2_indicator[".printerPageOrientation"] = 0;
$tdatadhis2_indicator[".nPrinterPageScale"] = 100;

$tdatadhis2_indicator[".nPrinterSplitRecords"] = 40;

$tdatadhis2_indicator[".geocodingEnabled"] = false;










$tdatadhis2_indicator[".pageSize"] = 20;

$tdatadhis2_indicator[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_indicator[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_indicator[".orderindexes"] = array();


$tdatadhis2_indicator[".sqlHead"] = "";
$tdatadhis2_indicator[".sqlFrom"] = "";
$tdatadhis2_indicator[".sqlWhereExpr"] = "";
$tdatadhis2_indicator[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_indicator[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_indicator[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_indicator[".highlightSearchResults"] = true;

$tableKeysdhis2_indicator = array();
$tdatadhis2_indicator[".Keys"] = $tableKeysdhis2_indicator;


$tdatadhis2_indicator[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Indicator","displayName");
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


	$tdatadhis2_indicator["displayName"] = $fdata;
		$tdatadhis2_indicator[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Indicator","id");
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


	$tdatadhis2_indicator["id"] = $fdata;
		$tdatadhis2_indicator[".searchableFields"][] = "id";


$tables_data["DHIS2_Indicator"]=&$tdatadhis2_indicator;
$field_labels["DHIS2_Indicator"] = &$fieldLabelsdhis2_indicator;
$fieldToolTips["DHIS2_Indicator"] = &$fieldToolTipsdhis2_indicator;
$placeHolders["DHIS2_Indicator"] = &$placeHoldersdhis2_indicator;
$page_titles["DHIS2_Indicator"] = &$pageTitlesdhis2_indicator;


changeTextControlsToDate( "DHIS2_Indicator" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Indicator"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Indicator"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_indicator_ops.php" ) );



	
																												;

		

$tdatadhis2_indicator[".sqlquery"] = $queryData_dhis2_indicator;



$tdatadhis2_indicator[".hasEvents"] = false;

?>