<?php
$tdatamoh_indicators_data_chart = array();
$tdatamoh_indicators_data_chart[".searchableFields"] = array();
$tdatamoh_indicators_data_chart[".ShortName"] = "moh_indicators_data_chart";
$tdatamoh_indicators_data_chart[".OwnerID"] = "";
$tdatamoh_indicators_data_chart[".OriginalTable"] = "public.moh_indicator_data";


$tdatamoh_indicators_data_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamoh_indicators_data_chart[".originalPagesByType"] = $tdatamoh_indicators_data_chart[".pagesByType"];
$tdatamoh_indicators_data_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamoh_indicators_data_chart[".originalPages"] = $tdatamoh_indicators_data_chart[".pages"];
$tdatamoh_indicators_data_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$fieldLabelsmoh_indicators_data_chart["English"]["value"] = "Value";
	$fieldToolTipsmoh_indicators_data_chart["English"]["value"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["value"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["year"] = "Year";
	$fieldToolTipsmoh_indicators_data_chart["English"]["year"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["year"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["period"] = "Period";
	$fieldToolTipsmoh_indicators_data_chart["English"]["period"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["period"] = "";
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
	$fieldLabelsmoh_indicators_data_chart["English"]["period_id"] = "Period Type";
	$fieldToolTipsmoh_indicators_data_chart["English"]["period_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["period_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["quarter_id"] = "Quarter";
	$fieldToolTipsmoh_indicators_data_chart["English"]["quarter_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["quarter_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["month_id"] = "Month";
	$fieldToolTipsmoh_indicators_data_chart["English"]["month_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["month_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["scope_id"] = "Scope";
	$fieldToolTipsmoh_indicators_data_chart["English"]["scope_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["scope_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["gender_sex"] = "Gender/Sex";
	$fieldToolTipsmoh_indicators_data_chart["English"]["gender_sex"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["gender_sex"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["data_representation"] = "Data Representation";
	$fieldToolTipsmoh_indicators_data_chart["English"]["data_representation"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["data_representation"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_group_id"] = "Indicator Group";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicators_data_chart["English"]["data_source_detail"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_target"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_target"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicators_data_chart["English"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicators_data_chart["English"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicators_data_chart["English"]["indicator_baseline_year"] = "";
	if (count($fieldToolTipsmoh_indicators_data_chart["English"]))
		$tdatamoh_indicators_data_chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_indicators_data_chart["Amharic"] = array();
	$fieldToolTipsmoh_indicators_data_chart["Amharic"] = array();
	$placeHoldersmoh_indicators_data_chart["Amharic"] = array();
	$pageTitlesmoh_indicators_data_chart["Amharic"] = array();
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["value"] = "የውሂብ እሴት";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["value"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["value"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["year"] = "አመት";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["year"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["year"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["period"] = "Period";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["period"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["period"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["data_id"] = "የውሂብ መለያ";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["data_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["data_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_id"] = "አመልካች";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["data_source_id"] = "የውሂብ ምንጭ";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["data_source_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["data_source_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["assessment_id"] = "ግምገማ";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["assessment_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["assessment_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["region_id"] = "ክልል";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["region_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["region_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["unit_id"] = "ክፍል";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["unit_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["unit_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["facility_type_id"] = "የመገልገያ አይነት";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["facility_type_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["period_id"] = "Period Id";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["period_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["period_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["quarter_id"] = "Quarter Id";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["quarter_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["quarter_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["month_id"] = "Month Id";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["month_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["month_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["scope_id"] = "ወሰን";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["scope_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["scope_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["gender_sex"] = "ጾታ";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["gender_sex"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["gender_sex"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["data_representation"] = "የመረጃው ዓይነት";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["data_representation"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["data_representation"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_group_id"] = "አመላካች ቡድን";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["data_source_detail"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_target"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_target"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicators_data_chart["Amharic"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicators_data_chart["Amharic"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicators_data_chart["Amharic"]["indicator_baseline_year"] = "";
	if (count($fieldToolTipsmoh_indicators_data_chart["Amharic"]))
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
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "region_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "unit_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "year";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "scope_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "gender_sex";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "data_representation";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_group_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "data_source_detail";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "period_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "month_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "quarter_id";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "period";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_target";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_target_year";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_baseline";
$tdatamoh_indicators_data_chart[".googleLikeFields"][] = "indicator_baseline_year";



$tdatamoh_indicators_data_chart[".tableType"] = "chart";

$tdatamoh_indicators_data_chart[".printerPageOrientation"] = 0;
$tdatamoh_indicators_data_chart[".nPrinterPageScale"] = 100;

$tdatamoh_indicators_data_chart[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicators_data_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamoh_indicators_data_chart[".chartType"] = "Combined";
// end of chart settings

$tdatamoh_indicators_data_chart[".isDisplayLoading"] = true;


$tdatamoh_indicators_data_chart[".searchIsRequiredForFilters"] = true;

$tdatamoh_indicators_data_chart[".noRecordsFirstPage"] = true;




$tstrOrderBy = "ORDER BY d.\"year\", CASE 
        WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)
        WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)
        ELSE d.\"year\"::TEXT
    END";
$tdatamoh_indicators_data_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators_data_chart[".orderindexes"] = array();
	$tdatamoh_indicators_data_chart[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "d.\"year\"");

	$tdatamoh_indicators_data_chart[".orderindexes"][] = array(18, (1 ? "ASC" : "DESC"), "CASE 
        WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)
        WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)
        ELSE d.\"year\"::TEXT
    END");



$tdatamoh_indicators_data_chart[".sqlHead"] = "SELECT d.data_id,  d.indicator_id,  d.data_source_id,  d.assessment_id,  d.region_id,  d.unit_id,  d.facility_type_id,  d.\"value\",  d.\"year\",  d.scope_id,  d.gender_sex,  d.data_representation,  d.indicator_group_id,  d.data_source_detail,  d.period_id,  d.month_id,  d.quarter_id,  CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END AS period,  CAST(NULLIF(t.indicator_target, '') AS NUMERIC) AS indicator_target,  t.indicator_target_year,  t.indicator_baseline,  t.indicator_baseline_year";
$tdatamoh_indicators_data_chart[".sqlFrom"] = "FROM \"public\".moh_indicator_data AS d  LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
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
	$fdata["FullName"] = "d.data_id";

	
	
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
	$fdata["FullName"] = "d.indicator_id";

	
	
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "indicator_group_id", "lookup" => "indicator_group_id" );

	
	

	
	
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
	$fdata["FullName"] = "d.data_source_id";

	
	
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
	$edata["LinkFieldType"] = 0;
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
		$fdata["filterMultiSelect"] = 0;
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
	$fdata["FullName"] = "d.assessment_id";

	
	
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
	$fdata["FullName"] = "d.region_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
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
	$fdata["FullName"] = "d.unit_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
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
	$fdata["FullName"] = "d.facility_type_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
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
	$fdata["FullName"] = "d.\"value\"";

	
	
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
	$fdata["FullName"] = "d.\"year\"";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_indicator_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
	$edata["LookupOrderBy"] = "year";

	
	
	
	

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Interval list";
		$fdata["showCollapsed"] = true;

	
	
		//intervals' settings
	$fdata["showWithNoRecords"] = 1;
	$fdata["filterIntervals"] =  array();

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 0;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "future";
						$intervalData["upperLimit"] = "";
				$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 1;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "today";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 2;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "yesterday";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 3;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "this month";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 4;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "last month";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 5;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "this year";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 6;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 0;
		$intervalData["upperLimitType"] = 1;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "past years";
				$intervalData["lowerLimit"] = "";
						$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensitive"] = true;
		$intervalData["index"] = 7;

		$fdata["filterIntervals"][] = $intervalData;

	
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
	$fdata["FullName"] = "d.scope_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
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
	$fdata["FullName"] = "d.gender_sex";

	
	
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
	$fdata["FullName"] = "d.data_representation";

	
	
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


	$tdatamoh_indicators_data_chart["data_representation"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "data_representation";
//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.indicator_group_id";

	
	
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
	$edata["LookupTable"] = "public.moh_indicator_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "indicator_id";

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["indicator_group_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_group_id";
//	data_source_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "data_source_detail";
	$fdata["GoodName"] = "data_source_detail";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","data_source_detail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_source_detail";

		$fdata["sourceSingle"] = "data_source_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.data_source_detail";

	
	
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


	$tdatamoh_indicators_data_chart["data_source_detail"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "data_source_detail";
//	period_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "period_id";
	$fdata["GoodName"] = "period_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","period_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "period_id";

		$fdata["sourceSingle"] = "period_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.period_id";

	
	
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
	$edata["LookupTable"] = "public.moh_period_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "period_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period_type";

	

	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["period_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "period_id";
//	month_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "month_id";
	$fdata["GoodName"] = "month_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","month_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "month_id";

		$fdata["sourceSingle"] = "month_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.month_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["month_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "month_id";
//	quarter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "quarter_id";
	$fdata["GoodName"] = "quarter_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","quarter_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quarter_id";

		$fdata["sourceSingle"] = "quarter_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "d.quarter_id";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["quarter_id"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "quarter_id";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","period");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "period";

		$fdata["sourceSingle"] = "period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END";

	
	
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
	$edata["LookupTable"] = "public.moh_indicator_data";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "period";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period";

	

	
	$edata["LookupOrderBy"] = "year";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["period"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "period";
//	indicator_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "indicator_target";
	$fdata["GoodName"] = "indicator_target";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "indicator_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAST(NULLIF(t.indicator_target, '') AS NUMERIC)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatamoh_indicators_data_chart["indicator_target"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_target";
//	indicator_target_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "indicator_target_year";
	$fdata["GoodName"] = "indicator_target_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_target_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.indicator_target_year";

	
	
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


	$tdatamoh_indicators_data_chart["indicator_target_year"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_target_year";
//	indicator_baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "indicator_baseline";
	$fdata["GoodName"] = "indicator_baseline";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_baseline");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.indicator_baseline";

	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_chart["indicator_baseline"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_baseline";
//	indicator_baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "indicator_baseline_year";
	$fdata["GoodName"] = "indicator_baseline_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_data_Chart","indicator_baseline_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.indicator_baseline_year";

	
	
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


	$tdatamoh_indicators_data_chart["indicator_baseline_year"] = $fdata;
		$tdatamoh_indicators_data_chart[".searchableFields"][] = "indicator_baseline_year";

$tdatamoh_indicators_data_chart[".groupChart"] = true;
$tdatamoh_indicators_data_chart[".chartLabelInterval"] = 0;
$tdatamoh_indicators_data_chart[".chartLabelField"] = "period";
$tdatamoh_indicators_data_chart[".chartSeries"] = array();
$tdatamoh_indicators_data_chart[".chartSeries"][] = array(
	"field" => "indicator_target",
	"total" => "AVG"
);
$tdatamoh_indicators_data_chart[".chartSeries"][] = array(
	"field" => "value",
	"total" => "AVG"
);
	$tdatamoh_indicators_data_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MOH_Indicators_data_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">indicator_target</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">value</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">period</attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Indicators Data Chart").'</attr>
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
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">indicator_group_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_group_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">data_source_detail</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","data_source_detail")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">period_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","period_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">month_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","month_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="16">
		<attr value="name">quarter_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","quarter_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="17">
		<attr value="name">period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","period")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="18">
		<attr value="name">indicator_target</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_target")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="19">
		<attr value="name">indicator_target_year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_target_year")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="20">
		<attr value="name">indicator_baseline</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_baseline")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamoh_indicators_data_chart[".chartXml"] .= '<attr value="21">
		<attr value="name">indicator_baseline_year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MOH_Indicators_data_Chart","indicator_baseline_year")).'</attr>
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



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicators_data_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "d.data_id,  d.indicator_id,  d.data_source_id,  d.assessment_id,  d.region_id,  d.unit_id,  d.facility_type_id,  d.\"value\",  d.\"year\",  d.scope_id,  d.gender_sex,  d.data_representation,  d.indicator_group_id,  d.data_source_detail,  d.period_id,  d.month_id,  d.quarter_id,  CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END AS period,  CAST(NULLIF(t.indicator_target, '') AS NUMERIC) AS indicator_target,  t.indicator_target_year,  t.indicator_baseline,  t.indicator_baseline_year";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_data AS d  LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY d.\"year\", CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END";
	
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
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto6["m_sql"] = "d.data_id";
$proto6["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto8["m_sql"] = "d.indicator_id";
$proto8["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto10["m_sql"] = "d.data_source_id";
$proto10["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto12["m_sql"] = "d.assessment_id";
$proto12["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto14["m_sql"] = "d.region_id";
$proto14["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto16["m_sql"] = "d.unit_id";
$proto16["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto18["m_sql"] = "d.facility_type_id";
$proto18["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto20["m_sql"] = "d.\"value\"";
$proto20["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto22["m_sql"] = "d.\"year\"";
$proto22["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto24["m_sql"] = "d.scope_id";
$proto24["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto26["m_sql"] = "d.gender_sex";
$proto26["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto28["m_sql"] = "d.data_representation";
$proto28["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto30["m_sql"] = "d.indicator_group_id";
$proto30["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_detail",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto32["m_sql"] = "d.data_source_detail";
$proto32["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "period_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto34["m_sql"] = "d.period_id";
$proto34["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "month_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto36["m_sql"] = "d.month_id";
$proto36["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto38["m_sql"] = "d.quarter_id";
$proto38["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END"
));

$proto40["m_sql"] = "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END";
$proto40["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "period";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULLIF(t.indicator_target, '') AS NUMERIC"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "CAST";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "CAST(NULLIF(t.indicator_target, '') AS NUMERIC)";
$proto42["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "indicator_target";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target_year",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto45["m_sql"] = "t.indicator_target_year";
$proto45["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto47["m_sql"] = "t.indicator_baseline";
$proto47["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline_year",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto49["m_sql"] = "t.indicator_baseline_year";
$proto49["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "public.moh_indicator_data";
$proto52["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "data_id";
$proto52["m_columns"][] = "indicator_id";
$proto52["m_columns"][] = "data_source_id";
$proto52["m_columns"][] = "assessment_id";
$proto52["m_columns"][] = "region_id";
$proto52["m_columns"][] = "unit_id";
$proto52["m_columns"][] = "facility_type_id";
$proto52["m_columns"][] = "value";
$proto52["m_columns"][] = "year";
$proto52["m_columns"][] = "scope_id";
$proto52["m_columns"][] = "gender_sex";
$proto52["m_columns"][] = "data_representation";
$proto52["m_columns"][] = "indicator_group_id";
$proto52["m_columns"][] = "data_source_detail";
$proto52["m_columns"][] = "period_id";
$proto52["m_columns"][] = "month_id";
$proto52["m_columns"][] = "quarter_id";
$proto52["m_columns"][] = "year_id";
$proto52["m_columns"][] = "period";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "\"public\".moh_indicator_data AS d";
$proto51["m_alias"] = "d";
$proto51["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_LEFTJOIN";
			$proto56=array();
$proto56["m_strName"] = "public.moh_indicators_target";
$proto56["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "ID";
$proto56["m_columns"][] = "indicator_id";
$proto56["m_columns"][] = "indicator_name";
$proto56["m_columns"][] = "indicator_target";
$proto56["m_columns"][] = "indicator_baseline";
$proto56["m_columns"][] = "indicator_target_year";
$proto56["m_columns"][] = "indicator_baseline_year";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
$proto55["m_alias"] = "t";
$proto55["m_srcTableName"] = "MOH_Indicators_data_Chart";
$proto57=array();
$proto57["m_sql"] = "t.indicator_id = d.indicator_id";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= d.indicator_id";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_data_Chart"
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 1;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto0["m_orderby"][]=$obj;					
												$proto61=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END"
));

$proto61["m_column"]=$obj;
$proto61["m_bAsc"] = 1;
$proto61["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto61);

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