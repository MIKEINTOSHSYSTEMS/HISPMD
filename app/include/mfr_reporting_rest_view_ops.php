<?php
$topsmfr_reporting_rest_view = array();
			$topsmfr_reporting_rest_view["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/report/dashboard?All",
		"payload" => "[]"
	);
	$tables_data["MFR_REPORTING_REST_View"][".operations"] = &$topsmfr_reporting_rest_view;
?>