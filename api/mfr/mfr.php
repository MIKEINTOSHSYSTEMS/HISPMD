<?php

// Check if filter parameters are set
$nameFilter = isset($_GET['name']) ? $_GET['name'] : '';
$statusFilter = isset($_GET['status']) ? $_GET['status'] : '';
$operationalStatusFilter = isset($_GET['operationalStatus']) ? $_GET['operationalStatus'] : '';
$facilityTypeFilter = isset($_GET['facilityType']) ? $_GET['facilityType'] : '';
$parentFacilityTypeFilter = isset($_GET['parentFacilityType']) ? $_GET['parentFacilityType'] : '';
$regionFilter = isset($_GET['region']) ? $_GET['region'] : '';
$zoneFilter = isset($_GET['zone']) ? $_GET['zone'] : '';
$woredaFilter = isset($_GET['woreda']) ? $_GET['woreda'] : '';

// Fetch data from API
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://mfr-be.k8s.sandboxaddis.com/api/Facility/GetFacilities',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    //CURLOPT_POSTFIELDS =>'{"statusId":[4],"operationalStatusId":[2],"parentFacilityTypeId":[1],"facilityTypeId":[1],"parentFacilityTypeId":[1],"regionId":[1],"zoneId":[9],"woredaId":[101],"pageNumber":1,"showPerPage":20}',
    CURLOPT_POSTFIELDS =>'{"statusId": [3],"operationalStatusId": [1], "facilityTypeId":[28],"parentFacilityTypeId":[3], "regionId":[1],"zoneId":[9],"woredaId":[101],"pageNumber":1,"showPerPage":40}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept-Language: en-US,en;q=0.9',
        'Origin: https://mfrv2.moh.gov.et',
        'Pragma: no-cache',
        'Referer: https://mfrv2.moh.gov.et/',
        'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Microsoft Edge";v="126"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'Content-Type: application/json'

    ),
));

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

if ($data['result'] == 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Operational Status</th>
            <th>Facility Type</th>
            <th>Parent Facility Type</th>
            <th>Region</th>
            <th>Zone</th>
            <th>Woreda</th>
          </tr>";

    foreach ($data['model'] as $facility) {
        if (($nameFilter && stripos($facility['name'], $nameFilter) === false) ||
            ($statusFilter && stripos($facility['status'], $statusFilter) === false) ||
            ($operationalStatusFilter && stripos($facility['operationalStatus'], $operationalStatusFilter) === false) ||
            ($facilityTypeFilter && stripos($facility['facilityType'], $facilityTypeFilter) === false) ||
            ($parentFacilityTypeFilter && stripos($facility['parentFacilityType'], $parentFacilityTypeFilter) === false) ||
            ($regionFilter && stripos($facility['region'], $regionFilter) === false) ||
            ($zoneFilter && stripos($facility['zone'], $zoneFilter) === false) ||
            ($woredaFilter && stripos($facility['woreda'], $woredaFilter) === false)) {
            continue;
        }

        echo "<tr>
                <td>{$facility['id']}</td>
                <td>{$facility['name']}</td>
                <td>{$facility['status']}</td>
                <td>{$facility['operationalStatus']}</td>
                <td>{$facility['facilityType']}</td>
                <td>{$facility['parentFacilityType']}</td>
                <td>{$facility['region']}</td>
                <td>{$facility['zone']}</td>
                <td>{$facility['woreda']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}
?>
