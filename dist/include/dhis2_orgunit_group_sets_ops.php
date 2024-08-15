<?php
$topsdhis2_orgunit_group_sets = array();
			$topsdhis2_orgunit_group_sets["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnitGroupSets",
		"payload" => "[]"
	);
	$tables_data["DHIS2_OrgUnit_Group_Sets"][".operations"] = &$topsdhis2_orgunit_group_sets;
?>