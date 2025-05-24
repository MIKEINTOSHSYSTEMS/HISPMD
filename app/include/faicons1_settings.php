<?php
$tdatafaicons1 = array();
$tdatafaicons1[".searchableFields"] = array();
$tdatafaicons1[".ShortName"] = "faicons1";
$tdatafaicons1[".OwnerID"] = "";
$tdatafaicons1[".OriginalTable"] = "public.faicons";


$tdatafaicons1[".pagesByType"] = my_json_decode( "{}" );
$tdatafaicons1[".originalPagesByType"] = $tdatafaicons1[".pagesByType"];
$tdatafaicons1[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatafaicons1[".originalPages"] = $tdatafaicons1[".pages"];
$tdatafaicons1[".defaultPages"] = my_json_decode( "{}" );
$tdatafaicons1[".originalDefaultPages"] = $tdatafaicons1[".defaultPages"];

//	field labels
$fieldLabelsfaicons1 = array();
$fieldToolTipsfaicons1 = array();
$pageTitlesfaicons1 = array();
$placeHoldersfaicons1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfaicons1["English"] = array();
	$fieldToolTipsfaicons1["English"] = array();
	$placeHoldersfaicons1["English"] = array();
	$pageTitlesfaicons1["English"] = array();
	$fieldLabelsfaicons1["English"]["id"] = "Id";
	$fieldToolTipsfaicons1["English"]["id"] = "";
	$placeHoldersfaicons1["English"]["id"] = "";
	$fieldLabelsfaicons1["English"]["icon"] = "Icon";
	$fieldToolTipsfaicons1["English"]["icon"] = "";
	$placeHoldersfaicons1["English"]["icon"] = "";
	if (count($fieldToolTipsfaicons1["English"]))
		$tdatafaicons1[".isUseToolTips"] = true;
}


	$tdatafaicons1[".NCSearch"] = true;



$tdatafaicons1[".shortTableName"] = "faicons1";
$tdatafaicons1[".nSecOptions"] = 0;

$tdatafaicons1[".mainTableOwnerID"] = "";
$tdatafaicons1[".entityType"] = 0;
$tdatafaicons1[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatafaicons1[".strOriginalTableName"] = "public.faicons";

	



$tdatafaicons1[".showAddInPopup"] = false;

$tdatafaicons1[".showEditInPopup"] = false;

$tdatafaicons1[".showViewInPopup"] = false;

$tdatafaicons1[".listAjax"] = false;
//	temporary
//$tdatafaicons1[".listAjax"] = false;

	$tdatafaicons1[".audit"] = false;

	$tdatafaicons1[".locking"] = false;


$pages = $tdatafaicons1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafaicons1[".edit"] = true;
	$tdatafaicons1[".afterEditAction"] = 1;
	$tdatafaicons1[".closePopupAfterEdit"] = 1;
	$tdatafaicons1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafaicons1[".add"] = true;
$tdatafaicons1[".afterAddAction"] = 1;
$tdatafaicons1[".closePopupAfterAdd"] = 1;
$tdatafaicons1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafaicons1[".list"] = true;
}



$tdatafaicons1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafaicons1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafaicons1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafaicons1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafaicons1[".printFriendly"] = true;
}



$tdatafaicons1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafaicons1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafaicons1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafaicons1[".isUseAjaxSuggest"] = true;



			

$tdatafaicons1[".ajaxCodeSnippetAdded"] = false;

$tdatafaicons1[".buttonsAdded"] = false;

$tdatafaicons1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafaicons1[".isUseTimeForSearch"] = false;


$tdatafaicons1[".badgeColor"] = "E8926F";


$tdatafaicons1[".allSearchFields"] = array();
$tdatafaicons1[".filterFields"] = array();
$tdatafaicons1[".requiredSearchFields"] = array();

$tdatafaicons1[".googleLikeFields"] = array();
$tdatafaicons1[".googleLikeFields"][] = "id";
$tdatafaicons1[".googleLikeFields"][] = "icon";



$tdatafaicons1[".tableType"] = "list";

$tdatafaicons1[".printerPageOrientation"] = 0;
$tdatafaicons1[".nPrinterPageScale"] = 100;

$tdatafaicons1[".nPrinterSplitRecords"] = 40;

$tdatafaicons1[".geocodingEnabled"] = false;










$tdatafaicons1[".pageSize"] = 20;

$tdatafaicons1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafaicons1[".strOrderBy"] = $tstrOrderBy;

$tdatafaicons1[".orderindexes"] = array();


$tdatafaicons1[".sqlHead"] = "SELECT id,  	icon";
$tdatafaicons1[".sqlFrom"] = "FROM \"public\".faicons";
$tdatafaicons1[".sqlWhereExpr"] = "";
$tdatafaicons1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafaicons1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafaicons1[".arrGroupsPerPage"] = $arrGPP;

$tdatafaicons1[".highlightSearchResults"] = true;

$tableKeysfaicons1 = array();
$tableKeysfaicons1[] = "id";
$tdatafaicons1[".Keys"] = $tableKeysfaicons1;


$tdatafaicons1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.faicons";
	$fdata["Label"] = GetFieldLabel("public_faicons","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatafaicons1["id"] = $fdata;
		$tdatafaicons1[".searchableFields"][] = "id";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "public.faicons";
	$fdata["Label"] = GetFieldLabel("public_faicons","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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


	$tdatafaicons1["icon"] = $fdata;
		$tdatafaicons1[".searchableFields"][] = "icon";


$tables_data["public.faicons"]=&$tdatafaicons1;
$field_labels["public_faicons"] = &$fieldLabelsfaicons1;
$fieldToolTips["public_faicons"] = &$fieldToolTipsfaicons1;
$placeHolders["public_faicons"] = &$placeHoldersfaicons1;
$page_titles["public_faicons"] = &$pageTitlesfaicons1;


changeTextControlsToDate( "public.faicons" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.faicons"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.faicons"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_faicons1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	icon";
$proto0["m_strFrom"] = "FROM \"public\".faicons";
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
	"m_srcTableName" => "public.faicons"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.faicons";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "public.faicons",
	"m_srcTableName" => "public.faicons"
));

$proto8["m_sql"] = "icon";
$proto8["m_srcTableName"] = "public.faicons";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.faicons";
$proto11["m_srcTableName"] = "public.faicons";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "icon";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".faicons";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.faicons";
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
$proto0["m_srcTableName"]="public.faicons";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_faicons1 = createSqlQuery_faicons1();


	
																												;

		

$tdatafaicons1[".sqlquery"] = $queryData_faicons1;



$tdatafaicons1[".hasEvents"] = false;

?>