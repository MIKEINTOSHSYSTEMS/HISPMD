<?php
$tdatamfr_operational_status = array();
$tdatamfr_operational_status[".searchableFields"] = array();
$tdatamfr_operational_status[".ShortName"] = "mfr_operational_status";
$tdatamfr_operational_status[".OwnerID"] = "";
$tdatamfr_operational_status[".OriginalTable"] = "public.mfr_operational_status";


$tdatamfr_operational_status[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_operational_status[".originalPagesByType"] = $tdatamfr_operational_status[".pagesByType"];
$tdatamfr_operational_status[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_operational_status[".originalPages"] = $tdatamfr_operational_status[".pages"];
$tdatamfr_operational_status[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_operational_status[".originalDefaultPages"] = $tdatamfr_operational_status[".defaultPages"];

//	field labels
$fieldLabelsmfr_operational_status = array();
$fieldToolTipsmfr_operational_status = array();
$pageTitlesmfr_operational_status = array();
$placeHoldersmfr_operational_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_operational_status["English"] = array();
	$fieldToolTipsmfr_operational_status["English"] = array();
	$placeHoldersmfr_operational_status["English"] = array();
	$pageTitlesmfr_operational_status["English"] = array();
	$fieldLabelsmfr_operational_status["English"]["operationalstatus"] = "Operationalstatus";
	$fieldToolTipsmfr_operational_status["English"]["operationalstatus"] = "";
	$placeHoldersmfr_operational_status["English"]["operationalstatus"] = "";
	$fieldLabelsmfr_operational_status["English"]["status"] = "Status";
	$fieldToolTipsmfr_operational_status["English"]["status"] = "";
	$placeHoldersmfr_operational_status["English"]["status"] = "";
	$fieldLabelsmfr_operational_status["English"]["count"] = "Count";
	$fieldToolTipsmfr_operational_status["English"]["count"] = "";
	$placeHoldersmfr_operational_status["English"]["count"] = "";
	if (count($fieldToolTipsmfr_operational_status["English"]))
		$tdatamfr_operational_status[".isUseToolTips"] = true;
}


	$tdatamfr_operational_status[".NCSearch"] = true;



$tdatamfr_operational_status[".shortTableName"] = "mfr_operational_status";
$tdatamfr_operational_status[".nSecOptions"] = 0;

$tdatamfr_operational_status[".mainTableOwnerID"] = "";
$tdatamfr_operational_status[".entityType"] = 0;
$tdatamfr_operational_status[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_operational_status[".strOriginalTableName"] = "public.mfr_operational_status";

	



$tdatamfr_operational_status[".showAddInPopup"] = false;

$tdatamfr_operational_status[".showEditInPopup"] = false;

$tdatamfr_operational_status[".showViewInPopup"] = false;

$tdatamfr_operational_status[".listAjax"] = false;
//	temporary
//$tdatamfr_operational_status[".listAjax"] = false;

	$tdatamfr_operational_status[".audit"] = true;

	$tdatamfr_operational_status[".locking"] = false;


$pages = $tdatamfr_operational_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_operational_status[".edit"] = true;
	$tdatamfr_operational_status[".afterEditAction"] = 1;
	$tdatamfr_operational_status[".closePopupAfterEdit"] = 1;
	$tdatamfr_operational_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_operational_status[".add"] = true;
$tdatamfr_operational_status[".afterAddAction"] = 1;
$tdatamfr_operational_status[".closePopupAfterAdd"] = 1;
$tdatamfr_operational_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_operational_status[".list"] = true;
}



$tdatamfr_operational_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_operational_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_operational_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_operational_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_operational_status[".printFriendly"] = true;
}



$tdatamfr_operational_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_operational_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_operational_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_operational_status[".isUseAjaxSuggest"] = true;





$tdatamfr_operational_status[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_operational_status[".buttonsAdded"] = false;

$tdatamfr_operational_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_operational_status[".isUseTimeForSearch"] = false;


$tdatamfr_operational_status[".badgeColor"] = "9ACD32";


$tdatamfr_operational_status[".allSearchFields"] = array();
$tdatamfr_operational_status[".filterFields"] = array();
$tdatamfr_operational_status[".requiredSearchFields"] = array();

$tdatamfr_operational_status[".googleLikeFields"] = array();
$tdatamfr_operational_status[".googleLikeFields"][] = "operationalstatus";
$tdatamfr_operational_status[".googleLikeFields"][] = "status";



$tdatamfr_operational_status[".tableType"] = "list";

$tdatamfr_operational_status[".printerPageOrientation"] = 0;
$tdatamfr_operational_status[".nPrinterPageScale"] = 100;

$tdatamfr_operational_status[".nPrinterSplitRecords"] = 40;

$tdatamfr_operational_status[".geocodingEnabled"] = false;










$tdatamfr_operational_status[".pageSize"] = 20;

$tdatamfr_operational_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_operational_status[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_operational_status[".orderindexes"] = array();


$tdatamfr_operational_status[".sqlHead"] = "SELECT operationalstatus,  	status,  	\"count\"";
$tdatamfr_operational_status[".sqlFrom"] = "FROM \"public\".mfr_operational_status";
$tdatamfr_operational_status[".sqlWhereExpr"] = "";
$tdatamfr_operational_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_operational_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_operational_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_operational_status[".highlightSearchResults"] = true;

$tableKeysmfr_operational_status = array();
$tdatamfr_operational_status[".Keys"] = $tableKeysmfr_operational_status;


$tdatamfr_operational_status[".hideMobileList"] = array();




//	operationalstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "operationalstatus";
	$fdata["GoodName"] = "operationalstatus";
	$fdata["ownerTable"] = "public.mfr_operational_status";
	$fdata["Label"] = GetFieldLabel("public_mfr_operational_status","operationalstatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "operationalstatus";

		$fdata["sourceSingle"] = "operationalstatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "operationalstatus";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.mfr_operational_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "operationalstatus";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "operationalstatus";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatamfr_operational_status["operationalstatus"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "operationalstatus";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.mfr_operational_status";
	$fdata["Label"] = GetFieldLabel("public_mfr_operational_status","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.mfr_operational_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatamfr_operational_status["status"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "status";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "public.mfr_operational_status";
	$fdata["Label"] = GetFieldLabel("public_mfr_operational_status","count");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "count";

		$fdata["sourceSingle"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"count\"";

	
	
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


	$tdatamfr_operational_status["count"] = $fdata;
		$tdatamfr_operational_status[".searchableFields"][] = "count";


$tables_data["public.mfr_operational_status"]=&$tdatamfr_operational_status;
$field_labels["public_mfr_operational_status"] = &$fieldLabelsmfr_operational_status;
$fieldToolTips["public_mfr_operational_status"] = &$fieldToolTipsmfr_operational_status;
$placeHolders["public_mfr_operational_status"] = &$placeHoldersmfr_operational_status;
$page_titles["public_mfr_operational_status"] = &$pageTitlesmfr_operational_status;


changeTextControlsToDate( "public.mfr_operational_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_operational_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_operational_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_operational_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "operationalstatus,  	status,  	\"count\"";
$proto0["m_strFrom"] = "FROM \"public\".mfr_operational_status";
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
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_operational_status",
	"m_srcTableName" => "public.mfr_operational_status"
));

$proto6["m_sql"] = "operationalstatus";
$proto6["m_srcTableName"] = "public.mfr_operational_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.mfr_operational_status",
	"m_srcTableName" => "public.mfr_operational_status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "public.mfr_operational_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "public.mfr_operational_status",
	"m_srcTableName" => "public.mfr_operational_status"
));

$proto10["m_sql"] = "\"count\"";
$proto10["m_srcTableName"] = "public.mfr_operational_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.mfr_operational_status";
$proto13["m_srcTableName"] = "public.mfr_operational_status";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "operationalstatus";
$proto13["m_columns"][] = "status";
$proto13["m_columns"][] = "count";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".mfr_operational_status";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.mfr_operational_status";
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
$proto0["m_srcTableName"]="public.mfr_operational_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_operational_status = createSqlQuery_mfr_operational_status();


	
																												;

			

$tdatamfr_operational_status[".sqlquery"] = $queryData_mfr_operational_status;



$tdatamfr_operational_status[".hasEvents"] = false;

?>