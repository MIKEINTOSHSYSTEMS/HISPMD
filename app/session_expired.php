<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/expiredpage.php');

add_nocache_headers();


$xt = new XTempl();

//an array of SessionExpiredPage constructor's params
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["pageType"] = PAGE_SESSION_EXPIRED;
$params["pageTable"] = GLOBAL_PAGES;
$params["pageName"] = postvalue("page"); 
$params["needSearchClauseObj"] = false;
$params["tName"] = GLOBAL_PAGES;


$params["mode"] = SessionExpiredPage::readExpiredModeFromRequest();
$params["sessionControl"] = postvalue("sessionControl");

$pageObject = new SessionExpiredPage( $params ); 

$pageObject->init();
$pageObject->process();
?>