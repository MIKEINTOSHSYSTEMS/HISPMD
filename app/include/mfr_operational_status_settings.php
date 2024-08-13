<?php
$tdatamfr_operational_status = array();
$tdatamfr_operational_status[".searchableFields"] = array();
$tdatamfr_operational_status[".ShortName"] = "mfr_operational_status";
$tdatamfr_operational_status[".OwnerID"] = "";
$tdatamfr_operational_status[".OriginalTable"] = "MFR_Operational_Status";


$tdatamfr_operational_status[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_operational_status[".originalPagesByType"] = $tdatamfr_operational_status[".pagesByType"];
$tdatamfr_operational_status[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_operational_status[".originalPages"] = $tdatamfr_operational_status[".pages"];
$tdatamfr_operational_status[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_operational_status[".originalDefaultPages"] = $tdatamfr_operational_status[".defaultPages"];

//	field labels
$fieldLabelsmfr_operational_status = array();
$fieldToolTipsmfr_operational_status = array();
$pageTitlesmfr_operational_status = array();
$placeHoldersmfr_operational_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_operational_status["English"] = array();
	$fieldToolTipsmfr_operational_status["English"] = array();
	$placeHoldersmfr_operational_status["English"] = array();
	$pageTitlesmfr_operational_status["English"] = array();
	$fieldLabelsmfr_operational_status["English"]["OperationalStatus"] = "Operational Status";
	$fieldToolTipsmfr_operational_status["English"]["OperationalStatus"] = "";
	$placeHoldersmfr_operational_status["English"]["OperationalStatus"] = "";
	$fieldLabelsmfr_operational_status["English"]["Status"] = "Status";
	$fieldToolTipsmfr_operational_status["English"]["Status"] = "";
	$placeHoldersmfr_operational_status["English"]["Status"] = "";
	$fieldLabelsmfr_operational_status["English"]["Count"] = "Count";
	$fieldToolTipsmfr_operational_status["English"]["Count"] = "";
	$placeHoldersmfr_operational_status["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_operational_status["English"]))
		$tdatamfr_operational_status[".isUseToolTips"] = true;
}


	$tdatamfr_operational_status[".NCSearch"] = true;



$tdatamfr_operational_status[".shortTableName"] = "mfr_operational_status";
$tdatamfr_operational_status[".nSecOptions"] = 0;

$tdatamfr_operational_status[".mainTableOwnerID"] = "";
$tdatamfr_operational_status[".entityType"] = 0;
$tdatamfr_operational_status[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_operational_status[".strOriginalTableName"] = "MFR_Operational_Status";

	



$tdatamfr_operational_status[".showAddInPopup"] = false;

$tdatamfr_operational_status[".showEditInPopup"] = false;

$tdatamfr_operational_status[".showViewInPopup"] = false;

$tdatamfr_operational_status[".listAjax"] = false;
//	temporary
//$tdatamfr_operational_status[".listAjax"] = false;

	$tdatamfr_operational_status[".audit"] = false;

	$tdatamfr_operational_status[".locking"] = false;


$pages = $tdatamfr_operational_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_operational_status[".edit"] = true;
	$tdatamfr_operational_status[".afterEditAction"] = 1;
	$tdatamfr_operational_status[".closePopupAfterEdit"] = 1;
	$tdatamfr_operational_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_operational_status[".add"] = true;
$tdatamfr_operational_status[".afterAddAction"] = 1;
$tdatamfr_operational_status[".closePopupAfterAdd"] = 1;
$tdatamfr_operational_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_operational_status[".list"] = true;
}



$tdatamfr_operational_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_operational_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_operational_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_operational_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_operational_status[".printFriendly"] = true;
}



$tdatamfr_operational_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_operational_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_operational_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_operational_status[".isUseAjaxSuggest"] = true;





$tdatamfr_operational_status[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_operational_status[".buttonsAdded"] = false;

$tdatamfr_operational_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_operational_status[".isUseTimeForSearch"] = false;


$tdatamfr_operational_status[".badgeColor"] = "5F9EA0";


$tdatamfr_operational_status[".allSearchFields"] = array();
$tdatamfr_operational_status[".filterFields"] = array();
$tdatamfr_operational_status[".requiredSearchFields"] = array();

$tdatamfr_operational_status[".googleLikeFields"] = array();
$tdatamfr_operational_status[".googleLikeFields"][] = "OperationalStatus";
$tdatamfr_operational_status[".googleLikeFields"][] = "Status";



$tdatamfr_operational_status[".tableType"] = "list";

$tdatamfr_operational_status[".printerPageOrientation"] = 0;
$tdatamfr_operational_status[".nPrinterPageScale"] = 100;

$tdatamfr_operational_status[".nPrinterSplitRecords"] = 40;

$tdatamfr_operational_status[".geocodingEnabled"] = false;










$tdatamfr_operational_status[".pageSize"] = 20;

$tdatamfr_operational_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_operational_status[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_operational_status[".orderindexes"] = array();


$tdatamfr_operational_status[".sqlHead"] = "SELECT OperationalStatus,  	Status,  	`Count`";
$tdatamfr_operational_status[".sqlFrom"] = "FROM MFR_Operational_Status";
$tdatamfr_operational_status[".sqlWhereExpr"] = "";
$tdatamfr_operational_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_operational_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_operational_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_operational_status[".highlightSearchResults"] = true;

$tableKeysmfr_operational_status = array();
$tdatamfr_operational_status[".Keys"] = $tableKeysmfr_operational_status;


$tdatamfr_operational_status[".hideMobileList"] = array();




//	OperationalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OperationalStatus";
	$fdata["GoodName"] = "OperationalStatus";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status","OperationalStatus");
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


	$tdatamfr_operational_status["OperationalStatus"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "OperationalStatus";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status","Status");
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


	$tdatamfr_operational_status["Status"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "Status";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Operational_Status";
	$fdata["Label"] = GetFieldLabel("MFR_Operational_Status","Count");
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


	$tdatamfr_operational_status["Count"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "Count";


$tables_data["MFR_Operational_Status"]=&$tdatamfr_operational_status;
$field_labels["MFR_Operational_Status"] = &$fieldLabelsmfr_operational_status;
$fieldToolTips["MFR_Operational_Status"] = &$fieldToolTipsmfr_operational_status;
$placeHolders["MFR_Operational_Status"] = &$placeHoldersmfr_operational_status;
$page_titles["MFR_Operational_Status"] = &$pageTitlesmfr_operational_status;


changeTextControlsToDate( "MFR_Operational_Status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Operational_Status"] = array();
//	MFR_Operational_Status_Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MFR_Operational_Status_Chart";
		$detailsParam["dOriginalTable"] = "MFR_Operational_Status";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "mfr_operational_status_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("MFR_Operational_Status_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["MFR_Operational_Status"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MFR_Operational_Status"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MFR_Operational_Status"][$dIndex]["masterKeys"][]="OperationalStatus";

	$detailsTablesData["MFR_Operational_Status"][$dIndex]["masterKeys"][]="Status";

	$detailsTablesData["MFR_Operational_Status"][$dIndex]["masterKeys"][]="Count";

				$detailsTablesData["MFR_Operational_Status"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MFR_Operational_Status"][$dIndex]["detailKeys"][]="OperationalStatus";

		
	$detailsTablesData["MFR_Operational_Status"][$dIndex]["detailKeys"][]="Status";

		
	$detailsTablesData["MFR_Operational_Status"][$dIndex]["detailKeys"][]="Count";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Operational_Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_operational_status()
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
	"m_srcTableName" => "MFR_Operational_Status"
));

$proto6["m_sql"] = "OperationalStatus";
$proto6["m_srcTableName"] = "MFR_Operational_Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "MFR_Operational_Status",
	"m_srcTableName" => "MFR_Operational_Status"
));

$proto8["m_sql"] = "Status";
$proto8["m_srcTableName"] = "MFR_Operational_Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Operational_Status",
	"m_srcTableName" => "MFR_Operational_Status"
));

$proto10["m_sql"] = "`Count`";
$proto10["m_srcTableName"] = "MFR_Operational_Status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MFR_Operational_Status";
$proto13["m_srcTableName"] = "MFR_Operational_Status";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "OperationalStatus";
$proto13["m_columns"][] = "Status";
$proto13["m_columns"][] = "Count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MFR_Operational_Status";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MFR_Operational_Status";
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
$proto0["m_srcTableName"]="MFR_Operational_Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_operational_status = createSqlQuery_mfr_operational_status();


	
																												;

			

$tdatamfr_operational_status[".sqlquery"] = $queryData_mfr_operational_status;



$tdatamfr_operational_status[".hasEvents"] = false;

?>