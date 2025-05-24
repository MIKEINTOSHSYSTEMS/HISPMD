<?php
$tdatamoh_months = array();
$tdatamoh_months[".searchableFields"] = array();
$tdatamoh_months[".ShortName"] = "moh_months";
$tdatamoh_months[".OwnerID"] = "";
$tdatamoh_months[".OriginalTable"] = "public.moh_months";


$tdatamoh_months[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_months[".originalPagesByType"] = $tdatamoh_months[".pagesByType"];
$tdatamoh_months[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_months[".originalPages"] = $tdatamoh_months[".pages"];
$tdatamoh_months[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_months[".originalDefaultPages"] = $tdatamoh_months[".defaultPages"];

//	field labels
$fieldLabelsmoh_months = array();
$fieldToolTipsmoh_months = array();
$pageTitlesmoh_months = array();
$placeHoldersmoh_months = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_months["English"] = array();
	$fieldToolTipsmoh_months["English"] = array();
	$placeHoldersmoh_months["English"] = array();
	$pageTitlesmoh_months["English"] = array();
	$fieldLabelsmoh_months["English"]["month_id"] = "Month Id";
	$fieldToolTipsmoh_months["English"]["month_id"] = "";
	$placeHoldersmoh_months["English"]["month_id"] = "";
	$fieldLabelsmoh_months["English"]["month"] = "Month";
	$fieldToolTipsmoh_months["English"]["month"] = "";
	$placeHoldersmoh_months["English"]["month"] = "";
	if (count($fieldToolTipsmoh_months["English"]))
		$tdatamoh_months[".isUseToolTips"] = true;
}


	$tdatamoh_months[".NCSearch"] = true;



$tdatamoh_months[".shortTableName"] = "moh_months";
$tdatamoh_months[".nSecOptions"] = 0;

$tdatamoh_months[".mainTableOwnerID"] = "";
$tdatamoh_months[".entityType"] = 0;
$tdatamoh_months[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_months[".strOriginalTableName"] = "public.moh_months";

	



$tdatamoh_months[".showAddInPopup"] = false;

$tdatamoh_months[".showEditInPopup"] = false;

$tdatamoh_months[".showViewInPopup"] = false;

$tdatamoh_months[".listAjax"] = false;
//	temporary
//$tdatamoh_months[".listAjax"] = false;

	$tdatamoh_months[".audit"] = false;

	$tdatamoh_months[".locking"] = false;


$pages = $tdatamoh_months[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_months[".edit"] = true;
	$tdatamoh_months[".afterEditAction"] = 1;
	$tdatamoh_months[".closePopupAfterEdit"] = 1;
	$tdatamoh_months[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_months[".add"] = true;
$tdatamoh_months[".afterAddAction"] = 1;
$tdatamoh_months[".closePopupAfterAdd"] = 1;
$tdatamoh_months[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_months[".list"] = true;
}



$tdatamoh_months[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_months[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_months[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_months[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_months[".printFriendly"] = true;
}



$tdatamoh_months[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_months[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_months[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_months[".isUseAjaxSuggest"] = true;



			

$tdatamoh_months[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_months[".buttonsAdded"] = false;

$tdatamoh_months[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_months[".isUseTimeForSearch"] = false;


$tdatamoh_months[".badgeColor"] = "1E90FF";


$tdatamoh_months[".allSearchFields"] = array();
$tdatamoh_months[".filterFields"] = array();
$tdatamoh_months[".requiredSearchFields"] = array();

$tdatamoh_months[".googleLikeFields"] = array();
$tdatamoh_months[".googleLikeFields"][] = "month_id";
$tdatamoh_months[".googleLikeFields"][] = "month";



$tdatamoh_months[".tableType"] = "list";

$tdatamoh_months[".printerPageOrientation"] = 0;
$tdatamoh_months[".nPrinterPageScale"] = 100;

$tdatamoh_months[".nPrinterSplitRecords"] = 40;

$tdatamoh_months[".geocodingEnabled"] = false;




$tdatamoh_months[".isDisplayLoading"] = true;


$tdatamoh_months[".searchIsRequiredForFilters"] = true;




$tdatamoh_months[".pageSize"] = 20;

$tdatamoh_months[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_months[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_months[".orderindexes"] = array();


$tdatamoh_months[".sqlHead"] = "SELECT month_id,  	\"month\"";
$tdatamoh_months[".sqlFrom"] = "FROM \"public\".moh_months";
$tdatamoh_months[".sqlWhereExpr"] = "";
$tdatamoh_months[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_months[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_months[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_months[".highlightSearchResults"] = true;

$tableKeysmoh_months = array();
$tableKeysmoh_months[] = "month_id";
$tdatamoh_months[".Keys"] = $tableKeysmoh_months;


$tdatamoh_months[".hideMobileList"] = array();




//	month_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "month_id";
	$fdata["GoodName"] = "month_id";
	$fdata["ownerTable"] = "public.moh_months";
	$fdata["Label"] = GetFieldLabel("public_moh_months","month_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "month_id";

		$fdata["sourceSingle"] = "month_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "month_id";

	
	
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


	$tdatamoh_months["month_id"] = $fdata;
		$tdatamoh_months[".searchableFields"][] = "month_id";
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "public.moh_months";
	$fdata["Label"] = GetFieldLabel("public_moh_months","month");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "month";

		$fdata["sourceSingle"] = "month";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"month\"";

	
	
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


	$tdatamoh_months["month"] = $fdata;
		$tdatamoh_months[".searchableFields"][] = "month";


$tables_data["public.moh_months"]=&$tdatamoh_months;
$field_labels["public_moh_months"] = &$fieldLabelsmoh_months;
$fieldToolTips["public_moh_months"] = &$fieldToolTipsmoh_months;
$placeHolders["public_moh_months"] = &$placeHoldersmoh_months;
$page_titles["public_moh_months"] = &$pageTitlesmoh_months;


changeTextControlsToDate( "public.moh_months" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_months"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_months"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_months()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "month_id,  	\"month\"";
$proto0["m_strFrom"] = "FROM \"public\".moh_months";
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
	"m_strName" => "month_id",
	"m_strTable" => "public.moh_months",
	"m_srcTableName" => "public.moh_months"
));

$proto6["m_sql"] = "month_id";
$proto6["m_srcTableName"] = "public.moh_months";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "month",
	"m_strTable" => "public.moh_months",
	"m_srcTableName" => "public.moh_months"
));

$proto8["m_sql"] = "\"month\"";
$proto8["m_srcTableName"] = "public.moh_months";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_months";
$proto11["m_srcTableName"] = "public.moh_months";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "month_id";
$proto11["m_columns"][] = "month";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_months";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_months";
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
$proto0["m_srcTableName"]="public.moh_months";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_months = createSqlQuery_moh_months();


	
																												;

		

$tdatamoh_months[".sqlquery"] = $queryData_moh_months;



$tdatamoh_months[".hasEvents"] = false;

?>