<?php
$tdatamfr_region_chart = array();
$tdatamfr_region_chart[".searchableFields"] = array();
$tdatamfr_region_chart[".ShortName"] = "mfr_region_chart";
$tdatamfr_region_chart[".OwnerID"] = "";
$tdatamfr_region_chart[".OriginalTable"] = "MFR_Region";


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
	$fieldLabelsmfr_region_chart["English"]["Region"] = "Region";
	$fieldToolTipsmfr_region_chart["English"]["Region"] = "";
	$placeHoldersmfr_region_chart["English"]["Region"] = "";
	$fieldLabelsmfr_region_chart["English"]["Count"] = "Count";
	$fieldToolTipsmfr_region_chart["English"]["Count"] = "";
	$placeHoldersmfr_region_chart["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_region_chart["English"]))
		$tdatamfr_region_chart[".isUseToolTips"] = true;
}


	$tdatamfr_region_chart[".NCSearch"] = true;

	$tdatamfr_region_chart[".ChartRefreshTime"] = 0;


$tdatamfr_region_chart[".shortTableName"] = "mfr_region_chart";
$tdatamfr_region_chart[".nSecOptions"] = 0;

$tdatamfr_region_chart[".mainTableOwnerID"] = "";
$tdatamfr_region_chart[".entityType"] = 3;
$tdatamfr_region_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_region_chart[".strOriginalTableName"] = "MFR_Region";

	



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


$tdatamfr_region_chart[".badgeColor"] = "daa520";


$tdatamfr_region_chart[".allSearchFields"] = array();
$tdatamfr_region_chart[".filterFields"] = array();
$tdatamfr_region_chart[".requiredSearchFields"] = array();

$tdatamfr_region_chart[".googleLikeFields"] = array();
$tdatamfr_region_chart[".googleLikeFields"][] = "Region";



$tdatamfr_region_chart[".tableType"] = "chart";

$tdatamfr_region_chart[".printerPageOrientation"] = 0;
$tdatamfr_region_chart[".nPrinterPageScale"] = 100;

$tdatamfr_region_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_region_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_region_chart[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
$tdatamfr_region_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_region_chart[".orderindexes"] = array();


$tdatamfr_region_chart[".sqlHead"] = "SELECT Region,  `Count`";
$tdatamfr_region_chart[".sqlFrom"] = "FROM MFR_Region";
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




//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Chart","Region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Region";

		$fdata["sourceSingle"] = "Region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Region";

	
	
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


	$tdatamfr_region_chart["Region"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "Region";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region_Chart","Count");
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


	$tdatamfr_region_chart["Count"] = $fdata;
		$tdatamfr_region_chart[".searchableFields"][] = "Count";

$tdatamfr_region_chart[".groupChart"] = true;
$tdatamfr_region_chart[".chartLabelInterval"] = 0;
$tdatamfr_region_chart[".chartLabelField"] = "Region";
$tdatamfr_region_chart[".chartSeries"] = array();
$tdatamfr_region_chart[".chartSeries"][] = array(
	"field" => "Count",
	"total" => "SUM"
);
	$tdatamfr_region_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MFR_Region_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Count</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Region</attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_region_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Region Chart").'</attr>
<attr value="foot">'.xmlencode("Regions").'</attr>
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
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatamfr_region_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Region_Chart","Region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_region_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Region_Chart","Count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_region_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MFR_Region_Chart</attr>
<attr value="short_table_name">mfr_region_chart</attr>
</attr>

</chart>';

$tables_data["MFR_Region_Chart"]=&$tdatamfr_region_chart;
$field_labels["MFR_Region_Chart"] = &$fieldLabelsmfr_region_chart;
$fieldToolTips["MFR_Region_Chart"] = &$fieldToolTipsmfr_region_chart;
$placeHolders["MFR_Region_Chart"] = &$placeHoldersmfr_region_chart;
$page_titles["MFR_Region_Chart"] = &$pageTitlesmfr_region_chart;


changeTextControlsToDate( "MFR_Region_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Region_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Region_Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Region";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Region";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_region";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Region_Chart"][0] = $masterParams;
				$masterTablesData["MFR_Region_Chart"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Region_Chart"][0]["masterKeys"][]="Region";
				$masterTablesData["MFR_Region_Chart"][0]["masterKeys"][]="Count";
				$masterTablesData["MFR_Region_Chart"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Region_Chart"][0]["detailKeys"][]="Region";
				$masterTablesData["MFR_Region_Chart"][0]["detailKeys"][]="Count";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_region_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Region,  `Count`";
$proto0["m_strFrom"] = "FROM MFR_Region";
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
	"m_strName" => "Region",
	"m_strTable" => "MFR_Region",
	"m_srcTableName" => "MFR_Region_Chart"
));

$proto6["m_sql"] = "Region";
$proto6["m_srcTableName"] = "MFR_Region_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Region",
	"m_srcTableName" => "MFR_Region_Chart"
));

$proto8["m_sql"] = "`Count`";
$proto8["m_srcTableName"] = "MFR_Region_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "MFR_Region";
$proto11["m_srcTableName"] = "MFR_Region_Chart";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Region";
$proto11["m_columns"][] = "Lat";
$proto11["m_columns"][] = "Lng";
$proto11["m_columns"][] = "Count";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "MFR_Region";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "MFR_Region_Chart";
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
$proto0["m_srcTableName"]="MFR_Region_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_region_chart = createSqlQuery_mfr_region_chart();


	
																												;

		

$tdatamfr_region_chart[".sqlquery"] = $queryData_mfr_region_chart;



$tdatamfr_region_chart[".hasEvents"] = false;

?>