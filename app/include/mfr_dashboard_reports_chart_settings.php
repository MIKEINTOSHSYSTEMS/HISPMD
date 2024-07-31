<?php
$tdatamfr_dashboard_reports_chart = array();
$tdatamfr_dashboard_reports_chart[".searchableFields"] = array();
$tdatamfr_dashboard_reports_chart[".ShortName"] = "mfr_dashboard_reports_chart";
$tdatamfr_dashboard_reports_chart[".OwnerID"] = "";
$tdatamfr_dashboard_reports_chart[".OriginalTable"] = "MFR_Dashboard_Reports";


$tdatamfr_dashboard_reports_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamfr_dashboard_reports_chart[".originalPagesByType"] = $tdatamfr_dashboard_reports_chart[".pagesByType"];
$tdatamfr_dashboard_reports_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamfr_dashboard_reports_chart[".originalPages"] = $tdatamfr_dashboard_reports_chart[".pages"];
$tdatamfr_dashboard_reports_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamfr_dashboard_reports_chart[".originalDefaultPages"] = $tdatamfr_dashboard_reports_chart[".defaultPages"];

//	field labels
$fieldLabelsmfr_dashboard_reports_chart = array();
$fieldToolTipsmfr_dashboard_reports_chart = array();
$pageTitlesmfr_dashboard_reports_chart = array();
$placeHoldersmfr_dashboard_reports_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_dashboard_reports_chart["English"] = array();
	$fieldToolTipsmfr_dashboard_reports_chart["English"] = array();
	$placeHoldersmfr_dashboard_reports_chart["English"] = array();
	$pageTitlesmfr_dashboard_reports_chart["English"] = array();
	$fieldLabelsmfr_dashboard_reports_chart["English"]["Type"] = "Type";
	$fieldToolTipsmfr_dashboard_reports_chart["English"]["Type"] = "";
	$placeHoldersmfr_dashboard_reports_chart["English"]["Type"] = "";
	$fieldLabelsmfr_dashboard_reports_chart["English"]["Name"] = "Name";
	$fieldToolTipsmfr_dashboard_reports_chart["English"]["Name"] = "";
	$placeHoldersmfr_dashboard_reports_chart["English"]["Name"] = "";
	$fieldLabelsmfr_dashboard_reports_chart["English"]["Count"] = "Count";
	$fieldToolTipsmfr_dashboard_reports_chart["English"]["Count"] = "";
	$placeHoldersmfr_dashboard_reports_chart["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_dashboard_reports_chart["English"]))
		$tdatamfr_dashboard_reports_chart[".isUseToolTips"] = true;
}


	$tdatamfr_dashboard_reports_chart[".NCSearch"] = true;

	$tdatamfr_dashboard_reports_chart[".ChartRefreshTime"] = 0;


$tdatamfr_dashboard_reports_chart[".shortTableName"] = "mfr_dashboard_reports_chart";
$tdatamfr_dashboard_reports_chart[".nSecOptions"] = 0;

$tdatamfr_dashboard_reports_chart[".mainTableOwnerID"] = "";
$tdatamfr_dashboard_reports_chart[".entityType"] = 3;
$tdatamfr_dashboard_reports_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_dashboard_reports_chart[".strOriginalTableName"] = "MFR_Dashboard_Reports";

	



$tdatamfr_dashboard_reports_chart[".showAddInPopup"] = false;

$tdatamfr_dashboard_reports_chart[".showEditInPopup"] = false;

$tdatamfr_dashboard_reports_chart[".showViewInPopup"] = false;

$tdatamfr_dashboard_reports_chart[".listAjax"] = false;
//	temporary
//$tdatamfr_dashboard_reports_chart[".listAjax"] = false;

	$tdatamfr_dashboard_reports_chart[".audit"] = false;

	$tdatamfr_dashboard_reports_chart[".locking"] = false;


$pages = $tdatamfr_dashboard_reports_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_dashboard_reports_chart[".edit"] = true;
	$tdatamfr_dashboard_reports_chart[".afterEditAction"] = 1;
	$tdatamfr_dashboard_reports_chart[".closePopupAfterEdit"] = 1;
	$tdatamfr_dashboard_reports_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_dashboard_reports_chart[".add"] = true;
$tdatamfr_dashboard_reports_chart[".afterAddAction"] = 1;
$tdatamfr_dashboard_reports_chart[".closePopupAfterAdd"] = 1;
$tdatamfr_dashboard_reports_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_dashboard_reports_chart[".list"] = true;
}



$tdatamfr_dashboard_reports_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_dashboard_reports_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_dashboard_reports_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_dashboard_reports_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_dashboard_reports_chart[".printFriendly"] = true;
}



$tdatamfr_dashboard_reports_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_dashboard_reports_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_dashboard_reports_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_dashboard_reports_chart[".isUseAjaxSuggest"] = true;





$tdatamfr_dashboard_reports_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_dashboard_reports_chart[".buttonsAdded"] = false;

$tdatamfr_dashboard_reports_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_dashboard_reports_chart[".isUseTimeForSearch"] = false;


$tdatamfr_dashboard_reports_chart[".badgeColor"] = "6da5c8";


$tdatamfr_dashboard_reports_chart[".allSearchFields"] = array();
$tdatamfr_dashboard_reports_chart[".filterFields"] = array();
$tdatamfr_dashboard_reports_chart[".requiredSearchFields"] = array();

$tdatamfr_dashboard_reports_chart[".googleLikeFields"] = array();
$tdatamfr_dashboard_reports_chart[".googleLikeFields"][] = "Type";
$tdatamfr_dashboard_reports_chart[".googleLikeFields"][] = "Name";
$tdatamfr_dashboard_reports_chart[".googleLikeFields"][] = "Count";



$tdatamfr_dashboard_reports_chart[".tableType"] = "chart";

$tdatamfr_dashboard_reports_chart[".printerPageOrientation"] = 0;
$tdatamfr_dashboard_reports_chart[".nPrinterPageScale"] = 100;

$tdatamfr_dashboard_reports_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_dashboard_reports_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_dashboard_reports_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdatamfr_dashboard_reports_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatamfr_dashboard_reports_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_dashboard_reports_chart[".orderindexes"] = array();


$tdatamfr_dashboard_reports_chart[".sqlHead"] = "SELECT `Type`,  	Name,  	`Count`";
$tdatamfr_dashboard_reports_chart[".sqlFrom"] = "FROM MFR_Dashboard_Reports";
$tdatamfr_dashboard_reports_chart[".sqlWhereExpr"] = "";
$tdatamfr_dashboard_reports_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_dashboard_reports_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_dashboard_reports_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_dashboard_reports_chart[".highlightSearchResults"] = true;

$tableKeysmfr_dashboard_reports_chart = array();
$tdatamfr_dashboard_reports_chart[".Keys"] = $tableKeysmfr_dashboard_reports_chart;


$tdatamfr_dashboard_reports_chart[".hideMobileList"] = array();




//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports_Chart","Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Type";

		$fdata["sourceSingle"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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


	$tdatamfr_dashboard_reports_chart["Type"] = $fdata;
		$tdatamfr_dashboard_reports_chart[".searchableFields"][] = "Type";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports_Chart","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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


	$tdatamfr_dashboard_reports_chart["Name"] = $fdata;
		$tdatamfr_dashboard_reports_chart[".searchableFields"][] = "Name";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports_Chart","Count");
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


	$tdatamfr_dashboard_reports_chart["Count"] = $fdata;
		$tdatamfr_dashboard_reports_chart[".searchableFields"][] = "Count";

$tdatamfr_dashboard_reports_chart[".groupChart"] = true;
$tdatamfr_dashboard_reports_chart[".chartLabelInterval"] = 0;
$tdatamfr_dashboard_reports_chart[".chartLabelField"] = "Name";
$tdatamfr_dashboard_reports_chart[".chartSeries"] = array();
$tdatamfr_dashboard_reports_chart[".chartSeries"][] = array(
	"field" => "Count",
	"total" => "SUM"
);
	$tdatamfr_dashboard_reports_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MFR_Dashboard_Reports_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Count</attr>';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '</attr>';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Name</attr>
	</attr>';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Dashboard Reports Chart").'</attr>
<attr value="foot">'.xmlencode("By Service Name & Type").'</attr>
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
$tdatamfr_dashboard_reports_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Dashboard_Reports_Chart","Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Dashboard_Reports_Chart","Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_dashboard_reports_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Dashboard_Reports_Chart","Count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_dashboard_reports_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MFR_Dashboard_Reports_Chart</attr>
<attr value="short_table_name">mfr_dashboard_reports_chart</attr>
</attr>

</chart>';

$tables_data["MFR_Dashboard_Reports_Chart"]=&$tdatamfr_dashboard_reports_chart;
$field_labels["MFR_Dashboard_Reports_Chart"] = &$fieldLabelsmfr_dashboard_reports_chart;
$fieldToolTips["MFR_Dashboard_Reports_Chart"] = &$fieldToolTipsmfr_dashboard_reports_chart;
$placeHolders["MFR_Dashboard_Reports_Chart"] = &$placeHoldersmfr_dashboard_reports_chart;
$page_titles["MFR_Dashboard_Reports_Chart"] = &$pageTitlesmfr_dashboard_reports_chart;


changeTextControlsToDate( "MFR_Dashboard_Reports_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Dashboard_Reports_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Dashboard_Reports_Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Dashboard_Reports";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Dashboard_Reports";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_dashboard_reports";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Dashboard_Reports_Chart"][0] = $masterParams;
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["masterKeys"][]="Type";
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["masterKeys"][]="Name";
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["masterKeys"][]="Count";
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["detailKeys"][]="Type";
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["detailKeys"][]="Name";
				$masterTablesData["MFR_Dashboard_Reports_Chart"][0]["detailKeys"][]="Count";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_dashboard_reports_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Type`,  	Name,  	`Count`";
$proto0["m_strFrom"] = "FROM MFR_Dashboard_Reports";
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
	"m_strName" => "Type",
	"m_strTable" => "MFR_Dashboard_Reports",
	"m_srcTableName" => "MFR_Dashboard_Reports_Chart"
));

$proto6["m_sql"] = "`Type`";
$proto6["m_srcTableName"] = "MFR_Dashboard_Reports_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "MFR_Dashboard_Reports",
	"m_srcTableName" => "MFR_Dashboard_Reports_Chart"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "MFR_Dashboard_Reports_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Dashboard_Reports",
	"m_srcTableName" => "MFR_Dashboard_Reports_Chart"
));

$proto10["m_sql"] = "`Count`";
$proto10["m_srcTableName"] = "MFR_Dashboard_Reports_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MFR_Dashboard_Reports";
$proto13["m_srcTableName"] = "MFR_Dashboard_Reports_Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Type";
$proto13["m_columns"][] = "Name";
$proto13["m_columns"][] = "Count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MFR_Dashboard_Reports";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MFR_Dashboard_Reports_Chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="MFR_Dashboard_Reports_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_dashboard_reports_chart = createSqlQuery_mfr_dashboard_reports_chart();


	
						;

			

$tdatamfr_dashboard_reports_chart[".sqlquery"] = $queryData_mfr_dashboard_reports_chart;



$tdatamfr_dashboard_reports_chart[".hasEvents"] = false;

?>