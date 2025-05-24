<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$requestTable = "admin_users";
$requestPage = "list";

require_once("include/dbcommon.php");
add_nocache_headers();

require_once('include/xtempl.php');

require_once("classes/searchcontrol.php");
require_once("classes/searchclause.php");
require_once("classes/panelsearchcontrol.php");
require_once("include/admin_users_variables.php");
require_once('classes/listpage.php');
require_once('include/lookuplinks.php');

//	Check whether the page was called as a part of Lookup wizard - List page with search.
//  Verify the eligibility of such a call.

InitLookupLinks();
if( Security::hasLogin() ) {
	if( !ListPage::processListPageSecurity( $strTableName ) )
		return;
}

if( ListPage::processSaveParams( $strTableName ) )
	return;

$options = array();
//array of params for classes

//	Include necessary files in accordance with the page displaying mode
$mode = ListPage::readListModeFromRequest();
if( $mode == LIST_SIMPLE )
{
	require_once('classes/listpage_simple.php');
	require_once("classes/searchpanelsimple.php");
}
elseif( $mode == LIST_AJAX )
{
	require_once('classes/listpage_simple.php');
	require_once('classes/listpage_ajax.php');
	require_once("classes/searchpanelsimple.php");
}
elseif( $mode == LIST_LOOKUP )
{	
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_lookup.php');
	
	$options["mainTable"] = postvalue("table");
	$options["mainField"] = postvalue("field");
	$options["mainPageType"] = postvalue("pageType");

	$options["mainRecordData"] = my_json_decode( postvalue('data') );
	$options["mainRecordMasterTable"] = postvalue('mainRecordMasterTable');
	
	if( postvalue("parentsExist") )
		$options["parentCtrlsData"] = my_json_decode( postvalue("parentCtrlsData") );
}
elseif( $mode == LIST_POPUPDETAILS )
{	
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dpinline.php');
	require_once('classes/listpage_dppopup.php');
}
elseif( $mode == LIST_DETAILS )
{	
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dpinline.php');
	require_once('classes/listpage_dplist.php');
}
elseif( $mode == LIST_DASHDETAILS )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
	require_once('classes/listpage_dpdash.php');
}
elseif( $mode == LIST_DASHBOARD )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
}
elseif( $mode == MAP_DASHBOARD )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
	require_once('classes/map_dashboard.php');
} 

$xt = new Xtempl( $mode != LIST_SIMPLE ); //#9607 1. Temporary fix

$options["pageName"] = postvalue("page");
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["flyId"] = (int)postvalue("recordId");
$options["mode"] = $mode;
$options["xt"] = &$xt;
$options["firstTime"] = postvalue("firstTime");
$options["sortBy"] = postvalue("sortby");
$options["requestGoto"] = postvalue_number("goto");


$options["masterPageType"] = postvalue("masterpagetype");
$options["masterPage"] = postvalue("masterpage");
$options["masterId"] = postvalue("masterid");

$options["masterTable"] = postvalue("mastertable");
if( $options["masterTable"] )
	$options["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();


if( $mode == LIST_DASHBOARD && postvalue("nodata") && strlen($options["masterTable"]) )
	$options["showNoData"] = true;

if( $mode != LIST_LOOKUP )
{
	$options["dashElementName"] = postvalue("dashelement");
	$options["dashTName"] = postvalue("table");
	$options["dashPage"] = postvalue("dashPage");
} 

if(	postvalue("mapRefresh") )
{
	$options["mapRefresh"] = true;
	$options["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
}

if(	postvalue("firstTime") )
	$options["firstTime"] = true;

//	Create $pageObject
$pageObject = ListPage::createListPage($strTableName, $options);

if( $pageObject->processSaveSearch() )
	exit();

if( $pageObject->updateRowOrder() )
	exit();

if ( $pageObject->processFieldFilter() )
	exit();

if( $pageObject->processTotals() ) 
	exit();

if( $mode != LIST_DETAILS && $mode != MAP_DASHBOARD && $mode != LIST_DASHBOARD ) 
{ 
	//maps
}

unset($_SESSION["message_add"]);
unset($_SESSION["message_edit"]);

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();

?>