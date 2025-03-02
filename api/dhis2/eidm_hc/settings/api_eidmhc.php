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

// Fetch current settings
try {
    $stmt = $pdo->query("SELECT * FROM eidm_settings ORDER BY id DESC LIMIT 1");
    $settings = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$settings) {
        throw new Exception("No settings found in database");
    }
    
$apiUrl = "https://dhis.moh.gov.et/api/40/analytics?" . http_build_query([
    'dimension' => implode(',', [
        'dx:' . str_replace(',', ';', $settings['dx']),
        'ou:' . str_replace(',', ';', $settings['ou']),
        'pe:' . str_replace(',', ';', $settings['pe'])
    ]),
    'displayProperty' => 'NAME',
    'includeNumDen' => 'true',
    'skipMeta' => 'false',
    'skipData' => 'false'
]);


} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

// Rest of the existing code remains the same...
// [Keep the existing fetchData, processResponse, and main execution code]

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
function processResponse($response) {
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
        if (count($row) >= 4) {
            $dxId = $row[0];
            $ouId = $row[1];
            
            $formattedData[] = [
                "Indicator" => $metadata[$dxId]['name'] ?? $dxId,
                "Organisation Unit" => $metadata[$ouId]['name'] ?? $ouId,
                "Period" => $row[2],
                "Value" => $row[3]
            ];
        }
    }

    return $formattedData;
}

// Main execution
try {
    $response = fetchData($apiUrl);
    $processedData = processResponse($response);
    echo json_encode(["rows" => $processedData], JSON_PRETTY_PRINT);
} catch (Exception $e) {
    error_log("System Error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()], JSON_PRETTY_PRINT);
}
?>