<?php
$tdatadataquality = array();
$tdatadataquality[".searchableFields"] = array();
$tdatadataquality[".ShortName"] = "dataquality";
$tdatadataquality[".OwnerID"] = "";
$tdatadataquality[".OriginalTable"] = "public.dataquality";


$tdatadataquality[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadataquality[".originalPagesByType"] = $tdatadataquality[".pagesByType"];
$tdatadataquality[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadataquality[".originalPages"] = $tdatadataquality[".pages"];
$tdatadataquality[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadataquality[".originalDefaultPages"] = $tdatadataquality[".defaultPages"];

//	field labels
$fieldLabelsdataquality = array();
$fieldToolTipsdataquality = array();
$pageTitlesdataquality = array();
$placeHoldersdataquality = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdataquality["English"] = array();
	$fieldToolTipsdataquality["English"] = array();
	$placeHoldersdataquality["English"] = array();
	$pageTitlesdataquality["English"] = array();
	$fieldLabelsdataquality["English"]["dq_id"] = "Dq Id";
	$fieldToolTipsdataquality["English"]["dq_id"] = "";
	$placeHoldersdataquality["English"]["dq_id"] = "";
	$fieldLabelsdataquality["English"]["report_type"] = "Report Type";
	$fieldToolTipsdataquality["English"]["report_type"] = "";
	$placeHoldersdataquality["English"]["report_type"] = "";
	$fieldLabelsdataquality["English"]["timeliness_percentage"] = "Timeliness Percentage";
	$fieldToolTipsdataquality["English"]["timeliness_percentage"] = "";
	$placeHoldersdataquality["English"]["timeliness_percentage"] = "";
	$fieldLabelsdataquality["English"]["completeness_percentage"] = "Completeness Percentage";
	$fieldToolTipsdataquality["English"]["completeness_percentage"] = "";
	$placeHoldersdataquality["English"]["completeness_percentage"] = "";
	if (count($fieldToolTipsdataquality["English"]))
		$tdatadataquality[".isUseToolTips"] = true;
}


	$tdatadataquality[".NCSearch"] = true;



$tdatadataquality[".shortTableName"] = "dataquality";
$tdatadataquality[".nSecOptions"] = 0;

$tdatadataquality[".mainTableOwnerID"] = "";
$tdatadataquality[".entityType"] = 0;
$tdatadataquality[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadataquality[".strOriginalTableName"] = "public.dataquality";

	



$tdatadataquality[".showAddInPopup"] = false;

$tdatadataquality[".showEditInPopup"] = false;

$tdatadataquality[".showViewInPopup"] = false;

$tdatadataquality[".listAjax"] = false;
//	temporary
//$tdatadataquality[".listAjax"] = false;

	$tdatadataquality[".audit"] = true;

	$tdatadataquality[".locking"] = false;


$pages = $tdatadataquality[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadataquality[".edit"] = true;
	$tdatadataquality[".afterEditAction"] = 1;
	$tdatadataquality[".closePopupAfterEdit"] = 1;
	$tdatadataquality[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadataquality[".add"] = true;
$tdatadataquality[".afterAddAction"] = 1;
$tdatadataquality[".closePopupAfterAdd"] = 1;
$tdatadataquality[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadataquality[".list"] = true;
}



$tdatadataquality[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadataquality[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadataquality[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadataquality[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadataquality[".printFriendly"] = true;
}



$tdatadataquality[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadataquality[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadataquality[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadataquality[".isUseAjaxSuggest"] = true;





$tdatadataquality[".ajaxCodeSnippetAdded"] = false;

$tdatadataquality[".buttonsAdded"] = false;

$tdatadataquality[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadataquality[".isUseTimeForSearch"] = false;


$tdatadataquality[".badgeColor"] = "4682B4";


$tdatadataquality[".allSearchFields"] = array();
$tdatadataquality[".filterFields"] = array();
$tdatadataquality[".requiredSearchFields"] = array();

$tdatadataquality[".googleLikeFields"] = array();
$tdatadataquality[".googleLikeFields"][] = "dq_id";
$tdatadataquality[".googleLikeFields"][] = "report_type";
$tdatadataquality[".googleLikeFields"][] = "timeliness_percentage";
$tdatadataquality[".googleLikeFields"][] = "completeness_percentage";



$tdatadataquality[".tableType"] = "list";

$tdatadataquality[".printerPageOrientation"] = 0;
$tdatadataquality[".nPrinterPageScale"] = 100;

$tdatadataquality[".nPrinterSplitRecords"] = 40;

$tdatadataquality[".geocodingEnabled"] = false;










$tdatadataquality[".pageSize"] = 20;

$tdatadataquality[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadataquality[".strOrderBy"] = $tstrOrderBy;

$tdatadataquality[".orderindexes"] = array();


$tdatadataquality[".sqlHead"] = "SELECT dq_id,  	report_type,  	timeliness_percentage,  	completeness_percentage";
$tdatadataquality[".sqlFrom"] = "FROM \"public\".dataquality";
$tdatadataquality[".sqlWhereExpr"] = "";
$tdatadataquality[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadataquality[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadataquality[".arrGroupsPerPage"] = $arrGPP;

$tdatadataquality[".highlightSearchResults"] = true;

$tableKeysdataquality = array();
$tableKeysdataquality[] = "dq_id";
$tdatadataquality[".Keys"] = $tableKeysdataquality;


$tdatadataquality[".hideMobileList"] = array();




//	dq_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dq_id";
	$fdata["GoodName"] = "dq_id";
	$fdata["ownerTable"] = "public.dataquality";
	$fdata["Label"] = GetFieldLabel("public_dataquality","dq_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "dq_id";

		$fdata["sourceSingle"] = "dq_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dq_id";

	
	
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


	$tdatadataquality["dq_id"] = $fdata;
		$tdatadataquality[".searchableFields"][] = "dq_id";
//	report_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "report_type";
	$fdata["GoodName"] = "report_type";
	$fdata["ownerTable"] = "public.dataquality";
	$fdata["Label"] = GetFieldLabel("public_dataquality","report_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "report_type";

		$fdata["sourceSingle"] = "report_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_type";

	
	
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


	$tdatadataquality["report_type"] = $fdata;
		$tdatadataquality[".searchableFields"][] = "report_type";
//	timeliness_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "timeliness_percentage";
	$fdata["GoodName"] = "timeliness_percentage";
	$fdata["ownerTable"] = "public.dataquality";
	$fdata["Label"] = GetFieldLabel("public_dataquality","timeliness_percentage");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "timeliness_percentage";

		$fdata["sourceSingle"] = "timeliness_percentage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeliness_percentage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatadataquality["timeliness_percentage"] = $fdata;
		$tdatadataquality[".searchableFields"][] = "timeliness_percentage";
//	completeness_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "completeness_percentage";
	$fdata["GoodName"] = "completeness_percentage";
	$fdata["ownerTable"] = "public.dataquality";
	$fdata["Label"] = GetFieldLabel("public_dataquality","completeness_percentage");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "completeness_percentage";

		$fdata["sourceSingle"] = "completeness_percentage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "completeness_percentage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatadataquality["completeness_percentage"] = $fdata;
		$tdatadataquality[".searchableFields"][] = "completeness_percentage";


$tables_data["public.dataquality"]=&$tdatadataquality;
$field_labels["public_dataquality"] = &$fieldLabelsdataquality;
$fieldToolTips["public_dataquality"] = &$fieldToolTipsdataquality;
$placeHolders["public_dataquality"] = &$placeHoldersdataquality;
$page_titles["public_dataquality"] = &$pageTitlesdataquality;


changeTextControlsToDate( "public.dataquality" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.dataquality"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.dataquality"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dataquality()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dq_id,  	report_type,  	timeliness_percentage,  	completeness_percentage";
$proto0["m_strFrom"] = "FROM \"public\".dataquality";
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
	"m_strName" => "dq_id",
	"m_strTable" => "public.dataquality",
	"m_srcTableName" => "public.dataquality"
));

$proto6["m_sql"] = "dq_id";
$proto6["m_srcTableName"] = "public.dataquality";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "report_type",
	"m_strTable" => "public.dataquality",
	"m_srcTableName" => "public.dataquality"
));

$proto8["m_sql"] = "report_type";
$proto8["m_srcTableName"] = "public.dataquality";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "timeliness_percentage",
	"m_strTable" => "public.dataquality",
	"m_srcTableName" => "public.dataquality"
));

$proto10["m_sql"] = "timeliness_percentage";
$proto10["m_srcTableName"] = "public.dataquality";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "completeness_percentage",
	"m_strTable" => "public.dataquality",
	"m_srcTableName" => "public.dataquality"
));

$proto12["m_sql"] = "completeness_percentage";
$proto12["m_srcTableName"] = "public.dataquality";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.dataquality";
$proto15["m_srcTableName"] = "public.dataquality";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "dq_id";
$proto15["m_columns"][] = "report_type";
$proto15["m_columns"][] = "timeliness_percentage";
$proto15["m_columns"][] = "completeness_percentage";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".dataquality";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.dataquality";
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
$proto0["m_srcTableName"]="public.dataquality";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dataquality = createSqlQuery_dataquality();


	
																												;

				

$tdatadataquality[".sqlquery"] = $queryData_dataquality;



$tdatadataquality[".hasEvents"] = false;

?>