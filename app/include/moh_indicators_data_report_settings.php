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
	$fieldLabelsmoh_indicators_data_report["English"]["unit_id"] = "Unit";
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
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "assessment_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "region_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "unit_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "value";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "year";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "scope_id";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "gender_sex";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "data_representation";
$tdatamoh_indicators_data_report[".googleLikeFields"][] = "indicator_group_id";



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







$tstrOrderBy = "";
$tdatamoh_indicators_data_report[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicators_data_report[".orderindexes"] = array();


$tdatamoh_indicators_data_report[".sqlHead"] = "SELECT data_id,  	indicator_id,  	data_source_id,  	assessment_id,  	region_id,  	unit_id,  	facility_type_id,  	\"value\",  	\"year\",  	scope_id,  	gender_sex,  	data_representation,  	indicator_group_id";
$tdatamoh_indicators_data_report[".sqlFrom"] = "FROM \"public\".moh_indicator_data";
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
	$fdata["FullName"] = "data_id";

	
	
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
	$fdata["FullName"] = "indicator_id";

	
	
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
	$fdata["FullName"] = "data_source_id";

	
	
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
	$fdata["FullName"] = "assessment_id";

	
	
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
	$fdata["FullName"] = "region_id";

	
	
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
	$fdata["FullName"] = "unit_id";

	
	
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
	$fdata["FullName"] = "facility_type_id";

	
	
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
	$fdata["FullName"] = "\"value\"";

	
	
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
	$fdata["FullName"] = "\"year\"";

	
	
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
	$fdata["FullName"] = "scope_id";

	
	
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
	$fdata["FullName"] = "gender_sex";

	
	
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
	$fdata["FullName"] = "data_representation";

	
	
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
	$fdata["FullName"] = "indicator_group_id";

	
	
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
$proto0["m_strFieldList"] = "data_id,  	indicator_id,  	data_source_id,  	assessment_id,  	region_id,  	unit_id,  	facility_type_id,  	\"value\",  	\"year\",  	scope_id,  	gender_sex,  	data_representation,  	indicator_group_id";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_data";
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
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto6["m_sql"] = "data_id";
$proto6["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto10["m_sql"] = "data_source_id";
$proto10["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto12["m_sql"] = "assessment_id";
$proto12["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto14["m_sql"] = "region_id";
$proto14["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto16["m_sql"] = "unit_id";
$proto16["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto18["m_sql"] = "facility_type_id";
$proto18["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto20["m_sql"] = "\"value\"";
$proto20["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto22["m_sql"] = "\"year\"";
$proto22["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto24["m_sql"] = "scope_id";
$proto24["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_sex",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto26["m_sql"] = "gender_sex";
$proto26["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_representation",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto28["m_sql"] = "data_representation";
$proto28["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.moh_indicator_data",
	"m_srcTableName" => "MOH_Indicators_Data_Report"
));

$proto30["m_sql"] = "indicator_group_id";
$proto30["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "public.moh_indicator_data";
$proto33["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "data_id";
$proto33["m_columns"][] = "indicator_id";
$proto33["m_columns"][] = "data_source_id";
$proto33["m_columns"][] = "assessment_id";
$proto33["m_columns"][] = "region_id";
$proto33["m_columns"][] = "unit_id";
$proto33["m_columns"][] = "facility_type_id";
$proto33["m_columns"][] = "value";
$proto33["m_columns"][] = "year";
$proto33["m_columns"][] = "scope_id";
$proto33["m_columns"][] = "gender_sex";
$proto33["m_columns"][] = "data_representation";
$proto33["m_columns"][] = "indicator_group_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "\"public\".moh_indicator_data";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "MOH_Indicators_Data_Report";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

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