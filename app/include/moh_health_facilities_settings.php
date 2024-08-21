<?php
$tdatamoh_health_facilities = array();
$tdatamoh_health_facilities[".searchableFields"] = array();
$tdatamoh_health_facilities[".ShortName"] = "moh_health_facilities";
$tdatamoh_health_facilities[".OwnerID"] = "";
$tdatamoh_health_facilities[".OriginalTable"] = "public.moh_health_facilities";


$tdatamoh_health_facilities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamoh_health_facilities[".originalPagesByType"] = $tdatamoh_health_facilities[".pagesByType"];
$tdatamoh_health_facilities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamoh_health_facilities[".originalPages"] = $tdatamoh_health_facilities[".pages"];
$tdatamoh_health_facilities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamoh_health_facilities[".originalDefaultPages"] = $tdatamoh_health_facilities[".defaultPages"];

//	field labels
$fieldLabelsmoh_health_facilities = array();
$fieldToolTipsmoh_health_facilities = array();
$pageTitlesmoh_health_facilities = array();
$placeHoldersmoh_health_facilities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmoh_health_facilities["English"] = array();
	$fieldToolTipsmoh_health_facilities["English"] = array();
	$placeHoldersmoh_health_facilities["English"] = array();
	$pageTitlesmoh_health_facilities["English"] = array();
	$fieldLabelsmoh_health_facilities["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsmoh_health_facilities["English"]["facility_id"] = "";
	$placeHoldersmoh_health_facilities["English"]["facility_id"] = "";
	$fieldLabelsmoh_health_facilities["English"]["facility_name"] = "Facility Name";
	$fieldToolTipsmoh_health_facilities["English"]["facility_name"] = "";
	$placeHoldersmoh_health_facilities["English"]["facility_name"] = "";
	$fieldLabelsmoh_health_facilities["English"]["facility_type_id"] = "Facility Type Id";
	$fieldToolTipsmoh_health_facilities["English"]["facility_type_id"] = "";
	$placeHoldersmoh_health_facilities["English"]["facility_type_id"] = "";
	if (count($fieldToolTipsmoh_health_facilities["English"]))
		$tdatamoh_health_facilities[".isUseToolTips"] = true;
}


	$tdatamoh_health_facilities[".NCSearch"] = true;



$tdatamoh_health_facilities[".shortTableName"] = "moh_health_facilities";
$tdatamoh_health_facilities[".nSecOptions"] = 0;

$tdatamoh_health_facilities[".mainTableOwnerID"] = "";
$tdatamoh_health_facilities[".entityType"] = 0;
$tdatamoh_health_facilities[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamoh_health_facilities[".strOriginalTableName"] = "public.moh_health_facilities";

	



$tdatamoh_health_facilities[".showAddInPopup"] = false;

$tdatamoh_health_facilities[".showEditInPopup"] = false;

$tdatamoh_health_facilities[".showViewInPopup"] = false;

$tdatamoh_health_facilities[".listAjax"] = false;
//	temporary
//$tdatamoh_health_facilities[".listAjax"] = false;

	$tdatamoh_health_facilities[".audit"] = true;

	$tdatamoh_health_facilities[".locking"] = false;


$pages = $tdatamoh_health_facilities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamoh_health_facilities[".edit"] = true;
	$tdatamoh_health_facilities[".afterEditAction"] = 1;
	$tdatamoh_health_facilities[".closePopupAfterEdit"] = 1;
	$tdatamoh_health_facilities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamoh_health_facilities[".add"] = true;
$tdatamoh_health_facilities[".afterAddAction"] = 1;
$tdatamoh_health_facilities[".closePopupAfterAdd"] = 1;
$tdatamoh_health_facilities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamoh_health_facilities[".list"] = true;
}



$tdatamoh_health_facilities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamoh_health_facilities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamoh_health_facilities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamoh_health_facilities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamoh_health_facilities[".printFriendly"] = true;
}



$tdatamoh_health_facilities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamoh_health_facilities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamoh_health_facilities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamoh_health_facilities[".isUseAjaxSuggest"] = true;





$tdatamoh_health_facilities[".ajaxCodeSnippetAdded"] = false;

$tdatamoh_health_facilities[".buttonsAdded"] = false;

$tdatamoh_health_facilities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamoh_health_facilities[".isUseTimeForSearch"] = false;


$tdatamoh_health_facilities[".badgeColor"] = "CD5C5C";


$tdatamoh_health_facilities[".allSearchFields"] = array();
$tdatamoh_health_facilities[".filterFields"] = array();
$tdatamoh_health_facilities[".requiredSearchFields"] = array();

$tdatamoh_health_facilities[".googleLikeFields"] = array();
$tdatamoh_health_facilities[".googleLikeFields"][] = "facility_id";
$tdatamoh_health_facilities[".googleLikeFields"][] = "facility_name";
$tdatamoh_health_facilities[".googleLikeFields"][] = "facility_type_id";



$tdatamoh_health_facilities[".tableType"] = "list";

$tdatamoh_health_facilities[".printerPageOrientation"] = 0;
$tdatamoh_health_facilities[".nPrinterPageScale"] = 100;

$tdatamoh_health_facilities[".nPrinterSplitRecords"] = 40;

$tdatamoh_health_facilities[".geocodingEnabled"] = false;










$tdatamoh_health_facilities[".pageSize"] = 20;

$tdatamoh_health_facilities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamoh_health_facilities[".strOrderBy"] = $tstrOrderBy;

$tdatamoh_health_facilities[".orderindexes"] = array();


$tdatamoh_health_facilities[".sqlHead"] = "SELECT facility_id,  	facility_name,  	facility_type_id";
$tdatamoh_health_facilities[".sqlFrom"] = "FROM \"public\".moh_health_facilities";
$tdatamoh_health_facilities[".sqlWhereExpr"] = "";
$tdatamoh_health_facilities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamoh_health_facilities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamoh_health_facilities[".arrGroupsPerPage"] = $arrGPP;

$tdatamoh_health_facilities[".highlightSearchResults"] = true;

$tableKeysmoh_health_facilities = array();
$tableKeysmoh_health_facilities[] = "facility_id";
$tdatamoh_health_facilities[".Keys"] = $tableKeysmoh_health_facilities;


$tdatamoh_health_facilities[".hideMobileList"] = array();




//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.moh_health_facilities";
	$fdata["Label"] = GetFieldLabel("public_moh_health_facilities","facility_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "facility_id";

		$fdata["sourceSingle"] = "facility_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_id";

	
	
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


	$tdatamoh_health_facilities["facility_id"] = $fdata;
		$tdatamoh_health_facilities[".searchableFields"][] = "facility_id";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.moh_health_facilities";
	$fdata["Label"] = GetFieldLabel("public_moh_health_facilities","facility_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "facility_name";

		$fdata["sourceSingle"] = "facility_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_name";

	
	
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


	$tdatamoh_health_facilities["facility_name"] = $fdata;
		$tdatamoh_health_facilities[".searchableFields"][] = "facility_name";
//	facility_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "facility_type_id";
	$fdata["GoodName"] = "facility_type_id";
	$fdata["ownerTable"] = "public.moh_health_facilities";
	$fdata["Label"] = GetFieldLabel("public_moh_health_facilities","facility_type_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.moh_facility_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facility_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "facility_type_name";

	

	
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


	$tdatamoh_health_facilities["facility_type_id"] = $fdata;
		$tdatamoh_health_facilities[".searchableFields"][] = "facility_type_id";


$tables_data["public.moh_health_facilities"]=&$tdatamoh_health_facilities;
$field_labels["public_moh_health_facilities"] = &$fieldLabelsmoh_health_facilities;
$fieldToolTips["public_moh_health_facilities"] = &$fieldToolTipsmoh_health_facilities;
$placeHolders["public_moh_health_facilities"] = &$placeHoldersmoh_health_facilities;
$page_titles["public_moh_health_facilities"] = &$pageTitlesmoh_health_facilities;


changeTextControlsToDate( "public.moh_health_facilities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.moh_health_facilities"] = array();
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


		
	$detailsTablesData["public.moh_health_facilities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.moh_health_facilities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.moh_health_facilities"][$dIndex]["masterKeys"][]="facility_id";

				$detailsTablesData["public.moh_health_facilities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.moh_health_facilities"][$dIndex]["detailKeys"][]="facility_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.moh_health_facilities"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.moh_facility_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.moh_facility_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "moh_facility_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.moh_health_facilities"][0] = $masterParams;
				$masterTablesData["public.moh_health_facilities"][0]["masterKeys"] = array();
	$masterTablesData["public.moh_health_facilities"][0]["masterKeys"][]="facility_type_id";
				$masterTablesData["public.moh_health_facilities"][0]["detailKeys"] = array();
	$masterTablesData["public.moh_health_facilities"][0]["detailKeys"][]="facility_type_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_moh_health_facilities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "facility_id,  	facility_name,  	facility_type_id";
$proto0["m_strFrom"] = "FROM \"public\".moh_health_facilities";
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
	"m_strName" => "facility_id",
	"m_strTable" => "public.moh_health_facilities",
	"m_srcTableName" => "public.moh_health_facilities"
));

$proto6["m_sql"] = "facility_id";
$proto6["m_srcTableName"] = "public.moh_health_facilities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "public.moh_health_facilities",
	"m_srcTableName" => "public.moh_health_facilities"
));

$proto8["m_sql"] = "facility_name";
$proto8["m_srcTableName"] = "public.moh_health_facilities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_type_id",
	"m_strTable" => "public.moh_health_facilities",
	"m_srcTableName" => "public.moh_health_facilities"
));

$proto10["m_sql"] = "facility_type_id";
$proto10["m_srcTableName"] = "public.moh_health_facilities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.moh_health_facilities";
$proto13["m_srcTableName"] = "public.moh_health_facilities";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "facility_id";
$proto13["m_columns"][] = "facility_name";
$proto13["m_columns"][] = "facility_type_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".moh_health_facilities";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.moh_health_facilities";
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
$proto0["m_srcTableName"]="public.moh_health_facilities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_moh_health_facilities = createSqlQuery_moh_health_facilities();


	
																												;

			

$tdatamoh_health_facilities[".sqlquery"] = $queryData_moh_health_facilities;



$tdatamoh_health_facilities[".hasEvents"] = false;

?>