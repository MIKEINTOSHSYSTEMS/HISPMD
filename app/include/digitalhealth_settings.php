<?php
$tdatadigitalhealth = array();
$tdatadigitalhealth[".searchableFields"] = array();
$tdatadigitalhealth[".ShortName"] = "digitalhealth";
$tdatadigitalhealth[".OwnerID"] = "";
$tdatadigitalhealth[".OriginalTable"] = "public.digitalhealth";


$tdatadigitalhealth[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadigitalhealth[".originalPagesByType"] = $tdatadigitalhealth[".pagesByType"];
$tdatadigitalhealth[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadigitalhealth[".originalPages"] = $tdatadigitalhealth[".pages"];
$tdatadigitalhealth[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadigitalhealth[".originalDefaultPages"] = $tdatadigitalhealth[".defaultPages"];

//	field labels
$fieldLabelsdigitalhealth = array();
$fieldToolTipsdigitalhealth = array();
$pageTitlesdigitalhealth = array();
$placeHoldersdigitalhealth = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdigitalhealth["English"] = array();
	$fieldToolTipsdigitalhealth["English"] = array();
	$placeHoldersdigitalhealth["English"] = array();
	$pageTitlesdigitalhealth["English"] = array();
	$fieldLabelsdigitalhealth["English"]["dh_id"] = "Dh Id";
	$fieldToolTipsdigitalhealth["English"]["dh_id"] = "";
	$placeHoldersdigitalhealth["English"]["dh_id"] = "";
	$fieldLabelsdigitalhealth["English"]["site_type"] = "Site Type";
	$fieldToolTipsdigitalhealth["English"]["site_type"] = "";
	$placeHoldersdigitalhealth["English"]["site_type"] = "";
	$fieldLabelsdigitalhealth["English"]["dhis2_functional"] = "Dhis2 Functional";
	$fieldToolTipsdigitalhealth["English"]["dhis2_functional"] = "";
	$placeHoldersdigitalhealth["English"]["dhis2_functional"] = "";
	$fieldLabelsdigitalhealth["English"]["dhis2_online"] = "Dhis2 Online";
	$fieldToolTipsdigitalhealth["English"]["dhis2_online"] = "";
	$placeHoldersdigitalhealth["English"]["dhis2_online"] = "";
	$fieldLabelsdigitalhealth["English"]["mfr_updated"] = "Mfr Updated";
	$fieldToolTipsdigitalhealth["English"]["mfr_updated"] = "";
	$placeHoldersdigitalhealth["English"]["mfr_updated"] = "";
	$fieldLabelsdigitalhealth["English"]["echis_implemented"] = "Echis Implemented";
	$fieldToolTipsdigitalhealth["English"]["echis_implemented"] = "";
	$placeHoldersdigitalhealth["English"]["echis_implemented"] = "";
	$fieldLabelsdigitalhealth["English"]["emr_status"] = "Emr Status";
	$fieldToolTipsdigitalhealth["English"]["emr_status"] = "";
	$placeHoldersdigitalhealth["English"]["emr_status"] = "";
	$fieldLabelsdigitalhealth["English"]["ihris_hra_implemented"] = "Ihris Hra Implemented";
	$fieldToolTipsdigitalhealth["English"]["ihris_hra_implemented"] = "";
	$placeHoldersdigitalhealth["English"]["ihris_hra_implemented"] = "";
	$fieldLabelsdigitalhealth["English"]["hcmis_implemented"] = "Hcmis Implemented";
	$fieldToolTipsdigitalhealth["English"]["hcmis_implemented"] = "";
	$placeHoldersdigitalhealth["English"]["hcmis_implemented"] = "";
	if (count($fieldToolTipsdigitalhealth["English"]))
		$tdatadigitalhealth[".isUseToolTips"] = true;
}


	$tdatadigitalhealth[".NCSearch"] = true;



$tdatadigitalhealth[".shortTableName"] = "digitalhealth";
$tdatadigitalhealth[".nSecOptions"] = 0;

$tdatadigitalhealth[".mainTableOwnerID"] = "";
$tdatadigitalhealth[".entityType"] = 0;
$tdatadigitalhealth[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadigitalhealth[".strOriginalTableName"] = "public.digitalhealth";

	



$tdatadigitalhealth[".showAddInPopup"] = false;

$tdatadigitalhealth[".showEditInPopup"] = false;

$tdatadigitalhealth[".showViewInPopup"] = false;

$tdatadigitalhealth[".listAjax"] = false;
//	temporary
//$tdatadigitalhealth[".listAjax"] = false;

	$tdatadigitalhealth[".audit"] = true;

	$tdatadigitalhealth[".locking"] = false;


$pages = $tdatadigitalhealth[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadigitalhealth[".edit"] = true;
	$tdatadigitalhealth[".afterEditAction"] = 1;
	$tdatadigitalhealth[".closePopupAfterEdit"] = 1;
	$tdatadigitalhealth[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadigitalhealth[".add"] = true;
$tdatadigitalhealth[".afterAddAction"] = 1;
$tdatadigitalhealth[".closePopupAfterAdd"] = 1;
$tdatadigitalhealth[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadigitalhealth[".list"] = true;
}



$tdatadigitalhealth[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadigitalhealth[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadigitalhealth[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadigitalhealth[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadigitalhealth[".printFriendly"] = true;
}



$tdatadigitalhealth[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadigitalhealth[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadigitalhealth[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadigitalhealth[".isUseAjaxSuggest"] = true;



			

$tdatadigitalhealth[".ajaxCodeSnippetAdded"] = false;

$tdatadigitalhealth[".buttonsAdded"] = false;

$tdatadigitalhealth[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadigitalhealth[".isUseTimeForSearch"] = false;


$tdatadigitalhealth[".badgeColor"] = "BC8F8F";


$tdatadigitalhealth[".allSearchFields"] = array();
$tdatadigitalhealth[".filterFields"] = array();
$tdatadigitalhealth[".requiredSearchFields"] = array();

$tdatadigitalhealth[".googleLikeFields"] = array();
$tdatadigitalhealth[".googleLikeFields"][] = "dh_id";
$tdatadigitalhealth[".googleLikeFields"][] = "site_type";
$tdatadigitalhealth[".googleLikeFields"][] = "dhis2_functional";
$tdatadigitalhealth[".googleLikeFields"][] = "dhis2_online";
$tdatadigitalhealth[".googleLikeFields"][] = "mfr_updated";
$tdatadigitalhealth[".googleLikeFields"][] = "echis_implemented";
$tdatadigitalhealth[".googleLikeFields"][] = "emr_status";
$tdatadigitalhealth[".googleLikeFields"][] = "ihris_hra_implemented";
$tdatadigitalhealth[".googleLikeFields"][] = "hcmis_implemented";



$tdatadigitalhealth[".tableType"] = "list";

$tdatadigitalhealth[".printerPageOrientation"] = 0;
$tdatadigitalhealth[".nPrinterPageScale"] = 100;

$tdatadigitalhealth[".nPrinterSplitRecords"] = 40;

$tdatadigitalhealth[".geocodingEnabled"] = false;










$tdatadigitalhealth[".pageSize"] = 20;

$tdatadigitalhealth[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadigitalhealth[".strOrderBy"] = $tstrOrderBy;

$tdatadigitalhealth[".orderindexes"] = array();


$tdatadigitalhealth[".sqlHead"] = "SELECT dh_id,  	site_type,  	dhis2_functional,  	dhis2_online,  	mfr_updated,  	echis_implemented,  	emr_status,  	ihris_hra_implemented,  	hcmis_implemented";
$tdatadigitalhealth[".sqlFrom"] = "FROM \"public\".digitalhealth";
$tdatadigitalhealth[".sqlWhereExpr"] = "";
$tdatadigitalhealth[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadigitalhealth[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadigitalhealth[".arrGroupsPerPage"] = $arrGPP;

$tdatadigitalhealth[".highlightSearchResults"] = true;

$tableKeysdigitalhealth = array();
$tableKeysdigitalhealth[] = "dh_id";
$tdatadigitalhealth[".Keys"] = $tableKeysdigitalhealth;


$tdatadigitalhealth[".hideMobileList"] = array();




//	dh_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dh_id";
	$fdata["GoodName"] = "dh_id";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","dh_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dh_id";

		$fdata["sourceSingle"] = "dh_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dh_id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["dh_id"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "dh_id";
//	site_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "site_type";
	$fdata["GoodName"] = "site_type";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","site_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "site_type";

		$fdata["sourceSingle"] = "site_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "site_type";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["site_type"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "site_type";
//	dhis2_functional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dhis2_functional";
	$fdata["GoodName"] = "dhis2_functional";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","dhis2_functional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dhis2_functional";

		$fdata["sourceSingle"] = "dhis2_functional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dhis2_functional";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["dhis2_functional"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "dhis2_functional";
//	dhis2_online
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dhis2_online";
	$fdata["GoodName"] = "dhis2_online";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","dhis2_online");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dhis2_online";

		$fdata["sourceSingle"] = "dhis2_online";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dhis2_online";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["dhis2_online"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "dhis2_online";
//	mfr_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mfr_updated";
	$fdata["GoodName"] = "mfr_updated";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","mfr_updated");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mfr_updated";

		$fdata["sourceSingle"] = "mfr_updated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mfr_updated";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["mfr_updated"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "mfr_updated";
//	echis_implemented
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "echis_implemented";
	$fdata["GoodName"] = "echis_implemented";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","echis_implemented");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "echis_implemented";

		$fdata["sourceSingle"] = "echis_implemented";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "echis_implemented";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["echis_implemented"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "echis_implemented";
//	emr_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "emr_status";
	$fdata["GoodName"] = "emr_status";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","emr_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "emr_status";

		$fdata["sourceSingle"] = "emr_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emr_status";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["emr_status"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "emr_status";
//	ihris_hra_implemented
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ihris_hra_implemented";
	$fdata["GoodName"] = "ihris_hra_implemented";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","ihris_hra_implemented");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ihris_hra_implemented";

		$fdata["sourceSingle"] = "ihris_hra_implemented";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ihris_hra_implemented";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["ihris_hra_implemented"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "ihris_hra_implemented";
//	hcmis_implemented
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hcmis_implemented";
	$fdata["GoodName"] = "hcmis_implemented";
	$fdata["ownerTable"] = "public.digitalhealth";
	$fdata["Label"] = GetFieldLabel("public_digitalhealth","hcmis_implemented");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hcmis_implemented";

		$fdata["sourceSingle"] = "hcmis_implemented";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hcmis_implemented";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadigitalhealth["hcmis_implemented"] = $fdata;
		$tdatadigitalhealth[".searchableFields"][] = "hcmis_implemented";


$tables_data["public.digitalhealth"]=&$tdatadigitalhealth;
$field_labels["public_digitalhealth"] = &$fieldLabelsdigitalhealth;
$fieldToolTips["public_digitalhealth"] = &$fieldToolTipsdigitalhealth;
$placeHolders["public_digitalhealth"] = &$placeHoldersdigitalhealth;
$page_titles["public_digitalhealth"] = &$pageTitlesdigitalhealth;


changeTextControlsToDate( "public.digitalhealth" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.digitalhealth"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.digitalhealth"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_digitalhealth()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dh_id,  	site_type,  	dhis2_functional,  	dhis2_online,  	mfr_updated,  	echis_implemented,  	emr_status,  	ihris_hra_implemented,  	hcmis_implemented";
$proto0["m_strFrom"] = "FROM \"public\".digitalhealth";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "dh_id",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto6["m_sql"] = "dh_id";
$proto6["m_srcTableName"] = "public.digitalhealth";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "site_type",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto8["m_sql"] = "site_type";
$proto8["m_srcTableName"] = "public.digitalhealth";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dhis2_functional",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto10["m_sql"] = "dhis2_functional";
$proto10["m_srcTableName"] = "public.digitalhealth";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dhis2_online",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto12["m_sql"] = "dhis2_online";
$proto12["m_srcTableName"] = "public.digitalhealth";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mfr_updated",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto14["m_sql"] = "mfr_updated";
$proto14["m_srcTableName"] = "public.digitalhealth";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "echis_implemented",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto16["m_sql"] = "echis_implemented";
$proto16["m_srcTableName"] = "public.digitalhealth";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "emr_status",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto18["m_sql"] = "emr_status";
$proto18["m_srcTableName"] = "public.digitalhealth";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ihris_hra_implemented",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto20["m_sql"] = "ihris_hra_implemented";
$proto20["m_srcTableName"] = "public.digitalhealth";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hcmis_implemented",
	"m_strTable" => "public.digitalhealth",
	"m_srcTableName" => "public.digitalhealth"
));

$proto22["m_sql"] = "hcmis_implemented";
$proto22["m_srcTableName"] = "public.digitalhealth";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.digitalhealth";
$proto25["m_srcTableName"] = "public.digitalhealth";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "dh_id";
$proto25["m_columns"][] = "site_type";
$proto25["m_columns"][] = "dhis2_functional";
$proto25["m_columns"][] = "dhis2_online";
$proto25["m_columns"][] = "mfr_updated";
$proto25["m_columns"][] = "echis_implemented";
$proto25["m_columns"][] = "emr_status";
$proto25["m_columns"][] = "ihris_hra_implemented";
$proto25["m_columns"][] = "hcmis_implemented";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".digitalhealth";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.digitalhealth";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.digitalhealth";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_digitalhealth = createSqlQuery_digitalhealth();


	
																												;

									

$tdatadigitalhealth[".sqlquery"] = $queryData_digitalhealth;



$tdatadigitalhealth[".hasEvents"] = false;

?>