<?php
$tdatasgb_notify = array();
$tdatasgb_notify[".searchableFields"] = array();
$tdatasgb_notify[".ShortName"] = "sgb_notify";
$tdatasgb_notify[".OwnerID"] = "";
$tdatasgb_notify[".OriginalTable"] = "sgb_notify";


$tdatasgb_notify[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdatasgb_notify[".originalPagesByType"] = $tdatasgb_notify[".pagesByType"];
$tdatasgb_notify[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdatasgb_notify[".originalPages"] = $tdatasgb_notify[".pages"];
$tdatasgb_notify[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdatasgb_notify[".originalDefaultPages"] = $tdatasgb_notify[".defaultPages"];

//	field labels
$fieldLabelssgb_notify = array();
$fieldToolTipssgb_notify = array();
$pageTitlessgb_notify = array();
$placeHolderssgb_notify = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_notify["English"] = array();
	$fieldToolTipssgb_notify["English"] = array();
	$placeHolderssgb_notify["English"] = array();
	$pageTitlessgb_notify["English"] = array();
	$fieldLabelssgb_notify["English"]["id"] = "Id";
	$fieldToolTipssgb_notify["English"]["id"] = "";
	$placeHolderssgb_notify["English"]["id"] = "";
	$fieldLabelssgb_notify["English"]["email"] = "Notify me of changes (optional)";
	$fieldToolTipssgb_notify["English"]["email"] = "We’ll email you when the status of the suggestion changes. You can unsubscribe at any time with a single click.";
	$placeHolderssgb_notify["English"]["email"] = " example@test.com";
	$fieldLabelssgb_notify["English"]["s_id"] = "S Id";
	$fieldToolTipssgb_notify["English"]["s_id"] = "";
	$placeHolderssgb_notify["English"]["s_id"] = "";
	if (count($fieldToolTipssgb_notify["English"]))
		$tdatasgb_notify[".isUseToolTips"] = true;
}


	$tdatasgb_notify[".NCSearch"] = true;



$tdatasgb_notify[".shortTableName"] = "sgb_notify";
$tdatasgb_notify[".nSecOptions"] = 0;

$tdatasgb_notify[".mainTableOwnerID"] = "";
$tdatasgb_notify[".entityType"] = 0;
$tdatasgb_notify[".connId"] = "project_at_localhost";


$tdatasgb_notify[".strOriginalTableName"] = "sgb_notify";

	



$tdatasgb_notify[".showAddInPopup"] = false;

$tdatasgb_notify[".showEditInPopup"] = false;

$tdatasgb_notify[".showViewInPopup"] = false;

$tdatasgb_notify[".listAjax"] = false;
//	temporary
//$tdatasgb_notify[".listAjax"] = false;

	$tdatasgb_notify[".audit"] = false;

	$tdatasgb_notify[".locking"] = false;


$pages = $tdatasgb_notify[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_notify[".edit"] = true;
	$tdatasgb_notify[".afterEditAction"] = 1;
	$tdatasgb_notify[".closePopupAfterEdit"] = 1;
	$tdatasgb_notify[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_notify[".add"] = true;
$tdatasgb_notify[".afterAddAction"] = 1;
$tdatasgb_notify[".closePopupAfterAdd"] = 1;
$tdatasgb_notify[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_notify[".list"] = true;
}



$tdatasgb_notify[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_notify[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_notify[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_notify[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_notify[".printFriendly"] = true;
}



$tdatasgb_notify[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_notify[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_notify[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_notify[".isUseAjaxSuggest"] = true;



									

$tdatasgb_notify[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_notify[".buttonsAdded"] = false;

$tdatasgb_notify[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_notify[".isUseTimeForSearch"] = false;


$tdatasgb_notify[".badgeColor"] = "E8926F";


$tdatasgb_notify[".allSearchFields"] = array();
$tdatasgb_notify[".filterFields"] = array();
$tdatasgb_notify[".requiredSearchFields"] = array();

$tdatasgb_notify[".googleLikeFields"] = array();
$tdatasgb_notify[".googleLikeFields"][] = "id";
$tdatasgb_notify[".googleLikeFields"][] = "email";
$tdatasgb_notify[".googleLikeFields"][] = "s_id";



$tdatasgb_notify[".tableType"] = "list";

$tdatasgb_notify[".printerPageOrientation"] = 0;
$tdatasgb_notify[".nPrinterPageScale"] = 100;

$tdatasgb_notify[".nPrinterSplitRecords"] = 40;

$tdatasgb_notify[".geocodingEnabled"] = false;










$tdatasgb_notify[".pageSize"] = 20;

$tdatasgb_notify[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_notify[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_notify[".orderindexes"] = array();


$tdatasgb_notify[".sqlHead"] = "SELECT id,  	email,  	s_id";
$tdatasgb_notify[".sqlFrom"] = "FROM sgb_notify";
$tdatasgb_notify[".sqlWhereExpr"] = "";
$tdatasgb_notify[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_notify[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_notify[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_notify[".highlightSearchResults"] = true;

$tableKeyssgb_notify = array();
$tableKeyssgb_notify[] = "id";
$tdatasgb_notify[".Keys"] = $tableKeyssgb_notify;


$tdatasgb_notify[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_notify";
	$fdata["Label"] = GetFieldLabel("sgb_notify","id");
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


	$tdatasgb_notify["id"] = $fdata;
		$tdatasgb_notify[".searchableFields"][] = "id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_notify";
	$fdata["Label"] = GetFieldLabel("sgb_notify","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasgb_notify["email"] = $fdata;
		$tdatasgb_notify[".searchableFields"][] = "email";
//	s_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "s_id";
	$fdata["GoodName"] = "s_id";
	$fdata["ownerTable"] = "sgb_notify";
	$fdata["Label"] = GetFieldLabel("sgb_notify","s_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "s_id";

		$fdata["sourceSingle"] = "s_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s_id";

	
	
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


	$tdatasgb_notify["s_id"] = $fdata;
		$tdatasgb_notify[".searchableFields"][] = "s_id";


$tables_data["sgb_notify"]=&$tdatasgb_notify;
$field_labels["sgb_notify"] = &$fieldLabelssgb_notify;
$fieldToolTips["sgb_notify"] = &$fieldToolTipssgb_notify;
$placeHolders["sgb_notify"] = &$placeHolderssgb_notify;
$page_titles["sgb_notify"] = &$pageTitlessgb_notify;


changeTextControlsToDate( "sgb_notify" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_notify"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_notify"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_notify()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	email,  	s_id";
$proto0["m_strFrom"] = "FROM sgb_notify";
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
	"m_strTable" => "sgb_notify",
	"m_srcTableName" => "sgb_notify"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_notify";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_notify",
	"m_srcTableName" => "sgb_notify"
));

$proto8["m_sql"] = "email";
$proto8["m_srcTableName"] = "sgb_notify";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "s_id",
	"m_strTable" => "sgb_notify",
	"m_srcTableName" => "sgb_notify"
));

$proto10["m_sql"] = "s_id";
$proto10["m_srcTableName"] = "sgb_notify";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sgb_notify";
$proto13["m_srcTableName"] = "sgb_notify";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "email";
$proto13["m_columns"][] = "s_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sgb_notify";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sgb_notify";
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
$proto0["m_srcTableName"]="sgb_notify";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_notify = createSqlQuery_sgb_notify();


	
		;

			

$tdatasgb_notify[".sqlquery"] = $queryData_sgb_notify;



include_once(getabspath("include/sgb_notify_events.php"));
$tdatasgb_notify[".hasEvents"] = true;

?>