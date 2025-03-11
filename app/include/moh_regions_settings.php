<?php
$tdatamoh_regions = array();
$tdatamoh_regions[".searchableFields"] = array();
$tdatamoh_regions[".ShortName"] = "moh_regions";
$tdatamoh_regions[".OwnerID"] = "";
$tdatamoh_regions[".OriginalTable"] = "public.moh_regions";


$tdatamoh_regions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_regions[".originalPagesByType"] = $tdatamoh_regions[".pagesByType"];
$tdatamoh_regions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_regions[".originalPages"] = $tdatamoh_regions[".pages"];
$tdatamoh_regions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_regions[".originalDefaultPages"] = $tdatamoh_regions[".defaultPages"];

//	field labels
$fieldLabelsmoh_regions = array();
$fieldToolTipsmoh_regions = array();
$pageTitlesmoh_regions = array();
$placeHoldersmoh_regions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_regions["English"] = array();
	$fieldToolTipsmoh_regions["English"] = array();
	$placeHoldersmoh_regions["English"] = array();
	$pageTitlesmoh_regions["English"] = array();
	$fieldLabelsmoh_regions["English"]["region_id"] = "Region Id";
	$fieldToolTipsmoh_regions["English"]["region_id"] = "";
	$placeHoldersmoh_regions["English"]["region_id"] = "";
	$fieldLabelsmoh_regions["English"]["region_name"] = "Region Name";
	$fieldToolTipsmoh_regions["English"]["region_name"] = "";
	$placeHoldersmoh_regions["English"]["region_name"] = "";
	$fieldLabelsmoh_regions["English"]["region_alternate"] = "Region Alternate";
	$fieldToolTipsmoh_regions["English"]["region_alternate"] = "";
	$placeHoldersmoh_regions["English"]["region_alternate"] = "";
	$fieldLabelsmoh_regions["English"]["lat"] = "Lat";
	$fieldToolTipsmoh_regions["English"]["lat"] = "";
	$placeHoldersmoh_regions["English"]["lat"] = "";
	$fieldLabelsmoh_regions["English"]["lng"] = "Lng";
	$fieldToolTipsmoh_regions["English"]["lng"] = "";
	$placeHoldersmoh_regions["English"]["lng"] = "";
	$fieldLabelsmoh_regions["English"]["code"] = "Code";
	$fieldToolTipsmoh_regions["English"]["code"] = "";
	$placeHoldersmoh_regions["English"]["code"] = "";
	$fieldLabelsmoh_regions["English"]["map"] = "Map";
	$fieldToolTipsmoh_regions["English"]["map"] = "";
	$placeHoldersmoh_regions["English"]["map"] = "";
	$fieldLabelsmoh_regions["English"]["region_code"] = "Region Code";
	$fieldToolTipsmoh_regions["English"]["region_code"] = "";
	$placeHoldersmoh_regions["English"]["region_code"] = "";
	if (count($fieldToolTipsmoh_regions["English"]))
		$tdatamoh_regions[".isUseToolTips"] = true;
}


	$tdatamoh_regions[".NCSearch"] = true;



$tdatamoh_regions[".shortTableName"] = "moh_regions";
$tdatamoh_regions[".nSecOptions"] = 0;

$tdatamoh_regions[".mainTableOwnerID"] = "";
$tdatamoh_regions[".entityType"] = 0;
$tdatamoh_regions[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_regions[".strOriginalTableName"] = "public.moh_regions";

	



$tdatamoh_regions[".showAddInPopup"] = false;

$tdatamoh_regions[".showEditInPopup"] = false;

$tdatamoh_regions[".showViewInPopup"] = false;

$tdatamoh_regions[".listAjax"] = false;
//	temporary
//$tdatamoh_regions[".listAjax"] = false;

	$tdatamoh_regions[".audit"] = true;

	$tdatamoh_regions[".locking"] = false;


$pages = $tdatamoh_regions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_regions[".edit"] = true;
	$tdatamoh_regions[".afterEditAction"] = 1;
	$tdatamoh_regions[".closePopupAfterEdit"] = 1;
	$tdatamoh_regions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_regions[".add"] = true;
$tdatamoh_regions[".afterAddAction"] = 1;
$tdatamoh_regions[".closePopupAfterAdd"] = 1;
$tdatamoh_regions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_regions[".list"] = true;
}



$tdatamoh_regions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_regions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_regions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_regions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_regions[".printFriendly"] = true;
}



$tdatamoh_regions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_regions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_regions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_regions[".isUseAjaxSuggest"] = true;



			

$tdatamoh_regions[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_regions[".buttonsAdded"] = false;

$tdatamoh_regions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_regions[".isUseTimeForSearch"] = false;

$tdatamoh_regions[".isUseFieldsMaps"] = true;

$tdatamoh_regions[".badgeColor"] = "E8926F";


$tdatamoh_regions[".allSearchFields"] = array();
$tdatamoh_regions[".filterFields"] = array();
$tdatamoh_regions[".requiredSearchFields"] = array();

$tdatamoh_regions[".googleLikeFields"] = array();
$tdatamoh_regions[".googleLikeFields"][] = "region_id";
$tdatamoh_regions[".googleLikeFields"][] = "region_name";
$tdatamoh_regions[".googleLikeFields"][] = "region_alternate";
$tdatamoh_regions[".googleLikeFields"][] = "lat";
$tdatamoh_regions[".googleLikeFields"][] = "lng";
$tdatamoh_regions[".googleLikeFields"][] = "code";
$tdatamoh_regions[".googleLikeFields"][] = "map";
$tdatamoh_regions[".googleLikeFields"][] = "region_code";



$tdatamoh_regions[".tableType"] = "list";

$tdatamoh_regions[".printerPageOrientation"] = 0;
$tdatamoh_regions[".nPrinterPageScale"] = 100;

$tdatamoh_regions[".nPrinterSplitRecords"] = 40;

$tdatamoh_regions[".geocodingEnabled"] = false;




$tdatamoh_regions[".isDisplayLoading"] = true;






$tdatamoh_regions[".pageSize"] = 20;

$tdatamoh_regions[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY region_code";
$tdatamoh_regions[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_regions[".orderindexes"] = array();
	$tdatamoh_regions[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "region_code");



$tdatamoh_regions[".sqlHead"] = "SELECT region_id,  region_name,  region_alternate,  lat,  lng,  code,  \"map\",  region_code";
$tdatamoh_regions[".sqlFrom"] = "FROM \"public\".moh_regions";
$tdatamoh_regions[".sqlWhereExpr"] = "";
$tdatamoh_regions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_regions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_regions[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_regions[".highlightSearchResults"] = true;

$tableKeysmoh_regions = array();
$tableKeysmoh_regions[] = "region_id";
$tdatamoh_regions[".Keys"] = $tableKeysmoh_regions;


$tdatamoh_regions[".hideMobileList"] = array();




//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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


	$tdatamoh_regions["region_id"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_id";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "region_name";

		$fdata["sourceSingle"] = "region_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";

	
	
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


	$tdatamoh_regions["region_name"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_name";
//	region_alternate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "region_alternate";
	$fdata["GoodName"] = "region_alternate";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_alternate");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "region_alternate";

		$fdata["sourceSingle"] = "region_alternate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_alternate";

	
	
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


	$tdatamoh_regions["region_alternate"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_alternate";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lat";

		$fdata["sourceSingle"] = "lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lat";

	
	
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


	$tdatamoh_regions["lat"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","lng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lng";

		$fdata["sourceSingle"] = "lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lng";

	
	
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


	$tdatamoh_regions["lng"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "lng";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "code";

		$fdata["sourceSingle"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatamoh_regions["code"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "code";
//	map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "map";
	$fdata["GoodName"] = "map";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","map");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "map";

		$fdata["sourceSingle"] = "map";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"map\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "";
	$vdata["mapData"]['lat'] = "lat";
	$vdata["mapData"]['lng'] = "lng";
	$vdata["mapData"]['desc'] = "region_name";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 5;

	
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


	$tdatamoh_regions["map"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "map";
//	region_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "region_code";
	$fdata["GoodName"] = "region_code";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_code");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "region_code";

		$fdata["sourceSingle"] = "region_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_code";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatamoh_regions["region_code"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_code";


$tables_data["public.moh_regions"]=&$tdatamoh_regions;
$field_labels["public_moh_regions"] = &$fieldLabelsmoh_regions;
$fieldToolTips["public_moh_regions"] = &$fieldToolTipsmoh_regions;
$placeHolders["public_moh_regions"] = &$placeHoldersmoh_regions;
$page_titles["public_moh_regions"] = &$pageTitlesmoh_regions;


changeTextControlsToDate( "public.moh_regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_regions"] = array();
//	public.moh_indicator_data
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicator_data";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicator_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicator_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"][]="region_id";
//	MOH_Indicators_Data_Report
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MOH_Indicators_Data_Report";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		$detailsParam["dType"]=PAGE_REPORT;
	
		$detailsParam["dShortTable"] = "moh_indicators_data_report";
	$detailsParam["dCaptionTable"] = GetTableCaption("MOH_Indicators_Data_Report");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"][]="region_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_regions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region_id,  region_name,  region_alternate,  lat,  lng,  code,  \"map\",  region_code";
$proto0["m_strFrom"] = "FROM \"public\".moh_regions";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY region_code";
	
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
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto6["m_sql"] = "region_id";
$proto6["m_srcTableName"] = "public.moh_regions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto8["m_sql"] = "region_name";
$proto8["m_srcTableName"] = "public.moh_regions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "region_alternate",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto10["m_sql"] = "region_alternate";
$proto10["m_srcTableName"] = "public.moh_regions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto12["m_sql"] = "lat";
$proto12["m_srcTableName"] = "public.moh_regions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto14["m_sql"] = "lng";
$proto14["m_srcTableName"] = "public.moh_regions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto16["m_sql"] = "code";
$proto16["m_srcTableName"] = "public.moh_regions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "map",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto18["m_sql"] = "\"map\"";
$proto18["m_srcTableName"] = "public.moh_regions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "region_code",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto20["m_sql"] = "region_code";
$proto20["m_srcTableName"] = "public.moh_regions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.moh_regions";
$proto23["m_srcTableName"] = "public.moh_regions";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "region_id";
$proto23["m_columns"][] = "region_name";
$proto23["m_columns"][] = "region_alternate";
$proto23["m_columns"][] = "lat";
$proto23["m_columns"][] = "lng";
$proto23["m_columns"][] = "code";
$proto23["m_columns"][] = "map";
$proto23["m_columns"][] = "region_code";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".moh_regions";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.moh_regions";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "region_code",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="public.moh_regions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_regions = createSqlQuery_moh_regions();


	
																												;

								

$tdatamoh_regions[".sqlquery"] = $queryData_moh_regions;



$tdatamoh_regions[".hasEvents"] = false;

?>