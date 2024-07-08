<?php
$topsmfr_dashboard_report = array();
			$topsmfr_dashboard_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/report/dashboard?All",
		"payload" => "[]"
	);
	$tables_data["MFR_Dashboard_Report"][".operations"] = &$topsmfr_dashboard_report;
?>