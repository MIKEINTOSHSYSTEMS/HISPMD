<?php
$topsdhis2_orgunit_groups = array();
			$topsdhis2_orgunit_groups["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnitGroups",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_OrgUnit_Groups"][".operations"] = &$topsdhis2_orgunit_groups;
?>