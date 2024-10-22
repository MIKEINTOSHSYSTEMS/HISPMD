<?php
$tdatasgb_users_comments = array();
$tdatasgb_users_comments[".searchableFields"] = array();
$tdatasgb_users_comments[".ShortName"] = "sgb_users_comments";
$tdatasgb_users_comments[".OwnerID"] = "";
$tdatasgb_users_comments[".OriginalTable"] = "sgb_comments";


$tdatasgb_users_comments[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_users_comments[".originalPagesByType"] = $tdatasgb_users_comments[".pagesByType"];
$tdatasgb_users_comments[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_users_comments[".originalPages"] = $tdatasgb_users_comments[".pages"];
$tdatasgb_users_comments[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_users_comments[".originalDefaultPages"] = $tdatasgb_users_comments[".defaultPages"];

//	field labels
$fieldLabelssgb_users_comments = array();
$fieldToolTipssgb_users_comments = array();
$pageTitlessgb_users_comments = array();
$placeHolderssgb_users_comments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_users_comments["English"] = array();
	$fieldToolTipssgb_users_comments["English"] = array();
	$placeHolderssgb_users_comments["English"] = array();
	$pageTitlessgb_users_comments["English"] = array();
	$fieldLabelssgb_users_comments["English"]["id"] = "Id";
	$fieldToolTipssgb_users_comments["English"]["id"] = "";
	$placeHolderssgb_users_comments["English"]["id"] = "";
	$fieldLabelssgb_users_comments["English"]["user_id"] = "User Id";
	$fieldToolTipssgb_users_comments["English"]["user_id"] = "";
	$placeHolderssgb_users_comments["English"]["user_id"] = "";
	$fieldLabelssgb_users_comments["English"]["comment"] = "Message";
	$fieldToolTipssgb_users_comments["English"]["comment"] = "";
	$placeHolderssgb_users_comments["English"]["comment"] = "";
	$fieldLabelssgb_users_comments["English"]["created_date"] = "Created Date";
	$fieldToolTipssgb_users_comments["English"]["created_date"] = "";
	$placeHolderssgb_users_comments["English"]["created_date"] = "";
	$fieldLabelssgb_users_comments["English"]["name"] = "Name";
	$fieldToolTipssgb_users_comments["English"]["name"] = "";
	$placeHolderssgb_users_comments["English"]["name"] = "";
	$fieldLabelssgb_users_comments["English"]["email"] = "Email";
	$fieldToolTipssgb_users_comments["English"]["email"] = "";
	$placeHolderssgb_users_comments["English"]["email"] = "";
	$fieldLabelssgb_users_comments["English"]["ip"] = "Ip";
	$fieldToolTipssgb_users_comments["English"]["ip"] = "";
	$placeHolderssgb_users_comments["English"]["ip"] = "";
	$fieldLabelssgb_users_comments["English"]["blockip"] = "Blockip";
	$fieldToolTipssgb_users_comments["English"]["blockip"] = "";
	$placeHolderssgb_users_comments["English"]["blockip"] = "";
	$fieldLabelssgb_users_comments["English"]["s_id"] = "S Id";
	$fieldToolTipssgb_users_comments["English"]["s_id"] = "";
	$placeHolderssgb_users_comments["English"]["s_id"] = "";
	if (count($fieldToolTipssgb_users_comments["English"]))
		$tdatasgb_users_comments[".isUseToolTips"] = true;
}


	$tdatasgb_users_comments[".NCSearch"] = true;



$tdatasgb_users_comments[".shortTableName"] = "sgb_users_comments";
$tdatasgb_users_comments[".nSecOptions"] = 0;

$tdatasgb_users_comments[".mainTableOwnerID"] = "";
$tdatasgb_users_comments[".entityType"] = 1;
$tdatasgb_users_comments[".connId"] = "project_at_localhost";


$tdatasgb_users_comments[".strOriginalTableName"] = "sgb_comments";

	



$tdatasgb_users_comments[".showAddInPopup"] = false;

$tdatasgb_users_comments[".showEditInPopup"] = false;

$tdatasgb_users_comments[".showViewInPopup"] = false;

$tdatasgb_users_comments[".listAjax"] = false;
//	temporary
//$tdatasgb_users_comments[".listAjax"] = false;

	$tdatasgb_users_comments[".audit"] = false;

	$tdatasgb_users_comments[".locking"] = false;


$pages = $tdatasgb_users_comments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_users_comments[".edit"] = true;
	$tdatasgb_users_comments[".afterEditAction"] = 1;
	$tdatasgb_users_comments[".closePopupAfterEdit"] = 1;
	$tdatasgb_users_comments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_users_comments[".add"] = true;
$tdatasgb_users_comments[".afterAddAction"] = 1;
$tdatasgb_users_comments[".closePopupAfterAdd"] = 1;
$tdatasgb_users_comments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_users_comments[".list"] = true;
}



$tdatasgb_users_comments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_users_comments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_users_comments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_users_comments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_users_comments[".printFriendly"] = true;
}



$tdatasgb_users_comments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_users_comments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_users_comments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_users_comments[".isUseAjaxSuggest"] = true;



									

$tdatasgb_users_comments[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_users_comments[".buttonsAdded"] = false;

$tdatasgb_users_comments[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_users_comments[".isUseTimeForSearch"] = false;


$tdatasgb_users_comments[".badgeColor"] = "B22222";


$tdatasgb_users_comments[".allSearchFields"] = array();
$tdatasgb_users_comments[".filterFields"] = array();
$tdatasgb_users_comments[".requiredSearchFields"] = array();

$tdatasgb_users_comments[".googleLikeFields"] = array();
$tdatasgb_users_comments[".googleLikeFields"][] = "id";
$tdatasgb_users_comments[".googleLikeFields"][] = "user_id";
$tdatasgb_users_comments[".googleLikeFields"][] = "comment";
$tdatasgb_users_comments[".googleLikeFields"][] = "created_date";
$tdatasgb_users_comments[".googleLikeFields"][] = "name";
$tdatasgb_users_comments[".googleLikeFields"][] = "email";
$tdatasgb_users_comments[".googleLikeFields"][] = "ip";
$tdatasgb_users_comments[".googleLikeFields"][] = "blockip";
$tdatasgb_users_comments[".googleLikeFields"][] = "s_id";



$tdatasgb_users_comments[".tableType"] = "list";

$tdatasgb_users_comments[".printerPageOrientation"] = 0;
$tdatasgb_users_comments[".nPrinterPageScale"] = 100;

$tdatasgb_users_comments[".nPrinterSplitRecords"] = 40;

$tdatasgb_users_comments[".geocodingEnabled"] = false;










$tdatasgb_users_comments[".pageSize"] = 20;

$tdatasgb_users_comments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_users_comments[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_users_comments[".orderindexes"] = array();


$tdatasgb_users_comments[".sqlHead"] = "SELECT id,  user_id,  `comment`,  created_date,  name,  email,  ip,  id AS blockip,  s_id";
$tdatasgb_users_comments[".sqlFrom"] = "FROM sgb_comments";
$tdatasgb_users_comments[".sqlWhereExpr"] = "";
$tdatasgb_users_comments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_users_comments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_users_comments[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_users_comments[".highlightSearchResults"] = true;

$tableKeyssgb_users_comments = array();
$tableKeyssgb_users_comments[] = "id";
$tdatasgb_users_comments[".Keys"] = $tableKeyssgb_users_comments;


$tdatasgb_users_comments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","id");
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


	$tdatasgb_users_comments["id"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "id";
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","user_id");
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


	$tdatasgb_users_comments["user_id"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "user_id";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","comment");
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


	$tdatasgb_users_comments["comment"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "comment";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","created_date");
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


	$tdatasgb_users_comments["created_date"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "created_date";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","name");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasgb_users_comments["name"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","email");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasgb_users_comments["email"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "email";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","ip");
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


	$tdatasgb_users_comments["ip"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "ip";
//	blockip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "blockip";
	$fdata["GoodName"] = "blockip";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","blockip");
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


	$tdatasgb_users_comments["blockip"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "blockip";
//	s_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s_id";
	$fdata["GoodName"] = "s_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_users_comments","s_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "s_id";

		$fdata["sourceSingle"] = "s_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s_id";

	
	
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


	$tdatasgb_users_comments["s_id"] = $fdata;
		$tdatasgb_users_comments[".searchableFields"][] = "s_id";


$tables_data["sgb_users_comments"]=&$tdatasgb_users_comments;
$field_labels["sgb_users_comments"] = &$fieldLabelssgb_users_comments;
$fieldToolTips["sgb_users_comments"] = &$fieldToolTipssgb_users_comments;
$placeHolders["sgb_users_comments"] = &$placeHolderssgb_users_comments;
$page_titles["sgb_users_comments"] = &$pageTitlessgb_users_comments;


changeTextControlsToDate( "sgb_users_comments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_users_comments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_users_comments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_users_comments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  user_id,  `comment`,  created_date,  name,  email,  ip,  id AS blockip,  s_id";
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
	"m_srcTableName" => "sgb_users_comments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_users_comments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "sgb_users_comments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto10["m_sql"] = "`comment`";
$proto10["m_srcTableName"] = "sgb_users_comments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_users_comments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto14["m_sql"] = "name";
$proto14["m_srcTableName"] = "sgb_users_comments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "sgb_users_comments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto18["m_sql"] = "ip";
$proto18["m_srcTableName"] = "sgb_users_comments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto20["m_sql"] = "id";
$proto20["m_srcTableName"] = "sgb_users_comments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "blockip";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "s_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_users_comments"
));

$proto22["m_sql"] = "s_id";
$proto22["m_srcTableName"] = "sgb_users_comments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "sgb_comments";
$proto25["m_srcTableName"] = "sgb_users_comments";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "user_id";
$proto25["m_columns"][] = "comment";
$proto25["m_columns"][] = "created_date";
$proto25["m_columns"][] = "s_id";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "images";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "ip";
$proto25["m_columns"][] = "merged_info";
$proto25["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "sgb_comments";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "sgb_users_comments";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_users_comments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_users_comments = createSqlQuery_sgb_users_comments();


	
		;

									

$tdatasgb_users_comments[".sqlquery"] = $queryData_sgb_users_comments;



include_once(getabspath("include/sgb_users_comments_events.php"));
$tdatasgb_users_comments[".hasEvents"] = true;

$query = &$queryData_sgb_users_comments;
$table = "sgb_users_comments";
// here goes EVENT_INIT_TABLE event

$query->addWhere(AddFieldWrappers("email")."='".$_SESSION["autor"]."'");


;
unset($query);
?>