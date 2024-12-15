<?php
$tdatamoh_indicator_data = array();
$tdatamoh_indicator_data[".searchableFields"] = array();
$tdatamoh_indicator_data[".ShortName"] = "moh_indicator_data";
$tdatamoh_indicator_data[".OwnerID"] = "";
$tdatamoh_indicator_data[".OriginalTable"] = "public.moh_indicator_data";


$tdatamoh_indicator_data[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_indicator_data[".originalPagesByType"] = $tdatamoh_indicator_data[".pagesByType"];
$tdatamoh_indicator_data[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_indicator_data[".originalPages"] = $tdatamoh_indicator_data[".pages"];
$tdatamoh_indicator_data[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_indicator_data[".originalDefaultPages"] = $tdatamoh_indicator_data[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicator_data = array();
$fieldToolTipsmoh_indicator_data = array();
$pageTitlesmoh_indicator_data = array();
$placeHoldersmoh_indicator_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicator_data["English"] = array();
	$fieldToolTipsmoh_indicator_data["English"] = array();
	$placeHoldersmoh_indicator_data["English"] = array();
	$pageTitlesmoh_indicator_data["English"] = array();
	$fieldLabelsmoh_indicator_data["English"]["data_id"] = "Data Id";
	$fieldToolTipsmoh_indicator_data["English"]["data_id"] = "";
	$placeHoldersmoh_indicator_data["English"]["data_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_id"] = "Indicator";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_id"] = "Select the indicator category or indicator group to see the list of indicators by group";
	$placeHoldersmoh_indicator_data["English"]["indicator_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["data_source_id"] = "Data Source";
	$fieldToolTipsmoh_indicator_data["English"]["data_source_id"] = "Where is the data from";
	$placeHoldersmoh_indicator_data["English"]["data_source_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["assessment_id"] = "Assessment Type";
	$fieldToolTipsmoh_indicator_data["English"]["assessment_id"] = "What type of Assessment is it";
	$placeHoldersmoh_indicator_data["English"]["assessment_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["region_id"] = "Region";
	$fieldToolTipsmoh_indicator_data["English"]["region_id"] = "If the data is regional then select the region the data belongs to";
	$placeHoldersmoh_indicator_data["English"]["region_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["unit_id"] = "Health Administration Level";
	$fieldToolTipsmoh_indicator_data["English"]["unit_id"] = "Will determine the data if it is in Woreda or Zonal Level";
	$placeHoldersmoh_indicator_data["English"]["unit_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["value"] = "Value";
	$fieldToolTipsmoh_indicator_data["English"]["value"] = "";
	$placeHoldersmoh_indicator_data["English"]["value"] = "";
	$fieldLabelsmoh_indicator_data["English"]["year"] = "Year";
	$fieldToolTipsmoh_indicator_data["English"]["year"] = "Enter the year of the data period that was fetched for";
	$placeHoldersmoh_indicator_data["English"]["year"] = "";
	$fieldLabelsmoh_indicator_data["English"]["facility_type_id"] = "Facility Type";
	$fieldToolTipsmoh_indicator_data["English"]["facility_type_id"] = "Select the facility type you are entering data for";
	$placeHoldersmoh_indicator_data["English"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["scope_id"] = "Scope";
	$fieldToolTipsmoh_indicator_data["English"]["scope_id"] = "Please select scope if its National or Regional Level";
	$placeHoldersmoh_indicator_data["English"]["scope_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["gender_sex"] = "Gender/Sex";
	$fieldToolTipsmoh_indicator_data["English"]["gender_sex"] = "Select Sex/Gender here to enter data by category and if applicable";
	$placeHoldersmoh_indicator_data["English"]["gender_sex"] = "";
	$fieldLabelsmoh_indicator_data["English"]["data_representation"] = "Data Representation";
	$fieldToolTipsmoh_indicator_data["English"]["data_representation"] = "Select if it is represented in number or percent If Is the data in quantity or proportion";
	$placeHoldersmoh_indicator_data["English"]["data_representation"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_group_id"] = "Indicator Group";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_group_id"] = "Select the indicator Group to see the list of indicators";
	$placeHoldersmoh_indicator_data["English"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicator_data["English"]["data_source_detail"] = "";
	$placeHoldersmoh_indicator_data["English"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicator_data["English"]["period_id"] = "Period Type";
	$fieldToolTipsmoh_indicator_data["English"]["period_id"] = "";
	$placeHoldersmoh_indicator_data["English"]["period_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["month_id"] = "Month";
	$fieldToolTipsmoh_indicator_data["English"]["month_id"] = "";
	$placeHoldersmoh_indicator_data["English"]["month_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["quarter_id"] = "Quarter";
	$fieldToolTipsmoh_indicator_data["English"]["quarter_id"] = "";
	$placeHoldersmoh_indicator_data["English"]["quarter_id"] = "";
	$fieldLabelsmoh_indicator_data["English"]["period"] = "Period";
	$fieldToolTipsmoh_indicator_data["English"]["period"] = "";
	$placeHoldersmoh_indicator_data["English"]["period"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_target"] = "Target";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_target"] = "";
	$placeHoldersmoh_indicator_data["English"]["indicator_target"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_target_year"] = "Target Year";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicator_data["English"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_baseline"] = "Baseline";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicator_data["English"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicator_data["English"]["indicator_baseline_year"] = "Baseline Year";
	$fieldToolTipsmoh_indicator_data["English"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicator_data["English"]["indicator_baseline_year"] = "";
	$pageTitlesmoh_indicator_data["English"]["add"] = "MOH Indicator Data, Add new";
	if (count($fieldToolTipsmoh_indicator_data["English"]))
		$tdatamoh_indicator_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_indicator_data["Amharic"] = array();
	$fieldToolTipsmoh_indicator_data["Amharic"] = array();
	$placeHoldersmoh_indicator_data["Amharic"] = array();
	$pageTitlesmoh_indicator_data["Amharic"] = array();
	$fieldLabelsmoh_indicator_data["Amharic"]["data_id"] = "የውሂብ መለያ";
	$fieldToolTipsmoh_indicator_data["Amharic"]["data_id"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["data_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_id"] = "አመልካች";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_id"] = "የአመላካቾችን ዝርዝር በቡድን ለማየት የጠቋሚውን ምድብ ወይም አመልካች ቡድን ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["data_source_id"] = "የውሂብ ምንጭ";
	$fieldToolTipsmoh_indicator_data["Amharic"]["data_source_id"] = "መረጃው ከየት ነው።";
	$placeHoldersmoh_indicator_data["Amharic"]["data_source_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["assessment_id"] = "የግምገማ አይነት";
	$fieldToolTipsmoh_indicator_data["Amharic"]["assessment_id"] = "ምን አይነት ግምገማ ነው።";
	$placeHoldersmoh_indicator_data["Amharic"]["assessment_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["region_id"] = "ክልል";
	$fieldToolTipsmoh_indicator_data["Amharic"]["region_id"] = "ውሂቡ ክልላዊ ከሆነ ውሂቡ ያለበትን ክልል ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["region_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["unit_id"] = "የጤና አስተዳደር ደረጃ";
	$fieldToolTipsmoh_indicator_data["Amharic"]["unit_id"] = "መረጃው በወረዳ ወይም በዞን ደረጃ ከሆነ ይወስናል";
	$placeHoldersmoh_indicator_data["Amharic"]["unit_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["facility_type_id"] = "የመገልገያ አይነት";
	$fieldToolTipsmoh_indicator_data["Amharic"]["facility_type_id"] = "ውሂብ የሚያስገቡለትን የመገልገያ አይነት ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["facility_type_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["value"] = "የውሂብ እሴት";
	$fieldToolTipsmoh_indicator_data["Amharic"]["value"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["value"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["year"] = "አመት";
	$fieldToolTipsmoh_indicator_data["Amharic"]["year"] = "የመጣበትን የውሂብ ክፍለ ጊዜ አመት አስገባ";
	$placeHoldersmoh_indicator_data["Amharic"]["year"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["scope_id"] = "ወሰን";
	$fieldToolTipsmoh_indicator_data["Amharic"]["scope_id"] = "እባክዎ ብሄራዊ ወይም ክልላዊ ደረጃ ከሆነ ወሰን ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["scope_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["gender_sex"] = "ጾታ";
	$fieldToolTipsmoh_indicator_data["Amharic"]["gender_sex"] = "መረጃን በምድብ ለማስገባት እዚህ ሴክስ/ጾታን ይምረጡ እና አስፈላጊ ከሆነ";
	$placeHoldersmoh_indicator_data["Amharic"]["gender_sex"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["data_representation"] = "የመረጃው ዓይነት";
	$fieldToolTipsmoh_indicator_data["Amharic"]["data_representation"] = "በቁጥር ወይም በመቶ የሚወከለው ከሆነ ውሂቡ በብዛት ወይም በመጠን ከሆነ ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["data_representation"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_group_id"] = "አመላካች ቡድን";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_group_id"] = "የአመላካቾችን ዝርዝር ለማየት ጠቋሚውን ቡድን ይምረጡ";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["data_source_detail"] = "Data Source Detail";
	$fieldToolTipsmoh_indicator_data["Amharic"]["data_source_detail"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["data_source_detail"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["period_id"] = "Period Id";
	$fieldToolTipsmoh_indicator_data["Amharic"]["period_id"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["period_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["month_id"] = "Month Id";
	$fieldToolTipsmoh_indicator_data["Amharic"]["month_id"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["month_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["quarter_id"] = "Quarter Id";
	$fieldToolTipsmoh_indicator_data["Amharic"]["quarter_id"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["quarter_id"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["period"] = "Period";
	$fieldToolTipsmoh_indicator_data["Amharic"]["period"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["period"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_target"] = "Indicator Target";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_target"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_target"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_target_year"] = "Indicator Target Year";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_target_year"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_target_year"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_baseline"] = "Indicator Baseline";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_baseline"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_baseline"] = "";
	$fieldLabelsmoh_indicator_data["Amharic"]["indicator_baseline_year"] = "Indicator Baseline Year";
	$fieldToolTipsmoh_indicator_data["Amharic"]["indicator_baseline_year"] = "";
	$placeHoldersmoh_indicator_data["Amharic"]["indicator_baseline_year"] = "";
	$pageTitlesmoh_indicator_data["Amharic"]["add"] = "MOH አመልካች ውሂብ፣ አዲስ ያክሉ";
	if (count($fieldToolTipsmoh_indicator_data["Amharic"]))
		$tdatamoh_indicator_data[".isUseToolTips"] = true;
}


	$tdatamoh_indicator_data[".NCSearch"] = true;



$tdatamoh_indicator_data[".shortTableName"] = "moh_indicator_data";
$tdatamoh_indicator_data[".nSecOptions"] = 0;

$tdatamoh_indicator_data[".mainTableOwnerID"] = "";
$tdatamoh_indicator_data[".entityType"] = 0;
$tdatamoh_indicator_data[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicator_data[".strOriginalTableName"] = "public.moh_indicator_data";

	



$tdatamoh_indicator_data[".showAddInPopup"] = false;

$tdatamoh_indicator_data[".showEditInPopup"] = false;

$tdatamoh_indicator_data[".showViewInPopup"] = false;

$tdatamoh_indicator_data[".listAjax"] = false;
//	temporary
//$tdatamoh_indicator_data[".listAjax"] = false;

	$tdatamoh_indicator_data[".audit"] = true;

	$tdatamoh_indicator_data[".locking"] = false;


$pages = $tdatamoh_indicator_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicator_data[".edit"] = true;
	$tdatamoh_indicator_data[".afterEditAction"] = 1;
	$tdatamoh_indicator_data[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicator_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicator_data[".add"] = true;
$tdatamoh_indicator_data[".afterAddAction"] = 1;
$tdatamoh_indicator_data[".closePopupAfterAdd"] = 1;
$tdatamoh_indicator_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicator_data[".list"] = true;
}



$tdatamoh_indicator_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicator_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicator_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicator_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicator_data[".printFriendly"] = true;
}



$tdatamoh_indicator_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicator_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicator_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicator_data[".isUseAjaxSuggest"] = true;



																											

$tdatamoh_indicator_data[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicator_data[".buttonsAdded"] = false;

$tdatamoh_indicator_data[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamoh_indicator_data[".isUseTimeForSearch"] = false;


$tdatamoh_indicator_data[".badgeColor"] = "97ffff";


$tdatamoh_indicator_data[".allSearchFields"] = array();
$tdatamoh_indicator_data[".filterFields"] = array();
$tdatamoh_indicator_data[".requiredSearchFields"] = array();

$tdatamoh_indicator_data[".googleLikeFields"] = array();
$tdatamoh_indicator_data[".googleLikeFields"][] = "data_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "data_source_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "region_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "unit_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "value";
$tdatamoh_indicator_data[".googleLikeFields"][] = "year";
$tdatamoh_indicator_data[".googleLikeFields"][] = "scope_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "gender_sex";
$tdatamoh_indicator_data[".googleLikeFields"][] = "data_representation";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_group_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "data_source_detail";
$tdatamoh_indicator_data[".googleLikeFields"][] = "period_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "month_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "quarter_id";
$tdatamoh_indicator_data[".googleLikeFields"][] = "period";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_target";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_target_year";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_baseline";
$tdatamoh_indicator_data[".googleLikeFields"][] = "indicator_baseline_year";



$tdatamoh_indicator_data[".tableType"] = "list";

$tdatamoh_indicator_data[".printerPageOrientation"] = 0;
$tdatamoh_indicator_data[".nPrinterPageScale"] = 100;

$tdatamoh_indicator_data[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicator_data[".geocodingEnabled"] = false;




$tdatamoh_indicator_data[".isDisplayLoading"] = true;






$tdatamoh_indicator_data[".pageSize"] = 20;

$tdatamoh_indicator_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_indicator_data[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicator_data[".orderindexes"] = array();


$tdatamoh_indicator_data[".sqlHead"] = "SELECT \"public\".moh_indicator_data.data_id,  \"public\".moh_indicator_data.indicator_id,  \"public\".moh_indicator_data.data_source_id,  \"public\".moh_indicator_data.assessment_id,  \"public\".moh_indicator_data.region_id,  \"public\".moh_indicator_data.unit_id,  \"public\".moh_indicator_data.facility_type_id,  \"public\".moh_indicator_data.\"value\",  \"public\".moh_indicator_data.\"year\",  \"public\".moh_indicator_data.scope_id,  \"public\".moh_indicator_data.gender_sex,  \"public\".moh_indicator_data.data_representation,  \"public\".moh_indicator_data.indicator_group_id,  \"public\".moh_indicator_data.data_source_detail,  \"public\".moh_indicator_data.period_id,  \"public\".moh_indicator_data.month_id,  \"public\".moh_indicator_data.quarter_id,  CASE           WHEN moh_indicator_data.quarter_id IS NOT NULL THEN CONCAT('Q', moh_indicator_data.quarter_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          WHEN moh_indicator_data.month_id IS NOT NULL THEN CONCAT('M', moh_indicator_data.month_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          ELSE moh_indicator_data.\"year\"::TEXT      END AS period,  \"public\".moh_indicators_target.indicator_target,  \"public\".moh_indicators_target.indicator_target_year,  \"public\".moh_indicators_target.indicator_baseline,  \"public\".moh_indicators_target.indicator_baseline_year";
$tdatamoh_indicator_data[".sqlFrom"] = "FROM \"public\".moh_indicator_data  LEFT OUTER JOIN \"public\".moh_indicators_target ON \"public\".moh_indicator_data.indicator_id = \"public\".moh_indicators_target.indicator_id";
$tdatamoh_indicator_data[".sqlWhereExpr"] = "";
$tdatamoh_indicator_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicator_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicator_data[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicator_data[".highlightSearchResults"] = true;

$tableKeysmoh_indicator_data = array();
$tableKeysmoh_indicator_data[] = "data_id";
$tdatamoh_indicator_data[".Keys"] = $tableKeysmoh_indicator_data;


$tdatamoh_indicator_data[".hideMobileList"] = array();




//	data_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "data_id";
	$fdata["GoodName"] = "data_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","data_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "data_id";

		$fdata["sourceSingle"] = "data_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.data_id";

	
	
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


	$tdatamoh_indicator_data["data_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "data_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.indicator_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["indicator_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_id";
//	data_source_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_source_id";
	$fdata["GoodName"] = "data_source_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","data_source_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data_source_id";

		$fdata["sourceSingle"] = "data_source_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.data_source_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["data_source_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "data_source_id";
//	assessment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "assessment_id";
	$fdata["GoodName"] = "assessment_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","assessment_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "assessment_id";

		$fdata["sourceSingle"] = "assessment_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.assessment_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["assessment_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "assessment_id";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.region_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["region_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "region_id";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","unit_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "unit_id";

		$fdata["sourceSingle"] = "unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.unit_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["unit_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "unit_id";
//	facility_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "facility_type_id";
	$fdata["GoodName"] = "facility_type_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","facility_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_type_id";

		$fdata["sourceSingle"] = "facility_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.facility_type_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["facility_type_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "facility_type_id";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.\"value\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatamoh_indicator_data["value"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "value";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.\"year\"";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
	$edata["LookupOrderBy"] = "year";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
			$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterApplyBtn"] = true;
	$fdata["filterSliderStepType"] = 1;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatamoh_indicator_data["year"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "year";
//	scope_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "scope_id";
	$fdata["GoodName"] = "scope_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","scope_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "scope_id";

		$fdata["sourceSingle"] = "scope_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.scope_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["scope_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "scope_id";
//	gender_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gender_sex";
	$fdata["GoodName"] = "gender_sex";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","gender_sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender_sex";

		$fdata["sourceSingle"] = "gender_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.gender_sex";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["gender_sex"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "gender_sex";
//	data_representation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_representation";
	$fdata["GoodName"] = "data_representation";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","data_representation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_representation";

		$fdata["sourceSingle"] = "data_representation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.data_representation";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Number";
	$edata["LookupValues"][] = "Percent";

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["data_representation"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "data_representation";
//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.indicator_group_id";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "indicator_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["indicator_group_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_group_id";
//	data_source_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "data_source_detail";
	$fdata["GoodName"] = "data_source_detail";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","data_source_detail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_source_detail";

		$fdata["sourceSingle"] = "data_source_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.data_source_detail";

	
	
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
	$edata["LookupTable"] = "public.moh_ir_datasource";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ir_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ir_datasource";

	

	
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


	$tdatamoh_indicator_data["data_source_detail"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "data_source_detail";
//	period_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "period_id";
	$fdata["GoodName"] = "period_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","period_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "period_id";

		$fdata["sourceSingle"] = "period_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.period_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatamoh_indicator_data["period_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "period_id";
//	month_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "month_id";
	$fdata["GoodName"] = "month_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","month_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "month_id";

		$fdata["sourceSingle"] = "month_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.month_id";

	
	
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
	$edata["LookupTable"] = "public.moh_months";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "month_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "month";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["month_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "month_id";
//	quarter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "quarter_id";
	$fdata["GoodName"] = "quarter_id";
	$fdata["ownerTable"] = "public.moh_indicator_data";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","quarter_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quarter_id";

		$fdata["sourceSingle"] = "quarter_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicator_data.quarter_id";

	
	
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
	$edata["LookupTable"] = "public.moh_quarters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "quarter_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quarter";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["quarter_id"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "quarter_id";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","period");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "period";

		$fdata["sourceSingle"] = "period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN moh_indicator_data.quarter_id IS NOT NULL THEN CONCAT('Q', moh_indicator_data.quarter_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          WHEN moh_indicator_data.month_id IS NOT NULL THEN CONCAT('M', moh_indicator_data.month_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          ELSE moh_indicator_data.\"year\"::TEXT      END";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "data_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamoh_indicator_data["period"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "period";
//	indicator_target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "indicator_target";
	$fdata["GoodName"] = "indicator_target";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_target");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicators_target.indicator_target";

	
	
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


	$tdatamoh_indicator_data["indicator_target"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_target";
//	indicator_target_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "indicator_target_year";
	$fdata["GoodName"] = "indicator_target_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_target_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_target_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicators_target.indicator_target_year";

	
	
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


	$tdatamoh_indicator_data["indicator_target_year"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_target_year";
//	indicator_baseline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "indicator_baseline";
	$fdata["GoodName"] = "indicator_baseline";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_baseline");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicators_target.indicator_baseline";

	
	
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


	$tdatamoh_indicator_data["indicator_baseline"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_baseline";
//	indicator_baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "indicator_baseline_year";
	$fdata["GoodName"] = "indicator_baseline_year";
	$fdata["ownerTable"] = "public.moh_indicators_target";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_data","indicator_baseline_year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_baseline_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".moh_indicators_target.indicator_baseline_year";

	
	
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


	$tdatamoh_indicator_data["indicator_baseline_year"] = $fdata;
		$tdatamoh_indicator_data[".searchableFields"][] = "indicator_baseline_year";


$tables_data["public.moh_indicator_data"]=&$tdatamoh_indicator_data;
$field_labels["public_moh_indicator_data"] = &$fieldLabelsmoh_indicator_data;
$fieldToolTips["public_moh_indicator_data"] = &$fieldToolTipsmoh_indicator_data;
$placeHolders["public_moh_indicator_data"] = &$placeHoldersmoh_indicator_data;
$page_titles["public_moh_indicator_data"] = &$pageTitlesmoh_indicator_data;


changeTextControlsToDate( "public.moh_indicator_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_indicator_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_indicator_data"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_data_sources";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_data_sources";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_data_sources";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicator_data"][0] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][0]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][0]["masterKeys"][]="data_source_id";
				$masterTablesData["public.moh_indicator_data"][0]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][0]["detailKeys"][]="data_source_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_assessments";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_assessments";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_assessments";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicator_data"][1] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][1]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][1]["masterKeys"][]="assessment_id";
				$masterTablesData["public.moh_indicator_data"][1]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][1]["detailKeys"][]="assessment_id";
		
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
					$masterTablesData["public.moh_indicator_data"][2] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][2]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][2]["masterKeys"][]="unit_id";
				$masterTablesData["public.moh_indicator_data"][2]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][2]["detailKeys"][]="unit_id";
		
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
					$masterTablesData["public.moh_indicator_data"][3] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][3]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][3]["masterKeys"][]="indicator_id";
				$masterTablesData["public.moh_indicator_data"][3]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][3]["detailKeys"][]="indicator_id";
		
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
					$masterTablesData["public.moh_indicator_data"][4] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][4]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][4]["masterKeys"][]="region_id";
				$masterTablesData["public.moh_indicator_data"][4]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][4]["detailKeys"][]="region_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_facility_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_facility_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_facility_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicator_data"][5] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][5]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][5]["masterKeys"][]="facility_type_id";
				$masterTablesData["public.moh_indicator_data"][5]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][5]["detailKeys"][]="facility_type_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_data_scope";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_data_scope";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_data_scope";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicator_data"][6] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][6]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][6]["masterKeys"][]="scope_id";
				$masterTablesData["public.moh_indicator_data"][6]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][6]["detailKeys"][]="scope_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_indicator_groups";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_indicator_groups";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_indicator_groups";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_indicator_data"][7] = $masterParams;
				$masterTablesData["public.moh_indicator_data"][7]["masterKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][7]["masterKeys"][]="indicator_group_id";
				$masterTablesData["public.moh_indicator_data"][7]["detailKeys"] = array();
	$masterTablesData["public.moh_indicator_data"][7]["detailKeys"][]="indicator_group_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicator_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".moh_indicator_data.data_id,  \"public\".moh_indicator_data.indicator_id,  \"public\".moh_indicator_data.data_source_id,  \"public\".moh_indicator_data.assessment_id,  \"public\".moh_indicator_data.region_id,  \"public\".moh_indicator_data.unit_id,  \"public\".moh_indicator_data.facility_type_id,  \"public\".moh_indicator_data.\"value\",  \"public\".moh_indicator_data.\"year\",  \"public\".moh_indicator_data.scope_id,  \"public\".moh_indicator_data.gender_sex,  \"public\".moh_indicator_data.data_representation,  \"public\".moh_indicator_data.indicator_group_id,  \"public\".moh_indicator_data.data_source_detail,  \"public\".moh_indicator_data.period_id,  \"public\".moh_indicator_data.month_id,  \"public\".moh_indicator_data.quarter_id,  CASE           WHEN moh_indicator_data.quarter_id IS NOT NULL THEN CONCAT('Q', moh_indicator_data.quarter_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          WHEN moh_indicator_data.month_id IS NOT NULL THEN CONCAT('M', moh_indicator_data.month_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          ELSE moh_indicator_data.\"year\"::TEXT      END AS period,  \"public\".moh_indicators_target.indicator_target,  \"public\".moh_indicators_target.indicator_target_year,  \"public\".moh_indicators_target.indicator_baseline,  \"public\".moh_indicators_target.indicator_baseline_year";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_data  LEFT OUTER JOIN \"public\".moh_indicators_target ON \"public\".moh_indicator_data.indicator_id = \"public\".moh_indicators_target.indicator_id";
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
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto6["m_sql"] = "\"public\".moh_indicator_data.data_id";
$proto6["m_srcTableName"] = "public.moh_indicator_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto8["m_sql"] = "\"public\".moh_indicator_data.indicator_id";
$proto8["m_srcTableName"] = "public.moh_indicator_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto10["m_sql"] = "\"public\".moh_indicator_data.data_source_id";
$proto10["m_srcTableName"] = "public.moh_indicator_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto12["m_sql"] = "\"public\".moh_indicator_data.assessment_id";
$proto12["m_srcTableName"] = "public.moh_indicator_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto14["m_sql"] = "\"public\".moh_indicator_data.region_id";
$proto14["m_srcTableName"] = "public.moh_indicator_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto16["m_sql"] = "\"public\".moh_indicator_data.unit_id";
$proto16["m_srcTableName"] = "public.moh_indicator_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto18["m_sql"] = "\"public\".moh_indicator_data.facility_type_id";
$proto18["m_srcTableName"] = "public.moh_indicator_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto20["m_sql"] = "\"public\".moh_indicator_data.\"value\"";
$proto20["m_srcTableName"] = "public.moh_indicator_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto22["m_sql"] = "\"public\".moh_indicator_data.\"year\"";
$proto22["m_srcTableName"] = "public.moh_indicator_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto24["m_sql"] = "\"public\".moh_indicator_data.scope_id";
$proto24["m_srcTableName"] = "public.moh_indicator_data";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto26["m_sql"] = "\"public\".moh_indicator_data.gender_sex";
$proto26["m_srcTableName"] = "public.moh_indicator_data";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto28["m_sql"] = "\"public\".moh_indicator_data.data_representation";
$proto28["m_srcTableName"] = "public.moh_indicator_data";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto30["m_sql"] = "\"public\".moh_indicator_data.indicator_group_id";
$proto30["m_srcTableName"] = "public.moh_indicator_data";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_detail",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto32["m_sql"] = "\"public\".moh_indicator_data.data_source_detail";
$proto32["m_srcTableName"] = "public.moh_indicator_data";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "period_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto34["m_sql"] = "\"public\".moh_indicator_data.period_id";
$proto34["m_srcTableName"] = "public.moh_indicator_data";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "month_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto36["m_sql"] = "\"public\".moh_indicator_data.month_id";
$proto36["m_srcTableName"] = "public.moh_indicator_data";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto38["m_sql"] = "\"public\".moh_indicator_data.quarter_id";
$proto38["m_srcTableName"] = "public.moh_indicator_data";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN moh_indicator_data.quarter_id IS NOT NULL THEN CONCAT('Q', moh_indicator_data.quarter_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          WHEN moh_indicator_data.month_id IS NOT NULL THEN CONCAT('M', moh_indicator_data.month_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          ELSE moh_indicator_data.\"year\"::TEXT      END"
));

$proto40["m_sql"] = "CASE           WHEN moh_indicator_data.quarter_id IS NOT NULL THEN CONCAT('Q', moh_indicator_data.quarter_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          WHEN moh_indicator_data.month_id IS NOT NULL THEN CONCAT('M', moh_indicator_data.month_id::TEXT, '-', moh_indicator_data.\"year\"::TEXT)          ELSE moh_indicator_data.\"year\"::TEXT      END";
$proto40["m_srcTableName"] = "public.moh_indicator_data";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "period";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto42["m_sql"] = "\"public\".moh_indicators_target.indicator_target";
$proto42["m_srcTableName"] = "public.moh_indicator_data";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_target_year",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto44["m_sql"] = "\"public\".moh_indicators_target.indicator_target_year";
$proto44["m_srcTableName"] = "public.moh_indicator_data";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto46["m_sql"] = "\"public\".moh_indicators_target.indicator_baseline";
$proto46["m_srcTableName"] = "public.moh_indicator_data";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_baseline_year",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto48["m_sql"] = "\"public\".moh_indicators_target.indicator_baseline_year";
$proto48["m_srcTableName"] = "public.moh_indicator_data";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "public.moh_indicator_data";
$proto51["m_srcTableName"] = "public.moh_indicator_data";
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
$proto50["m_sql"] = "\"public\".moh_indicator_data";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "public.moh_indicator_data";
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
$proto55["m_srcTableName"] = "public.moh_indicator_data";
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
$proto54["m_sql"] = "LEFT OUTER JOIN \"public\".moh_indicators_target ON \"public\".moh_indicator_data.indicator_id = \"public\".moh_indicators_target.indicator_id";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "public.moh_indicator_data";
$proto56=array();
$proto56["m_sql"] = "\"public\".moh_indicators_target.indicator_id = \"public\".moh_indicator_data.indicator_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicators_target",
	"m_srcTableName" => "public.moh_indicator_data"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= \"public\".moh_indicator_data.indicator_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.moh_indicator_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicator_data = createSqlQuery_moh_indicator_data();


	
																												;

																						

$tdatamoh_indicator_data[".sqlquery"] = $queryData_moh_indicator_data;



include_once(getabspath("include/moh_indicator_data_events.php"));
$tdatamoh_indicator_data[".hasEvents"] = true;

?>