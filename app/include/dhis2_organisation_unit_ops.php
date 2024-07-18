<?php
$topsdhis2_organisation_unit = array();
			$topsdhis2_organisation_unit["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/analytics/fetch_org_units.php",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Organisation_Unit"][".operations"] = &$topsdhis2_organisation_unit;
?>