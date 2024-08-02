<?php
$topsmfr_woredas = array();
			$topsmfr_woredas["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/location/Woredas",
		"payload" => "[]"
	);
	$tables_data["MFR_Woredas"][".operations"] = &$topsmfr_woredas;
?>