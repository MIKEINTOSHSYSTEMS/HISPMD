<?php
$tdatamoh_indicator_groups = array();
$tdatamoh_indicator_groups[".searchableFields"] = array();
$tdatamoh_indicator_groups[".ShortName"] = "moh_indicator_groups";
$tdatamoh_indicator_groups[".OwnerID"] = "";
$tdatamoh_indicator_groups[".OriginalTable"] = "public.moh_indicator_groups";


$tdatamoh_indicator_groups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_indicator_groups[".originalPagesByType"] = $tdatamoh_indicator_groups[".pagesByType"];
$tdatamoh_indicator_groups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_indicator_groups[".originalPages"] = $tdatamoh_indicator_groups[".pages"];
$tdatamoh_indicator_groups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_indicator_groups[".originalDefaultPages"] = $tdatamoh_indicator_groups[".defaultPages"];

//	field labels
$fieldLabelsmoh_indicator_groups = array();
$fieldToolTipsmoh_indicator_groups = array();
$pageTitlesmoh_indicator_groups = array();
$placeHoldersmoh_indicator_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_indicator_groups["English"] = array();
	$fieldToolTipsmoh_indicator_groups["English"] = array();
	$placeHoldersmoh_indicator_groups["English"] = array();
	$pageTitlesmoh_indicator_groups["English"] = array();
	$fieldLabelsmoh_indicator_groups["English"]["indicator_group_id"] = "Indicator Group Id";
	$fieldToolTipsmoh_indicator_groups["English"]["indicator_group_id"] = "";
	$placeHoldersmoh_indicator_groups["English"]["indicator_group_id"] = "";
	$fieldLabelsmoh_indicator_groups["English"]["indicator_group_name"] = "Indicator Group Name";
	$fieldToolTipsmoh_indicator_groups["English"]["indicator_group_name"] = "";
	$placeHoldersmoh_indicator_groups["English"]["indicator_group_name"] = "";
	if (count($fieldToolTipsmoh_indicator_groups["English"]))
		$tdatamoh_indicator_groups[".isUseToolTips"] = true;
}


	$tdatamoh_indicator_groups[".NCSearch"] = true;



$tdatamoh_indicator_groups[".shortTableName"] = "moh_indicator_groups";
$tdatamoh_indicator_groups[".nSecOptions"] = 0;

$tdatamoh_indicator_groups[".mainTableOwnerID"] = "";
$tdatamoh_indicator_groups[".entityType"] = 0;
$tdatamoh_indicator_groups[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_indicator_groups[".strOriginalTableName"] = "public.moh_indicator_groups";

	



$tdatamoh_indicator_groups[".showAddInPopup"] = false;

$tdatamoh_indicator_groups[".showEditInPopup"] = false;

$tdatamoh_indicator_groups[".showViewInPopup"] = false;

$tdatamoh_indicator_groups[".listAjax"] = false;
//	temporary
//$tdatamoh_indicator_groups[".listAjax"] = false;

	$tdatamoh_indicator_groups[".audit"] = true;

	$tdatamoh_indicator_groups[".locking"] = false;


$pages = $tdatamoh_indicator_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_indicator_groups[".edit"] = true;
	$tdatamoh_indicator_groups[".afterEditAction"] = 1;
	$tdatamoh_indicator_groups[".closePopupAfterEdit"] = 1;
	$tdatamoh_indicator_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_indicator_groups[".add"] = true;
$tdatamoh_indicator_groups[".afterAddAction"] = 1;
$tdatamoh_indicator_groups[".closePopupAfterAdd"] = 1;
$tdatamoh_indicator_groups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_indicator_groups[".list"] = true;
}



$tdatamoh_indicator_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_indicator_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_indicator_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_indicator_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_indicator_groups[".printFriendly"] = true;
}



$tdatamoh_indicator_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_indicator_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_indicator_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_indicator_groups[".isUseAjaxSuggest"] = true;



			

$tdatamoh_indicator_groups[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_indicator_groups[".buttonsAdded"] = false;

$tdatamoh_indicator_groups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_indicator_groups[".isUseTimeForSearch"] = false;


$tdatamoh_indicator_groups[".badgeColor"] = "00C2C5";


$tdatamoh_indicator_groups[".allSearchFields"] = array();
$tdatamoh_indicator_groups[".filterFields"] = array();
$tdatamoh_indicator_groups[".requiredSearchFields"] = array();

$tdatamoh_indicator_groups[".googleLikeFields"] = array();
$tdatamoh_indicator_groups[".googleLikeFields"][] = "indicator_group_id";
$tdatamoh_indicator_groups[".googleLikeFields"][] = "indicator_group_name";



$tdatamoh_indicator_groups[".tableType"] = "list";

$tdatamoh_indicator_groups[".printerPageOrientation"] = 0;
$tdatamoh_indicator_groups[".nPrinterPageScale"] = 100;

$tdatamoh_indicator_groups[".nPrinterSplitRecords"] = 40;

$tdatamoh_indicator_groups[".geocodingEnabled"] = false;










$tdatamoh_indicator_groups[".pageSize"] = 20;

$tdatamoh_indicator_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_indicator_groups[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_indicator_groups[".orderindexes"] = array();


$tdatamoh_indicator_groups[".sqlHead"] = "SELECT indicator_group_id,  	indicator_group_name";
$tdatamoh_indicator_groups[".sqlFrom"] = "FROM \"public\".moh_indicator_groups";
$tdatamoh_indicator_groups[".sqlWhereExpr"] = "";
$tdatamoh_indicator_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_indicator_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_indicator_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_indicator_groups[".highlightSearchResults"] = true;

$tableKeysmoh_indicator_groups = array();
$tableKeysmoh_indicator_groups[] = "indicator_group_id";
$tdatamoh_indicator_groups[".Keys"] = $tableKeysmoh_indicator_groups;


$tdatamoh_indicator_groups[".hideMobileList"] = array();




//	indicator_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_group_id";
	$fdata["GoodName"] = "indicator_group_id";
	$fdata["ownerTable"] = "public.moh_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_groups","indicator_group_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_group_id";

		$fdata["sourceSingle"] = "indicator_group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_id";

	
	
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


	$tdatamoh_indicator_groups["indicator_group_id"] = $fdata;
		$tdatamoh_indicator_groups[".searchableFields"][] = "indicator_group_id";
//	indicator_group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_group_name";
	$fdata["GoodName"] = "indicator_group_name";
	$fdata["ownerTable"] = "public.moh_indicator_groups";
	$fdata["Label"] = GetFieldLabel("public_moh_indicator_groups","indicator_group_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "indicator_group_name";

		$fdata["sourceSingle"] = "indicator_group_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "indicator_group_name";

	
	
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


	$tdatamoh_indicator_groups["indicator_group_name"] = $fdata;
		$tdatamoh_indicator_groups[".searchableFields"][] = "indicator_group_name";


$tables_data["public.moh_indicator_groups"]=&$tdatamoh_indicator_groups;
$field_labels["public_moh_indicator_groups"] = &$fieldLabelsmoh_indicator_groups;
$fieldToolTips["public_moh_indicator_groups"] = &$fieldToolTipsmoh_indicator_groups;
$placeHolders["public_moh_indicator_groups"] = &$placeHoldersmoh_indicator_groups;
$page_titles["public_moh_indicator_groups"] = &$pageTitlesmoh_indicator_groups;


changeTextControlsToDate( "public.moh_indicator_groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_indicator_groups"] = array();
//	public.moh_indicators
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicators";
		$detailsParam["dOriginalTable"] = "public.moh_indicators";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicators";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicators");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_indicator_groups"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_indicator_groups"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_indicator_groups"][$dIndex]["masterKeys"][]="indicator_group_id";

				$detailsTablesData["public.moh_indicator_groups"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_indicator_groups"][$dIndex]["detailKeys"][]="indicator_group_id";
//	public.moh_indicator_data
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicator_data";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicator_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicator_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_indicator_groups"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_indicator_groups"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_indicator_groups"][$dIndex]["masterKeys"][]="indicator_group_id";

				$detailsTablesData["public.moh_indicator_groups"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_indicator_groups"][$dIndex]["detailKeys"][]="indicator_group_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_indicator_groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_indicator_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_group_id,  	indicator_group_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_indicator_groups";
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
	"m_strName" => "indicator_group_id",
	"m_strTable" => "public.moh_indicator_groups",
	"m_srcTableName" => "public.moh_indicator_groups"
));

$proto6["m_sql"] = "indicator_group_id";
$proto6["m_srcTableName"] = "public.moh_indicator_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_group_name",
	"m_strTable" => "public.moh_indicator_groups",
	"m_srcTableName" => "public.moh_indicator_groups"
));

$proto8["m_sql"] = "indicator_group_name";
$proto8["m_srcTableName"] = "public.moh_indicator_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_indicator_groups";
$proto11["m_srcTableName"] = "public.moh_indicator_groups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "indicator_group_id";
$proto11["m_columns"][] = "indicator_group_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_indicator_groups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_indicator_groups";
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
$proto0["m_srcTableName"]="public.moh_indicator_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_indicator_groups = createSqlQuery_moh_indicator_groups();


	
																												;

		

$tdatamoh_indicator_groups[".sqlquery"] = $queryData_moh_indicator_groups;



$tdatamoh_indicator_groups[".hasEvents"] = false;

?>