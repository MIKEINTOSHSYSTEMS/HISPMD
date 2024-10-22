<?php
$tdatasgb_users_suggestions = array();
$tdatasgb_users_suggestions[".searchableFields"] = array();
$tdatasgb_users_suggestions[".ShortName"] = "sgb_users_suggestions";
$tdatasgb_users_suggestions[".OwnerID"] = "";
$tdatasgb_users_suggestions[".OriginalTable"] = "sgb_suggestions";


$tdatasgb_users_suggestions[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasgb_users_suggestions[".originalPagesByType"] = $tdatasgb_users_suggestions[".pagesByType"];
$tdatasgb_users_suggestions[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasgb_users_suggestions[".originalPages"] = $tdatasgb_users_suggestions[".pages"];
$tdatasgb_users_suggestions[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasgb_users_suggestions[".originalDefaultPages"] = $tdatasgb_users_suggestions[".defaultPages"];

//	field labels
$fieldLabelssgb_users_suggestions = array();
$fieldToolTipssgb_users_suggestions = array();
$pageTitlessgb_users_suggestions = array();
$placeHolderssgb_users_suggestions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssgb_users_suggestions["English"] = array();
	$fieldToolTipssgb_users_suggestions["English"] = array();
	$placeHolderssgb_users_suggestions["English"] = array();
	$pageTitlessgb_users_suggestions["English"] = array();
	$fieldLabelssgb_users_suggestions["English"]["id"] = "Id";
	$fieldToolTipssgb_users_suggestions["English"]["id"] = "";
	$placeHolderssgb_users_suggestions["English"]["id"] = "";
	$fieldLabelssgb_users_suggestions["English"]["title"] = "Title";
	$fieldToolTipssgb_users_suggestions["English"]["title"] = "";
	$placeHolderssgb_users_suggestions["English"]["title"] = "";
	$fieldLabelssgb_users_suggestions["English"]["name"] = "Name";
	$fieldToolTipssgb_users_suggestions["English"]["name"] = "";
	$placeHolderssgb_users_suggestions["English"]["name"] = "";
	$fieldLabelssgb_users_suggestions["English"]["email"] = "Email";
	$fieldToolTipssgb_users_suggestions["English"]["email"] = "";
	$placeHolderssgb_users_suggestions["English"]["email"] = "";
	$fieldLabelssgb_users_suggestions["English"]["ip"] = "Ip";
	$fieldToolTipssgb_users_suggestions["English"]["ip"] = "";
	$placeHolderssgb_users_suggestions["English"]["ip"] = "";
	$fieldLabelssgb_users_suggestions["English"]["blockip"] = "Action";
	$fieldToolTipssgb_users_suggestions["English"]["blockip"] = "";
	$placeHolderssgb_users_suggestions["English"]["blockip"] = "";
	if (count($fieldToolTipssgb_users_suggestions["English"]))
		$tdatasgb_users_suggestions[".isUseToolTips"] = true;
}


	$tdatasgb_users_suggestions[".NCSearch"] = true;



$tdatasgb_users_suggestions[".shortTableName"] = "sgb_users_suggestions";
$tdatasgb_users_suggestions[".nSecOptions"] = 0;

$tdatasgb_users_suggestions[".mainTableOwnerID"] = "";
$tdatasgb_users_suggestions[".entityType"] = 1;
$tdatasgb_users_suggestions[".connId"] = "project_at_localhost";


$tdatasgb_users_suggestions[".strOriginalTableName"] = "sgb_suggestions";

	



$tdatasgb_users_suggestions[".showAddInPopup"] = false;

$tdatasgb_users_suggestions[".showEditInPopup"] = false;

$tdatasgb_users_suggestions[".showViewInPopup"] = false;

$tdatasgb_users_suggestions[".listAjax"] = false;
//	temporary
//$tdatasgb_users_suggestions[".listAjax"] = false;

	$tdatasgb_users_suggestions[".audit"] = false;

	$tdatasgb_users_suggestions[".locking"] = false;


$pages = $tdatasgb_users_suggestions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasgb_users_suggestions[".edit"] = true;
	$tdatasgb_users_suggestions[".afterEditAction"] = 1;
	$tdatasgb_users_suggestions[".closePopupAfterEdit"] = 1;
	$tdatasgb_users_suggestions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasgb_users_suggestions[".add"] = true;
$tdatasgb_users_suggestions[".afterAddAction"] = 1;
$tdatasgb_users_suggestions[".closePopupAfterAdd"] = 1;
$tdatasgb_users_suggestions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasgb_users_suggestions[".list"] = true;
}



$tdatasgb_users_suggestions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasgb_users_suggestions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasgb_users_suggestions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasgb_users_suggestions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasgb_users_suggestions[".printFriendly"] = true;
}



$tdatasgb_users_suggestions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasgb_users_suggestions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasgb_users_suggestions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasgb_users_suggestions[".isUseAjaxSuggest"] = true;



									

$tdatasgb_users_suggestions[".ajaxCodeSnippetAdded"] = false;

$tdatasgb_users_suggestions[".buttonsAdded"] = false;

$tdatasgb_users_suggestions[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasgb_users_suggestions[".isUseTimeForSearch"] = false;


$tdatasgb_users_suggestions[".badgeColor"] = "DB7093";


$tdatasgb_users_suggestions[".allSearchFields"] = array();
$tdatasgb_users_suggestions[".filterFields"] = array();
$tdatasgb_users_suggestions[".requiredSearchFields"] = array();

$tdatasgb_users_suggestions[".googleLikeFields"] = array();
$tdatasgb_users_suggestions[".googleLikeFields"][] = "id";
$tdatasgb_users_suggestions[".googleLikeFields"][] = "title";
$tdatasgb_users_suggestions[".googleLikeFields"][] = "name";
$tdatasgb_users_suggestions[".googleLikeFields"][] = "email";
$tdatasgb_users_suggestions[".googleLikeFields"][] = "ip";
$tdatasgb_users_suggestions[".googleLikeFields"][] = "blockip";



$tdatasgb_users_suggestions[".tableType"] = "list";

$tdatasgb_users_suggestions[".printerPageOrientation"] = 0;
$tdatasgb_users_suggestions[".nPrinterPageScale"] = 100;

$tdatasgb_users_suggestions[".nPrinterSplitRecords"] = 40;

$tdatasgb_users_suggestions[".geocodingEnabled"] = false;










$tdatasgb_users_suggestions[".pageSize"] = 20;

$tdatasgb_users_suggestions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasgb_users_suggestions[".strOrderBy"] = $tstrOrderBy;

$tdatasgb_users_suggestions[".orderindexes"] = array();


$tdatasgb_users_suggestions[".sqlHead"] = "SELECT id,  title,  name,  email,  ip,  id AS blockip";
$tdatasgb_users_suggestions[".sqlFrom"] = "FROM sgb_suggestions";
$tdatasgb_users_suggestions[".sqlWhereExpr"] = "";
$tdatasgb_users_suggestions[".sqlTail"] = "";

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
$tdatasgb_users_suggestions[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasgb_users_suggestions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasgb_users_suggestions[".arrGroupsPerPage"] = $arrGPP;

$tdatasgb_users_suggestions[".highlightSearchResults"] = true;

$tableKeyssgb_users_suggestions = array();
$tableKeyssgb_users_suggestions[] = "id";
$tdatasgb_users_suggestions[".Keys"] = $tableKeyssgb_users_suggestions;


$tdatasgb_users_suggestions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","id");
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


	$tdatasgb_users_suggestions["id"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","title");
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


	$tdatasgb_users_suggestions["title"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "title";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","name");
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


	$tdatasgb_users_suggestions["name"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","email");
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


	$tdatasgb_users_suggestions["email"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "email";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","ip");
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


	$tdatasgb_users_suggestions["ip"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "ip";
//	blockip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "blockip";
	$fdata["GoodName"] = "blockip";
	$fdata["ownerTable"] = "sgb_suggestions";
	$fdata["Label"] = GetFieldLabel("sgb_users_suggestions","blockip");
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


	$tdatasgb_users_suggestions["blockip"] = $fdata;
		$tdatasgb_users_suggestions[".searchableFields"][] = "blockip";


$tables_data["sgb_users_suggestions"]=&$tdatasgb_users_suggestions;
$field_labels["sgb_users_suggestions"] = &$fieldLabelssgb_users_suggestions;
$fieldToolTips["sgb_users_suggestions"] = &$fieldToolTipssgb_users_suggestions;
$placeHolders["sgb_users_suggestions"] = &$placeHolderssgb_users_suggestions;
$page_titles["sgb_users_suggestions"] = &$pageTitlessgb_users_suggestions;


changeTextControlsToDate( "sgb_users_suggestions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sgb_users_suggestions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sgb_users_suggestions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sgb_users_suggestions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  title,  name,  email,  ip,  id AS blockip";
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
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sgb_users_suggestions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "sgb_users_suggestions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "sgb_users_suggestions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "sgb_users_suggestions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto14["m_sql"] = "ip";
$proto14["m_srcTableName"] = "sgb_users_suggestions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sgb_suggestions",
	"m_srcTableName" => "sgb_users_suggestions"
));

$proto16["m_sql"] = "id";
$proto16["m_srcTableName"] = "sgb_users_suggestions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "blockip";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "sgb_suggestions";
$proto19["m_srcTableName"] = "sgb_users_suggestions";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "suggested_by";
$proto19["m_columns"][] = "status";
$proto19["m_columns"][] = "created_date";
$proto19["m_columns"][] = "upvoted_date";
$proto19["m_columns"][] = "suggestion";
$proto19["m_columns"][] = "vote";
$proto19["m_columns"][] = "categoryid";
$proto19["m_columns"][] = "title";
$proto19["m_columns"][] = "images";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "pinned";
$proto19["m_columns"][] = "ip";
$proto19["m_columns"][] = "deleted_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "sgb_suggestions";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "sgb_users_suggestions";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sgb_users_suggestions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sgb_users_suggestions = createSqlQuery_sgb_users_suggestions();


	
		;

						

$tdatasgb_users_suggestions[".sqlquery"] = $queryData_sgb_users_suggestions;



include_once(getabspath("include/sgb_users_suggestions_events.php"));
$tdatasgb_users_suggestions[".hasEvents"] = true;

$query = &$queryData_sgb_users_suggestions;
$table = "sgb_users_suggestions";
// here goes EVENT_INIT_TABLE event
$query->addWhere(AddFieldWrappers("email")."='".$_SESSION["autor"]."'");
;
unset($query);
?>