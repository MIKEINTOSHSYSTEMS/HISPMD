<?php
$topsdhis2_orgunit_zone = array();
			$topsdhis2_orgunit_zone["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnits?fields=id%2CdisplayName%2Cpath%2Cchildren%3A%3AisNotEmpty%2CmemberCount&paging=false&level=3",
		"payload" => "[]"
	);
	$tables_data["DHIS2_OrgUnit_Zone"][".operations"] = &$topsdhis2_orgunit_zone;
?>