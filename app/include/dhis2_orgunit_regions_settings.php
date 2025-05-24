<?php
$tdatadhis2_orgunit_regions = array();
$tdatadhis2_orgunit_regions[".searchableFields"] = array();
$tdatadhis2_orgunit_regions[".ShortName"] = "dhis2_orgunit_regions";
$tdatadhis2_orgunit_regions[".OwnerID"] = "";
$tdatadhis2_orgunit_regions[".OriginalTable"] = "DHIS2_OrgUnit_Regions";


$tdatadhis2_orgunit_regions[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_regions[".originalPagesByType"] = $tdatadhis2_orgunit_regions[".pagesByType"];
$tdatadhis2_orgunit_regions[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_regions[".originalPages"] = $tdatadhis2_orgunit_regions[".pages"];
$tdatadhis2_orgunit_regions[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_regions[".originalDefaultPages"] = $tdatadhis2_orgunit_regions[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_regions = array();
$fieldToolTipsdhis2_orgunit_regions = array();
$pageTitlesdhis2_orgunit_regions = array();
$placeHoldersdhis2_orgunit_regions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_regions["English"] = array();
	$fieldToolTipsdhis2_orgunit_regions["English"] = array();
	$placeHoldersdhis2_orgunit_regions["English"] = array();
	$pageTitlesdhis2_orgunit_regions["English"] = array();
	$fieldLabelsdhis2_orgunit_regions["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_regions["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_regions["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_regions["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_regions["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_regions["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_regions["English"]))
		$tdatadhis2_orgunit_regions[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_regions[".NCSearch"] = true;



$tdatadhis2_orgunit_regions[".shortTableName"] = "dhis2_orgunit_regions";
$tdatadhis2_orgunit_regions[".nSecOptions"] = 0;

$tdatadhis2_orgunit_regions[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_regions[".entityType"] = 7;
$tdatadhis2_orgunit_regions[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_regions[".strOriginalTableName"] = "DHIS2_OrgUnit_Regions";

	



$tdatadhis2_orgunit_regions[".showAddInPopup"] = false;

$tdatadhis2_orgunit_regions[".showEditInPopup"] = false;

$tdatadhis2_orgunit_regions[".showViewInPopup"] = false;

$tdatadhis2_orgunit_regions[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_regions[".listAjax"] = false;

	$tdatadhis2_orgunit_regions[".audit"] = true;

	$tdatadhis2_orgunit_regions[".locking"] = false;


$pages = $tdatadhis2_orgunit_regions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_regions[".edit"] = true;
	$tdatadhis2_orgunit_regions[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_regions[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_regions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_regions[".add"] = true;
$tdatadhis2_orgunit_regions[".afterAddAction"] = 1;
$tdatadhis2_orgunit_regions[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_regions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_regions[".list"] = true;
}



$tdatadhis2_orgunit_regions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_regions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_regions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_regions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_regions[".printFriendly"] = true;
}



$tdatadhis2_orgunit_regions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_regions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_regions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_regions[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_orgunit_regions[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_regions[".buttonsAdded"] = false;

$tdatadhis2_orgunit_regions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_regions[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_regions[".badgeColor"] = "6493EA";


$tdatadhis2_orgunit_regions[".allSearchFields"] = array();
$tdatadhis2_orgunit_regions[".filterFields"] = array();
$tdatadhis2_orgunit_regions[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_regions[".googleLikeFields"] = array();
$tdatadhis2_orgunit_regions[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_regions[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_regions[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_regions[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_regions[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_regions[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_regions[".pageSize"] = 20;

$tdatadhis2_orgunit_regions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_regions[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_regions[".orderindexes"] = array();
	foreach ( my_json_decode("") as $orderItem ) {
		$tdatadhis2_orgunit_regions[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatadhis2_orgunit_regions[".sqlHead"] = "";
$tdatadhis2_orgunit_regions[".sqlFrom"] = "";
$tdatadhis2_orgunit_regions[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_regions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_regions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_regions[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_regions[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_regions = array();
$tdatadhis2_orgunit_regions[".Keys"] = $tableKeysdhis2_orgunit_regions;


$tdatadhis2_orgunit_regions[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Regions","displayName");
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


	$tdatadhis2_orgunit_regions["displayName"] = $fdata;
		$tdatadhis2_orgunit_regions[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Regions","id");
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


	$tdatadhis2_orgunit_regions["id"] = $fdata;
		$tdatadhis2_orgunit_regions[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Regions"]=&$tdatadhis2_orgunit_regions;
$field_labels["DHIS2_OrgUnit_Regions"] = &$fieldLabelsdhis2_orgunit_regions;
$fieldToolTips["DHIS2_OrgUnit_Regions"] = &$fieldToolTipsdhis2_orgunit_regions;
$placeHolders["DHIS2_OrgUnit_Regions"] = &$placeHoldersdhis2_orgunit_regions;
$page_titles["DHIS2_OrgUnit_Regions"] = &$pageTitlesdhis2_orgunit_regions;


changeTextControlsToDate( "DHIS2_OrgUnit_Regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Regions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_regions_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_regions[".sqlquery"] = $queryData_dhis2_orgunit_regions;



$tdatadhis2_orgunit_regions[".hasEvents"] = false;

?>