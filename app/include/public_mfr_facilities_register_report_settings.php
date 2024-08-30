<?php
$tdatapublic_mfr_facilities_register_report = array();
$tdatapublic_mfr_facilities_register_report[".searchableFields"] = array();
$tdatapublic_mfr_facilities_register_report[".ShortName"] = "public_mfr_facilities_register_report";
$tdatapublic_mfr_facilities_register_report[".OwnerID"] = "";
$tdatapublic_mfr_facilities_register_report[".OriginalTable"] = "public.mfr_facilities_register";


$tdatapublic_mfr_facilities_register_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapublic_mfr_facilities_register_report[".originalPagesByType"] = $tdatapublic_mfr_facilities_register_report[".pagesByType"];
$tdatapublic_mfr_facilities_register_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapublic_mfr_facilities_register_report[".originalPages"] = $tdatapublic_mfr_facilities_register_report[".pages"];
$tdatapublic_mfr_facilities_register_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapublic_mfr_facilities_register_report[".originalDefaultPages"] = $tdatapublic_mfr_facilities_register_report[".defaultPages"];

//	field labels
$fieldLabelspublic_mfr_facilities_register_report = array();
$fieldToolTipspublic_mfr_facilities_register_report = array();
$pageTitlespublic_mfr_facilities_register_report = array();
$placeHolderspublic_mfr_facilities_register_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_mfr_facilities_register_report["English"] = array();
	$fieldToolTipspublic_mfr_facilities_register_report["English"] = array();
	$placeHolderspublic_mfr_facilities_register_report["English"] = array();
	$pageTitlespublic_mfr_facilities_register_report["English"] = array();
	$fieldLabelspublic_mfr_facilities_register_report["English"]["id"] = "Id";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["id"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["id"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["name"] = "Name";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["name"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["name"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["status"] = "Status";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["status"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["status"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["operationalstatus"] = "Operationalstatus";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["operationalstatus"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["operationalstatus"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["facilitytype"] = "Facilitytype";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["facilitytype"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["facilitytype"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["parentfacilitytype"] = "Parentfacilitytype";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["parentfacilitytype"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["parentfacilitytype"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["region"] = "Region";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["region"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["region"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["zone"] = "Zone";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["zone"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["zone"] = "";
	$fieldLabelspublic_mfr_facilities_register_report["English"]["woreda"] = "Woreda";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["woreda"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["woreda"] = "";
	if (count($fieldToolTipspublic_mfr_facilities_register_report["English"]))
		$tdatapublic_mfr_facilities_register_report[".isUseToolTips"] = true;
}


	$tdatapublic_mfr_facilities_register_report[".NCSearch"] = true;



$tdatapublic_mfr_facilities_register_report[".shortTableName"] = "public_mfr_facilities_register_report";
$tdatapublic_mfr_facilities_register_report[".nSecOptions"] = 0;

$tdatapublic_mfr_facilities_register_report[".mainTableOwnerID"] = "";
$tdatapublic_mfr_facilities_register_report[".entityType"] = 2;
$tdatapublic_mfr_facilities_register_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatapublic_mfr_facilities_register_report[".strOriginalTableName"] = "public.mfr_facilities_register";

	



$tdatapublic_mfr_facilities_register_report[".showAddInPopup"] = false;

$tdatapublic_mfr_facilities_register_report[".showEditInPopup"] = false;

$tdatapublic_mfr_facilities_register_report[".showViewInPopup"] = false;

$tdatapublic_mfr_facilities_register_report[".listAjax"] = false;
//	temporary
//$tdatapublic_mfr_facilities_register_report[".listAjax"] = false;

	$tdatapublic_mfr_facilities_register_report[".audit"] = false;

	$tdatapublic_mfr_facilities_register_report[".locking"] = false;


$pages = $tdatapublic_mfr_facilities_register_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_mfr_facilities_register_report[".edit"] = true;
	$tdatapublic_mfr_facilities_register_report[".afterEditAction"] = 1;
	$tdatapublic_mfr_facilities_register_report[".closePopupAfterEdit"] = 1;
	$tdatapublic_mfr_facilities_register_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_mfr_facilities_register_report[".add"] = true;
$tdatapublic_mfr_facilities_register_report[".afterAddAction"] = 1;
$tdatapublic_mfr_facilities_register_report[".closePopupAfterAdd"] = 1;
$tdatapublic_mfr_facilities_register_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_mfr_facilities_register_report[".list"] = true;
}



$tdatapublic_mfr_facilities_register_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_mfr_facilities_register_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_mfr_facilities_register_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_mfr_facilities_register_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_mfr_facilities_register_report[".printFriendly"] = true;
}



$tdatapublic_mfr_facilities_register_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_mfr_facilities_register_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_mfr_facilities_register_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_mfr_facilities_register_report[".isUseAjaxSuggest"] = true;





$tdatapublic_mfr_facilities_register_report[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_mfr_facilities_register_report[".buttonsAdded"] = false;

$tdatapublic_mfr_facilities_register_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_mfr_facilities_register_report[".isUseTimeForSearch"] = false;


$tdatapublic_mfr_facilities_register_report[".badgeColor"] = "CD853F";


$tdatapublic_mfr_facilities_register_report[".allSearchFields"] = array();
$tdatapublic_mfr_facilities_register_report[".filterFields"] = array();
$tdatapublic_mfr_facilities_register_report[".requiredSearchFields"] = array();

$tdatapublic_mfr_facilities_register_report[".googleLikeFields"] = array();
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "id";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "name";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "status";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "operationalstatus";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "facilitytype";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "parentfacilitytype";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "region";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "zone";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "woreda";



$tdatapublic_mfr_facilities_register_report[".tableType"] = "report";

$tdatapublic_mfr_facilities_register_report[".printerPageOrientation"] = 0;
$tdatapublic_mfr_facilities_register_report[".nPrinterPageScale"] = 100;

$tdatapublic_mfr_facilities_register_report[".nPrinterSplitRecords"] = 40;

$tdatapublic_mfr_facilities_register_report[".geocodingEnabled"] = false;

//report settings

$tdatapublic_mfr_facilities_register_report[".reportPrintGroupsPerPage"] = 5;
$tdatapublic_mfr_facilities_register_report[".reportPrintRecordsPerPage"] = 40;

$tdatapublic_mfr_facilities_register_report[".pageSizeGroups"] = 5;
$tdatapublic_mfr_facilities_register_report[".pageSizeRecords"] = 20;


//end of report settings



$tdatapublic_mfr_facilities_register_report[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatapublic_mfr_facilities_register_report[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_mfr_facilities_register_report[".orderindexes"] = array();


$tdatapublic_mfr_facilities_register_report[".sqlHead"] = "SELECT id,  	name,  	status,  	operationalstatus,  	facilitytype,  	parentfacilitytype,  	region,  	\"zone\",  	woreda";
$tdatapublic_mfr_facilities_register_report[".sqlFrom"] = "FROM \"public\".mfr_facilities_register";
$tdatapublic_mfr_facilities_register_report[".sqlWhereExpr"] = "";
$tdatapublic_mfr_facilities_register_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_mfr_facilities_register_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_mfr_facilities_register_report[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_mfr_facilities_register_report[".highlightSearchResults"] = true;

$tableKeyspublic_mfr_facilities_register_report = array();
$tableKeyspublic_mfr_facilities_register_report[] = "id";
$tdatapublic_mfr_facilities_register_report[".Keys"] = $tableKeyspublic_mfr_facilities_register_report;


$tdatapublic_mfr_facilities_register_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatapublic_mfr_facilities_register_report["id"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["name"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "name";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["status"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "status";
//	operationalstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operationalstatus";
	$fdata["GoodName"] = "operationalstatus";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","operationalstatus");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "operationalstatus";

		$fdata["sourceSingle"] = "operationalstatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "operationalstatus";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["operationalstatus"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "operationalstatus";
//	facilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "facilitytype";
	$fdata["GoodName"] = "facilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","facilitytype");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "facilitytype";

		$fdata["sourceSingle"] = "facilitytype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facilitytype";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["facilitytype"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "facilitytype";
//	parentfacilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parentfacilitytype";
	$fdata["GoodName"] = "parentfacilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","parentfacilitytype");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "parentfacilitytype";

		$fdata["sourceSingle"] = "parentfacilitytype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parentfacilitytype";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["parentfacilitytype"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "parentfacilitytype";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","region");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "region";

		$fdata["sourceSingle"] = "region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["region"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "region";
//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","zone");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "zone";

		$fdata["sourceSingle"] = "zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"zone\"";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["zone"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "zone";
//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","woreda");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "woreda";

		$fdata["sourceSingle"] = "woreda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "woreda";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatapublic_mfr_facilities_register_report["woreda"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "woreda";


$tables_data["public.mfr_facilities_register_report"]=&$tdatapublic_mfr_facilities_register_report;
$field_labels["public_mfr_facilities_register_report"] = &$fieldLabelspublic_mfr_facilities_register_report;
$fieldToolTips["public_mfr_facilities_register_report"] = &$fieldToolTipspublic_mfr_facilities_register_report;
$placeHolders["public_mfr_facilities_register_report"] = &$placeHolderspublic_mfr_facilities_register_report;
$page_titles["public_mfr_facilities_register_report"] = &$pageTitlespublic_mfr_facilities_register_report;


changeTextControlsToDate( "public.mfr_facilities_register_report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_facilities_register_report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_facilities_register_report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_mfr_facilities_register_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	status,  	operationalstatus,  	facilitytype,  	parentfacilitytype,  	region,  	\"zone\",  	woreda";
$proto0["m_strFrom"] = "FROM \"public\".mfr_facilities_register";
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
	"m_strName" => "id",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto12["m_sql"] = "operationalstatus";
$proto12["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto14["m_sql"] = "facilitytype";
$proto14["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto16["m_sql"] = "parentfacilitytype";
$proto16["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto18["m_sql"] = "region";
$proto18["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto20["m_sql"] = "\"zone\"";
$proto20["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto22["m_sql"] = "woreda";
$proto22["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.mfr_facilities_register";
$proto25["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "operationalstatus";
$proto25["m_columns"][] = "facilitytype";
$proto25["m_columns"][] = "parentfacilitytype";
$proto25["m_columns"][] = "region";
$proto25["m_columns"][] = "zone";
$proto25["m_columns"][] = "woreda";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".mfr_facilities_register";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.mfr_facilities_register_report";
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
$proto0["m_srcTableName"]="public.mfr_facilities_register_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_mfr_facilities_register_report = createSqlQuery_public_mfr_facilities_register_report();


	
																												;

									

$tdatapublic_mfr_facilities_register_report[".sqlquery"] = $queryData_public_mfr_facilities_register_report;



$tdatapublic_mfr_facilities_register_report[".hasEvents"] = false;

?>