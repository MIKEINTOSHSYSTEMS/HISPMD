<?php 

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/userinfopage.php');

add_nocache_headers();

if( !UserInfoPage::processUserInfoPageSecurity( $strTableName ) )
	return;

//	render all necessary layouts


$xt = new Xtempl();	
$id = postvalue_number("id");
$id = intval($id) == 0 ? 1 : $id;


//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_USERINFO;
$params["pageName"] = postvalue("page");
$params["tName"] = Security::loginTable();
$params["pageTable"] = GLOBAL_PAGES;
$params["action"] = postvalue("a");
		
;
$params["captchaName"] = "captcha_1209xre";
$params["captchaValue"] = postvalue("value_captcha_1209xre_" . $id);
$params["mode"] = UserInfoPage::readPageModeFromRequest();

$pageObject = new UserInfoPage($params);

$pageObject->init();

$pageObject->process();
?>