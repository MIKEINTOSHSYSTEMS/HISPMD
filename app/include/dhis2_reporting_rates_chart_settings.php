<?php
$tdatadhis2_reporting_rates_chart = array();
$tdatadhis2_reporting_rates_chart[".searchableFields"] = array();
$tdatadhis2_reporting_rates_chart[".ShortName"] = "dhis2_reporting_rates_chart";
$tdatadhis2_reporting_rates_chart[".OwnerID"] = "";
$tdatadhis2_reporting_rates_chart[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reporting_rates_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadhis2_reporting_rates_chart[".originalPagesByType"] = $tdatadhis2_reporting_rates_chart[".pagesByType"];
$tdatadhis2_reporting_rates_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reporting_rates_chart[".originalPages"] = $tdatadhis2_reporting_rates_chart[".pages"];
$tdatadhis2_reporting_rates_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadhis2_reporting_rates_chart[".originalDefaultPages"] = $tdatadhis2_reporting_rates_chart[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reporting_rates_chart = array();
$fieldToolTipsdhis2_reporting_rates_chart = array();
$pageTitlesdhis2_reporting_rates_chart = array();
$placeHoldersdhis2_reporting_rates_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reporting_rates_chart["English"] = array();
	$fieldToolTipsdhis2_reporting_rates_chart["English"] = array();
	$placeHoldersdhis2_reporting_rates_chart["English"] = array();
	$pageTitlesdhis2_reporting_rates_chart["English"] = array();
	$fieldLabelsdhis2_reporting_rates_chart["English"]["title"] = "Title";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["title"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["title"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["organisationUnit"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["organisationUnit"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["dataSet"] = "Data Set";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["dataSet"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["dataSet"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["reportPeriod"] = "Report Period";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["reportPeriod"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["reportPeriod"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS"] = "ACTUAL REPORTS";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["EXPECTED_REPORTS"] = "EXPECTED REPORTS";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["EXPECTED_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["EXPECTED_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["REPORTING_RATE"] = "REPORTING RATE (%)";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["REPORTING_RATE"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["REPORTING_RATE"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS_ON_TIME"] = "ACTUAL REPORTS ON TIME";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["English"]["REPORTING_RATE_ON_TIME"] = "REPORTING RATE ON TIME (%)";
	$fieldToolTipsdhis2_reporting_rates_chart["English"]["REPORTING_RATE_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rates_chart["English"]["REPORTING_RATE_ON_TIME"] = "";
	if (count($fieldToolTipsdhis2_reporting_rates_chart["English"]))
		$tdatadhis2_reporting_rates_chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"] = array();
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"] = array();
	$placeHoldersdhis2_reporting_rates_chart["Amharic"] = array();
	$pageTitlesdhis2_reporting_rates_chart["Amharic"] = array();
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["title"] = "ርዕስ";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["title"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["title"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["organisationUnit"] = "የድርጅት ክፍል";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["organisationUnit"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["organisationUnit"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["dataSet"] = "የውሂብ ስብስብ";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["dataSet"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["dataSet"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["reportPeriod"] = "የሪፖርት ጊዜ";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["reportPeriod"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["reportPeriod"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS"] = "ትክክለኛ ሪፖርቶች";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["EXPECTED_REPORTS"] = "የሚጠበቁ ሪፖርቶች";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["EXPECTED_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["EXPECTED_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE"] = "የሪፖርት ደረጃ (%)";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS_ON_TIME"] = "ትክክለኛ ሪፖርቶች በሰዓቱ";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE_ON_TIME"] = "የሪፖርት መጠን በሰዓቱ (%)";
	$fieldToolTipsdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rates_chart["Amharic"]["REPORTING_RATE_ON_TIME"] = "";
	if (count($fieldToolTipsdhis2_reporting_rates_chart["Amharic"]))
		$tdatadhis2_reporting_rates_chart[".isUseToolTips"] = true;
}


	$tdatadhis2_reporting_rates_chart[".NCSearch"] = true;

	$tdatadhis2_reporting_rates_chart[".ChartRefreshTime"] = 0;


$tdatadhis2_reporting_rates_chart[".shortTableName"] = "dhis2_reporting_rates_chart";
$tdatadhis2_reporting_rates_chart[".nSecOptions"] = 0;

$tdatadhis2_reporting_rates_chart[".mainTableOwnerID"] = "";
$tdatadhis2_reporting_rates_chart[".entityType"] = 11;
$tdatadhis2_reporting_rates_chart[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reporting_rates_chart[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reporting_rates_chart[".showAddInPopup"] = false;

$tdatadhis2_reporting_rates_chart[".showEditInPopup"] = false;

$tdatadhis2_reporting_rates_chart[".showViewInPopup"] = false;

$tdatadhis2_reporting_rates_chart[".listAjax"] = false;
//	temporary
//$tdatadhis2_reporting_rates_chart[".listAjax"] = false;

	$tdatadhis2_reporting_rates_chart[".audit"] = false;

	$tdatadhis2_reporting_rates_chart[".locking"] = false;


$pages = $tdatadhis2_reporting_rates_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reporting_rates_chart[".edit"] = true;
	$tdatadhis2_reporting_rates_chart[".afterEditAction"] = 1;
	$tdatadhis2_reporting_rates_chart[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reporting_rates_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reporting_rates_chart[".add"] = true;
$tdatadhis2_reporting_rates_chart[".afterAddAction"] = 1;
$tdatadhis2_reporting_rates_chart[".closePopupAfterAdd"] = 1;
$tdatadhis2_reporting_rates_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reporting_rates_chart[".list"] = true;
}



$tdatadhis2_reporting_rates_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reporting_rates_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reporting_rates_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reporting_rates_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reporting_rates_chart[".printFriendly"] = true;
}



$tdatadhis2_reporting_rates_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reporting_rates_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reporting_rates_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reporting_rates_chart[".isUseAjaxSuggest"] = true;





$tdatadhis2_reporting_rates_chart[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reporting_rates_chart[".buttonsAdded"] = false;

$tdatadhis2_reporting_rates_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reporting_rates_chart[".isUseTimeForSearch"] = false;


$tdatadhis2_reporting_rates_chart[".badgeColor"] = "DB7093";


$tdatadhis2_reporting_rates_chart[".allSearchFields"] = array();
$tdatadhis2_reporting_rates_chart[".filterFields"] = array();
$tdatadhis2_reporting_rates_chart[".requiredSearchFields"] = array();

$tdatadhis2_reporting_rates_chart[".googleLikeFields"] = array();
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "title";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "organisationUnit";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "dataSet";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "reportPeriod";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "ACTUAL_REPORTS";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "EXPECTED_REPORTS";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "REPORTING_RATE";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "ACTUAL_REPORTS_ON_TIME";
$tdatadhis2_reporting_rates_chart[".googleLikeFields"][] = "REPORTING_RATE_ON_TIME";



$tdatadhis2_reporting_rates_chart[".tableType"] = "chart";

$tdatadhis2_reporting_rates_chart[".printerPageOrientation"] = 0;
$tdatadhis2_reporting_rates_chart[".nPrinterPageScale"] = 100;

$tdatadhis2_reporting_rates_chart[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reporting_rates_chart[".geocodingEnabled"] = false;



// chart settings
$tdatadhis2_reporting_rates_chart[".chartType"] = "Area";
// end of chart settings

$tdatadhis2_reporting_rates_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_reporting_rates_chart[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reporting_rates_chart[".orderindexes"] = array();


$tdatadhis2_reporting_rates_chart[".sqlHead"] = "";
$tdatadhis2_reporting_rates_chart[".sqlFrom"] = "";
$tdatadhis2_reporting_rates_chart[".sqlWhereExpr"] = "";
$tdatadhis2_reporting_rates_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reporting_rates_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reporting_rates_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reporting_rates_chart[".highlightSearchResults"] = true;

$tableKeysdhis2_reporting_rates_chart = array();
$tdatadhis2_reporting_rates_chart[".Keys"] = $tableKeysdhis2_reporting_rates_chart;


$tdatadhis2_reporting_rates_chart[".hideMobileList"] = array();




//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","title");
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


	$tdatadhis2_reporting_rates_chart["title"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "title";
//	organisationUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationUnit";
	$fdata["GoodName"] = "organisationUnit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","organisationUnit");
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


	$tdatadhis2_reporting_rates_chart["organisationUnit"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "organisationUnit";
//	dataSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dataSet";
	$fdata["GoodName"] = "dataSet";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","dataSet");
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


	$tdatadhis2_reporting_rates_chart["dataSet"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "dataSet";
//	reportPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reportPeriod";
	$fdata["GoodName"] = "reportPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","reportPeriod");
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


	$tdatadhis2_reporting_rates_chart["reportPeriod"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "reportPeriod";
//	ACTUAL_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACTUAL_REPORTS";
	$fdata["GoodName"] = "ACTUAL_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","ACTUAL_REPORTS");
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


	$tdatadhis2_reporting_rates_chart["ACTUAL_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "ACTUAL_REPORTS";
//	EXPECTED_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EXPECTED_REPORTS";
	$fdata["GoodName"] = "EXPECTED_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","EXPECTED_REPORTS");
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


	$tdatadhis2_reporting_rates_chart["EXPECTED_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "EXPECTED_REPORTS";
//	REPORTING_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REPORTING_RATE";
	$fdata["GoodName"] = "REPORTING_RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","REPORTING_RATE");
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


	$tdatadhis2_reporting_rates_chart["REPORTING_RATE"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "REPORTING_RATE";
//	ACTUAL_REPORTS_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["GoodName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","ACTUAL_REPORTS_ON_TIME");
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


	$tdatadhis2_reporting_rates_chart["ACTUAL_REPORTS_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "ACTUAL_REPORTS_ON_TIME";
//	REPORTING_RATE_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REPORTING_RATE_ON_TIME";
	$fdata["GoodName"] = "REPORTING_RATE_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rates_Chart","REPORTING_RATE_ON_TIME");
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


	$tdatadhis2_reporting_rates_chart["REPORTING_RATE_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rates_chart[".searchableFields"][] = "REPORTING_RATE_ON_TIME";

$tdatadhis2_reporting_rates_chart[".chartLabelField"] = "title";
$tdatadhis2_reporting_rates_chart[".chartSeries"] = array();
$tdatadhis2_reporting_rates_chart[".chartSeries"][] = array(
	"field" => "EXPECTED_REPORTS",
	"total" => ""
);
$tdatadhis2_reporting_rates_chart[".chartSeries"][] = array(
	"field" => "ACTUAL_REPORTS",
	"total" => ""
);
	$tdatadhis2_reporting_rates_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DHIS2_Reporting_Rates_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">area</attr>
		</attr>

		<attr value="parameters">';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">EXPECTED_REPORTS</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">ACTUAL_REPORTS</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">title</attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="head">'.xmlencode("DHIS2 Reporting Rate Performance").'</attr>
<attr value="foot">'.xmlencode("Expected Reporting Rates").'</attr>
<attr value="y_axis_label">'.xmlencode("Reporting Dates").'</attr>


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
$tdatadhis2_reporting_rates_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">organisationUnit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","organisationUnit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">dataSet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","dataSet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">reportPeriod</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","reportPeriod")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">ACTUAL_REPORTS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","ACTUAL_REPORTS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">EXPECTED_REPORTS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","EXPECTED_REPORTS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">REPORTING_RATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","REPORTING_RATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">ACTUAL_REPORTS_ON_TIME</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","ACTUAL_REPORTS_ON_TIME")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reporting_rates_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">REPORTING_RATE_ON_TIME</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Reporting_Rates_Chart","REPORTING_RATE_ON_TIME")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadhis2_reporting_rates_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DHIS2_Reporting_Rates_Chart</attr>
<attr value="short_table_name">dhis2_reporting_rates_chart</attr>
</attr>

</chart>';

$tables_data["DHIS2_Reporting_Rates_Chart"]=&$tdatadhis2_reporting_rates_chart;
$field_labels["DHIS2_Reporting_Rates_Chart"] = &$fieldLabelsdhis2_reporting_rates_chart;
$fieldToolTips["DHIS2_Reporting_Rates_Chart"] = &$fieldToolTipsdhis2_reporting_rates_chart;
$placeHolders["DHIS2_Reporting_Rates_Chart"] = &$placeHoldersdhis2_reporting_rates_chart;
$page_titles["DHIS2_Reporting_Rates_Chart"] = &$pageTitlesdhis2_reporting_rates_chart;


changeTextControlsToDate( "DHIS2_Reporting_Rates_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reporting_Rates_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reporting_Rates_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reporting_rates_chart_ops.php" ) );



	
																												;

									

$tdatadhis2_reporting_rates_chart[".sqlquery"] = $queryData_dhis2_reporting_rates_chart;



include_once(getabspath("include/dhis2_reporting_rates_chart_events.php"));
$tdatadhis2_reporting_rates_chart[".hasEvents"] = true;

?>