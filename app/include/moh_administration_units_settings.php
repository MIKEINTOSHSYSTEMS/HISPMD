<?php
$tdatamoh_administration_units = array();
$tdatamoh_administration_units[".searchableFields"] = array();
$tdatamoh_administration_units[".ShortName"] = "moh_administration_units";
$tdatamoh_administration_units[".OwnerID"] = "";
$tdatamoh_administration_units[".OriginalTable"] = "public.moh_administration_units";


$tdatamoh_administration_units[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_administration_units[".originalPagesByType"] = $tdatamoh_administration_units[".pagesByType"];
$tdatamoh_administration_units[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_administration_units[".originalPages"] = $tdatamoh_administration_units[".pages"];
$tdatamoh_administration_units[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_administration_units[".originalDefaultPages"] = $tdatamoh_administration_units[".defaultPages"];

//	field labels
$fieldLabelsmoh_administration_units = array();
$fieldToolTipsmoh_administration_units = array();
$pageTitlesmoh_administration_units = array();
$placeHoldersmoh_administration_units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_administration_units["English"] = array();
	$fieldToolTipsmoh_administration_units["English"] = array();
	$placeHoldersmoh_administration_units["English"] = array();
	$pageTitlesmoh_administration_units["English"] = array();
	$fieldLabelsmoh_administration_units["English"]["unit_id"] = "Unit Id";
	$fieldToolTipsmoh_administration_units["English"]["unit_id"] = "";
	$placeHoldersmoh_administration_units["English"]["unit_id"] = "";
	$fieldLabelsmoh_administration_units["English"]["unit_name"] = "Unit Name";
	$fieldToolTipsmoh_administration_units["English"]["unit_name"] = "";
	$placeHoldersmoh_administration_units["English"]["unit_name"] = "";
	if (count($fieldToolTipsmoh_administration_units["English"]))
		$tdatamoh_administration_units[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_administration_units["Amharic"] = array();
	$fieldToolTipsmoh_administration_units["Amharic"] = array();
	$placeHoldersmoh_administration_units["Amharic"] = array();
	$pageTitlesmoh_administration_units["Amharic"] = array();
	$fieldLabelsmoh_administration_units["Amharic"]["unit_id"] = "የክፍል መለያ";
	$fieldToolTipsmoh_administration_units["Amharic"]["unit_id"] = "";
	$placeHoldersmoh_administration_units["Amharic"]["unit_id"] = "";
	$fieldLabelsmoh_administration_units["Amharic"]["unit_name"] = "የክፍል ስም";
	$fieldToolTipsmoh_administration_units["Amharic"]["unit_name"] = "";
	$placeHoldersmoh_administration_units["Amharic"]["unit_name"] = "";
	if (count($fieldToolTipsmoh_administration_units["Amharic"]))
		$tdatamoh_administration_units[".isUseToolTips"] = true;
}


	$tdatamoh_administration_units[".NCSearch"] = true;



$tdatamoh_administration_units[".shortTableName"] = "moh_administration_units";
$tdatamoh_administration_units[".nSecOptions"] = 0;

$tdatamoh_administration_units[".mainTableOwnerID"] = "";
$tdatamoh_administration_units[".entityType"] = 0;
$tdatamoh_administration_units[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_administration_units[".strOriginalTableName"] = "public.moh_administration_units";

	



$tdatamoh_administration_units[".showAddInPopup"] = false;

$tdatamoh_administration_units[".showEditInPopup"] = false;

$tdatamoh_administration_units[".showViewInPopup"] = false;

$tdatamoh_administration_units[".listAjax"] = false;
//	temporary
//$tdatamoh_administration_units[".listAjax"] = false;

	$tdatamoh_administration_units[".audit"] = true;

	$tdatamoh_administration_units[".locking"] = false;


$pages = $tdatamoh_administration_units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_administration_units[".edit"] = true;
	$tdatamoh_administration_units[".afterEditAction"] = 1;
	$tdatamoh_administration_units[".closePopupAfterEdit"] = 1;
	$tdatamoh_administration_units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_administration_units[".add"] = true;
$tdatamoh_administration_units[".afterAddAction"] = 1;
$tdatamoh_administration_units[".closePopupAfterAdd"] = 1;
$tdatamoh_administration_units[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_administration_units[".list"] = true;
}



$tdatamoh_administration_units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_administration_units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_administration_units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_administration_units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_administration_units[".printFriendly"] = true;
}



$tdatamoh_administration_units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_administration_units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_administration_units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_administration_units[".isUseAjaxSuggest"] = true;



			

$tdatamoh_administration_units[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_administration_units[".buttonsAdded"] = false;

$tdatamoh_administration_units[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_administration_units[".isUseTimeForSearch"] = false;


$tdatamoh_administration_units[".badgeColor"] = "778899";


$tdatamoh_administration_units[".allSearchFields"] = array();
$tdatamoh_administration_units[".filterFields"] = array();
$tdatamoh_administration_units[".requiredSearchFields"] = array();

$tdatamoh_administration_units[".googleLikeFields"] = array();
$tdatamoh_administration_units[".googleLikeFields"][] = "unit_id";
$tdatamoh_administration_units[".googleLikeFields"][] = "unit_name";



$tdatamoh_administration_units[".tableType"] = "list";

$tdatamoh_administration_units[".printerPageOrientation"] = 0;
$tdatamoh_administration_units[".nPrinterPageScale"] = 100;

$tdatamoh_administration_units[".nPrinterSplitRecords"] = 40;

$tdatamoh_administration_units[".geocodingEnabled"] = false;










$tdatamoh_administration_units[".pageSize"] = 20;

$tdatamoh_administration_units[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_administration_units[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_administration_units[".orderindexes"] = array();


$tdatamoh_administration_units[".sqlHead"] = "SELECT unit_id,  	unit_name";
$tdatamoh_administration_units[".sqlFrom"] = "FROM \"public\".moh_administration_units";
$tdatamoh_administration_units[".sqlWhereExpr"] = "";
$tdatamoh_administration_units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_administration_units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_administration_units[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_administration_units[".highlightSearchResults"] = true;

$tableKeysmoh_administration_units = array();
$tableKeysmoh_administration_units[] = "unit_id";
$tdatamoh_administration_units[".Keys"] = $tableKeysmoh_administration_units;


$tdatamoh_administration_units[".hideMobileList"] = array();




//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "public.moh_administration_units";
	$fdata["Label"] = GetFieldLabel("public_moh_administration_units","unit_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatamoh_administration_units["unit_id"] = $fdata;
		$tdatamoh_administration_units[".searchableFields"][] = "unit_id";
//	unit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "unit_name";
	$fdata["GoodName"] = "unit_name";
	$fdata["ownerTable"] = "public.moh_administration_units";
	$fdata["Label"] = GetFieldLabel("public_moh_administration_units","unit_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "unit_name";

		$fdata["sourceSingle"] = "unit_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamoh_administration_units["unit_name"] = $fdata;
		$tdatamoh_administration_units[".searchableFields"][] = "unit_name";


$tables_data["public.moh_administration_units"]=&$tdatamoh_administration_units;
$field_labels["public_moh_administration_units"] = &$fieldLabelsmoh_administration_units;
$fieldToolTips["public_moh_administration_units"] = &$fieldToolTipsmoh_administration_units;
$placeHolders["public_moh_administration_units"] = &$placeHoldersmoh_administration_units;
$page_titles["public_moh_administration_units"] = &$pageTitlesmoh_administration_units;


changeTextControlsToDate( "public.moh_administration_units" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_administration_units"] = array();
//	public.moh_indicator_data
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicator_data";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicator_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicator_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_administration_units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"][]="unit_id";

				$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"][]="unit_id";
//	MOH_Indicators_Data_Report
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MOH_Indicators_Data_Report";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		$detailsParam["dType"]=PAGE_REPORT;
	
		$detailsParam["dShortTable"] = "moh_indicators_data_report";
	$detailsParam["dCaptionTable"] = GetTableCaption("MOH_Indicators_Data_Report");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_administration_units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"][]="unit_id";

				$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"][]="unit_id";
//	MOH_Indicators_data_Chart
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MOH_Indicators_data_Chart";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "moh_indicators_data_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("MOH_Indicators_data_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_administration_units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["masterKeys"][]="unit_id";

				$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_administration_units"][$dIndex]["detailKeys"][]="unit_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_administration_units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_administration_units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "unit_id,  	unit_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_administration_units";
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
	"m_strName" => "unit_id",
	"m_strTable" => "public.moh_administration_units",
	"m_srcTableName" => "public.moh_administration_units"
));

$proto6["m_sql"] = "unit_id";
$proto6["m_srcTableName"] = "public.moh_administration_units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_name",
	"m_strTable" => "public.moh_administration_units",
	"m_srcTableName" => "public.moh_administration_units"
));

$proto8["m_sql"] = "unit_name";
$proto8["m_srcTableName"] = "public.moh_administration_units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_administration_units";
$proto11["m_srcTableName"] = "public.moh_administration_units";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "unit_id";
$proto11["m_columns"][] = "unit_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_administration_units";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_administration_units";
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
$proto0["m_srcTableName"]="public.moh_administration_units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_administration_units = createSqlQuery_moh_administration_units();


	
																												;

		

$tdatamoh_administration_units[".sqlquery"] = $queryData_moh_administration_units;



$tdatamoh_administration_units[".hasEvents"] = false;

?>