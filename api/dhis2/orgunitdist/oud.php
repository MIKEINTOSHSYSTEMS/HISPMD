<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 credentials and base URL
$baseUrl = 'https://dhis.moh.gov.et';
$username = 'michaelk';
$password = 'Dhis2_12345';

// Fetch Data function
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For testing purposes, not recommended for production
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Organisation Unit Analytics
function fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnits, $ougs, $columns) {
    $orgUnitsStr = implode(';', $orgUnits);
    $ougsStr = implode(';', $ougs);
    $columnsStr = implode(';', $columns);
    $url = $baseUrl . "/api/orgUnitAnalytics?ou=$orgUnitsStr&ougs=$ougsStr&columns=$columnsStr";
    return fetchData($url, $username, $password);
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrgUnitAnalytics':
            $orgUnits = isset($_GET['orgUnits']) ? $_GET['orgUnits'] : [];
            $ougs = isset($_GET['ougs']) ? $_GET['ougs'] : [];
            $columns = isset($_GET['columns']) ? $_GET['columns'] : [];
            
            if (!empty($orgUnits) && !empty($ougs) && !empty($columns)) {
                // Convert string parameters to arrays
                $orgUnitsArray = explode(',', $orgUnits);
                $ougsArray = explode(',', $ougs);
                $columnsArray = explode(',', $columns);
                
                $data = fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnitsArray, $ougsArray, $columnsArray);
                echo json_encode($data);
            } else {
                http_response_code(400);
                echo json_encode(['error' => 'Missing required parameters']);
            }
            break;
        default:
            http_response_code(400);
            echo json_encode(['error' => 'Invalid action']);
            break;
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}

?>
