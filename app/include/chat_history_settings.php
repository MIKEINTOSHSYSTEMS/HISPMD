<?php
$tdatachat_history = array();
$tdatachat_history[".searchableFields"] = array();
$tdatachat_history[".ShortName"] = "chat_history";
$tdatachat_history[".OwnerID"] = "";
$tdatachat_history[".OriginalTable"] = "public.chat_history";


$tdatachat_history[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatachat_history[".originalPagesByType"] = $tdatachat_history[".pagesByType"];
$tdatachat_history[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatachat_history[".originalPages"] = $tdatachat_history[".pages"];
$tdatachat_history[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatachat_history[".originalDefaultPages"] = $tdatachat_history[".defaultPages"];

//	field labels
$fieldLabelschat_history = array();
$fieldToolTipschat_history = array();
$pageTitleschat_history = array();
$placeHolderschat_history = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_history["English"] = array();
	$fieldToolTipschat_history["English"] = array();
	$placeHolderschat_history["English"] = array();
	$pageTitleschat_history["English"] = array();
	$fieldLabelschat_history["English"]["id"] = "Id";
	$fieldToolTipschat_history["English"]["id"] = "";
	$placeHolderschat_history["English"]["id"] = "";
	$fieldLabelschat_history["English"]["chat_history"] = "Chat History";
	$fieldToolTipschat_history["English"]["chat_history"] = "";
	$placeHolderschat_history["English"]["chat_history"] = "";
	if (count($fieldToolTipschat_history["English"]))
		$tdatachat_history[".isUseToolTips"] = true;
}


	$tdatachat_history[".NCSearch"] = true;



$tdatachat_history[".shortTableName"] = "chat_history";
$tdatachat_history[".nSecOptions"] = 0;

$tdatachat_history[".mainTableOwnerID"] = "";
$tdatachat_history[".entityType"] = 0;
$tdatachat_history[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatachat_history[".strOriginalTableName"] = "public.chat_history";

	



$tdatachat_history[".showAddInPopup"] = false;

$tdatachat_history[".showEditInPopup"] = false;

$tdatachat_history[".showViewInPopup"] = false;

$tdatachat_history[".listAjax"] = false;
//	temporary
//$tdatachat_history[".listAjax"] = false;

	$tdatachat_history[".audit"] = false;

	$tdatachat_history[".locking"] = false;


$pages = $tdatachat_history[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_history[".edit"] = true;
	$tdatachat_history[".afterEditAction"] = 1;
	$tdatachat_history[".closePopupAfterEdit"] = 1;
	$tdatachat_history[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_history[".add"] = true;
$tdatachat_history[".afterAddAction"] = 1;
$tdatachat_history[".closePopupAfterAdd"] = 1;
$tdatachat_history[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_history[".list"] = true;
}



$tdatachat_history[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_history[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_history[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_history[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_history[".printFriendly"] = true;
}



$tdatachat_history[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_history[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_history[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_history[".isUseAjaxSuggest"] = true;



			

$tdatachat_history[".ajaxCodeSnippetAdded"] = false;

$tdatachat_history[".buttonsAdded"] = false;

$tdatachat_history[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachat_history[".isUseTimeForSearch"] = false;


$tdatachat_history[".badgeColor"] = "6DA5C8";


$tdatachat_history[".allSearchFields"] = array();
$tdatachat_history[".filterFields"] = array();
$tdatachat_history[".requiredSearchFields"] = array();

$tdatachat_history[".googleLikeFields"] = array();
$tdatachat_history[".googleLikeFields"][] = "id";
$tdatachat_history[".googleLikeFields"][] = "chat_history";



$tdatachat_history[".tableType"] = "list";

$tdatachat_history[".printerPageOrientation"] = 0;
$tdatachat_history[".nPrinterPageScale"] = 100;

$tdatachat_history[".nPrinterSplitRecords"] = 40;

$tdatachat_history[".geocodingEnabled"] = false;




$tdatachat_history[".isDisplayLoading"] = true;






$tdatachat_history[".pageSize"] = 20;

$tdatachat_history[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_history[".strOrderBy"] = $tstrOrderBy;

$tdatachat_history[".orderindexes"] = array();


$tdatachat_history[".sqlHead"] = "SELECT id,  	chat_history";
$tdatachat_history[".sqlFrom"] = "FROM \"public\".chat_history";
$tdatachat_history[".sqlWhereExpr"] = "";
$tdatachat_history[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_history[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_history[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_history[".highlightSearchResults"] = true;

$tableKeyschat_history = array();
$tableKeyschat_history[] = "id";
$tdatachat_history[".Keys"] = $tableKeyschat_history;


$tdatachat_history[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.chat_history";
	$fdata["Label"] = GetFieldLabel("public_chat_history","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatachat_history["id"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "id";
//	chat_history
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chat_history";
	$fdata["GoodName"] = "chat_history";
	$fdata["ownerTable"] = "public.chat_history";
	$fdata["Label"] = GetFieldLabel("public_chat_history","chat_history");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "chat_history";

		$fdata["sourceSingle"] = "chat_history";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chat_history";

	
	
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


	$tdatachat_history["chat_history"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "chat_history";


$tables_data["public.chat_history"]=&$tdatachat_history;
$field_labels["public_chat_history"] = &$fieldLabelschat_history;
$fieldToolTips["public_chat_history"] = &$fieldToolTipschat_history;
$placeHolders["public_chat_history"] = &$placeHolderschat_history;
$page_titles["public_chat_history"] = &$pageTitleschat_history;


changeTextControlsToDate( "public.chat_history" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.chat_history"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.chat_history"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_history()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	chat_history";
$proto0["m_strFrom"] = "FROM \"public\".chat_history";
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
	"m_strName" => "id",
	"m_strTable" => "public.chat_history",
	"m_srcTableName" => "public.chat_history"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.chat_history";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_history",
	"m_strTable" => "public.chat_history",
	"m_srcTableName" => "public.chat_history"
));

$proto8["m_sql"] = "chat_history";
$proto8["m_srcTableName"] = "public.chat_history";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.chat_history";
$proto11["m_srcTableName"] = "public.chat_history";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "chat_history";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".chat_history";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.chat_history";
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
$proto0["m_srcTableName"]="public.chat_history";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_history = createSqlQuery_chat_history();


	
																												;

		

$tdatachat_history[".sqlquery"] = $queryData_chat_history;



$tdatachat_history[".hasEvents"] = false;

?>