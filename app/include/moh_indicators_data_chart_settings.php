<?php
$tdatamoh_indicators_data_chart = array();
$tdatamoh_indicators_data_chart[".searchableFields"] = array();
$tdatamoh_indicators_data_chart[".ShortName"] = "moh_indicators_data_chart";
$tdatamoh_indicators_data_chart[".OwnerID"] = "";
$tdatamoh_indicators_data_chart[".OriginalTable"] = "public.moh_indicator_data";


$tdatamoh_indicators_data_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamoh_indicators_data_chart[".originalPagesByType"] = $tdatamoh_indicators_data_chart[".pagesByType"];
$tdatamoh_indicators_data_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamoh_indicators_data_chart[".originalPages"] = $tdatamoh_indicators_data_chart[".pages"];
$tdatamoh_indicators_data_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamoh_indicators_data_chart[".originalDefaultPages"] = $tdatamoh_indicators_data_chart[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicators_data_chart = array();
$fieldToolTipsmoh_indicators_data_chart = array();
$pageTitlesmoh_indicators_data_chart = array();
$placeHoldersmoh_indicators_data_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicators_data_chart["English"] = array();
	$fieldToolTipsmoh_indicators_data_chart["English"] = array();
	$placeHoldersmoh_indicators_data_chart["English"] = array();
	$pageTitlesmoh_indicators_data_chart["English"] = array();
	$fieldLabelsmoh_indicators_data_chart["English"]["data_id"] = "Data Id";
	$fieldToolTipsmoh_indicators_data_chart["English"]["data_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["data_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_id"] = "Indicator";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["data_source_id"] = "Data Source";
	$fieldToolTipsmoh_indicators_data_chart["English"]["data_source_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["data_source_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["assessment_id"] = "Assessment";
	$fieldToolTipsmoh_indicators_data_chart["English"]["assessment_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["assessment_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["region_id"] = "Region";
	$fieldToolTipsmoh_indicators_data_chart["English"]["region_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["region_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["unit_id"] = "Unit";
	$fieldToolTipsmoh_indicators_data_chart["English"]["unit_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["unit_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["facility_type_id"] = "Facility Type";
	$fieldToolTipsmoh_indicators_data_chart["English"]["facility_type_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["value"] = "Value";
	$fieldToolTipsmoh_indicators_data_chart["English"]["value"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["value"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["year"] = "Year";
	$fieldToolTipsmoh_indicators_data_chart["English"]["year"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["year"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["scope_id"] = "Scope";
	$fieldToolTipsmoh_indicators_data_chart["English"]["scope_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["scope_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["gender_sex"] = "Gender/Sex";
	$fieldToolTipsmoh_indicators_data_chart["English"]["gender_sex"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["gender_sex"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["data_representation"] = "Data Representation";
	$fieldToolTipsmoh_indicators_data_chart["English"]["data_representation"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["data_representation"] = "";
	if (count($fieldToolTipsmoh_indicators_data_chart["English"]))
		$tdatamoh_indicators_data_chart[".isUseToolTips"] = true;
}


	$tdatamoh_indicators_data_chart[".NCSearch"] = true;

	$tdatamoh_indicators_data_chart[".ChartRefreshTime"] = 0;


$tdatamoh_indicators_data_chart[".shortTableName"] = "moh_indicators_data_chart";
$tdatamoh_indicators_data_chart[".nSecOptions"] = 0;

$tdatamoh_indicators_data_chart[".mainTableOwnerID"] = "";
$tdatamoh_indicators_data_chart[".entityType"] = 3;
$tdatamoh_indicators_data_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicators_data_chart[".strOriginalTableName"] = "public.moh_indicator_data";

	



$tdatamoh_indicators_data_chart[".showAddInPopup"] = false;

$tdatamoh_indicators_data_chart[".showEditInPopup"] = false;

$tdatamoh_indicators_data_chart[".showViewInPopup"] = false;

$tdatamoh_indicators_data_chart[".listAjax"] = false;
//	temporary
//$tdatamoh_indicators_data_chart[".listAjax"] = false;

	$tdatamoh_indicators_data_chart[".audit"] = false;

	$tdatamoh_indicators_data_chart[".locking"] = false;


$pages = $tdatamoh_indicators_data_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicators_data_chart[".edit"] = true;
	$tdatamoh_indicators_data_chart[".afterEditAction"] = 1;
	$tdatamoh_indicators_data_chart[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicators_data_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicators_data_chart[".add"] = true;
$tdatamoh_indicators_data_chart[".afterAddAction"] = 1;
$tdatamoh_indicators_data_chart[".closePopupAfterAdd"] = 1;
$tdatamoh_indicators_data_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicators_data_chart[".list"] = true;
}



$tdatamoh_indicators_data_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicators_data_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicators_data_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicators_data_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicators_data_chart[".printFriendly"] = true;
}



$tdatamoh_indicators_data_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicators_data_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicators_data_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicators_data_chart[".isUseAjaxSuggest"] = true;





$tdatamoh_indicators_data_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicators_data_chart[".buttonsAdded"] = false;

$tdatamoh_indicators_data_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_indicators_data_chart[".isUseTimeForSearch"] = false;


$tdatamoh_indicators_data_chart[".badgeColor"] = "DAA520";


$tdatamoh_indicators_data_chart[".allSearchFields"] = array();
$tdatamoh_indicators_data_chart[".filterFields"] = array();
$tdatamoh_indicators_data_chart[".requiredSearchFields"] = array();

$tdatamoh_indicators_data_chart[".googleLikeFields"] = array();
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "data_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "data_source_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "assessment_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "region_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "unit_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "value";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "year";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "scope_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "gender_sex";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "data_representation";



$tdatamoh_indicators_data_chart[".tableType"] = "chart";

$tdatamoh_indicators_data_chart[".printerPageOrientation"] = 0;
$tdatamoh_indicators_data_chart[".nPrinterPageScale"] = 100;

$tdatamoh_indicators_data_chart[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicators_data_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamoh_indicators_data_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdatamoh_indicators_data_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY \"year\"";
$tdatamoh_indicators_data_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators_data_chart[".orderindexes"] = array();
	$tdatamoh_indicators_data_chart[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "\"year\"");



$tdatamoh_indicators_data_chart[".sqlHead"] = "SELECT data_id,  indicator_id,  data_source_id,  assessment_id,  region_id,  unit_id,  facility_type_id,  \"value\",  \"year\",  scope_id,  gender_sex,  data_representation";
$tdatamoh_indicators_data_chart[".sqlFrom"] = "FROM \"public\".moh_indicator_data";
$tdatamoh_indicators_data_chart[".sqlWhereExpr"] = "";
$tdatamoh_indicators_data_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicators_data_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicators_data_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicators_data_chart[".highlightSearchResults"] = true;

$tableKeysmoh_indicators_data_chart = array();
$tableKeysmoh_indicators_data_chart[] = "data_id";
$tdatamoh_indicators_data_chart[".Keys"] = $tableKeysmoh_indicators_data_chart;


$tdatamoh_indicators_data_chart[".hideMobileList"] = array();




//	data_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "data_id";
	$fdata["GoodName"] = "data_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","data_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "data_id";

		$fdata["sourceSingle"] = "data_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_id";

	
	
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


	$tdatamoh_indicators_data_chart["data_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "data_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_id");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "indicator_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["indicator_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_id";
//	data_source_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_source_id";
	$fdata["GoodName"] = "data_source_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","data_source_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data_source_id";

		$fdata["sourceSingle"] = "data_source_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_source_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_data_sources";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data_source_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "data_source_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["data_source_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "data_source_id";
//	assessment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "assessment_id";
	$fdata["GoodName"] = "assessment_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","assessment_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "assessment_id";

		$fdata["sourceSingle"] = "assessment_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assessment_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_assessments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "assessment_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "assessment_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["assessment_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "assessment_id";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","region_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "region_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["region_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "region_id";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","unit_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "unit_id";

		$fdata["sourceSingle"] = "unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_administration_units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unit_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "unit_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["unit_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "unit_id";
//	facility_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "facility_type_id";
	$fdata["GoodName"] = "facility_type_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","facility_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_type_id";

		$fdata["sourceSingle"] = "facility_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_type_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_facility_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facility_type_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "facility_type_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["facility_type_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "facility_type_id";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"value\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatamoh_indicators_data_chart["value"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "value";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"year\"";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["year"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "year";
//	scope_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "scope_id";
	$fdata["GoodName"] = "scope_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","scope_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "scope_id";

		$fdata["sourceSingle"] = "scope_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scope_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_data_scope";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "scope_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "scope_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["scope_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "scope_id";
//	gender_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gender_sex";
	$fdata["GoodName"] = "gender_sex";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","gender_sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender_sex";

		$fdata["sourceSingle"] = "gender_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender_sex";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["gender_sex"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "gender_sex";
//	data_representation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_representation";
	$fdata["GoodName"] = "data_representation";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","data_representation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_representation";

		$fdata["sourceSingle"] = "data_representation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_representation";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Number";
	$edata["LookupValues"][] = "Percent";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["data_representation"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "data_representation";

$tdatamoh_indicators_data_chart[".chartLabelField"] = "year";
$tdatamoh_indicators_data_chart[".chartSeries"] = array();
$tdatamoh_indicators_data_chart[".chartSeries"][] = array(
	"field" => "value",
	"total" => ""
);
	$tdatamoh_indicators_data_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MOH_Indicators_data_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">value</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">year</attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Indicators Data Series By Facility Type Chart").'</attr>
<attr value="foot">'.xmlencode("Indicators Trend").'</attr>
<attr value="y_axis_label">'.xmlencode("Indicators Value").'</attr>


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
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">data_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","data_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">indicator_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">data_source_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","data_source_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">assessment_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","assessment_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">region_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","region_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">unit_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","unit_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">facility_type_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","facility_type_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">value</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","value")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","year")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">scope_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","scope_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">gender_sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","gender_sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">data_representation</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","data_representation")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MOH_Indicators_data_Chart</attr>
<attr value="short_table_name">moh_indicators_data_chart</attr>
</attr>

</chart>';

$tables_data["MOH_Indicators_data_Chart"]=&$tdatamoh_indicators_data_chart;
$field_labels["MOH_Indicators_data_Chart"] = &$fieldLabelsmoh_indicators_data_chart;
$fieldToolTips["MOH_Indicators_data_Chart"] = &$fieldToolTipsmoh_indicators_data_chart;
$placeHolders["MOH_Indicators_data_Chart"] = &$placeHoldersmoh_indicators_data_chart;
$page_titles["MOH_Indicators_data_Chart"] = &$pageTitlesmoh_indicators_data_chart;


changeTextControlsToDate( "MOH_Indicators_data_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MOH_Indicators_data_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MOH_Indicators_data_Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_assessments";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_assessments";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_assessments";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][0] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][0]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][0]["masterKeys"][]="assessment_id";
				$masterTablesData["MOH_Indicators_data_Chart"][0]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][0]["detailKeys"][]="assessment_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_data_sources";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_data_sources";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_data_sources";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][1] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][1]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][1]["masterKeys"][]="data_source_id";
				$masterTablesData["MOH_Indicators_data_Chart"][1]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][1]["detailKeys"][]="data_source_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_health_facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_health_facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_health_facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][2] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][2]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][2]["masterKeys"][]="facility_id";
				$masterTablesData["MOH_Indicators_data_Chart"][2]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][2]["detailKeys"][]="facility_type_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][3] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][3]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][3]["masterKeys"][]="indicator_id";
				$masterTablesData["MOH_Indicators_data_Chart"][3]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][3]["detailKeys"][]="indicator_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][4] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][4]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][4]["masterKeys"][]="region_id";
				$masterTablesData["MOH_Indicators_data_Chart"][4]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][4]["detailKeys"][]="region_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_administration_units";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_administration_units";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_administration_units";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_data_Chart"][5] = $masterParams;
				$masterTablesData["MOH_Indicators_data_Chart"][5]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][5]["masterKeys"][]="unit_id";
				$masterTablesData["MOH_Indicators_data_Chart"][5]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_data_Chart"][5]["detailKeys"][]="unit_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicators_data_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "data_id,  indicator_id,  data_source_id,  assessment_id,  region_id,  unit_id,  facility_type_id,  \"value\",  \"year\",  scope_id,  gender_sex,  data_representation";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_data";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY \"year\"";
	
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
	"m_strName" => "data_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto6["m_sql"] = "data_id";
$proto6["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto10["m_sql"] = "data_source_id";
$proto10["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto12["m_sql"] = "assessment_id";
$proto12["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto14["m_sql"] = "region_id";
$proto14["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto16["m_sql"] = "unit_id";
$proto16["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto18["m_sql"] = "facility_type_id";
$proto18["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto20["m_sql"] = "\"value\"";
$proto20["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto22["m_sql"] = "\"year\"";
$proto22["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto24["m_sql"] = "scope_id";
$proto24["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto26["m_sql"] = "gender_sex";
$proto26["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto28["m_sql"] = "data_representation";
$proto28["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.moh_indicator_data";
$proto31["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "data_id";
$proto31["m_columns"][] = "indicator_id";
$proto31["m_columns"][] = "data_source_id";
$proto31["m_columns"][] = "assessment_id";
$proto31["m_columns"][] = "region_id";
$proto31["m_columns"][] = "unit_id";
$proto31["m_columns"][] = "facility_type_id";
$proto31["m_columns"][] = "value";
$proto31["m_columns"][] = "year";
$proto31["m_columns"][] = "scope_id";
$proto31["m_columns"][] = "gender_sex";
$proto31["m_columns"][] = "data_representation";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "\"public\".moh_indicator_data";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "data_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 1;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="MOH_Indicators_data_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicators_data_chart = createSqlQuery_moh_indicators_data_chart();


	
																												;

												

$tdatamoh_indicators_data_chart[".sqlquery"] = $queryData_moh_indicators_data_chart;



$tdatamoh_indicators_data_chart[".hasEvents"] = false;

?>