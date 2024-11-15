<?php
$tdatadhis2_reportingrates = array();
$tdatadhis2_reportingrates[".searchableFields"] = array();
$tdatadhis2_reportingrates[".ShortName"] = "dhis2_reportingrates";
$tdatadhis2_reportingrates[".OwnerID"] = "";
$tdatadhis2_reportingrates[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reportingrates[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_reportingrates[".originalPagesByType"] = $tdatadhis2_reportingrates[".pagesByType"];
$tdatadhis2_reportingrates[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reportingrates[".originalPages"] = $tdatadhis2_reportingrates[".pages"];
$tdatadhis2_reportingrates[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_reportingrates[".originalDefaultPages"] = $tdatadhis2_reportingrates[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reportingrates = array();
$fieldToolTipsdhis2_reportingrates = array();
$pageTitlesdhis2_reportingrates = array();
$placeHoldersdhis2_reportingrates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reportingrates["English"] = array();
	$fieldToolTipsdhis2_reportingrates["English"] = array();
	$placeHoldersdhis2_reportingrates["English"] = array();
	$pageTitlesdhis2_reportingrates["English"] = array();
	$fieldLabelsdhis2_reportingrates["English"]["Organisation_unit_ID"] = "Organisation unit ID";
	$fieldToolTipsdhis2_reportingrates["English"]["Organisation_unit_ID"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Organisation_unit_ID"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Organisation_unit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reportingrates["English"]["Organisation_unit"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Organisation_unit_code"] = "Organisation unit code";
	$fieldToolTipsdhis2_reportingrates["English"]["Organisation_unit_code"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Organisation_unit_code"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Organisation_unit_description"] = "Organisation unit description";
	$fieldToolTipsdhis2_reportingrates["English"]["Organisation_unit_description"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Organisation_unit_description"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["actual_reports"] = "Actual Reports";
	$fieldToolTipsdhis2_reportingrates["English"]["actual_reports"] = "";
	$placeHoldersdhis2_reportingrates["English"]["actual_reports"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["expected_reports"] = "Expected Reports";
	$fieldToolTipsdhis2_reportingrates["English"]["expected_reports"] = "";
	$placeHoldersdhis2_reportingrates["English"]["expected_reports"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["reporting_rate"] = "Reporting Rate";
	$fieldToolTipsdhis2_reportingrates["English"]["reporting_rate"] = "";
	$placeHoldersdhis2_reportingrates["English"]["reporting_rate"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["actual_reports_on_time"] = "Actual reports on time";
	$fieldToolTipsdhis2_reportingrates["English"]["actual_reports_on_time"] = "";
	$placeHoldersdhis2_reportingrates["English"]["actual_reports_on_time"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["reporting_rate_on_time"] = "Reporting rate on time";
	$fieldToolTipsdhis2_reportingrates["English"]["reporting_rate_on_time"] = "";
	$placeHoldersdhis2_reportingrates["English"]["reporting_rate_on_time"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Dataset_ID"] = "Dataset";
	$fieldToolTipsdhis2_reportingrates["English"]["Dataset_ID"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Dataset_ID"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Dataset_Name"] = "Dataset Name";
	$fieldToolTipsdhis2_reportingrates["English"]["Dataset_Name"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Dataset_Name"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsdhis2_reportingrates["English"]["Facility_Type"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Facility_Type"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Report_Period"] = "Report Period";
	$fieldToolTipsdhis2_reportingrates["English"]["Report_Period"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Report_Period"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Ownership_Type_ID"] = "Ownership Type";
	$fieldToolTipsdhis2_reportingrates["English"]["Ownership_Type_ID"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Ownership_Type_ID"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Ownership_Type_Label"] = "Ownership Types";
	$fieldToolTipsdhis2_reportingrates["English"]["Ownership_Type_Label"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Ownership_Type_Label"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Settlement_Type_ID"] = "Settlement Type";
	$fieldToolTipsdhis2_reportingrates["English"]["Settlement_Type_ID"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Settlement_Type_ID"] = "";
	$fieldLabelsdhis2_reportingrates["English"]["Settlement_Type_Label"] = "Settlement Types";
	$fieldToolTipsdhis2_reportingrates["English"]["Settlement_Type_Label"] = "";
	$placeHoldersdhis2_reportingrates["English"]["Settlement_Type_Label"] = "";
	if (count($fieldToolTipsdhis2_reportingrates["English"]))
		$tdatadhis2_reportingrates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_reportingrates["Amharic"] = array();
	$fieldToolTipsdhis2_reportingrates["Amharic"] = array();
	$placeHoldersdhis2_reportingrates["Amharic"] = array();
	$pageTitlesdhis2_reportingrates["Amharic"] = array();
	$fieldLabelsdhis2_reportingrates["Amharic"]["Organisation_unit_ID"] = "Organisation unit ID";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Organisation_unit_ID"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Organisation_unit_ID"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Organisation_unit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Organisation_unit"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Organisation_unit_code"] = "Organisation unit code";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Organisation_unit_code"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Organisation_unit_code"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Organisation_unit_description"] = "Organisation unit description";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Organisation_unit_description"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Organisation_unit_description"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["actual_reports"] = "Actual Reports";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["actual_reports"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["actual_reports"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["expected_reports"] = "Expected Reports";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["expected_reports"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["expected_reports"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["reporting_rate"] = "Reporting Rate";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["reporting_rate"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["reporting_rate"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["actual_reports_on_time"] = "Actual reports on time";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["actual_reports_on_time"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["actual_reports_on_time"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["reporting_rate_on_time"] = "Reporting rate on time";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["reporting_rate_on_time"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["reporting_rate_on_time"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Dataset_ID"] = "Dataset ID";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Dataset_ID"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Dataset_ID"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Dataset_Name"] = "Dataset Name";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Dataset_Name"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Dataset_Name"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Facility_Type"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Facility_Type"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Report_Period"] = "Report Period";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Report_Period"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Report_Period"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Ownership_Type_ID"] = "Ownership Type ID";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Ownership_Type_ID"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Ownership_Type_ID"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Ownership_Type_Label"] = "Ownership Type Label";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Ownership_Type_Label"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Ownership_Type_Label"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Settlement_Type_ID"] = "Settlement Type ID";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Settlement_Type_ID"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Settlement_Type_ID"] = "";
	$fieldLabelsdhis2_reportingrates["Amharic"]["Settlement_Type_Label"] = "Settlement Type Label";
	$fieldToolTipsdhis2_reportingrates["Amharic"]["Settlement_Type_Label"] = "";
	$placeHoldersdhis2_reportingrates["Amharic"]["Settlement_Type_Label"] = "";
	if (count($fieldToolTipsdhis2_reportingrates["Amharic"]))
		$tdatadhis2_reportingrates[".isUseToolTips"] = true;
}


	$tdatadhis2_reportingrates[".NCSearch"] = true;



$tdatadhis2_reportingrates[".shortTableName"] = "dhis2_reportingrates";
$tdatadhis2_reportingrates[".nSecOptions"] = 0;

$tdatadhis2_reportingrates[".mainTableOwnerID"] = "";
$tdatadhis2_reportingrates[".entityType"] = 7;
$tdatadhis2_reportingrates[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reportingrates[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reportingrates[".showAddInPopup"] = false;

$tdatadhis2_reportingrates[".showEditInPopup"] = false;

$tdatadhis2_reportingrates[".showViewInPopup"] = false;

$tdatadhis2_reportingrates[".listAjax"] = false;
//	temporary
//$tdatadhis2_reportingrates[".listAjax"] = false;

	$tdatadhis2_reportingrates[".audit"] = true;

	$tdatadhis2_reportingrates[".locking"] = false;


$pages = $tdatadhis2_reportingrates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reportingrates[".edit"] = true;
	$tdatadhis2_reportingrates[".afterEditAction"] = 1;
	$tdatadhis2_reportingrates[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reportingrates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reportingrates[".add"] = true;
$tdatadhis2_reportingrates[".afterAddAction"] = 1;
$tdatadhis2_reportingrates[".closePopupAfterAdd"] = 1;
$tdatadhis2_reportingrates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reportingrates[".list"] = true;
}



$tdatadhis2_reportingrates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reportingrates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reportingrates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reportingrates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reportingrates[".printFriendly"] = true;
}



$tdatadhis2_reportingrates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reportingrates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reportingrates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reportingrates[".isUseAjaxSuggest"] = true;



			

$tdatadhis2_reportingrates[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reportingrates[".buttonsAdded"] = false;

$tdatadhis2_reportingrates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reportingrates[".isUseTimeForSearch"] = false;


$tdatadhis2_reportingrates[".badgeColor"] = "DC143C";


$tdatadhis2_reportingrates[".allSearchFields"] = array();
$tdatadhis2_reportingrates[".filterFields"] = array();
$tdatadhis2_reportingrates[".requiredSearchFields"] = array();

$tdatadhis2_reportingrates[".googleLikeFields"] = array();
$tdatadhis2_reportingrates[".googleLikeFields"][] = "Ownership Type ID";
$tdatadhis2_reportingrates[".googleLikeFields"][] = "Ownership Type Label";
$tdatadhis2_reportingrates[".googleLikeFields"][] = "Settlement Type ID";
$tdatadhis2_reportingrates[".googleLikeFields"][] = "Settlement Type Label";




$tdatadhis2_reportingrates[".printerPageOrientation"] = 0;
$tdatadhis2_reportingrates[".nPrinterPageScale"] = 100;

$tdatadhis2_reportingrates[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reportingrates[".geocodingEnabled"] = false;




$tdatadhis2_reportingrates[".isDisplayLoading"] = true;






$tdatadhis2_reportingrates[".pageSize"] = 20;

$tdatadhis2_reportingrates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reportingrates[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reportingrates[".orderindexes"] = array();


$tdatadhis2_reportingrates[".sqlHead"] = "";
$tdatadhis2_reportingrates[".sqlFrom"] = "";
$tdatadhis2_reportingrates[".sqlWhereExpr"] = "";
$tdatadhis2_reportingrates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reportingrates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reportingrates[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reportingrates[".highlightSearchResults"] = true;

$tableKeysdhis2_reportingrates = array();
$tdatadhis2_reportingrates[".Keys"] = $tableKeysdhis2_reportingrates;


$tdatadhis2_reportingrates[".hideMobileList"] = array();




//	Organisation unit ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Organisation unit ID";
	$fdata["GoodName"] = "Organisation_unit_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Organisation_unit_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Organisation unit ID";

	
		$fdata["FullName"] = "Organisation unit ID";

	
	
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


	$tdatadhis2_reportingrates["Organisation unit ID"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Organisation unit ID";
//	Organisation unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Organisation unit";
	$fdata["GoodName"] = "Organisation_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Organisation_unit");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Organisation unit";

	
		$fdata["FullName"] = "Organisation unit";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Organisation unit code";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrates["Organisation unit"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Organisation unit";
//	Organisation unit code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Organisation unit code";
	$fdata["GoodName"] = "Organisation_unit_code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Organisation_unit_code");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/rows/*/Organisation unit code";

	
		$fdata["FullName"] = "Organisation unit code";

	
	
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


	$tdatadhis2_reportingrates["Organisation unit code"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Organisation unit code";
//	Organisation unit description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Organisation unit description";
	$fdata["GoodName"] = "Organisation_unit_description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Organisation_unit_description");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Organisation unit description";

	
		$fdata["FullName"] = "Organisation unit description";

	
	
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


	$tdatadhis2_reportingrates["Organisation unit description"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Organisation unit description";
//	actual reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actual reports";
	$fdata["GoodName"] = "actual_reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","actual_reports");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/rows/*/actual reports";

	
		$fdata["FullName"] = "actual reports";

	
	
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


	$tdatadhis2_reportingrates["actual reports"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "actual reports";
//	expected reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "expected reports";
	$fdata["GoodName"] = "expected_reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","expected_reports");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/rows/*/expected reports";

	
		$fdata["FullName"] = "expected reports";

	
	
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


	$tdatadhis2_reportingrates["expected reports"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "expected reports";
//	reporting rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reporting rate";
	$fdata["GoodName"] = "reporting_rate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","reporting_rate");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/rows/*/reporting rate";

	
		$fdata["FullName"] = "reporting rate";

	
	
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


	$tdatadhis2_reportingrates["reporting rate"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "reporting rate";
//	actual reports on time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actual reports on time";
	$fdata["GoodName"] = "actual_reports_on_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","actual_reports_on_time");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/rows/*/actual reports on time";

	
		$fdata["FullName"] = "actual reports on time";

	
	
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


	$tdatadhis2_reportingrates["actual reports on time"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "actual reports on time";
//	reporting rate on time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reporting rate on time";
	$fdata["GoodName"] = "reporting_rate_on_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","reporting_rate_on_time");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/rows/*/reporting rate on time";

	
		$fdata["FullName"] = "reporting rate on time";

	
	
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


	$tdatadhis2_reportingrates["reporting rate on time"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "reporting rate on time";
//	Dataset ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Dataset ID";
	$fdata["GoodName"] = "Dataset_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Dataset_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Dataset ID";

	
		$fdata["FullName"] = "Dataset ID";

	
	
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


	$tdatadhis2_reportingrates["Dataset ID"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Dataset ID";
//	Dataset Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Dataset Name";
	$fdata["GoodName"] = "Dataset_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Dataset_Name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Dataset Name";

	
		$fdata["FullName"] = "Dataset Name";

	
	
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


	$tdatadhis2_reportingrates["Dataset Name"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Dataset Name";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Facility_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Facility Type";

	
		$fdata["FullName"] = "Facility Type";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Hospital";
	$edata["LookupValues"][] = "Clinic";
	$edata["LookupValues"][] = "Health Post";
	$edata["LookupValues"][] = "Health Center";

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Organisation unit code";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrates["Facility Type"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Facility Type";
//	Ownership Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ownership Type ID";
	$fdata["GoodName"] = "Ownership_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Ownership_Type_ID");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["LookupValues"][] = "private";
	$edata["LookupValues"][] = "public";
	$edata["LookupValues"][] = "other_government";
	$edata["LookupValues"][] = "ngo";

	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrates["Ownership Type ID"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Ownership Type ID";
//	Ownership Type Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Ownership Type Label";
	$fdata["GoodName"] = "Ownership_Type_Label";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Ownership_Type_Label");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Organisation unit code";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrates["Ownership Type Label"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Ownership Type Label";
//	Settlement Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Settlement Type ID";
	$fdata["GoodName"] = "Settlement_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Settlement_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Settlement Type ID";

	
		$fdata["FullName"] = "Settlement Type ID";

	
	
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


	$tdatadhis2_reportingrates["Settlement Type ID"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Settlement Type ID";
//	Settlement Type Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Settlement Type Label";
	$fdata["GoodName"] = "Settlement_Type_Label";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Settlement_Type_Label");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Settlement Type Label";

	
		$fdata["FullName"] = "Settlement Type Label";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Urban Settlement";
	$edata["LookupValues"][] = "Pastoral Settlement";
	$edata["LookupValues"][] = "Agrarian Settlement";

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Organisation unit code";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrates["Settlement Type Label"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Settlement Type Label";
//	Report Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Report Period";
	$fdata["GoodName"] = "Report_Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_ReportingRates","Report_Period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/rows/*/Report Period";

	
		$fdata["FullName"] = "Report Period";

	
	
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


	$tdatadhis2_reportingrates["Report Period"] = $fdata;
		$tdatadhis2_reportingrates[".searchableFields"][] = "Report Period";


$tables_data["DHIS2_ReportingRates"]=&$tdatadhis2_reportingrates;
$field_labels["DHIS2_ReportingRates"] = &$fieldLabelsdhis2_reportingrates;
$fieldToolTips["DHIS2_ReportingRates"] = &$fieldToolTipsdhis2_reportingrates;
$placeHolders["DHIS2_ReportingRates"] = &$placeHoldersdhis2_reportingrates;
$page_titles["DHIS2_ReportingRates"] = &$pageTitlesdhis2_reportingrates;


changeTextControlsToDate( "DHIS2_ReportingRates" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_ReportingRates"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_ReportingRates"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reportingrates_ops.php" ) );



	
																												;

																	

$tdatadhis2_reportingrates[".sqlquery"] = $queryData_dhis2_reportingrates;



include_once(getabspath("include/dhis2_reportingrates_events.php"));
$tdatadhis2_reportingrates[".hasEvents"] = true;

?>