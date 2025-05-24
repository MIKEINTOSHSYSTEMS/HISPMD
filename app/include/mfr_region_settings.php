<?php
$tdatamfr_region = array();
$tdatamfr_region[".searchableFields"] = array();
$tdatamfr_region[".ShortName"] = "mfr_region";
$tdatamfr_region[".OwnerID"] = "";
$tdatamfr_region[".OriginalTable"] = "public.mfr_region";


$tdatamfr_region[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_region[".originalPagesByType"] = $tdatamfr_region[".pagesByType"];
$tdatamfr_region[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_region[".originalPages"] = $tdatamfr_region[".pages"];
$tdatamfr_region[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_region[".originalDefaultPages"] = $tdatamfr_region[".defaultPages"];

//	field labels
$fieldLabelsmfr_region = array();
$fieldToolTipsmfr_region = array();
$pageTitlesmfr_region = array();
$placeHoldersmfr_region = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_region["English"] = array();
	$fieldToolTipsmfr_region["English"] = array();
	$placeHoldersmfr_region["English"] = array();
	$pageTitlesmfr_region["English"] = array();
	$fieldLabelsmfr_region["English"]["region"] = "Region";
	$fieldToolTipsmfr_region["English"]["region"] = "";
	$placeHoldersmfr_region["English"]["region"] = "";
	$fieldLabelsmfr_region["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_region["English"]["lat"] = "";
	$placeHoldersmfr_region["English"]["lat"] = "";
	$fieldLabelsmfr_region["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_region["English"]["lng"] = "";
	$placeHoldersmfr_region["English"]["lng"] = "";
	$fieldLabelsmfr_region["English"]["count"] = "Count";
	$fieldToolTipsmfr_region["English"]["count"] = "";
	$placeHoldersmfr_region["English"]["count"] = "";
	if (count($fieldToolTipsmfr_region["English"]))
		$tdatamfr_region[".isUseToolTips"] = true;
}


	$tdatamfr_region[".NCSearch"] = true;



$tdatamfr_region[".shortTableName"] = "mfr_region";
$tdatamfr_region[".nSecOptions"] = 0;

$tdatamfr_region[".mainTableOwnerID"] = "";
$tdatamfr_region[".entityType"] = 0;
$tdatamfr_region[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_region[".strOriginalTableName"] = "public.mfr_region";

	



$tdatamfr_region[".showAddInPopup"] = false;

$tdatamfr_region[".showEditInPopup"] = false;

$tdatamfr_region[".showViewInPopup"] = false;

$tdatamfr_region[".listAjax"] = false;
//	temporary
//$tdatamfr_region[".listAjax"] = false;

	$tdatamfr_region[".audit"] = true;

	$tdatamfr_region[".locking"] = false;


$pages = $tdatamfr_region[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_region[".edit"] = true;
	$tdatamfr_region[".afterEditAction"] = 1;
	$tdatamfr_region[".closePopupAfterEdit"] = 1;
	$tdatamfr_region[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_region[".add"] = true;
$tdatamfr_region[".afterAddAction"] = 1;
$tdatamfr_region[".closePopupAfterAdd"] = 1;
$tdatamfr_region[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_region[".list"] = true;
}



$tdatamfr_region[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_region[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_region[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_region[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_region[".printFriendly"] = true;
}



$tdatamfr_region[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_region[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_region[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_region[".isUseAjaxSuggest"] = true;



			

$tdatamfr_region[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_region[".buttonsAdded"] = false;

$tdatamfr_region[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_region[".isUseTimeForSearch"] = false;


$tdatamfr_region[".badgeColor"] = "5F9EA0";


$tdatamfr_region[".allSearchFields"] = array();
$tdatamfr_region[".filterFields"] = array();
$tdatamfr_region[".requiredSearchFields"] = array();

$tdatamfr_region[".googleLikeFields"] = array();
$tdatamfr_region[".googleLikeFields"][] = "region";



$tdatamfr_region[".tableType"] = "list";

$tdatamfr_region[".printerPageOrientation"] = 0;
$tdatamfr_region[".nPrinterPageScale"] = 100;

$tdatamfr_region[".nPrinterSplitRecords"] = 40;

$tdatamfr_region[".geocodingEnabled"] = false;










$tdatamfr_region[".pageSize"] = 20;

$tdatamfr_region[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_region[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_region[".orderindexes"] = array();


$tdatamfr_region[".sqlHead"] = "SELECT region,  	lat,  	lng,  	\"count\"";
$tdatamfr_region[".sqlFrom"] = "FROM \"public\".mfr_region";
$tdatamfr_region[".sqlWhereExpr"] = "";
$tdatamfr_region[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_region[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_region[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_region[".highlightSearchResults"] = true;

$tableKeysmfr_region = array();
$tdatamfr_region[".Keys"] = $tableKeysmfr_region;


$tdatamfr_region[".hideMobileList"] = array();




//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("public_mfr_region","region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region";

		$fdata["sourceSingle"] = "region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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
	$edata["LookupTable"] = "public.mfr_region";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region";

	

	
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


	$tdatamfr_region["region"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "region";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("public_mfr_region","lat");
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


	$tdatamfr_region["lat"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("public_mfr_region","lng");
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


	$tdatamfr_region["lng"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "public.mfr_region";
	$fdata["Label"] = GetFieldLabel("public_mfr_region","count");
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


	$tdatamfr_region["count"] = $fdata;
		$tdatamfr_region[".searchableFields"][] = "count";


$tables_data["public.mfr_region"]=&$tdatamfr_region;
$field_labels["public_mfr_region"] = &$fieldLabelsmfr_region;
$fieldToolTips["public_mfr_region"] = &$fieldToolTipsmfr_region;
$placeHolders["public_mfr_region"] = &$placeHoldersmfr_region;
$page_titles["public_mfr_region"] = &$pageTitlesmfr_region;


changeTextControlsToDate( "public.mfr_region" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_region"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_region"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_region()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region,  	lat,  	lng,  	\"count\"";
$proto0["m_strFrom"] = "FROM \"public\".mfr_region";
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
	"m_strName" => "region",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "public.mfr_region"
));

$proto6["m_sql"] = "region";
$proto6["m_srcTableName"] = "public.mfr_region";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "public.mfr_region"
));

$proto8["m_sql"] = "lat";
$proto8["m_srcTableName"] = "public.mfr_region";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "public.mfr_region"
));

$proto10["m_sql"] = "lng";
$proto10["m_srcTableName"] = "public.mfr_region";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "public.mfr_region",
	"m_srcTableName" => "public.mfr_region"
));

$proto12["m_sql"] = "\"count\"";
$proto12["m_srcTableName"] = "public.mfr_region";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.mfr_region";
$proto15["m_srcTableName"] = "public.mfr_region";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "region";
$proto15["m_columns"][] = "lat";
$proto15["m_columns"][] = "lng";
$proto15["m_columns"][] = "count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".mfr_region";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.mfr_region";
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
$proto0["m_srcTableName"]="public.mfr_region";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_region = createSqlQuery_mfr_region();


	
																												;

				

$tdatamfr_region[".sqlquery"] = $queryData_mfr_region;



$tdatamfr_region[".hasEvents"] = false;

?>