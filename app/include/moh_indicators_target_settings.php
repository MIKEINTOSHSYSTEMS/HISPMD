<?php
$tdatamoh_indicators_target = array();
$tdatamoh_indicators_target[".searchableFields"] = array();
$tdatamoh_indicators_target[".ShortName"] = "moh_indicators_target";
$tdatamoh_indicators_target[".OwnerID"] = "";
$tdatamoh_indicators_target[".OriginalTable"] = "public.moh_indicators_target";


$tdatamoh_indicators_target[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_indicators_target[".originalPagesByType"] = $tdatamoh_indicators_target[".pagesByType"];
$tdatamoh_indicators_target[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_indicators_target[".originalPages"] = $tdatamoh_indicators_target[".pages"];
$tdatamoh_indicators_target[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_indicators_target[".originalDefaultPages"] = $tdatamoh_indicators_target[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicators_target = array();
$fieldToolTipsmoh_indicators_target = array();
$pageTitlesmoh_indicators_target = array();
$placeHoldersmoh_indicators_target = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicators_target["English"] = array();
	$fieldToolTipsmoh_indicators_target["English"] = array();
	$placeHoldersmoh_indicators_target["English"] = array();
	$pageTitlesmoh_indicators_target["English"] = array();
	$fieldLabelsmoh_indicators_target["English"]["ID"] = "ID";
	$fieldToolTipsmoh_indicators_target["English"]["ID"] = "";
	$placeHoldersmoh_indicators_target["English"]["ID"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_id"] = "Please select an Indicator you want to add Target for from the drop down list";
	$placeHoldersmoh_indicators_target["English"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_name"] = "";
	$placeHoldersmoh_indicators_target["English"]["indicator_name"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_target"] = "";
	$placeHoldersmoh_indicators_target["English"]["indicator_target"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicators_target["English"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicators_target["English"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicators_target["English"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicators_target["English"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicators_target["English"]["indicator_baseline_year"] = "";
	if (count($fieldToolTipsmoh_indicators_target["English"]))
		$tdatamoh_indicators_target[".isUseToolTips"] = true;
}


	$tdatamoh_indicators_target[".NCSearch"] = true;



$tdatamoh_indicators_target[".shortTableName"] = "moh_indicators_target";
$tdatamoh_indicators_target[".nSecOptions"] = 0;

$tdatamoh_indicators_target[".mainTableOwnerID"] = "";
$tdatamoh_indicators_target[".entityType"] = 0;
$tdatamoh_indicators_target[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicators_target[".strOriginalTableName"] = "public.moh_indicators_target";

	



$tdatamoh_indicators_target[".showAddInPopup"] = false;

$tdatamoh_indicators_target[".showEditInPopup"] = false;

$tdatamoh_indicators_target[".showViewInPopup"] = false;

$tdatamoh_indicators_target[".listAjax"] = false;
//	temporary
//$tdatamoh_indicators_target[".listAjax"] = false;

	$tdatamoh_indicators_target[".audit"] = false;

	$tdatamoh_indicators_target[".locking"] = false;


$pages = $tdatamoh_indicators_target[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicators_target[".edit"] = true;
	$tdatamoh_indicators_target[".afterEditAction"] = 1;
	$tdatamoh_indicators_target[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicators_target[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicators_target[".add"] = true;
$tdatamoh_indicators_target[".afterAddAction"] = 1;
$tdatamoh_indicators_target[".closePopupAfterAdd"] = 1;
$tdatamoh_indicators_target[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicators_target[".list"] = true;
}



$tdatamoh_indicators_target[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicators_target[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicators_target[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicators_target[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicators_target[".printFriendly"] = true;
}



$tdatamoh_indicators_target[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicators_target[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicators_target[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicators_target[".isUseAjaxSuggest"] = true;



						

$tdatamoh_indicators_target[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicators_target[".buttonsAdded"] = false;

$tdatamoh_indicators_target[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_indicators_target[".isUseTimeForSearch"] = false;


$tdatamoh_indicators_target[".badgeColor"] = "e07878";


$tdatamoh_indicators_target[".allSearchFields"] = array();
$tdatamoh_indicators_target[".filterFields"] = array();
$tdatamoh_indicators_target[".requiredSearchFields"] = array();

$tdatamoh_indicators_target[".googleLikeFields"] = array();
$tdatamoh_indicators_target[".googleLikeFields"][] = "ID";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_id";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_name";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_target";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_baseline";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_target_year";
$tdatamoh_indicators_target[".googleLikeFields"][] = "indicator_baseline_year";



$tdatamoh_indicators_target[".tableType"] = "list";

$tdatamoh_indicators_target[".printerPageOrientation"] = 0;
$tdatamoh_indicators_target[".nPrinterPageScale"] = 100;

$tdatamoh_indicators_target[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicators_target[".geocodingEnabled"] = false;




$tdatamoh_indicators_target[".isDisplayLoading"] = true;






$tdatamoh_indicators_target[".pageSize"] = 20;

$tdatamoh_indicators_target[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_indicators_target[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators_target[".orderindexes"] = array();


$tdatamoh_indicators_target[".sqlHead"] = "SELECT \"ID\",  	indicator_id,  	indicator_name,  	indicator_target,  	indicator_baseline,  	indicator_target_year,  	indicator_baseline_year";
$tdatamoh_indicators_target[".sqlFrom"] = "FROM \"public\".moh_indicators_target";
$tdatamoh_indicators_target[".sqlWhereExpr"] = "";
$tdatamoh_indicators_target[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicators_target[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicators_target[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicators_target[".highlightSearchResults"] = true;

$tableKeysmoh_indicators_target = array();
$tableKeysmoh_indicators_target[] = "ID";
$tdatamoh_indicators_target[".Keys"] = $tableKeysmoh_indicators_target;


$tdatamoh_indicators_target[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatamoh_indicators_target["ID"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "ID";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"indicator_name", 'lookupF'=>"indicator_name");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamoh_indicators_target["indicator_id"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatamoh_indicators_target["indicator_name"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_name";
//	indicator_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "indicator_target";
	$fdata["GoodName"] = "indicator_target";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_target");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target";

		$fdata["sourceSingle"] = "indicator_target";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_target";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatamoh_indicators_target["indicator_target"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_target";
//	indicator_baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "indicator_baseline";
	$fdata["GoodName"] = "indicator_baseline";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_baseline");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline";

		$fdata["sourceSingle"] = "indicator_baseline";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_baseline";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatamoh_indicators_target["indicator_baseline"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_baseline";
//	indicator_target_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "indicator_target_year";
	$fdata["GoodName"] = "indicator_target_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_target_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target_year";

		$fdata["sourceSingle"] = "indicator_target_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_target_year";

	
	
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
	$edata["LookupTable"] = "public.moh_years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
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


	$tdatamoh_indicators_target["indicator_target_year"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_target_year";
//	indicator_baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "indicator_baseline_year";
	$fdata["GoodName"] = "indicator_baseline_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicators_target","indicator_baseline_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline_year";

		$fdata["sourceSingle"] = "indicator_baseline_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_baseline_year";

	
	
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
	$edata["LookupTable"] = "public.moh_years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
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


	$tdatamoh_indicators_target["indicator_baseline_year"] = $fdata;
		$tdatamoh_indicators_target[".searchableFields"][] = "indicator_baseline_year";


$tables_data["public.moh_indicators_target"]=&$tdatamoh_indicators_target;
$field_labels["public_moh_indicators_target"] = &$fieldLabelsmoh_indicators_target;
$fieldToolTips["public_moh_indicators_target"] = &$fieldToolTipsmoh_indicators_target;
$placeHolders["public_moh_indicators_target"] = &$placeHoldersmoh_indicators_target;
$page_titles["public_moh_indicators_target"] = &$pageTitlesmoh_indicators_target;


changeTextControlsToDate( "public.moh_indicators_target" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_indicators_target"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_indicators_target"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicators_target"][0] = $masterParams;
				$masterTablesData["public.moh_indicators_target"][0]["masterKeys"] = array();
	$masterTablesData["public.moh_indicators_target"][0]["masterKeys"][]="indicator_id";
				$masterTablesData["public.moh_indicators_target"][0]["masterKeys"][]="indicator_name";
				$masterTablesData["public.moh_indicators_target"][0]["detailKeys"] = array();
	$masterTablesData["public.moh_indicators_target"][0]["detailKeys"][]="indicator_id";
				$masterTablesData["public.moh_indicators_target"][0]["detailKeys"][]="indicator_name";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicators_target()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	indicator_id,  	indicator_name,  	indicator_target,  	indicator_baseline,  	indicator_target_year,  	indicator_baseline_year";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicators_target";
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
	"m_strName" => "ID",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.moh_indicators_target";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "public.moh_indicators_target";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto10["m_sql"] = "indicator_name";
$proto10["m_srcTableName"] = "public.moh_indicators_target";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto12["m_sql"] = "indicator_target";
$proto12["m_srcTableName"] = "public.moh_indicators_target";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto14["m_sql"] = "indicator_baseline";
$proto14["m_srcTableName"] = "public.moh_indicators_target";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target_year",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto16["m_sql"] = "indicator_target_year";
$proto16["m_srcTableName"] = "public.moh_indicators_target";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline_year",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicators_target"
));

$proto18["m_sql"] = "indicator_baseline_year";
$proto18["m_srcTableName"] = "public.moh_indicators_target";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.moh_indicators_target";
$proto21["m_srcTableName"] = "public.moh_indicators_target";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "indicator_id";
$proto21["m_columns"][] = "indicator_name";
$proto21["m_columns"][] = "indicator_target";
$proto21["m_columns"][] = "indicator_baseline";
$proto21["m_columns"][] = "indicator_target_year";
$proto21["m_columns"][] = "indicator_baseline_year";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".moh_indicators_target";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.moh_indicators_target";
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
$proto0["m_srcTableName"]="public.moh_indicators_target";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicators_target = createSqlQuery_moh_indicators_target();


	
																												;

							

$tdatamoh_indicators_target[".sqlquery"] = $queryData_moh_indicators_target;



$tdatamoh_indicators_target[".hasEvents"] = false;

?>