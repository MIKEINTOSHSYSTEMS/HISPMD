<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$mSTable = postvalue("mSTable");
$mTable = GetTableByShort( $mSTable );
if( !$mTable )
	exit(0);

$dSTable = postvalue("dSTable");
$dTable = GetTableByShort( $dSTable );
if( !$dTable )
	exit(0);

if( !Security::userCan('S', $dTable ))
	exit(0);

require_once('include/xtempl.php');

$mKeys = my_json_decode(postvalue("mKeys"));
$pageType = postvalue("pageType");

$xt = new Xtempl();
//array of params for classes
$params = array("pageType" => $pageType);
$params['xt'] = &$xt;
$params["tName"] = $mTable;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
//$pageObject->init();

for($dInd = 0; $dInd < count($pageObject->allDetailsTablesArr); $dInd ++) 
{
	if($pageObject->allDetailsTablesArr[$dInd]['dDataSourceTable'] == $dTable)
		break;
}
$output = $pageObject->countDetailsRecsNoSubQ($dInd,$mKeys);

$respObj = array('success'=>true, 'recsCount'=>$output);
echo printJSON($respObj);
?>