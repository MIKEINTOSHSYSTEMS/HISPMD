<?php
$tdatadhis2_reporting_rates = array();
$tdatadhis2_reporting_rates[".searchableFields"] = array();
$tdatadhis2_reporting_rates[".ShortName"] = "dhis2_reporting_rates";
$tdatadhis2_reporting_rates[".OwnerID"] = "";
$tdatadhis2_reporting_rates[".OriginalTable"] = "public.dhis2_reporting_rates";


$tdatadhis2_reporting_rates[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_reporting_rates[".originalPagesByType"] = $tdatadhis2_reporting_rates[".pagesByType"];
$tdatadhis2_reporting_rates[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reporting_rates[".originalPages"] = $tdatadhis2_reporting_rates[".pages"];
$tdatadhis2_reporting_rates[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_reporting_rates[".originalDefaultPages"] = $tdatadhis2_reporting_rates[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reporting_rates = array();
$fieldToolTipsdhis2_reporting_rates = array();
$pageTitlesdhis2_reporting_rates = array();
$placeHoldersdhis2_reporting_rates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reporting_rates["English"] = array();
	$fieldToolTipsdhis2_reporting_rates["English"] = array();
	$placeHoldersdhis2_reporting_rates["English"] = array();
	$pageTitlesdhis2_reporting_rates["English"] = array();
	$fieldLabelsdhis2_reporting_rates["English"]["organisationunit_id"] = "Organisationunit Id";
	$fieldToolTipsdhis2_reporting_rates["English"]["organisationunit_id"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["organisationunit_id"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["organisationunit"] = "Organisation Unit";
	$fieldToolTipsdhis2_reporting_rates["English"]["organisationunit"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["organisationunit"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["organisationunit_code"] = "Organisationunit Code";
	$fieldToolTipsdhis2_reporting_rates["English"]["organisationunit_code"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["organisationunit_code"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["actual_reports"] = "Actual Reports";
	$fieldToolTipsdhis2_reporting_rates["English"]["actual_reports"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["actual_reports"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["expected_reports"] = "Expected Reports";
	$fieldToolTipsdhis2_reporting_rates["English"]["expected_reports"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["expected_reports"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["reporting_rate"] = "Reporting Rate";
	$fieldToolTipsdhis2_reporting_rates["English"]["reporting_rate"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["reporting_rate"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["actual_reports_on_time"] = "Actual Reports On Time";
	$fieldToolTipsdhis2_reporting_rates["English"]["actual_reports_on_time"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["actual_reports_on_time"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["reporting_rate_on_time"] = "Reporting Rate On Time";
	$fieldToolTipsdhis2_reporting_rates["English"]["reporting_rate_on_time"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["reporting_rate_on_time"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["dataset_id"] = "Dataset Id";
	$fieldToolTipsdhis2_reporting_rates["English"]["dataset_id"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["dataset_id"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["dataset_name"] = "Dataset";
	$fieldToolTipsdhis2_reporting_rates["English"]["dataset_name"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["dataset_name"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["facility_type"] = "Facility Type";
	$fieldToolTipsdhis2_reporting_rates["English"]["facility_type"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["facility_type"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["report_period"] = "Reporting Period";
	$fieldToolTipsdhis2_reporting_rates["English"]["report_period"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["report_period"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["ownership_type_id"] = "Ownership Type Id";
	$fieldToolTipsdhis2_reporting_rates["English"]["ownership_type_id"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["ownership_type_id"] = "";
	$fieldLabelsdhis2_reporting_rates["English"]["ownership_type_label"] = "Ownership Type";
	$fieldToolTipsdhis2_reporting_rates["English"]["ownership_type_label"] = "";
	$placeHoldersdhis2_reporting_rates["English"]["ownership_type_label"] = "";
	if (count($fieldToolTipsdhis2_reporting_rates["English"]))
		$tdatadhis2_reporting_rates[".isUseToolTips"] = true;
}


	$tdatadhis2_reporting_rates[".NCSearch"] = true;



$tdatadhis2_reporting_rates[".shortTableName"] = "dhis2_reporting_rates";
$tdatadhis2_reporting_rates[".nSecOptions"] = 0;

$tdatadhis2_reporting_rates[".mainTableOwnerID"] = "";
$tdatadhis2_reporting_rates[".entityType"] = 0;
$tdatadhis2_reporting_rates[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadhis2_reporting_rates[".strOriginalTableName"] = "public.dhis2_reporting_rates";

	



$tdatadhis2_reporting_rates[".showAddInPopup"] = false;

$tdatadhis2_reporting_rates[".showEditInPopup"] = false;

$tdatadhis2_reporting_rates[".showViewInPopup"] = false;

$tdatadhis2_reporting_rates[".listAjax"] = false;
//	temporary
//$tdatadhis2_reporting_rates[".listAjax"] = false;

	$tdatadhis2_reporting_rates[".audit"] = false;

	$tdatadhis2_reporting_rates[".locking"] = false;


$pages = $tdatadhis2_reporting_rates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reporting_rates[".edit"] = true;
	$tdatadhis2_reporting_rates[".afterEditAction"] = 1;
	$tdatadhis2_reporting_rates[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reporting_rates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reporting_rates[".add"] = true;
$tdatadhis2_reporting_rates[".afterAddAction"] = 1;
$tdatadhis2_reporting_rates[".closePopupAfterAdd"] = 1;
$tdatadhis2_reporting_rates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reporting_rates[".list"] = true;
}



$tdatadhis2_reporting_rates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reporting_rates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reporting_rates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reporting_rates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reporting_rates[".printFriendly"] = true;
}



$tdatadhis2_reporting_rates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reporting_rates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reporting_rates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reporting_rates[".isUseAjaxSuggest"] = true;



			

$tdatadhis2_reporting_rates[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reporting_rates[".buttonsAdded"] = false;

$tdatadhis2_reporting_rates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reporting_rates[".isUseTimeForSearch"] = false;


$tdatadhis2_reporting_rates[".badgeColor"] = "CD5C5C";


$tdatadhis2_reporting_rates[".allSearchFields"] = array();
$tdatadhis2_reporting_rates[".filterFields"] = array();
$tdatadhis2_reporting_rates[".requiredSearchFields"] = array();

$tdatadhis2_reporting_rates[".googleLikeFields"] = array();
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "organisationunit_id";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "organisationunit";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "organisationunit_code";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "actual_reports";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "expected_reports";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "reporting_rate";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "actual_reports_on_time";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "reporting_rate_on_time";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "dataset_id";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "dataset_name";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "facility_type";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "report_period";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "ownership_type_id";
$tdatadhis2_reporting_rates[".googleLikeFields"][] = "ownership_type_label";



$tdatadhis2_reporting_rates[".tableType"] = "list";

$tdatadhis2_reporting_rates[".printerPageOrientation"] = 0;
$tdatadhis2_reporting_rates[".nPrinterPageScale"] = 100;

$tdatadhis2_reporting_rates[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reporting_rates[".geocodingEnabled"] = false;




$tdatadhis2_reporting_rates[".isDisplayLoading"] = true;






$tdatadhis2_reporting_rates[".pageSize"] = 20;

$tdatadhis2_reporting_rates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reporting_rates[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reporting_rates[".orderindexes"] = array();


$tdatadhis2_reporting_rates[".sqlHead"] = "SELECT organisationunit_id,  	organisationunit,  	organisationunit_code,  	actual_reports,  	expected_reports,  	reporting_rate,  	actual_reports_on_time,  	reporting_rate_on_time,  	dataset_id,  	dataset_name,  	facility_type,  	report_period,  	ownership_type_id,  	ownership_type_label";
$tdatadhis2_reporting_rates[".sqlFrom"] = "FROM \"public\".dhis2_reporting_rates";
$tdatadhis2_reporting_rates[".sqlWhereExpr"] = "";
$tdatadhis2_reporting_rates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reporting_rates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reporting_rates[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reporting_rates[".highlightSearchResults"] = true;

$tableKeysdhis2_reporting_rates = array();
$tdatadhis2_reporting_rates[".Keys"] = $tableKeysdhis2_reporting_rates;


$tdatadhis2_reporting_rates[".hideMobileList"] = array();




//	organisationunit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "organisationunit_id";
	$fdata["GoodName"] = "organisationunit_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","organisationunit_id");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis2_reporting_rates["organisationunit_id"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "organisationunit_id";
//	organisationunit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisationunit";
	$fdata["GoodName"] = "organisationunit";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","organisationunit");
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
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rates["organisationunit"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "organisationunit";
//	organisationunit_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organisationunit_code";
	$fdata["GoodName"] = "organisationunit_code";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","organisationunit_code");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadhis2_reporting_rates["organisationunit_code"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "organisationunit_code";
//	actual_reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actual_reports";
	$fdata["GoodName"] = "actual_reports";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","actual_reports");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis2_reporting_rates["actual_reports"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "actual_reports";
//	expected_reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "expected_reports";
	$fdata["GoodName"] = "expected_reports";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","expected_reports");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis2_reporting_rates["expected_reports"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "expected_reports";
//	reporting_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reporting_rate";
	$fdata["GoodName"] = "reporting_rate";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","reporting_rate");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis2_reporting_rates["reporting_rate"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "reporting_rate";
//	actual_reports_on_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actual_reports_on_time";
	$fdata["GoodName"] = "actual_reports_on_time";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","actual_reports_on_time");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis2_reporting_rates["actual_reports_on_time"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "actual_reports_on_time";
//	reporting_rate_on_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reporting_rate_on_time";
	$fdata["GoodName"] = "reporting_rate_on_time";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","reporting_rate_on_time");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadhis2_reporting_rates["reporting_rate_on_time"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "reporting_rate_on_time";
//	dataset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dataset_id";
	$fdata["GoodName"] = "dataset_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","dataset_id");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis2_reporting_rates["dataset_id"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "dataset_id";
//	dataset_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dataset_name";
	$fdata["GoodName"] = "dataset_name";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","dataset_name");
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
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rates["dataset_name"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "dataset_name";
//	facility_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "facility_type";
	$fdata["GoodName"] = "facility_type";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","facility_type");
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
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rates["facility_type"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "facility_type";
//	report_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "report_period";
	$fdata["GoodName"] = "report_period";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","report_period");
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
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rates["report_period"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "report_period";
//	ownership_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ownership_type_id";
	$fdata["GoodName"] = "ownership_type_id";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","ownership_type_id");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadhis2_reporting_rates["ownership_type_id"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "ownership_type_id";
//	ownership_type_label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ownership_type_label";
	$fdata["GoodName"] = "ownership_type_label";
	$fdata["ownerTable"] = "public.dhis2_reporting_rates";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reporting_rates","ownership_type_label");
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
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "actual_reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reporting_rates["ownership_type_label"] = $fdata;
		$tdatadhis2_reporting_rates[".searchableFields"][] = "ownership_type_label";


$tables_data["public.dhis2_reporting_rates"]=&$tdatadhis2_reporting_rates;
$field_labels["public_dhis2_reporting_rates"] = &$fieldLabelsdhis2_reporting_rates;
$fieldToolTips["public_dhis2_reporting_rates"] = &$fieldToolTipsdhis2_reporting_rates;
$placeHolders["public_dhis2_reporting_rates"] = &$placeHoldersdhis2_reporting_rates;
$page_titles["public_dhis2_reporting_rates"] = &$pageTitlesdhis2_reporting_rates;


changeTextControlsToDate( "public.dhis2_reporting_rates" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.dhis2_reporting_rates"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.dhis2_reporting_rates"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dhis2_reporting_rates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "organisationunit_id,  	organisationunit,  	organisationunit_code,  	actual_reports,  	expected_reports,  	reporting_rate,  	actual_reports_on_time,  	reporting_rate_on_time,  	dataset_id,  	dataset_name,  	facility_type,  	report_period,  	ownership_type_id,  	ownership_type_label";
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
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto6["m_sql"] = "organisationunit_id";
$proto6["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto8["m_sql"] = "organisationunit";
$proto8["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "organisationunit_code",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto10["m_sql"] = "organisationunit_code";
$proto10["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_reports",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto12["m_sql"] = "actual_reports";
$proto12["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "expected_reports",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto14["m_sql"] = "expected_reports";
$proto14["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_rate",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto16["m_sql"] = "reporting_rate";
$proto16["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_reports_on_time",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto18["m_sql"] = "actual_reports_on_time";
$proto18["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_rate_on_time",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto20["m_sql"] = "reporting_rate_on_time";
$proto20["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto22["m_sql"] = "dataset_id";
$proto22["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dataset_name",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto24["m_sql"] = "dataset_name";
$proto24["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto26["m_sql"] = "facility_type";
$proto26["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "report_period",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto28["m_sql"] = "report_period";
$proto28["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ownership_type_id",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto30["m_sql"] = "ownership_type_id";
$proto30["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ownership_type_label",
	"m_strTable" => "public.dhis2_reporting_rates",
	"m_srcTableName" => "public.dhis2_reporting_rates"
));

$proto32["m_sql"] = "ownership_type_label";
$proto32["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "public.dhis2_reporting_rates";
$proto35["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "organisationunit_id";
$proto35["m_columns"][] = "organisationunit";
$proto35["m_columns"][] = "organisationunit_code";
$proto35["m_columns"][] = "actual_reports";
$proto35["m_columns"][] = "expected_reports";
$proto35["m_columns"][] = "reporting_rate";
$proto35["m_columns"][] = "actual_reports_on_time";
$proto35["m_columns"][] = "reporting_rate_on_time";
$proto35["m_columns"][] = "dataset_id";
$proto35["m_columns"][] = "dataset_name";
$proto35["m_columns"][] = "facility_type";
$proto35["m_columns"][] = "report_period";
$proto35["m_columns"][] = "ownership_type_id";
$proto35["m_columns"][] = "ownership_type_label";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "\"public\".dhis2_reporting_rates";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "public.dhis2_reporting_rates";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.dhis2_reporting_rates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dhis2_reporting_rates = createSqlQuery_dhis2_reporting_rates();


	
																												;

														

$tdatadhis2_reporting_rates[".sqlquery"] = $queryData_dhis2_reporting_rates;



$tdatadhis2_reporting_rates[".hasEvents"] = false;

?>