<?php
$topsdhis2_organisation_units = array();
			$topsdhis2_organisation_units["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnits.json?fields=id,displayName&paging=false",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_Organisation_Units"][".operations"] = &$topsdhis2_organisation_units;
?>