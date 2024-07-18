<?php
$tdatamfr_zone_chart = array();
$tdatamfr_zone_chart[".searchableFields"] = array();
$tdatamfr_zone_chart[".ShortName"] = "mfr_zone_chart";
$tdatamfr_zone_chart[".OwnerID"] = "";
$tdatamfr_zone_chart[".OriginalTable"] = "MFR_Zone";


$tdatamfr_zone_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamfr_zone_chart[".originalPagesByType"] = $tdatamfr_zone_chart[".pagesByType"];
$tdatamfr_zone_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamfr_zone_chart[".originalPages"] = $tdatamfr_zone_chart[".pages"];
$tdatamfr_zone_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamfr_zone_chart[".originalDefaultPages"] = $tdatamfr_zone_chart[".defaultPages"];

//	field labels
$fieldLabelsmfr_zone_chart = array();
$fieldToolTipsmfr_zone_chart = array();
$pageTitlesmfr_zone_chart = array();
$placeHoldersmfr_zone_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_zone_chart["English"] = array();
	$fieldToolTipsmfr_zone_chart["English"] = array();
	$placeHoldersmfr_zone_chart["English"] = array();
	$pageTitlesmfr_zone_chart["English"] = array();
	$fieldLabelsmfr_zone_chart["English"]["Zone"] = "Zone";
	$fieldToolTipsmfr_zone_chart["English"]["Zone"] = "";
	$placeHoldersmfr_zone_chart["English"]["Zone"] = "";
	$fieldLabelsmfr_zone_chart["English"]["Count"] = "Count";
	$fieldToolTipsmfr_zone_chart["English"]["Count"] = "";
	$placeHoldersmfr_zone_chart["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_zone_chart["English"]))
		$tdatamfr_zone_chart[".isUseToolTips"] = true;
}


	$tdatamfr_zone_chart[".NCSearch"] = true;

	$tdatamfr_zone_chart[".ChartRefreshTime"] = 0;


$tdatamfr_zone_chart[".shortTableName"] = "mfr_zone_chart";
$tdatamfr_zone_chart[".nSecOptions"] = 0;

$tdatamfr_zone_chart[".mainTableOwnerID"] = "";
$tdatamfr_zone_chart[".entityType"] = 3;
$tdatamfr_zone_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_zone_chart[".strOriginalTableName"] = "MFR_Zone";

	



$tdatamfr_zone_chart[".showAddInPopup"] = false;

$tdatamfr_zone_chart[".showEditInPopup"] = false;

$tdatamfr_zone_chart[".showViewInPopup"] = false;

$tdatamfr_zone_chart[".listAjax"] = false;
//	temporary
//$tdatamfr_zone_chart[".listAjax"] = false;

	$tdatamfr_zone_chart[".audit"] = false;

	$tdatamfr_zone_chart[".locking"] = false;


$pages = $tdatamfr_zone_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_zone_chart[".edit"] = true;
	$tdatamfr_zone_chart[".afterEditAction"] = 1;
	$tdatamfr_zone_chart[".closePopupAfterEdit"] = 1;
	$tdatamfr_zone_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_zone_chart[".add"] = true;
$tdatamfr_zone_chart[".afterAddAction"] = 1;
$tdatamfr_zone_chart[".closePopupAfterAdd"] = 1;
$tdatamfr_zone_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_zone_chart[".list"] = true;
}



$tdatamfr_zone_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_zone_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_zone_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_zone_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_zone_chart[".printFriendly"] = true;
}



$tdatamfr_zone_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_zone_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_zone_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_zone_chart[".isUseAjaxSuggest"] = true;





$tdatamfr_zone_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_zone_chart[".buttonsAdded"] = false;

$tdatamfr_zone_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_zone_chart[".isUseTimeForSearch"] = false;


$tdatamfr_zone_chart[".badgeColor"] = "4169E1";


$tdatamfr_zone_chart[".allSearchFields"] = array();
$tdatamfr_zone_chart[".filterFields"] = array();
$tdatamfr_zone_chart[".requiredSearchFields"] = array();

$tdatamfr_zone_chart[".googleLikeFields"] = array();
$tdatamfr_zone_chart[".googleLikeFields"][] = "Zone";
$tdatamfr_zone_chart[".googleLikeFields"][] = "Count";



$tdatamfr_zone_chart[".tableType"] = "chart";

$tdatamfr_zone_chart[".printerPageOrientation"] = 0;
$tdatamfr_zone_chart[".nPrinterPageScale"] = 100;

$tdatamfr_zone_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_zone_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_zone_chart[".chartType"] = "Bubble";
// end of chart settings








$tstrOrderBy = "";
$tdatamfr_zone_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_zone_chart[".orderindexes"] = array();


$tdatamfr_zone_chart[".sqlHead"] = "SELECT `Zone`,  `Count`";
$tdatamfr_zone_chart[".sqlFrom"] = "FROM MFR_Zone";
$tdatamfr_zone_chart[".sqlWhereExpr"] = "";
$tdatamfr_zone_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_zone_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_zone_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_zone_chart[".highlightSearchResults"] = true;

$tableKeysmfr_zone_chart = array();
$tdatamfr_zone_chart[".Keys"] = $tableKeysmfr_zone_chart;


$tdatamfr_zone_chart[".hideMobileList"] = array();




//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Chart","Zone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Zone";

		$fdata["sourceSingle"] = "Zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Zone`";

	
	
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


	$tdatamfr_zone_chart["Zone"] = $fdata;
		$tdatamfr_zone_chart[".searchableFields"][] = "Zone";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone_Chart","Count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Count";

		$fdata["sourceSingle"] = "Count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Count`";

	
	
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


	$tdatamfr_zone_chart["Count"] = $fdata;
		$tdatamfr_zone_chart[".searchableFields"][] = "Count";

$tdatamfr_zone_chart[".chartLabelField"] = "Zone";
$tdatamfr_zone_chart[".chartSeries"] = array();
$tdatamfr_zone_chart[".chartSeries"][] = array(
	"field" => "Count",
	"total" => ""
);
	$tdatamfr_zone_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MFR_Zone_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">bubble</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Count</attr>';
	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="size"></attr>';
	$tdatamfr_zone_chart[".chartXml"] .= '</attr>';
	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Zone</attr>
	</attr>';
	$tdatamfr_zone_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Zone Chart").'</attr>
<attr value="foot">'.xmlencode("Zone").'</attr>
<attr value="y_axis_label">'.xmlencode("Count").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatamfr_zone_chart[".chartXml"] .= '<attr value="bubbletransp">0</attr>';
$tdatamfr_zone_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Zone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Zone_Chart","Zone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_zone_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Zone_Chart","Count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_zone_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MFR_Zone_Chart</attr>
<attr value="short_table_name">mfr_zone_chart</attr>
</attr>

</chart>';

$tables_data["MFR_Zone_Chart"]=&$tdatamfr_zone_chart;
$field_labels["MFR_Zone_Chart"] = &$fieldLabelsmfr_zone_chart;
$fieldToolTips["MFR_Zone_Chart"] = &$fieldToolTipsmfr_zone_chart;
$placeHolders["MFR_Zone_Chart"] = &$placeHoldersmfr_zone_chart;
$page_titles["MFR_Zone_Chart"] = &$pageTitlesmfr_zone_chart;


changeTextControlsToDate( "MFR_Zone_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Zone_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Zone_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_zone_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Zone`,  `Count`";
$proto0["m_strFrom"] = "FROM MFR_Zone";
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
	"m_strName" => "Zone",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone_Chart"
));

$proto6["m_sql"] = "`Zone`";
$proto6["m_srcTableName"] = "MFR_Zone_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone_Chart"
));

$proto8["m_sql"] = "`Count`";
$proto8["m_srcTableName"] = "MFR_Zone_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "MFR_Zone";
$proto11["m_srcTableName"] = "MFR_Zone_Chart";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Zone";
$proto11["m_columns"][] = "Lat";
$proto11["m_columns"][] = "Lng";
$proto11["m_columns"][] = "Count";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "MFR_Zone";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "MFR_Zone_Chart";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="MFR_Zone_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_zone_chart = createSqlQuery_mfr_zone_chart();


	
						;

		

$tdatamfr_zone_chart[".sqlquery"] = $queryData_mfr_zone_chart;



$tdatamfr_zone_chart[".hasEvents"] = false;

?>