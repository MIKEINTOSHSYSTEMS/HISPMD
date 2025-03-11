<?php
$tdatafaicons = array();
$tdatafaicons[".searchableFields"] = array();
$tdatafaicons[".ShortName"] = "faicons";
$tdatafaicons[".OwnerID"] = "";
$tdatafaicons[".OriginalTable"] = "public.faicons";


$tdatafaicons[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatafaicons[".originalPagesByType"] = $tdatafaicons[".pagesByType"];
$tdatafaicons[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatafaicons[".originalPages"] = $tdatafaicons[".pages"];
$tdatafaicons[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatafaicons[".originalDefaultPages"] = $tdatafaicons[".defaultPages"];

//	field labels
$fieldLabelsfaicons = array();
$fieldToolTipsfaicons = array();
$pageTitlesfaicons = array();
$placeHoldersfaicons = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfaicons["English"] = array();
	$fieldToolTipsfaicons["English"] = array();
	$placeHoldersfaicons["English"] = array();
	$pageTitlesfaicons["English"] = array();
	$fieldLabelsfaicons["English"]["id"] = "Id";
	$fieldToolTipsfaicons["English"]["id"] = "";
	$placeHoldersfaicons["English"]["id"] = "";
	$fieldLabelsfaicons["English"]["icon"] = "Icon";
	$fieldToolTipsfaicons["English"]["icon"] = "";
	$placeHoldersfaicons["English"]["icon"] = "";
	if (count($fieldToolTipsfaicons["English"]))
		$tdatafaicons[".isUseToolTips"] = true;
}


	$tdatafaicons[".NCSearch"] = true;



$tdatafaicons[".shortTableName"] = "faicons";
$tdatafaicons[".nSecOptions"] = 0;

$tdatafaicons[".mainTableOwnerID"] = "";
$tdatafaicons[".entityType"] = 1;
$tdatafaicons[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatafaicons[".strOriginalTableName"] = "public.faicons";

	



$tdatafaicons[".showAddInPopup"] = false;

$tdatafaicons[".showEditInPopup"] = false;

$tdatafaicons[".showViewInPopup"] = false;

$tdatafaicons[".listAjax"] = false;
//	temporary
//$tdatafaicons[".listAjax"] = false;

	$tdatafaicons[".audit"] = false;

	$tdatafaicons[".locking"] = false;


$pages = $tdatafaicons[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafaicons[".edit"] = true;
	$tdatafaicons[".afterEditAction"] = 1;
	$tdatafaicons[".closePopupAfterEdit"] = 1;
	$tdatafaicons[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafaicons[".add"] = true;
$tdatafaicons[".afterAddAction"] = 1;
$tdatafaicons[".closePopupAfterAdd"] = 1;
$tdatafaicons[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafaicons[".list"] = true;
}



$tdatafaicons[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafaicons[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafaicons[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafaicons[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafaicons[".printFriendly"] = true;
}



$tdatafaicons[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafaicons[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafaicons[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafaicons[".isUseAjaxSuggest"] = true;



			

$tdatafaicons[".ajaxCodeSnippetAdded"] = false;

$tdatafaicons[".buttonsAdded"] = false;

$tdatafaicons[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafaicons[".isUseTimeForSearch"] = false;


$tdatafaicons[".badgeColor"] = "5F9EA0";


$tdatafaicons[".allSearchFields"] = array();
$tdatafaicons[".filterFields"] = array();
$tdatafaicons[".requiredSearchFields"] = array();

$tdatafaicons[".googleLikeFields"] = array();
$tdatafaicons[".googleLikeFields"][] = "id";
$tdatafaicons[".googleLikeFields"][] = "icon";



$tdatafaicons[".tableType"] = "list";

$tdatafaicons[".printerPageOrientation"] = 0;
$tdatafaicons[".nPrinterPageScale"] = 100;

$tdatafaicons[".nPrinterSplitRecords"] = 40;

$tdatafaicons[".geocodingEnabled"] = false;










$tdatafaicons[".pageSize"] = 40;

$tdatafaicons[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafaicons[".strOrderBy"] = $tstrOrderBy;

$tdatafaicons[".orderindexes"] = array();


$tdatafaicons[".sqlHead"] = "SELECT id, 	icon";
$tdatafaicons[".sqlFrom"] = "FROM faicons";
$tdatafaicons[".sqlWhereExpr"] = "";
$tdatafaicons[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafaicons[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafaicons[".arrGroupsPerPage"] = $arrGPP;

$tdatafaicons[".highlightSearchResults"] = true;

$tableKeysfaicons = array();
$tableKeysfaicons[] = "id";
$tdatafaicons[".Keys"] = $tableKeysfaicons;


$tdatafaicons[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.faicons";
	$fdata["Label"] = GetFieldLabel("faicons","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatafaicons["id"] = $fdata;
		$tdatafaicons[".searchableFields"][] = "id";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "public.faicons";
	$fdata["Label"] = GetFieldLabel("faicons","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatafaicons["icon"] = $fdata;
		$tdatafaicons[".searchableFields"][] = "icon";


$tables_data["faicons"]=&$tdatafaicons;
$field_labels["faicons"] = &$fieldLabelsfaicons;
$fieldToolTips["faicons"] = &$fieldToolTipsfaicons;
$placeHolders["faicons"] = &$placeHoldersfaicons;
$page_titles["faicons"] = &$pageTitlesfaicons;


changeTextControlsToDate( "faicons" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["faicons"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["faicons"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_faicons()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, 	icon";
$proto0["m_strFrom"] = "FROM faicons";
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
	"m_strName" => "id",
	"m_strTable" => "public.faicons",
	"m_srcTableName" => "faicons"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "faicons";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "public.faicons",
	"m_srcTableName" => "faicons"
));

$proto8["m_sql"] = "icon";
$proto8["m_srcTableName"] = "faicons";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.faicons";
$proto11["m_srcTableName"] = "faicons";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "icon";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "faicons";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "faicons";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="faicons";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_faicons = createSqlQuery_faicons();


	
																												;

		

$tdatafaicons[".sqlquery"] = $queryData_faicons;



include_once(getabspath("include/faicons_events.php"));
$tdatafaicons[".hasEvents"] = true;

?>