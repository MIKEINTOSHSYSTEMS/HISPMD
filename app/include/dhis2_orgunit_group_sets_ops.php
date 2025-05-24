<?php
$topsdhis2_orgunit_group_sets = array();
			$topsdhis2_orgunit_group_sets["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnitGroupSets",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_OrgUnit_Group_Sets"][".operations"] = &$topsdhis2_orgunit_group_sets;
?>