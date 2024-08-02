<?php
$topsmfr_facility_types = array();
			$topsmfr_facility_types["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/lookup/GetFacilityType",
		"payload" => "[]"
	);
	$tables_data["MFR_Facility_Types"][".operations"] = &$topsmfr_facility_types;
?>