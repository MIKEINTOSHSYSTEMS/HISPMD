<?php
$tdatadhis2_analytics_report = array();
$tdatadhis2_analytics_report[".searchableFields"] = array();
$tdatadhis2_analytics_report[".ShortName"] = "dhis2_analytics_report";
$tdatadhis2_analytics_report[".OwnerID"] = "";
$tdatadhis2_analytics_report[".OriginalTable"] = "DHIS2_Analytics";


$tdatadhis2_analytics_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadhis2_analytics_report[".originalPagesByType"] = $tdatadhis2_analytics_report[".pagesByType"];
$tdatadhis2_analytics_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_analytics_report[".originalPages"] = $tdatadhis2_analytics_report[".pages"];
$tdatadhis2_analytics_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadhis2_analytics_report[".originalDefaultPages"] = $tdatadhis2_analytics_report[".defaultPages"];

//	field labels
$fieldLabelsdhis2_analytics_report = array();
$fieldToolTipsdhis2_analytics_report = array();
$pageTitlesdhis2_analytics_report = array();
$placeHoldersdhis2_analytics_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_analytics_report["English"] = array();
	$fieldToolTipsdhis2_analytics_report["English"] = array();
	$placeHoldersdhis2_analytics_report["English"] = array();
	$pageTitlesdhis2_analytics_report["English"] = array();
	$fieldLabelsdhis2_analytics_report["English"]["Data"] = "Dimension Data";
	$fieldToolTipsdhis2_analytics_report["English"]["Data"] = "";
	$placeHoldersdhis2_analytics_report["English"]["Data"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["Organisation_unit"] = "Dimension Org";
	$fieldToolTipsdhis2_analytics_report["English"]["Organisation_unit"] = "";
	$placeHoldersdhis2_analytics_report["English"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["Period"] = "Fixed Period";
	$fieldToolTipsdhis2_analytics_report["English"]["Period"] = "";
	$placeHoldersdhis2_analytics_report["English"]["Period"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["dx"] = "Indicator";
	$fieldToolTipsdhis2_analytics_report["English"]["dx"] = "";
	$placeHoldersdhis2_analytics_report["English"]["dx"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["ou"] = "Org Unit";
	$fieldToolTipsdhis2_analytics_report["English"]["ou"] = "";
	$placeHoldersdhis2_analytics_report["English"]["ou"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["pe"] = "Relative Period";
	$fieldToolTipsdhis2_analytics_report["English"]["pe"] = "";
	$placeHoldersdhis2_analytics_report["English"]["pe"] = "";
	$fieldLabelsdhis2_analytics_report["English"]["Value"] = "Value";
	$fieldToolTipsdhis2_analytics_report["English"]["Value"] = "";
	$placeHoldersdhis2_analytics_report["English"]["Value"] = "";
	if (count($fieldToolTipsdhis2_analytics_report["English"]))
		$tdatadhis2_analytics_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_analytics_report["Amharic"] = array();
	$fieldToolTipsdhis2_analytics_report["Amharic"] = array();
	$placeHoldersdhis2_analytics_report["Amharic"] = array();
	$pageTitlesdhis2_analytics_report["Amharic"] = array();
	$fieldLabelsdhis2_analytics_report["Amharic"]["Data"] = "የልኬት ውሂብ";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["Data"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["Data"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["Organisation_unit"] = "Dimension Org";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["Organisation_unit"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["Period"] = "የተወሰነ ጊዜ";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["Period"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["Period"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["dx"] = "አመልካች";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["dx"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["dx"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["ou"] = "ኦርግ ክፍል";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["ou"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["ou"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["pe"] = "አንጻራዊ ጊዜ";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["pe"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["pe"] = "";
	$fieldLabelsdhis2_analytics_report["Amharic"]["Value"] = "የውሂብ እሴት";
	$fieldToolTipsdhis2_analytics_report["Amharic"]["Value"] = "";
	$placeHoldersdhis2_analytics_report["Amharic"]["Value"] = "";
	if (count($fieldToolTipsdhis2_analytics_report["Amharic"]))
		$tdatadhis2_analytics_report[".isUseToolTips"] = true;
}


	$tdatadhis2_analytics_report[".NCSearch"] = true;



$tdatadhis2_analytics_report[".shortTableName"] = "dhis2_analytics_report";
$tdatadhis2_analytics_report[".nSecOptions"] = 0;

$tdatadhis2_analytics_report[".mainTableOwnerID"] = "";
$tdatadhis2_analytics_report[".entityType"] = 10;
$tdatadhis2_analytics_report[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_analytics_report[".strOriginalTableName"] = "DHIS2_Analytics";

	



$tdatadhis2_analytics_report[".showAddInPopup"] = false;

$tdatadhis2_analytics_report[".showEditInPopup"] = false;

$tdatadhis2_analytics_report[".showViewInPopup"] = false;

$tdatadhis2_analytics_report[".listAjax"] = false;
//	temporary
//$tdatadhis2_analytics_report[".listAjax"] = false;

	$tdatadhis2_analytics_report[".audit"] = false;

	$tdatadhis2_analytics_report[".locking"] = false;


$pages = $tdatadhis2_analytics_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_analytics_report[".edit"] = true;
	$tdatadhis2_analytics_report[".afterEditAction"] = 1;
	$tdatadhis2_analytics_report[".closePopupAfterEdit"] = 1;
	$tdatadhis2_analytics_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_analytics_report[".add"] = true;
$tdatadhis2_analytics_report[".afterAddAction"] = 1;
$tdatadhis2_analytics_report[".closePopupAfterAdd"] = 1;
$tdatadhis2_analytics_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_analytics_report[".list"] = true;
}



$tdatadhis2_analytics_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_analytics_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_analytics_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_analytics_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_analytics_report[".printFriendly"] = true;
}



$tdatadhis2_analytics_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_analytics_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_analytics_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_analytics_report[".isUseAjaxSuggest"] = false;



			

$tdatadhis2_analytics_report[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_analytics_report[".buttonsAdded"] = false;

$tdatadhis2_analytics_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_analytics_report[".isUseTimeForSearch"] = false;


$tdatadhis2_analytics_report[".badgeColor"] = "00C2C5";


$tdatadhis2_analytics_report[".allSearchFields"] = array();
$tdatadhis2_analytics_report[".filterFields"] = array();
$tdatadhis2_analytics_report[".requiredSearchFields"] = array();

$tdatadhis2_analytics_report[".googleLikeFields"] = array();
$tdatadhis2_analytics_report[".googleLikeFields"][] = "Data";
$tdatadhis2_analytics_report[".googleLikeFields"][] = "Organisation unit";
$tdatadhis2_analytics_report[".googleLikeFields"][] = "Period";
$tdatadhis2_analytics_report[".googleLikeFields"][] = "dx";
$tdatadhis2_analytics_report[".googleLikeFields"][] = "ou";
$tdatadhis2_analytics_report[".googleLikeFields"][] = "pe";



$tdatadhis2_analytics_report[".tableType"] = "report";

$tdatadhis2_analytics_report[".printerPageOrientation"] = 0;
$tdatadhis2_analytics_report[".nPrinterPageScale"] = 100;

$tdatadhis2_analytics_report[".nPrinterSplitRecords"] = 40;

$tdatadhis2_analytics_report[".geocodingEnabled"] = false;

//report settings

$tdatadhis2_analytics_report[".reportPrintGroupsPerPage"] = 3;
$tdatadhis2_analytics_report[".reportPrintRecordsPerPage"] = 40;

$tdatadhis2_analytics_report[".pageSizeGroups"] = 5;
$tdatadhis2_analytics_report[".pageSizeRecords"] = 20;


//end of report settings



$tdatadhis2_analytics_report[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatadhis2_analytics_report[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_analytics_report[".orderindexes"] = array();


$tdatadhis2_analytics_report[".sqlHead"] = "";
$tdatadhis2_analytics_report[".sqlFrom"] = "";
$tdatadhis2_analytics_report[".sqlWhereExpr"] = "";
$tdatadhis2_analytics_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_analytics_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_analytics_report[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_analytics_report[".highlightSearchResults"] = true;

$tableKeysdhis2_analytics_report = array();
$tdatadhis2_analytics_report[".Keys"] = $tableKeysdhis2_analytics_report;


$tdatadhis2_analytics_report[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","Data");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_analytics_report["Data"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "Data";
//	Organisation unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Organisation unit";
	$fdata["GoodName"] = "Organisation_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","Organisation_unit");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatadhis2_analytics_report["Organisation unit"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "Organisation unit";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","Period");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_report["Period"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "Period";
//	dx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dx";
	$fdata["GoodName"] = "dx";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","dx");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_report["dx"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "dx";
//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","ou");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_report["ou"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "ou";
//	pe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pe";
	$fdata["GoodName"] = "pe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","pe");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Period_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Period_Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_report["pe"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "pe";
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics_Report","Value");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "rows/*/Value";

	
		$fdata["FullName"] = "Value";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics_report["Value"] = $fdata;
		$tdatadhis2_analytics_report[".searchableFields"][] = "Value";


$tables_data["DHIS2_Analytics Report"]=&$tdatadhis2_analytics_report;
$field_labels["DHIS2_Analytics_Report"] = &$fieldLabelsdhis2_analytics_report;
$fieldToolTips["DHIS2_Analytics_Report"] = &$fieldToolTipsdhis2_analytics_report;
$placeHolders["DHIS2_Analytics_Report"] = &$placeHoldersdhis2_analytics_report;
$page_titles["DHIS2_Analytics_Report"] = &$pageTitlesdhis2_analytics_report;


changeTextControlsToDate( "DHIS2_Analytics Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Analytics Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Analytics Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_analytics_report_ops.php" ) );



	
																												;

							

$tdatadhis2_analytics_report[".sqlquery"] = $queryData_dhis2_analytics_report;



include_once(getabspath("include/dhis2_analytics_report_events.php"));
$tdatadhis2_analytics_report[".hasEvents"] = true;

?>