<?php
$topsdhis2_indicator = array();
			$topsdhis2_indicator["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/analytics/fetch_indicators.php",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_Indicator"][".operations"] = &$topsdhis2_indicator;
?>