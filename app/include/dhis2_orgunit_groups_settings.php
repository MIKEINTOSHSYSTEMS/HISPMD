<?php
$tdatadhis2_orgunit_groups = array();
$tdatadhis2_orgunit_groups[".searchableFields"] = array();
$tdatadhis2_orgunit_groups[".ShortName"] = "dhis2_orgunit_groups";
$tdatadhis2_orgunit_groups[".OwnerID"] = "";
$tdatadhis2_orgunit_groups[".OriginalTable"] = "DHIS2_OrgUnit_Groups";


$tdatadhis2_orgunit_groups[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_groups[".originalPagesByType"] = $tdatadhis2_orgunit_groups[".pagesByType"];
$tdatadhis2_orgunit_groups[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_groups[".originalPages"] = $tdatadhis2_orgunit_groups[".pages"];
$tdatadhis2_orgunit_groups[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_groups[".originalDefaultPages"] = $tdatadhis2_orgunit_groups[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_groups = array();
$fieldToolTipsdhis2_orgunit_groups = array();
$pageTitlesdhis2_orgunit_groups = array();
$placeHoldersdhis2_orgunit_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_groups["English"] = array();
	$fieldToolTipsdhis2_orgunit_groups["English"] = array();
	$placeHoldersdhis2_orgunit_groups["English"] = array();
	$pageTitlesdhis2_orgunit_groups["English"] = array();
	$fieldLabelsdhis2_orgunit_groups["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_groups["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_groups["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_groups["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_groups["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_groups["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_groups["English"]))
		$tdatadhis2_orgunit_groups[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_groups[".NCSearch"] = true;



$tdatadhis2_orgunit_groups[".shortTableName"] = "dhis2_orgunit_groups";
$tdatadhis2_orgunit_groups[".nSecOptions"] = 0;

$tdatadhis2_orgunit_groups[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_groups[".entityType"] = 7;
$tdatadhis2_orgunit_groups[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_groups[".strOriginalTableName"] = "DHIS2_OrgUnit_Groups";

	



$tdatadhis2_orgunit_groups[".showAddInPopup"] = false;

$tdatadhis2_orgunit_groups[".showEditInPopup"] = false;

$tdatadhis2_orgunit_groups[".showViewInPopup"] = false;

$tdatadhis2_orgunit_groups[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_groups[".listAjax"] = false;

	$tdatadhis2_orgunit_groups[".audit"] = true;

	$tdatadhis2_orgunit_groups[".locking"] = true;


$pages = $tdatadhis2_orgunit_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_groups[".edit"] = true;
	$tdatadhis2_orgunit_groups[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_groups[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_groups[".add"] = true;
$tdatadhis2_orgunit_groups[".afterAddAction"] = 1;
$tdatadhis2_orgunit_groups[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_groups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_groups[".list"] = true;
}



$tdatadhis2_orgunit_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_groups[".printFriendly"] = true;
}



$tdatadhis2_orgunit_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_groups[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_groups[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_groups[".buttonsAdded"] = false;

$tdatadhis2_orgunit_groups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_groups[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_groups[".badgeColor"] = "3CB371";


$tdatadhis2_orgunit_groups[".allSearchFields"] = array();
$tdatadhis2_orgunit_groups[".filterFields"] = array();
$tdatadhis2_orgunit_groups[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_groups[".googleLikeFields"] = array();
$tdatadhis2_orgunit_groups[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_groups[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_groups[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_groups[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_groups[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_groups[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_groups[".pageSize"] = 20;

$tdatadhis2_orgunit_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_groups[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_groups[".orderindexes"] = array();


$tdatadhis2_orgunit_groups[".sqlHead"] = "";
$tdatadhis2_orgunit_groups[".sqlFrom"] = "";
$tdatadhis2_orgunit_groups[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_groups[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_groups = array();
$tdatadhis2_orgunit_groups[".Keys"] = $tableKeysdhis2_orgunit_groups;


$tdatadhis2_orgunit_groups[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Groups","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnitGroups/*/displayName";

	
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


	$tdatadhis2_orgunit_groups["displayName"] = $fdata;
		$tdatadhis2_orgunit_groups[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Groups","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnitGroups/*/id";

	
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


	$tdatadhis2_orgunit_groups["id"] = $fdata;
		$tdatadhis2_orgunit_groups[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Groups"]=&$tdatadhis2_orgunit_groups;
$field_labels["DHIS2_OrgUnit_Groups"] = &$fieldLabelsdhis2_orgunit_groups;
$fieldToolTips["DHIS2_OrgUnit_Groups"] = &$fieldToolTipsdhis2_orgunit_groups;
$placeHolders["DHIS2_OrgUnit_Groups"] = &$placeHoldersdhis2_orgunit_groups;
$page_titles["DHIS2_OrgUnit_Groups"] = &$pageTitlesdhis2_orgunit_groups;


changeTextControlsToDate( "DHIS2_OrgUnit_Groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Groups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_groups_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_groups[".sqlquery"] = $queryData_dhis2_orgunit_groups;



$tdatadhis2_orgunit_groups[".hasEvents"] = false;

?>