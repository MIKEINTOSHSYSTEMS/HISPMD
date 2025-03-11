<?php
$tdatadhis2_eidm_hc = array();
$tdatadhis2_eidm_hc[".searchableFields"] = array();
$tdatadhis2_eidm_hc[".ShortName"] = "dhis2_eidm_hc";
$tdatadhis2_eidm_hc[".OwnerID"] = "";
$tdatadhis2_eidm_hc[".OriginalTable"] = "DHIS2_EIDM_HC";


$tdatadhis2_eidm_hc[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_eidm_hc[".originalPagesByType"] = $tdatadhis2_eidm_hc[".pagesByType"];
$tdatadhis2_eidm_hc[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_eidm_hc[".originalPages"] = $tdatadhis2_eidm_hc[".pages"];
$tdatadhis2_eidm_hc[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_eidm_hc[".originalDefaultPages"] = $tdatadhis2_eidm_hc[".defaultPages"];

//	field labels
$fieldLabelsdhis2_eidm_hc = array();
$fieldToolTipsdhis2_eidm_hc = array();
$pageTitlesdhis2_eidm_hc = array();
$placeHoldersdhis2_eidm_hc = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_eidm_hc["English"] = array();
	$fieldToolTipsdhis2_eidm_hc["English"] = array();
	$placeHoldersdhis2_eidm_hc["English"] = array();
	$pageTitlesdhis2_eidm_hc["English"] = array();
	$fieldLabelsdhis2_eidm_hc["English"]["dx"] = "Dx";
	$fieldToolTipsdhis2_eidm_hc["English"]["dx"] = "";
	$placeHoldersdhis2_eidm_hc["English"]["dx"] = "";
	$fieldLabelsdhis2_eidm_hc["English"]["ou"] = "Ou";
	$fieldToolTipsdhis2_eidm_hc["English"]["ou"] = "";
	$placeHoldersdhis2_eidm_hc["English"]["ou"] = "";
	$fieldLabelsdhis2_eidm_hc["English"]["period"] = "Period";
	$fieldToolTipsdhis2_eidm_hc["English"]["period"] = "";
	$placeHoldersdhis2_eidm_hc["English"]["period"] = "";
	$fieldLabelsdhis2_eidm_hc["English"]["value"] = "Value";
	$fieldToolTipsdhis2_eidm_hc["English"]["value"] = "";
	$placeHoldersdhis2_eidm_hc["English"]["value"] = "";
	if (count($fieldToolTipsdhis2_eidm_hc["English"]))
		$tdatadhis2_eidm_hc[".isUseToolTips"] = true;
}


	$tdatadhis2_eidm_hc[".NCSearch"] = true;



$tdatadhis2_eidm_hc[".shortTableName"] = "dhis2_eidm_hc";
$tdatadhis2_eidm_hc[".nSecOptions"] = 0;

$tdatadhis2_eidm_hc[".mainTableOwnerID"] = "";
$tdatadhis2_eidm_hc[".entityType"] = 7;
$tdatadhis2_eidm_hc[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_eidm_hc[".strOriginalTableName"] = "DHIS2_EIDM_HC";

	



$tdatadhis2_eidm_hc[".showAddInPopup"] = false;

$tdatadhis2_eidm_hc[".showEditInPopup"] = false;

$tdatadhis2_eidm_hc[".showViewInPopup"] = false;

$tdatadhis2_eidm_hc[".listAjax"] = false;
//	temporary
//$tdatadhis2_eidm_hc[".listAjax"] = false;

	$tdatadhis2_eidm_hc[".audit"] = false;

	$tdatadhis2_eidm_hc[".locking"] = false;


$pages = $tdatadhis2_eidm_hc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_eidm_hc[".edit"] = true;
	$tdatadhis2_eidm_hc[".afterEditAction"] = 1;
	$tdatadhis2_eidm_hc[".closePopupAfterEdit"] = 1;
	$tdatadhis2_eidm_hc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_eidm_hc[".add"] = true;
$tdatadhis2_eidm_hc[".afterAddAction"] = 1;
$tdatadhis2_eidm_hc[".closePopupAfterAdd"] = 1;
$tdatadhis2_eidm_hc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_eidm_hc[".list"] = true;
}



$tdatadhis2_eidm_hc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_eidm_hc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_eidm_hc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_eidm_hc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_eidm_hc[".printFriendly"] = true;
}



$tdatadhis2_eidm_hc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_eidm_hc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_eidm_hc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_eidm_hc[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_eidm_hc[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_eidm_hc[".buttonsAdded"] = false;

$tdatadhis2_eidm_hc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_eidm_hc[".isUseTimeForSearch"] = false;


$tdatadhis2_eidm_hc[".badgeColor"] = "CD5C5C";


$tdatadhis2_eidm_hc[".allSearchFields"] = array();
$tdatadhis2_eidm_hc[".filterFields"] = array();
$tdatadhis2_eidm_hc[".requiredSearchFields"] = array();

$tdatadhis2_eidm_hc[".googleLikeFields"] = array();
$tdatadhis2_eidm_hc[".googleLikeFields"][] = "dx";
$tdatadhis2_eidm_hc[".googleLikeFields"][] = "ou";
$tdatadhis2_eidm_hc[".googleLikeFields"][] = "period";
$tdatadhis2_eidm_hc[".googleLikeFields"][] = "value";




$tdatadhis2_eidm_hc[".printerPageOrientation"] = 0;
$tdatadhis2_eidm_hc[".nPrinterPageScale"] = 100;

$tdatadhis2_eidm_hc[".nPrinterSplitRecords"] = 40;

$tdatadhis2_eidm_hc[".geocodingEnabled"] = false;




$tdatadhis2_eidm_hc[".isDisplayLoading"] = true;






$tdatadhis2_eidm_hc[".pageSize"] = 20;

$tdatadhis2_eidm_hc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_eidm_hc[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_eidm_hc[".orderindexes"] = array();


$tdatadhis2_eidm_hc[".sqlHead"] = "";
$tdatadhis2_eidm_hc[".sqlFrom"] = "";
$tdatadhis2_eidm_hc[".sqlWhereExpr"] = "";
$tdatadhis2_eidm_hc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_eidm_hc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_eidm_hc[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_eidm_hc[".highlightSearchResults"] = true;

$tableKeysdhis2_eidm_hc = array();
$tdatadhis2_eidm_hc[".Keys"] = $tableKeysdhis2_eidm_hc;


$tdatadhis2_eidm_hc[".hideMobileList"] = array();




//	dx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dx";
	$fdata["GoodName"] = "dx";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_EIDM_HC","dx");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/dx";

	
		$fdata["FullName"] = "dx";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_eidm_hc["dx"] = $fdata;
		$tdatadhis2_eidm_hc[".searchableFields"][] = "dx";
//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_EIDM_HC","ou");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/ou";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_eidm_hc["ou"] = $fdata;
		$tdatadhis2_eidm_hc[".searchableFields"][] = "ou";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_EIDM_HC","period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/period";

	
		$fdata["FullName"] = "period";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_eidm_hc["period"] = $fdata;
		$tdatadhis2_eidm_hc[".searchableFields"][] = "period";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_EIDM_HC","value");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/value";

	
		$fdata["FullName"] = "value";

	
	
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


	$tdatadhis2_eidm_hc["value"] = $fdata;
		$tdatadhis2_eidm_hc[".searchableFields"][] = "value";


$tables_data["DHIS2_EIDM_HC"]=&$tdatadhis2_eidm_hc;
$field_labels["DHIS2_EIDM_HC"] = &$fieldLabelsdhis2_eidm_hc;
$fieldToolTips["DHIS2_EIDM_HC"] = &$fieldToolTipsdhis2_eidm_hc;
$placeHolders["DHIS2_EIDM_HC"] = &$placeHoldersdhis2_eidm_hc;
$page_titles["DHIS2_EIDM_HC"] = &$pageTitlesdhis2_eidm_hc;


changeTextControlsToDate( "DHIS2_EIDM_HC" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_EIDM_HC"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_EIDM_HC"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_eidm_hc_ops.php" ) );



	
																												;

				

$tdatadhis2_eidm_hc[".sqlquery"] = $queryData_dhis2_eidm_hc;



$tdatadhis2_eidm_hc[".hasEvents"] = false;

?>