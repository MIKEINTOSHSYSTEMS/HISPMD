<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

// Function to fetch data from a given URL with error handling
function fetchData($url) {
    global $auth;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ));
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }
    curl_close($ch);

    $data = json_decode($result, true);
    if ($data === null) {
        http_response_code(500);
        echo json_encode(['error' => 'Invalid JSON response from API']);
        exit;
    }

    return $data;
}

// Validate and fetch query parameters
$organisationUnits = isset($_GET['organisationUnits']) ? $_GET['organisationUnits'] : null;
$dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : null;
$reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : null;
$facilityTypeKey = isset($_GET['facilityType']) ? $_GET['facilityType'] : 'health_post';

// Validate mandatory parameters
if (!$organisationUnits || !$dataSet || !$reportPeriod) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required parameters: organisationUnits, dataSet, or reportPeriod']);
    exit;
}

// Map facility type codes to their IDs and labels
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Get facility type ID and label
$facilityType = $facilityTypeMap[$facilityTypeKey]['id'] ?? $facilityTypeMap['health_post']['id'];
$facilityTypeLabel = $facilityTypeMap[$facilityTypeKey]['label'] ?? $facilityTypeMap['health_post']['label'];

// Convert organisation units into a semicolon-separated string
$dimensionOu = implode(';', explode(',', $organisationUnits));

// Construct the DHIS2 API query URL
$queryUrl = $apiUrl . "analytics.json?dimension=dx:{$dataSet}.ACTUAL_REPORTS;{$dataSet}.EXPECTED_REPORTS;{$dataSet}.REPORTING_RATE;{$dataSet}.ACTUAL_REPORTS_ON_TIME;{$dataSet}.REPORTING_RATE_ON_TIME&dimension=ou:$dimensionOu&filter=pe:$reportPeriod;saIPeABoPMH:$facilityType&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME";

// Fetch data from the DHIS2 API
$data = fetchData($queryUrl);

// Prepare the response
echo json_encode([
    "status" => "success",
    "data" => $data
]);

?>
