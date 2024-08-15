<?php
$tdatadatause = array();
$tdatadatause[".searchableFields"] = array();
$tdatadatause[".ShortName"] = "datause";
$tdatadatause[".OwnerID"] = "";
$tdatadatause[".OriginalTable"] = "public.datause";


$tdatadatause[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadatause[".originalPagesByType"] = $tdatadatause[".pagesByType"];
$tdatadatause[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadatause[".originalPages"] = $tdatadatause[".pages"];
$tdatadatause[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadatause[".originalDefaultPages"] = $tdatadatause[".defaultPages"];

//	field labels
$fieldLabelsdatause = array();
$fieldToolTipsdatause = array();
$pageTitlesdatause = array();
$placeHoldersdatause = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdatause["English"] = array();
	$fieldToolTipsdatause["English"] = array();
	$placeHoldersdatause["English"] = array();
	$pageTitlesdatause["English"] = array();
	$fieldLabelsdatause["English"]["use_id"] = "Use Id";
	$fieldToolTipsdatause["English"]["use_id"] = "";
	$placeHoldersdatause["English"]["use_id"] = "";
	$fieldLabelsdatause["English"]["institution_type"] = "Institution Type";
	$fieldToolTipsdatause["English"]["institution_type"] = "";
	$placeHoldersdatause["English"]["institution_type"] = "";
	$fieldLabelsdatause["English"]["pmt_active"] = "Pmt Active";
	$fieldToolTipsdatause["English"]["pmt_active"] = "";
	$placeHoldersdatause["English"]["pmt_active"] = "";
	$fieldLabelsdatause["English"]["baseline_assessment"] = "Baseline Assessment";
	$fieldToolTipsdatause["English"]["baseline_assessment"] = "";
	$placeHoldersdatause["English"]["baseline_assessment"] = "";
	if (count($fieldToolTipsdatause["English"]))
		$tdatadatause[".isUseToolTips"] = true;
}


	$tdatadatause[".NCSearch"] = true;



$tdatadatause[".shortTableName"] = "datause";
$tdatadatause[".nSecOptions"] = 0;

$tdatadatause[".mainTableOwnerID"] = "";
$tdatadatause[".entityType"] = 0;
$tdatadatause[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadatause[".strOriginalTableName"] = "public.datause";

	



$tdatadatause[".showAddInPopup"] = false;

$tdatadatause[".showEditInPopup"] = false;

$tdatadatause[".showViewInPopup"] = false;

$tdatadatause[".listAjax"] = false;
//	temporary
//$tdatadatause[".listAjax"] = false;

	$tdatadatause[".audit"] = false;

	$tdatadatause[".locking"] = false;


$pages = $tdatadatause[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadatause[".edit"] = true;
	$tdatadatause[".afterEditAction"] = 1;
	$tdatadatause[".closePopupAfterEdit"] = 1;
	$tdatadatause[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadatause[".add"] = true;
$tdatadatause[".afterAddAction"] = 1;
$tdatadatause[".closePopupAfterAdd"] = 1;
$tdatadatause[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadatause[".list"] = true;
}



$tdatadatause[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadatause[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadatause[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadatause[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadatause[".printFriendly"] = true;
}



$tdatadatause[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadatause[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadatause[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadatause[".isUseAjaxSuggest"] = true;





$tdatadatause[".ajaxCodeSnippetAdded"] = false;

$tdatadatause[".buttonsAdded"] = false;

$tdatadatause[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadatause[".isUseTimeForSearch"] = false;


$tdatadatause[".badgeColor"] = "778899";


$tdatadatause[".allSearchFields"] = array();
$tdatadatause[".filterFields"] = array();
$tdatadatause[".requiredSearchFields"] = array();

$tdatadatause[".googleLikeFields"] = array();
$tdatadatause[".googleLikeFields"][] = "use_id";
$tdatadatause[".googleLikeFields"][] = "institution_type";
$tdatadatause[".googleLikeFields"][] = "pmt_active";
$tdatadatause[".googleLikeFields"][] = "baseline_assessment";



$tdatadatause[".tableType"] = "list";

$tdatadatause[".printerPageOrientation"] = 0;
$tdatadatause[".nPrinterPageScale"] = 100;

$tdatadatause[".nPrinterSplitRecords"] = 40;

$tdatadatause[".geocodingEnabled"] = false;










$tdatadatause[".pageSize"] = 20;

$tdatadatause[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadatause[".strOrderBy"] = $tstrOrderBy;

$tdatadatause[".orderindexes"] = array();


$tdatadatause[".sqlHead"] = "SELECT use_id,  	institution_type,  	pmt_active,  	baseline_assessment";
$tdatadatause[".sqlFrom"] = "FROM \"public\".datause";
$tdatadatause[".sqlWhereExpr"] = "";
$tdatadatause[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadatause[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadatause[".arrGroupsPerPage"] = $arrGPP;

$tdatadatause[".highlightSearchResults"] = true;

$tableKeysdatause = array();
$tableKeysdatause[] = "use_id";
$tdatadatause[".Keys"] = $tableKeysdatause;


$tdatadatause[".hideMobileList"] = array();




//	use_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "use_id";
	$fdata["GoodName"] = "use_id";
	$fdata["ownerTable"] = "public.datause";
	$fdata["Label"] = GetFieldLabel("public_datause","use_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "use_id";

		$fdata["sourceSingle"] = "use_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "use_id";

	
	
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


	$tdatadatause["use_id"] = $fdata;
		$tdatadatause[".searchableFields"][] = "use_id";
//	institution_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "institution_type";
	$fdata["GoodName"] = "institution_type";
	$fdata["ownerTable"] = "public.datause";
	$fdata["Label"] = GetFieldLabel("public_datause","institution_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "institution_type";

		$fdata["sourceSingle"] = "institution_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institution_type";

	
	
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


	$tdatadatause["institution_type"] = $fdata;
		$tdatadatause[".searchableFields"][] = "institution_type";
//	pmt_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pmt_active";
	$fdata["GoodName"] = "pmt_active";
	$fdata["ownerTable"] = "public.datause";
	$fdata["Label"] = GetFieldLabel("public_datause","pmt_active");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pmt_active";

		$fdata["sourceSingle"] = "pmt_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmt_active";

	
	
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


	$tdatadatause["pmt_active"] = $fdata;
		$tdatadatause[".searchableFields"][] = "pmt_active";
//	baseline_assessment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "baseline_assessment";
	$fdata["GoodName"] = "baseline_assessment";
	$fdata["ownerTable"] = "public.datause";
	$fdata["Label"] = GetFieldLabel("public_datause","baseline_assessment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "baseline_assessment";

		$fdata["sourceSingle"] = "baseline_assessment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "baseline_assessment";

	
	
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


	$tdatadatause["baseline_assessment"] = $fdata;
		$tdatadatause[".searchableFields"][] = "baseline_assessment";


$tables_data["public.datause"]=&$tdatadatause;
$field_labels["public_datause"] = &$fieldLabelsdatause;
$fieldToolTips["public_datause"] = &$fieldToolTipsdatause;
$placeHolders["public_datause"] = &$placeHoldersdatause;
$page_titles["public_datause"] = &$pageTitlesdatause;


changeTextControlsToDate( "public.datause" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.datause"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.datause"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_datause()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "use_id,  	institution_type,  	pmt_active,  	baseline_assessment";
$proto0["m_strFrom"] = "FROM \"public\".datause";
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
	"m_strName" => "use_id",
	"m_strTable" => "public.datause",
	"m_srcTableName" => "public.datause"
));

$proto6["m_sql"] = "use_id";
$proto6["m_srcTableName"] = "public.datause";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "institution_type",
	"m_strTable" => "public.datause",
	"m_srcTableName" => "public.datause"
));

$proto8["m_sql"] = "institution_type";
$proto8["m_srcTableName"] = "public.datause";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pmt_active",
	"m_strTable" => "public.datause",
	"m_srcTableName" => "public.datause"
));

$proto10["m_sql"] = "pmt_active";
$proto10["m_srcTableName"] = "public.datause";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline_assessment",
	"m_strTable" => "public.datause",
	"m_srcTableName" => "public.datause"
));

$proto12["m_sql"] = "baseline_assessment";
$proto12["m_srcTableName"] = "public.datause";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.datause";
$proto15["m_srcTableName"] = "public.datause";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "use_id";
$proto15["m_columns"][] = "institution_type";
$proto15["m_columns"][] = "pmt_active";
$proto15["m_columns"][] = "baseline_assessment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".datause";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.datause";
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
$proto0["m_srcTableName"]="public.datause";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_datause = createSqlQuery_datause();


	
																												;

				

$tdatadatause[".sqlquery"] = $queryData_datause;



$tdatadatause[".hasEvents"] = false;

?>