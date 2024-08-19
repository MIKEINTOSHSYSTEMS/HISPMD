<?php
$tdatamfr_zone = array();
$tdatamfr_zone[".searchableFields"] = array();
$tdatamfr_zone[".ShortName"] = "mfr_zone";
$tdatamfr_zone[".OwnerID"] = "";
$tdatamfr_zone[".OriginalTable"] = "public.mfr_zone";


$tdatamfr_zone[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_zone[".originalPagesByType"] = $tdatamfr_zone[".pagesByType"];
$tdatamfr_zone[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_zone[".originalPages"] = $tdatamfr_zone[".pages"];
$tdatamfr_zone[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_zone[".originalDefaultPages"] = $tdatamfr_zone[".defaultPages"];

//	field labels
$fieldLabelsmfr_zone = array();
$fieldToolTipsmfr_zone = array();
$pageTitlesmfr_zone = array();
$placeHoldersmfr_zone = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_zone["English"] = array();
	$fieldToolTipsmfr_zone["English"] = array();
	$placeHoldersmfr_zone["English"] = array();
	$pageTitlesmfr_zone["English"] = array();
	$fieldLabelsmfr_zone["English"]["zone"] = "Zone";
	$fieldToolTipsmfr_zone["English"]["zone"] = "";
	$placeHoldersmfr_zone["English"]["zone"] = "";
	$fieldLabelsmfr_zone["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_zone["English"]["lat"] = "";
	$placeHoldersmfr_zone["English"]["lat"] = "";
	$fieldLabelsmfr_zone["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_zone["English"]["lng"] = "";
	$placeHoldersmfr_zone["English"]["lng"] = "";
	$fieldLabelsmfr_zone["English"]["count"] = "Count";
	$fieldToolTipsmfr_zone["English"]["count"] = "";
	$placeHoldersmfr_zone["English"]["count"] = "";
	if (count($fieldToolTipsmfr_zone["English"]))
		$tdatamfr_zone[".isUseToolTips"] = true;
}


	$tdatamfr_zone[".NCSearch"] = true;



$tdatamfr_zone[".shortTableName"] = "mfr_zone";
$tdatamfr_zone[".nSecOptions"] = 0;

$tdatamfr_zone[".mainTableOwnerID"] = "";
$tdatamfr_zone[".entityType"] = 0;
$tdatamfr_zone[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_zone[".strOriginalTableName"] = "public.mfr_zone";

	



$tdatamfr_zone[".showAddInPopup"] = false;

$tdatamfr_zone[".showEditInPopup"] = false;

$tdatamfr_zone[".showViewInPopup"] = false;

$tdatamfr_zone[".listAjax"] = false;
//	temporary
//$tdatamfr_zone[".listAjax"] = false;

	$tdatamfr_zone[".audit"] = true;

	$tdatamfr_zone[".locking"] = true;


$pages = $tdatamfr_zone[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_zone[".edit"] = true;
	$tdatamfr_zone[".afterEditAction"] = 1;
	$tdatamfr_zone[".closePopupAfterEdit"] = 1;
	$tdatamfr_zone[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_zone[".add"] = true;
$tdatamfr_zone[".afterAddAction"] = 1;
$tdatamfr_zone[".closePopupAfterAdd"] = 1;
$tdatamfr_zone[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_zone[".list"] = true;
}



$tdatamfr_zone[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_zone[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_zone[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_zone[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_zone[".printFriendly"] = true;
}



$tdatamfr_zone[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_zone[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_zone[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_zone[".isUseAjaxSuggest"] = true;





$tdatamfr_zone[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_zone[".buttonsAdded"] = false;

$tdatamfr_zone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_zone[".isUseTimeForSearch"] = false;


$tdatamfr_zone[".badgeColor"] = "CFAE83";


$tdatamfr_zone[".allSearchFields"] = array();
$tdatamfr_zone[".filterFields"] = array();
$tdatamfr_zone[".requiredSearchFields"] = array();

$tdatamfr_zone[".googleLikeFields"] = array();
$tdatamfr_zone[".googleLikeFields"][] = "zone";
$tdatamfr_zone[".googleLikeFields"][] = "lat";
$tdatamfr_zone[".googleLikeFields"][] = "lng";
$tdatamfr_zone[".googleLikeFields"][] = "count";



$tdatamfr_zone[".tableType"] = "list";

$tdatamfr_zone[".printerPageOrientation"] = 0;
$tdatamfr_zone[".nPrinterPageScale"] = 100;

$tdatamfr_zone[".nPrinterSplitRecords"] = 40;

$tdatamfr_zone[".geocodingEnabled"] = false;










$tdatamfr_zone[".pageSize"] = 20;

$tdatamfr_zone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_zone[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_zone[".orderindexes"] = array();


$tdatamfr_zone[".sqlHead"] = "SELECT \"zone\",  	lat,  	lng,  	\"count\"";
$tdatamfr_zone[".sqlFrom"] = "FROM \"public\".mfr_zone";
$tdatamfr_zone[".sqlWhereExpr"] = "";
$tdatamfr_zone[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_zone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_zone[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_zone[".highlightSearchResults"] = true;

$tableKeysmfr_zone = array();
$tdatamfr_zone[".Keys"] = $tableKeysmfr_zone;


$tdatamfr_zone[".hideMobileList"] = array();




//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "public.mfr_zone";
	$fdata["Label"] = GetFieldLabel("public_mfr_zone","zone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zone";

		$fdata["sourceSingle"] = "zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"zone\"";

	
	
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


	$tdatamfr_zone["zone"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "zone";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "public.mfr_zone";
	$fdata["Label"] = GetFieldLabel("public_mfr_zone","lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lat";

		$fdata["sourceSingle"] = "lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lat";

	
	
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


	$tdatamfr_zone["lat"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "public.mfr_zone";
	$fdata["Label"] = GetFieldLabel("public_mfr_zone","lng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lng";

		$fdata["sourceSingle"] = "lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lng";

	
	
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


	$tdatamfr_zone["lng"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "public.mfr_zone";
	$fdata["Label"] = GetFieldLabel("public_mfr_zone","count");
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


	$tdatamfr_zone["count"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "count";


$tables_data["public.mfr_zone"]=&$tdatamfr_zone;
$field_labels["public_mfr_zone"] = &$fieldLabelsmfr_zone;
$fieldToolTips["public_mfr_zone"] = &$fieldToolTipsmfr_zone;
$placeHolders["public_mfr_zone"] = &$placeHoldersmfr_zone;
$page_titles["public_mfr_zone"] = &$pageTitlesmfr_zone;


changeTextControlsToDate( "public.mfr_zone" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_zone"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_zone"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_zone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"zone\",  	lat,  	lng,  	\"count\"";
$proto0["m_strFrom"] = "FROM \"public\".mfr_zone";
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
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_zone",
	"m_srcTableName" => "public.mfr_zone"
));

$proto6["m_sql"] = "\"zone\"";
$proto6["m_srcTableName"] = "public.mfr_zone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "public.mfr_zone",
	"m_srcTableName" => "public.mfr_zone"
));

$proto8["m_sql"] = "lat";
$proto8["m_srcTableName"] = "public.mfr_zone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "public.mfr_zone",
	"m_srcTableName" => "public.mfr_zone"
));

$proto10["m_sql"] = "lng";
$proto10["m_srcTableName"] = "public.mfr_zone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "public.mfr_zone",
	"m_srcTableName" => "public.mfr_zone"
));

$proto12["m_sql"] = "\"count\"";
$proto12["m_srcTableName"] = "public.mfr_zone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.mfr_zone";
$proto15["m_srcTableName"] = "public.mfr_zone";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "zone";
$proto15["m_columns"][] = "lat";
$proto15["m_columns"][] = "lng";
$proto15["m_columns"][] = "count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".mfr_zone";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.mfr_zone";
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
$proto0["m_srcTableName"]="public.mfr_zone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_zone = createSqlQuery_mfr_zone();


	
																												;

				

$tdatamfr_zone[".sqlquery"] = $queryData_mfr_zone;



$tdatamfr_zone[".hasEvents"] = false;

?>