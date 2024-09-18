<?php
$tdatamoh_facility_types = array();
$tdatamoh_facility_types[".searchableFields"] = array();
$tdatamoh_facility_types[".ShortName"] = "moh_facility_types";
$tdatamoh_facility_types[".OwnerID"] = "";
$tdatamoh_facility_types[".OriginalTable"] = "public.moh_facility_types";


$tdatamoh_facility_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_facility_types[".originalPagesByType"] = $tdatamoh_facility_types[".pagesByType"];
$tdatamoh_facility_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_facility_types[".originalPages"] = $tdatamoh_facility_types[".pages"];
$tdatamoh_facility_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_facility_types[".originalDefaultPages"] = $tdatamoh_facility_types[".defaultPages"];

//	field labels
$fieldLabelsmoh_facility_types = array();
$fieldToolTipsmoh_facility_types = array();
$pageTitlesmoh_facility_types = array();
$placeHoldersmoh_facility_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_facility_types["English"] = array();
	$fieldToolTipsmoh_facility_types["English"] = array();
	$placeHoldersmoh_facility_types["English"] = array();
	$pageTitlesmoh_facility_types["English"] = array();
	$fieldLabelsmoh_facility_types["English"]["facility_type_id"] = "Facility Type Id";
	$fieldToolTipsmoh_facility_types["English"]["facility_type_id"] = "";
	$placeHoldersmoh_facility_types["English"]["facility_type_id"] = "";
	$fieldLabelsmoh_facility_types["English"]["facility_type_name"] = "Facility Type Name";
	$fieldToolTipsmoh_facility_types["English"]["facility_type_name"] = "";
	$placeHoldersmoh_facility_types["English"]["facility_type_name"] = "";
	if (count($fieldToolTipsmoh_facility_types["English"]))
		$tdatamoh_facility_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmoh_facility_types["Amharic"] = array();
	$fieldToolTipsmoh_facility_types["Amharic"] = array();
	$placeHoldersmoh_facility_types["Amharic"] = array();
	$pageTitlesmoh_facility_types["Amharic"] = array();
	$fieldLabelsmoh_facility_types["Amharic"]["facility_type_id"] = "የመገልገያ አይነት መለያ";
	$fieldToolTipsmoh_facility_types["Amharic"]["facility_type_id"] = "";
	$placeHoldersmoh_facility_types["Amharic"]["facility_type_id"] = "";
	$fieldLabelsmoh_facility_types["Amharic"]["facility_type_name"] = "የመገልገያ አይነት ስም";
	$fieldToolTipsmoh_facility_types["Amharic"]["facility_type_name"] = "";
	$placeHoldersmoh_facility_types["Amharic"]["facility_type_name"] = "";
	if (count($fieldToolTipsmoh_facility_types["Amharic"]))
		$tdatamoh_facility_types[".isUseToolTips"] = true;
}


	$tdatamoh_facility_types[".NCSearch"] = true;



$tdatamoh_facility_types[".shortTableName"] = "moh_facility_types";
$tdatamoh_facility_types[".nSecOptions"] = 0;

$tdatamoh_facility_types[".mainTableOwnerID"] = "";
$tdatamoh_facility_types[".entityType"] = 0;
$tdatamoh_facility_types[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_facility_types[".strOriginalTableName"] = "public.moh_facility_types";

	



$tdatamoh_facility_types[".showAddInPopup"] = false;

$tdatamoh_facility_types[".showEditInPopup"] = false;

$tdatamoh_facility_types[".showViewInPopup"] = false;

$tdatamoh_facility_types[".listAjax"] = false;
//	temporary
//$tdatamoh_facility_types[".listAjax"] = false;

	$tdatamoh_facility_types[".audit"] = true;

	$tdatamoh_facility_types[".locking"] = false;


$pages = $tdatamoh_facility_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_facility_types[".edit"] = true;
	$tdatamoh_facility_types[".afterEditAction"] = 1;
	$tdatamoh_facility_types[".closePopupAfterEdit"] = 1;
	$tdatamoh_facility_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_facility_types[".add"] = true;
$tdatamoh_facility_types[".afterAddAction"] = 1;
$tdatamoh_facility_types[".closePopupAfterAdd"] = 1;
$tdatamoh_facility_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_facility_types[".list"] = true;
}



$tdatamoh_facility_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_facility_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_facility_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_facility_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_facility_types[".printFriendly"] = true;
}



$tdatamoh_facility_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_facility_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_facility_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_facility_types[".isUseAjaxSuggest"] = true;





$tdatamoh_facility_types[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_facility_types[".buttonsAdded"] = false;

$tdatamoh_facility_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_facility_types[".isUseTimeForSearch"] = false;


$tdatamoh_facility_types[".badgeColor"] = "778899";


$tdatamoh_facility_types[".allSearchFields"] = array();
$tdatamoh_facility_types[".filterFields"] = array();
$tdatamoh_facility_types[".requiredSearchFields"] = array();

$tdatamoh_facility_types[".googleLikeFields"] = array();
$tdatamoh_facility_types[".googleLikeFields"][] = "facility_type_id";
$tdatamoh_facility_types[".googleLikeFields"][] = "facility_type_name";



$tdatamoh_facility_types[".tableType"] = "list";

$tdatamoh_facility_types[".printerPageOrientation"] = 0;
$tdatamoh_facility_types[".nPrinterPageScale"] = 100;

$tdatamoh_facility_types[".nPrinterSplitRecords"] = 40;

$tdatamoh_facility_types[".geocodingEnabled"] = false;










$tdatamoh_facility_types[".pageSize"] = 20;

$tdatamoh_facility_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_facility_types[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_facility_types[".orderindexes"] = array();


$tdatamoh_facility_types[".sqlHead"] = "SELECT facility_type_id,  	facility_type_name";
$tdatamoh_facility_types[".sqlFrom"] = "FROM \"public\".moh_facility_types";
$tdatamoh_facility_types[".sqlWhereExpr"] = "";
$tdatamoh_facility_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_facility_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_facility_types[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_facility_types[".highlightSearchResults"] = true;

$tableKeysmoh_facility_types = array();
$tableKeysmoh_facility_types[] = "facility_type_id";
$tdatamoh_facility_types[".Keys"] = $tableKeysmoh_facility_types;


$tdatamoh_facility_types[".hideMobileList"] = array();




//	facility_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "facility_type_id";
	$fdata["GoodName"] = "facility_type_id";
	$fdata["ownerTable"] = "public.moh_facility_types";
	$fdata["Label"] = GetFieldLabel("public_moh_facility_types","facility_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "facility_type_id";

		$fdata["sourceSingle"] = "facility_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_type_id";

	
	
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


	$tdatamoh_facility_types["facility_type_id"] = $fdata;
		$tdatamoh_facility_types[".searchableFields"][] = "facility_type_id";
//	facility_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_type_name";
	$fdata["GoodName"] = "facility_type_name";
	$fdata["ownerTable"] = "public.moh_facility_types";
	$fdata["Label"] = GetFieldLabel("public_moh_facility_types","facility_type_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "facility_type_name";

		$fdata["sourceSingle"] = "facility_type_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_type_name";

	
	
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


	$tdatamoh_facility_types["facility_type_name"] = $fdata;
		$tdatamoh_facility_types[".searchableFields"][] = "facility_type_name";


$tables_data["public.moh_facility_types"]=&$tdatamoh_facility_types;
$field_labels["public_moh_facility_types"] = &$fieldLabelsmoh_facility_types;
$fieldToolTips["public_moh_facility_types"] = &$fieldToolTipsmoh_facility_types;
$placeHolders["public_moh_facility_types"] = &$placeHoldersmoh_facility_types;
$page_titles["public_moh_facility_types"] = &$pageTitlesmoh_facility_types;


changeTextControlsToDate( "public.moh_facility_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_facility_types"] = array();
//	public.moh_health_facilities
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_health_facilities";
		$detailsParam["dOriginalTable"] = "public.moh_health_facilities";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_health_facilities";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_health_facilities");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_facility_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_facility_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_facility_types"][$dIndex]["masterKeys"][]="facility_type_id";

				$detailsTablesData["public.moh_facility_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_facility_types"][$dIndex]["detailKeys"][]="facility_type_id";
//	public.moh_indicator_data
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.moh_indicator_data";
		$detailsParam["dOriginalTable"] = "public.moh_indicator_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "moh_indicator_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_moh_indicator_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.moh_facility_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_facility_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_facility_types"][$dIndex]["masterKeys"][]="facility_type_id";

				$detailsTablesData["public.moh_facility_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_facility_types"][$dIndex]["detailKeys"][]="facility_type_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_facility_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_facility_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "facility_type_id,  	facility_type_name";
$proto0["m_strFrom"] = "FROM \"public\".moh_facility_types";
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
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_facility_types",
	"m_srcTableName" => "public.moh_facility_types"
));

$proto6["m_sql"] = "facility_type_id";
$proto6["m_srcTableName"] = "public.moh_facility_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_name",
	"m_strTable" => "public.moh_facility_types",
	"m_srcTableName" => "public.moh_facility_types"
));

$proto8["m_sql"] = "facility_type_name";
$proto8["m_srcTableName"] = "public.moh_facility_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.moh_facility_types";
$proto11["m_srcTableName"] = "public.moh_facility_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "facility_type_id";
$proto11["m_columns"][] = "facility_type_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".moh_facility_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.moh_facility_types";
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
$proto0["m_srcTableName"]="public.moh_facility_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_facility_types = createSqlQuery_moh_facility_types();


	
																												;

		

$tdatamoh_facility_types[".sqlquery"] = $queryData_moh_facility_types;



$tdatamoh_facility_types[".hasEvents"] = false;

?>