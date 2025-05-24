<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$requestTable = "DHIS2_ReportingRate_Chart";
$requestPage = "list";

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/chartpage.php');
require_once('classes/searchclause.php');
add_nocache_headers();

require_once("include/dhis2_reportingrate_chart_variables.php");

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strtablename, 'S' ) )
		return;
}

$pageMode = ChartPage::readChartModeFromRequest();
$xt = new Xtempl( $pageMode != CHART_SIMPLE );

// set params for a RunnerPage constructor
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_CHART;
$params["pageName"] = postvalue("page");

$params["masterPageType"] = postvalue("masterpagetype");
$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] =  RunnerPage::readMasterKeysFromRequest();
 
if( $pageMode = CHART_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	$params["dashPage"] = postvalue("dashPage");
}

$pageObject = new ChartPage( $params );
$pageObject->init();

if( $pageObject->processSaveSearch() )
	exit();

$pageObject->process();
?>