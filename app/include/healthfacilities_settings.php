<?php
$tdatahealthfacilities = array();
$tdatahealthfacilities[".searchableFields"] = array();
$tdatahealthfacilities[".ShortName"] = "healthfacilities";
$tdatahealthfacilities[".OwnerID"] = "";
$tdatahealthfacilities[".OriginalTable"] = "public.healthfacilities";


$tdatahealthfacilities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahealthfacilities[".originalPagesByType"] = $tdatahealthfacilities[".pagesByType"];
$tdatahealthfacilities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahealthfacilities[".originalPages"] = $tdatahealthfacilities[".pages"];
$tdatahealthfacilities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahealthfacilities[".originalDefaultPages"] = $tdatahealthfacilities[".defaultPages"];

//	field labels
$fieldLabelshealthfacilities = array();
$fieldToolTipshealthfacilities = array();
$pageTitleshealthfacilities = array();
$placeHoldershealthfacilities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshealthfacilities["English"] = array();
	$fieldToolTipshealthfacilities["English"] = array();
	$placeHoldershealthfacilities["English"] = array();
	$pageTitleshealthfacilities["English"] = array();
	$fieldLabelshealthfacilities["English"]["hf_id"] = "Hf Id";
	$fieldToolTipshealthfacilities["English"]["hf_id"] = "";
	$placeHoldershealthfacilities["English"]["hf_id"] = "";
	$fieldLabelshealthfacilities["English"]["name"] = "Name";
	$fieldToolTipshealthfacilities["English"]["name"] = "";
	$placeHoldershealthfacilities["English"]["name"] = "";
	$fieldLabelshealthfacilities["English"]["type"] = "Type";
	$fieldToolTipshealthfacilities["English"]["type"] = "";
	$placeHoldershealthfacilities["English"]["type"] = "";
	$fieldLabelshealthfacilities["English"]["his_audit_started"] = "His Audit Started";
	$fieldToolTipshealthfacilities["English"]["his_audit_started"] = "";
	$placeHoldershealthfacilities["English"]["his_audit_started"] = "";
	if (count($fieldToolTipshealthfacilities["English"]))
		$tdatahealthfacilities[".isUseToolTips"] = true;
}


	$tdatahealthfacilities[".NCSearch"] = true;



$tdatahealthfacilities[".shortTableName"] = "healthfacilities";
$tdatahealthfacilities[".nSecOptions"] = 0;

$tdatahealthfacilities[".mainTableOwnerID"] = "";
$tdatahealthfacilities[".entityType"] = 0;
$tdatahealthfacilities[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahealthfacilities[".strOriginalTableName"] = "public.healthfacilities";

	



$tdatahealthfacilities[".showAddInPopup"] = false;

$tdatahealthfacilities[".showEditInPopup"] = false;

$tdatahealthfacilities[".showViewInPopup"] = false;

$tdatahealthfacilities[".listAjax"] = false;
//	temporary
//$tdatahealthfacilities[".listAjax"] = false;

	$tdatahealthfacilities[".audit"] = true;

	$tdatahealthfacilities[".locking"] = true;


$pages = $tdatahealthfacilities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahealthfacilities[".edit"] = true;
	$tdatahealthfacilities[".afterEditAction"] = 1;
	$tdatahealthfacilities[".closePopupAfterEdit"] = 1;
	$tdatahealthfacilities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahealthfacilities[".add"] = true;
$tdatahealthfacilities[".afterAddAction"] = 1;
$tdatahealthfacilities[".closePopupAfterAdd"] = 1;
$tdatahealthfacilities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahealthfacilities[".list"] = true;
}



$tdatahealthfacilities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahealthfacilities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahealthfacilities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahealthfacilities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahealthfacilities[".printFriendly"] = true;
}



$tdatahealthfacilities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahealthfacilities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahealthfacilities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahealthfacilities[".isUseAjaxSuggest"] = true;





$tdatahealthfacilities[".ajaxCodeSnippetAdded"] = false;

$tdatahealthfacilities[".buttonsAdded"] = false;

$tdatahealthfacilities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahealthfacilities[".isUseTimeForSearch"] = false;


$tdatahealthfacilities[".badgeColor"] = "D2691E";


$tdatahealthfacilities[".allSearchFields"] = array();
$tdatahealthfacilities[".filterFields"] = array();
$tdatahealthfacilities[".requiredSearchFields"] = array();

$tdatahealthfacilities[".googleLikeFields"] = array();
$tdatahealthfacilities[".googleLikeFields"][] = "hf_id";
$tdatahealthfacilities[".googleLikeFields"][] = "name";
$tdatahealthfacilities[".googleLikeFields"][] = "type";
$tdatahealthfacilities[".googleLikeFields"][] = "his_audit_started";



$tdatahealthfacilities[".tableType"] = "list";

$tdatahealthfacilities[".printerPageOrientation"] = 0;
$tdatahealthfacilities[".nPrinterPageScale"] = 100;

$tdatahealthfacilities[".nPrinterSplitRecords"] = 40;

$tdatahealthfacilities[".geocodingEnabled"] = false;










$tdatahealthfacilities[".pageSize"] = 20;

$tdatahealthfacilities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahealthfacilities[".strOrderBy"] = $tstrOrderBy;

$tdatahealthfacilities[".orderindexes"] = array();


$tdatahealthfacilities[".sqlHead"] = "SELECT hf_id,  	name,  	\"type\",  	his_audit_started";
$tdatahealthfacilities[".sqlFrom"] = "FROM \"public\".healthfacilities";
$tdatahealthfacilities[".sqlWhereExpr"] = "";
$tdatahealthfacilities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahealthfacilities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahealthfacilities[".arrGroupsPerPage"] = $arrGPP;

$tdatahealthfacilities[".highlightSearchResults"] = true;

$tableKeyshealthfacilities = array();
$tableKeyshealthfacilities[] = "hf_id";
$tdatahealthfacilities[".Keys"] = $tableKeyshealthfacilities;


$tdatahealthfacilities[".hideMobileList"] = array();




//	hf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "hf_id";
	$fdata["GoodName"] = "hf_id";
	$fdata["ownerTable"] = "public.healthfacilities";
	$fdata["Label"] = GetFieldLabel("public_healthfacilities","hf_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hf_id";

		$fdata["sourceSingle"] = "hf_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hf_id";

	
	
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


	$tdatahealthfacilities["hf_id"] = $fdata;
		$tdatahealthfacilities[".searchableFields"][] = "hf_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.healthfacilities";
	$fdata["Label"] = GetFieldLabel("public_healthfacilities","name");
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


	$tdatahealthfacilities["name"] = $fdata;
		$tdatahealthfacilities[".searchableFields"][] = "name";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "public.healthfacilities";
	$fdata["Label"] = GetFieldLabel("public_healthfacilities","type");
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


	$tdatahealthfacilities["type"] = $fdata;
		$tdatahealthfacilities[".searchableFields"][] = "type";
//	his_audit_started
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "his_audit_started";
	$fdata["GoodName"] = "his_audit_started";
	$fdata["ownerTable"] = "public.healthfacilities";
	$fdata["Label"] = GetFieldLabel("public_healthfacilities","his_audit_started");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "his_audit_started";

		$fdata["sourceSingle"] = "his_audit_started";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "his_audit_started";

	
	
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


	$tdatahealthfacilities["his_audit_started"] = $fdata;
		$tdatahealthfacilities[".searchableFields"][] = "his_audit_started";


$tables_data["public.healthfacilities"]=&$tdatahealthfacilities;
$field_labels["public_healthfacilities"] = &$fieldLabelshealthfacilities;
$fieldToolTips["public_healthfacilities"] = &$fieldToolTipshealthfacilities;
$placeHolders["public_healthfacilities"] = &$placeHoldershealthfacilities;
$page_titles["public_healthfacilities"] = &$pageTitleshealthfacilities;


changeTextControlsToDate( "public.healthfacilities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.healthfacilities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.healthfacilities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_healthfacilities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hf_id,  	name,  	\"type\",  	his_audit_started";
$proto0["m_strFrom"] = "FROM \"public\".healthfacilities";
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
	"m_strName" => "hf_id",
	"m_strTable" => "public.healthfacilities",
	"m_srcTableName" => "public.healthfacilities"
));

$proto6["m_sql"] = "hf_id";
$proto6["m_srcTableName"] = "public.healthfacilities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.healthfacilities",
	"m_srcTableName" => "public.healthfacilities"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.healthfacilities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "public.healthfacilities",
	"m_srcTableName" => "public.healthfacilities"
));

$proto10["m_sql"] = "\"type\"";
$proto10["m_srcTableName"] = "public.healthfacilities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "his_audit_started",
	"m_strTable" => "public.healthfacilities",
	"m_srcTableName" => "public.healthfacilities"
));

$proto12["m_sql"] = "his_audit_started";
$proto12["m_srcTableName"] = "public.healthfacilities";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.healthfacilities";
$proto15["m_srcTableName"] = "public.healthfacilities";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "hf_id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "type";
$proto15["m_columns"][] = "his_audit_started";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".healthfacilities";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.healthfacilities";
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
$proto0["m_srcTableName"]="public.healthfacilities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_healthfacilities = createSqlQuery_healthfacilities();


	
																												;

				

$tdatahealthfacilities[".sqlquery"] = $queryData_healthfacilities;



$tdatahealthfacilities[".hasEvents"] = false;

?>