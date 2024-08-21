<?php
$tdatatimetracker = array();
$tdatatimetracker[".searchableFields"] = array();
$tdatatimetracker[".ShortName"] = "timetracker";
$tdatatimetracker[".OwnerID"] = "";
$tdatatimetracker[".OriginalTable"] = "public.timetracker";


$tdatatimetracker[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatimetracker[".originalPagesByType"] = $tdatatimetracker[".pagesByType"];
$tdatatimetracker[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatimetracker[".originalPages"] = $tdatatimetracker[".pages"];
$tdatatimetracker[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatimetracker[".originalDefaultPages"] = $tdatatimetracker[".defaultPages"];

//	field labels
$fieldLabelstimetracker = array();
$fieldToolTipstimetracker = array();
$pageTitlestimetracker = array();
$placeHolderstimetracker = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstimetracker["English"] = array();
	$fieldToolTipstimetracker["English"] = array();
	$placeHolderstimetracker["English"] = array();
	$pageTitlestimetracker["English"] = array();
	$fieldLabelstimetracker["English"]["trackerid"] = "Trackerid";
	$fieldToolTipstimetracker["English"]["trackerid"] = "";
	$placeHolderstimetracker["English"]["trackerid"] = "";
	$fieldLabelstimetracker["English"]["pagename"] = "Pagename";
	$fieldToolTipstimetracker["English"]["pagename"] = "";
	$placeHolderstimetracker["English"]["pagename"] = "";
	$fieldLabelstimetracker["English"]["timeon"] = "Timeon";
	$fieldToolTipstimetracker["English"]["timeon"] = "";
	$placeHolderstimetracker["English"]["timeon"] = "";
	$fieldLabelstimetracker["English"]["timeoff"] = "Timeoff";
	$fieldToolTipstimetracker["English"]["timeoff"] = "";
	$placeHolderstimetracker["English"]["timeoff"] = "";
	$fieldLabelstimetracker["English"]["userid"] = "Userid";
	$fieldToolTipstimetracker["English"]["userid"] = "";
	$placeHolderstimetracker["English"]["userid"] = "";
	$fieldLabelstimetracker["English"]["recordid"] = "Recordid";
	$fieldToolTipstimetracker["English"]["recordid"] = "";
	$placeHolderstimetracker["English"]["recordid"] = "";
	if (count($fieldToolTipstimetracker["English"]))
		$tdatatimetracker[".isUseToolTips"] = true;
}


	$tdatatimetracker[".NCSearch"] = true;



$tdatatimetracker[".shortTableName"] = "timetracker";
$tdatatimetracker[".nSecOptions"] = 0;

$tdatatimetracker[".mainTableOwnerID"] = "";
$tdatatimetracker[".entityType"] = 0;
$tdatatimetracker[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatatimetracker[".strOriginalTableName"] = "public.timetracker";

	



$tdatatimetracker[".showAddInPopup"] = false;

$tdatatimetracker[".showEditInPopup"] = false;

$tdatatimetracker[".showViewInPopup"] = false;

$tdatatimetracker[".listAjax"] = false;
//	temporary
//$tdatatimetracker[".listAjax"] = false;

	$tdatatimetracker[".audit"] = true;

	$tdatatimetracker[".locking"] = false;


$pages = $tdatatimetracker[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatimetracker[".edit"] = true;
	$tdatatimetracker[".afterEditAction"] = 1;
	$tdatatimetracker[".closePopupAfterEdit"] = 1;
	$tdatatimetracker[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatimetracker[".add"] = true;
$tdatatimetracker[".afterAddAction"] = 1;
$tdatatimetracker[".closePopupAfterAdd"] = 1;
$tdatatimetracker[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatimetracker[".list"] = true;
}



$tdatatimetracker[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatimetracker[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatimetracker[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatimetracker[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatimetracker[".printFriendly"] = true;
}



$tdatatimetracker[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatimetracker[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatimetracker[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatimetracker[".isUseAjaxSuggest"] = true;





$tdatatimetracker[".ajaxCodeSnippetAdded"] = false;

$tdatatimetracker[".buttonsAdded"] = false;

$tdatatimetracker[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatimetracker[".isUseTimeForSearch"] = false;


$tdatatimetracker[".badgeColor"] = "EDCA00";


$tdatatimetracker[".allSearchFields"] = array();
$tdatatimetracker[".filterFields"] = array();
$tdatatimetracker[".requiredSearchFields"] = array();

$tdatatimetracker[".googleLikeFields"] = array();
$tdatatimetracker[".googleLikeFields"][] = "trackerid";
$tdatatimetracker[".googleLikeFields"][] = "pagename";
$tdatatimetracker[".googleLikeFields"][] = "timeon";
$tdatatimetracker[".googleLikeFields"][] = "timeoff";
$tdatatimetracker[".googleLikeFields"][] = "userid";
$tdatatimetracker[".googleLikeFields"][] = "recordid";



$tdatatimetracker[".tableType"] = "list";

$tdatatimetracker[".printerPageOrientation"] = 0;
$tdatatimetracker[".nPrinterPageScale"] = 100;

$tdatatimetracker[".nPrinterSplitRecords"] = 40;

$tdatatimetracker[".geocodingEnabled"] = false;










$tdatatimetracker[".pageSize"] = 20;

$tdatatimetracker[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatimetracker[".strOrderBy"] = $tstrOrderBy;

$tdatatimetracker[".orderindexes"] = array();


$tdatatimetracker[".sqlHead"] = "SELECT trackerid,  	pagename,  	timeon,  	timeoff,  	userid,  	recordid";
$tdatatimetracker[".sqlFrom"] = "FROM \"public\".timetracker";
$tdatatimetracker[".sqlWhereExpr"] = "";
$tdatatimetracker[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatimetracker[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatimetracker[".arrGroupsPerPage"] = $arrGPP;

$tdatatimetracker[".highlightSearchResults"] = true;

$tableKeystimetracker = array();
$tableKeystimetracker[] = "trackerid";
$tdatatimetracker[".Keys"] = $tableKeystimetracker;


$tdatatimetracker[".hideMobileList"] = array();




//	trackerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "trackerid";
	$fdata["GoodName"] = "trackerid";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","trackerid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "trackerid";

		$fdata["sourceSingle"] = "trackerid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackerid";

	
	
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


	$tdatatimetracker["trackerid"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "trackerid";
//	pagename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pagename";
	$fdata["GoodName"] = "pagename";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","pagename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pagename";

		$fdata["sourceSingle"] = "pagename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pagename";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatimetracker["pagename"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "pagename";
//	timeon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "timeon";
	$fdata["GoodName"] = "timeon";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","timeon");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "timeon";

		$fdata["sourceSingle"] = "timeon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeon";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatatimetracker["timeon"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "timeon";
//	timeoff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "timeoff";
	$fdata["GoodName"] = "timeoff";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","timeoff");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "timeoff";

		$fdata["sourceSingle"] = "timeoff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeoff";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatatimetracker["timeoff"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "timeoff";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatimetracker["userid"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "userid";
//	recordid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "recordid";
	$fdata["GoodName"] = "recordid";
	$fdata["ownerTable"] = "public.timetracker";
	$fdata["Label"] = GetFieldLabel("public_timetracker","recordid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "recordid";

		$fdata["sourceSingle"] = "recordid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recordid";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatimetracker["recordid"] = $fdata;
		$tdatatimetracker[".searchableFields"][] = "recordid";


$tables_data["public.timetracker"]=&$tdatatimetracker;
$field_labels["public_timetracker"] = &$fieldLabelstimetracker;
$fieldToolTips["public_timetracker"] = &$fieldToolTipstimetracker;
$placeHolders["public_timetracker"] = &$placeHolderstimetracker;
$page_titles["public_timetracker"] = &$pageTitlestimetracker;


changeTextControlsToDate( "public.timetracker" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.timetracker"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.timetracker"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_timetracker()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "trackerid,  	pagename,  	timeon,  	timeoff,  	userid,  	recordid";
$proto0["m_strFrom"] = "FROM \"public\".timetracker";
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
	"m_strName" => "trackerid",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto6["m_sql"] = "trackerid";
$proto6["m_srcTableName"] = "public.timetracker";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pagename",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto8["m_sql"] = "pagename";
$proto8["m_srcTableName"] = "public.timetracker";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "timeon",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto10["m_sql"] = "timeon";
$proto10["m_srcTableName"] = "public.timetracker";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "timeoff",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto12["m_sql"] = "timeoff";
$proto12["m_srcTableName"] = "public.timetracker";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto14["m_sql"] = "userid";
$proto14["m_srcTableName"] = "public.timetracker";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "recordid",
	"m_strTable" => "public.timetracker",
	"m_srcTableName" => "public.timetracker"
));

$proto16["m_sql"] = "recordid";
$proto16["m_srcTableName"] = "public.timetracker";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.timetracker";
$proto19["m_srcTableName"] = "public.timetracker";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "trackerid";
$proto19["m_columns"][] = "pagename";
$proto19["m_columns"][] = "timeon";
$proto19["m_columns"][] = "timeoff";
$proto19["m_columns"][] = "userid";
$proto19["m_columns"][] = "recordid";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".timetracker";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.timetracker";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.timetracker";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_timetracker = createSqlQuery_timetracker();


	
																												;

						

$tdatatimetracker[".sqlquery"] = $queryData_timetracker;



$tdatatimetracker[".hasEvents"] = false;

?>