<?php
$tdatamoh_regions = array();
$tdatamoh_regions[".searchableFields"] = array();
$tdatamoh_regions[".ShortName"] = "moh_regions";
$tdatamoh_regions[".OwnerID"] = "";
$tdatamoh_regions[".OriginalTable"] = "public.moh_regions";


$tdatamoh_regions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_regions[".originalPagesByType"] = $tdatamoh_regions[".pagesByType"];
$tdatamoh_regions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_regions[".originalPages"] = $tdatamoh_regions[".pages"];
$tdatamoh_regions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_regions[".originalDefaultPages"] = $tdatamoh_regions[".defaultPages"];

//	field labels
$fieldLabelsmoh_regions = array();
$fieldToolTipsmoh_regions = array();
$pageTitlesmoh_regions = array();
$placeHoldersmoh_regions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_regions["English"] = array();
	$fieldToolTipsmoh_regions["English"] = array();
	$placeHoldersmoh_regions["English"] = array();
	$pageTitlesmoh_regions["English"] = array();
	$fieldLabelsmoh_regions["English"]["region_id"] = "Region Id";
	$fieldToolTipsmoh_regions["English"]["region_id"] = "";
	$placeHoldersmoh_regions["English"]["region_id"] = "";
	$fieldLabelsmoh_regions["English"]["region_name"] = "Region Name";
	$fieldToolTipsmoh_regions["English"]["region_name"] = "";
	$placeHoldersmoh_regions["English"]["region_name"] = "";
	if (count($fieldToolTipsmoh_regions["English"]))
		$tdatamoh_regions[".isUseToolTips"] = true;
}


	$tdatamoh_regions[".NCSearch"] = true;



$tdatamoh_regions[".shortTableName"] = "moh_regions";
$tdatamoh_regions[".nSecOptions"] = 0;

$tdatamoh_regions[".mainTableOwnerID"] = "";
$tdatamoh_regions[".entityType"] = 0;
$tdatamoh_regions[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_regions[".strOriginalTableName"] = "public.moh_regions";

	



$tdatamoh_regions[".showAddInPopup"] = false;

$tdatamoh_regions[".showEditInPopup"] = false;

$tdatamoh_regions[".showViewInPopup"] = false;

$tdatamoh_regions[".listAjax"] = false;
//	temporary
//$tdatamoh_regions[".listAjax"] = false;

	$tdatamoh_regions[".audit"] = true;

	$tdatamoh_regions[".locking"] = false;


$pages = $tdatamoh_regions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_regions[".edit"] = true;
	$tdatamoh_regions[".afterEditAction"] = 1;
	$tdatamoh_regions[".closePopupAfterEdit"] = 1;
	$tdatamoh_regions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_regions[".add"] = true;
$tdatamoh_regions[".afterAddAction"] = 1;
$tdatamoh_regions[".closePopupAfterAdd"] = 1;
$tdatamoh_regions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_regions[".list"] = true;
}



$tdatamoh_regions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_regions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_regions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_regions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_regions[".printFriendly"] = true;
}



$tdatamoh_regions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_regions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_regions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_regions[".isUseAjaxSuggest"] = true;





$tdatamoh_regions[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_regions[".buttonsAdded"] = false;

$tdatamoh_regions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_regions[".isUseTimeForSearch"] = false;


$tdatamoh_regions[".badgeColor"] = "E8926F";


$tdatamoh_regions[".allSearchFields"] = array();
$tdatamoh_regions[".filterFields"] = array();
$tdatamoh_regions[".requiredSearchFields"] = array();

$tdatamoh_regions[".googleLikeFields"] = array();
$tdatamoh_regions[".googleLikeFields"][] = "region_id";
$tdatamoh_regions[".googleLikeFields"][] = "region_name";



$tdatamoh_regions[".tableType"] = "list";

$tdatamoh_regions[".printerPageOrientation"] = 0;
$tdatamoh_regions[".nPrinterPageScale"] = 100;

$tdatamoh_regions[".nPrinterSplitRecords"] = 40;

$tdatamoh_regions[".geocodingEnabled"] = false;










$tdatamoh_regions[".pageSize"] = 20;

$tdatamoh_regions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_regions[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_regions[".orderindexes"] = array();


$tdatamoh_regions[".sqlHead"] = "SELECT region_id,  	region_name";
$tdatamoh_regions[".sqlFrom"] = "FROM \"public\".moh_regions";
$tdatamoh_regions[".sqlWhereExpr"] = "";
$tdatamoh_regions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_regions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_regions[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_regions[".highlightSearchResults"] = true;

$tableKeysmoh_regions = array();
$tableKeysmoh_regions[] = "region_id";
$tdatamoh_regions[".Keys"] = $tableKeysmoh_regions;


$tdatamoh_regions[".hideMobileList"] = array();




//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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


	$tdatamoh_regions["region_id"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_id";
//	region_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_name";
	$fdata["GoodName"] = "region_name";
	$fdata["ownerTable"] = "public.moh_regions";
	$fdata["Label"] = GetFieldLabel("public_moh_regions","region_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "region_name";

		$fdata["sourceSingle"] = "region_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_name";

	
	
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


	$tdatamoh_regions["region_name"] = $fdata;
		$tdatamoh_regions[".searchableFields"][] = "region_name";


$tables_data["public.moh_regions"]=&$tdatamoh_regions;
$field_labels["public_moh_regions"] = &$fieldLabelsmoh_regions;
$fieldToolTips["public_moh_regions"] = &$fieldToolTipsmoh_regions;
$placeHolders["public_moh_regions"] = &$placeHoldersmoh_regions;
$page_titles["public_moh_regions"] = &$pageTitlesmoh_regions;


changeTextControlsToDate( "public.moh_regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_regions"] = array();
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


		
	$detailsTablesData["public.moh_regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"][]="region_id";
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


		
	$detailsTablesData["public.moh_regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"][]="region_id";
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


		
	$detailsTablesData["public.moh_regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["masterKeys"][]="region_id";

				$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_regions"][$dIndex]["detailKeys"][]="region_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_regions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region_id,  	region_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_regions";
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
	"m_strName" => "region_id",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto6["m_sql"] = "region_id";
$proto6["m_srcTableName"] = "public.moh_regions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "public.moh_regions",
	"m_srcTableName" => "public.moh_regions"
));

$proto8["m_sql"] = "region_name";
$proto8["m_srcTableName"] = "public.moh_regions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_regions";
$proto11["m_srcTableName"] = "public.moh_regions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "region_id";
$proto11["m_columns"][] = "region_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_regions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_regions";
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
$proto0["m_srcTableName"]="public.moh_regions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_regions = createSqlQuery_moh_regions();


	
																												;

		

$tdatamoh_regions[".sqlquery"] = $queryData_moh_regions;



$tdatamoh_regions[".hasEvents"] = false;

?>