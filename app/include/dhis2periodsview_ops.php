<?php
$topsdhis2periodsview = array();
			$topsdhis2periodsview["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/analytics/fetch_periods.php",
		"payload" => "[]"
	);
	$tables_data["DHIS2PeriodsView"][".operations"] = &$topsdhis2periodsview;
?>