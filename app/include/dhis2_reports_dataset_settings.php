<?php
$tdatadhis2_reports_dataset = array();
$tdatadhis2_reports_dataset[".searchableFields"] = array();
$tdatadhis2_reports_dataset[".ShortName"] = "dhis2_reports_dataset";
$tdatadhis2_reports_dataset[".OwnerID"] = "";
$tdatadhis2_reports_dataset[".OriginalTable"] = "DHIS2_Reporting_Rate";


$tdatadhis2_reports_dataset[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadhis2_reports_dataset[".originalPagesByType"] = $tdatadhis2_reports_dataset[".pagesByType"];
$tdatadhis2_reports_dataset[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadhis2_reports_dataset[".originalPages"] = $tdatadhis2_reports_dataset[".pages"];
$tdatadhis2_reports_dataset[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadhis2_reports_dataset[".originalDefaultPages"] = $tdatadhis2_reports_dataset[".defaultPages"];

//	field labels
$fieldLabelsdhis2_reports_dataset = array();
$fieldToolTipsdhis2_reports_dataset = array();
$pageTitlesdhis2_reports_dataset = array();
$placeHoldersdhis2_reports_dataset = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_reports_dataset["English"] = array();
	$fieldToolTipsdhis2_reports_dataset["English"] = array();
	$placeHoldersdhis2_reports_dataset["English"] = array();
	$pageTitlesdhis2_reports_dataset["English"] = array();
	$fieldLabelsdhis2_reports_dataset["English"]["Hospital_by_ownership_ID"] = "Hospital by ownership ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Hospital_by_ownership_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Hospital_by_ownership_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Hospital_by_ownership"] = "Hospital by ownership";
	$fieldToolTipsdhis2_reports_dataset["English"]["Hospital_by_ownership"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Hospital_by_ownership"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Ownership_ID"] = "Ownership ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Ownership_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Ownership_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Ownership"] = "Ownership";
	$fieldToolTipsdhis2_reports_dataset["English"]["Ownership"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Ownership"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Clinics_by_Type_ID"] = "Clinics by Type ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Clinics_by_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Clinics_by_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Clinics_by_Type"] = "Clinics by Type";
	$fieldToolTipsdhis2_reports_dataset["English"]["Clinics_by_Type"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Clinics_by_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Facility_Type_ID"] = "Facility Type ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Facility_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Facility_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsdhis2_reports_dataset["English"]["Facility_Type"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Facility_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Health_Post_Type_ID"] = "Health Post Type ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Health_Post_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Health_Post_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Health_Post_Type"] = "Health Post Type";
	$fieldToolTipsdhis2_reports_dataset["English"]["Health_Post_Type"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Health_Post_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Hospital_Type_ID"] = "Hospital Type ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Hospital_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Hospital_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Hospital_Type"] = "Hospital Type";
	$fieldToolTipsdhis2_reports_dataset["English"]["Hospital_Type"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Hospital_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Rural_ID"] = "Rural ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Rural_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Rural_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Rural"] = "Rural";
	$fieldToolTipsdhis2_reports_dataset["English"]["Rural"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Rural"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Settlement_ID"] = "Settlement ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Settlement_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Settlement_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Settlement"] = "Settlement";
	$fieldToolTipsdhis2_reports_dataset["English"]["Settlement"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Settlement"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Woreda_Type_ID"] = "Woreda Type ID";
	$fieldToolTipsdhis2_reports_dataset["English"]["Woreda_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Woreda_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["English"]["Woreda_Type"] = "Woreda Type";
	$fieldToolTipsdhis2_reports_dataset["English"]["Woreda_Type"] = "";
	$placeHoldersdhis2_reports_dataset["English"]["Woreda_Type"] = "";
	if (count($fieldToolTipsdhis2_reports_dataset["English"]))
		$tdatadhis2_reports_dataset[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsdhis2_reports_dataset["Amharic"] = array();
	$fieldToolTipsdhis2_reports_dataset["Amharic"] = array();
	$placeHoldersdhis2_reports_dataset["Amharic"] = array();
	$pageTitlesdhis2_reports_dataset["Amharic"] = array();
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Hospital_by_ownership_ID"] = "Hospital by ownership ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Hospital_by_ownership_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Hospital_by_ownership_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Hospital_by_ownership"] = "Hospital by ownership";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Hospital_by_ownership"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Hospital_by_ownership"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Ownership_ID"] = "Ownership ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Ownership_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Ownership_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Ownership"] = "Ownership";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Ownership"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Ownership"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Clinics_by_Type_ID"] = "Clinics by Type ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Clinics_by_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Clinics_by_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Clinics_by_Type"] = "Clinics by Type";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Clinics_by_Type"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Clinics_by_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Facility_Type_ID"] = "Facility Type ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Facility_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Facility_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Facility_Type"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Facility_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Health_Post_Type_ID"] = "Health Post Type ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Health_Post_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Health_Post_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Health_Post_Type"] = "Health Post Type";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Health_Post_Type"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Health_Post_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Hospital_Type_ID"] = "Hospital Type ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Hospital_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Hospital_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Hospital_Type"] = "Hospital Type";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Hospital_Type"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Hospital_Type"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Rural_ID"] = "Rural ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Rural_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Rural_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Rural"] = "Rural";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Rural"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Rural"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Settlement_ID"] = "Settlement ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Settlement_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Settlement_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Settlement"] = "Settlement";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Settlement"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Settlement"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Woreda_Type_ID"] = "Woreda Type ID";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Woreda_Type_ID"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Woreda_Type_ID"] = "";
	$fieldLabelsdhis2_reports_dataset["Amharic"]["Woreda_Type"] = "Woreda Type";
	$fieldToolTipsdhis2_reports_dataset["Amharic"]["Woreda_Type"] = "";
	$placeHoldersdhis2_reports_dataset["Amharic"]["Woreda_Type"] = "";
	if (count($fieldToolTipsdhis2_reports_dataset["Amharic"]))
		$tdatadhis2_reports_dataset[".isUseToolTips"] = true;
}


	$tdatadhis2_reports_dataset[".NCSearch"] = true;



$tdatadhis2_reports_dataset[".shortTableName"] = "dhis2_reports_dataset";
$tdatadhis2_reports_dataset[".nSecOptions"] = 0;

$tdatadhis2_reports_dataset[".mainTableOwnerID"] = "";
$tdatadhis2_reports_dataset[".entityType"] = 7;
$tdatadhis2_reports_dataset[".connId"] = "devdhis2hispmdathispmdmerqcons";


$tdatadhis2_reports_dataset[".strOriginalTableName"] = "DHIS2_Reporting_Rate";

	



$tdatadhis2_reports_dataset[".showAddInPopup"] = false;

$tdatadhis2_reports_dataset[".showEditInPopup"] = false;

$tdatadhis2_reports_dataset[".showViewInPopup"] = false;

$tdatadhis2_reports_dataset[".listAjax"] = false;
//	temporary
//$tdatadhis2_reports_dataset[".listAjax"] = false;

	$tdatadhis2_reports_dataset[".audit"] = true;

	$tdatadhis2_reports_dataset[".locking"] = false;


$pages = $tdatadhis2_reports_dataset[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_reports_dataset[".edit"] = true;
	$tdatadhis2_reports_dataset[".afterEditAction"] = 1;
	$tdatadhis2_reports_dataset[".closePopupAfterEdit"] = 1;
	$tdatadhis2_reports_dataset[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_reports_dataset[".add"] = true;
$tdatadhis2_reports_dataset[".afterAddAction"] = 1;
$tdatadhis2_reports_dataset[".closePopupAfterAdd"] = 1;
$tdatadhis2_reports_dataset[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_reports_dataset[".list"] = true;
}



$tdatadhis2_reports_dataset[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_reports_dataset[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_reports_dataset[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_reports_dataset[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_reports_dataset[".printFriendly"] = true;
}



$tdatadhis2_reports_dataset[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_reports_dataset[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_reports_dataset[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_reports_dataset[".isUseAjaxSuggest"] = true;



			

$tdatadhis2_reports_dataset[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_reports_dataset[".buttonsAdded"] = false;

$tdatadhis2_reports_dataset[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_reports_dataset[".isUseTimeForSearch"] = false;


$tdatadhis2_reports_dataset[".badgeColor"] = "3CB371";


$tdatadhis2_reports_dataset[".allSearchFields"] = array();
$tdatadhis2_reports_dataset[".filterFields"] = array();
$tdatadhis2_reports_dataset[".requiredSearchFields"] = array();

$tdatadhis2_reports_dataset[".googleLikeFields"] = array();
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Clinics by Type ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Clinics by Type";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Facility Type ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Facility Type";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Health Post Type ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Health Post Type";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Hospital by ownership ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Hospital by ownership";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Hospital Type ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Hospital Type";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Rural ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Rural";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Ownership ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Ownership";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Settlement ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Settlement";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Woreda Type ID";
$tdatadhis2_reports_dataset[".googleLikeFields"][] = "Woreda Type";




$tdatadhis2_reports_dataset[".printerPageOrientation"] = 0;
$tdatadhis2_reports_dataset[".nPrinterPageScale"] = 100;

$tdatadhis2_reports_dataset[".nPrinterSplitRecords"] = 40;

$tdatadhis2_reports_dataset[".geocodingEnabled"] = false;




$tdatadhis2_reports_dataset[".isDisplayLoading"] = true;






$tdatadhis2_reports_dataset[".pageSize"] = 20;

$tdatadhis2_reports_dataset[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_reports_dataset[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_reports_dataset[".orderindexes"] = array();


$tdatadhis2_reports_dataset[".sqlHead"] = "";
$tdatadhis2_reports_dataset[".sqlFrom"] = "";
$tdatadhis2_reports_dataset[".sqlWhereExpr"] = "";
$tdatadhis2_reports_dataset[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_reports_dataset[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_reports_dataset[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_reports_dataset[".highlightSearchResults"] = true;

$tableKeysdhis2_reports_dataset = array();
$tdatadhis2_reports_dataset[".Keys"] = $tableKeysdhis2_reports_dataset;


$tdatadhis2_reports_dataset[".hideMobileList"] = array();




//	Clinics by Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clinics by Type ID";
	$fdata["GoodName"] = "Clinics_by_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Clinics_by_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Clinics by Type ID/*";

	
		$fdata["FullName"] = "Clinics by Type ID";

	
	
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


	$tdatadhis2_reports_dataset["Clinics by Type ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Clinics by Type ID";
//	Clinics by Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Clinics by Type";
	$fdata["GoodName"] = "Clinics_by_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Clinics_by_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Clinics by Type/*";

	
		$fdata["FullName"] = "Clinics by Type";

	
	
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


	$tdatadhis2_reports_dataset["Clinics by Type"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Clinics by Type";
//	Facility Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Facility Type ID";
	$fdata["GoodName"] = "Facility_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Facility_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Facility Type ID/*";

	
		$fdata["FullName"] = "Facility Type ID";

	
	
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


	$tdatadhis2_reports_dataset["Facility Type ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Facility Type ID";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Facility_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Facility Type/*";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Hospital";
	$edata["LookupValues"][] = "Clinic";
	$edata["LookupValues"][] = "Health Post";
	$edata["LookupValues"][] = "Health Center";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "Organisation unit code";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadhis2_reports_dataset["Facility Type"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Facility Type";
//	Health Post Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Health Post Type ID";
	$fdata["GoodName"] = "Health_Post_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Health_Post_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Health Post Type ID/*";

	
		$fdata["FullName"] = "Health Post Type ID";

	
	
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


	$tdatadhis2_reports_dataset["Health Post Type ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Health Post Type ID";
//	Health Post Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Health Post Type";
	$fdata["GoodName"] = "Health_Post_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Health_Post_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Health Post Type/*";

	
		$fdata["FullName"] = "Health Post Type";

	
	
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


	$tdatadhis2_reports_dataset["Health Post Type"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Health Post Type";
//	Hospital by ownership ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Hospital by ownership ID";
	$fdata["GoodName"] = "Hospital_by_ownership_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Hospital_by_ownership_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Hospital by ownership ID/*";

	
		$fdata["FullName"] = "Hospital by ownership ID";

	
	
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


	$tdatadhis2_reports_dataset["Hospital by ownership ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Hospital by ownership ID";
//	Hospital by ownership
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Hospital by ownership";
	$fdata["GoodName"] = "Hospital_by_ownership";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Hospital_by_ownership");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Hospital by ownership/*";

	
		$fdata["FullName"] = "Hospital by ownership";

	
	
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


	$tdatadhis2_reports_dataset["Hospital by ownership"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Hospital by ownership";
//	Hospital Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Hospital Type ID";
	$fdata["GoodName"] = "Hospital_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Hospital_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Hospital Type ID/*";

	
		$fdata["FullName"] = "Hospital Type ID";

	
	
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


	$tdatadhis2_reports_dataset["Hospital Type ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Hospital Type ID";
//	Hospital Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Hospital Type";
	$fdata["GoodName"] = "Hospital_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Hospital_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Hospital Type/*";

	
		$fdata["FullName"] = "Hospital Type";

	
	
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


	$tdatadhis2_reports_dataset["Hospital Type"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Hospital Type";
//	Rural ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Rural ID";
	$fdata["GoodName"] = "Rural_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Rural_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Location Urban/Rural ID/*";

	
		$fdata["FullName"] = "Rural ID";

	
	
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


	$tdatadhis2_reports_dataset["Rural ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Rural ID";
//	Rural
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Rural";
	$fdata["GoodName"] = "Rural";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Rural");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Location Urban/Rural/*";

	
		$fdata["FullName"] = "Rural";

	
	
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


	$tdatadhis2_reports_dataset["Rural"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Rural";
//	Ownership ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ownership ID";
	$fdata["GoodName"] = "Ownership_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Ownership_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Ownership ID/*";

	
		$fdata["FullName"] = "Ownership ID";

	
	
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


	$tdatadhis2_reports_dataset["Ownership ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Ownership ID";
//	Ownership
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Ownership";
	$fdata["GoodName"] = "Ownership";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Ownership");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Ownership/*";

	
		$fdata["FullName"] = "Ownership";

	
	
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


	$tdatadhis2_reports_dataset["Ownership"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Ownership";
//	Settlement ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Settlement ID";
	$fdata["GoodName"] = "Settlement_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Settlement_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Settlement ID/*";

	
		$fdata["FullName"] = "Settlement ID";

	
	
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


	$tdatadhis2_reports_dataset["Settlement ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Settlement ID";
//	Settlement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Settlement";
	$fdata["GoodName"] = "Settlement";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Settlement");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Settlement/*";

	
		$fdata["FullName"] = "Settlement";

	
	
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


	$tdatadhis2_reports_dataset["Settlement"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Settlement";
//	Woreda Type ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Woreda Type ID";
	$fdata["GoodName"] = "Woreda_Type_ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Woreda_Type_ID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Woreda Type ID/*";

	
		$fdata["FullName"] = "Woreda Type ID";

	
	
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


	$tdatadhis2_reports_dataset["Woreda Type ID"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Woreda Type ID";
//	Woreda Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Woreda Type";
	$fdata["GoodName"] = "Woreda_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DHIS2_Reports_DataSet","Woreda_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Woreda Type/*";

	
		$fdata["FullName"] = "Woreda Type";

	
	
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


	$tdatadhis2_reports_dataset["Woreda Type"] = $fdata;
		$tdatadhis2_reports_dataset[".searchableFields"][] = "Woreda Type";


$tables_data["DHIS2_Reports_DataSet"]=&$tdatadhis2_reports_dataset;
$field_labels["DHIS2_Reports_DataSet"] = &$fieldLabelsdhis2_reports_dataset;
$fieldToolTips["DHIS2_Reports_DataSet"] = &$fieldToolTipsdhis2_reports_dataset;
$placeHolders["DHIS2_Reports_DataSet"] = &$placeHoldersdhis2_reports_dataset;
$page_titles["DHIS2_Reports_DataSet"] = &$pageTitlesdhis2_reports_dataset;


changeTextControlsToDate( "DHIS2_Reports_DataSet" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Reports_DataSet"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Reports_DataSet"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/dhis2_reports_dataset_ops.php" ) );



	
																												;

																		

$tdatadhis2_reports_dataset[".sqlquery"] = $queryData_dhis2_reports_dataset;



include_once(getabspath("include/dhis2_reports_dataset_events.php"));
$tdatadhis2_reports_dataset[".hasEvents"] = true;

?>