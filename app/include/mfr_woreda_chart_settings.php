<?php
$tdatamfr_woreda_chart = array();
$tdatamfr_woreda_chart[".searchableFields"] = array();
$tdatamfr_woreda_chart[".ShortName"] = "mfr_woreda_chart";
$tdatamfr_woreda_chart[".OwnerID"] = "";
$tdatamfr_woreda_chart[".OriginalTable"] = "MFR_Woreda";


$tdatamfr_woreda_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamfr_woreda_chart[".originalPagesByType"] = $tdatamfr_woreda_chart[".pagesByType"];
$tdatamfr_woreda_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamfr_woreda_chart[".originalPages"] = $tdatamfr_woreda_chart[".pages"];
$tdatamfr_woreda_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamfr_woreda_chart[".originalDefaultPages"] = $tdatamfr_woreda_chart[".defaultPages"];

//	field labels
$fieldLabelsmfr_woreda_chart = array();
$fieldToolTipsmfr_woreda_chart = array();
$pageTitlesmfr_woreda_chart = array();
$placeHoldersmfr_woreda_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_woreda_chart["English"] = array();
	$fieldToolTipsmfr_woreda_chart["English"] = array();
	$placeHoldersmfr_woreda_chart["English"] = array();
	$pageTitlesmfr_woreda_chart["English"] = array();
	$fieldLabelsmfr_woreda_chart["English"]["Woreda"] = "Woreda";
	$fieldToolTipsmfr_woreda_chart["English"]["Woreda"] = "";
	$placeHoldersmfr_woreda_chart["English"]["Woreda"] = "";
	$fieldLabelsmfr_woreda_chart["English"]["Count"] = "Count";
	$fieldToolTipsmfr_woreda_chart["English"]["Count"] = "";
	$placeHoldersmfr_woreda_chart["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_woreda_chart["English"]))
		$tdatamfr_woreda_chart[".isUseToolTips"] = true;
}


	$tdatamfr_woreda_chart[".NCSearch"] = true;

	$tdatamfr_woreda_chart[".ChartRefreshTime"] = 0;


$tdatamfr_woreda_chart[".shortTableName"] = "mfr_woreda_chart";
$tdatamfr_woreda_chart[".nSecOptions"] = 0;

$tdatamfr_woreda_chart[".mainTableOwnerID"] = "";
$tdatamfr_woreda_chart[".entityType"] = 3;
$tdatamfr_woreda_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_woreda_chart[".strOriginalTableName"] = "MFR_Woreda";

	



$tdatamfr_woreda_chart[".showAddInPopup"] = false;

$tdatamfr_woreda_chart[".showEditInPopup"] = false;

$tdatamfr_woreda_chart[".showViewInPopup"] = false;

$tdatamfr_woreda_chart[".listAjax"] = false;
//	temporary
//$tdatamfr_woreda_chart[".listAjax"] = false;

	$tdatamfr_woreda_chart[".audit"] = false;

	$tdatamfr_woreda_chart[".locking"] = false;


$pages = $tdatamfr_woreda_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_woreda_chart[".edit"] = true;
	$tdatamfr_woreda_chart[".afterEditAction"] = 1;
	$tdatamfr_woreda_chart[".closePopupAfterEdit"] = 1;
	$tdatamfr_woreda_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_woreda_chart[".add"] = true;
$tdatamfr_woreda_chart[".afterAddAction"] = 1;
$tdatamfr_woreda_chart[".closePopupAfterAdd"] = 1;
$tdatamfr_woreda_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_woreda_chart[".list"] = true;
}



$tdatamfr_woreda_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_woreda_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_woreda_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_woreda_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_woreda_chart[".printFriendly"] = true;
}



$tdatamfr_woreda_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_woreda_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_woreda_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_woreda_chart[".isUseAjaxSuggest"] = true;





$tdatamfr_woreda_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_woreda_chart[".buttonsAdded"] = false;

$tdatamfr_woreda_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_woreda_chart[".isUseTimeForSearch"] = false;


$tdatamfr_woreda_chart[".badgeColor"] = "1e90ff";


$tdatamfr_woreda_chart[".allSearchFields"] = array();
$tdatamfr_woreda_chart[".filterFields"] = array();
$tdatamfr_woreda_chart[".requiredSearchFields"] = array();

$tdatamfr_woreda_chart[".googleLikeFields"] = array();
$tdatamfr_woreda_chart[".googleLikeFields"][] = "Woreda";



$tdatamfr_woreda_chart[".tableType"] = "chart";

$tdatamfr_woreda_chart[".printerPageOrientation"] = 0;
$tdatamfr_woreda_chart[".nPrinterPageScale"] = 100;

$tdatamfr_woreda_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_woreda_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_woreda_chart[".chartType"] = "Bubble";
// end of chart settings








$tstrOrderBy = "";
$tdatamfr_woreda_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_woreda_chart[".orderindexes"] = array();


$tdatamfr_woreda_chart[".sqlHead"] = "SELECT Woreda,  `Count`";
$tdatamfr_woreda_chart[".sqlFrom"] = "FROM MFR_Woreda";
$tdatamfr_woreda_chart[".sqlWhereExpr"] = "";
$tdatamfr_woreda_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_woreda_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_woreda_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_woreda_chart[".highlightSearchResults"] = true;

$tableKeysmfr_woreda_chart = array();
$tdatamfr_woreda_chart[".Keys"] = $tableKeysmfr_woreda_chart;


$tdatamfr_woreda_chart[".hideMobileList"] = array();




//	Woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Woreda";
	$fdata["GoodName"] = "Woreda";
	$fdata["ownerTable"] = "MFR_Woreda";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Chart","Woreda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Woreda";

		$fdata["sourceSingle"] = "Woreda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Woreda";

	
	
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


	$tdatamfr_woreda_chart["Woreda"] = $fdata;
		$tdatamfr_woreda_chart[".searchableFields"][] = "Woreda";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Woreda";
	$fdata["Label"] = GetFieldLabel("MFR_Woreda_Chart","Count");
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


	$tdatamfr_woreda_chart["Count"] = $fdata;
		$tdatamfr_woreda_chart[".searchableFields"][] = "Count";

$tdatamfr_woreda_chart[".chartLabelField"] = "Woreda";
$tdatamfr_woreda_chart[".chartSeries"] = array();
$tdatamfr_woreda_chart[".chartSeries"][] = array(
	"field" => "Count",
	"total" => ""
);
	$tdatamfr_woreda_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MFR_Woreda_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">bubble</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Count</attr>';
	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="size"></attr>';
	$tdatamfr_woreda_chart[".chartXml"] .= '</attr>';
	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Woreda</attr>
	</attr>';
	$tdatamfr_woreda_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Woreda Chart").'</attr>
<attr value="foot">'.xmlencode("Woreda").'</attr>
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
$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="bubbletransp">0</attr>';
$tdatamfr_woreda_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Woreda</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Woreda_Chart","Woreda")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_woreda_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Woreda_Chart","Count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_woreda_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MFR_Woreda_Chart</attr>
<attr value="short_table_name">mfr_woreda_chart</attr>
</attr>

</chart>';

$tables_data["MFR_Woreda_Chart"]=&$tdatamfr_woreda_chart;
$field_labels["MFR_Woreda_Chart"] = &$fieldLabelsmfr_woreda_chart;
$fieldToolTips["MFR_Woreda_Chart"] = &$fieldToolTipsmfr_woreda_chart;
$placeHolders["MFR_Woreda_Chart"] = &$placeHoldersmfr_woreda_chart;
$page_titles["MFR_Woreda_Chart"] = &$pageTitlesmfr_woreda_chart;


changeTextControlsToDate( "MFR_Woreda_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Woreda_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Woreda_Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Woreda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Woreda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_woreda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Woreda_Chart"][0] = $masterParams;
				$masterTablesData["MFR_Woreda_Chart"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Woreda_Chart"][0]["masterKeys"][]="Woreda";
				$masterTablesData["MFR_Woreda_Chart"][0]["masterKeys"][]="Count";
				$masterTablesData["MFR_Woreda_Chart"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Woreda_Chart"][0]["detailKeys"][]="Woreda";
				$masterTablesData["MFR_Woreda_Chart"][0]["detailKeys"][]="Count";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_woreda_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Woreda,  `Count`";
$proto0["m_strFrom"] = "FROM MFR_Woreda";
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
	"m_strName" => "Woreda",
	"m_strTable" => "MFR_Woreda",
	"m_srcTableName" => "MFR_Woreda_Chart"
));

$proto6["m_sql"] = "Woreda";
$proto6["m_srcTableName"] = "MFR_Woreda_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Woreda",
	"m_srcTableName" => "MFR_Woreda_Chart"
));

$proto8["m_sql"] = "`Count`";
$proto8["m_srcTableName"] = "MFR_Woreda_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "MFR_Woreda";
$proto11["m_srcTableName"] = "MFR_Woreda_Chart";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Woreda";
$proto11["m_columns"][] = "Lat";
$proto11["m_columns"][] = "Lng";
$proto11["m_columns"][] = "Count";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "MFR_Woreda";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "MFR_Woreda_Chart";
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
$proto0["m_srcTableName"]="MFR_Woreda_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_woreda_chart = createSqlQuery_mfr_woreda_chart();


	
								;

		

$tdatamfr_woreda_chart[".sqlquery"] = $queryData_mfr_woreda_chart;



$tdatamfr_woreda_chart[".hasEvents"] = false;

?>