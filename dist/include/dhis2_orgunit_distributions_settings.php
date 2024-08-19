<?php
$tdatadhis2_orgunit_distributions = array();
$tdatadhis2_orgunit_distributions[".searchableFields"] = array();
$tdatadhis2_orgunit_distributions[".ShortName"] = "dhis2_orgunit_distributions";
$tdatadhis2_orgunit_distributions[".OwnerID"] = "";
$tdatadhis2_orgunit_distributions[".OriginalTable"] = "DHIS2_OrgUnit_Distributions";


$tdatadhis2_orgunit_distributions[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_distributions[".originalPagesByType"] = $tdatadhis2_orgunit_distributions[".pagesByType"];
$tdatadhis2_orgunit_distributions[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_distributions[".originalPages"] = $tdatadhis2_orgunit_distributions[".pages"];
$tdatadhis2_orgunit_distributions[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_distributions[".originalDefaultPages"] = $tdatadhis2_orgunit_distributions[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_distributions = array();
$fieldToolTipsdhis2_orgunit_distributions = array();
$pageTitlesdhis2_orgunit_distributions = array();
$placeHoldersdhis2_orgunit_distributions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_distributions["English"] = array();
	$fieldToolTipsdhis2_orgunit_distributions["English"] = array();
	$placeHoldersdhis2_orgunit_distributions["English"] = array();
	$pageTitlesdhis2_orgunit_distributions["English"] = array();
	$fieldLabelsdhis2_orgunit_distributions["English"]["name"] = "Name";
	$fieldToolTipsdhis2_orgunit_distributions["English"]["name"] = "";
	$placeHoldersdhis2_orgunit_distributions["English"]["name"] = "";
	$fieldLabelsdhis2_orgunit_distributions["English"]["column"] = "Column";
	$fieldToolTipsdhis2_orgunit_distributions["English"]["column"] = "";
	$placeHoldersdhis2_orgunit_distributions["English"]["column"] = "";
	$fieldLabelsdhis2_orgunit_distributions["English"]["rows"] = "Rows";
	$fieldToolTipsdhis2_orgunit_distributions["English"]["rows"] = "";
	$placeHoldersdhis2_orgunit_distributions["English"]["rows"] = "";
	if (count($fieldToolTipsdhis2_orgunit_distributions["English"]))
		$tdatadhis2_orgunit_distributions[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_distributions[".NCSearch"] = true;



$tdatadhis2_orgunit_distributions[".shortTableName"] = "dhis2_orgunit_distributions";
$tdatadhis2_orgunit_distributions[".nSecOptions"] = 0;

$tdatadhis2_orgunit_distributions[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_distributions[".entityType"] = 7;
$tdatadhis2_orgunit_distributions[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_orgunit_distributions[".strOriginalTableName"] = "DHIS2_OrgUnit_Distributions";

	



$tdatadhis2_orgunit_distributions[".showAddInPopup"] = false;

$tdatadhis2_orgunit_distributions[".showEditInPopup"] = false;

$tdatadhis2_orgunit_distributions[".showViewInPopup"] = false;

$tdatadhis2_orgunit_distributions[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_distributions[".listAjax"] = false;

	$tdatadhis2_orgunit_distributions[".audit"] = true;

	$tdatadhis2_orgunit_distributions[".locking"] = true;


$pages = $tdatadhis2_orgunit_distributions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_distributions[".edit"] = true;
	$tdatadhis2_orgunit_distributions[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_distributions[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_distributions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_distributions[".add"] = true;
$tdatadhis2_orgunit_distributions[".afterAddAction"] = 1;
$tdatadhis2_orgunit_distributions[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_distributions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_distributions[".list"] = true;
}



$tdatadhis2_orgunit_distributions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_distributions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_distributions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_distributions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_distributions[".printFriendly"] = true;
}



$tdatadhis2_orgunit_distributions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_distributions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_distributions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_distributions[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_distributions[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_distributions[".buttonsAdded"] = false;

$tdatadhis2_orgunit_distributions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_distributions[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_distributions[".badgeColor"] = "B22222";


$tdatadhis2_orgunit_distributions[".allSearchFields"] = array();
$tdatadhis2_orgunit_distributions[".filterFields"] = array();
$tdatadhis2_orgunit_distributions[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_distributions[".googleLikeFields"] = array();
$tdatadhis2_orgunit_distributions[".googleLikeFields"][] = "name";
$tdatadhis2_orgunit_distributions[".googleLikeFields"][] = "column";




$tdatadhis2_orgunit_distributions[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_distributions[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_distributions[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_distributions[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_distributions[".pageSize"] = 20;

$tdatadhis2_orgunit_distributions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_distributions[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_distributions[".orderindexes"] = array();


$tdatadhis2_orgunit_distributions[".sqlHead"] = "";
$tdatadhis2_orgunit_distributions[".sqlFrom"] = "";
$tdatadhis2_orgunit_distributions[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_distributions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_distributions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_distributions[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_distributions[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_distributions = array();
$tdatadhis2_orgunit_distributions[".Keys"] = $tableKeysdhis2_orgunit_distributions;


$tdatadhis2_orgunit_distributions[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Distributions","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "headers/*/name";

	
		$fdata["FullName"] = "name";

	
	
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


	$tdatadhis2_orgunit_distributions["name"] = $fdata;
		$tdatadhis2_orgunit_distributions[".searchableFields"][] = "name";
//	column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "column";
	$fdata["GoodName"] = "column";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Distributions","column");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "headers/*/column";

	
		$fdata["FullName"] = "column";

	
	
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


	$tdatadhis2_orgunit_distributions["column"] = $fdata;
		$tdatadhis2_orgunit_distributions[".searchableFields"][] = "column";
//	rows
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rows";
	$fdata["GoodName"] = "rows";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Distributions","rows");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/*";

	
		$fdata["FullName"] = "rows";

	
	
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


	$tdatadhis2_orgunit_distributions["rows"] = $fdata;
		$tdatadhis2_orgunit_distributions[".searchableFields"][] = "rows";


$tables_data["DHIS2_OrgUnit_Distributions"]=&$tdatadhis2_orgunit_distributions;
$field_labels["DHIS2_OrgUnit_Distributions"] = &$fieldLabelsdhis2_orgunit_distributions;
$fieldToolTips["DHIS2_OrgUnit_Distributions"] = &$fieldToolTipsdhis2_orgunit_distributions;
$placeHolders["DHIS2_OrgUnit_Distributions"] = &$placeHoldersdhis2_orgunit_distributions;
$page_titles["DHIS2_OrgUnit_Distributions"] = &$pageTitlesdhis2_orgunit_distributions;


changeTextControlsToDate( "DHIS2_OrgUnit_Distributions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Distributions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Distributions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_distributions_ops.php" ) );



	
																												;

			

$tdatadhis2_orgunit_distributions[".sqlquery"] = $queryData_dhis2_orgunit_distributions;



include_once(getabspath("include/dhis2_orgunit_distributions_events.php"));
$tdatadhis2_orgunit_distributions[".hasEvents"] = true;

?>