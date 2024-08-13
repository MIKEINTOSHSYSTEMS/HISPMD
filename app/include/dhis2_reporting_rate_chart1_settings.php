<?php
$tdatadhis2_reporting_rate_chart1 = array();
$tdatadhis2_reporting_rate_chart1[".searchableFields"] = array();
$tdatadhis2_reporting_rate_chart1[".ShortName"] = "dhis2_reporting_rate_chart1";
$tdatadhis2_reporting_rate_chart1[".OwnerID"] = "";
$tdatadhis2_reporting_rate_chart1[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reporting_rate_chart1[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadhis2_reporting_rate_chart1[".originalPagesByType"] = $tdatadhis2_reporting_rate_chart1[".pagesByType"];
$tdatadhis2_reporting_rate_chart1[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reporting_rate_chart1[".originalPages"] = $tdatadhis2_reporting_rate_chart1[".pages"];
$tdatadhis2_reporting_rate_chart1[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadhis2_reporting_rate_chart1[".originalDefaultPages"] = $tdatadhis2_reporting_rate_chart1[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reporting_rate_chart1 = array();
$fieldToolTipsdhis2_reporting_rate_chart1 = array();
$pageTitlesdhis2_reporting_rate_chart1 = array();
$placeHoldersdhis2_reporting_rate_chart1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reporting_rate_chart1["English"] = array();
	$fieldToolTipsdhis2_reporting_rate_chart1["English"] = array();
	$placeHoldersdhis2_reporting_rate_chart1["English"] = array();
	$pageTitlesdhis2_reporting_rate_chart1["English"] = array();
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["title"] = "Reporting Dates";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["title"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["title"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["organisationUnit"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["organisationUnit"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["dataSet"] = "Data Set";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["dataSet"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["dataSet"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["reportPeriod"] = "Report Period";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["reportPeriod"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["reportPeriod"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS"] = "ACTUAL REPORTS";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["EXPECTED_REPORTS"] = "EXPECTED REPORTS";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["EXPECTED_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["EXPECTED_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["REPORTING_RATE"] = "REPORTING RATE (%)";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["REPORTING_RATE"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["REPORTING_RATE"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS_ON_TIME"] = "ACTUAL REPORTS ON TIME";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rate_chart1["English"]["REPORTING_RATE_ON_TIME"] = "REPORTING RATE ON TIME (%)";
	$fieldToolTipsdhis2_reporting_rate_chart1["English"]["REPORTING_RATE_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate_chart1["English"]["REPORTING_RATE_ON_TIME"] = "";
	if (count($fieldToolTipsdhis2_reporting_rate_chart1["English"]))
		$tdatadhis2_reporting_rate_chart1[".isUseToolTips"] = true;
}


	$tdatadhis2_reporting_rate_chart1[".NCSearch"] = true;

	$tdatadhis2_reporting_rate_chart1[".ChartRefreshTime"] = 0;


$tdatadhis2_reporting_rate_chart1[".shortTableName"] = "dhis2_reporting_rate_chart1";
$tdatadhis2_reporting_rate_chart1[".nSecOptions"] = 0;

$tdatadhis2_reporting_rate_chart1[".mainTableOwnerID"] = "";
$tdatadhis2_reporting_rate_chart1[".entityType"] = 11;
$tdatadhis2_reporting_rate_chart1[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reporting_rate_chart1[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reporting_rate_chart1[".showAddInPopup"] = false;

$tdatadhis2_reporting_rate_chart1[".showEditInPopup"] = false;

$tdatadhis2_reporting_rate_chart1[".showViewInPopup"] = false;

$tdatadhis2_reporting_rate_chart1[".listAjax"] = false;
//	temporary
//$tdatadhis2_reporting_rate_chart1[".listAjax"] = false;

	$tdatadhis2_reporting_rate_chart1[".audit"] = false;

	$tdatadhis2_reporting_rate_chart1[".locking"] = false;


$pages = $tdatadhis2_reporting_rate_chart1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reporting_rate_chart1[".edit"] = true;
	$tdatadhis2_reporting_rate_chart1[".afterEditAction"] = 1;
	$tdatadhis2_reporting_rate_chart1[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reporting_rate_chart1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reporting_rate_chart1[".add"] = true;
$tdatadhis2_reporting_rate_chart1[".afterAddAction"] = 1;
$tdatadhis2_reporting_rate_chart1[".closePopupAfterAdd"] = 1;
$tdatadhis2_reporting_rate_chart1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reporting_rate_chart1[".list"] = true;
}



$tdatadhis2_reporting_rate_chart1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reporting_rate_chart1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reporting_rate_chart1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reporting_rate_chart1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reporting_rate_chart1[".printFriendly"] = true;
}



$tdatadhis2_reporting_rate_chart1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reporting_rate_chart1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reporting_rate_chart1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reporting_rate_chart1[".isUseAjaxSuggest"] = false;





$tdatadhis2_reporting_rate_chart1[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reporting_rate_chart1[".buttonsAdded"] = false;

$tdatadhis2_reporting_rate_chart1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reporting_rate_chart1[".isUseTimeForSearch"] = false;


$tdatadhis2_reporting_rate_chart1[".badgeColor"] = "6DA5C8";


$tdatadhis2_reporting_rate_chart1[".allSearchFields"] = array();
$tdatadhis2_reporting_rate_chart1[".filterFields"] = array();
$tdatadhis2_reporting_rate_chart1[".requiredSearchFields"] = array();

$tdatadhis2_reporting_rate_chart1[".googleLikeFields"] = array();
$tdatadhis2_reporting_rate_chart1[".googleLikeFields"][] = "organisationUnit";
$tdatadhis2_reporting_rate_chart1[".googleLikeFields"][] = "dataSet";
$tdatadhis2_reporting_rate_chart1[".googleLikeFields"][] = "reportPeriod";



$tdatadhis2_reporting_rate_chart1[".tableType"] = "chart";

$tdatadhis2_reporting_rate_chart1[".printerPageOrientation"] = 0;
$tdatadhis2_reporting_rate_chart1[".nPrinterPageScale"] = 100;

$tdatadhis2_reporting_rate_chart1[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reporting_rate_chart1[".geocodingEnabled"] = false;



// chart settings
$tdatadhis2_reporting_rate_chart1[".chartType"] = "2DColumn";
// end of chart settings

$tdatadhis2_reporting_rate_chart1[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_reporting_rate_chart1[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reporting_rate_chart1[".orderindexes"] = array();


$tdatadhis2_reporting_rate_chart1[".sqlHead"] = "";
$tdatadhis2_reporting_rate_chart1[".sqlFrom"] = "";
$tdatadhis2_reporting_rate_chart1[".sqlWhereExpr"] = "";
$tdatadhis2_reporting_rate_chart1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reporting_rate_chart1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reporting_rate_chart1[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reporting_rate_chart1[".highlightSearchResults"] = true;

$tableKeysdhis2_reporting_rate_chart1 = array();
$tdatadhis2_reporting_rate_chart1[".Keys"] = $tableKeysdhis2_reporting_rate_chart1;


$tdatadhis2_reporting_rate_chart1[".hideMobileList"] = array();




//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","title");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["title"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "title";
//	organisationUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationUnit";
	$fdata["GoodName"] = "organisationUnit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","organisationUnit");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate_chart1["organisationUnit"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "organisationUnit";
//	dataSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dataSet";
	$fdata["GoodName"] = "dataSet";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","dataSet");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate_chart1["dataSet"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "dataSet";
//	reportPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reportPeriod";
	$fdata["GoodName"] = "reportPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","reportPeriod");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Periods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Period_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Period_Name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rate_chart1["reportPeriod"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "reportPeriod";
//	ACTUAL_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACTUAL_REPORTS";
	$fdata["GoodName"] = "ACTUAL_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","ACTUAL_REPORTS");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["ACTUAL_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "ACTUAL_REPORTS";
//	EXPECTED_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EXPECTED_REPORTS";
	$fdata["GoodName"] = "EXPECTED_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","EXPECTED_REPORTS");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["EXPECTED_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "EXPECTED_REPORTS";
//	REPORTING_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REPORTING_RATE";
	$fdata["GoodName"] = "REPORTING_RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","REPORTING_RATE");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["REPORTING_RATE"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "REPORTING_RATE";
//	ACTUAL_REPORTS_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["GoodName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","ACTUAL_REPORTS_ON_TIME");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["ACTUAL_REPORTS_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "ACTUAL_REPORTS_ON_TIME";
//	REPORTING_RATE_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REPORTING_RATE_ON_TIME";
	$fdata["GoodName"] = "REPORTING_RATE_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Chart","REPORTING_RATE_ON_TIME");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_reporting_rate_chart1["REPORTING_RATE_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate_chart1[".searchableFields"][] = "REPORTING_RATE_ON_TIME";

$tdatadhis2_reporting_rate_chart1[".chartLabelField"] = "reportPeriod";
$tdatadhis2_reporting_rate_chart1[".chartSeries"] = array();
$tdatadhis2_reporting_rate_chart1[".chartSeries"][] = array(
	"field" => "EXPECTED_REPORTS",
	"total" => ""
);
$tdatadhis2_reporting_rate_chart1[".chartSeries"][] = array(
	"field" => "ACTUAL_REPORTS",
	"total" => ""
);
$tdatadhis2_reporting_rate_chart1[".chartSeries"][] = array(
	"field" => "ACTUAL_REPORTS_ON_TIME",
	"total" => ""
);
	$tdatadhis2_reporting_rate_chart1[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DHIS2_Reporting_Rate_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="0">
			<attr value="name">EXPECTED_REPORTS</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="1">
			<attr value="name">ACTUAL_REPORTS</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="2">
			<attr value="name">ACTUAL_REPORTS_ON_TIME</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="3">
		<attr value="name">reportPeriod</attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="head">'.xmlencode("DHIS2 Reporting Rate Chart by Reporting Period").'</attr>
<attr value="foot">'.xmlencode("Data Set").'</attr>
<attr value="y_axis_label">'.xmlencode("Reporting Periods").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="0">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="1">
		<attr value="name">organisationUnit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","organisationUnit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="2">
		<attr value="name">dataSet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","dataSet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="3">
		<attr value="name">reportPeriod</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","reportPeriod")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="4">
		<attr value="name">ACTUAL_REPORTS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","ACTUAL_REPORTS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="5">
		<attr value="name">EXPECTED_REPORTS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","EXPECTED_REPORTS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="6">
		<attr value="name">REPORTING_RATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","REPORTING_RATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="7">
		<attr value="name">ACTUAL_REPORTS_ON_TIME</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","ACTUAL_REPORTS_ON_TIME")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '<attr value="8">
		<attr value="name">REPORTING_RATE_ON_TIME</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rate_Chart","REPORTING_RATE_ON_TIME")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadhis2_reporting_rate_chart1[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DHIS2_Reporting_Rate_Chart</attr>
<attr value="short_table_name">dhis2_reporting_rate_chart1</attr>
</attr>

</chart>';

$tables_data["DHIS2_Reporting_Rate_Chart"]=&$tdatadhis2_reporting_rate_chart1;
$field_labels["DHIS2_Reporting_Rate_Chart"] = &$fieldLabelsdhis2_reporting_rate_chart1;
$fieldToolTips["DHIS2_Reporting_Rate_Chart"] = &$fieldToolTipsdhis2_reporting_rate_chart1;
$placeHolders["DHIS2_Reporting_Rate_Chart"] = &$placeHoldersdhis2_reporting_rate_chart1;
$page_titles["DHIS2_Reporting_Rate_Chart"] = &$pageTitlesdhis2_reporting_rate_chart1;


changeTextControlsToDate( "DHIS2_Reporting_Rate_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reporting_Rate_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reporting_Rate_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reporting_rate_chart1_ops.php" ) );



	
																												;

									

$tdatadhis2_reporting_rate_chart1[".sqlquery"] = $queryData_dhis2_reporting_rate_chart1;



include_once(getabspath("include/dhis2_reporting_rate_chart1_events.php"));
$tdatadhis2_reporting_rate_chart1[".hasEvents"] = true;

?>