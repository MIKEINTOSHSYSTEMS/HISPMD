<?php
$tdatadhis2_reporting_rate_report1 = array();
$tdatadhis2_reporting_rate_report1[".searchableFields"] = array();
$tdatadhis2_reporting_rate_report1[".ShortName"] = "dhis2_reporting_rate_report1";
$tdatadhis2_reporting_rate_report1[".OwnerID"] = "";
$tdatadhis2_reporting_rate_report1[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reporting_rate_report1[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadhis2_reporting_rate_report1[".originalPagesByType"] = $tdatadhis2_reporting_rate_report1[".pagesByType"];
$tdatadhis2_reporting_rate_report1[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reporting_rate_report1[".originalPages"] = $tdatadhis2_reporting_rate_report1[".pages"];
$tdatadhis2_reporting_rate_report1[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadhis2_reporting_rate_report1[".originalDefaultPages"] = $tdatadhis2_reporting_rate_report1[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reporting_rate_report1 = array();
$fieldToolTipsdhis2_reporting_rate_report1 = array();
$pageTitlesdhis2_reporting_rate_report1 = array();
$placeHoldersdhis2_reporting_rate_report1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reporting_rate_report1["English"] = array();
	$fieldToolTipsdhis2_reporting_rate_report1["English"] = array();
	$placeHoldersdhis2_reporting_rate_report1["English"] = array();
	$pageTitlesdhis2_reporting_rate_report1["English"] = array();
	$fieldLabelsdhis2_reporting_rate_report1["English"]["title"] = "Reporting Dates";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["title"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["title"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["organisationUnit"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["organisationUnit"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["dataSet"] = "Data Set";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["dataSet"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["dataSet"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["reportPeriod"] = "Report Period";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["reportPeriod"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["reportPeriod"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS"] = "ACTUAL REPORTS";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["EXPECTED_REPORTS"] = "EXPECTED REPORTS";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["EXPECTED_REPORTS"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["EXPECTED_REPORTS"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["REPORTING_RATE"] = "REPORTING RATE (%)";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["REPORTING_RATE"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["REPORTING_RATE"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS_ON_TIME"] = "ACTUAL REPORTS ON TIME";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["ACTUAL_REPORTS_ON_TIME"] = "";
	$fieldLabelsdhis2_reporting_rate_report1["English"]["REPORTING_RATE_ON_TIME"] = "REPORTING RATE ON TIME (%)";
	$fieldToolTipsdhis2_reporting_rate_report1["English"]["REPORTING_RATE_ON_TIME"] = "";
	$placeHoldersdhis2_reporting_rate_report1["English"]["REPORTING_RATE_ON_TIME"] = "";
	if (count($fieldToolTipsdhis2_reporting_rate_report1["English"]))
		$tdatadhis2_reporting_rate_report1[".isUseToolTips"] = true;
}


	$tdatadhis2_reporting_rate_report1[".NCSearch"] = true;



$tdatadhis2_reporting_rate_report1[".shortTableName"] = "dhis2_reporting_rate_report1";
$tdatadhis2_reporting_rate_report1[".nSecOptions"] = 0;

$tdatadhis2_reporting_rate_report1[".mainTableOwnerID"] = "";
$tdatadhis2_reporting_rate_report1[".entityType"] = 10;
$tdatadhis2_reporting_rate_report1[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reporting_rate_report1[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reporting_rate_report1[".showAddInPopup"] = false;

$tdatadhis2_reporting_rate_report1[".showEditInPopup"] = false;

$tdatadhis2_reporting_rate_report1[".showViewInPopup"] = false;

$tdatadhis2_reporting_rate_report1[".listAjax"] = false;
//	temporary
//$tdatadhis2_reporting_rate_report1[".listAjax"] = false;

	$tdatadhis2_reporting_rate_report1[".audit"] = false;

	$tdatadhis2_reporting_rate_report1[".locking"] = false;


$pages = $tdatadhis2_reporting_rate_report1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reporting_rate_report1[".edit"] = true;
	$tdatadhis2_reporting_rate_report1[".afterEditAction"] = 1;
	$tdatadhis2_reporting_rate_report1[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reporting_rate_report1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reporting_rate_report1[".add"] = true;
$tdatadhis2_reporting_rate_report1[".afterAddAction"] = 1;
$tdatadhis2_reporting_rate_report1[".closePopupAfterAdd"] = 1;
$tdatadhis2_reporting_rate_report1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reporting_rate_report1[".list"] = true;
}



$tdatadhis2_reporting_rate_report1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reporting_rate_report1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reporting_rate_report1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reporting_rate_report1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reporting_rate_report1[".printFriendly"] = true;
}



$tdatadhis2_reporting_rate_report1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reporting_rate_report1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reporting_rate_report1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reporting_rate_report1[".isUseAjaxSuggest"] = false;





$tdatadhis2_reporting_rate_report1[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reporting_rate_report1[".buttonsAdded"] = false;

$tdatadhis2_reporting_rate_report1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reporting_rate_report1[".isUseTimeForSearch"] = false;


$tdatadhis2_reporting_rate_report1[".badgeColor"] = "1E90FF";


$tdatadhis2_reporting_rate_report1[".allSearchFields"] = array();
$tdatadhis2_reporting_rate_report1[".filterFields"] = array();
$tdatadhis2_reporting_rate_report1[".requiredSearchFields"] = array();

$tdatadhis2_reporting_rate_report1[".googleLikeFields"] = array();
$tdatadhis2_reporting_rate_report1[".googleLikeFields"][] = "organisationUnit";
$tdatadhis2_reporting_rate_report1[".googleLikeFields"][] = "dataSet";
$tdatadhis2_reporting_rate_report1[".googleLikeFields"][] = "reportPeriod";



$tdatadhis2_reporting_rate_report1[".tableType"] = "report";

$tdatadhis2_reporting_rate_report1[".printerPageOrientation"] = 0;
$tdatadhis2_reporting_rate_report1[".nPrinterPageScale"] = 100;

$tdatadhis2_reporting_rate_report1[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reporting_rate_report1[".geocodingEnabled"] = false;

//report settings

$tdatadhis2_reporting_rate_report1[".reportPrintGroupsPerPage"] = 3;
$tdatadhis2_reporting_rate_report1[".reportPrintRecordsPerPage"] = 40;

$tdatadhis2_reporting_rate_report1[".pageSizeGroups"] = 5;
$tdatadhis2_reporting_rate_report1[".pageSizeRecords"] = 20;


//end of report settings



$tdatadhis2_reporting_rate_report1[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_reporting_rate_report1[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reporting_rate_report1[".orderindexes"] = array();


$tdatadhis2_reporting_rate_report1[".sqlHead"] = "";
$tdatadhis2_reporting_rate_report1[".sqlFrom"] = "";
$tdatadhis2_reporting_rate_report1[".sqlWhereExpr"] = "";
$tdatadhis2_reporting_rate_report1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reporting_rate_report1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reporting_rate_report1[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reporting_rate_report1[".highlightSearchResults"] = true;

$tableKeysdhis2_reporting_rate_report1 = array();
$tdatadhis2_reporting_rate_report1[".Keys"] = $tableKeysdhis2_reporting_rate_report1;


$tdatadhis2_reporting_rate_report1[".hideMobileList"] = array();




//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","title");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["title"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "title";
//	organisationUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationUnit";
	$fdata["GoodName"] = "organisationUnit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","organisationUnit");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["organisationUnit"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "organisationUnit";
//	dataSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dataSet";
	$fdata["GoodName"] = "dataSet";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","dataSet");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["dataSet"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "dataSet";
//	reportPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reportPeriod";
	$fdata["GoodName"] = "reportPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","reportPeriod");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["reportPeriod"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "reportPeriod";
//	ACTUAL_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACTUAL_REPORTS";
	$fdata["GoodName"] = "ACTUAL_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","ACTUAL_REPORTS");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["ACTUAL_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "ACTUAL_REPORTS";
//	EXPECTED_REPORTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EXPECTED_REPORTS";
	$fdata["GoodName"] = "EXPECTED_REPORTS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","EXPECTED_REPORTS");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["EXPECTED_REPORTS"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "EXPECTED_REPORTS";
//	REPORTING_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REPORTING_RATE";
	$fdata["GoodName"] = "REPORTING_RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","REPORTING_RATE");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["REPORTING_RATE"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "REPORTING_RATE";
//	ACTUAL_REPORTS_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["GoodName"] = "ACTUAL_REPORTS_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","ACTUAL_REPORTS_ON_TIME");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["ACTUAL_REPORTS_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "ACTUAL_REPORTS_ON_TIME";
//	REPORTING_RATE_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REPORTING_RATE_ON_TIME";
	$fdata["GoodName"] = "REPORTING_RATE_ON_TIME";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reporting_Rate_Report","REPORTING_RATE_ON_TIME");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_reporting_rate_report1["REPORTING_RATE_ON_TIME"] = $fdata;
		$tdatadhis2_reporting_rate_report1[".searchableFields"][] = "REPORTING_RATE_ON_TIME";


$tables_data["DHIS2_Reporting_Rate_Report"]=&$tdatadhis2_reporting_rate_report1;
$field_labels["DHIS2_Reporting_Rate_Report"] = &$fieldLabelsdhis2_reporting_rate_report1;
$fieldToolTips["DHIS2_Reporting_Rate_Report"] = &$fieldToolTipsdhis2_reporting_rate_report1;
$placeHolders["DHIS2_Reporting_Rate_Report"] = &$placeHoldersdhis2_reporting_rate_report1;
$page_titles["DHIS2_Reporting_Rate_Report"] = &$pageTitlesdhis2_reporting_rate_report1;


changeTextControlsToDate( "DHIS2_Reporting_Rate_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reporting_Rate_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reporting_Rate_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reporting_rate_report1_ops.php" ) );



	
								;

									

$tdatadhis2_reporting_rate_report1[".sqlquery"] = $queryData_dhis2_reporting_rate_report1;



include_once(getabspath("include/dhis2_reporting_rate_report1_events.php"));
$tdatadhis2_reporting_rate_report1[".hasEvents"] = true;

?>