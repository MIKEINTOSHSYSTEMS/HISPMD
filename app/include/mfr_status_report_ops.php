<?php
$topsmfr_status_report = array();
			$topsmfr_status_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "POST",
		"request" => "/Report/Counts",
		"payload" => "[{\"name\":\"pageNumber\",\"value\":\"1\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"showPerPage\",\"value\":\"20\",\"location\":\"post\",\"skipEmpty\":true},{\"name\":\"Content-Type\",\"value\":\"application/json\",\"location\":\"header\",\"skipEmpty\":true}]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Status_Report"][".operations"] = &$topsmfr_status_report;
?>