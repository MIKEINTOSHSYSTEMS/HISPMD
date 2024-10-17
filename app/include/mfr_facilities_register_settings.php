<?php
$tdatamfr_facilities_register = array();
$tdatamfr_facilities_register[".searchableFields"] = array();
$tdatamfr_facilities_register[".ShortName"] = "mfr_facilities_register";
$tdatamfr_facilities_register[".OwnerID"] = "";
$tdatamfr_facilities_register[".OriginalTable"] = "public.mfr_facilities_register";


$tdatamfr_facilities_register[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamfr_facilities_register[".originalPagesByType"] = $tdatamfr_facilities_register[".pagesByType"];
$tdatamfr_facilities_register[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamfr_facilities_register[".originalPages"] = $tdatamfr_facilities_register[".pages"];
$tdatamfr_facilities_register[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamfr_facilities_register[".originalDefaultPages"] = $tdatamfr_facilities_register[".defaultPages"];

//	field labels
$fieldLabelsmfr_facilities_register = array();
$fieldToolTipsmfr_facilities_register = array();
$pageTitlesmfr_facilities_register = array();
$placeHoldersmfr_facilities_register = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmfr_facilities_register["English"] = array();
	$fieldToolTipsmfr_facilities_register["English"] = array();
	$placeHoldersmfr_facilities_register["English"] = array();
	$pageTitlesmfr_facilities_register["English"] = array();
	$fieldLabelsmfr_facilities_register["English"]["id"] = "Id";
	$fieldToolTipsmfr_facilities_register["English"]["id"] = "";
	$placeHoldersmfr_facilities_register["English"]["id"] = "";
	$fieldLabelsmfr_facilities_register["English"]["name"] = "Name";
	$fieldToolTipsmfr_facilities_register["English"]["name"] = "";
	$placeHoldersmfr_facilities_register["English"]["name"] = "";
	$fieldLabelsmfr_facilities_register["English"]["status"] = "Status";
	$fieldToolTipsmfr_facilities_register["English"]["status"] = "";
	$placeHoldersmfr_facilities_register["English"]["status"] = "";
	$fieldLabelsmfr_facilities_register["English"]["operationalstatus"] = "Operationalstatus";
	$fieldToolTipsmfr_facilities_register["English"]["operationalstatus"] = "";
	$placeHoldersmfr_facilities_register["English"]["operationalstatus"] = "";
	$fieldLabelsmfr_facilities_register["English"]["facilitytype"] = "Facilitytype";
	$fieldToolTipsmfr_facilities_register["English"]["facilitytype"] = "";
	$placeHoldersmfr_facilities_register["English"]["facilitytype"] = "";
	$fieldLabelsmfr_facilities_register["English"]["parentfacilitytype"] = "Parentfacilitytype";
	$fieldToolTipsmfr_facilities_register["English"]["parentfacilitytype"] = "";
	$placeHoldersmfr_facilities_register["English"]["parentfacilitytype"] = "";
	$fieldLabelsmfr_facilities_register["English"]["region"] = "Region";
	$fieldToolTipsmfr_facilities_register["English"]["region"] = "";
	$placeHoldersmfr_facilities_register["English"]["region"] = "";
	$fieldLabelsmfr_facilities_register["English"]["zone"] = "Zone";
	$fieldToolTipsmfr_facilities_register["English"]["zone"] = "";
	$placeHoldersmfr_facilities_register["English"]["zone"] = "";
	$fieldLabelsmfr_facilities_register["English"]["woreda"] = "Woreda";
	$fieldToolTipsmfr_facilities_register["English"]["woreda"] = "";
	$placeHoldersmfr_facilities_register["English"]["woreda"] = "";
	if (count($fieldToolTipsmfr_facilities_register["English"]))
		$tdatamfr_facilities_register[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelsmfr_facilities_register["Amharic"] = array();
	$fieldToolTipsmfr_facilities_register["Amharic"] = array();
	$placeHoldersmfr_facilities_register["Amharic"] = array();
	$pageTitlesmfr_facilities_register["Amharic"] = array();
	$fieldLabelsmfr_facilities_register["Amharic"]["id"] = "መለያ";
	$fieldToolTipsmfr_facilities_register["Amharic"]["id"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["id"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["name"] = "ስም";
	$fieldToolTipsmfr_facilities_register["Amharic"]["name"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["name"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["status"] = "ሁኔታ";
	$fieldToolTipsmfr_facilities_register["Amharic"]["status"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["status"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["operationalstatus"] = "የአሠራር ሁኔታ";
	$fieldToolTipsmfr_facilities_register["Amharic"]["operationalstatus"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["operationalstatus"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["facilitytype"] = "የመገልገያ አይነት";
	$fieldToolTipsmfr_facilities_register["Amharic"]["facilitytype"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["facilitytype"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["parentfacilitytype"] = "የወላጅነት አይነት";
	$fieldToolTipsmfr_facilities_register["Amharic"]["parentfacilitytype"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["parentfacilitytype"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["region"] = "ክልል";
	$fieldToolTipsmfr_facilities_register["Amharic"]["region"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["region"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["zone"] = "ዞን";
	$fieldToolTipsmfr_facilities_register["Amharic"]["zone"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["zone"] = "";
	$fieldLabelsmfr_facilities_register["Amharic"]["woreda"] = "ወረዳ";
	$fieldToolTipsmfr_facilities_register["Amharic"]["woreda"] = "";
	$placeHoldersmfr_facilities_register["Amharic"]["woreda"] = "";
	if (count($fieldToolTipsmfr_facilities_register["Amharic"]))
		$tdatamfr_facilities_register[".isUseToolTips"] = true;
}


	$tdatamfr_facilities_register[".NCSearch"] = true;



$tdatamfr_facilities_register[".shortTableName"] = "mfr_facilities_register";
$tdatamfr_facilities_register[".nSecOptions"] = 0;

$tdatamfr_facilities_register[".mainTableOwnerID"] = "";
$tdatamfr_facilities_register[".entityType"] = 0;
$tdatamfr_facilities_register[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatamfr_facilities_register[".strOriginalTableName"] = "public.mfr_facilities_register";

	



$tdatamfr_facilities_register[".showAddInPopup"] = false;

$tdatamfr_facilities_register[".showEditInPopup"] = false;

$tdatamfr_facilities_register[".showViewInPopup"] = false;

$tdatamfr_facilities_register[".listAjax"] = false;
//	temporary
//$tdatamfr_facilities_register[".listAjax"] = false;

	$tdatamfr_facilities_register[".audit"] = true;

	$tdatamfr_facilities_register[".locking"] = false;


$pages = $tdatamfr_facilities_register[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamfr_facilities_register[".edit"] = true;
	$tdatamfr_facilities_register[".afterEditAction"] = 1;
	$tdatamfr_facilities_register[".closePopupAfterEdit"] = 1;
	$tdatamfr_facilities_register[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamfr_facilities_register[".add"] = true;
$tdatamfr_facilities_register[".afterAddAction"] = 1;
$tdatamfr_facilities_register[".closePopupAfterAdd"] = 1;
$tdatamfr_facilities_register[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamfr_facilities_register[".list"] = true;
}



$tdatamfr_facilities_register[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamfr_facilities_register[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamfr_facilities_register[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamfr_facilities_register[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamfr_facilities_register[".printFriendly"] = true;
}



$tdatamfr_facilities_register[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamfr_facilities_register[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamfr_facilities_register[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamfr_facilities_register[".isUseAjaxSuggest"] = true;



			

$tdatamfr_facilities_register[".ajaxCodeSnippetAdded"] = false;

$tdatamfr_facilities_register[".buttonsAdded"] = false;

$tdatamfr_facilities_register[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamfr_facilities_register[".isUseTimeForSearch"] = false;


$tdatamfr_facilities_register[".badgeColor"] = "4169E1";


$tdatamfr_facilities_register[".allSearchFields"] = array();
$tdatamfr_facilities_register[".filterFields"] = array();
$tdatamfr_facilities_register[".requiredSearchFields"] = array();

$tdatamfr_facilities_register[".googleLikeFields"] = array();
$tdatamfr_facilities_register[".googleLikeFields"][] = "name";
$tdatamfr_facilities_register[".googleLikeFields"][] = "status";
$tdatamfr_facilities_register[".googleLikeFields"][] = "operationalstatus";
$tdatamfr_facilities_register[".googleLikeFields"][] = "facilitytype";
$tdatamfr_facilities_register[".googleLikeFields"][] = "parentfacilitytype";
$tdatamfr_facilities_register[".googleLikeFields"][] = "region";
$tdatamfr_facilities_register[".googleLikeFields"][] = "zone";
$tdatamfr_facilities_register[".googleLikeFields"][] = "woreda";



$tdatamfr_facilities_register[".tableType"] = "list";

$tdatamfr_facilities_register[".printerPageOrientation"] = 0;
$tdatamfr_facilities_register[".nPrinterPageScale"] = 100;

$tdatamfr_facilities_register[".nPrinterSplitRecords"] = 40;

$tdatamfr_facilities_register[".geocodingEnabled"] = false;




$tdatamfr_facilities_register[".isDisplayLoading"] = true;






$tdatamfr_facilities_register[".pageSize"] = 20;

$tdatamfr_facilities_register[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamfr_facilities_register[".strOrderBy"] = $tstrOrderBy;

$tdatamfr_facilities_register[".orderindexes"] = array();


$tdatamfr_facilities_register[".sqlHead"] = "SELECT id,  	name,  	status,  	operationalstatus,  	facilitytype,  	parentfacilitytype,  	region,  	\"zone\",  	woreda";
$tdatamfr_facilities_register[".sqlFrom"] = "FROM \"public\".mfr_facilities_register";
$tdatamfr_facilities_register[".sqlWhereExpr"] = "";
$tdatamfr_facilities_register[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamfr_facilities_register[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamfr_facilities_register[".arrGroupsPerPage"] = $arrGPP;

$tdatamfr_facilities_register[".highlightSearchResults"] = true;

$tableKeysmfr_facilities_register = array();
$tableKeysmfr_facilities_register[] = "id";
$tdatamfr_facilities_register[".Keys"] = $tableKeysmfr_facilities_register;


$tdatamfr_facilities_register[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatamfr_facilities_register["id"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","name");
	$fdata["FieldType"] = 201;


	
	
			

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


	$tdatamfr_facilities_register["name"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "name";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","status");
	$fdata["FieldType"] = 201;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Approved";
	$edata["LookupValues"][] = "Denied";
	$edata["LookupValues"][] = "Draft";
	$edata["LookupValues"][] = "Pending";

		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["status"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "status";
//	operationalstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operationalstatus";
	$fdata["GoodName"] = "operationalstatus";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","operationalstatus");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "operationalstatus";

		$fdata["sourceSingle"] = "operationalstatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "operationalstatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Operational";
	$edata["LookupValues"][] = "Closed";
	$edata["LookupValues"][] = "Currently Not Operational";
	$edata["LookupValues"][] = "Pending";

		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["operationalstatus"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "operationalstatus";
//	facilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "facilitytype";
	$fdata["GoodName"] = "facilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","facilitytype");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "facilitytype";

		$fdata["sourceSingle"] = "facilitytype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facilitytype";

	
	
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
	$edata["LookupTable"] = "public.mfr_facilities_register";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "facilitytype";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "facilitytype";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["facilitytype"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "facilitytype";
//	parentfacilitytype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parentfacilitytype";
	$fdata["GoodName"] = "parentfacilitytype";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","parentfacilitytype");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "parentfacilitytype";

		$fdata["sourceSingle"] = "parentfacilitytype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parentfacilitytype";

	
	
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
	$edata["LookupTable"] = "public.mfr_facilities_register";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "parentfacilitytype";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "parentfacilitytype";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["parentfacilitytype"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "parentfacilitytype";
//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","region");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "region";

		$fdata["sourceSingle"] = "region";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region";

	
	
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
	$edata["LookupTable"] = "public.mfr_facilities_register";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "region";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "zone";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["region"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "region";
//	zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "zone";
	$fdata["GoodName"] = "zone";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","zone");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "zone";

		$fdata["sourceSingle"] = "zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"zone\"";

	
	
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
	$edata["LookupTable"] = "public.mfr_facilities_register";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "zone";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "zone";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "region", "lookup" => "region" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "woreda";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["zone"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "zone";
//	woreda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "woreda";
	$fdata["GoodName"] = "woreda";
	$fdata["ownerTable"] = "public.mfr_facilities_register";
	$fdata["Label"] = GetFieldLabel("public_mfr_facilities_register","woreda");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "woreda";

		$fdata["sourceSingle"] = "woreda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "woreda";

	
	
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
	$edata["LookupTable"] = "public.mfr_facilities_register";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "woreda";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "woreda";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "zone", "lookup" => "zone" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamfr_facilities_register["woreda"] = $fdata;
		$tdatamfr_facilities_register[".searchableFields"][] = "woreda";


$tables_data["public.mfr_facilities_register"]=&$tdatamfr_facilities_register;
$field_labels["public_mfr_facilities_register"] = &$fieldLabelsmfr_facilities_register;
$fieldToolTips["public_mfr_facilities_register"] = &$fieldToolTipsmfr_facilities_register;
$placeHolders["public_mfr_facilities_register"] = &$placeHoldersmfr_facilities_register;
$page_titles["public_mfr_facilities_register"] = &$pageTitlesmfr_facilities_register;


changeTextControlsToDate( "public.mfr_facilities_register" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.mfr_facilities_register"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.mfr_facilities_register"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mfr_facilities_register()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	status,  	operationalstatus,  	facilitytype,  	parentfacilitytype,  	region,  	\"zone\",  	woreda";
$proto0["m_strFrom"] = "FROM \"public\".mfr_facilities_register";
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
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.mfr_facilities_register";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.mfr_facilities_register";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "public.mfr_facilities_register";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "operationalstatus",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto12["m_sql"] = "operationalstatus";
$proto12["m_srcTableName"] = "public.mfr_facilities_register";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "facilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto14["m_sql"] = "facilitytype";
$proto14["m_srcTableName"] = "public.mfr_facilities_register";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "parentfacilitytype",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto16["m_sql"] = "parentfacilitytype";
$proto16["m_srcTableName"] = "public.mfr_facilities_register";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "region",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto18["m_sql"] = "region";
$proto18["m_srcTableName"] = "public.mfr_facilities_register";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "zone",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto20["m_sql"] = "\"zone\"";
$proto20["m_srcTableName"] = "public.mfr_facilities_register";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "woreda",
	"m_strTable" => "public.mfr_facilities_register",
	"m_srcTableName" => "public.mfr_facilities_register"
));

$proto22["m_sql"] = "woreda";
$proto22["m_srcTableName"] = "public.mfr_facilities_register";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.mfr_facilities_register";
$proto25["m_srcTableName"] = "public.mfr_facilities_register";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "operationalstatus";
$proto25["m_columns"][] = "facilitytype";
$proto25["m_columns"][] = "parentfacilitytype";
$proto25["m_columns"][] = "region";
$proto25["m_columns"][] = "zone";
$proto25["m_columns"][] = "woreda";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".mfr_facilities_register";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.mfr_facilities_register";
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
$proto0["m_srcTableName"]="public.mfr_facilities_register";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mfr_facilities_register = createSqlQuery_mfr_facilities_register();


	
																												;

									

$tdatamfr_facilities_register[".sqlquery"] = $queryData_mfr_facilities_register;



$tdatamfr_facilities_register[".hasEvents"] = false;

?>