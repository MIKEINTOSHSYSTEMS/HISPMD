<?php
$topsdhis2_reportingrates = array();
			$topsdhis2_reportingrates["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/report/dhis2reportsapis.php?",
		"payload" => "[{\"name\":\"organisationUnits\",\"value\":\":{search.Organisation unit ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"dataSet\",\"value\":\":{search.Dataset ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"facilityType\",\"value\":\":{search.Facility Type}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"reportPeriod\",\"value\":\":{search.Report Period}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"ownershipType\",\"value\":\":{search.Ownership Type ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"settlementType\",\"value\":\":{search.Settlement Type ID}\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_ReportingRates"][".operations"] = &$topsdhis2_reportingrates;
?>