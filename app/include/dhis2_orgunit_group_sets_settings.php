<?php
$tdatadhis2_orgunit_group_sets = array();
$tdatadhis2_orgunit_group_sets[".searchableFields"] = array();
$tdatadhis2_orgunit_group_sets[".ShortName"] = "dhis2_orgunit_group_sets";
$tdatadhis2_orgunit_group_sets[".OwnerID"] = "";
$tdatadhis2_orgunit_group_sets[".OriginalTable"] = "DHIS2_OrgUnit_Group_Sets";


$tdatadhis2_orgunit_group_sets[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunit_group_sets[".originalPagesByType"] = $tdatadhis2_orgunit_group_sets[".pagesByType"];
$tdatadhis2_orgunit_group_sets[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunit_group_sets[".originalPages"] = $tdatadhis2_orgunit_group_sets[".pages"];
$tdatadhis2_orgunit_group_sets[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunit_group_sets[".originalDefaultPages"] = $tdatadhis2_orgunit_group_sets[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunit_group_sets = array();
$fieldToolTipsdhis2_orgunit_group_sets = array();
$pageTitlesdhis2_orgunit_group_sets = array();
$placeHoldersdhis2_orgunit_group_sets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunit_group_sets["English"] = array();
	$fieldToolTipsdhis2_orgunit_group_sets["English"] = array();
	$placeHoldersdhis2_orgunit_group_sets["English"] = array();
	$pageTitlesdhis2_orgunit_group_sets["English"] = array();
	$fieldLabelsdhis2_orgunit_group_sets["English"]["displayName"] = "Display Name";
	$fieldToolTipsdhis2_orgunit_group_sets["English"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_group_sets["English"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_group_sets["English"]["id"] = "Id";
	$fieldToolTipsdhis2_orgunit_group_sets["English"]["id"] = "";
	$placeHoldersdhis2_orgunit_group_sets["English"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_group_sets["English"]))
		$tdatadhis2_orgunit_group_sets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_orgunit_group_sets["Amharic"] = array();
	$fieldToolTipsdhis2_orgunit_group_sets["Amharic"] = array();
	$placeHoldersdhis2_orgunit_group_sets["Amharic"] = array();
	$pageTitlesdhis2_orgunit_group_sets["Amharic"] = array();
	$fieldLabelsdhis2_orgunit_group_sets["Amharic"]["displayName"] = "የማሳያ ስም";
	$fieldToolTipsdhis2_orgunit_group_sets["Amharic"]["displayName"] = "";
	$placeHoldersdhis2_orgunit_group_sets["Amharic"]["displayName"] = "";
	$fieldLabelsdhis2_orgunit_group_sets["Amharic"]["id"] = "መለያ";
	$fieldToolTipsdhis2_orgunit_group_sets["Amharic"]["id"] = "";
	$placeHoldersdhis2_orgunit_group_sets["Amharic"]["id"] = "";
	if (count($fieldToolTipsdhis2_orgunit_group_sets["Amharic"]))
		$tdatadhis2_orgunit_group_sets[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunit_group_sets[".NCSearch"] = true;



$tdatadhis2_orgunit_group_sets[".shortTableName"] = "dhis2_orgunit_group_sets";
$tdatadhis2_orgunit_group_sets[".nSecOptions"] = 0;

$tdatadhis2_orgunit_group_sets[".mainTableOwnerID"] = "";
$tdatadhis2_orgunit_group_sets[".entityType"] = 7;
$tdatadhis2_orgunit_group_sets[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_orgunit_group_sets[".strOriginalTableName"] = "DHIS2_OrgUnit_Group_Sets";

	



$tdatadhis2_orgunit_group_sets[".showAddInPopup"] = false;

$tdatadhis2_orgunit_group_sets[".showEditInPopup"] = false;

$tdatadhis2_orgunit_group_sets[".showViewInPopup"] = false;

$tdatadhis2_orgunit_group_sets[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunit_group_sets[".listAjax"] = false;

	$tdatadhis2_orgunit_group_sets[".audit"] = true;

	$tdatadhis2_orgunit_group_sets[".locking"] = false;


$pages = $tdatadhis2_orgunit_group_sets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunit_group_sets[".edit"] = true;
	$tdatadhis2_orgunit_group_sets[".afterEditAction"] = 1;
	$tdatadhis2_orgunit_group_sets[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunit_group_sets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunit_group_sets[".add"] = true;
$tdatadhis2_orgunit_group_sets[".afterAddAction"] = 1;
$tdatadhis2_orgunit_group_sets[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunit_group_sets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunit_group_sets[".list"] = true;
}



$tdatadhis2_orgunit_group_sets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunit_group_sets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunit_group_sets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunit_group_sets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunit_group_sets[".printFriendly"] = true;
}



$tdatadhis2_orgunit_group_sets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunit_group_sets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunit_group_sets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunit_group_sets[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunit_group_sets[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunit_group_sets[".buttonsAdded"] = false;

$tdatadhis2_orgunit_group_sets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunit_group_sets[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunit_group_sets[".badgeColor"] = "4682B4";


$tdatadhis2_orgunit_group_sets[".allSearchFields"] = array();
$tdatadhis2_orgunit_group_sets[".filterFields"] = array();
$tdatadhis2_orgunit_group_sets[".requiredSearchFields"] = array();

$tdatadhis2_orgunit_group_sets[".googleLikeFields"] = array();
$tdatadhis2_orgunit_group_sets[".googleLikeFields"][] = "displayName";
$tdatadhis2_orgunit_group_sets[".googleLikeFields"][] = "id";




$tdatadhis2_orgunit_group_sets[".printerPageOrientation"] = 0;
$tdatadhis2_orgunit_group_sets[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunit_group_sets[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunit_group_sets[".geocodingEnabled"] = false;










$tdatadhis2_orgunit_group_sets[".pageSize"] = 20;

$tdatadhis2_orgunit_group_sets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunit_group_sets[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunit_group_sets[".orderindexes"] = array();


$tdatadhis2_orgunit_group_sets[".sqlHead"] = "";
$tdatadhis2_orgunit_group_sets[".sqlFrom"] = "";
$tdatadhis2_orgunit_group_sets[".sqlWhereExpr"] = "";
$tdatadhis2_orgunit_group_sets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunit_group_sets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunit_group_sets[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunit_group_sets[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunit_group_sets = array();
$tdatadhis2_orgunit_group_sets[".Keys"] = $tableKeysdhis2_orgunit_group_sets;


$tdatadhis2_orgunit_group_sets[".hideMobileList"] = array();




//	displayName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayName";
	$fdata["GoodName"] = "displayName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Group_Sets","displayName");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnitGroupSets/*/displayName";

	
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


	$tdatadhis2_orgunit_group_sets["displayName"] = $fdata;
		$tdatadhis2_orgunit_group_sets[".searchableFields"][] = "displayName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnit_Group_Sets","id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "organisationUnitGroupSets/*/id";

	
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


	$tdatadhis2_orgunit_group_sets["id"] = $fdata;
		$tdatadhis2_orgunit_group_sets[".searchableFields"][] = "id";


$tables_data["DHIS2_OrgUnit_Group_Sets"]=&$tdatadhis2_orgunit_group_sets;
$field_labels["DHIS2_OrgUnit_Group_Sets"] = &$fieldLabelsdhis2_orgunit_group_sets;
$fieldToolTips["DHIS2_OrgUnit_Group_Sets"] = &$fieldToolTipsdhis2_orgunit_group_sets;
$placeHolders["DHIS2_OrgUnit_Group_Sets"] = &$placeHoldersdhis2_orgunit_group_sets;
$page_titles["DHIS2_OrgUnit_Group_Sets"] = &$pageTitlesdhis2_orgunit_group_sets;


changeTextControlsToDate( "DHIS2_OrgUnit_Group_Sets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnit_Group_Sets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnit_Group_Sets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunit_group_sets_ops.php" ) );



	
																												;

		

$tdatadhis2_orgunit_group_sets[".sqlquery"] = $queryData_dhis2_orgunit_group_sets;



$tdatadhis2_orgunit_group_sets[".hasEvents"] = false;

?>