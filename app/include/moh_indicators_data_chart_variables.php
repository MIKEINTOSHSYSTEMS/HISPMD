<?php
$strTableName="MOH_Indicators_data_Chart";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.moh_indicator_data";

$gstrOrderBy="ORDER BY TO_DATE(\"year\"::text, 'YYYY'), CASE 
        WHEN quarter_id IS NOT NULL THEN CONCAT('Q', quarter_id::TEXT, '-', \"year\"::TEXT)
        WHEN month_id IS NOT NULL THEN CONCAT('M', month_id::TEXT, '-', \"year\"::TEXT)
        ELSE \"year\"::TEXT
    END";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>