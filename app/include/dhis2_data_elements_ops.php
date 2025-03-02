<?php
$topsdhis2_data_elements = array();
			$topsdhis2_data_elements["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dataElements?fields=id%2CdisplayName~rename(name)%2CdimensionItemType&order=displayName:asc&paging=false",
		"payload" => "[]"
	);
	$tables_data["DHIS2_Data_Elements"][".operations"] = &$topsdhis2_data_elements;
?>