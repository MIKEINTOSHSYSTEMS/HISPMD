<?php
$tdatahispartners = array();
$tdatahispartners[".searchableFields"] = array();
$tdatahispartners[".ShortName"] = "hispartners";
$tdatahispartners[".OwnerID"] = "";
$tdatahispartners[".OriginalTable"] = "public.hispartners";


$tdatahispartners[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahispartners[".originalPagesByType"] = $tdatahispartners[".pagesByType"];
$tdatahispartners[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahispartners[".originalPages"] = $tdatahispartners[".pages"];
$tdatahispartners[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahispartners[".originalDefaultPages"] = $tdatahispartners[".defaultPages"];

//	field labels
$fieldLabelshispartners = array();
$fieldToolTipshispartners = array();
$pageTitleshispartners = array();
$placeHoldershispartners = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispartners["English"] = array();
	$fieldToolTipshispartners["English"] = array();
	$placeHoldershispartners["English"] = array();
	$pageTitleshispartners["English"] = array();
	$fieldLabelshispartners["English"]["partner_id"] = "Partner Id";
	$fieldToolTipshispartners["English"]["partner_id"] = "";
	$placeHoldershispartners["English"]["partner_id"] = "";
	$fieldLabelshispartners["English"]["name"] = "Name";
	$fieldToolTipshispartners["English"]["name"] = "";
	$placeHoldershispartners["English"]["name"] = "";
	$fieldLabelshispartners["English"]["aligned_plan"] = "Aligned Plan";
	$fieldToolTipshispartners["English"]["aligned_plan"] = "";
	$placeHoldershispartners["English"]["aligned_plan"] = "";
	if (count($fieldToolTipshispartners["English"]))
		$tdatahispartners[".isUseToolTips"] = true;
}


	$tdatahispartners[".NCSearch"] = true;



$tdatahispartners[".shortTableName"] = "hispartners";
$tdatahispartners[".nSecOptions"] = 0;

$tdatahispartners[".mainTableOwnerID"] = "";
$tdatahispartners[".entityType"] = 0;
$tdatahispartners[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispartners[".strOriginalTableName"] = "public.hispartners";

	



$tdatahispartners[".showAddInPopup"] = false;

$tdatahispartners[".showEditInPopup"] = false;

$tdatahispartners[".showViewInPopup"] = false;

$tdatahispartners[".listAjax"] = false;
//	temporary
//$tdatahispartners[".listAjax"] = false;

	$tdatahispartners[".audit"] = false;

	$tdatahispartners[".locking"] = false;


$pages = $tdatahispartners[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispartners[".edit"] = true;
	$tdatahispartners[".afterEditAction"] = 1;
	$tdatahispartners[".closePopupAfterEdit"] = 1;
	$tdatahispartners[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispartners[".add"] = true;
$tdatahispartners[".afterAddAction"] = 1;
$tdatahispartners[".closePopupAfterAdd"] = 1;
$tdatahispartners[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispartners[".list"] = true;
}



$tdatahispartners[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispartners[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispartners[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispartners[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispartners[".printFriendly"] = true;
}



$tdatahispartners[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispartners[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispartners[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispartners[".isUseAjaxSuggest"] = true;





$tdatahispartners[".ajaxCodeSnippetAdded"] = false;

$tdatahispartners[".buttonsAdded"] = false;

$tdatahispartners[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispartners[".isUseTimeForSearch"] = false;


$tdatahispartners[".badgeColor"] = "DC143C";


$tdatahispartners[".allSearchFields"] = array();
$tdatahispartners[".filterFields"] = array();
$tdatahispartners[".requiredSearchFields"] = array();

$tdatahispartners[".googleLikeFields"] = array();
$tdatahispartners[".googleLikeFields"][] = "partner_id";
$tdatahispartners[".googleLikeFields"][] = "name";
$tdatahispartners[".googleLikeFields"][] = "aligned_plan";



$tdatahispartners[".tableType"] = "list";

$tdatahispartners[".printerPageOrientation"] = 0;
$tdatahispartners[".nPrinterPageScale"] = 100;

$tdatahispartners[".nPrinterSplitRecords"] = 40;

$tdatahispartners[".geocodingEnabled"] = false;










$tdatahispartners[".pageSize"] = 20;

$tdatahispartners[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispartners[".strOrderBy"] = $tstrOrderBy;

$tdatahispartners[".orderindexes"] = array();


$tdatahispartners[".sqlHead"] = "SELECT partner_id,  	name,  	aligned_plan";
$tdatahispartners[".sqlFrom"] = "FROM \"public\".hispartners";
$tdatahispartners[".sqlWhereExpr"] = "";
$tdatahispartners[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispartners[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispartners[".arrGroupsPerPage"] = $arrGPP;

$tdatahispartners[".highlightSearchResults"] = true;

$tableKeyshispartners = array();
$tableKeyshispartners[] = "partner_id";
$tdatahispartners[".Keys"] = $tableKeyshispartners;


$tdatahispartners[".hideMobileList"] = array();




//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "public.hispartners";
	$fdata["Label"] = GetFieldLabel("public_hispartners","partner_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "partner_id";

		$fdata["sourceSingle"] = "partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partner_id";

	
	
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


	$tdatahispartners["partner_id"] = $fdata;
		$tdatahispartners[".searchableFields"][] = "partner_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.hispartners";
	$fdata["Label"] = GetFieldLabel("public_hispartners","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatahispartners["name"] = $fdata;
		$tdatahispartners[".searchableFields"][] = "name";
//	aligned_plan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aligned_plan";
	$fdata["GoodName"] = "aligned_plan";
	$fdata["ownerTable"] = "public.hispartners";
	$fdata["Label"] = GetFieldLabel("public_hispartners","aligned_plan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "aligned_plan";

		$fdata["sourceSingle"] = "aligned_plan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aligned_plan";

	
	
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


	$tdatahispartners["aligned_plan"] = $fdata;
		$tdatahispartners[".searchableFields"][] = "aligned_plan";


$tables_data["public.hispartners"]=&$tdatahispartners;
$field_labels["public_hispartners"] = &$fieldLabelshispartners;
$fieldToolTips["public_hispartners"] = &$fieldToolTipshispartners;
$placeHolders["public_hispartners"] = &$placeHoldershispartners;
$page_titles["public_hispartners"] = &$pageTitleshispartners;


changeTextControlsToDate( "public.hispartners" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispartners"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispartners"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispartners()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "partner_id,  	name,  	aligned_plan";
$proto0["m_strFrom"] = "FROM \"public\".hispartners";
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
	"m_strName" => "partner_id",
	"m_strTable" => "public.hispartners",
	"m_srcTableName" => "public.hispartners"
));

$proto6["m_sql"] = "partner_id";
$proto6["m_srcTableName"] = "public.hispartners";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.hispartners",
	"m_srcTableName" => "public.hispartners"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.hispartners";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "aligned_plan",
	"m_strTable" => "public.hispartners",
	"m_srcTableName" => "public.hispartners"
));

$proto10["m_sql"] = "aligned_plan";
$proto10["m_srcTableName"] = "public.hispartners";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.hispartners";
$proto13["m_srcTableName"] = "public.hispartners";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "partner_id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "aligned_plan";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".hispartners";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.hispartners";
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
$proto0["m_srcTableName"]="public.hispartners";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispartners = createSqlQuery_hispartners();


	
																												;

			

$tdatahispartners[".sqlquery"] = $queryData_hispartners;



$tdatahispartners[".hasEvents"] = false;

?>