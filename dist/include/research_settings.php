<?php
$tdataresearch = array();
$tdataresearch[".searchableFields"] = array();
$tdataresearch[".ShortName"] = "research";
$tdataresearch[".OwnerID"] = "";
$tdataresearch[".OriginalTable"] = "public.research";


$tdataresearch[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresearch[".originalPagesByType"] = $tdataresearch[".pagesByType"];
$tdataresearch[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresearch[".originalPages"] = $tdataresearch[".pages"];
$tdataresearch[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresearch[".originalDefaultPages"] = $tdataresearch[".defaultPages"];

//	field labels
$fieldLabelsresearch = array();
$fieldToolTipsresearch = array();
$pageTitlesresearch = array();
$placeHoldersresearch = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresearch["English"] = array();
	$fieldToolTipsresearch["English"] = array();
	$placeHoldersresearch["English"] = array();
	$pageTitlesresearch["English"] = array();
	$fieldLabelsresearch["English"]["research_id"] = "Research Id";
	$fieldToolTipsresearch["English"]["research_id"] = "";
	$placeHoldersresearch["English"]["research_id"] = "";
	$fieldLabelsresearch["English"]["title"] = "Title";
	$fieldToolTipsresearch["English"]["title"] = "";
	$placeHoldersresearch["English"]["title"] = "";
	$fieldLabelsresearch["English"]["conducted"] = "Conducted";
	$fieldToolTipsresearch["English"]["conducted"] = "";
	$placeHoldersresearch["English"]["conducted"] = "";
	if (count($fieldToolTipsresearch["English"]))
		$tdataresearch[".isUseToolTips"] = true;
}


	$tdataresearch[".NCSearch"] = true;



$tdataresearch[".shortTableName"] = "research";
$tdataresearch[".nSecOptions"] = 0;

$tdataresearch[".mainTableOwnerID"] = "";
$tdataresearch[".entityType"] = 0;
$tdataresearch[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataresearch[".strOriginalTableName"] = "public.research";

	



$tdataresearch[".showAddInPopup"] = false;

$tdataresearch[".showEditInPopup"] = false;

$tdataresearch[".showViewInPopup"] = false;

$tdataresearch[".listAjax"] = false;
//	temporary
//$tdataresearch[".listAjax"] = false;

	$tdataresearch[".audit"] = false;

	$tdataresearch[".locking"] = false;


$pages = $tdataresearch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresearch[".edit"] = true;
	$tdataresearch[".afterEditAction"] = 1;
	$tdataresearch[".closePopupAfterEdit"] = 1;
	$tdataresearch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresearch[".add"] = true;
$tdataresearch[".afterAddAction"] = 1;
$tdataresearch[".closePopupAfterAdd"] = 1;
$tdataresearch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresearch[".list"] = true;
}



$tdataresearch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresearch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresearch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresearch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresearch[".printFriendly"] = true;
}



$tdataresearch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresearch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresearch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresearch[".isUseAjaxSuggest"] = true;





$tdataresearch[".ajaxCodeSnippetAdded"] = false;

$tdataresearch[".buttonsAdded"] = false;

$tdataresearch[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresearch[".isUseTimeForSearch"] = false;


$tdataresearch[".badgeColor"] = "778899";


$tdataresearch[".allSearchFields"] = array();
$tdataresearch[".filterFields"] = array();
$tdataresearch[".requiredSearchFields"] = array();

$tdataresearch[".googleLikeFields"] = array();
$tdataresearch[".googleLikeFields"][] = "research_id";
$tdataresearch[".googleLikeFields"][] = "title";
$tdataresearch[".googleLikeFields"][] = "conducted";



$tdataresearch[".tableType"] = "list";

$tdataresearch[".printerPageOrientation"] = 0;
$tdataresearch[".nPrinterPageScale"] = 100;

$tdataresearch[".nPrinterSplitRecords"] = 40;

$tdataresearch[".geocodingEnabled"] = false;










$tdataresearch[".pageSize"] = 20;

$tdataresearch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresearch[".strOrderBy"] = $tstrOrderBy;

$tdataresearch[".orderindexes"] = array();


$tdataresearch[".sqlHead"] = "SELECT research_id,  	title,  	conducted";
$tdataresearch[".sqlFrom"] = "FROM \"public\".research";
$tdataresearch[".sqlWhereExpr"] = "";
$tdataresearch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresearch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresearch[".arrGroupsPerPage"] = $arrGPP;

$tdataresearch[".highlightSearchResults"] = true;

$tableKeysresearch = array();
$tableKeysresearch[] = "research_id";
$tdataresearch[".Keys"] = $tableKeysresearch;


$tdataresearch[".hideMobileList"] = array();




//	research_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "research_id";
	$fdata["GoodName"] = "research_id";
	$fdata["ownerTable"] = "public.research";
	$fdata["Label"] = GetFieldLabel("public_research","research_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "research_id";

		$fdata["sourceSingle"] = "research_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "research_id";

	
	
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


	$tdataresearch["research_id"] = $fdata;
		$tdataresearch[".searchableFields"][] = "research_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "public.research";
	$fdata["Label"] = GetFieldLabel("public_research","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	$tdataresearch["title"] = $fdata;
		$tdataresearch[".searchableFields"][] = "title";
//	conducted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "conducted";
	$fdata["GoodName"] = "conducted";
	$fdata["ownerTable"] = "public.research";
	$fdata["Label"] = GetFieldLabel("public_research","conducted");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "conducted";

		$fdata["sourceSingle"] = "conducted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conducted";

	
	
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


	$tdataresearch["conducted"] = $fdata;
		$tdataresearch[".searchableFields"][] = "conducted";


$tables_data["public.research"]=&$tdataresearch;
$field_labels["public_research"] = &$fieldLabelsresearch;
$fieldToolTips["public_research"] = &$fieldToolTipsresearch;
$placeHolders["public_research"] = &$placeHoldersresearch;
$page_titles["public_research"] = &$pageTitlesresearch;


changeTextControlsToDate( "public.research" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.research"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.research"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_research()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "research_id,  	title,  	conducted";
$proto0["m_strFrom"] = "FROM \"public\".research";
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
	"m_strName" => "research_id",
	"m_strTable" => "public.research",
	"m_srcTableName" => "public.research"
));

$proto6["m_sql"] = "research_id";
$proto6["m_srcTableName"] = "public.research";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "public.research",
	"m_srcTableName" => "public.research"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "public.research";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "conducted",
	"m_strTable" => "public.research",
	"m_srcTableName" => "public.research"
));

$proto10["m_sql"] = "conducted";
$proto10["m_srcTableName"] = "public.research";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.research";
$proto13["m_srcTableName"] = "public.research";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "research_id";
$proto13["m_columns"][] = "title";
$proto13["m_columns"][] = "conducted";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".research";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.research";
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
$proto0["m_srcTableName"]="public.research";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_research = createSqlQuery_research();


	
																												;

			

$tdataresearch[".sqlquery"] = $queryData_research;



$tdataresearch[".hasEvents"] = false;

?>