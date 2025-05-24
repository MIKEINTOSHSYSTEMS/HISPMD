<?php
$tdatakbusers = array();
$tdatakbusers[".searchableFields"] = array();
$tdatakbusers[".ShortName"] = "kbusers";
$tdatakbusers[".OwnerID"] = "";
$tdatakbusers[".OriginalTable"] = "public.kbusers";


$tdatakbusers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakbusers[".originalPagesByType"] = $tdatakbusers[".pagesByType"];
$tdatakbusers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakbusers[".originalPages"] = $tdatakbusers[".pages"];
$tdatakbusers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakbusers[".originalDefaultPages"] = $tdatakbusers[".defaultPages"];

//	field labels
$fieldLabelskbusers = array();
$fieldToolTipskbusers = array();
$pageTitleskbusers = array();
$placeHolderskbusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskbusers["English"] = array();
	$fieldToolTipskbusers["English"] = array();
	$placeHolderskbusers["English"] = array();
	$pageTitleskbusers["English"] = array();
	$fieldLabelskbusers["English"]["email"] = "Email";
	$fieldToolTipskbusers["English"]["email"] = "";
	$placeHolderskbusers["English"]["email"] = "";
	$fieldLabelskbusers["English"]["fullname"] = "Fullname";
	$fieldToolTipskbusers["English"]["fullname"] = "";
	$placeHolderskbusers["English"]["fullname"] = "";
	$fieldLabelskbusers["English"]["password"] = "Password";
	$fieldToolTipskbusers["English"]["password"] = "";
	$placeHolderskbusers["English"]["password"] = "";
	$fieldLabelskbusers["English"]["username"] = "Username";
	$fieldToolTipskbusers["English"]["username"] = "";
	$placeHolderskbusers["English"]["username"] = "";
	if (count($fieldToolTipskbusers["English"]))
		$tdatakbusers[".isUseToolTips"] = true;
}


	$tdatakbusers[".NCSearch"] = true;



$tdatakbusers[".shortTableName"] = "kbusers";
$tdatakbusers[".nSecOptions"] = 0;

$tdatakbusers[".mainTableOwnerID"] = "";
$tdatakbusers[".entityType"] = 1;
$tdatakbusers[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatakbusers[".strOriginalTableName"] = "public.kbusers";

	



$tdatakbusers[".showAddInPopup"] = false;

$tdatakbusers[".showEditInPopup"] = false;

$tdatakbusers[".showViewInPopup"] = false;

$tdatakbusers[".listAjax"] = false;
//	temporary
//$tdatakbusers[".listAjax"] = false;

	$tdatakbusers[".audit"] = false;

	$tdatakbusers[".locking"] = false;


$pages = $tdatakbusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakbusers[".edit"] = true;
	$tdatakbusers[".afterEditAction"] = 1;
	$tdatakbusers[".closePopupAfterEdit"] = 1;
	$tdatakbusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakbusers[".add"] = true;
$tdatakbusers[".afterAddAction"] = 1;
$tdatakbusers[".closePopupAfterAdd"] = 1;
$tdatakbusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakbusers[".list"] = true;
}



$tdatakbusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakbusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakbusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakbusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakbusers[".printFriendly"] = true;
}



$tdatakbusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakbusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakbusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakbusers[".isUseAjaxSuggest"] = true;



			

$tdatakbusers[".ajaxCodeSnippetAdded"] = false;

$tdatakbusers[".buttonsAdded"] = false;

$tdatakbusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakbusers[".isUseTimeForSearch"] = false;


$tdatakbusers[".badgeColor"] = "E8926F";


$tdatakbusers[".allSearchFields"] = array();
$tdatakbusers[".filterFields"] = array();
$tdatakbusers[".requiredSearchFields"] = array();

$tdatakbusers[".googleLikeFields"] = array();
$tdatakbusers[".googleLikeFields"][] = "email";
$tdatakbusers[".googleLikeFields"][] = "fullname";
$tdatakbusers[".googleLikeFields"][] = "password";
$tdatakbusers[".googleLikeFields"][] = "username";



$tdatakbusers[".tableType"] = "list";

$tdatakbusers[".printerPageOrientation"] = 0;
$tdatakbusers[".nPrinterPageScale"] = 100;

$tdatakbusers[".nPrinterSplitRecords"] = 40;

$tdatakbusers[".geocodingEnabled"] = false;










$tdatakbusers[".pageSize"] = 20;

$tdatakbusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakbusers[".strOrderBy"] = $tstrOrderBy;

$tdatakbusers[".orderindexes"] = array();


$tdatakbusers[".sqlHead"] = "SELECT email, 	fullname, 	password, 	username";
$tdatakbusers[".sqlFrom"] = "FROM kbusers";
$tdatakbusers[".sqlWhereExpr"] = "";
$tdatakbusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakbusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakbusers[".arrGroupsPerPage"] = $arrGPP;

$tdatakbusers[".highlightSearchResults"] = true;

$tableKeyskbusers = array();
$tableKeyskbusers[] = "email";
$tdatakbusers[".Keys"] = $tableKeyskbusers;


$tdatakbusers[".hideMobileList"] = array();




//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
	
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


	$tdatakbusers["email"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "public.kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatakbusers["fullname"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "fullname";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatakbusers["password"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "password";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatakbusers["username"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "username";


$tables_data["kbusers"]=&$tdatakbusers;
$field_labels["kbusers"] = &$fieldLabelskbusers;
$fieldToolTips["kbusers"] = &$fieldToolTipskbusers;
$placeHolders["kbusers"] = &$placeHolderskbusers;
$page_titles["kbusers"] = &$pageTitleskbusers;


changeTextControlsToDate( "kbusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kbusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kbusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kbusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "email, 	fullname, 	password, 	username";
$proto0["m_strFrom"] = "FROM kbusers";
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
	"m_strName" => "email",
	"m_strTable" => "public.kbusers",
	"m_srcTableName" => "kbusers"
));

$proto6["m_sql"] = "email";
$proto6["m_srcTableName"] = "kbusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "public.kbusers",
	"m_srcTableName" => "kbusers"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "kbusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.kbusers",
	"m_srcTableName" => "kbusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "kbusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.kbusers",
	"m_srcTableName" => "kbusers"
));

$proto12["m_sql"] = "username";
$proto12["m_srcTableName"] = "kbusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.kbusers";
$proto15["m_srcTableName"] = "kbusers";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "email";
$proto15["m_columns"][] = "fullname";
$proto15["m_columns"][] = "password";
$proto15["m_columns"][] = "username";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "kbusers";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "kbusers";
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
$proto0["m_srcTableName"]="kbusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kbusers = createSqlQuery_kbusers();


	
																												;

				

$tdatakbusers[".sqlquery"] = $queryData_kbusers;



$tdatakbusers[".hasEvents"] = false;

?>