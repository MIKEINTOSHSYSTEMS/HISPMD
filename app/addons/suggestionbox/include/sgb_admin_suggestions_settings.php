<?php
$tdatasgb_admin_suggestions = array();
$tdatasgb_admin_suggestions[".searchableFields"] = array();
$tdatasgb_admin_suggestions[".ShortName"] = "sgb_admin_suggestions";
$tdatasgb_admin_suggestions[".OwnerID"] = "";
$tdatasgb_admin_suggestions[".OriginalTable"] = "sgb_suggestions";


$tdatasgb_admin_suggestions[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" );
$tdatasgb_admin_suggestions[".originalPagesByType"] = $tdatasgb_admin_suggestions[".pagesByType"];
$tdatasgb_admin_suggestions[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"]}" ) );
$tdatasgb_admin_suggestions[".originalPages"] = $tdatasgb_admin_suggestions[".pages"];
$tdatasgb_admin_suggestions[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\"}" );
$tdatasgb_admin_suggestions[".originalDefaultPages"] = $tdatasgb_admin_suggestions[".defaultPages"];

//	field labels
$fieldLabelssgb_admin_suggestions = array();
$fieldToolTipssgb_admin_suggestions = array();
$pageTitlessgb_admin_suggestions = array();
$placeHolderssgb_admin_suggestions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_admin_suggestions["English"] = array();
	$fieldToolTipssgb_admin_suggestions["English"] = array();
	$placeHolderssgb_admin_suggestions["English"] = array();
	$pageTitlessgb_admin_suggestions["English"] = array();
	$fieldLabelssgb_admin_suggestions["English"]["id"] = "Id";
	$fieldToolTipssgb_admin_suggestions["English"]["id"] = "";
	$placeHolderssgb_admin_suggestions["English"]["id"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["suggested_by"] = "User";
	$fieldToolTipssgb_admin_suggestions["English"]["suggested_by"] = "";
	$placeHolderssgb_admin_suggestions["English"]["suggested_by"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["status"] = "Status";
	$fieldToolTipssgb_admin_suggestions["English"]["status"] = "";
	$placeHolderssgb_admin_suggestions["English"]["status"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["created_date"] = "Created Date";
	$fieldToolTipssgb_admin_suggestions["English"]["created_date"] = "";
	$placeHolderssgb_admin_suggestions["English"]["created_date"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["upvoted_date"] = "Upvoted Date";
	$fieldToolTipssgb_admin_suggestions["English"]["upvoted_date"] = "";
	$placeHolderssgb_admin_suggestions["English"]["upvoted_date"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["suggestion"] = "Suggestion";
	$fieldToolTipssgb_admin_suggestions["English"]["suggestion"] = "";
	$placeHolderssgb_admin_suggestions["English"]["suggestion"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["vote"] = "Vote";
	$fieldToolTipssgb_admin_suggestions["English"]["vote"] = "";
	$placeHolderssgb_admin_suggestions["English"]["vote"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["categoryid"] = "Category";
	$fieldToolTipssgb_admin_suggestions["English"]["categoryid"] = "";
	$placeHolderssgb_admin_suggestions["English"]["categoryid"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["title"] = "Title";
	$fieldToolTipssgb_admin_suggestions["English"]["title"] = "";
	$placeHolderssgb_admin_suggestions["English"]["title"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["comments"] = "Comments";
	$fieldToolTipssgb_admin_suggestions["English"]["comments"] = "";
	$placeHolderssgb_admin_suggestions["English"]["comments"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["images"] = "Image";
	$fieldToolTipssgb_admin_suggestions["English"]["images"] = "";
	$placeHolderssgb_admin_suggestions["English"]["images"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["email"] = "Email";
	$fieldToolTipssgb_admin_suggestions["English"]["email"] = "";
	$placeHolderssgb_admin_suggestions["English"]["email"] = "";
	$fieldLabelssgb_admin_suggestions["English"]["name"] = "Name";
	$fieldToolTipssgb_admin_suggestions["English"]["name"] = "";
	$placeHolderssgb_admin_suggestions["English"]["name"] = "";
	if (count($fieldToolTipssgb_admin_suggestions["English"]))
		$tdatasgb_admin_suggestions[".isUseToolTips"] = true;
}


	$tdatasgb_admin_suggestions[".NCSearch"] = true;



$tdatasgb_admin_suggestions[".shortTableName"] = "sgb_admin_suggestions";
$tdatasgb_admin_suggestions[".nSecOptions"] = 0;

$tdatasgb_admin_suggestions[".mainTableOwnerID"] = "";
$tdatasgb_admin_suggestions[".entityType"] = 1;
$tdatasgb_admin_suggestions[".connId"] = "project_at_localhost";


$tdatasgb_admin_suggestions[".strOriginalTableName"] = "sgb_suggestions";

	



$tdatasgb_admin_suggestions[".showAddInPopup"] = false;

$tdatasgb_admin_suggestions[".showEditInPopup"] = false;

$tdatasgb_admin_suggestions[".showViewInPopup"] = false;

$tdatasgb_admin_suggestions[".listAjax"] = false;
//	temporary
//$tdatasgb_admin_suggestions[".listAjax"] = false;

	$tdatasgb_admin_suggestions[".audit"] = false;

	$tdatasgb_admin_suggestions[".locking"] = false;


$pages = $tdatasgb_admin_suggestions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_admin_suggestions[".edit"] = true;
	$tdatasgb_admin_suggestions[".afterEditAction"] = 1;
	$tdatasgb_admin_suggestions[".closePopupAfterEdit"] = 1;
	$tdatasgb_admin_suggestions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_admin_suggestions[".add"] = true;
$tdatasgb_admin_suggestions[".afterAddAction"] = 1;
$tdatasgb_admin_suggestions[".closePopupAfterAdd"] = 1;
$tdatasgb_admin_suggestions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_admin_suggestions[".list"] = true;
}



$tdatasgb_admin_suggestions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_admin_suggestions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_admin_suggestions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_admin_suggestions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_admin_suggestions[".printFriendly"] = true;
}



$tdatasgb_admin_suggestions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_admin_suggestions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_admin_suggestions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_admin_suggestions[".isUseAjaxSuggest"] = true;



									

$tdatasgb_admin_suggestions[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_admin_suggestions[".buttonsAdded"] = false;

$tdatasgb_admin_suggestions[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_admin_suggestions[".isUseTimeForSearch"] = false;


$tdatasgb_admin_suggestions[".badgeColor"] = "E07878";


$tdatasgb_admin_suggestions[".allSearchFields"] = array();
$tdatasgb_admin_suggestions[".filterFields"] = array();
$tdatasgb_admin_suggestions[".requiredSearchFields"] = array();

$tdatasgb_admin_suggestions[".googleLikeFields"] = array();
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "id";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "suggested_by";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "status";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "created_date";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "upvoted_date";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "suggestion";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "vote";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "categoryid";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "title";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "email";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "name";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "comments";
$tdatasgb_admin_suggestions[".googleLikeFields"][] = "images";



$tdatasgb_admin_suggestions[".tableType"] = "list";

$tdatasgb_admin_suggestions[".printerPageOrientation"] = 0;
$tdatasgb_admin_suggestions[".nPrinterPageScale"] = 100;

$tdatasgb_admin_suggestions[".nPrinterSplitRecords"] = 40;

$tdatasgb_admin_suggestions[".geocodingEnabled"] = false;










$tdatasgb_admin_suggestions[".pageSize"] = 20;

$tdatasgb_admin_suggestions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_admin_suggestions[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_admin_suggestions[".orderindexes"] = array();


$tdatasgb_admin_suggestions[".sqlHead"] = "SELECT id,  suggested_by,  status,  created_date,  upvoted_date,  suggestion,  vote,  categoryid,  title,  email,  name,  id AS comments,  images";
$tdatasgb_admin_suggestions[".sqlFrom"] = "FROM sgb_suggestions";
$tdatasgb_admin_suggestions[".sqlWhereExpr"] = "";
$tdatasgb_admin_suggestions[".sqlTail"] = "";

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
$tdatasgb_admin_suggestions[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_admin_suggestions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_admin_suggestions[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_admin_suggestions[".highlightSearchResults"] = true;

$tableKeyssgb_admin_suggestions = array();
$tableKeyssgb_admin_suggestions[] = "id";
$tdatasgb_admin_suggestions[".Keys"] = $tableKeyssgb_admin_suggestions;


$tdatasgb_admin_suggestions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","id");
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


	$tdatasgb_admin_suggestions["id"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "id";
//	suggested_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "suggested_by";
	$fdata["GoodName"] = "suggested_by";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","suggested_by");
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


	$tdatasgb_admin_suggestions["suggested_by"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "suggested_by";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","status");
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


	$tdatasgb_admin_suggestions["status"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "status";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","created_date");
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


	$tdatasgb_admin_suggestions["created_date"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "created_date";
//	upvoted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "upvoted_date";
	$fdata["GoodName"] = "upvoted_date";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","upvoted_date");
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


	$tdatasgb_admin_suggestions["upvoted_date"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "upvoted_date";
//	suggestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "suggestion";
	$fdata["GoodName"] = "suggestion";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","suggestion");
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

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 200;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 90;
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


	$tdatasgb_admin_suggestions["suggestion"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "suggestion";
//	vote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vote";
	$fdata["GoodName"] = "vote";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","vote");
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


	$tdatasgb_admin_suggestions["vote"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "vote";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","categoryid");
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


	$tdatasgb_admin_suggestions["categoryid"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "categoryid";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","title");
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


	$tdatasgb_admin_suggestions["title"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "title";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","email");
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


	$tdatasgb_admin_suggestions["email"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "email";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","name");
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


	$tdatasgb_admin_suggestions["name"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "name";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","comments");
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


	$tdatasgb_admin_suggestions["comments"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "comments";
//	images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "images";
	$fdata["GoodName"] = "images";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_admin_suggestions","images");
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
	$vdata["ImageWidth"] = 100;
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


	$tdatasgb_admin_suggestions["images"] = $fdata;
		$tdatasgb_admin_suggestions[".searchableFields"][] = "images";


$tables_data["sgb_admin_suggestions"]=&$tdatasgb_admin_suggestions;
$field_labels["sgb_admin_suggestions"] = &$fieldLabelssgb_admin_suggestions;
$fieldToolTips["sgb_admin_suggestions"] = &$fieldToolTipssgb_admin_suggestions;
$placeHolders["sgb_admin_suggestions"] = &$placeHolderssgb_admin_suggestions;
$page_titles["sgb_admin_suggestions"] = &$pageTitlessgb_admin_suggestions;


changeTextControlsToDate( "sgb_admin_suggestions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_admin_suggestions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_admin_suggestions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_admin_suggestions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  suggested_by,  status,  created_date,  upvoted_date,  suggestion,  vote,  categoryid,  title,  email,  name,  id AS comments,  images";
$proto0["m_strFrom"] = "FROM sgb_suggestions";
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
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_admin_suggestions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "suggested_by",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto8["m_sql"] = "suggested_by";
$proto8["m_srcTableName"] = "sgb_admin_suggestions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "sgb_admin_suggestions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_admin_suggestions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "upvoted_date",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto14["m_sql"] = "upvoted_date";
$proto14["m_srcTableName"] = "sgb_admin_suggestions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "suggestion",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto16["m_sql"] = "suggestion";
$proto16["m_srcTableName"] = "sgb_admin_suggestions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vote",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto18["m_sql"] = "vote";
$proto18["m_srcTableName"] = "sgb_admin_suggestions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto20["m_sql"] = "categoryid";
$proto20["m_srcTableName"] = "sgb_admin_suggestions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto22["m_sql"] = "title";
$proto22["m_srcTableName"] = "sgb_admin_suggestions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto24["m_sql"] = "email";
$proto24["m_srcTableName"] = "sgb_admin_suggestions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto26["m_sql"] = "name";
$proto26["m_srcTableName"] = "sgb_admin_suggestions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto28["m_sql"] = "id";
$proto28["m_srcTableName"] = "sgb_admin_suggestions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "comments";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "images",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_admin_suggestions"
));

$proto30["m_sql"] = "images";
$proto30["m_srcTableName"] = "sgb_admin_suggestions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "sgb_suggestions";
$proto33["m_srcTableName"] = "sgb_admin_suggestions";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "suggested_by";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "created_date";
$proto33["m_columns"][] = "upvoted_date";
$proto33["m_columns"][] = "suggestion";
$proto33["m_columns"][] = "vote";
$proto33["m_columns"][] = "categoryid";
$proto33["m_columns"][] = "title";
$proto33["m_columns"][] = "images";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "pinned";
$proto33["m_columns"][] = "ip";
$proto33["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "sgb_suggestions";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "sgb_admin_suggestions";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_admin_suggestions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_admin_suggestions = createSqlQuery_sgb_admin_suggestions();


	
		;

													

$tdatasgb_admin_suggestions[".sqlquery"] = $queryData_sgb_admin_suggestions;



include_once(getabspath("include/sgb_admin_suggestions_events.php"));
$tdatasgb_admin_suggestions[".hasEvents"] = true;

$query = &$queryData_sgb_admin_suggestions;
$table = "sgb_admin_suggestions";
// here goes EVENT_INIT_TABLE event
/*if(postvalue("status") === "notdone"){
	$query->addWhere(addFieldWrappers("status")."<>'done'");
}
if(postvalue("category") !=false){
	$rs = DB::Select("sgb_categories",array("url" =>postvalue("category") ));
	$catdata = $rs->fetchAssoc();
	$query->addWhere(addFieldWrappers("categoryid")."=".$catdata["id"]);
}*/


;
unset($query);
?>