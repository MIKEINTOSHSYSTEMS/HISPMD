<?php
$tdatakbcomments = array();
$tdatakbcomments[".searchableFields"] = array();
$tdatakbcomments[".ShortName"] = "kbcomments";
$tdatakbcomments[".OwnerID"] = "access";
$tdatakbcomments[".OriginalTable"] = "public.kbcomments";


$tdatakbcomments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"]}" );
$tdatakbcomments[".originalPagesByType"] = $tdatakbcomments[".pagesByType"];
$tdatakbcomments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"]}" ) );
$tdatakbcomments[".originalPages"] = $tdatakbcomments[".pages"];
$tdatakbcomments[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\"}" );
$tdatakbcomments[".originalDefaultPages"] = $tdatakbcomments[".defaultPages"];

//	field labels
$fieldLabelskbcomments = array();
$fieldToolTipskbcomments = array();
$pageTitleskbcomments = array();
$placeHolderskbcomments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskbcomments["English"] = array();
	$fieldToolTipskbcomments["English"] = array();
	$placeHolderskbcomments["English"] = array();
	$pageTitleskbcomments["English"] = array();
	$fieldLabelskbcomments["English"]["ArticleID"] = "Article ID";
	$fieldToolTipskbcomments["English"]["ArticleID"] = "";
	$placeHolderskbcomments["English"]["ArticleID"] = "";
	$fieldLabelskbcomments["English"]["comment"] = "Comment";
	$fieldToolTipskbcomments["English"]["comment"] = "";
	$placeHolderskbcomments["English"]["comment"] = "";
	$fieldLabelskbcomments["English"]["CommentID"] = "Comment ID";
	$fieldToolTipskbcomments["English"]["CommentID"] = "";
	$placeHolderskbcomments["English"]["CommentID"] = "";
	$fieldLabelskbcomments["English"]["email"] = "Email";
	$fieldToolTipskbcomments["English"]["email"] = "";
	$placeHolderskbcomments["English"]["email"] = "";
	$fieldLabelskbcomments["English"]["name"] = "Name";
	$fieldToolTipskbcomments["English"]["name"] = "";
	$placeHolderskbcomments["English"]["name"] = "";
	$fieldLabelskbcomments["English"]["moderated"] = "Moderated";
	$fieldToolTipskbcomments["English"]["moderated"] = "";
	$placeHolderskbcomments["English"]["moderated"] = "";
	$fieldLabelskbcomments["English"]["created_date"] = "Created Date";
	$fieldToolTipskbcomments["English"]["created_date"] = "";
	$placeHolderskbcomments["English"]["created_date"] = "";
	if (count($fieldToolTipskbcomments["English"]))
		$tdatakbcomments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelskbcomments["Amharic"] = array();
	$fieldToolTipskbcomments["Amharic"] = array();
	$placeHolderskbcomments["Amharic"] = array();
	$pageTitleskbcomments["Amharic"] = array();
	$fieldLabelskbcomments["Amharic"]["ArticleID"] = "Article ID";
	$fieldToolTipskbcomments["Amharic"]["ArticleID"] = "";
	$placeHolderskbcomments["Amharic"]["ArticleID"] = "";
	$fieldLabelskbcomments["Amharic"]["comment"] = "Comment";
	$fieldToolTipskbcomments["Amharic"]["comment"] = "";
	$placeHolderskbcomments["Amharic"]["comment"] = "";
	$fieldLabelskbcomments["Amharic"]["CommentID"] = "Comment ID";
	$fieldToolTipskbcomments["Amharic"]["CommentID"] = "";
	$placeHolderskbcomments["Amharic"]["CommentID"] = "";
	$fieldLabelskbcomments["Amharic"]["email"] = "Email";
	$fieldToolTipskbcomments["Amharic"]["email"] = "";
	$placeHolderskbcomments["Amharic"]["email"] = "";
	$fieldLabelskbcomments["Amharic"]["name"] = "Name";
	$fieldToolTipskbcomments["Amharic"]["name"] = "";
	$placeHolderskbcomments["Amharic"]["name"] = "";
	$fieldLabelskbcomments["Amharic"]["moderated"] = "Moderated";
	$fieldToolTipskbcomments["Amharic"]["moderated"] = "";
	$placeHolderskbcomments["Amharic"]["moderated"] = "";
	$fieldLabelskbcomments["Amharic"]["created_date"] = "Created Date";
	$fieldToolTipskbcomments["Amharic"]["created_date"] = "";
	$placeHolderskbcomments["Amharic"]["created_date"] = "";
	if (count($fieldToolTipskbcomments["Amharic"]))
		$tdatakbcomments[".isUseToolTips"] = true;
}


	$tdatakbcomments[".NCSearch"] = true;



$tdatakbcomments[".shortTableName"] = "kbcomments";
$tdatakbcomments[".nSecOptions"] = 2;

$tdatakbcomments[".mainTableOwnerID"] = "access";
$tdatakbcomments[".entityType"] = 1;
$tdatakbcomments[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatakbcomments[".strOriginalTableName"] = "public.kbcomments";

	



$tdatakbcomments[".showAddInPopup"] = false;

$tdatakbcomments[".showEditInPopup"] = false;

$tdatakbcomments[".showViewInPopup"] = false;

$tdatakbcomments[".listAjax"] = false;
//	temporary
//$tdatakbcomments[".listAjax"] = false;

	$tdatakbcomments[".audit"] = false;

	$tdatakbcomments[".locking"] = false;


$pages = $tdatakbcomments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakbcomments[".edit"] = true;
	$tdatakbcomments[".afterEditAction"] = 1;
	$tdatakbcomments[".closePopupAfterEdit"] = 1;
	$tdatakbcomments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakbcomments[".add"] = true;
$tdatakbcomments[".afterAddAction"] = 1;
$tdatakbcomments[".closePopupAfterAdd"] = 1;
$tdatakbcomments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakbcomments[".list"] = true;
}



$tdatakbcomments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakbcomments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakbcomments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakbcomments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakbcomments[".printFriendly"] = true;
}



$tdatakbcomments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakbcomments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakbcomments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakbcomments[".isUseAjaxSuggest"] = true;



									

$tdatakbcomments[".ajaxCodeSnippetAdded"] = false;

$tdatakbcomments[".buttonsAdded"] = false;

$tdatakbcomments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakbcomments[".isUseTimeForSearch"] = false;


$tdatakbcomments[".badgeColor"] = "e67349";


$tdatakbcomments[".allSearchFields"] = array();
$tdatakbcomments[".filterFields"] = array();
$tdatakbcomments[".requiredSearchFields"] = array();

$tdatakbcomments[".googleLikeFields"] = array();
$tdatakbcomments[".googleLikeFields"][] = "name";
$tdatakbcomments[".googleLikeFields"][] = "moderated";
$tdatakbcomments[".googleLikeFields"][] = "created_date";
$tdatakbcomments[".googleLikeFields"][] = "ArticleID";
$tdatakbcomments[".googleLikeFields"][] = "comment";
$tdatakbcomments[".googleLikeFields"][] = "CommentID";
$tdatakbcomments[".googleLikeFields"][] = "email";



$tdatakbcomments[".tableType"] = "list";

$tdatakbcomments[".printerPageOrientation"] = 0;
$tdatakbcomments[".nPrinterPageScale"] = 100;

$tdatakbcomments[".nPrinterSplitRecords"] = 40;

$tdatakbcomments[".geocodingEnabled"] = false;










$tdatakbcomments[".pageSize"] = 20;

$tdatakbcomments[".warnLeavingPages"] = true;



$tstrOrderBy = "order by created_date desc";
$tdatakbcomments[".strOrderBy"] = $tstrOrderBy;

$tdatakbcomments[".orderindexes"] = array();
	$tdatakbcomments[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "created_date");



$tdatakbcomments[".sqlHead"] = "SELECT name, 	moderated, 	created_date, 	ArticleID, 	\"comment\", 	CommentID, 	email";
$tdatakbcomments[".sqlFrom"] = "FROM kbcomments";
$tdatakbcomments[".sqlWhereExpr"] = "moderated = 1";
$tdatakbcomments[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatakbcomments[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakbcomments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakbcomments[".arrGroupsPerPage"] = $arrGPP;

$tdatakbcomments[".highlightSearchResults"] = true;

$tableKeyskbcomments = array();
$tableKeyskbcomments[] = "CommentID";
$tdatakbcomments[".Keys"] = $tableKeyskbcomments;


$tdatakbcomments[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","name");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatakbcomments["name"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "name";
//	moderated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "moderated";
	$fdata["GoodName"] = "moderated";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","moderated");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "moderated";

		$fdata["sourceSingle"] = "moderated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "moderated";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatakbcomments["moderated"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "moderated";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatakbcomments["created_date"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "created_date";
//	ArticleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ArticleID";
	$fdata["GoodName"] = "ArticleID";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","ArticleID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ArticleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ArticleID";

	
	
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


	$tdatakbcomments["ArticleID"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "ArticleID";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"comment\"";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatakbcomments["comment"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "comment";
//	CommentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CommentID";
	$fdata["GoodName"] = "CommentID";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","CommentID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CommentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CommentID";

	
	
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


	$tdatakbcomments["CommentID"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "CommentID";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.kbcomments";
	$fdata["Label"] = GetFieldLabel("kbcomments","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatakbcomments["email"] = $fdata;
		$tdatakbcomments[".searchableFields"][] = "email";


$tables_data["kbcomments"]=&$tdatakbcomments;
$field_labels["kbcomments"] = &$fieldLabelskbcomments;
$fieldToolTips["kbcomments"] = &$fieldToolTipskbcomments;
$placeHolders["kbcomments"] = &$placeHolderskbcomments;
$page_titles["kbcomments"] = &$pageTitleskbcomments;


changeTextControlsToDate( "kbcomments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kbcomments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kbcomments"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.kbarticles";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="main";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "main";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kbcomments"][0] = $masterParams;
				$masterTablesData["kbcomments"][0]["masterKeys"] = array();
	$masterTablesData["kbcomments"][0]["masterKeys"][]="ArticleID";
				$masterTablesData["kbcomments"][0]["detailKeys"] = array();
	$masterTablesData["kbcomments"][0]["detailKeys"][]="ArticleID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.kbarticles";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="kbarticles";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "kbarticles";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kbcomments"][1] = $masterParams;
				$masterTablesData["kbcomments"][1]["masterKeys"] = array();
	$masterTablesData["kbcomments"][1]["masterKeys"][]="ArticleID";
				$masterTablesData["kbcomments"][1]["detailKeys"] = array();
	$masterTablesData["kbcomments"][1]["detailKeys"][]="ArticleID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kbcomments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "name, 	moderated, 	created_date, 	ArticleID, 	\"comment\", 	CommentID, 	email";
$proto0["m_strFrom"] = "FROM kbcomments";
$proto0["m_strWhere"] = "moderated = 1";
$proto0["m_strOrderBy"] = "order by created_date desc";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "moderated = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "moderated",
	"m_strTable" => "kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_srcTableName" => "kbcomments"
));

$proto6["m_sql"] = "name";
$proto6["m_srcTableName"] = "kbcomments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "moderated",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto8["m_sql"] = "moderated";
$proto8["m_srcTableName"] = "kbcomments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto10["m_sql"] = "created_date";
$proto10["m_srcTableName"] = "kbcomments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ArticleID",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto12["m_sql"] = "ArticleID";
$proto12["m_srcTableName"] = "kbcomments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto14["m_sql"] = "\"comment\"";
$proto14["m_srcTableName"] = "kbcomments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CommentID",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto16["m_sql"] = "CommentID";
$proto16["m_srcTableName"] = "kbcomments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.kbcomments",
	"m_srcTableName" => "kbcomments"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "kbcomments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.kbcomments";
$proto21["m_srcTableName"] = "kbcomments";
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
$proto20["m_srcTableName"] = "kbcomments";
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
	"m_srcTableName" => "kbcomments"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="kbcomments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kbcomments = createSqlQuery_kbcomments();


	
																												;

							

$tdatakbcomments[".sqlquery"] = $queryData_kbcomments;



include_once(getabspath("include/kbcomments_events.php"));
$tdatakbcomments[".hasEvents"] = true;

?>