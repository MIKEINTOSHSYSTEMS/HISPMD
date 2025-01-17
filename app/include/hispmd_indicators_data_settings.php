<?php
$tdatahispmd_indicators_data = array();
$tdatahispmd_indicators_data[".searchableFields"] = array();
$tdatahispmd_indicators_data[".ShortName"] = "hispmd_indicators_data";
$tdatahispmd_indicators_data[".OwnerID"] = "";
$tdatahispmd_indicators_data[".OriginalTable"] = "hispmd_indicators_data";


$tdatahispmd_indicators_data[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatahispmd_indicators_data[".originalPagesByType"] = $tdatahispmd_indicators_data[".pagesByType"];
$tdatahispmd_indicators_data[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatahispmd_indicators_data[".originalPages"] = $tdatahispmd_indicators_data[".pages"];
$tdatahispmd_indicators_data[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatahispmd_indicators_data[".originalDefaultPages"] = $tdatahispmd_indicators_data[".defaultPages"];

//	field labels
$fieldLabelshispmd_indicators_data = array();
$fieldToolTipshispmd_indicators_data = array();
$pageTitleshispmd_indicators_data = array();
$placeHoldershispmd_indicators_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_indicators_data["English"] = array();
	$fieldToolTipshispmd_indicators_data["English"] = array();
	$placeHoldershispmd_indicators_data["English"] = array();
	$pageTitleshispmd_indicators_data["English"] = array();
	$fieldLabelshispmd_indicators_data["English"]["Indicator_Group"] = "Indicator Group";
	$fieldToolTipshispmd_indicators_data["English"]["Indicator_Group"] = "";
	$placeHoldershispmd_indicators_data["English"]["Indicator_Group"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Indicator_Name"] = "Indicator Name";
	$fieldToolTipshispmd_indicators_data["English"]["Indicator_Name"] = "";
	$placeHoldershispmd_indicators_data["English"]["Indicator_Name"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipshispmd_indicators_data["English"]["Facility_Type"] = "";
	$placeHoldershispmd_indicators_data["English"]["Facility_Type"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Data_Source"] = "Data Source";
	$fieldToolTipshispmd_indicators_data["English"]["Data_Source"] = "";
	$placeHoldershispmd_indicators_data["English"]["Data_Source"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Assessment"] = "Assessment";
	$fieldToolTipshispmd_indicators_data["English"]["Assessment"] = "";
	$placeHoldershispmd_indicators_data["English"]["Assessment"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Administration_Unit"] = "Administration Unit";
	$fieldToolTipshispmd_indicators_data["English"]["Administration_Unit"] = "";
	$placeHoldershispmd_indicators_data["English"]["Administration_Unit"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Year"] = "Year";
	$fieldToolTipshispmd_indicators_data["English"]["Year"] = "";
	$placeHoldershispmd_indicators_data["English"]["Year"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Scope"] = "Scope";
	$fieldToolTipshispmd_indicators_data["English"]["Scope"] = "";
	$placeHoldershispmd_indicators_data["English"]["Scope"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Region"] = "Region";
	$fieldToolTipshispmd_indicators_data["English"]["Region"] = "";
	$placeHoldershispmd_indicators_data["English"]["Region"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Gender_Sex"] = "Gender/Sex";
	$fieldToolTipshispmd_indicators_data["English"]["Gender_Sex"] = "";
	$placeHoldershispmd_indicators_data["English"]["Gender_Sex"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Value"] = "Value";
	$fieldToolTipshispmd_indicators_data["English"]["Value"] = "";
	$placeHoldershispmd_indicators_data["English"]["Value"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Data_Representation"] = "Data Representation";
	$fieldToolTipshispmd_indicators_data["English"]["Data_Representation"] = "";
	$placeHoldershispmd_indicators_data["English"]["Data_Representation"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Data_Source_Detail"] = "Data Source Detail";
	$fieldToolTipshispmd_indicators_data["English"]["Data_Source_Detail"] = "";
	$placeHoldershispmd_indicators_data["English"]["Data_Source_Detail"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Target_Value"] = "Target Value";
	$fieldToolTipshispmd_indicators_data["English"]["Target_Value"] = "";
	$placeHoldershispmd_indicators_data["English"]["Target_Value"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Target_Year"] = "Target Year";
	$fieldToolTipshispmd_indicators_data["English"]["Target_Year"] = "";
	$placeHoldershispmd_indicators_data["English"]["Target_Year"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Baseline_Value"] = "Baseline Value";
	$fieldToolTipshispmd_indicators_data["English"]["Baseline_Value"] = "";
	$placeHoldershispmd_indicators_data["English"]["Baseline_Value"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Baseline_Year"] = "Baseline Year";
	$fieldToolTipshispmd_indicators_data["English"]["Baseline_Year"] = "";
	$placeHoldershispmd_indicators_data["English"]["Baseline_Year"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Quarter_ID"] = "Quarter ID";
	$fieldToolTipshispmd_indicators_data["English"]["Quarter_ID"] = "";
	$placeHoldershispmd_indicators_data["English"]["Quarter_ID"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Month_ID"] = "Month ID";
	$fieldToolTipshispmd_indicators_data["English"]["Month_ID"] = "";
	$placeHoldershispmd_indicators_data["English"]["Month_ID"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Period_ID"] = "Period ID";
	$fieldToolTipshispmd_indicators_data["English"]["Period_ID"] = "";
	$placeHoldershispmd_indicators_data["English"]["Period_ID"] = "";
	$fieldLabelshispmd_indicators_data["English"]["Period"] = "Period";
	$fieldToolTipshispmd_indicators_data["English"]["Period"] = "";
	$placeHoldershispmd_indicators_data["English"]["Period"] = "";
	if (count($fieldToolTipshispmd_indicators_data["English"]))
		$tdatahispmd_indicators_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelshispmd_indicators_data["Amharic"] = array();
	$fieldToolTipshispmd_indicators_data["Amharic"] = array();
	$placeHoldershispmd_indicators_data["Amharic"] = array();
	$pageTitleshispmd_indicators_data["Amharic"] = array();
	$fieldLabelshispmd_indicators_data["Amharic"]["Indicator_Group"] = "Indicator Group";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Indicator_Group"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Indicator_Group"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Indicator_Name"] = "Indicator Name";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Indicator_Name"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Indicator_Name"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Facility_Type"] = "Facility Type";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Facility_Type"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Facility_Type"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Data_Source"] = "Data Source";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Data_Source"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Data_Source"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Assessment"] = "Assessment";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Assessment"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Assessment"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Administration_Unit"] = "Administration Unit";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Administration_Unit"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Administration_Unit"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Year"] = "Year";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Year"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Year"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Scope"] = "Scope";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Scope"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Scope"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Region"] = "Region";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Region"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Region"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Gender_Sex"] = "Gender/Sex";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Gender_Sex"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Gender_Sex"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Value"] = "Value";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Value"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Value"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Data_Representation"] = "Data Representation";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Data_Representation"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Data_Representation"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Data_Source_Detail"] = "Data Source Detail";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Data_Source_Detail"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Data_Source_Detail"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Target_Value"] = "Target Value";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Target_Value"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Target_Value"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Target_Year"] = "Target Year";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Target_Year"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Target_Year"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Baseline_Value"] = "Baseline Value";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Baseline_Value"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Baseline_Value"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Baseline_Year"] = "Baseline Year";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Baseline_Year"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Baseline_Year"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Quarter_ID"] = "Quarter ID";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Quarter_ID"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Quarter_ID"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Month_ID"] = "Month ID";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Month_ID"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Month_ID"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Period_ID"] = "Period ID";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Period_ID"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Period_ID"] = "";
	$fieldLabelshispmd_indicators_data["Amharic"]["Period"] = "Period";
	$fieldToolTipshispmd_indicators_data["Amharic"]["Period"] = "";
	$placeHoldershispmd_indicators_data["Amharic"]["Period"] = "";
	if (count($fieldToolTipshispmd_indicators_data["Amharic"]))
		$tdatahispmd_indicators_data[".isUseToolTips"] = true;
}


	$tdatahispmd_indicators_data[".NCSearch"] = true;



$tdatahispmd_indicators_data[".shortTableName"] = "hispmd_indicators_data";
$tdatahispmd_indicators_data[".nSecOptions"] = 0;

$tdatahispmd_indicators_data[".mainTableOwnerID"] = "";
$tdatahispmd_indicators_data[".entityType"] = 6;
$tdatahispmd_indicators_data[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_indicators_data[".strOriginalTableName"] = "hispmd_indicators_data";

	



$tdatahispmd_indicators_data[".showAddInPopup"] = false;

$tdatahispmd_indicators_data[".showEditInPopup"] = false;

$tdatahispmd_indicators_data[".showViewInPopup"] = false;

$tdatahispmd_indicators_data[".listAjax"] = false;
//	temporary
//$tdatahispmd_indicators_data[".listAjax"] = false;

	$tdatahispmd_indicators_data[".audit"] = false;

	$tdatahispmd_indicators_data[".locking"] = false;


$pages = $tdatahispmd_indicators_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_indicators_data[".edit"] = true;
	$tdatahispmd_indicators_data[".afterEditAction"] = 1;
	$tdatahispmd_indicators_data[".closePopupAfterEdit"] = 1;
	$tdatahispmd_indicators_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_indicators_data[".add"] = true;
$tdatahispmd_indicators_data[".afterAddAction"] = 1;
$tdatahispmd_indicators_data[".closePopupAfterAdd"] = 1;
$tdatahispmd_indicators_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_indicators_data[".list"] = true;
}



$tdatahispmd_indicators_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_indicators_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_indicators_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_indicators_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_indicators_data[".printFriendly"] = true;
}



$tdatahispmd_indicators_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_indicators_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_indicators_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_indicators_data[".isUseAjaxSuggest"] = false;



			

$tdatahispmd_indicators_data[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_indicators_data[".buttonsAdded"] = false;

$tdatahispmd_indicators_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_indicators_data[".isUseTimeForSearch"] = false;


$tdatahispmd_indicators_data[".badgeColor"] = "2F4F4F";


$tdatahispmd_indicators_data[".allSearchFields"] = array();
$tdatahispmd_indicators_data[".filterFields"] = array();
$tdatahispmd_indicators_data[".requiredSearchFields"] = array();

$tdatahispmd_indicators_data[".googleLikeFields"] = array();
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Indicator Group";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Indicator Name";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Facility Type";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Data Source";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Assessment";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Administration Unit";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Year";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Scope";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Region";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Gender/Sex";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Value";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Data Representation";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Data Source Detail";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Target Value";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Target Year";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Baseline Value";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Baseline Year";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Quarter ID";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Month ID";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Period ID";
$tdatahispmd_indicators_data[".googleLikeFields"][] = "Period";




$tdatahispmd_indicators_data[".printerPageOrientation"] = 0;
$tdatahispmd_indicators_data[".nPrinterPageScale"] = 100;

$tdatahispmd_indicators_data[".nPrinterSplitRecords"] = 40;

$tdatahispmd_indicators_data[".geocodingEnabled"] = false;










$tdatahispmd_indicators_data[".pageSize"] = 20;

$tdatahispmd_indicators_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_indicators_data[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_indicators_data[".orderindexes"] = array();


$tdatahispmd_indicators_data[".sqlHead"] = "";
$tdatahispmd_indicators_data[".sqlFrom"] = "";
$tdatahispmd_indicators_data[".sqlWhereExpr"] = "";
$tdatahispmd_indicators_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_indicators_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_indicators_data[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_indicators_data[".highlightSearchResults"] = true;

$tableKeyshispmd_indicators_data = array();
$tdatahispmd_indicators_data[".Keys"] = $tableKeyshispmd_indicators_data;


$tdatahispmd_indicators_data[".hideMobileList"] = array();




//	Indicator Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Indicator Group";
	$fdata["GoodName"] = "Indicator_Group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Indicator_Group");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Indicator Group";

	
		$fdata["FullName"] = "Indicator Group";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Indicator Group"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Indicator Group";
//	Indicator Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Indicator Name";
	$fdata["GoodName"] = "Indicator_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Indicator_Name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Indicator Name";

	
		$fdata["FullName"] = "Indicator Name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Indicator Name"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Indicator Name";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Facility_Type");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Facility Type";

	
		$fdata["FullName"] = "Facility Type";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Facility Type"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Facility Type";
//	Data Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data Source";
	$fdata["GoodName"] = "Data_Source";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Data_Source");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Data Source";

	
		$fdata["FullName"] = "Data Source";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Data Source"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Data Source";
//	Assessment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Assessment";
	$fdata["GoodName"] = "Assessment";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Assessment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Assessment";

	
		$fdata["FullName"] = "Assessment";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Assessment"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Assessment";
//	Administration Unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Administration Unit";
	$fdata["GoodName"] = "Administration_Unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Administration_Unit");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Administration Unit";

	
		$fdata["FullName"] = "Administration Unit";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Administration Unit"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Administration Unit";
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Year";

	
		$fdata["FullName"] = "Year";

	
	
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


	$tdatahispmd_indicators_data["Year"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Year";
//	Scope
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Scope";
	$fdata["GoodName"] = "Scope";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Scope");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Scope";

	
		$fdata["FullName"] = "Scope";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Scope"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Scope";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Region");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Region";

	
		$fdata["FullName"] = "Region";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Region"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Region";
//	Gender/Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Gender/Sex";
	$fdata["GoodName"] = "Gender_Sex";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Gender_Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Gender/Sex";

	
		$fdata["FullName"] = "Gender/Sex";

	
	
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


	$tdatahispmd_indicators_data["Gender/Sex"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Gender/Sex";
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Value";

	
		$fdata["FullName"] = "Value";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatahispmd_indicators_data["Value"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Value";
//	Data Representation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Data Representation";
	$fdata["GoodName"] = "Data_Representation";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Data_Representation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data Representation";

	
		$fdata["FullName"] = "Data Representation";

	
	
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


	$tdatahispmd_indicators_data["Data Representation"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Data Representation";
//	Data Source Detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Data Source Detail";
	$fdata["GoodName"] = "Data_Source_Detail";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Data_Source_Detail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data Source Detail";

	
		$fdata["FullName"] = "Data Source Detail";

	
	
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


	$tdatahispmd_indicators_data["Data Source Detail"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Data Source Detail";
//	Target Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Target Value";
	$fdata["GoodName"] = "Target_Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Target_Value");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Target Value";

	
		$fdata["FullName"] = "Target Value";

	
	
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


	$tdatahispmd_indicators_data["Target Value"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Target Value";
//	Target Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Target Year";
	$fdata["GoodName"] = "Target_Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Target_Year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Target Year";

	
		$fdata["FullName"] = "Target Year";

	
	
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


	$tdatahispmd_indicators_data["Target Year"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Target Year";
//	Baseline Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Baseline Value";
	$fdata["GoodName"] = "Baseline_Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Baseline_Value");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Baseline Value";

	
		$fdata["FullName"] = "Baseline Value";

	
	
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


	$tdatahispmd_indicators_data["Baseline Value"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Baseline Value";
//	Baseline Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Baseline Year";
	$fdata["GoodName"] = "Baseline_Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Baseline_Year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Baseline Year";

	
		$fdata["FullName"] = "Baseline Year";

	
	
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


	$tdatahispmd_indicators_data["Baseline Year"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Baseline Year";
//	Quarter ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Quarter ID";
	$fdata["GoodName"] = "Quarter_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Quarter_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Quarter ID";

	
		$fdata["FullName"] = "Quarter ID";

	
	
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


	$tdatahispmd_indicators_data["Quarter ID"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Quarter ID";
//	Month ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Month ID";
	$fdata["GoodName"] = "Month_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Month_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Month ID";

	
		$fdata["FullName"] = "Month ID";

	
	
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


	$tdatahispmd_indicators_data["Month ID"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Month ID";
//	Period ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Period ID";
	$fdata["GoodName"] = "Period_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Period_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Period ID";

	
		$fdata["FullName"] = "Period ID";

	
	
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


	$tdatahispmd_indicators_data["Period ID"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Period ID";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hispmd_indicators_data","Period");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Period";

	
		$fdata["FullName"] = "Period";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahispmd_indicators_data["Period"] = $fdata;
		$tdatahispmd_indicators_data[".searchableFields"][] = "Period";


$tables_data["hispmd_indicators_data"]=&$tdatahispmd_indicators_data;
$field_labels["hispmd_indicators_data"] = &$fieldLabelshispmd_indicators_data;
$fieldToolTips["hispmd_indicators_data"] = &$fieldToolTipshispmd_indicators_data;
$placeHolders["hispmd_indicators_data"] = &$placeHoldershispmd_indicators_data;
$page_titles["hispmd_indicators_data"] = &$pageTitleshispmd_indicators_data;


changeTextControlsToDate( "hispmd_indicators_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hispmd_indicators_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hispmd_indicators_data"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/hispmd_indicators_data_ops.php" ) );



	
																												;

																					

$tdatahispmd_indicators_data[".sqlquery"] = $queryData_hispmd_indicators_data;



$tdatahispmd_indicators_data[".hasEvents"] = false;

?>