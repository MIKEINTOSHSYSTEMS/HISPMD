<?php
$tdatadhis2_analyticsreport = array();
$tdatadhis2_analyticsreport[".searchableFields"] = array();
$tdatadhis2_analyticsreport[".ShortName"] = "dhis2_analyticsreport";
$tdatadhis2_analyticsreport[".OwnerID"] = "";
$tdatadhis2_analyticsreport[".OriginalTable"] = "DHIS2_AnalyticsReport";


$tdatadhis2_analyticsreport[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_analyticsreport[".originalPagesByType"] = $tdatadhis2_analyticsreport[".pagesByType"];
$tdatadhis2_analyticsreport[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_analyticsreport[".originalPages"] = $tdatadhis2_analyticsreport[".pages"];
$tdatadhis2_analyticsreport[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_analyticsreport[".originalDefaultPages"] = $tdatadhis2_analyticsreport[".defaultPages"];

//	field labels
$fieldLabelsdhis2_analyticsreport = array();
$fieldToolTipsdhis2_analyticsreport = array();
$pageTitlesdhis2_analyticsreport = array();
$placeHoldersdhis2_analyticsreport = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_analyticsreport["English"] = array();
	$fieldToolTipsdhis2_analyticsreport["English"] = array();
	$placeHoldersdhis2_analyticsreport["English"] = array();
	$pageTitlesdhis2_analyticsreport["English"] = array();
	$fieldLabelsdhis2_analyticsreport["English"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_analyticsreport["English"]["organisationUnit"] = "";
	$placeHoldersdhis2_analyticsreport["English"]["organisationUnit"] = "";
	$fieldLabelsdhis2_analyticsreport["English"]["indicator"] = "Indicator";
	$fieldToolTipsdhis2_analyticsreport["English"]["indicator"] = "";
	$placeHoldersdhis2_analyticsreport["English"]["indicator"] = "";
	$fieldLabelsdhis2_analyticsreport["English"]["period"] = "Period";
	$fieldToolTipsdhis2_analyticsreport["English"]["period"] = "";
	$placeHoldersdhis2_analyticsreport["English"]["period"] = "";
	$fieldLabelsdhis2_analyticsreport["English"]["value"] = "Value";
	$fieldToolTipsdhis2_analyticsreport["English"]["value"] = "";
	$placeHoldersdhis2_analyticsreport["English"]["value"] = "";
	if (count($fieldToolTipsdhis2_analyticsreport["English"]))
		$tdatadhis2_analyticsreport[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_analyticsreport["Amharic"] = array();
	$fieldToolTipsdhis2_analyticsreport["Amharic"] = array();
	$placeHoldersdhis2_analyticsreport["Amharic"] = array();
	$pageTitlesdhis2_analyticsreport["Amharic"] = array();
	$fieldLabelsdhis2_analyticsreport["Amharic"]["organisationUnit"] = "Organisation Unit";
	$fieldToolTipsdhis2_analyticsreport["Amharic"]["organisationUnit"] = "";
	$placeHoldersdhis2_analyticsreport["Amharic"]["organisationUnit"] = "";
	$fieldLabelsdhis2_analyticsreport["Amharic"]["indicator"] = "Indicator";
	$fieldToolTipsdhis2_analyticsreport["Amharic"]["indicator"] = "";
	$placeHoldersdhis2_analyticsreport["Amharic"]["indicator"] = "";
	$fieldLabelsdhis2_analyticsreport["Amharic"]["period"] = "Period";
	$fieldToolTipsdhis2_analyticsreport["Amharic"]["period"] = "";
	$placeHoldersdhis2_analyticsreport["Amharic"]["period"] = "";
	$fieldLabelsdhis2_analyticsreport["Amharic"]["value"] = "Value";
	$fieldToolTipsdhis2_analyticsreport["Amharic"]["value"] = "";
	$placeHoldersdhis2_analyticsreport["Amharic"]["value"] = "";
	if (count($fieldToolTipsdhis2_analyticsreport["Amharic"]))
		$tdatadhis2_analyticsreport[".isUseToolTips"] = true;
}


	$tdatadhis2_analyticsreport[".NCSearch"] = true;



$tdatadhis2_analyticsreport[".shortTableName"] = "dhis2_analyticsreport";
$tdatadhis2_analyticsreport[".nSecOptions"] = 0;

$tdatadhis2_analyticsreport[".mainTableOwnerID"] = "";
$tdatadhis2_analyticsreport[".entityType"] = 7;
$tdatadhis2_analyticsreport[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_analyticsreport[".strOriginalTableName"] = "DHIS2_AnalyticsReport";

	



$tdatadhis2_analyticsreport[".showAddInPopup"] = false;

$tdatadhis2_analyticsreport[".showEditInPopup"] = false;

$tdatadhis2_analyticsreport[".showViewInPopup"] = false;

$tdatadhis2_analyticsreport[".listAjax"] = false;
//	temporary
//$tdatadhis2_analyticsreport[".listAjax"] = false;

	$tdatadhis2_analyticsreport[".audit"] = false;

	$tdatadhis2_analyticsreport[".locking"] = false;


$pages = $tdatadhis2_analyticsreport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_analyticsreport[".edit"] = true;
	$tdatadhis2_analyticsreport[".afterEditAction"] = 1;
	$tdatadhis2_analyticsreport[".closePopupAfterEdit"] = 1;
	$tdatadhis2_analyticsreport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_analyticsreport[".add"] = true;
$tdatadhis2_analyticsreport[".afterAddAction"] = 1;
$tdatadhis2_analyticsreport[".closePopupAfterAdd"] = 1;
$tdatadhis2_analyticsreport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_analyticsreport[".list"] = true;
}



$tdatadhis2_analyticsreport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_analyticsreport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_analyticsreport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_analyticsreport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_analyticsreport[".printFriendly"] = true;
}



$tdatadhis2_analyticsreport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_analyticsreport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_analyticsreport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_analyticsreport[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_analyticsreport[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_analyticsreport[".buttonsAdded"] = false;

$tdatadhis2_analyticsreport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_analyticsreport[".isUseTimeForSearch"] = false;


$tdatadhis2_analyticsreport[".badgeColor"] = "00C2C5";


$tdatadhis2_analyticsreport[".allSearchFields"] = array();
$tdatadhis2_analyticsreport[".filterFields"] = array();
$tdatadhis2_analyticsreport[".requiredSearchFields"] = array();

$tdatadhis2_analyticsreport[".googleLikeFields"] = array();
$tdatadhis2_analyticsreport[".googleLikeFields"][] = "organisationUnit";
$tdatadhis2_analyticsreport[".googleLikeFields"][] = "indicator";
$tdatadhis2_analyticsreport[".googleLikeFields"][] = "period";
$tdatadhis2_analyticsreport[".googleLikeFields"][] = "value";




$tdatadhis2_analyticsreport[".printerPageOrientation"] = 0;
$tdatadhis2_analyticsreport[".nPrinterPageScale"] = 100;

$tdatadhis2_analyticsreport[".nPrinterSplitRecords"] = 40;

$tdatadhis2_analyticsreport[".geocodingEnabled"] = false;




$tdatadhis2_analyticsreport[".isDisplayLoading"] = true;






$tdatadhis2_analyticsreport[".pageSize"] = 20;

$tdatadhis2_analyticsreport[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_analyticsreport[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_analyticsreport[".orderindexes"] = array();


$tdatadhis2_analyticsreport[".sqlHead"] = "";
$tdatadhis2_analyticsreport[".sqlFrom"] = "";
$tdatadhis2_analyticsreport[".sqlWhereExpr"] = "";
$tdatadhis2_analyticsreport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_analyticsreport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_analyticsreport[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_analyticsreport[".highlightSearchResults"] = true;

$tableKeysdhis2_analyticsreport = array();
$tdatadhis2_analyticsreport[".Keys"] = $tableKeysdhis2_analyticsreport;


$tdatadhis2_analyticsreport[".hideMobileList"] = array();




//	organisationUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "organisationUnit";
	$fdata["GoodName"] = "organisationUnit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AnalyticsReport","organisationUnit");
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analyticsreport["organisationUnit"] = $fdata;
		$tdatadhis2_analyticsreport[".searchableFields"][] = "organisationUnit";
//	indicator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator";
	$fdata["GoodName"] = "indicator";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AnalyticsReport","indicator");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/indicator";

	
		$fdata["FullName"] = "indicator";

	
	
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
	$edata["LookupTable"] = "DHIS2_Indicator";
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


	$tdatadhis2_analyticsreport["indicator"] = $fdata;
		$tdatadhis2_analyticsreport[".searchableFields"][] = "indicator";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AnalyticsReport","period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/period";

	
		$fdata["FullName"] = "period";

	
	
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


	$tdatadhis2_analyticsreport["period"] = $fdata;
		$tdatadhis2_analyticsreport[".searchableFields"][] = "period";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AnalyticsReport","value");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/value";

	
		$fdata["FullName"] = "value";

	
	
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
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analyticsreport["value"] = $fdata;
		$tdatadhis2_analyticsreport[".searchableFields"][] = "value";


$tables_data["DHIS2_AnalyticsReport"]=&$tdatadhis2_analyticsreport;
$field_labels["DHIS2_AnalyticsReport"] = &$fieldLabelsdhis2_analyticsreport;
$fieldToolTips["DHIS2_AnalyticsReport"] = &$fieldToolTipsdhis2_analyticsreport;
$placeHolders["DHIS2_AnalyticsReport"] = &$placeHoldersdhis2_analyticsreport;
$page_titles["DHIS2_AnalyticsReport"] = &$pageTitlesdhis2_analyticsreport;


changeTextControlsToDate( "DHIS2_AnalyticsReport" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_AnalyticsReport"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_AnalyticsReport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_analyticsreport_ops.php" ) );



	
																												;

				

$tdatadhis2_analyticsreport[".sqlquery"] = $queryData_dhis2_analyticsreport;



$tdatadhis2_analyticsreport[".hasEvents"] = false;

?>