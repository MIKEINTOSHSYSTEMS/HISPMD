<?php
$tdatasgb_blockedip = array();
$tdatasgb_blockedip[".searchableFields"] = array();
$tdatasgb_blockedip[".ShortName"] = "sgb_blockedip";
$tdatasgb_blockedip[".OwnerID"] = "";
$tdatasgb_blockedip[".OriginalTable"] = "sgb_blockedip";


$tdatasgb_blockedip[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_blockedip[".originalPagesByType"] = $tdatasgb_blockedip[".pagesByType"];
$tdatasgb_blockedip[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_blockedip[".originalPages"] = $tdatasgb_blockedip[".pages"];
$tdatasgb_blockedip[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_blockedip[".originalDefaultPages"] = $tdatasgb_blockedip[".defaultPages"];

//	field labels
$fieldLabelssgb_blockedip = array();
$fieldToolTipssgb_blockedip = array();
$pageTitlessgb_blockedip = array();
$placeHolderssgb_blockedip = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_blockedip["English"] = array();
	$fieldToolTipssgb_blockedip["English"] = array();
	$placeHolderssgb_blockedip["English"] = array();
	$pageTitlessgb_blockedip["English"] = array();
	$fieldLabelssgb_blockedip["English"]["id"] = "Id";
	$fieldToolTipssgb_blockedip["English"]["id"] = "";
	$placeHolderssgb_blockedip["English"]["id"] = "";
	$fieldLabelssgb_blockedip["English"]["ip"] = "Ip";
	$fieldToolTipssgb_blockedip["English"]["ip"] = "";
	$placeHolderssgb_blockedip["English"]["ip"] = "";
	$fieldLabelssgb_blockedip["English"]["blocked_date"] = "Blocked Date";
	$fieldToolTipssgb_blockedip["English"]["blocked_date"] = "";
	$placeHolderssgb_blockedip["English"]["blocked_date"] = "";
	if (count($fieldToolTipssgb_blockedip["English"]))
		$tdatasgb_blockedip[".isUseToolTips"] = true;
}


	$tdatasgb_blockedip[".NCSearch"] = true;



$tdatasgb_blockedip[".shortTableName"] = "sgb_blockedip";
$tdatasgb_blockedip[".nSecOptions"] = 0;

$tdatasgb_blockedip[".mainTableOwnerID"] = "";
$tdatasgb_blockedip[".entityType"] = 0;
$tdatasgb_blockedip[".connId"] = "project_at_localhost";


$tdatasgb_blockedip[".strOriginalTableName"] = "sgb_blockedip";

	



$tdatasgb_blockedip[".showAddInPopup"] = false;

$tdatasgb_blockedip[".showEditInPopup"] = false;

$tdatasgb_blockedip[".showViewInPopup"] = false;

$tdatasgb_blockedip[".listAjax"] = false;
//	temporary
//$tdatasgb_blockedip[".listAjax"] = false;

	$tdatasgb_blockedip[".audit"] = false;

	$tdatasgb_blockedip[".locking"] = false;


$pages = $tdatasgb_blockedip[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_blockedip[".edit"] = true;
	$tdatasgb_blockedip[".afterEditAction"] = 1;
	$tdatasgb_blockedip[".closePopupAfterEdit"] = 1;
	$tdatasgb_blockedip[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_blockedip[".add"] = true;
$tdatasgb_blockedip[".afterAddAction"] = 1;
$tdatasgb_blockedip[".closePopupAfterAdd"] = 1;
$tdatasgb_blockedip[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_blockedip[".list"] = true;
}



$tdatasgb_blockedip[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_blockedip[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_blockedip[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_blockedip[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_blockedip[".printFriendly"] = true;
}



$tdatasgb_blockedip[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_blockedip[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_blockedip[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_blockedip[".isUseAjaxSuggest"] = true;



									

$tdatasgb_blockedip[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_blockedip[".buttonsAdded"] = false;

$tdatasgb_blockedip[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasgb_blockedip[".isUseTimeForSearch"] = false;


$tdatasgb_blockedip[".badgeColor"] = "4682B4";


$tdatasgb_blockedip[".allSearchFields"] = array();
$tdatasgb_blockedip[".filterFields"] = array();
$tdatasgb_blockedip[".requiredSearchFields"] = array();

$tdatasgb_blockedip[".googleLikeFields"] = array();
$tdatasgb_blockedip[".googleLikeFields"][] = "id";
$tdatasgb_blockedip[".googleLikeFields"][] = "ip";
$tdatasgb_blockedip[".googleLikeFields"][] = "blocked_date";



$tdatasgb_blockedip[".tableType"] = "list";

$tdatasgb_blockedip[".printerPageOrientation"] = 0;
$tdatasgb_blockedip[".nPrinterPageScale"] = 100;

$tdatasgb_blockedip[".nPrinterSplitRecords"] = 40;

$tdatasgb_blockedip[".geocodingEnabled"] = false;










$tdatasgb_blockedip[".pageSize"] = 20;

$tdatasgb_blockedip[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_blockedip[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_blockedip[".orderindexes"] = array();


$tdatasgb_blockedip[".sqlHead"] = "SELECT id,  	ip,  	blocked_date";
$tdatasgb_blockedip[".sqlFrom"] = "FROM sgb_blockedip";
$tdatasgb_blockedip[".sqlWhereExpr"] = "";
$tdatasgb_blockedip[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_blockedip[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_blockedip[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_blockedip[".highlightSearchResults"] = true;

$tableKeyssgb_blockedip = array();
$tableKeyssgb_blockedip[] = "id";
$tdatasgb_blockedip[".Keys"] = $tableKeyssgb_blockedip;


$tdatasgb_blockedip[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_blockedip";
	$fdata["Label"] = GetFieldLabel("sgb_blockedip","id");
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


	$tdatasgb_blockedip["id"] = $fdata;
		$tdatasgb_blockedip[".searchableFields"][] = "id";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sgb_blockedip";
	$fdata["Label"] = GetFieldLabel("sgb_blockedip","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatasgb_blockedip["ip"] = $fdata;
		$tdatasgb_blockedip[".searchableFields"][] = "ip";
//	blocked_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "blocked_date";
	$fdata["GoodName"] = "blocked_date";
	$fdata["ownerTable"] = "sgb_blockedip";
	$fdata["Label"] = GetFieldLabel("sgb_blockedip","blocked_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "blocked_date";

		$fdata["sourceSingle"] = "blocked_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "blocked_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasgb_blockedip["blocked_date"] = $fdata;
		$tdatasgb_blockedip[".searchableFields"][] = "blocked_date";


$tables_data["sgb_blockedip"]=&$tdatasgb_blockedip;
$field_labels["sgb_blockedip"] = &$fieldLabelssgb_blockedip;
$fieldToolTips["sgb_blockedip"] = &$fieldToolTipssgb_blockedip;
$placeHolders["sgb_blockedip"] = &$placeHolderssgb_blockedip;
$page_titles["sgb_blockedip"] = &$pageTitlessgb_blockedip;


changeTextControlsToDate( "sgb_blockedip" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_blockedip"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_blockedip"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_blockedip()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ip,  	blocked_date";
$proto0["m_strFrom"] = "FROM sgb_blockedip";
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
	"m_strTable" => "sgb_blockedip",
	"m_srcTableName" => "sgb_blockedip"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_blockedip";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sgb_blockedip",
	"m_srcTableName" => "sgb_blockedip"
));

$proto8["m_sql"] = "ip";
$proto8["m_srcTableName"] = "sgb_blockedip";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "blocked_date",
	"m_strTable" => "sgb_blockedip",
	"m_srcTableName" => "sgb_blockedip"
));

$proto10["m_sql"] = "blocked_date";
$proto10["m_srcTableName"] = "sgb_blockedip";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sgb_blockedip";
$proto13["m_srcTableName"] = "sgb_blockedip";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "ip";
$proto13["m_columns"][] = "blocked_date";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sgb_blockedip";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sgb_blockedip";
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
$proto0["m_srcTableName"]="sgb_blockedip";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_blockedip = createSqlQuery_sgb_blockedip();


	
		;

			

$tdatasgb_blockedip[".sqlquery"] = $queryData_sgb_blockedip;



include_once(getabspath("include/sgb_blockedip_events.php"));
$tdatasgb_blockedip[".hasEvents"] = true;

?>