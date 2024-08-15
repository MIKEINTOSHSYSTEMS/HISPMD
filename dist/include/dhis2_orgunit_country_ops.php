<?php
$topsdhis2_orgunit_country = array();
			$topsdhis2_orgunit_country["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnits?fields=id%2CdisplayName%2Cpath%2Cchildren%3A%3AisNotEmpty%2CmemberCount&paging=false&level=1",
		"payload" => "[]"
	);
	$tables_data["DHIS2_OrgUnit_Country"][".operations"] = &$topsdhis2_orgunit_country;
?>