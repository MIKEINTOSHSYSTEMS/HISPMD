<?php
$tdatadhis2periodsview = array();
$tdatadhis2periodsview[".searchableFields"] = array();
$tdatadhis2periodsview[".ShortName"] = "dhis2periodsview";
$tdatadhis2periodsview[".OwnerID"] = "";
$tdatadhis2periodsview[".OriginalTable"] = "DHIS2PeriodsView";


$tdatadhis2periodsview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2periodsview[".originalPagesByType"] = $tdatadhis2periodsview[".pagesByType"];
$tdatadhis2periodsview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2periodsview[".originalPages"] = $tdatadhis2periodsview[".pages"];
$tdatadhis2periodsview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2periodsview[".originalDefaultPages"] = $tdatadhis2periodsview[".defaultPages"];

//	field labels
$fieldLabelsdhis2periodsview = array();
$fieldToolTipsdhis2periodsview = array();
$pageTitlesdhis2periodsview = array();
$placeHoldersdhis2periodsview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2periodsview["English"] = array();
	$fieldToolTipsdhis2periodsview["English"] = array();
	$placeHoldersdhis2periodsview["English"] = array();
	$pageTitlesdhis2periodsview["English"] = array();
	$fieldLabelsdhis2periodsview["English"]["THIS_WEEK"] = "THIS WEEK";
	$fieldToolTipsdhis2periodsview["English"]["THIS_WEEK"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_WEEK"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_WEEK"] = "LAST WEEK";
	$fieldToolTipsdhis2periodsview["English"]["LAST_WEEK"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_WEEK"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_4_WEEKS"] = "LAST 4 WEEKS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_4_WEEKS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_4_WEEKS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_12_WEEKS"] = "LAST 12 WEEKS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_12_WEEKS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_12_WEEKS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_52_WEEKS"] = "LAST 52 WEEKS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_52_WEEKS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_52_WEEKS"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_MONTH"] = "THIS MONTH";
	$fieldToolTipsdhis2periodsview["English"]["THIS_MONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_MONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_MONTH"] = "LAST MONTH";
	$fieldToolTipsdhis2periodsview["English"]["LAST_MONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_MONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_BIMONTH"] = "THIS BIMONTH";
	$fieldToolTipsdhis2periodsview["English"]["THIS_BIMONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_BIMONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_BIMONTH"] = "LAST BIMONTH";
	$fieldToolTipsdhis2periodsview["English"]["LAST_BIMONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_BIMONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_QUARTER"] = "THIS QUARTER";
	$fieldToolTipsdhis2periodsview["English"]["THIS_QUARTER"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_QUARTER"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_QUARTER"] = "LAST QUARTER";
	$fieldToolTipsdhis2periodsview["English"]["LAST_QUARTER"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_QUARTER"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_SIX_MONTH"] = "THIS SIX MONTH";
	$fieldToolTipsdhis2periodsview["English"]["THIS_SIX_MONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_SIX_MONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_SIX_MONTH"] = "LAST SIX MONTH";
	$fieldToolTipsdhis2periodsview["English"]["LAST_SIX_MONTH"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_SIX_MONTH"] = "";
	$fieldLabelsdhis2periodsview["English"]["MONTHS_THIS_YEAR"] = "MONTHS THIS YEAR";
	$fieldToolTipsdhis2periodsview["English"]["MONTHS_THIS_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["MONTHS_THIS_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["QUARTERS_THIS_YEAR"] = "QUARTERS THIS YEAR";
	$fieldToolTipsdhis2periodsview["English"]["QUARTERS_THIS_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["QUARTERS_THIS_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_YEAR"] = "THIS YEAR";
	$fieldToolTipsdhis2periodsview["English"]["THIS_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["MONTHS_LAST_YEAR"] = "MONTHS LAST YEAR";
	$fieldToolTipsdhis2periodsview["English"]["MONTHS_LAST_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["MONTHS_LAST_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["QUARTERS_LAST_YEAR"] = "QUARTERS LAST YEAR";
	$fieldToolTipsdhis2periodsview["English"]["QUARTERS_LAST_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["QUARTERS_LAST_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_YEAR"] = "LAST YEAR";
	$fieldToolTipsdhis2periodsview["English"]["LAST_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_5_YEARS"] = "LAST 5 YEARS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_5_YEARS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_5_YEARS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_12_MONTHS"] = "LAST 12 MONTHS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_12_MONTHS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_12_MONTHS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_3_MONTHS"] = "LAST 3 MONTHS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_3_MONTHS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_3_MONTHS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_6_BIMONTHS"] = "LAST 6 BIMONTHS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_6_BIMONTHS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_6_BIMONTHS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_4_QUARTERS"] = "LAST 4 QUARTERS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_4_QUARTERS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_4_QUARTERS"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_2_SIXMONTHS"] = "LAST 2 SIXMONTHS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_2_SIXMONTHS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_2_SIXMONTHS"] = "";
	$fieldLabelsdhis2periodsview["English"]["THIS_FINANCIAL_YEAR"] = "THIS FINANCIAL YEAR";
	$fieldToolTipsdhis2periodsview["English"]["THIS_FINANCIAL_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["THIS_FINANCIAL_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_FINANCIAL_YEAR"] = "LAST FINANCIAL YEAR";
	$fieldToolTipsdhis2periodsview["English"]["LAST_FINANCIAL_YEAR"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_FINANCIAL_YEAR"] = "";
	$fieldLabelsdhis2periodsview["English"]["LAST_5_FINANCIAL_YEARS"] = "LAST 5 FINANCIAL YEARS";
	$fieldToolTipsdhis2periodsview["English"]["LAST_5_FINANCIAL_YEARS"] = "";
	$placeHoldersdhis2periodsview["English"]["LAST_5_FINANCIAL_YEARS"] = "";
	if (count($fieldToolTipsdhis2periodsview["English"]))
		$tdatadhis2periodsview[".isUseToolTips"] = true;
}


	$tdatadhis2periodsview[".NCSearch"] = true;



$tdatadhis2periodsview[".shortTableName"] = "dhis2periodsview";
$tdatadhis2periodsview[".nSecOptions"] = 0;

$tdatadhis2periodsview[".mainTableOwnerID"] = "";
$tdatadhis2periodsview[".entityType"] = 7;
$tdatadhis2periodsview[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2periodsview[".strOriginalTableName"] = "DHIS2PeriodsView";

	



$tdatadhis2periodsview[".showAddInPopup"] = false;

$tdatadhis2periodsview[".showEditInPopup"] = false;

$tdatadhis2periodsview[".showViewInPopup"] = false;

$tdatadhis2periodsview[".listAjax"] = false;
//	temporary
//$tdatadhis2periodsview[".listAjax"] = false;

	$tdatadhis2periodsview[".audit"] = false;

	$tdatadhis2periodsview[".locking"] = false;


$pages = $tdatadhis2periodsview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2periodsview[".edit"] = true;
	$tdatadhis2periodsview[".afterEditAction"] = 1;
	$tdatadhis2periodsview[".closePopupAfterEdit"] = 1;
	$tdatadhis2periodsview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2periodsview[".add"] = true;
$tdatadhis2periodsview[".afterAddAction"] = 1;
$tdatadhis2periodsview[".closePopupAfterAdd"] = 1;
$tdatadhis2periodsview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2periodsview[".list"] = true;
}



$tdatadhis2periodsview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2periodsview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2periodsview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2periodsview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2periodsview[".printFriendly"] = true;
}



$tdatadhis2periodsview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2periodsview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2periodsview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2periodsview[".isUseAjaxSuggest"] = false;





$tdatadhis2periodsview[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2periodsview[".buttonsAdded"] = false;

$tdatadhis2periodsview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2periodsview[".isUseTimeForSearch"] = false;


$tdatadhis2periodsview[".badgeColor"] = "00C2C5";


$tdatadhis2periodsview[".allSearchFields"] = array();
$tdatadhis2periodsview[".filterFields"] = array();
$tdatadhis2periodsview[".requiredSearchFields"] = array();

$tdatadhis2periodsview[".googleLikeFields"] = array();
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_WEEK";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_WEEK";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_4_WEEKS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_12_WEEKS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_52_WEEKS";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_MONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_MONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_BIMONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_BIMONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_QUARTER";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_QUARTER";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_SIX_MONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_SIX_MONTH";
$tdatadhis2periodsview[".googleLikeFields"][] = "MONTHS_THIS_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "QUARTERS_THIS_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "MONTHS_LAST_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "QUARTERS_LAST_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_5_YEARS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_12_MONTHS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_3_MONTHS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_6_BIMONTHS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_4_QUARTERS";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_2_SIXMONTHS";
$tdatadhis2periodsview[".googleLikeFields"][] = "THIS_FINANCIAL_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_FINANCIAL_YEAR";
$tdatadhis2periodsview[".googleLikeFields"][] = "LAST_5_FINANCIAL_YEARS";




$tdatadhis2periodsview[".printerPageOrientation"] = 0;
$tdatadhis2periodsview[".nPrinterPageScale"] = 100;

$tdatadhis2periodsview[".nPrinterSplitRecords"] = 40;

$tdatadhis2periodsview[".geocodingEnabled"] = false;










$tdatadhis2periodsview[".pageSize"] = 20;

$tdatadhis2periodsview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2periodsview[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2periodsview[".orderindexes"] = array();


$tdatadhis2periodsview[".sqlHead"] = "";
$tdatadhis2periodsview[".sqlFrom"] = "";
$tdatadhis2periodsview[".sqlWhereExpr"] = "";
$tdatadhis2periodsview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2periodsview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2periodsview[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2periodsview[".highlightSearchResults"] = true;

$tableKeysdhis2periodsview = array();
$tdatadhis2periodsview[".Keys"] = $tableKeysdhis2periodsview;


$tdatadhis2periodsview[".hideMobileList"] = array();




//	THIS_WEEK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "THIS_WEEK";
	$fdata["GoodName"] = "THIS_WEEK";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_WEEK");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_WEEK";

	
		$fdata["FullName"] = "THIS_WEEK";

	
	
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


	$tdatadhis2periodsview["THIS_WEEK"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_WEEK";
//	LAST_WEEK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LAST_WEEK";
	$fdata["GoodName"] = "LAST_WEEK";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_WEEK");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_WEEK";

	
		$fdata["FullName"] = "LAST_WEEK";

	
	
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


	$tdatadhis2periodsview["LAST_WEEK"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_WEEK";
//	LAST_4_WEEKS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LAST_4_WEEKS";
	$fdata["GoodName"] = "LAST_4_WEEKS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_4_WEEKS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_4_WEEKS";

	
		$fdata["FullName"] = "LAST_4_WEEKS";

	
	
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


	$tdatadhis2periodsview["LAST_4_WEEKS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_4_WEEKS";
//	LAST_12_WEEKS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LAST_12_WEEKS";
	$fdata["GoodName"] = "LAST_12_WEEKS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_12_WEEKS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_12_WEEKS";

	
		$fdata["FullName"] = "LAST_12_WEEKS";

	
	
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


	$tdatadhis2periodsview["LAST_12_WEEKS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_12_WEEKS";
//	LAST_52_WEEKS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LAST_52_WEEKS";
	$fdata["GoodName"] = "LAST_52_WEEKS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_52_WEEKS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_52_WEEKS";

	
		$fdata["FullName"] = "LAST_52_WEEKS";

	
	
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


	$tdatadhis2periodsview["LAST_52_WEEKS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_52_WEEKS";
//	THIS_MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "THIS_MONTH";
	$fdata["GoodName"] = "THIS_MONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_MONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_MONTH";

	
		$fdata["FullName"] = "THIS_MONTH";

	
	
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


	$tdatadhis2periodsview["THIS_MONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_MONTH";
//	LAST_MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LAST_MONTH";
	$fdata["GoodName"] = "LAST_MONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_MONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_MONTH";

	
		$fdata["FullName"] = "LAST_MONTH";

	
	
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


	$tdatadhis2periodsview["LAST_MONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_MONTH";
//	THIS_BIMONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "THIS_BIMONTH";
	$fdata["GoodName"] = "THIS_BIMONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_BIMONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_BIMONTH";

	
		$fdata["FullName"] = "THIS_BIMONTH";

	
	
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


	$tdatadhis2periodsview["THIS_BIMONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_BIMONTH";
//	LAST_BIMONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LAST_BIMONTH";
	$fdata["GoodName"] = "LAST_BIMONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_BIMONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_BIMONTH";

	
		$fdata["FullName"] = "LAST_BIMONTH";

	
	
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


	$tdatadhis2periodsview["LAST_BIMONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_BIMONTH";
//	THIS_QUARTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "THIS_QUARTER";
	$fdata["GoodName"] = "THIS_QUARTER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_QUARTER");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_QUARTER";

	
		$fdata["FullName"] = "THIS_QUARTER";

	
	
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


	$tdatadhis2periodsview["THIS_QUARTER"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_QUARTER";
//	LAST_QUARTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LAST_QUARTER";
	$fdata["GoodName"] = "LAST_QUARTER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_QUARTER");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_QUARTER";

	
		$fdata["FullName"] = "LAST_QUARTER";

	
	
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


	$tdatadhis2periodsview["LAST_QUARTER"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_QUARTER";
//	THIS_SIX_MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "THIS_SIX_MONTH";
	$fdata["GoodName"] = "THIS_SIX_MONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_SIX_MONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_SIX_MONTH";

	
		$fdata["FullName"] = "THIS_SIX_MONTH";

	
	
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


	$tdatadhis2periodsview["THIS_SIX_MONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_SIX_MONTH";
//	LAST_SIX_MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LAST_SIX_MONTH";
	$fdata["GoodName"] = "LAST_SIX_MONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_SIX_MONTH");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_SIX_MONTH";

	
		$fdata["FullName"] = "LAST_SIX_MONTH";

	
	
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


	$tdatadhis2periodsview["LAST_SIX_MONTH"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_SIX_MONTH";
//	MONTHS_THIS_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "MONTHS_THIS_YEAR";
	$fdata["GoodName"] = "MONTHS_THIS_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","MONTHS_THIS_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "MONTHS_THIS_YEAR";

	
		$fdata["FullName"] = "MONTHS_THIS_YEAR";

	
	
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


	$tdatadhis2periodsview["MONTHS_THIS_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "MONTHS_THIS_YEAR";
//	QUARTERS_THIS_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "QUARTERS_THIS_YEAR";
	$fdata["GoodName"] = "QUARTERS_THIS_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","QUARTERS_THIS_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "QUARTERS_THIS_YEAR";

	
		$fdata["FullName"] = "QUARTERS_THIS_YEAR";

	
	
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


	$tdatadhis2periodsview["QUARTERS_THIS_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "QUARTERS_THIS_YEAR";
//	THIS_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "THIS_YEAR";
	$fdata["GoodName"] = "THIS_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_YEAR";

	
		$fdata["FullName"] = "THIS_YEAR";

	
	
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


	$tdatadhis2periodsview["THIS_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_YEAR";
//	MONTHS_LAST_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "MONTHS_LAST_YEAR";
	$fdata["GoodName"] = "MONTHS_LAST_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","MONTHS_LAST_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "MONTHS_LAST_YEAR";

	
		$fdata["FullName"] = "MONTHS_LAST_YEAR";

	
	
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


	$tdatadhis2periodsview["MONTHS_LAST_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "MONTHS_LAST_YEAR";
//	QUARTERS_LAST_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "QUARTERS_LAST_YEAR";
	$fdata["GoodName"] = "QUARTERS_LAST_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","QUARTERS_LAST_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "QUARTERS_LAST_YEAR";

	
		$fdata["FullName"] = "QUARTERS_LAST_YEAR";

	
	
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


	$tdatadhis2periodsview["QUARTERS_LAST_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "QUARTERS_LAST_YEAR";
//	LAST_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LAST_YEAR";
	$fdata["GoodName"] = "LAST_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_YEAR";

	
		$fdata["FullName"] = "LAST_YEAR";

	
	
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


	$tdatadhis2periodsview["LAST_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_YEAR";
//	LAST_5_YEARS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LAST_5_YEARS";
	$fdata["GoodName"] = "LAST_5_YEARS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_5_YEARS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_5_YEARS";

	
		$fdata["FullName"] = "LAST_5_YEARS";

	
	
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


	$tdatadhis2periodsview["LAST_5_YEARS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_5_YEARS";
//	LAST_12_MONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "LAST_12_MONTHS";
	$fdata["GoodName"] = "LAST_12_MONTHS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_12_MONTHS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_12_MONTHS";

	
		$fdata["FullName"] = "LAST_12_MONTHS";

	
	
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


	$tdatadhis2periodsview["LAST_12_MONTHS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_12_MONTHS";
//	LAST_3_MONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "LAST_3_MONTHS";
	$fdata["GoodName"] = "LAST_3_MONTHS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_3_MONTHS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_3_MONTHS";

	
		$fdata["FullName"] = "LAST_3_MONTHS";

	
	
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


	$tdatadhis2periodsview["LAST_3_MONTHS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_3_MONTHS";
//	LAST_6_BIMONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "LAST_6_BIMONTHS";
	$fdata["GoodName"] = "LAST_6_BIMONTHS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_6_BIMONTHS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_6_BIMONTHS";

	
		$fdata["FullName"] = "LAST_6_BIMONTHS";

	
	
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


	$tdatadhis2periodsview["LAST_6_BIMONTHS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_6_BIMONTHS";
//	LAST_4_QUARTERS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "LAST_4_QUARTERS";
	$fdata["GoodName"] = "LAST_4_QUARTERS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_4_QUARTERS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_4_QUARTERS";

	
		$fdata["FullName"] = "LAST_4_QUARTERS";

	
	
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


	$tdatadhis2periodsview["LAST_4_QUARTERS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_4_QUARTERS";
//	LAST_2_SIXMONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "LAST_2_SIXMONTHS";
	$fdata["GoodName"] = "LAST_2_SIXMONTHS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_2_SIXMONTHS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_2_SIXMONTHS";

	
		$fdata["FullName"] = "LAST_2_SIXMONTHS";

	
	
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


	$tdatadhis2periodsview["LAST_2_SIXMONTHS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_2_SIXMONTHS";
//	THIS_FINANCIAL_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "THIS_FINANCIAL_YEAR";
	$fdata["GoodName"] = "THIS_FINANCIAL_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","THIS_FINANCIAL_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "THIS_FINANCIAL_YEAR";

	
		$fdata["FullName"] = "THIS_FINANCIAL_YEAR";

	
	
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


	$tdatadhis2periodsview["THIS_FINANCIAL_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "THIS_FINANCIAL_YEAR";
//	LAST_FINANCIAL_YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "LAST_FINANCIAL_YEAR";
	$fdata["GoodName"] = "LAST_FINANCIAL_YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_FINANCIAL_YEAR");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_FINANCIAL_YEAR";

	
		$fdata["FullName"] = "LAST_FINANCIAL_YEAR";

	
	
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


	$tdatadhis2periodsview["LAST_FINANCIAL_YEAR"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_FINANCIAL_YEAR";
//	LAST_5_FINANCIAL_YEARS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "LAST_5_FINANCIAL_YEARS";
	$fdata["GoodName"] = "LAST_5_FINANCIAL_YEARS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2PeriodsView","LAST_5_FINANCIAL_YEARS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "LAST_5_FINANCIAL_YEARS";

	
		$fdata["FullName"] = "LAST_5_FINANCIAL_YEARS";

	
	
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


	$tdatadhis2periodsview["LAST_5_FINANCIAL_YEARS"] = $fdata;
		$tdatadhis2periodsview[".searchableFields"][] = "LAST_5_FINANCIAL_YEARS";


$tables_data["DHIS2PeriodsView"]=&$tdatadhis2periodsview;
$field_labels["DHIS2PeriodsView"] = &$fieldLabelsdhis2periodsview;
$fieldToolTips["DHIS2PeriodsView"] = &$fieldToolTipsdhis2periodsview;
$placeHolders["DHIS2PeriodsView"] = &$placeHoldersdhis2periodsview;
$page_titles["DHIS2PeriodsView"] = &$pageTitlesdhis2periodsview;


changeTextControlsToDate( "DHIS2PeriodsView" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2PeriodsView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2PeriodsView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2periodsview_ops.php" ) );



	
						;

																												

$tdatadhis2periodsview[".sqlquery"] = $queryData_dhis2periodsview;



$tdatadhis2periodsview[".hasEvents"] = false;

?>