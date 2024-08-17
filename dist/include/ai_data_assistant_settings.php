<?php
$tdataai_data_assistant = array();
$tdataai_data_assistant[".searchableFields"] = array();
$tdataai_data_assistant[".ShortName"] = "ai_data_assistant";
$tdataai_data_assistant[".OwnerID"] = "";
$tdataai_data_assistant[".OriginalTable"] = "public.ai_data_assistant";


$tdataai_data_assistant[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataai_data_assistant[".originalPagesByType"] = $tdataai_data_assistant[".pagesByType"];
$tdataai_data_assistant[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataai_data_assistant[".originalPages"] = $tdataai_data_assistant[".pages"];
$tdataai_data_assistant[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataai_data_assistant[".originalDefaultPages"] = $tdataai_data_assistant[".defaultPages"];

//	field labels
$fieldLabelsai_data_assistant = array();
$fieldToolTipsai_data_assistant = array();
$pageTitlesai_data_assistant = array();
$placeHoldersai_data_assistant = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsai_data_assistant["English"] = array();
	$fieldToolTipsai_data_assistant["English"] = array();
	$placeHoldersai_data_assistant["English"] = array();
	$pageTitlesai_data_assistant["English"] = array();
	$fieldLabelsai_data_assistant["English"]["id"] = "Id";
	$fieldToolTipsai_data_assistant["English"]["id"] = "";
	$placeHoldersai_data_assistant["English"]["id"] = "";
	$fieldLabelsai_data_assistant["English"]["chatbot"] = "Chatbot";
	$fieldToolTipsai_data_assistant["English"]["chatbot"] = "";
	$placeHoldersai_data_assistant["English"]["chatbot"] = "";
	if (count($fieldToolTipsai_data_assistant["English"]))
		$tdataai_data_assistant[".isUseToolTips"] = true;
}


	$tdataai_data_assistant[".NCSearch"] = true;



$tdataai_data_assistant[".shortTableName"] = "ai_data_assistant";
$tdataai_data_assistant[".nSecOptions"] = 0;

$tdataai_data_assistant[".mainTableOwnerID"] = "";
$tdataai_data_assistant[".entityType"] = 0;
$tdataai_data_assistant[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataai_data_assistant[".strOriginalTableName"] = "public.ai_data_assistant";

	



$tdataai_data_assistant[".showAddInPopup"] = false;

$tdataai_data_assistant[".showEditInPopup"] = false;

$tdataai_data_assistant[".showViewInPopup"] = false;

$tdataai_data_assistant[".listAjax"] = false;
//	temporary
//$tdataai_data_assistant[".listAjax"] = false;

	$tdataai_data_assistant[".audit"] = true;

	$tdataai_data_assistant[".locking"] = true;


$pages = $tdataai_data_assistant[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataai_data_assistant[".edit"] = true;
	$tdataai_data_assistant[".afterEditAction"] = 1;
	$tdataai_data_assistant[".closePopupAfterEdit"] = 1;
	$tdataai_data_assistant[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataai_data_assistant[".add"] = true;
$tdataai_data_assistant[".afterAddAction"] = 1;
$tdataai_data_assistant[".closePopupAfterAdd"] = 1;
$tdataai_data_assistant[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataai_data_assistant[".list"] = true;
}



$tdataai_data_assistant[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataai_data_assistant[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataai_data_assistant[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataai_data_assistant[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataai_data_assistant[".printFriendly"] = true;
}



$tdataai_data_assistant[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataai_data_assistant[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataai_data_assistant[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataai_data_assistant[".isUseAjaxSuggest"] = true;





$tdataai_data_assistant[".ajaxCodeSnippetAdded"] = false;

$tdataai_data_assistant[".buttonsAdded"] = false;

$tdataai_data_assistant[".addPageEvents"] = false;

// use timepicker for search panel
$tdataai_data_assistant[".isUseTimeForSearch"] = false;


$tdataai_data_assistant[".badgeColor"] = "778899";


$tdataai_data_assistant[".allSearchFields"] = array();
$tdataai_data_assistant[".filterFields"] = array();
$tdataai_data_assistant[".requiredSearchFields"] = array();

$tdataai_data_assistant[".googleLikeFields"] = array();
$tdataai_data_assistant[".googleLikeFields"][] = "id";
$tdataai_data_assistant[".googleLikeFields"][] = "chatbot";



$tdataai_data_assistant[".tableType"] = "list";

$tdataai_data_assistant[".printerPageOrientation"] = 0;
$tdataai_data_assistant[".nPrinterPageScale"] = 100;

$tdataai_data_assistant[".nPrinterSplitRecords"] = 40;

$tdataai_data_assistant[".geocodingEnabled"] = false;










$tdataai_data_assistant[".pageSize"] = 20;

$tdataai_data_assistant[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataai_data_assistant[".strOrderBy"] = $tstrOrderBy;

$tdataai_data_assistant[".orderindexes"] = array();


$tdataai_data_assistant[".sqlHead"] = "SELECT id,  	chatbot";
$tdataai_data_assistant[".sqlFrom"] = "FROM \"public\".ai_data_assistant";
$tdataai_data_assistant[".sqlWhereExpr"] = "";
$tdataai_data_assistant[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataai_data_assistant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataai_data_assistant[".arrGroupsPerPage"] = $arrGPP;

$tdataai_data_assistant[".highlightSearchResults"] = true;

$tableKeysai_data_assistant = array();
$tableKeysai_data_assistant[] = "id";
$tdataai_data_assistant[".Keys"] = $tableKeysai_data_assistant;


$tdataai_data_assistant[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.ai_data_assistant";
	$fdata["Label"] = GetFieldLabel("public_ai_data_assistant","id");
	$fdata["FieldType"] = 20;


	
	
			

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


	$tdataai_data_assistant["id"] = $fdata;
		$tdataai_data_assistant[".searchableFields"][] = "id";
//	chatbot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chatbot";
	$fdata["GoodName"] = "chatbot";
	$fdata["ownerTable"] = "public.ai_data_assistant";
	$fdata["Label"] = GetFieldLabel("public_ai_data_assistant","chatbot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "chatbot";

		$fdata["sourceSingle"] = "chatbot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chatbot";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataai_data_assistant["chatbot"] = $fdata;
		$tdataai_data_assistant[".searchableFields"][] = "chatbot";


$tables_data["public.ai_data_assistant"]=&$tdataai_data_assistant;
$field_labels["public_ai_data_assistant"] = &$fieldLabelsai_data_assistant;
$fieldToolTips["public_ai_data_assistant"] = &$fieldToolTipsai_data_assistant;
$placeHolders["public_ai_data_assistant"] = &$placeHoldersai_data_assistant;
$page_titles["public_ai_data_assistant"] = &$pageTitlesai_data_assistant;


changeTextControlsToDate( "public.ai_data_assistant" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ai_data_assistant"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ai_data_assistant"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ai_data_assistant()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	chatbot";
$proto0["m_strFrom"] = "FROM \"public\".ai_data_assistant";
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
	"m_strTable" => "public.ai_data_assistant",
	"m_srcTableName" => "public.ai_data_assistant"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.ai_data_assistant";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chatbot",
	"m_strTable" => "public.ai_data_assistant",
	"m_srcTableName" => "public.ai_data_assistant"
));

$proto8["m_sql"] = "chatbot";
$proto8["m_srcTableName"] = "public.ai_data_assistant";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.ai_data_assistant";
$proto11["m_srcTableName"] = "public.ai_data_assistant";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "chatbot";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".ai_data_assistant";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.ai_data_assistant";
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
$proto0["m_srcTableName"]="public.ai_data_assistant";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ai_data_assistant = createSqlQuery_ai_data_assistant();


	
																												;

		

$tdataai_data_assistant[".sqlquery"] = $queryData_ai_data_assistant;



$tdataai_data_assistant[".hasEvents"] = false;

?>