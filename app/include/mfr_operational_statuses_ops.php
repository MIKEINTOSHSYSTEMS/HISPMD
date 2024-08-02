<?php
$topsmfr_operational_statuses = array();
			$topsmfr_operational_statuses["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/lookup?name=OperationalStatus",
		"payload" => "[]"
	);
	$tables_data["MFR_Operational_Statuses"][".operations"] = &$topsmfr_operational_statuses;
?>