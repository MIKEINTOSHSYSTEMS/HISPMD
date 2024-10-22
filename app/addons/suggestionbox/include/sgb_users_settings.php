<?php
$tdatasgb_users = array();
$tdatasgb_users[".searchableFields"] = array();
$tdatasgb_users[".ShortName"] = "sgb_users";
$tdatasgb_users[".OwnerID"] = "";
$tdatasgb_users[".OriginalTable"] = "sgb_users";


$tdatasgb_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasgb_users[".originalPagesByType"] = $tdatasgb_users[".pagesByType"];
$tdatasgb_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasgb_users[".originalPages"] = $tdatasgb_users[".pages"];
$tdatasgb_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasgb_users[".originalDefaultPages"] = $tdatasgb_users[".defaultPages"];

//	field labels
$fieldLabelssgb_users = array();
$fieldToolTipssgb_users = array();
$pageTitlessgb_users = array();
$placeHolderssgb_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_users["English"] = array();
	$fieldToolTipssgb_users["English"] = array();
	$placeHolderssgb_users["English"] = array();
	$pageTitlessgb_users["English"] = array();
	$fieldLabelssgb_users["English"]["id"] = "Id";
	$fieldToolTipssgb_users["English"]["id"] = "";
	$placeHolderssgb_users["English"]["id"] = "";
	$fieldLabelssgb_users["English"]["email"] = "Email";
	$fieldToolTipssgb_users["English"]["email"] = "";
	$placeHolderssgb_users["English"]["email"] = "";
	$fieldLabelssgb_users["English"]["password"] = "Password";
	$fieldToolTipssgb_users["English"]["password"] = "";
	$placeHolderssgb_users["English"]["password"] = "";
	$fieldLabelssgb_users["English"]["fullname"] = "Fullname";
	$fieldToolTipssgb_users["English"]["fullname"] = "";
	$placeHolderssgb_users["English"]["fullname"] = "";
	$fieldLabelssgb_users["English"]["usertype"] = "Usertype";
	$fieldToolTipssgb_users["English"]["usertype"] = "";
	$placeHolderssgb_users["English"]["usertype"] = "";
	$fieldLabelssgb_users["English"]["reset_token"] = "Reset Token";
	$fieldToolTipssgb_users["English"]["reset_token"] = "";
	$placeHolderssgb_users["English"]["reset_token"] = "";
	$fieldLabelssgb_users["English"]["reset_date"] = "Reset Date";
	$fieldToolTipssgb_users["English"]["reset_date"] = "";
	$placeHolderssgb_users["English"]["reset_date"] = "";
	if (count($fieldToolTipssgb_users["English"]))
		$tdatasgb_users[".isUseToolTips"] = true;
}


	$tdatasgb_users[".NCSearch"] = true;



$tdatasgb_users[".shortTableName"] = "sgb_users";
$tdatasgb_users[".nSecOptions"] = 0;

$tdatasgb_users[".mainTableOwnerID"] = "";
$tdatasgb_users[".entityType"] = 0;
$tdatasgb_users[".connId"] = "project_at_localhost";


$tdatasgb_users[".strOriginalTableName"] = "sgb_users";

	



$tdatasgb_users[".showAddInPopup"] = false;

$tdatasgb_users[".showEditInPopup"] = false;

$tdatasgb_users[".showViewInPopup"] = false;

$tdatasgb_users[".listAjax"] = false;
//	temporary
//$tdatasgb_users[".listAjax"] = false;

	$tdatasgb_users[".audit"] = false;

	$tdatasgb_users[".locking"] = false;


$pages = $tdatasgb_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_users[".edit"] = true;
	$tdatasgb_users[".afterEditAction"] = 1;
	$tdatasgb_users[".closePopupAfterEdit"] = 1;
	$tdatasgb_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_users[".add"] = true;
$tdatasgb_users[".afterAddAction"] = 1;
$tdatasgb_users[".closePopupAfterAdd"] = 1;
$tdatasgb_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_users[".list"] = true;
}



$tdatasgb_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_users[".printFriendly"] = true;
}



$tdatasgb_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_users[".isUseAjaxSuggest"] = true;



									

$tdatasgb_users[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_users[".buttonsAdded"] = false;

$tdatasgb_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasgb_users[".isUseTimeForSearch"] = false;


$tdatasgb_users[".badgeColor"] = "778899";


$tdatasgb_users[".allSearchFields"] = array();
$tdatasgb_users[".filterFields"] = array();
$tdatasgb_users[".requiredSearchFields"] = array();

$tdatasgb_users[".googleLikeFields"] = array();
$tdatasgb_users[".googleLikeFields"][] = "id";
$tdatasgb_users[".googleLikeFields"][] = "email";
$tdatasgb_users[".googleLikeFields"][] = "password";
$tdatasgb_users[".googleLikeFields"][] = "fullname";
$tdatasgb_users[".googleLikeFields"][] = "usertype";



$tdatasgb_users[".tableType"] = "list";

$tdatasgb_users[".printerPageOrientation"] = 0;
$tdatasgb_users[".nPrinterPageScale"] = 100;

$tdatasgb_users[".nPrinterSplitRecords"] = 40;

$tdatasgb_users[".geocodingEnabled"] = false;










$tdatasgb_users[".pageSize"] = 20;

$tdatasgb_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_users[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_users[".orderindexes"] = array();


$tdatasgb_users[".sqlHead"] = "SELECT id,  	email,  	password,  	fullname,  	usertype,  	reset_token,  	reset_date";
$tdatasgb_users[".sqlFrom"] = "FROM sgb_users";
$tdatasgb_users[".sqlWhereExpr"] = "";
$tdatasgb_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_users[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_users[".highlightSearchResults"] = true;

$tableKeyssgb_users = array();
$tableKeyssgb_users[] = "id";
$tdatasgb_users[".Keys"] = $tableKeyssgb_users;


$tdatasgb_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","id");
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


	$tdatasgb_users["id"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","email");
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


	$tdatasgb_users["email"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "email";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatasgb_users["password"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "password";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatasgb_users["fullname"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "fullname";
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","usertype");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usertype";

		$fdata["sourceSingle"] = "usertype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usertype";

	
	
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


	$tdatasgb_users["usertype"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "usertype";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","reset_token");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatasgb_users["reset_token"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "sgb_users";
	$fdata["Label"] = GetFieldLabel("sgb_users","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatasgb_users["reset_date"] = $fdata;
		$tdatasgb_users[".searchableFields"][] = "reset_date";


$tables_data["sgb_users"]=&$tdatasgb_users;
$field_labels["sgb_users"] = &$fieldLabelssgb_users;
$fieldToolTips["sgb_users"] = &$fieldToolTipssgb_users;
$placeHolders["sgb_users"] = &$placeHolderssgb_users;
$page_titles["sgb_users"] = &$pageTitlessgb_users;


changeTextControlsToDate( "sgb_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	email,  	password,  	fullname,  	usertype,  	reset_token,  	reset_date";
$proto0["m_strFrom"] = "FROM sgb_users";
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
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto8["m_sql"] = "email";
$proto8["m_srcTableName"] = "sgb_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "sgb_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto12["m_sql"] = "fullname";
$proto12["m_srcTableName"] = "sgb_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto14["m_sql"] = "usertype";
$proto14["m_srcTableName"] = "sgb_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto16["m_sql"] = "reset_token";
$proto16["m_srcTableName"] = "sgb_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "sgb_users",
	"m_srcTableName" => "sgb_users"
));

$proto18["m_sql"] = "reset_date";
$proto18["m_srcTableName"] = "sgb_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "sgb_users";
$proto21["m_srcTableName"] = "sgb_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "usertype";
$proto21["m_columns"][] = "reset_token";
$proto21["m_columns"][] = "reset_date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "sgb_users";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "sgb_users";
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
$proto0["m_srcTableName"]="sgb_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_users = createSqlQuery_sgb_users();


	
		;

							

$tdatasgb_users[".sqlquery"] = $queryData_sgb_users;



include_once(getabspath("include/sgb_users_events.php"));
$tdatasgb_users[".hasEvents"] = true;

?>