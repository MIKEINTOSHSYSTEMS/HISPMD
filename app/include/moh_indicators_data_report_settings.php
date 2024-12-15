<?php
$tdatamoh_indicators_data_report = array();
$tdatamoh_indicators_data_report[".searchableFields"] = array();
$tdatamoh_indicators_data_report[".ShortName"] = "moh_indicators_data_report";
$tdatamoh_indicators_data_report[".OwnerID"] = "";
$tdatamoh_indicators_data_report[".OriginalTable"] = "public.moh_indicator_data";


$tdatamoh_indicators_data_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatamoh_indicators_data_report[".originalPagesByType"] = $tdatamoh_indicators_data_report[".pagesByType"];
$tdatamoh_indicators_data_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatamoh_indicators_data_report[".originalPages"] = $tdatamoh_indicators_data_report[".pages"];
$tdatamoh_indicators_data_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatamoh_indicators_data_report[".originalDefaultPages"] = $tdatamoh_indicators_data_report[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicators_data_report = array();
$fieldToolTipsmoh_indicators_data_report = array();
$pageTitlesmoh_indicators_data_report = array();
$placeHoldersmoh_indicators_data_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicators_data_report["English"] = array();
	$fieldToolTipsmoh_indicators_data_report["English"] = array();
	$placeHoldersmoh_indicators_data_report["English"] = array();
	$pageTitlesmoh_indicators_data_report["English"] = array();
	$fieldLabelsmoh_indicators_data_report["English"]["data_id"] = "Data Id";
	$fieldToolTipsmoh_indicators_data_report["English"]["data_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["data_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_id"] = "Indicator";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["data_source_id"] = "Data Source";
	$fieldToolTipsmoh_indicators_data_report["English"]["data_source_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["data_source_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["assessment_id"] = "Assessment";
	$fieldToolTipsmoh_indicators_data_report["English"]["assessment_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["assessment_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["region_id"] = "Region";
	$fieldToolTipsmoh_indicators_data_report["English"]["region_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["region_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["unit_id"] = "Administration Unit";
	$fieldToolTipsmoh_indicators_data_report["English"]["unit_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["unit_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["facility_type_id"] = "Facility Type";
	$fieldToolTipsmoh_indicators_data_report["English"]["facility_type_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["value"] = "Value";
	$fieldToolTipsmoh_indicators_data_report["English"]["value"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["value"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["year"] = "Year";
	$fieldToolTipsmoh_indicators_data_report["English"]["year"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["year"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["scope_id"] = "Scope";
	$fieldToolTipsmoh_indicators_data_report["English"]["scope_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["scope_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["gender_sex"] = "Gender/Sex";
	$fieldToolTipsmoh_indicators_data_report["English"]["gender_sex"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["gender_sex"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["data_representation"] = "Data Representation";
	$fieldToolTipsmoh_indicators_data_report["English"]["data_representation"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["data_representation"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_group_id"] = "Indicator Group";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicators_data_report["English"]["data_source_detail"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["period_id"] = "Period Type";
	$fieldToolTipsmoh_indicators_data_report["English"]["period_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["period_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["month_id"] = "Month";
	$fieldToolTipsmoh_indicators_data_report["English"]["month_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["month_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["quarter_id"] = "Quarter";
	$fieldToolTipsmoh_indicators_data_report["English"]["quarter_id"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["quarter_id"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["period"] = "Period";
	$fieldToolTipsmoh_indicators_data_report["English"]["period"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["period"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_target"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_target"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicators_data_report["English"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicators_data_report["English"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicators_data_report["English"]["indicator_baseline_year"] = "";
	if (count($fieldToolTipsmoh_indicators_data_report["English"]))
		$tdatamoh_indicators_data_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_indicators_data_report["Amharic"] = array();
	$fieldToolTipsmoh_indicators_data_report["Amharic"] = array();
	$placeHoldersmoh_indicators_data_report["Amharic"] = array();
	$pageTitlesmoh_indicators_data_report["Amharic"] = array();
	$fieldLabelsmoh_indicators_data_report["Amharic"]["data_id"] = "የውሂብ መለያ";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["data_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["data_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_id"] = "አመልካች";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["data_source_id"] = "የውሂብ ምንጭ";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["data_source_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["data_source_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["assessment_id"] = "ግምገማ";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["assessment_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["assessment_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["region_id"] = "ክልል";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["region_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["region_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["unit_id"] = "ክፍል";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["unit_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["unit_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["facility_type_id"] = "የመገልገያ አይነት";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["facility_type_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["value"] = "የውሂብ እሴት";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["value"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["value"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["year"] = "አመት";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["year"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["year"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["scope_id"] = "ወሰን";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["scope_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["scope_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["gender_sex"] = "ጾታ";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["gender_sex"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["gender_sex"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["data_representation"] = "የመረጃው ዓይነት";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["data_representation"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["data_representation"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_group_id"] = "አመላካች ቡድን";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["data_source_detail"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["period_id"] = "Period Id";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["period_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["period_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["month_id"] = "Month Id";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["month_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["month_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["quarter_id"] = "Quarter Id";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["quarter_id"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["quarter_id"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["period"] = "Period";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["period"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["period"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_target"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_target"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicators_data_report["Amharic"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicators_data_report["Amharic"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicators_data_report["Amharic"]["indicator_baseline_year"] = "";
	if (count($fieldToolTipsmoh_indicators_data_report["Amharic"]))
		$tdatamoh_indicators_data_report[".isUseToolTips"] = true;
}


	$tdatamoh_indicators_data_report[".NCSearch"] = true;



$tdatamoh_indicators_data_report[".shortTableName"] = "moh_indicators_data_report";
$tdatamoh_indicators_data_report[".nSecOptions"] = 0;

$tdatamoh_indicators_data_report[".mainTableOwnerID"] = "";
$tdatamoh_indicators_data_report[".entityType"] = 2;
$tdatamoh_indicators_data_report[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicators_data_report[".strOriginalTableName"] = "public.moh_indicator_data";

	



$tdatamoh_indicators_data_report[".showAddInPopup"] = false;

$tdatamoh_indicators_data_report[".showEditInPopup"] = false;

$tdatamoh_indicators_data_report[".showViewInPopup"] = false;

$tdatamoh_indicators_data_report[".listAjax"] = false;
//	temporary
//$tdatamoh_indicators_data_report[".listAjax"] = false;

	$tdatamoh_indicators_data_report[".audit"] = false;

	$tdatamoh_indicators_data_report[".locking"] = false;


$pages = $tdatamoh_indicators_data_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicators_data_report[".edit"] = true;
	$tdatamoh_indicators_data_report[".afterEditAction"] = 1;
	$tdatamoh_indicators_data_report[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicators_data_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicators_data_report[".add"] = true;
$tdatamoh_indicators_data_report[".afterAddAction"] = 1;
$tdatamoh_indicators_data_report[".closePopupAfterAdd"] = 1;
$tdatamoh_indicators_data_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicators_data_report[".list"] = true;
}



$tdatamoh_indicators_data_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicators_data_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicators_data_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicators_data_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicators_data_report[".printFriendly"] = true;
}



$tdatamoh_indicators_data_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicators_data_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicators_data_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicators_data_report[".isUseAjaxSuggest"] = true;



																					

$tdatamoh_indicators_data_report[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicators_data_report[".buttonsAdded"] = false;

$tdatamoh_indicators_data_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_indicators_data_report[".isUseTimeForSearch"] = false;


$tdatamoh_indicators_data_report[".badgeColor"] = "00C2C5";


$tdatamoh_indicators_data_report[".allSearchFields"] = array();
$tdatamoh_indicators_data_report[".filterFields"] = array();
$tdatamoh_indicators_data_report[".requiredSearchFields"] = array();

$tdatamoh_indicators_data_report[".googleLikeFields"] = array();
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "data_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "data_source_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "region_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "unit_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "year";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "scope_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "gender_sex";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "data_representation";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_group_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "data_source_detail";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "period_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "month_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "quarter_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "period";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_target";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_target_year";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_baseline";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_baseline_year";



$tdatamoh_indicators_data_report[".tableType"] = "report";

$tdatamoh_indicators_data_report[".printerPageOrientation"] = 0;
$tdatamoh_indicators_data_report[".nPrinterPageScale"] = 100;

$tdatamoh_indicators_data_report[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicators_data_report[".geocodingEnabled"] = false;

//report settings

$tdatamoh_indicators_data_report[".reportPrintGroupsPerPage"] = 3;
$tdatamoh_indicators_data_report[".reportPrintRecordsPerPage"] = 40;

$tdatamoh_indicators_data_report[".pageSizeGroups"] = 5;
$tdatamoh_indicators_data_report[".pageSizeRecords"] = 20;


//end of report settings



$tdatamoh_indicators_data_report[".isDisplayLoading"] = true;


$tdatamoh_indicators_data_report[".searchIsRequiredForFilters"] = true;

$tdatamoh_indicators_data_report[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
$tdatamoh_indicators_data_report[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators_data_report[".orderindexes"] = array();


$tdatamoh_indicators_data_report[".sqlHead"] = "SELECT d.data_id,  d.indicator_id,  d.data_source_id,  d.assessment_id,  d.region_id,  d.unit_id,  d.facility_type_id,  d.\"value\",  d.\"year\",  d.scope_id,  d.gender_sex,  d.data_representation,  d.indicator_group_id,  d.data_source_detail,  d.period_id,  d.month_id,  d.quarter_id,  CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END AS period,  t.indicator_target,  t.indicator_target_year,  t.indicator_baseline,  t.indicator_baseline_year";
$tdatamoh_indicators_data_report[".sqlFrom"] = "FROM \"public\".moh_indicator_data AS d  LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
$tdatamoh_indicators_data_report[".sqlWhereExpr"] = "";
$tdatamoh_indicators_data_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicators_data_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicators_data_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicators_data_report[".highlightSearchResults"] = true;

$tableKeysmoh_indicators_data_report = array();
$tableKeysmoh_indicators_data_report[] = "data_id";
$tdatamoh_indicators_data_report[".Keys"] = $tableKeysmoh_indicators_data_report;


$tdatamoh_indicators_data_report[".hideMobileList"] = array();




//	data_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "data_id";
	$fdata["GoodName"] = "data_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","data_id");
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


	$tdatamoh_indicators_data_report["data_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "data_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	

	
		$edata["Multiselect"] = true;

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


	$tdatamoh_indicators_data_report["indicator_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_id";
//	data_source_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_source_id";
	$fdata["GoodName"] = "data_source_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","data_source_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["data_source_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "data_source_id";
//	assessment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "assessment_id";
	$fdata["GoodName"] = "assessment_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","assessment_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["assessment_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "assessment_id";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","region_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["region_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "region_id";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","unit_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["unit_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "unit_id";
//	facility_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "facility_type_id";
	$fdata["GoodName"] = "facility_type_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","facility_type_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["facility_type_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "facility_type_id";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","value");
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


	$tdatamoh_indicators_data_report["value"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "value";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","year");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["year"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "year";
//	scope_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "scope_id";
	$fdata["GoodName"] = "scope_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","scope_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["scope_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "scope_id";
//	gender_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gender_sex";
	$fdata["GoodName"] = "gender_sex";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","gender_sex");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["gender_sex"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "gender_sex";
//	data_representation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_representation";
	$fdata["GoodName"] = "data_representation";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","data_representation");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["data_representation"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "data_representation";
//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_group_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
		$edata["Multiselect"] = true;

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


	$tdatamoh_indicators_data_report["indicator_group_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_group_id";
//	data_source_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "data_source_detail";
	$fdata["GoodName"] = "data_source_detail";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","data_source_detail");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["data_source_detail"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "data_source_detail";
//	period_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "period_id";
	$fdata["GoodName"] = "period_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","period_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["period_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "period_id";
//	month_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "month_id";
	$fdata["GoodName"] = "month_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","month_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["month_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "month_id";
//	quarter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "quarter_id";
	$fdata["GoodName"] = "quarter_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","quarter_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["quarter_id"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "quarter_id";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","period");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	

	
	$edata["LookupOrderBy"] = "period";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicators_data_report["period"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "period";
//	indicator_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "indicator_target";
	$fdata["GoodName"] = "indicator_target";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_target");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.indicator_target";

	
	
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


	$tdatamoh_indicators_data_report["indicator_target"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_target";
//	indicator_target_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "indicator_target_year";
	$fdata["GoodName"] = "indicator_target_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_target_year");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["indicator_target_year"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_target_year";
//	indicator_baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "indicator_baseline";
	$fdata["GoodName"] = "indicator_baseline";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_baseline");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["indicator_baseline"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_baseline";
//	indicator_baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "indicator_baseline_year";
	$fdata["GoodName"] = "indicator_baseline_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("MOH_Indicators_Data_Report","indicator_baseline_year");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatamoh_indicators_data_report["indicator_baseline_year"] = $fdata;
		$tdatamoh_indicators_data_report[".searchableFields"][] = "indicator_baseline_year";


$tables_data["MOH_Indicators_Data_Report"]=&$tdatamoh_indicators_data_report;
$field_labels["MOH_Indicators_Data_Report"] = &$fieldLabelsmoh_indicators_data_report;
$fieldToolTips["MOH_Indicators_Data_Report"] = &$fieldToolTipsmoh_indicators_data_report;
$placeHolders["MOH_Indicators_Data_Report"] = &$placeHoldersmoh_indicators_data_report;
$page_titles["MOH_Indicators_Data_Report"] = &$pageTitlesmoh_indicators_data_report;


changeTextControlsToDate( "MOH_Indicators_Data_Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MOH_Indicators_Data_Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MOH_Indicators_Data_Report"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_assessments";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_assessments";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_assessments";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MOH_Indicators_Data_Report"][0] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][0]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][0]["masterKeys"][]="assessment_id";
				$masterTablesData["MOH_Indicators_Data_Report"][0]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][0]["detailKeys"][]="assessment_id";
		
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
					$masterTablesData["MOH_Indicators_Data_Report"][1] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][1]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][1]["masterKeys"][]="data_source_id";
				$masterTablesData["MOH_Indicators_Data_Report"][1]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][1]["detailKeys"][]="data_source_id";
		
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
					$masterTablesData["MOH_Indicators_Data_Report"][2] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][2]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][2]["masterKeys"][]="facility_id";
				$masterTablesData["MOH_Indicators_Data_Report"][2]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][2]["detailKeys"][]="facility_type_id";
		
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
					$masterTablesData["MOH_Indicators_Data_Report"][3] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][3]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][3]["masterKeys"][]="indicator_id";
				$masterTablesData["MOH_Indicators_Data_Report"][3]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][3]["detailKeys"][]="indicator_id";
		
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
					$masterTablesData["MOH_Indicators_Data_Report"][4] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][4]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][4]["masterKeys"][]="region_id";
				$masterTablesData["MOH_Indicators_Data_Report"][4]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][4]["detailKeys"][]="region_id";
		
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
					$masterTablesData["MOH_Indicators_Data_Report"][5] = $masterParams;
				$masterTablesData["MOH_Indicators_Data_Report"][5]["masterKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][5]["masterKeys"][]="unit_id";
				$masterTablesData["MOH_Indicators_Data_Report"][5]["detailKeys"] = array();
	$masterTablesData["MOH_Indicators_Data_Report"][5]["detailKeys"][]="unit_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicators_data_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "d.data_id,  d.indicator_id,  d.data_source_id,  d.assessment_id,  d.region_id,  d.unit_id,  d.facility_type_id,  d.\"value\",  d.\"year\",  d.scope_id,  d.gender_sex,  d.data_representation,  d.indicator_group_id,  d.data_source_detail,  d.period_id,  d.month_id,  d.quarter_id,  CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END AS period,  t.indicator_target,  t.indicator_target_year,  t.indicator_baseline,  t.indicator_baseline_year";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_data AS d  LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
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
	"m_strName" => "data_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto6["m_sql"] = "d.data_id";
$proto6["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto8["m_sql"] = "d.indicator_id";
$proto8["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto10["m_sql"] = "d.data_source_id";
$proto10["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto12["m_sql"] = "d.assessment_id";
$proto12["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto14["m_sql"] = "d.region_id";
$proto14["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto16["m_sql"] = "d.unit_id";
$proto16["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto18["m_sql"] = "d.facility_type_id";
$proto18["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto20["m_sql"] = "d.\"value\"";
$proto20["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto22["m_sql"] = "d.\"year\"";
$proto22["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto24["m_sql"] = "d.scope_id";
$proto24["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto26["m_sql"] = "d.gender_sex";
$proto26["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto28["m_sql"] = "d.data_representation";
$proto28["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto30["m_sql"] = "d.indicator_group_id";
$proto30["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_detail",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto32["m_sql"] = "d.data_source_detail";
$proto32["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "period_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto34["m_sql"] = "d.period_id";
$proto34["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "month_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto36["m_sql"] = "d.month_id";
$proto36["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter_id",
	"m_strTable" => "d",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto38["m_sql"] = "d.quarter_id";
$proto38["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END"
));

$proto40["m_sql"] = "CASE           WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)          WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)          ELSE d.\"year\"::TEXT      END";
$proto40["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "period";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto42["m_sql"] = "t.indicator_target";
$proto42["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target_year",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto44["m_sql"] = "t.indicator_target_year";
$proto44["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto46["m_sql"] = "t.indicator_baseline";
$proto46["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline_year",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto48["m_sql"] = "t.indicator_baseline_year";
$proto48["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "public.moh_indicator_data";
$proto51["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "data_id";
$proto51["m_columns"][] = "indicator_id";
$proto51["m_columns"][] = "data_source_id";
$proto51["m_columns"][] = "assessment_id";
$proto51["m_columns"][] = "region_id";
$proto51["m_columns"][] = "unit_id";
$proto51["m_columns"][] = "facility_type_id";
$proto51["m_columns"][] = "value";
$proto51["m_columns"][] = "year";
$proto51["m_columns"][] = "scope_id";
$proto51["m_columns"][] = "gender_sex";
$proto51["m_columns"][] = "data_representation";
$proto51["m_columns"][] = "indicator_group_id";
$proto51["m_columns"][] = "data_source_detail";
$proto51["m_columns"][] = "period_id";
$proto51["m_columns"][] = "month_id";
$proto51["m_columns"][] = "quarter_id";
$proto51["m_columns"][] = "year_id";
$proto51["m_columns"][] = "period";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "\"public\".moh_indicator_data AS d";
$proto50["m_alias"] = "d";
$proto50["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_LEFTJOIN";
			$proto55=array();
$proto55["m_strName"] = "public.moh_indicators_target";
$proto55["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "ID";
$proto55["m_columns"][] = "indicator_id";
$proto55["m_columns"][] = "indicator_name";
$proto55["m_columns"][] = "indicator_target";
$proto55["m_columns"][] = "indicator_baseline";
$proto55["m_columns"][] = "indicator_target_year";
$proto55["m_columns"][] = "indicator_baseline_year";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN \"public\".moh_indicators_target AS t ON d.indicator_id = t.indicator_id";
$proto54["m_alias"] = "t";
$proto54["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto56=array();
$proto56["m_sql"] = "t.indicator_id = d.indicator_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "t",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= d.indicator_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="MOH_Indicators_Data_Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicators_data_report = createSqlQuery_moh_indicators_data_report();


	
																												;

																						

$tdatamoh_indicators_data_report[".sqlquery"] = $queryData_moh_indicators_data_report;



$tdatamoh_indicators_data_report[".hasEvents"] = false;

?>