<?php
$tdatahispmd_uggroups = array();
$tdatahispmd_uggroups[".searchableFields"] = array();
$tdatahispmd_uggroups[".ShortName"] = "hispmd_uggroups";
$tdatahispmd_uggroups[".OwnerID"] = "";
$tdatahispmd_uggroups[".OriginalTable"] = "public.hispmd_uggroups";


$tdatahispmd_uggroups[".pagesByType"] = my_json_decode( "{}" );
$tdatahispmd_uggroups[".originalPagesByType"] = $tdatahispmd_uggroups[".pagesByType"];
$tdatahispmd_uggroups[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatahispmd_uggroups[".originalPages"] = $tdatahispmd_uggroups[".pages"];
$tdatahispmd_uggroups[".defaultPages"] = my_json_decode( "{}" );
$tdatahispmd_uggroups[".originalDefaultPages"] = $tdatahispmd_uggroups[".defaultPages"];

//	field labels
$fieldLabelshispmd_uggroups = array();
$fieldToolTipshispmd_uggroups = array();
$pageTitleshispmd_uggroups = array();
$placeHoldershispmd_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_uggroups["English"] = array();
	$fieldToolTipshispmd_uggroups["English"] = array();
	$placeHoldershispmd_uggroups["English"] = array();
	$pageTitleshispmd_uggroups["English"] = array();
	$fieldLabelshispmd_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipshispmd_uggroups["English"]["GroupID"] = "";
	$placeHoldershispmd_uggroups["English"]["GroupID"] = "";
	$fieldLabelshispmd_uggroups["English"]["Label"] = "Label";
	$fieldToolTipshispmd_uggroups["English"]["Label"] = "";
	$placeHoldershispmd_uggroups["English"]["Label"] = "";
	$fieldLabelshispmd_uggroups["English"]["Provider"] = "Provider";
	$fieldToolTipshispmd_uggroups["English"]["Provider"] = "";
	$placeHoldershispmd_uggroups["English"]["Provider"] = "";
	$fieldLabelshispmd_uggroups["English"]["Comment"] = "Comment";
	$fieldToolTipshispmd_uggroups["English"]["Comment"] = "";
	$placeHoldershispmd_uggroups["English"]["Comment"] = "";
	if (count($fieldToolTipshispmd_uggroups["English"]))
		$tdatahispmd_uggroups[".isUseToolTips"] = true;
}


	$tdatahispmd_uggroups[".NCSearch"] = true;



$tdatahispmd_uggroups[".shortTableName"] = "hispmd_uggroups";
$tdatahispmd_uggroups[".nSecOptions"] = 0;

$tdatahispmd_uggroups[".mainTableOwnerID"] = "";
$tdatahispmd_uggroups[".entityType"] = 0;
$tdatahispmd_uggroups[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_uggroups[".strOriginalTableName"] = "public.hispmd_uggroups";

	



$tdatahispmd_uggroups[".showAddInPopup"] = false;

$tdatahispmd_uggroups[".showEditInPopup"] = false;

$tdatahispmd_uggroups[".showViewInPopup"] = false;

$tdatahispmd_uggroups[".listAjax"] = false;
//	temporary
//$tdatahispmd_uggroups[".listAjax"] = false;

	$tdatahispmd_uggroups[".audit"] = false;

	$tdatahispmd_uggroups[".locking"] = false;


$pages = $tdatahispmd_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_uggroups[".edit"] = true;
	$tdatahispmd_uggroups[".afterEditAction"] = 1;
	$tdatahispmd_uggroups[".closePopupAfterEdit"] = 1;
	$tdatahispmd_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_uggroups[".add"] = true;
$tdatahispmd_uggroups[".afterAddAction"] = 1;
$tdatahispmd_uggroups[".closePopupAfterAdd"] = 1;
$tdatahispmd_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_uggroups[".list"] = true;
}



$tdatahispmd_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_uggroups[".printFriendly"] = true;
}



$tdatahispmd_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_uggroups[".isUseAjaxSuggest"] = true;



			

$tdatahispmd_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_uggroups[".buttonsAdded"] = false;

$tdatahispmd_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_uggroups[".isUseTimeForSearch"] = false;


$tdatahispmd_uggroups[".badgeColor"] = "CFAE83";


$tdatahispmd_uggroups[".allSearchFields"] = array();
$tdatahispmd_uggroups[".filterFields"] = array();
$tdatahispmd_uggroups[".requiredSearchFields"] = array();

$tdatahispmd_uggroups[".googleLikeFields"] = array();
$tdatahispmd_uggroups[".googleLikeFields"][] = "GroupID";
$tdatahispmd_uggroups[".googleLikeFields"][] = "Label";
$tdatahispmd_uggroups[".googleLikeFields"][] = "Provider";
$tdatahispmd_uggroups[".googleLikeFields"][] = "Comment";



$tdatahispmd_uggroups[".tableType"] = "list";

$tdatahispmd_uggroups[".printerPageOrientation"] = 0;
$tdatahispmd_uggroups[".nPrinterPageScale"] = 100;

$tdatahispmd_uggroups[".nPrinterSplitRecords"] = 40;

$tdatahispmd_uggroups[".geocodingEnabled"] = false;










$tdatahispmd_uggroups[".pageSize"] = 20;

$tdatahispmd_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_uggroups[".orderindexes"] = array();


$tdatahispmd_uggroups[".sqlHead"] = "SELECT \"GroupID\",  	\"Label\",  	\"Provider\",  	\"Comment\"";
$tdatahispmd_uggroups[".sqlFrom"] = "FROM \"public\".hispmd_uggroups";
$tdatahispmd_uggroups[".sqlWhereExpr"] = "";
$tdatahispmd_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_uggroups[".highlightSearchResults"] = true;

$tableKeyshispmd_uggroups = array();
$tableKeyshispmd_uggroups[] = "GroupID";
$tdatahispmd_uggroups[".Keys"] = $tableKeyshispmd_uggroups;


$tdatahispmd_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "public.hispmd_uggroups";
	$fdata["Label"] = GetFieldLabel("public_hispmd_uggroups","GroupID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "GroupID";

		$fdata["sourceSingle"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"GroupID\"";

	
	
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


	$tdatahispmd_uggroups["GroupID"] = $fdata;
		$tdatahispmd_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "public.hispmd_uggroups";
	$fdata["Label"] = GetFieldLabel("public_hispmd_uggroups","Label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Label";

		$fdata["sourceSingle"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Label\"";

	
	
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


	$tdatahispmd_uggroups["Label"] = $fdata;
		$tdatahispmd_uggroups[".searchableFields"][] = "Label";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "public.hispmd_uggroups";
	$fdata["Label"] = GetFieldLabel("public_hispmd_uggroups","Provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Provider";

		$fdata["sourceSingle"] = "Provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Provider\"";

	
	
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


	$tdatahispmd_uggroups["Provider"] = $fdata;
		$tdatahispmd_uggroups[".searchableFields"][] = "Provider";
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "public.hispmd_uggroups";
	$fdata["Label"] = GetFieldLabel("public_hispmd_uggroups","Comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Comment";

		$fdata["sourceSingle"] = "Comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Comment\"";

	
	
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


	$tdatahispmd_uggroups["Comment"] = $fdata;
		$tdatahispmd_uggroups[".searchableFields"][] = "Comment";


$tables_data["public.hispmd_uggroups"]=&$tdatahispmd_uggroups;
$field_labels["public_hispmd_uggroups"] = &$fieldLabelshispmd_uggroups;
$fieldToolTips["public_hispmd_uggroups"] = &$fieldToolTipshispmd_uggroups;
$placeHolders["public_hispmd_uggroups"] = &$placeHoldershispmd_uggroups;
$page_titles["public_hispmd_uggroups"] = &$pageTitleshispmd_uggroups;


changeTextControlsToDate( "public.hispmd_uggroups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispmd_uggroups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispmd_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"GroupID\",  	\"Label\",  	\"Provider\",  	\"Comment\"";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "public.hispmd_uggroups",
	"m_srcTableName" => "public.hispmd_uggroups"
));

$proto6["m_sql"] = "\"GroupID\"";
$proto6["m_srcTableName"] = "public.hispmd_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "public.hispmd_uggroups",
	"m_srcTableName" => "public.hispmd_uggroups"
));

$proto8["m_sql"] = "\"Label\"";
$proto8["m_srcTableName"] = "public.hispmd_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "public.hispmd_uggroups",
	"m_srcTableName" => "public.hispmd_uggroups"
));

$proto10["m_sql"] = "\"Provider\"";
$proto10["m_srcTableName"] = "public.hispmd_uggroups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "public.hispmd_uggroups",
	"m_srcTableName" => "public.hispmd_uggroups"
));

$proto12["m_sql"] = "\"Comment\"";
$proto12["m_srcTableName"] = "public.hispmd_uggroups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.hispmd_uggroups";
$proto15["m_srcTableName"] = "public.hispmd_uggroups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "Label";
$proto15["m_columns"][] = "Provider";
$proto15["m_columns"][] = "Comment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".hispmd_uggroups";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.hispmd_uggroups";
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
$proto0["m_srcTableName"]="public.hispmd_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_uggroups = createSqlQuery_hispmd_uggroups();


	
																												;

				

$tdatahispmd_uggroups[".sqlquery"] = $queryData_hispmd_uggroups;



$tdatahispmd_uggroups[".hasEvents"] = false;

?>