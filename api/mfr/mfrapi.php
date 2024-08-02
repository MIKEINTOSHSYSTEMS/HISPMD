<?php

header('Content-Type: application/json');

// Helper function to convert a string to an array if it's not empty
function strToArray($str) {
    return $str ? [$str] : [];
}

// Get filter parameters from the query string
$statusId = isset($_GET['statusId']) ? strToArray($_GET['statusId']) : [];
$operationalStatusId = isset($_GET['operationalStatusId']) ? strToArray($_GET['operationalStatusId']) : [];
$facilityTypeId = isset($_GET['facilityTypeId']) ? strToArray($_GET['facilityTypeId']) : [];
$parentFacilityTypeId = isset($_GET['parentFacilityTypeId']) ? strToArray($_GET['parentFacilityTypeId']) : [];
$regionId = isset($_GET['regionId']) ? strToArray($_GET['regionId']) : [];
$zoneId = isset($_GET['zoneId']) ? strToArray($_GET['zoneId']) : [];
$woredaId = isset($_GET['woredaId']) ? strToArray($_GET['woredaId']) : [];

// Create the data payload for the POST request
$dataPayload = array(
    "statusId" => $statusId,
    "operationalStatusId" => $operationalStatusId,
    "facilityTypeId" => $facilityTypeId,
    "parentFacilityTypeId" => $parentFacilityTypeId,
    "regionId" => $regionId,
    "zoneId" => $zoneId,
    "woredaId" => $woredaId,
    "pageNumber" => 1,
    "showPerPage" => 40
);

// Initialize cURL session
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
    CURLOPT_POSTFIELDS => json_encode($dataPayload),
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

// Execute cURL request and get the response
$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

if (isset($data['result']) && $data['result'] == 0) {
    // Output the result as JSON
    echo json_encode($data['model']);
} else {
    // Return an empty array if no data found
    echo json_encode([]);
}

?>
