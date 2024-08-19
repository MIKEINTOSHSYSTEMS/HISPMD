<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/hispmdusers_variables.php");
require_once(getabspath("classes/cipherer.php"));
require_once("classes/registerpage.php");
require_once('include/xtempl.php');



$xt = new Xtempl();

$id = postvalue_number("id");
$id = $id ? $id : 1;

$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params["tName"] = $strTableName;
$params["pageTable"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_REGISTER;
$params["pageName"] = postvalue("page"); 
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value__register_captcha_" . $id);

$params["action"] = RegisterPage::readActionFromRequest();
$params["mode"] = RegisterPage::readRegisterModeFromRequest();

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRegister"'); //?
$xt->eventsObject = &$globalEvents;

$pageObject = new RegisterPage( $params );
$pageObject->init();

$pageObject->process();

?>