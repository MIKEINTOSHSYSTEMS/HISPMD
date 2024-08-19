<?php
$tdatadhis2_organisation_units = array();
$tdatadhis2_organisation_units[".searchableFields"] = array();
$tdatadhis2_organisation_units[".ShortName"] = "dhis2_organisation_units";
$tdatadhis2_organisation_units[".OwnerID"] = "";
$tdatadhis2_organisation_units[".OriginalTable"] = "DHIS2_Organisation_Units";


$tdatadhis2_organisation_units[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_organisation_units[".originalPagesByType"] = $tdatadhis2_organisation_units[".pagesByType"];
$tdatadhis2_organisation_units[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_organisation_units[".originalPages"] = $tdatadhis2_organisation_units[".pages"];
$tdatadhis2_organisation_units[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_organisation_units[".originalDefaultPages"] = $tdatadhis2_organisation_units[".defaultPages"];

//	field labels
$fieldLabelsdhis2_organisation_units = array();
$fieldToolTipsdhis2_organisation_units = array();
$pageTitlesdhis2_organisation_units = array();
$placeHoldersdhis2_organisation_units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_organisation_units["English"] = array();
	$fieldToolTipsdhis2_organisation_units["English"] = array();
	$placeHoldersdhis2_organisation_units["English"] = array();
	$pageTitlesdhis2_organisation_units["English"] = array();
	$fieldLabelsdhis2_organisation_units["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_organisation_units["English"]["displayName"] = "";
	$placeHoldersdhis2_organisation_units["English"]["displayName"] = "";
	$fieldLabelsdhis2_organisation_units["English"]["id"] = "Id";
	$fieldToolTipsdhis2_organisation_units["English"]["id"] = "";
	$placeHoldersdhis2_organisation_units["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_organisation_units["English"]))
		$tdatadhis2_organisation_units[".isUseToolTips"] = true;
}


	$tdatadhis2_organisation_units[".NCSearch"] = true;



$tdatadhis2_organisation_units[".shortTableName"] = "dhis2_organisation_units";
$tdatadhis2_organisation_units[".nSecOptions"] = 0;

$tdatadhis2_organisation_units[".mainTableOwnerID"] = "";
$tdatadhis2_organisation_units[".entityType"] = 7;
$tdatadhis2_organisation_units[".connId"] = "xhispmdathispmdmerqconsultancy";


$tdatadhis2_organisation_units[".strOriginalTableName"] = "DHIS2_Organisation_Units";

	



$tdatadhis2_organisation_units[".showAddInPopup"] = false;

$tdatadhis2_organisation_units[".showEditInPopup"] = false;

$tdatadhis2_organisation_units[".showViewInPopup"] = false;

$tdatadhis2_organisation_units[".listAjax"] = false;
//	temporary
//$tdatadhis2_organisation_units[".listAjax"] = false;

	$tdatadhis2_organisation_units[".audit"] = true;

	$tdatadhis2_organisation_units[".locking"] = true;


$pages = $tdatadhis2_organisation_units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_organisation_units[".edit"] = true;
	$tdatadhis2_organisation_units[".afterEditAction"] = 1;
	$tdatadhis2_organisation_units[".closePopupAfterEdit"] = 1;
	$tdatadhis2_organisation_units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_organisation_units[".add"] = true;
$tdatadhis2_organisation_units[".afterAddAction"] = 1;
$tdatadhis2_organisation_units[".closePopupAfterAdd"] = 1;
$tdatadhis2_organisation_units[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_organisation_units[".list"] = true;
}



$tdatadhis2_organisation_units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_organisation_units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_organisation_units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_organisation_units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_organisation_units[".printFriendly"] = true;
}



$tdatadhis2_organisation_units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_organisation_units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_organisation_units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_organisation_units[".isUseAjaxSuggest"] = false;





$tdatadhis2_organisation_units[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_organisation_units[".buttonsAdded"] = false;

$tdatadhis2_organisation_units[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_organisation_units[".isUseTimeForSearch"] = false;


$tdatadhis2_organisation_units[".badgeColor"] = "E67349";


$tdatadhis2_organisation_units[".allSearchFields"] = array();
$tdatadhis2_organisation_units[".filterFields"] = array();
$tdatadhis2_organisation_units[".requiredSearchFields"] = array();

$tdatadhis2_organisation_units[".googleLikeFields"] = array();
$tdatadhis2_organisation_units[".googleLikeFields"][] = "displayName";
$tdatadhis2_organisation_units[".googleLikeFields"][] = "id";




$tdatadhis2_organisation_units[".printerPageOrientation"] = 0;
$tdatadhis2_organisation_units[".nPrinterPageScale"] = 100;

$tdatadhis2_organisation_units[".nPrinterSplitRecords"] = 40;

$tdatadhis2_organisation_units[".geocodingEnabled"] = false;










$tdatadhis2_organisation_units[".pageSize"] = 20;

$tdatadhis2_organisation_units[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_organisation_units[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_organisation_units[".orderindexes"] = array();


$tdatadhis2_organisation_units[".sqlHead"] = "";
$tdatadhis2_organisation_units[".sqlFrom"] = "";
$tdatadhis2_organisation_units[".sqlWhereExpr"] = "";
$tdatadhis2_organisation_units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_organisation_units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_organisation_units[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_organisation_units[".highlightSearchResults"] = true;

$tableKeysdhis2_organisation_units = array();
$tdatadhis2_organisation_units[".Keys"] = $tableKeysdhis2_organisation_units;


$tdatadhis2_organisation_units[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Organisation_Units","displayName");
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


	$tdatadhis2_organisation_units["displayName"] = $fdata;
		$tdatadhis2_organisation_units[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Organisation_Units","id");
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


	$tdatadhis2_organisation_units["id"] = $fdata;
		$tdatadhis2_organisation_units[".searchableFields"][] = "id";


$tables_data["DHIS2_Organisation_Units"]=&$tdatadhis2_organisation_units;
$field_labels["DHIS2_Organisation_Units"] = &$fieldLabelsdhis2_organisation_units;
$fieldToolTips["DHIS2_Organisation_Units"] = &$fieldToolTipsdhis2_organisation_units;
$placeHolders["DHIS2_Organisation_Units"] = &$placeHoldersdhis2_organisation_units;
$page_titles["DHIS2_Organisation_Units"] = &$pageTitlesdhis2_organisation_units;


changeTextControlsToDate( "DHIS2_Organisation_Units" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Organisation_Units"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Organisation_Units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_organisation_units_ops.php" ) );



	
																												;

		

$tdatadhis2_organisation_units[".sqlquery"] = $queryData_dhis2_organisation_units;



$tdatadhis2_organisation_units[".hasEvents"] = false;

?>