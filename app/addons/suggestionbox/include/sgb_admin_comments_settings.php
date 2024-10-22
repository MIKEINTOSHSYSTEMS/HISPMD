<?php
$tdatasgb_admin_comments = array();
$tdatasgb_admin_comments[".searchableFields"] = array();
$tdatasgb_admin_comments[".ShortName"] = "sgb_admin_comments";
$tdatasgb_admin_comments[".OwnerID"] = "";
$tdatasgb_admin_comments[".OriginalTable"] = "sgb_comments";


$tdatasgb_admin_comments[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_admin_comments[".originalPagesByType"] = $tdatasgb_admin_comments[".pagesByType"];
$tdatasgb_admin_comments[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_admin_comments[".originalPages"] = $tdatasgb_admin_comments[".pages"];
$tdatasgb_admin_comments[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_admin_comments[".originalDefaultPages"] = $tdatasgb_admin_comments[".defaultPages"];

//	field labels
$fieldLabelssgb_admin_comments = array();
$fieldToolTipssgb_admin_comments = array();
$pageTitlessgb_admin_comments = array();
$placeHolderssgb_admin_comments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_admin_comments["English"] = array();
	$fieldToolTipssgb_admin_comments["English"] = array();
	$placeHolderssgb_admin_comments["English"] = array();
	$pageTitlessgb_admin_comments["English"] = array();
	$fieldLabelssgb_admin_comments["English"]["id"] = "Id";
	$fieldToolTipssgb_admin_comments["English"]["id"] = "";
	$placeHolderssgb_admin_comments["English"]["id"] = "";
	$fieldLabelssgb_admin_comments["English"]["user_id"] = "User";
	$fieldToolTipssgb_admin_comments["English"]["user_id"] = "";
	$placeHolderssgb_admin_comments["English"]["user_id"] = "";
	$fieldLabelssgb_admin_comments["English"]["comment"] = "Comment";
	$fieldToolTipssgb_admin_comments["English"]["comment"] = "";
	$placeHolderssgb_admin_comments["English"]["comment"] = "";
	$fieldLabelssgb_admin_comments["English"]["created_date"] = "Date";
	$fieldToolTipssgb_admin_comments["English"]["created_date"] = "";
	$placeHolderssgb_admin_comments["English"]["created_date"] = "";
	$fieldLabelssgb_admin_comments["English"]["s_id"] = "Suggestion";
	$fieldToolTipssgb_admin_comments["English"]["s_id"] = "";
	$placeHolderssgb_admin_comments["English"]["s_id"] = "";
	$fieldLabelssgb_admin_comments["English"]["status"] = "Status";
	$fieldToolTipssgb_admin_comments["English"]["status"] = "";
	$placeHolderssgb_admin_comments["English"]["status"] = "";
	$fieldLabelssgb_admin_comments["English"]["images"] = "Images";
	$fieldToolTipssgb_admin_comments["English"]["images"] = "";
	$placeHolderssgb_admin_comments["English"]["images"] = "";
	$fieldLabelssgb_admin_comments["English"]["name"] = "Name";
	$fieldToolTipssgb_admin_comments["English"]["name"] = "";
	$placeHolderssgb_admin_comments["English"]["name"] = "";
	$fieldLabelssgb_admin_comments["English"]["email"] = "Email";
	$fieldToolTipssgb_admin_comments["English"]["email"] = "";
	$placeHolderssgb_admin_comments["English"]["email"] = "";
	$fieldLabelssgb_admin_comments["English"]["editlink"] = "Editlink";
	$fieldToolTipssgb_admin_comments["English"]["editlink"] = "";
	$placeHolderssgb_admin_comments["English"]["editlink"] = "";
	if (count($fieldToolTipssgb_admin_comments["English"]))
		$tdatasgb_admin_comments[".isUseToolTips"] = true;
}


	$tdatasgb_admin_comments[".NCSearch"] = true;



$tdatasgb_admin_comments[".shortTableName"] = "sgb_admin_comments";
$tdatasgb_admin_comments[".nSecOptions"] = 0;

$tdatasgb_admin_comments[".mainTableOwnerID"] = "";
$tdatasgb_admin_comments[".entityType"] = 1;
$tdatasgb_admin_comments[".connId"] = "project_at_localhost";


$tdatasgb_admin_comments[".strOriginalTableName"] = "sgb_comments";

	



$tdatasgb_admin_comments[".showAddInPopup"] = false;

$tdatasgb_admin_comments[".showEditInPopup"] = false;

$tdatasgb_admin_comments[".showViewInPopup"] = false;

$tdatasgb_admin_comments[".listAjax"] = false;
//	temporary
//$tdatasgb_admin_comments[".listAjax"] = false;

	$tdatasgb_admin_comments[".audit"] = false;

	$tdatasgb_admin_comments[".locking"] = false;


$pages = $tdatasgb_admin_comments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_admin_comments[".edit"] = true;
	$tdatasgb_admin_comments[".afterEditAction"] = 1;
	$tdatasgb_admin_comments[".closePopupAfterEdit"] = 1;
	$tdatasgb_admin_comments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_admin_comments[".add"] = true;
$tdatasgb_admin_comments[".afterAddAction"] = 1;
$tdatasgb_admin_comments[".closePopupAfterAdd"] = 1;
$tdatasgb_admin_comments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_admin_comments[".list"] = true;
}



$tdatasgb_admin_comments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_admin_comments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_admin_comments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_admin_comments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_admin_comments[".printFriendly"] = true;
}



$tdatasgb_admin_comments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_admin_comments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_admin_comments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_admin_comments[".isUseAjaxSuggest"] = true;



									

$tdatasgb_admin_comments[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_admin_comments[".buttonsAdded"] = false;

$tdatasgb_admin_comments[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_admin_comments[".isUseTimeForSearch"] = false;


$tdatasgb_admin_comments[".badgeColor"] = "4682B4";


$tdatasgb_admin_comments[".allSearchFields"] = array();
$tdatasgb_admin_comments[".filterFields"] = array();
$tdatasgb_admin_comments[".requiredSearchFields"] = array();

$tdatasgb_admin_comments[".googleLikeFields"] = array();
$tdatasgb_admin_comments[".googleLikeFields"][] = "id";
$tdatasgb_admin_comments[".googleLikeFields"][] = "user_id";
$tdatasgb_admin_comments[".googleLikeFields"][] = "comment";
$tdatasgb_admin_comments[".googleLikeFields"][] = "created_date";
$tdatasgb_admin_comments[".googleLikeFields"][] = "s_id";
$tdatasgb_admin_comments[".googleLikeFields"][] = "status";
$tdatasgb_admin_comments[".googleLikeFields"][] = "images";
$tdatasgb_admin_comments[".googleLikeFields"][] = "name";
$tdatasgb_admin_comments[".googleLikeFields"][] = "email";
$tdatasgb_admin_comments[".googleLikeFields"][] = "editlink";



$tdatasgb_admin_comments[".tableType"] = "list";

$tdatasgb_admin_comments[".printerPageOrientation"] = 0;
$tdatasgb_admin_comments[".nPrinterPageScale"] = 100;

$tdatasgb_admin_comments[".nPrinterSplitRecords"] = 40;

$tdatasgb_admin_comments[".geocodingEnabled"] = false;










$tdatasgb_admin_comments[".pageSize"] = 20;

$tdatasgb_admin_comments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_admin_comments[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_admin_comments[".orderindexes"] = array();


$tdatasgb_admin_comments[".sqlHead"] = "SELECT id,  user_id,  `comment`,  created_date,  s_id,  status,  images,  name,  email,  id AS editlink";
$tdatasgb_admin_comments[".sqlFrom"] = "FROM sgb_comments";
$tdatasgb_admin_comments[".sqlWhereExpr"] = "";
$tdatasgb_admin_comments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_admin_comments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_admin_comments[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_admin_comments[".highlightSearchResults"] = true;

$tableKeyssgb_admin_comments = array();
$tableKeyssgb_admin_comments[] = "id";
$tdatasgb_admin_comments[".Keys"] = $tableKeyssgb_admin_comments;


$tdatasgb_admin_comments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","id");
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


	$tdatasgb_admin_comments["id"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "id";
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","user_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_id";

		$fdata["sourceSingle"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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


	$tdatasgb_admin_comments["user_id"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "user_id";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comment";

		$fdata["sourceSingle"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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


	$tdatasgb_admin_comments["comment"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "comment";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","created_date");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasgb_admin_comments["created_date"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "created_date";
//	s_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s_id";
	$fdata["GoodName"] = "s_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","s_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "s_id";

		$fdata["sourceSingle"] = "s_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s_id";

	
	
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
	$edata["LookupTable"] = "sgb_suggestions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";

	

	
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


	$tdatasgb_admin_comments["s_id"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "s_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

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


	$tdatasgb_admin_comments["status"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "status";
//	images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "images";
	$fdata["GoodName"] = "images";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "images";

		$fdata["sourceSingle"] = "images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "images";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatasgb_admin_comments["images"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "images";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","name");
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


	$tdatasgb_admin_comments["name"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","email");
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


	$tdatasgb_admin_comments["email"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "email";
//	editlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "editlink";
	$fdata["GoodName"] = "editlink";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_admin_comments","editlink");
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


	$tdatasgb_admin_comments["editlink"] = $fdata;
		$tdatasgb_admin_comments[".searchableFields"][] = "editlink";


$tables_data["sgb_admin_comments"]=&$tdatasgb_admin_comments;
$field_labels["sgb_admin_comments"] = &$fieldLabelssgb_admin_comments;
$fieldToolTips["sgb_admin_comments"] = &$fieldToolTipssgb_admin_comments;
$placeHolders["sgb_admin_comments"] = &$placeHolderssgb_admin_comments;
$page_titles["sgb_admin_comments"] = &$pageTitlessgb_admin_comments;


changeTextControlsToDate( "sgb_admin_comments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_admin_comments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_admin_comments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_admin_comments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  user_id,  `comment`,  created_date,  s_id,  status,  images,  name,  email,  id AS editlink";
$proto0["m_strFrom"] = "FROM sgb_comments";
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
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_admin_comments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "sgb_admin_comments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto10["m_sql"] = "`comment`";
$proto10["m_srcTableName"] = "sgb_admin_comments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_admin_comments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "s_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto14["m_sql"] = "s_id";
$proto14["m_srcTableName"] = "sgb_admin_comments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "sgb_admin_comments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "images",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto18["m_sql"] = "images";
$proto18["m_srcTableName"] = "sgb_admin_comments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto20["m_sql"] = "name";
$proto20["m_srcTableName"] = "sgb_admin_comments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "sgb_admin_comments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_admin_comments"
));

$proto24["m_sql"] = "id";
$proto24["m_srcTableName"] = "sgb_admin_comments";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "editlink";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "sgb_comments";
$proto27["m_srcTableName"] = "sgb_admin_comments";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "user_id";
$proto27["m_columns"][] = "comment";
$proto27["m_columns"][] = "created_date";
$proto27["m_columns"][] = "s_id";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "images";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "ip";
$proto27["m_columns"][] = "merged_info";
$proto27["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "sgb_comments";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "sgb_admin_comments";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_admin_comments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_admin_comments = createSqlQuery_sgb_admin_comments();


	
		;

										

$tdatasgb_admin_comments[".sqlquery"] = $queryData_sgb_admin_comments;



include_once(getabspath("include/sgb_admin_comments_events.php"));
$tdatasgb_admin_comments[".hasEvents"] = true;

?>