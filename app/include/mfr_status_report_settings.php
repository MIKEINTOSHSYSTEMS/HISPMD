<?php
$tdatamfr_status_report = array();
$tdatamfr_status_report[".searchableFields"] = array();
$tdatamfr_status_report[".ShortName"] = "mfr_status_report";
$tdatamfr_status_report[".OwnerID"] = "";
$tdatamfr_status_report[".OriginalTable"] = "MFR_Status_Report";


$tdatamfr_status_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_status_report[".originalPagesByType"] = $tdatamfr_status_report[".pagesByType"];
$tdatamfr_status_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_status_report[".originalPages"] = $tdatamfr_status_report[".pages"];
$tdatamfr_status_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_status_report[".originalDefaultPages"] = $tdatamfr_status_report[".defaultPages"];

//	field labels
$fieldLabelsmfr_status_report = array();
$fieldToolTipsmfr_status_report = array();
$pageTitlesmfr_status_report = array();
$placeHoldersmfr_status_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_status_report["English"] = array();
	$fieldToolTipsmfr_status_report["English"] = array();
	$placeHoldersmfr_status_report["English"] = array();
	$pageTitlesmfr_status_report["English"] = array();
	$fieldLabelsmfr_status_report["English"]["operationalStatus"] = "Operational Status";
	$fieldToolTipsmfr_status_report["English"]["operationalStatus"] = "";
	$placeHoldersmfr_status_report["English"]["operationalStatus"] = "";
	$fieldLabelsmfr_status_report["English"]["status"] = "Status";
	$fieldToolTipsmfr_status_report["English"]["status"] = "";
	$placeHoldersmfr_status_report["English"]["status"] = "";
	$fieldLabelsmfr_status_report["English"]["count"] = "Count";
	$fieldToolTipsmfr_status_report["English"]["count"] = "";
	$placeHoldersmfr_status_report["English"]["count"] = "";
	if (count($fieldToolTipsmfr_status_report["English"]))
		$tdatamfr_status_report[".isUseToolTips"] = true;
}


	$tdatamfr_status_report[".NCSearch"] = true;



$tdatamfr_status_report[".shortTableName"] = "mfr_status_report";
$tdatamfr_status_report[".nSecOptions"] = 0;

$tdatamfr_status_report[".mainTableOwnerID"] = "";
$tdatamfr_status_report[".entityType"] = 7;
$tdatamfr_status_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_status_report[".strOriginalTableName"] = "MFR_Status_Report";

	



$tdatamfr_status_report[".showAddInPopup"] = false;

$tdatamfr_status_report[".showEditInPopup"] = false;

$tdatamfr_status_report[".showViewInPopup"] = false;

$tdatamfr_status_report[".listAjax"] = false;
//	temporary
//$tdatamfr_status_report[".listAjax"] = false;

	$tdatamfr_status_report[".audit"] = true;

	$tdatamfr_status_report[".locking"] = false;


$pages = $tdatamfr_status_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_status_report[".edit"] = true;
	$tdatamfr_status_report[".afterEditAction"] = 1;
	$tdatamfr_status_report[".closePopupAfterEdit"] = 1;
	$tdatamfr_status_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_status_report[".add"] = true;
$tdatamfr_status_report[".afterAddAction"] = 1;
$tdatamfr_status_report[".closePopupAfterAdd"] = 1;
$tdatamfr_status_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_status_report[".list"] = true;
}



$tdatamfr_status_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_status_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_status_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_status_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_status_report[".printFriendly"] = true;
}



$tdatamfr_status_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_status_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_status_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_status_report[".isUseAjaxSuggest"] = false;



			

$tdatamfr_status_report[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_status_report[".buttonsAdded"] = false;

$tdatamfr_status_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_status_report[".isUseTimeForSearch"] = false;


$tdatamfr_status_report[".badgeColor"] = "EDCA00";


$tdatamfr_status_report[".allSearchFields"] = array();
$tdatamfr_status_report[".filterFields"] = array();
$tdatamfr_status_report[".requiredSearchFields"] = array();

$tdatamfr_status_report[".googleLikeFields"] = array();
$tdatamfr_status_report[".googleLikeFields"][] = "operationalStatus";
$tdatamfr_status_report[".googleLikeFields"][] = "status";
$tdatamfr_status_report[".googleLikeFields"][] = "count";




$tdatamfr_status_report[".printerPageOrientation"] = 0;
$tdatamfr_status_report[".nPrinterPageScale"] = 100;

$tdatamfr_status_report[".nPrinterSplitRecords"] = 40;

$tdatamfr_status_report[".geocodingEnabled"] = false;










$tdatamfr_status_report[".pageSize"] = 20;

$tdatamfr_status_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_status_report[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_status_report[".orderindexes"] = array();
	foreach ( my_json_decode("") as $orderItem ) {
		$tdatamfr_status_report[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatamfr_status_report[".sqlHead"] = "";
$tdatamfr_status_report[".sqlFrom"] = "";
$tdatamfr_status_report[".sqlWhereExpr"] = "";
$tdatamfr_status_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_status_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_status_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_status_report[".highlightSearchResults"] = true;

$tableKeysmfr_status_report = array();
$tdatamfr_status_report[".Keys"] = $tableKeysmfr_status_report;


$tdatamfr_status_report[".hideMobileList"] = array();




//	operationalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "operationalStatus";
	$fdata["GoodName"] = "operationalStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Report","operationalStatus");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/operationalStatus";

	
	
		$fdata["FullName"] = "operationalStatus";

	
	
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


	$tdatamfr_status_report["operationalStatus"] = $fdata;
		$tdatamfr_status_report[".searchableFields"][] = "operationalStatus";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Report","status");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/status";

	
	
		$fdata["FullName"] = "status";

	
	
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


	$tdatamfr_status_report["status"] = $fdata;
		$tdatamfr_status_report[".searchableFields"][] = "status";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Report","count");
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


	$tdatamfr_status_report["count"] = $fdata;
		$tdatamfr_status_report[".searchableFields"][] = "count";


$tables_data["MFR_Status_Report"]=&$tdatamfr_status_report;
$field_labels["MFR_Status_Report"] = &$fieldLabelsmfr_status_report;
$fieldToolTips["MFR_Status_Report"] = &$fieldToolTipsmfr_status_report;
$placeHolders["MFR_Status_Report"] = &$placeHoldersmfr_status_report;
$page_titles["MFR_Status_Report"] = &$pageTitlesmfr_status_report;


changeTextControlsToDate( "MFR_Status_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Status_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Status_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_status_report_ops.php" ) );



	
																												;

			

$tdatamfr_status_report[".sqlquery"] = $queryData_mfr_status_report;



include_once(getabspath("include/mfr_status_report_events.php"));
$tdatamfr_status_report[".hasEvents"] = true;

?>