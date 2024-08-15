<?php
$tdatahisgovernance = array();
$tdatahisgovernance[".searchableFields"] = array();
$tdatahisgovernance[".ShortName"] = "hisgovernance";
$tdatahisgovernance[".OwnerID"] = "";
$tdatahisgovernance[".OriginalTable"] = "public.hisgovernance";


$tdatahisgovernance[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahisgovernance[".originalPagesByType"] = $tdatahisgovernance[".pagesByType"];
$tdatahisgovernance[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahisgovernance[".originalPages"] = $tdatahisgovernance[".pages"];
$tdatahisgovernance[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahisgovernance[".originalDefaultPages"] = $tdatahisgovernance[".defaultPages"];

//	field labels
$fieldLabelshisgovernance = array();
$fieldToolTipshisgovernance = array();
$pageTitleshisgovernance = array();
$placeHoldershisgovernance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshisgovernance["English"] = array();
	$fieldToolTipshisgovernance["English"] = array();
	$placeHoldershisgovernance["English"] = array();
	$pageTitleshisgovernance["English"] = array();
	$fieldLabelshisgovernance["English"]["governance_id"] = "Governance Id";
	$fieldToolTipshisgovernance["English"]["governance_id"] = "";
	$placeHoldershisgovernance["English"]["governance_id"] = "";
	$fieldLabelshisgovernance["English"]["level"] = "Level";
	$fieldToolTipshisgovernance["English"]["level"] = "";
	$placeHoldershisgovernance["English"]["level"] = "";
	$fieldLabelshisgovernance["English"]["is_functional"] = "Is Functional";
	$fieldToolTipshisgovernance["English"]["is_functional"] = "";
	$placeHoldershisgovernance["English"]["is_functional"] = "";
	if (count($fieldToolTipshisgovernance["English"]))
		$tdatahisgovernance[".isUseToolTips"] = true;
}


	$tdatahisgovernance[".NCSearch"] = true;



$tdatahisgovernance[".shortTableName"] = "hisgovernance";
$tdatahisgovernance[".nSecOptions"] = 0;

$tdatahisgovernance[".mainTableOwnerID"] = "";
$tdatahisgovernance[".entityType"] = 0;
$tdatahisgovernance[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahisgovernance[".strOriginalTableName"] = "public.hisgovernance";

	



$tdatahisgovernance[".showAddInPopup"] = false;

$tdatahisgovernance[".showEditInPopup"] = false;

$tdatahisgovernance[".showViewInPopup"] = false;

$tdatahisgovernance[".listAjax"] = false;
//	temporary
//$tdatahisgovernance[".listAjax"] = false;

	$tdatahisgovernance[".audit"] = false;

	$tdatahisgovernance[".locking"] = false;


$pages = $tdatahisgovernance[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahisgovernance[".edit"] = true;
	$tdatahisgovernance[".afterEditAction"] = 1;
	$tdatahisgovernance[".closePopupAfterEdit"] = 1;
	$tdatahisgovernance[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahisgovernance[".add"] = true;
$tdatahisgovernance[".afterAddAction"] = 1;
$tdatahisgovernance[".closePopupAfterAdd"] = 1;
$tdatahisgovernance[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahisgovernance[".list"] = true;
}



$tdatahisgovernance[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahisgovernance[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahisgovernance[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahisgovernance[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahisgovernance[".printFriendly"] = true;
}



$tdatahisgovernance[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahisgovernance[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahisgovernance[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahisgovernance[".isUseAjaxSuggest"] = true;





$tdatahisgovernance[".ajaxCodeSnippetAdded"] = false;

$tdatahisgovernance[".buttonsAdded"] = false;

$tdatahisgovernance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahisgovernance[".isUseTimeForSearch"] = false;


$tdatahisgovernance[".badgeColor"] = "CD853F";


$tdatahisgovernance[".allSearchFields"] = array();
$tdatahisgovernance[".filterFields"] = array();
$tdatahisgovernance[".requiredSearchFields"] = array();

$tdatahisgovernance[".googleLikeFields"] = array();
$tdatahisgovernance[".googleLikeFields"][] = "governance_id";
$tdatahisgovernance[".googleLikeFields"][] = "level";
$tdatahisgovernance[".googleLikeFields"][] = "is_functional";



$tdatahisgovernance[".tableType"] = "list";

$tdatahisgovernance[".printerPageOrientation"] = 0;
$tdatahisgovernance[".nPrinterPageScale"] = 100;

$tdatahisgovernance[".nPrinterSplitRecords"] = 40;

$tdatahisgovernance[".geocodingEnabled"] = false;










$tdatahisgovernance[".pageSize"] = 20;

$tdatahisgovernance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahisgovernance[".strOrderBy"] = $tstrOrderBy;

$tdatahisgovernance[".orderindexes"] = array();


$tdatahisgovernance[".sqlHead"] = "SELECT governance_id,  	\"level\",  	is_functional";
$tdatahisgovernance[".sqlFrom"] = "FROM \"public\".hisgovernance";
$tdatahisgovernance[".sqlWhereExpr"] = "";
$tdatahisgovernance[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahisgovernance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahisgovernance[".arrGroupsPerPage"] = $arrGPP;

$tdatahisgovernance[".highlightSearchResults"] = true;

$tableKeyshisgovernance = array();
$tableKeyshisgovernance[] = "governance_id";
$tdatahisgovernance[".Keys"] = $tableKeyshisgovernance;


$tdatahisgovernance[".hideMobileList"] = array();




//	governance_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "governance_id";
	$fdata["GoodName"] = "governance_id";
	$fdata["ownerTable"] = "public.hisgovernance";
	$fdata["Label"] = GetFieldLabel("public_hisgovernance","governance_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "governance_id";

		$fdata["sourceSingle"] = "governance_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "governance_id";

	
	
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


	$tdatahisgovernance["governance_id"] = $fdata;
		$tdatahisgovernance[".searchableFields"][] = "governance_id";
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "public.hisgovernance";
	$fdata["Label"] = GetFieldLabel("public_hisgovernance","level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "level";

		$fdata["sourceSingle"] = "level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"level\"";

	
	
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


	$tdatahisgovernance["level"] = $fdata;
		$tdatahisgovernance[".searchableFields"][] = "level";
//	is_functional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_functional";
	$fdata["GoodName"] = "is_functional";
	$fdata["ownerTable"] = "public.hisgovernance";
	$fdata["Label"] = GetFieldLabel("public_hisgovernance","is_functional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "is_functional";

		$fdata["sourceSingle"] = "is_functional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_functional";

	
	
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


	$tdatahisgovernance["is_functional"] = $fdata;
		$tdatahisgovernance[".searchableFields"][] = "is_functional";


$tables_data["public.hisgovernance"]=&$tdatahisgovernance;
$field_labels["public_hisgovernance"] = &$fieldLabelshisgovernance;
$fieldToolTips["public_hisgovernance"] = &$fieldToolTipshisgovernance;
$placeHolders["public_hisgovernance"] = &$placeHoldershisgovernance;
$page_titles["public_hisgovernance"] = &$pageTitleshisgovernance;


changeTextControlsToDate( "public.hisgovernance" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hisgovernance"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hisgovernance"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hisgovernance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "governance_id,  	\"level\",  	is_functional";
$proto0["m_strFrom"] = "FROM \"public\".hisgovernance";
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
	"m_strName" => "governance_id",
	"m_strTable" => "public.hisgovernance",
	"m_srcTableName" => "public.hisgovernance"
));

$proto6["m_sql"] = "governance_id";
$proto6["m_srcTableName"] = "public.hisgovernance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "public.hisgovernance",
	"m_srcTableName" => "public.hisgovernance"
));

$proto8["m_sql"] = "\"level\"";
$proto8["m_srcTableName"] = "public.hisgovernance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_functional",
	"m_strTable" => "public.hisgovernance",
	"m_srcTableName" => "public.hisgovernance"
));

$proto10["m_sql"] = "is_functional";
$proto10["m_srcTableName"] = "public.hisgovernance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.hisgovernance";
$proto13["m_srcTableName"] = "public.hisgovernance";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "governance_id";
$proto13["m_columns"][] = "level";
$proto13["m_columns"][] = "is_functional";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".hisgovernance";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.hisgovernance";
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
$proto0["m_srcTableName"]="public.hisgovernance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hisgovernance = createSqlQuery_hisgovernance();


	
																												;

			

$tdatahisgovernance[".sqlquery"] = $queryData_hisgovernance;



$tdatahisgovernance[".hasEvents"] = false;

?>