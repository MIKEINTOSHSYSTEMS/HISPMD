<?php
$tdatamoh_ir_datasource = array();
$tdatamoh_ir_datasource[".searchableFields"] = array();
$tdatamoh_ir_datasource[".ShortName"] = "moh_ir_datasource";
$tdatamoh_ir_datasource[".OwnerID"] = "";
$tdatamoh_ir_datasource[".OriginalTable"] = "public.moh_ir_datasource";


$tdatamoh_ir_datasource[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_ir_datasource[".originalPagesByType"] = $tdatamoh_ir_datasource[".pagesByType"];
$tdatamoh_ir_datasource[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_ir_datasource[".originalPages"] = $tdatamoh_ir_datasource[".pages"];
$tdatamoh_ir_datasource[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_ir_datasource[".originalDefaultPages"] = $tdatamoh_ir_datasource[".defaultPages"];

//	field labels
$fieldLabelsmoh_ir_datasource = array();
$fieldToolTipsmoh_ir_datasource = array();
$pageTitlesmoh_ir_datasource = array();
$placeHoldersmoh_ir_datasource = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_ir_datasource["English"] = array();
	$fieldToolTipsmoh_ir_datasource["English"] = array();
	$placeHoldersmoh_ir_datasource["English"] = array();
	$pageTitlesmoh_ir_datasource["English"] = array();
	$fieldLabelsmoh_ir_datasource["English"]["ir_id"] = "Id";
	$fieldToolTipsmoh_ir_datasource["English"]["ir_id"] = "";
	$placeHoldersmoh_ir_datasource["English"]["ir_id"] = "";
	$fieldLabelsmoh_ir_datasource["English"]["ir_datasource"] = "Data Source Detail";
	$fieldToolTipsmoh_ir_datasource["English"]["ir_datasource"] = "";
	$placeHoldersmoh_ir_datasource["English"]["ir_datasource"] = "";
	$fieldLabelsmoh_ir_datasource["English"]["data_source_id"] = "Data Source";
	$fieldToolTipsmoh_ir_datasource["English"]["data_source_id"] = "";
	$placeHoldersmoh_ir_datasource["English"]["data_source_id"] = "";
	$pageTitlesmoh_ir_datasource["English"]["add"] = "MoH Datasource Detail, Add new";
	$pageTitlesmoh_ir_datasource["English"]["edit"] = "MoH Datasource Detail, Edit [{%ir_id}]";
	$pageTitlesmoh_ir_datasource["English"]["view"] = "MoH Datasource Detail {%ir_id}";
	$pageTitlesmoh_ir_datasource["English"]["print"] = "MoH Datasource Detail";
	$pageTitlesmoh_ir_datasource["English"]["search"] = "MoH Datasource Detail, Advanced search";
	$pageTitlesmoh_ir_datasource["English"]["import"] = "MoH Datasource Detail, Import";
	if (count($fieldToolTipsmoh_ir_datasource["English"]))
		$tdatamoh_ir_datasource[".isUseToolTips"] = true;
}


	$tdatamoh_ir_datasource[".NCSearch"] = true;



$tdatamoh_ir_datasource[".shortTableName"] = "moh_ir_datasource";
$tdatamoh_ir_datasource[".nSecOptions"] = 0;

$tdatamoh_ir_datasource[".mainTableOwnerID"] = "";
$tdatamoh_ir_datasource[".entityType"] = 0;
$tdatamoh_ir_datasource[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_ir_datasource[".strOriginalTableName"] = "public.moh_ir_datasource";

	



$tdatamoh_ir_datasource[".showAddInPopup"] = false;

$tdatamoh_ir_datasource[".showEditInPopup"] = false;

$tdatamoh_ir_datasource[".showViewInPopup"] = false;

$tdatamoh_ir_datasource[".listAjax"] = false;
//	temporary
//$tdatamoh_ir_datasource[".listAjax"] = false;

	$tdatamoh_ir_datasource[".audit"] = false;

	$tdatamoh_ir_datasource[".locking"] = false;


$pages = $tdatamoh_ir_datasource[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_ir_datasource[".edit"] = true;
	$tdatamoh_ir_datasource[".afterEditAction"] = 1;
	$tdatamoh_ir_datasource[".closePopupAfterEdit"] = 1;
	$tdatamoh_ir_datasource[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_ir_datasource[".add"] = true;
$tdatamoh_ir_datasource[".afterAddAction"] = 1;
$tdatamoh_ir_datasource[".closePopupAfterAdd"] = 1;
$tdatamoh_ir_datasource[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_ir_datasource[".list"] = true;
}



$tdatamoh_ir_datasource[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_ir_datasource[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_ir_datasource[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_ir_datasource[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_ir_datasource[".printFriendly"] = true;
}



$tdatamoh_ir_datasource[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_ir_datasource[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_ir_datasource[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_ir_datasource[".isUseAjaxSuggest"] = true;



						

$tdatamoh_ir_datasource[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_ir_datasource[".buttonsAdded"] = false;

$tdatamoh_ir_datasource[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_ir_datasource[".isUseTimeForSearch"] = false;


$tdatamoh_ir_datasource[".badgeColor"] = "0080ff";


$tdatamoh_ir_datasource[".allSearchFields"] = array();
$tdatamoh_ir_datasource[".filterFields"] = array();
$tdatamoh_ir_datasource[".requiredSearchFields"] = array();

$tdatamoh_ir_datasource[".googleLikeFields"] = array();
$tdatamoh_ir_datasource[".googleLikeFields"][] = "ir_id";
$tdatamoh_ir_datasource[".googleLikeFields"][] = "ir_datasource";
$tdatamoh_ir_datasource[".googleLikeFields"][] = "data_source_id";



$tdatamoh_ir_datasource[".tableType"] = "list";

$tdatamoh_ir_datasource[".printerPageOrientation"] = 0;
$tdatamoh_ir_datasource[".nPrinterPageScale"] = 100;

$tdatamoh_ir_datasource[".nPrinterSplitRecords"] = 40;

$tdatamoh_ir_datasource[".geocodingEnabled"] = false;










$tdatamoh_ir_datasource[".pageSize"] = 20;

$tdatamoh_ir_datasource[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_ir_datasource[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_ir_datasource[".orderindexes"] = array();


$tdatamoh_ir_datasource[".sqlHead"] = "SELECT ir_id,  	ir_datasource,  	data_source_id";
$tdatamoh_ir_datasource[".sqlFrom"] = "FROM \"public\".moh_ir_datasource";
$tdatamoh_ir_datasource[".sqlWhereExpr"] = "";
$tdatamoh_ir_datasource[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_ir_datasource[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_ir_datasource[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_ir_datasource[".highlightSearchResults"] = true;

$tableKeysmoh_ir_datasource = array();
$tableKeysmoh_ir_datasource[] = "ir_id";
$tdatamoh_ir_datasource[".Keys"] = $tableKeysmoh_ir_datasource;


$tdatamoh_ir_datasource[".hideMobileList"] = array();




//	ir_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ir_id";
	$fdata["GoodName"] = "ir_id";
	$fdata["ownerTable"] = "public.moh_ir_datasource";
	$fdata["Label"] = GetFieldLabel("public_moh_ir_datasource","ir_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ir_id";

		$fdata["sourceSingle"] = "ir_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ir_id";

	
	
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


	$tdatamoh_ir_datasource["ir_id"] = $fdata;
		$tdatamoh_ir_datasource[".searchableFields"][] = "ir_id";
//	ir_datasource
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ir_datasource";
	$fdata["GoodName"] = "ir_datasource";
	$fdata["ownerTable"] = "public.moh_ir_datasource";
	$fdata["Label"] = GetFieldLabel("public_moh_ir_datasource","ir_datasource");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ir_datasource";

		$fdata["sourceSingle"] = "ir_datasource";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ir_datasource";

	
	
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


	$tdatamoh_ir_datasource["ir_datasource"] = $fdata;
		$tdatamoh_ir_datasource[".searchableFields"][] = "ir_datasource";
//	data_source_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_source_id";
	$fdata["GoodName"] = "data_source_id";
	$fdata["ownerTable"] = "public.moh_ir_datasource";
	$fdata["Label"] = GetFieldLabel("public_moh_ir_datasource","data_source_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data_source_id";

		$fdata["sourceSingle"] = "data_source_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_source_id";

	
	
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
	$edata["LookupTable"] = "public.moh_data_sources";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data_source_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "data_source_name";

	

	
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


	$tdatamoh_ir_datasource["data_source_id"] = $fdata;
		$tdatamoh_ir_datasource[".searchableFields"][] = "data_source_id";


$tables_data["public.moh_ir_datasource"]=&$tdatamoh_ir_datasource;
$field_labels["public_moh_ir_datasource"] = &$fieldLabelsmoh_ir_datasource;
$fieldToolTips["public_moh_ir_datasource"] = &$fieldToolTipsmoh_ir_datasource;
$placeHolders["public_moh_ir_datasource"] = &$placeHoldersmoh_ir_datasource;
$page_titles["public_moh_ir_datasource"] = &$pageTitlesmoh_ir_datasource;


changeTextControlsToDate( "public.moh_ir_datasource" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_ir_datasource"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_ir_datasource"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_data_sources";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_data_sources";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_data_sources";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_ir_datasource"][0] = $masterParams;
				$masterTablesData["public.moh_ir_datasource"][0]["masterKeys"] = array();
	$masterTablesData["public.moh_ir_datasource"][0]["masterKeys"][]="data_source_id";
				$masterTablesData["public.moh_ir_datasource"][0]["detailKeys"] = array();
	$masterTablesData["public.moh_ir_datasource"][0]["detailKeys"][]="data_source_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_ir_datasource()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ir_id,  	ir_datasource,  	data_source_id";
$proto0["m_strFrom"] = "FROM \"public\".moh_ir_datasource";
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
	"m_strName" => "ir_id",
	"m_strTable" => "public.moh_ir_datasource",
	"m_srcTableName" => "public.moh_ir_datasource"
));

$proto6["m_sql"] = "ir_id";
$proto6["m_srcTableName"] = "public.moh_ir_datasource";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ir_datasource",
	"m_strTable" => "public.moh_ir_datasource",
	"m_srcTableName" => "public.moh_ir_datasource"
));

$proto8["m_sql"] = "ir_datasource";
$proto8["m_srcTableName"] = "public.moh_ir_datasource";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_source_id",
	"m_strTable" => "public.moh_ir_datasource",
	"m_srcTableName" => "public.moh_ir_datasource"
));

$proto10["m_sql"] = "data_source_id";
$proto10["m_srcTableName"] = "public.moh_ir_datasource";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.moh_ir_datasource";
$proto13["m_srcTableName"] = "public.moh_ir_datasource";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ir_id";
$proto13["m_columns"][] = "ir_datasource";
$proto13["m_columns"][] = "data_source_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".moh_ir_datasource";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.moh_ir_datasource";
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
$proto0["m_srcTableName"]="public.moh_ir_datasource";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_ir_datasource = createSqlQuery_moh_ir_datasource();


	
																												;

			

$tdatamoh_ir_datasource[".sqlquery"] = $queryData_moh_ir_datasource;



$tdatamoh_ir_datasource[".hasEvents"] = false;

?>