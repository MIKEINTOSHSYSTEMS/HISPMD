<?php
$topsdhis2_indicators = array();
			$topsdhis2_indicators["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/indicators.json?fields=id,displayName&paging=false",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Indicators"][".operations"] = &$topsdhis2_indicators;
?>