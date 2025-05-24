<?php
$topsmfr_regions = array();
			$topsmfr_regions["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Regions",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Regions"][".operations"] = &$topsmfr_regions;
?>