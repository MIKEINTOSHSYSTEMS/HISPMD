<?php
$tdatadhis2_aio_orgunit = array();
$tdatadhis2_aio_orgunit[".searchableFields"] = array();
$tdatadhis2_aio_orgunit[".ShortName"] = "dhis2_aio_orgunit";
$tdatadhis2_aio_orgunit[".OwnerID"] = "";
$tdatadhis2_aio_orgunit[".OriginalTable"] = "DHIS2_AIO_OrgUnit";


$tdatadhis2_aio_orgunit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_aio_orgunit[".originalPagesByType"] = $tdatadhis2_aio_orgunit[".pagesByType"];
$tdatadhis2_aio_orgunit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_aio_orgunit[".originalPages"] = $tdatadhis2_aio_orgunit[".pages"];
$tdatadhis2_aio_orgunit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_aio_orgunit[".originalDefaultPages"] = $tdatadhis2_aio_orgunit[".defaultPages"];

//	field labels
$fieldLabelsdhis2_aio_orgunit = array();
$fieldToolTipsdhis2_aio_orgunit = array();
$pageTitlesdhis2_aio_orgunit = array();
$placeHoldersdhis2_aio_orgunit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_aio_orgunit["English"] = array();
	$fieldToolTipsdhis2_aio_orgunit["English"] = array();
	$placeHoldersdhis2_aio_orgunit["English"] = array();
	$pageTitlesdhis2_aio_orgunit["English"] = array();
	$fieldLabelsdhis2_aio_orgunit["English"]["rows"] = "Rows";
	$fieldToolTipsdhis2_aio_orgunit["English"]["rows"] = "";
	$placeHoldersdhis2_aio_orgunit["English"]["rows"] = "";
	$fieldLabelsdhis2_aio_orgunit["English"]["column"] = "Organisation Unit Group Sets";
	$fieldToolTipsdhis2_aio_orgunit["English"]["column"] = "";
	$placeHoldersdhis2_aio_orgunit["English"]["column"] = "";
	$fieldLabelsdhis2_aio_orgunit["English"]["name"] = "Organisation Units";
	$fieldToolTipsdhis2_aio_orgunit["English"]["name"] = "";
	$placeHoldersdhis2_aio_orgunit["English"]["name"] = "";
	if (count($fieldToolTipsdhis2_aio_orgunit["English"]))
		$tdatadhis2_aio_orgunit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_aio_orgunit["Amharic"] = array();
	$fieldToolTipsdhis2_aio_orgunit["Amharic"] = array();
	$placeHoldersdhis2_aio_orgunit["Amharic"] = array();
	$pageTitlesdhis2_aio_orgunit["Amharic"] = array();
	$fieldLabelsdhis2_aio_orgunit["Amharic"]["column"] = "የድርጅት ክፍል ቡድን ስብስቦች";
	$fieldToolTipsdhis2_aio_orgunit["Amharic"]["column"] = "";
	$placeHoldersdhis2_aio_orgunit["Amharic"]["column"] = "";
	$fieldLabelsdhis2_aio_orgunit["Amharic"]["name"] = "የድርጅት ክፍሎች";
	$fieldToolTipsdhis2_aio_orgunit["Amharic"]["name"] = "";
	$placeHoldersdhis2_aio_orgunit["Amharic"]["name"] = "";
	$fieldLabelsdhis2_aio_orgunit["Amharic"]["rows"] = "ረድፎች";
	$fieldToolTipsdhis2_aio_orgunit["Amharic"]["rows"] = "";
	$placeHoldersdhis2_aio_orgunit["Amharic"]["rows"] = "";
	if (count($fieldToolTipsdhis2_aio_orgunit["Amharic"]))
		$tdatadhis2_aio_orgunit[".isUseToolTips"] = true;
}


	$tdatadhis2_aio_orgunit[".NCSearch"] = true;



$tdatadhis2_aio_orgunit[".shortTableName"] = "dhis2_aio_orgunit";
$tdatadhis2_aio_orgunit[".nSecOptions"] = 0;

$tdatadhis2_aio_orgunit[".mainTableOwnerID"] = "";
$tdatadhis2_aio_orgunit[".entityType"] = 7;
$tdatadhis2_aio_orgunit[".connId"] = "hispmdathispmdmerqconsultdhis2";


$tdatadhis2_aio_orgunit[".strOriginalTableName"] = "DHIS2_AIO_OrgUnit";

	



$tdatadhis2_aio_orgunit[".showAddInPopup"] = false;

$tdatadhis2_aio_orgunit[".showEditInPopup"] = false;

$tdatadhis2_aio_orgunit[".showViewInPopup"] = false;

$tdatadhis2_aio_orgunit[".listAjax"] = false;
//	temporary
//$tdatadhis2_aio_orgunit[".listAjax"] = false;

	$tdatadhis2_aio_orgunit[".audit"] = true;

	$tdatadhis2_aio_orgunit[".locking"] = false;


$pages = $tdatadhis2_aio_orgunit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_aio_orgunit[".edit"] = true;
	$tdatadhis2_aio_orgunit[".afterEditAction"] = 1;
	$tdatadhis2_aio_orgunit[".closePopupAfterEdit"] = 1;
	$tdatadhis2_aio_orgunit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_aio_orgunit[".add"] = true;
$tdatadhis2_aio_orgunit[".afterAddAction"] = 1;
$tdatadhis2_aio_orgunit[".closePopupAfterAdd"] = 1;
$tdatadhis2_aio_orgunit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_aio_orgunit[".list"] = true;
}



$tdatadhis2_aio_orgunit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_aio_orgunit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_aio_orgunit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_aio_orgunit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_aio_orgunit[".printFriendly"] = true;
}



$tdatadhis2_aio_orgunit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_aio_orgunit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_aio_orgunit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_aio_orgunit[".isUseAjaxSuggest"] = false;





$tdatadhis2_aio_orgunit[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_aio_orgunit[".buttonsAdded"] = false;

$tdatadhis2_aio_orgunit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_aio_orgunit[".isUseTimeForSearch"] = false;


$tdatadhis2_aio_orgunit[".badgeColor"] = "6DA5C8";


$tdatadhis2_aio_orgunit[".allSearchFields"] = array();
$tdatadhis2_aio_orgunit[".filterFields"] = array();
$tdatadhis2_aio_orgunit[".requiredSearchFields"] = array();

$tdatadhis2_aio_orgunit[".googleLikeFields"] = array();
$tdatadhis2_aio_orgunit[".googleLikeFields"][] = "column";
$tdatadhis2_aio_orgunit[".googleLikeFields"][] = "name";




$tdatadhis2_aio_orgunit[".printerPageOrientation"] = 0;
$tdatadhis2_aio_orgunit[".nPrinterPageScale"] = 100;

$tdatadhis2_aio_orgunit[".nPrinterSplitRecords"] = 40;

$tdatadhis2_aio_orgunit[".geocodingEnabled"] = false;






$tdatadhis2_aio_orgunit[".searchIsRequiredForFilters"] = true;

$tdatadhis2_aio_orgunit[".noRecordsFirstPage"] = true;



$tdatadhis2_aio_orgunit[".pageSize"] = 20;

$tdatadhis2_aio_orgunit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_aio_orgunit[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_aio_orgunit[".orderindexes"] = array();


$tdatadhis2_aio_orgunit[".sqlHead"] = "";
$tdatadhis2_aio_orgunit[".sqlFrom"] = "";
$tdatadhis2_aio_orgunit[".sqlWhereExpr"] = "";
$tdatadhis2_aio_orgunit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_aio_orgunit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_aio_orgunit[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_aio_orgunit[".highlightSearchResults"] = true;

$tableKeysdhis2_aio_orgunit = array();
$tdatadhis2_aio_orgunit[".Keys"] = $tableKeysdhis2_aio_orgunit;


$tdatadhis2_aio_orgunit[".hideMobileList"] = array();




//	column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "column";
	$fdata["GoodName"] = "column";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AIO_OrgUnit","column");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "headers/*/column";

	
		$fdata["FullName"] = "column";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_OrgUnit_Group_Sets";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadhis2_aio_orgunit["column"] = $fdata;
		$tdatadhis2_aio_orgunit[".searchableFields"][] = "column";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AIO_OrgUnit","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "headers/*/name";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Organisation_Units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadhis2_aio_orgunit["name"] = $fdata;
		$tdatadhis2_aio_orgunit[".searchableFields"][] = "name";
//	rows
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rows";
	$fdata["GoodName"] = "rows";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_AIO_OrgUnit","rows");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/*";

	
		$fdata["FullName"] = "rows";

	
	
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


	$tdatadhis2_aio_orgunit["rows"] = $fdata;
		$tdatadhis2_aio_orgunit[".searchableFields"][] = "rows";


$tables_data["DHIS2_AIO_OrgUnit"]=&$tdatadhis2_aio_orgunit;
$field_labels["DHIS2_AIO_OrgUnit"] = &$fieldLabelsdhis2_aio_orgunit;
$fieldToolTips["DHIS2_AIO_OrgUnit"] = &$fieldToolTipsdhis2_aio_orgunit;
$placeHolders["DHIS2_AIO_OrgUnit"] = &$placeHoldersdhis2_aio_orgunit;
$page_titles["DHIS2_AIO_OrgUnit"] = &$pageTitlesdhis2_aio_orgunit;


changeTextControlsToDate( "DHIS2_AIO_OrgUnit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_AIO_OrgUnit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_AIO_OrgUnit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_aio_orgunit_ops.php" ) );



	
																												;

			

$tdatadhis2_aio_orgunit[".sqlquery"] = $queryData_dhis2_aio_orgunit;



$tdatadhis2_aio_orgunit[".hasEvents"] = false;

?>