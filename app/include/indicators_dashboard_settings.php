<?php
$tdataindicators_dashboard = array();
$tdataindicators_dashboard[".searchableFields"] = array();
$tdataindicators_dashboard[".ShortName"] = "indicators_dashboard";
$tdataindicators_dashboard[".OwnerID"] = "";
$tdataindicators_dashboard[".OriginalTable"] = "Indicators_Dashboard";


$tdataindicators_dashboard[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"chart_visualizations\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataindicators_dashboard[".originalPagesByType"] = $tdataindicators_dashboard[".pagesByType"];
$tdataindicators_dashboard[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"chart_visualizations\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataindicators_dashboard[".originalPages"] = $tdataindicators_dashboard[".pages"];
$tdataindicators_dashboard[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataindicators_dashboard[".originalDefaultPages"] = $tdataindicators_dashboard[".defaultPages"];

//	field labels
$fieldLabelsindicators_dashboard = array();
$fieldToolTipsindicators_dashboard = array();
$pageTitlesindicators_dashboard = array();
$placeHoldersindicators_dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindicators_dashboard["English"] = array();
	$fieldToolTipsindicators_dashboard["English"] = array();
	$placeHoldersindicators_dashboard["English"] = array();
	$pageTitlesindicators_dashboard["English"] = array();
	$fieldLabelsindicators_dashboard["English"]["Indicator_Group"] = "Indicator Group";
	$fieldToolTipsindicators_dashboard["English"]["Indicator_Group"] = "";
	$placeHoldersindicators_dashboard["English"]["Indicator_Group"] = "";
	$fieldLabelsindicators_dashboard["English"]["Indicator_Name"] = "Indicator Name";
	$fieldToolTipsindicators_dashboard["English"]["Indicator_Name"] = "";
	$placeHoldersindicators_dashboard["English"]["Indicator_Name"] = "";
	$fieldLabelsindicators_dashboard["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsindicators_dashboard["English"]["Facility_Type"] = "";
	$placeHoldersindicators_dashboard["English"]["Facility_Type"] = "";
	$fieldLabelsindicators_dashboard["English"]["Data_Source"] = "Data Source";
	$fieldToolTipsindicators_dashboard["English"]["Data_Source"] = "";
	$placeHoldersindicators_dashboard["English"]["Data_Source"] = "";
	$fieldLabelsindicators_dashboard["English"]["Assessment"] = "Assessment";
	$fieldToolTipsindicators_dashboard["English"]["Assessment"] = "";
	$placeHoldersindicators_dashboard["English"]["Assessment"] = "";
	$fieldLabelsindicators_dashboard["English"]["Administration_Unit"] = "Administration Unit";
	$fieldToolTipsindicators_dashboard["English"]["Administration_Unit"] = "";
	$placeHoldersindicators_dashboard["English"]["Administration_Unit"] = "";
	$fieldLabelsindicators_dashboard["English"]["Year"] = "Year";
	$fieldToolTipsindicators_dashboard["English"]["Year"] = "";
	$placeHoldersindicators_dashboard["English"]["Year"] = "";
	$fieldLabelsindicators_dashboard["English"]["Scope"] = "Scope";
	$fieldToolTipsindicators_dashboard["English"]["Scope"] = "";
	$placeHoldersindicators_dashboard["English"]["Scope"] = "";
	$fieldLabelsindicators_dashboard["English"]["Region"] = "Region";
	$fieldToolTipsindicators_dashboard["English"]["Region"] = "";
	$placeHoldersindicators_dashboard["English"]["Region"] = "";
	$fieldLabelsindicators_dashboard["English"]["Gender_Sex"] = "Gender/Sex";
	$fieldToolTipsindicators_dashboard["English"]["Gender_Sex"] = "";
	$placeHoldersindicators_dashboard["English"]["Gender_Sex"] = "";
	$fieldLabelsindicators_dashboard["English"]["Value"] = "Value";
	$fieldToolTipsindicators_dashboard["English"]["Value"] = "";
	$placeHoldersindicators_dashboard["English"]["Value"] = "";
	$fieldLabelsindicators_dashboard["English"]["Data_Representation"] = "Data Representation";
	$fieldToolTipsindicators_dashboard["English"]["Data_Representation"] = "";
	$placeHoldersindicators_dashboard["English"]["Data_Representation"] = "";
	$fieldLabelsindicators_dashboard["English"]["Period_ID"] = "Period Type";
	$fieldToolTipsindicators_dashboard["English"]["Period_ID"] = "";
	$placeHoldersindicators_dashboard["English"]["Period_ID"] = "";
	$fieldLabelsindicators_dashboard["English"]["Quarter_ID"] = "Quarter";
	$fieldToolTipsindicators_dashboard["English"]["Quarter_ID"] = "";
	$placeHoldersindicators_dashboard["English"]["Quarter_ID"] = "";
	$fieldLabelsindicators_dashboard["English"]["Month_ID"] = "Month";
	$fieldToolTipsindicators_dashboard["English"]["Month_ID"] = "";
	$placeHoldersindicators_dashboard["English"]["Month_ID"] = "";
	$fieldLabelsindicators_dashboard["English"]["Period"] = "Period";
	$fieldToolTipsindicators_dashboard["English"]["Period"] = "";
	$placeHoldersindicators_dashboard["English"]["Period"] = "";
	$fieldLabelsindicators_dashboard["English"]["Target_Year"] = "Target Year";
	$fieldToolTipsindicators_dashboard["English"]["Target_Year"] = "";
	$placeHoldersindicators_dashboard["English"]["Target_Year"] = "";
	$fieldLabelsindicators_dashboard["English"]["Baseline_Year"] = "Baseline Year";
	$fieldToolTipsindicators_dashboard["English"]["Baseline_Year"] = "";
	$placeHoldersindicators_dashboard["English"]["Baseline_Year"] = "";
	$fieldLabelsindicators_dashboard["English"]["Target_Value"] = "Target Value";
	$fieldToolTipsindicators_dashboard["English"]["Target_Value"] = "";
	$placeHoldersindicators_dashboard["English"]["Target_Value"] = "";
	$fieldLabelsindicators_dashboard["English"]["Baseline_Value"] = "Baseline Value";
	$fieldToolTipsindicators_dashboard["English"]["Baseline_Value"] = "";
	$placeHoldersindicators_dashboard["English"]["Baseline_Value"] = "";
	if (count($fieldToolTipsindicators_dashboard["English"]))
		$tdataindicators_dashboard[".isUseToolTips"] = true;
}


	$tdataindicators_dashboard[".NCSearch"] = true;



$tdataindicators_dashboard[".shortTableName"] = "indicators_dashboard";
$tdataindicators_dashboard[".nSecOptions"] = 0;

$tdataindicators_dashboard[".mainTableOwnerID"] = "";
$tdataindicators_dashboard[".entityType"] = 6;
$tdataindicators_dashboard[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataindicators_dashboard[".strOriginalTableName"] = "Indicators_Dashboard";

	



$tdataindicators_dashboard[".showAddInPopup"] = false;

$tdataindicators_dashboard[".showEditInPopup"] = false;

$tdataindicators_dashboard[".showViewInPopup"] = false;

$tdataindicators_dashboard[".listAjax"] = false;
//	temporary
//$tdataindicators_dashboard[".listAjax"] = false;

	$tdataindicators_dashboard[".audit"] = false;

	$tdataindicators_dashboard[".locking"] = false;


$pages = $tdataindicators_dashboard[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicators_dashboard[".edit"] = true;
	$tdataindicators_dashboard[".afterEditAction"] = 1;
	$tdataindicators_dashboard[".closePopupAfterEdit"] = 1;
	$tdataindicators_dashboard[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicators_dashboard[".add"] = true;
$tdataindicators_dashboard[".afterAddAction"] = 1;
$tdataindicators_dashboard[".closePopupAfterAdd"] = 1;
$tdataindicators_dashboard[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicators_dashboard[".list"] = true;
}



$tdataindicators_dashboard[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicators_dashboard[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicators_dashboard[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicators_dashboard[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicators_dashboard[".printFriendly"] = true;
}



$tdataindicators_dashboard[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicators_dashboard[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicators_dashboard[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicators_dashboard[".isUseAjaxSuggest"] = true;



			

$tdataindicators_dashboard[".ajaxCodeSnippetAdded"] = false;

$tdataindicators_dashboard[".buttonsAdded"] = false;

$tdataindicators_dashboard[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicators_dashboard[".isUseTimeForSearch"] = false;


$tdataindicators_dashboard[".badgeColor"] = "e07878";


$tdataindicators_dashboard[".allSearchFields"] = array();
$tdataindicators_dashboard[".filterFields"] = array();
$tdataindicators_dashboard[".requiredSearchFields"] = array();

$tdataindicators_dashboard[".googleLikeFields"] = array();
$tdataindicators_dashboard[".googleLikeFields"][] = "Indicator Group";
$tdataindicators_dashboard[".googleLikeFields"][] = "Indicator Name";
$tdataindicators_dashboard[".googleLikeFields"][] = "Facility Type";
$tdataindicators_dashboard[".googleLikeFields"][] = "Data Source";
$tdataindicators_dashboard[".googleLikeFields"][] = "Administration Unit";
$tdataindicators_dashboard[".googleLikeFields"][] = "Year";
$tdataindicators_dashboard[".googleLikeFields"][] = "Scope";
$tdataindicators_dashboard[".googleLikeFields"][] = "Region";
$tdataindicators_dashboard[".googleLikeFields"][] = "Gender/Sex";
$tdataindicators_dashboard[".googleLikeFields"][] = "Period ID";
$tdataindicators_dashboard[".googleLikeFields"][] = "Quarter ID";
$tdataindicators_dashboard[".googleLikeFields"][] = "Month ID";
$tdataindicators_dashboard[".googleLikeFields"][] = "Period";
$tdataindicators_dashboard[".googleLikeFields"][] = "Target Value";
$tdataindicators_dashboard[".googleLikeFields"][] = "Target Year";
$tdataindicators_dashboard[".googleLikeFields"][] = "Baseline Value";
$tdataindicators_dashboard[".googleLikeFields"][] = "Baseline Year";




$tdataindicators_dashboard[".printerPageOrientation"] = 0;
$tdataindicators_dashboard[".nPrinterPageScale"] = 100;

$tdataindicators_dashboard[".nPrinterSplitRecords"] = 40;

$tdataindicators_dashboard[".geocodingEnabled"] = false;




$tdataindicators_dashboard[".isDisplayLoading"] = true;


$tdataindicators_dashboard[".searchIsRequiredForFilters"] = true;

$tdataindicators_dashboard[".noRecordsFirstPage"] = true;



$tdataindicators_dashboard[".pageSize"] = 20;

$tdataindicators_dashboard[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicators_dashboard[".strOrderBy"] = $tstrOrderBy;

$tdataindicators_dashboard[".orderindexes"] = array();


$tdataindicators_dashboard[".sqlHead"] = "";
$tdataindicators_dashboard[".sqlFrom"] = "";
$tdataindicators_dashboard[".sqlWhereExpr"] = "";
$tdataindicators_dashboard[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindicators_dashboard[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicators_dashboard[".arrGroupsPerPage"] = $arrGPP;

$tdataindicators_dashboard[".highlightSearchResults"] = true;

$tableKeysindicators_dashboard = array();
$tdataindicators_dashboard[".Keys"] = $tableKeysindicators_dashboard;


$tdataindicators_dashboard[".hideMobileList"] = array();




//	Indicator Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Indicator Group";
	$fdata["GoodName"] = "Indicator_Group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Indicator_Group");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_indicator_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Indicator Name";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Indicator Group"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Indicator Group";
//	Indicator Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Indicator Name";
	$fdata["GoodName"] = "Indicator_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Indicator_Name");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Indicator Group", "lookup" => "indicator_group_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Data Source";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Indicator Name"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Indicator Name";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Facility_Type");
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Facility Type"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Facility Type";
//	Data Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data Source";
	$fdata["GoodName"] = "Data_Source";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Data_Source");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Indicators_Dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Data Source";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Data Source";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Indicator Name", "lookup" => "Indicator Name" );

	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Data Source"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Data Source";
//	Assessment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Assessment";
	$fdata["GoodName"] = "Assessment";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Assessment");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_assessments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "assessment_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "assessment_name";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Assessment"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Assessment";
//	Administration Unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Administration Unit";
	$fdata["GoodName"] = "Administration_Unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Administration_Unit");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_administration_units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unit_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "unit_name";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Administration Unit"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Administration Unit";
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Year");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Indicators_Dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Year";

	

	
	$edata["LookupOrderBy"] = "Year";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataindicators_dashboard["Year"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Year";
//	Scope
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Scope";
	$fdata["GoodName"] = "Scope";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Scope");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_data_scope";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "scope_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "scope_name";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Scope"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Scope";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Region");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region_name";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Region"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Region";
//	Gender/Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Gender/Sex";
	$fdata["GoodName"] = "Gender_Sex";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Gender_Sex");
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Gender/Sex"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Gender/Sex";
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Value";

	
		$fdata["FullName"] = "Value";

	
	
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


	$tdataindicators_dashboard["Value"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Value";
//	Data Representation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Data Representation";
	$fdata["GoodName"] = "Data_Representation";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Data_Representation");
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


	$tdataindicators_dashboard["Data Representation"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Data Representation";
//	Period ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Period ID";
	$fdata["GoodName"] = "Period_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Period_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_period_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "period_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataindicators_dashboard["Period ID"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Period ID";
//	Quarter ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Quarter ID";
	$fdata["GoodName"] = "Quarter_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Quarter_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_quarters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "quarter_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quarter";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataindicators_dashboard["Quarter ID"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Quarter ID";
//	Month ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Month ID";
	$fdata["GoodName"] = "Month_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Month_ID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_months";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "month_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "month";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataindicators_dashboard["Month ID"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Month ID";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Period");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Indicators_Dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Period";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Period";

	

	
	$edata["LookupOrderBy"] = "Period";

	
	
	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataindicators_dashboard["Period"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Period";
//	Target Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Target Value";
	$fdata["GoodName"] = "Target_Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Target_Value");
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


	$tdataindicators_dashboard["Target Value"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Target Value";
//	Target Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Target Year";
	$fdata["GoodName"] = "Target_Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Target_Year");
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


	$tdataindicators_dashboard["Target Year"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Target Year";
//	Baseline Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Baseline Value";
	$fdata["GoodName"] = "Baseline_Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Baseline_Value");
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


	$tdataindicators_dashboard["Baseline Value"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Baseline Value";
//	Baseline Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Baseline Year";
	$fdata["GoodName"] = "Baseline_Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Indicators_Dashboard","Baseline_Year");
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


	$tdataindicators_dashboard["Baseline Year"] = $fdata;
		$tdataindicators_dashboard[".searchableFields"][] = "Baseline Year";


$tables_data["Indicators_Dashboard"]=&$tdataindicators_dashboard;
$field_labels["Indicators_Dashboard"] = &$fieldLabelsindicators_dashboard;
$fieldToolTips["Indicators_Dashboard"] = &$fieldToolTipsindicators_dashboard;
$placeHolders["Indicators_Dashboard"] = &$placeHoldersindicators_dashboard;
$page_titles["Indicators_Dashboard"] = &$pageTitlesindicators_dashboard;


changeTextControlsToDate( "Indicators_Dashboard" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Indicators_Dashboard"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Indicators_Dashboard"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/indicators_dashboard_ops.php" ) );



	
																												;

																				

$tdataindicators_dashboard[".sqlquery"] = $queryData_indicators_dashboard;



$tdataindicators_dashboard[".hasEvents"] = false;

?>