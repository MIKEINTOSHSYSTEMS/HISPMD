<?php
$tdatamfr_facility_types = array();
$tdatamfr_facility_types[".searchableFields"] = array();
$tdatamfr_facility_types[".ShortName"] = "mfr_facility_types";
$tdatamfr_facility_types[".OwnerID"] = "";
$tdatamfr_facility_types[".OriginalTable"] = "MFR_Facility_Types";


$tdatamfr_facility_types[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_facility_types[".originalPagesByType"] = $tdatamfr_facility_types[".pagesByType"];
$tdatamfr_facility_types[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_facility_types[".originalPages"] = $tdatamfr_facility_types[".pages"];
$tdatamfr_facility_types[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_facility_types[".originalDefaultPages"] = $tdatamfr_facility_types[".defaultPages"];

//	field labels
$fieldLabelsmfr_facility_types = array();
$fieldToolTipsmfr_facility_types = array();
$pageTitlesmfr_facility_types = array();
$placeHoldersmfr_facility_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_facility_types["English"] = array();
	$fieldToolTipsmfr_facility_types["English"] = array();
	$placeHoldersmfr_facility_types["English"] = array();
	$pageTitlesmfr_facility_types["English"] = array();
	$fieldLabelsmfr_facility_types["English"]["Parent_Facility_Type"] = "Parent Facility Type";
	$fieldToolTipsmfr_facility_types["English"]["Parent_Facility_Type"] = "";
	$placeHoldersmfr_facility_types["English"]["Parent_Facility_Type"] = "";
	$fieldLabelsmfr_facility_types["English"]["id"] = "Id";
	$fieldToolTipsmfr_facility_types["English"]["id"] = "";
	$placeHoldersmfr_facility_types["English"]["id"] = "";
	$fieldLabelsmfr_facility_types["English"]["parentFacilityTypeId"] = "Parent Facility Type Id";
	$fieldToolTipsmfr_facility_types["English"]["parentFacilityTypeId"] = "";
	$placeHoldersmfr_facility_types["English"]["parentFacilityTypeId"] = "";
	$fieldLabelsmfr_facility_types["English"]["Facility_Type"] = "Facility Type";
	$fieldToolTipsmfr_facility_types["English"]["Facility_Type"] = "";
	$placeHoldersmfr_facility_types["English"]["Facility_Type"] = "";
	$fieldLabelsmfr_facility_types["English"]["code"] = "Code";
	$fieldToolTipsmfr_facility_types["English"]["code"] = "";
	$placeHoldersmfr_facility_types["English"]["code"] = "";
	$fieldLabelsmfr_facility_types["English"]["facilityTypeId"] = "Facility Type Id";
	$fieldToolTipsmfr_facility_types["English"]["facilityTypeId"] = "";
	$placeHoldersmfr_facility_types["English"]["facilityTypeId"] = "";
	if (count($fieldToolTipsmfr_facility_types["English"]))
		$tdatamfr_facility_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmfr_facility_types["Amharic"] = array();
	$fieldToolTipsmfr_facility_types["Amharic"] = array();
	$placeHoldersmfr_facility_types["Amharic"] = array();
	$pageTitlesmfr_facility_types["Amharic"] = array();
	$fieldLabelsmfr_facility_types["Amharic"]["Parent_Facility_Type"] = "የወላጅ መገልገያ ዓይነት";
	$fieldToolTipsmfr_facility_types["Amharic"]["Parent_Facility_Type"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["Parent_Facility_Type"] = "";
	$fieldLabelsmfr_facility_types["Amharic"]["id"] = "መለያ";
	$fieldToolTipsmfr_facility_types["Amharic"]["id"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["id"] = "";
	$fieldLabelsmfr_facility_types["Amharic"]["parentFacilityTypeId"] = "የወላጅ መገልገያ አይነት መለያ";
	$fieldToolTipsmfr_facility_types["Amharic"]["parentFacilityTypeId"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["parentFacilityTypeId"] = "";
	$fieldLabelsmfr_facility_types["Amharic"]["Facility_Type"] = "የመገልገያ አይነት";
	$fieldToolTipsmfr_facility_types["Amharic"]["Facility_Type"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["Facility_Type"] = "";
	$fieldLabelsmfr_facility_types["Amharic"]["code"] = "ኮድ";
	$fieldToolTipsmfr_facility_types["Amharic"]["code"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["code"] = "";
	$fieldLabelsmfr_facility_types["Amharic"]["facilityTypeId"] = "የመገልገያ አይነት መለያ";
	$fieldToolTipsmfr_facility_types["Amharic"]["facilityTypeId"] = "";
	$placeHoldersmfr_facility_types["Amharic"]["facilityTypeId"] = "";
	if (count($fieldToolTipsmfr_facility_types["Amharic"]))
		$tdatamfr_facility_types[".isUseToolTips"] = true;
}


	$tdatamfr_facility_types[".NCSearch"] = true;



$tdatamfr_facility_types[".shortTableName"] = "mfr_facility_types";
$tdatamfr_facility_types[".nSecOptions"] = 0;

$tdatamfr_facility_types[".mainTableOwnerID"] = "";
$tdatamfr_facility_types[".entityType"] = 7;
$tdatamfr_facility_types[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_facility_types[".strOriginalTableName"] = "MFR_Facility_Types";

	



$tdatamfr_facility_types[".showAddInPopup"] = false;

$tdatamfr_facility_types[".showEditInPopup"] = false;

$tdatamfr_facility_types[".showViewInPopup"] = false;

$tdatamfr_facility_types[".listAjax"] = false;
//	temporary
//$tdatamfr_facility_types[".listAjax"] = false;

	$tdatamfr_facility_types[".audit"] = true;

	$tdatamfr_facility_types[".locking"] = false;


$pages = $tdatamfr_facility_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_facility_types[".edit"] = true;
	$tdatamfr_facility_types[".afterEditAction"] = 1;
	$tdatamfr_facility_types[".closePopupAfterEdit"] = 1;
	$tdatamfr_facility_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_facility_types[".add"] = true;
$tdatamfr_facility_types[".afterAddAction"] = 1;
$tdatamfr_facility_types[".closePopupAfterAdd"] = 1;
$tdatamfr_facility_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_facility_types[".list"] = true;
}



$tdatamfr_facility_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_facility_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_facility_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_facility_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_facility_types[".printFriendly"] = true;
}



$tdatamfr_facility_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_facility_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_facility_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_facility_types[".isUseAjaxSuggest"] = false;



			

$tdatamfr_facility_types[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_facility_types[".buttonsAdded"] = false;

$tdatamfr_facility_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_facility_types[".isUseTimeForSearch"] = false;


$tdatamfr_facility_types[".badgeColor"] = "3CB371";


$tdatamfr_facility_types[".allSearchFields"] = array();
$tdatamfr_facility_types[".filterFields"] = array();
$tdatamfr_facility_types[".requiredSearchFields"] = array();

$tdatamfr_facility_types[".googleLikeFields"] = array();
$tdatamfr_facility_types[".googleLikeFields"][] = "Parent Facility Type";
$tdatamfr_facility_types[".googleLikeFields"][] = "id";
$tdatamfr_facility_types[".googleLikeFields"][] = "parentFacilityTypeId";
$tdatamfr_facility_types[".googleLikeFields"][] = "Facility Type";
$tdatamfr_facility_types[".googleLikeFields"][] = "code";
$tdatamfr_facility_types[".googleLikeFields"][] = "facilityTypeId";




$tdatamfr_facility_types[".printerPageOrientation"] = 0;
$tdatamfr_facility_types[".nPrinterPageScale"] = 100;

$tdatamfr_facility_types[".nPrinterSplitRecords"] = 40;

$tdatamfr_facility_types[".geocodingEnabled"] = false;










$tdatamfr_facility_types[".pageSize"] = 20;

$tdatamfr_facility_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_facility_types[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_facility_types[".orderindexes"] = array();


$tdatamfr_facility_types[".sqlHead"] = "";
$tdatamfr_facility_types[".sqlFrom"] = "";
$tdatamfr_facility_types[".sqlWhereExpr"] = "";
$tdatamfr_facility_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_facility_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_facility_types[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_facility_types[".highlightSearchResults"] = true;

$tableKeysmfr_facility_types = array();
$tdatamfr_facility_types[".Keys"] = $tableKeysmfr_facility_types;


$tdatamfr_facility_types[".hideMobileList"] = array();




//	Parent Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Parent Facility Type";
	$fdata["GoodName"] = "Parent_Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","Parent_Facility_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/name";

	
		$fdata["FullName"] = "Parent Facility Type";

	
	
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


	$tdatamfr_facility_types["Parent Facility Type"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "Parent Facility Type";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","id");
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


	$tdatamfr_facility_types["id"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "id";
//	parentFacilityTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "parentFacilityTypeId";
	$fdata["GoodName"] = "parentFacilityTypeId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","parentFacilityTypeId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "model/*/childFacilityTypes/*/parentFacilityTypeId";

	
		$fdata["FullName"] = "parentFacilityTypeId";

	
	
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


	$tdatamfr_facility_types["parentFacilityTypeId"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "parentFacilityTypeId";
//	Facility Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Facility Type";
	$fdata["GoodName"] = "Facility_Type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","Facility_Type");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/childFacilityTypes/*/name";

	
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


	$tdatamfr_facility_types["Facility Type"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "Facility Type";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","code");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/childFacilityTypes/*/code";

	
		$fdata["FullName"] = "code";

	
	
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


	$tdatamfr_facility_types["code"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "code";
//	facilityTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "facilityTypeId";
	$fdata["GoodName"] = "facilityTypeId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility_Types","facilityTypeId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "model/*/childFacilityTypes/*/id";

	
		$fdata["FullName"] = "facilityTypeId";

	
	
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


	$tdatamfr_facility_types["facilityTypeId"] = $fdata;
		$tdatamfr_facility_types[".searchableFields"][] = "facilityTypeId";


$tables_data["MFR_Facility_Types"]=&$tdatamfr_facility_types;
$field_labels["MFR_Facility_Types"] = &$fieldLabelsmfr_facility_types;
$fieldToolTips["MFR_Facility_Types"] = &$fieldToolTipsmfr_facility_types;
$placeHolders["MFR_Facility_Types"] = &$placeHoldersmfr_facility_types;
$page_titles["MFR_Facility_Types"] = &$pageTitlesmfr_facility_types;


changeTextControlsToDate( "MFR_Facility_Types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Facility_Types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Facility_Types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_facility_types_ops.php" ) );



	
																												;

						

$tdatamfr_facility_types[".sqlquery"] = $queryData_mfr_facility_types;



$tdatamfr_facility_types[".hasEvents"] = false;

?>