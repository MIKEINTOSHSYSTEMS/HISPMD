<?php
// Enable error reporting and headers
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// DHIS2 API Configuration
$apiUrl = "https://dhis.moh.gov.et/api/40/analytics?dimension=dx:UShQ9Rnu0WO;q39ICC6JBpK;FcJP07Upvag;SIVuhkSKnKU;ddfTtyLo98v;bO7fMJJKQMV;v5eNsbOhuWN;mydhncZSS07;hIDi7b12D9L;p36M64AoSv9;v195Hz0l8s9;j5W9WVS7dvj,ou:yY9BLUUegel;UFtGyqJMEZh;yb9NKGA8uqt;Fccw8uMlJHN;tDoLtk2ylu4;G9hDiPNoB7d;moBiwh9h5Ce;b9nYedsL8te;XU2wpLlX4Vk;xNUoZIrGKxQ;PCKGSJoNHXi;a2QIIR2UXcd;HIlnt7Qj8do;Gmw0DJLXGtx,pe:LAST_4_QUARTERS&displayProperty=NAME&includeNumDen=true&skipMeta=false&skipData=false";
$auth = base64_encode("michaelk:Dhis2_12345");

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