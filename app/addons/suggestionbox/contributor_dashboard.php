<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/dashboardpage.php');

add_nocache_headers();

require_once("include/contributor_variables.php");

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strtablename, 'S' ) )
		return;
}

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["mode"] = postvalue("mode");
$params["pageType"] = PAGE_DASHBOARD;
$params["pageName"] = postvalue("page");
				
$pageObject = new DashboardPage($params);
$pageObject->init();

$pageObject->process();
?>