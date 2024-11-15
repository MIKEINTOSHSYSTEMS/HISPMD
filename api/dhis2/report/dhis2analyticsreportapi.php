<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

/**
 * Fetch data from a given URL using cURL
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
 * Fetch analytics data for a specific organisation unit and period
 */
function fetchAnalyticsData($dimensionDx, $dimensionPe, $filterOu) {
    global $apiUrl;

    $queryUrl = $apiUrl . "40/analytics.json?dimension=dx:" . urlencode($dimensionDx)
        . "&dimension=pe:" . urlencode($dimensionPe)
        . "&filter=ou:" . urlencode($filterOu)
        . "&displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false";

    return fetchData($queryUrl);
}

// Parameters from the request
$dimensionDx = isset($_GET['dimensionDx']) ? $_GET['dimensionDx'] : "J7274NWfmWt"; // Default indicator
$organisationUnits = isset($_GET['organisationUnits']) ? json_decode($_GET['organisationUnits'], true) : [
    "b3aCK1PTn5S", "yY9BLUUegel", "UFtGyqJMEZh", "GvFqTavdpGE",
    "yb9NKGA8uqt", "Fccw8uMlJHN", "tDoLtk2ylu4", "G9hDiPNoB7d",
    "moBiwh9h5Ce", "b9nYedsL8te", "XU2wpLlX4Vk", "xNUoZIrGKxQ",
    "PCKGSJoNHXi", "a2QIIR2UXcd", "HIlnt7Qj8do", "Gmw0DJLXGtx"
];
//$periods = isset($_GET['periods']) ? json_decode($_GET['periods'], true) : [
//    "LAST_12_MONTHS", "LAST_12_WEEKS", "LAST_2_SIXMONTHS", "LAST_3_MONTHS", 
//    "LAST_4_QUARTERS", "LAST_4_WEEKS", "LAST_52_WEEKS", "LAST_5_FINANCIAL_YEARS", 
//    "LAST_5_YEARS", "LAST_6_BIMONTHS", "LAST_BIMONTH", "LAST_FINANCIAL_YEAR", 
//    "LAST_MONTH", "LAST_QUARTER", "LAST_SIX_MONTH", "LAST_WEEK", "LAST_YEAR", 
//    "MONTHS_LAST_YEAR", "MONTHS_THIS_YEAR", "QUARTERS_LAST_YEAR", "QUARTERS_THIS_YEAR", 
//    "THIS_BIMONTH", "THIS_FINANCIAL_YEAR", "THIS_MONTH", "THIS_QUARTER", 
//    "THIS_SIX_MONTH", "THIS_WEEK", "THIS_YEAR"
//];


$periods = isset($_GET['periods']) ? json_decode($_GET['periods'], true) : [
    "LAST_5_YEARS", "THIS_YEAR"
];



// Initialize the response array
$dataRows = [];

// Process each organisation unit and period
foreach ($organisationUnits as $filterOu) {
    foreach ($periods as $dimensionPe) {
        $analyticsData = fetchAnalyticsData($dimensionDx, $dimensionPe, $filterOu);

        // Extract metadata items
        $items = $analyticsData['metaData']['items'] ?? [];

        // Fetch display names for indicator and organisation unit
        $indicatorName = $items[$dimensionDx]['name'] ?? "Unknown Indicator";
        $orgUnitName = $items[$filterOu]['name'] ?? "Unknown Organisation Unit";

        // Generate rows for the organisation unit and period
        $rows = $analyticsData['rows'] ?? [];
        foreach ($rows as $row) {
            $dataRows[] = [
                "organisationUnit" => $orgUnitName,
                "indicator" => $indicatorName,
                "period" => $items[$row[1]]['name'] ?? $row[1],
                "value" => isset($row[2]) ? (float) $row[2] : null
            ];
        }
    }
}

// Construct the response
$response = [
    'data' => $dataRows
];

// Output the response as JSON
echo json_encode($response);

?>
