<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("classes/searchclause.php");
require_once("classes/sql.php");

require_once("include/main_variables.php");

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strtablename, 'P' ) )
		return;
}


require_once("include/export_functions.php");
require_once("classes/exportpage.php");
require_once("include/xtempl.php");

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_EXPORT;
$params["pageName"] = postvalue("page");

$params["selectedFields"] = postvalue("exportFields");
$params["exportType"] = postvalue("type");

$params["allPagesMode"] = postvalue("records") == "all";
$params["currentPageMode"] = postvalue("records") == "page";
$params["selection"] = postvalue("selection"); 
$params["csvDelimiter"] = postvalue("delimiter"); 

if( postvalue("txtformatting") == "raw" )
	$params["useRawValues"] = true;

$params["mode"] = ExportPage::readModeFromRequest();

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();
	
$pageObject = new ExportPage( $params );
$pageObject->init();

$pageObject->process();
?>