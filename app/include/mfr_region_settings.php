<?php
$tdatamfr_region = array();
$tdatamfr_region[".searchableFields"] = array();
$tdatamfr_region[".ShortName"] = "mfr_region";
$tdatamfr_region[".OwnerID"] = "";
$tdatamfr_region[".OriginalTable"] = "MFR_Region";


$tdatamfr_region[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_region[".originalPagesByType"] = $tdatamfr_region[".pagesByType"];
$tdatamfr_region[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_region[".originalPages"] = $tdatamfr_region[".pages"];
$tdatamfr_region[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_region[".originalDefaultPages"] = $tdatamfr_region[".defaultPages"];

//	field labels
$fieldLabelsmfr_region = array();
$fieldToolTipsmfr_region = array();
$pageTitlesmfr_region = array();
$placeHoldersmfr_region = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_region["English"] = array();
	$fieldToolTipsmfr_region["English"] = array();
	$placeHoldersmfr_region["English"] = array();
	$pageTitlesmfr_region["English"] = array();
	$fieldLabelsmfr_region["English"]["Region"] = "Region";
	$fieldToolTipsmfr_region["English"]["Region"] = "";
	$placeHoldersmfr_region["English"]["Region"] = "";
	$fieldLabelsmfr_region["English"]["Lat"] = "Lat";
	$fieldToolTipsmfr_region["English"]["Lat"] = "";
	$placeHoldersmfr_region["English"]["Lat"] = "";
	$fieldLabelsmfr_region["English"]["Lng"] = "Lng";
	$fieldToolTipsmfr_region["English"]["Lng"] = "";
	$placeHoldersmfr_region["English"]["Lng"] = "";
	$fieldLabelsmfr_region["English"]["Count"] = "Count";
	$fieldToolTipsmfr_region["English"]["Count"] = "";
	$placeHoldersmfr_region["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_region["English"]))
		$tdatamfr_region[".isUseToolTips"] = true;
}


	$tdatamfr_region[".NCSearch"] = true;



$tdatamfr_region[".shortTableName"] = "mfr_region";
$tdatamfr_region[".nSecOptions"] = 0;

$tdatamfr_region[".mainTableOwnerID"] = "";
$tdatamfr_region[".entityType"] = 0;
$tdatamfr_region[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_region[".strOriginalTableName"] = "MFR_Region";

	



$tdatamfr_region[".showAddInPopup"] = false;

$tdatamfr_region[".showEditInPopup"] = false;

$tdatamfr_region[".showViewInPopup"] = false;

$tdatamfr_region[".listAjax"] = false;
//	temporary
//$tdatamfr_region[".listAjax"] = false;

	$tdatamfr_region[".audit"] = false;

	$tdatamfr_region[".locking"] = false;


$pages = $tdatamfr_region[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_region[".edit"] = true;
	$tdatamfr_region[".afterEditAction"] = 1;
	$tdatamfr_region[".closePopupAfterEdit"] = 1;
	$tdatamfr_region[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_region[".add"] = true;
$tdatamfr_region[".afterAddAction"] = 1;
$tdatamfr_region[".closePopupAfterAdd"] = 1;
$tdatamfr_region[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_region[".list"] = true;
}



$tdatamfr_region[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_region[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_region[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_region[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_region[".printFriendly"] = true;
}



$tdatamfr_region[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_region[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_region[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_region[".isUseAjaxSuggest"] = true;





$tdatamfr_region[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_region[".buttonsAdded"] = false;

$tdatamfr_region[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_region[".isUseTimeForSearch"] = false;


$tdatamfr_region[".badgeColor"] = "CFAE83";


$tdatamfr_region[".allSearchFields"] = array();
$tdatamfr_region[".filterFields"] = array();
$tdatamfr_region[".requiredSearchFields"] = array();

$tdatamfr_region[".googleLikeFields"] = array();
$tdatamfr_region[".googleLikeFields"][] = "Region";



$tdatamfr_region[".tableType"] = "list";

$tdatamfr_region[".printerPageOrientation"] = 0;
$tdatamfr_region[".nPrinterPageScale"] = 100;

$tdatamfr_region[".nPrinterSplitRecords"] = 40;

$tdatamfr_region[".geocodingEnabled"] = false;










$tdatamfr_region[".pageSize"] = 20;

$tdatamfr_region[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_region[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_region[".orderindexes"] = array();


$tdatamfr_region[".sqlHead"] = "SELECT Region,  	Lat,  	Lng,  	`Count`";
$tdatamfr_region[".sqlFrom"] = "FROM MFR_Region";
$tdatamfr_region[".sqlWhereExpr"] = "";
$tdatamfr_region[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_region[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_region[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_region[".highlightSearchResults"] = true;

$tableKeysmfr_region = array();
$tdatamfr_region[".Keys"] = $tableKeysmfr_region;


$tdatamfr_region[".hideMobileList"] = array();




//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region","Region");
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


	$tdatamfr_region["Region"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "Region";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region","Lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
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


	$tdatamfr_region["Lat"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region","Lng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
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


	$tdatamfr_region["Lng"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "Lng";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Region";
	$fdata["Label"] = GetFieldLabel("MFR_Region","Count");
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


	$tdatamfr_region["Count"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "Count";


$tables_data["MFR_Region"]=&$tdatamfr_region;
$field_labels["MFR_Region"] = &$fieldLabelsmfr_region;
$fieldToolTips["MFR_Region"] = &$fieldToolTipsmfr_region;
$placeHolders["MFR_Region"] = &$placeHoldersmfr_region;
$page_titles["MFR_Region"] = &$pageTitlesmfr_region;


changeTextControlsToDate( "MFR_Region" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Region"] = array();
//	MFR_Region_Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MFR_Region_Chart";
		$detailsParam["dOriginalTable"] = "MFR_Region";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "mfr_region_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("MFR_Region_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["MFR_Region"][$dIndex] = $detailsParam;

	
		$detailsTablesData["MFR_Region"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["MFR_Region"][$dIndex]["masterKeys"][]="Region";

	$detailsTablesData["MFR_Region"][$dIndex]["masterKeys"][]="Count";

				$detailsTablesData["MFR_Region"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["MFR_Region"][$dIndex]["detailKeys"][]="Region";

		
	$detailsTablesData["MFR_Region"][$dIndex]["detailKeys"][]="Count";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Region"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_region()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Region,  	Lat,  	Lng,  	`Count`";
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
	"m_srcTableName" => "MFR_Region"
));

$proto6["m_sql"] = "Region";
$proto6["m_srcTableName"] = "MFR_Region";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "MFR_Region",
	"m_srcTableName" => "MFR_Region"
));

$proto8["m_sql"] = "Lat";
$proto8["m_srcTableName"] = "MFR_Region";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "MFR_Region",
	"m_srcTableName" => "MFR_Region"
));

$proto10["m_sql"] = "Lng";
$proto10["m_srcTableName"] = "MFR_Region";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Region",
	"m_srcTableName" => "MFR_Region"
));

$proto12["m_sql"] = "`Count`";
$proto12["m_srcTableName"] = "MFR_Region";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "MFR_Region";
$proto15["m_srcTableName"] = "MFR_Region";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Region";
$proto15["m_columns"][] = "Lat";
$proto15["m_columns"][] = "Lng";
$proto15["m_columns"][] = "Count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "MFR_Region";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "MFR_Region";
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
$proto0["m_srcTableName"]="MFR_Region";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_region = createSqlQuery_mfr_region();


	
								;

				

$tdatamfr_region[".sqlquery"] = $queryData_mfr_region;



$tdatamfr_region[".hasEvents"] = false;

?>