<?php
$topsdhis2_reporting_rate_details = array();
			$topsdhis2_reporting_rate_details["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/report/dhis2reportingsapi.php?",
		"payload" => "[{\"name\":\"organisationUnits\",\"value\":\":{search.Organisation unit ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"dataSet\",\"value\":\":{search.Dataset ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"facilityType\",\"value\":\":{search.Facility Type}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"reportPeriod\",\"value\":\":{search.Report Period}\",\"location\":\"url\",\"skipEmpty\":true}]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["DHIS2_Reporting_Rate_Details"][".operations"] = &$topsdhis2_reporting_rate_details;
?>