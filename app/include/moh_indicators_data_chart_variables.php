<?php
$strTableName="MOH_Indicators_data_Chart";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.moh_indicator_data";

$gstrOrderBy="ORDER BY d.\"year\", CASE 
        WHEN d.quarter_id IS NOT NULL THEN CONCAT('Q', d.quarter_id::TEXT, '-', d.\"year\"::TEXT)
        WHEN d.month_id IS NOT NULL THEN CONCAT('M', d.month_id::TEXT, '-', d.\"year\"::TEXT)
        ELSE d.\"year\"::TEXT
    END";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>