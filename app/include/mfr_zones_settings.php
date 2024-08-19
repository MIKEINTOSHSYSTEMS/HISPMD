<?php
$tdatamfr_zones = array();
$tdatamfr_zones[".searchableFields"] = array();
$tdatamfr_zones[".ShortName"] = "mfr_zones";
$tdatamfr_zones[".OwnerID"] = "";
$tdatamfr_zones[".OriginalTable"] = "MFR_Zones";


$tdatamfr_zones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_zones[".originalPagesByType"] = $tdatamfr_zones[".pagesByType"];
$tdatamfr_zones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_zones[".originalPages"] = $tdatamfr_zones[".pages"];
$tdatamfr_zones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_zones[".originalDefaultPages"] = $tdatamfr_zones[".defaultPages"];

//	field labels
$fieldLabelsmfr_zones = array();
$fieldToolTipsmfr_zones = array();
$pageTitlesmfr_zones = array();
$placeHoldersmfr_zones = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_zones["English"] = array();
	$fieldToolTipsmfr_zones["English"] = array();
	$placeHoldersmfr_zones["English"] = array();
	$pageTitlesmfr_zones["English"] = array();
	$fieldLabelsmfr_zones["English"]["regionId"] = "Region Id";
	$fieldToolTipsmfr_zones["English"]["regionId"] = "";
	$placeHoldersmfr_zones["English"]["regionId"] = "";
	$fieldLabelsmfr_zones["English"]["name"] = "Name";
	$fieldToolTipsmfr_zones["English"]["name"] = "";
	$placeHoldersmfr_zones["English"]["name"] = "";
	$fieldLabelsmfr_zones["English"]["id"] = "Id";
	$fieldToolTipsmfr_zones["English"]["id"] = "";
	$placeHoldersmfr_zones["English"]["id"] = "";
	if (count($fieldToolTipsmfr_zones["English"]))
		$tdatamfr_zones[".isUseToolTips"] = true;
}


	$tdatamfr_zones[".NCSearch"] = true;



$tdatamfr_zones[".shortTableName"] = "mfr_zones";
$tdatamfr_zones[".nSecOptions"] = 0;

$tdatamfr_zones[".mainTableOwnerID"] = "";
$tdatamfr_zones[".entityType"] = 7;
$tdatamfr_zones[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_zones[".strOriginalTableName"] = "MFR_Zones";

	



$tdatamfr_zones[".showAddInPopup"] = false;

$tdatamfr_zones[".showEditInPopup"] = false;

$tdatamfr_zones[".showViewInPopup"] = false;

$tdatamfr_zones[".listAjax"] = false;
//	temporary
//$tdatamfr_zones[".listAjax"] = false;

	$tdatamfr_zones[".audit"] = true;

	$tdatamfr_zones[".locking"] = true;


$pages = $tdatamfr_zones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_zones[".edit"] = true;
	$tdatamfr_zones[".afterEditAction"] = 1;
	$tdatamfr_zones[".closePopupAfterEdit"] = 1;
	$tdatamfr_zones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_zones[".add"] = true;
$tdatamfr_zones[".afterAddAction"] = 1;
$tdatamfr_zones[".closePopupAfterAdd"] = 1;
$tdatamfr_zones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_zones[".list"] = true;
}



$tdatamfr_zones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_zones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_zones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_zones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_zones[".printFriendly"] = true;
}



$tdatamfr_zones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_zones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_zones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_zones[".isUseAjaxSuggest"] = false;





$tdatamfr_zones[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_zones[".buttonsAdded"] = false;

$tdatamfr_zones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_zones[".isUseTimeForSearch"] = false;


$tdatamfr_zones[".badgeColor"] = "d2af80";


$tdatamfr_zones[".allSearchFields"] = array();
$tdatamfr_zones[".filterFields"] = array();
$tdatamfr_zones[".requiredSearchFields"] = array();

$tdatamfr_zones[".googleLikeFields"] = array();
$tdatamfr_zones[".googleLikeFields"][] = "regionId";
$tdatamfr_zones[".googleLikeFields"][] = "name";
$tdatamfr_zones[".googleLikeFields"][] = "id";




$tdatamfr_zones[".printerPageOrientation"] = 0;
$tdatamfr_zones[".nPrinterPageScale"] = 100;

$tdatamfr_zones[".nPrinterSplitRecords"] = 40;

$tdatamfr_zones[".geocodingEnabled"] = false;










$tdatamfr_zones[".pageSize"] = 20;

$tdatamfr_zones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_zones[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_zones[".orderindexes"] = array();


$tdatamfr_zones[".sqlHead"] = "";
$tdatamfr_zones[".sqlFrom"] = "";
$tdatamfr_zones[".sqlWhereExpr"] = "";
$tdatamfr_zones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_zones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_zones[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_zones[".highlightSearchResults"] = true;

$tableKeysmfr_zones = array();
$tdatamfr_zones[".Keys"] = $tableKeysmfr_zones;


$tdatamfr_zones[".hideMobileList"] = array();




//	regionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "regionId";
	$fdata["GoodName"] = "regionId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zones","regionId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "model/*/regionId";

	
		$fdata["FullName"] = "regionId";

	
	
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


	$tdatamfr_zones["regionId"] = $fdata;
		$tdatamfr_zones[".searchableFields"][] = "regionId";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zones","name");
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


	$tdatamfr_zones["name"] = $fdata;
		$tdatamfr_zones[".searchableFields"][] = "name";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Zones","id");
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


	$tdatamfr_zones["id"] = $fdata;
		$tdatamfr_zones[".searchableFields"][] = "id";


$tables_data["MFR_Zones"]=&$tdatamfr_zones;
$field_labels["MFR_Zones"] = &$fieldLabelsmfr_zones;
$fieldToolTips["MFR_Zones"] = &$fieldToolTipsmfr_zones;
$placeHolders["MFR_Zones"] = &$placeHoldersmfr_zones;
$page_titles["MFR_Zones"] = &$pageTitlesmfr_zones;


changeTextControlsToDate( "MFR_Zones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Zones"] = array();
//	MFR_Woredas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MFR_Woredas";
		$detailsParam["dOriginalTable"] = "MFR_Woredas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mfr_woredas";
	$detailsParam["dCaptionTable"] = GetTableCaption("MFR_Woredas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["MFR_Zones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MFR_Zones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MFR_Zones"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["MFR_Zones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MFR_Zones"][$dIndex]["detailKeys"][]="zoneId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Zones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Zones"][0] = $masterParams;
				$masterTablesData["MFR_Zones"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Zones"][0]["masterKeys"][]="id";
				$masterTablesData["MFR_Zones"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Zones"][0]["detailKeys"][]="regionId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_zones_ops.php" ) );



	
																												;

			

$tdatamfr_zones[".sqlquery"] = $queryData_mfr_zones;



$tdatamfr_zones[".hasEvents"] = false;

?>