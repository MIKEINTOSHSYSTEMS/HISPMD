<?php
$tdatapublic_mfr_facilities_register_chart = array();
$tdatapublic_mfr_facilities_register_chart[".searchableFields"] = array();
$tdatapublic_mfr_facilities_register_chart[".ShortName"] = "public_mfr_facilities_register_chart";
$tdatapublic_mfr_facilities_register_chart[".OwnerID"] = "";
$tdatapublic_mfr_facilities_register_chart[".OriginalTable"] = "public.mfr_facilities_register";


$tdatapublic_mfr_facilities_register_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatapublic_mfr_facilities_register_chart[".originalPagesByType"] = $tdatapublic_mfr_facilities_register_chart[".pagesByType"];
$tdatapublic_mfr_facilities_register_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatapublic_mfr_facilities_register_chart[".originalPages"] = $tdatapublic_mfr_facilities_register_chart[".pages"];
$tdatapublic_mfr_facilities_register_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatapublic_mfr_facilities_register_chart[".originalDefaultPages"] = $tdatapublic_mfr_facilities_register_chart[".defaultPages"];

//	field labels
$fieldLabelspublic_mfr_facilities_register_chart = array();
$fieldToolTipspublic_mfr_facilities_register_chart = array();
$pageTitlespublic_mfr_facilities_register_chart = array();
$placeHolderspublic_mfr_facilities_register_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_mfr_facilities_register_chart["English"] = array();
	$fieldToolTipspublic_mfr_facilities_register_chart["English"] = array();
	$placeHolderspublic_mfr_facilities_register_chart["English"] = array();
	$pageTitlespublic_mfr_facilities_register_chart["English"] = array();
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["status"] = "Status";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["status"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["status"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["operationalstatus"] = "Operationalstatus";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["operationalstatus"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["operationalstatus"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["facilitytype"] = "Facilitytype";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["facilitytype"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["facilitytype"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["parentfacilitytype"] = "Parentfacilitytype";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["parentfacilitytype"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["parentfacilitytype"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["region"] = "Region";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["region"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["region"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["zone"] = "Zone";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["zone"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["zone"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["woreda"] = "Woreda";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["woreda"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["woreda"] = "";
	$fieldLabelspublic_mfr_facilities_register_chart["English"]["COUNT___"] = "COUNT(*)";
	$fieldToolTipspublic_mfr_facilities_register_chart["English"]["COUNT___"] = "";
	$placeHolderspublic_mfr_facilities_register_chart["English"]["COUNT___"] = "";
	if (count($fieldToolTipspublic_mfr_facilities_register_chart["English"]))
		$tdatapublic_mfr_facilities_register_chart[".isUseToolTips"] = true;
}


	$tdatapublic_mfr_facilities_register_chart[".NCSearch"] = true;

	$tdatapublic_mfr_facilities_register_chart[".ChartRefreshTime"] = 0;


$tdatapublic_mfr_facilities_register_chart[".shortTableName"] = "public_mfr_facilities_register_chart";
$tdatapublic_mfr_facilities_register_chart[".nSecOptions"] = 0;

$tdatapublic_mfr_facilities_register_chart[".mainTableOwnerID"] = "";
$tdatapublic_mfr_facilities_register_chart[".entityType"] = 3;
$tdatapublic_mfr_facilities_register_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatapublic_mfr_facilities_register_chart[".strOriginalTableName"] = "public.mfr_facilities_register";

	



$tdatapublic_mfr_facilities_register_chart[".showAddInPopup"] = false;

$tdatapublic_mfr_facilities_register_chart[".showEditInPopup"] = false;

$tdatapublic_mfr_facilities_register_chart[".showViewInPopup"] = false;

$tdatapublic_mfr_facilities_register_chart[".listAjax"] = false;
//	temporary
//$tdatapublic_mfr_facilities_register_chart[".listAjax"] = false;

	$tdatapublic_mfr_facilities_register_chart[".audit"] = false;

	$tdatapublic_mfr_facilities_register_chart[".locking"] = false;


$pages = $tdatapublic_mfr_facilities_register_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_mfr_facilities_register_chart[".edit"] = true;
	$tdatapublic_mfr_facilities_register_chart[".afterEditAction"] = 1;
	$tdatapublic_mfr_facilities_register_chart[".closePopupAfterEdit"] = 1;
	$tdatapublic_mfr_facilities_register_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_mfr_facilities_register_chart[".add"] = true;
$tdatapublic_mfr_facilities_register_chart[".afterAddAction"] = 1;
$tdatapublic_mfr_facilities_register_chart[".closePopupAfterAdd"] = 1;
$tdatapublic_mfr_facilities_register_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_mfr_facilities_register_chart[".list"] = true;
}



$tdatapublic_mfr_facilities_register_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_mfr_facilities_register_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_mfr_facilities_register_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_mfr_facilities_register_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_mfr_facilities_register_chart[".printFriendly"] = true;
}



$tdatapublic_mfr_facilities_register_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_mfr_facilities_register_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_mfr_facilities_register_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_mfr_facilities_register_chart[".isUseAjaxSuggest"] = true;



			

$tdatapublic_mfr_facilities_register_chart[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_mfr_facilities_register_chart[".buttonsAdded"] = false;

$tdatapublic_mfr_facilities_register_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_mfr_facilities_register_chart[".isUseTimeForSearch"] = false;


$tdatapublic_mfr_facilities_register_chart[".badgeColor"] = "00C2C5";


$tdatapublic_mfr_facilities_register_chart[".allSearchFields"] = array();
$tdatapublic_mfr_facilities_register_chart[".filterFields"] = array();
$tdatapublic_mfr_facilities_register_chart[".requiredSearchFields"] = array();

$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"] = array();
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "status";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "operationalstatus";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "facilitytype";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "parentfacilitytype";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "region";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "zone";
$tdatapublic_mfr_facilities_register_chart[".googleLikeFields"][] = "woreda";



$tdatapublic_mfr_facilities_register_chart[".tableType"] = "chart";

$tdatapublic_mfr_facilities_register_chart[".printerPageOrientation"] = 0;
$tdatapublic_mfr_facilities_register_chart[".nPrinterPageScale"] = 100;

$tdatapublic_mfr_facilities_register_chart[".nPrinterSplitRecords"] = 40;

$tdatapublic_mfr_facilities_register_chart[".geocodingEnabled"] = false;



// chart settings
$tdatapublic_mfr_facilities_register_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatapublic_mfr_facilities_register_chart[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_mfr_facilities_register_chart[".orderindexes"] = array();


$tdatapublic_mfr_facilities_register_chart[".sqlHead"] = "SELECT status AS status,  operationalstatus AS operationalstatus,  facilitytype AS facilitytype,  parentfacilitytype AS parentfacilitytype,  region AS region,  \"zone\" AS \"zone\",  woreda AS woreda,  COUNT(*) AS \"COUNT(*)\"";
$tdatapublic_mfr_facilities_register_chart[".sqlFrom"] = "FROM \"public\".mfr_facilities_register";
$tdatapublic_mfr_facilities_register_chart[".sqlWhereExpr"] = "";
$tdatapublic_mfr_facilities_register_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_mfr_facilities_register_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_mfr_facilities_register_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_mfr_facilities_register_chart[".highlightSearchResults"] = true;

$tableKeyspublic_mfr_facilities_register_chart = array();
$tdatapublic_mfr_facilities_register_chart[".Keys"] = $tableKeyspublic_mfr_facilities_register_chart;


$tdatapublic_mfr_facilities_register_chart[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","status");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["status"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "status";
//	operationalstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "operationalstatus";
	$fdata["GoodName"] = "operationalstatus";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","operationalstatus");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["operationalstatus"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "operationalstatus";
//	facilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "facilitytype";
	$fdata["GoodName"] = "facilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","facilitytype");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["facilitytype"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "facilitytype";
//	parentfacilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parentfacilitytype";
	$fdata["GoodName"] = "parentfacilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","parentfacilitytype");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["parentfacilitytype"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "parentfacilitytype";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","region");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["region"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "region";
//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","zone");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["zone"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "zone";
//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","woreda");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatapublic_mfr_facilities_register_chart["woreda"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "woreda";
//	COUNT(*)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(*)";
	$fdata["GoodName"] = "COUNT___";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register_chart","COUNT___");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "COUNT(*)";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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


	$tdatapublic_mfr_facilities_register_chart["COUNT(*)"] = $fdata;
		$tdatapublic_mfr_facilities_register_chart[".searchableFields"][] = "COUNT(*)";

$tdatapublic_mfr_facilities_register_chart[".groupChart"] = true;
$tdatapublic_mfr_facilities_register_chart[".chartLabelInterval"] = 0;
$tdatapublic_mfr_facilities_register_chart[".chartLabelField"] = "region";
$tdatapublic_mfr_facilities_register_chart[".chartSeries"] = array();
$tdatapublic_mfr_facilities_register_chart[".chartSeries"][] = array(
	"field" => "COUNT(*)",
	"total" => "SUM"
);
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">public.mfr_facilities_register_chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">COUNT(*)</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">region</attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Facilities By Region").'</attr>
<attr value="foot">'.xmlencode("Regions").'</attr>
<attr value="y_axis_label">'.xmlencode("id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">operationalstatus</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","operationalstatus")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">facilitytype</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","facilitytype")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">parentfacilitytype</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","parentfacilitytype")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">zone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","zone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">woreda</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","woreda")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">COUNT(*)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_mfr_facilities_register_chart","COUNT___")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatapublic_mfr_facilities_register_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">public.mfr_facilities_register_chart</attr>
<attr value="short_table_name">public_mfr_facilities_register_chart</attr>
</attr>

</chart>';

$tables_data["public.mfr_facilities_register_chart"]=&$tdatapublic_mfr_facilities_register_chart;
$field_labels["public_mfr_facilities_register_chart"] = &$fieldLabelspublic_mfr_facilities_register_chart;
$fieldToolTips["public_mfr_facilities_register_chart"] = &$fieldToolTipspublic_mfr_facilities_register_chart;
$placeHolders["public_mfr_facilities_register_chart"] = &$placeHolderspublic_mfr_facilities_register_chart;
$page_titles["public_mfr_facilities_register_chart"] = &$pageTitlespublic_mfr_facilities_register_chart;


changeTextControlsToDate( "public.mfr_facilities_register_chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_facilities_register_chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_facilities_register_chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_mfr_facilities_register_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status AS status,  operationalstatus AS operationalstatus,  facilitytype AS facilitytype,  parentfacilitytype AS parentfacilitytype,  region AS region,  \"zone\" AS \"zone\",  woreda AS woreda,  COUNT(*) AS \"COUNT(*)\"";
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
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto6["m_sql"] = "status";
$proto6["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "status";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto8["m_sql"] = "operationalstatus";
$proto8["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "operationalstatus";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto10["m_sql"] = "facilitytype";
$proto10["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "facilitytype";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto12["m_sql"] = "parentfacilitytype";
$proto12["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "parentfacilitytype";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto14["m_sql"] = "region";
$proto14["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "region";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto16["m_sql"] = "\"zone\"";
$proto16["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "zone";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto18["m_sql"] = "woreda";
$proto18["m_srcTableName"] = "public.mfr_facilities_register_chart";
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
$proto20["m_srcTableName"] = "public.mfr_facilities_register_chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "COUNT(*)";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.mfr_facilities_register";
$proto24["m_srcTableName"] = "public.mfr_facilities_register_chart";
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
$proto23["m_srcTableName"] = "public.mfr_facilities_register_chart";
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
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register_chart"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.mfr_facilities_register_chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_mfr_facilities_register_chart = createSqlQuery_public_mfr_facilities_register_chart();


	
																												;

								

$tdatapublic_mfr_facilities_register_chart[".sqlquery"] = $queryData_public_mfr_facilities_register_chart;



$tdatapublic_mfr_facilities_register_chart[".hasEvents"] = false;

?>