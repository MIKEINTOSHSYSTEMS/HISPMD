<?php
$topsmfr_regions = array();
			$topsmfr_regions["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Regions",
		"payload" => "[]"
	);
	$tables_data["MFR_Regions"][".operations"] = &$topsmfr_regions;
?>