<?php
$tdatamfr_woredas = array();
$tdatamfr_woredas[".searchableFields"] = array();
$tdatamfr_woredas[".ShortName"] = "mfr_woredas";
$tdatamfr_woredas[".OwnerID"] = "";
$tdatamfr_woredas[".OriginalTable"] = "MFR_Woredas";


$tdatamfr_woredas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_woredas[".originalPagesByType"] = $tdatamfr_woredas[".pagesByType"];
$tdatamfr_woredas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_woredas[".originalPages"] = $tdatamfr_woredas[".pages"];
$tdatamfr_woredas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_woredas[".originalDefaultPages"] = $tdatamfr_woredas[".defaultPages"];

//	field labels
$fieldLabelsmfr_woredas = array();
$fieldToolTipsmfr_woredas = array();
$pageTitlesmfr_woredas = array();
$placeHoldersmfr_woredas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_woredas["English"] = array();
	$fieldToolTipsmfr_woredas["English"] = array();
	$placeHoldersmfr_woredas["English"] = array();
	$pageTitlesmfr_woredas["English"] = array();
	$fieldLabelsmfr_woredas["English"]["zoneId"] = "Zone Id";
	$fieldToolTipsmfr_woredas["English"]["zoneId"] = "";
	$placeHoldersmfr_woredas["English"]["zoneId"] = "";
	$fieldLabelsmfr_woredas["English"]["name"] = "Name";
	$fieldToolTipsmfr_woredas["English"]["name"] = "";
	$placeHoldersmfr_woredas["English"]["name"] = "";
	$fieldLabelsmfr_woredas["English"]["id"] = "Id";
	$fieldToolTipsmfr_woredas["English"]["id"] = "";
	$placeHoldersmfr_woredas["English"]["id"] = "";
	if (count($fieldToolTipsmfr_woredas["English"]))
		$tdatamfr_woredas[".isUseToolTips"] = true;
}


	$tdatamfr_woredas[".NCSearch"] = true;



$tdatamfr_woredas[".shortTableName"] = "mfr_woredas";
$tdatamfr_woredas[".nSecOptions"] = 0;

$tdatamfr_woredas[".mainTableOwnerID"] = "";
$tdatamfr_woredas[".entityType"] = 7;
$tdatamfr_woredas[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_woredas[".strOriginalTableName"] = "MFR_Woredas";

	



$tdatamfr_woredas[".showAddInPopup"] = false;

$tdatamfr_woredas[".showEditInPopup"] = false;

$tdatamfr_woredas[".showViewInPopup"] = false;

$tdatamfr_woredas[".listAjax"] = false;
//	temporary
//$tdatamfr_woredas[".listAjax"] = false;

	$tdatamfr_woredas[".audit"] = true;

	$tdatamfr_woredas[".locking"] = false;


$pages = $tdatamfr_woredas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_woredas[".edit"] = true;
	$tdatamfr_woredas[".afterEditAction"] = 1;
	$tdatamfr_woredas[".closePopupAfterEdit"] = 1;
	$tdatamfr_woredas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_woredas[".add"] = true;
$tdatamfr_woredas[".afterAddAction"] = 1;
$tdatamfr_woredas[".closePopupAfterAdd"] = 1;
$tdatamfr_woredas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_woredas[".list"] = true;
}



$tdatamfr_woredas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_woredas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_woredas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_woredas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_woredas[".printFriendly"] = true;
}



$tdatamfr_woredas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_woredas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_woredas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_woredas[".isUseAjaxSuggest"] = false;





$tdatamfr_woredas[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_woredas[".buttonsAdded"] = false;

$tdatamfr_woredas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_woredas[".isUseTimeForSearch"] = false;


$tdatamfr_woredas[".badgeColor"] = "db7093";


$tdatamfr_woredas[".allSearchFields"] = array();
$tdatamfr_woredas[".filterFields"] = array();
$tdatamfr_woredas[".requiredSearchFields"] = array();

$tdatamfr_woredas[".googleLikeFields"] = array();
$tdatamfr_woredas[".googleLikeFields"][] = "zoneId";
$tdatamfr_woredas[".googleLikeFields"][] = "name";
$tdatamfr_woredas[".googleLikeFields"][] = "id";




$tdatamfr_woredas[".printerPageOrientation"] = 0;
$tdatamfr_woredas[".nPrinterPageScale"] = 100;

$tdatamfr_woredas[".nPrinterSplitRecords"] = 40;

$tdatamfr_woredas[".geocodingEnabled"] = false;










$tdatamfr_woredas[".pageSize"] = 20;

$tdatamfr_woredas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_woredas[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_woredas[".orderindexes"] = array();


$tdatamfr_woredas[".sqlHead"] = "";
$tdatamfr_woredas[".sqlFrom"] = "";
$tdatamfr_woredas[".sqlWhereExpr"] = "";
$tdatamfr_woredas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_woredas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_woredas[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_woredas[".highlightSearchResults"] = true;

$tableKeysmfr_woredas = array();
$tdatamfr_woredas[".Keys"] = $tableKeysmfr_woredas;


$tdatamfr_woredas[".hideMobileList"] = array();




//	zoneId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "zoneId";
	$fdata["GoodName"] = "zoneId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woredas","zoneId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "model/*/zoneId";

	
		$fdata["FullName"] = "zoneId";

	
	
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


	$tdatamfr_woredas["zoneId"] = $fdata;
		$tdatamfr_woredas[".searchableFields"][] = "zoneId";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woredas","name");
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


	$tdatamfr_woredas["name"] = $fdata;
		$tdatamfr_woredas[".searchableFields"][] = "name";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Woredas","id");
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


	$tdatamfr_woredas["id"] = $fdata;
		$tdatamfr_woredas[".searchableFields"][] = "id";


$tables_data["MFR_Woredas"]=&$tdatamfr_woredas;
$field_labels["MFR_Woredas"] = &$fieldLabelsmfr_woredas;
$fieldToolTips["MFR_Woredas"] = &$fieldToolTipsmfr_woredas;
$placeHolders["MFR_Woredas"] = &$placeHoldersmfr_woredas;
$page_titles["MFR_Woredas"] = &$pageTitlesmfr_woredas;


changeTextControlsToDate( "MFR_Woredas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Woredas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Woredas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Zones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Zones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_zones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Woredas"][0] = $masterParams;
				$masterTablesData["MFR_Woredas"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Woredas"][0]["masterKeys"][]="id";
				$masterTablesData["MFR_Woredas"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Woredas"][0]["detailKeys"][]="zoneId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_woredas_ops.php" ) );



	
																												;

			

$tdatamfr_woredas[".sqlquery"] = $queryData_mfr_woredas;



$tdatamfr_woredas[".hasEvents"] = false;

?>