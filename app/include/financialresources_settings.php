<?php
$tdatafinancialresources = array();
$tdatafinancialresources[".searchableFields"] = array();
$tdatafinancialresources[".ShortName"] = "financialresources";
$tdatafinancialresources[".OwnerID"] = "";
$tdatafinancialresources[".OriginalTable"] = "FinancialResources";


$tdatafinancialresources[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafinancialresources[".originalPagesByType"] = $tdatafinancialresources[".pagesByType"];
$tdatafinancialresources[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafinancialresources[".originalPages"] = $tdatafinancialresources[".pages"];
$tdatafinancialresources[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafinancialresources[".originalDefaultPages"] = $tdatafinancialresources[".defaultPages"];

//	field labels
$fieldLabelsfinancialresources = array();
$fieldToolTipsfinancialresources = array();
$pageTitlesfinancialresources = array();
$placeHoldersfinancialresources = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfinancialresources["English"] = array();
	$fieldToolTipsfinancialresources["English"] = array();
	$placeHoldersfinancialresources["English"] = array();
	$pageTitlesfinancialresources["English"] = array();
	$fieldLabelsfinancialresources["English"]["resource_id"] = "Resource Id";
	$fieldToolTipsfinancialresources["English"]["resource_id"] = "";
	$placeHoldersfinancialresources["English"]["resource_id"] = "";
	$fieldLabelsfinancialresources["English"]["year"] = "Year";
	$fieldToolTipsfinancialresources["English"]["year"] = "";
	$placeHoldersfinancialresources["English"]["year"] = "";
	$fieldLabelsfinancialresources["English"]["amount"] = "Amount";
	$fieldToolTipsfinancialresources["English"]["amount"] = "";
	$placeHoldersfinancialresources["English"]["amount"] = "";
	$fieldLabelsfinancialresources["English"]["utilized"] = "Utilized";
	$fieldToolTipsfinancialresources["English"]["utilized"] = "";
	$placeHoldersfinancialresources["English"]["utilized"] = "";
	$fieldLabelsfinancialresources["English"]["region_id"] = "Region Id";
	$fieldToolTipsfinancialresources["English"]["region_id"] = "";
	$placeHoldersfinancialresources["English"]["region_id"] = "";
	if (count($fieldToolTipsfinancialresources["English"]))
		$tdatafinancialresources[".isUseToolTips"] = true;
}


	$tdatafinancialresources[".NCSearch"] = true;



$tdatafinancialresources[".shortTableName"] = "financialresources";
$tdatafinancialresources[".nSecOptions"] = 0;

$tdatafinancialresources[".mainTableOwnerID"] = "";
$tdatafinancialresources[".entityType"] = 0;
$tdatafinancialresources[".connId"] = "hispmdathispmdmerqconsultancyo";


$tdatafinancialresources[".strOriginalTableName"] = "FinancialResources";

	



$tdatafinancialresources[".showAddInPopup"] = false;

$tdatafinancialresources[".showEditInPopup"] = false;

$tdatafinancialresources[".showViewInPopup"] = false;

$tdatafinancialresources[".listAjax"] = false;
//	temporary
//$tdatafinancialresources[".listAjax"] = false;

	$tdatafinancialresources[".audit"] = false;

	$tdatafinancialresources[".locking"] = false;


$pages = $tdatafinancialresources[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafinancialresources[".edit"] = true;
	$tdatafinancialresources[".afterEditAction"] = 1;
	$tdatafinancialresources[".closePopupAfterEdit"] = 1;
	$tdatafinancialresources[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafinancialresources[".add"] = true;
$tdatafinancialresources[".afterAddAction"] = 1;
$tdatafinancialresources[".closePopupAfterAdd"] = 1;
$tdatafinancialresources[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafinancialresources[".list"] = true;
}



$tdatafinancialresources[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafinancialresources[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafinancialresources[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafinancialresources[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafinancialresources[".printFriendly"] = true;
}



$tdatafinancialresources[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafinancialresources[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafinancialresources[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafinancialresources[".isUseAjaxSuggest"] = true;





$tdatafinancialresources[".ajaxCodeSnippetAdded"] = false;

$tdatafinancialresources[".buttonsAdded"] = false;

$tdatafinancialresources[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinancialresources[".isUseTimeForSearch"] = false;


$tdatafinancialresources[".badgeColor"] = "5F9EA0";


$tdatafinancialresources[".allSearchFields"] = array();
$tdatafinancialresources[".filterFields"] = array();
$tdatafinancialresources[".requiredSearchFields"] = array();

$tdatafinancialresources[".googleLikeFields"] = array();
$tdatafinancialresources[".googleLikeFields"][] = "resource_id";
$tdatafinancialresources[".googleLikeFields"][] = "year";
$tdatafinancialresources[".googleLikeFields"][] = "amount";
$tdatafinancialresources[".googleLikeFields"][] = "utilized";
$tdatafinancialresources[".googleLikeFields"][] = "region_id";



$tdatafinancialresources[".tableType"] = "list";

$tdatafinancialresources[".printerPageOrientation"] = 0;
$tdatafinancialresources[".nPrinterPageScale"] = 100;

$tdatafinancialresources[".nPrinterSplitRecords"] = 40;

$tdatafinancialresources[".geocodingEnabled"] = false;










$tdatafinancialresources[".pageSize"] = 20;

$tdatafinancialresources[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafinancialresources[".strOrderBy"] = $tstrOrderBy;

$tdatafinancialresources[".orderindexes"] = array();


$tdatafinancialresources[".sqlHead"] = "SELECT resource_id,  	`year`,  	amount,  	utilized,  	region_id";
$tdatafinancialresources[".sqlFrom"] = "FROM FinancialResources";
$tdatafinancialresources[".sqlWhereExpr"] = "";
$tdatafinancialresources[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinancialresources[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinancialresources[".arrGroupsPerPage"] = $arrGPP;

$tdatafinancialresources[".highlightSearchResults"] = true;

$tableKeysfinancialresources = array();
$tableKeysfinancialresources[] = "resource_id";
$tdatafinancialresources[".Keys"] = $tableKeysfinancialresources;


$tdatafinancialresources[".hideMobileList"] = array();




//	resource_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "resource_id";
	$fdata["GoodName"] = "resource_id";
	$fdata["ownerTable"] = "FinancialResources";
	$fdata["Label"] = GetFieldLabel("FinancialResources","resource_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "resource_id";

		$fdata["sourceSingle"] = "resource_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resource_id";

	
	
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


	$tdatafinancialresources["resource_id"] = $fdata;
		$tdatafinancialresources[".searchableFields"][] = "resource_id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "FinancialResources";
	$fdata["Label"] = GetFieldLabel("FinancialResources","year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`year`";

	
	
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


	$tdatafinancialresources["year"] = $fdata;
		$tdatafinancialresources[".searchableFields"][] = "year";
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "FinancialResources";
	$fdata["Label"] = GetFieldLabel("FinancialResources","amount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "amount";

		$fdata["sourceSingle"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatafinancialresources["amount"] = $fdata;
		$tdatafinancialresources[".searchableFields"][] = "amount";
//	utilized
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "utilized";
	$fdata["GoodName"] = "utilized";
	$fdata["ownerTable"] = "FinancialResources";
	$fdata["Label"] = GetFieldLabel("FinancialResources","utilized");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "utilized";

		$fdata["sourceSingle"] = "utilized";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "utilized";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatafinancialresources["utilized"] = $fdata;
		$tdatafinancialresources[".searchableFields"][] = "utilized";
//	region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "region_id";
	$fdata["GoodName"] = "region_id";
	$fdata["ownerTable"] = "FinancialResources";
	$fdata["Label"] = GetFieldLabel("FinancialResources","region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "region_id";

		$fdata["sourceSingle"] = "region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "region_id";

	
	
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
	$edata["LookupTable"] = "Regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatafinancialresources["region_id"] = $fdata;
		$tdatafinancialresources[".searchableFields"][] = "region_id";


$tables_data["FinancialResources"]=&$tdatafinancialresources;
$field_labels["FinancialResources"] = &$fieldLabelsfinancialresources;
$fieldToolTips["FinancialResources"] = &$fieldToolTipsfinancialresources;
$placeHolders["FinancialResources"] = &$placeHoldersfinancialresources;
$page_titles["FinancialResources"] = &$pageTitlesfinancialresources;


changeTextControlsToDate( "FinancialResources" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["FinancialResources"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["FinancialResources"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["FinancialResources"][0] = $masterParams;
				$masterTablesData["FinancialResources"][0]["masterKeys"] = array();
	$masterTablesData["FinancialResources"][0]["masterKeys"][]="region_id";
				$masterTablesData["FinancialResources"][0]["detailKeys"] = array();
	$masterTablesData["FinancialResources"][0]["detailKeys"][]="region_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_financialresources()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resource_id,  	`year`,  	amount,  	utilized,  	region_id";
$proto0["m_strFrom"] = "FROM FinancialResources";
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
	"m_strName" => "resource_id",
	"m_strTable" => "FinancialResources",
	"m_srcTableName" => "FinancialResources"
));

$proto6["m_sql"] = "resource_id";
$proto6["m_srcTableName"] = "FinancialResources";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "FinancialResources",
	"m_srcTableName" => "FinancialResources"
));

$proto8["m_sql"] = "`year`";
$proto8["m_srcTableName"] = "FinancialResources";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "FinancialResources",
	"m_srcTableName" => "FinancialResources"
));

$proto10["m_sql"] = "amount";
$proto10["m_srcTableName"] = "FinancialResources";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "utilized",
	"m_strTable" => "FinancialResources",
	"m_srcTableName" => "FinancialResources"
));

$proto12["m_sql"] = "utilized";
$proto12["m_srcTableName"] = "FinancialResources";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "FinancialResources",
	"m_srcTableName" => "FinancialResources"
));

$proto14["m_sql"] = "region_id";
$proto14["m_srcTableName"] = "FinancialResources";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "FinancialResources";
$proto17["m_srcTableName"] = "FinancialResources";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "resource_id";
$proto17["m_columns"][] = "year";
$proto17["m_columns"][] = "amount";
$proto17["m_columns"][] = "utilized";
$proto17["m_columns"][] = "region_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "FinancialResources";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "FinancialResources";
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
$proto0["m_srcTableName"]="FinancialResources";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_financialresources = createSqlQuery_financialresources();


	
																										;

					

$tdatafinancialresources[".sqlquery"] = $queryData_financialresources;



$tdatafinancialresources[".hasEvents"] = false;

?>