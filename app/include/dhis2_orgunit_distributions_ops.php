<?php
$topsdhis2_orgunit_distributions = array();
			$topsdhis2_orgunit_distributions["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "/api/dhis2/orgunitdist/getorgdist.php",
		"payload" => "[{\"name\":\"action\",\"value\":\"fetchOrgUnitAnalytics\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"orgUnits\",\"value\":\"b3aCK1PTn5S,yY9BLUUegel,UFtGyqJMEZh,yb9NKGA8uqt,Fccw8uMlJHN,tDoLtk2ylu4,G9hDiPNoB7d,moBiwh9h5Ce,b9nYedsL8te,XU2wpLlX4Vk,xNUoZIrGKxQ,PCKGSJoNHXi,a2QIIR2UXcd.HIlnt7Qj8do,Gmw0DJLXGtx\",\"location\":\"url\",\"skipEmpty\":true},{\"name\":\"ougs\",\"value\":\"saIPeABoPMH\",\"location\":\"url\",\"skipEmpty\":true}]"
	);
	$tables_data["DHIS2_OrgUnit_Distributions"][".operations"] = &$topsdhis2_orgunit_distributions;
?>