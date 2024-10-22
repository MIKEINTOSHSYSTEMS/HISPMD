<?php
$tdatasgb_split = array();
$tdatasgb_split[".searchableFields"] = array();
$tdatasgb_split[".ShortName"] = "sgb_split";
$tdatasgb_split[".OwnerID"] = "";
$tdatasgb_split[".OriginalTable"] = "sgb_suggestions";


$tdatasgb_split[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatasgb_split[".originalPagesByType"] = $tdatasgb_split[".pagesByType"];
$tdatasgb_split[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatasgb_split[".originalPages"] = $tdatasgb_split[".pages"];
$tdatasgb_split[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatasgb_split[".originalDefaultPages"] = $tdatasgb_split[".defaultPages"];

//	field labels
$fieldLabelssgb_split = array();
$fieldToolTipssgb_split = array();
$pageTitlessgb_split = array();
$placeHolderssgb_split = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_split["English"] = array();
	$fieldToolTipssgb_split["English"] = array();
	$placeHolderssgb_split["English"] = array();
	$pageTitlessgb_split["English"] = array();
	$fieldLabelssgb_split["English"]["id"] = "Id";
	$fieldToolTipssgb_split["English"]["id"] = "";
	$placeHolderssgb_split["English"]["id"] = "";
	$fieldLabelssgb_split["English"]["status"] = "Status";
	$fieldToolTipssgb_split["English"]["status"] = "";
	$placeHolderssgb_split["English"]["status"] = "";
	$fieldLabelssgb_split["English"]["suggestion"] = "Suggestion";
	$fieldToolTipssgb_split["English"]["suggestion"] = "";
	$placeHolderssgb_split["English"]["suggestion"] = "";
	$fieldLabelssgb_split["English"]["title"] = "Title";
	$fieldToolTipssgb_split["English"]["title"] = "";
	$placeHolderssgb_split["English"]["title"] = "";
	$fieldLabelssgb_split["English"]["newtitle"] = "Title";
	$fieldToolTipssgb_split["English"]["newtitle"] = "";
	$placeHolderssgb_split["English"]["newtitle"] = "";
	$fieldLabelssgb_split["English"]["newstatus"] = "Status";
	$fieldToolTipssgb_split["English"]["newstatus"] = "";
	$placeHolderssgb_split["English"]["newstatus"] = "";
	$fieldLabelssgb_split["English"]["newsuggestion"] = "Suggestion";
	$fieldToolTipssgb_split["English"]["newsuggestion"] = "";
	$placeHolderssgb_split["English"]["newsuggestion"] = "";
	$fieldLabelssgb_split["English"]["copyupvotes"] = "Copy upvotes from current suggestion";
	$fieldToolTipssgb_split["English"]["copyupvotes"] = "";
	$placeHolderssgb_split["English"]["copyupvotes"] = "";
	if (count($fieldToolTipssgb_split["English"]))
		$tdatasgb_split[".isUseToolTips"] = true;
}


	$tdatasgb_split[".NCSearch"] = true;



$tdatasgb_split[".shortTableName"] = "sgb_split";
$tdatasgb_split[".nSecOptions"] = 0;

$tdatasgb_split[".mainTableOwnerID"] = "";
$tdatasgb_split[".entityType"] = 1;
$tdatasgb_split[".connId"] = "project_at_localhost";


$tdatasgb_split[".strOriginalTableName"] = "sgb_suggestions";

	



$tdatasgb_split[".showAddInPopup"] = false;

$tdatasgb_split[".showEditInPopup"] = false;

$tdatasgb_split[".showViewInPopup"] = false;

$tdatasgb_split[".listAjax"] = false;
//	temporary
//$tdatasgb_split[".listAjax"] = false;

	$tdatasgb_split[".audit"] = false;

	$tdatasgb_split[".locking"] = false;


$pages = $tdatasgb_split[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_split[".edit"] = true;
	$tdatasgb_split[".afterEditAction"] = 1;
	$tdatasgb_split[".closePopupAfterEdit"] = 1;
	$tdatasgb_split[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_split[".add"] = true;
$tdatasgb_split[".afterAddAction"] = 1;
$tdatasgb_split[".closePopupAfterAdd"] = 1;
$tdatasgb_split[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_split[".list"] = true;
}



$tdatasgb_split[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_split[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_split[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_split[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_split[".printFriendly"] = true;
}



$tdatasgb_split[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_split[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_split[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_split[".isUseAjaxSuggest"] = true;



									

$tdatasgb_split[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_split[".buttonsAdded"] = false;

$tdatasgb_split[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_split[".isUseTimeForSearch"] = false;


$tdatasgb_split[".badgeColor"] = "6DA5C8";


$tdatasgb_split[".allSearchFields"] = array();
$tdatasgb_split[".filterFields"] = array();
$tdatasgb_split[".requiredSearchFields"] = array();

$tdatasgb_split[".googleLikeFields"] = array();
$tdatasgb_split[".googleLikeFields"][] = "id";
$tdatasgb_split[".googleLikeFields"][] = "title";
$tdatasgb_split[".googleLikeFields"][] = "status";
$tdatasgb_split[".googleLikeFields"][] = "suggestion";
$tdatasgb_split[".googleLikeFields"][] = "newtitle";
$tdatasgb_split[".googleLikeFields"][] = "newstatus";
$tdatasgb_split[".googleLikeFields"][] = "newsuggestion";
$tdatasgb_split[".googleLikeFields"][] = "copyupvotes";



$tdatasgb_split[".tableType"] = "list";

$tdatasgb_split[".printerPageOrientation"] = 0;
$tdatasgb_split[".nPrinterPageScale"] = 100;

$tdatasgb_split[".nPrinterSplitRecords"] = 40;

$tdatasgb_split[".geocodingEnabled"] = false;










$tdatasgb_split[".pageSize"] = 20;

$tdatasgb_split[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_split[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_split[".orderindexes"] = array();


$tdatasgb_split[".sqlHead"] = "SELECT id,  title,  status,  suggestion,  title AS newtitle,  status AS newstatus,  suggestion AS newsuggestion,  id AS copyupvotes";
$tdatasgb_split[".sqlFrom"] = "FROM sgb_suggestions";
$tdatasgb_split[".sqlWhereExpr"] = "";
$tdatasgb_split[".sqlTail"] = "";

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
$tdatasgb_split[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_split[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_split[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_split[".highlightSearchResults"] = true;

$tableKeyssgb_split = array();
$tableKeyssgb_split[] = "id";
$tdatasgb_split[".Keys"] = $tableKeyssgb_split;


$tdatasgb_split[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","id");
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


	$tdatasgb_split["id"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","title");
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


	$tdatasgb_split["title"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "title";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","status");
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


	$tdatasgb_split["status"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "status";
//	suggestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "suggestion";
	$fdata["GoodName"] = "suggestion";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","suggestion");
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


	$tdatasgb_split["suggestion"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "suggestion";
//	newtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "newtitle";
	$fdata["GoodName"] = "newtitle";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","newtitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

	
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


	$tdatasgb_split["newtitle"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "newtitle";
//	newstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "newstatus";
	$fdata["GoodName"] = "newstatus";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","newstatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatasgb_split["newstatus"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "newstatus";
//	newsuggestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "newsuggestion";
	$fdata["GoodName"] = "newsuggestion";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","newsuggestion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "suggestion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "suggestion";

	
	
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


	$tdatasgb_split["newsuggestion"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "newsuggestion";
//	copyupvotes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "copyupvotes";
	$fdata["GoodName"] = "copyupvotes";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_split","copyupvotes");
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


	$tdatasgb_split["copyupvotes"] = $fdata;
		$tdatasgb_split[".searchableFields"][] = "copyupvotes";


$tables_data["sgb_split"]=&$tdatasgb_split;
$field_labels["sgb_split"] = &$fieldLabelssgb_split;
$fieldToolTips["sgb_split"] = &$fieldToolTipssgb_split;
$placeHolders["sgb_split"] = &$placeHolderssgb_split;
$page_titles["sgb_split"] = &$pageTitlessgb_split;


changeTextControlsToDate( "sgb_split" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_split"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_split"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_split()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  title,  status,  suggestion,  title AS newtitle,  status AS newstatus,  suggestion AS newsuggestion,  id AS copyupvotes";
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
	"m_srcTableName" => "sgb_split"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_split";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "sgb_split";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "sgb_split";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "suggestion",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto12["m_sql"] = "suggestion";
$proto12["m_srcTableName"] = "sgb_split";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto14["m_sql"] = "title";
$proto14["m_srcTableName"] = "sgb_split";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "newtitle";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "sgb_split";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "newstatus";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "suggestion",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto18["m_sql"] = "suggestion";
$proto18["m_srcTableName"] = "sgb_split";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "newsuggestion";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_split"
));

$proto20["m_sql"] = "id";
$proto20["m_srcTableName"] = "sgb_split";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "copyupvotes";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "sgb_suggestions";
$proto23["m_srcTableName"] = "sgb_split";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "suggested_by";
$proto23["m_columns"][] = "status";
$proto23["m_columns"][] = "created_date";
$proto23["m_columns"][] = "upvoted_date";
$proto23["m_columns"][] = "suggestion";
$proto23["m_columns"][] = "vote";
$proto23["m_columns"][] = "categoryid";
$proto23["m_columns"][] = "title";
$proto23["m_columns"][] = "images";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "pinned";
$proto23["m_columns"][] = "ip";
$proto23["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "sgb_suggestions";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "sgb_split";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_split";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_split = createSqlQuery_sgb_split();


	
		;

								

$tdatasgb_split[".sqlquery"] = $queryData_sgb_split;



include_once(getabspath("include/sgb_split_events.php"));
$tdatasgb_split[".hasEvents"] = true;

?>