<?php
$tdatahispmd_users = array();
$tdatahispmd_users[".searchableFields"] = array();
$tdatahispmd_users[".ShortName"] = "hispmd_users";
$tdatahispmd_users[".OwnerID"] = "";
$tdatahispmd_users[".OriginalTable"] = "hispmd_users";


$tdatahispmd_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatahispmd_users[".originalPagesByType"] = $tdatahispmd_users[".pagesByType"];
$tdatahispmd_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatahispmd_users[".originalPages"] = $tdatahispmd_users[".pages"];
$tdatahispmd_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatahispmd_users[".originalDefaultPages"] = $tdatahispmd_users[".defaultPages"];

//	field labels
$fieldLabelshispmd_users = array();
$fieldToolTipshispmd_users = array();
$pageTitleshispmd_users = array();
$placeHoldershispmd_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_users["English"] = array();
	$fieldToolTipshispmd_users["English"] = array();
	$placeHoldershispmd_users["English"] = array();
	$pageTitleshispmd_users["English"] = array();
	$fieldLabelshispmd_users["English"]["ID"] = "ID";
	$fieldToolTipshispmd_users["English"]["ID"] = "";
	$placeHoldershispmd_users["English"]["ID"] = "";
	$fieldLabelshispmd_users["English"]["username"] = "Username";
	$fieldToolTipshispmd_users["English"]["username"] = "";
	$placeHoldershispmd_users["English"]["username"] = "";
	$fieldLabelshispmd_users["English"]["password"] = "Password";
	$fieldToolTipshispmd_users["English"]["password"] = "";
	$placeHoldershispmd_users["English"]["password"] = "";
	$fieldLabelshispmd_users["English"]["email"] = "Email";
	$fieldToolTipshispmd_users["English"]["email"] = "";
	$placeHoldershispmd_users["English"]["email"] = "";
	$fieldLabelshispmd_users["English"]["fullname"] = "Fullname";
	$fieldToolTipshispmd_users["English"]["fullname"] = "";
	$placeHoldershispmd_users["English"]["fullname"] = "";
	$fieldLabelshispmd_users["English"]["groupid"] = "Groupid";
	$fieldToolTipshispmd_users["English"]["groupid"] = "";
	$placeHoldershispmd_users["English"]["groupid"] = "";
	$fieldLabelshispmd_users["English"]["active"] = "Active";
	$fieldToolTipshispmd_users["English"]["active"] = "";
	$placeHoldershispmd_users["English"]["active"] = "";
	$fieldLabelshispmd_users["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipshispmd_users["English"]["ext_security_id"] = "";
	$placeHoldershispmd_users["English"]["ext_security_id"] = "";
	$fieldLabelshispmd_users["English"]["userpic"] = "Userpic";
	$fieldToolTipshispmd_users["English"]["userpic"] = "";
	$placeHoldershispmd_users["English"]["userpic"] = "";
	if (count($fieldToolTipshispmd_users["English"]))
		$tdatahispmd_users[".isUseToolTips"] = true;
}


	$tdatahispmd_users[".NCSearch"] = true;



$tdatahispmd_users[".shortTableName"] = "hispmd_users";
$tdatahispmd_users[".nSecOptions"] = 0;

$tdatahispmd_users[".mainTableOwnerID"] = "";
$tdatahispmd_users[".entityType"] = 0;
$tdatahispmd_users[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_users[".strOriginalTableName"] = "hispmd_users";

	



$tdatahispmd_users[".showAddInPopup"] = false;

$tdatahispmd_users[".showEditInPopup"] = false;

$tdatahispmd_users[".showViewInPopup"] = false;

$tdatahispmd_users[".listAjax"] = false;
//	temporary
//$tdatahispmd_users[".listAjax"] = false;

	$tdatahispmd_users[".audit"] = false;

	$tdatahispmd_users[".locking"] = false;


$pages = $tdatahispmd_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_users[".edit"] = true;
	$tdatahispmd_users[".afterEditAction"] = 1;
	$tdatahispmd_users[".closePopupAfterEdit"] = 1;
	$tdatahispmd_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_users[".add"] = true;
$tdatahispmd_users[".afterAddAction"] = 1;
$tdatahispmd_users[".closePopupAfterAdd"] = 1;
$tdatahispmd_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_users[".list"] = true;
}



$tdatahispmd_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_users[".printFriendly"] = true;
}



$tdatahispmd_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_users[".isUseAjaxSuggest"] = true;





$tdatahispmd_users[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_users[".buttonsAdded"] = false;

$tdatahispmd_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_users[".isUseTimeForSearch"] = false;


$tdatahispmd_users[".badgeColor"] = "EDCA00";


$tdatahispmd_users[".allSearchFields"] = array();
$tdatahispmd_users[".filterFields"] = array();
$tdatahispmd_users[".requiredSearchFields"] = array();

$tdatahispmd_users[".googleLikeFields"] = array();
$tdatahispmd_users[".googleLikeFields"][] = "ID";
$tdatahispmd_users[".googleLikeFields"][] = "username";
$tdatahispmd_users[".googleLikeFields"][] = "password";
$tdatahispmd_users[".googleLikeFields"][] = "email";
$tdatahispmd_users[".googleLikeFields"][] = "fullname";
$tdatahispmd_users[".googleLikeFields"][] = "groupid";
$tdatahispmd_users[".googleLikeFields"][] = "active";
$tdatahispmd_users[".googleLikeFields"][] = "ext_security_id";



$tdatahispmd_users[".tableType"] = "list";

$tdatahispmd_users[".printerPageOrientation"] = 0;
$tdatahispmd_users[".nPrinterPageScale"] = 100;

$tdatahispmd_users[".nPrinterSplitRecords"] = 40;

$tdatahispmd_users[".geocodingEnabled"] = false;










$tdatahispmd_users[".pageSize"] = 20;

$tdatahispmd_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_users[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_users[".orderindexes"] = array();


$tdatahispmd_users[".sqlHead"] = "SELECT ID,  username,  password,  email,  fullname,  groupid,  active,  ext_security_id,  userpic";
$tdatahispmd_users[".sqlFrom"] = "FROM hispmd_users";
$tdatahispmd_users[".sqlWhereExpr"] = "";
$tdatahispmd_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_users[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_users[".highlightSearchResults"] = true;

$tableKeyshispmd_users = array();
$tableKeyshispmd_users[] = "ID";
$tdatahispmd_users[".Keys"] = $tableKeyshispmd_users;


$tdatahispmd_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatahispmd_users["ID"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahispmd_users["username"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","password");
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahispmd_users["password"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","email");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahispmd_users["email"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","fullname");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahispmd_users["fullname"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahispmd_users["groupid"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatahispmd_users["active"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatahispmd_users["ext_security_id"] = $fdata;
		$tdatahispmd_users[".searchableFields"][] = "ext_security_id";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "hispmd_users";
	$fdata["Label"] = GetFieldLabel("hispmd_users","userpic");
	$fdata["FieldType"] = 205;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatahispmd_users["userpic"] = $fdata;
	

$tables_data["hispmd_users"]=&$tdatahispmd_users;
$field_labels["hispmd_users"] = &$fieldLabelshispmd_users;
$fieldToolTips["hispmd_users"] = &$fieldToolTipshispmd_users;
$placeHolders["hispmd_users"] = &$placeHoldershispmd_users;
$page_titles["hispmd_users"] = &$pageTitleshispmd_users;


changeTextControlsToDate( "hispmd_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hispmd_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hispmd_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  username,  password,  email,  fullname,  groupid,  active,  ext_security_id,  userpic";
$proto0["m_strFrom"] = "FROM hispmd_users";
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
	"m_strName" => "ID",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "hispmd_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "hispmd_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "hispmd_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "hispmd_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "hispmd_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "hispmd_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "hispmd_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "hispmd_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "hispmd_users",
	"m_srcTableName" => "hispmd_users"
));

$proto22["m_sql"] = "userpic";
$proto22["m_srcTableName"] = "hispmd_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "hispmd_users";
$proto25["m_srcTableName"] = "hispmd_users";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "username";
$proto25["m_columns"][] = "password";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "fullname";
$proto25["m_columns"][] = "groupid";
$proto25["m_columns"][] = "active";
$proto25["m_columns"][] = "ext_security_id";
$proto25["m_columns"][] = "userpic";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "hispmd_users";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "hispmd_users";
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
$proto0["m_srcTableName"]="hispmd_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_users = createSqlQuery_hispmd_users();


	
																										;

									

$tdatahispmd_users[".sqlquery"] = $queryData_hispmd_users;



$tdatahispmd_users[".hasEvents"] = false;

?>