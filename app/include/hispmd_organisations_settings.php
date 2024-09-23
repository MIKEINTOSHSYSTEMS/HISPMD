<?php
$tdatahispmd_organisations = array();
$tdatahispmd_organisations[".searchableFields"] = array();
$tdatahispmd_organisations[".ShortName"] = "hispmd_organisations";
$tdatahispmd_organisations[".OwnerID"] = "";
$tdatahispmd_organisations[".OriginalTable"] = "public.hispmd_organisations";


$tdatahispmd_organisations[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahispmd_organisations[".originalPagesByType"] = $tdatahispmd_organisations[".pagesByType"];
$tdatahispmd_organisations[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahispmd_organisations[".originalPages"] = $tdatahispmd_organisations[".pages"];
$tdatahispmd_organisations[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahispmd_organisations[".originalDefaultPages"] = $tdatahispmd_organisations[".defaultPages"];

//	field labels
$fieldLabelshispmd_organisations = array();
$fieldToolTipshispmd_organisations = array();
$pageTitleshispmd_organisations = array();
$placeHoldershispmd_organisations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_organisations["English"] = array();
	$fieldToolTipshispmd_organisations["English"] = array();
	$placeHoldershispmd_organisations["English"] = array();
	$pageTitleshispmd_organisations["English"] = array();
	$fieldLabelshispmd_organisations["English"]["orgid"] = "Orgid";
	$fieldToolTipshispmd_organisations["English"]["orgid"] = "";
	$placeHoldershispmd_organisations["English"]["orgid"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_name"] = "Organisation Name";
	$fieldToolTipshispmd_organisations["English"]["organisation_name"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_name"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_country"] = "Organisation Country";
	$fieldToolTipshispmd_organisations["English"]["organisation_country"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_country"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_city"] = "Organisation City";
	$fieldToolTipshispmd_organisations["English"]["organisation_city"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_city"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_address"] = "Organisation Address";
	$fieldToolTipshispmd_organisations["English"]["organisation_address"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_address"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_phone"] = "Organisation Phone";
	$fieldToolTipshispmd_organisations["English"]["organisation_phone"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_phone"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_email"] = "Organisation Email";
	$fieldToolTipshispmd_organisations["English"]["organisation_email"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_email"] = "";
	$fieldLabelshispmd_organisations["English"]["organisation_website"] = "Organisation Website";
	$fieldToolTipshispmd_organisations["English"]["organisation_website"] = "";
	$placeHoldershispmd_organisations["English"]["organisation_website"] = "";
	if (count($fieldToolTipshispmd_organisations["English"]))
		$tdatahispmd_organisations[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelshispmd_organisations["Amharic"] = array();
	$fieldToolTipshispmd_organisations["Amharic"] = array();
	$placeHoldershispmd_organisations["Amharic"] = array();
	$pageTitleshispmd_organisations["Amharic"] = array();
	$fieldLabelshispmd_organisations["Amharic"]["orgid"] = "ኦርጂድ";
	$fieldToolTipshispmd_organisations["Amharic"]["orgid"] = "";
	$placeHoldershispmd_organisations["Amharic"]["orgid"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_name"] = "የድርጅት ስም";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_name"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_name"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_country"] = "ድርጅት አገር";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_country"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_country"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_city"] = "ድርጅት ከተማ";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_city"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_city"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_address"] = "የድርጅት አድራሻ";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_address"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_address"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_phone"] = "የድርጅት ስልክ";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_phone"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_phone"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_email"] = "ድርጅት ኢሜይል";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_email"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_email"] = "";
	$fieldLabelshispmd_organisations["Amharic"]["organisation_website"] = "የድርጅት ድር ጣቢያ";
	$fieldToolTipshispmd_organisations["Amharic"]["organisation_website"] = "";
	$placeHoldershispmd_organisations["Amharic"]["organisation_website"] = "";
	if (count($fieldToolTipshispmd_organisations["Amharic"]))
		$tdatahispmd_organisations[".isUseToolTips"] = true;
}


	$tdatahispmd_organisations[".NCSearch"] = true;



$tdatahispmd_organisations[".shortTableName"] = "hispmd_organisations";
$tdatahispmd_organisations[".nSecOptions"] = 0;

$tdatahispmd_organisations[".mainTableOwnerID"] = "";
$tdatahispmd_organisations[".entityType"] = 0;
$tdatahispmd_organisations[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatahispmd_organisations[".strOriginalTableName"] = "public.hispmd_organisations";

	



$tdatahispmd_organisations[".showAddInPopup"] = false;

$tdatahispmd_organisations[".showEditInPopup"] = false;

$tdatahispmd_organisations[".showViewInPopup"] = false;

$tdatahispmd_organisations[".listAjax"] = false;
//	temporary
//$tdatahispmd_organisations[".listAjax"] = false;

	$tdatahispmd_organisations[".audit"] = false;

	$tdatahispmd_organisations[".locking"] = false;


$pages = $tdatahispmd_organisations[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahispmd_organisations[".edit"] = true;
	$tdatahispmd_organisations[".afterEditAction"] = 1;
	$tdatahispmd_organisations[".closePopupAfterEdit"] = 1;
	$tdatahispmd_organisations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahispmd_organisations[".add"] = true;
$tdatahispmd_organisations[".afterAddAction"] = 1;
$tdatahispmd_organisations[".closePopupAfterAdd"] = 1;
$tdatahispmd_organisations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahispmd_organisations[".list"] = true;
}



$tdatahispmd_organisations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahispmd_organisations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahispmd_organisations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahispmd_organisations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahispmd_organisations[".printFriendly"] = true;
}



$tdatahispmd_organisations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahispmd_organisations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahispmd_organisations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahispmd_organisations[".isUseAjaxSuggest"] = true;



			

$tdatahispmd_organisations[".ajaxCodeSnippetAdded"] = false;

$tdatahispmd_organisations[".buttonsAdded"] = false;

$tdatahispmd_organisations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahispmd_organisations[".isUseTimeForSearch"] = false;


$tdatahispmd_organisations[".badgeColor"] = "00ffff";


$tdatahispmd_organisations[".allSearchFields"] = array();
$tdatahispmd_organisations[".filterFields"] = array();
$tdatahispmd_organisations[".requiredSearchFields"] = array();

$tdatahispmd_organisations[".googleLikeFields"] = array();
$tdatahispmd_organisations[".googleLikeFields"][] = "orgid";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_name";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_country";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_city";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_address";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_phone";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_email";
$tdatahispmd_organisations[".googleLikeFields"][] = "organisation_website";



$tdatahispmd_organisations[".tableType"] = "list";

$tdatahispmd_organisations[".printerPageOrientation"] = 0;
$tdatahispmd_organisations[".nPrinterPageScale"] = 100;

$tdatahispmd_organisations[".nPrinterSplitRecords"] = 40;

$tdatahispmd_organisations[".geocodingEnabled"] = false;










$tdatahispmd_organisations[".pageSize"] = 20;

$tdatahispmd_organisations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahispmd_organisations[".strOrderBy"] = $tstrOrderBy;

$tdatahispmd_organisations[".orderindexes"] = array();


$tdatahispmd_organisations[".sqlHead"] = "SELECT orgid,  	organisation_name,  	organisation_country,  	organisation_city,  	organisation_address,  	organisation_phone,  	organisation_email,  	organisation_website";
$tdatahispmd_organisations[".sqlFrom"] = "FROM \"public\".hispmd_organisations";
$tdatahispmd_organisations[".sqlWhereExpr"] = "";
$tdatahispmd_organisations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahispmd_organisations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahispmd_organisations[".arrGroupsPerPage"] = $arrGPP;

$tdatahispmd_organisations[".highlightSearchResults"] = true;

$tableKeyshispmd_organisations = array();
$tableKeyshispmd_organisations[] = "orgid";
$tdatahispmd_organisations[".Keys"] = $tableKeyshispmd_organisations;


$tdatahispmd_organisations[".hideMobileList"] = array();




//	orgid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "orgid";
	$fdata["GoodName"] = "orgid";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","orgid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "orgid";

		$fdata["sourceSingle"] = "orgid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orgid";

	
	
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


	$tdatahispmd_organisations["orgid"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "orgid";
//	organisation_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organisation_name";
	$fdata["GoodName"] = "organisation_name";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_name");
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


	$tdatahispmd_organisations["organisation_name"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_name";
//	organisation_country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organisation_country";
	$fdata["GoodName"] = "organisation_country";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_country";

		$fdata["sourceSingle"] = "organisation_country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_country";

	
	
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


	$tdatahispmd_organisations["organisation_country"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_country";
//	organisation_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "organisation_city";
	$fdata["GoodName"] = "organisation_city";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_city";

		$fdata["sourceSingle"] = "organisation_city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_city";

	
	
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


	$tdatahispmd_organisations["organisation_city"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_city";
//	organisation_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "organisation_address";
	$fdata["GoodName"] = "organisation_address";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_address");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "organisation_address";

		$fdata["sourceSingle"] = "organisation_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_address";

	
	
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


	$tdatahispmd_organisations["organisation_address"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_address";
//	organisation_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "organisation_phone";
	$fdata["GoodName"] = "organisation_phone";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_phone";

		$fdata["sourceSingle"] = "organisation_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_phone";

	
	
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


	$tdatahispmd_organisations["organisation_phone"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_phone";
//	organisation_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "organisation_email";
	$fdata["GoodName"] = "organisation_email";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_email";

		$fdata["sourceSingle"] = "organisation_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_email";

	
	
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


	$tdatahispmd_organisations["organisation_email"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_email";
//	organisation_website
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "organisation_website";
	$fdata["GoodName"] = "organisation_website";
	$fdata["ownerTable"] = "public.hispmd_organisations";
	$fdata["Label"] = GetFieldLabel("public_hispmd_organisations","organisation_website");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisation_website";

		$fdata["sourceSingle"] = "organisation_website";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisation_website";

	
	
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


	$tdatahispmd_organisations["organisation_website"] = $fdata;
		$tdatahispmd_organisations[".searchableFields"][] = "organisation_website";


$tables_data["public.hispmd_organisations"]=&$tdatahispmd_organisations;
$field_labels["public_hispmd_organisations"] = &$fieldLabelshispmd_organisations;
$fieldToolTips["public_hispmd_organisations"] = &$fieldToolTipshispmd_organisations;
$placeHolders["public_hispmd_organisations"] = &$placeHoldershispmd_organisations;
$page_titles["public_hispmd_organisations"] = &$pageTitleshispmd_organisations;


changeTextControlsToDate( "public.hispmd_organisations" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.hispmd_organisations"] = array();
//	public.hispmdusers
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.hispmdusers";
		$detailsParam["dOriginalTable"] = "public.hispmdusers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hispmdusers";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_hispmdusers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.hispmd_organisations"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.hispmd_organisations"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.hispmd_organisations"][$dIndex]["masterKeys"][]="orgid";

	$detailsTablesData["public.hispmd_organisations"][$dIndex]["masterKeys"][]="organisation_name";

				$detailsTablesData["public.hispmd_organisations"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.hispmd_organisations"][$dIndex]["detailKeys"][]="organisation_name";

		
	$detailsTablesData["public.hispmd_organisations"][$dIndex]["detailKeys"][]="organisation_name";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.hispmd_organisations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hispmd_organisations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "orgid,  	organisation_name,  	organisation_country,  	organisation_city,  	organisation_address,  	organisation_phone,  	organisation_email,  	organisation_website";
$proto0["m_strFrom"] = "FROM \"public\".hispmd_organisations";
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
	"m_strName" => "orgid",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto6["m_sql"] = "orgid";
$proto6["m_srcTableName"] = "public.hispmd_organisations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_name",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto8["m_sql"] = "organisation_name";
$proto8["m_srcTableName"] = "public.hispmd_organisations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_country",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto10["m_sql"] = "organisation_country";
$proto10["m_srcTableName"] = "public.hispmd_organisations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_city",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto12["m_sql"] = "organisation_city";
$proto12["m_srcTableName"] = "public.hispmd_organisations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_address",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto14["m_sql"] = "organisation_address";
$proto14["m_srcTableName"] = "public.hispmd_organisations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_phone",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto16["m_sql"] = "organisation_phone";
$proto16["m_srcTableName"] = "public.hispmd_organisations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_email",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto18["m_sql"] = "organisation_email";
$proto18["m_srcTableName"] = "public.hispmd_organisations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organisation_website",
	"m_strTable" => "public.hispmd_organisations",
	"m_srcTableName" => "public.hispmd_organisations"
));

$proto20["m_sql"] = "organisation_website";
$proto20["m_srcTableName"] = "public.hispmd_organisations";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.hispmd_organisations";
$proto23["m_srcTableName"] = "public.hispmd_organisations";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "orgid";
$proto23["m_columns"][] = "organisation_name";
$proto23["m_columns"][] = "organisation_country";
$proto23["m_columns"][] = "organisation_city";
$proto23["m_columns"][] = "organisation_address";
$proto23["m_columns"][] = "organisation_phone";
$proto23["m_columns"][] = "organisation_email";
$proto23["m_columns"][] = "organisation_website";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".hispmd_organisations";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.hispmd_organisations";
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
$proto0["m_srcTableName"]="public.hispmd_organisations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hispmd_organisations = createSqlQuery_hispmd_organisations();


	
																												;

								

$tdatahispmd_organisations[".sqlquery"] = $queryData_hispmd_organisations;



$tdatahispmd_organisations[".hasEvents"] = false;

?>