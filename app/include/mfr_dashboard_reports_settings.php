<?php
$tdatamfr_dashboard_reports = array();
$tdatamfr_dashboard_reports[".searchableFields"] = array();
$tdatamfr_dashboard_reports[".ShortName"] = "mfr_dashboard_reports";
$tdatamfr_dashboard_reports[".OwnerID"] = "";
$tdatamfr_dashboard_reports[".OriginalTable"] = "MFR_Dashboard_Reports";


$tdatamfr_dashboard_reports[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_dashboard_reports[".originalPagesByType"] = $tdatamfr_dashboard_reports[".pagesByType"];
$tdatamfr_dashboard_reports[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_dashboard_reports[".originalPages"] = $tdatamfr_dashboard_reports[".pages"];
$tdatamfr_dashboard_reports[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_dashboard_reports[".originalDefaultPages"] = $tdatamfr_dashboard_reports[".defaultPages"];

//	field labels
$fieldLabelsmfr_dashboard_reports = array();
$fieldToolTipsmfr_dashboard_reports = array();
$pageTitlesmfr_dashboard_reports = array();
$placeHoldersmfr_dashboard_reports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_dashboard_reports["English"] = array();
	$fieldToolTipsmfr_dashboard_reports["English"] = array();
	$placeHoldersmfr_dashboard_reports["English"] = array();
	$pageTitlesmfr_dashboard_reports["English"] = array();
	$fieldLabelsmfr_dashboard_reports["English"]["Type"] = "Type";
	$fieldToolTipsmfr_dashboard_reports["English"]["Type"] = "";
	$placeHoldersmfr_dashboard_reports["English"]["Type"] = "";
	$fieldLabelsmfr_dashboard_reports["English"]["Name"] = "Name";
	$fieldToolTipsmfr_dashboard_reports["English"]["Name"] = "";
	$placeHoldersmfr_dashboard_reports["English"]["Name"] = "";
	$fieldLabelsmfr_dashboard_reports["English"]["Count"] = "Count";
	$fieldToolTipsmfr_dashboard_reports["English"]["Count"] = "";
	$placeHoldersmfr_dashboard_reports["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_dashboard_reports["English"]))
		$tdatamfr_dashboard_reports[".isUseToolTips"] = true;
}


	$tdatamfr_dashboard_reports[".NCSearch"] = true;



$tdatamfr_dashboard_reports[".shortTableName"] = "mfr_dashboard_reports";
$tdatamfr_dashboard_reports[".nSecOptions"] = 0;

$tdatamfr_dashboard_reports[".mainTableOwnerID"] = "";
$tdatamfr_dashboard_reports[".entityType"] = 0;
$tdatamfr_dashboard_reports[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_dashboard_reports[".strOriginalTableName"] = "MFR_Dashboard_Reports";

	



$tdatamfr_dashboard_reports[".showAddInPopup"] = false;

$tdatamfr_dashboard_reports[".showEditInPopup"] = false;

$tdatamfr_dashboard_reports[".showViewInPopup"] = false;

$tdatamfr_dashboard_reports[".listAjax"] = false;
//	temporary
//$tdatamfr_dashboard_reports[".listAjax"] = false;

	$tdatamfr_dashboard_reports[".audit"] = false;

	$tdatamfr_dashboard_reports[".locking"] = false;


$pages = $tdatamfr_dashboard_reports[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_dashboard_reports[".edit"] = true;
	$tdatamfr_dashboard_reports[".afterEditAction"] = 1;
	$tdatamfr_dashboard_reports[".closePopupAfterEdit"] = 1;
	$tdatamfr_dashboard_reports[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_dashboard_reports[".add"] = true;
$tdatamfr_dashboard_reports[".afterAddAction"] = 1;
$tdatamfr_dashboard_reports[".closePopupAfterAdd"] = 1;
$tdatamfr_dashboard_reports[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_dashboard_reports[".list"] = true;
}



$tdatamfr_dashboard_reports[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_dashboard_reports[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_dashboard_reports[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_dashboard_reports[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_dashboard_reports[".printFriendly"] = true;
}



$tdatamfr_dashboard_reports[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_dashboard_reports[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_dashboard_reports[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_dashboard_reports[".isUseAjaxSuggest"] = true;





$tdatamfr_dashboard_reports[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_dashboard_reports[".buttonsAdded"] = false;

$tdatamfr_dashboard_reports[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_dashboard_reports[".isUseTimeForSearch"] = false;


$tdatamfr_dashboard_reports[".badgeColor"] = "5F9EA0";


$tdatamfr_dashboard_reports[".allSearchFields"] = array();
$tdatamfr_dashboard_reports[".filterFields"] = array();
$tdatamfr_dashboard_reports[".requiredSearchFields"] = array();

$tdatamfr_dashboard_reports[".googleLikeFields"] = array();
$tdatamfr_dashboard_reports[".googleLikeFields"][] = "Type";
$tdatamfr_dashboard_reports[".googleLikeFields"][] = "Name";



$tdatamfr_dashboard_reports[".tableType"] = "list";

$tdatamfr_dashboard_reports[".printerPageOrientation"] = 0;
$tdatamfr_dashboard_reports[".nPrinterPageScale"] = 100;

$tdatamfr_dashboard_reports[".nPrinterSplitRecords"] = 40;

$tdatamfr_dashboard_reports[".geocodingEnabled"] = false;










$tdatamfr_dashboard_reports[".pageSize"] = 20;

$tdatamfr_dashboard_reports[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_dashboard_reports[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_dashboard_reports[".orderindexes"] = array();


$tdatamfr_dashboard_reports[".sqlHead"] = "SELECT `Type`,  	Name,  	`Count`";
$tdatamfr_dashboard_reports[".sqlFrom"] = "FROM MFR_Dashboard_Reports";
$tdatamfr_dashboard_reports[".sqlWhereExpr"] = "";
$tdatamfr_dashboard_reports[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_dashboard_reports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_dashboard_reports[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_dashboard_reports[".highlightSearchResults"] = true;

$tableKeysmfr_dashboard_reports = array();
$tdatamfr_dashboard_reports[".Keys"] = $tableKeysmfr_dashboard_reports;


$tdatamfr_dashboard_reports[".hideMobileList"] = array();




//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports","Type");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamfr_dashboard_reports["Type"] = $fdata;
		$tdatamfr_dashboard_reports[".searchableFields"][] = "Type";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports","Name");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamfr_dashboard_reports["Name"] = $fdata;
		$tdatamfr_dashboard_reports[".searchableFields"][] = "Name";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Dashboard_Reports";
	$fdata["Label"] = GetFieldLabel("MFR_Dashboard_Reports","Count");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatamfr_dashboard_reports["Count"] = $fdata;
		$tdatamfr_dashboard_reports[".searchableFields"][] = "Count";


$tables_data["MFR_Dashboard_Reports"]=&$tdatamfr_dashboard_reports;
$field_labels["MFR_Dashboard_Reports"] = &$fieldLabelsmfr_dashboard_reports;
$fieldToolTips["MFR_Dashboard_Reports"] = &$fieldToolTipsmfr_dashboard_reports;
$placeHolders["MFR_Dashboard_Reports"] = &$placeHoldersmfr_dashboard_reports;
$page_titles["MFR_Dashboard_Reports"] = &$pageTitlesmfr_dashboard_reports;


changeTextControlsToDate( "MFR_Dashboard_Reports" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Dashboard_Reports"] = array();
//	MFR_Dashboard_Reports_Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MFR_Dashboard_Reports_Chart";
		$detailsParam["dOriginalTable"] = "MFR_Dashboard_Reports";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "mfr_dashboard_reports_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("MFR_Dashboard_Reports_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["masterKeys"][]="Type";

	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["masterKeys"][]="Name";

	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["masterKeys"][]="Count";

				$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["detailKeys"][]="Type";

		
	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["detailKeys"][]="Name";

		
	$detailsTablesData["MFR_Dashboard_Reports"][$dIndex]["detailKeys"][]="Count";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Dashboard_Reports"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_dashboard_reports()
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
	"m_srcTableName" => "MFR_Dashboard_Reports"
));

$proto6["m_sql"] = "`Type`";
$proto6["m_srcTableName"] = "MFR_Dashboard_Reports";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "MFR_Dashboard_Reports",
	"m_srcTableName" => "MFR_Dashboard_Reports"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "MFR_Dashboard_Reports";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Dashboard_Reports",
	"m_srcTableName" => "MFR_Dashboard_Reports"
));

$proto10["m_sql"] = "`Count`";
$proto10["m_srcTableName"] = "MFR_Dashboard_Reports";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MFR_Dashboard_Reports";
$proto13["m_srcTableName"] = "MFR_Dashboard_Reports";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Type";
$proto13["m_columns"][] = "Name";
$proto13["m_columns"][] = "Count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MFR_Dashboard_Reports";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MFR_Dashboard_Reports";
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
$proto0["m_srcTableName"]="MFR_Dashboard_Reports";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_dashboard_reports = createSqlQuery_mfr_dashboard_reports();


	
						;

			

$tdatamfr_dashboard_reports[".sqlquery"] = $queryData_mfr_dashboard_reports;



$tdatamfr_dashboard_reports[".hasEvents"] = false;

?>