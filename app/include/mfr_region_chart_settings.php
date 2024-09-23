<?php
$tdatamfr_region_chart = array();
$tdatamfr_region_chart[".searchableFields"] = array();
$tdatamfr_region_chart[".ShortName"] = "mfr_region_chart";
$tdatamfr_region_chart[".OwnerID"] = "";
$tdatamfr_region_chart[".OriginalTable"] = "public.mfr_region";


$tdatamfr_region_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamfr_region_chart[".originalPagesByType"] = $tdatamfr_region_chart[".pagesByType"];
$tdatamfr_region_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamfr_region_chart[".originalPages"] = $tdatamfr_region_chart[".pages"];
$tdatamfr_region_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamfr_region_chart[".originalDefaultPages"] = $tdatamfr_region_chart[".defaultPages"];

//	field labels
$fieldLabelsmfr_region_chart = array();
$fieldToolTipsmfr_region_chart = array();
$pageTitlesmfr_region_chart = array();
$placeHoldersmfr_region_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_region_chart["English"] = array();
	$fieldToolTipsmfr_region_chart["English"] = array();
	$placeHoldersmfr_region_chart["English"] = array();
	$pageTitlesmfr_region_chart["English"] = array();
	$fieldLabelsmfr_region_chart["English"]["region"] = "Region";
	$fieldToolTipsmfr_region_chart["English"]["region"] = "";
	$placeHoldersmfr_region_chart["English"]["region"] = "";
	$fieldLabelsmfr_region_chart["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_region_chart["English"]["lat"] = "";
	$placeHoldersmfr_region_chart["English"]["lat"] = "";
	$fieldLabelsmfr_region_chart["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_region_chart["English"]["lng"] = "";
	$placeHoldersmfr_region_chart["English"]["lng"] = "";
	$fieldLabelsmfr_region_chart["English"]["count"] = "Count";
	$fieldToolTipsmfr_region_chart["English"]["count"] = "";
	$placeHoldersmfr_region_chart["English"]["count"] = "";
	if (count($fieldToolTipsmfr_region_chart["English"]))
		$tdatamfr_region_chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmfr_region_chart["Amharic"] = array();
	$fieldToolTipsmfr_region_chart["Amharic"] = array();
	$placeHoldersmfr_region_chart["Amharic"] = array();
	$pageTitlesmfr_region_chart["Amharic"] = array();
	$fieldLabelsmfr_region_chart["Amharic"]["region"] = "ክልል";
	$fieldToolTipsmfr_region_chart["Amharic"]["region"] = "";
	$placeHoldersmfr_region_chart["Amharic"]["region"] = "";
	$fieldLabelsmfr_region_chart["Amharic"]["lat"] = "ላቲ";
	$fieldToolTipsmfr_region_chart["Amharic"]["lat"] = "";
	$placeHoldersmfr_region_chart["Amharic"]["lat"] = "";
	$fieldLabelsmfr_region_chart["Amharic"]["lng"] = "Lng";
	$fieldToolTipsmfr_region_chart["Amharic"]["lng"] = "";
	$placeHoldersmfr_region_chart["Amharic"]["lng"] = "";
	$fieldLabelsmfr_region_chart["Amharic"]["count"] = "ቁጠር";
	$fieldToolTipsmfr_region_chart["Amharic"]["count"] = "";
	$placeHoldersmfr_region_chart["Amharic"]["count"] = "";
	if (count($fieldToolTipsmfr_region_chart["Amharic"]))
		$tdatamfr_region_chart[".isUseToolTips"] = true;
}


	$tdatamfr_region_chart[".NCSearch"] = true;

	$tdatamfr_region_chart[".ChartRefreshTime"] = 0;


$tdatamfr_region_chart[".shortTableName"] = "mfr_region_chart";
$tdatamfr_region_chart[".nSecOptions"] = 0;

$tdatamfr_region_chart[".mainTableOwnerID"] = "";
$tdatamfr_region_chart[".entityType"] = 3;
$tdatamfr_region_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_region_chart[".strOriginalTableName"] = "public.mfr_region";

	



$tdatamfr_region_chart[".showAddInPopup"] = false;

$tdatamfr_region_chart[".showEditInPopup"] = false;

$tdatamfr_region_chart[".showViewInPopup"] = false;

$tdatamfr_region_chart[".listAjax"] = false;
//	temporary
//$tdatamfr_region_chart[".listAjax"] = false;

	$tdatamfr_region_chart[".audit"] = false;

	$tdatamfr_region_chart[".locking"] = false;


$pages = $tdatamfr_region_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_region_chart[".edit"] = true;
	$tdatamfr_region_chart[".afterEditAction"] = 1;
	$tdatamfr_region_chart[".closePopupAfterEdit"] = 1;
	$tdatamfr_region_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_region_chart[".add"] = true;
$tdatamfr_region_chart[".afterAddAction"] = 1;
$tdatamfr_region_chart[".closePopupAfterAdd"] = 1;
$tdatamfr_region_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_region_chart[".list"] = true;
}



$tdatamfr_region_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_region_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_region_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_region_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_region_chart[".printFriendly"] = true;
}



$tdatamfr_region_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_region_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_region_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_region_chart[".isUseAjaxSuggest"] = true;



			

$tdatamfr_region_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_region_chart[".buttonsAdded"] = false;

$tdatamfr_region_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_region_chart[".isUseTimeForSearch"] = false;


$tdatamfr_region_chart[".badgeColor"] = "CFAE83";


$tdatamfr_region_chart[".allSearchFields"] = array();
$tdatamfr_region_chart[".filterFields"] = array();
$tdatamfr_region_chart[".requiredSearchFields"] = array();

$tdatamfr_region_chart[".googleLikeFields"] = array();
$tdatamfr_region_chart[".googleLikeFields"][] = "region";
$tdatamfr_region_chart[".googleLikeFields"][] = "lat";
$tdatamfr_region_chart[".googleLikeFields"][] = "lng";
$tdatamfr_region_chart[".googleLikeFields"][] = "count";



$tdatamfr_region_chart[".tableType"] = "chart";

$tdatamfr_region_chart[".printerPageOrientation"] = 0;
$tdatamfr_region_chart[".nPrinterPageScale"] = 100;

$tdatamfr_region_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_region_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_region_chart[".chartType"] = "2DBar";
// end of chart settings








$tstrOrderBy = "";
$tdatamfr_region_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_region_chart[".orderindexes"] = array();


$tdatamfr_region_chart[".sqlHead"] = "SELECT region,  	lat,  	lng,  	\"count\"";
$tdatamfr_region_chart[".sqlFrom"] = "FROM \"public\".mfr_region";
$tdatamfr_region_chart[".sqlWhereExpr"] = "";
$tdatamfr_region_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_region_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_region_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_region_chart[".highlightSearchResults"] = true;

$tableKeysmfr_region_chart = array();
$tdatamfr_region_chart[".Keys"] = $tableKeysmfr_region_chart;


$tdatamfr_region_chart[".hideMobileList"] = array();




//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("mfr_region_chart","region");
	$fdata["FieldType"] = 200;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.mfr_region";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region";

	

	
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


	$tdatamfr_region_chart["region"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "region";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("mfr_region_chart","lat");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamfr_region_chart["lat"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("mfr_region_chart","lng");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamfr_region_chart["lng"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("mfr_region_chart","count");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "count";

		$fdata["sourceSingle"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"count\"";

	
	
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


	$tdatamfr_region_chart["count"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "count";

$tdatamfr_region_chart[".chartLabelField"] = "region";
$tdatamfr_region_chart[".chartSeries"] = array();
$tdatamfr_region_chart[".chartSeries"][] = array(
	"field" => "count",
	"total" => ""
);
	$tdatamfr_region_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">mfr_region_chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">count</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">region</attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_region_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Region Chart").'</attr>
<attr value="foot">'.xmlencode("MFR Region").'</attr>
<attr value="y_axis_label">'.xmlencode("count").'</attr>


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
$tdatamfr_region_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("mfr_region_chart","region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">lat</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("mfr_region_chart","lat")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">lng</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("mfr_region_chart","lng")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("mfr_region_chart","count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_region_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">mfr_region_chart</attr>
<attr value="short_table_name">mfr_region_chart</attr>
</attr>

</chart>';

$tables_data["mfr_region_chart"]=&$tdatamfr_region_chart;
$field_labels["mfr_region_chart"] = &$fieldLabelsmfr_region_chart;
$fieldToolTips["mfr_region_chart"] = &$fieldToolTipsmfr_region_chart;
$placeHolders["mfr_region_chart"] = &$placeHoldersmfr_region_chart;
$page_titles["mfr_region_chart"] = &$pageTitlesmfr_region_chart;


changeTextControlsToDate( "mfr_region_chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mfr_region_chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mfr_region_chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_region_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region,  	lat,  	lng,  	\"count\"";
$proto0["m_strFrom"] = "FROM \"public\".mfr_region";
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
	"m_strName" => "region",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "mfr_region_chart"
));

$proto6["m_sql"] = "region";
$proto6["m_srcTableName"] = "mfr_region_chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "mfr_region_chart"
));

$proto8["m_sql"] = "lat";
$proto8["m_srcTableName"] = "mfr_region_chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "mfr_region_chart"
));

$proto10["m_sql"] = "lng";
$proto10["m_srcTableName"] = "mfr_region_chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "mfr_region_chart"
));

$proto12["m_sql"] = "\"count\"";
$proto12["m_srcTableName"] = "mfr_region_chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.mfr_region";
$proto15["m_srcTableName"] = "mfr_region_chart";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "region";
$proto15["m_columns"][] = "lat";
$proto15["m_columns"][] = "lng";
$proto15["m_columns"][] = "count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".mfr_region";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mfr_region_chart";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mfr_region_chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_region_chart = createSqlQuery_mfr_region_chart();


	
																												;

				

$tdatamfr_region_chart[".sqlquery"] = $queryData_mfr_region_chart;



$tdatamfr_region_chart[".hasEvents"] = false;

?>