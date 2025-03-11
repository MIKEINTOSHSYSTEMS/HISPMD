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
	$fieldLabelspublic_mfr_facilities_register_report["English"]["count"] = "Count";
	$fieldToolTipspublic_mfr_facilities_register_report["English"]["count"] = "";
	$placeHolderspublic_mfr_facilities_register_report["English"]["count"] = "";
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
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "status";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "operationalstatus";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "facilitytype";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "parentfacilitytype";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "region";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "zone";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "woreda";
$tdatapublic_mfr_facilities_register_report[".googleLikeFields"][] = "count";



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







$tstrOrderBy = "ORDER BY status, operationalstatus, facilitytype, parentfacilitytype, region, \"zone\", woreda";
$tdatapublic_mfr_facilities_register_report[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_mfr_facilities_register_report[".orderindexes"] = array();
	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "status");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "operationalstatus");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "facilitytype");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "parentfacilitytype");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "region");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "\"zone\"");

	$tdatapublic_mfr_facilities_register_report[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "woreda");



$tdatapublic_mfr_facilities_register_report[".sqlHead"] = "SELECT status AS status,  operationalstatus AS operationalstatus,  facilitytype AS facilitytype,  parentfacilitytype AS parentfacilitytype,  region AS region,  \"zone\" AS \"zone\",  woreda AS woreda,  COUNT(*)";
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
$tdatapublic_mfr_facilities_register_report[".Keys"] = $tableKeyspublic_mfr_facilities_register_report;


$tdatapublic_mfr_facilities_register_report[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
	$fdata["Index"] = 2;
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
	$fdata["Index"] = 3;
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
	$fdata["Index"] = 4;
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
	$fdata["Index"] = 5;
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
	$fdata["Index"] = 6;
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
	$fdata["Index"] = 7;
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
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_report","count");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "count";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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


	$tdatapublic_mfr_facilities_register_report["count"] = $fdata;
		$tdatapublic_mfr_facilities_register_report[".searchableFields"][] = "count";


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
$proto0["m_strFieldList"] = "status AS status,  operationalstatus AS operationalstatus,  facilitytype AS facilitytype,  parentfacilitytype AS parentfacilitytype,  region AS region,  \"zone\" AS \"zone\",  woreda AS woreda,  COUNT(*)";
$proto0["m_strFrom"] = "FROM \"public\".mfr_facilities_register";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY status, operationalstatus, facilitytype, parentfacilitytype, region, \"zone\", woreda";
	
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
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto6["m_sql"] = "status";
$proto6["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "status";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto8["m_sql"] = "operationalstatus";
$proto8["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "operationalstatus";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto10["m_sql"] = "facilitytype";
$proto10["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "facilitytype";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto12["m_sql"] = "parentfacilitytype";
$proto12["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "parentfacilitytype";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto14["m_sql"] = "region";
$proto14["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "region";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto16["m_sql"] = "\"zone\"";
$proto16["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "zone";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto18["m_sql"] = "woreda";
$proto18["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "woreda";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(*)";
$proto20["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.mfr_facilities_register";
$proto24["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "name";
$proto24["m_columns"][] = "status";
$proto24["m_columns"][] = "operationalstatus";
$proto24["m_columns"][] = "facilitytype";
$proto24["m_columns"][] = "parentfacilitytype";
$proto24["m_columns"][] = "region";
$proto24["m_columns"][] = "zone";
$proto24["m_columns"][] = "woreda";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "\"public\".mfr_facilities_register";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "public.mfr_facilities_register_report";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 1;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 1;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 1;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 1;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_report"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="public.mfr_facilities_register_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_mfr_facilities_register_report = createSqlQuery_public_mfr_facilities_register_report();


	
																												;

								

$tdatapublic_mfr_facilities_register_report[".sqlquery"] = $queryData_public_mfr_facilities_register_report;



$tdatapublic_mfr_facilities_register_report[".hasEvents"] = false;

?>