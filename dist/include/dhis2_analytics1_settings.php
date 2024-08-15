<?php
$tdatadhis2_analytics1 = array();
$tdatadhis2_analytics1[".searchableFields"] = array();
$tdatadhis2_analytics1[".ShortName"] = "dhis2_analytics1";
$tdatadhis2_analytics1[".OwnerID"] = "";
$tdatadhis2_analytics1[".OriginalTable"] = "DHIS2_Analytics";


$tdatadhis2_analytics1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadhis2_analytics1[".originalPagesByType"] = $tdatadhis2_analytics1[".pagesByType"];
$tdatadhis2_analytics1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_analytics1[".originalPages"] = $tdatadhis2_analytics1[".pages"];
$tdatadhis2_analytics1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadhis2_analytics1[".originalDefaultPages"] = $tdatadhis2_analytics1[".defaultPages"];

//	field labels
$fieldLabelsdhis2_analytics1 = array();
$fieldToolTipsdhis2_analytics1 = array();
$pageTitlesdhis2_analytics1 = array();
$placeHoldersdhis2_analytics1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_analytics1["English"] = array();
	$fieldToolTipsdhis2_analytics1["English"] = array();
	$placeHoldersdhis2_analytics1["English"] = array();
	$pageTitlesdhis2_analytics1["English"] = array();
	$fieldLabelsdhis2_analytics1["English"]["Value"] = "Value";
	$fieldToolTipsdhis2_analytics1["English"]["Value"] = "";
	$placeHoldersdhis2_analytics1["English"]["Value"] = "";
	$fieldLabelsdhis2_analytics1["English"]["Data"] = "Dimension Data";
	$fieldToolTipsdhis2_analytics1["English"]["Data"] = "";
	$placeHoldersdhis2_analytics1["English"]["Data"] = "";
	$fieldLabelsdhis2_analytics1["English"]["Organisation_unit"] = "Dimension Org";
	$fieldToolTipsdhis2_analytics1["English"]["Organisation_unit"] = "";
	$placeHoldersdhis2_analytics1["English"]["Organisation_unit"] = "";
	$fieldLabelsdhis2_analytics1["English"]["Period"] = "Fixed Period";
	$fieldToolTipsdhis2_analytics1["English"]["Period"] = "";
	$placeHoldersdhis2_analytics1["English"]["Period"] = "";
	$fieldLabelsdhis2_analytics1["English"]["dx"] = "Indicator";
	$fieldToolTipsdhis2_analytics1["English"]["dx"] = "";
	$placeHoldersdhis2_analytics1["English"]["dx"] = "";
	$fieldLabelsdhis2_analytics1["English"]["ou"] = "Org Unit";
	$fieldToolTipsdhis2_analytics1["English"]["ou"] = "";
	$placeHoldersdhis2_analytics1["English"]["ou"] = "";
	$fieldLabelsdhis2_analytics1["English"]["pe"] = "Relative Period";
	$fieldToolTipsdhis2_analytics1["English"]["pe"] = "";
	$placeHoldersdhis2_analytics1["English"]["pe"] = "";
	if (count($fieldToolTipsdhis2_analytics1["English"]))
		$tdatadhis2_analytics1[".isUseToolTips"] = true;
}


	$tdatadhis2_analytics1[".NCSearch"] = true;



$tdatadhis2_analytics1[".shortTableName"] = "dhis2_analytics1";
$tdatadhis2_analytics1[".nSecOptions"] = 0;

$tdatadhis2_analytics1[".mainTableOwnerID"] = "";
$tdatadhis2_analytics1[".entityType"] = 7;
$tdatadhis2_analytics1[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_analytics1[".strOriginalTableName"] = "DHIS2_Analytics";

	



$tdatadhis2_analytics1[".showAddInPopup"] = false;

$tdatadhis2_analytics1[".showEditInPopup"] = false;

$tdatadhis2_analytics1[".showViewInPopup"] = false;

$tdatadhis2_analytics1[".listAjax"] = false;
//	temporary
//$tdatadhis2_analytics1[".listAjax"] = false;

	$tdatadhis2_analytics1[".audit"] = false;

	$tdatadhis2_analytics1[".locking"] = false;


$pages = $tdatadhis2_analytics1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_analytics1[".edit"] = true;
	$tdatadhis2_analytics1[".afterEditAction"] = 1;
	$tdatadhis2_analytics1[".closePopupAfterEdit"] = 1;
	$tdatadhis2_analytics1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_analytics1[".add"] = true;
$tdatadhis2_analytics1[".afterAddAction"] = 1;
$tdatadhis2_analytics1[".closePopupAfterAdd"] = 1;
$tdatadhis2_analytics1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_analytics1[".list"] = true;
}



$tdatadhis2_analytics1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_analytics1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_analytics1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_analytics1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_analytics1[".printFriendly"] = true;
}



$tdatadhis2_analytics1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_analytics1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_analytics1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_analytics1[".isUseAjaxSuggest"] = false;





$tdatadhis2_analytics1[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_analytics1[".buttonsAdded"] = false;

$tdatadhis2_analytics1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_analytics1[".isUseTimeForSearch"] = false;


$tdatadhis2_analytics1[".badgeColor"] = "6da5c8";


$tdatadhis2_analytics1[".allSearchFields"] = array();
$tdatadhis2_analytics1[".filterFields"] = array();
$tdatadhis2_analytics1[".requiredSearchFields"] = array();

$tdatadhis2_analytics1[".googleLikeFields"] = array();
$tdatadhis2_analytics1[".googleLikeFields"][] = "Period";
$tdatadhis2_analytics1[".googleLikeFields"][] = "dx";
$tdatadhis2_analytics1[".googleLikeFields"][] = "ou";
$tdatadhis2_analytics1[".googleLikeFields"][] = "pe";




$tdatadhis2_analytics1[".printerPageOrientation"] = 0;
$tdatadhis2_analytics1[".nPrinterPageScale"] = 100;

$tdatadhis2_analytics1[".nPrinterSplitRecords"] = 40;

$tdatadhis2_analytics1[".geocodingEnabled"] = false;




$tdatadhis2_analytics1[".isDisplayLoading"] = true;






$tdatadhis2_analytics1[".pageSize"] = 20;

$tdatadhis2_analytics1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_analytics1[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_analytics1[".orderindexes"] = array();


$tdatadhis2_analytics1[".sqlHead"] = "";
$tdatadhis2_analytics1[".sqlFrom"] = "";
$tdatadhis2_analytics1[".sqlWhereExpr"] = "";
$tdatadhis2_analytics1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_analytics1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_analytics1[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_analytics1[".highlightSearchResults"] = true;

$tableKeysdhis2_analytics1 = array();
$tdatadhis2_analytics1[".Keys"] = $tableKeysdhis2_analytics1;


$tdatadhis2_analytics1[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","Data");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatadhis2_analytics1["Data"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "Data";
//	Organisation unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Organisation unit";
	$fdata["GoodName"] = "Organisation_unit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","Organisation_unit");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatadhis2_analytics1["Organisation unit"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "Organisation unit";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","Period");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics1["Period"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "Period";
//	dx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dx";
	$fdata["GoodName"] = "dx";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","dx");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics1["dx"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "dx";
//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","ou");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics1["ou"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "ou";
//	pe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pe";
	$fdata["GoodName"] = "pe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","pe");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_analytics1["pe"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "pe";
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Analytics","Value");
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


	$tdatadhis2_analytics1["Value"] = $fdata;
		$tdatadhis2_analytics1[".searchableFields"][] = "Value";


$tables_data["DHIS2_Analytics"]=&$tdatadhis2_analytics1;
$field_labels["DHIS2_Analytics"] = &$fieldLabelsdhis2_analytics1;
$fieldToolTips["DHIS2_Analytics"] = &$fieldToolTipsdhis2_analytics1;
$placeHolders["DHIS2_Analytics"] = &$placeHoldersdhis2_analytics1;
$page_titles["DHIS2_Analytics"] = &$pageTitlesdhis2_analytics1;


changeTextControlsToDate( "DHIS2_Analytics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Analytics"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Analytics"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_analytics1_ops.php" ) );



	
																												;

							

$tdatadhis2_analytics1[".sqlquery"] = $queryData_dhis2_analytics1;



include_once(getabspath("include/dhis2_analytics1_events.php"));
$tdatadhis2_analytics1[".hasEvents"] = true;

?>