<?php
$tdatamfr_status_reporting = array();
$tdatamfr_status_reporting[".searchableFields"] = array();
$tdatamfr_status_reporting[".ShortName"] = "mfr_status_reporting";
$tdatamfr_status_reporting[".OwnerID"] = "";
$tdatamfr_status_reporting[".OriginalTable"] = "MFR_Status_Reporting";


$tdatamfr_status_reporting[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_status_reporting[".originalPagesByType"] = $tdatamfr_status_reporting[".pagesByType"];
$tdatamfr_status_reporting[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_status_reporting[".originalPages"] = $tdatamfr_status_reporting[".pages"];
$tdatamfr_status_reporting[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_status_reporting[".originalDefaultPages"] = $tdatamfr_status_reporting[".defaultPages"];

//	field labels
$fieldLabelsmfr_status_reporting = array();
$fieldToolTipsmfr_status_reporting = array();
$pageTitlesmfr_status_reporting = array();
$placeHoldersmfr_status_reporting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_status_reporting["English"] = array();
	$fieldToolTipsmfr_status_reporting["English"] = array();
	$placeHoldersmfr_status_reporting["English"] = array();
	$pageTitlesmfr_status_reporting["English"] = array();
	$fieldLabelsmfr_status_reporting["English"]["operationalStatus"] = "Operational Status";
	$fieldToolTipsmfr_status_reporting["English"]["operationalStatus"] = "";
	$placeHoldersmfr_status_reporting["English"]["operationalStatus"] = "";
	$fieldLabelsmfr_status_reporting["English"]["status"] = "Status";
	$fieldToolTipsmfr_status_reporting["English"]["status"] = "";
	$placeHoldersmfr_status_reporting["English"]["status"] = "";
	$fieldLabelsmfr_status_reporting["English"]["count"] = "Count";
	$fieldToolTipsmfr_status_reporting["English"]["count"] = "";
	$placeHoldersmfr_status_reporting["English"]["count"] = "";
	if (count($fieldToolTipsmfr_status_reporting["English"]))
		$tdatamfr_status_reporting[".isUseToolTips"] = true;
}


	$tdatamfr_status_reporting[".NCSearch"] = true;



$tdatamfr_status_reporting[".shortTableName"] = "mfr_status_reporting";
$tdatamfr_status_reporting[".nSecOptions"] = 0;

$tdatamfr_status_reporting[".mainTableOwnerID"] = "";
$tdatamfr_status_reporting[".entityType"] = 7;
$tdatamfr_status_reporting[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_status_reporting[".strOriginalTableName"] = "MFR_Status_Reporting";

	



$tdatamfr_status_reporting[".showAddInPopup"] = false;

$tdatamfr_status_reporting[".showEditInPopup"] = false;

$tdatamfr_status_reporting[".showViewInPopup"] = false;

$tdatamfr_status_reporting[".listAjax"] = false;
//	temporary
//$tdatamfr_status_reporting[".listAjax"] = false;

	$tdatamfr_status_reporting[".audit"] = false;

	$tdatamfr_status_reporting[".locking"] = false;


$pages = $tdatamfr_status_reporting[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_status_reporting[".edit"] = true;
	$tdatamfr_status_reporting[".afterEditAction"] = 1;
	$tdatamfr_status_reporting[".closePopupAfterEdit"] = 1;
	$tdatamfr_status_reporting[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_status_reporting[".add"] = true;
$tdatamfr_status_reporting[".afterAddAction"] = 1;
$tdatamfr_status_reporting[".closePopupAfterAdd"] = 1;
$tdatamfr_status_reporting[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_status_reporting[".list"] = true;
}



$tdatamfr_status_reporting[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_status_reporting[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_status_reporting[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_status_reporting[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_status_reporting[".printFriendly"] = true;
}



$tdatamfr_status_reporting[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_status_reporting[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_status_reporting[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_status_reporting[".isUseAjaxSuggest"] = false;





$tdatamfr_status_reporting[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_status_reporting[".buttonsAdded"] = false;

$tdatamfr_status_reporting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_status_reporting[".isUseTimeForSearch"] = false;


$tdatamfr_status_reporting[".badgeColor"] = "EDCA00";


$tdatamfr_status_reporting[".allSearchFields"] = array();
$tdatamfr_status_reporting[".filterFields"] = array();
$tdatamfr_status_reporting[".requiredSearchFields"] = array();

$tdatamfr_status_reporting[".googleLikeFields"] = array();
$tdatamfr_status_reporting[".googleLikeFields"][] = "operationalStatus";
$tdatamfr_status_reporting[".googleLikeFields"][] = "status";
$tdatamfr_status_reporting[".googleLikeFields"][] = "count";




$tdatamfr_status_reporting[".printerPageOrientation"] = 0;
$tdatamfr_status_reporting[".nPrinterPageScale"] = 100;

$tdatamfr_status_reporting[".nPrinterSplitRecords"] = 40;

$tdatamfr_status_reporting[".geocodingEnabled"] = false;










$tdatamfr_status_reporting[".pageSize"] = 20;

$tdatamfr_status_reporting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_status_reporting[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_status_reporting[".orderindexes"] = array();


$tdatamfr_status_reporting[".sqlHead"] = "";
$tdatamfr_status_reporting[".sqlFrom"] = "";
$tdatamfr_status_reporting[".sqlWhereExpr"] = "";
$tdatamfr_status_reporting[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_status_reporting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_status_reporting[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_status_reporting[".highlightSearchResults"] = true;

$tableKeysmfr_status_reporting = array();
$tdatamfr_status_reporting[".Keys"] = $tableKeysmfr_status_reporting;


$tdatamfr_status_reporting[".hideMobileList"] = array();




//	operationalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "operationalStatus";
	$fdata["GoodName"] = "operationalStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Reporting","operationalStatus");
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


	$tdatamfr_status_reporting["operationalStatus"] = $fdata;
		$tdatamfr_status_reporting[".searchableFields"][] = "operationalStatus";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Reporting","status");
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


	$tdatamfr_status_reporting["status"] = $fdata;
		$tdatamfr_status_reporting[".searchableFields"][] = "status";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status_Reporting","count");
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


	$tdatamfr_status_reporting["count"] = $fdata;
		$tdatamfr_status_reporting[".searchableFields"][] = "count";


$tables_data["MFR_Status_Reporting"]=&$tdatamfr_status_reporting;
$field_labels["MFR_Status_Reporting"] = &$fieldLabelsmfr_status_reporting;
$fieldToolTips["MFR_Status_Reporting"] = &$fieldToolTipsmfr_status_reporting;
$placeHolders["MFR_Status_Reporting"] = &$placeHoldersmfr_status_reporting;
$page_titles["MFR_Status_Reporting"] = &$pageTitlesmfr_status_reporting;


changeTextControlsToDate( "MFR_Status_Reporting" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Status_Reporting"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Status_Reporting"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_status_reporting_ops.php" ) );



	
		;

			

$tdatamfr_status_reporting[".sqlquery"] = $queryData_mfr_status_reporting;



include_once(getabspath("include/mfr_status_reporting_events.php"));
$tdatamfr_status_reporting[".hasEvents"] = true;

?>