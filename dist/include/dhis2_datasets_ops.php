<?php
$topsdhis2_datasets = array();
			$topsdhis2_datasets["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/report/fetch_datasets.php",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Datasets"][".operations"] = &$topsdhis2_datasets;
?>