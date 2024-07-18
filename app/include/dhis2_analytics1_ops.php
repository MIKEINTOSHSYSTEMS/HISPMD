<?php
$topsdhis2_analytics1 = array();
			$topsdhis2_analytics1["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/analytics/get_dhis2_analytics.php?indicator=:{keys.Data}&orgUnit=:{keys.Organisation unit}&period=:{keys.Period}",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Analytics"][".operations"] = &$topsdhis2_analytics1;
?>