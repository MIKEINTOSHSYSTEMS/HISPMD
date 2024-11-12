<?php
$topsdhis2_reporting_rate_details_chart = array();
			$topsdhis2_reporting_rate_details_chart["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/report/dhis2reportingsapi.php?",
		"payload" => "[{\"name\":\"organisationUnits\",\"value\":\":{search.Organisation unit ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"dataSet\",\"value\":\":{search.Dataset ID}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"facilityType\",\"value\":\":{search.Facility Type}\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"reportPeriod\",\"value\":\":{search.Report Period}\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_Reporting_Rate_Details_Chart"][".operations"] = &$topsdhis2_reporting_rate_details_chart;
?>