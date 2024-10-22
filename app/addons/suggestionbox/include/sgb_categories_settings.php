<?php
$tdatasgb_categories = array();
$tdatasgb_categories[".searchableFields"] = array();
$tdatasgb_categories[".ShortName"] = "sgb_categories";
$tdatasgb_categories[".OwnerID"] = "";
$tdatasgb_categories[".OriginalTable"] = "sgb_categories";


$tdatasgb_categories[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_categories[".originalPagesByType"] = $tdatasgb_categories[".pagesByType"];
$tdatasgb_categories[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_categories[".originalPages"] = $tdatasgb_categories[".pages"];
$tdatasgb_categories[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_categories[".originalDefaultPages"] = $tdatasgb_categories[".defaultPages"];

//	field labels
$fieldLabelssgb_categories = array();
$fieldToolTipssgb_categories = array();
$pageTitlessgb_categories = array();
$placeHolderssgb_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_categories["English"] = array();
	$fieldToolTipssgb_categories["English"] = array();
	$placeHolderssgb_categories["English"] = array();
	$pageTitlessgb_categories["English"] = array();
	$fieldLabelssgb_categories["English"]["id"] = "Id";
	$fieldToolTipssgb_categories["English"]["id"] = "";
	$placeHolderssgb_categories["English"]["id"] = "";
	$fieldLabelssgb_categories["English"]["name"] = "Name";
	$fieldToolTipssgb_categories["English"]["name"] = "";
	$placeHolderssgb_categories["English"]["name"] = "";
	$fieldLabelssgb_categories["English"]["url"] = "Url";
	$fieldToolTipssgb_categories["English"]["url"] = "";
	$placeHolderssgb_categories["English"]["url"] = "";
	$fieldLabelssgb_categories["English"]["category_color"] = "Category Color";
	$fieldToolTipssgb_categories["English"]["category_color"] = "";
	$placeHolderssgb_categories["English"]["category_color"] = "";
	$fieldLabelssgb_categories["English"]["viewlive"] = "Viewlive";
	$fieldToolTipssgb_categories["English"]["viewlive"] = "";
	$placeHolderssgb_categories["English"]["viewlive"] = "";
	if (count($fieldToolTipssgb_categories["English"]))
		$tdatasgb_categories[".isUseToolTips"] = true;
}


	$tdatasgb_categories[".NCSearch"] = true;



$tdatasgb_categories[".shortTableName"] = "sgb_categories";
$tdatasgb_categories[".nSecOptions"] = 0;

$tdatasgb_categories[".mainTableOwnerID"] = "";
$tdatasgb_categories[".entityType"] = 0;
$tdatasgb_categories[".connId"] = "project_at_localhost";


$tdatasgb_categories[".strOriginalTableName"] = "sgb_categories";

	



$tdatasgb_categories[".showAddInPopup"] = false;

$tdatasgb_categories[".showEditInPopup"] = false;

$tdatasgb_categories[".showViewInPopup"] = false;

$tdatasgb_categories[".listAjax"] = false;
//	temporary
//$tdatasgb_categories[".listAjax"] = false;

	$tdatasgb_categories[".audit"] = false;

	$tdatasgb_categories[".locking"] = false;


$pages = $tdatasgb_categories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_categories[".edit"] = true;
	$tdatasgb_categories[".afterEditAction"] = 1;
	$tdatasgb_categories[".closePopupAfterEdit"] = 1;
	$tdatasgb_categories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_categories[".add"] = true;
$tdatasgb_categories[".afterAddAction"] = 1;
$tdatasgb_categories[".closePopupAfterAdd"] = 1;
$tdatasgb_categories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_categories[".list"] = true;
}



$tdatasgb_categories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_categories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_categories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_categories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_categories[".printFriendly"] = true;
}



$tdatasgb_categories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_categories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_categories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_categories[".isUseAjaxSuggest"] = true;



									

$tdatasgb_categories[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_categories[".buttonsAdded"] = false;

$tdatasgb_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasgb_categories[".isUseTimeForSearch"] = false;


$tdatasgb_categories[".badgeColor"] = "4682B4";


$tdatasgb_categories[".allSearchFields"] = array();
$tdatasgb_categories[".filterFields"] = array();
$tdatasgb_categories[".requiredSearchFields"] = array();

$tdatasgb_categories[".googleLikeFields"] = array();
$tdatasgb_categories[".googleLikeFields"][] = "id";
$tdatasgb_categories[".googleLikeFields"][] = "name";
$tdatasgb_categories[".googleLikeFields"][] = "url";
$tdatasgb_categories[".googleLikeFields"][] = "category_color";
$tdatasgb_categories[".googleLikeFields"][] = "viewlive";



$tdatasgb_categories[".tableType"] = "list";

$tdatasgb_categories[".printerPageOrientation"] = 0;
$tdatasgb_categories[".nPrinterPageScale"] = 100;

$tdatasgb_categories[".nPrinterSplitRecords"] = 40;

$tdatasgb_categories[".geocodingEnabled"] = false;










$tdatasgb_categories[".pageSize"] = 20;

$tdatasgb_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_categories[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_categories[".orderindexes"] = array();


$tdatasgb_categories[".sqlHead"] = "SELECT id,  name,  url,  category_color,  id AS viewlive";
$tdatasgb_categories[".sqlFrom"] = "FROM sgb_categories";
$tdatasgb_categories[".sqlWhereExpr"] = "";
$tdatasgb_categories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_categories[".highlightSearchResults"] = true;

$tableKeyssgb_categories = array();
$tableKeyssgb_categories[] = "id";
$tdatasgb_categories[".Keys"] = $tableKeyssgb_categories;


$tdatasgb_categories[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_categories";
	$fdata["Label"] = GetFieldLabel("sgb_categories","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatasgb_categories["id"] = $fdata;
		$tdatasgb_categories[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_categories";
	$fdata["Label"] = GetFieldLabel("sgb_categories","name");
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


	$tdatasgb_categories["name"] = $fdata;
		$tdatasgb_categories[".searchableFields"][] = "name";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "sgb_categories";
	$fdata["Label"] = GetFieldLabel("sgb_categories","url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "url";

		$fdata["sourceSingle"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
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


	$tdatasgb_categories["url"] = $fdata;
		$tdatasgb_categories[".searchableFields"][] = "url";
//	category_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_color";
	$fdata["GoodName"] = "category_color";
	$fdata["ownerTable"] = "sgb_categories";
	$fdata["Label"] = GetFieldLabel("sgb_categories","category_color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "category_color";

		$fdata["sourceSingle"] = "category_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_color";

	
	
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


	$tdatasgb_categories["category_color"] = $fdata;
		$tdatasgb_categories[".searchableFields"][] = "category_color";
//	viewlive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "viewlive";
	$fdata["GoodName"] = "viewlive";
	$fdata["ownerTable"] = "sgb_categories";
	$fdata["Label"] = GetFieldLabel("sgb_categories","viewlive");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatasgb_categories["viewlive"] = $fdata;
		$tdatasgb_categories[".searchableFields"][] = "viewlive";


$tables_data["sgb_categories"]=&$tdatasgb_categories;
$field_labels["sgb_categories"] = &$fieldLabelssgb_categories;
$fieldToolTips["sgb_categories"] = &$fieldToolTipssgb_categories;
$placeHolders["sgb_categories"] = &$placeHolderssgb_categories;
$page_titles["sgb_categories"] = &$pageTitlessgb_categories;


changeTextControlsToDate( "sgb_categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_categories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  url,  category_color,  id AS viewlive";
$proto0["m_strFrom"] = "FROM sgb_categories";
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
	"m_strName" => "id",
	"m_strTable" => "sgb_categories",
	"m_srcTableName" => "sgb_categories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_categories",
	"m_srcTableName" => "sgb_categories"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "sgb_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "sgb_categories",
	"m_srcTableName" => "sgb_categories"
));

$proto10["m_sql"] = "url";
$proto10["m_srcTableName"] = "sgb_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category_color",
	"m_strTable" => "sgb_categories",
	"m_srcTableName" => "sgb_categories"
));

$proto12["m_sql"] = "category_color";
$proto12["m_srcTableName"] = "sgb_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_categories",
	"m_srcTableName" => "sgb_categories"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "sgb_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "viewlive";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sgb_categories";
$proto17["m_srcTableName"] = "sgb_categories";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "url";
$proto17["m_columns"][] = "category_color";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sgb_categories";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sgb_categories";
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
$proto0["m_srcTableName"]="sgb_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_categories = createSqlQuery_sgb_categories();


	
		;

					

$tdatasgb_categories[".sqlquery"] = $queryData_sgb_categories;



include_once(getabspath("include/sgb_categories_events.php"));
$tdatasgb_categories[".hasEvents"] = true;

?>