<?php
$topsmfr_status = array();
			$topsmfr_status["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/lookup?name=Status",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Status"][".operations"] = &$topsmfr_status;
?>