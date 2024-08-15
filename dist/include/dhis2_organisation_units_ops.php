<?php
$topsdhis2_organisation_units = array();
			$topsdhis2_organisation_units["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnits.json?fields=id,displayName&paging=false",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Organisation_Units"][".operations"] = &$topsdhis2_organisation_units;
?>