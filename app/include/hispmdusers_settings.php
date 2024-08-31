<?php
$tdatahispmdusers = array();
$tdatahispmdusers[".searchableFields"] = array();
$tdatahispmdusers[".ShortName"] = "hispmdusers";
$tdatahispmdusers[".OwnerID"] = "";
$tdatahispmdusers[".OriginalTable"] = "public.hispmdusers";


$tdatahispmdusers[".pagesByType"] = my_json_decode( "{\"list\":[\"list1\"],\"search\":[\"search\"]}" );
$tdatahispmdusers[".originalPagesByType"] = $tdatahispmdusers[".pagesByType"];
$tdatahispmdusers[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list1\"],\"search\":[\"search\"]}" ) );
$tdatahispmdusers[".originalPages"] = $tdatahispmdusers[".pages"];
$tdatahispmdusers[".defaultPages"] = my_json_decode( "{\"list\":\"list1\",\"search\":\"search\"}" );
$tdatahispmdusers[".originalDefaultPages"] = $tdatahispmdusers[".defaultPages"];

//	field labels
$fieldLabelshispmdusers = array();
$fieldToolTipshispmdusers = array();
$pageTitleshispmdusers = array();
$placeHoldershispmdusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmdusers["English"] = array();
	$fieldToolTipshispmdusers["English"] = array();
	$placeHoldershispmdusers["English"] = array();
	$pageTitleshispmdusers["English"] = array();
	$fieldLabelshispmdusers["English"]["ID"] = "ID";
	$fieldToolTipshispmdusers["English"]["ID"] = "";
	$placeHoldershispmdusers["English"]["ID"] = "";
	$fieldLabelshispmdusers["English"]["username"] = "Username";
	$fieldToolTipshispmdusers["English"]["username"] = "";
	$placeHoldershispmdusers["English"]["username"] = "";
	$fieldLabelshispmdusers["English"]["password"] = "Password";
	$fieldToolTipshispmdusers["English"]["password"] = "";
	$placeHoldershispmdusers["English"]["password"] = "";
	$fieldLabelshispmdusers["English"]["email"] = "Email";
	$fieldToolTipshispmdusers["English"]["email"] = "";
	$placeHoldershispmdusers["English"]["email"] = "";
	$fieldLabelshispmdusers["English"]["fullname"] = "Full Name";
	$fieldToolTipshispmdusers["English"]["fullname"] = "";
	$placeHoldershispmdusers["English"]["fullname"] = "";
	$fieldLabelshispmdusers["English"]["groupid"] = "Groupid";
	$fieldToolTipshispmdusers["English"]["groupid"] = "";
	$placeHoldershispmdusers["English"]["groupid"] = "";
	$fieldLabelshispmdusers["English"]["active"] = "Active";
	$fieldToolTipshispmdusers["English"]["active"] = "";
	$placeHoldershispmdusers["English"]["active"] = "";
	$fieldLabelshispmdusers["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipshispmdusers["English"]["ext_security_id"] = "";
	$placeHoldershispmdusers["English"]["ext_security_id"] = "";
	$fieldLabelshispmdusers["English"]["userpic"] = "Userpic";
	$fieldToolTipshispmdusers["English"]["userpic"] = "";
	$placeHoldershispmdusers["English"]["userpic"] = "";
	$fieldLabelshispmdusers["English"]["phone_number"] = "Phone Number";
	$fieldToolTipshispmdusers["English"]["phone_number"] = "";
	$placeHoldershispmdusers["English"]["phone_number"] = "";
	$fieldLabelshispmdusers["English"]["first_name"] = "First Name";
	$fieldToolTipshispmdusers["English"]["first_name"] = "";
	$placeHoldershispmdusers["English"]["first_name"] = "";
	$fieldLabelshispmdusers["English"]["middle_name"] = "Middle Name";
	$fieldToolTipshispmdusers["English"]["middle_name"] = "";
	$placeHoldershispmdusers["English"]["middle_name"] = "";
	$fieldLabelshispmdusers["English"]["last_name"] = "Last Name";
	$fieldToolTipshispmdusers["English"]["last_name"] = "";
	$placeHoldershispmdusers["English"]["last_name"] = "";
	$fieldLabelshispmdusers["English"]["designation"] = "Designation";
	$fieldToolTipshispmdusers["English"]["designation"] = "";
	$placeHoldershispmdusers["English"]["designation"] = "";
	$fieldLabelshispmdusers["English"]["organisation_name"] = "Organisation Name";
	$fieldToolTipshispmdusers["English"]["organisation_name"] = "";
	$placeHoldershispmdusers["English"]["organisation_name"] = "";
	$fieldLabelshispmdusers["English"]["department"] = "Department";
	$fieldToolTipshispmdusers["English"]["department"] = "";
	$placeHoldershispmdusers["English"]["department"] = "";
	if (count($fieldToolTipshispmdusers["English"]))
		$tdatahispmdusers[".isUseToolTips"] = true;
}


	$tdatahispmdusers[".NCSearch"] = true;



$tdatahispmdusers[".shortTableName"] = "hispmdusers";
$tdatahispmdusers[".nSecOptions"] = 0;

$tdatahispmdusers[".mainTableOwnerID"] = "";
$tdatahispmdusers[".entityType"] = 0;
$tdatahispmdusers[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmdusers[".strOriginalTableName"] = "public.hispmdusers";

	



$tdatahispmdusers[".showAddInPopup"] = false;

$tdatahispmdusers[".showEditInPopup"] = false;

$tdatahispmdusers[".showViewInPopup"] = false;

$tdatahispmdusers[".listAjax"] = false;
//	temporary
//$tdatahispmdusers[".listAjax"] = false;

	$tdatahispmdusers[".audit"] = true;

	$tdatahispmdusers[".locking"] = false;


$pages = $tdatahispmdusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmdusers[".edit"] = true;
	$tdatahispmdusers[".afterEditAction"] = 1;
	$tdatahispmdusers[".closePopupAfterEdit"] = 1;
	$tdatahispmdusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmdusers[".add"] = true;
$tdatahispmdusers[".afterAddAction"] = 1;
$tdatahispmdusers[".closePopupAfterAdd"] = 1;
$tdatahispmdusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmdusers[".list"] = true;
}



$tdatahispmdusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmdusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmdusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmdusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmdusers[".printFriendly"] = true;
}



$tdatahispmdusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmdusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmdusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmdusers[".isUseAjaxSuggest"] = true;





$tdatahispmdusers[".ajaxCodeSnippetAdded"] = false;

$tdatahispmdusers[".buttonsAdded"] = false;

$tdatahispmdusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmdusers[".isUseTimeForSearch"] = false;


$tdatahispmdusers[".badgeColor"] = "00ffff";


$tdatahispmdusers[".allSearchFields"] = array();
$tdatahispmdusers[".filterFields"] = array();
$tdatahispmdusers[".requiredSearchFields"] = array();

$tdatahispmdusers[".googleLikeFields"] = array();
$tdatahispmdusers[".googleLikeFields"][] = "ID";
$tdatahispmdusers[".googleLikeFields"][] = "username";
$tdatahispmdusers[".googleLikeFields"][] = "password";
$tdatahispmdusers[".googleLikeFields"][] = "email";
$tdatahispmdusers[".googleLikeFields"][] = "fullname";
$tdatahispmdusers[".googleLikeFields"][] = "groupid";
$tdatahispmdusers[".googleLikeFields"][] = "active";
$tdatahispmdusers[".googleLikeFields"][] = "ext_security_id";
$tdatahispmdusers[".googleLikeFields"][] = "phone_number";
$tdatahispmdusers[".googleLikeFields"][] = "first_name";
$tdatahispmdusers[".googleLikeFields"][] = "middle_name";
$tdatahispmdusers[".googleLikeFields"][] = "last_name";
$tdatahispmdusers[".googleLikeFields"][] = "designation";
$tdatahispmdusers[".googleLikeFields"][] = "organisation_name";
$tdatahispmdusers[".googleLikeFields"][] = "department";



$tdatahispmdusers[".tableType"] = "list";

$tdatahispmdusers[".printerPageOrientation"] = 0;
$tdatahispmdusers[".nPrinterPageScale"] = 100;

$tdatahispmdusers[".nPrinterSplitRecords"] = 40;

$tdatahispmdusers[".geocodingEnabled"] = false;










$tdatahispmdusers[".pageSize"] = 20;

$tdatahispmdusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmdusers[".strOrderBy"] = $tstrOrderBy;

$tdatahispmdusers[".orderindexes"] = array();


$tdatahispmdusers[".sqlHead"] = "SELECT \"ID\",      username,      password,      email,      -- Concatenate first_name, middle_name, and last_name into fullname      CONCAT(COALESCE(first_name, ''), ' ', COALESCE(middle_name, ''), ' ', COALESCE(last_name, '')) AS fullname,      groupid,      active,      ext_security_id,      userpic,      phone_number,      first_name,      middle_name,      last_name,      designation,      organisation_name,      department";
$tdatahispmdusers[".sqlFrom"] = "FROM \"public\".hispmdusers";
$tdatahispmdusers[".sqlWhereExpr"] = "";
$tdatahispmdusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmdusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmdusers[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmdusers[".highlightSearchResults"] = true;

$tableKeyshispmdusers = array();
$tableKeyshispmdusers[] = "ID";
$tdatahispmdusers[".Keys"] = $tableKeyshispmdusers;


$tdatahispmdusers[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatahispmdusers["ID"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","username");
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatahispmdusers["username"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","password");
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


	$tdatahispmdusers["password"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","email");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatahispmdusers["email"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","fullname");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(COALESCE(first_name, ''), ' ', COALESCE(middle_name, ''), ' ', COALESCE(last_name, ''))";

	
	
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


	$tdatahispmdusers["fullname"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","groupid");
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


	$tdatahispmdusers["groupid"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","active");
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


	$tdatahispmdusers["active"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","ext_security_id");
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


	$tdatahispmdusers["ext_security_id"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "ext_security_id";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["isSQLExpression"] = true;
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] = ".jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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


	$tdatahispmdusers["userpic"] = $fdata;
	//	phone_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone_number";
	$fdata["GoodName"] = "phone_number";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","phone_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone_number";

		$fdata["sourceSingle"] = "phone_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_number";

	
	
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

	$edata = array("EditFormat" => "Telephone");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "000-000-0000";

	



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


	$tdatahispmdusers["phone_number"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "phone_number";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

		$fdata["sourceSingle"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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


	$tdatahispmdusers["first_name"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "first_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","middle_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "middle_name";

		$fdata["sourceSingle"] = "middle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "middle_name";

	
	
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


	$tdatahispmdusers["middle_name"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "middle_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

		$fdata["sourceSingle"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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


	$tdatahispmdusers["last_name"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "last_name";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","designation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "designation";

		$fdata["sourceSingle"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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
	$edata["LookupTable"] = "public.hispmd_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";

	

	
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


	$tdatahispmdusers["designation"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "designation";
//	organisation_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "organisation_name";
	$fdata["GoodName"] = "organisation_name";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","organisation_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_name";

		$fdata["sourceSingle"] = "organisation_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_name";

	
	
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
	$edata["LookupTable"] = "public.hispmd_organisations";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "orgid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "organisation_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdatahispmdusers["organisation_name"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "organisation_name";
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "public.hispmdusers";
	$fdata["Label"] = GetFieldLabel("public_hispmdusers","department");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "department";

		$fdata["sourceSingle"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department";

	
	
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


	$tdatahispmdusers["department"] = $fdata;
		$tdatahispmdusers[".searchableFields"][] = "department";


$tables_data["public.hispmdusers"]=&$tdatahispmdusers;
$field_labels["public_hispmdusers"] = &$fieldLabelshispmdusers;
$fieldToolTips["public_hispmdusers"] = &$fieldToolTipshispmdusers;
$placeHolders["public_hispmdusers"] = &$placeHoldershispmdusers;
$page_titles["public_hispmdusers"] = &$pageTitleshispmdusers;


changeTextControlsToDate( "public.hispmdusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispmdusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispmdusers"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.hispmd_organisations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.hispmd_organisations";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hispmd_organisations";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.hispmdusers"][0] = $masterParams;
				$masterTablesData["public.hispmdusers"][0]["masterKeys"] = array();
	$masterTablesData["public.hispmdusers"][0]["masterKeys"][]="orgid";
				$masterTablesData["public.hispmdusers"][0]["masterKeys"][]="organisation_name";
				$masterTablesData["public.hispmdusers"][0]["detailKeys"] = array();
	$masterTablesData["public.hispmdusers"][0]["detailKeys"][]="organisation_name";
				$masterTablesData["public.hispmdusers"][0]["detailKeys"][]="organisation_name";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmdusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",      username,      password,      email,      -- Concatenate first_name, middle_name, and last_name into fullname      CONCAT(COALESCE(first_name, ''), ' ', COALESCE(middle_name, ''), ' ', COALESCE(last_name, '')) AS fullname,      groupid,      active,      ext_security_id,      userpic,      phone_number,      first_name,      middle_name,      last_name,      designation,      organisation_name,      department";
$proto0["m_strFrom"] = "FROM \"public\".hispmdusers";
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
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.hispmdusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "public.hispmdusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "public.hispmdusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.hispmdusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(first_name, '')"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(middle_name, '')"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(last_name, '')"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "CONCAT(COALESCE(first_name, ''), ' ', COALESCE(middle_name, ''), ' ', COALESCE(last_name, ''))";
$proto14["m_srcTableName"] = "public.hispmdusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "fullname";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto21["m_sql"] = "groupid";
$proto21["m_srcTableName"] = "public.hispmdusers";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto23["m_sql"] = "active";
$proto23["m_srcTableName"] = "public.hispmdusers";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto25["m_sql"] = "ext_security_id";
$proto25["m_srcTableName"] = "public.hispmdusers";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto27["m_sql"] = "userpic";
$proto27["m_srcTableName"] = "public.hispmdusers";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_number",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto29["m_sql"] = "phone_number";
$proto29["m_srcTableName"] = "public.hispmdusers";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto31["m_sql"] = "first_name";
$proto31["m_srcTableName"] = "public.hispmdusers";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto33["m_sql"] = "middle_name";
$proto33["m_srcTableName"] = "public.hispmdusers";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto35["m_sql"] = "last_name";
$proto35["m_srcTableName"] = "public.hispmdusers";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto37["m_sql"] = "designation";
$proto37["m_srcTableName"] = "public.hispmdusers";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_name",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto39["m_sql"] = "organisation_name";
$proto39["m_srcTableName"] = "public.hispmdusers";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "public.hispmdusers",
	"m_srcTableName" => "public.hispmdusers"
));

$proto41["m_sql"] = "department";
$proto41["m_srcTableName"] = "public.hispmdusers";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "public.hispmdusers";
$proto44["m_srcTableName"] = "public.hispmdusers";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "ID";
$proto44["m_columns"][] = "username";
$proto44["m_columns"][] = "password";
$proto44["m_columns"][] = "email";
$proto44["m_columns"][] = "fullname";
$proto44["m_columns"][] = "groupid";
$proto44["m_columns"][] = "active";
$proto44["m_columns"][] = "ext_security_id";
$proto44["m_columns"][] = "userpic";
$proto44["m_columns"][] = "phone_number";
$proto44["m_columns"][] = "first_name";
$proto44["m_columns"][] = "middle_name";
$proto44["m_columns"][] = "last_name";
$proto44["m_columns"][] = "designation";
$proto44["m_columns"][] = "organisation_name";
$proto44["m_columns"][] = "department";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "\"public\".hispmdusers";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "public.hispmdusers";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.hispmdusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmdusers = createSqlQuery_hispmdusers();


	
																												;

																

$tdatahispmdusers[".sqlquery"] = $queryData_hispmdusers;



$tdatahispmdusers[".hasEvents"] = false;

?>