<?php
$strTableName="public.moh_data_scope";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.moh_data_scope";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>