<?php
$tdatadhis2_datasets = array();
$tdatadhis2_datasets[".searchableFields"] = array();
$tdatadhis2_datasets[".ShortName"] = "dhis2_datasets";
$tdatadhis2_datasets[".OwnerID"] = "";
$tdatadhis2_datasets[".OriginalTable"] = "DHIS2_Datasets";


$tdatadhis2_datasets[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_datasets[".originalPagesByType"] = $tdatadhis2_datasets[".pagesByType"];
$tdatadhis2_datasets[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_datasets[".originalPages"] = $tdatadhis2_datasets[".pages"];
$tdatadhis2_datasets[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_datasets[".originalDefaultPages"] = $tdatadhis2_datasets[".defaultPages"];

//	field labels
$fieldLabelsdhis2_datasets = array();
$fieldToolTipsdhis2_datasets = array();
$pageTitlesdhis2_datasets = array();
$placeHoldersdhis2_datasets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_datasets["English"] = array();
	$fieldToolTipsdhis2_datasets["English"] = array();
	$placeHoldersdhis2_datasets["English"] = array();
	$pageTitlesdhis2_datasets["English"] = array();
	$fieldLabelsdhis2_datasets["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_datasets["English"]["displayName"] = "";
	$placeHoldersdhis2_datasets["English"]["displayName"] = "";
	$fieldLabelsdhis2_datasets["English"]["id"] = "Id";
	$fieldToolTipsdhis2_datasets["English"]["id"] = "";
	$placeHoldersdhis2_datasets["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_datasets["English"]))
		$tdatadhis2_datasets[".isUseToolTips"] = true;
}


	$tdatadhis2_datasets[".NCSearch"] = true;



$tdatadhis2_datasets[".shortTableName"] = "dhis2_datasets";
$tdatadhis2_datasets[".nSecOptions"] = 0;

$tdatadhis2_datasets[".mainTableOwnerID"] = "";
$tdatadhis2_datasets[".entityType"] = 7;
$tdatadhis2_datasets[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_datasets[".strOriginalTableName"] = "DHIS2_Datasets";

	



$tdatadhis2_datasets[".showAddInPopup"] = false;

$tdatadhis2_datasets[".showEditInPopup"] = false;

$tdatadhis2_datasets[".showViewInPopup"] = false;

$tdatadhis2_datasets[".listAjax"] = false;
//	temporary
//$tdatadhis2_datasets[".listAjax"] = false;

	$tdatadhis2_datasets[".audit"] = false;

	$tdatadhis2_datasets[".locking"] = false;


$pages = $tdatadhis2_datasets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_datasets[".edit"] = true;
	$tdatadhis2_datasets[".afterEditAction"] = 1;
	$tdatadhis2_datasets[".closePopupAfterEdit"] = 1;
	$tdatadhis2_datasets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_datasets[".add"] = true;
$tdatadhis2_datasets[".afterAddAction"] = 1;
$tdatadhis2_datasets[".closePopupAfterAdd"] = 1;
$tdatadhis2_datasets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_datasets[".list"] = true;
}



$tdatadhis2_datasets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_datasets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_datasets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_datasets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_datasets[".printFriendly"] = true;
}



$tdatadhis2_datasets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_datasets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_datasets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_datasets[".isUseAjaxSuggest"] = false;





$tdatadhis2_datasets[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_datasets[".buttonsAdded"] = false;

$tdatadhis2_datasets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_datasets[".isUseTimeForSearch"] = false;


$tdatadhis2_datasets[".badgeColor"] = "CD5C5C";


$tdatadhis2_datasets[".allSearchFields"] = array();
$tdatadhis2_datasets[".filterFields"] = array();
$tdatadhis2_datasets[".requiredSearchFields"] = array();

$tdatadhis2_datasets[".googleLikeFields"] = array();
$tdatadhis2_datasets[".googleLikeFields"][] = "displayName";
$tdatadhis2_datasets[".googleLikeFields"][] = "id";




$tdatadhis2_datasets[".printerPageOrientation"] = 0;
$tdatadhis2_datasets[".nPrinterPageScale"] = 100;

$tdatadhis2_datasets[".nPrinterSplitRecords"] = 40;

$tdatadhis2_datasets[".geocodingEnabled"] = false;










$tdatadhis2_datasets[".pageSize"] = 20;

$tdatadhis2_datasets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_datasets[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_datasets[".orderindexes"] = array();


$tdatadhis2_datasets[".sqlHead"] = "";
$tdatadhis2_datasets[".sqlFrom"] = "";
$tdatadhis2_datasets[".sqlWhereExpr"] = "";
$tdatadhis2_datasets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_datasets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_datasets[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_datasets[".highlightSearchResults"] = true;

$tableKeysdhis2_datasets = array();
$tdatadhis2_datasets[".Keys"] = $tableKeysdhis2_datasets;


$tdatadhis2_datasets[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Datasets","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dataSets/*/displayName";

	
		$fdata["FullName"] = "displayName";

	
	
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


	$tdatadhis2_datasets["displayName"] = $fdata;
		$tdatadhis2_datasets[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Datasets","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dataSets/*/id";

	
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


	$tdatadhis2_datasets["id"] = $fdata;
		$tdatadhis2_datasets[".searchableFields"][] = "id";


$tables_data["DHIS2_Datasets"]=&$tdatadhis2_datasets;
$field_labels["DHIS2_Datasets"] = &$fieldLabelsdhis2_datasets;
$fieldToolTips["DHIS2_Datasets"] = &$fieldToolTipsdhis2_datasets;
$placeHolders["DHIS2_Datasets"] = &$placeHoldersdhis2_datasets;
$page_titles["DHIS2_Datasets"] = &$pageTitlesdhis2_datasets;


changeTextControlsToDate( "DHIS2_Datasets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Datasets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Datasets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_datasets_ops.php" ) );



	
								;

		

$tdatadhis2_datasets[".sqlquery"] = $queryData_dhis2_datasets;



$tdatadhis2_datasets[".hasEvents"] = false;

?>