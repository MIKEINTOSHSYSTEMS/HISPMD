<?php
$tdatadhis2_orgunit_country = array();
$tdatadhis2_orgunit_country[".searchableFields"] = array();
$tdatadhis2_orgunit_country[".ShortName"] = "dhis2_orgunit_country";
$tdatadhis2_orgunit_country[".OwnerID"] = "";
$tdatadhis2_orgunit_country[".OriginalTable"] = "DHIS2_OrgUnit_Country";


$tdatadhis2_orgunit_country[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_country[".originalPagesByType"] = $tdatadhis2_orgunit_country[".pagesByType"];
$tdatadhis2_orgunit_country[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_country[".originalPages"] = $tdatadhis2_orgunit_country[".pages"];
$tdatadhis2_orgunit_country[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_country[".originalDefaultPages"] = $tdatadhis2_orgunit_country[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_country = array();
$fieldToolTipsdhis2_orgunit_country = array();
$pageTitlesdhis2_orgunit_country = array();
$placeHoldersdhis2_orgunit_country = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_country["English"] = array();
	$fieldToolTipsdhis2_orgunit_country["English"] = array();
	$placeHoldersdhis2_orgunit_country["English"] = array();
	$pageTitlesdhis2_orgunit_country["English"] = array();
	$fieldLabelsdhis2_orgunit_country["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_country["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_country["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_country["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_country["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_country["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_country["English"]))
		$tdatadhis2_orgunit_country[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_country[".NCSearch"] = true;



$tdatadhis2_orgunit_country[".shortTableName"] = "dhis2_orgunit_country";
$tdatadhis2_orgunit_country[".nSecOptions"] = 0;

$tdatadhis2_orgunit_country[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_country[".entityType"] = 7;
$tdatadhis2_orgunit_country[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_country[".strOriginalTableName"] = "DHIS2_OrgUnit_Country";

	



$tdatadhis2_orgunit_country[".showAddInPopup"] = false;

$tdatadhis2_orgunit_country[".showEditInPopup"] = false;

$tdatadhis2_orgunit_country[".showViewInPopup"] = false;

$tdatadhis2_orgunit_country[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_country[".listAjax"] = false;

	$tdatadhis2_orgunit_country[".audit"] = false;

	$tdatadhis2_orgunit_country[".locking"] = false;


$pages = $tdatadhis2_orgunit_country[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_country[".edit"] = true;
	$tdatadhis2_orgunit_country[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_country[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_country[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_country[".add"] = true;
$tdatadhis2_orgunit_country[".afterAddAction"] = 1;
$tdatadhis2_orgunit_country[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_country[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_country[".list"] = true;
}



$tdatadhis2_orgunit_country[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_country[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_country[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_country[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_country[".printFriendly"] = true;
}



$tdatadhis2_orgunit_country[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_country[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_country[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_country[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_country[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_country[".buttonsAdded"] = false;

$tdatadhis2_orgunit_country[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_country[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_country[".badgeColor"] = "DC143C";


$tdatadhis2_orgunit_country[".allSearchFields"] = array();
$tdatadhis2_orgunit_country[".filterFields"] = array();
$tdatadhis2_orgunit_country[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_country[".googleLikeFields"] = array();
$tdatadhis2_orgunit_country[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_country[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_country[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_country[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_country[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_country[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_country[".pageSize"] = 20;

$tdatadhis2_orgunit_country[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_country[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_country[".orderindexes"] = array();


$tdatadhis2_orgunit_country[".sqlHead"] = "";
$tdatadhis2_orgunit_country[".sqlFrom"] = "";
$tdatadhis2_orgunit_country[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_country[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_country[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_country[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_country[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_country = array();
$tdatadhis2_orgunit_country[".Keys"] = $tableKeysdhis2_orgunit_country;


$tdatadhis2_orgunit_country[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Country","displayName");
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


	$tdatadhis2_orgunit_country["displayName"] = $fdata;
		$tdatadhis2_orgunit_country[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Country","id");
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


	$tdatadhis2_orgunit_country["id"] = $fdata;
		$tdatadhis2_orgunit_country[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Country"]=&$tdatadhis2_orgunit_country;
$field_labels["DHIS2_OrgUnit_Country"] = &$fieldLabelsdhis2_orgunit_country;
$fieldToolTips["DHIS2_OrgUnit_Country"] = &$fieldToolTipsdhis2_orgunit_country;
$placeHolders["DHIS2_OrgUnit_Country"] = &$placeHoldersdhis2_orgunit_country;
$page_titles["DHIS2_OrgUnit_Country"] = &$pageTitlesdhis2_orgunit_country;


changeTextControlsToDate( "DHIS2_OrgUnit_Country" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Country"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Country"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_country_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_country[".sqlquery"] = $queryData_dhis2_orgunit_country;



$tdatadhis2_orgunit_country[".hasEvents"] = false;

?>