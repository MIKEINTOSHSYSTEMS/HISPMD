<?php
$topsdhis2_eidm_hc = array();
			$topsdhis2_eidm_hc["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/eidm_hc/1.php",
		"payload" => "[]"
	);
	$tables_data["DHIS2_EIDM_HC"][".operations"] = &$topsdhis2_eidm_hc;
?>