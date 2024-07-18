<?php
$tdatamfr_zone = array();
$tdatamfr_zone[".searchableFields"] = array();
$tdatamfr_zone[".ShortName"] = "mfr_zone";
$tdatamfr_zone[".OwnerID"] = "";
$tdatamfr_zone[".OriginalTable"] = "MFR_Zone";


$tdatamfr_zone[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamfr_zone[".originalPagesByType"] = $tdatamfr_zone[".pagesByType"];
$tdatamfr_zone[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamfr_zone[".originalPages"] = $tdatamfr_zone[".pages"];
$tdatamfr_zone[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamfr_zone[".originalDefaultPages"] = $tdatamfr_zone[".defaultPages"];

//	field labels
$fieldLabelsmfr_zone = array();
$fieldToolTipsmfr_zone = array();
$pageTitlesmfr_zone = array();
$placeHoldersmfr_zone = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_zone["English"] = array();
	$fieldToolTipsmfr_zone["English"] = array();
	$placeHoldersmfr_zone["English"] = array();
	$pageTitlesmfr_zone["English"] = array();
	$fieldLabelsmfr_zone["English"]["Zone"] = "Zone";
	$fieldToolTipsmfr_zone["English"]["Zone"] = "";
	$placeHoldersmfr_zone["English"]["Zone"] = "";
	$fieldLabelsmfr_zone["English"]["Lat"] = "Lat";
	$fieldToolTipsmfr_zone["English"]["Lat"] = "";
	$placeHoldersmfr_zone["English"]["Lat"] = "";
	$fieldLabelsmfr_zone["English"]["Lng"] = "Lng";
	$fieldToolTipsmfr_zone["English"]["Lng"] = "";
	$placeHoldersmfr_zone["English"]["Lng"] = "";
	$fieldLabelsmfr_zone["English"]["Count"] = "Count";
	$fieldToolTipsmfr_zone["English"]["Count"] = "";
	$placeHoldersmfr_zone["English"]["Count"] = "";
	if (count($fieldToolTipsmfr_zone["English"]))
		$tdatamfr_zone[".isUseToolTips"] = true;
}


	$tdatamfr_zone[".NCSearch"] = true;



$tdatamfr_zone[".shortTableName"] = "mfr_zone";
$tdatamfr_zone[".nSecOptions"] = 0;

$tdatamfr_zone[".mainTableOwnerID"] = "";
$tdatamfr_zone[".entityType"] = 0;
$tdatamfr_zone[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_zone[".strOriginalTableName"] = "MFR_Zone";

	



$tdatamfr_zone[".showAddInPopup"] = false;

$tdatamfr_zone[".showEditInPopup"] = false;

$tdatamfr_zone[".showViewInPopup"] = false;

$tdatamfr_zone[".listAjax"] = false;
//	temporary
//$tdatamfr_zone[".listAjax"] = false;

	$tdatamfr_zone[".audit"] = false;

	$tdatamfr_zone[".locking"] = false;


$pages = $tdatamfr_zone[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_zone[".edit"] = true;
	$tdatamfr_zone[".afterEditAction"] = 1;
	$tdatamfr_zone[".closePopupAfterEdit"] = 1;
	$tdatamfr_zone[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_zone[".add"] = true;
$tdatamfr_zone[".afterAddAction"] = 1;
$tdatamfr_zone[".closePopupAfterAdd"] = 1;
$tdatamfr_zone[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_zone[".list"] = true;
}



$tdatamfr_zone[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_zone[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_zone[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_zone[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_zone[".printFriendly"] = true;
}



$tdatamfr_zone[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_zone[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_zone[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_zone[".isUseAjaxSuggest"] = true;





$tdatamfr_zone[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_zone[".buttonsAdded"] = false;

$tdatamfr_zone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_zone[".isUseTimeForSearch"] = false;


$tdatamfr_zone[".badgeColor"] = "CD5C5C";


$tdatamfr_zone[".allSearchFields"] = array();
$tdatamfr_zone[".filterFields"] = array();
$tdatamfr_zone[".requiredSearchFields"] = array();

$tdatamfr_zone[".googleLikeFields"] = array();
$tdatamfr_zone[".googleLikeFields"][] = "Zone";
$tdatamfr_zone[".googleLikeFields"][] = "Lat";
$tdatamfr_zone[".googleLikeFields"][] = "Lng";
$tdatamfr_zone[".googleLikeFields"][] = "Count";



$tdatamfr_zone[".tableType"] = "list";

$tdatamfr_zone[".printerPageOrientation"] = 0;
$tdatamfr_zone[".nPrinterPageScale"] = 100;

$tdatamfr_zone[".nPrinterSplitRecords"] = 40;

$tdatamfr_zone[".geocodingEnabled"] = true;
$tdatamfr_zone[".geocodingData"] = array();
$tdatamfr_zone[".geocodingData"]["latField"] = "Lat";
$tdatamfr_zone[".geocodingData"]["lngField"] = "Lng";
$tdatamfr_zone[".geocodingData"]["addressFields"] = array();
	$tdatamfr_zone[".geocodingData"]["addressFields"][] = "Zone";










$tdatamfr_zone[".pageSize"] = 20;

$tdatamfr_zone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_zone[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_zone[".orderindexes"] = array();


$tdatamfr_zone[".sqlHead"] = "SELECT `Zone`,  	Lat,  	Lng,  	`Count`";
$tdatamfr_zone[".sqlFrom"] = "FROM MFR_Zone";
$tdatamfr_zone[".sqlWhereExpr"] = "";
$tdatamfr_zone[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_zone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_zone[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_zone[".highlightSearchResults"] = true;

$tableKeysmfr_zone = array();
$tdatamfr_zone[".Keys"] = $tableKeysmfr_zone;


$tdatamfr_zone[".hideMobileList"] = array();




//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone","Zone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Zone";

		$fdata["sourceSingle"] = "Zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Zone`";

	
	
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


	$tdatamfr_zone["Zone"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "Zone";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone","Lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
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


	$tdatamfr_zone["Lat"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone","Lng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
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


	$tdatamfr_zone["Lng"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "Lng";
//	Count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Count";
	$fdata["GoodName"] = "Count";
	$fdata["ownerTable"] = "MFR_Zone";
	$fdata["Label"] = GetFieldLabel("MFR_Zone","Count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Count";

		$fdata["sourceSingle"] = "Count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Count`";

	
	
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


	$tdatamfr_zone["Count"] = $fdata;
		$tdatamfr_zone[".searchableFields"][] = "Count";


$tables_data["MFR_Zone"]=&$tdatamfr_zone;
$field_labels["MFR_Zone"] = &$fieldLabelsmfr_zone;
$fieldToolTips["MFR_Zone"] = &$fieldToolTipsmfr_zone;
$placeHolders["MFR_Zone"] = &$placeHoldersmfr_zone;
$page_titles["MFR_Zone"] = &$pageTitlesmfr_zone;


changeTextControlsToDate( "MFR_Zone" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["MFR_Zone"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["MFR_Zone"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_zone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Zone`,  	Lat,  	Lng,  	`Count`";
$proto0["m_strFrom"] = "FROM MFR_Zone";
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
	"m_strName" => "Zone",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone"
));

$proto6["m_sql"] = "`Zone`";
$proto6["m_srcTableName"] = "MFR_Zone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone"
));

$proto8["m_sql"] = "Lat";
$proto8["m_srcTableName"] = "MFR_Zone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone"
));

$proto10["m_sql"] = "Lng";
$proto10["m_srcTableName"] = "MFR_Zone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Count",
	"m_strTable" => "MFR_Zone",
	"m_srcTableName" => "MFR_Zone"
));

$proto12["m_sql"] = "`Count`";
$proto12["m_srcTableName"] = "MFR_Zone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "MFR_Zone";
$proto15["m_srcTableName"] = "MFR_Zone";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Zone";
$proto15["m_columns"][] = "Lat";
$proto15["m_columns"][] = "Lng";
$proto15["m_columns"][] = "Count";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "MFR_Zone";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "MFR_Zone";
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
$proto0["m_srcTableName"]="MFR_Zone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_zone = createSqlQuery_mfr_zone();


	
						;

				

$tdatamfr_zone[".sqlquery"] = $queryData_mfr_zone;



$tdatamfr_zone[".hasEvents"] = false;

?>