<?php
$tdatamfr_region_report = array();
$tdatamfr_region_report[".searchableFields"] = array();
$tdatamfr_region_report[".ShortName"] = "mfr_region_report";
$tdatamfr_region_report[".OwnerID"] = "";
$tdatamfr_region_report[".OriginalTable"] = "MFR_Region_Report";


$tdatamfr_region_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_region_report[".originalPagesByType"] = $tdatamfr_region_report[".pagesByType"];
$tdatamfr_region_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_region_report[".originalPages"] = $tdatamfr_region_report[".pages"];
$tdatamfr_region_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_region_report[".originalDefaultPages"] = $tdatamfr_region_report[".defaultPages"];

//	field labels
$fieldLabelsmfr_region_report = array();
$fieldToolTipsmfr_region_report = array();
$pageTitlesmfr_region_report = array();
$placeHoldersmfr_region_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_region_report["English"] = array();
	$fieldToolTipsmfr_region_report["English"] = array();
	$placeHoldersmfr_region_report["English"] = array();
	$pageTitlesmfr_region_report["English"] = array();
	$fieldLabelsmfr_region_report["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_region_report["English"]["lat"] = "";
	$placeHoldersmfr_region_report["English"]["lat"] = "";
	$fieldLabelsmfr_region_report["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_region_report["English"]["lng"] = "";
	$placeHoldersmfr_region_report["English"]["lng"] = "";
	$fieldLabelsmfr_region_report["English"]["count"] = "Count";
	$fieldToolTipsmfr_region_report["English"]["count"] = "";
	$placeHoldersmfr_region_report["English"]["count"] = "";
	$fieldLabelsmfr_region_report["English"]["region"] = "Region";
	$fieldToolTipsmfr_region_report["English"]["region"] = "";
	$placeHoldersmfr_region_report["English"]["region"] = "";
	if (count($fieldToolTipsmfr_region_report["English"]))
		$tdatamfr_region_report[".isUseToolTips"] = true;
}


	$tdatamfr_region_report[".NCSearch"] = true;



$tdatamfr_region_report[".shortTableName"] = "mfr_region_report";
$tdatamfr_region_report[".nSecOptions"] = 0;

$tdatamfr_region_report[".mainTableOwnerID"] = "";
$tdatamfr_region_report[".entityType"] = 7;
$tdatamfr_region_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_region_report[".strOriginalTableName"] = "MFR_Region_Report";

	



$tdatamfr_region_report[".showAddInPopup"] = false;

$tdatamfr_region_report[".showEditInPopup"] = false;

$tdatamfr_region_report[".showViewInPopup"] = false;

$tdatamfr_region_report[".listAjax"] = false;
//	temporary
//$tdatamfr_region_report[".listAjax"] = false;

	$tdatamfr_region_report[".audit"] = true;

	$tdatamfr_region_report[".locking"] = false;


$pages = $tdatamfr_region_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_region_report[".edit"] = true;
	$tdatamfr_region_report[".afterEditAction"] = 1;
	$tdatamfr_region_report[".closePopupAfterEdit"] = 1;
	$tdatamfr_region_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_region_report[".add"] = true;
$tdatamfr_region_report[".afterAddAction"] = 1;
$tdatamfr_region_report[".closePopupAfterAdd"] = 1;
$tdatamfr_region_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_region_report[".list"] = true;
}



$tdatamfr_region_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_region_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_region_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_region_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_region_report[".printFriendly"] = true;
}



$tdatamfr_region_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_region_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_region_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_region_report[".isUseAjaxSuggest"] = false;





$tdatamfr_region_report[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_region_report[".buttonsAdded"] = false;

$tdatamfr_region_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_region_report[".isUseTimeForSearch"] = false;


$tdatamfr_region_report[".badgeColor"] = "1E90FF";


$tdatamfr_region_report[".allSearchFields"] = array();
$tdatamfr_region_report[".filterFields"] = array();
$tdatamfr_region_report[".requiredSearchFields"] = array();

$tdatamfr_region_report[".googleLikeFields"] = array();
$tdatamfr_region_report[".googleLikeFields"][] = "region";
$tdatamfr_region_report[".googleLikeFields"][] = "lat";
$tdatamfr_region_report[".googleLikeFields"][] = "lng";
$tdatamfr_region_report[".googleLikeFields"][] = "count";




$tdatamfr_region_report[".printerPageOrientation"] = 0;
$tdatamfr_region_report[".nPrinterPageScale"] = 100;

$tdatamfr_region_report[".nPrinterSplitRecords"] = 40;

$tdatamfr_region_report[".geocodingEnabled"] = false;










$tdatamfr_region_report[".pageSize"] = 20;

$tdatamfr_region_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_region_report[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_region_report[".orderindexes"] = array();


$tdatamfr_region_report[".sqlHead"] = "";
$tdatamfr_region_report[".sqlFrom"] = "";
$tdatamfr_region_report[".sqlWhereExpr"] = "";
$tdatamfr_region_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_region_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_region_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_region_report[".highlightSearchResults"] = true;

$tableKeysmfr_region_report = array();
$tdatamfr_region_report[".Keys"] = $tableKeysmfr_region_report;


$tdatamfr_region_report[".hideMobileList"] = array();




//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Report","region");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/name";

	
		$fdata["FullName"] = "region";

	
	
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


	$tdatamfr_region_report["region"] = $fdata;
		$tdatamfr_region_report[".searchableFields"][] = "region";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Report","lat");
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


	$tdatamfr_region_report["lat"] = $fdata;
		$tdatamfr_region_report[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Report","lng");
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


	$tdatamfr_region_report["lng"] = $fdata;
		$tdatamfr_region_report[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Report","count");
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


	$tdatamfr_region_report["count"] = $fdata;
		$tdatamfr_region_report[".searchableFields"][] = "count";


$tables_data["MFR_Region_Report"]=&$tdatamfr_region_report;
$field_labels["MFR_Region_Report"] = &$fieldLabelsmfr_region_report;
$fieldToolTips["MFR_Region_Report"] = &$fieldToolTipsmfr_region_report;
$placeHolders["MFR_Region_Report"] = &$placeHoldersmfr_region_report;
$page_titles["MFR_Region_Report"] = &$pageTitlesmfr_region_report;


changeTextControlsToDate( "MFR_Region_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Region_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Region_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_region_report_ops.php" ) );



	
																												;

				

$tdatamfr_region_report[".sqlquery"] = $queryData_mfr_region_report;



include_once(getabspath("include/mfr_region_report_events.php"));
$tdatamfr_region_report[".hasEvents"] = true;

?>