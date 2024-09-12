<?php
$tdatamoh_assessments = array();
$tdatamoh_assessments[".searchableFields"] = array();
$tdatamoh_assessments[".ShortName"] = "moh_assessments";
$tdatamoh_assessments[".OwnerID"] = "";
$tdatamoh_assessments[".OriginalTable"] = "public.moh_assessments";


$tdatamoh_assessments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_assessments[".originalPagesByType"] = $tdatamoh_assessments[".pagesByType"];
$tdatamoh_assessments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_assessments[".originalPages"] = $tdatamoh_assessments[".pages"];
$tdatamoh_assessments[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_assessments[".originalDefaultPages"] = $tdatamoh_assessments[".defaultPages"];

//	field labels
$fieldLabelsmoh_assessments = array();
$fieldToolTipsmoh_assessments = array();
$pageTitlesmoh_assessments = array();
$placeHoldersmoh_assessments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_assessments["English"] = array();
	$fieldToolTipsmoh_assessments["English"] = array();
	$placeHoldersmoh_assessments["English"] = array();
	$pageTitlesmoh_assessments["English"] = array();
	$fieldLabelsmoh_assessments["English"]["assessment_id"] = "Assessment Id";
	$fieldToolTipsmoh_assessments["English"]["assessment_id"] = "";
	$placeHoldersmoh_assessments["English"]["assessment_id"] = "";
	$fieldLabelsmoh_assessments["English"]["assessment_name"] = "Assessment Name";
	$fieldToolTipsmoh_assessments["English"]["assessment_name"] = "";
	$placeHoldersmoh_assessments["English"]["assessment_name"] = "";
	if (count($fieldToolTipsmoh_assessments["English"]))
		$tdatamoh_assessments[".isUseToolTips"] = true;
}


	$tdatamoh_assessments[".NCSearch"] = true;



$tdatamoh_assessments[".shortTableName"] = "moh_assessments";
$tdatamoh_assessments[".nSecOptions"] = 0;

$tdatamoh_assessments[".mainTableOwnerID"] = "";
$tdatamoh_assessments[".entityType"] = 0;
$tdatamoh_assessments[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_assessments[".strOriginalTableName"] = "public.moh_assessments";

	



$tdatamoh_assessments[".showAddInPopup"] = false;

$tdatamoh_assessments[".showEditInPopup"] = false;

$tdatamoh_assessments[".showViewInPopup"] = false;

$tdatamoh_assessments[".listAjax"] = false;
//	temporary
//$tdatamoh_assessments[".listAjax"] = false;

	$tdatamoh_assessments[".audit"] = true;

	$tdatamoh_assessments[".locking"] = false;


$pages = $tdatamoh_assessments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_assessments[".edit"] = true;
	$tdatamoh_assessments[".afterEditAction"] = 1;
	$tdatamoh_assessments[".closePopupAfterEdit"] = 1;
	$tdatamoh_assessments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_assessments[".add"] = true;
$tdatamoh_assessments[".afterAddAction"] = 1;
$tdatamoh_assessments[".closePopupAfterAdd"] = 1;
$tdatamoh_assessments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_assessments[".list"] = true;
}



$tdatamoh_assessments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_assessments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_assessments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_assessments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_assessments[".printFriendly"] = true;
}



$tdatamoh_assessments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_assessments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_assessments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_assessments[".isUseAjaxSuggest"] = true;





$tdatamoh_assessments[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_assessments[".buttonsAdded"] = false;

$tdatamoh_assessments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_assessments[".isUseTimeForSearch"] = false;


$tdatamoh_assessments[".badgeColor"] = "6DA5C8";


$tdatamoh_assessments[".allSearchFields"] = array();
$tdatamoh_assessments[".filterFields"] = array();
$tdatamoh_assessments[".requiredSearchFields"] = array();

$tdatamoh_assessments[".googleLikeFields"] = array();
$tdatamoh_assessments[".googleLikeFields"][] = "assessment_id";
$tdatamoh_assessments[".googleLikeFields"][] = "assessment_name";



$tdatamoh_assessments[".tableType"] = "list";

$tdatamoh_assessments[".printerPageOrientation"] = 0;
$tdatamoh_assessments[".nPrinterPageScale"] = 100;

$tdatamoh_assessments[".nPrinterSplitRecords"] = 40;

$tdatamoh_assessments[".geocodingEnabled"] = false;










$tdatamoh_assessments[".pageSize"] = 20;

$tdatamoh_assessments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_assessments[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_assessments[".orderindexes"] = array();


$tdatamoh_assessments[".sqlHead"] = "SELECT assessment_id,  	assessment_name";
$tdatamoh_assessments[".sqlFrom"] = "FROM \"public\".moh_assessments";
$tdatamoh_assessments[".sqlWhereExpr"] = "";
$tdatamoh_assessments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_assessments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_assessments[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_assessments[".highlightSearchResults"] = true;

$tableKeysmoh_assessments = array();
$tableKeysmoh_assessments[] = "assessment_id";
$tdatamoh_assessments[".Keys"] = $tableKeysmoh_assessments;


$tdatamoh_assessments[".hideMobileList"] = array();




//	assessment_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "assessment_id";
	$fdata["GoodName"] = "assessment_id";
	$fdata["ownerTable"] = "public.moh_assessments";
	$fdata["Label"] = GetFieldLabel("public_moh_assessments","assessment_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "assessment_id";

		$fdata["sourceSingle"] = "assessment_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assessment_id";

	
	
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


	$tdatamoh_assessments["assessment_id"] = $fdata;
		$tdatamoh_assessments[".searchableFields"][] = "assessment_id";
//	assessment_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "assessment_name";
	$fdata["GoodName"] = "assessment_name";
	$fdata["ownerTable"] = "public.moh_assessments";
	$fdata["Label"] = GetFieldLabel("public_moh_assessments","assessment_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "assessment_name";

		$fdata["sourceSingle"] = "assessment_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assessment_name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamoh_assessments["assessment_name"] = $fdata;
		$tdatamoh_assessments[".searchableFields"][] = "assessment_name";


$tables_data["public.moh_assessments"]=&$tdatamoh_assessments;
$field_labels["public_moh_assessments"] = &$fieldLabelsmoh_assessments;
$fieldToolTips["public_moh_assessments"] = &$fieldToolTipsmoh_assessments;
$placeHolders["public_moh_assessments"] = &$placeHoldersmoh_assessments;
$page_titles["public_moh_assessments"] = &$pageTitlesmoh_assessments;


changeTextControlsToDate( "public.moh_assessments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_assessments"] = array();
//	public.moh_indicator_data
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicator_data";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicator_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicator_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_assessments"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_assessments"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_assessments"][$dIndex]["masterKeys"][]="assessment_id";

				$detailsTablesData["public.moh_assessments"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_assessments"][$dIndex]["detailKeys"][]="assessment_id";
//	MOH_Indicators_Data_Report
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="MOH_Indicators_Data_Report";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		$detailsParam["dType"]=PAGE_REPORT;
	
		$detailsParam["dShortTable"] = "moh_indicators_data_report";
	$detailsParam["dCaptionTable"] = GetTableCaption("MOH_Indicators_Data_Report");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_assessments"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_assessments"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_assessments"][$dIndex]["masterKeys"][]="assessment_id";

				$detailsTablesData["public.moh_assessments"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_assessments"][$dIndex]["detailKeys"][]="assessment_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_assessments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_assessments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "assessment_id,  	assessment_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_assessments";
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
	"m_strName" => "assessment_id",
	"m_strTable" => "public.moh_assessments",
	"m_srcTableName" => "public.moh_assessments"
));

$proto6["m_sql"] = "assessment_id";
$proto6["m_srcTableName"] = "public.moh_assessments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "assessment_name",
	"m_strTable" => "public.moh_assessments",
	"m_srcTableName" => "public.moh_assessments"
));

$proto8["m_sql"] = "assessment_name";
$proto8["m_srcTableName"] = "public.moh_assessments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_assessments";
$proto11["m_srcTableName"] = "public.moh_assessments";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "assessment_id";
$proto11["m_columns"][] = "assessment_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_assessments";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_assessments";
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
$proto0["m_srcTableName"]="public.moh_assessments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_assessments = createSqlQuery_moh_assessments();


	
																												;

		

$tdatamoh_assessments[".sqlquery"] = $queryData_moh_assessments;



$tdatamoh_assessments[".hasEvents"] = false;

?>