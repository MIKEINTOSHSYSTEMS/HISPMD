<?php
$tdatamoh_years = array();
$tdatamoh_years[".searchableFields"] = array();
$tdatamoh_years[".ShortName"] = "moh_years";
$tdatamoh_years[".OwnerID"] = "";
$tdatamoh_years[".OriginalTable"] = "public.moh_years";


$tdatamoh_years[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_years[".originalPagesByType"] = $tdatamoh_years[".pagesByType"];
$tdatamoh_years[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_years[".originalPages"] = $tdatamoh_years[".pages"];
$tdatamoh_years[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_years[".originalDefaultPages"] = $tdatamoh_years[".defaultPages"];

//	field labels
$fieldLabelsmoh_years = array();
$fieldToolTipsmoh_years = array();
$pageTitlesmoh_years = array();
$placeHoldersmoh_years = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_years["English"] = array();
	$fieldToolTipsmoh_years["English"] = array();
	$placeHoldersmoh_years["English"] = array();
	$pageTitlesmoh_years["English"] = array();
	$fieldLabelsmoh_years["English"]["year_id"] = "Year Id";
	$fieldToolTipsmoh_years["English"]["year_id"] = "";
	$placeHoldersmoh_years["English"]["year_id"] = "";
	$fieldLabelsmoh_years["English"]["year"] = "Year";
	$fieldToolTipsmoh_years["English"]["year"] = "";
	$placeHoldersmoh_years["English"]["year"] = "";
	if (count($fieldToolTipsmoh_years["English"]))
		$tdatamoh_years[".isUseToolTips"] = true;
}


	$tdatamoh_years[".NCSearch"] = true;



$tdatamoh_years[".shortTableName"] = "moh_years";
$tdatamoh_years[".nSecOptions"] = 0;

$tdatamoh_years[".mainTableOwnerID"] = "";
$tdatamoh_years[".entityType"] = 0;
$tdatamoh_years[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_years[".strOriginalTableName"] = "public.moh_years";

	



$tdatamoh_years[".showAddInPopup"] = false;

$tdatamoh_years[".showEditInPopup"] = false;

$tdatamoh_years[".showViewInPopup"] = false;

$tdatamoh_years[".listAjax"] = false;
//	temporary
//$tdatamoh_years[".listAjax"] = false;

	$tdatamoh_years[".audit"] = false;

	$tdatamoh_years[".locking"] = false;


$pages = $tdatamoh_years[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_years[".edit"] = true;
	$tdatamoh_years[".afterEditAction"] = 1;
	$tdatamoh_years[".closePopupAfterEdit"] = 1;
	$tdatamoh_years[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_years[".add"] = true;
$tdatamoh_years[".afterAddAction"] = 1;
$tdatamoh_years[".closePopupAfterAdd"] = 1;
$tdatamoh_years[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_years[".list"] = true;
}



$tdatamoh_years[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_years[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_years[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_years[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_years[".printFriendly"] = true;
}



$tdatamoh_years[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_years[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_years[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_years[".isUseAjaxSuggest"] = true;



			

$tdatamoh_years[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_years[".buttonsAdded"] = false;

$tdatamoh_years[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_years[".isUseTimeForSearch"] = false;


$tdatamoh_years[".badgeColor"] = "D2AF80";


$tdatamoh_years[".allSearchFields"] = array();
$tdatamoh_years[".filterFields"] = array();
$tdatamoh_years[".requiredSearchFields"] = array();

$tdatamoh_years[".googleLikeFields"] = array();
$tdatamoh_years[".googleLikeFields"][] = "year_id";
$tdatamoh_years[".googleLikeFields"][] = "year";



$tdatamoh_years[".tableType"] = "list";

$tdatamoh_years[".printerPageOrientation"] = 0;
$tdatamoh_years[".nPrinterPageScale"] = 100;

$tdatamoh_years[".nPrinterSplitRecords"] = 40;

$tdatamoh_years[".geocodingEnabled"] = false;




$tdatamoh_years[".isDisplayLoading"] = true;


$tdatamoh_years[".searchIsRequiredForFilters"] = true;




$tdatamoh_years[".pageSize"] = 20;

$tdatamoh_years[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_years[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_years[".orderindexes"] = array();


$tdatamoh_years[".sqlHead"] = "SELECT year_id,  	\"year\"";
$tdatamoh_years[".sqlFrom"] = "FROM \"public\".moh_years";
$tdatamoh_years[".sqlWhereExpr"] = "";
$tdatamoh_years[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_years[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_years[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_years[".highlightSearchResults"] = true;

$tableKeysmoh_years = array();
$tableKeysmoh_years[] = "year_id";
$tdatamoh_years[".Keys"] = $tableKeysmoh_years;


$tdatamoh_years[".hideMobileList"] = array();




//	year_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "year_id";
	$fdata["GoodName"] = "year_id";
	$fdata["ownerTable"] = "public.moh_years";
	$fdata["Label"] = GetFieldLabel("public_moh_years","year_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "year_id";

		$fdata["sourceSingle"] = "year_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year_id";

	
	
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


	$tdatamoh_years["year_id"] = $fdata;
		$tdatamoh_years[".searchableFields"][] = "year_id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "public.moh_years";
	$fdata["Label"] = GetFieldLabel("public_moh_years","year");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"year\"";

	
	
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


	$tdatamoh_years["year"] = $fdata;
		$tdatamoh_years[".searchableFields"][] = "year";


$tables_data["public.moh_years"]=&$tdatamoh_years;
$field_labels["public_moh_years"] = &$fieldLabelsmoh_years;
$fieldToolTips["public_moh_years"] = &$fieldToolTipsmoh_years;
$placeHolders["public_moh_years"] = &$placeHoldersmoh_years;
$page_titles["public_moh_years"] = &$pageTitlesmoh_years;


changeTextControlsToDate( "public.moh_years" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_years"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_years"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_years()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "year_id,  	\"year\"";
$proto0["m_strFrom"] = "FROM \"public\".moh_years";
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
	"m_strName" => "year_id",
	"m_strTable" => "public.moh_years",
	"m_srcTableName" => "public.moh_years"
));

$proto6["m_sql"] = "year_id";
$proto6["m_srcTableName"] = "public.moh_years";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "public.moh_years",
	"m_srcTableName" => "public.moh_years"
));

$proto8["m_sql"] = "\"year\"";
$proto8["m_srcTableName"] = "public.moh_years";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_years";
$proto11["m_srcTableName"] = "public.moh_years";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "year_id";
$proto11["m_columns"][] = "year";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_years";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_years";
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
$proto0["m_srcTableName"]="public.moh_years";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_years = createSqlQuery_moh_years();


	
																												;

		

$tdatamoh_years[".sqlquery"] = $queryData_moh_years;



$tdatamoh_years[".hasEvents"] = false;

?>