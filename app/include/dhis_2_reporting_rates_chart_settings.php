<?php
$tdatadhis_2_reporting_rates_chart = array();
$tdatadhis_2_reporting_rates_chart[".searchableFields"] = array();
$tdatadhis_2_reporting_rates_chart[".ShortName"] = "dhis_2_reporting_rates_chart";
$tdatadhis_2_reporting_rates_chart[".OwnerID"] = "";
$tdatadhis_2_reporting_rates_chart[".OriginalTable"] = "public.dhis2_reporting_rates";


$tdatadhis_2_reporting_rates_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadhis_2_reporting_rates_chart[".originalPagesByType"] = $tdatadhis_2_reporting_rates_chart[".pagesByType"];
$tdatadhis_2_reporting_rates_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadhis_2_reporting_rates_chart[".originalPages"] = $tdatadhis_2_reporting_rates_chart[".pages"];
$tdatadhis_2_reporting_rates_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadhis_2_reporting_rates_chart[".originalDefaultPages"] = $tdatadhis_2_reporting_rates_chart[".defaultPages"];

//	field labels
$fieldLabelsdhis_2_reporting_rates_chart = array();
$fieldToolTipsdhis_2_reporting_rates_chart = array();
$pageTitlesdhis_2_reporting_rates_chart = array();
$placeHoldersdhis_2_reporting_rates_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis_2_reporting_rates_chart["English"] = array();
	$fieldToolTipsdhis_2_reporting_rates_chart["English"] = array();
	$placeHoldersdhis_2_reporting_rates_chart["English"] = array();
	$pageTitlesdhis_2_reporting_rates_chart["English"] = array();
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["organisationunit"] = "Organisationunit";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["organisationunit"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["organisationunit"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["report_period"] = "Report Period";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["report_period"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["report_period"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["indicator_name"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["indicator_name"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["value"] = "Value";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["value"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["value"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["organisationunit_id"] = "Organisationunit Id";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["organisationunit_id"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["organisationunit_id"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["organisationunit_code"] = "Organisationunit Code";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["organisationunit_code"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["organisationunit_code"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["actual_reports"] = "Actual Reports";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["actual_reports"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["actual_reports"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["expected_reports"] = "Expected Reports";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["expected_reports"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["expected_reports"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["reporting_rate"] = "Reporting Rate";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["reporting_rate"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["reporting_rate"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["actual_reports_on_time"] = "Actual Reports On Time";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["actual_reports_on_time"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["actual_reports_on_time"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["reporting_rate_on_time"] = "Reporting Rate On Time";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["reporting_rate_on_time"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["reporting_rate_on_time"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["dataset_id"] = "Dataset Id";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["dataset_id"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["dataset_id"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["dataset_name"] = "Dataset Name";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["dataset_name"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["dataset_name"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["facility_type"] = "Facility Type";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["facility_type"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["facility_type"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["ownership_type_id"] = "Ownership Type Id";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["ownership_type_id"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["ownership_type_id"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["ownership_type_label"] = "Ownership Type Label";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["ownership_type_label"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["ownership_type_label"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["indicator_id"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["indicator_id"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["organisationunit_description"] = "Organisationunit Description";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["organisationunit_description"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["organisationunit_description"] = "";
	$fieldLabelsdhis_2_reporting_rates_chart["English"]["relative_period"] = "Relative Period";
	$fieldToolTipsdhis_2_reporting_rates_chart["English"]["relative_period"] = "";
	$placeHoldersdhis_2_reporting_rates_chart["English"]["relative_period"] = "";
	if (count($fieldToolTipsdhis_2_reporting_rates_chart["English"]))
		$tdatadhis_2_reporting_rates_chart[".isUseToolTips"] = true;
}


	$tdatadhis_2_reporting_rates_chart[".NCSearch"] = true;

	$tdatadhis_2_reporting_rates_chart[".ChartRefreshTime"] = 0;


$tdatadhis_2_reporting_rates_chart[".shortTableName"] = "dhis_2_reporting_rates_chart";
$tdatadhis_2_reporting_rates_chart[".nSecOptions"] = 0;

$tdatadhis_2_reporting_rates_chart[".mainTableOwnerID"] = "";
$tdatadhis_2_reporting_rates_chart[".entityType"] = 3;
$tdatadhis_2_reporting_rates_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadhis_2_reporting_rates_chart[".strOriginalTableName"] = "public.dhis2_reporting_rates";

	



$tdatadhis_2_reporting_rates_chart[".showAddInPopup"] = false;

$tdatadhis_2_reporting_rates_chart[".showEditInPopup"] = false;

$tdatadhis_2_reporting_rates_chart[".showViewInPopup"] = false;

$tdatadhis_2_reporting_rates_chart[".listAjax"] = false;
//	temporary
//$tdatadhis_2_reporting_rates_chart[".listAjax"] = false;

	$tdatadhis_2_reporting_rates_chart[".audit"] = false;

	$tdatadhis_2_reporting_rates_chart[".locking"] = false;


$pages = $tdatadhis_2_reporting_rates_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis_2_reporting_rates_chart[".edit"] = true;
	$tdatadhis_2_reporting_rates_chart[".afterEditAction"] = 1;
	$tdatadhis_2_reporting_rates_chart[".closePopupAfterEdit"] = 1;
	$tdatadhis_2_reporting_rates_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis_2_reporting_rates_chart[".add"] = true;
$tdatadhis_2_reporting_rates_chart[".afterAddAction"] = 1;
$tdatadhis_2_reporting_rates_chart[".closePopupAfterAdd"] = 1;
$tdatadhis_2_reporting_rates_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis_2_reporting_rates_chart[".list"] = true;
}



$tdatadhis_2_reporting_rates_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis_2_reporting_rates_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis_2_reporting_rates_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis_2_reporting_rates_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis_2_reporting_rates_chart[".printFriendly"] = true;
}



$tdatadhis_2_reporting_rates_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis_2_reporting_rates_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis_2_reporting_rates_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis_2_reporting_rates_chart[".isUseAjaxSuggest"] = true;



			

$tdatadhis_2_reporting_rates_chart[".ajaxCodeSnippetAdded"] = false;

$tdatadhis_2_reporting_rates_chart[".buttonsAdded"] = false;

$tdatadhis_2_reporting_rates_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis_2_reporting_rates_chart[".isUseTimeForSearch"] = false;


$tdatadhis_2_reporting_rates_chart[".badgeColor"] = "D2691E";


$tdatadhis_2_reporting_rates_chart[".allSearchFields"] = array();
$tdatadhis_2_reporting_rates_chart[".filterFields"] = array();
$tdatadhis_2_reporting_rates_chart[".requiredSearchFields"] = array();

$tdatadhis_2_reporting_rates_chart[".googleLikeFields"] = array();
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "organisationunit_id";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "organisationunit";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "organisationunit_code";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "actual_reports";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "expected_reports";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "reporting_rate";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "actual_reports_on_time";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "reporting_rate_on_time";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "dataset_id";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "dataset_name";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "facility_type";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "report_period";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "ownership_type_id";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "ownership_type_label";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "indicator_id";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "indicator_name";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "organisationunit_description";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "value";
$tdatadhis_2_reporting_rates_chart[".googleLikeFields"][] = "relative_period";



$tdatadhis_2_reporting_rates_chart[".tableType"] = "chart";

$tdatadhis_2_reporting_rates_chart[".printerPageOrientation"] = 0;
$tdatadhis_2_reporting_rates_chart[".nPrinterPageScale"] = 100;

$tdatadhis_2_reporting_rates_chart[".nPrinterSplitRecords"] = 40;

$tdatadhis_2_reporting_rates_chart[".geocodingEnabled"] = false;



// chart settings
$tdatadhis_2_reporting_rates_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdatadhis_2_reporting_rates_chart[".isDisplayLoading"] = true;


$tdatadhis_2_reporting_rates_chart[".searchIsRequiredForFilters"] = true;





$tstrOrderBy = "";
$tdatadhis_2_reporting_rates_chart[".strOrderBy"] = $tstrOrderBy;

$tdatadhis_2_reporting_rates_chart[".orderindexes"] = array();


$tdatadhis_2_reporting_rates_chart[".sqlHead"] = "SELECT organisationunit_id,  	organisationunit,  	organisationunit_code,  	actual_reports,  	expected_reports,  	reporting_rate,  	actual_reports_on_time,  	reporting_rate_on_time,  	dataset_id,  	dataset_name,  	facility_type,  	report_period,  	ownership_type_id,  	ownership_type_label,  	indicator_id,  	indicator_name,  	organisationunit_description,  	\"value\",  	relative_period";
$tdatadhis_2_reporting_rates_chart[".sqlFrom"] = "FROM \"public\".dhis2_reporting_rates";
$tdatadhis_2_reporting_rates_chart[".sqlWhereExpr"] = "";
$tdatadhis_2_reporting_rates_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis_2_reporting_rates_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis_2_reporting_rates_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis_2_reporting_rates_chart[".highlightSearchResults"] = true;

$tableKeysdhis_2_reporting_rates_chart = array();
$tdatadhis_2_reporting_rates_chart[".Keys"] = $tableKeysdhis_2_reporting_rates_chart;


$tdatadhis_2_reporting_rates_chart[".hideMobileList"] = array();




//	organisationunit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "organisationunit_id";
	$fdata["GoodName"] = "organisationunit_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisationunit_id";

		$fdata["sourceSingle"] = "organisationunit_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisationunit_id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["organisationunit_id"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "organisationunit_id";
//	organisationunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationunit";
	$fdata["GoodName"] = "organisationunit";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisationunit";

		$fdata["sourceSingle"] = "organisationunit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisationunit";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "organisationunit";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "organisationunit";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis_2_reporting_rates_chart["organisationunit"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "organisationunit";
//	organisationunit_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organisationunit_code";
	$fdata["GoodName"] = "organisationunit_code";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisationunit_code";

		$fdata["sourceSingle"] = "organisationunit_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisationunit_code";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadhis_2_reporting_rates_chart["organisationunit_code"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "organisationunit_code";
//	actual_reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actual_reports";
	$fdata["GoodName"] = "actual_reports";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","actual_reports");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "actual_reports";

		$fdata["sourceSingle"] = "actual_reports";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_reports";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis_2_reporting_rates_chart["actual_reports"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "actual_reports";
//	expected_reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "expected_reports";
	$fdata["GoodName"] = "expected_reports";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","expected_reports");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "expected_reports";

		$fdata["sourceSingle"] = "expected_reports";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expected_reports";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis_2_reporting_rates_chart["expected_reports"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "expected_reports";
//	reporting_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reporting_rate";
	$fdata["GoodName"] = "reporting_rate";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","reporting_rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "reporting_rate";

		$fdata["sourceSingle"] = "reporting_rate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reporting_rate";

	
	
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


	$tdatadhis_2_reporting_rates_chart["reporting_rate"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "reporting_rate";
//	actual_reports_on_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actual_reports_on_time";
	$fdata["GoodName"] = "actual_reports_on_time";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","actual_reports_on_time");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "actual_reports_on_time";

		$fdata["sourceSingle"] = "actual_reports_on_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_reports_on_time";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis_2_reporting_rates_chart["actual_reports_on_time"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "actual_reports_on_time";
//	reporting_rate_on_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reporting_rate_on_time";
	$fdata["GoodName"] = "reporting_rate_on_time";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","reporting_rate_on_time");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "reporting_rate_on_time";

		$fdata["sourceSingle"] = "reporting_rate_on_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reporting_rate_on_time";

	
	
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


	$tdatadhis_2_reporting_rates_chart["reporting_rate_on_time"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "reporting_rate_on_time";
//	dataset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dataset_id";
	$fdata["GoodName"] = "dataset_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","dataset_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dataset_id";

		$fdata["sourceSingle"] = "dataset_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["dataset_id"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "dataset_id";
//	dataset_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dataset_name";
	$fdata["GoodName"] = "dataset_name";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","dataset_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dataset_name";

		$fdata["sourceSingle"] = "dataset_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataset_name";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["dataset_name"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "dataset_name";
//	facility_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "facility_type";
	$fdata["GoodName"] = "facility_type";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","facility_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_type";

		$fdata["sourceSingle"] = "facility_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_type";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "facility_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "facility_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis_2_reporting_rates_chart["facility_type"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "facility_type";
//	report_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "report_period";
	$fdata["GoodName"] = "report_period";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","report_period");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "report_period";

		$fdata["sourceSingle"] = "report_period";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_period";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "report_period";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "report_period";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis_2_reporting_rates_chart["report_period"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "report_period";
//	ownership_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ownership_type_id";
	$fdata["GoodName"] = "ownership_type_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","ownership_type_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ownership_type_id";

		$fdata["sourceSingle"] = "ownership_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ownership_type_id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["ownership_type_id"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "ownership_type_id";
//	ownership_type_label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ownership_type_label";
	$fdata["GoodName"] = "ownership_type_label";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","ownership_type_label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ownership_type_label";

		$fdata["sourceSingle"] = "ownership_type_label";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ownership_type_label";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ownership_type_label";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ownership_type_label";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis_2_reporting_rates_chart["ownership_type_label"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "ownership_type_label";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","indicator_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["indicator_id"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_name";

		$fdata["sourceSingle"] = "indicator_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_name";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "indicator_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis_2_reporting_rates_chart["indicator_name"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "indicator_name";
//	organisationunit_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "organisationunit_description";
	$fdata["GoodName"] = "organisationunit_description";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisationunit_description";

		$fdata["sourceSingle"] = "organisationunit_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisationunit_description";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis_2_reporting_rates_chart["organisationunit_description"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "organisationunit_description";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"value\"";

	
	
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


	$tdatadhis_2_reporting_rates_chart["value"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "value";
//	relative_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "relative_period";
	$fdata["GoodName"] = "relative_period";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("DHIS_2_Reporting_Rates_Chart","relative_period");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "relative_period";

		$fdata["sourceSingle"] = "relative_period";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "relative_period";

	
	
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
	$edata["LookupTable"] = "public.dhis2_reporting_rates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "relative_period";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "relative_period";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatadhis_2_reporting_rates_chart["relative_period"] = $fdata;
		$tdatadhis_2_reporting_rates_chart[".searchableFields"][] = "relative_period";

$tdatadhis_2_reporting_rates_chart[".chartLabelField"] = "indicator_name";
$tdatadhis_2_reporting_rates_chart[".chartSeries"] = array();
$tdatadhis_2_reporting_rates_chart[".chartSeries"][] = array(
	"field" => "value",
	"total" => ""
);
	$tdatadhis_2_reporting_rates_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DHIS_2_Reporting_Rates_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">value</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">indicator_name</attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Rerporting Rates Chart (DHIS2)").'</attr>
<attr value="foot">'.xmlencode("Indicators").'</attr>
<attr value="y_axis_label">'.xmlencode("actual_reports").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">organisationunit_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">organisationunit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">organisationunit_code</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_code")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">actual_reports</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","actual_reports")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">expected_reports</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","expected_reports")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">reporting_rate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","reporting_rate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">actual_reports_on_time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","actual_reports_on_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">reporting_rate_on_time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","reporting_rate_on_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">dataset_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","dataset_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">dataset_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","dataset_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">facility_type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","facility_type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">report_period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","report_period")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">ownership_type_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","ownership_type_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">ownership_type_label</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","ownership_type_label")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">indicator_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","indicator_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">indicator_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","indicator_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="16">
		<attr value="name">organisationunit_description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","organisationunit_description")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="17">
		<attr value="name">value</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","value")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '<attr value="18">
		<attr value="name">relative_period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS_2_Reporting_Rates_Chart","relative_period")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadhis_2_reporting_rates_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DHIS_2_Reporting_Rates_Chart</attr>
<attr value="short_table_name">dhis_2_reporting_rates_chart</attr>
</attr>

</chart>';

$tables_data["DHIS_2_Reporting_Rates_Chart"]=&$tdatadhis_2_reporting_rates_chart;
$field_labels["DHIS_2_Reporting_Rates_Chart"] = &$fieldLabelsdhis_2_reporting_rates_chart;
$fieldToolTips["DHIS_2_Reporting_Rates_Chart"] = &$fieldToolTipsdhis_2_reporting_rates_chart;
$placeHolders["DHIS_2_Reporting_Rates_Chart"] = &$placeHoldersdhis_2_reporting_rates_chart;
$page_titles["DHIS_2_Reporting_Rates_Chart"] = &$pageTitlesdhis_2_reporting_rates_chart;


changeTextControlsToDate( "DHIS_2_Reporting_Rates_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS_2_Reporting_Rates_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS_2_Reporting_Rates_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dhis_2_reporting_rates_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "organisationunit_id,  	organisationunit,  	organisationunit_code,  	actual_reports,  	expected_reports,  	reporting_rate,  	actual_reports_on_time,  	reporting_rate_on_time,  	dataset_id,  	dataset_name,  	facility_type,  	report_period,  	ownership_type_id,  	ownership_type_label,  	indicator_id,  	indicator_name,  	organisationunit_description,  	\"value\",  	relative_period";
$proto0["m_strFrom"] = "FROM \"public\".dhis2_reporting_rates";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto6["m_sql"] = "organisationunit_id";
$proto6["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto8["m_sql"] = "organisationunit";
$proto8["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit_code",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto10["m_sql"] = "organisationunit_code";
$proto10["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_reports",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto12["m_sql"] = "actual_reports";
$proto12["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "expected_reports",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto14["m_sql"] = "expected_reports";
$proto14["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_rate",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto16["m_sql"] = "reporting_rate";
$proto16["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_reports_on_time",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto18["m_sql"] = "actual_reports_on_time";
$proto18["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_rate_on_time",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto20["m_sql"] = "reporting_rate_on_time";
$proto20["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto22["m_sql"] = "dataset_id";
$proto22["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_name",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto24["m_sql"] = "dataset_name";
$proto24["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto26["m_sql"] = "facility_type";
$proto26["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "report_period",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto28["m_sql"] = "report_period";
$proto28["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ownership_type_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto30["m_sql"] = "ownership_type_id";
$proto30["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ownership_type_label",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto32["m_sql"] = "ownership_type_label";
$proto32["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto34["m_sql"] = "indicator_id";
$proto34["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto36["m_sql"] = "indicator_name";
$proto36["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit_description",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto38["m_sql"] = "organisationunit_description";
$proto38["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto40["m_sql"] = "\"value\"";
$proto40["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "relative_period",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "DHIS_2_Reporting_Rates_Chart"
));

$proto42["m_sql"] = "relative_period";
$proto42["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "public.dhis2_reporting_rates";
$proto45["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "organisationunit_id";
$proto45["m_columns"][] = "organisationunit";
$proto45["m_columns"][] = "organisationunit_code";
$proto45["m_columns"][] = "actual_reports";
$proto45["m_columns"][] = "expected_reports";
$proto45["m_columns"][] = "reporting_rate";
$proto45["m_columns"][] = "actual_reports_on_time";
$proto45["m_columns"][] = "reporting_rate_on_time";
$proto45["m_columns"][] = "dataset_id";
$proto45["m_columns"][] = "dataset_name";
$proto45["m_columns"][] = "facility_type";
$proto45["m_columns"][] = "report_period";
$proto45["m_columns"][] = "ownership_type_id";
$proto45["m_columns"][] = "ownership_type_label";
$proto45["m_columns"][] = "indicator_id";
$proto45["m_columns"][] = "indicator_name";
$proto45["m_columns"][] = "organisationunit_description";
$proto45["m_columns"][] = "value";
$proto45["m_columns"][] = "relative_period";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "\"public\".dhis2_reporting_rates";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "DHIS_2_Reporting_Rates_Chart";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DHIS_2_Reporting_Rates_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dhis_2_reporting_rates_chart = createSqlQuery_dhis_2_reporting_rates_chart();


	
																												;

																			

$tdatadhis_2_reporting_rates_chart[".sqlquery"] = $queryData_dhis_2_reporting_rates_chart;



$tdatadhis_2_reporting_rates_chart[".hasEvents"] = false;

?>