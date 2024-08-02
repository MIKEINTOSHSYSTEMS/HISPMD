<?php
$topsmfr_status = array();
			$topsmfr_status["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/lookup?name=Status",
		"payload" => "[]"
	);
	$tables_data["MFR_Status"][".operations"] = &$topsmfr_status;
?>