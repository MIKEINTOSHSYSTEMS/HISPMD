<?php
$topsmfr_region_report = array();
			$topsmfr_region_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/Report/Geolocations?type=Region",
		"payload" => "[]"
	);
	$tables_data["MFR_Region_Report"][".operations"] = &$topsmfr_region_report;
?>