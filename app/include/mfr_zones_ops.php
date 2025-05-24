<?php
$topsmfr_zones = array();
			$topsmfr_zones["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Zones",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Zones"][".operations"] = &$topsmfr_zones;
?>