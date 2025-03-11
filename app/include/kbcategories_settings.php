<?php
$tdatakbcategories = array();
$tdatakbcategories[".searchableFields"] = array();
$tdatakbcategories[".ShortName"] = "kbcategories";
$tdatakbcategories[".OwnerID"] = "";
$tdatakbcategories[".OriginalTable"] = "public.kbcategories";


$tdatakbcategories[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatakbcategories[".originalPagesByType"] = $tdatakbcategories[".pagesByType"];
$tdatakbcategories[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatakbcategories[".originalPages"] = $tdatakbcategories[".pages"];
$tdatakbcategories[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatakbcategories[".originalDefaultPages"] = $tdatakbcategories[".defaultPages"];

//	field labels
$fieldLabelskbcategories = array();
$fieldToolTipskbcategories = array();
$pageTitleskbcategories = array();
$placeHolderskbcategories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskbcategories["English"] = array();
	$fieldToolTipskbcategories["English"] = array();
	$placeHolderskbcategories["English"] = array();
	$pageTitleskbcategories["English"] = array();
	$fieldLabelskbcategories["English"]["Category"] = "Category";
	$fieldToolTipskbcategories["English"]["Category"] = "";
	$placeHolderskbcategories["English"]["Category"] = "";
	$fieldLabelskbcategories["English"]["CategoryID"] = "Category ID";
	$fieldToolTipskbcategories["English"]["CategoryID"] = "";
	$placeHolderskbcategories["English"]["CategoryID"] = "";
	$fieldLabelskbcategories["English"]["Description"] = "Description";
	$fieldToolTipskbcategories["English"]["Description"] = "";
	$placeHolderskbcategories["English"]["Description"] = "";
	$fieldLabelskbcategories["English"]["faicon"] = "Faicon";
	$fieldToolTipskbcategories["English"]["faicon"] = "";
	$placeHolderskbcategories["English"]["faicon"] = "";
	if (count($fieldToolTipskbcategories["English"]))
		$tdatakbcategories[".isUseToolTips"] = true;
}


	$tdatakbcategories[".NCSearch"] = true;



$tdatakbcategories[".shortTableName"] = "kbcategories";
$tdatakbcategories[".nSecOptions"] = 0;

$tdatakbcategories[".mainTableOwnerID"] = "";
$tdatakbcategories[".entityType"] = 1;
$tdatakbcategories[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatakbcategories[".strOriginalTableName"] = "public.kbcategories";

	



$tdatakbcategories[".showAddInPopup"] = false;

$tdatakbcategories[".showEditInPopup"] = false;

$tdatakbcategories[".showViewInPopup"] = false;

$tdatakbcategories[".listAjax"] = false;
//	temporary
//$tdatakbcategories[".listAjax"] = false;

	$tdatakbcategories[".audit"] = false;

	$tdatakbcategories[".locking"] = false;


$pages = $tdatakbcategories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakbcategories[".edit"] = true;
	$tdatakbcategories[".afterEditAction"] = 1;
	$tdatakbcategories[".closePopupAfterEdit"] = 1;
	$tdatakbcategories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakbcategories[".add"] = true;
$tdatakbcategories[".afterAddAction"] = 1;
$tdatakbcategories[".closePopupAfterAdd"] = 1;
$tdatakbcategories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakbcategories[".list"] = true;
}



$tdatakbcategories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakbcategories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakbcategories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakbcategories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakbcategories[".printFriendly"] = true;
}



$tdatakbcategories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakbcategories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakbcategories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakbcategories[".isUseAjaxSuggest"] = true;



			

$tdatakbcategories[".ajaxCodeSnippetAdded"] = false;

$tdatakbcategories[".buttonsAdded"] = false;

$tdatakbcategories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakbcategories[".isUseTimeForSearch"] = false;


$tdatakbcategories[".badgeColor"] = "008b8b";


$tdatakbcategories[".allSearchFields"] = array();
$tdatakbcategories[".filterFields"] = array();
$tdatakbcategories[".requiredSearchFields"] = array();

$tdatakbcategories[".googleLikeFields"] = array();
$tdatakbcategories[".googleLikeFields"][] = "Category";
$tdatakbcategories[".googleLikeFields"][] = "CategoryID";
$tdatakbcategories[".googleLikeFields"][] = "Description";
$tdatakbcategories[".googleLikeFields"][] = "faicon";



$tdatakbcategories[".tableType"] = "list";

$tdatakbcategories[".printerPageOrientation"] = 0;
$tdatakbcategories[".nPrinterPageScale"] = 100;

$tdatakbcategories[".nPrinterSplitRecords"] = 40;

$tdatakbcategories[".geocodingEnabled"] = false;










$tdatakbcategories[".pageSize"] = 20;

$tdatakbcategories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakbcategories[".strOrderBy"] = $tstrOrderBy;

$tdatakbcategories[".orderindexes"] = array();


$tdatakbcategories[".sqlHead"] = "SELECT \"Category\", 	\"CategoryID\", 	\"Description\", 	\"faicon\"";
$tdatakbcategories[".sqlFrom"] = "FROM kbcategories";
$tdatakbcategories[".sqlWhereExpr"] = "";
$tdatakbcategories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakbcategories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakbcategories[".arrGroupsPerPage"] = $arrGPP;

$tdatakbcategories[".highlightSearchResults"] = true;

$tableKeyskbcategories = array();
$tableKeyskbcategories[] = "CategoryID";
$tdatakbcategories[".Keys"] = $tableKeyskbcategories;


$tdatakbcategories[".hideMobileList"] = array();




//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "public.kbcategories";
	$fdata["Label"] = GetFieldLabel("kbcategories","Category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Category\"";

	
	
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


	$tdatakbcategories["Category"] = $fdata;
		$tdatakbcategories[".searchableFields"][] = "Category";
//	CategoryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CategoryID";
	$fdata["GoodName"] = "CategoryID";
	$fdata["ownerTable"] = "public.kbcategories";
	$fdata["Label"] = GetFieldLabel("kbcategories","CategoryID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CategoryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"CategoryID\"";

	
	
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


	$tdatakbcategories["CategoryID"] = $fdata;
		$tdatakbcategories[".searchableFields"][] = "CategoryID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "public.kbcategories";
	$fdata["Label"] = GetFieldLabel("kbcategories","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

		$fdata["sourceSingle"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Description\"";

	
	
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


	$tdatakbcategories["Description"] = $fdata;
		$tdatakbcategories[".searchableFields"][] = "Description";
//	faicon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "faicon";
	$fdata["GoodName"] = "faicon";
	$fdata["ownerTable"] = "public.kbcategories";
	$fdata["Label"] = GetFieldLabel("kbcategories","faicon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "faicon";

		$fdata["sourceSingle"] = "faicon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"faicon\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "faicons";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "icon";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "icon";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatakbcategories["faicon"] = $fdata;
		$tdatakbcategories[".searchableFields"][] = "faicon";


$tables_data["kbcategories"]=&$tdatakbcategories;
$field_labels["kbcategories"] = &$fieldLabelskbcategories;
$fieldToolTips["kbcategories"] = &$fieldToolTipskbcategories;
$placeHolders["kbcategories"] = &$placeHolderskbcategories;
$page_titles["kbcategories"] = &$pageTitleskbcategories;


changeTextControlsToDate( "kbcategories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kbcategories"] = array();
//	kbarticles
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="kbarticles";
		$detailsParam["dOriginalTable"] = "public.kbarticles";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "kbarticles";
	$detailsParam["dCaptionTable"] = GetTableCaption("kbarticles");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["kbcategories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["kbcategories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["kbcategories"][$dIndex]["masterKeys"][]="Category";

				$detailsTablesData["kbcategories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["kbcategories"][$dIndex]["detailKeys"][]="Category";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kbcategories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kbcategories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"Category\", 	\"CategoryID\", 	\"Description\", 	\"faicon\"";
$proto0["m_strFrom"] = "FROM kbcategories";
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
	"m_strName" => "Category",
	"m_strTable" => "public.kbcategories",
	"m_srcTableName" => "kbcategories"
));

$proto6["m_sql"] = "\"Category\"";
$proto6["m_srcTableName"] = "kbcategories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryID",
	"m_strTable" => "public.kbcategories",
	"m_srcTableName" => "kbcategories"
));

$proto8["m_sql"] = "\"CategoryID\"";
$proto8["m_srcTableName"] = "kbcategories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "public.kbcategories",
	"m_srcTableName" => "kbcategories"
));

$proto10["m_sql"] = "\"Description\"";
$proto10["m_srcTableName"] = "kbcategories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "faicon",
	"m_strTable" => "public.kbcategories",
	"m_srcTableName" => "kbcategories"
));

$proto12["m_sql"] = "\"faicon\"";
$proto12["m_srcTableName"] = "kbcategories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.kbcategories";
$proto15["m_srcTableName"] = "kbcategories";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Category";
$proto15["m_columns"][] = "CategoryID";
$proto15["m_columns"][] = "Description";
$proto15["m_columns"][] = "faicon";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "kbcategories";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "kbcategories";
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
$proto0["m_srcTableName"]="kbcategories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kbcategories = createSqlQuery_kbcategories();


	
																												;

				

$tdatakbcategories[".sqlquery"] = $queryData_kbcategories;



$tdatakbcategories[".hasEvents"] = false;

?>