<?php
$tdatadhis2_reports = array();
$tdatadhis2_reports[".searchableFields"] = array();
$tdatadhis2_reports[".ShortName"] = "dhis2_reports";
$tdatadhis2_reports[".OwnerID"] = "";
$tdatadhis2_reports[".OriginalTable"] = "DHIS2_Reports";


$tdatadhis2_reports[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_reports[".originalPagesByType"] = $tdatadhis2_reports[".pagesByType"];
$tdatadhis2_reports[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reports[".originalPages"] = $tdatadhis2_reports[".pages"];
$tdatadhis2_reports[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_reports[".originalDefaultPages"] = $tdatadhis2_reports[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reports = array();
$fieldToolTipsdhis2_reports = array();
$pageTitlesdhis2_reports = array();
$placeHoldersdhis2_reports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reports["English"] = array();
	$fieldToolTipsdhis2_reports["English"] = array();
	$placeHoldersdhis2_reports["English"] = array();
	$pageTitlesdhis2_reports["English"] = array();
	$fieldLabelsdhis2_reports["English"]["Organisation_Unit_ID"] = "Organisation Unit ID";
	$fieldToolTipsdhis2_reports["English"]["Organisation_Unit_ID"] = "";
	$placeHoldersdhis2_reports["English"]["Organisation_Unit_ID"] = "";
	$fieldLabelsdhis2_reports["English"]["Organisation_Unit"] = "Organisation Unit Name";
	$fieldToolTipsdhis2_reports["English"]["Organisation_Unit"] = "";
	$placeHoldersdhis2_reports["English"]["Organisation_Unit"] = "";
	$fieldLabelsdhis2_reports["English"]["Organisation_Unit_Code"] = "Organisation Unit Code";
	$fieldToolTipsdhis2_reports["English"]["Organisation_Unit_Code"] = "";
	$placeHoldersdhis2_reports["English"]["Organisation_Unit_Code"] = "";
	$fieldLabelsdhis2_reports["English"]["Organisation_Unit_Description"] = "Organisation Unit Description";
	$fieldToolTipsdhis2_reports["English"]["Organisation_Unit_Description"] = "";
	$placeHoldersdhis2_reports["English"]["Organisation_Unit_Description"] = "";
	$fieldLabelsdhis2_reports["English"]["Actual_Reports"] = "Actual Reports";
	$fieldToolTipsdhis2_reports["English"]["Actual_Reports"] = "";
	$placeHoldersdhis2_reports["English"]["Actual_Reports"] = "";
	$fieldLabelsdhis2_reports["English"]["Expected_Reports"] = "Expected Reports";
	$fieldToolTipsdhis2_reports["English"]["Expected_Reports"] = "";
	$placeHoldersdhis2_reports["English"]["Expected_Reports"] = "";
	$fieldLabelsdhis2_reports["English"]["Reporting_Rate"] = "Reporting Rate";
	$fieldToolTipsdhis2_reports["English"]["Reporting_Rate"] = "";
	$placeHoldersdhis2_reports["English"]["Reporting_Rate"] = "";
	$fieldLabelsdhis2_reports["English"]["Actual_Reports_On_Time"] = "Actual Reports On Time";
	$fieldToolTipsdhis2_reports["English"]["Actual_Reports_On_Time"] = "";
	$placeHoldersdhis2_reports["English"]["Actual_Reports_On_Time"] = "";
	$fieldLabelsdhis2_reports["English"]["Reporting_Rate_On_Time"] = "Reporting Rate On Time";
	$fieldToolTipsdhis2_reports["English"]["Reporting_Rate_On_Time"] = "";
	$placeHoldersdhis2_reports["English"]["Reporting_Rate_On_Time"] = "";
	$fieldLabelsdhis2_reports["English"]["Data_Set"] = "Data Set";
	$fieldToolTipsdhis2_reports["English"]["Data_Set"] = "";
	$placeHoldersdhis2_reports["English"]["Data_Set"] = "";
	$fieldLabelsdhis2_reports["English"]["Report_Period"] = "Report Period";
	$fieldToolTipsdhis2_reports["English"]["Report_Period"] = "";
	$placeHoldersdhis2_reports["English"]["Report_Period"] = "";
	$fieldLabelsdhis2_reports["English"]["Title"] = "Time Frame Period";
	$fieldToolTipsdhis2_reports["English"]["Title"] = "";
	$placeHoldersdhis2_reports["English"]["Title"] = "";
	if (count($fieldToolTipsdhis2_reports["English"]))
		$tdatadhis2_reports[".isUseToolTips"] = true;
}


	$tdatadhis2_reports[".NCSearch"] = true;



$tdatadhis2_reports[".shortTableName"] = "dhis2_reports";
$tdatadhis2_reports[".nSecOptions"] = 0;

$tdatadhis2_reports[".mainTableOwnerID"] = "";
$tdatadhis2_reports[".entityType"] = 7;
$tdatadhis2_reports[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reports[".strOriginalTableName"] = "DHIS2_Reports";

	



$tdatadhis2_reports[".showAddInPopup"] = false;

$tdatadhis2_reports[".showEditInPopup"] = false;

$tdatadhis2_reports[".showViewInPopup"] = false;

$tdatadhis2_reports[".listAjax"] = false;
//	temporary
//$tdatadhis2_reports[".listAjax"] = false;

	$tdatadhis2_reports[".audit"] = false;

	$tdatadhis2_reports[".locking"] = false;


$pages = $tdatadhis2_reports[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reports[".edit"] = true;
	$tdatadhis2_reports[".afterEditAction"] = 1;
	$tdatadhis2_reports[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reports[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reports[".add"] = true;
$tdatadhis2_reports[".afterAddAction"] = 1;
$tdatadhis2_reports[".closePopupAfterAdd"] = 1;
$tdatadhis2_reports[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reports[".list"] = true;
}



$tdatadhis2_reports[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reports[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reports[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reports[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reports[".printFriendly"] = true;
}



$tdatadhis2_reports[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reports[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reports[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reports[".isUseAjaxSuggest"] = false;





$tdatadhis2_reports[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reports[".buttonsAdded"] = false;

$tdatadhis2_reports[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reports[".isUseTimeForSearch"] = false;


$tdatadhis2_reports[".badgeColor"] = "D2AF80";


$tdatadhis2_reports[".allSearchFields"] = array();
$tdatadhis2_reports[".filterFields"] = array();
$tdatadhis2_reports[".requiredSearchFields"] = array();

$tdatadhis2_reports[".googleLikeFields"] = array();
$tdatadhis2_reports[".googleLikeFields"][] = "Data Set";
$tdatadhis2_reports[".googleLikeFields"][] = "Report Period";
$tdatadhis2_reports[".googleLikeFields"][] = "Organisation Unit ID";




$tdatadhis2_reports[".printerPageOrientation"] = 0;
$tdatadhis2_reports[".nPrinterPageScale"] = 100;

$tdatadhis2_reports[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reports[".geocodingEnabled"] = false;










$tdatadhis2_reports[".pageSize"] = 20;

$tdatadhis2_reports[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reports[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reports[".orderindexes"] = array();


$tdatadhis2_reports[".sqlHead"] = "";
$tdatadhis2_reports[".sqlFrom"] = "";
$tdatadhis2_reports[".sqlWhereExpr"] = "";
$tdatadhis2_reports[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reports[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reports[".highlightSearchResults"] = true;

$tableKeysdhis2_reports = array();
$tdatadhis2_reports[".Keys"] = $tableKeysdhis2_reports;


$tdatadhis2_reports[".hideMobileList"] = array();




//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Title");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Title";

	
		$fdata["FullName"] = "Title";

	
	
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


	$tdatadhis2_reports["Title"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Title";
//	Data Set
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Data Set";
	$fdata["GoodName"] = "Data_Set";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Data_Set");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Data Set";

	
		$fdata["FullName"] = "Data Set";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Actual Reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reports["Data Set"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Data Set";
//	Report Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Report Period";
	$fdata["GoodName"] = "Report_Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Report_Period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Report Period";

	
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
	$edata["LookupTable"] = "DHIS2_Periods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Period_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Period_ID";

	

	
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


	$tdatadhis2_reports["Report Period"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Report Period";
//	Organisation Unit ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Organisation Unit ID";
	$fdata["GoodName"] = "Organisation_Unit_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Organisation_Unit_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Organisation Unit ID";

	
		$fdata["FullName"] = "Organisation Unit ID";

	
	
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
		$fdata["filterTotalFields"] = "Actual Reports";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reports["Organisation Unit ID"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Organisation Unit ID";
//	Organisation Unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Organisation Unit";
	$fdata["GoodName"] = "Organisation_Unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Organisation_Unit");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Organisation Unit";

	
		$fdata["FullName"] = "Organisation Unit";

	
	
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


	$tdatadhis2_reports["Organisation Unit"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Organisation Unit";
//	Organisation Unit Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Organisation Unit Code";
	$fdata["GoodName"] = "Organisation_Unit_Code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Organisation_Unit_Code");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Organisation Unit Code";

	
		$fdata["FullName"] = "Organisation Unit Code";

	
	
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


	$tdatadhis2_reports["Organisation Unit Code"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Organisation Unit Code";
//	Organisation Unit Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Organisation Unit Description";
	$fdata["GoodName"] = "Organisation_Unit_Description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Organisation_Unit_Description");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Organisation Unit Description";

	
		$fdata["FullName"] = "Organisation Unit Description";

	
	
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


	$tdatadhis2_reports["Organisation Unit Description"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Organisation Unit Description";
//	Actual Reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Actual Reports";
	$fdata["GoodName"] = "Actual_Reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Actual_Reports");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Actual Reports";

	
		$fdata["FullName"] = "Actual Reports";

	
	
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


	$tdatadhis2_reports["Actual Reports"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Actual Reports";
//	Expected Reports
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Expected Reports";
	$fdata["GoodName"] = "Expected_Reports";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Expected_Reports");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Expected Reports";

	
		$fdata["FullName"] = "Expected Reports";

	
	
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


	$tdatadhis2_reports["Expected Reports"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Expected Reports";
//	Reporting Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Reporting Rate";
	$fdata["GoodName"] = "Reporting_Rate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Reporting_Rate");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Reporting Rate";

	
		$fdata["FullName"] = "Reporting Rate";

	
	
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


	$tdatadhis2_reports["Reporting Rate"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Reporting Rate";
//	Actual Reports On Time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Actual Reports On Time";
	$fdata["GoodName"] = "Actual_Reports_On_Time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Actual_Reports_On_Time");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Actual Reports On Time";

	
		$fdata["FullName"] = "Actual Reports On Time";

	
	
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


	$tdatadhis2_reports["Actual Reports On Time"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Actual Reports On Time";
//	Reporting Rate On Time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reporting Rate On Time";
	$fdata["GoodName"] = "Reporting_Rate_On_Time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports","Reporting_Rate_On_Time");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Reporting Rate On Time";

	
		$fdata["FullName"] = "Reporting Rate On Time";

	
	
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


	$tdatadhis2_reports["Reporting Rate On Time"] = $fdata;
		$tdatadhis2_reports[".searchableFields"][] = "Reporting Rate On Time";


$tables_data["DHIS2_Reports"]=&$tdatadhis2_reports;
$field_labels["DHIS2_Reports"] = &$fieldLabelsdhis2_reports;
$fieldToolTips["DHIS2_Reports"] = &$fieldToolTipsdhis2_reports;
$placeHolders["DHIS2_Reports"] = &$placeHoldersdhis2_reports;
$page_titles["DHIS2_Reports"] = &$pageTitlesdhis2_reports;


changeTextControlsToDate( "DHIS2_Reports" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reports"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reports"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reports_ops.php" ) );



	
						;

												

$tdatadhis2_reports[".sqlquery"] = $queryData_dhis2_reports;



include_once(getabspath("include/dhis2_reports_events.php"));
$tdatadhis2_reports[".hasEvents"] = true;

?>