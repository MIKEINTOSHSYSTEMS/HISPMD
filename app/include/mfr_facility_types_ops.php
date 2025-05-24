<?php
$topsmfr_facility_types = array();
			$topsmfr_facility_types["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/lookup/GetFacilityType",
		"payload" => "[]",
		"skipFilter" => "0",
		"skipOrder" => "0",
		"payloadFormat" => "0",
		"payloadString" => "",
		"rawPayload" => "0"
	);
	$tables_data["MFR_Facility_Types"][".operations"] = &$topsmfr_facility_types;
?>