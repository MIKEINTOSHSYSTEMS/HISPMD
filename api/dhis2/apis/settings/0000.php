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

    foreach ($facilityTypes as $facilityType) {
        if (!isset($facilityTypeMap[$facilityType])) continue;
        
        foreach ($ownershipTypes as $ownershipType) {
            if (!isset($ownershipTypeMap[$ownershipType])) continue;

            // Build dimension parameters
            $dimensions = [
                'dx:' . implode(';', $dataSets),
                'pe:' . $period,
                'ou:' . implode(';', $orgUnits)
            ];

            // Add specific facility type and ownership filters
            $filters = [
                'saIPeABoPMH:' . $facilityTypeMap[$facilityType]['id'],
                'qxGrmOo1l71:' . $ownershipTypeMap[$ownershipType]['id']
            ];

            $queryParams = http_build_query([
                'dimension' => implode(',', $dimensions),
                'filter' => implode(';', $filters),
                'displayProperty' => 'NAME',
                'includeNumDen' => 'true',
                'skipMeta' => 'false',
                'skipData' => 'false'
            ]);

            $url = "https://dhis.moh.gov.et/api/40/analytics?$queryParams";
            
            // Fetch and process data
            try {
                $response = fetchData($url);
                $processed = processResponse(
                    $response, 
                    $period, 
                    $facilityTypeMap[$facilityType], 
                    $ownershipTypeMap[$ownershipType]
                );
                $allData = array_merge($allData, $processed);
            } catch (Exception $e) {
                error_log("Error processing data for period {$period}, facility {$facilityType}, ownership {$ownershipType}: " . $e->getMessage());
                continue;
            }
        }
    }
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
        $error = curl_error($ch);
        curl_close($ch);
        throw new Exception("CURL Error: " . $error);
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode >= 400) {
        throw new Exception("API request failed with HTTP code $httpCode");
    }

    return $response;
}

// Process API response
function processResponse($response, $relativePeriod, $facilityType, $ownershipType) {
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

        // 👇 Fix: Define the indicator ID here
        $indicator = $dx;        

        $result[] = [
//            "dataset_id" => $dx,
//            "dataset_name" => $metadata[$dx]['name'] ?? $dx,
            //"reporting_rate" => null, // These would need specific indicator queries
            //"actual_reports" => null,
            //"expected_reports" => null,
            //"reporting_rate_on_time" => null,
            //"actual_reports_on_time" => null,
            //"indicator_id" => "default_indicator_id",

//            "indicator_name" => $metadata[$dx]['name'] ?? $dx,            
//            "organisationunit_id" => $ou,            
//            "organisationunit" => $metadata[$ou]['name'] ?? $ou,
//            "organisationunit_code" => null,
//            "organisationunit_description" => "",
//            "value" => $value,
//            "facility_type" => $facilityType['label'],
//            "relative_period" => $relativePeriod,
//            "report_period" => $metadata[$pe]['name'] ?? $pe,
//            "ownership_type_id" => $ownershipType['id'],
//            "ownership_type_label" => $ownershipType['label']
            
            
            'Indicator ID' => $indicator,
            "Indicator Name" => $metadata[$dx]['name'] ?? $dx,            
            "Organisation unit ID" => $ou,            
            "Organisation unit" => $metadata[$ou]['name'] ?? $ou,
            "Organisation unit code" => null,
            "Organisation unit description" => "",
            "Value" => $value,
            "Facility Type" => $facilityType['label'],
            "Relative Period" => $relativePeriod,
            "Report Period" => $metadata[$pe]['name'] ?? $pe,
            "Ownership Type ID" => $ownershipType['id'],
            "Ownership Type Label" => $ownershipType['label']

        ];
    }

    return $result;
}
?>