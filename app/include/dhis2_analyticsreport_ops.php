<?php
$topsdhis2_analyticsreport = array();
			$topsdhis2_analyticsreport["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/report/dhis2analyticsreportapi.php?",
		"payload" => "[{\"name\":\"filterOu\",\"value\":\":{search.organisationUnit}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"dimensionDx\",\"value\":\":{search.indicator}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"dimensionPe\",\"value\":\":{search.period}\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_AnalyticsReport"][".operations"] = &$topsdhis2_analyticsreport;
?>