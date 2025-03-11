<?php
$tdatadhis2_data_elements = array();
$tdatadhis2_data_elements[".searchableFields"] = array();
$tdatadhis2_data_elements[".ShortName"] = "dhis2_data_elements";
$tdatadhis2_data_elements[".OwnerID"] = "";
$tdatadhis2_data_elements[".OriginalTable"] = "DHIS2_Data_Elements";


$tdatadhis2_data_elements[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_data_elements[".originalPagesByType"] = $tdatadhis2_data_elements[".pagesByType"];
$tdatadhis2_data_elements[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_data_elements[".originalPages"] = $tdatadhis2_data_elements[".pages"];
$tdatadhis2_data_elements[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_data_elements[".originalDefaultPages"] = $tdatadhis2_data_elements[".defaultPages"];

//	field labels
$fieldLabelsdhis2_data_elements = array();
$fieldToolTipsdhis2_data_elements = array();
$pageTitlesdhis2_data_elements = array();
$placeHoldersdhis2_data_elements = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_data_elements["English"] = array();
	$fieldToolTipsdhis2_data_elements["English"] = array();
	$placeHoldersdhis2_data_elements["English"] = array();
	$pageTitlesdhis2_data_elements["English"] = array();
	$fieldLabelsdhis2_data_elements["English"]["dimensionItemType"] = "Dimension Item Type";
	$fieldToolTipsdhis2_data_elements["English"]["dimensionItemType"] = "";
	$placeHoldersdhis2_data_elements["English"]["dimensionItemType"] = "";
	$fieldLabelsdhis2_data_elements["English"]["id"] = "Id";
	$fieldToolTipsdhis2_data_elements["English"]["id"] = "";
	$placeHoldersdhis2_data_elements["English"]["id"] = "";
	$fieldLabelsdhis2_data_elements["English"]["name"] = "Name";
	$fieldToolTipsdhis2_data_elements["English"]["name"] = "";
	$placeHoldersdhis2_data_elements["English"]["name"] = "";
	if (count($fieldToolTipsdhis2_data_elements["English"]))
		$tdatadhis2_data_elements[".isUseToolTips"] = true;
}


	$tdatadhis2_data_elements[".NCSearch"] = true;



$tdatadhis2_data_elements[".shortTableName"] = "dhis2_data_elements";
$tdatadhis2_data_elements[".nSecOptions"] = 0;

$tdatadhis2_data_elements[".mainTableOwnerID"] = "";
$tdatadhis2_data_elements[".entityType"] = 7;
$tdatadhis2_data_elements[".connId"] = "xhispmdathispmdmerqconsultancy";


$tdatadhis2_data_elements[".strOriginalTableName"] = "DHIS2_Data_Elements";

	



$tdatadhis2_data_elements[".showAddInPopup"] = false;

$tdatadhis2_data_elements[".showEditInPopup"] = false;

$tdatadhis2_data_elements[".showViewInPopup"] = false;

$tdatadhis2_data_elements[".listAjax"] = false;
//	temporary
//$tdatadhis2_data_elements[".listAjax"] = false;

	$tdatadhis2_data_elements[".audit"] = false;

	$tdatadhis2_data_elements[".locking"] = false;


$pages = $tdatadhis2_data_elements[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_data_elements[".edit"] = true;
	$tdatadhis2_data_elements[".afterEditAction"] = 1;
	$tdatadhis2_data_elements[".closePopupAfterEdit"] = 1;
	$tdatadhis2_data_elements[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_data_elements[".add"] = true;
$tdatadhis2_data_elements[".afterAddAction"] = 1;
$tdatadhis2_data_elements[".closePopupAfterAdd"] = 1;
$tdatadhis2_data_elements[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_data_elements[".list"] = true;
}



$tdatadhis2_data_elements[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_data_elements[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_data_elements[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_data_elements[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_data_elements[".printFriendly"] = true;
}



$tdatadhis2_data_elements[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_data_elements[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_data_elements[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_data_elements[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_data_elements[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_data_elements[".buttonsAdded"] = false;

$tdatadhis2_data_elements[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_data_elements[".isUseTimeForSearch"] = false;


$tdatadhis2_data_elements[".badgeColor"] = "DAA520";


$tdatadhis2_data_elements[".allSearchFields"] = array();
$tdatadhis2_data_elements[".filterFields"] = array();
$tdatadhis2_data_elements[".requiredSearchFields"] = array();

$tdatadhis2_data_elements[".googleLikeFields"] = array();
$tdatadhis2_data_elements[".googleLikeFields"][] = "dimensionItemType";
$tdatadhis2_data_elements[".googleLikeFields"][] = "id";
$tdatadhis2_data_elements[".googleLikeFields"][] = "name";




$tdatadhis2_data_elements[".printerPageOrientation"] = 0;
$tdatadhis2_data_elements[".nPrinterPageScale"] = 100;

$tdatadhis2_data_elements[".nPrinterSplitRecords"] = 40;

$tdatadhis2_data_elements[".geocodingEnabled"] = false;










$tdatadhis2_data_elements[".pageSize"] = 20;

$tdatadhis2_data_elements[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_data_elements[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_data_elements[".orderindexes"] = array();


$tdatadhis2_data_elements[".sqlHead"] = "";
$tdatadhis2_data_elements[".sqlFrom"] = "";
$tdatadhis2_data_elements[".sqlWhereExpr"] = "";
$tdatadhis2_data_elements[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_data_elements[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_data_elements[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_data_elements[".highlightSearchResults"] = true;

$tableKeysdhis2_data_elements = array();
$tdatadhis2_data_elements[".Keys"] = $tableKeysdhis2_data_elements;


$tdatadhis2_data_elements[".hideMobileList"] = array();




//	dimensionItemType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dimensionItemType";
	$fdata["GoodName"] = "dimensionItemType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Data_Elements","dimensionItemType");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dataElements/*/dimensionItemType";

	
		$fdata["FullName"] = "dimensionItemType";

	
	
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


	$tdatadhis2_data_elements["dimensionItemType"] = $fdata;
		$tdatadhis2_data_elements[".searchableFields"][] = "dimensionItemType";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Data_Elements","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dataElements/*/id";

	
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


	$tdatadhis2_data_elements["id"] = $fdata;
		$tdatadhis2_data_elements[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Data_Elements","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dataElements/*/name";

	
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


	$tdatadhis2_data_elements["name"] = $fdata;
		$tdatadhis2_data_elements[".searchableFields"][] = "name";


$tables_data["DHIS2_Data_Elements"]=&$tdatadhis2_data_elements;
$field_labels["DHIS2_Data_Elements"] = &$fieldLabelsdhis2_data_elements;
$fieldToolTips["DHIS2_Data_Elements"] = &$fieldToolTipsdhis2_data_elements;
$placeHolders["DHIS2_Data_Elements"] = &$placeHoldersdhis2_data_elements;
$page_titles["DHIS2_Data_Elements"] = &$pageTitlesdhis2_data_elements;


changeTextControlsToDate( "DHIS2_Data_Elements" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Data_Elements"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Data_Elements"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_data_elements_ops.php" ) );



	
																												;

			

$tdatadhis2_data_elements[".sqlquery"] = $queryData_dhis2_data_elements;



$tdatadhis2_data_elements[".hasEvents"] = false;

?>