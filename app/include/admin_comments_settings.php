<?php
$tdataadmin_comments = array();
$tdataadmin_comments[".searchableFields"] = array();
$tdataadmin_comments[".ShortName"] = "admin_comments";
$tdataadmin_comments[".OwnerID"] = "access";
$tdataadmin_comments[".OriginalTable"] = "public.kbcomments";


$tdataadmin_comments[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataadmin_comments[".originalPagesByType"] = $tdataadmin_comments[".pagesByType"];
$tdataadmin_comments[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataadmin_comments[".originalPages"] = $tdataadmin_comments[".pages"];
$tdataadmin_comments[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataadmin_comments[".originalDefaultPages"] = $tdataadmin_comments[".defaultPages"];

//	field labels
$fieldLabelsadmin_comments = array();
$fieldToolTipsadmin_comments = array();
$pageTitlesadmin_comments = array();
$placeHoldersadmin_comments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_comments["English"] = array();
	$fieldToolTipsadmin_comments["English"] = array();
	$placeHoldersadmin_comments["English"] = array();
	$pageTitlesadmin_comments["English"] = array();
	$fieldLabelsadmin_comments["English"]["ArticleID"] = "Article";
	$fieldToolTipsadmin_comments["English"]["ArticleID"] = "";
	$placeHoldersadmin_comments["English"]["ArticleID"] = "";
	$fieldLabelsadmin_comments["English"]["comment"] = "Comment";
	$fieldToolTipsadmin_comments["English"]["comment"] = "";
	$placeHoldersadmin_comments["English"]["comment"] = "";
	$fieldLabelsadmin_comments["English"]["CommentID"] = "Comment ID";
	$fieldToolTipsadmin_comments["English"]["CommentID"] = "";
	$placeHoldersadmin_comments["English"]["CommentID"] = "";
	$fieldLabelsadmin_comments["English"]["email"] = "Email";
	$fieldToolTipsadmin_comments["English"]["email"] = "";
	$placeHoldersadmin_comments["English"]["email"] = "";
	$fieldLabelsadmin_comments["English"]["name"] = "Name";
	$fieldToolTipsadmin_comments["English"]["name"] = "";
	$placeHoldersadmin_comments["English"]["name"] = "";
	$fieldLabelsadmin_comments["English"]["moderated"] = "Moderated";
	$fieldToolTipsadmin_comments["English"]["moderated"] = "";
	$placeHoldersadmin_comments["English"]["moderated"] = "";
	$fieldLabelsadmin_comments["English"]["created_date"] = "Created Date";
	$fieldToolTipsadmin_comments["English"]["created_date"] = "";
	$placeHoldersadmin_comments["English"]["created_date"] = "";
	if (count($fieldToolTipsadmin_comments["English"]))
		$tdataadmin_comments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsadmin_comments["Amharic"] = array();
	$fieldToolTipsadmin_comments["Amharic"] = array();
	$placeHoldersadmin_comments["Amharic"] = array();
	$pageTitlesadmin_comments["Amharic"] = array();
	$fieldLabelsadmin_comments["Amharic"]["ArticleID"] = "Article";
	$fieldToolTipsadmin_comments["Amharic"]["ArticleID"] = "";
	$placeHoldersadmin_comments["Amharic"]["ArticleID"] = "";
	$fieldLabelsadmin_comments["Amharic"]["comment"] = "Comment";
	$fieldToolTipsadmin_comments["Amharic"]["comment"] = "";
	$placeHoldersadmin_comments["Amharic"]["comment"] = "";
	$fieldLabelsadmin_comments["Amharic"]["CommentID"] = "Comment ID";
	$fieldToolTipsadmin_comments["Amharic"]["CommentID"] = "";
	$placeHoldersadmin_comments["Amharic"]["CommentID"] = "";
	$fieldLabelsadmin_comments["Amharic"]["email"] = "Email";
	$fieldToolTipsadmin_comments["Amharic"]["email"] = "";
	$placeHoldersadmin_comments["Amharic"]["email"] = "";
	$fieldLabelsadmin_comments["Amharic"]["name"] = "Name";
	$fieldToolTipsadmin_comments["Amharic"]["name"] = "";
	$placeHoldersadmin_comments["Amharic"]["name"] = "";
	$fieldLabelsadmin_comments["Amharic"]["moderated"] = "Moderated";
	$fieldToolTipsadmin_comments["Amharic"]["moderated"] = "";
	$placeHoldersadmin_comments["Amharic"]["moderated"] = "";
	$fieldLabelsadmin_comments["Amharic"]["created_date"] = "Created Date";
	$fieldToolTipsadmin_comments["Amharic"]["created_date"] = "";
	$placeHoldersadmin_comments["Amharic"]["created_date"] = "";
	if (count($fieldToolTipsadmin_comments["Amharic"]))
		$tdataadmin_comments[".isUseToolTips"] = true;
}


	$tdataadmin_comments[".NCSearch"] = true;



$tdataadmin_comments[".shortTableName"] = "admin_comments";
$tdataadmin_comments[".nSecOptions"] = 0;

$tdataadmin_comments[".mainTableOwnerID"] = "access";
$tdataadmin_comments[".entityType"] = 1;
$tdataadmin_comments[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataadmin_comments[".strOriginalTableName"] = "public.kbcomments";

	



$tdataadmin_comments[".showAddInPopup"] = false;

$tdataadmin_comments[".showEditInPopup"] = false;

$tdataadmin_comments[".showViewInPopup"] = false;

$tdataadmin_comments[".listAjax"] = false;
//	temporary
//$tdataadmin_comments[".listAjax"] = false;

	$tdataadmin_comments[".audit"] = false;

	$tdataadmin_comments[".locking"] = false;


$pages = $tdataadmin_comments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_comments[".edit"] = true;
	$tdataadmin_comments[".afterEditAction"] = 1;
	$tdataadmin_comments[".closePopupAfterEdit"] = 1;
	$tdataadmin_comments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_comments[".add"] = true;
$tdataadmin_comments[".afterAddAction"] = 1;
$tdataadmin_comments[".closePopupAfterAdd"] = 1;
$tdataadmin_comments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_comments[".list"] = true;
}



$tdataadmin_comments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_comments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_comments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_comments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_comments[".printFriendly"] = true;
}



$tdataadmin_comments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_comments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_comments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_comments[".isUseAjaxSuggest"] = true;



			

$tdataadmin_comments[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_comments[".buttonsAdded"] = false;

$tdataadmin_comments[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_comments[".isUseTimeForSearch"] = false;


$tdataadmin_comments[".badgeColor"] = "3CB371";


$tdataadmin_comments[".allSearchFields"] = array();
$tdataadmin_comments[".filterFields"] = array();
$tdataadmin_comments[".requiredSearchFields"] = array();

$tdataadmin_comments[".googleLikeFields"] = array();
$tdataadmin_comments[".googleLikeFields"][] = "name";
$tdataadmin_comments[".googleLikeFields"][] = "moderated";
$tdataadmin_comments[".googleLikeFields"][] = "created_date";
$tdataadmin_comments[".googleLikeFields"][] = "ArticleID";
$tdataadmin_comments[".googleLikeFields"][] = "comment";
$tdataadmin_comments[".googleLikeFields"][] = "CommentID";
$tdataadmin_comments[".googleLikeFields"][] = "email";



$tdataadmin_comments[".tableType"] = "list";

$tdataadmin_comments[".printerPageOrientation"] = 0;
$tdataadmin_comments[".nPrinterPageScale"] = 100;

$tdataadmin_comments[".nPrinterSplitRecords"] = 40;

$tdataadmin_comments[".geocodingEnabled"] = false;




$tdataadmin_comments[".isDisplayLoading"] = true;






$tdataadmin_comments[".pageSize"] = 20;

$tdataadmin_comments[".warnLeavingPages"] = true;



$tstrOrderBy = "order by created_date desc";
$tdataadmin_comments[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_comments[".orderindexes"] = array();
	$tdataadmin_comments[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "created_date");



$tdataadmin_comments[".sqlHead"] = "SELECT \"name\", 	\"moderated\", 	\"created_date\", 	\"ArticleID\", 	\"comment\", 	\"CommentID\", 	\"email\"";
$tdataadmin_comments[".sqlFrom"] = "FROM kbcomments";
$tdataadmin_comments[".sqlWhereExpr"] = "";
$tdataadmin_comments[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Awaiting approval",
	'nameType' => 'Text',
	'where' => "moderated<>1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Moderated",
	'nameType' => 'Text',
	'where' => "moderated=1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataadmin_comments[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_comments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_comments[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_comments[".highlightSearchResults"] = true;

$tableKeysadmin_comments = array();
$tableKeysadmin_comments[] = "CommentID";
$tdataadmin_comments[".Keys"] = $tableKeysadmin_comments;


$tdataadmin_comments[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"name\"";

	
	
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


	$tdataadmin_comments["name"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "name";
//	moderated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "moderated";
	$fdata["GoodName"] = "moderated";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","moderated");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "moderated";

		$fdata["sourceSingle"] = "moderated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"moderated\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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
		$fdata["filterTotalFields"] = "moderated";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_comments["moderated"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "moderated";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"created_date\"";

	
	
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


	$tdataadmin_comments["created_date"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "created_date";
//	ArticleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ArticleID";
	$fdata["GoodName"] = "ArticleID";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","ArticleID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ArticleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ArticleID\"";

	
	
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
	$edata["LookupTable"] = "kbarticles";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ArticleID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Title";

	

	
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


	$tdataadmin_comments["ArticleID"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "ArticleID";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"comment\"";

	
	
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
		$fdata["filterTotalFields"] = "moderated";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadmin_comments["comment"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "comment";
//	CommentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CommentID";
	$fdata["GoodName"] = "CommentID";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","CommentID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CommentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"CommentID\"";

	
	
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


	$tdataadmin_comments["CommentID"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "CommentID";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("admin_comments","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"email\"";

	
	
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


	$tdataadmin_comments["email"] = $fdata;
		$tdataadmin_comments[".searchableFields"][] = "email";


$tables_data["admin_comments"]=&$tdataadmin_comments;
$field_labels["admin_comments"] = &$fieldLabelsadmin_comments;
$fieldToolTips["admin_comments"] = &$fieldToolTipsadmin_comments;
$placeHolders["admin_comments"] = &$placeHoldersadmin_comments;
$page_titles["admin_comments"] = &$pageTitlesadmin_comments;


changeTextControlsToDate( "admin_comments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["admin_comments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["admin_comments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_comments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"name\", 	\"moderated\", 	\"created_date\", 	\"ArticleID\", 	\"comment\", 	\"CommentID\", 	\"email\"";
$proto0["m_strFrom"] = "FROM kbcomments";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by created_date desc";
	
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
	"m_strName" => "name",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto6["m_sql"] = "\"name\"";
$proto6["m_srcTableName"] = "admin_comments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "moderated",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto8["m_sql"] = "\"moderated\"";
$proto8["m_srcTableName"] = "admin_comments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto10["m_sql"] = "\"created_date\"";
$proto10["m_srcTableName"] = "admin_comments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ArticleID",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto12["m_sql"] = "\"ArticleID\"";
$proto12["m_srcTableName"] = "admin_comments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto14["m_sql"] = "\"comment\"";
$proto14["m_srcTableName"] = "admin_comments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CommentID",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto16["m_sql"] = "\"CommentID\"";
$proto16["m_srcTableName"] = "admin_comments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto18["m_sql"] = "\"email\"";
$proto18["m_srcTableName"] = "admin_comments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.kbcomments";
$proto21["m_srcTableName"] = "admin_comments";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "moderated";
$proto21["m_columns"][] = "created_date";
$proto21["m_columns"][] = "ArticleID";
$proto21["m_columns"][] = "comment";
$proto21["m_columns"][] = "CommentID";
$proto21["m_columns"][] = "email";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "kbcomments";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "admin_comments";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "admin_comments"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="admin_comments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_comments = createSqlQuery_admin_comments();


	
																												;

							

$tdataadmin_comments[".sqlquery"] = $queryData_admin_comments;



include_once(getabspath("include/admin_comments_events.php"));
$tdataadmin_comments[".hasEvents"] = true;

?>