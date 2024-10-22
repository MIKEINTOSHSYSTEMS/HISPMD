<?php
$tdatasgb_merge = array();
$tdatasgb_merge[".searchableFields"] = array();
$tdatasgb_merge[".ShortName"] = "sgb_merge";
$tdatasgb_merge[".OwnerID"] = "";
$tdatasgb_merge[".OriginalTable"] = "sgb_suggestions";


$tdatasgb_merge[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"]}" );
$tdatasgb_merge[".originalPagesByType"] = $tdatasgb_merge[".pagesByType"];
$tdatasgb_merge[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"]}" ) );
$tdatasgb_merge[".originalPages"] = $tdatasgb_merge[".pages"];
$tdatasgb_merge[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\"}" );
$tdatasgb_merge[".originalDefaultPages"] = $tdatasgb_merge[".defaultPages"];

//	field labels
$fieldLabelssgb_merge = array();
$fieldToolTipssgb_merge = array();
$pageTitlessgb_merge = array();
$placeHolderssgb_merge = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_merge["English"] = array();
	$fieldToolTipssgb_merge["English"] = array();
	$placeHolderssgb_merge["English"] = array();
	$pageTitlessgb_merge["English"] = array();
	$fieldLabelssgb_merge["English"]["id"] = "Id";
	$fieldToolTipssgb_merge["English"]["id"] = "";
	$placeHolderssgb_merge["English"]["id"] = "";
	$fieldLabelssgb_merge["English"]["suggested_by"] = "Suggested By";
	$fieldToolTipssgb_merge["English"]["suggested_by"] = "";
	$placeHolderssgb_merge["English"]["suggested_by"] = "";
	$fieldLabelssgb_merge["English"]["status"] = "Status";
	$fieldToolTipssgb_merge["English"]["status"] = "";
	$placeHolderssgb_merge["English"]["status"] = "";
	$fieldLabelssgb_merge["English"]["created_date"] = "Created Date";
	$fieldToolTipssgb_merge["English"]["created_date"] = "";
	$placeHolderssgb_merge["English"]["created_date"] = "";
	$fieldLabelssgb_merge["English"]["title"] = "Title";
	$fieldToolTipssgb_merge["English"]["title"] = "";
	$placeHolderssgb_merge["English"]["title"] = "";
	$fieldLabelssgb_merge["English"]["search_s"] = "Search suggestions by title";
	$fieldToolTipssgb_merge["English"]["search_s"] = "";
	$placeHolderssgb_merge["English"]["search_s"] = "";
	$fieldLabelssgb_merge["English"]["comment_convert"] = "Convert the merged suggestion's description into a comment";
	$fieldToolTipssgb_merge["English"]["comment_convert"] = "";
	$placeHolderssgb_merge["English"]["comment_convert"] = "";
	$fieldLabelssgb_merge["English"]["vote"] = "Vote";
	$fieldToolTipssgb_merge["English"]["vote"] = "";
	$placeHolderssgb_merge["English"]["vote"] = "";
	$fieldLabelssgb_merge["English"]["suggestion"] = "Suggestion";
	$fieldToolTipssgb_merge["English"]["suggestion"] = "";
	$placeHolderssgb_merge["English"]["suggestion"] = "";
	$fieldLabelssgb_merge["English"]["name"] = "Name";
	$fieldToolTipssgb_merge["English"]["name"] = "";
	$placeHolderssgb_merge["English"]["name"] = "";
	$fieldLabelssgb_merge["English"]["email"] = "Email";
	$fieldToolTipssgb_merge["English"]["email"] = "";
	$placeHolderssgb_merge["English"]["email"] = "";
	$fieldLabelssgb_merge["English"]["ip"] = "Ip";
	$fieldToolTipssgb_merge["English"]["ip"] = "";
	$placeHolderssgb_merge["English"]["ip"] = "";
	if (count($fieldToolTipssgb_merge["English"]))
		$tdatasgb_merge[".isUseToolTips"] = true;
}


	$tdatasgb_merge[".NCSearch"] = true;



$tdatasgb_merge[".shortTableName"] = "sgb_merge";
$tdatasgb_merge[".nSecOptions"] = 0;

$tdatasgb_merge[".mainTableOwnerID"] = "";
$tdatasgb_merge[".entityType"] = 1;
$tdatasgb_merge[".connId"] = "project_at_localhost";


$tdatasgb_merge[".strOriginalTableName"] = "sgb_suggestions";

	



$tdatasgb_merge[".showAddInPopup"] = false;

$tdatasgb_merge[".showEditInPopup"] = false;

$tdatasgb_merge[".showViewInPopup"] = false;

$tdatasgb_merge[".listAjax"] = false;
//	temporary
//$tdatasgb_merge[".listAjax"] = false;

	$tdatasgb_merge[".audit"] = false;

	$tdatasgb_merge[".locking"] = false;


$pages = $tdatasgb_merge[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_merge[".edit"] = true;
	$tdatasgb_merge[".afterEditAction"] = 1;
	$tdatasgb_merge[".closePopupAfterEdit"] = 1;
	$tdatasgb_merge[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_merge[".add"] = true;
$tdatasgb_merge[".afterAddAction"] = 1;
$tdatasgb_merge[".closePopupAfterAdd"] = 1;
$tdatasgb_merge[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_merge[".list"] = true;
}



$tdatasgb_merge[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_merge[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_merge[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_merge[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_merge[".printFriendly"] = true;
}



$tdatasgb_merge[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_merge[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_merge[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_merge[".isUseAjaxSuggest"] = true;



									

$tdatasgb_merge[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_merge[".buttonsAdded"] = false;

$tdatasgb_merge[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_merge[".isUseTimeForSearch"] = false;


$tdatasgb_merge[".badgeColor"] = "EDCA00";


$tdatasgb_merge[".allSearchFields"] = array();
$tdatasgb_merge[".filterFields"] = array();
$tdatasgb_merge[".requiredSearchFields"] = array();

$tdatasgb_merge[".googleLikeFields"] = array();
$tdatasgb_merge[".googleLikeFields"][] = "id";
$tdatasgb_merge[".googleLikeFields"][] = "suggested_by";
$tdatasgb_merge[".googleLikeFields"][] = "status";
$tdatasgb_merge[".googleLikeFields"][] = "created_date";
$tdatasgb_merge[".googleLikeFields"][] = "title";
$tdatasgb_merge[".googleLikeFields"][] = "search_s";
$tdatasgb_merge[".googleLikeFields"][] = "comment_convert";
$tdatasgb_merge[".googleLikeFields"][] = "vote";
$tdatasgb_merge[".googleLikeFields"][] = "suggestion";
$tdatasgb_merge[".googleLikeFields"][] = "name";
$tdatasgb_merge[".googleLikeFields"][] = "email";
$tdatasgb_merge[".googleLikeFields"][] = "ip";



$tdatasgb_merge[".tableType"] = "list";

$tdatasgb_merge[".printerPageOrientation"] = 0;
$tdatasgb_merge[".nPrinterPageScale"] = 100;

$tdatasgb_merge[".nPrinterSplitRecords"] = 40;

$tdatasgb_merge[".geocodingEnabled"] = false;










$tdatasgb_merge[".pageSize"] = 20;

$tdatasgb_merge[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_merge[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_merge[".orderindexes"] = array();


$tdatasgb_merge[".sqlHead"] = "SELECT id,  suggested_by,  status,  created_date,  title,  id AS search_s,  id AS comment_convert,  vote,  suggestion,  name,  email,  ip";
$tdatasgb_merge[".sqlFrom"] = "FROM sgb_suggestions";
$tdatasgb_merge[".sqlWhereExpr"] = "";
$tdatasgb_merge[".sqlTail"] = "";

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
$tdatasgb_merge[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_merge[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_merge[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_merge[".highlightSearchResults"] = true;

$tableKeyssgb_merge = array();
$tableKeyssgb_merge[] = "id";
$tdatasgb_merge[".Keys"] = $tableKeyssgb_merge;


$tdatasgb_merge[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasgb_merge["id"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "id";
//	suggested_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "suggested_by";
	$fdata["GoodName"] = "suggested_by";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","suggested_by");
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


	$tdatasgb_merge["suggested_by"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "suggested_by";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","status");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatasgb_merge["status"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "status";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatasgb_merge["created_date"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "created_date";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","title");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasgb_merge["title"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "title";
//	search_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "search_s";
	$fdata["GoodName"] = "search_s";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","search_s");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sgb_suggestions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";

				$edata["LookupWhere"] = "id <> ':session.cur_suggestion'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatasgb_merge["search_s"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "search_s";
//	comment_convert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "comment_convert";
	$fdata["GoodName"] = "comment_convert";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","comment_convert");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatasgb_merge["comment_convert"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "comment_convert";
//	vote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vote";
	$fdata["GoodName"] = "vote";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","vote");
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


	$tdatasgb_merge["vote"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "vote";
//	suggestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "suggestion";
	$fdata["GoodName"] = "suggestion";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","suggestion");
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


	$tdatasgb_merge["suggestion"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "suggestion";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","name");
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


	$tdatasgb_merge["name"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","email");
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


	$tdatasgb_merge["email"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "email";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_merge","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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


	$tdatasgb_merge["ip"] = $fdata;
		$tdatasgb_merge[".searchableFields"][] = "ip";


$tables_data["sgb_merge"]=&$tdatasgb_merge;
$field_labels["sgb_merge"] = &$fieldLabelssgb_merge;
$fieldToolTips["sgb_merge"] = &$fieldToolTipssgb_merge;
$placeHolders["sgb_merge"] = &$placeHolderssgb_merge;
$page_titles["sgb_merge"] = &$pageTitlessgb_merge;


changeTextControlsToDate( "sgb_merge" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_merge"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_merge"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_merge()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  suggested_by,  status,  created_date,  title,  id AS search_s,  id AS comment_convert,  vote,  suggestion,  name,  email,  ip";
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
	"m_srcTableName" => "sgb_merge"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_merge";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "suggested_by",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto8["m_sql"] = "suggested_by";
$proto8["m_srcTableName"] = "sgb_merge";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "sgb_merge";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_merge";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto14["m_sql"] = "title";
$proto14["m_srcTableName"] = "sgb_merge";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto16["m_sql"] = "id";
$proto16["m_srcTableName"] = "sgb_merge";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "search_s";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto18["m_sql"] = "id";
$proto18["m_srcTableName"] = "sgb_merge";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "comment_convert";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "vote",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto20["m_sql"] = "vote";
$proto20["m_srcTableName"] = "sgb_merge";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "suggestion",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto22["m_sql"] = "suggestion";
$proto22["m_srcTableName"] = "sgb_merge";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto24["m_sql"] = "name";
$proto24["m_srcTableName"] = "sgb_merge";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto26["m_sql"] = "email";
$proto26["m_srcTableName"] = "sgb_merge";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_merge"
));

$proto28["m_sql"] = "ip";
$proto28["m_srcTableName"] = "sgb_merge";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "sgb_suggestions";
$proto31["m_srcTableName"] = "sgb_merge";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "suggested_by";
$proto31["m_columns"][] = "status";
$proto31["m_columns"][] = "created_date";
$proto31["m_columns"][] = "upvoted_date";
$proto31["m_columns"][] = "suggestion";
$proto31["m_columns"][] = "vote";
$proto31["m_columns"][] = "categoryid";
$proto31["m_columns"][] = "title";
$proto31["m_columns"][] = "images";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "pinned";
$proto31["m_columns"][] = "ip";
$proto31["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "sgb_suggestions";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "sgb_merge";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_merge";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_merge = createSqlQuery_sgb_merge();


	
		;

												

$tdatasgb_merge[".sqlquery"] = $queryData_sgb_merge;



include_once(getabspath("include/sgb_merge_events.php"));
$tdatasgb_merge[".hasEvents"] = true;

$query = &$queryData_sgb_merge;
$table = "sgb_merge";
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
		$query->addWhere("status<>'awaiting_approval' or suggested_by=".$_COOKIE["sgb_gsid"]);
	}
	else
		$query->addWhere("status<>'awaiting_approval'");
	$query->addWhere(addFieldWrappers("status")."<>'deleted'");
}

;
unset($query);
?>