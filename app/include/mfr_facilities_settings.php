<?php
$tdatamfr_facilities = array();
$tdatamfr_facilities[".searchableFields"] = array();
$tdatamfr_facilities[".ShortName"] = "mfr_facilities";
$tdatamfr_facilities[".OwnerID"] = "";
$tdatamfr_facilities[".OriginalTable"] = "MFR_Facilities";


$tdatamfr_facilities[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_facilities[".originalPagesByType"] = $tdatamfr_facilities[".pagesByType"];
$tdatamfr_facilities[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_facilities[".originalPages"] = $tdatamfr_facilities[".pages"];
$tdatamfr_facilities[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_facilities[".originalDefaultPages"] = $tdatamfr_facilities[".defaultPages"];

//	field labels
$fieldLabelsmfr_facilities = array();
$fieldToolTipsmfr_facilities = array();
$pageTitlesmfr_facilities = array();
$placeHoldersmfr_facilities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_facilities["English"] = array();
	$fieldToolTipsmfr_facilities["English"] = array();
	$placeHoldersmfr_facilities["English"] = array();
	$pageTitlesmfr_facilities["English"] = array();
	$fieldLabelsmfr_facilities["English"]["id"] = "Id";
	$fieldToolTipsmfr_facilities["English"]["id"] = "";
	$placeHoldersmfr_facilities["English"]["id"] = "";
	$fieldLabelsmfr_facilities["English"]["name"] = "Name";
	$fieldToolTipsmfr_facilities["English"]["name"] = "";
	$placeHoldersmfr_facilities["English"]["name"] = "";
	$fieldLabelsmfr_facilities["English"]["status"] = "Status";
	$fieldToolTipsmfr_facilities["English"]["status"] = "";
	$placeHoldersmfr_facilities["English"]["status"] = "";
	$fieldLabelsmfr_facilities["English"]["operationalStatus"] = "Operational Status";
	$fieldToolTipsmfr_facilities["English"]["operationalStatus"] = "";
	$placeHoldersmfr_facilities["English"]["operationalStatus"] = "";
	$fieldLabelsmfr_facilities["English"]["facilityType"] = "Facility Type";
	$fieldToolTipsmfr_facilities["English"]["facilityType"] = "";
	$placeHoldersmfr_facilities["English"]["facilityType"] = "";
	$fieldLabelsmfr_facilities["English"]["parentFacilityType"] = "Parent Facility Type";
	$fieldToolTipsmfr_facilities["English"]["parentFacilityType"] = "";
	$placeHoldersmfr_facilities["English"]["parentFacilityType"] = "";
	$fieldLabelsmfr_facilities["English"]["region"] = "Region";
	$fieldToolTipsmfr_facilities["English"]["region"] = "";
	$placeHoldersmfr_facilities["English"]["region"] = "";
	$fieldLabelsmfr_facilities["English"]["zone"] = "Zone";
	$fieldToolTipsmfr_facilities["English"]["zone"] = "";
	$placeHoldersmfr_facilities["English"]["zone"] = "";
	$fieldLabelsmfr_facilities["English"]["woreda"] = "Woreda";
	$fieldToolTipsmfr_facilities["English"]["woreda"] = "";
	$placeHoldersmfr_facilities["English"]["woreda"] = "";
	if (count($fieldToolTipsmfr_facilities["English"]))
		$tdatamfr_facilities[".isUseToolTips"] = true;
}


	$tdatamfr_facilities[".NCSearch"] = true;



$tdatamfr_facilities[".shortTableName"] = "mfr_facilities";
$tdatamfr_facilities[".nSecOptions"] = 0;

$tdatamfr_facilities[".mainTableOwnerID"] = "";
$tdatamfr_facilities[".entityType"] = 7;
$tdatamfr_facilities[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_facilities[".strOriginalTableName"] = "MFR_Facilities";

	



$tdatamfr_facilities[".showAddInPopup"] = false;

$tdatamfr_facilities[".showEditInPopup"] = false;

$tdatamfr_facilities[".showViewInPopup"] = false;

$tdatamfr_facilities[".listAjax"] = false;
//	temporary
//$tdatamfr_facilities[".listAjax"] = false;

	$tdatamfr_facilities[".audit"] = false;

	$tdatamfr_facilities[".locking"] = false;


$pages = $tdatamfr_facilities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_facilities[".edit"] = true;
	$tdatamfr_facilities[".afterEditAction"] = 1;
	$tdatamfr_facilities[".closePopupAfterEdit"] = 1;
	$tdatamfr_facilities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_facilities[".add"] = true;
$tdatamfr_facilities[".afterAddAction"] = 1;
$tdatamfr_facilities[".closePopupAfterAdd"] = 1;
$tdatamfr_facilities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_facilities[".list"] = true;
}



$tdatamfr_facilities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_facilities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_facilities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_facilities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_facilities[".printFriendly"] = true;
}



$tdatamfr_facilities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_facilities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_facilities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_facilities[".isUseAjaxSuggest"] = true;





$tdatamfr_facilities[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_facilities[".buttonsAdded"] = false;

$tdatamfr_facilities[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamfr_facilities[".isUseTimeForSearch"] = false;


$tdatamfr_facilities[".badgeColor"] = "9ACD32";


$tdatamfr_facilities[".allSearchFields"] = array();
$tdatamfr_facilities[".filterFields"] = array();
$tdatamfr_facilities[".requiredSearchFields"] = array();

$tdatamfr_facilities[".googleLikeFields"] = array();
$tdatamfr_facilities[".googleLikeFields"][] = "id";
$tdatamfr_facilities[".googleLikeFields"][] = "name";
$tdatamfr_facilities[".googleLikeFields"][] = "status";
$tdatamfr_facilities[".googleLikeFields"][] = "operationalStatus";
$tdatamfr_facilities[".googleLikeFields"][] = "facilityType";
$tdatamfr_facilities[".googleLikeFields"][] = "parentFacilityType";
$tdatamfr_facilities[".googleLikeFields"][] = "region";
$tdatamfr_facilities[".googleLikeFields"][] = "zone";
$tdatamfr_facilities[".googleLikeFields"][] = "woreda";




$tdatamfr_facilities[".printerPageOrientation"] = 0;
$tdatamfr_facilities[".nPrinterPageScale"] = 100;

$tdatamfr_facilities[".nPrinterSplitRecords"] = 40;

$tdatamfr_facilities[".geocodingEnabled"] = false;










$tdatamfr_facilities[".pageSize"] = 20;

$tdatamfr_facilities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_facilities[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_facilities[".orderindexes"] = array();


$tdatamfr_facilities[".sqlHead"] = "";
$tdatamfr_facilities[".sqlFrom"] = "";
$tdatamfr_facilities[".sqlWhereExpr"] = "";
$tdatamfr_facilities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_facilities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_facilities[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_facilities[".highlightSearchResults"] = true;

$tableKeysmfr_facilities = array();
$tdatamfr_facilities[".Keys"] = $tableKeysmfr_facilities;


$tdatamfr_facilities[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","id");
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


	$tdatamfr_facilities["id"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","name");
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


	$tdatamfr_facilities["name"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "name";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","status");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/status";

	
		$fdata["FullName"] = "status";

	
	
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


	$tdatamfr_facilities["status"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "status";
//	operationalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operationalStatus";
	$fdata["GoodName"] = "operationalStatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","operationalStatus");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/operationalStatus";

	
		$fdata["FullName"] = "operationalStatus";

	
	
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


	$tdatamfr_facilities["operationalStatus"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "operationalStatus";
//	facilityType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "facilityType";
	$fdata["GoodName"] = "facilityType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","facilityType");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/facilityType";

	
		$fdata["FullName"] = "facilityType";

	
	
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


	$tdatamfr_facilities["facilityType"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "facilityType";
//	parentFacilityType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parentFacilityType";
	$fdata["GoodName"] = "parentFacilityType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","parentFacilityType");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/parentFacilityType";

	
		$fdata["FullName"] = "parentFacilityType";

	
	
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


	$tdatamfr_facilities["parentFacilityType"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "parentFacilityType";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","region");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/region";

	
		$fdata["FullName"] = "region";

	
	
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


	$tdatamfr_facilities["region"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "region";
//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","zone");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/zone";

	
		$fdata["FullName"] = "zone";

	
	
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


	$tdatamfr_facilities["zone"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "zone";
//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MFR_Facilities","woreda");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "model/*/woreda";

	
		$fdata["FullName"] = "woreda";

	
	
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


	$tdatamfr_facilities["woreda"] = $fdata;
		$tdatamfr_facilities[".searchableFields"][] = "woreda";


$tables_data["MFR_Facilities"]=&$tdatamfr_facilities;
$field_labels["MFR_Facilities"] = &$fieldLabelsmfr_facilities;
$fieldToolTips["MFR_Facilities"] = &$fieldToolTipsmfr_facilities;
$placeHolders["MFR_Facilities"] = &$placeHoldersmfr_facilities;
$page_titles["MFR_Facilities"] = &$pageTitlesmfr_facilities;


changeTextControlsToDate( "MFR_Facilities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Facilities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Facilities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/mfr_facilities_ops.php" ) );



	
																										;

									

$tdatamfr_facilities[".sqlquery"] = $queryData_mfr_facilities;



include_once(getabspath("include/mfr_facilities_events.php"));
$tdatamfr_facilities[".hasEvents"] = true;

?>