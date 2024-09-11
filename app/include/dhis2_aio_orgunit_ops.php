<?php
$topsdhis2_aio_orgunit = array();
			$topsdhis2_aio_orgunit["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/33/orgUnitAnalytics?",
		"payload" => "[{\"name\":\"ou\",\"value\":\":{search.ou}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"ougs\",\"value\":\":{search.ougs}\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_AIO_OrgUnit"][".operations"] = &$topsdhis2_aio_orgunit;
?>