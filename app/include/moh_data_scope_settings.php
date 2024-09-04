<?php
$tdatamoh_data_scope = array();
$tdatamoh_data_scope[".searchableFields"] = array();
$tdatamoh_data_scope[".ShortName"] = "moh_data_scope";
$tdatamoh_data_scope[".OwnerID"] = "";
$tdatamoh_data_scope[".OriginalTable"] = "public.moh_data_scope";


$tdatamoh_data_scope[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_data_scope[".originalPagesByType"] = $tdatamoh_data_scope[".pagesByType"];
$tdatamoh_data_scope[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_data_scope[".originalPages"] = $tdatamoh_data_scope[".pages"];
$tdatamoh_data_scope[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_data_scope[".originalDefaultPages"] = $tdatamoh_data_scope[".defaultPages"];

//	field labels
$fieldLabelsmoh_data_scope = array();
$fieldToolTipsmoh_data_scope = array();
$pageTitlesmoh_data_scope = array();
$placeHoldersmoh_data_scope = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_data_scope["English"] = array();
	$fieldToolTipsmoh_data_scope["English"] = array();
	$placeHoldersmoh_data_scope["English"] = array();
	$pageTitlesmoh_data_scope["English"] = array();
	$fieldLabelsmoh_data_scope["English"]["scope_id"] = "Scope Id";
	$fieldToolTipsmoh_data_scope["English"]["scope_id"] = "";
	$placeHoldersmoh_data_scope["English"]["scope_id"] = "";
	$fieldLabelsmoh_data_scope["English"]["scope_name"] = "Scope Name";
	$fieldToolTipsmoh_data_scope["English"]["scope_name"] = "";
	$placeHoldersmoh_data_scope["English"]["scope_name"] = "";
	if (count($fieldToolTipsmoh_data_scope["English"]))
		$tdatamoh_data_scope[".isUseToolTips"] = true;
}


	$tdatamoh_data_scope[".NCSearch"] = true;



$tdatamoh_data_scope[".shortTableName"] = "moh_data_scope";
$tdatamoh_data_scope[".nSecOptions"] = 0;

$tdatamoh_data_scope[".mainTableOwnerID"] = "";
$tdatamoh_data_scope[".entityType"] = 0;
$tdatamoh_data_scope[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_data_scope[".strOriginalTableName"] = "public.moh_data_scope";

	



$tdatamoh_data_scope[".showAddInPopup"] = false;

$tdatamoh_data_scope[".showEditInPopup"] = false;

$tdatamoh_data_scope[".showViewInPopup"] = false;

$tdatamoh_data_scope[".listAjax"] = false;
//	temporary
//$tdatamoh_data_scope[".listAjax"] = false;

	$tdatamoh_data_scope[".audit"] = false;

	$tdatamoh_data_scope[".locking"] = false;


$pages = $tdatamoh_data_scope[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_data_scope[".edit"] = true;
	$tdatamoh_data_scope[".afterEditAction"] = 1;
	$tdatamoh_data_scope[".closePopupAfterEdit"] = 1;
	$tdatamoh_data_scope[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_data_scope[".add"] = true;
$tdatamoh_data_scope[".afterAddAction"] = 1;
$tdatamoh_data_scope[".closePopupAfterAdd"] = 1;
$tdatamoh_data_scope[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_data_scope[".list"] = true;
}



$tdatamoh_data_scope[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_data_scope[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_data_scope[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_data_scope[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_data_scope[".printFriendly"] = true;
}



$tdatamoh_data_scope[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_data_scope[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_data_scope[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_data_scope[".isUseAjaxSuggest"] = true;





$tdatamoh_data_scope[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_data_scope[".buttonsAdded"] = false;

$tdatamoh_data_scope[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_data_scope[".isUseTimeForSearch"] = false;


$tdatamoh_data_scope[".badgeColor"] = "D2691E";


$tdatamoh_data_scope[".allSearchFields"] = array();
$tdatamoh_data_scope[".filterFields"] = array();
$tdatamoh_data_scope[".requiredSearchFields"] = array();

$tdatamoh_data_scope[".googleLikeFields"] = array();
$tdatamoh_data_scope[".googleLikeFields"][] = "scope_id";
$tdatamoh_data_scope[".googleLikeFields"][] = "scope_name";



$tdatamoh_data_scope[".tableType"] = "list";

$tdatamoh_data_scope[".printerPageOrientation"] = 0;
$tdatamoh_data_scope[".nPrinterPageScale"] = 100;

$tdatamoh_data_scope[".nPrinterSplitRecords"] = 40;

$tdatamoh_data_scope[".geocodingEnabled"] = false;










$tdatamoh_data_scope[".pageSize"] = 20;

$tdatamoh_data_scope[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_data_scope[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_data_scope[".orderindexes"] = array();


$tdatamoh_data_scope[".sqlHead"] = "SELECT scope_id,  	scope_name";
$tdatamoh_data_scope[".sqlFrom"] = "FROM \"public\".moh_data_scope";
$tdatamoh_data_scope[".sqlWhereExpr"] = "";
$tdatamoh_data_scope[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_data_scope[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_data_scope[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_data_scope[".highlightSearchResults"] = true;

$tableKeysmoh_data_scope = array();
$tableKeysmoh_data_scope[] = "scope_id";
$tdatamoh_data_scope[".Keys"] = $tableKeysmoh_data_scope;


$tdatamoh_data_scope[".hideMobileList"] = array();




//	scope_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "scope_id";
	$fdata["GoodName"] = "scope_id";
	$fdata["ownerTable"] = "public.moh_data_scope";
	$fdata["Label"] = GetFieldLabel("public_moh_data_scope","scope_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "scope_id";

		$fdata["sourceSingle"] = "scope_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scope_id";

	
	
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


	$tdatamoh_data_scope["scope_id"] = $fdata;
		$tdatamoh_data_scope[".searchableFields"][] = "scope_id";
//	scope_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "scope_name";
	$fdata["GoodName"] = "scope_name";
	$fdata["ownerTable"] = "public.moh_data_scope";
	$fdata["Label"] = GetFieldLabel("public_moh_data_scope","scope_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "scope_name";

		$fdata["sourceSingle"] = "scope_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scope_name";

	
	
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


	$tdatamoh_data_scope["scope_name"] = $fdata;
		$tdatamoh_data_scope[".searchableFields"][] = "scope_name";


$tables_data["public.moh_data_scope"]=&$tdatamoh_data_scope;
$field_labels["public_moh_data_scope"] = &$fieldLabelsmoh_data_scope;
$fieldToolTips["public_moh_data_scope"] = &$fieldToolTipsmoh_data_scope;
$placeHolders["public_moh_data_scope"] = &$placeHoldersmoh_data_scope;
$page_titles["public_moh_data_scope"] = &$pageTitlesmoh_data_scope;


changeTextControlsToDate( "public.moh_data_scope" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_data_scope"] = array();
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


		
	$detailsTablesData["public.moh_data_scope"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_data_scope"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_data_scope"][$dIndex]["masterKeys"][]="scope_id";

				$detailsTablesData["public.moh_data_scope"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_data_scope"][$dIndex]["detailKeys"][]="scope_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_data_scope"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_data_scope()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "scope_id,  	scope_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_data_scope";
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
	"m_strName" => "scope_id",
	"m_strTable" => "public.moh_data_scope",
	"m_srcTableName" => "public.moh_data_scope"
));

$proto6["m_sql"] = "scope_id";
$proto6["m_srcTableName"] = "public.moh_data_scope";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "scope_name",
	"m_strTable" => "public.moh_data_scope",
	"m_srcTableName" => "public.moh_data_scope"
));

$proto8["m_sql"] = "scope_name";
$proto8["m_srcTableName"] = "public.moh_data_scope";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_data_scope";
$proto11["m_srcTableName"] = "public.moh_data_scope";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "scope_id";
$proto11["m_columns"][] = "scope_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_data_scope";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_data_scope";
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
$proto0["m_srcTableName"]="public.moh_data_scope";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_data_scope = createSqlQuery_moh_data_scope();


	
																												;

		

$tdatamoh_data_scope[".sqlquery"] = $queryData_moh_data_scope;



$tdatamoh_data_scope[".hasEvents"] = false;

?>