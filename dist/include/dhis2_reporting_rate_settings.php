<?php
$tdatadhis2_reporting_rate = array();
$tdatadhis2_reporting_rate[".searchableFields"] = array();
$tdatadhis2_reporting_rate[".ShortName"] = "dhis2_reporting_rate";
$tdatadhis2_reporting_rate[".OwnerID"] = "";
$tdatadhis2_reporting_rate[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reporting_rate[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_reporting_rate[".originalPagesByType"] = $tdatadhis2_reporting_rate[".pagesByType"];
$tdatadhis2_reporting_rate[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reporting_rate[".originalPages"] = $tdatadhis2_reporting_rate[".pages"];
$tdatadhis2_reporting_rate[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_reporting_rate[".originalDefaultPages"] = $tdatadhis2_reporting_rate[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reporting_rate = array();
$fieldToolTipsdhis2_reporting_rate = array();
$pageTitlesdhis2_reporting_rate = array();
$placeHoldersdhis2_reporting_rate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reporting_rate["English"] = array();
	$fieldToolTipsdhis2_reporting_rate["English"] = array();
	$placeHoldersdhis2_reporting_rate["English"] = array();
	$pageTitlesdhis2_reporting_rate["English"] = array();
	$fieldLabelsdhis2_reporting_rate["English"]["title"] = "Reporting Dates";
	$fieldToolTipsdhis2_reporting_rate["English"]["title"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["title"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["dataSet"] = "Data Set";
	$fieldToolTipsdhis2_reporting_rate["English"]["dataSet"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["dataSet"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["reportPeriod"] = "Report Period";
	$fieldToolTipsdhis2_reporting_rate["English"]["reportPeriod"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["reportPeriod"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["ACTUAL_REPORTS"] = "ACTUAL REPORTS";
	$fieldToolTipsdhis2_reporting_rate["English"]["ACTUAL_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["ACTUAL_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["EXPECTED_REPORTS"] = "EXPECTED REPORTS";
	$fieldToolTipsdhis2_reporting_rate["English"]["EXPECTED_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["EXPECTED_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["REPORTING_RATE"] = "REPORTING RATE (%)";
	$fieldToolTipsdhis2_reporting_rate["English"]["REPORTING_RATE"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["REPORTING_RATE"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["ACTUAL_REPORTS_ON_TIME"] = "ACTUAL REPORTS ON TIME";
	$fieldToolTipsdhis2_reporting_rate["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["REPORTING_RATE_ON_TIME"] = "REPORTING RATE ON TIME (%)";
	$fieldToolTipsdhis2_reporting_rate["English"]["REPORTING_RATE_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["REPORTING_RATE_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rate["English"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reporting_rate["English"]["organisationUnit"] = "";
	$placeHoldersdhis2_reporting_rate["English"]["organisationUnit"] = "";
	if (count($fieldToolTipsdhis2_reporting_rate["English"]))
		$tdatadhis2_reporting_rate[".isUseToolTips"] = true;
}


	$tdatadhis2_reporting_rate[".NCSearch"] = true;



$tdatadhis2_reporting_rate[".shortTableName"] = "dhis2_reporting_rate";
$tdatadhis2_reporting_rate[".nSecOptions"] = 0;

$tdatadhis2_reporting_rate[".mainTableOwnerID"] = "";
$tdatadhis2_reporting_rate[".entityType"] = 7;
$tdatadhis2_reporting_rate[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reporting_rate[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reporting_rate[".showAddInPopup"] = false;

$tdatadhis2_reporting_rate[".showEditInPopup"] = false;

$tdatadhis2_reporting_rate[".showViewInPopup"] = false;

$tdatadhis2_reporting_rate[".listAjax"] = false;
//	temporary
//$tdatadhis2_reporting_rate[".listAjax"] = false;

	$tdatadhis2_reporting_rate[".audit"] = true;

	$tdatadhis2_reporting_rate[".locking"] = true;


$pages = $tdatadhis2_reporting_rate[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reporting_rate[".edit"] = true;
	$tdatadhis2_reporting_rate[".afterEditAction"] = 1;
	$tdatadhis2_reporting_rate[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reporting_rate[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reporting_rate[".add"] = true;
$tdatadhis2_reporting_rate[".afterAddAction"] = 1;
$tdatadhis2_reporting_rate[".closePopupAfterAdd"] = 1;
$tdatadhis2_reporting_rate[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reporting_rate[".list"] = true;
}



$tdatadhis2_reporting_rate[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reporting_rate[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reporting_rate[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reporting_rate[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reporting_rate[".printFriendly"] = true;
}



$tdatadhis2_reporting_rate[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reporting_rate[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reporting_rate[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reporting_rate[".isUseAjaxSuggest"] = false;





$tdatadhis2_reporting_rate[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reporting_rate[".buttonsAdded"] = false;

$tdatadhis2_reporting_rate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reporting_rate[".isUseTimeForSearch"] = false;


$tdatadhis2_reporting_rate[".badgeColor"] = "DAA520";


$tdatadhis2_reporting_rate[".allSearchFields"] = array();
$tdatadhis2_reporting_rate[".filterFields"] = array();
$tdatadhis2_reporting_rate[".requiredSearchFields"] = array();

$tdatadhis2_reporting_rate[".googleLikeFields"] = array();
$tdatadhis2_reporting_rate[".googleLikeFields"][] = "organisationUnit";
$tdatadhis2_reporting_rate[".googleLikeFields"][] = "dataSet";
$tdatadhis2_reporting_rate[".googleLikeFields"][] = "reportPeriod";




$tdatadhis2_reporting_rate[".printerPageOrientation"] = 0;
$tdatadhis2_reporting_rate[".nPrinterPageScale"] = 100;

$tdatadhis2_reporting_rate[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reporting_rate[".geocodingEnabled"] = false;




$tdatadhis2_reporting_rate[".isDisplayLoading"] = true;






$tdatadhis2_reporting_rate[".pageSize"] = 20;

$tdatadhis2_reporting_rate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reporting_rate[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reporting_rate[".orderindexes"] = array();


$tdatadhis2_reporting_rate[".sqlHead"] = "";
$tdatadhis2_reporting_rate[".sqlFrom"] = "";
$tdatadhis2_reporting_rate[".sqlWhereExpr"] = "";
$tdatadhis2_reporting_rate[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reporting_rate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reporting_rate[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reporting_rate[".highlightSearchResults"] = true;

$tableKeysdhis2_reporting_rate = array();
$tdatadhis2_reporting_rate[".Keys"] = $tableKeysdhis2_reporting_rate;


$tdatadhis2_reporting_rate[".hideMobileList"] = array();




//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","title");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "title";

	
		$fdata["FullName"] = "title";

	
	
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


	$tdatadhis2_reporting_rate["title"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "title";
//	organisationUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationUnit";
	$fdata["GoodName"] = "organisationUnit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","organisationUnit");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/organisationUnit";

	
		$fdata["FullName"] = "organisationUnit";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Organisation_Unit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ACTUAL_REPORTS";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate["organisationUnit"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "organisationUnit";
//	dataSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dataSet";
	$fdata["GoodName"] = "dataSet";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","dataSet");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/dataSet";

	
		$fdata["FullName"] = "dataSet";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Datasets";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ACTUAL_REPORTS";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate["dataSet"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "dataSet";
//	reportPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reportPeriod";
	$fdata["GoodName"] = "reportPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","reportPeriod");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/reportPeriod";

	
		$fdata["FullName"] = "reportPeriod";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.dhis2_periods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "period_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ACTUAL_REPORTS";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate["reportPeriod"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "reportPeriod";
//	ACTUAL_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACTUAL_REPORTS";
	$fdata["GoodName"] = "ACTUAL_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","ACTUAL_REPORTS");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/ACTUAL_REPORTS";

	
		$fdata["FullName"] = "ACTUAL_REPORTS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadhis2_reporting_rate["ACTUAL_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "ACTUAL_REPORTS";
//	EXPECTED_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EXPECTED_REPORTS";
	$fdata["GoodName"] = "EXPECTED_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","EXPECTED_REPORTS");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/EXPECTED_REPORTS";

	
		$fdata["FullName"] = "EXPECTED_REPORTS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadhis2_reporting_rate["EXPECTED_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "EXPECTED_REPORTS";
//	REPORTING_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REPORTING_RATE";
	$fdata["GoodName"] = "REPORTING_RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","REPORTING_RATE");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/REPORTING_RATE";

	
		$fdata["FullName"] = "REPORTING_RATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadhis2_reporting_rate["REPORTING_RATE"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "REPORTING_RATE";
//	ACTUAL_REPORTS_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["GoodName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","ACTUAL_REPORTS_ON_TIME");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/ACTUAL_REPORTS_ON_TIME";

	
		$fdata["FullName"] = "ACTUAL_REPORTS_ON_TIME";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadhis2_reporting_rate["ACTUAL_REPORTS_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "ACTUAL_REPORTS_ON_TIME";
//	REPORTING_RATE_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REPORTING_RATE_ON_TIME";
	$fdata["GoodName"] = "REPORTING_RATE_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate","REPORTING_RATE_ON_TIME");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/REPORTING_RATE_ON_TIME";

	
		$fdata["FullName"] = "REPORTING_RATE_ON_TIME";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadhis2_reporting_rate["REPORTING_RATE_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate[".searchableFields"][] = "REPORTING_RATE_ON_TIME";


$tables_data["DHIS2_Reporting_Rate"]=&$tdatadhis2_reporting_rate;
$field_labels["DHIS2_Reporting_Rate"] = &$fieldLabelsdhis2_reporting_rate;
$fieldToolTips["DHIS2_Reporting_Rate"] = &$fieldToolTipsdhis2_reporting_rate;
$placeHolders["DHIS2_Reporting_Rate"] = &$placeHoldersdhis2_reporting_rate;
$page_titles["DHIS2_Reporting_Rate"] = &$pageTitlesdhis2_reporting_rate;


changeTextControlsToDate( "DHIS2_Reporting_Rate" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reporting_Rate"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reporting_Rate"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reporting_rate_ops.php" ) );



	
																												;

									

$tdatadhis2_reporting_rate[".sqlquery"] = $queryData_dhis2_reporting_rate;



include_once(getabspath("include/dhis2_reporting_rate_events.php"));
$tdatadhis2_reporting_rate[".hasEvents"] = true;

?>