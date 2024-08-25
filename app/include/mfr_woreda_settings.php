<?php
$tdatamfr_woreda = array();
$tdatamfr_woreda[".searchableFields"] = array();
$tdatamfr_woreda[".ShortName"] = "mfr_woreda";
$tdatamfr_woreda[".OwnerID"] = "";
$tdatamfr_woreda[".OriginalTable"] = "public.mfr_woreda";


$tdatamfr_woreda[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_woreda[".originalPagesByType"] = $tdatamfr_woreda[".pagesByType"];
$tdatamfr_woreda[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_woreda[".originalPages"] = $tdatamfr_woreda[".pages"];
$tdatamfr_woreda[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_woreda[".originalDefaultPages"] = $tdatamfr_woreda[".defaultPages"];

//	field labels
$fieldLabelsmfr_woreda = array();
$fieldToolTipsmfr_woreda = array();
$pageTitlesmfr_woreda = array();
$placeHoldersmfr_woreda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_woreda["English"] = array();
	$fieldToolTipsmfr_woreda["English"] = array();
	$placeHoldersmfr_woreda["English"] = array();
	$pageTitlesmfr_woreda["English"] = array();
	$fieldLabelsmfr_woreda["English"]["woreda"] = "Woreda";
	$fieldToolTipsmfr_woreda["English"]["woreda"] = "";
	$placeHoldersmfr_woreda["English"]["woreda"] = "";
	$fieldLabelsmfr_woreda["English"]["lat"] = "Lat";
	$fieldToolTipsmfr_woreda["English"]["lat"] = "";
	$placeHoldersmfr_woreda["English"]["lat"] = "";
	$fieldLabelsmfr_woreda["English"]["lng"] = "Lng";
	$fieldToolTipsmfr_woreda["English"]["lng"] = "";
	$placeHoldersmfr_woreda["English"]["lng"] = "";
	$fieldLabelsmfr_woreda["English"]["count"] = "Count";
	$fieldToolTipsmfr_woreda["English"]["count"] = "";
	$placeHoldersmfr_woreda["English"]["count"] = "";
	if (count($fieldToolTipsmfr_woreda["English"]))
		$tdatamfr_woreda[".isUseToolTips"] = true;
}


	$tdatamfr_woreda[".NCSearch"] = true;



$tdatamfr_woreda[".shortTableName"] = "mfr_woreda";
$tdatamfr_woreda[".nSecOptions"] = 0;

$tdatamfr_woreda[".mainTableOwnerID"] = "";
$tdatamfr_woreda[".entityType"] = 0;
$tdatamfr_woreda[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_woreda[".strOriginalTableName"] = "public.mfr_woreda";

	



$tdatamfr_woreda[".showAddInPopup"] = false;

$tdatamfr_woreda[".showEditInPopup"] = false;

$tdatamfr_woreda[".showViewInPopup"] = false;

$tdatamfr_woreda[".listAjax"] = false;
//	temporary
//$tdatamfr_woreda[".listAjax"] = false;

	$tdatamfr_woreda[".audit"] = true;

	$tdatamfr_woreda[".locking"] = false;


$pages = $tdatamfr_woreda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_woreda[".edit"] = true;
	$tdatamfr_woreda[".afterEditAction"] = 1;
	$tdatamfr_woreda[".closePopupAfterEdit"] = 1;
	$tdatamfr_woreda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_woreda[".add"] = true;
$tdatamfr_woreda[".afterAddAction"] = 1;
$tdatamfr_woreda[".closePopupAfterAdd"] = 1;
$tdatamfr_woreda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_woreda[".list"] = true;
}



$tdatamfr_woreda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_woreda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_woreda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_woreda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_woreda[".printFriendly"] = true;
}



$tdatamfr_woreda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_woreda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_woreda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_woreda[".isUseAjaxSuggest"] = true;





$tdatamfr_woreda[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_woreda[".buttonsAdded"] = false;

$tdatamfr_woreda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_woreda[".isUseTimeForSearch"] = false;


$tdatamfr_woreda[".badgeColor"] = "CD853F";


$tdatamfr_woreda[".allSearchFields"] = array();
$tdatamfr_woreda[".filterFields"] = array();
$tdatamfr_woreda[".requiredSearchFields"] = array();

$tdatamfr_woreda[".googleLikeFields"] = array();
$tdatamfr_woreda[".googleLikeFields"][] = "woreda";
$tdatamfr_woreda[".googleLikeFields"][] = "lat";
$tdatamfr_woreda[".googleLikeFields"][] = "lng";
$tdatamfr_woreda[".googleLikeFields"][] = "count";



$tdatamfr_woreda[".tableType"] = "list";

$tdatamfr_woreda[".printerPageOrientation"] = 0;
$tdatamfr_woreda[".nPrinterPageScale"] = 100;

$tdatamfr_woreda[".nPrinterSplitRecords"] = 40;

$tdatamfr_woreda[".geocodingEnabled"] = false;










$tdatamfr_woreda[".pageSize"] = 20;

$tdatamfr_woreda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_woreda[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_woreda[".orderindexes"] = array();


$tdatamfr_woreda[".sqlHead"] = "SELECT woreda,  	lat,  	lng,  	\"count\"";
$tdatamfr_woreda[".sqlFrom"] = "FROM \"public\".mfr_woreda";
$tdatamfr_woreda[".sqlWhereExpr"] = "";
$tdatamfr_woreda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_woreda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_woreda[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_woreda[".highlightSearchResults"] = true;

$tableKeysmfr_woreda = array();
$tdatamfr_woreda[".Keys"] = $tableKeysmfr_woreda;


$tdatamfr_woreda[".hideMobileList"] = array();




//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "public.mfr_woreda";
	$fdata["Label"] = GetFieldLabel("public_mfr_woreda","woreda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "woreda";

		$fdata["sourceSingle"] = "woreda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "woreda";

	
	
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


	$tdatamfr_woreda["woreda"] = $fdata;
		$tdatamfr_woreda[".searchableFields"][] = "woreda";
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "public.mfr_woreda";
	$fdata["Label"] = GetFieldLabel("public_mfr_woreda","lat");
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


	$tdatamfr_woreda["lat"] = $fdata;
		$tdatamfr_woreda[".searchableFields"][] = "lat";
//	lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lng";
	$fdata["GoodName"] = "lng";
	$fdata["ownerTable"] = "public.mfr_woreda";
	$fdata["Label"] = GetFieldLabel("public_mfr_woreda","lng");
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


	$tdatamfr_woreda["lng"] = $fdata;
		$tdatamfr_woreda[".searchableFields"][] = "lng";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "public.mfr_woreda";
	$fdata["Label"] = GetFieldLabel("public_mfr_woreda","count");
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


	$tdatamfr_woreda["count"] = $fdata;
		$tdatamfr_woreda[".searchableFields"][] = "count";


$tables_data["public.mfr_woreda"]=&$tdatamfr_woreda;
$field_labels["public_mfr_woreda"] = &$fieldLabelsmfr_woreda;
$fieldToolTips["public_mfr_woreda"] = &$fieldToolTipsmfr_woreda;
$placeHolders["public_mfr_woreda"] = &$placeHoldersmfr_woreda;
$page_titles["public_mfr_woreda"] = &$pageTitlesmfr_woreda;


changeTextControlsToDate( "public.mfr_woreda" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_woreda"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_woreda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_woreda()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "woreda,  	lat,  	lng,  	\"count\"";
$proto0["m_strFrom"] = "FROM \"public\".mfr_woreda";
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
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_woreda",
	"m_srcTableName" => "public.mfr_woreda"
));

$proto6["m_sql"] = "woreda";
$proto6["m_srcTableName"] = "public.mfr_woreda";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "public.mfr_woreda",
	"m_srcTableName" => "public.mfr_woreda"
));

$proto8["m_sql"] = "lat";
$proto8["m_srcTableName"] = "public.mfr_woreda";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lng",
	"m_strTable" => "public.mfr_woreda",
	"m_srcTableName" => "public.mfr_woreda"
));

$proto10["m_sql"] = "lng";
$proto10["m_srcTableName"] = "public.mfr_woreda";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "public.mfr_woreda",
	"m_srcTableName" => "public.mfr_woreda"
));

$proto12["m_sql"] = "\"count\"";
$proto12["m_srcTableName"] = "public.mfr_woreda";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.mfr_woreda";
$proto15["m_srcTableName"] = "public.mfr_woreda";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "woreda";
$proto15["m_columns"][] = "lat";
$proto15["m_columns"][] = "lng";
$proto15["m_columns"][] = "count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".mfr_woreda";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.mfr_woreda";
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
$proto0["m_srcTableName"]="public.mfr_woreda";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_woreda = createSqlQuery_mfr_woreda();


	
																												;

				

$tdatamfr_woreda[".sqlquery"] = $queryData_mfr_woreda;



$tdatamfr_woreda[".hasEvents"] = false;

?>