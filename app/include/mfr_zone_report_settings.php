<?php
$tdatamfr_zone_report = array();
$tdatamfr_zone_report[".searchableFields"] = array();
$tdatamfr_zone_report[".ShortName"] = "mfr_zone_report";
$tdatamfr_zone_report[".OwnerID"] = "";
$tdatamfr_zone_report[".OriginalTable"] = "MFR_Region_Report";


$tdatamfr_zone_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_zone_report[".originalPagesByType"] = $tdatamfr_zone_report[".pagesByType"];
$tdatamfr_zone_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_zone_report[".originalPages"] = $tdatamfr_zone_report[".pages"];
$tdatamfr_zone_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_zone_report[".originalDefaultPages"] = $tdatamfr_zone_report[".defaultPages"];

//	field labels
$fieldLabelsmfr_zone_report = array();
$fieldToolTipsmfr_zone_report = array();
$pageTitlesmfr_zone_report = array();
$placeHoldersmfr_zone_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_zone_report["English"] = array();
	$fieldToolTipsmfr_zone_report["English"] = array();
	$placeHoldersmfr_zone_report["English"] = array();
	$pageTitlesmfr_zone_report["English"] = array();
	$fieldLabelsmfr_zone_report["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_zone_report["English"]["lat"] = "";
	$placeHoldersmfr_zone_report["English"]["lat"] = "";
	$fieldLabelsmfr_zone_report["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_zone_report["English"]["lng"] = "";
	$placeHoldersmfr_zone_report["English"]["lng"] = "";
	$fieldLabelsmfr_zone_report["English"]["count"] = "Count";
	$fieldToolTipsmfr_zone_report["English"]["count"] = "";
	$placeHoldersmfr_zone_report["English"]["count"] = "";
	$fieldLabelsmfr_zone_report["English"]["zone"] = "Zone";
	$fieldToolTipsmfr_zone_report["English"]["zone"] = "";
	$placeHoldersmfr_zone_report["English"]["zone"] = "";
	if (count($fieldToolTipsmfr_zone_report["English"]))
		$tdatamfr_zone_report[".isUseToolTips"] = true;
}


	$tdatamfr_zone_report[".NCSearch"] = true;



$tdatamfr_zone_report[".shortTableName"] = "mfr_zone_report";
$tdatamfr_zone_report[".nSecOptions"] = 0;

$tdatamfr_zone_report[".mainTableOwnerID"] = "";
$tdatamfr_zone_report[".entityType"] = 7;
$tdatamfr_zone_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_zone_report[".strOriginalTableName"] = "MFR_Region_Report";

	



$tdatamfr_zone_report[".showAddInPopup"] = false;

$tdatamfr_zone_report[".showEditInPopup"] = false;

$tdatamfr_zone_report[".showViewInPopup"] = false;

$tdatamfr_zone_report[".listAjax"] = false;
//	temporary
//$tdatamfr_zone_report[".listAjax"] = false;

	$tdatamfr_zone_report[".audit"] = false;

	$tdatamfr_zone_report[".locking"] = false;


$pages = $tdatamfr_zone_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_zone_report[".edit"] = true;
	$tdatamfr_zone_report[".afterEditAction"] = 1;
	$tdatamfr_zone_report[".closePopupAfterEdit"] = 1;
	$tdatamfr_zone_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_zone_report[".add"] = true;
$tdatamfr_zone_report[".afterAddAction"] = 1;
$tdatamfr_zone_report[".closePopupAfterAdd"] = 1;
$tdatamfr_zone_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_zone_report[".list"] = true;
}



$tdatamfr_zone_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_zone_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_zone_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_zone_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_zone_report[".printFriendly"] = true;
}



$tdatamfr_zone_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_zone_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_zone_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_zone_report[".isUseAjaxSuggest"] = false;





$tdatamfr_zone_report[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_zone_report[".buttonsAdded"] = false;

$tdatamfr_zone_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_zone_report[".isUseTimeForSearch"] = false;


$tdatamfr_zone_report[".badgeColor"] = "6DA5C8";


$tdatamfr_zone_report[".allSearchFields"] = array();
$tdatamfr_zone_report[".filterFields"] = array();
$tdatamfr_zone_report[".requiredSearchFields"] = array();

$tdatamfr_zone_report[".googleLikeFields"] = array();
$tdatamfr_zone_report[".googleLikeFields"][] = "zone";
$tdatamfr_zone_report[".googleLikeFields"][] = "lat";
$tdatamfr_zone_report[".googleLikeFields"][] = "lng";
$tdatamfr_zone_report[".googleLikeFields"][] = "count";




$tdatamfr_zone_report[".printerPageOrientation"] = 0;
$tdatamfr_zone_report[".nPrinterPageScale"] = 100;

$tdatamfr_zone_report[".nPrinterSplitRecords"] = 40;

$tdatamfr_zone_report[".geocodingEnabled"] = false;










$tdatamfr_zone_report[".pageSize"] = 20;

$tdatamfr_zone_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_zone_report[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_zone_report[".orderindexes"] = array();


$tdatamfr_zone_report[".sqlHead"] = "";
$tdatamfr_zone_report[".sqlFrom"] = "";
$tdatamfr_zone_report[".sqlWhereExpr"] = "";
$tdatamfr_zone_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_zone_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_zone_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_zone_report[".highlightSearchResults"] = true;

$tableKeysmfr_zone_report = array();
$tdatamfr_zone_report[".Keys"] = $tableKeysmfr_zone_report;


$tdatamfr_zone_report[".hideMobileList"] = array();




//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Report","zone");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/name";

	
		$fdata["FullName"] = "zone";

	
	
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


	$tdatamfr_zone_report["zone"] = $fdata;
		$tdatamfr_zone_report[".searchableFields"][] = "zone";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Report","lat");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "model/*/lat";

	
		$fdata["FullName"] = "lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatamfr_zone_report["lat"] = $fdata;
		$tdatamfr_zone_report[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Report","lng");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "model/*/lng";

	
		$fdata["FullName"] = "lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatamfr_zone_report["lng"] = $fdata;
		$tdatamfr_zone_report[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Report","count");
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


	$tdatamfr_zone_report["count"] = $fdata;
		$tdatamfr_zone_report[".searchableFields"][] = "count";


$tables_data["MFR_Zone_Report"]=&$tdatamfr_zone_report;
$field_labels["MFR_Zone_Report"] = &$fieldLabelsmfr_zone_report;
$fieldToolTips["MFR_Zone_Report"] = &$fieldToolTipsmfr_zone_report;
$placeHolders["MFR_Zone_Report"] = &$placeHoldersmfr_zone_report;
$page_titles["MFR_Zone_Report"] = &$pageTitlesmfr_zone_report;


changeTextControlsToDate( "MFR_Zone_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Zone_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Zone_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_zone_report_ops.php" ) );



	
		;

				

$tdatamfr_zone_report[".sqlquery"] = $queryData_mfr_zone_report;



include_once(getabspath("include/mfr_zone_report_events.php"));
$tdatamfr_zone_report[".hasEvents"] = true;

?>