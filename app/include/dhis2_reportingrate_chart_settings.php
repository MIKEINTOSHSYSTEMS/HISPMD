<?php
$tdatadhis2_reportingrate_chart = array();
$tdatadhis2_reportingrate_chart[".searchableFields"] = array();
$tdatadhis2_reportingrate_chart[".ShortName"] = "dhis2_reportingrate_chart";
$tdatadhis2_reportingrate_chart[".OwnerID"] = "";
$tdatadhis2_reportingrate_chart[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reportingrate_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadhis2_reportingrate_chart[".originalPagesByType"] = $tdatadhis2_reportingrate_chart[".pagesByType"];
$tdatadhis2_reportingrate_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reportingrate_chart[".originalPages"] = $tdatadhis2_reportingrate_chart[".pages"];
$tdatadhis2_reportingrate_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadhis2_reportingrate_chart[".originalDefaultPages"] = $tdatadhis2_reportingrate_chart[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reportingrate_chart = array();
$fieldToolTipsdhis2_reportingrate_chart = array();
$pageTitlesdhis2_reportingrate_chart = array();
$placeHoldersdhis2_reportingrate_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reportingrate_chart["English"] = array();
	$fieldToolTipsdhis2_reportingrate_chart["English"] = array();
	$placeHoldersdhis2_reportingrate_chart["English"] = array();
	$pageTitlesdhis2_reportingrate_chart["English"] = array();
	$fieldLabelsdhis2_reportingrate_chart["English"]["Organisation_unit_ID"] = "Organisation unit ID";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Organisation_unit_ID"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Organisation_unit_ID"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Organisation_unit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Organisation_unit"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Organisation_unit_code"] = "Organisation unit code";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Organisation_unit_code"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Organisation_unit_code"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Organisation_unit_description"] = "Organisation unit description";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Organisation_unit_description"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Organisation_unit_description"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["actual_reports"] = "Actual Reports";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["actual_reports"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["actual_reports"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["expected_reports"] = "Expected Reports";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["expected_reports"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["expected_reports"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["reporting_rate"] = "Reporting Rate";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["reporting_rate"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["reporting_rate"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["actual_reports_on_time"] = "actual reports on time";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["actual_reports_on_time"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["actual_reports_on_time"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["reporting_rate_on_time"] = "reporting rate on time";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["reporting_rate_on_time"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["reporting_rate_on_time"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Dataset_ID"] = "Dataset";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Dataset_ID"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Dataset_ID"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Dataset_Name"] = "Dataset Name";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Dataset_Name"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Dataset_Name"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Facility_Type"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Facility_Type"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Report_Period"] = "Report Period";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Report_Period"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Report_Period"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Ownership_Type_ID"] = "Ownership Type";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Ownership_Type_ID"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Ownership_Type_ID"] = "";
	$fieldLabelsdhis2_reportingrate_chart["English"]["Ownership_Type_Label"] = "Ownership Types";
	$fieldToolTipsdhis2_reportingrate_chart["English"]["Ownership_Type_Label"] = "";
	$placeHoldersdhis2_reportingrate_chart["English"]["Ownership_Type_Label"] = "";
	if (count($fieldToolTipsdhis2_reportingrate_chart["English"]))
		$tdatadhis2_reportingrate_chart[".isUseToolTips"] = true;
}


	$tdatadhis2_reportingrate_chart[".NCSearch"] = true;

	$tdatadhis2_reportingrate_chart[".ChartRefreshTime"] = 0;


$tdatadhis2_reportingrate_chart[".shortTableName"] = "dhis2_reportingrate_chart";
$tdatadhis2_reportingrate_chart[".nSecOptions"] = 0;

$tdatadhis2_reportingrate_chart[".mainTableOwnerID"] = "";
$tdatadhis2_reportingrate_chart[".entityType"] = 11;
$tdatadhis2_reportingrate_chart[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reportingrate_chart[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reportingrate_chart[".showAddInPopup"] = false;

$tdatadhis2_reportingrate_chart[".showEditInPopup"] = false;

$tdatadhis2_reportingrate_chart[".showViewInPopup"] = false;

$tdatadhis2_reportingrate_chart[".listAjax"] = false;
//	temporary
//$tdatadhis2_reportingrate_chart[".listAjax"] = false;

	$tdatadhis2_reportingrate_chart[".audit"] = false;

	$tdatadhis2_reportingrate_chart[".locking"] = false;


$pages = $tdatadhis2_reportingrate_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reportingrate_chart[".edit"] = true;
	$tdatadhis2_reportingrate_chart[".afterEditAction"] = 1;
	$tdatadhis2_reportingrate_chart[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reportingrate_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reportingrate_chart[".add"] = true;
$tdatadhis2_reportingrate_chart[".afterAddAction"] = 1;
$tdatadhis2_reportingrate_chart[".closePopupAfterAdd"] = 1;
$tdatadhis2_reportingrate_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reportingrate_chart[".list"] = true;
}



$tdatadhis2_reportingrate_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reportingrate_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reportingrate_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reportingrate_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reportingrate_chart[".printFriendly"] = true;
}



$tdatadhis2_reportingrate_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reportingrate_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reportingrate_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reportingrate_chart[".isUseAjaxSuggest"] = true;



			

$tdatadhis2_reportingrate_chart[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reportingrate_chart[".buttonsAdded"] = false;

$tdatadhis2_reportingrate_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reportingrate_chart[".isUseTimeForSearch"] = false;


$tdatadhis2_reportingrate_chart[".badgeColor"] = "D2AF80";


$tdatadhis2_reportingrate_chart[".allSearchFields"] = array();
$tdatadhis2_reportingrate_chart[".filterFields"] = array();
$tdatadhis2_reportingrate_chart[".requiredSearchFields"] = array();

$tdatadhis2_reportingrate_chart[".googleLikeFields"] = array();
$tdatadhis2_reportingrate_chart[".googleLikeFields"][] = "Ownership Type ID";
$tdatadhis2_reportingrate_chart[".googleLikeFields"][] = "Ownership Type Label";



$tdatadhis2_reportingrate_chart[".tableType"] = "chart";

$tdatadhis2_reportingrate_chart[".printerPageOrientation"] = 0;
$tdatadhis2_reportingrate_chart[".nPrinterPageScale"] = 100;

$tdatadhis2_reportingrate_chart[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reportingrate_chart[".geocodingEnabled"] = false;



// chart settings
$tdatadhis2_reportingrate_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdatadhis2_reportingrate_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_reportingrate_chart[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reportingrate_chart[".orderindexes"] = array();
	foreach ( my_json_decode("") as $orderItem ) {
		$tdatadhis2_reportingrate_chart[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatadhis2_reportingrate_chart[".sqlHead"] = "";
$tdatadhis2_reportingrate_chart[".sqlFrom"] = "";
$tdatadhis2_reportingrate_chart[".sqlWhereExpr"] = "";
$tdatadhis2_reportingrate_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reportingrate_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reportingrate_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reportingrate_chart[".highlightSearchResults"] = true;

$tableKeysdhis2_reportingrate_chart = array();
$tdatadhis2_reportingrate_chart[".Keys"] = $tableKeysdhis2_reportingrate_chart;


$tdatadhis2_reportingrate_chart[".hideMobileList"] = array();




//	Organisation unit ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Organisation unit ID";
	$fdata["GoodName"] = "Organisation_unit_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Organisation unit ID";

	
	
		$fdata["FullName"] = "Organisation unit ID";

	
	
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


	$tdatadhis2_reportingrate_chart["Organisation unit ID"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Organisation unit ID";
//	Organisation unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Organisation unit";
	$fdata["GoodName"] = "Organisation_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Organisation unit";

	
	
		$fdata["FullName"] = "Organisation unit";

	
	
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
	$edata["LookupTable"] = "DHIS2_OrgUnit_Regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "displayName";
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


	$tdatadhis2_reportingrate_chart["Organisation unit"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Organisation unit";
//	Organisation unit code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Organisation unit code";
	$fdata["GoodName"] = "Organisation_unit_code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_code");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "rows/*/Organisation unit code";

	
	
		$fdata["FullName"] = "Organisation unit code";

	
	
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


	$tdatadhis2_reportingrate_chart["Organisation unit code"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Organisation unit code";
//	Organisation unit description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Organisation unit description";
	$fdata["GoodName"] = "Organisation_unit_description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_description");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Organisation unit description";

	
	
		$fdata["FullName"] = "Organisation unit description";

	
	
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


	$tdatadhis2_reportingrate_chart["Organisation unit description"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Organisation unit description";
//	actual reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actual reports";
	$fdata["GoodName"] = "actual_reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","actual_reports");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/actual reports";

	
	
		$fdata["FullName"] = "actual reports";

	
	
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


	$tdatadhis2_reportingrate_chart["actual reports"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "actual reports";
//	expected reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "expected reports";
	$fdata["GoodName"] = "expected_reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","expected_reports");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/expected reports";

	
	
		$fdata["FullName"] = "expected reports";

	
	
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


	$tdatadhis2_reportingrate_chart["expected reports"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "expected reports";
//	reporting rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reporting rate";
	$fdata["GoodName"] = "reporting_rate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","reporting_rate");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/reporting rate";

	
	
		$fdata["FullName"] = "reporting rate";

	
	
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


	$tdatadhis2_reportingrate_chart["reporting rate"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "reporting rate";
//	actual reports on time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actual reports on time";
	$fdata["GoodName"] = "actual_reports_on_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","actual_reports_on_time");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/actual reports on time";

	
	
		$fdata["FullName"] = "actual reports on time";

	
	
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


	$tdatadhis2_reportingrate_chart["actual reports on time"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "actual reports on time";
//	reporting rate on time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reporting rate on time";
	$fdata["GoodName"] = "reporting_rate_on_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","reporting_rate_on_time");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/reporting rate on time";

	
	
		$fdata["FullName"] = "reporting rate on time";

	
	
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


	$tdatadhis2_reportingrate_chart["reporting rate on time"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "reporting rate on time";
//	Dataset ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Dataset ID";
	$fdata["GoodName"] = "Dataset_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Dataset_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Dataset ID";

	
	
		$fdata["FullName"] = "Dataset ID";

	
	
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


	$tdatadhis2_reportingrate_chart["Dataset ID"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Dataset ID";
//	Dataset Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Dataset Name";
	$fdata["GoodName"] = "Dataset_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Dataset_Name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Dataset Name";

	
	
		$fdata["FullName"] = "Dataset Name";

	
	
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


	$tdatadhis2_reportingrate_chart["Dataset Name"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Dataset Name";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Facility_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Facility Type";

	
	
		$fdata["FullName"] = "Facility Type";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "hospital";
	$edata["LookupValues"][] = "clinic";
	$edata["LookupValues"][] = "health_post";
	$edata["LookupValues"][] = "health_center";

	
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


	$tdatadhis2_reportingrate_chart["Facility Type"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Facility Type";
//	Report Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Report Period";
	$fdata["GoodName"] = "Report_Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Report_Period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Report Period";

	
	
		$fdata["FullName"] = "Report Period";

	
	
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


	$tdatadhis2_reportingrate_chart["Report Period"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Report Period";
//	Ownership Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Ownership Type ID";
	$fdata["GoodName"] = "Ownership_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Ownership_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Ownership Type ID";

	
	
		$fdata["FullName"] = "Ownership Type ID";

	
	
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


	$tdatadhis2_reportingrate_chart["Ownership Type ID"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Ownership Type ID";
//	Ownership Type Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Ownership Type Label";
	$fdata["GoodName"] = "Ownership_Type_Label";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRate_Chart","Ownership_Type_Label");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Ownership Type Label";

	
	
		$fdata["FullName"] = "Ownership Type Label";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Private";
	$edata["LookupValues"][] = "Public";
	$edata["LookupValues"][] = "Other Government";
	$edata["LookupValues"][] = "NGO";

	
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


	$tdatadhis2_reportingrate_chart["Ownership Type Label"] = $fdata;
		$tdatadhis2_reportingrate_chart[".searchableFields"][] = "Ownership Type Label";

$tdatadhis2_reportingrate_chart[".groupChart"] = true;
$tdatadhis2_reportingrate_chart[".chartLabelInterval"] = 0;
$tdatadhis2_reportingrate_chart[".chartLabelField"] = "Organisation unit";
$tdatadhis2_reportingrate_chart[".chartSeries"] = array();
$tdatadhis2_reportingrate_chart[".chartSeries"][] = array(
	"field" => "reporting rate",
	"total" => "AVG"
);
$tdatadhis2_reportingrate_chart[".chartSeries"][] = array(
	"field" => "reporting rate on time",
	"total" => "AVG"
);
	$tdatadhis2_reportingrate_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DHIS2_ReportingRate_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">reporting rate</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">reporting rate on time</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Organisation unit</attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="head">'.xmlencode("DHIS2 Reporting Rate Chart by Organisation Units").'</attr>
<attr value="foot">'.xmlencode("Organisation Units").'</attr>
<attr value="y_axis_label">'.xmlencode("Reporting Rates").'</attr>


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
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatadhis2_reportingrate_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Organisation unit ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Organisation unit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Organisation unit code</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_code")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">Organisation unit description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Organisation_unit_description")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">actual reports</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","actual_reports")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">expected reports</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","expected_reports")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">reporting rate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","reporting_rate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">actual reports on time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","actual_reports_on_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">reporting rate on time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","reporting_rate_on_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">Dataset ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Dataset_ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">Dataset Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Dataset_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">Facility Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Facility_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">Report Period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Report_Period")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">Ownership Type ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Ownership_Type_ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_reportingrate_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">Ownership Type Label</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_ReportingRate_Chart","Ownership_Type_Label")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadhis2_reportingrate_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DHIS2_ReportingRate_Chart</attr>
<attr value="short_table_name">dhis2_reportingrate_chart</attr>
</attr>

</chart>';

$tables_data["DHIS2_ReportingRate_Chart"]=&$tdatadhis2_reportingrate_chart;
$field_labels["DHIS2_ReportingRate_Chart"] = &$fieldLabelsdhis2_reportingrate_chart;
$fieldToolTips["DHIS2_ReportingRate_Chart"] = &$fieldToolTipsdhis2_reportingrate_chart;
$placeHolders["DHIS2_ReportingRate_Chart"] = &$placeHoldersdhis2_reportingrate_chart;
$page_titles["DHIS2_ReportingRate_Chart"] = &$pageTitlesdhis2_reportingrate_chart;


changeTextControlsToDate( "DHIS2_ReportingRate_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_ReportingRate_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_ReportingRate_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reportingrate_chart_ops.php" ) );



	
																												;

															

$tdatadhis2_reportingrate_chart[".sqlquery"] = $queryData_dhis2_reportingrate_chart;



include_once(getabspath("include/dhis2_reportingrate_chart_events.php"));
$tdatadhis2_reportingrate_chart[".hasEvents"] = true;

?>