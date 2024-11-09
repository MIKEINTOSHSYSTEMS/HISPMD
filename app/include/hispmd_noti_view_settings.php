<?php
$tdatahispmd_noti_view = array();
$tdatahispmd_noti_view[".searchableFields"] = array();
$tdatahispmd_noti_view[".ShortName"] = "hispmd_noti_view";
$tdatahispmd_noti_view[".OwnerID"] = "";
$tdatahispmd_noti_view[".OriginalTable"] = "public.hispmd_noti";


$tdatahispmd_noti_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahispmd_noti_view[".originalPagesByType"] = $tdatahispmd_noti_view[".pagesByType"];
$tdatahispmd_noti_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahispmd_noti_view[".originalPages"] = $tdatahispmd_noti_view[".pages"];
$tdatahispmd_noti_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahispmd_noti_view[".originalDefaultPages"] = $tdatahispmd_noti_view[".defaultPages"];

//	field labels
$fieldLabelshispmd_noti_view = array();
$fieldToolTipshispmd_noti_view = array();
$pageTitleshispmd_noti_view = array();
$placeHoldershispmd_noti_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_noti_view["English"] = array();
	$fieldToolTipshispmd_noti_view["English"] = array();
	$placeHoldershispmd_noti_view["English"] = array();
	$pageTitleshispmd_noti_view["English"] = array();
	$fieldLabelshispmd_noti_view["English"]["id"] = "Id";
	$fieldToolTipshispmd_noti_view["English"]["id"] = "";
	$placeHoldershispmd_noti_view["English"]["id"] = "";
	$fieldLabelshispmd_noti_view["English"]["message"] = "Details";
	$fieldToolTipshispmd_noti_view["English"]["message"] = "";
	$placeHoldershispmd_noti_view["English"]["message"] = "";
	$fieldLabelshispmd_noti_view["English"]["user"] = "User";
	$fieldToolTipshispmd_noti_view["English"]["user"] = "";
	$placeHoldershispmd_noti_view["English"]["user"] = "";
	$fieldLabelshispmd_noti_view["English"]["provider"] = "Provider";
	$fieldToolTipshispmd_noti_view["English"]["provider"] = "";
	$placeHoldershispmd_noti_view["English"]["provider"] = "";
	$fieldLabelshispmd_noti_view["English"]["title"] = "Notification Subject";
	$fieldToolTipshispmd_noti_view["English"]["title"] = "";
	$placeHoldershispmd_noti_view["English"]["title"] = "";
	$fieldLabelshispmd_noti_view["English"]["url"] = "Url";
	$fieldToolTipshispmd_noti_view["English"]["url"] = "";
	$placeHoldershispmd_noti_view["English"]["url"] = "";
	$fieldLabelshispmd_noti_view["English"]["icon"] = "Icon";
	$fieldToolTipshispmd_noti_view["English"]["icon"] = "";
	$placeHoldershispmd_noti_view["English"]["icon"] = "";
	$fieldLabelshispmd_noti_view["English"]["created"] = "Date";
	$fieldToolTipshispmd_noti_view["English"]["created"] = "";
	$placeHoldershispmd_noti_view["English"]["created"] = "";
	$fieldLabelshispmd_noti_view["English"]["expire"] = "Expire";
	$fieldToolTipshispmd_noti_view["English"]["expire"] = "";
	$placeHoldershispmd_noti_view["English"]["expire"] = "";
	$fieldLabelshispmd_noti_view["English"]["type"] = "Type";
	$fieldToolTipshispmd_noti_view["English"]["type"] = "";
	$placeHoldershispmd_noti_view["English"]["type"] = "";
	$fieldLabelshispmd_noti_view["English"]["group"] = "Group";
	$fieldToolTipshispmd_noti_view["English"]["group"] = "";
	$placeHoldershispmd_noti_view["English"]["group"] = "";
	$pageTitleshispmd_noti_view["English"]["add"] = "HISPMD Notifications, Add new";
	$pageTitleshispmd_noti_view["English"]["edit"] = "HISPMD Notifications, Edit [{%id}]";
	$pageTitleshispmd_noti_view["English"]["view"] = "HISPMD Notifications [{%id}]";
	if (count($fieldToolTipshispmd_noti_view["English"]))
		$tdatahispmd_noti_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelshispmd_noti_view["Amharic"] = array();
	$fieldToolTipshispmd_noti_view["Amharic"] = array();
	$placeHoldershispmd_noti_view["Amharic"] = array();
	$pageTitleshispmd_noti_view["Amharic"] = array();
	$fieldLabelshispmd_noti_view["Amharic"]["id"] = "Id";
	$fieldToolTipshispmd_noti_view["Amharic"]["id"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["id"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["message"] = "Message";
	$fieldToolTipshispmd_noti_view["Amharic"]["message"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["message"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["user"] = "User";
	$fieldToolTipshispmd_noti_view["Amharic"]["user"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["user"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["provider"] = "Provider";
	$fieldToolTipshispmd_noti_view["Amharic"]["provider"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["provider"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["title"] = "Title";
	$fieldToolTipshispmd_noti_view["Amharic"]["title"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["title"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["url"] = "Url";
	$fieldToolTipshispmd_noti_view["Amharic"]["url"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["url"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["icon"] = "Icon";
	$fieldToolTipshispmd_noti_view["Amharic"]["icon"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["icon"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["created"] = "Created";
	$fieldToolTipshispmd_noti_view["Amharic"]["created"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["created"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["expire"] = "Expire";
	$fieldToolTipshispmd_noti_view["Amharic"]["expire"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["expire"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["type"] = "Type";
	$fieldToolTipshispmd_noti_view["Amharic"]["type"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["type"] = "";
	$fieldLabelshispmd_noti_view["Amharic"]["group"] = "Group";
	$fieldToolTipshispmd_noti_view["Amharic"]["group"] = "";
	$placeHoldershispmd_noti_view["Amharic"]["group"] = "";
	if (count($fieldToolTipshispmd_noti_view["Amharic"]))
		$tdatahispmd_noti_view[".isUseToolTips"] = true;
}


	$tdatahispmd_noti_view[".NCSearch"] = true;



$tdatahispmd_noti_view[".shortTableName"] = "hispmd_noti_view";
$tdatahispmd_noti_view[".nSecOptions"] = 0;

$tdatahispmd_noti_view[".mainTableOwnerID"] = "";
$tdatahispmd_noti_view[".entityType"] = 1;
$tdatahispmd_noti_view[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_noti_view[".strOriginalTableName"] = "public.hispmd_noti";

	



$tdatahispmd_noti_view[".showAddInPopup"] = false;

$tdatahispmd_noti_view[".showEditInPopup"] = false;

$tdatahispmd_noti_view[".showViewInPopup"] = false;

$tdatahispmd_noti_view[".listAjax"] = false;
//	temporary
//$tdatahispmd_noti_view[".listAjax"] = false;

	$tdatahispmd_noti_view[".audit"] = false;

	$tdatahispmd_noti_view[".locking"] = false;


$pages = $tdatahispmd_noti_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_noti_view[".edit"] = true;
	$tdatahispmd_noti_view[".afterEditAction"] = 1;
	$tdatahispmd_noti_view[".closePopupAfterEdit"] = 1;
	$tdatahispmd_noti_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_noti_view[".add"] = true;
$tdatahispmd_noti_view[".afterAddAction"] = 1;
$tdatahispmd_noti_view[".closePopupAfterAdd"] = 1;
$tdatahispmd_noti_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_noti_view[".list"] = true;
}



$tdatahispmd_noti_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_noti_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_noti_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_noti_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_noti_view[".printFriendly"] = true;
}



$tdatahispmd_noti_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_noti_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_noti_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_noti_view[".isUseAjaxSuggest"] = true;



			

$tdatahispmd_noti_view[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_noti_view[".buttonsAdded"] = false;

$tdatahispmd_noti_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_noti_view[".isUseTimeForSearch"] = false;


$tdatahispmd_noti_view[".badgeColor"] = "CD853F";


$tdatahispmd_noti_view[".allSearchFields"] = array();
$tdatahispmd_noti_view[".filterFields"] = array();
$tdatahispmd_noti_view[".requiredSearchFields"] = array();

$tdatahispmd_noti_view[".googleLikeFields"] = array();
$tdatahispmd_noti_view[".googleLikeFields"][] = "message";
$tdatahispmd_noti_view[".googleLikeFields"][] = "title";
$tdatahispmd_noti_view[".googleLikeFields"][] = "created";



$tdatahispmd_noti_view[".tableType"] = "list";

$tdatahispmd_noti_view[".printerPageOrientation"] = 0;
$tdatahispmd_noti_view[".nPrinterPageScale"] = 100;

$tdatahispmd_noti_view[".nPrinterSplitRecords"] = 40;

$tdatahispmd_noti_view[".geocodingEnabled"] = false;




$tdatahispmd_noti_view[".isDisplayLoading"] = true;


$tdatahispmd_noti_view[".searchIsRequiredForFilters"] = true;

$tdatahispmd_noti_view[".noRecordsFirstPage"] = true;



$tdatahispmd_noti_view[".pageSize"] = 20;

$tdatahispmd_noti_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_noti_view[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_noti_view[".orderindexes"] = array();


$tdatahispmd_noti_view[".sqlHead"] = "SELECT id,  	message,  	\"user\",  	provider,  	title,  	url,  	icon,  	created,  	expire,  	\"type\",  	\"group\"";
$tdatahispmd_noti_view[".sqlFrom"] = "FROM \"public\".hispmd_noti";
$tdatahispmd_noti_view[".sqlWhereExpr"] = "";
$tdatahispmd_noti_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_noti_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_noti_view[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_noti_view[".highlightSearchResults"] = true;

$tableKeyshispmd_noti_view = array();
$tableKeyshispmd_noti_view[] = "id";
$tdatahispmd_noti_view[".Keys"] = $tableKeyshispmd_noti_view;


$tdatahispmd_noti_view[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","id");
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


	$tdatahispmd_noti_view["id"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "id";
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "message";

		$fdata["sourceSingle"] = "message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 400;
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


	$tdatahispmd_noti_view["message"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "message";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"user\"";

	
	
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


	$tdatahispmd_noti_view["user"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "user";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

		$fdata["sourceSingle"] = "provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provider";

	
	
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


	$tdatahispmd_noti_view["provider"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "provider";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	$tdatahispmd_noti_view["title"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "title";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","url");
	$fdata["FieldType"] = 201;


	
	
			

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


	$tdatahispmd_noti_view["url"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "url";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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
	$edata["LinkFieldType"] = 200;
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


	$tdatahispmd_noti_view["icon"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "icon";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatahispmd_noti_view["created"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "created";
//	expire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expire";
	$fdata["GoodName"] = "expire";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","expire");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "expire";

		$fdata["sourceSingle"] = "expire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatahispmd_noti_view["expire"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "expire";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"type\"";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahispmd_noti_view["type"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "type";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "public.hispmd_noti";
	$fdata["Label"] = GetFieldLabel("public_hispmd_noti_view","group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group";

		$fdata["sourceSingle"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"group\"";

	
	
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


	$tdatahispmd_noti_view["group"] = $fdata;
		$tdatahispmd_noti_view[".searchableFields"][] = "group";


$tables_data["public.hispmd_noti_view"]=&$tdatahispmd_noti_view;
$field_labels["public_hispmd_noti_view"] = &$fieldLabelshispmd_noti_view;
$fieldToolTips["public_hispmd_noti_view"] = &$fieldToolTipshispmd_noti_view;
$placeHolders["public_hispmd_noti_view"] = &$placeHoldershispmd_noti_view;
$page_titles["public_hispmd_noti_view"] = &$pageTitleshispmd_noti_view;


changeTextControlsToDate( "public.hispmd_noti_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispmd_noti_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispmd_noti_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_noti_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	message,  	\"user\",  	provider,  	title,  	url,  	icon,  	created,  	expire,  	\"type\",  	\"group\"";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_noti";
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
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.hispmd_noti_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto8["m_sql"] = "message";
$proto8["m_srcTableName"] = "public.hispmd_noti_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto10["m_sql"] = "\"user\"";
$proto10["m_srcTableName"] = "public.hispmd_noti_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "provider",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto12["m_sql"] = "provider";
$proto12["m_srcTableName"] = "public.hispmd_noti_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto14["m_sql"] = "title";
$proto14["m_srcTableName"] = "public.hispmd_noti_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto16["m_sql"] = "url";
$proto16["m_srcTableName"] = "public.hispmd_noti_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto18["m_sql"] = "icon";
$proto18["m_srcTableName"] = "public.hispmd_noti_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto20["m_sql"] = "created";
$proto20["m_srcTableName"] = "public.hispmd_noti_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "expire",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto22["m_sql"] = "expire";
$proto22["m_srcTableName"] = "public.hispmd_noti_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto24["m_sql"] = "\"type\"";
$proto24["m_srcTableName"] = "public.hispmd_noti_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "public.hispmd_noti",
	"m_srcTableName" => "public.hispmd_noti_view"
));

$proto26["m_sql"] = "\"group\"";
$proto26["m_srcTableName"] = "public.hispmd_noti_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.hispmd_noti";
$proto29["m_srcTableName"] = "public.hispmd_noti_view";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "message";
$proto29["m_columns"][] = "user";
$proto29["m_columns"][] = "provider";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "url";
$proto29["m_columns"][] = "icon";
$proto29["m_columns"][] = "created";
$proto29["m_columns"][] = "expire";
$proto29["m_columns"][] = "type";
$proto29["m_columns"][] = "group";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".hispmd_noti";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.hispmd_noti_view";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.hispmd_noti_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_noti_view = createSqlQuery_hispmd_noti_view();


	
																												;

											

$tdatahispmd_noti_view[".sqlquery"] = $queryData_hispmd_noti_view;



include_once(getabspath("include/hispmd_noti_view_events.php"));
$tdatahispmd_noti_view[".hasEvents"] = true;

?>