<?php
$tdatasgb_comments = array();
$tdatasgb_comments[".searchableFields"] = array();
$tdatasgb_comments[".ShortName"] = "sgb_comments";
$tdatasgb_comments[".OwnerID"] = "";
$tdatasgb_comments[".OriginalTable"] = "sgb_comments";


$tdatasgb_comments[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\",\"list_admin\"],\"search\":[\"search\"]}" );
$tdatasgb_comments[".originalPagesByType"] = $tdatasgb_comments[".pagesByType"];
$tdatasgb_comments[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\",\"list_admin\"],\"search\":[\"search\"]}" ) );
$tdatasgb_comments[".originalPages"] = $tdatasgb_comments[".pages"];
$tdatasgb_comments[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_comments[".originalDefaultPages"] = $tdatasgb_comments[".defaultPages"];

//	field labels
$fieldLabelssgb_comments = array();
$fieldToolTipssgb_comments = array();
$pageTitlessgb_comments = array();
$placeHolderssgb_comments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_comments["English"] = array();
	$fieldToolTipssgb_comments["English"] = array();
	$placeHolderssgb_comments["English"] = array();
	$pageTitlessgb_comments["English"] = array();
	$fieldLabelssgb_comments["English"]["id"] = "Id";
	$fieldToolTipssgb_comments["English"]["id"] = "";
	$placeHolderssgb_comments["English"]["id"] = "";
	$fieldLabelssgb_comments["English"]["user_id"] = "User Id";
	$fieldToolTipssgb_comments["English"]["user_id"] = "";
	$placeHolderssgb_comments["English"]["user_id"] = "";
	$fieldLabelssgb_comments["English"]["comment"] = "Message";
	$fieldToolTipssgb_comments["English"]["comment"] = "";
	$placeHolderssgb_comments["English"]["comment"] = "Your comment";
	$fieldLabelssgb_comments["English"]["created_date"] = "Created Date";
	$fieldToolTipssgb_comments["English"]["created_date"] = "";
	$placeHolderssgb_comments["English"]["created_date"] = "";
	$fieldLabelssgb_comments["English"]["s_id"] = "S Id";
	$fieldToolTipssgb_comments["English"]["s_id"] = "";
	$placeHolderssgb_comments["English"]["s_id"] = "";
	$fieldLabelssgb_comments["English"]["status"] = "Status";
	$fieldToolTipssgb_comments["English"]["status"] = "";
	$placeHolderssgb_comments["English"]["status"] = "";
	$fieldLabelssgb_comments["English"]["images"] = "Images";
	$fieldToolTipssgb_comments["English"]["images"] = "";
	$placeHolderssgb_comments["English"]["images"] = "";
	$fieldLabelssgb_comments["English"]["admin_buttons"] = "Admin Buttons";
	$fieldToolTipssgb_comments["English"]["admin_buttons"] = "";
	$placeHolderssgb_comments["English"]["admin_buttons"] = "";
	$fieldLabelssgb_comments["English"]["name"] = "Name";
	$fieldToolTipssgb_comments["English"]["name"] = "";
	$placeHolderssgb_comments["English"]["name"] = "";
	$fieldLabelssgb_comments["English"]["email"] = "Email";
	$fieldToolTipssgb_comments["English"]["email"] = "";
	$placeHolderssgb_comments["English"]["email"] = "";
	$fieldLabelssgb_comments["English"]["user_buttons"] = "User Buttons";
	$fieldToolTipssgb_comments["English"]["user_buttons"] = "";
	$placeHolderssgb_comments["English"]["user_buttons"] = "";
	$fieldLabelssgb_comments["English"]["merged_info"] = "Merged Info";
	$fieldToolTipssgb_comments["English"]["merged_info"] = "";
	$placeHolderssgb_comments["English"]["merged_info"] = "";
	if (count($fieldToolTipssgb_comments["English"]))
		$tdatasgb_comments[".isUseToolTips"] = true;
}


	$tdatasgb_comments[".NCSearch"] = true;



$tdatasgb_comments[".shortTableName"] = "sgb_comments";
$tdatasgb_comments[".nSecOptions"] = 0;

$tdatasgb_comments[".mainTableOwnerID"] = "";
$tdatasgb_comments[".entityType"] = 0;
$tdatasgb_comments[".connId"] = "project_at_localhost";


$tdatasgb_comments[".strOriginalTableName"] = "sgb_comments";

	



$tdatasgb_comments[".showAddInPopup"] = false;

$tdatasgb_comments[".showEditInPopup"] = false;

$tdatasgb_comments[".showViewInPopup"] = false;

$tdatasgb_comments[".listAjax"] = false;
//	temporary
//$tdatasgb_comments[".listAjax"] = false;

	$tdatasgb_comments[".audit"] = false;

	$tdatasgb_comments[".locking"] = false;


$pages = $tdatasgb_comments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_comments[".edit"] = true;
	$tdatasgb_comments[".afterEditAction"] = 1;
	$tdatasgb_comments[".closePopupAfterEdit"] = 1;
	$tdatasgb_comments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_comments[".add"] = true;
$tdatasgb_comments[".afterAddAction"] = 1;
$tdatasgb_comments[".closePopupAfterAdd"] = 1;
$tdatasgb_comments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_comments[".list"] = true;
}



$tdatasgb_comments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_comments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_comments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_comments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_comments[".printFriendly"] = true;
}



$tdatasgb_comments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_comments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_comments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_comments[".isUseAjaxSuggest"] = true;



																		

$tdatasgb_comments[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_comments[".buttonsAdded"] = false;

$tdatasgb_comments[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_comments[".isUseTimeForSearch"] = false;


$tdatasgb_comments[".badgeColor"] = "d2af80";


$tdatasgb_comments[".allSearchFields"] = array();
$tdatasgb_comments[".filterFields"] = array();
$tdatasgb_comments[".requiredSearchFields"] = array();

$tdatasgb_comments[".googleLikeFields"] = array();
$tdatasgb_comments[".googleLikeFields"][] = "id";
$tdatasgb_comments[".googleLikeFields"][] = "user_id";
$tdatasgb_comments[".googleLikeFields"][] = "comment";
$tdatasgb_comments[".googleLikeFields"][] = "created_date";
$tdatasgb_comments[".googleLikeFields"][] = "s_id";
$tdatasgb_comments[".googleLikeFields"][] = "status";
$tdatasgb_comments[".googleLikeFields"][] = "images";
$tdatasgb_comments[".googleLikeFields"][] = "admin_buttons";
$tdatasgb_comments[".googleLikeFields"][] = "user_buttons";
$tdatasgb_comments[".googleLikeFields"][] = "name";
$tdatasgb_comments[".googleLikeFields"][] = "email";
$tdatasgb_comments[".googleLikeFields"][] = "merged_info";



$tdatasgb_comments[".tableType"] = "list";

$tdatasgb_comments[".printerPageOrientation"] = 0;
$tdatasgb_comments[".nPrinterPageScale"] = 100;

$tdatasgb_comments[".nPrinterSplitRecords"] = 40;

$tdatasgb_comments[".geocodingEnabled"] = false;










$tdatasgb_comments[".pageSize"] = 20;

$tdatasgb_comments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_comments[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_comments[".orderindexes"] = array();


$tdatasgb_comments[".sqlHead"] = "SELECT id,  user_id,  `comment`,  created_date,  s_id,  status,  images,  id AS admin_buttons,  id AS user_buttons,  name,  email,  merged_info";
$tdatasgb_comments[".sqlFrom"] = "FROM sgb_comments";
$tdatasgb_comments[".sqlWhereExpr"] = "";
$tdatasgb_comments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_comments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_comments[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_comments[".highlightSearchResults"] = true;

$tableKeyssgb_comments = array();
$tableKeyssgb_comments[] = "id";
$tdatasgb_comments[".Keys"] = $tableKeyssgb_comments;


$tdatasgb_comments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","id");
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


	$tdatasgb_comments["id"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "id";
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","user_id");
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


	$tdatasgb_comments["user_id"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "user_id";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comment";

		$fdata["sourceSingle"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasgb_comments["comment"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "comment";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","created_date");
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


	$tdatasgb_comments["created_date"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "created_date";
//	s_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s_id";
	$fdata["GoodName"] = "s_id";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","s_id");
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


	$tdatasgb_comments["s_id"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "s_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","status");
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


	$tdatasgb_comments["status"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "status";
//	images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "images";
	$fdata["GoodName"] = "images";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","images");
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


	$tdatasgb_comments["images"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "images";
//	admin_buttons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "admin_buttons";
	$fdata["GoodName"] = "admin_buttons";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","admin_buttons");
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


	$tdatasgb_comments["admin_buttons"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "admin_buttons";
//	user_buttons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "user_buttons";
	$fdata["GoodName"] = "user_buttons";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","user_buttons");
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


	$tdatasgb_comments["user_buttons"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "user_buttons";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","name");
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


	$tdatasgb_comments["name"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","email");
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


	$tdatasgb_comments["email"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "email";
//	merged_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "merged_info";
	$fdata["GoodName"] = "merged_info";
	$fdata["ownerTable"] = "sgb_comments";
	$fdata["Label"] = GetFieldLabel("sgb_comments","merged_info");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "merged_info";

		$fdata["sourceSingle"] = "merged_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "merged_info";

	
	
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


	$tdatasgb_comments["merged_info"] = $fdata;
		$tdatasgb_comments[".searchableFields"][] = "merged_info";


$tables_data["sgb_comments"]=&$tdatasgb_comments;
$field_labels["sgb_comments"] = &$fieldLabelssgb_comments;
$fieldToolTips["sgb_comments"] = &$fieldToolTipssgb_comments;
$placeHolders["sgb_comments"] = &$placeHolderssgb_comments;
$page_titles["sgb_comments"] = &$pageTitlessgb_comments;


changeTextControlsToDate( "sgb_comments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_comments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_comments"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sgb_suggestions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sgb_suggestions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sgb_suggestions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sgb_comments"][0] = $masterParams;
				$masterTablesData["sgb_comments"][0]["masterKeys"] = array();
	$masterTablesData["sgb_comments"][0]["masterKeys"][]="id";
				$masterTablesData["sgb_comments"][0]["detailKeys"] = array();
	$masterTablesData["sgb_comments"][0]["detailKeys"][]="s_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_comments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  user_id,  `comment`,  created_date,  s_id,  status,  images,  id AS admin_buttons,  id AS user_buttons,  name,  email,  merged_info";
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
	"m_srcTableName" => "sgb_comments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_comments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "sgb_comments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto10["m_sql"] = "`comment`";
$proto10["m_srcTableName"] = "sgb_comments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto12["m_sql"] = "created_date";
$proto12["m_srcTableName"] = "sgb_comments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "s_id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto14["m_sql"] = "s_id";
$proto14["m_srcTableName"] = "sgb_comments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "sgb_comments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "images",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto18["m_sql"] = "images";
$proto18["m_srcTableName"] = "sgb_comments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto20["m_sql"] = "id";
$proto20["m_srcTableName"] = "sgb_comments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "admin_buttons";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto22["m_sql"] = "id";
$proto22["m_srcTableName"] = "sgb_comments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "user_buttons";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto24["m_sql"] = "name";
$proto24["m_srcTableName"] = "sgb_comments";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto26["m_sql"] = "email";
$proto26["m_srcTableName"] = "sgb_comments";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "merged_info",
	"m_strTable" => "sgb_comments",
	"m_srcTableName" => "sgb_comments"
));

$proto28["m_sql"] = "merged_info";
$proto28["m_srcTableName"] = "sgb_comments";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "sgb_comments";
$proto31["m_srcTableName"] = "sgb_comments";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "user_id";
$proto31["m_columns"][] = "comment";
$proto31["m_columns"][] = "created_date";
$proto31["m_columns"][] = "s_id";
$proto31["m_columns"][] = "status";
$proto31["m_columns"][] = "images";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "ip";
$proto31["m_columns"][] = "merged_info";
$proto31["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "sgb_comments";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "sgb_comments";
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
$proto0["m_srcTableName"]="sgb_comments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_comments = createSqlQuery_sgb_comments();


	
		;

												

$tdatasgb_comments[".sqlquery"] = $queryData_sgb_comments;



include_once(getabspath("include/sgb_comments_events.php"));
$tdatasgb_comments[".hasEvents"] = true;

$query = &$queryData_sgb_comments;
$table = "sgb_comments";
// here goes EVENT_INIT_TABLE event
if(Security::isLoggedIn() && Security::getUserGroup() ==="admin"){

}
else{
	if(isset($_COOKIE["sgb_gsid"]))
		$query->addWhere(addFieldWrappers("status")."='approved' or user_id=".$_COOKIE["sgb_gsid"]);
	else
		$query->addWhere(addFieldWrappers("status")."='approved'");
}



;
unset($query);
?>