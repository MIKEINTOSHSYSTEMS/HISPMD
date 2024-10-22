<?php
$tdatasgb_votes = array();
$tdatasgb_votes[".searchableFields"] = array();
$tdatasgb_votes[".ShortName"] = "sgb_votes";
$tdatasgb_votes[".OwnerID"] = "";
$tdatasgb_votes[".OriginalTable"] = "sgb_votes";


$tdatasgb_votes[".pagesByType"] = my_json_decode( "{}" );
$tdatasgb_votes[".originalPagesByType"] = $tdatasgb_votes[".pagesByType"];
$tdatasgb_votes[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatasgb_votes[".originalPages"] = $tdatasgb_votes[".pages"];
$tdatasgb_votes[".defaultPages"] = my_json_decode( "{}" );
$tdatasgb_votes[".originalDefaultPages"] = $tdatasgb_votes[".defaultPages"];

//	field labels
$fieldLabelssgb_votes = array();
$fieldToolTipssgb_votes = array();
$pageTitlessgb_votes = array();
$placeHolderssgb_votes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_votes["English"] = array();
	$fieldToolTipssgb_votes["English"] = array();
	$placeHolderssgb_votes["English"] = array();
	$pageTitlessgb_votes["English"] = array();
	$fieldLabelssgb_votes["English"]["user_id"] = "User Id";
	$fieldToolTipssgb_votes["English"]["user_id"] = "";
	$placeHolderssgb_votes["English"]["user_id"] = "";
	$fieldLabelssgb_votes["English"]["s_id"] = "S Id";
	$fieldToolTipssgb_votes["English"]["s_id"] = "";
	$placeHolderssgb_votes["English"]["s_id"] = "";
	$fieldLabelssgb_votes["English"]["ip"] = "Ip";
	$fieldToolTipssgb_votes["English"]["ip"] = "";
	$placeHolderssgb_votes["English"]["ip"] = "";
	if (count($fieldToolTipssgb_votes["English"]))
		$tdatasgb_votes[".isUseToolTips"] = true;
}


	$tdatasgb_votes[".NCSearch"] = true;



$tdatasgb_votes[".shortTableName"] = "sgb_votes";
$tdatasgb_votes[".nSecOptions"] = 0;

$tdatasgb_votes[".mainTableOwnerID"] = "";
$tdatasgb_votes[".entityType"] = 0;
$tdatasgb_votes[".connId"] = "project_at_localhost";


$tdatasgb_votes[".strOriginalTableName"] = "sgb_votes";

	



$tdatasgb_votes[".showAddInPopup"] = false;

$tdatasgb_votes[".showEditInPopup"] = false;

$tdatasgb_votes[".showViewInPopup"] = false;

$tdatasgb_votes[".listAjax"] = false;
//	temporary
//$tdatasgb_votes[".listAjax"] = false;

	$tdatasgb_votes[".audit"] = false;

	$tdatasgb_votes[".locking"] = false;


$pages = $tdatasgb_votes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_votes[".edit"] = true;
	$tdatasgb_votes[".afterEditAction"] = 1;
	$tdatasgb_votes[".closePopupAfterEdit"] = 1;
	$tdatasgb_votes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_votes[".add"] = true;
$tdatasgb_votes[".afterAddAction"] = 1;
$tdatasgb_votes[".closePopupAfterAdd"] = 1;
$tdatasgb_votes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_votes[".list"] = true;
}



$tdatasgb_votes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_votes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_votes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_votes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_votes[".printFriendly"] = true;
}



$tdatasgb_votes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_votes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_votes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_votes[".isUseAjaxSuggest"] = true;



									

$tdatasgb_votes[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_votes[".buttonsAdded"] = false;

$tdatasgb_votes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasgb_votes[".isUseTimeForSearch"] = false;


$tdatasgb_votes[".badgeColor"] = "E8926F";


$tdatasgb_votes[".allSearchFields"] = array();
$tdatasgb_votes[".filterFields"] = array();
$tdatasgb_votes[".requiredSearchFields"] = array();

$tdatasgb_votes[".googleLikeFields"] = array();
$tdatasgb_votes[".googleLikeFields"][] = "user_id";
$tdatasgb_votes[".googleLikeFields"][] = "s_id";
$tdatasgb_votes[".googleLikeFields"][] = "ip";



$tdatasgb_votes[".tableType"] = "list";

$tdatasgb_votes[".printerPageOrientation"] = 0;
$tdatasgb_votes[".nPrinterPageScale"] = 100;

$tdatasgb_votes[".nPrinterSplitRecords"] = 40;

$tdatasgb_votes[".geocodingEnabled"] = false;










$tdatasgb_votes[".pageSize"] = 20;

$tdatasgb_votes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_votes[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_votes[".orderindexes"] = array();


$tdatasgb_votes[".sqlHead"] = "SELECT user_id,  	s_id,  	ip";
$tdatasgb_votes[".sqlFrom"] = "FROM sgb_votes";
$tdatasgb_votes[".sqlWhereExpr"] = "";
$tdatasgb_votes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_votes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_votes[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_votes[".highlightSearchResults"] = true;

$tableKeyssgb_votes = array();
$tableKeyssgb_votes[] = "user_id";
$tableKeyssgb_votes[] = "s_id";
$tdatasgb_votes[".Keys"] = $tableKeyssgb_votes;


$tdatasgb_votes[".hideMobileList"] = array();




//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "sgb_votes";
	$fdata["Label"] = GetFieldLabel("sgb_votes","user_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_id";

		$fdata["sourceSingle"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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


	$tdatasgb_votes["user_id"] = $fdata;
		$tdatasgb_votes[".searchableFields"][] = "user_id";
//	s_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_id";
	$fdata["GoodName"] = "s_id";
	$fdata["ownerTable"] = "sgb_votes";
	$fdata["Label"] = GetFieldLabel("sgb_votes","s_id");
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


	$tdatasgb_votes["s_id"] = $fdata;
		$tdatasgb_votes[".searchableFields"][] = "s_id";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sgb_votes";
	$fdata["Label"] = GetFieldLabel("sgb_votes","ip");
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


	$tdatasgb_votes["ip"] = $fdata;
		$tdatasgb_votes[".searchableFields"][] = "ip";


$tables_data["sgb_votes"]=&$tdatasgb_votes;
$field_labels["sgb_votes"] = &$fieldLabelssgb_votes;
$fieldToolTips["sgb_votes"] = &$fieldToolTipssgb_votes;
$placeHolders["sgb_votes"] = &$placeHolderssgb_votes;
$page_titles["sgb_votes"] = &$pageTitlessgb_votes;


changeTextControlsToDate( "sgb_votes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_votes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_votes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_votes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  	s_id,  	ip";
$proto0["m_strFrom"] = "FROM sgb_votes";
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
	"m_strName" => "user_id",
	"m_strTable" => "sgb_votes",
	"m_srcTableName" => "sgb_votes"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "sgb_votes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "s_id",
	"m_strTable" => "sgb_votes",
	"m_srcTableName" => "sgb_votes"
));

$proto8["m_sql"] = "s_id";
$proto8["m_srcTableName"] = "sgb_votes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sgb_votes",
	"m_srcTableName" => "sgb_votes"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "sgb_votes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sgb_votes";
$proto13["m_srcTableName"] = "sgb_votes";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "user_id";
$proto13["m_columns"][] = "s_id";
$proto13["m_columns"][] = "ip";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sgb_votes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sgb_votes";
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
$proto0["m_srcTableName"]="sgb_votes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_votes = createSqlQuery_sgb_votes();


	
		;

			

$tdatasgb_votes[".sqlquery"] = $queryData_sgb_votes;



$tdatasgb_votes[".hasEvents"] = false;

?>