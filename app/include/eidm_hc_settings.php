<?php
$tdataeidm_hc = array();
$tdataeidm_hc[".searchableFields"] = array();
$tdataeidm_hc[".ShortName"] = "eidm_hc";
$tdataeidm_hc[".OwnerID"] = "";
$tdataeidm_hc[".OriginalTable"] = "public.eidm_hc";


$tdataeidm_hc[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataeidm_hc[".originalPagesByType"] = $tdataeidm_hc[".pagesByType"];
$tdataeidm_hc[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataeidm_hc[".originalPages"] = $tdataeidm_hc[".pages"];
$tdataeidm_hc[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataeidm_hc[".originalDefaultPages"] = $tdataeidm_hc[".defaultPages"];

//	field labels
$fieldLabelseidm_hc = array();
$fieldToolTipseidm_hc = array();
$pageTitleseidm_hc = array();
$placeHolderseidm_hc = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseidm_hc["English"] = array();
	$fieldToolTipseidm_hc["English"] = array();
	$placeHolderseidm_hc["English"] = array();
	$pageTitleseidm_hc["English"] = array();
	$fieldLabelseidm_hc["English"]["indicator"] = "Indicator";
	$fieldToolTipseidm_hc["English"]["indicator"] = "";
	$placeHolderseidm_hc["English"]["indicator"] = "";
	$fieldLabelseidm_hc["English"]["organisation_unit"] = "Organisation Unit";
	$fieldToolTipseidm_hc["English"]["organisation_unit"] = "";
	$placeHolderseidm_hc["English"]["organisation_unit"] = "";
	$fieldLabelseidm_hc["English"]["period"] = "Period";
	$fieldToolTipseidm_hc["English"]["period"] = "";
	$placeHolderseidm_hc["English"]["period"] = "";
	$fieldLabelseidm_hc["English"]["value"] = "Value";
	$fieldToolTipseidm_hc["English"]["value"] = "";
	$placeHolderseidm_hc["English"]["value"] = "";
	if (count($fieldToolTipseidm_hc["English"]))
		$tdataeidm_hc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelseidm_hc["Amharic"] = array();
	$fieldToolTipseidm_hc["Amharic"] = array();
	$placeHolderseidm_hc["Amharic"] = array();
	$pageTitleseidm_hc["Amharic"] = array();
	$fieldLabelseidm_hc["Amharic"]["indicator"] = "Indicator";
	$fieldToolTipseidm_hc["Amharic"]["indicator"] = "";
	$placeHolderseidm_hc["Amharic"]["indicator"] = "";
	$fieldLabelseidm_hc["Amharic"]["organisation_unit"] = "Organisation Unit";
	$fieldToolTipseidm_hc["Amharic"]["organisation_unit"] = "";
	$placeHolderseidm_hc["Amharic"]["organisation_unit"] = "";
	$fieldLabelseidm_hc["Amharic"]["period"] = "Period";
	$fieldToolTipseidm_hc["Amharic"]["period"] = "";
	$placeHolderseidm_hc["Amharic"]["period"] = "";
	$fieldLabelseidm_hc["Amharic"]["value"] = "Value";
	$fieldToolTipseidm_hc["Amharic"]["value"] = "";
	$placeHolderseidm_hc["Amharic"]["value"] = "";
	if (count($fieldToolTipseidm_hc["Amharic"]))
		$tdataeidm_hc[".isUseToolTips"] = true;
}


	$tdataeidm_hc[".NCSearch"] = true;



$tdataeidm_hc[".shortTableName"] = "eidm_hc";
$tdataeidm_hc[".nSecOptions"] = 0;

$tdataeidm_hc[".mainTableOwnerID"] = "";
$tdataeidm_hc[".entityType"] = 0;
$tdataeidm_hc[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataeidm_hc[".strOriginalTableName"] = "public.eidm_hc";

	



$tdataeidm_hc[".showAddInPopup"] = false;

$tdataeidm_hc[".showEditInPopup"] = false;

$tdataeidm_hc[".showViewInPopup"] = false;

$tdataeidm_hc[".listAjax"] = false;
//	temporary
//$tdataeidm_hc[".listAjax"] = false;

	$tdataeidm_hc[".audit"] = false;

	$tdataeidm_hc[".locking"] = false;


$pages = $tdataeidm_hc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataeidm_hc[".edit"] = true;
	$tdataeidm_hc[".afterEditAction"] = 1;
	$tdataeidm_hc[".closePopupAfterEdit"] = 1;
	$tdataeidm_hc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataeidm_hc[".add"] = true;
$tdataeidm_hc[".afterAddAction"] = 1;
$tdataeidm_hc[".closePopupAfterAdd"] = 1;
$tdataeidm_hc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataeidm_hc[".list"] = true;
}



$tdataeidm_hc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataeidm_hc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataeidm_hc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataeidm_hc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataeidm_hc[".printFriendly"] = true;
}



$tdataeidm_hc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataeidm_hc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataeidm_hc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataeidm_hc[".isUseAjaxSuggest"] = true;



			

$tdataeidm_hc[".ajaxCodeSnippetAdded"] = false;

$tdataeidm_hc[".buttonsAdded"] = false;

$tdataeidm_hc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeidm_hc[".isUseTimeForSearch"] = false;


$tdataeidm_hc[".badgeColor"] = "3CB371";


$tdataeidm_hc[".allSearchFields"] = array();
$tdataeidm_hc[".filterFields"] = array();
$tdataeidm_hc[".requiredSearchFields"] = array();

$tdataeidm_hc[".googleLikeFields"] = array();
$tdataeidm_hc[".googleLikeFields"][] = "indicator";
$tdataeidm_hc[".googleLikeFields"][] = "organisation_unit";
$tdataeidm_hc[".googleLikeFields"][] = "period";
$tdataeidm_hc[".googleLikeFields"][] = "value";



$tdataeidm_hc[".tableType"] = "list";

$tdataeidm_hc[".printerPageOrientation"] = 0;
$tdataeidm_hc[".nPrinterPageScale"] = 100;

$tdataeidm_hc[".nPrinterSplitRecords"] = 40;

$tdataeidm_hc[".geocodingEnabled"] = false;




$tdataeidm_hc[".isDisplayLoading"] = true;






$tdataeidm_hc[".pageSize"] = 20;

$tdataeidm_hc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataeidm_hc[".strOrderBy"] = $tstrOrderBy;

$tdataeidm_hc[".orderindexes"] = array();


$tdataeidm_hc[".sqlHead"] = "SELECT \"indicator\",  	organisation_unit,  	period,  	\"value\"";
$tdataeidm_hc[".sqlFrom"] = "FROM \"public\".eidm_hc";
$tdataeidm_hc[".sqlWhereExpr"] = "";
$tdataeidm_hc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeidm_hc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeidm_hc[".arrGroupsPerPage"] = $arrGPP;

$tdataeidm_hc[".highlightSearchResults"] = true;

$tableKeyseidm_hc = array();
$tdataeidm_hc[".Keys"] = $tableKeyseidm_hc;


$tdataeidm_hc[".hideMobileList"] = array();




//	indicator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator";
	$fdata["GoodName"] = "indicator";
	$fdata["ownerTable"] = "public.eidm_hc";
	$fdata["Label"] = GetFieldLabel("public_eidm_hc","indicator");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator";

		$fdata["sourceSingle"] = "indicator";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"indicator\"";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataeidm_hc["indicator"] = $fdata;
		$tdataeidm_hc[".searchableFields"][] = "indicator";
//	organisation_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisation_unit";
	$fdata["GoodName"] = "organisation_unit";
	$fdata["ownerTable"] = "public.eidm_hc";
	$fdata["Label"] = GetFieldLabel("public_eidm_hc","organisation_unit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_unit";

		$fdata["sourceSingle"] = "organisation_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_unit";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataeidm_hc["organisation_unit"] = $fdata;
		$tdataeidm_hc[".searchableFields"][] = "organisation_unit";
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "public.eidm_hc";
	$fdata["Label"] = GetFieldLabel("public_eidm_hc","period");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "period";

		$fdata["sourceSingle"] = "period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "value";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataeidm_hc["period"] = $fdata;
		$tdataeidm_hc[".searchableFields"][] = "period";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "public.eidm_hc";
	$fdata["Label"] = GetFieldLabel("public_eidm_hc","value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"value\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataeidm_hc["value"] = $fdata;
		$tdataeidm_hc[".searchableFields"][] = "value";


$tables_data["public.eidm_hc"]=&$tdataeidm_hc;
$field_labels["public_eidm_hc"] = &$fieldLabelseidm_hc;
$fieldToolTips["public_eidm_hc"] = &$fieldToolTipseidm_hc;
$placeHolders["public_eidm_hc"] = &$placeHolderseidm_hc;
$page_titles["public_eidm_hc"] = &$pageTitleseidm_hc;


changeTextControlsToDate( "public.eidm_hc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.eidm_hc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.eidm_hc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_eidm_hc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"indicator\",  	organisation_unit,  	period,  	\"value\"";
$proto0["m_strFrom"] = "FROM \"public\".eidm_hc";
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
	"m_strName" => "indicator",
	"m_strTable" => "public.eidm_hc",
	"m_srcTableName" => "public.eidm_hc"
));

$proto6["m_sql"] = "\"indicator\"";
$proto6["m_srcTableName"] = "public.eidm_hc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_unit",
	"m_strTable" => "public.eidm_hc",
	"m_srcTableName" => "public.eidm_hc"
));

$proto8["m_sql"] = "organisation_unit";
$proto8["m_srcTableName"] = "public.eidm_hc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "period",
	"m_strTable" => "public.eidm_hc",
	"m_srcTableName" => "public.eidm_hc"
));

$proto10["m_sql"] = "period";
$proto10["m_srcTableName"] = "public.eidm_hc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "public.eidm_hc",
	"m_srcTableName" => "public.eidm_hc"
));

$proto12["m_sql"] = "\"value\"";
$proto12["m_srcTableName"] = "public.eidm_hc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.eidm_hc";
$proto15["m_srcTableName"] = "public.eidm_hc";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "indicator";
$proto15["m_columns"][] = "organisation_unit";
$proto15["m_columns"][] = "period";
$proto15["m_columns"][] = "value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".eidm_hc";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.eidm_hc";
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
$proto0["m_srcTableName"]="public.eidm_hc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_eidm_hc = createSqlQuery_eidm_hc();


	
																												;

				

$tdataeidm_hc[".sqlquery"] = $queryData_eidm_hc;



$tdataeidm_hc[".hasEvents"] = false;

?>