<?php
$tdatamfr_reporting_rest_view = array();
$tdatamfr_reporting_rest_view[".searchableFields"] = array();
$tdatamfr_reporting_rest_view[".ShortName"] = "mfr_reporting_rest_view";
$tdatamfr_reporting_rest_view[".OwnerID"] = "";
$tdatamfr_reporting_rest_view[".OriginalTable"] = "MFR_REPORTING_REST_View";


$tdatamfr_reporting_rest_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_reporting_rest_view[".originalPagesByType"] = $tdatamfr_reporting_rest_view[".pagesByType"];
$tdatamfr_reporting_rest_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_reporting_rest_view[".originalPages"] = $tdatamfr_reporting_rest_view[".pages"];
$tdatamfr_reporting_rest_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_reporting_rest_view[".originalDefaultPages"] = $tdatamfr_reporting_rest_view[".defaultPages"];

//	field labels
$fieldLabelsmfr_reporting_rest_view = array();
$fieldToolTipsmfr_reporting_rest_view = array();
$pageTitlesmfr_reporting_rest_view = array();
$placeHoldersmfr_reporting_rest_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_reporting_rest_view["English"] = array();
	$fieldToolTipsmfr_reporting_rest_view["English"] = array();
	$placeHoldersmfr_reporting_rest_view["English"] = array();
	$pageTitlesmfr_reporting_rest_view["English"] = array();
	$fieldLabelsmfr_reporting_rest_view["English"]["type"] = "Type";
	$fieldToolTipsmfr_reporting_rest_view["English"]["type"] = "";
	$placeHoldersmfr_reporting_rest_view["English"]["type"] = "";
	$fieldLabelsmfr_reporting_rest_view["English"]["name"] = "Name";
	$fieldToolTipsmfr_reporting_rest_view["English"]["name"] = "";
	$placeHoldersmfr_reporting_rest_view["English"]["name"] = "";
	$fieldLabelsmfr_reporting_rest_view["English"]["count"] = "Count";
	$fieldToolTipsmfr_reporting_rest_view["English"]["count"] = "";
	$placeHoldersmfr_reporting_rest_view["English"]["count"] = "";
	if (count($fieldToolTipsmfr_reporting_rest_view["English"]))
		$tdatamfr_reporting_rest_view[".isUseToolTips"] = true;
}


	$tdatamfr_reporting_rest_view[".NCSearch"] = true;



$tdatamfr_reporting_rest_view[".shortTableName"] = "mfr_reporting_rest_view";
$tdatamfr_reporting_rest_view[".nSecOptions"] = 0;

$tdatamfr_reporting_rest_view[".mainTableOwnerID"] = "";
$tdatamfr_reporting_rest_view[".entityType"] = 7;
$tdatamfr_reporting_rest_view[".connId"] = "";


$tdatamfr_reporting_rest_view[".strOriginalTableName"] = "MFR_REPORTING_REST_View";





$tdatamfr_reporting_rest_view[".showAddInPopup"] = false;

$tdatamfr_reporting_rest_view[".showEditInPopup"] = false;

$tdatamfr_reporting_rest_view[".showViewInPopup"] = false;

$tdatamfr_reporting_rest_view[".listAjax"] = false;
//	temporary
//$tdatamfr_reporting_rest_view[".listAjax"] = false;

	$tdatamfr_reporting_rest_view[".audit"] = false;

	$tdatamfr_reporting_rest_view[".locking"] = false;


$pages = $tdatamfr_reporting_rest_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_reporting_rest_view[".edit"] = true;
	$tdatamfr_reporting_rest_view[".afterEditAction"] = 1;
	$tdatamfr_reporting_rest_view[".closePopupAfterEdit"] = 1;
	$tdatamfr_reporting_rest_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_reporting_rest_view[".add"] = true;
$tdatamfr_reporting_rest_view[".afterAddAction"] = 1;
$tdatamfr_reporting_rest_view[".closePopupAfterAdd"] = 1;
$tdatamfr_reporting_rest_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_reporting_rest_view[".list"] = true;
}



$tdatamfr_reporting_rest_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_reporting_rest_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_reporting_rest_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_reporting_rest_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_reporting_rest_view[".printFriendly"] = true;
}



$tdatamfr_reporting_rest_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_reporting_rest_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_reporting_rest_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_reporting_rest_view[".isUseAjaxSuggest"] = true;





$tdatamfr_reporting_rest_view[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_reporting_rest_view[".buttonsAdded"] = false;

$tdatamfr_reporting_rest_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_reporting_rest_view[".isUseTimeForSearch"] = false;


$tdatamfr_reporting_rest_view[".badgeColor"] = "6B8E23";


$tdatamfr_reporting_rest_view[".allSearchFields"] = array();
$tdatamfr_reporting_rest_view[".filterFields"] = array();
$tdatamfr_reporting_rest_view[".requiredSearchFields"] = array();

$tdatamfr_reporting_rest_view[".googleLikeFields"] = array();
$tdatamfr_reporting_rest_view[".googleLikeFields"][] = "type";
$tdatamfr_reporting_rest_view[".googleLikeFields"][] = "name";
$tdatamfr_reporting_rest_view[".googleLikeFields"][] = "count";




$tdatamfr_reporting_rest_view[".printerPageOrientation"] = 0;
$tdatamfr_reporting_rest_view[".nPrinterPageScale"] = 100;

$tdatamfr_reporting_rest_view[".nPrinterSplitRecords"] = 40;

$tdatamfr_reporting_rest_view[".geocodingEnabled"] = false;










$tdatamfr_reporting_rest_view[".pageSize"] = 20;

$tdatamfr_reporting_rest_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_reporting_rest_view[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_reporting_rest_view[".orderindexes"] = array();


$tdatamfr_reporting_rest_view[".sqlHead"] = "";
$tdatamfr_reporting_rest_view[".sqlFrom"] = "";
$tdatamfr_reporting_rest_view[".sqlWhereExpr"] = "";
$tdatamfr_reporting_rest_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_reporting_rest_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_reporting_rest_view[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_reporting_rest_view[".highlightSearchResults"] = true;

$tableKeysmfr_reporting_rest_view = array();
$tdatamfr_reporting_rest_view[".Keys"] = $tableKeysmfr_reporting_rest_view;


$tdatamfr_reporting_rest_view[".hideMobileList"] = array();




//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_REPORTING_REST_View","type");
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


	$tdatamfr_reporting_rest_view["type"] = $fdata;
		$tdatamfr_reporting_rest_view[".searchableFields"][] = "type";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_REPORTING_REST_View","name");
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


	$tdatamfr_reporting_rest_view["name"] = $fdata;
		$tdatamfr_reporting_rest_view[".searchableFields"][] = "name";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_REPORTING_REST_View","count");
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


	$tdatamfr_reporting_rest_view["count"] = $fdata;
		$tdatamfr_reporting_rest_view[".searchableFields"][] = "count";


$tables_data["MFR_REPORTING_REST_View"]=&$tdatamfr_reporting_rest_view;
$field_labels["MFR_REPORTING_REST_View"] = &$fieldLabelsmfr_reporting_rest_view;
$fieldToolTips["MFR_REPORTING_REST_View"] = &$fieldToolTipsmfr_reporting_rest_view;
$placeHolders["MFR_REPORTING_REST_View"] = &$placeHoldersmfr_reporting_rest_view;
$page_titles["MFR_REPORTING_REST_View"] = &$pageTitlesmfr_reporting_rest_view;


changeTextControlsToDate( "MFR_REPORTING_REST_View" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_REPORTING_REST_View"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_REPORTING_REST_View"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_reporting_rest_view_ops.php" ) );



	
		;

			

$tdatamfr_reporting_rest_view[".sqlquery"] = $queryData_mfr_reporting_rest_view;



include_once(getabspath("include/mfr_reporting_rest_view_events.php"));
$tdatamfr_reporting_rest_view[".hasEvents"] = true;

?>