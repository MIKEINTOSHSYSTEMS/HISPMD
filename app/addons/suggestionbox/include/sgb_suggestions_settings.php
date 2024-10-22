<?php
$tdatasgb_suggestions = array();
$tdatasgb_suggestions[".searchableFields"] = array();
$tdatasgb_suggestions[".ShortName"] = "sgb_suggestions";
$tdatasgb_suggestions[".OwnerID"] = "";
$tdatasgb_suggestions[".OriginalTable"] = "sgb_suggestions";


$tdatasgb_suggestions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"already_posted\",\"list_admin\"],\"masterlist\":[\"masterlist\"],\"view\":[\"view\"]}" );
$tdatasgb_suggestions[".originalPagesByType"] = $tdatasgb_suggestions[".pagesByType"];
$tdatasgb_suggestions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"already_posted\",\"list_admin\"],\"masterlist\":[\"masterlist\"],\"view\":[\"view\"]}" ) );
$tdatasgb_suggestions[".originalPages"] = $tdatasgb_suggestions[".pages"];
$tdatasgb_suggestions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"view\":\"view\"}" );
$tdatasgb_suggestions[".originalDefaultPages"] = $tdatasgb_suggestions[".defaultPages"];

//	field labels
$fieldLabelssgb_suggestions = array();
$fieldToolTipssgb_suggestions = array();
$pageTitlessgb_suggestions = array();
$placeHolderssgb_suggestions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_suggestions["English"] = array();
	$fieldToolTipssgb_suggestions["English"] = array();
	$placeHolderssgb_suggestions["English"] = array();
	$pageTitlessgb_suggestions["English"] = array();
	$fieldLabelssgb_suggestions["English"]["id"] = "Id";
	$fieldToolTipssgb_suggestions["English"]["id"] = "";
	$placeHolderssgb_suggestions["English"]["id"] = "";
	$fieldLabelssgb_suggestions["English"]["suggested_by"] = "Suggested By";
	$fieldToolTipssgb_suggestions["English"]["suggested_by"] = "";
	$placeHolderssgb_suggestions["English"]["suggested_by"] = "";
	$fieldLabelssgb_suggestions["English"]["status"] = "Status";
	$fieldToolTipssgb_suggestions["English"]["status"] = "";
	$placeHolderssgb_suggestions["English"]["status"] = "";
	$fieldLabelssgb_suggestions["English"]["created_date"] = "Created Date";
	$fieldToolTipssgb_suggestions["English"]["created_date"] = "";
	$placeHolderssgb_suggestions["English"]["created_date"] = "";
	$fieldLabelssgb_suggestions["English"]["upvoted_date"] = "Upvoted Date";
	$fieldToolTipssgb_suggestions["English"]["upvoted_date"] = "";
	$placeHolderssgb_suggestions["English"]["upvoted_date"] = "";
	$fieldLabelssgb_suggestions["English"]["suggestion"] = "Suggestion";
	$fieldToolTipssgb_suggestions["English"]["suggestion"] = "";
	$placeHolderssgb_suggestions["English"]["suggestion"] = "Description of your suggestion (optional)";
	$fieldLabelssgb_suggestions["English"]["vote"] = "Vote";
	$fieldToolTipssgb_suggestions["English"]["vote"] = "";
	$placeHolderssgb_suggestions["English"]["vote"] = "";
	$fieldLabelssgb_suggestions["English"]["categoryid"] = "Category";
	$fieldToolTipssgb_suggestions["English"]["categoryid"] = "";
	$placeHolderssgb_suggestions["English"]["categoryid"] = "";
	$fieldLabelssgb_suggestions["English"]["title"] = "Title";
	$fieldToolTipssgb_suggestions["English"]["title"] = "";
	$placeHolderssgb_suggestions["English"]["title"] = "Your suggestion";
	$fieldLabelssgb_suggestions["English"]["comments"] = "Comments";
	$fieldToolTipssgb_suggestions["English"]["comments"] = "";
	$placeHolderssgb_suggestions["English"]["comments"] = "";
	$fieldLabelssgb_suggestions["English"]["images"] = "Images";
	$fieldToolTipssgb_suggestions["English"]["images"] = "";
	$placeHolderssgb_suggestions["English"]["images"] = "";
	$fieldLabelssgb_suggestions["English"]["name"] = "Name";
	$fieldToolTipssgb_suggestions["English"]["name"] = "* Your name will be publicly visible";
	$placeHolderssgb_suggestions["English"]["name"] = "";
	$fieldLabelssgb_suggestions["English"]["email"] = "Email";
	$fieldToolTipssgb_suggestions["English"]["email"] = "* Your email will be visible only to moderators";
	$placeHolderssgb_suggestions["English"]["email"] = "";
	$fieldLabelssgb_suggestions["English"]["pinned"] = "Pinned";
	$fieldToolTipssgb_suggestions["English"]["pinned"] = "";
	$placeHolderssgb_suggestions["English"]["pinned"] = "";
	$pageTitlessgb_suggestions["English"]["view"] = "Blocked";
	if (count($fieldToolTipssgb_suggestions["English"]))
		$tdatasgb_suggestions[".isUseToolTips"] = true;
}


	$tdatasgb_suggestions[".NCSearch"] = true;



$tdatasgb_suggestions[".shortTableName"] = "sgb_suggestions";
$tdatasgb_suggestions[".nSecOptions"] = 0;

$tdatasgb_suggestions[".mainTableOwnerID"] = "";
$tdatasgb_suggestions[".entityType"] = 0;
$tdatasgb_suggestions[".connId"] = "project_at_localhost";


$tdatasgb_suggestions[".strOriginalTableName"] = "sgb_suggestions";

	



$tdatasgb_suggestions[".showAddInPopup"] = false;

$tdatasgb_suggestions[".showEditInPopup"] = false;

$tdatasgb_suggestions[".showViewInPopup"] = false;

$tdatasgb_suggestions[".listAjax"] = false;
//	temporary
//$tdatasgb_suggestions[".listAjax"] = false;

	$tdatasgb_suggestions[".audit"] = false;

	$tdatasgb_suggestions[".locking"] = false;


$pages = $tdatasgb_suggestions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_suggestions[".edit"] = true;
	$tdatasgb_suggestions[".afterEditAction"] = 1;
	$tdatasgb_suggestions[".closePopupAfterEdit"] = 1;
	$tdatasgb_suggestions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_suggestions[".add"] = true;
$tdatasgb_suggestions[".afterAddAction"] = 1;
$tdatasgb_suggestions[".closePopupAfterAdd"] = 1;
$tdatasgb_suggestions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_suggestions[".list"] = true;
}



$tdatasgb_suggestions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_suggestions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_suggestions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_suggestions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_suggestions[".printFriendly"] = true;
}



$tdatasgb_suggestions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_suggestions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_suggestions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_suggestions[".isUseAjaxSuggest"] = true;



									

$tdatasgb_suggestions[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_suggestions[".buttonsAdded"] = false;

$tdatasgb_suggestions[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_suggestions[".isUseTimeForSearch"] = false;


$tdatasgb_suggestions[".badgeColor"] = "d2af80";


$tdatasgb_suggestions[".allSearchFields"] = array();
$tdatasgb_suggestions[".filterFields"] = array();
$tdatasgb_suggestions[".requiredSearchFields"] = array();

$tdatasgb_suggestions[".googleLikeFields"] = array();
$tdatasgb_suggestions[".googleLikeFields"][] = "id";
$tdatasgb_suggestions[".googleLikeFields"][] = "suggested_by";
$tdatasgb_suggestions[".googleLikeFields"][] = "status";
$tdatasgb_suggestions[".googleLikeFields"][] = "created_date";
$tdatasgb_suggestions[".googleLikeFields"][] = "upvoted_date";
$tdatasgb_suggestions[".googleLikeFields"][] = "suggestion";
$tdatasgb_suggestions[".googleLikeFields"][] = "vote";
$tdatasgb_suggestions[".googleLikeFields"][] = "categoryid";
$tdatasgb_suggestions[".googleLikeFields"][] = "title";
$tdatasgb_suggestions[".googleLikeFields"][] = "comments";
$tdatasgb_suggestions[".googleLikeFields"][] = "images";
$tdatasgb_suggestions[".googleLikeFields"][] = "name";
$tdatasgb_suggestions[".googleLikeFields"][] = "email";
$tdatasgb_suggestions[".googleLikeFields"][] = "pinned";



$tdatasgb_suggestions[".tableType"] = "list";

$tdatasgb_suggestions[".printerPageOrientation"] = 0;
$tdatasgb_suggestions[".nPrinterPageScale"] = 100;

$tdatasgb_suggestions[".nPrinterSplitRecords"] = 40;

$tdatasgb_suggestions[".geocodingEnabled"] = false;










$tdatasgb_suggestions[".pageSize"] = 20;

$tdatasgb_suggestions[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY pinned DESC";
$tdatasgb_suggestions[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_suggestions[".orderindexes"] = array();
	$tdatasgb_suggestions[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "pinned");



$tdatasgb_suggestions[".sqlHead"] = "SELECT id,  suggested_by,  status,  created_date,  upvoted_date,  suggestion,  vote,  categoryid,  title,  id AS comments,  images,  name,  email,  pinned";
$tdatasgb_suggestions[".sqlFrom"] = "FROM sgb_suggestions";
$tdatasgb_suggestions[".sqlWhereExpr"] = "status <>'merged'";
$tdatasgb_suggestions[".sqlTail"] = "";

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
$tdatasgb_suggestions[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_suggestions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_suggestions[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_suggestions[".highlightSearchResults"] = true;

$tableKeyssgb_suggestions = array();
$tableKeyssgb_suggestions[] = "id";
$tdatasgb_suggestions[".Keys"] = $tableKeyssgb_suggestions;


$tdatasgb_suggestions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","id");
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


	$tdatasgb_suggestions["id"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "id";
//	suggested_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "suggested_by";
	$fdata["GoodName"] = "suggested_by";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","suggested_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "suggested_by";

		$fdata["sourceSingle"] = "suggested_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "suggested_by";

	
	
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


	$tdatasgb_suggestions["suggested_by"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "suggested_by";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
	$edata["LookupTable"] = "sgb_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "statusname";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_label";

				$edata["LookupWhere"] = "visibility='public'";


	
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


	$tdatasgb_suggestions["status"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "status";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatasgb_suggestions["created_date"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "created_date";
//	upvoted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "upvoted_date";
	$fdata["GoodName"] = "upvoted_date";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","upvoted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "upvoted_date";

		$fdata["sourceSingle"] = "upvoted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upvoted_date";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatasgb_suggestions["upvoted_date"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "upvoted_date";
//	suggestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "suggestion";
	$fdata["GoodName"] = "suggestion";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","suggestion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "suggestion";

		$fdata["sourceSingle"] = "suggestion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "suggestion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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

	
	
	
				$edata["nRows"] = 90;
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


	$tdatasgb_suggestions["suggestion"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "suggestion";
//	vote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vote";
	$fdata["GoodName"] = "vote";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","vote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vote";

		$fdata["sourceSingle"] = "vote";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vote";

	
	
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


	$tdatasgb_suggestions["vote"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "vote";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

		$fdata["sourceSingle"] = "categoryid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryid";

	
	
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
	$edata["LookupTable"] = "sgb_categories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatasgb_suggestions["categoryid"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "categoryid";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatasgb_suggestions["title"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "title";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","comments");
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


	$tdatasgb_suggestions["comments"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "comments";
//	images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "images";
	$fdata["GoodName"] = "images";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","images");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "images";

		$fdata["sourceSingle"] = "images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "images";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatasgb_suggestions["images"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "images";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","name");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasgb_suggestions["name"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasgb_suggestions["email"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "email";
//	pinned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pinned";
	$fdata["GoodName"] = "pinned";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_suggestions","pinned");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "pinned";

		$fdata["sourceSingle"] = "pinned";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pinned";

	
	
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


	$tdatasgb_suggestions["pinned"] = $fdata;
		$tdatasgb_suggestions[".searchableFields"][] = "pinned";


$tables_data["sgb_suggestions"]=&$tdatasgb_suggestions;
$field_labels["sgb_suggestions"] = &$fieldLabelssgb_suggestions;
$fieldToolTips["sgb_suggestions"] = &$fieldToolTipssgb_suggestions;
$placeHolders["sgb_suggestions"] = &$placeHolderssgb_suggestions;
$page_titles["sgb_suggestions"] = &$pageTitlessgb_suggestions;


changeTextControlsToDate( "sgb_suggestions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_suggestions"] = array();
//	sgb_comments
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sgb_comments";
		$detailsParam["dOriginalTable"] = "sgb_comments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sgb_comments";
	$detailsParam["dCaptionTable"] = GetTableCaption("sgb_comments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sgb_suggestions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sgb_suggestions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sgb_suggestions"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sgb_suggestions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sgb_suggestions"][$dIndex]["detailKeys"][]="s_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_suggestions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_suggestions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  suggested_by,  status,  created_date,  upvoted_date,  suggestion,  vote,  categoryid,  title,  id AS comments,  images,  name,  email,  pinned";
$proto0["m_strFrom"] = "FROM sgb_suggestions";
$proto0["m_strWhere"] = "status <>'merged'";
$proto0["m_strOrderBy"] = "ORDER BY pinned DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "status <>'merged'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<>'merged'";
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
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_suggestions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "suggested_by",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto8["m_sql"] = "suggested_by";
$proto8["m_srcTableName"] = "sgb_suggestions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "sgb_suggestions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_suggestions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "upvoted_date",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto14["m_sql"] = "upvoted_date";
$proto14["m_srcTableName"] = "sgb_suggestions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "suggestion",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto16["m_sql"] = "suggestion";
$proto16["m_srcTableName"] = "sgb_suggestions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vote",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto18["m_sql"] = "vote";
$proto18["m_srcTableName"] = "sgb_suggestions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto20["m_sql"] = "categoryid";
$proto20["m_srcTableName"] = "sgb_suggestions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto22["m_sql"] = "title";
$proto22["m_srcTableName"] = "sgb_suggestions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto24["m_sql"] = "id";
$proto24["m_srcTableName"] = "sgb_suggestions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "comments";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "images",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto26["m_sql"] = "images";
$proto26["m_srcTableName"] = "sgb_suggestions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto28["m_sql"] = "name";
$proto28["m_srcTableName"] = "sgb_suggestions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto30["m_sql"] = "email";
$proto30["m_srcTableName"] = "sgb_suggestions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pinned",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto32["m_sql"] = "pinned";
$proto32["m_srcTableName"] = "sgb_suggestions";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "sgb_suggestions";
$proto35["m_srcTableName"] = "sgb_suggestions";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "suggested_by";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "created_date";
$proto35["m_columns"][] = "upvoted_date";
$proto35["m_columns"][] = "suggestion";
$proto35["m_columns"][] = "vote";
$proto35["m_columns"][] = "categoryid";
$proto35["m_columns"][] = "title";
$proto35["m_columns"][] = "images";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "email";
$proto35["m_columns"][] = "pinned";
$proto35["m_columns"][] = "ip";
$proto35["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "sgb_suggestions";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "sgb_suggestions";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "pinned",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_suggestions"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sgb_suggestions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_suggestions = createSqlQuery_sgb_suggestions();


	
		;

														

$tdatasgb_suggestions[".sqlquery"] = $queryData_sgb_suggestions;



include_once(getabspath("include/sgb_suggestions_events.php"));
$tdatasgb_suggestions[".hasEvents"] = true;

$query = &$queryData_sgb_suggestions;
$table = "sgb_suggestions";
// here goes EVENT_INIT_TABLE event
if(postvalue("status") === "notdone"){
	$query->addWhere(addFieldWrappers("status")."<>'done'");
}
if(postvalue("category") !=false){
	$rs = DB::Select("sgb_categories",array("url" =>postvalue("category") ));
	$catdata = $rs->fetchAssoc();
	$query->addWhere(addFieldWrappers("categoryid")."=".$catdata["id"]);
}

if(Security::isLoggedIn()){
	if(Security::getUserGroup() !== "admin"){
		$query->addWhere(addFieldWrappers("status")."<>'awaiting_approval' or ".addFieldWrappers("suggested_by")."=".$_SESSION["uid"]);
	}
	if(Security::getUserGroup() !== "admin" ||(Security::getUserGroup() === "admin" && ( $_SESSION["showDeleted"]==0||!isset($_SESSION["showDeleted"]) ) ))  {
		$query->addWhere(addFieldWrappers("status")."<>'deleted'");
	}
}
else{
	if(isset($_COOKIE["sgb_gsid"])){
		$query->addWhere(addFieldWrappers("status")."<>'awaiting_approval' or suggested_by=".$_COOKIE["sgb_gsid"]);
	}
	else
		$query->addWhere(addFieldWrappers("status")."<>'awaiting_approval'");
	$query->addWhere(addFieldWrappers("status")."<>'deleted'");
}

;
unset($query);
?>