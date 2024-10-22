<?php
@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

require_once("include/dbcommon.php");
require_once('classes/remindpwdpage.php');
require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

$xt = new Xtempl();


$params = array();
$params["xt"] = &$xt;
$params["id"] = postvalue_number("id");
$params["pageType"] = PAGE_REMIND;
$params["tName"] = Security::loginTable();
$params["pageTable"] = GLOBAL_PAGES;
$params["needSearchClauseObj"] = false;

$params["captchaValue"] = postvalue("value_captcha_1");
$params["userEmail"] = postvalue("username_email");

$params["action"] = RemindPasswordPage::readActionFromRequest();
$params["mode"] = RemindPasswordPage::readRemindModeFromRequest();

$pageObject = new RemindPasswordPage( $params );
$pageObject->init();

$pageObject->process();
?>