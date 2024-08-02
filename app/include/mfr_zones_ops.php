<?php
$topsmfr_zones = array();
			$topsmfr_zones["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Zones",
		"payload" => "[]"
	);
	$tables_data["MFR_Zones"][".operations"] = &$topsmfr_zones;
?>