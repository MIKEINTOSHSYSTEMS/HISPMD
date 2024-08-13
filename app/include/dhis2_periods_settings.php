<?php
$tdatadhis2_periods = array();
$tdatadhis2_periods[".searchableFields"] = array();
$tdatadhis2_periods[".ShortName"] = "dhis2_periods";
$tdatadhis2_periods[".OwnerID"] = "";
$tdatadhis2_periods[".OriginalTable"] = "DHIS2_Periods";


$tdatadhis2_periods[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadhis2_periods[".originalPagesByType"] = $tdatadhis2_periods[".pagesByType"];
$tdatadhis2_periods[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadhis2_periods[".originalPages"] = $tdatadhis2_periods[".pages"];
$tdatadhis2_periods[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadhis2_periods[".originalDefaultPages"] = $tdatadhis2_periods[".defaultPages"];

//	field labels
$fieldLabelsdhis2_periods = array();
$fieldToolTipsdhis2_periods = array();
$pageTitlesdhis2_periods = array();
$placeHoldersdhis2_periods = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdhis2_periods["English"] = array();
	$fieldToolTipsdhis2_periods["English"] = array();
	$placeHoldersdhis2_periods["English"] = array();
	$pageTitlesdhis2_periods["English"] = array();
	$fieldLabelsdhis2_periods["English"]["Period_ID"] = "Period ID";
	$fieldToolTipsdhis2_periods["English"]["Period_ID"] = "";
	$placeHoldersdhis2_periods["English"]["Period_ID"] = "";
	$fieldLabelsdhis2_periods["English"]["Period_Name"] = "Period Name";
	$fieldToolTipsdhis2_periods["English"]["Period_Name"] = "";
	$placeHoldersdhis2_periods["English"]["Period_Name"] = "";
	if (count($fieldToolTipsdhis2_periods["English"]))
		$tdatadhis2_periods[".isUseToolTips"] = true;
}


	$tdatadhis2_periods[".NCSearch"] = true;



$tdatadhis2_periods[".shortTableName"] = "dhis2_periods";
$tdatadhis2_periods[".nSecOptions"] = 0;

$tdatadhis2_periods[".mainTableOwnerID"] = "";
$tdatadhis2_periods[".entityType"] = 0;
$tdatadhis2_periods[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadhis2_periods[".strOriginalTableName"] = "DHIS2_Periods";

	



$tdatadhis2_periods[".showAddInPopup"] = false;

$tdatadhis2_periods[".showEditInPopup"] = false;

$tdatadhis2_periods[".showViewInPopup"] = false;

$tdatadhis2_periods[".listAjax"] = false;
//	temporary
//$tdatadhis2_periods[".listAjax"] = false;

	$tdatadhis2_periods[".audit"] = false;

	$tdatadhis2_periods[".locking"] = false;


$pages = $tdatadhis2_periods[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadhis2_periods[".edit"] = true;
	$tdatadhis2_periods[".afterEditAction"] = 1;
	$tdatadhis2_periods[".closePopupAfterEdit"] = 1;
	$tdatadhis2_periods[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadhis2_periods[".add"] = true;
$tdatadhis2_periods[".afterAddAction"] = 1;
$tdatadhis2_periods[".closePopupAfterAdd"] = 1;
$tdatadhis2_periods[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadhis2_periods[".list"] = true;
}



$tdatadhis2_periods[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadhis2_periods[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadhis2_periods[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadhis2_periods[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadhis2_periods[".printFriendly"] = true;
}



$tdatadhis2_periods[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadhis2_periods[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadhis2_periods[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadhis2_periods[".isUseAjaxSuggest"] = true;





$tdatadhis2_periods[".ajaxCodeSnippetAdded"] = false;

$tdatadhis2_periods[".buttonsAdded"] = false;

$tdatadhis2_periods[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadhis2_periods[".isUseTimeForSearch"] = false;


$tdatadhis2_periods[".badgeColor"] = "B22222";


$tdatadhis2_periods[".allSearchFields"] = array();
$tdatadhis2_periods[".filterFields"] = array();
$tdatadhis2_periods[".requiredSearchFields"] = array();

$tdatadhis2_periods[".googleLikeFields"] = array();
$tdatadhis2_periods[".googleLikeFields"][] = "Period_ID";
$tdatadhis2_periods[".googleLikeFields"][] = "Period_Name";



$tdatadhis2_periods[".tableType"] = "list";

$tdatadhis2_periods[".printerPageOrientation"] = 0;
$tdatadhis2_periods[".nPrinterPageScale"] = 100;

$tdatadhis2_periods[".nPrinterSplitRecords"] = 40;

$tdatadhis2_periods[".geocodingEnabled"] = false;










$tdatadhis2_periods[".pageSize"] = 20;

$tdatadhis2_periods[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadhis2_periods[".strOrderBy"] = $tstrOrderBy;

$tdatadhis2_periods[".orderindexes"] = array();


$tdatadhis2_periods[".sqlHead"] = "SELECT Period_ID,  	Period_Name";
$tdatadhis2_periods[".sqlFrom"] = "FROM DHIS2_Periods";
$tdatadhis2_periods[".sqlWhereExpr"] = "";
$tdatadhis2_periods[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadhis2_periods[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadhis2_periods[".arrGroupsPerPage"] = $arrGPP;

$tdatadhis2_periods[".highlightSearchResults"] = true;

$tableKeysdhis2_periods = array();
$tableKeysdhis2_periods[] = "Period_ID";
$tdatadhis2_periods[".Keys"] = $tableKeysdhis2_periods;


$tdatadhis2_periods[".hideMobileList"] = array();




//	Period_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Period_ID";
	$fdata["GoodName"] = "Period_ID";
	$fdata["ownerTable"] = "DHIS2_Periods";
	$fdata["Label"] = GetFieldLabel("DHIS2_Periods","Period_ID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Period_ID";

		$fdata["sourceSingle"] = "Period_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period_ID";

	
	
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


	$tdatadhis2_periods["Period_ID"] = $fdata;
		$tdatadhis2_periods[".searchableFields"][] = "Period_ID";
//	Period_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Period_Name";
	$fdata["GoodName"] = "Period_Name";
	$fdata["ownerTable"] = "DHIS2_Periods";
	$fdata["Label"] = GetFieldLabel("DHIS2_Periods","Period_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Period_Name";

		$fdata["sourceSingle"] = "Period_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period_Name";

	
	
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


	$tdatadhis2_periods["Period_Name"] = $fdata;
		$tdatadhis2_periods[".searchableFields"][] = "Period_Name";


$tables_data["DHIS2_Periods"]=&$tdatadhis2_periods;
$field_labels["DHIS2_Periods"] = &$fieldLabelsdhis2_periods;
$fieldToolTips["DHIS2_Periods"] = &$fieldToolTipsdhis2_periods;
$placeHolders["DHIS2_Periods"] = &$placeHoldersdhis2_periods;
$page_titles["DHIS2_Periods"] = &$pageTitlesdhis2_periods;


changeTextControlsToDate( "DHIS2_Periods" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DHIS2_Periods"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DHIS2_Periods"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dhis2_periods()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Period_ID,  	Period_Name";
$proto0["m_strFrom"] = "FROM DHIS2_Periods";
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
	"m_strName" => "Period_ID",
	"m_strTable" => "DHIS2_Periods",
	"m_srcTableName" => "DHIS2_Periods"
));

$proto6["m_sql"] = "Period_ID";
$proto6["m_srcTableName"] = "DHIS2_Periods";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Period_Name",
	"m_strTable" => "DHIS2_Periods",
	"m_srcTableName" => "DHIS2_Periods"
));

$proto8["m_sql"] = "Period_Name";
$proto8["m_srcTableName"] = "DHIS2_Periods";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "DHIS2_Periods";
$proto11["m_srcTableName"] = "DHIS2_Periods";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Period_ID";
$proto11["m_columns"][] = "Period_Name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "DHIS2_Periods";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "DHIS2_Periods";
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
$proto0["m_srcTableName"]="DHIS2_Periods";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dhis2_periods = createSqlQuery_dhis2_periods();


	
																												;

		

$tdatadhis2_periods[".sqlquery"] = $queryData_dhis2_periods;



$tdatadhis2_periods[".hasEvents"] = false;

?>