<?php
$tdataadmin_members = array();
$tdataadmin_members[".searchableFields"] = array();
$tdataadmin_members[".ShortName"] = "admin_members";
$tdataadmin_members[".OwnerID"] = "";
$tdataadmin_members[".OriginalTable"] = "public.hispmd_ugmembers";


$tdataadmin_members[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataadmin_members[".originalPagesByType"] = $tdataadmin_members[".pagesByType"];
$tdataadmin_members[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataadmin_members[".originalPages"] = $tdataadmin_members[".pages"];
$tdataadmin_members[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataadmin_members[".originalDefaultPages"] = $tdataadmin_members[".defaultPages"];

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["UserName"] = "User Name";
	$fieldToolTipsadmin_members["English"]["UserName"] = "";
	$placeHoldersadmin_members["English"]["UserName"] = "";
	$fieldLabelsadmin_members["English"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_members["English"]["GroupID"] = "";
	$placeHoldersadmin_members["English"]["GroupID"] = "";
	$fieldLabelsadmin_members["English"]["Provider"] = "Provider";
	$fieldToolTipsadmin_members["English"]["Provider"] = "";
	$placeHoldersadmin_members["English"]["Provider"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;

$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".entityType"] = 1;
$tdataadmin_members[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataadmin_members[".strOriginalTableName"] = "public.hispmd_ugmembers";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

$tdataadmin_members[".listAjax"] = false;
//	temporary
//$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = false;


$pages = $tdataadmin_members[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_members[".edit"] = true;
	$tdataadmin_members[".afterEditAction"] = 1;
	$tdataadmin_members[".closePopupAfterEdit"] = 1;
	$tdataadmin_members[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_members[".add"] = true;
$tdataadmin_members[".afterAddAction"] = 1;
$tdataadmin_members[".closePopupAfterAdd"] = 1;
$tdataadmin_members[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_members[".list"] = true;
}



$tdataadmin_members[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_members[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_members[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_members[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_members[".printFriendly"] = true;
}



$tdataadmin_members[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_members[".isUseAjaxSuggest"] = true;





$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;


$tdataadmin_members[".badgeColor"] = "3CB371";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "UserName";
$tdataadmin_members[".googleLikeFields"][] = "GroupID";
$tdataadmin_members[".googleLikeFields"][] = "Provider";



$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".geocodingEnabled"] = false;










$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();


$tdataadmin_members[".sqlHead"] = "SELECT \"UserName\",  	\"GroupID\",  	\"Provider\"";
$tdataadmin_members[".sqlFrom"] = "FROM \"public\".hispmd_ugmembers";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "UserName";
$tableKeysadmin_members[] = "GroupID";
$tableKeysadmin_members[] = "Provider";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;


$tdataadmin_members[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "public.hispmd_ugmembers";
	$fdata["Label"] = GetFieldLabel("admin_members","UserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UserName";

		$fdata["sourceSingle"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"UserName\"";

	
	
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


	$tdataadmin_members["UserName"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "public.hispmd_ugmembers";
	$fdata["Label"] = GetFieldLabel("admin_members","GroupID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "GroupID";

		$fdata["sourceSingle"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"GroupID\"";

	
	
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


	$tdataadmin_members["GroupID"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "GroupID";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "public.hispmd_ugmembers";
	$fdata["Label"] = GetFieldLabel("admin_members","Provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Provider";

		$fdata["sourceSingle"] = "Provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Provider\"";

	
	
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


	$tdataadmin_members["Provider"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "Provider";


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;


changeTextControlsToDate( "admin_members" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["admin_members"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"UserName\",  	\"GroupID\",  	\"Provider\"";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "public.hispmd_ugmembers",
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "\"UserName\"";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "public.hispmd_ugmembers",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "\"GroupID\"";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "public.hispmd_ugmembers",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "\"Provider\"";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.hispmd_ugmembers";
$proto13["m_srcTableName"] = "admin_members";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UserName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "Provider";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".hispmd_ugmembers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
																												;

			

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;



$tdataadmin_members[".hasEvents"] = false;

?>