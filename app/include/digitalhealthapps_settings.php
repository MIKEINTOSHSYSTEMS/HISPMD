<?php
$tdatadigitalhealthapps = array();
$tdatadigitalhealthapps[".searchableFields"] = array();
$tdatadigitalhealthapps[".ShortName"] = "digitalhealthapps";
$tdatadigitalhealthapps[".OwnerID"] = "";
$tdatadigitalhealthapps[".OriginalTable"] = "DigitalHealthApps";


$tdatadigitalhealthapps[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadigitalhealthapps[".originalPagesByType"] = $tdatadigitalhealthapps[".pagesByType"];
$tdatadigitalhealthapps[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadigitalhealthapps[".originalPages"] = $tdatadigitalhealthapps[".pages"];
$tdatadigitalhealthapps[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadigitalhealthapps[".originalDefaultPages"] = $tdatadigitalhealthapps[".defaultPages"];

//	field labels
$fieldLabelsdigitalhealthapps = array();
$fieldToolTipsdigitalhealthapps = array();
$pageTitlesdigitalhealthapps = array();
$placeHoldersdigitalhealthapps = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdigitalhealthapps["English"] = array();
	$fieldToolTipsdigitalhealthapps["English"] = array();
	$placeHoldersdigitalhealthapps["English"] = array();
	$pageTitlesdigitalhealthapps["English"] = array();
	$fieldLabelsdigitalhealthapps["English"]["app_id"] = "App Id";
	$fieldToolTipsdigitalhealthapps["English"]["app_id"] = "";
	$placeHoldersdigitalhealthapps["English"]["app_id"] = "";
	$fieldLabelsdigitalhealthapps["English"]["name"] = "Name";
	$fieldToolTipsdigitalhealthapps["English"]["name"] = "";
	$placeHoldersdigitalhealthapps["English"]["name"] = "";
	$fieldLabelsdigitalhealthapps["English"]["standards_met"] = "Standards Met";
	$fieldToolTipsdigitalhealthapps["English"]["standards_met"] = "";
	$placeHoldersdigitalhealthapps["English"]["standards_met"] = "";
	if (count($fieldToolTipsdigitalhealthapps["English"]))
		$tdatadigitalhealthapps[".isUseToolTips"] = true;
}


	$tdatadigitalhealthapps[".NCSearch"] = true;



$tdatadigitalhealthapps[".shortTableName"] = "digitalhealthapps";
$tdatadigitalhealthapps[".nSecOptions"] = 0;

$tdatadigitalhealthapps[".mainTableOwnerID"] = "";
$tdatadigitalhealthapps[".entityType"] = 0;
$tdatadigitalhealthapps[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatadigitalhealthapps[".strOriginalTableName"] = "DigitalHealthApps";

	



$tdatadigitalhealthapps[".showAddInPopup"] = false;

$tdatadigitalhealthapps[".showEditInPopup"] = false;

$tdatadigitalhealthapps[".showViewInPopup"] = false;

$tdatadigitalhealthapps[".listAjax"] = false;
//	temporary
//$tdatadigitalhealthapps[".listAjax"] = false;

	$tdatadigitalhealthapps[".audit"] = false;

	$tdatadigitalhealthapps[".locking"] = false;


$pages = $tdatadigitalhealthapps[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadigitalhealthapps[".edit"] = true;
	$tdatadigitalhealthapps[".afterEditAction"] = 1;
	$tdatadigitalhealthapps[".closePopupAfterEdit"] = 1;
	$tdatadigitalhealthapps[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadigitalhealthapps[".add"] = true;
$tdatadigitalhealthapps[".afterAddAction"] = 1;
$tdatadigitalhealthapps[".closePopupAfterAdd"] = 1;
$tdatadigitalhealthapps[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadigitalhealthapps[".list"] = true;
}



$tdatadigitalhealthapps[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadigitalhealthapps[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadigitalhealthapps[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadigitalhealthapps[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadigitalhealthapps[".printFriendly"] = true;
}



$tdatadigitalhealthapps[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadigitalhealthapps[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadigitalhealthapps[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadigitalhealthapps[".isUseAjaxSuggest"] = true;





$tdatadigitalhealthapps[".ajaxCodeSnippetAdded"] = false;

$tdatadigitalhealthapps[".buttonsAdded"] = false;

$tdatadigitalhealthapps[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadigitalhealthapps[".isUseTimeForSearch"] = false;


$tdatadigitalhealthapps[".badgeColor"] = "CD5C5C";


$tdatadigitalhealthapps[".allSearchFields"] = array();
$tdatadigitalhealthapps[".filterFields"] = array();
$tdatadigitalhealthapps[".requiredSearchFields"] = array();

$tdatadigitalhealthapps[".googleLikeFields"] = array();
$tdatadigitalhealthapps[".googleLikeFields"][] = "app_id";
$tdatadigitalhealthapps[".googleLikeFields"][] = "name";
$tdatadigitalhealthapps[".googleLikeFields"][] = "standards_met";



$tdatadigitalhealthapps[".tableType"] = "list";

$tdatadigitalhealthapps[".printerPageOrientation"] = 0;
$tdatadigitalhealthapps[".nPrinterPageScale"] = 100;

$tdatadigitalhealthapps[".nPrinterSplitRecords"] = 40;

$tdatadigitalhealthapps[".geocodingEnabled"] = false;










$tdatadigitalhealthapps[".pageSize"] = 20;

$tdatadigitalhealthapps[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadigitalhealthapps[".strOrderBy"] = $tstrOrderBy;

$tdatadigitalhealthapps[".orderindexes"] = array();


$tdatadigitalhealthapps[".sqlHead"] = "SELECT app_id,  	name,  	standards_met";
$tdatadigitalhealthapps[".sqlFrom"] = "FROM DigitalHealthApps";
$tdatadigitalhealthapps[".sqlWhereExpr"] = "";
$tdatadigitalhealthapps[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadigitalhealthapps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadigitalhealthapps[".arrGroupsPerPage"] = $arrGPP;

$tdatadigitalhealthapps[".highlightSearchResults"] = true;

$tableKeysdigitalhealthapps = array();
$tableKeysdigitalhealthapps[] = "app_id";
$tdatadigitalhealthapps[".Keys"] = $tableKeysdigitalhealthapps;


$tdatadigitalhealthapps[".hideMobileList"] = array();




//	app_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "app_id";
	$fdata["GoodName"] = "app_id";
	$fdata["ownerTable"] = "DigitalHealthApps";
	$fdata["Label"] = GetFieldLabel("DigitalHealthApps","app_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "app_id";

		$fdata["sourceSingle"] = "app_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "app_id";

	
	
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


	$tdatadigitalhealthapps["app_id"] = $fdata;
		$tdatadigitalhealthapps[".searchableFields"][] = "app_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "DigitalHealthApps";
	$fdata["Label"] = GetFieldLabel("DigitalHealthApps","name");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatadigitalhealthapps["name"] = $fdata;
		$tdatadigitalhealthapps[".searchableFields"][] = "name";
//	standards_met
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "standards_met";
	$fdata["GoodName"] = "standards_met";
	$fdata["ownerTable"] = "DigitalHealthApps";
	$fdata["Label"] = GetFieldLabel("DigitalHealthApps","standards_met");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "standards_met";

		$fdata["sourceSingle"] = "standards_met";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "standards_met";

	
	
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


	$tdatadigitalhealthapps["standards_met"] = $fdata;
		$tdatadigitalhealthapps[".searchableFields"][] = "standards_met";


$tables_data["DigitalHealthApps"]=&$tdatadigitalhealthapps;
$field_labels["DigitalHealthApps"] = &$fieldLabelsdigitalhealthapps;
$fieldToolTips["DigitalHealthApps"] = &$fieldToolTipsdigitalhealthapps;
$placeHolders["DigitalHealthApps"] = &$placeHoldersdigitalhealthapps;
$page_titles["DigitalHealthApps"] = &$pageTitlesdigitalhealthapps;


changeTextControlsToDate( "DigitalHealthApps" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["DigitalHealthApps"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["DigitalHealthApps"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_digitalhealthapps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "app_id,  	name,  	standards_met";
$proto0["m_strFrom"] = "FROM DigitalHealthApps";
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
	"m_strName" => "app_id",
	"m_strTable" => "DigitalHealthApps",
	"m_srcTableName" => "DigitalHealthApps"
));

$proto6["m_sql"] = "app_id";
$proto6["m_srcTableName"] = "DigitalHealthApps";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "DigitalHealthApps",
	"m_srcTableName" => "DigitalHealthApps"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "DigitalHealthApps";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "standards_met",
	"m_strTable" => "DigitalHealthApps",
	"m_srcTableName" => "DigitalHealthApps"
));

$proto10["m_sql"] = "standards_met";
$proto10["m_srcTableName"] = "DigitalHealthApps";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "DigitalHealthApps";
$proto13["m_srcTableName"] = "DigitalHealthApps";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "app_id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "standards_met";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "DigitalHealthApps";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "DigitalHealthApps";
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
$proto0["m_srcTableName"]="DigitalHealthApps";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_digitalhealthapps = createSqlQuery_digitalhealthapps();


	
																												;

			

$tdatadigitalhealthapps[".sqlquery"] = $queryData_digitalhealthapps;



$tdatadigitalhealthapps[".hasEvents"] = false;

?>