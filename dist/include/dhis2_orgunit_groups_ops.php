<?php
$topsdhis2_orgunit_groups = array();
			$topsdhis2_orgunit_groups["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnitGroups",
		"payload" => "[]"
	);
	$tables_data["DHIS2_OrgUnit_Groups"][".operations"] = &$topsdhis2_orgunit_groups;
?>