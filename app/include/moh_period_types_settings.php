<?php
$tdatamoh_period_types = array();
$tdatamoh_period_types[".searchableFields"] = array();
$tdatamoh_period_types[".ShortName"] = "moh_period_types";
$tdatamoh_period_types[".OwnerID"] = "";
$tdatamoh_period_types[".OriginalTable"] = "public.moh_period_types";


$tdatamoh_period_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_period_types[".originalPagesByType"] = $tdatamoh_period_types[".pagesByType"];
$tdatamoh_period_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_period_types[".originalPages"] = $tdatamoh_period_types[".pages"];
$tdatamoh_period_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_period_types[".originalDefaultPages"] = $tdatamoh_period_types[".defaultPages"];

//	field labels
$fieldLabelsmoh_period_types = array();
$fieldToolTipsmoh_period_types = array();
$pageTitlesmoh_period_types = array();
$placeHoldersmoh_period_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_period_types["English"] = array();
	$fieldToolTipsmoh_period_types["English"] = array();
	$placeHoldersmoh_period_types["English"] = array();
	$pageTitlesmoh_period_types["English"] = array();
	$fieldLabelsmoh_period_types["English"]["period_id"] = "Period Id";
	$fieldToolTipsmoh_period_types["English"]["period_id"] = "";
	$placeHoldersmoh_period_types["English"]["period_id"] = "";
	$fieldLabelsmoh_period_types["English"]["period_type"] = "Period Type";
	$fieldToolTipsmoh_period_types["English"]["period_type"] = "";
	$placeHoldersmoh_period_types["English"]["period_type"] = "";
	if (count($fieldToolTipsmoh_period_types["English"]))
		$tdatamoh_period_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_period_types["Amharic"] = array();
	$fieldToolTipsmoh_period_types["Amharic"] = array();
	$placeHoldersmoh_period_types["Amharic"] = array();
	$pageTitlesmoh_period_types["Amharic"] = array();
	$fieldLabelsmoh_period_types["Amharic"]["period_id"] = "Period Id";
	$fieldToolTipsmoh_period_types["Amharic"]["period_id"] = "";
	$placeHoldersmoh_period_types["Amharic"]["period_id"] = "";
	$fieldLabelsmoh_period_types["Amharic"]["period_type"] = "Period Type";
	$fieldToolTipsmoh_period_types["Amharic"]["period_type"] = "";
	$placeHoldersmoh_period_types["Amharic"]["period_type"] = "";
	if (count($fieldToolTipsmoh_period_types["Amharic"]))
		$tdatamoh_period_types[".isUseToolTips"] = true;
}


	$tdatamoh_period_types[".NCSearch"] = true;



$tdatamoh_period_types[".shortTableName"] = "moh_period_types";
$tdatamoh_period_types[".nSecOptions"] = 0;

$tdatamoh_period_types[".mainTableOwnerID"] = "";
$tdatamoh_period_types[".entityType"] = 0;
$tdatamoh_period_types[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_period_types[".strOriginalTableName"] = "public.moh_period_types";

	



$tdatamoh_period_types[".showAddInPopup"] = false;

$tdatamoh_period_types[".showEditInPopup"] = false;

$tdatamoh_period_types[".showViewInPopup"] = false;

$tdatamoh_period_types[".listAjax"] = false;
//	temporary
//$tdatamoh_period_types[".listAjax"] = false;

	$tdatamoh_period_types[".audit"] = false;

	$tdatamoh_period_types[".locking"] = false;


$pages = $tdatamoh_period_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_period_types[".edit"] = true;
	$tdatamoh_period_types[".afterEditAction"] = 1;
	$tdatamoh_period_types[".closePopupAfterEdit"] = 1;
	$tdatamoh_period_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_period_types[".add"] = true;
$tdatamoh_period_types[".afterAddAction"] = 1;
$tdatamoh_period_types[".closePopupAfterAdd"] = 1;
$tdatamoh_period_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_period_types[".list"] = true;
}



$tdatamoh_period_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_period_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_period_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_period_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_period_types[".printFriendly"] = true;
}



$tdatamoh_period_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_period_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_period_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_period_types[".isUseAjaxSuggest"] = true;



			

$tdatamoh_period_types[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_period_types[".buttonsAdded"] = false;

$tdatamoh_period_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_period_types[".isUseTimeForSearch"] = false;


$tdatamoh_period_types[".badgeColor"] = "008B8B";


$tdatamoh_period_types[".allSearchFields"] = array();
$tdatamoh_period_types[".filterFields"] = array();
$tdatamoh_period_types[".requiredSearchFields"] = array();

$tdatamoh_period_types[".googleLikeFields"] = array();
$tdatamoh_period_types[".googleLikeFields"][] = "period_id";
$tdatamoh_period_types[".googleLikeFields"][] = "period_type";



$tdatamoh_period_types[".tableType"] = "list";

$tdatamoh_period_types[".printerPageOrientation"] = 0;
$tdatamoh_period_types[".nPrinterPageScale"] = 100;

$tdatamoh_period_types[".nPrinterSplitRecords"] = 40;

$tdatamoh_period_types[".geocodingEnabled"] = false;




$tdatamoh_period_types[".isDisplayLoading"] = true;






$tdatamoh_period_types[".pageSize"] = 20;

$tdatamoh_period_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_period_types[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_period_types[".orderindexes"] = array();


$tdatamoh_period_types[".sqlHead"] = "SELECT period_id,  	period_type";
$tdatamoh_period_types[".sqlFrom"] = "FROM \"public\".moh_period_types";
$tdatamoh_period_types[".sqlWhereExpr"] = "";
$tdatamoh_period_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_period_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_period_types[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_period_types[".highlightSearchResults"] = true;

$tableKeysmoh_period_types = array();
$tableKeysmoh_period_types[] = "period_id";
$tdatamoh_period_types[".Keys"] = $tableKeysmoh_period_types;


$tdatamoh_period_types[".hideMobileList"] = array();




//	period_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "period_id";
	$fdata["GoodName"] = "period_id";
	$fdata["ownerTable"] = "public.moh_period_types";
	$fdata["Label"] = GetFieldLabel("public_moh_period_types","period_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "period_id";

		$fdata["sourceSingle"] = "period_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_id";

	
	
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


	$tdatamoh_period_types["period_id"] = $fdata;
		$tdatamoh_period_types[".searchableFields"][] = "period_id";
//	period_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "period_type";
	$fdata["GoodName"] = "period_type";
	$fdata["ownerTable"] = "public.moh_period_types";
	$fdata["Label"] = GetFieldLabel("public_moh_period_types","period_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "period_type";

		$fdata["sourceSingle"] = "period_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period_type";

	
	
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


	$tdatamoh_period_types["period_type"] = $fdata;
		$tdatamoh_period_types[".searchableFields"][] = "period_type";


$tables_data["public.moh_period_types"]=&$tdatamoh_period_types;
$field_labels["public_moh_period_types"] = &$fieldLabelsmoh_period_types;
$fieldToolTips["public_moh_period_types"] = &$fieldToolTipsmoh_period_types;
$placeHolders["public_moh_period_types"] = &$placeHoldersmoh_period_types;
$page_titles["public_moh_period_types"] = &$pageTitlesmoh_period_types;


changeTextControlsToDate( "public.moh_period_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_period_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_period_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_period_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "period_id,  	period_type";
$proto0["m_strFrom"] = "FROM \"public\".moh_period_types";
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
	"m_strName" => "period_id",
	"m_strTable" => "public.moh_period_types",
	"m_srcTableName" => "public.moh_period_types"
));

$proto6["m_sql"] = "period_id";
$proto6["m_srcTableName"] = "public.moh_period_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "period_type",
	"m_strTable" => "public.moh_period_types",
	"m_srcTableName" => "public.moh_period_types"
));

$proto8["m_sql"] = "period_type";
$proto8["m_srcTableName"] = "public.moh_period_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_period_types";
$proto11["m_srcTableName"] = "public.moh_period_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "period_id";
$proto11["m_columns"][] = "period_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_period_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_period_types";
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
$proto0["m_srcTableName"]="public.moh_period_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_period_types = createSqlQuery_moh_period_types();


	
																												;

		

$tdatamoh_period_types[".sqlquery"] = $queryData_moh_period_types;



$tdatamoh_period_types[".hasEvents"] = false;

?>