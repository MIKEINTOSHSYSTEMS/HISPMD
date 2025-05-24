<?php
$topsdhis2_indicators = array();
			$topsdhis2_indicators["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/indicators.json?fields=id,displayName&paging=false",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_Indicators"][".operations"] = &$topsdhis2_indicators;
?>