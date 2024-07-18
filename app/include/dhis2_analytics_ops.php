<?php
$topsdhis2_analytics = array();
			$topsdhis2_analytics["selectList"] = array(
		"subtype" => "rest",
		"method" => "POST",
		"request" => "/api/analytics.json?dimension=dx:{indicator}&dimension=ou:{orgUnit}&dimension=pe:{period}&displayProperty=NAME&outputIdScheme=ID",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Analytics"][".operations"] = &$topsdhis2_analytics;
?>