<?php
$tdatapublications = array();
$tdatapublications[".searchableFields"] = array();
$tdatapublications[".ShortName"] = "publications";
$tdatapublications[".OwnerID"] = "";
$tdatapublications[".OriginalTable"] = "Publications";


$tdatapublications[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublications[".originalPagesByType"] = $tdatapublications[".pagesByType"];
$tdatapublications[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublications[".originalPages"] = $tdatapublications[".pages"];
$tdatapublications[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublications[".originalDefaultPages"] = $tdatapublications[".defaultPages"];

//	field labels
$fieldLabelspublications = array();
$fieldToolTipspublications = array();
$pageTitlespublications = array();
$placeHolderspublications = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublications["English"] = array();
	$fieldToolTipspublications["English"] = array();
	$placeHolderspublications["English"] = array();
	$pageTitlespublications["English"] = array();
	$fieldLabelspublications["English"]["publication_id"] = "Publication Id";
	$fieldToolTipspublications["English"]["publication_id"] = "";
	$placeHolderspublications["English"]["publication_id"] = "";
	$fieldLabelspublications["English"]["title"] = "Title";
	$fieldToolTipspublications["English"]["title"] = "";
	$placeHolderspublications["English"]["title"] = "";
	$fieldLabelspublications["English"]["level"] = "Level";
	$fieldToolTipspublications["English"]["level"] = "";
	$placeHolderspublications["English"]["level"] = "";
	if (count($fieldToolTipspublications["English"]))
		$tdatapublications[".isUseToolTips"] = true;
}


	$tdatapublications[".NCSearch"] = true;



$tdatapublications[".shortTableName"] = "publications";
$tdatapublications[".nSecOptions"] = 0;

$tdatapublications[".mainTableOwnerID"] = "";
$tdatapublications[".entityType"] = 0;
$tdatapublications[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatapublications[".strOriginalTableName"] = "Publications";

	



$tdatapublications[".showAddInPopup"] = false;

$tdatapublications[".showEditInPopup"] = false;

$tdatapublications[".showViewInPopup"] = false;

$tdatapublications[".listAjax"] = false;
//	temporary
//$tdatapublications[".listAjax"] = false;

	$tdatapublications[".audit"] = false;

	$tdatapublications[".locking"] = false;


$pages = $tdatapublications[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublications[".edit"] = true;
	$tdatapublications[".afterEditAction"] = 1;
	$tdatapublications[".closePopupAfterEdit"] = 1;
	$tdatapublications[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublications[".add"] = true;
$tdatapublications[".afterAddAction"] = 1;
$tdatapublications[".closePopupAfterAdd"] = 1;
$tdatapublications[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublications[".list"] = true;
}



$tdatapublications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublications[".printFriendly"] = true;
}



$tdatapublications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublications[".isUseAjaxSuggest"] = true;





$tdatapublications[".ajaxCodeSnippetAdded"] = false;

$tdatapublications[".buttonsAdded"] = false;

$tdatapublications[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublications[".isUseTimeForSearch"] = false;


$tdatapublications[".badgeColor"] = "4169E1";


$tdatapublications[".allSearchFields"] = array();
$tdatapublications[".filterFields"] = array();
$tdatapublications[".requiredSearchFields"] = array();

$tdatapublications[".googleLikeFields"] = array();
$tdatapublications[".googleLikeFields"][] = "publication_id";
$tdatapublications[".googleLikeFields"][] = "title";
$tdatapublications[".googleLikeFields"][] = "level";



$tdatapublications[".tableType"] = "list";

$tdatapublications[".printerPageOrientation"] = 0;
$tdatapublications[".nPrinterPageScale"] = 100;

$tdatapublications[".nPrinterSplitRecords"] = 40;

$tdatapublications[".geocodingEnabled"] = false;










$tdatapublications[".pageSize"] = 20;

$tdatapublications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublications[".strOrderBy"] = $tstrOrderBy;

$tdatapublications[".orderindexes"] = array();


$tdatapublications[".sqlHead"] = "SELECT publication_id,  	title,  	`level`";
$tdatapublications[".sqlFrom"] = "FROM Publications";
$tdatapublications[".sqlWhereExpr"] = "";
$tdatapublications[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublications[".arrGroupsPerPage"] = $arrGPP;

$tdatapublications[".highlightSearchResults"] = true;

$tableKeyspublications = array();
$tableKeyspublications[] = "publication_id";
$tdatapublications[".Keys"] = $tableKeyspublications;


$tdatapublications[".hideMobileList"] = array();




//	publication_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "publication_id";
	$fdata["GoodName"] = "publication_id";
	$fdata["ownerTable"] = "Publications";
	$fdata["Label"] = GetFieldLabel("Publications","publication_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "publication_id";

		$fdata["sourceSingle"] = "publication_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "publication_id";

	
	
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


	$tdatapublications["publication_id"] = $fdata;
		$tdatapublications[".searchableFields"][] = "publication_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "Publications";
	$fdata["Label"] = GetFieldLabel("Publications","title");
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


	$tdatapublications["title"] = $fdata;
		$tdatapublications[".searchableFields"][] = "title";
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "Publications";
	$fdata["Label"] = GetFieldLabel("Publications","level");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "level";

		$fdata["sourceSingle"] = "level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`level`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "National";
	$edata["LookupValues"][] = "Regional";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatapublications["level"] = $fdata;
		$tdatapublications[".searchableFields"][] = "level";


$tables_data["Publications"]=&$tdatapublications;
$field_labels["Publications"] = &$fieldLabelspublications;
$fieldToolTips["Publications"] = &$fieldToolTipspublications;
$placeHolders["Publications"] = &$placeHolderspublications;
$page_titles["Publications"] = &$pageTitlespublications;


changeTextControlsToDate( "Publications" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Publications"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Publications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_publications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "publication_id,  	title,  	`level`";
$proto0["m_strFrom"] = "FROM Publications";
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
	"m_strName" => "publication_id",
	"m_strTable" => "Publications",
	"m_srcTableName" => "Publications"
));

$proto6["m_sql"] = "publication_id";
$proto6["m_srcTableName"] = "Publications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "Publications",
	"m_srcTableName" => "Publications"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "Publications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "Publications",
	"m_srcTableName" => "Publications"
));

$proto10["m_sql"] = "`level`";
$proto10["m_srcTableName"] = "Publications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "Publications";
$proto13["m_srcTableName"] = "Publications";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "publication_id";
$proto13["m_columns"][] = "title";
$proto13["m_columns"][] = "level";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "Publications";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Publications";
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
$proto0["m_srcTableName"]="Publications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_publications = createSqlQuery_publications();


	
						;

			

$tdatapublications[".sqlquery"] = $queryData_publications;



$tdatapublications[".hasEvents"] = false;

?>