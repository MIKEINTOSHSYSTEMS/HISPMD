<?php
$tdatadhis2_orgunit_zone = array();
$tdatadhis2_orgunit_zone[".searchableFields"] = array();
$tdatadhis2_orgunit_zone[".ShortName"] = "dhis2_orgunit_zone";
$tdatadhis2_orgunit_zone[".OwnerID"] = "";
$tdatadhis2_orgunit_zone[".OriginalTable"] = "DHIS2_OrgUnit_Zone";


$tdatadhis2_orgunit_zone[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_zone[".originalPagesByType"] = $tdatadhis2_orgunit_zone[".pagesByType"];
$tdatadhis2_orgunit_zone[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_zone[".originalPages"] = $tdatadhis2_orgunit_zone[".pages"];
$tdatadhis2_orgunit_zone[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_zone[".originalDefaultPages"] = $tdatadhis2_orgunit_zone[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_zone = array();
$fieldToolTipsdhis2_orgunit_zone = array();
$pageTitlesdhis2_orgunit_zone = array();
$placeHoldersdhis2_orgunit_zone = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_zone["English"] = array();
	$fieldToolTipsdhis2_orgunit_zone["English"] = array();
	$placeHoldersdhis2_orgunit_zone["English"] = array();
	$pageTitlesdhis2_orgunit_zone["English"] = array();
	$fieldLabelsdhis2_orgunit_zone["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_zone["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_zone["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_zone["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_zone["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_zone["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_zone["English"]))
		$tdatadhis2_orgunit_zone[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_zone[".NCSearch"] = true;



$tdatadhis2_orgunit_zone[".shortTableName"] = "dhis2_orgunit_zone";
$tdatadhis2_orgunit_zone[".nSecOptions"] = 0;

$tdatadhis2_orgunit_zone[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_zone[".entityType"] = 7;
$tdatadhis2_orgunit_zone[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_zone[".strOriginalTableName"] = "DHIS2_OrgUnit_Zone";

	



$tdatadhis2_orgunit_zone[".showAddInPopup"] = false;

$tdatadhis2_orgunit_zone[".showEditInPopup"] = false;

$tdatadhis2_orgunit_zone[".showViewInPopup"] = false;

$tdatadhis2_orgunit_zone[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_zone[".listAjax"] = false;

	$tdatadhis2_orgunit_zone[".audit"] = true;

	$tdatadhis2_orgunit_zone[".locking"] = false;


$pages = $tdatadhis2_orgunit_zone[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_zone[".edit"] = true;
	$tdatadhis2_orgunit_zone[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_zone[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_zone[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_zone[".add"] = true;
$tdatadhis2_orgunit_zone[".afterAddAction"] = 1;
$tdatadhis2_orgunit_zone[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_zone[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_zone[".list"] = true;
}



$tdatadhis2_orgunit_zone[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_zone[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_zone[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_zone[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_zone[".printFriendly"] = true;
}



$tdatadhis2_orgunit_zone[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_zone[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_zone[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_zone[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_zone[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_zone[".buttonsAdded"] = false;

$tdatadhis2_orgunit_zone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_zone[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_zone[".badgeColor"] = "CFAE83";


$tdatadhis2_orgunit_zone[".allSearchFields"] = array();
$tdatadhis2_orgunit_zone[".filterFields"] = array();
$tdatadhis2_orgunit_zone[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_zone[".googleLikeFields"] = array();
$tdatadhis2_orgunit_zone[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_zone[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_zone[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_zone[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_zone[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_zone[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_zone[".pageSize"] = 20;

$tdatadhis2_orgunit_zone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_zone[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_zone[".orderindexes"] = array();


$tdatadhis2_orgunit_zone[".sqlHead"] = "";
$tdatadhis2_orgunit_zone[".sqlFrom"] = "";
$tdatadhis2_orgunit_zone[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_zone[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_zone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_zone[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_zone[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_zone = array();
$tdatadhis2_orgunit_zone[".Keys"] = $tableKeysdhis2_orgunit_zone;


$tdatadhis2_orgunit_zone[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Zone","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnits/*/displayName";

	
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


	$tdatadhis2_orgunit_zone["displayName"] = $fdata;
		$tdatadhis2_orgunit_zone[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Zone","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnits/*/id";

	
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


	$tdatadhis2_orgunit_zone["id"] = $fdata;
		$tdatadhis2_orgunit_zone[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Zone"]=&$tdatadhis2_orgunit_zone;
$field_labels["DHIS2_OrgUnit_Zone"] = &$fieldLabelsdhis2_orgunit_zone;
$fieldToolTips["DHIS2_OrgUnit_Zone"] = &$fieldToolTipsdhis2_orgunit_zone;
$placeHolders["DHIS2_OrgUnit_Zone"] = &$placeHoldersdhis2_orgunit_zone;
$page_titles["DHIS2_OrgUnit_Zone"] = &$pageTitlesdhis2_orgunit_zone;


changeTextControlsToDate( "DHIS2_OrgUnit_Zone" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Zone"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Zone"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_zone_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_zone[".sqlquery"] = $queryData_dhis2_orgunit_zone;



$tdatadhis2_orgunit_zone[".hasEvents"] = false;

?>