<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

/**
 * Fetch data from a given URL with cURL and error handling
 */
function fetchData($url) {
    global $auth;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

/**
 * Fetch analytics data for a given set of parameters
 */
function fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel) {
    global $apiUrl;

    // Define indicator dimensions for the dataset
    $indicators = [
        "{$dataSet}.ACTUAL_REPORTS",
        "{$dataSet}.EXPECTED_REPORTS",
        "{$dataSet}.REPORTING_RATE",
        "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
        "{$dataSet}.REPORTING_RATE_ON_TIME"
    ];
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $organisationUnits);

    // Construct the analytics API URL
    $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod;saIPeABoPMH:$facilityType&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    
    // Fetch data from the API
    $analyticsData = fetchData($queryUrl);

    // Validate and format the response
    $title = $analyticsData['title'] ?? '';
    $headers = $analyticsData['headers'] ?? [];
    $rows = $analyticsData['rows'] ?? [];

    // Add dataset, facility type, and period to each row
    $enhancedRows = array_map(function($row) use ($dataSet, $facilityTypeLabel, $reportPeriod) {
        return array_merge($row, [
            'dataSet' => $dataSet,
            'facilityType' => $facilityTypeLabel,
            'reportPeriod' => $reportPeriod
        ]);
    }, $rows);

    echo json_encode([
        "title" => $title,
        "headers" => array_merge($headers, ["Dataset", "Facility Type", "Report Period"]),
        "rows" => $enhancedRows
    ]);
}

// Map facility type codes to their IDs and labels
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Dynamic parameters for reportPeriod and facilityType
$reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : "2016";
$facilityTypeKey = isset($_GET['facilityType']) ? $_GET['facilityType'] : "health_post";
$facilityType = $facilityTypeMap[$facilityTypeKey]['id'] ?? $facilityTypeMap["health_post"]['id'];  // Default to health post if not found
$facilityTypeLabel = $facilityTypeMap[$facilityTypeKey]['label'] ?? $facilityTypeMap["health_post"]['label'];

// Example organisation units and dataset ID
$organisationUnits = ["b3aCK1PTn5S", "yY9BLUUegel", "UFtGyqJMEZh", "GvFqTavdpGE", "yb9NKGA8uqt", "Fccw8uMlJHN", "tDoLtk2ylu4", "G9hDiPNoB7d", "moBiwh9h5Ce", "b9nYedsL8te", "XU2wpLlX4Vk", "xNUoZIrGKxQ", "PCKGSJoNHXi", "a2QIIR2UXcd", "HIlnt7Qj8do", "Gmw0DJLXGtx"];
$dataSet = "XGlOZxRT9re";  // Example dataset ID

// Fetch and output analytics data
fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel);

?>
