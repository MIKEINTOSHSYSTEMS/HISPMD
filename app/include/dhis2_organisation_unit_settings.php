<?php
$tdatadhis2_organisation_unit = array();
$tdatadhis2_organisation_unit[".searchableFields"] = array();
$tdatadhis2_organisation_unit[".ShortName"] = "dhis2_organisation_unit";
$tdatadhis2_organisation_unit[".OwnerID"] = "";
$tdatadhis2_organisation_unit[".OriginalTable"] = "DHIS2_Organisation_Unit";


$tdatadhis2_organisation_unit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_organisation_unit[".originalPagesByType"] = $tdatadhis2_organisation_unit[".pagesByType"];
$tdatadhis2_organisation_unit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_organisation_unit[".originalPages"] = $tdatadhis2_organisation_unit[".pages"];
$tdatadhis2_organisation_unit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_organisation_unit[".originalDefaultPages"] = $tdatadhis2_organisation_unit[".defaultPages"];

//	field labels
$fieldLabelsdhis2_organisation_unit = array();
$fieldToolTipsdhis2_organisation_unit = array();
$pageTitlesdhis2_organisation_unit = array();
$placeHoldersdhis2_organisation_unit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_organisation_unit["English"] = array();
	$fieldToolTipsdhis2_organisation_unit["English"] = array();
	$placeHoldersdhis2_organisation_unit["English"] = array();
	$pageTitlesdhis2_organisation_unit["English"] = array();
	$fieldLabelsdhis2_organisation_unit["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_organisation_unit["English"]["displayName"] = "";
	$placeHoldersdhis2_organisation_unit["English"]["displayName"] = "";
	$fieldLabelsdhis2_organisation_unit["English"]["id"] = "Id";
	$fieldToolTipsdhis2_organisation_unit["English"]["id"] = "";
	$placeHoldersdhis2_organisation_unit["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_organisation_unit["English"]))
		$tdatadhis2_organisation_unit[".isUseToolTips"] = true;
}


	$tdatadhis2_organisation_unit[".NCSearch"] = true;



$tdatadhis2_organisation_unit[".shortTableName"] = "dhis2_organisation_unit";
$tdatadhis2_organisation_unit[".nSecOptions"] = 0;

$tdatadhis2_organisation_unit[".mainTableOwnerID"] = "";
$tdatadhis2_organisation_unit[".entityType"] = 7;
$tdatadhis2_organisation_unit[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_organisation_unit[".strOriginalTableName"] = "DHIS2_Organisation_Unit";

	



$tdatadhis2_organisation_unit[".showAddInPopup"] = false;

$tdatadhis2_organisation_unit[".showEditInPopup"] = false;

$tdatadhis2_organisation_unit[".showViewInPopup"] = false;

$tdatadhis2_organisation_unit[".listAjax"] = false;
//	temporary
//$tdatadhis2_organisation_unit[".listAjax"] = false;

	$tdatadhis2_organisation_unit[".audit"] = true;

	$tdatadhis2_organisation_unit[".locking"] = false;


$pages = $tdatadhis2_organisation_unit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_organisation_unit[".edit"] = true;
	$tdatadhis2_organisation_unit[".afterEditAction"] = 1;
	$tdatadhis2_organisation_unit[".closePopupAfterEdit"] = 1;
	$tdatadhis2_organisation_unit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_organisation_unit[".add"] = true;
$tdatadhis2_organisation_unit[".afterAddAction"] = 1;
$tdatadhis2_organisation_unit[".closePopupAfterAdd"] = 1;
$tdatadhis2_organisation_unit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_organisation_unit[".list"] = true;
}



$tdatadhis2_organisation_unit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_organisation_unit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_organisation_unit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_organisation_unit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_organisation_unit[".printFriendly"] = true;
}



$tdatadhis2_organisation_unit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_organisation_unit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_organisation_unit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_organisation_unit[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_organisation_unit[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_organisation_unit[".buttonsAdded"] = false;

$tdatadhis2_organisation_unit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_organisation_unit[".isUseTimeForSearch"] = false;


$tdatadhis2_organisation_unit[".badgeColor"] = "1E90FF";


$tdatadhis2_organisation_unit[".allSearchFields"] = array();
$tdatadhis2_organisation_unit[".filterFields"] = array();
$tdatadhis2_organisation_unit[".requiredSearchFields"] = array();

$tdatadhis2_organisation_unit[".googleLikeFields"] = array();
$tdatadhis2_organisation_unit[".googleLikeFields"][] = "displayName";
$tdatadhis2_organisation_unit[".googleLikeFields"][] = "id";




$tdatadhis2_organisation_unit[".printerPageOrientation"] = 0;
$tdatadhis2_organisation_unit[".nPrinterPageScale"] = 100;

$tdatadhis2_organisation_unit[".nPrinterSplitRecords"] = 40;

$tdatadhis2_organisation_unit[".geocodingEnabled"] = false;










$tdatadhis2_organisation_unit[".pageSize"] = 20;

$tdatadhis2_organisation_unit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_organisation_unit[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_organisation_unit[".orderindexes"] = array();
	foreach ( my_json_decode("") as $orderItem ) {
		$tdatadhis2_organisation_unit[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatadhis2_organisation_unit[".sqlHead"] = "";
$tdatadhis2_organisation_unit[".sqlFrom"] = "";
$tdatadhis2_organisation_unit[".sqlWhereExpr"] = "";
$tdatadhis2_organisation_unit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_organisation_unit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_organisation_unit[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_organisation_unit[".highlightSearchResults"] = true;

$tableKeysdhis2_organisation_unit = array();
$tdatadhis2_organisation_unit[".Keys"] = $tableKeysdhis2_organisation_unit;


$tdatadhis2_organisation_unit[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Organisation_Unit","displayName");
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


	$tdatadhis2_organisation_unit["displayName"] = $fdata;
		$tdatadhis2_organisation_unit[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Organisation_Unit","id");
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


	$tdatadhis2_organisation_unit["id"] = $fdata;
		$tdatadhis2_organisation_unit[".searchableFields"][] = "id";


$tables_data["DHIS2_Organisation_Unit"]=&$tdatadhis2_organisation_unit;
$field_labels["DHIS2_Organisation_Unit"] = &$fieldLabelsdhis2_organisation_unit;
$fieldToolTips["DHIS2_Organisation_Unit"] = &$fieldToolTipsdhis2_organisation_unit;
$placeHolders["DHIS2_Organisation_Unit"] = &$placeHoldersdhis2_organisation_unit;
$page_titles["DHIS2_Organisation_Unit"] = &$pageTitlesdhis2_organisation_unit;


changeTextControlsToDate( "DHIS2_Organisation_Unit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Organisation_Unit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Organisation_Unit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_organisation_unit_ops.php" ) );



	
																												;

		

$tdatadhis2_organisation_unit[".sqlquery"] = $queryData_dhis2_organisation_unit;



$tdatadhis2_organisation_unit[".hasEvents"] = false;

?>