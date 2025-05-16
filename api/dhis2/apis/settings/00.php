<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

include 'db_connection.php'; // Ensure this file is properly configured

// Auth credentials
$auth = base64_encode("michaelk:Dhis2_12345");

// Fetch latest settings
$stmt = $pdo->query("SELECT * FROM dhis2_reportingrate_settings ORDER BY id DESC LIMIT 1");
$settings = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$settings) {
    http_response_code(500);
    echo json_encode(['error' => 'No settings found.']);
    exit;
}

// Parse settings
$reportPeriods = array_map('trim', explode(',', $settings['report_period'] ?? '')); // pe
$orgUnits = array_map('trim', explode(',', $settings['org_unit'] ?? ''));
$dataSets = array_map('trim', explode(',', $settings['data_set'] ?? ''));
$facilityTypes = array_map('trim', explode(',', $settings['facility_types'] ?? ''));
$ownershipTypes = array_map('trim', explode(',', $settings['ownership_types'] ?? ''));

// Define mappings
$facilityTypeMap = [
    'hospital' => ['id' => 'nVEDFMfnStv', 'label' => 'Hospital'],
    'clinic' => ['id' => 'kwcNbI9fPdB', 'label' => 'Clinic'],
    'health_post' => ['id' => 'FW4oru60vgc', 'label' => 'Health Post'],
    'health_center' => ['id' => 'j8SCxUTyzfm', 'label' => 'Health Center']
];

$ownershipTypeMap = [
    'private' => ['id' => 'nZ0QfIPU2Up', 'label' => 'Private'],
    'public' => ['id' => 'hdCBfjmUBua', 'label' => 'Public'],
    'other_government' => ['id' => 'Th2AESuCURe', 'label' => 'Other Government'],
    'ngo' => ['id' => 'FBTQspO7YFJ', 'label' => 'NGO']
];

// Container for results
$allData = [];

foreach ($reportPeriods as $period) {
    $period = trim($period);
    if (!$period) continue;

    // Build dimension parameters
    $dimensions = [
        'dx:' . implode(';', $dataSets),
        'pe:' . $period,
        'ou:' . implode(';', $orgUnits)
    ];

    $queryParams = http_build_query([
        'dimension' => implode(',', $dimensions),
        'displayProperty' => 'NAME',
        'includeNumDen' => 'true',
        'skipMeta' => 'false',
        'skipData' => 'false'
    ]);

    $url = "https://dhis.moh.gov.et/api/40/analytics?$queryParams";

    // Fetch data
    $response = fetchData($url);
    $processed = processResponse($response, $period, $facilityTypeMap, $ownershipTypeMap);
    $allData = array_merge($allData, $processed);
}

// Final output
echo json_encode([
    "rows" => array_values($allData),
    "metadata" => [
        "periods" => $reportPeriods,
        "orgUnits" => $orgUnits,
        "dataSets" => $dataSets,
        "facilityTypes" => $facilityTypes,
        "ownershipTypes" => $ownershipTypes
    ]
], JSON_PRETTY_PRINT);


// Fetch data from DHIS2 API
function fetchData($url) {
    global $auth;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        error_log("CURL Error: " . curl_error($ch));
        curl_close($ch);
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        exit;
    }

    curl_close($ch);
    return $response;
}

// Process API response
function processResponse($response, $relativePeriod, $facilityTypeMap, $ownershipTypeMap) {
    $data = json_decode($response, true);
    if (!$data || !isset($data['rows']) || !isset($data['metaData']['items'])) {
        error_log("Invalid data structure");
        return [];
    }

    $metadata = $data['metaData']['items'];
    $result = [];

    foreach ($data['rows'] as $row) {
        if (count($row) < 4) continue;

        [$dx, $pe, $ou, $value] = $row;

        $result[] = [
            "dataset_id" => $dx,
            "dataset_name" => $metadata[$dx]['name'] ?? $dx,
            "report_period" => $metadata[$pe]['name'] ?? $pe,
            "organisationunit_id" => $ou,
            "organisationunit" => $metadata[$ou]['name'] ?? $ou,
            "reporting_rate" => null, // Placeholder, can be computed if needed
            "actual_reports" => null,
            "expected_reports" => null,
            "reporting_rate_on_time" => null,
            "actual_reports_on_time" => null,
            "facility_type" => null, // Map if needed from orgUnit structure
            "ownership_type_id" => null,
            "ownership_type_label" => null,
            "indicator_id" => "default_indicator_id",
            "indicator_name" => $metadata[$dx]['name'] ?? $dx,
            "organisationunit_code" => null,
            "organisationunit_description" => "",
            "value" => $value,
            "relative_period" => $relativePeriod
        ];
    }

    return $result;
}
?>
