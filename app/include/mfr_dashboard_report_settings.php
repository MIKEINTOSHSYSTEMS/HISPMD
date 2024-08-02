<?php
$tdatamfr_dashboard_report = array();
$tdatamfr_dashboard_report[".searchableFields"] = array();
$tdatamfr_dashboard_report[".ShortName"] = "mfr_dashboard_report";
$tdatamfr_dashboard_report[".OwnerID"] = "";
$tdatamfr_dashboard_report[".OriginalTable"] = "MFR_Dashboard_Report";


$tdatamfr_dashboard_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_dashboard_report[".originalPagesByType"] = $tdatamfr_dashboard_report[".pagesByType"];
$tdatamfr_dashboard_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_dashboard_report[".originalPages"] = $tdatamfr_dashboard_report[".pages"];
$tdatamfr_dashboard_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_dashboard_report[".originalDefaultPages"] = $tdatamfr_dashboard_report[".defaultPages"];

//	field labels
$fieldLabelsmfr_dashboard_report = array();
$fieldToolTipsmfr_dashboard_report = array();
$pageTitlesmfr_dashboard_report = array();
$placeHoldersmfr_dashboard_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_dashboard_report["English"] = array();
	$fieldToolTipsmfr_dashboard_report["English"] = array();
	$placeHoldersmfr_dashboard_report["English"] = array();
	$pageTitlesmfr_dashboard_report["English"] = array();
	$fieldLabelsmfr_dashboard_report["English"]["type"] = "Type";
	$fieldToolTipsmfr_dashboard_report["English"]["type"] = "";
	$placeHoldersmfr_dashboard_report["English"]["type"] = "";
	$fieldLabelsmfr_dashboard_report["English"]["name"] = "Name";
	$fieldToolTipsmfr_dashboard_report["English"]["name"] = "";
	$placeHoldersmfr_dashboard_report["English"]["name"] = "";
	$fieldLabelsmfr_dashboard_report["English"]["count"] = "Count";
	$fieldToolTipsmfr_dashboard_report["English"]["count"] = "";
	$placeHoldersmfr_dashboard_report["English"]["count"] = "";
	if (count($fieldToolTipsmfr_dashboard_report["English"]))
		$tdatamfr_dashboard_report[".isUseToolTips"] = true;
}


	$tdatamfr_dashboard_report[".NCSearch"] = true;



$tdatamfr_dashboard_report[".shortTableName"] = "mfr_dashboard_report";
$tdatamfr_dashboard_report[".nSecOptions"] = 0;

$tdatamfr_dashboard_report[".mainTableOwnerID"] = "";
$tdatamfr_dashboard_report[".entityType"] = 7;
$tdatamfr_dashboard_report[".connId"] = "";


$tdatamfr_dashboard_report[".strOriginalTableName"] = "MFR_Dashboard_Report";





$tdatamfr_dashboard_report[".showAddInPopup"] = false;

$tdatamfr_dashboard_report[".showEditInPopup"] = false;

$tdatamfr_dashboard_report[".showViewInPopup"] = false;

$tdatamfr_dashboard_report[".listAjax"] = false;
//	temporary
//$tdatamfr_dashboard_report[".listAjax"] = false;

	$tdatamfr_dashboard_report[".audit"] = false;

	$tdatamfr_dashboard_report[".locking"] = false;


$pages = $tdatamfr_dashboard_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_dashboard_report[".edit"] = true;
	$tdatamfr_dashboard_report[".afterEditAction"] = 1;
	$tdatamfr_dashboard_report[".closePopupAfterEdit"] = 1;
	$tdatamfr_dashboard_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_dashboard_report[".add"] = true;
$tdatamfr_dashboard_report[".afterAddAction"] = 1;
$tdatamfr_dashboard_report[".closePopupAfterAdd"] = 1;
$tdatamfr_dashboard_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_dashboard_report[".list"] = true;
}



$tdatamfr_dashboard_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_dashboard_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_dashboard_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_dashboard_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_dashboard_report[".printFriendly"] = true;
}



$tdatamfr_dashboard_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_dashboard_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_dashboard_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_dashboard_report[".isUseAjaxSuggest"] = true;





$tdatamfr_dashboard_report[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_dashboard_report[".buttonsAdded"] = false;

$tdatamfr_dashboard_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_dashboard_report[".isUseTimeForSearch"] = false;


$tdatamfr_dashboard_report[".badgeColor"] = "6B8E23";


$tdatamfr_dashboard_report[".allSearchFields"] = array();
$tdatamfr_dashboard_report[".filterFields"] = array();
$tdatamfr_dashboard_report[".requiredSearchFields"] = array();

$tdatamfr_dashboard_report[".googleLikeFields"] = array();
$tdatamfr_dashboard_report[".googleLikeFields"][] = "type";
$tdatamfr_dashboard_report[".googleLikeFields"][] = "name";
$tdatamfr_dashboard_report[".googleLikeFields"][] = "count";




$tdatamfr_dashboard_report[".printerPageOrientation"] = 0;
$tdatamfr_dashboard_report[".nPrinterPageScale"] = 100;

$tdatamfr_dashboard_report[".nPrinterSplitRecords"] = 40;

$tdatamfr_dashboard_report[".geocodingEnabled"] = false;










$tdatamfr_dashboard_report[".pageSize"] = 20;

$tdatamfr_dashboard_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_dashboard_report[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_dashboard_report[".orderindexes"] = array();


$tdatamfr_dashboard_report[".sqlHead"] = "";
$tdatamfr_dashboard_report[".sqlFrom"] = "";
$tdatamfr_dashboard_report[".sqlWhereExpr"] = "";
$tdatamfr_dashboard_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_dashboard_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_dashboard_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_dashboard_report[".highlightSearchResults"] = true;

$tableKeysmfr_dashboard_report = array();
$tdatamfr_dashboard_report[".Keys"] = $tableKeysmfr_dashboard_report;


$tdatamfr_dashboard_report[".hideMobileList"] = array();




//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Report","type");
	$fdata["FieldType"] = 202;


	
	
	

		$fdata["strField"] = "model/*/type";

	
		$fdata["FullName"] = "type";

	
	
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


	$tdatamfr_dashboard_report["type"] = $fdata;
		$tdatamfr_dashboard_report[".searchableFields"][] = "type";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Report","name");
	$fdata["FieldType"] = 202;


	
	
	

		$fdata["strField"] = "model/*/name";

	
		$fdata["FullName"] = "name";

	
	
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


	$tdatamfr_dashboard_report["name"] = $fdata;
		$tdatamfr_dashboard_report[".searchableFields"][] = "name";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Report","count");
	$fdata["FieldType"] = 3;


	
	
	

		$fdata["strField"] = "model/*/count";

	
		$fdata["FullName"] = "count";

	
	
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


	$tdatamfr_dashboard_report["count"] = $fdata;
		$tdatamfr_dashboard_report[".searchableFields"][] = "count";


$tables_data["MFR_Dashboard_Report"]=&$tdatamfr_dashboard_report;
$field_labels["MFR_Dashboard_Report"] = &$fieldLabelsmfr_dashboard_report;
$fieldToolTips["MFR_Dashboard_Report"] = &$fieldToolTipsmfr_dashboard_report;
$placeHolders["MFR_Dashboard_Report"] = &$placeHoldersmfr_dashboard_report;
$page_titles["MFR_Dashboard_Report"] = &$pageTitlesmfr_dashboard_report;


changeTextControlsToDate( "MFR_Dashboard_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Dashboard_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Dashboard_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_dashboard_report_ops.php" ) );



	
								;

			

$tdatamfr_dashboard_report[".sqlquery"] = $queryData_mfr_dashboard_report;



include_once(getabspath("include/mfr_dashboard_report_events.php"));
$tdatamfr_dashboard_report[".hasEvents"] = true;

?>