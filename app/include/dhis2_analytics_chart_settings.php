<?php
$tdatadhis2_analytics_chart = array();
$tdatadhis2_analytics_chart[".searchableFields"] = array();
$tdatadhis2_analytics_chart[".ShortName"] = "dhis2_analytics_chart";
$tdatadhis2_analytics_chart[".OwnerID"] = "";
$tdatadhis2_analytics_chart[".OriginalTable"] = "DHIS2_Analytics";


$tdatadhis2_analytics_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadhis2_analytics_chart[".originalPagesByType"] = $tdatadhis2_analytics_chart[".pagesByType"];
$tdatadhis2_analytics_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_analytics_chart[".originalPages"] = $tdatadhis2_analytics_chart[".pages"];
$tdatadhis2_analytics_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadhis2_analytics_chart[".originalDefaultPages"] = $tdatadhis2_analytics_chart[".defaultPages"];

//	field labels
$fieldLabelsdhis2_analytics_chart = array();
$fieldToolTipsdhis2_analytics_chart = array();
$pageTitlesdhis2_analytics_chart = array();
$placeHoldersdhis2_analytics_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_analytics_chart["English"] = array();
	$fieldToolTipsdhis2_analytics_chart["English"] = array();
	$placeHoldersdhis2_analytics_chart["English"] = array();
	$pageTitlesdhis2_analytics_chart["English"] = array();
	$fieldLabelsdhis2_analytics_chart["English"]["Data"] = "Dimension Data";
	$fieldToolTipsdhis2_analytics_chart["English"]["Data"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["Data"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["Organisation_unit"] = "Dimension Org";
	$fieldToolTipsdhis2_analytics_chart["English"]["Organisation_unit"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["Period"] = "Fixed Period";
	$fieldToolTipsdhis2_analytics_chart["English"]["Period"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["Period"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["dx"] = "Indicator";
	$fieldToolTipsdhis2_analytics_chart["English"]["dx"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["dx"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["ou"] = "Org Unit";
	$fieldToolTipsdhis2_analytics_chart["English"]["ou"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["ou"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["pe"] = "Relative Period";
	$fieldToolTipsdhis2_analytics_chart["English"]["pe"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["pe"] = "";
	$fieldLabelsdhis2_analytics_chart["English"]["Value"] = "Value";
	$fieldToolTipsdhis2_analytics_chart["English"]["Value"] = "";
	$placeHoldersdhis2_analytics_chart["English"]["Value"] = "";
	if (count($fieldToolTipsdhis2_analytics_chart["English"]))
		$tdatadhis2_analytics_chart[".isUseToolTips"] = true;
}


	$tdatadhis2_analytics_chart[".NCSearch"] = true;

	$tdatadhis2_analytics_chart[".ChartRefreshTime"] = 0;


$tdatadhis2_analytics_chart[".shortTableName"] = "dhis2_analytics_chart";
$tdatadhis2_analytics_chart[".nSecOptions"] = 0;

$tdatadhis2_analytics_chart[".mainTableOwnerID"] = "";
$tdatadhis2_analytics_chart[".entityType"] = 11;
$tdatadhis2_analytics_chart[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_analytics_chart[".strOriginalTableName"] = "DHIS2_Analytics";

	



$tdatadhis2_analytics_chart[".showAddInPopup"] = false;

$tdatadhis2_analytics_chart[".showEditInPopup"] = false;

$tdatadhis2_analytics_chart[".showViewInPopup"] = false;

$tdatadhis2_analytics_chart[".listAjax"] = false;
//	temporary
//$tdatadhis2_analytics_chart[".listAjax"] = false;

	$tdatadhis2_analytics_chart[".audit"] = false;

	$tdatadhis2_analytics_chart[".locking"] = false;


$pages = $tdatadhis2_analytics_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_analytics_chart[".edit"] = true;
	$tdatadhis2_analytics_chart[".afterEditAction"] = 1;
	$tdatadhis2_analytics_chart[".closePopupAfterEdit"] = 1;
	$tdatadhis2_analytics_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_analytics_chart[".add"] = true;
$tdatadhis2_analytics_chart[".afterAddAction"] = 1;
$tdatadhis2_analytics_chart[".closePopupAfterAdd"] = 1;
$tdatadhis2_analytics_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_analytics_chart[".list"] = true;
}



$tdatadhis2_analytics_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_analytics_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_analytics_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_analytics_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_analytics_chart[".printFriendly"] = true;
}



$tdatadhis2_analytics_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_analytics_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_analytics_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_analytics_chart[".isUseAjaxSuggest"] = false;





$tdatadhis2_analytics_chart[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_analytics_chart[".buttonsAdded"] = false;

$tdatadhis2_analytics_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_analytics_chart[".isUseTimeForSearch"] = false;


$tdatadhis2_analytics_chart[".badgeColor"] = "4682B4";


$tdatadhis2_analytics_chart[".allSearchFields"] = array();
$tdatadhis2_analytics_chart[".filterFields"] = array();
$tdatadhis2_analytics_chart[".requiredSearchFields"] = array();

$tdatadhis2_analytics_chart[".googleLikeFields"] = array();
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "Data";
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "Organisation unit";
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "Period";
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "dx";
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "ou";
$tdatadhis2_analytics_chart[".googleLikeFields"][] = "pe";



$tdatadhis2_analytics_chart[".tableType"] = "chart";

$tdatadhis2_analytics_chart[".printerPageOrientation"] = 0;
$tdatadhis2_analytics_chart[".nPrinterPageScale"] = 100;

$tdatadhis2_analytics_chart[".nPrinterSplitRecords"] = 40;

$tdatadhis2_analytics_chart[".geocodingEnabled"] = false;



// chart settings
$tdatadhis2_analytics_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdatadhis2_analytics_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_analytics_chart[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_analytics_chart[".orderindexes"] = array();


$tdatadhis2_analytics_chart[".sqlHead"] = "";
$tdatadhis2_analytics_chart[".sqlFrom"] = "";
$tdatadhis2_analytics_chart[".sqlWhereExpr"] = "";
$tdatadhis2_analytics_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_analytics_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_analytics_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_analytics_chart[".highlightSearchResults"] = true;

$tableKeysdhis2_analytics_chart = array();
$tdatadhis2_analytics_chart[".Keys"] = $tableKeysdhis2_analytics_chart;


$tdatadhis2_analytics_chart[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","Data");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Data";

	
		$fdata["FullName"] = "Data";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Indicator";
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_analytics_chart["Data"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "Data";
//	Organisation unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Organisation unit";
	$fdata["GoodName"] = "Organisation_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","Organisation_unit");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Organisation unit";

	
		$fdata["FullName"] = "Organisation unit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Organisation_Unit";
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_analytics_chart["Organisation unit"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "Organisation unit";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","Period");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "rows/*/Period";

	
		$fdata["FullName"] = "Period";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_chart["Period"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "Period";
//	dx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dx";
	$fdata["GoodName"] = "dx";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","dx");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dimensions/dx/*";

	
		$fdata["FullName"] = "dx";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Indicator";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_chart["dx"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "dx";
//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","ou");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dimensions/ou/*";

	
		$fdata["FullName"] = "ou";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "DHIS2_Organisation_Unit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_chart["ou"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "ou";
//	pe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pe";
	$fdata["GoodName"] = "pe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","pe");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "dimensions/pe/*";

	
		$fdata["FullName"] = "pe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_chart["pe"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "pe";
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Chart","Value");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/Value";

	
		$fdata["FullName"] = "Value";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadhis2_analytics_chart["Value"] = $fdata;
		$tdatadhis2_analytics_chart[".searchableFields"][] = "Value";

$tdatadhis2_analytics_chart[".chartLabelField"] = "Period";
$tdatadhis2_analytics_chart[".chartSeries"] = array();
$tdatadhis2_analytics_chart[".chartSeries"][] = array(
	"field" => "Value",
	"total" => ""
);
	$tdatadhis2_analytics_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DHIS2_Analytics Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Value</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Period</attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="head">'.xmlencode("DHIS2_Analytics Chart").'</attr>
<attr value="foot">'.xmlencode("Periods").'</attr>
<attr value="y_axis_label">'.xmlencode("Indicator Value By Org Units").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatadhis2_analytics_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Data</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","Data")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Organisation unit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","Organisation_unit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","Period")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">dx</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","dx")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">ou</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","ou")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">pe</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","pe")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadhis2_analytics_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">Value</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DHIS2_Analytics_Chart","Value")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadhis2_analytics_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DHIS2_Analytics Chart</attr>
<attr value="short_table_name">dhis2_analytics_chart</attr>
</attr>

</chart>';

$tables_data["DHIS2_Analytics Chart"]=&$tdatadhis2_analytics_chart;
$field_labels["DHIS2_Analytics_Chart"] = &$fieldLabelsdhis2_analytics_chart;
$fieldToolTips["DHIS2_Analytics_Chart"] = &$fieldToolTipsdhis2_analytics_chart;
$placeHolders["DHIS2_Analytics_Chart"] = &$placeHoldersdhis2_analytics_chart;
$page_titles["DHIS2_Analytics_Chart"] = &$pageTitlesdhis2_analytics_chart;


changeTextControlsToDate( "DHIS2_Analytics Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Analytics Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Analytics Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_analytics_chart_ops.php" ) );



	
								;

							

$tdatadhis2_analytics_chart[".sqlquery"] = $queryData_dhis2_analytics_chart;



include_once(getabspath("include/dhis2_analytics_chart_events.php"));
$tdatadhis2_analytics_chart[".hasEvents"] = true;

?>