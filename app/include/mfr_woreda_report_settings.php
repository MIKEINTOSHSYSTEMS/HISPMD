<?php
$tdatamfr_woreda_report = array();
$tdatamfr_woreda_report[".searchableFields"] = array();
$tdatamfr_woreda_report[".ShortName"] = "mfr_woreda_report";
$tdatamfr_woreda_report[".OwnerID"] = "";
$tdatamfr_woreda_report[".OriginalTable"] = "MFR_Region_Report";


$tdatamfr_woreda_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_woreda_report[".originalPagesByType"] = $tdatamfr_woreda_report[".pagesByType"];
$tdatamfr_woreda_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_woreda_report[".originalPages"] = $tdatamfr_woreda_report[".pages"];
$tdatamfr_woreda_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_woreda_report[".originalDefaultPages"] = $tdatamfr_woreda_report[".defaultPages"];

//	field labels
$fieldLabelsmfr_woreda_report = array();
$fieldToolTipsmfr_woreda_report = array();
$pageTitlesmfr_woreda_report = array();
$placeHoldersmfr_woreda_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_woreda_report["English"] = array();
	$fieldToolTipsmfr_woreda_report["English"] = array();
	$placeHoldersmfr_woreda_report["English"] = array();
	$pageTitlesmfr_woreda_report["English"] = array();
	$fieldLabelsmfr_woreda_report["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_woreda_report["English"]["lat"] = "";
	$placeHoldersmfr_woreda_report["English"]["lat"] = "";
	$fieldLabelsmfr_woreda_report["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_woreda_report["English"]["lng"] = "";
	$placeHoldersmfr_woreda_report["English"]["lng"] = "";
	$fieldLabelsmfr_woreda_report["English"]["count"] = "Count";
	$fieldToolTipsmfr_woreda_report["English"]["count"] = "";
	$placeHoldersmfr_woreda_report["English"]["count"] = "";
	$fieldLabelsmfr_woreda_report["English"]["woreda"] = "Woreda";
	$fieldToolTipsmfr_woreda_report["English"]["woreda"] = "";
	$placeHoldersmfr_woreda_report["English"]["woreda"] = "";
	if (count($fieldToolTipsmfr_woreda_report["English"]))
		$tdatamfr_woreda_report[".isUseToolTips"] = true;
}


	$tdatamfr_woreda_report[".NCSearch"] = true;



$tdatamfr_woreda_report[".shortTableName"] = "mfr_woreda_report";
$tdatamfr_woreda_report[".nSecOptions"] = 0;

$tdatamfr_woreda_report[".mainTableOwnerID"] = "";
$tdatamfr_woreda_report[".entityType"] = 7;
$tdatamfr_woreda_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_woreda_report[".strOriginalTableName"] = "MFR_Region_Report";

	



$tdatamfr_woreda_report[".showAddInPopup"] = false;

$tdatamfr_woreda_report[".showEditInPopup"] = false;

$tdatamfr_woreda_report[".showViewInPopup"] = false;

$tdatamfr_woreda_report[".listAjax"] = false;
//	temporary
//$tdatamfr_woreda_report[".listAjax"] = false;

	$tdatamfr_woreda_report[".audit"] = false;

	$tdatamfr_woreda_report[".locking"] = false;


$pages = $tdatamfr_woreda_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_woreda_report[".edit"] = true;
	$tdatamfr_woreda_report[".afterEditAction"] = 1;
	$tdatamfr_woreda_report[".closePopupAfterEdit"] = 1;
	$tdatamfr_woreda_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_woreda_report[".add"] = true;
$tdatamfr_woreda_report[".afterAddAction"] = 1;
$tdatamfr_woreda_report[".closePopupAfterAdd"] = 1;
$tdatamfr_woreda_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_woreda_report[".list"] = true;
}



$tdatamfr_woreda_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_woreda_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_woreda_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_woreda_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_woreda_report[".printFriendly"] = true;
}



$tdatamfr_woreda_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_woreda_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_woreda_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_woreda_report[".isUseAjaxSuggest"] = false;





$tdatamfr_woreda_report[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_woreda_report[".buttonsAdded"] = false;

$tdatamfr_woreda_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_woreda_report[".isUseTimeForSearch"] = false;


$tdatamfr_woreda_report[".badgeColor"] = "E07878";


$tdatamfr_woreda_report[".allSearchFields"] = array();
$tdatamfr_woreda_report[".filterFields"] = array();
$tdatamfr_woreda_report[".requiredSearchFields"] = array();

$tdatamfr_woreda_report[".googleLikeFields"] = array();
$tdatamfr_woreda_report[".googleLikeFields"][] = "woreda";
$tdatamfr_woreda_report[".googleLikeFields"][] = "lat";
$tdatamfr_woreda_report[".googleLikeFields"][] = "lng";
$tdatamfr_woreda_report[".googleLikeFields"][] = "count";




$tdatamfr_woreda_report[".printerPageOrientation"] = 0;
$tdatamfr_woreda_report[".nPrinterPageScale"] = 100;

$tdatamfr_woreda_report[".nPrinterSplitRecords"] = 40;

$tdatamfr_woreda_report[".geocodingEnabled"] = false;










$tdatamfr_woreda_report[".pageSize"] = 20;

$tdatamfr_woreda_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_woreda_report[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_woreda_report[".orderindexes"] = array();


$tdatamfr_woreda_report[".sqlHead"] = "";
$tdatamfr_woreda_report[".sqlFrom"] = "";
$tdatamfr_woreda_report[".sqlWhereExpr"] = "";
$tdatamfr_woreda_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_woreda_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_woreda_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_woreda_report[".highlightSearchResults"] = true;

$tableKeysmfr_woreda_report = array();
$tdatamfr_woreda_report[".Keys"] = $tableKeysmfr_woreda_report;


$tdatamfr_woreda_report[".hideMobileList"] = array();




//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Report","woreda");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/name";

	
		$fdata["FullName"] = "woreda";

	
	
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


	$tdatamfr_woreda_report["woreda"] = $fdata;
		$tdatamfr_woreda_report[".searchableFields"][] = "woreda";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Report","lat");
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


	$tdatamfr_woreda_report["lat"] = $fdata;
		$tdatamfr_woreda_report[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Report","lng");
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


	$tdatamfr_woreda_report["lng"] = $fdata;
		$tdatamfr_woreda_report[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Report","count");
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


	$tdatamfr_woreda_report["count"] = $fdata;
		$tdatamfr_woreda_report[".searchableFields"][] = "count";


$tables_data["MFR_Woreda_Report"]=&$tdatamfr_woreda_report;
$field_labels["MFR_Woreda_Report"] = &$fieldLabelsmfr_woreda_report;
$fieldToolTips["MFR_Woreda_Report"] = &$fieldToolTipsmfr_woreda_report;
$placeHolders["MFR_Woreda_Report"] = &$placeHoldersmfr_woreda_report;
$page_titles["MFR_Woreda_Report"] = &$pageTitlesmfr_woreda_report;


changeTextControlsToDate( "MFR_Woreda_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Woreda_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Woreda_Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_woreda_report_ops.php" ) );



	
		;

				

$tdatamfr_woreda_report[".sqlquery"] = $queryData_mfr_woreda_report;



include_once(getabspath("include/mfr_woreda_report_events.php"));
$tdatamfr_woreda_report[".hasEvents"] = true;

?>