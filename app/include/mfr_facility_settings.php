<?php
$tdatamfr_facility = array();
$tdatamfr_facility[".searchableFields"] = array();
$tdatamfr_facility[".ShortName"] = "mfr_facility";
$tdatamfr_facility[".OwnerID"] = "";
$tdatamfr_facility[".OriginalTable"] = "MFR_Facility";


$tdatamfr_facility[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_facility[".originalPagesByType"] = $tdatamfr_facility[".pagesByType"];
$tdatamfr_facility[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_facility[".originalPages"] = $tdatamfr_facility[".pages"];
$tdatamfr_facility[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_facility[".originalDefaultPages"] = $tdatamfr_facility[".defaultPages"];

//	field labels
$fieldLabelsmfr_facility = array();
$fieldToolTipsmfr_facility = array();
$pageTitlesmfr_facility = array();
$placeHoldersmfr_facility = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_facility["English"] = array();
	$fieldToolTipsmfr_facility["English"] = array();
	$placeHoldersmfr_facility["English"] = array();
	$pageTitlesmfr_facility["English"] = array();
	$fieldLabelsmfr_facility["English"]["id"] = "Id";
	$fieldToolTipsmfr_facility["English"]["id"] = "";
	$placeHoldersmfr_facility["English"]["id"] = "";
	$fieldLabelsmfr_facility["English"]["name"] = "Name";
	$fieldToolTipsmfr_facility["English"]["name"] = "";
	$placeHoldersmfr_facility["English"]["name"] = "";
	$fieldLabelsmfr_facility["English"]["pageCount"] = "Page Count";
	$fieldToolTipsmfr_facility["English"]["pageCount"] = "";
	$placeHoldersmfr_facility["English"]["pageCount"] = "";
	$fieldLabelsmfr_facility["English"]["totalCount"] = "Total Count";
	$fieldToolTipsmfr_facility["English"]["totalCount"] = "";
	$placeHoldersmfr_facility["English"]["totalCount"] = "";
	$fieldLabelsmfr_facility["English"]["statusId"] = "Status";
	$fieldToolTipsmfr_facility["English"]["statusId"] = "";
	$placeHoldersmfr_facility["English"]["statusId"] = "";
	$fieldLabelsmfr_facility["English"]["operationalStatusId"] = "Operational Status";
	$fieldToolTipsmfr_facility["English"]["operationalStatusId"] = "";
	$placeHoldersmfr_facility["English"]["operationalStatusId"] = "";
	$fieldLabelsmfr_facility["English"]["facilityTypeId"] = "Facility Type";
	$fieldToolTipsmfr_facility["English"]["facilityTypeId"] = "";
	$placeHoldersmfr_facility["English"]["facilityTypeId"] = "";
	$fieldLabelsmfr_facility["English"]["parentFacilityTypeId"] = "Parent Facility Type";
	$fieldToolTipsmfr_facility["English"]["parentFacilityTypeId"] = "";
	$placeHoldersmfr_facility["English"]["parentFacilityTypeId"] = "";
	$fieldLabelsmfr_facility["English"]["regionId"] = "Region";
	$fieldToolTipsmfr_facility["English"]["regionId"] = "";
	$placeHoldersmfr_facility["English"]["regionId"] = "";
	$fieldLabelsmfr_facility["English"]["zoneId"] = "Zone";
	$fieldToolTipsmfr_facility["English"]["zoneId"] = "";
	$placeHoldersmfr_facility["English"]["zoneId"] = "";
	$fieldLabelsmfr_facility["English"]["woredaId"] = "Woreda";
	$fieldToolTipsmfr_facility["English"]["woredaId"] = "";
	$placeHoldersmfr_facility["English"]["woredaId"] = "";
	if (count($fieldToolTipsmfr_facility["English"]))
		$tdatamfr_facility[".isUseToolTips"] = true;
}


	$tdatamfr_facility[".NCSearch"] = true;



$tdatamfr_facility[".shortTableName"] = "mfr_facility";
$tdatamfr_facility[".nSecOptions"] = 0;

$tdatamfr_facility[".mainTableOwnerID"] = "";
$tdatamfr_facility[".entityType"] = 7;
$tdatamfr_facility[".connId"] = "hispmdathispmdmerqconsultanmfr";


$tdatamfr_facility[".strOriginalTableName"] = "MFR_Facility";

	



$tdatamfr_facility[".showAddInPopup"] = false;

$tdatamfr_facility[".showEditInPopup"] = false;

$tdatamfr_facility[".showViewInPopup"] = false;

$tdatamfr_facility[".listAjax"] = false;
//	temporary
//$tdatamfr_facility[".listAjax"] = false;

	$tdatamfr_facility[".audit"] = false;

	$tdatamfr_facility[".locking"] = false;


$pages = $tdatamfr_facility[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_facility[".edit"] = true;
	$tdatamfr_facility[".afterEditAction"] = 1;
	$tdatamfr_facility[".closePopupAfterEdit"] = 1;
	$tdatamfr_facility[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_facility[".add"] = true;
$tdatamfr_facility[".afterAddAction"] = 1;
$tdatamfr_facility[".closePopupAfterAdd"] = 1;
$tdatamfr_facility[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_facility[".list"] = true;
}



$tdatamfr_facility[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_facility[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_facility[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_facility[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_facility[".printFriendly"] = true;
}



$tdatamfr_facility[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_facility[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_facility[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_facility[".isUseAjaxSuggest"] = false;





$tdatamfr_facility[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_facility[".buttonsAdded"] = false;

$tdatamfr_facility[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_facility[".isUseTimeForSearch"] = false;


$tdatamfr_facility[".badgeColor"] = "6493EA";


$tdatamfr_facility[".allSearchFields"] = array();
$tdatamfr_facility[".filterFields"] = array();
$tdatamfr_facility[".requiredSearchFields"] = array();

$tdatamfr_facility[".googleLikeFields"] = array();
$tdatamfr_facility[".googleLikeFields"][] = "statusId";
$tdatamfr_facility[".googleLikeFields"][] = "operationalStatusId";
$tdatamfr_facility[".googleLikeFields"][] = "facilityTypeId";
$tdatamfr_facility[".googleLikeFields"][] = "parentFacilityTypeId";
$tdatamfr_facility[".googleLikeFields"][] = "regionId";
$tdatamfr_facility[".googleLikeFields"][] = "zoneId";
$tdatamfr_facility[".googleLikeFields"][] = "woredaId";




$tdatamfr_facility[".printerPageOrientation"] = 0;
$tdatamfr_facility[".nPrinterPageScale"] = 100;

$tdatamfr_facility[".nPrinterSplitRecords"] = 40;

$tdatamfr_facility[".geocodingEnabled"] = false;










$tdatamfr_facility[".pageSize"] = 20;

$tdatamfr_facility[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_facility[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_facility[".orderindexes"] = array();


$tdatamfr_facility[".sqlHead"] = "";
$tdatamfr_facility[".sqlFrom"] = "";
$tdatamfr_facility[".sqlWhereExpr"] = "";
$tdatamfr_facility[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_facility[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_facility[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_facility[".highlightSearchResults"] = true;

$tableKeysmfr_facility = array();
$tdatamfr_facility[".Keys"] = $tableKeysmfr_facility;


$tdatamfr_facility[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/id";

	
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


	$tdatamfr_facility["id"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/name";

	
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


	$tdatamfr_facility["name"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "name";
//	statusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "statusId";
	$fdata["GoodName"] = "statusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","statusId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/status";

	
		$fdata["FullName"] = "statusId";

	
	
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
	$edata["LookupTable"] = "MFR_Status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["statusId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "statusId";
//	operationalStatusId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operationalStatusId";
	$fdata["GoodName"] = "operationalStatusId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","operationalStatusId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/operationalStatus";

	
		$fdata["FullName"] = "operationalStatusId";

	
	
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
	$edata["LookupTable"] = "MFR_Operational_Statuses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["operationalStatusId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "operationalStatusId";
//	facilityTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "facilityTypeId";
	$fdata["GoodName"] = "facilityTypeId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","facilityTypeId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/facilityType";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "MFR_Facility_Types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facilityTypeId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Facility Type";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "parentFacilityTypeId", "lookup" => "parentFacilityTypeId" );

	
	

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["facilityTypeId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "facilityTypeId";
//	parentFacilityTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parentFacilityTypeId";
	$fdata["GoodName"] = "parentFacilityTypeId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","parentFacilityTypeId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/parentFacilityType";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "MFR_Facility_Types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Parent Facility Type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "facilityTypeId";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["parentFacilityTypeId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "parentFacilityTypeId";
//	regionId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "regionId";
	$fdata["GoodName"] = "regionId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","regionId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/region";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "MFR_Regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "zoneId";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["regionId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "regionId";
//	zoneId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "zoneId";
	$fdata["GoodName"] = "zoneId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","zoneId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/zone";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "MFR_Zones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "regionId", "lookup" => "regionId" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "woredaId";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["zoneId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "zoneId";
//	woredaId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "woredaId";
	$fdata["GoodName"] = "woredaId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","woredaId");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/woreda";

	
		$fdata["FullName"] = "woredaId";

	
	
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
	$edata["LookupTable"] = "MFR_Woredas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "zoneId", "lookup" => "zoneId" );

	
	

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatamfr_facility["woredaId"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "woredaId";
//	pageCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pageCount";
	$fdata["GoodName"] = "pageCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","pageCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/pageCount";

	
		$fdata["FullName"] = "pageCount";

	
	
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


	$tdatamfr_facility["pageCount"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "pageCount";
//	totalCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "totalCount";
	$fdata["GoodName"] = "totalCount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facility","totalCount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/totalCount";

	
		$fdata["FullName"] = "totalCount";

	
	
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


	$tdatamfr_facility["totalCount"] = $fdata;
		$tdatamfr_facility[".searchableFields"][] = "totalCount";


$tables_data["MFR_Facility"]=&$tdatamfr_facility;
$field_labels["MFR_Facility"] = &$fieldLabelsmfr_facility;
$fieldToolTips["MFR_Facility"] = &$fieldToolTipsmfr_facility;
$placeHolders["MFR_Facility"] = &$placeHoldersmfr_facility;
$page_titles["MFR_Facility"] = &$pageTitlesmfr_facility;


changeTextControlsToDate( "MFR_Facility" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Facility"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Facility"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_facility_ops.php" ) );



	
								;

											

$tdatamfr_facility[".sqlquery"] = $queryData_mfr_facility;



include_once(getabspath("include/mfr_facility_events.php"));
$tdatamfr_facility[".hasEvents"] = true;

?>