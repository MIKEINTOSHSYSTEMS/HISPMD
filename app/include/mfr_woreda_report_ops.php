<?php
$topsmfr_woreda_report = array();
			$topsmfr_woreda_report["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/Report/Geolocations?type=Woreda",
		"payload" => "[]"
	);
	$tables_data["MFR_Woreda_Report"][".operations"] = &$topsmfr_woreda_report;
?>