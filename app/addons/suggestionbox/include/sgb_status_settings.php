<?php
$tdatasgb_status = array();
$tdatasgb_status[".searchableFields"] = array();
$tdatasgb_status[".ShortName"] = "sgb_status";
$tdatasgb_status[".OwnerID"] = "";
$tdatasgb_status[".OriginalTable"] = "sgb_status";


$tdatasgb_status[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_status[".originalPagesByType"] = $tdatasgb_status[".pagesByType"];
$tdatasgb_status[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_status[".originalPages"] = $tdatasgb_status[".pages"];
$tdatasgb_status[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_status[".originalDefaultPages"] = $tdatasgb_status[".defaultPages"];

//	field labels
$fieldLabelssgb_status = array();
$fieldToolTipssgb_status = array();
$pageTitlessgb_status = array();
$placeHolderssgb_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_status["English"] = array();
	$fieldToolTipssgb_status["English"] = array();
	$placeHolderssgb_status["English"] = array();
	$pageTitlessgb_status["English"] = array();
	$fieldLabelssgb_status["English"]["statusname"] = "Statusname";
	$fieldToolTipssgb_status["English"]["statusname"] = "";
	$placeHolderssgb_status["English"]["statusname"] = "";
	$fieldLabelssgb_status["English"]["statuscolor"] = "Statuscolor";
	$fieldToolTipssgb_status["English"]["statuscolor"] = "";
	$placeHolderssgb_status["English"]["statuscolor"] = "";
	$fieldLabelssgb_status["English"]["status_label"] = "Status Label";
	$fieldToolTipssgb_status["English"]["status_label"] = "";
	$placeHolderssgb_status["English"]["status_label"] = "";
	$fieldLabelssgb_status["English"]["tooltip"] = "Tooltip";
	$fieldToolTipssgb_status["English"]["tooltip"] = "";
	$placeHolderssgb_status["English"]["tooltip"] = "";
	$fieldLabelssgb_status["English"]["visibility"] = "Visibility";
	$fieldToolTipssgb_status["English"]["visibility"] = "";
	$placeHolderssgb_status["English"]["visibility"] = "";
	if (count($fieldToolTipssgb_status["English"]))
		$tdatasgb_status[".isUseToolTips"] = true;
}


	$tdatasgb_status[".NCSearch"] = true;



$tdatasgb_status[".shortTableName"] = "sgb_status";
$tdatasgb_status[".nSecOptions"] = 0;

$tdatasgb_status[".mainTableOwnerID"] = "";
$tdatasgb_status[".entityType"] = 0;
$tdatasgb_status[".connId"] = "project_at_localhost";


$tdatasgb_status[".strOriginalTableName"] = "sgb_status";

	



$tdatasgb_status[".showAddInPopup"] = false;

$tdatasgb_status[".showEditInPopup"] = false;

$tdatasgb_status[".showViewInPopup"] = false;

$tdatasgb_status[".listAjax"] = false;
//	temporary
//$tdatasgb_status[".listAjax"] = false;

	$tdatasgb_status[".audit"] = false;

	$tdatasgb_status[".locking"] = false;


$pages = $tdatasgb_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_status[".edit"] = true;
	$tdatasgb_status[".afterEditAction"] = 1;
	$tdatasgb_status[".closePopupAfterEdit"] = 1;
	$tdatasgb_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_status[".add"] = true;
$tdatasgb_status[".afterAddAction"] = 1;
$tdatasgb_status[".closePopupAfterAdd"] = 1;
$tdatasgb_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_status[".list"] = true;
}



$tdatasgb_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_status[".printFriendly"] = true;
}



$tdatasgb_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_status[".isUseAjaxSuggest"] = true;



									

$tdatasgb_status[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_status[".buttonsAdded"] = false;

$tdatasgb_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasgb_status[".isUseTimeForSearch"] = false;


$tdatasgb_status[".badgeColor"] = "E07878";


$tdatasgb_status[".allSearchFields"] = array();
$tdatasgb_status[".filterFields"] = array();
$tdatasgb_status[".requiredSearchFields"] = array();

$tdatasgb_status[".googleLikeFields"] = array();
$tdatasgb_status[".googleLikeFields"][] = "statusname";
$tdatasgb_status[".googleLikeFields"][] = "statuscolor";
$tdatasgb_status[".googleLikeFields"][] = "status_label";
$tdatasgb_status[".googleLikeFields"][] = "tooltip";
$tdatasgb_status[".googleLikeFields"][] = "visibility";



$tdatasgb_status[".tableType"] = "list";

$tdatasgb_status[".printerPageOrientation"] = 0;
$tdatasgb_status[".nPrinterPageScale"] = 100;

$tdatasgb_status[".nPrinterSplitRecords"] = 40;

$tdatasgb_status[".geocodingEnabled"] = false;










$tdatasgb_status[".pageSize"] = 20;

$tdatasgb_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_status[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_status[".orderindexes"] = array();


$tdatasgb_status[".sqlHead"] = "SELECT statusname,  	statuscolor,  	status_label,  	tooltip,  	visibility";
$tdatasgb_status[".sqlFrom"] = "FROM sgb_status";
$tdatasgb_status[".sqlWhereExpr"] = "";
$tdatasgb_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_status[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_status[".highlightSearchResults"] = true;

$tableKeyssgb_status = array();
$tableKeyssgb_status[] = "statusname";
$tdatasgb_status[".Keys"] = $tableKeyssgb_status;


$tdatasgb_status[".hideMobileList"] = array();




//	statusname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "statusname";
	$fdata["GoodName"] = "statusname";
	$fdata["ownerTable"] = "sgb_status";
	$fdata["Label"] = GetFieldLabel("sgb_status","statusname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statusname";

		$fdata["sourceSingle"] = "statusname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusname";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasgb_status["statusname"] = $fdata;
		$tdatasgb_status[".searchableFields"][] = "statusname";
//	statuscolor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "statuscolor";
	$fdata["GoodName"] = "statuscolor";
	$fdata["ownerTable"] = "sgb_status";
	$fdata["Label"] = GetFieldLabel("sgb_status","statuscolor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statuscolor";

		$fdata["sourceSingle"] = "statuscolor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statuscolor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasgb_status["statuscolor"] = $fdata;
		$tdatasgb_status[".searchableFields"][] = "statuscolor";
//	status_label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_label";
	$fdata["GoodName"] = "status_label";
	$fdata["ownerTable"] = "sgb_status";
	$fdata["Label"] = GetFieldLabel("sgb_status","status_label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_label";

		$fdata["sourceSingle"] = "status_label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_label";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasgb_status["status_label"] = $fdata;
		$tdatasgb_status[".searchableFields"][] = "status_label";
//	tooltip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tooltip";
	$fdata["GoodName"] = "tooltip";
	$fdata["ownerTable"] = "sgb_status";
	$fdata["Label"] = GetFieldLabel("sgb_status","tooltip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tooltip";

		$fdata["sourceSingle"] = "tooltip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tooltip";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatasgb_status["tooltip"] = $fdata;
		$tdatasgb_status[".searchableFields"][] = "tooltip";
//	visibility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "visibility";
	$fdata["GoodName"] = "visibility";
	$fdata["ownerTable"] = "sgb_status";
	$fdata["Label"] = GetFieldLabel("sgb_status","visibility");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "visibility";

		$fdata["sourceSingle"] = "visibility";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visibility";

	
	
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


	$tdatasgb_status["visibility"] = $fdata;
		$tdatasgb_status[".searchableFields"][] = "visibility";


$tables_data["sgb_status"]=&$tdatasgb_status;
$field_labels["sgb_status"] = &$fieldLabelssgb_status;
$fieldToolTips["sgb_status"] = &$fieldToolTipssgb_status;
$placeHolders["sgb_status"] = &$placeHolderssgb_status;
$page_titles["sgb_status"] = &$pageTitlessgb_status;


changeTextControlsToDate( "sgb_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "statusname,  	statuscolor,  	status_label,  	tooltip,  	visibility";
$proto0["m_strFrom"] = "FROM sgb_status";
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
	"m_strName" => "statusname",
	"m_strTable" => "sgb_status",
	"m_srcTableName" => "sgb_status"
));

$proto6["m_sql"] = "statusname";
$proto6["m_srcTableName"] = "sgb_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "statuscolor",
	"m_strTable" => "sgb_status",
	"m_srcTableName" => "sgb_status"
));

$proto8["m_sql"] = "statuscolor";
$proto8["m_srcTableName"] = "sgb_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status_label",
	"m_strTable" => "sgb_status",
	"m_srcTableName" => "sgb_status"
));

$proto10["m_sql"] = "status_label";
$proto10["m_srcTableName"] = "sgb_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tooltip",
	"m_strTable" => "sgb_status",
	"m_srcTableName" => "sgb_status"
));

$proto12["m_sql"] = "tooltip";
$proto12["m_srcTableName"] = "sgb_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "visibility",
	"m_strTable" => "sgb_status",
	"m_srcTableName" => "sgb_status"
));

$proto14["m_sql"] = "visibility";
$proto14["m_srcTableName"] = "sgb_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sgb_status";
$proto17["m_srcTableName"] = "sgb_status";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "statusname";
$proto17["m_columns"][] = "statuscolor";
$proto17["m_columns"][] = "status_label";
$proto17["m_columns"][] = "tooltip";
$proto17["m_columns"][] = "visibility";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sgb_status";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sgb_status";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_status = createSqlQuery_sgb_status();


	
		;

					

$tdatasgb_status[".sqlquery"] = $queryData_sgb_status;



include_once(getabspath("include/sgb_status_events.php"));
$tdatasgb_status[".hasEvents"] = true;

?>