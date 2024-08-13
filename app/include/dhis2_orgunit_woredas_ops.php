<?php
$topsdhis2_orgunit_woredas = array();
			$topsdhis2_orgunit_woredas["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/organisationUnits?fields=id%2CdisplayName%2Cpath%2Cchildren%3A%3AisNotEmpty%2CmemberCount&paging=false&level=4",
		"payload" => "[]"
	);
	$tables_data["DHIS2_OrgUnit_Woredas"][".operations"] = &$topsdhis2_orgunit_woredas;
?>