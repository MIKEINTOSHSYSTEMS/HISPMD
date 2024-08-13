<?php
$tdatadhis2_orgunit_woredas = array();
$tdatadhis2_orgunit_woredas[".searchableFields"] = array();
$tdatadhis2_orgunit_woredas[".ShortName"] = "dhis2_orgunit_woredas";
$tdatadhis2_orgunit_woredas[".OwnerID"] = "";
$tdatadhis2_orgunit_woredas[".OriginalTable"] = "DHIS2_OrgUnit_Woredas";


$tdatadhis2_orgunit_woredas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_woredas[".originalPagesByType"] = $tdatadhis2_orgunit_woredas[".pagesByType"];
$tdatadhis2_orgunit_woredas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_woredas[".originalPages"] = $tdatadhis2_orgunit_woredas[".pages"];
$tdatadhis2_orgunit_woredas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_woredas[".originalDefaultPages"] = $tdatadhis2_orgunit_woredas[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_woredas = array();
$fieldToolTipsdhis2_orgunit_woredas = array();
$pageTitlesdhis2_orgunit_woredas = array();
$placeHoldersdhis2_orgunit_woredas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_woredas["English"] = array();
	$fieldToolTipsdhis2_orgunit_woredas["English"] = array();
	$placeHoldersdhis2_orgunit_woredas["English"] = array();
	$pageTitlesdhis2_orgunit_woredas["English"] = array();
	$fieldLabelsdhis2_orgunit_woredas["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_woredas["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_woredas["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_woredas["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_woredas["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_woredas["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_woredas["English"]))
		$tdatadhis2_orgunit_woredas[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_woredas[".NCSearch"] = true;



$tdatadhis2_orgunit_woredas[".shortTableName"] = "dhis2_orgunit_woredas";
$tdatadhis2_orgunit_woredas[".nSecOptions"] = 0;

$tdatadhis2_orgunit_woredas[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_woredas[".entityType"] = 7;
$tdatadhis2_orgunit_woredas[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_woredas[".strOriginalTableName"] = "DHIS2_OrgUnit_Woredas";

	



$tdatadhis2_orgunit_woredas[".showAddInPopup"] = false;

$tdatadhis2_orgunit_woredas[".showEditInPopup"] = false;

$tdatadhis2_orgunit_woredas[".showViewInPopup"] = false;

$tdatadhis2_orgunit_woredas[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_woredas[".listAjax"] = false;

	$tdatadhis2_orgunit_woredas[".audit"] = false;

	$tdatadhis2_orgunit_woredas[".locking"] = false;


$pages = $tdatadhis2_orgunit_woredas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_woredas[".edit"] = true;
	$tdatadhis2_orgunit_woredas[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_woredas[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_woredas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_woredas[".add"] = true;
$tdatadhis2_orgunit_woredas[".afterAddAction"] = 1;
$tdatadhis2_orgunit_woredas[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_woredas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_woredas[".list"] = true;
}



$tdatadhis2_orgunit_woredas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_woredas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_woredas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_woredas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_woredas[".printFriendly"] = true;
}



$tdatadhis2_orgunit_woredas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_woredas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_woredas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_woredas[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_woredas[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_woredas[".buttonsAdded"] = false;

$tdatadhis2_orgunit_woredas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_woredas[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_woredas[".badgeColor"] = "D2691E";


$tdatadhis2_orgunit_woredas[".allSearchFields"] = array();
$tdatadhis2_orgunit_woredas[".filterFields"] = array();
$tdatadhis2_orgunit_woredas[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_woredas[".googleLikeFields"] = array();
$tdatadhis2_orgunit_woredas[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_woredas[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_woredas[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_woredas[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_woredas[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_woredas[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_woredas[".pageSize"] = 20;

$tdatadhis2_orgunit_woredas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_woredas[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_woredas[".orderindexes"] = array();


$tdatadhis2_orgunit_woredas[".sqlHead"] = "";
$tdatadhis2_orgunit_woredas[".sqlFrom"] = "";
$tdatadhis2_orgunit_woredas[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_woredas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_woredas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_woredas[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_woredas[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_woredas = array();
$tdatadhis2_orgunit_woredas[".Keys"] = $tableKeysdhis2_orgunit_woredas;


$tdatadhis2_orgunit_woredas[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Woredas","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnits/*/displayName";

	
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


	$tdatadhis2_orgunit_woredas["displayName"] = $fdata;
		$tdatadhis2_orgunit_woredas[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Woredas","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnits/*/id";

	
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


	$tdatadhis2_orgunit_woredas["id"] = $fdata;
		$tdatadhis2_orgunit_woredas[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Woredas"]=&$tdatadhis2_orgunit_woredas;
$field_labels["DHIS2_OrgUnit_Woredas"] = &$fieldLabelsdhis2_orgunit_woredas;
$fieldToolTips["DHIS2_OrgUnit_Woredas"] = &$fieldToolTipsdhis2_orgunit_woredas;
$placeHolders["DHIS2_OrgUnit_Woredas"] = &$placeHoldersdhis2_orgunit_woredas;
$page_titles["DHIS2_OrgUnit_Woredas"] = &$pageTitlesdhis2_orgunit_woredas;


changeTextControlsToDate( "DHIS2_OrgUnit_Woredas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Woredas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Woredas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_woredas_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_woredas[".sqlquery"] = $queryData_dhis2_orgunit_woredas;



$tdatadhis2_orgunit_woredas[".hasEvents"] = false;

?>