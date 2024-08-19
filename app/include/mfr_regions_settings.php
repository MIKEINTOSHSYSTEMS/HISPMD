<?php
$tdatamfr_regions = array();
$tdatamfr_regions[".searchableFields"] = array();
$tdatamfr_regions[".ShortName"] = "mfr_regions";
$tdatamfr_regions[".OwnerID"] = "";
$tdatamfr_regions[".OriginalTable"] = "MFR_Regions";


$tdatamfr_regions[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_regions[".originalPagesByType"] = $tdatamfr_regions[".pagesByType"];
$tdatamfr_regions[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_regions[".originalPages"] = $tdatamfr_regions[".pages"];
$tdatamfr_regions[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_regions[".originalDefaultPages"] = $tdatamfr_regions[".defaultPages"];

//	field labels
$fieldLabelsmfr_regions = array();
$fieldToolTipsmfr_regions = array();
$pageTitlesmfr_regions = array();
$placeHoldersmfr_regions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_regions["English"] = array();
	$fieldToolTipsmfr_regions["English"] = array();
	$placeHoldersmfr_regions["English"] = array();
	$pageTitlesmfr_regions["English"] = array();
	$fieldLabelsmfr_regions["English"]["name"] = "Name";
	$fieldToolTipsmfr_regions["English"]["name"] = "";
	$placeHoldersmfr_regions["English"]["name"] = "";
	$fieldLabelsmfr_regions["English"]["id"] = "Id";
	$fieldToolTipsmfr_regions["English"]["id"] = "";
	$placeHoldersmfr_regions["English"]["id"] = "";
	if (count($fieldToolTipsmfr_regions["English"]))
		$tdatamfr_regions[".isUseToolTips"] = true;
}


	$tdatamfr_regions[".NCSearch"] = true;



$tdatamfr_regions[".shortTableName"] = "mfr_regions";
$tdatamfr_regions[".nSecOptions"] = 0;

$tdatamfr_regions[".mainTableOwnerID"] = "";
$tdatamfr_regions[".entityType"] = 7;
$tdatamfr_regions[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_regions[".strOriginalTableName"] = "MFR_Regions";

	



$tdatamfr_regions[".showAddInPopup"] = false;

$tdatamfr_regions[".showEditInPopup"] = false;

$tdatamfr_regions[".showViewInPopup"] = false;

$tdatamfr_regions[".listAjax"] = false;
//	temporary
//$tdatamfr_regions[".listAjax"] = false;

	$tdatamfr_regions[".audit"] = true;

	$tdatamfr_regions[".locking"] = true;


$pages = $tdatamfr_regions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_regions[".edit"] = true;
	$tdatamfr_regions[".afterEditAction"] = 1;
	$tdatamfr_regions[".closePopupAfterEdit"] = 1;
	$tdatamfr_regions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_regions[".add"] = true;
$tdatamfr_regions[".afterAddAction"] = 1;
$tdatamfr_regions[".closePopupAfterAdd"] = 1;
$tdatamfr_regions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_regions[".list"] = true;
}



$tdatamfr_regions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_regions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_regions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_regions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_regions[".printFriendly"] = true;
}



$tdatamfr_regions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_regions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_regions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_regions[".isUseAjaxSuggest"] = false;





$tdatamfr_regions[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_regions[".buttonsAdded"] = false;

$tdatamfr_regions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_regions[".isUseTimeForSearch"] = false;


$tdatamfr_regions[".badgeColor"] = "6B8E23";


$tdatamfr_regions[".allSearchFields"] = array();
$tdatamfr_regions[".filterFields"] = array();
$tdatamfr_regions[".requiredSearchFields"] = array();

$tdatamfr_regions[".googleLikeFields"] = array();
$tdatamfr_regions[".googleLikeFields"][] = "name";
$tdatamfr_regions[".googleLikeFields"][] = "id";




$tdatamfr_regions[".printerPageOrientation"] = 0;
$tdatamfr_regions[".nPrinterPageScale"] = 100;

$tdatamfr_regions[".nPrinterSplitRecords"] = 40;

$tdatamfr_regions[".geocodingEnabled"] = false;










$tdatamfr_regions[".pageSize"] = 20;

$tdatamfr_regions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_regions[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_regions[".orderindexes"] = array();


$tdatamfr_regions[".sqlHead"] = "";
$tdatamfr_regions[".sqlFrom"] = "";
$tdatamfr_regions[".sqlWhereExpr"] = "";
$tdatamfr_regions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_regions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_regions[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_regions[".highlightSearchResults"] = true;

$tableKeysmfr_regions = array();
$tdatamfr_regions[".Keys"] = $tableKeysmfr_regions;


$tdatamfr_regions[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Regions","name");
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


	$tdatamfr_regions["name"] = $fdata;
		$tdatamfr_regions[".searchableFields"][] = "name";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Regions","id");
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


	$tdatamfr_regions["id"] = $fdata;
		$tdatamfr_regions[".searchableFields"][] = "id";


$tables_data["MFR_Regions"]=&$tdatamfr_regions;
$field_labels["MFR_Regions"] = &$fieldLabelsmfr_regions;
$fieldToolTips["MFR_Regions"] = &$fieldToolTipsmfr_regions;
$placeHolders["MFR_Regions"] = &$placeHoldersmfr_regions;
$page_titles["MFR_Regions"] = &$pageTitlesmfr_regions;


changeTextControlsToDate( "MFR_Regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Regions"] = array();
//	MFR_Zones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MFR_Zones";
		$detailsParam["dOriginalTable"] = "MFR_Zones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mfr_zones";
	$detailsParam["dCaptionTable"] = GetTableCaption("MFR_Zones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["MFR_Regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MFR_Regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MFR_Regions"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["MFR_Regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MFR_Regions"][$dIndex]["detailKeys"][]="regionId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_regions_ops.php" ) );



	
																												;

		

$tdatamfr_regions[".sqlquery"] = $queryData_mfr_regions;



$tdatamfr_regions[".hasEvents"] = false;

?>