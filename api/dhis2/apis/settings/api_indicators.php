<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Manually define the parameters
$reportPeriods = ['LAST_3_MONTHS']; // Example periods
$organisationUnits = ['b3aCK1PTn5S']; // Example organisation unit
$indicators = ['wUAjWKVXd5l']; // Example indicator ID

// Facility Type Mapping
$facilityTypeMap = [
    'hospital' => ['id' => 'nVEDFMfnStv', 'label' => 'Hospital'],
    'clinic' => ['id' => 'kwcNbI9fPdB', 'label' => 'Clinic'],
    'health_post' => ['id' => 'FW4oru60vgc', 'label' => 'Health Post'],
    'health_center' => ['id' => 'j8SCxUTyzfm', 'label' => 'Health Center']
];
$facilityTypes = ['hospital', 'clinic']; // Example facility types

// Ownership Type Mapping
$ownershipTypeMap = [
    "private" => ["id" => "nZ0QfIPU2Up", "label" => "Private"],
    "public" => ["id" => "hdCBfjmUBua", "label" => "Public"],
    "other_government" => ["id" => "Th2AESuCURe", "label" => "Other Government"],
    "ngo" => ["id" => "FBTQspO7YFJ", "label" => "NGO"]
];
$ownershipTypes = ['public', 'private']; // Example ownership types

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

// Fetch data from the DHIS2 API
function fetchData($url) {
    global $auth;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ]);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        error_log("CURL Error: " . curl_error($ch));
        curl_close($ch);
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)], JSON_PRETTY_PRINT);
        exit;
    }
    curl_close($ch);

    $data = json_decode($result, true);
    if ($data === null) {
        error_log("Invalid JSON response from API");
        http_response_code(500);
        echo json_encode(['error' => 'Invalid JSON response from API'], JSON_PRETTY_PRINT);
        exit;
    }

    return $data;
}

// Fetch indicator name by ID
function fetchIndicatorName($indicatorId) {
    global $apiUrl;
    $indicatorUrl = $apiUrl . "indicators/" . $indicatorId . ".json?fields=displayName";
    $indicatorData = fetchData($indicatorUrl);
    error_log("Indicator Name for ID {$indicatorId}: " . ($indicatorData['displayName'] ?? 'Unknown Indicator'));
    return $indicatorData['displayName'] ?? 'Unknown Indicator';
}

// Fetch analytics data
function fetchAnalyticsData($organisationUnits, $indicators, $reportPeriods, $facilityTypes, $ownershipTypes) {
    global $apiUrl;

    $allResults = [];

    foreach ($indicators as $indicator) {
        $indicatorName = fetchIndicatorName($indicator);

        foreach ($facilityTypes as $facilityType) {
            foreach ($ownershipTypes as $ownershipType) {
                foreach ($reportPeriods as $reportPeriod) {
                    // Build the correct analytics query URL
                    $queryUrl = $apiUrl . "analytics.json?dimension=dx:$indicator&dimension=ou:" . implode(';', $organisationUnits) . "&saIPeABoPMH:{$facilityType['id']};qxGrmOo1l71:{$ownershipType['id']}&filter=pe:$reportPeriod&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false";

                    error_log("Query URL: " . $queryUrl);

                    $analyticsData = fetchData($queryUrl);
                    error_log("Analytics Data Response: " . json_encode($analyticsData));

                    $rows = $analyticsData['rows'] ?? [];
                    if (empty($rows)) {
                        error_log("No data found for combination: Indicator={$indicator}, FacilityType={$facilityType['label']}, OwnershipType={$ownershipType['label']}, ReportPeriod={$reportPeriod}");
                        continue;
                    }

                    // Get the period names from metaData
                    $periods = $analyticsData['metaData']['dimensions']['pe'] ?? [];
                    $periodNames = [];
                    foreach ($periods as $period) {
                        $periodNames[] = $analyticsData['metaData']['items'][$period]['name'] ?? 'Unknown Period';
                    }

                    // Merge metadata with each row of analytics data
                    foreach ($rows as $row) {
                        $rowWithMetadata = [
                            'Indicator ID' => $indicator,
                            'Indicator Name' => $indicatorName,
                            'Organisation unit ID' => $row[0] ?? '',
                            'Organisation unit' => $row[1] ?? '',
                            'Organisation unit code' => $row[2] ?? '',
                            'Organisation unit description' => $row[3] ?? '',
                            'Value' => $row[4] ?? '',
                            'Facility Type' => $facilityType['label'],
                            'Report Period' => implode(', ', $periodNames), // Use the period names
                            'Ownership Type ID' => $ownershipType['id'],
                            'Ownership Type Label' => $ownershipType['label']
                        ];
                        $allResults[] = $rowWithMetadata;
                    }
                }
            }
        }
    }

    // Output all results as JSON
    echo json_encode(["rows" => $allResults], JSON_PRETTY_PRINT);
}

// Map facility and ownership types
$facilityTypesMapped = array_map(function ($key) use ($facilityTypeMap) {
    return $facilityTypeMap[$key] ?? ['id' => '', 'label' => 'Unknown'];
}, $facilityTypes);

$ownershipTypesMapped = array_map(function ($key) use ($ownershipTypeMap) {
    return $ownershipTypeMap[$key] ?? ['id' => '', 'label' => 'Unknown'];
}, $ownershipTypes);

// Fetch and output analytics data
fetchAnalyticsData($organisationUnits, $indicators, $reportPeriods, $facilityTypesMapped, $ownershipTypesMapped);

?>