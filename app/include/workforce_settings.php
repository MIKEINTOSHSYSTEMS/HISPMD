<?php
$tdataworkforce = array();
$tdataworkforce[".searchableFields"] = array();
$tdataworkforce[".ShortName"] = "workforce";
$tdataworkforce[".OwnerID"] = "";
$tdataworkforce[".OriginalTable"] = "Workforce";


$tdataworkforce[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataworkforce[".originalPagesByType"] = $tdataworkforce[".pagesByType"];
$tdataworkforce[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataworkforce[".originalPages"] = $tdataworkforce[".pages"];
$tdataworkforce[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataworkforce[".originalDefaultPages"] = $tdataworkforce[".defaultPages"];

//	field labels
$fieldLabelsworkforce = array();
$fieldToolTipsworkforce = array();
$pageTitlesworkforce = array();
$placeHoldersworkforce = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsworkforce["English"] = array();
	$fieldToolTipsworkforce["English"] = array();
	$placeHoldersworkforce["English"] = array();
	$pageTitlesworkforce["English"] = array();
	$fieldLabelsworkforce["English"]["workforce_id"] = "Workforce Id";
	$fieldToolTipsworkforce["English"]["workforce_id"] = "";
	$placeHoldersworkforce["English"]["workforce_id"] = "";
	$fieldLabelsworkforce["English"]["region_id"] = "Region Id";
	$fieldToolTipsworkforce["English"]["region_id"] = "";
	$placeHoldersworkforce["English"]["region_id"] = "";
	$fieldLabelsworkforce["English"]["adequate_staff"] = "Adequate Staff";
	$fieldToolTipsworkforce["English"]["adequate_staff"] = "";
	$placeHoldersworkforce["English"]["adequate_staff"] = "";
	$fieldLabelsworkforce["English"]["competency_index"] = "Competency Index";
	$fieldToolTipsworkforce["English"]["competency_index"] = "";
	$placeHoldersworkforce["English"]["competency_index"] = "";
	if (count($fieldToolTipsworkforce["English"]))
		$tdataworkforce[".isUseToolTips"] = true;
}


	$tdataworkforce[".NCSearch"] = true;



$tdataworkforce[".shortTableName"] = "workforce";
$tdataworkforce[".nSecOptions"] = 0;

$tdataworkforce[".mainTableOwnerID"] = "";
$tdataworkforce[".entityType"] = 0;
$tdataworkforce[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataworkforce[".strOriginalTableName"] = "Workforce";

	



$tdataworkforce[".showAddInPopup"] = false;

$tdataworkforce[".showEditInPopup"] = false;

$tdataworkforce[".showViewInPopup"] = false;

$tdataworkforce[".listAjax"] = false;
//	temporary
//$tdataworkforce[".listAjax"] = false;

	$tdataworkforce[".audit"] = false;

	$tdataworkforce[".locking"] = false;


$pages = $tdataworkforce[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataworkforce[".edit"] = true;
	$tdataworkforce[".afterEditAction"] = 1;
	$tdataworkforce[".closePopupAfterEdit"] = 1;
	$tdataworkforce[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataworkforce[".add"] = true;
$tdataworkforce[".afterAddAction"] = 1;
$tdataworkforce[".closePopupAfterAdd"] = 1;
$tdataworkforce[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataworkforce[".list"] = true;
}



$tdataworkforce[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataworkforce[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataworkforce[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataworkforce[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataworkforce[".printFriendly"] = true;
}



$tdataworkforce[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataworkforce[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataworkforce[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataworkforce[".isUseAjaxSuggest"] = true;





$tdataworkforce[".ajaxCodeSnippetAdded"] = false;

$tdataworkforce[".buttonsAdded"] = false;

$tdataworkforce[".addPageEvents"] = false;

// use timepicker for search panel
$tdataworkforce[".isUseTimeForSearch"] = false;


$tdataworkforce[".badgeColor"] = "CFAE83";


$tdataworkforce[".allSearchFields"] = array();
$tdataworkforce[".filterFields"] = array();
$tdataworkforce[".requiredSearchFields"] = array();

$tdataworkforce[".googleLikeFields"] = array();
$tdataworkforce[".googleLikeFields"][] = "workforce_id";
$tdataworkforce[".googleLikeFields"][] = "region_id";
$tdataworkforce[".googleLikeFields"][] = "adequate_staff";
$tdataworkforce[".googleLikeFields"][] = "competency_index";



$tdataworkforce[".tableType"] = "list";

$tdataworkforce[".printerPageOrientation"] = 0;
$tdataworkforce[".nPrinterPageScale"] = 100;

$tdataworkforce[".nPrinterSplitRecords"] = 40;

$tdataworkforce[".geocodingEnabled"] = false;










$tdataworkforce[".pageSize"] = 20;

$tdataworkforce[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataworkforce[".strOrderBy"] = $tstrOrderBy;

$tdataworkforce[".orderindexes"] = array();


$tdataworkforce[".sqlHead"] = "SELECT workforce_id,  	region_id,  	adequate_staff,  	competency_index";
$tdataworkforce[".sqlFrom"] = "FROM Workforce";
$tdataworkforce[".sqlWhereExpr"] = "";
$tdataworkforce[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataworkforce[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataworkforce[".arrGroupsPerPage"] = $arrGPP;

$tdataworkforce[".highlightSearchResults"] = true;

$tableKeysworkforce = array();
$tableKeysworkforce[] = "workforce_id";
$tdataworkforce[".Keys"] = $tableKeysworkforce;


$tdataworkforce[".hideMobileList"] = array();




//	workforce_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "workforce_id";
	$fdata["GoodName"] = "workforce_id";
	$fdata["ownerTable"] = "Workforce";
	$fdata["Label"] = GetFieldLabel("Workforce","workforce_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "workforce_id";

		$fdata["sourceSingle"] = "workforce_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "workforce_id";

	
	
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


	$tdataworkforce["workforce_id"] = $fdata;
		$tdataworkforce[".searchableFields"][] = "workforce_id";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "Workforce";
	$fdata["Label"] = GetFieldLabel("Workforce","region_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
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


	$tdataworkforce["region_id"] = $fdata;
		$tdataworkforce[".searchableFields"][] = "region_id";
//	adequate_staff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "adequate_staff";
	$fdata["GoodName"] = "adequate_staff";
	$fdata["ownerTable"] = "Workforce";
	$fdata["Label"] = GetFieldLabel("Workforce","adequate_staff");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "adequate_staff";

		$fdata["sourceSingle"] = "adequate_staff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adequate_staff";

	
	
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


	$tdataworkforce["adequate_staff"] = $fdata;
		$tdataworkforce[".searchableFields"][] = "adequate_staff";
//	competency_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "competency_index";
	$fdata["GoodName"] = "competency_index";
	$fdata["ownerTable"] = "Workforce";
	$fdata["Label"] = GetFieldLabel("Workforce","competency_index");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "competency_index";

		$fdata["sourceSingle"] = "competency_index";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "competency_index";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataworkforce["competency_index"] = $fdata;
		$tdataworkforce[".searchableFields"][] = "competency_index";


$tables_data["Workforce"]=&$tdataworkforce;
$field_labels["Workforce"] = &$fieldLabelsworkforce;
$fieldToolTips["Workforce"] = &$fieldToolTipsworkforce;
$placeHolders["Workforce"] = &$placeHoldersworkforce;
$page_titles["Workforce"] = &$pageTitlesworkforce;


changeTextControlsToDate( "Workforce" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Workforce"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Workforce"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Workforce"][0] = $masterParams;
				$masterTablesData["Workforce"][0]["masterKeys"] = array();
	$masterTablesData["Workforce"][0]["masterKeys"][]="region_id";
				$masterTablesData["Workforce"][0]["detailKeys"] = array();
	$masterTablesData["Workforce"][0]["detailKeys"][]="region_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_workforce()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "workforce_id,  	region_id,  	adequate_staff,  	competency_index";
$proto0["m_strFrom"] = "FROM Workforce";
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
	"m_strName" => "workforce_id",
	"m_strTable" => "Workforce",
	"m_srcTableName" => "Workforce"
));

$proto6["m_sql"] = "workforce_id";
$proto6["m_srcTableName"] = "Workforce";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "Workforce",
	"m_srcTableName" => "Workforce"
));

$proto8["m_sql"] = "region_id";
$proto8["m_srcTableName"] = "Workforce";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "adequate_staff",
	"m_strTable" => "Workforce",
	"m_srcTableName" => "Workforce"
));

$proto10["m_sql"] = "adequate_staff";
$proto10["m_srcTableName"] = "Workforce";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "competency_index",
	"m_strTable" => "Workforce",
	"m_srcTableName" => "Workforce"
));

$proto12["m_sql"] = "competency_index";
$proto12["m_srcTableName"] = "Workforce";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "Workforce";
$proto15["m_srcTableName"] = "Workforce";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "workforce_id";
$proto15["m_columns"][] = "region_id";
$proto15["m_columns"][] = "adequate_staff";
$proto15["m_columns"][] = "competency_index";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Workforce";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Workforce";
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
$proto0["m_srcTableName"]="Workforce";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_workforce = createSqlQuery_workforce();


	
								;

				

$tdataworkforce[".sqlquery"] = $queryData_workforce;



$tdataworkforce[".hasEvents"] = false;

?>