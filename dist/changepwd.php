<?php
@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

require_once("include/dbcommon.php");

$token = postvalue("token");

if( !$token && (!isLogged() || Security::isGuest() ) )
{ 
	Security::saveRedirectURL();
	HeaderRedirect("login", "", "message=expired"); 
	return;
}

require_once("include/xtempl.php");
require_once("classes/changepwdpage.php");
require_once(getabspath("classes/cipherer.php"));


$xt = new Xtempl();


$params = array();
$params["xt"] = &$xt;
$params["token"] = $token;
$params["id"] = postvalue_number("id");
$params["tName"] = Security::loginTable();
$params["pageTable"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_CHANGEPASS;
$params["needSearchClauseObj"] = false;
$params["action"] = ChangePasswordPage::readActionFromRequest();

$params["mode"] = ChangePasswordPage::readModeFromRequest();

$pageObject = new ChangePasswordPage( $params );
$pageObject->init();

$pageObject->process();
?>