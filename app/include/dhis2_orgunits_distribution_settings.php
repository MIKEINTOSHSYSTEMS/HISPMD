<?php
$tdatadhis2_orgunits_distribution = array();
$tdatadhis2_orgunits_distribution[".searchableFields"] = array();
$tdatadhis2_orgunits_distribution[".ShortName"] = "dhis2_orgunits_distribution";
$tdatadhis2_orgunits_distribution[".OwnerID"] = "";
$tdatadhis2_orgunits_distribution[".OriginalTable"] = "DHIS2_OrgUnits_Distribution";


$tdatadhis2_orgunits_distribution[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_orgunits_distribution[".originalPagesByType"] = $tdatadhis2_orgunits_distribution[".pagesByType"];
$tdatadhis2_orgunits_distribution[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_orgunits_distribution[".originalPages"] = $tdatadhis2_orgunits_distribution[".pages"];
$tdatadhis2_orgunits_distribution[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_orgunits_distribution[".originalDefaultPages"] = $tdatadhis2_orgunits_distribution[".defaultPages"];

//	field labels
$fieldLabelsdhis2_orgunits_distribution = array();
$fieldToolTipsdhis2_orgunits_distribution = array();
$pageTitlesdhis2_orgunits_distribution = array();
$placeHoldersdhis2_orgunits_distribution = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_orgunits_distribution["English"] = array();
	$fieldToolTipsdhis2_orgunits_distribution["English"] = array();
	$placeHoldersdhis2_orgunits_distribution["English"] = array();
	$pageTitlesdhis2_orgunits_distribution["English"] = array();
	$fieldLabelsdhis2_orgunits_distribution["English"]["ougs"] = "Ougs";
	$fieldToolTipsdhis2_orgunits_distribution["English"]["ougs"] = "";
	$placeHoldersdhis2_orgunits_distribution["English"]["ougs"] = "";
	$fieldLabelsdhis2_orgunits_distribution["English"]["group"] = "Group";
	$fieldToolTipsdhis2_orgunits_distribution["English"]["group"] = "";
	$placeHoldersdhis2_orgunits_distribution["English"]["group"] = "";
	$fieldLabelsdhis2_orgunits_distribution["English"]["count"] = "Count";
	$fieldToolTipsdhis2_orgunits_distribution["English"]["count"] = "";
	$placeHoldersdhis2_orgunits_distribution["English"]["count"] = "";
	$fieldLabelsdhis2_orgunits_distribution["English"]["ou"] = "Ou";
	$fieldToolTipsdhis2_orgunits_distribution["English"]["ou"] = "";
	$placeHoldersdhis2_orgunits_distribution["English"]["ou"] = "";
	if (count($fieldToolTipsdhis2_orgunits_distribution["English"]))
		$tdatadhis2_orgunits_distribution[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_orgunits_distribution["Amharic"] = array();
	$fieldToolTipsdhis2_orgunits_distribution["Amharic"] = array();
	$placeHoldersdhis2_orgunits_distribution["Amharic"] = array();
	$pageTitlesdhis2_orgunits_distribution["Amharic"] = array();
	$fieldLabelsdhis2_orgunits_distribution["Amharic"]["ou"] = "የአስተዳደር ክፍል";
	$fieldToolTipsdhis2_orgunits_distribution["Amharic"]["ou"] = "";
	$placeHoldersdhis2_orgunits_distribution["Amharic"]["ou"] = "";
	$fieldLabelsdhis2_orgunits_distribution["Amharic"]["ougs"] = "የአስተዳደር ክፍል ቡድን ስብስብ";
	$fieldToolTipsdhis2_orgunits_distribution["Amharic"]["ougs"] = "";
	$placeHoldersdhis2_orgunits_distribution["Amharic"]["ougs"] = "";
	$fieldLabelsdhis2_orgunits_distribution["Amharic"]["group"] = "ቡድን";
	$fieldToolTipsdhis2_orgunits_distribution["Amharic"]["group"] = "";
	$placeHoldersdhis2_orgunits_distribution["Amharic"]["group"] = "";
	$fieldLabelsdhis2_orgunits_distribution["Amharic"]["count"] = "ቁጠር";
	$fieldToolTipsdhis2_orgunits_distribution["Amharic"]["count"] = "";
	$placeHoldersdhis2_orgunits_distribution["Amharic"]["count"] = "";
	if (count($fieldToolTipsdhis2_orgunits_distribution["Amharic"]))
		$tdatadhis2_orgunits_distribution[".isUseToolTips"] = true;
}


	$tdatadhis2_orgunits_distribution[".NCSearch"] = true;



$tdatadhis2_orgunits_distribution[".shortTableName"] = "dhis2_orgunits_distribution";
$tdatadhis2_orgunits_distribution[".nSecOptions"] = 0;

$tdatadhis2_orgunits_distribution[".mainTableOwnerID"] = "";
$tdatadhis2_orgunits_distribution[".entityType"] = 7;
$tdatadhis2_orgunits_distribution[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_orgunits_distribution[".strOriginalTableName"] = "DHIS2_OrgUnits_Distribution";

	



$tdatadhis2_orgunits_distribution[".showAddInPopup"] = false;

$tdatadhis2_orgunits_distribution[".showEditInPopup"] = false;

$tdatadhis2_orgunits_distribution[".showViewInPopup"] = false;

$tdatadhis2_orgunits_distribution[".listAjax"] = false;
//	temporary
//$tdatadhis2_orgunits_distribution[".listAjax"] = false;

	$tdatadhis2_orgunits_distribution[".audit"] = false;

	$tdatadhis2_orgunits_distribution[".locking"] = false;


$pages = $tdatadhis2_orgunits_distribution[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_orgunits_distribution[".edit"] = true;
	$tdatadhis2_orgunits_distribution[".afterEditAction"] = 1;
	$tdatadhis2_orgunits_distribution[".closePopupAfterEdit"] = 1;
	$tdatadhis2_orgunits_distribution[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_orgunits_distribution[".add"] = true;
$tdatadhis2_orgunits_distribution[".afterAddAction"] = 1;
$tdatadhis2_orgunits_distribution[".closePopupAfterAdd"] = 1;
$tdatadhis2_orgunits_distribution[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_orgunits_distribution[".list"] = true;
}



$tdatadhis2_orgunits_distribution[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_orgunits_distribution[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_orgunits_distribution[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_orgunits_distribution[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_orgunits_distribution[".printFriendly"] = true;
}



$tdatadhis2_orgunits_distribution[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_orgunits_distribution[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_orgunits_distribution[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_orgunits_distribution[".isUseAjaxSuggest"] = false;





$tdatadhis2_orgunits_distribution[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_orgunits_distribution[".buttonsAdded"] = false;

$tdatadhis2_orgunits_distribution[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_orgunits_distribution[".isUseTimeForSearch"] = false;


$tdatadhis2_orgunits_distribution[".badgeColor"] = "E07878";


$tdatadhis2_orgunits_distribution[".allSearchFields"] = array();
$tdatadhis2_orgunits_distribution[".filterFields"] = array();
$tdatadhis2_orgunits_distribution[".requiredSearchFields"] = array();

$tdatadhis2_orgunits_distribution[".googleLikeFields"] = array();
$tdatadhis2_orgunits_distribution[".googleLikeFields"][] = "ou";
$tdatadhis2_orgunits_distribution[".googleLikeFields"][] = "ougs";
$tdatadhis2_orgunits_distribution[".googleLikeFields"][] = "group";




$tdatadhis2_orgunits_distribution[".printerPageOrientation"] = 0;
$tdatadhis2_orgunits_distribution[".nPrinterPageScale"] = 100;

$tdatadhis2_orgunits_distribution[".nPrinterSplitRecords"] = 40;

$tdatadhis2_orgunits_distribution[".geocodingEnabled"] = false;




$tdatadhis2_orgunits_distribution[".isDisplayLoading"] = true;






$tdatadhis2_orgunits_distribution[".pageSize"] = 20;

$tdatadhis2_orgunits_distribution[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_orgunits_distribution[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_orgunits_distribution[".orderindexes"] = array();


$tdatadhis2_orgunits_distribution[".sqlHead"] = "";
$tdatadhis2_orgunits_distribution[".sqlFrom"] = "";
$tdatadhis2_orgunits_distribution[".sqlWhereExpr"] = "";
$tdatadhis2_orgunits_distribution[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_orgunits_distribution[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_orgunits_distribution[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_orgunits_distribution[".highlightSearchResults"] = true;

$tableKeysdhis2_orgunits_distribution = array();
$tdatadhis2_orgunits_distribution[".Keys"] = $tableKeysdhis2_orgunits_distribution;


$tdatadhis2_orgunits_distribution[".hideMobileList"] = array();




//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnits_Distribution","ou");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/orgunit";

	
		$fdata["FullName"] = "ou";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "count";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_orgunits_distribution["ou"] = $fdata;
		$tdatadhis2_orgunits_distribution[".searchableFields"][] = "ou";
//	ougs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ougs";
	$fdata["GoodName"] = "ougs";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnits_Distribution","ougs");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/ougs";

	
		$fdata["FullName"] = "ougs";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "count";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_orgunits_distribution["ougs"] = $fdata;
		$tdatadhis2_orgunits_distribution[".searchableFields"][] = "ougs";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnits_Distribution","group");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/group";

	
		$fdata["FullName"] = "group";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "count";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_orgunits_distribution["group"] = $fdata;
		$tdatadhis2_orgunits_distribution[".searchableFields"][] = "group";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_OrgUnits_Distribution","count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/count";

	
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


	$tdatadhis2_orgunits_distribution["count"] = $fdata;
		$tdatadhis2_orgunits_distribution[".searchableFields"][] = "count";


$tables_data["DHIS2_OrgUnits_Distribution"]=&$tdatadhis2_orgunits_distribution;
$field_labels["DHIS2_OrgUnits_Distribution"] = &$fieldLabelsdhis2_orgunits_distribution;
$fieldToolTips["DHIS2_OrgUnits_Distribution"] = &$fieldToolTipsdhis2_orgunits_distribution;
$placeHolders["DHIS2_OrgUnits_Distribution"] = &$placeHoldersdhis2_orgunits_distribution;
$page_titles["DHIS2_OrgUnits_Distribution"] = &$pageTitlesdhis2_orgunits_distribution;


changeTextControlsToDate( "DHIS2_OrgUnits_Distribution" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_OrgUnits_Distribution"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_OrgUnits_Distribution"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_orgunits_distribution_ops.php" ) );



	
																												;

				

$tdatadhis2_orgunits_distribution[".sqlquery"] = $queryData_dhis2_orgunits_distribution;



include_once(getabspath("include/dhis2_orgunits_distribution_events.php"));
$tdatadhis2_orgunits_distribution[".hasEvents"] = true;

?>