<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_mfr_zone_report  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		// Fetch data from the API
$apiUrl = "https://mfr-be.k8s.sandboxaddis.com/api/Report/Geolocations?type=Zone";
$response = file_get_contents($apiUrl);

if ($response === false) {
    echo 'Error fetching the API data.';
    return;
}

$data = json_decode($response, true);

// Clear existing data in MFR_Zone table
DB::Exec("TRUNCATE TABLE MFR_Zone");

// Insert data into MFR_Zone table
foreach ($data['model'] as $item) {
    $name = $item['name'];
    $lat = $item['lat'];
    $lng = $item['lng'];
    $count = (int)$item['count'];

    $sql = "INSERT INTO MFR_Zone (Zone, Lat, Lng, Count) VALUES ('$name', '$lat', '$lng', $count)";
    DB::Exec($sql);
}

//echo "Data successfully inserted into MFR_Zone table.";

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
