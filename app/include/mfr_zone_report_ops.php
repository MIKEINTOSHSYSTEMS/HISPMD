<?php
$topsmfr_zone_report = array();
			$topsmfr_zone_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/Report/Geolocations?type=Zone",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Zone_Report"][".operations"] = &$topsmfr_zone_report;
?>