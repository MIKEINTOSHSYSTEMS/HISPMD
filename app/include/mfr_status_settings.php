<?php
$tdatamfr_status = array();
$tdatamfr_status[".searchableFields"] = array();
$tdatamfr_status[".ShortName"] = "mfr_status";
$tdatamfr_status[".OwnerID"] = "";
$tdatamfr_status[".OriginalTable"] = "MFR_Status";


$tdatamfr_status[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_status[".originalPagesByType"] = $tdatamfr_status[".pagesByType"];
$tdatamfr_status[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_status[".originalPages"] = $tdatamfr_status[".pages"];
$tdatamfr_status[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_status[".originalDefaultPages"] = $tdatamfr_status[".defaultPages"];

//	field labels
$fieldLabelsmfr_status = array();
$fieldToolTipsmfr_status = array();
$pageTitlesmfr_status = array();
$placeHoldersmfr_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_status["English"] = array();
	$fieldToolTipsmfr_status["English"] = array();
	$placeHoldersmfr_status["English"] = array();
	$pageTitlesmfr_status["English"] = array();
	$fieldLabelsmfr_status["English"]["name"] = "Name";
	$fieldToolTipsmfr_status["English"]["name"] = "";
	$placeHoldersmfr_status["English"]["name"] = "";
	$fieldLabelsmfr_status["English"]["code"] = "Code";
	$fieldToolTipsmfr_status["English"]["code"] = "";
	$placeHoldersmfr_status["English"]["code"] = "";
	$fieldLabelsmfr_status["English"]["id"] = "Id";
	$fieldToolTipsmfr_status["English"]["id"] = "";
	$placeHoldersmfr_status["English"]["id"] = "";
	if (count($fieldToolTipsmfr_status["English"]))
		$tdatamfr_status[".isUseToolTips"] = true;
}


	$tdatamfr_status[".NCSearch"] = true;



$tdatamfr_status[".shortTableName"] = "mfr_status";
$tdatamfr_status[".nSecOptions"] = 0;

$tdatamfr_status[".mainTableOwnerID"] = "";
$tdatamfr_status[".entityType"] = 7;
$tdatamfr_status[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_status[".strOriginalTableName"] = "MFR_Status";

	



$tdatamfr_status[".showAddInPopup"] = false;

$tdatamfr_status[".showEditInPopup"] = false;

$tdatamfr_status[".showViewInPopup"] = false;

$tdatamfr_status[".listAjax"] = false;
//	temporary
//$tdatamfr_status[".listAjax"] = false;

	$tdatamfr_status[".audit"] = true;

	$tdatamfr_status[".locking"] = false;


$pages = $tdatamfr_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_status[".edit"] = true;
	$tdatamfr_status[".afterEditAction"] = 1;
	$tdatamfr_status[".closePopupAfterEdit"] = 1;
	$tdatamfr_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_status[".add"] = true;
$tdatamfr_status[".afterAddAction"] = 1;
$tdatamfr_status[".closePopupAfterAdd"] = 1;
$tdatamfr_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_status[".list"] = true;
}



$tdatamfr_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_status[".printFriendly"] = true;
}



$tdatamfr_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_status[".isUseAjaxSuggest"] = false;



			

$tdatamfr_status[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_status[".buttonsAdded"] = false;

$tdatamfr_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_status[".isUseTimeForSearch"] = false;


$tdatamfr_status[".badgeColor"] = "BC8F8F";


$tdatamfr_status[".allSearchFields"] = array();
$tdatamfr_status[".filterFields"] = array();
$tdatamfr_status[".requiredSearchFields"] = array();

$tdatamfr_status[".googleLikeFields"] = array();
$tdatamfr_status[".googleLikeFields"][] = "name";
$tdatamfr_status[".googleLikeFields"][] = "code";
$tdatamfr_status[".googleLikeFields"][] = "id";




$tdatamfr_status[".printerPageOrientation"] = 0;
$tdatamfr_status[".nPrinterPageScale"] = 100;

$tdatamfr_status[".nPrinterSplitRecords"] = 40;

$tdatamfr_status[".geocodingEnabled"] = false;










$tdatamfr_status[".pageSize"] = 20;

$tdatamfr_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_status[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_status[".orderindexes"] = array();
	foreach ( my_json_decode("") as $orderItem ) {
		$tdatamfr_status[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatamfr_status[".sqlHead"] = "";
$tdatamfr_status[".sqlFrom"] = "";
$tdatamfr_status[".sqlWhereExpr"] = "";
$tdatamfr_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_status[".highlightSearchResults"] = true;

$tableKeysmfr_status = array();
$tdatamfr_status[".Keys"] = $tableKeysmfr_status;


$tdatamfr_status[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status","name");
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


	$tdatamfr_status["name"] = $fdata;
		$tdatamfr_status[".searchableFields"][] = "name";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status","code");
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


	$tdatamfr_status["code"] = $fdata;
		$tdatamfr_status[".searchableFields"][] = "code";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Status","id");
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


	$tdatamfr_status["id"] = $fdata;
		$tdatamfr_status[".searchableFields"][] = "id";


$tables_data["MFR_Status"]=&$tdatamfr_status;
$field_labels["MFR_Status"] = &$fieldLabelsmfr_status;
$fieldToolTips["MFR_Status"] = &$fieldToolTipsmfr_status;
$placeHolders["MFR_Status"] = &$placeHoldersmfr_status;
$page_titles["MFR_Status"] = &$pageTitlesmfr_status;


changeTextControlsToDate( "MFR_Status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_status_ops.php" ) );



	
																												;

			

$tdatamfr_status[".sqlquery"] = $queryData_mfr_status;



$tdatamfr_status[".hasEvents"] = false;

?>