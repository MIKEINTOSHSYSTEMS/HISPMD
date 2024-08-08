<?php
$tdatamfr_operational_status_chart = array();
$tdatamfr_operational_status_chart[".searchableFields"] = array();
$tdatamfr_operational_status_chart[".ShortName"] = "mfr_operational_status_chart";
$tdatamfr_operational_status_chart[".OwnerID"] = "";
$tdatamfr_operational_status_chart[".OriginalTable"] = "MFR_Operational_Status";


$tdatamfr_operational_status_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatamfr_operational_status_chart[".originalPagesByType"] = $tdatamfr_operational_status_chart[".pagesByType"];
$tdatamfr_operational_status_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatamfr_operational_status_chart[".originalPages"] = $tdatamfr_operational_status_chart[".pages"];
$tdatamfr_operational_status_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatamfr_operational_status_chart[".originalDefaultPages"] = $tdatamfr_operational_status_chart[".defaultPages"];

//	field labels
$fieldLabelsmfr_operational_status_chart = array();
$fieldToolTipsmfr_operational_status_chart = array();
$pageTitlesmfr_operational_status_chart = array();
$placeHoldersmfr_operational_status_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_operational_status_chart["English"] = array();
	$fieldToolTipsmfr_operational_status_chart["English"] = array();
	$placeHoldersmfr_operational_status_chart["English"] = array();
	$pageTitlesmfr_operational_status_chart["English"] = array();
	$fieldLabelsmfr_operational_status_chart["English"]["OperationalStatus"] = "Operational Status";
	$fieldToolTipsmfr_operational_status_chart["English"]["OperationalStatus"] = "";
	$placeHoldersmfr_operational_status_chart["English"]["OperationalStatus"] = "";
	$fieldLabelsmfr_operational_status_chart["English"]["Status"] = "Status";
	$fieldToolTipsmfr_operational_status_chart["English"]["Status"] = "";
	$placeHoldersmfr_operational_status_chart["English"]["Status"] = "";
	$fieldLabelsmfr_operational_status_chart["English"]["Count"] = "Count";
	$fieldToolTipsmfr_operational_status_chart["English"]["Count"] = "";
	$placeHoldersmfr_operational_status_chart["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_operational_status_chart["English"]))
		$tdatamfr_operational_status_chart[".isUseToolTips"] = true;
}


	$tdatamfr_operational_status_chart[".NCSearch"] = true;

	$tdatamfr_operational_status_chart[".ChartRefreshTime"] = 0;


$tdatamfr_operational_status_chart[".shortTableName"] = "mfr_operational_status_chart";
$tdatamfr_operational_status_chart[".nSecOptions"] = 0;

$tdatamfr_operational_status_chart[".mainTableOwnerID"] = "";
$tdatamfr_operational_status_chart[".entityType"] = 3;
$tdatamfr_operational_status_chart[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_operational_status_chart[".strOriginalTableName"] = "MFR_Operational_Status";

	



$tdatamfr_operational_status_chart[".showAddInPopup"] = false;

$tdatamfr_operational_status_chart[".showEditInPopup"] = false;

$tdatamfr_operational_status_chart[".showViewInPopup"] = false;

$tdatamfr_operational_status_chart[".listAjax"] = false;
//	temporary
//$tdatamfr_operational_status_chart[".listAjax"] = false;

	$tdatamfr_operational_status_chart[".audit"] = false;

	$tdatamfr_operational_status_chart[".locking"] = false;


$pages = $tdatamfr_operational_status_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_operational_status_chart[".edit"] = true;
	$tdatamfr_operational_status_chart[".afterEditAction"] = 1;
	$tdatamfr_operational_status_chart[".closePopupAfterEdit"] = 1;
	$tdatamfr_operational_status_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_operational_status_chart[".add"] = true;
$tdatamfr_operational_status_chart[".afterAddAction"] = 1;
$tdatamfr_operational_status_chart[".closePopupAfterAdd"] = 1;
$tdatamfr_operational_status_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_operational_status_chart[".list"] = true;
}



$tdatamfr_operational_status_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_operational_status_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_operational_status_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_operational_status_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_operational_status_chart[".printFriendly"] = true;
}



$tdatamfr_operational_status_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_operational_status_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_operational_status_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_operational_status_chart[".isUseAjaxSuggest"] = true;





$tdatamfr_operational_status_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_operational_status_chart[".buttonsAdded"] = false;

$tdatamfr_operational_status_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_operational_status_chart[".isUseTimeForSearch"] = false;


$tdatamfr_operational_status_chart[".badgeColor"] = "daa520";


$tdatamfr_operational_status_chart[".allSearchFields"] = array();
$tdatamfr_operational_status_chart[".filterFields"] = array();
$tdatamfr_operational_status_chart[".requiredSearchFields"] = array();

$tdatamfr_operational_status_chart[".googleLikeFields"] = array();
$tdatamfr_operational_status_chart[".googleLikeFields"][] = "OperationalStatus";
$tdatamfr_operational_status_chart[".googleLikeFields"][] = "Status";
$tdatamfr_operational_status_chart[".googleLikeFields"][] = "Count";



$tdatamfr_operational_status_chart[".tableType"] = "chart";

$tdatamfr_operational_status_chart[".printerPageOrientation"] = 0;
$tdatamfr_operational_status_chart[".nPrinterPageScale"] = 100;

$tdatamfr_operational_status_chart[".nPrinterSplitRecords"] = 40;

$tdatamfr_operational_status_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamfr_operational_status_chart[".chartType"] = "2DBar";
// end of chart settings








$tstrOrderBy = "";
$tdatamfr_operational_status_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_operational_status_chart[".orderindexes"] = array();


$tdatamfr_operational_status_chart[".sqlHead"] = "SELECT OperationalStatus,  	Status,  	`Count`";
$tdatamfr_operational_status_chart[".sqlFrom"] = "FROM MFR_Operational_Status";
$tdatamfr_operational_status_chart[".sqlWhereExpr"] = "";
$tdatamfr_operational_status_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_operational_status_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_operational_status_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_operational_status_chart[".highlightSearchResults"] = true;

$tableKeysmfr_operational_status_chart = array();
$tdatamfr_operational_status_chart[".Keys"] = $tableKeysmfr_operational_status_chart;


$tdatamfr_operational_status_chart[".hideMobileList"] = array();




//	OperationalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OperationalStatus";
	$fdata["GoodName"] = "OperationalStatus";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status_Chart","OperationalStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OperationalStatus";

		$fdata["sourceSingle"] = "OperationalStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OperationalStatus";

	
	
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


	$tdatamfr_operational_status_chart["OperationalStatus"] = $fdata;
		$tdatamfr_operational_status_chart[".searchableFields"][] = "OperationalStatus";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status_Chart","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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


	$tdatamfr_operational_status_chart["Status"] = $fdata;
		$tdatamfr_operational_status_chart[".searchableFields"][] = "Status";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status_Chart","Count");
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


	$tdatamfr_operational_status_chart["Count"] = $fdata;
		$tdatamfr_operational_status_chart[".searchableFields"][] = "Count";

$tdatamfr_operational_status_chart[".chartLabelField"] = "OperationalStatus";
$tdatamfr_operational_status_chart[".chartSeries"] = array();
$tdatamfr_operational_status_chart[".chartSeries"][] = array(
	"field" => "Count",
	"total" => ""
);
	$tdatamfr_operational_status_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">MFR_Operational_Status_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Count</attr>';
	$tdatamfr_operational_status_chart[".chartXml"] .= '</attr>';
	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">OperationalStatus</attr>
	</attr>';
	$tdatamfr_operational_status_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="head">'.xmlencode("MFR Operational Status Chart").'</attr>
<attr value="foot">'.xmlencode("Operational Status").'</attr>
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
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatamfr_operational_status_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">OperationalStatus</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Operational_Status_Chart","OperationalStatus")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Operational_Status_Chart","Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamfr_operational_status_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("MFR_Operational_Status_Chart","Count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamfr_operational_status_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">MFR_Operational_Status_Chart</attr>
<attr value="short_table_name">mfr_operational_status_chart</attr>
</attr>

</chart>';

$tables_data["MFR_Operational_Status_Chart"]=&$tdatamfr_operational_status_chart;
$field_labels["MFR_Operational_Status_Chart"] = &$fieldLabelsmfr_operational_status_chart;
$fieldToolTips["MFR_Operational_Status_Chart"] = &$fieldToolTipsmfr_operational_status_chart;
$placeHolders["MFR_Operational_Status_Chart"] = &$placeHoldersmfr_operational_status_chart;
$page_titles["MFR_Operational_Status_Chart"] = &$pageTitlesmfr_operational_status_chart;


changeTextControlsToDate( "MFR_Operational_Status_Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Operational_Status_Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Operational_Status_Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="MFR_Operational_Status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="MFR_Operational_Status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mfr_operational_status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["MFR_Operational_Status_Chart"][0] = $masterParams;
				$masterTablesData["MFR_Operational_Status_Chart"][0]["masterKeys"] = array();
	$masterTablesData["MFR_Operational_Status_Chart"][0]["masterKeys"][]="OperationalStatus";
				$masterTablesData["MFR_Operational_Status_Chart"][0]["masterKeys"][]="Status";
				$masterTablesData["MFR_Operational_Status_Chart"][0]["masterKeys"][]="Count";
				$masterTablesData["MFR_Operational_Status_Chart"][0]["detailKeys"] = array();
	$masterTablesData["MFR_Operational_Status_Chart"][0]["detailKeys"][]="OperationalStatus";
				$masterTablesData["MFR_Operational_Status_Chart"][0]["detailKeys"][]="Status";
				$masterTablesData["MFR_Operational_Status_Chart"][0]["detailKeys"][]="Count";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_operational_status_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OperationalStatus,  	Status,  	`Count`";
$proto0["m_strFrom"] = "FROM MFR_Operational_Status";
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
	"m_strName" => "OperationalStatus",
	"m_strTable" => "MFR_Operational_Status",
	"m_srcTableName" => "MFR_Operational_Status_Chart"
));

$proto6["m_sql"] = "OperationalStatus";
$proto6["m_srcTableName"] = "MFR_Operational_Status_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "MFR_Operational_Status",
	"m_srcTableName" => "MFR_Operational_Status_Chart"
));

$proto8["m_sql"] = "Status";
$proto8["m_srcTableName"] = "MFR_Operational_Status_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Operational_Status",
	"m_srcTableName" => "MFR_Operational_Status_Chart"
));

$proto10["m_sql"] = "`Count`";
$proto10["m_srcTableName"] = "MFR_Operational_Status_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MFR_Operational_Status";
$proto13["m_srcTableName"] = "MFR_Operational_Status_Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "OperationalStatus";
$proto13["m_columns"][] = "Status";
$proto13["m_columns"][] = "Count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MFR_Operational_Status";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MFR_Operational_Status_Chart";
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
$proto0["m_srcTableName"]="MFR_Operational_Status_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_operational_status_chart = createSqlQuery_mfr_operational_status_chart();


	
																										;

			

$tdatamfr_operational_status_chart[".sqlquery"] = $queryData_mfr_operational_status_chart;



$tdatamfr_operational_status_chart[".hasEvents"] = false;

?>