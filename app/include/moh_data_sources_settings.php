<?php
$tdatamoh_data_sources = array();
$tdatamoh_data_sources[".searchableFields"] = array();
$tdatamoh_data_sources[".ShortName"] = "moh_data_sources";
$tdatamoh_data_sources[".OwnerID"] = "";
$tdatamoh_data_sources[".OriginalTable"] = "public.moh_data_sources";


$tdatamoh_data_sources[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_data_sources[".originalPagesByType"] = $tdatamoh_data_sources[".pagesByType"];
$tdatamoh_data_sources[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_data_sources[".originalPages"] = $tdatamoh_data_sources[".pages"];
$tdatamoh_data_sources[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_data_sources[".originalDefaultPages"] = $tdatamoh_data_sources[".defaultPages"];

//	field labels
$fieldLabelsmoh_data_sources = array();
$fieldToolTipsmoh_data_sources = array();
$pageTitlesmoh_data_sources = array();
$placeHoldersmoh_data_sources = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_data_sources["English"] = array();
	$fieldToolTipsmoh_data_sources["English"] = array();
	$placeHoldersmoh_data_sources["English"] = array();
	$pageTitlesmoh_data_sources["English"] = array();
	$fieldLabelsmoh_data_sources["English"]["data_source_id"] = "Data Source Id";
	$fieldToolTipsmoh_data_sources["English"]["data_source_id"] = "";
	$placeHoldersmoh_data_sources["English"]["data_source_id"] = "";
	$fieldLabelsmoh_data_sources["English"]["data_source_name"] = "Data Source Name";
	$fieldToolTipsmoh_data_sources["English"]["data_source_name"] = "";
	$placeHoldersmoh_data_sources["English"]["data_source_name"] = "";
	$fieldLabelsmoh_data_sources["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsmoh_data_sources["English"]["indicator_id"] = "";
	$placeHoldersmoh_data_sources["English"]["indicator_id"] = "";
	if (count($fieldToolTipsmoh_data_sources["English"]))
		$tdatamoh_data_sources[".isUseToolTips"] = true;
}


	$tdatamoh_data_sources[".NCSearch"] = true;



$tdatamoh_data_sources[".shortTableName"] = "moh_data_sources";
$tdatamoh_data_sources[".nSecOptions"] = 0;

$tdatamoh_data_sources[".mainTableOwnerID"] = "";
$tdatamoh_data_sources[".entityType"] = 0;
$tdatamoh_data_sources[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_data_sources[".strOriginalTableName"] = "public.moh_data_sources";

	



$tdatamoh_data_sources[".showAddInPopup"] = false;

$tdatamoh_data_sources[".showEditInPopup"] = false;

$tdatamoh_data_sources[".showViewInPopup"] = false;

$tdatamoh_data_sources[".listAjax"] = false;
//	temporary
//$tdatamoh_data_sources[".listAjax"] = false;

	$tdatamoh_data_sources[".audit"] = true;

	$tdatamoh_data_sources[".locking"] = false;


$pages = $tdatamoh_data_sources[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_data_sources[".edit"] = true;
	$tdatamoh_data_sources[".afterEditAction"] = 1;
	$tdatamoh_data_sources[".closePopupAfterEdit"] = 1;
	$tdatamoh_data_sources[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_data_sources[".add"] = true;
$tdatamoh_data_sources[".afterAddAction"] = 1;
$tdatamoh_data_sources[".closePopupAfterAdd"] = 1;
$tdatamoh_data_sources[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_data_sources[".list"] = true;
}



$tdatamoh_data_sources[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_data_sources[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_data_sources[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_data_sources[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_data_sources[".printFriendly"] = true;
}



$tdatamoh_data_sources[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_data_sources[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_data_sources[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_data_sources[".isUseAjaxSuggest"] = true;



			

$tdatamoh_data_sources[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_data_sources[".buttonsAdded"] = false;

$tdatamoh_data_sources[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_data_sources[".isUseTimeForSearch"] = false;


$tdatamoh_data_sources[".badgeColor"] = "CD853F";


$tdatamoh_data_sources[".allSearchFields"] = array();
$tdatamoh_data_sources[".filterFields"] = array();
$tdatamoh_data_sources[".requiredSearchFields"] = array();

$tdatamoh_data_sources[".googleLikeFields"] = array();
$tdatamoh_data_sources[".googleLikeFields"][] = "data_source_id";
$tdatamoh_data_sources[".googleLikeFields"][] = "data_source_name";
$tdatamoh_data_sources[".googleLikeFields"][] = "indicator_id";



$tdatamoh_data_sources[".tableType"] = "list";

$tdatamoh_data_sources[".printerPageOrientation"] = 0;
$tdatamoh_data_sources[".nPrinterPageScale"] = 100;

$tdatamoh_data_sources[".nPrinterSplitRecords"] = 40;

$tdatamoh_data_sources[".geocodingEnabled"] = false;










$tdatamoh_data_sources[".pageSize"] = 20;

$tdatamoh_data_sources[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_data_sources[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_data_sources[".orderindexes"] = array();


$tdatamoh_data_sources[".sqlHead"] = "SELECT data_source_id,  	data_source_name,  	indicator_id";
$tdatamoh_data_sources[".sqlFrom"] = "FROM \"public\".moh_data_sources";
$tdatamoh_data_sources[".sqlWhereExpr"] = "";
$tdatamoh_data_sources[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_data_sources[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_data_sources[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_data_sources[".highlightSearchResults"] = true;

$tableKeysmoh_data_sources = array();
$tableKeysmoh_data_sources[] = "data_source_id";
$tdatamoh_data_sources[".Keys"] = $tableKeysmoh_data_sources;


$tdatamoh_data_sources[".hideMobileList"] = array();




//	data_source_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "data_source_id";
	$fdata["GoodName"] = "data_source_id";
	$fdata["ownerTable"] = "public.moh_data_sources";
	$fdata["Label"] = GetFieldLabel("public_moh_data_sources","data_source_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "data_source_id";

		$fdata["sourceSingle"] = "data_source_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_source_id";

	
	
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


	$tdatamoh_data_sources["data_source_id"] = $fdata;
		$tdatamoh_data_sources[".searchableFields"][] = "data_source_id";
//	data_source_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data_source_name";
	$fdata["GoodName"] = "data_source_name";
	$fdata["ownerTable"] = "public.moh_data_sources";
	$fdata["Label"] = GetFieldLabel("public_moh_data_sources","data_source_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "data_source_name";

		$fdata["sourceSingle"] = "data_source_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_source_name";

	
	
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


	$tdatamoh_data_sources["data_source_name"] = $fdata;
		$tdatamoh_data_sources[".searchableFields"][] = "data_source_name";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "public.moh_data_sources";
	$fdata["Label"] = GetFieldLabel("public_moh_data_sources","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_id";

	
	
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


	$tdatamoh_data_sources["indicator_id"] = $fdata;
		$tdatamoh_data_sources[".searchableFields"][] = "indicator_id";


$tables_data["public.moh_data_sources"]=&$tdatamoh_data_sources;
$field_labels["public_moh_data_sources"] = &$fieldLabelsmoh_data_sources;
$fieldToolTips["public_moh_data_sources"] = &$fieldToolTipsmoh_data_sources;
$placeHolders["public_moh_data_sources"] = &$placeHoldersmoh_data_sources;
$page_titles["public_moh_data_sources"] = &$pageTitlesmoh_data_sources;


changeTextControlsToDate( "public.moh_data_sources" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_data_sources"] = array();
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


		
	$detailsTablesData["public.moh_data_sources"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_data_sources"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_data_sources"][$dIndex]["masterKeys"][]="data_source_id";

				$detailsTablesData["public.moh_data_sources"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_data_sources"][$dIndex]["detailKeys"][]="data_source_id";
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


		
	$detailsTablesData["public.moh_data_sources"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_data_sources"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_data_sources"][$dIndex]["masterKeys"][]="data_source_id";

				$detailsTablesData["public.moh_data_sources"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_data_sources"][$dIndex]["detailKeys"][]="data_source_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_data_sources"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_data_sources()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "data_source_id,  	data_source_name,  	indicator_id";
$proto0["m_strFrom"] = "FROM \"public\".moh_data_sources";
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
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_data_sources",
	"m_srcTableName" => "public.moh_data_sources"
));

$proto6["m_sql"] = "data_source_id";
$proto6["m_srcTableName"] = "public.moh_data_sources";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_name",
	"m_strTable" => "public.moh_data_sources",
	"m_srcTableName" => "public.moh_data_sources"
));

$proto8["m_sql"] = "data_source_name";
$proto8["m_srcTableName"] = "public.moh_data_sources";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "public.moh_data_sources",
	"m_srcTableName" => "public.moh_data_sources"
));

$proto10["m_sql"] = "indicator_id";
$proto10["m_srcTableName"] = "public.moh_data_sources";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.moh_data_sources";
$proto13["m_srcTableName"] = "public.moh_data_sources";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "data_source_id";
$proto13["m_columns"][] = "data_source_name";
$proto13["m_columns"][] = "indicator_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".moh_data_sources";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.moh_data_sources";
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
$proto0["m_srcTableName"]="public.moh_data_sources";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_data_sources = createSqlQuery_moh_data_sources();


	
																												;

			

$tdatamoh_data_sources[".sqlquery"] = $queryData_moh_data_sources;



$tdatamoh_data_sources[".hasEvents"] = false;

?>