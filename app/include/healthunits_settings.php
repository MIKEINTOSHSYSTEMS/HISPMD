<?php
$tdatahealthunits = array();
$tdatahealthunits[".searchableFields"] = array();
$tdatahealthunits[".ShortName"] = "healthunits";
$tdatahealthunits[".OwnerID"] = "";
$tdatahealthunits[".OriginalTable"] = "public.healthunits";


$tdatahealthunits[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahealthunits[".originalPagesByType"] = $tdatahealthunits[".pagesByType"];
$tdatahealthunits[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahealthunits[".originalPages"] = $tdatahealthunits[".pages"];
$tdatahealthunits[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahealthunits[".originalDefaultPages"] = $tdatahealthunits[".defaultPages"];

//	field labels
$fieldLabelshealthunits = array();
$fieldToolTipshealthunits = array();
$pageTitleshealthunits = array();
$placeHoldershealthunits = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshealthunits["English"] = array();
	$fieldToolTipshealthunits["English"] = array();
	$placeHoldershealthunits["English"] = array();
	$pageTitleshealthunits["English"] = array();
	$fieldLabelshealthunits["English"]["unit_id"] = "Unit Id";
	$fieldToolTipshealthunits["English"]["unit_id"] = "";
	$placeHoldershealthunits["English"]["unit_id"] = "";
	$fieldLabelshealthunits["English"]["name"] = "Name";
	$fieldToolTipshealthunits["English"]["name"] = "";
	$placeHoldershealthunits["English"]["name"] = "";
	$fieldLabelshealthunits["English"]["type"] = "Type";
	$fieldToolTipshealthunits["English"]["type"] = "";
	$placeHoldershealthunits["English"]["type"] = "";
	$fieldLabelshealthunits["English"]["strategic_plan"] = "Strategic Plan";
	$fieldToolTipshealthunits["English"]["strategic_plan"] = "";
	$placeHoldershealthunits["English"]["strategic_plan"] = "";
	if (count($fieldToolTipshealthunits["English"]))
		$tdatahealthunits[".isUseToolTips"] = true;
}


	$tdatahealthunits[".NCSearch"] = true;



$tdatahealthunits[".shortTableName"] = "healthunits";
$tdatahealthunits[".nSecOptions"] = 0;

$tdatahealthunits[".mainTableOwnerID"] = "";
$tdatahealthunits[".entityType"] = 0;
$tdatahealthunits[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahealthunits[".strOriginalTableName"] = "public.healthunits";

	



$tdatahealthunits[".showAddInPopup"] = false;

$tdatahealthunits[".showEditInPopup"] = false;

$tdatahealthunits[".showViewInPopup"] = false;

$tdatahealthunits[".listAjax"] = false;
//	temporary
//$tdatahealthunits[".listAjax"] = false;

	$tdatahealthunits[".audit"] = true;

	$tdatahealthunits[".locking"] = true;


$pages = $tdatahealthunits[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahealthunits[".edit"] = true;
	$tdatahealthunits[".afterEditAction"] = 1;
	$tdatahealthunits[".closePopupAfterEdit"] = 1;
	$tdatahealthunits[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahealthunits[".add"] = true;
$tdatahealthunits[".afterAddAction"] = 1;
$tdatahealthunits[".closePopupAfterAdd"] = 1;
$tdatahealthunits[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahealthunits[".list"] = true;
}



$tdatahealthunits[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahealthunits[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahealthunits[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahealthunits[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahealthunits[".printFriendly"] = true;
}



$tdatahealthunits[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahealthunits[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahealthunits[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahealthunits[".isUseAjaxSuggest"] = true;





$tdatahealthunits[".ajaxCodeSnippetAdded"] = false;

$tdatahealthunits[".buttonsAdded"] = false;

$tdatahealthunits[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahealthunits[".isUseTimeForSearch"] = false;


$tdatahealthunits[".badgeColor"] = "B22222";


$tdatahealthunits[".allSearchFields"] = array();
$tdatahealthunits[".filterFields"] = array();
$tdatahealthunits[".requiredSearchFields"] = array();

$tdatahealthunits[".googleLikeFields"] = array();
$tdatahealthunits[".googleLikeFields"][] = "unit_id";
$tdatahealthunits[".googleLikeFields"][] = "name";
$tdatahealthunits[".googleLikeFields"][] = "type";
$tdatahealthunits[".googleLikeFields"][] = "strategic_plan";



$tdatahealthunits[".tableType"] = "list";

$tdatahealthunits[".printerPageOrientation"] = 0;
$tdatahealthunits[".nPrinterPageScale"] = 100;

$tdatahealthunits[".nPrinterSplitRecords"] = 40;

$tdatahealthunits[".geocodingEnabled"] = false;










$tdatahealthunits[".pageSize"] = 20;

$tdatahealthunits[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahealthunits[".strOrderBy"] = $tstrOrderBy;

$tdatahealthunits[".orderindexes"] = array();


$tdatahealthunits[".sqlHead"] = "SELECT unit_id,  	name,  	\"type\",  	strategic_plan";
$tdatahealthunits[".sqlFrom"] = "FROM \"public\".healthunits";
$tdatahealthunits[".sqlWhereExpr"] = "";
$tdatahealthunits[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahealthunits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahealthunits[".arrGroupsPerPage"] = $arrGPP;

$tdatahealthunits[".highlightSearchResults"] = true;

$tableKeyshealthunits = array();
$tableKeyshealthunits[] = "unit_id";
$tdatahealthunits[".Keys"] = $tableKeyshealthunits;


$tdatahealthunits[".hideMobileList"] = array();




//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "public.healthunits";
	$fdata["Label"] = GetFieldLabel("public_healthunits","unit_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unit_id";

		$fdata["sourceSingle"] = "unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_id";

	
	
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


	$tdatahealthunits["unit_id"] = $fdata;
		$tdatahealthunits[".searchableFields"][] = "unit_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.healthunits";
	$fdata["Label"] = GetFieldLabel("public_healthunits","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatahealthunits["name"] = $fdata;
		$tdatahealthunits[".searchableFields"][] = "name";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "public.healthunits";
	$fdata["Label"] = GetFieldLabel("public_healthunits","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"type\"";

	
	
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


	$tdatahealthunits["type"] = $fdata;
		$tdatahealthunits[".searchableFields"][] = "type";
//	strategic_plan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "strategic_plan";
	$fdata["GoodName"] = "strategic_plan";
	$fdata["ownerTable"] = "public.healthunits";
	$fdata["Label"] = GetFieldLabel("public_healthunits","strategic_plan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "strategic_plan";

		$fdata["sourceSingle"] = "strategic_plan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "strategic_plan";

	
	
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


	$tdatahealthunits["strategic_plan"] = $fdata;
		$tdatahealthunits[".searchableFields"][] = "strategic_plan";


$tables_data["public.healthunits"]=&$tdatahealthunits;
$field_labels["public_healthunits"] = &$fieldLabelshealthunits;
$fieldToolTips["public_healthunits"] = &$fieldToolTipshealthunits;
$placeHolders["public_healthunits"] = &$placeHoldershealthunits;
$page_titles["public_healthunits"] = &$pageTitleshealthunits;


changeTextControlsToDate( "public.healthunits" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.healthunits"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.healthunits"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_healthunits()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "unit_id,  	name,  	\"type\",  	strategic_plan";
$proto0["m_strFrom"] = "FROM \"public\".healthunits";
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
	"m_strName" => "unit_id",
	"m_strTable" => "public.healthunits",
	"m_srcTableName" => "public.healthunits"
));

$proto6["m_sql"] = "unit_id";
$proto6["m_srcTableName"] = "public.healthunits";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.healthunits",
	"m_srcTableName" => "public.healthunits"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.healthunits";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "public.healthunits",
	"m_srcTableName" => "public.healthunits"
));

$proto10["m_sql"] = "\"type\"";
$proto10["m_srcTableName"] = "public.healthunits";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "strategic_plan",
	"m_strTable" => "public.healthunits",
	"m_srcTableName" => "public.healthunits"
));

$proto12["m_sql"] = "strategic_plan";
$proto12["m_srcTableName"] = "public.healthunits";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.healthunits";
$proto15["m_srcTableName"] = "public.healthunits";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "unit_id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "type";
$proto15["m_columns"][] = "strategic_plan";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".healthunits";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.healthunits";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.healthunits";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_healthunits = createSqlQuery_healthunits();


	
																												;

				

$tdatahealthunits[".sqlquery"] = $queryData_healthunits;



$tdatahealthunits[".hasEvents"] = false;

?>