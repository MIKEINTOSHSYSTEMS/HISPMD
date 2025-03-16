<?php
$tdatadhis2_reportingrate_settings = array();
$tdatadhis2_reportingrate_settings[".searchableFields"] = array();
$tdatadhis2_reportingrate_settings[".ShortName"] = "dhis2_reportingrate_settings";
$tdatadhis2_reportingrate_settings[".OwnerID"] = "";
$tdatadhis2_reportingrate_settings[".OriginalTable"] = "public.dhis2_reportingrate_settings";


$tdatadhis2_reportingrate_settings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadhis2_reportingrate_settings[".originalPagesByType"] = $tdatadhis2_reportingrate_settings[".pagesByType"];
$tdatadhis2_reportingrate_settings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadhis2_reportingrate_settings[".originalPages"] = $tdatadhis2_reportingrate_settings[".pages"];
$tdatadhis2_reportingrate_settings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadhis2_reportingrate_settings[".originalDefaultPages"] = $tdatadhis2_reportingrate_settings[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reportingrate_settings = array();
$fieldToolTipsdhis2_reportingrate_settings = array();
$pageTitlesdhis2_reportingrate_settings = array();
$placeHoldersdhis2_reportingrate_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reportingrate_settings["English"] = array();
	$fieldToolTipsdhis2_reportingrate_settings["English"] = array();
	$placeHoldersdhis2_reportingrate_settings["English"] = array();
	$pageTitlesdhis2_reportingrate_settings["English"] = array();
	$fieldLabelsdhis2_reportingrate_settings["English"]["id"] = "Id";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["id"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["id"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["data_set"] = "Indicator Data Sets";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["data_set"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["data_set"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["report_period"] = "Reporting Periods";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["report_period"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["report_period"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["org_unit"] = "Org Units";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["org_unit"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["org_unit"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["created_at"] = "Created At";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["created_at"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["created_at"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["updated_at"] = "Updated At";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["updated_at"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["updated_at"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["facility_types"] = "Facility Types";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["facility_types"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["facility_types"] = "";
	$fieldLabelsdhis2_reportingrate_settings["English"]["ownership_types"] = "Ownership Types";
	$fieldToolTipsdhis2_reportingrate_settings["English"]["ownership_types"] = "";
	$placeHoldersdhis2_reportingrate_settings["English"]["ownership_types"] = "";
	$pageTitlesdhis2_reportingrate_settings["English"]["view"] = "DHIS2 Reporting rate Settings ";
	$pageTitlesdhis2_reportingrate_settings["English"]["edit"] = "DHIS2 Reporting rate Settings, Edit [{%id}]";
	$pageTitlesdhis2_reportingrate_settings["English"]["print"] = "DHIS2 Reporting rate Settings";
	if (count($fieldToolTipsdhis2_reportingrate_settings["English"]))
		$tdatadhis2_reportingrate_settings[".isUseToolTips"] = true;
}


	$tdatadhis2_reportingrate_settings[".NCSearch"] = true;



$tdatadhis2_reportingrate_settings[".shortTableName"] = "dhis2_reportingrate_settings";
$tdatadhis2_reportingrate_settings[".nSecOptions"] = 0;

$tdatadhis2_reportingrate_settings[".mainTableOwnerID"] = "";
$tdatadhis2_reportingrate_settings[".entityType"] = 0;
$tdatadhis2_reportingrate_settings[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadhis2_reportingrate_settings[".strOriginalTableName"] = "public.dhis2_reportingrate_settings";

	



$tdatadhis2_reportingrate_settings[".showAddInPopup"] = false;

$tdatadhis2_reportingrate_settings[".showEditInPopup"] = false;

$tdatadhis2_reportingrate_settings[".showViewInPopup"] = false;

$tdatadhis2_reportingrate_settings[".listAjax"] = false;
//	temporary
//$tdatadhis2_reportingrate_settings[".listAjax"] = false;

	$tdatadhis2_reportingrate_settings[".audit"] = false;

	$tdatadhis2_reportingrate_settings[".locking"] = false;


$pages = $tdatadhis2_reportingrate_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reportingrate_settings[".edit"] = true;
	$tdatadhis2_reportingrate_settings[".afterEditAction"] = 2;
	$tdatadhis2_reportingrate_settings[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reportingrate_settings[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reportingrate_settings[".add"] = true;
$tdatadhis2_reportingrate_settings[".afterAddAction"] = 1;
$tdatadhis2_reportingrate_settings[".closePopupAfterAdd"] = 1;
$tdatadhis2_reportingrate_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reportingrate_settings[".list"] = true;
}



$tdatadhis2_reportingrate_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reportingrate_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reportingrate_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reportingrate_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reportingrate_settings[".printFriendly"] = true;
}



$tdatadhis2_reportingrate_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reportingrate_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reportingrate_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reportingrate_settings[".isUseAjaxSuggest"] = true;



			

$tdatadhis2_reportingrate_settings[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reportingrate_settings[".buttonsAdded"] = false;

$tdatadhis2_reportingrate_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reportingrate_settings[".isUseTimeForSearch"] = false;


$tdatadhis2_reportingrate_settings[".badgeColor"] = "BC8F8F";


$tdatadhis2_reportingrate_settings[".allSearchFields"] = array();
$tdatadhis2_reportingrate_settings[".filterFields"] = array();
$tdatadhis2_reportingrate_settings[".requiredSearchFields"] = array();

$tdatadhis2_reportingrate_settings[".googleLikeFields"] = array();
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "id";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "data_set";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "report_period";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "org_unit";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "created_at";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "updated_at";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "facility_types";
$tdatadhis2_reportingrate_settings[".googleLikeFields"][] = "ownership_types";



$tdatadhis2_reportingrate_settings[".tableType"] = "list";

$tdatadhis2_reportingrate_settings[".printerPageOrientation"] = 0;
$tdatadhis2_reportingrate_settings[".nPrinterPageScale"] = 100;

$tdatadhis2_reportingrate_settings[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reportingrate_settings[".geocodingEnabled"] = false;




$tdatadhis2_reportingrate_settings[".isDisplayLoading"] = true;






$tdatadhis2_reportingrate_settings[".pageSize"] = 20;

$tdatadhis2_reportingrate_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reportingrate_settings[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reportingrate_settings[".orderindexes"] = array();


$tdatadhis2_reportingrate_settings[".sqlHead"] = "SELECT id,  	data_set,  	report_period,  	org_unit,  	created_at,  	updated_at,  	facility_types,  	ownership_types";
$tdatadhis2_reportingrate_settings[".sqlFrom"] = "FROM \"public\".dhis2_reportingrate_settings";
$tdatadhis2_reportingrate_settings[".sqlWhereExpr"] = "";
$tdatadhis2_reportingrate_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reportingrate_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reportingrate_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reportingrate_settings[".highlightSearchResults"] = true;

$tableKeysdhis2_reportingrate_settings = array();
$tableKeysdhis2_reportingrate_settings[] = "id";
$tdatadhis2_reportingrate_settings[".Keys"] = $tableKeysdhis2_reportingrate_settings;


$tdatadhis2_reportingrate_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
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


	$tdatadhis2_reportingrate_settings["id"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "id";
//	data_set
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data_set";
	$fdata["GoodName"] = "data_set";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","data_set");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_set";

		$fdata["sourceSingle"] = "data_set";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_set";

	
	
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
	$edata["LookupTable"] = "DHIS2_Indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
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


	$tdatadhis2_reportingrate_settings["data_set"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "data_set";
//	report_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "report_period";
	$fdata["GoodName"] = "report_period";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","report_period");
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


	$tdatadhis2_reportingrate_settings["report_period"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "report_period";
//	org_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "org_unit";
	$fdata["GoodName"] = "org_unit";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","org_unit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "org_unit";

		$fdata["sourceSingle"] = "org_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_unit";

	
	
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

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
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


	$tdatadhis2_reportingrate_settings["org_unit"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "org_unit";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadhis2_reportingrate_settings["created_at"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadhis2_reportingrate_settings["updated_at"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "updated_at";
//	facility_types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "facility_types";
	$fdata["GoodName"] = "facility_types";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","facility_types");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_types";

		$fdata["sourceSingle"] = "facility_types";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_types";

	
	
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
	$edata["LookupValues"][] = "hospital";
	$edata["LookupValues"][] = "clinic";
	$edata["LookupValues"][] = "health_post";
	$edata["LookupValues"][] = "health_center";

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


	$tdatadhis2_reportingrate_settings["facility_types"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "facility_types";
//	ownership_types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ownership_types";
	$fdata["GoodName"] = "ownership_types";
	$fdata["ownerTable"] = "public.dhis2_reportingrate_settings";
	$fdata["Label"] = GetFieldLabel("public_dhis2_reportingrate_settings","ownership_types");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ownership_types";

		$fdata["sourceSingle"] = "ownership_types";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ownership_types";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reportingrate_settings["ownership_types"] = $fdata;
		$tdatadhis2_reportingrate_settings[".searchableFields"][] = "ownership_types";


$tables_data["public.dhis2_reportingrate_settings"]=&$tdatadhis2_reportingrate_settings;
$field_labels["public_dhis2_reportingrate_settings"] = &$fieldLabelsdhis2_reportingrate_settings;
$fieldToolTips["public_dhis2_reportingrate_settings"] = &$fieldToolTipsdhis2_reportingrate_settings;
$placeHolders["public_dhis2_reportingrate_settings"] = &$placeHoldersdhis2_reportingrate_settings;
$page_titles["public_dhis2_reportingrate_settings"] = &$pageTitlesdhis2_reportingrate_settings;


changeTextControlsToDate( "public.dhis2_reportingrate_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.dhis2_reportingrate_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.dhis2_reportingrate_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dhis2_reportingrate_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	data_set,  	report_period,  	org_unit,  	created_at,  	updated_at,  	facility_types,  	ownership_types";
$proto0["m_strFrom"] = "FROM \"public\".dhis2_reportingrate_settings";
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
	"m_strName" => "id",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data_set",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto8["m_sql"] = "data_set";
$proto8["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "report_period",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto10["m_sql"] = "report_period";
$proto10["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "org_unit",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto12["m_sql"] = "org_unit";
$proto12["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_types",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto18["m_sql"] = "facility_types";
$proto18["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ownership_types",
	"m_strTable" => "public.dhis2_reportingrate_settings",
	"m_srcTableName" => "public.dhis2_reportingrate_settings"
));

$proto20["m_sql"] = "ownership_types";
$proto20["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.dhis2_reportingrate_settings";
$proto23["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "data_set";
$proto23["m_columns"][] = "report_period";
$proto23["m_columns"][] = "org_unit";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "facility_types";
$proto23["m_columns"][] = "ownership_types";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".dhis2_reportingrate_settings";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.dhis2_reportingrate_settings";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.dhis2_reportingrate_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dhis2_reportingrate_settings = createSqlQuery_dhis2_reportingrate_settings();


	
																												;

								

$tdatadhis2_reportingrate_settings[".sqlquery"] = $queryData_dhis2_reportingrate_settings;



$tdatadhis2_reportingrate_settings[".hasEvents"] = false;

?>