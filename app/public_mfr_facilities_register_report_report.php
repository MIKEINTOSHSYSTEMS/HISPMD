<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$requestTable = "public.mfr_facilities_register_report";
$requestPage = "list";

require_once("include/dbcommon.php");
require_once('include/xtempl.php');

add_nocache_headers();

require_once('classes/reportpage.php');
require_once('classes/searchclause.php');
require_once("include/public_mfr_facilities_register_report_variables.php");

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strTableName, 'S' ) ) {
		return;
	}
}


$pageMode = ReportPage::readReportModeFromRequest();
$xt = new Xtempl( $pageMode != REPORT_SIMPLE ); //#9607 1. Temporary fix

$gSettings = new ProjectSettings( $strTableName );
//array of params for ReportPage constructor
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_REPORT;
$params["pageName"] = postvalue("page");
$params["arrRecsPerPage"] = $gSettings->getRecordsPerPageArray();
$params["arrGroupsPerPage"] = $gSettings->getGroupsPerPageArray();
$params["requestGoto"] = postvalue_number("goto");

//crosstable params
$params["x"] = postvalue("x");
$params["y"] = postvalue("y");
$params["dataField"] = postvalue("data");
$params["operation"] = postvalue("op");
$params["xType"] = postvalue("xtype");
$params["yType"] = postvalue("ytype");
$params["selectedAxis"] = postvalue("axis");

if( postvalue("crosstable_refresh") )
	$params["crosstableRefresh"] = true;

$params["masterPageType"] = postvalue("masterpagetype");

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();


if( $pageMode = REPORT_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
}

$pageObject = new ReportPage( $params );
$pageObject->init();

if( $pageObject->processSaveSearch() )
	exit();

$pageObject->process();
?>