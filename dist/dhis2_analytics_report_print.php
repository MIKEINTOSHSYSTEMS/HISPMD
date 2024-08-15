<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
require_once('classes/searchclause.php');
require_once('include/xtempl.php');

if( @$_REQUEST["format"] != "excel" && @$_REQUEST["format"] != "word" ) 
	add_nocache_headers();

require_once("include/dhis2_analytics_report_variables.php");


if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strTableName, 'P' ) )
		return;
}

	
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');	
	
$xt = new Xtempl();

// an array of ReportPrintPage constructor params
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["mode"] = postvalue( "pdfjson" ) ? PRINT_PDFJSON : REPORT_SIMPLE;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_RPRINT;
$params["pageName"] = postvalue("page");

$params["allPagesMode"] = postvalue("all");
$params["pdfMode"] = postvalue("pdf");

$params["format"] = postvalue("format");
$params["splitByGroups"] = postvalue("records");


//crosstable params
$params["x"] = postvalue("x");
$params["y"] = postvalue("y");
$params["dataField"] = postvalue("data");
$params["operation"] = postvalue("op");
$params["xType"] = postvalue("xtype");
$params["yType"] = postvalue("ytype");
//

$params["pdfBackgroundImage"] = postvalue("pdfBackgroundImage");

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();


$pageObject = new ReportPrintPage($params);
$pageObject->init();

$pageObject->process();
?>