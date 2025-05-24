<?php
$topsmfr_woredas = array();
			$topsmfr_woredas["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Woredas",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Woredas"][".operations"] = &$topsmfr_woredas;
?>