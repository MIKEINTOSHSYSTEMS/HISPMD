<?php
// Enable error reporting and headers
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// Include database connection
include './db_connection.php';

// DHIS2 API Configuration
$auth = base64_encode("michaelk:Dhis2_12345");

// Get request parameters with default values
$requestedIndicator = $_GET['indicator'] ?? null;
$requestedOrgUnit = $_GET['orgunit'] ?? null;
$requestedPeriod = $_GET['period'] ?? null;

try {
    $stmt = $pdo->query("SELECT * FROM eidm_settings ORDER BY id DESC LIMIT 1");
    $settings = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$settings) {
        throw new Exception("No settings found in database");
    }
    
    // Split the 'pe' column into an array of periods
    $relativePeriods = explode(',', $settings['pe']);

    // If a specific period was requested, filter the periods array
    if ($requestedPeriod) {
        $relativePeriods = array_intersect($relativePeriods, [$requestedPeriod]);
        if (empty($relativePeriods)) {
            throw new Exception("Requested period not found in settings");
        }
    }

    // Array to store all processed data
    $allProcessedData = [];

    // Loop through each relative period and make separate API calls
    foreach ($relativePeriods as $relativePeriod) {
        // Construct the API URL for the current relative period
        $apiUrl = "https://dhis.moh.gov.et/api/40/analytics?" . http_build_query([
            'dimension' => implode(',', [
                'dx:' . str_replace(',', ';', $settings['dx']),
                'pe:' . trim($relativePeriod),
                'ou:' . str_replace(',', ';', $settings['ou'])
            ]),
            'displayProperty' => 'NAME',
            'includeNumDen' => 'true',
            'skipMeta' => 'false',
            'skipData' => 'false'
        ]);

        // Fetch data from the DHIS2 API
        $response = fetchData($apiUrl);

        // Process the response for the current relative period
        $processedData = processResponse($response, trim($relativePeriod));

        // Merge the processed data into the main array
        $allProcessedData = array_merge($allProcessedData, $processedData);
    }

    // Apply additional filters if parameters were provided
    if ($requestedIndicator || $requestedOrgUnit) {
        $allProcessedData = array_filter($allProcessedData, function($item) use ($requestedIndicator, $requestedOrgUnit) {
            $indicatorMatch = !$requestedIndicator || 
                             stripos($item['Indicator'], $requestedIndicator) !== false;
            $orgUnitMatch = !$requestedOrgUnit || 
                           stripos($item['Organisation Unit'], $requestedOrgUnit) !== false;
            return $indicatorMatch && $orgUnitMatch;
        });
    }

    // Output the JSON response
    echo json_encode([
        "rows" => array_values($allProcessedData), // array_values to reindex after filtering
        "request_parameters" => [
            "indicator" => $requestedIndicator,
            "orgunit" => $requestedOrgUnit,
            "period" => $requestedPeriod
        ]
    ], JSON_PRETTY_PRINT);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

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
        echo json_encode(['error' => curl_error($ch)], JSON_PRETTY_PRINT);
        exit;
    }
    
    curl_close($ch);
    return $response;
}

// Process and format response
function processResponse($response, $relativePeriod) {
    $data = json_decode($response, true);
    
    if ($data === null) {
        error_log("Invalid JSON response from API");
        http_response_code(500);
        echo json_encode(['error' => 'Invalid JSON response from API'], JSON_PRETTY_PRINT);
        exit;
    }

    if (!isset($data['rows']) || !isset($data['metaData']['items'])) {
        error_log("Invalid data structure from API");
        http_response_code(500);
        echo json_encode(["error" => "No valid data found."], JSON_PRETTY_PRINT);
        exit;
    }

    $metadata = $data['metaData']['items'];
    $formattedData = [];

    foreach ($data['rows'] as $row) {
        if (count($row) >= 4) { // Should have at least dx, pe, ou, value
            $dxId = $row[0];
            $peId = $row[1];
            $ouId = $row[2];
            $value = $row[3];

            $formattedData[] = [
                "Indicator" => $metadata[$dxId]['name'] ?? $dxId,
                "Organisation Unit" => $metadata[$ouId]['name'] ?? $ouId,
                "RelativePeriod" => $relativePeriod, // The specific relative period used for this call
                "Period" => $metadata[$peId]['name'] ?? $peId, // The actual period name
                "Value" => $value
            ];
        }
    }

    return $formattedData;
}
?>