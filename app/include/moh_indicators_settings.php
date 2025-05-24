<?php
$tdatamoh_indicators = array();
$tdatamoh_indicators[".searchableFields"] = array();
$tdatamoh_indicators[".ShortName"] = "moh_indicators";
$tdatamoh_indicators[".OwnerID"] = "";
$tdatamoh_indicators[".OriginalTable"] = "public.moh_indicators";


$tdatamoh_indicators[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_indicators[".originalPagesByType"] = $tdatamoh_indicators[".pagesByType"];
$tdatamoh_indicators[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_indicators[".originalPages"] = $tdatamoh_indicators[".pages"];
$tdatamoh_indicators[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_indicators[".originalDefaultPages"] = $tdatamoh_indicators[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicators = array();
$fieldToolTipsmoh_indicators = array();
$pageTitlesmoh_indicators = array();
$placeHoldersmoh_indicators = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicators["English"] = array();
	$fieldToolTipsmoh_indicators["English"] = array();
	$placeHoldersmoh_indicators["English"] = array();
	$pageTitlesmoh_indicators["English"] = array();
	$fieldLabelsmoh_indicators["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsmoh_indicators["English"]["indicator_id"] = "";
	$placeHoldersmoh_indicators["English"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsmoh_indicators["English"]["indicator_name"] = "";
	$placeHoldersmoh_indicators["English"]["indicator_name"] = "";
	$fieldLabelsmoh_indicators["English"]["baseline"] = "Baseline";
	$fieldToolTipsmoh_indicators["English"]["baseline"] = "";
	$placeHoldersmoh_indicators["English"]["baseline"] = "";
	$fieldLabelsmoh_indicators["English"]["target"] = "Target";
	$fieldToolTipsmoh_indicators["English"]["target"] = "";
	$placeHoldersmoh_indicators["English"]["target"] = "";
	$fieldLabelsmoh_indicators["English"]["indicator_group_id"] = "Indicator Group Id";
	$fieldToolTipsmoh_indicators["English"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicators["English"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicators["English"]["indicator_shortname"] = "Indicator Shortname";
	$fieldToolTipsmoh_indicators["English"]["indicator_shortname"] = "";
	$placeHoldersmoh_indicators["English"]["indicator_shortname"] = "";
	$fieldLabelsmoh_indicators["English"]["indicator_desc"] = "Indicator Desc";
	$fieldToolTipsmoh_indicators["English"]["indicator_desc"] = "";
	$placeHoldersmoh_indicators["English"]["indicator_desc"] = "";
	if (count($fieldToolTipsmoh_indicators["English"]))
		$tdatamoh_indicators[".isUseToolTips"] = true;
}


	$tdatamoh_indicators[".NCSearch"] = true;



$tdatamoh_indicators[".shortTableName"] = "moh_indicators";
$tdatamoh_indicators[".nSecOptions"] = 0;

$tdatamoh_indicators[".mainTableOwnerID"] = "";
$tdatamoh_indicators[".entityType"] = 0;
$tdatamoh_indicators[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicators[".strOriginalTableName"] = "public.moh_indicators";

	



$tdatamoh_indicators[".showAddInPopup"] = false;

$tdatamoh_indicators[".showEditInPopup"] = false;

$tdatamoh_indicators[".showViewInPopup"] = false;

$tdatamoh_indicators[".listAjax"] = false;
//	temporary
//$tdatamoh_indicators[".listAjax"] = false;

	$tdatamoh_indicators[".audit"] = true;

	$tdatamoh_indicators[".locking"] = false;


$pages = $tdatamoh_indicators[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicators[".edit"] = true;
	$tdatamoh_indicators[".afterEditAction"] = 1;
	$tdatamoh_indicators[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicators[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicators[".add"] = true;
$tdatamoh_indicators[".afterAddAction"] = 1;
$tdatamoh_indicators[".closePopupAfterAdd"] = 1;
$tdatamoh_indicators[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicators[".list"] = true;
}



$tdatamoh_indicators[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicators[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicators[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicators[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicators[".printFriendly"] = true;
}



$tdatamoh_indicators[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicators[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicators[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicators[".isUseAjaxSuggest"] = true;



						

$tdatamoh_indicators[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicators[".buttonsAdded"] = false;

$tdatamoh_indicators[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_indicators[".isUseTimeForSearch"] = false;


$tdatamoh_indicators[".badgeColor"] = "E07878";


$tdatamoh_indicators[".allSearchFields"] = array();
$tdatamoh_indicators[".filterFields"] = array();
$tdatamoh_indicators[".requiredSearchFields"] = array();

$tdatamoh_indicators[".googleLikeFields"] = array();
$tdatamoh_indicators[".googleLikeFields"][] = "indicator_id";
$tdatamoh_indicators[".googleLikeFields"][] = "indicator_name";
$tdatamoh_indicators[".googleLikeFields"][] = "baseline";
$tdatamoh_indicators[".googleLikeFields"][] = "target";
$tdatamoh_indicators[".googleLikeFields"][] = "indicator_group_id";
$tdatamoh_indicators[".googleLikeFields"][] = "indicator_shortname";
$tdatamoh_indicators[".googleLikeFields"][] = "indicator_desc";



$tdatamoh_indicators[".tableType"] = "list";

$tdatamoh_indicators[".printerPageOrientation"] = 0;
$tdatamoh_indicators[".nPrinterPageScale"] = 100;

$tdatamoh_indicators[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicators[".geocodingEnabled"] = false;










$tdatamoh_indicators[".pageSize"] = 20;

$tdatamoh_indicators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_indicators[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators[".orderindexes"] = array();


$tdatamoh_indicators[".sqlHead"] = "SELECT indicator_id,  	indicator_name,  	baseline,  	target,  	indicator_group_id,  	indicator_shortname,  	indicator_desc";
$tdatamoh_indicators[".sqlFrom"] = "FROM \"public\".moh_indicators";
$tdatamoh_indicators[".sqlWhereExpr"] = "";
$tdatamoh_indicators[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicators[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicators[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicators[".highlightSearchResults"] = true;

$tableKeysmoh_indicators = array();
$tableKeysmoh_indicators[] = "indicator_id";
$tdatamoh_indicators[".Keys"] = $tableKeysmoh_indicators;


$tdatamoh_indicators[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","indicator_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_id";

	
	
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


	$tdatamoh_indicators["indicator_id"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","indicator_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "indicator_name";

		$fdata["sourceSingle"] = "indicator_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_name";

	
	
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


	$tdatamoh_indicators["indicator_name"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "indicator_name";
//	baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "baseline";
	$fdata["GoodName"] = "baseline";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","baseline");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "baseline";

		$fdata["sourceSingle"] = "baseline";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "baseline";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatamoh_indicators["baseline"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "baseline";
//	target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "target";
	$fdata["GoodName"] = "target";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "target";

		$fdata["sourceSingle"] = "target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatamoh_indicators["target"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "target";
//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","indicator_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_id";

	
	
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
	$edata["LookupTable"] = "public.moh_indicator_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_group_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "indicator_group_name";

	

	
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


	$tdatamoh_indicators["indicator_group_id"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "indicator_group_id";
//	indicator_shortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "indicator_shortname";
	$fdata["GoodName"] = "indicator_shortname";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","indicator_shortname");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "indicator_shortname";

		$fdata["sourceSingle"] = "indicator_shortname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_shortname";

	
	
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


	$tdatamoh_indicators["indicator_shortname"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "indicator_shortname";
//	indicator_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "indicator_desc";
	$fdata["GoodName"] = "indicator_desc";
	$fdata["ownerTable"] = "public.moh_indicators";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators","indicator_desc");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "indicator_desc";

		$fdata["sourceSingle"] = "indicator_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_desc";

	
	
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


	$tdatamoh_indicators["indicator_desc"] = $fdata;
		$tdatamoh_indicators[".searchableFields"][] = "indicator_desc";


$tables_data["public.moh_indicators"]=&$tdatamoh_indicators;
$field_labels["public_moh_indicators"] = &$fieldLabelsmoh_indicators;
$fieldToolTips["public_moh_indicators"] = &$fieldToolTipsmoh_indicators;
$placeHolders["public_moh_indicators"] = &$placeHoldersmoh_indicators;
$page_titles["public_moh_indicators"] = &$pageTitlesmoh_indicators;


changeTextControlsToDate( "public.moh_indicators" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_indicators"] = array();
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


		
	$detailsTablesData["public.moh_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"][]="indicator_id";
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


		
	$detailsTablesData["public.moh_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"][]="indicator_id";
//	public.moh_indicators_target
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicators_target";
		$detailsParam["dOriginalTable"] = "public.moh_indicators_target";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicators_target";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicators_target");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"][]="indicator_id";

	$detailsTablesData["public.moh_indicators"][$dIndex]["masterKeys"][]="indicator_name";

				$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"][]="indicator_id";

		
	$detailsTablesData["public.moh_indicators"][$dIndex]["detailKeys"][]="indicator_name";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_indicators"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_indicator_groups";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_indicator_groups";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_indicator_groups";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicators"][0] = $masterParams;
				$masterTablesData["public.moh_indicators"][0]["masterKeys"] = array();
	$masterTablesData["public.moh_indicators"][0]["masterKeys"][]="indicator_group_id";
				$masterTablesData["public.moh_indicators"][0]["detailKeys"] = array();
	$masterTablesData["public.moh_indicators"][0]["detailKeys"][]="indicator_group_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicators()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_id,  	indicator_name,  	baseline,  	target,  	indicator_group_id,  	indicator_shortname,  	indicator_desc";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicators";
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
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto6["m_sql"] = "indicator_id";
$proto6["m_srcTableName"] = "public.moh_indicators";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto8["m_sql"] = "indicator_name";
$proto8["m_srcTableName"] = "public.moh_indicators";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto10["m_sql"] = "baseline";
$proto10["m_srcTableName"] = "public.moh_indicators";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "target",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto12["m_sql"] = "target";
$proto12["m_srcTableName"] = "public.moh_indicators";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto14["m_sql"] = "indicator_group_id";
$proto14["m_srcTableName"] = "public.moh_indicators";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_shortname",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto16["m_sql"] = "indicator_shortname";
$proto16["m_srcTableName"] = "public.moh_indicators";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_desc",
	"m_strTable" => "public.moh_indicators",
	"m_srcTableName" => "public.moh_indicators"
));

$proto18["m_sql"] = "indicator_desc";
$proto18["m_srcTableName"] = "public.moh_indicators";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.moh_indicators";
$proto21["m_srcTableName"] = "public.moh_indicators";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "indicator_id";
$proto21["m_columns"][] = "indicator_name";
$proto21["m_columns"][] = "baseline";
$proto21["m_columns"][] = "target";
$proto21["m_columns"][] = "indicator_group_id";
$proto21["m_columns"][] = "indicator_shortname";
$proto21["m_columns"][] = "indicator_desc";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".moh_indicators";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.moh_indicators";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.moh_indicators";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicators = createSqlQuery_moh_indicators();


	
																												;

							

$tdatamoh_indicators[".sqlquery"] = $queryData_moh_indicators;



$tdatamoh_indicators[".hasEvents"] = false;

?>