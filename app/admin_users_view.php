<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/admin_users_variables.php");
require_once('include/xtempl.php');
require_once('classes/viewpage.php');
require_once("classes/searchclause.php");

add_nocache_headers();

if( Security::hasLogin() ) {
	if( !ViewPage::processEditPageSecurity( $strTableName ) )
		return;	
}

$pageMode = ViewPage::readViewModeFromRequest();

$xt = new Xtempl();

// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["ID"] = postvalue("editid1");

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_VIEW;
$params["pageName"] = postvalue("page");
$params["tName"] = $strTableName;

$params["pdfMode"] = postvalue("pdf") !== "";

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();

if( $pageMode == VIEW_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	$params["dashPage"] = postvalue("dashPage");
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}		
} 
if( $pageMode == VIEW_POPUP )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("dashTName");
	$params["dashPage"] = postvalue("dashPage");
}

$params["pdfBackgroundImage"] = postvalue("pdfBackgroundImage");

$pageObject = new ViewPage($params);
$pageObject->init();

$pageObject->process();

?>