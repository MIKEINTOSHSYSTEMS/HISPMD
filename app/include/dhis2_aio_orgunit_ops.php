<?php
$topsdhis2_aio_orgunit = array();
			$topsdhis2_aio_orgunit["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/orgUnitAnalytics?",
		"payload" => "[{\"name\":\"ou\",\"value\":\":{search.name}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"ougs\",\"value\":\":{search.column}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"columns\",\"value\":\":{search.column}\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_AIO_OrgUnit"][".operations"] = &$topsdhis2_aio_orgunit;
?>