<?php
$tdatamfr_operational_statuses = array();
$tdatamfr_operational_statuses[".searchableFields"] = array();
$tdatamfr_operational_statuses[".ShortName"] = "mfr_operational_statuses";
$tdatamfr_operational_statuses[".OwnerID"] = "";
$tdatamfr_operational_statuses[".OriginalTable"] = "MFR_Operational_Statuses";


$tdatamfr_operational_statuses[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_operational_statuses[".originalPagesByType"] = $tdatamfr_operational_statuses[".pagesByType"];
$tdatamfr_operational_statuses[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_operational_statuses[".originalPages"] = $tdatamfr_operational_statuses[".pages"];
$tdatamfr_operational_statuses[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_operational_statuses[".originalDefaultPages"] = $tdatamfr_operational_statuses[".defaultPages"];

//	field labels
$fieldLabelsmfr_operational_statuses = array();
$fieldToolTipsmfr_operational_statuses = array();
$pageTitlesmfr_operational_statuses = array();
$placeHoldersmfr_operational_statuses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_operational_statuses["English"] = array();
	$fieldToolTipsmfr_operational_statuses["English"] = array();
	$placeHoldersmfr_operational_statuses["English"] = array();
	$pageTitlesmfr_operational_statuses["English"] = array();
	$fieldLabelsmfr_operational_statuses["English"]["name"] = "Name";
	$fieldToolTipsmfr_operational_statuses["English"]["name"] = "";
	$placeHoldersmfr_operational_statuses["English"]["name"] = "";
	$fieldLabelsmfr_operational_statuses["English"]["code"] = "Code";
	$fieldToolTipsmfr_operational_statuses["English"]["code"] = "";
	$placeHoldersmfr_operational_statuses["English"]["code"] = "";
	$fieldLabelsmfr_operational_statuses["English"]["id"] = "Id";
	$fieldToolTipsmfr_operational_statuses["English"]["id"] = "";
	$placeHoldersmfr_operational_statuses["English"]["id"] = "";
	if (count($fieldToolTipsmfr_operational_statuses["English"]))
		$tdatamfr_operational_statuses[".isUseToolTips"] = true;
}


	$tdatamfr_operational_statuses[".NCSearch"] = true;



$tdatamfr_operational_statuses[".shortTableName"] = "mfr_operational_statuses";
$tdatamfr_operational_statuses[".nSecOptions"] = 0;

$tdatamfr_operational_statuses[".mainTableOwnerID"] = "";
$tdatamfr_operational_statuses[".entityType"] = 7;
$tdatamfr_operational_statuses[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_operational_statuses[".strOriginalTableName"] = "MFR_Operational_Statuses";

	



$tdatamfr_operational_statuses[".showAddInPopup"] = false;

$tdatamfr_operational_statuses[".showEditInPopup"] = false;

$tdatamfr_operational_statuses[".showViewInPopup"] = false;

$tdatamfr_operational_statuses[".listAjax"] = false;
//	temporary
//$tdatamfr_operational_statuses[".listAjax"] = false;

	$tdatamfr_operational_statuses[".audit"] = true;

	$tdatamfr_operational_statuses[".locking"] = false;


$pages = $tdatamfr_operational_statuses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_operational_statuses[".edit"] = true;
	$tdatamfr_operational_statuses[".afterEditAction"] = 1;
	$tdatamfr_operational_statuses[".closePopupAfterEdit"] = 1;
	$tdatamfr_operational_statuses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_operational_statuses[".add"] = true;
$tdatamfr_operational_statuses[".afterAddAction"] = 1;
$tdatamfr_operational_statuses[".closePopupAfterAdd"] = 1;
$tdatamfr_operational_statuses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_operational_statuses[".list"] = true;
}



$tdatamfr_operational_statuses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_operational_statuses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_operational_statuses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_operational_statuses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_operational_statuses[".printFriendly"] = true;
}



$tdatamfr_operational_statuses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_operational_statuses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_operational_statuses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_operational_statuses[".isUseAjaxSuggest"] = false;



			

$tdatamfr_operational_statuses[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_operational_statuses[".buttonsAdded"] = false;

$tdatamfr_operational_statuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_operational_statuses[".isUseTimeForSearch"] = false;


$tdatamfr_operational_statuses[".badgeColor"] = "D2AF80";


$tdatamfr_operational_statuses[".allSearchFields"] = array();
$tdatamfr_operational_statuses[".filterFields"] = array();
$tdatamfr_operational_statuses[".requiredSearchFields"] = array();

$tdatamfr_operational_statuses[".googleLikeFields"] = array();
$tdatamfr_operational_statuses[".googleLikeFields"][] = "name";
$tdatamfr_operational_statuses[".googleLikeFields"][] = "code";
$tdatamfr_operational_statuses[".googleLikeFields"][] = "id";




$tdatamfr_operational_statuses[".printerPageOrientation"] = 0;
$tdatamfr_operational_statuses[".nPrinterPageScale"] = 100;

$tdatamfr_operational_statuses[".nPrinterSplitRecords"] = 40;

$tdatamfr_operational_statuses[".geocodingEnabled"] = false;










$tdatamfr_operational_statuses[".pageSize"] = 20;

$tdatamfr_operational_statuses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_operational_statuses[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_operational_statuses[".orderindexes"] = array();


$tdatamfr_operational_statuses[".sqlHead"] = "";
$tdatamfr_operational_statuses[".sqlFrom"] = "";
$tdatamfr_operational_statuses[".sqlWhereExpr"] = "";
$tdatamfr_operational_statuses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_operational_statuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_operational_statuses[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_operational_statuses[".highlightSearchResults"] = true;

$tableKeysmfr_operational_statuses = array();
$tdatamfr_operational_statuses[".Keys"] = $tableKeysmfr_operational_statuses;


$tdatamfr_operational_statuses[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Statuses","name");
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


	$tdatamfr_operational_statuses["name"] = $fdata;
		$tdatamfr_operational_statuses[".searchableFields"][] = "name";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Statuses","code");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/code";

	
		$fdata["FullName"] = "code";

	
	
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


	$tdatamfr_operational_statuses["code"] = $fdata;
		$tdatamfr_operational_statuses[".searchableFields"][] = "code";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Statuses","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "model/*/id";

	
		$fdata["FullName"] = "id";

	
	
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


	$tdatamfr_operational_statuses["id"] = $fdata;
		$tdatamfr_operational_statuses[".searchableFields"][] = "id";


$tables_data["MFR_Operational_Statuses"]=&$tdatamfr_operational_statuses;
$field_labels["MFR_Operational_Statuses"] = &$fieldLabelsmfr_operational_statuses;
$fieldToolTips["MFR_Operational_Statuses"] = &$fieldToolTipsmfr_operational_statuses;
$placeHolders["MFR_Operational_Statuses"] = &$placeHoldersmfr_operational_statuses;
$page_titles["MFR_Operational_Statuses"] = &$pageTitlesmfr_operational_statuses;


changeTextControlsToDate( "MFR_Operational_Statuses" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Operational_Statuses"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Operational_Statuses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_operational_statuses_ops.php" ) );



	
																												;

			

$tdatamfr_operational_statuses[".sqlquery"] = $queryData_mfr_operational_statuses;



$tdatamfr_operational_statuses[".hasEvents"] = false;

?>