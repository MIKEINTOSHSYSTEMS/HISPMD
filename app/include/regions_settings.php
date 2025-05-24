<?php
$tdataregions = array();
$tdataregions[".searchableFields"] = array();
$tdataregions[".ShortName"] = "regions";
$tdataregions[".OwnerID"] = "";
$tdataregions[".OriginalTable"] = "public.regions";


$tdataregions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregions[".originalPagesByType"] = $tdataregions[".pagesByType"];
$tdataregions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregions[".originalPages"] = $tdataregions[".pages"];
$tdataregions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregions[".originalDefaultPages"] = $tdataregions[".defaultPages"];

//	field labels
$fieldLabelsregions = array();
$fieldToolTipsregions = array();
$pageTitlesregions = array();
$placeHoldersregions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsregions["English"] = array();
	$fieldToolTipsregions["English"] = array();
	$placeHoldersregions["English"] = array();
	$pageTitlesregions["English"] = array();
	$fieldLabelsregions["English"]["region_id"] = "Region Id";
	$fieldToolTipsregions["English"]["region_id"] = "";
	$placeHoldersregions["English"]["region_id"] = "";
	$fieldLabelsregions["English"]["name"] = "Name";
	$fieldToolTipsregions["English"]["name"] = "";
	$placeHoldersregions["English"]["name"] = "";
	$fieldLabelsregions["English"]["his_strategic_plan"] = "His Strategic Plan";
	$fieldToolTipsregions["English"]["his_strategic_plan"] = "";
	$placeHoldersregions["English"]["his_strategic_plan"] = "";
	if (count($fieldToolTipsregions["English"]))
		$tdataregions[".isUseToolTips"] = true;
}


	$tdataregions[".NCSearch"] = true;



$tdataregions[".shortTableName"] = "regions";
$tdataregions[".nSecOptions"] = 0;

$tdataregions[".mainTableOwnerID"] = "";
$tdataregions[".entityType"] = 0;
$tdataregions[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataregions[".strOriginalTableName"] = "public.regions";

	



$tdataregions[".showAddInPopup"] = false;

$tdataregions[".showEditInPopup"] = false;

$tdataregions[".showViewInPopup"] = false;

$tdataregions[".listAjax"] = false;
//	temporary
//$tdataregions[".listAjax"] = false;

	$tdataregions[".audit"] = true;

	$tdataregions[".locking"] = false;


$pages = $tdataregions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregions[".edit"] = true;
	$tdataregions[".afterEditAction"] = 1;
	$tdataregions[".closePopupAfterEdit"] = 1;
	$tdataregions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataregions[".add"] = true;
$tdataregions[".afterAddAction"] = 1;
$tdataregions[".closePopupAfterAdd"] = 1;
$tdataregions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataregions[".list"] = true;
}



$tdataregions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregions[".printFriendly"] = true;
}



$tdataregions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregions[".isUseAjaxSuggest"] = true;



			

$tdataregions[".ajaxCodeSnippetAdded"] = false;

$tdataregions[".buttonsAdded"] = false;

$tdataregions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataregions[".isUseTimeForSearch"] = false;


$tdataregions[".badgeColor"] = "CD5C5C";


$tdataregions[".allSearchFields"] = array();
$tdataregions[".filterFields"] = array();
$tdataregions[".requiredSearchFields"] = array();

$tdataregions[".googleLikeFields"] = array();
$tdataregions[".googleLikeFields"][] = "region_id";
$tdataregions[".googleLikeFields"][] = "name";
$tdataregions[".googleLikeFields"][] = "his_strategic_plan";



$tdataregions[".tableType"] = "list";

$tdataregions[".printerPageOrientation"] = 0;
$tdataregions[".nPrinterPageScale"] = 100;

$tdataregions[".nPrinterSplitRecords"] = 40;

$tdataregions[".geocodingEnabled"] = false;










$tdataregions[".pageSize"] = 20;

$tdataregions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregions[".strOrderBy"] = $tstrOrderBy;

$tdataregions[".orderindexes"] = array();


$tdataregions[".sqlHead"] = "SELECT region_id,  	name,  	his_strategic_plan";
$tdataregions[".sqlFrom"] = "FROM \"public\".regions";
$tdataregions[".sqlWhereExpr"] = "";
$tdataregions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregions[".arrGroupsPerPage"] = $arrGPP;

$tdataregions[".highlightSearchResults"] = true;

$tableKeysregions = array();
$tableKeysregions[] = "region_id";
$tdataregions[".Keys"] = $tableKeysregions;


$tdataregions[".hideMobileList"] = array();




//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "public.regions";
	$fdata["Label"] = GetFieldLabel("public_regions","region_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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


	$tdataregions["region_id"] = $fdata;
		$tdataregions[".searchableFields"][] = "region_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.regions";
	$fdata["Label"] = GetFieldLabel("public_regions","name");
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


	$tdataregions["name"] = $fdata;
		$tdataregions[".searchableFields"][] = "name";
//	his_strategic_plan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "his_strategic_plan";
	$fdata["GoodName"] = "his_strategic_plan";
	$fdata["ownerTable"] = "public.regions";
	$fdata["Label"] = GetFieldLabel("public_regions","his_strategic_plan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "his_strategic_plan";

		$fdata["sourceSingle"] = "his_strategic_plan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "his_strategic_plan";

	
	
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


	$tdataregions["his_strategic_plan"] = $fdata;
		$tdataregions[".searchableFields"][] = "his_strategic_plan";


$tables_data["public.regions"]=&$tdataregions;
$field_labels["public_regions"] = &$fieldLabelsregions;
$fieldToolTips["public_regions"] = &$fieldToolTipsregions;
$placeHolders["public_regions"] = &$placeHoldersregions;
$page_titles["public_regions"] = &$pageTitlesregions;


changeTextControlsToDate( "public.regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.regions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_regions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "region_id,  	name,  	his_strategic_plan";
$proto0["m_strFrom"] = "FROM \"public\".regions";
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
	"m_strName" => "region_id",
	"m_strTable" => "public.regions",
	"m_srcTableName" => "public.regions"
));

$proto6["m_sql"] = "region_id";
$proto6["m_srcTableName"] = "public.regions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.regions",
	"m_srcTableName" => "public.regions"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.regions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "his_strategic_plan",
	"m_strTable" => "public.regions",
	"m_srcTableName" => "public.regions"
));

$proto10["m_sql"] = "his_strategic_plan";
$proto10["m_srcTableName"] = "public.regions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.regions";
$proto13["m_srcTableName"] = "public.regions";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "region_id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "his_strategic_plan";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".regions";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.regions";
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
$proto0["m_srcTableName"]="public.regions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_regions = createSqlQuery_regions();


	
																												;

			

$tdataregions[".sqlquery"] = $queryData_regions;



include_once(getabspath("include/regions_events.php"));
$tdataregions[".hasEvents"] = true;

?>