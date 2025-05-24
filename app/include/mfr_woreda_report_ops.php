<?php
$topsmfr_woreda_report = array();
			$topsmfr_woreda_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/Report/Geolocations?type=Woreda",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Woreda_Report"][".operations"] = &$topsmfr_woreda_report;
?>