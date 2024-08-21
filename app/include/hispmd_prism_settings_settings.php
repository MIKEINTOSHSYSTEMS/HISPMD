<?php
$tdatahispmd_prism_settings = array();
$tdatahispmd_prism_settings[".searchableFields"] = array();
$tdatahispmd_prism_settings[".ShortName"] = "hispmd_prism_settings";
$tdatahispmd_prism_settings[".OwnerID"] = "";
$tdatahispmd_prism_settings[".OriginalTable"] = "public.hispmd_prism_settings";


$tdatahispmd_prism_settings[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahispmd_prism_settings[".originalPagesByType"] = $tdatahispmd_prism_settings[".pagesByType"];
$tdatahispmd_prism_settings[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahispmd_prism_settings[".originalPages"] = $tdatahispmd_prism_settings[".pages"];
$tdatahispmd_prism_settings[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatahispmd_prism_settings[".originalDefaultPages"] = $tdatahispmd_prism_settings[".defaultPages"];

//	field labels
$fieldLabelshispmd_prism_settings = array();
$fieldToolTipshispmd_prism_settings = array();
$pageTitleshispmd_prism_settings = array();
$placeHoldershispmd_prism_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_prism_settings["English"] = array();
	$fieldToolTipshispmd_prism_settings["English"] = array();
	$placeHoldershispmd_prism_settings["English"] = array();
	$pageTitleshispmd_prism_settings["English"] = array();
	$fieldLabelshispmd_prism_settings["English"]["ID"] = "ID";
	$fieldToolTipshispmd_prism_settings["English"]["ID"] = "";
	$placeHoldershispmd_prism_settings["English"]["ID"] = "";
	$fieldLabelshispmd_prism_settings["English"]["prism_data_update"] = "Prism Data Update";
	$fieldToolTipshispmd_prism_settings["English"]["prism_data_update"] = "";
	$placeHoldershispmd_prism_settings["English"]["prism_data_update"] = "";
	if (count($fieldToolTipshispmd_prism_settings["English"]))
		$tdatahispmd_prism_settings[".isUseToolTips"] = true;
}


	$tdatahispmd_prism_settings[".NCSearch"] = true;



$tdatahispmd_prism_settings[".shortTableName"] = "hispmd_prism_settings";
$tdatahispmd_prism_settings[".nSecOptions"] = 0;

$tdatahispmd_prism_settings[".mainTableOwnerID"] = "";
$tdatahispmd_prism_settings[".entityType"] = 0;
$tdatahispmd_prism_settings[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_prism_settings[".strOriginalTableName"] = "public.hispmd_prism_settings";

	



$tdatahispmd_prism_settings[".showAddInPopup"] = false;

$tdatahispmd_prism_settings[".showEditInPopup"] = false;

$tdatahispmd_prism_settings[".showViewInPopup"] = false;

$tdatahispmd_prism_settings[".listAjax"] = false;
//	temporary
//$tdatahispmd_prism_settings[".listAjax"] = false;

	$tdatahispmd_prism_settings[".audit"] = true;

	$tdatahispmd_prism_settings[".locking"] = false;


$pages = $tdatahispmd_prism_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_prism_settings[".edit"] = true;
	$tdatahispmd_prism_settings[".afterEditAction"] = 1;
	$tdatahispmd_prism_settings[".closePopupAfterEdit"] = 1;
	$tdatahispmd_prism_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_prism_settings[".add"] = true;
$tdatahispmd_prism_settings[".afterAddAction"] = 1;
$tdatahispmd_prism_settings[".closePopupAfterAdd"] = 1;
$tdatahispmd_prism_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_prism_settings[".list"] = true;
}



$tdatahispmd_prism_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_prism_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_prism_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_prism_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_prism_settings[".printFriendly"] = true;
}



$tdatahispmd_prism_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_prism_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_prism_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_prism_settings[".isUseAjaxSuggest"] = true;





$tdatahispmd_prism_settings[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_prism_settings[".buttonsAdded"] = false;

$tdatahispmd_prism_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_prism_settings[".isUseTimeForSearch"] = false;


$tdatahispmd_prism_settings[".badgeColor"] = "D2AF80";


$tdatahispmd_prism_settings[".allSearchFields"] = array();
$tdatahispmd_prism_settings[".filterFields"] = array();
$tdatahispmd_prism_settings[".requiredSearchFields"] = array();

$tdatahispmd_prism_settings[".googleLikeFields"] = array();
$tdatahispmd_prism_settings[".googleLikeFields"][] = "ID";
$tdatahispmd_prism_settings[".googleLikeFields"][] = "prism_data_update";



$tdatahispmd_prism_settings[".tableType"] = "list";

$tdatahispmd_prism_settings[".printerPageOrientation"] = 0;
$tdatahispmd_prism_settings[".nPrinterPageScale"] = 100;

$tdatahispmd_prism_settings[".nPrinterSplitRecords"] = 40;

$tdatahispmd_prism_settings[".geocodingEnabled"] = false;




$tdatahispmd_prism_settings[".isDisplayLoading"] = true;






$tdatahispmd_prism_settings[".pageSize"] = 20;

$tdatahispmd_prism_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_prism_settings[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_prism_settings[".orderindexes"] = array();


$tdatahispmd_prism_settings[".sqlHead"] = "SELECT \"ID\",  	prism_data_update";
$tdatahispmd_prism_settings[".sqlFrom"] = "FROM \"public\".hispmd_prism_settings";
$tdatahispmd_prism_settings[".sqlWhereExpr"] = "";
$tdatahispmd_prism_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_prism_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_prism_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_prism_settings[".highlightSearchResults"] = true;

$tableKeyshispmd_prism_settings = array();
$tableKeyshispmd_prism_settings[] = "ID";
$tdatahispmd_prism_settings[".Keys"] = $tableKeyshispmd_prism_settings;


$tdatahispmd_prism_settings[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.hispmd_prism_settings";
	$fdata["Label"] = GetFieldLabel("public_hispmd_prism_settings","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatahispmd_prism_settings["ID"] = $fdata;
		$tdatahispmd_prism_settings[".searchableFields"][] = "ID";
//	prism_data_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "prism_data_update";
	$fdata["GoodName"] = "prism_data_update";
	$fdata["ownerTable"] = "public.hispmd_prism_settings";
	$fdata["Label"] = GetFieldLabel("public_hispmd_prism_settings","prism_data_update");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prism_data_update";

		$fdata["sourceSingle"] = "prism_data_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prism_data_update";

	
	
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


	$tdatahispmd_prism_settings["prism_data_update"] = $fdata;
		$tdatahispmd_prism_settings[".searchableFields"][] = "prism_data_update";


$tables_data["public.hispmd_prism_settings"]=&$tdatahispmd_prism_settings;
$field_labels["public_hispmd_prism_settings"] = &$fieldLabelshispmd_prism_settings;
$fieldToolTips["public_hispmd_prism_settings"] = &$fieldToolTipshispmd_prism_settings;
$placeHolders["public_hispmd_prism_settings"] = &$placeHoldershispmd_prism_settings;
$page_titles["public_hispmd_prism_settings"] = &$pageTitleshispmd_prism_settings;


changeTextControlsToDate( "public.hispmd_prism_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispmd_prism_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispmd_prism_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_prism_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	prism_data_update";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_prism_settings";
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
	"m_strName" => "ID",
	"m_strTable" => "public.hispmd_prism_settings",
	"m_srcTableName" => "public.hispmd_prism_settings"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.hispmd_prism_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "prism_data_update",
	"m_strTable" => "public.hispmd_prism_settings",
	"m_srcTableName" => "public.hispmd_prism_settings"
));

$proto8["m_sql"] = "prism_data_update";
$proto8["m_srcTableName"] = "public.hispmd_prism_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.hispmd_prism_settings";
$proto11["m_srcTableName"] = "public.hispmd_prism_settings";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "prism_data_update";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".hispmd_prism_settings";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.hispmd_prism_settings";
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
$proto0["m_srcTableName"]="public.hispmd_prism_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_prism_settings = createSqlQuery_hispmd_prism_settings();


	
																												;

		

$tdatahispmd_prism_settings[".sqlquery"] = $queryData_hispmd_prism_settings;



$tdatahispmd_prism_settings[".hasEvents"] = false;

?>