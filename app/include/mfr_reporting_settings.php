<?php
$tdatamfr_reporting = array();
$tdatamfr_reporting[".searchableFields"] = array();
$tdatamfr_reporting[".ShortName"] = "mfr_reporting";
$tdatamfr_reporting[".OwnerID"] = "";
$tdatamfr_reporting[".OriginalTable"] = "MFR_Reporting";


$tdatamfr_reporting[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_reporting[".originalPagesByType"] = $tdatamfr_reporting[".pagesByType"];
$tdatamfr_reporting[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_reporting[".originalPages"] = $tdatamfr_reporting[".pages"];
$tdatamfr_reporting[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_reporting[".originalDefaultPages"] = $tdatamfr_reporting[".defaultPages"];

//	field labels
$fieldLabelsmfr_reporting = array();
$fieldToolTipsmfr_reporting = array();
$pageTitlesmfr_reporting = array();
$placeHoldersmfr_reporting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_reporting["English"] = array();
	$fieldToolTipsmfr_reporting["English"] = array();
	$placeHoldersmfr_reporting["English"] = array();
	$pageTitlesmfr_reporting["English"] = array();
	$fieldLabelsmfr_reporting["English"]["Type"] = "Type";
	$fieldToolTipsmfr_reporting["English"]["Type"] = "";
	$placeHoldersmfr_reporting["English"]["Type"] = "";
	$fieldLabelsmfr_reporting["English"]["Name"] = "Name";
	$fieldToolTipsmfr_reporting["English"]["Name"] = "";
	$placeHoldersmfr_reporting["English"]["Name"] = "";
	$fieldLabelsmfr_reporting["English"]["Count"] = "Count";
	$fieldToolTipsmfr_reporting["English"]["Count"] = "";
	$placeHoldersmfr_reporting["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_reporting["English"]))
		$tdatamfr_reporting[".isUseToolTips"] = true;
}


	$tdatamfr_reporting[".NCSearch"] = true;



$tdatamfr_reporting[".shortTableName"] = "mfr_reporting";
$tdatamfr_reporting[".nSecOptions"] = 0;

$tdatamfr_reporting[".mainTableOwnerID"] = "";
$tdatamfr_reporting[".entityType"] = 0;
$tdatamfr_reporting[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_reporting[".strOriginalTableName"] = "MFR_Reporting";

	



$tdatamfr_reporting[".showAddInPopup"] = false;

$tdatamfr_reporting[".showEditInPopup"] = false;

$tdatamfr_reporting[".showViewInPopup"] = false;

$tdatamfr_reporting[".listAjax"] = false;
//	temporary
//$tdatamfr_reporting[".listAjax"] = false;

	$tdatamfr_reporting[".audit"] = false;

	$tdatamfr_reporting[".locking"] = false;


$pages = $tdatamfr_reporting[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_reporting[".edit"] = true;
	$tdatamfr_reporting[".afterEditAction"] = 1;
	$tdatamfr_reporting[".closePopupAfterEdit"] = 1;
	$tdatamfr_reporting[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_reporting[".add"] = true;
$tdatamfr_reporting[".afterAddAction"] = 1;
$tdatamfr_reporting[".closePopupAfterAdd"] = 1;
$tdatamfr_reporting[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_reporting[".list"] = true;
}



$tdatamfr_reporting[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_reporting[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_reporting[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_reporting[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_reporting[".printFriendly"] = true;
}



$tdatamfr_reporting[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_reporting[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_reporting[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_reporting[".isUseAjaxSuggest"] = true;





$tdatamfr_reporting[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_reporting[".buttonsAdded"] = false;

$tdatamfr_reporting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_reporting[".isUseTimeForSearch"] = false;


$tdatamfr_reporting[".badgeColor"] = "db7093";


$tdatamfr_reporting[".allSearchFields"] = array();
$tdatamfr_reporting[".filterFields"] = array();
$tdatamfr_reporting[".requiredSearchFields"] = array();

$tdatamfr_reporting[".googleLikeFields"] = array();
$tdatamfr_reporting[".googleLikeFields"][] = "Type";
$tdatamfr_reporting[".googleLikeFields"][] = "Name";
$tdatamfr_reporting[".googleLikeFields"][] = "Count";



$tdatamfr_reporting[".tableType"] = "list";

$tdatamfr_reporting[".printerPageOrientation"] = 0;
$tdatamfr_reporting[".nPrinterPageScale"] = 100;

$tdatamfr_reporting[".nPrinterSplitRecords"] = 40;

$tdatamfr_reporting[".geocodingEnabled"] = false;










$tdatamfr_reporting[".pageSize"] = 20;

$tdatamfr_reporting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_reporting[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_reporting[".orderindexes"] = array();


$tdatamfr_reporting[".sqlHead"] = "SELECT `Type`,  	Name,  	`Count`";
$tdatamfr_reporting[".sqlFrom"] = "FROM MFR_Reporting";
$tdatamfr_reporting[".sqlWhereExpr"] = "";
$tdatamfr_reporting[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_reporting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_reporting[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_reporting[".highlightSearchResults"] = true;

$tableKeysmfr_reporting = array();
$tdatamfr_reporting[".Keys"] = $tableKeysmfr_reporting;


$tdatamfr_reporting[".hideMobileList"] = array();




//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "MFR_Reporting";
	$fdata["Label"] = GetFieldLabel("MFR_Reporting","Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Type";

		$fdata["sourceSingle"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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


	$tdatamfr_reporting["Type"] = $fdata;
		$tdatamfr_reporting[".searchableFields"][] = "Type";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "MFR_Reporting";
	$fdata["Label"] = GetFieldLabel("MFR_Reporting","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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


	$tdatamfr_reporting["Name"] = $fdata;
		$tdatamfr_reporting[".searchableFields"][] = "Name";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Reporting";
	$fdata["Label"] = GetFieldLabel("MFR_Reporting","Count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Count";

		$fdata["sourceSingle"] = "Count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Count`";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatamfr_reporting["Count"] = $fdata;
		$tdatamfr_reporting[".searchableFields"][] = "Count";


$tables_data["MFR_Reporting"]=&$tdatamfr_reporting;
$field_labels["MFR_Reporting"] = &$fieldLabelsmfr_reporting;
$fieldToolTips["MFR_Reporting"] = &$fieldToolTipsmfr_reporting;
$placeHolders["MFR_Reporting"] = &$placeHoldersmfr_reporting;
$page_titles["MFR_Reporting"] = &$pageTitlesmfr_reporting;


changeTextControlsToDate( "MFR_Reporting" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Reporting"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Reporting"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_reporting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Type`,  	Name,  	`Count`";
$proto0["m_strFrom"] = "FROM MFR_Reporting";
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
	"m_strName" => "Type",
	"m_strTable" => "MFR_Reporting",
	"m_srcTableName" => "MFR_Reporting"
));

$proto6["m_sql"] = "`Type`";
$proto6["m_srcTableName"] = "MFR_Reporting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "MFR_Reporting",
	"m_srcTableName" => "MFR_Reporting"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "MFR_Reporting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Reporting",
	"m_srcTableName" => "MFR_Reporting"
));

$proto10["m_sql"] = "`Count`";
$proto10["m_srcTableName"] = "MFR_Reporting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MFR_Reporting";
$proto13["m_srcTableName"] = "MFR_Reporting";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Type";
$proto13["m_columns"][] = "Name";
$proto13["m_columns"][] = "Count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MFR_Reporting";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MFR_Reporting";
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
$proto0["m_srcTableName"]="MFR_Reporting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_reporting = createSqlQuery_mfr_reporting();


	
		;

			

$tdatamfr_reporting[".sqlquery"] = $queryData_mfr_reporting;



include_once(getabspath("include/mfr_reporting_events.php"));
$tdatamfr_reporting[".hasEvents"] = true;

?>