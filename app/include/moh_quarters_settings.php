<?php
$tdatamoh_quarters = array();
$tdatamoh_quarters[".searchableFields"] = array();
$tdatamoh_quarters[".ShortName"] = "moh_quarters";
$tdatamoh_quarters[".OwnerID"] = "";
$tdatamoh_quarters[".OriginalTable"] = "public.moh_quarters";


$tdatamoh_quarters[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_quarters[".originalPagesByType"] = $tdatamoh_quarters[".pagesByType"];
$tdatamoh_quarters[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_quarters[".originalPages"] = $tdatamoh_quarters[".pages"];
$tdatamoh_quarters[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_quarters[".originalDefaultPages"] = $tdatamoh_quarters[".defaultPages"];

//	field labels
$fieldLabelsmoh_quarters = array();
$fieldToolTipsmoh_quarters = array();
$pageTitlesmoh_quarters = array();
$placeHoldersmoh_quarters = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_quarters["English"] = array();
	$fieldToolTipsmoh_quarters["English"] = array();
	$placeHoldersmoh_quarters["English"] = array();
	$pageTitlesmoh_quarters["English"] = array();
	$fieldLabelsmoh_quarters["English"]["quarter_id"] = "Quarter Id";
	$fieldToolTipsmoh_quarters["English"]["quarter_id"] = "";
	$placeHoldersmoh_quarters["English"]["quarter_id"] = "";
	$fieldLabelsmoh_quarters["English"]["quarter"] = "Quarter";
	$fieldToolTipsmoh_quarters["English"]["quarter"] = "";
	$placeHoldersmoh_quarters["English"]["quarter"] = "";
	if (count($fieldToolTipsmoh_quarters["English"]))
		$tdatamoh_quarters[".isUseToolTips"] = true;
}


	$tdatamoh_quarters[".NCSearch"] = true;



$tdatamoh_quarters[".shortTableName"] = "moh_quarters";
$tdatamoh_quarters[".nSecOptions"] = 0;

$tdatamoh_quarters[".mainTableOwnerID"] = "";
$tdatamoh_quarters[".entityType"] = 0;
$tdatamoh_quarters[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_quarters[".strOriginalTableName"] = "public.moh_quarters";

	



$tdatamoh_quarters[".showAddInPopup"] = false;

$tdatamoh_quarters[".showEditInPopup"] = false;

$tdatamoh_quarters[".showViewInPopup"] = false;

$tdatamoh_quarters[".listAjax"] = false;
//	temporary
//$tdatamoh_quarters[".listAjax"] = false;

	$tdatamoh_quarters[".audit"] = false;

	$tdatamoh_quarters[".locking"] = false;


$pages = $tdatamoh_quarters[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_quarters[".edit"] = true;
	$tdatamoh_quarters[".afterEditAction"] = 1;
	$tdatamoh_quarters[".closePopupAfterEdit"] = 1;
	$tdatamoh_quarters[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_quarters[".add"] = true;
$tdatamoh_quarters[".afterAddAction"] = 1;
$tdatamoh_quarters[".closePopupAfterAdd"] = 1;
$tdatamoh_quarters[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_quarters[".list"] = true;
}



$tdatamoh_quarters[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_quarters[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_quarters[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_quarters[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_quarters[".printFriendly"] = true;
}



$tdatamoh_quarters[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_quarters[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_quarters[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_quarters[".isUseAjaxSuggest"] = true;



			

$tdatamoh_quarters[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_quarters[".buttonsAdded"] = false;

$tdatamoh_quarters[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_quarters[".isUseTimeForSearch"] = false;


$tdatamoh_quarters[".badgeColor"] = "9ACD32";


$tdatamoh_quarters[".allSearchFields"] = array();
$tdatamoh_quarters[".filterFields"] = array();
$tdatamoh_quarters[".requiredSearchFields"] = array();

$tdatamoh_quarters[".googleLikeFields"] = array();
$tdatamoh_quarters[".googleLikeFields"][] = "quarter_id";
$tdatamoh_quarters[".googleLikeFields"][] = "quarter";



$tdatamoh_quarters[".tableType"] = "list";

$tdatamoh_quarters[".printerPageOrientation"] = 0;
$tdatamoh_quarters[".nPrinterPageScale"] = 100;

$tdatamoh_quarters[".nPrinterSplitRecords"] = 40;

$tdatamoh_quarters[".geocodingEnabled"] = false;




$tdatamoh_quarters[".isDisplayLoading"] = true;


$tdatamoh_quarters[".searchIsRequiredForFilters"] = true;




$tdatamoh_quarters[".pageSize"] = 20;

$tdatamoh_quarters[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_quarters[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_quarters[".orderindexes"] = array();


$tdatamoh_quarters[".sqlHead"] = "SELECT quarter_id,  	quarter";
$tdatamoh_quarters[".sqlFrom"] = "FROM \"public\".moh_quarters";
$tdatamoh_quarters[".sqlWhereExpr"] = "";
$tdatamoh_quarters[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_quarters[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_quarters[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_quarters[".highlightSearchResults"] = true;

$tableKeysmoh_quarters = array();
$tableKeysmoh_quarters[] = "quarter_id";
$tdatamoh_quarters[".Keys"] = $tableKeysmoh_quarters;


$tdatamoh_quarters[".hideMobileList"] = array();




//	quarter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "quarter_id";
	$fdata["GoodName"] = "quarter_id";
	$fdata["ownerTable"] = "public.moh_quarters";
	$fdata["Label"] = GetFieldLabel("public_moh_quarters","quarter_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "quarter_id";

		$fdata["sourceSingle"] = "quarter_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarter_id";

	
	
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


	$tdatamoh_quarters["quarter_id"] = $fdata;
		$tdatamoh_quarters[".searchableFields"][] = "quarter_id";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "public.moh_quarters";
	$fdata["Label"] = GetFieldLabel("public_moh_quarters","quarter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "quarter";

		$fdata["sourceSingle"] = "quarter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quarter";

	
	
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


	$tdatamoh_quarters["quarter"] = $fdata;
		$tdatamoh_quarters[".searchableFields"][] = "quarter";


$tables_data["public.moh_quarters"]=&$tdatamoh_quarters;
$field_labels["public_moh_quarters"] = &$fieldLabelsmoh_quarters;
$fieldToolTips["public_moh_quarters"] = &$fieldToolTipsmoh_quarters;
$placeHolders["public_moh_quarters"] = &$placeHoldersmoh_quarters;
$page_titles["public_moh_quarters"] = &$pageTitlesmoh_quarters;


changeTextControlsToDate( "public.moh_quarters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_quarters"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_quarters"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_quarters()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "quarter_id,  	quarter";
$proto0["m_strFrom"] = "FROM \"public\".moh_quarters";
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
	"m_strName" => "quarter_id",
	"m_strTable" => "public.moh_quarters",
	"m_srcTableName" => "public.moh_quarters"
));

$proto6["m_sql"] = "quarter_id";
$proto6["m_srcTableName"] = "public.moh_quarters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter",
	"m_strTable" => "public.moh_quarters",
	"m_srcTableName" => "public.moh_quarters"
));

$proto8["m_sql"] = "quarter";
$proto8["m_srcTableName"] = "public.moh_quarters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_quarters";
$proto11["m_srcTableName"] = "public.moh_quarters";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "quarter_id";
$proto11["m_columns"][] = "quarter";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_quarters";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_quarters";
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
$proto0["m_srcTableName"]="public.moh_quarters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_quarters = createSqlQuery_moh_quarters();


	
																												;

		

$tdatamoh_quarters[".sqlquery"] = $queryData_moh_quarters;



$tdatamoh_quarters[".hasEvents"] = false;

?>