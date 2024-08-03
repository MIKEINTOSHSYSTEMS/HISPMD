<?php

header('Content-Type: application/json');

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Helper function to decode JSON parameters
function jsonToArray($str) {
    return $str ? json_decode($str, true) : [];
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get filter parameters from the query string
    $statusId = isset($_GET['statusId']) ? jsonToArray($_GET['statusId']) : [];
    $operationalStatusId = isset($_GET['operationalStatusId']) ? jsonToArray($_GET['operationalStatusId']) : [];
    $facilityTypeId = isset($_GET['facilityTypeId']) ? jsonToArray($_GET['facilityTypeId']) : [];
    $parentFacilityTypeId = isset($_GET['parentFacilityTypeId']) ? jsonToArray($_GET['parentFacilityTypeId']) : [];
    $regionId = isset($_GET['regionId']) ? jsonToArray($_GET['regionId']) : [];
    $zoneId = isset($_GET['zoneId']) ? jsonToArray($_GET['zoneId']) : [];
    $woredaId = isset($_GET['woredaId']) ? jsonToArray($_GET['woredaId']) : [];
    $pageNumber = isset($_GET['pageNumber']) ? intval($_GET['pageNumber']) : 1;
    $showPerPage = isset($_GET['showPerPage']) ? intval($_GET['showPerPage']) : 40;

    // Create the data payload for the POST request
    $dataPayload = array(
        "statusId" => $statusId,
        "operationalStatusId" => $operationalStatusId,
        "facilityTypeId" => $facilityTypeId,
        "parentFacilityTypeId" => $parentFacilityTypeId,
        "regionId" => $regionId,
        "zoneId" => $zoneId,
        "woredaId" => $woredaId,
        "pageNumber" => $pageNumber,
        "showPerPage" => $showPerPage
    );

    // Initialize cURL session
    $ch = curl_init();

    curl_setopt_array($ch, array(
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
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }

    // Check for HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        http_response_code($httpCode);
        echo json_encode(['error' => 'Unexpected HTTP response code: ' . $httpCode]);
        curl_close($ch);
        exit;
    }

    curl_close($ch);

    // Decode the JSON response
    $data = json_decode($response, true);

    if (isset($data['result']) && $data['result'] == 0) {
        // Output the result as JSON
        echo json_encode($data['model'], JSON_PRETTY_PRINT);
    } else {
        // Return an empty array if no data found
        echo json_encode([]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}

?>
