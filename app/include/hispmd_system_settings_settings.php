<?php
$tdatahispmd_system_settings = array();
$tdatahispmd_system_settings[".searchableFields"] = array();
$tdatahispmd_system_settings[".ShortName"] = "hispmd_system_settings";
$tdatahispmd_system_settings[".OwnerID"] = "";
$tdatahispmd_system_settings[".OriginalTable"] = "public.hispmd_settings";


$tdatahispmd_system_settings[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\",\"analytics_databases\",\"databases\",\"mb_databases\",\"suggestion_box_databases\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahispmd_system_settings[".originalPagesByType"] = $tdatahispmd_system_settings[".pagesByType"];
$tdatahispmd_system_settings[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\",\"analytics_databases\",\"databases\",\"mb_databases\",\"suggestion_box_databases\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahispmd_system_settings[".originalPages"] = $tdatahispmd_system_settings[".pages"];
$tdatahispmd_system_settings[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahispmd_system_settings[".originalDefaultPages"] = $tdatahispmd_system_settings[".defaultPages"];

//	field labels
$fieldLabelshispmd_system_settings = array();
$fieldToolTipshispmd_system_settings = array();
$pageTitleshispmd_system_settings = array();
$placeHoldershispmd_system_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_system_settings["English"] = array();
	$fieldToolTipshispmd_system_settings["English"] = array();
	$placeHoldershispmd_system_settings["English"] = array();
	$pageTitleshispmd_system_settings["English"] = array();
	$fieldLabelshispmd_system_settings["English"]["ID"] = "ID";
	$fieldToolTipshispmd_system_settings["English"]["ID"] = "";
	$placeHoldershispmd_system_settings["English"]["ID"] = "";
	$fieldLabelshispmd_system_settings["English"]["TYPE"] = "TYPE";
	$fieldToolTipshispmd_system_settings["English"]["TYPE"] = "";
	$placeHoldershispmd_system_settings["English"]["TYPE"] = "";
	$fieldLabelshispmd_system_settings["English"]["NAME"] = "NAME";
	$fieldToolTipshispmd_system_settings["English"]["NAME"] = "";
	$placeHoldershispmd_system_settings["English"]["NAME"] = "";
	$fieldLabelshispmd_system_settings["English"]["USERNAME"] = "USERNAME";
	$fieldToolTipshispmd_system_settings["English"]["USERNAME"] = "";
	$placeHoldershispmd_system_settings["English"]["USERNAME"] = "";
	$fieldLabelshispmd_system_settings["English"]["COOKIE"] = "COOKIE";
	$fieldToolTipshispmd_system_settings["English"]["COOKIE"] = "";
	$placeHoldershispmd_system_settings["English"]["COOKIE"] = "";
	$fieldLabelshispmd_system_settings["English"]["SEARCH"] = "SEARCH";
	$fieldToolTipshispmd_system_settings["English"]["SEARCH"] = "";
	$placeHoldershispmd_system_settings["English"]["SEARCH"] = "";
	$fieldLabelshispmd_system_settings["English"]["TABLENAME"] = "TABLENAME";
	$fieldToolTipshispmd_system_settings["English"]["TABLENAME"] = "";
	$placeHoldershispmd_system_settings["English"]["TABLENAME"] = "";
	if (count($fieldToolTipshispmd_system_settings["English"]))
		$tdatahispmd_system_settings[".isUseToolTips"] = true;
}


	$tdatahispmd_system_settings[".NCSearch"] = true;



$tdatahispmd_system_settings[".shortTableName"] = "hispmd_system_settings";
$tdatahispmd_system_settings[".nSecOptions"] = 0;

$tdatahispmd_system_settings[".mainTableOwnerID"] = "";
$tdatahispmd_system_settings[".entityType"] = 1;
$tdatahispmd_system_settings[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_system_settings[".strOriginalTableName"] = "public.hispmd_settings";

	



$tdatahispmd_system_settings[".showAddInPopup"] = false;

$tdatahispmd_system_settings[".showEditInPopup"] = false;

$tdatahispmd_system_settings[".showViewInPopup"] = false;

$tdatahispmd_system_settings[".listAjax"] = false;
//	temporary
//$tdatahispmd_system_settings[".listAjax"] = false;

	$tdatahispmd_system_settings[".audit"] = true;

	$tdatahispmd_system_settings[".locking"] = false;


$pages = $tdatahispmd_system_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_system_settings[".edit"] = true;
	$tdatahispmd_system_settings[".afterEditAction"] = 1;
	$tdatahispmd_system_settings[".closePopupAfterEdit"] = 1;
	$tdatahispmd_system_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_system_settings[".add"] = true;
$tdatahispmd_system_settings[".afterAddAction"] = 1;
$tdatahispmd_system_settings[".closePopupAfterAdd"] = 1;
$tdatahispmd_system_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_system_settings[".list"] = true;
}



$tdatahispmd_system_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_system_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_system_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_system_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_system_settings[".printFriendly"] = true;
}



$tdatahispmd_system_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_system_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_system_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_system_settings[".isUseAjaxSuggest"] = true;



			

$tdatahispmd_system_settings[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_system_settings[".buttonsAdded"] = false;

$tdatahispmd_system_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_system_settings[".isUseTimeForSearch"] = false;


$tdatahispmd_system_settings[".badgeColor"] = "5F9EA0";


$tdatahispmd_system_settings[".allSearchFields"] = array();
$tdatahispmd_system_settings[".filterFields"] = array();
$tdatahispmd_system_settings[".requiredSearchFields"] = array();

$tdatahispmd_system_settings[".googleLikeFields"] = array();
$tdatahispmd_system_settings[".googleLikeFields"][] = "ID";
$tdatahispmd_system_settings[".googleLikeFields"][] = "TYPE";
$tdatahispmd_system_settings[".googleLikeFields"][] = "NAME";
$tdatahispmd_system_settings[".googleLikeFields"][] = "USERNAME";
$tdatahispmd_system_settings[".googleLikeFields"][] = "COOKIE";
$tdatahispmd_system_settings[".googleLikeFields"][] = "SEARCH";
$tdatahispmd_system_settings[".googleLikeFields"][] = "TABLENAME";



$tdatahispmd_system_settings[".tableType"] = "list";

$tdatahispmd_system_settings[".printerPageOrientation"] = 0;
$tdatahispmd_system_settings[".nPrinterPageScale"] = 100;

$tdatahispmd_system_settings[".nPrinterSplitRecords"] = 40;

$tdatahispmd_system_settings[".geocodingEnabled"] = false;










$tdatahispmd_system_settings[".pageSize"] = 20;

$tdatahispmd_system_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_system_settings[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_system_settings[".orderindexes"] = array();


$tdatahispmd_system_settings[".sqlHead"] = "SELECT \"ID\",  	\"TYPE\",  	\"NAME\",  	\"USERNAME\",  	\"COOKIE\",  	\"SEARCH\",  	\"TABLENAME\"";
$tdatahispmd_system_settings[".sqlFrom"] = "FROM \"public\".hispmd_settings";
$tdatahispmd_system_settings[".sqlWhereExpr"] = "";
$tdatahispmd_system_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_system_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_system_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_system_settings[".highlightSearchResults"] = true;

$tableKeyshispmd_system_settings = array();
$tableKeyshispmd_system_settings[] = "ID";
$tdatahispmd_system_settings[".Keys"] = $tableKeyshispmd_system_settings;


$tdatahispmd_system_settings[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatahispmd_system_settings["ID"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "ID";
//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","TYPE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TYPE";

		$fdata["sourceSingle"] = "TYPE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"TYPE\"";

	
	
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


	$tdatahispmd_system_settings["TYPE"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "TYPE";
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","NAME");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "NAME";

		$fdata["sourceSingle"] = "NAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"NAME\"";

	
	
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


	$tdatahispmd_system_settings["NAME"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "NAME";
//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","USERNAME");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "USERNAME";

		$fdata["sourceSingle"] = "USERNAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"USERNAME\"";

	
	
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


	$tdatahispmd_system_settings["USERNAME"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "USERNAME";
//	COOKIE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COOKIE";
	$fdata["GoodName"] = "COOKIE";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","COOKIE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COOKIE";

		$fdata["sourceSingle"] = "COOKIE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"COOKIE\"";

	
	
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


	$tdatahispmd_system_settings["COOKIE"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "COOKIE";
//	SEARCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SEARCH";
	$fdata["GoodName"] = "SEARCH";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","SEARCH");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "SEARCH";

		$fdata["sourceSingle"] = "SEARCH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"SEARCH\"";

	
	
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


	$tdatahispmd_system_settings["SEARCH"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "SEARCH";
//	TABLENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TABLENAME";
	$fdata["GoodName"] = "TABLENAME";
	$fdata["ownerTable"] = "public.hispmd_settings";
	$fdata["Label"] = GetFieldLabel("hispmd_system_settings","TABLENAME");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TABLENAME";

		$fdata["sourceSingle"] = "TABLENAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"TABLENAME\"";

	
	
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


	$tdatahispmd_system_settings["TABLENAME"] = $fdata;
		$tdatahispmd_system_settings[".searchableFields"][] = "TABLENAME";


$tables_data["hispmd_system_settings"]=&$tdatahispmd_system_settings;
$field_labels["hispmd_system_settings"] = &$fieldLabelshispmd_system_settings;
$fieldToolTips["hispmd_system_settings"] = &$fieldToolTipshispmd_system_settings;
$placeHolders["hispmd_system_settings"] = &$placeHoldershispmd_system_settings;
$page_titles["hispmd_system_settings"] = &$pageTitleshispmd_system_settings;


changeTextControlsToDate( "hispmd_system_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hispmd_system_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hispmd_system_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_system_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	\"TYPE\",  	\"NAME\",  	\"USERNAME\",  	\"COOKIE\",  	\"SEARCH\",  	\"TABLENAME\"";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_settings";
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
	"m_strName" => "ID",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "hispmd_system_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TYPE",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto8["m_sql"] = "\"TYPE\"";
$proto8["m_srcTableName"] = "hispmd_system_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto10["m_sql"] = "\"NAME\"";
$proto10["m_srcTableName"] = "hispmd_system_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto12["m_sql"] = "\"USERNAME\"";
$proto12["m_srcTableName"] = "hispmd_system_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COOKIE",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto14["m_sql"] = "\"COOKIE\"";
$proto14["m_srcTableName"] = "hispmd_system_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto16["m_sql"] = "\"SEARCH\"";
$proto16["m_srcTableName"] = "hispmd_system_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLENAME",
	"m_strTable" => "public.hispmd_settings",
	"m_srcTableName" => "hispmd_system_settings"
));

$proto18["m_sql"] = "\"TABLENAME\"";
$proto18["m_srcTableName"] = "hispmd_system_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.hispmd_settings";
$proto21["m_srcTableName"] = "hispmd_system_settings";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "TYPE";
$proto21["m_columns"][] = "NAME";
$proto21["m_columns"][] = "USERNAME";
$proto21["m_columns"][] = "COOKIE";
$proto21["m_columns"][] = "SEARCH";
$proto21["m_columns"][] = "TABLENAME";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".hispmd_settings";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "hispmd_system_settings";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hispmd_system_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_system_settings = createSqlQuery_hispmd_system_settings();


	
																												;

							

$tdatahispmd_system_settings[".sqlquery"] = $queryData_hispmd_system_settings;



$tdatahispmd_system_settings[".hasEvents"] = false;

?>