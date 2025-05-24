<?php
$tdataeidm_settings = array();
$tdataeidm_settings[".searchableFields"] = array();
$tdataeidm_settings[".ShortName"] = "eidm_settings";
$tdataeidm_settings[".OwnerID"] = "";
$tdataeidm_settings[".OriginalTable"] = "public.eidm_settings";


$tdataeidm_settings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataeidm_settings[".originalPagesByType"] = $tdataeidm_settings[".pagesByType"];
$tdataeidm_settings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataeidm_settings[".originalPages"] = $tdataeidm_settings[".pages"];
$tdataeidm_settings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataeidm_settings[".originalDefaultPages"] = $tdataeidm_settings[".defaultPages"];

//	field labels
$fieldLabelseidm_settings = array();
$fieldToolTipseidm_settings = array();
$pageTitleseidm_settings = array();
$placeHolderseidm_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseidm_settings["English"] = array();
	$fieldToolTipseidm_settings["English"] = array();
	$placeHolderseidm_settings["English"] = array();
	$pageTitleseidm_settings["English"] = array();
	$fieldLabelseidm_settings["English"]["id"] = "Id";
	$fieldToolTipseidm_settings["English"]["id"] = "";
	$placeHolderseidm_settings["English"]["id"] = "";
	$fieldLabelseidm_settings["English"]["dx"] = "Data Element Indicators";
	$fieldToolTipseidm_settings["English"]["dx"] = "";
	$placeHolderseidm_settings["English"]["dx"] = "";
	$fieldLabelseidm_settings["English"]["ou"] = "Organisation Units";
	$fieldToolTipseidm_settings["English"]["ou"] = "";
	$placeHolderseidm_settings["English"]["ou"] = "";
	$fieldLabelseidm_settings["English"]["pe"] = "Periods";
	$fieldToolTipseidm_settings["English"]["pe"] = "";
	$placeHolderseidm_settings["English"]["pe"] = "";
	$fieldLabelseidm_settings["English"]["created_at"] = "Created/Updated At";
	$fieldToolTipseidm_settings["English"]["created_at"] = "";
	$placeHolderseidm_settings["English"]["created_at"] = "";
	if (count($fieldToolTipseidm_settings["English"]))
		$tdataeidm_settings[".isUseToolTips"] = true;
}


	$tdataeidm_settings[".NCSearch"] = true;



$tdataeidm_settings[".shortTableName"] = "eidm_settings";
$tdataeidm_settings[".nSecOptions"] = 0;

$tdataeidm_settings[".mainTableOwnerID"] = "";
$tdataeidm_settings[".entityType"] = 0;
$tdataeidm_settings[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdataeidm_settings[".strOriginalTableName"] = "public.eidm_settings";

	



$tdataeidm_settings[".showAddInPopup"] = false;

$tdataeidm_settings[".showEditInPopup"] = false;

$tdataeidm_settings[".showViewInPopup"] = false;

$tdataeidm_settings[".listAjax"] = false;
//	temporary
//$tdataeidm_settings[".listAjax"] = false;

	$tdataeidm_settings[".audit"] = false;

	$tdataeidm_settings[".locking"] = false;


$pages = $tdataeidm_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataeidm_settings[".edit"] = true;
	$tdataeidm_settings[".afterEditAction"] = 1;
	$tdataeidm_settings[".closePopupAfterEdit"] = 1;
	$tdataeidm_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataeidm_settings[".add"] = true;
$tdataeidm_settings[".afterAddAction"] = 1;
$tdataeidm_settings[".closePopupAfterAdd"] = 1;
$tdataeidm_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataeidm_settings[".list"] = true;
}



$tdataeidm_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataeidm_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataeidm_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataeidm_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataeidm_settings[".printFriendly"] = true;
}



$tdataeidm_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataeidm_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataeidm_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataeidm_settings[".isUseAjaxSuggest"] = true;



			

$tdataeidm_settings[".ajaxCodeSnippetAdded"] = false;

$tdataeidm_settings[".buttonsAdded"] = false;

$tdataeidm_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeidm_settings[".isUseTimeForSearch"] = false;


$tdataeidm_settings[".badgeColor"] = "778899";


$tdataeidm_settings[".allSearchFields"] = array();
$tdataeidm_settings[".filterFields"] = array();
$tdataeidm_settings[".requiredSearchFields"] = array();

$tdataeidm_settings[".googleLikeFields"] = array();
$tdataeidm_settings[".googleLikeFields"][] = "id";
$tdataeidm_settings[".googleLikeFields"][] = "dx";
$tdataeidm_settings[".googleLikeFields"][] = "ou";
$tdataeidm_settings[".googleLikeFields"][] = "pe";
$tdataeidm_settings[".googleLikeFields"][] = "created_at";



$tdataeidm_settings[".tableType"] = "list";

$tdataeidm_settings[".printerPageOrientation"] = 0;
$tdataeidm_settings[".nPrinterPageScale"] = 100;

$tdataeidm_settings[".nPrinterSplitRecords"] = 40;

$tdataeidm_settings[".geocodingEnabled"] = false;




$tdataeidm_settings[".isDisplayLoading"] = true;






$tdataeidm_settings[".pageSize"] = 20;

$tdataeidm_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataeidm_settings[".strOrderBy"] = $tstrOrderBy;

$tdataeidm_settings[".orderindexes"] = array();


$tdataeidm_settings[".sqlHead"] = "SELECT id,  	dx,  	ou,  	pe,  	created_at";
$tdataeidm_settings[".sqlFrom"] = "FROM \"public\".eidm_settings";
$tdataeidm_settings[".sqlWhereExpr"] = "";
$tdataeidm_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeidm_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeidm_settings[".arrGroupsPerPage"] = $arrGPP;

$tdataeidm_settings[".highlightSearchResults"] = true;

$tableKeyseidm_settings = array();
$tableKeyseidm_settings[] = "id";
$tdataeidm_settings[".Keys"] = $tableKeyseidm_settings;


$tdataeidm_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.eidm_settings";
	$fdata["Label"] = GetFieldLabel("public_eidm_settings","id");
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


	$tdataeidm_settings["id"] = $fdata;
		$tdataeidm_settings[".searchableFields"][] = "id";
//	dx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dx";
	$fdata["GoodName"] = "dx";
	$fdata["ownerTable"] = "public.eidm_settings";
	$fdata["Label"] = GetFieldLabel("public_eidm_settings","dx");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "dx";

		$fdata["sourceSingle"] = "dx";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dx";

	
	
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
	$edata["LookupTable"] = "DHIS2_Data_Elements";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataeidm_settings["dx"] = $fdata;
		$tdataeidm_settings[".searchableFields"][] = "dx";
//	ou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ou";
	$fdata["GoodName"] = "ou";
	$fdata["ownerTable"] = "public.eidm_settings";
	$fdata["Label"] = GetFieldLabel("public_eidm_settings","ou");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ou";

		$fdata["sourceSingle"] = "ou";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ou";

	
	
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
	$edata["LookupTable"] = "DHIS2_OrgUnit_Regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "displayName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataeidm_settings["ou"] = $fdata;
		$tdataeidm_settings[".searchableFields"][] = "ou";
//	pe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pe";
	$fdata["GoodName"] = "pe";
	$fdata["ownerTable"] = "public.eidm_settings";
	$fdata["Label"] = GetFieldLabel("public_eidm_settings","pe");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "pe";

		$fdata["sourceSingle"] = "pe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pe";

	
	
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
	$edata["LookupTable"] = "public.dhis2_periods";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "period_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataeidm_settings["pe"] = $fdata;
		$tdataeidm_settings[".searchableFields"][] = "pe";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.eidm_settings";
	$fdata["Label"] = GetFieldLabel("public_eidm_settings","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdataeidm_settings["created_at"] = $fdata;
		$tdataeidm_settings[".searchableFields"][] = "created_at";


$tables_data["public.eidm_settings"]=&$tdataeidm_settings;
$field_labels["public_eidm_settings"] = &$fieldLabelseidm_settings;
$fieldToolTips["public_eidm_settings"] = &$fieldToolTipseidm_settings;
$placeHolders["public_eidm_settings"] = &$placeHolderseidm_settings;
$page_titles["public_eidm_settings"] = &$pageTitleseidm_settings;


changeTextControlsToDate( "public.eidm_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.eidm_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.eidm_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_eidm_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	dx,  	ou,  	pe,  	created_at";
$proto0["m_strFrom"] = "FROM \"public\".eidm_settings";
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
	"m_strTable" => "public.eidm_settings",
	"m_srcTableName" => "public.eidm_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.eidm_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dx",
	"m_strTable" => "public.eidm_settings",
	"m_srcTableName" => "public.eidm_settings"
));

$proto8["m_sql"] = "dx";
$proto8["m_srcTableName"] = "public.eidm_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ou",
	"m_strTable" => "public.eidm_settings",
	"m_srcTableName" => "public.eidm_settings"
));

$proto10["m_sql"] = "ou";
$proto10["m_srcTableName"] = "public.eidm_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pe",
	"m_strTable" => "public.eidm_settings",
	"m_srcTableName" => "public.eidm_settings"
));

$proto12["m_sql"] = "pe";
$proto12["m_srcTableName"] = "public.eidm_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.eidm_settings",
	"m_srcTableName" => "public.eidm_settings"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.eidm_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.eidm_settings";
$proto17["m_srcTableName"] = "public.eidm_settings";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "dx";
$proto17["m_columns"][] = "ou";
$proto17["m_columns"][] = "pe";
$proto17["m_columns"][] = "created_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".eidm_settings";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.eidm_settings";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.eidm_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_eidm_settings = createSqlQuery_eidm_settings();


	
																												;

					

$tdataeidm_settings[".sqlquery"] = $queryData_eidm_settings;



$tdataeidm_settings[".hasEvents"] = false;

?>