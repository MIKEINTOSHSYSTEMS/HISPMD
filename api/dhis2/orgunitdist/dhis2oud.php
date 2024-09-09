<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 credentials and base URL
$baseUrl = 'https://dhis.moh.gov.et';//'https://dhis2.merqconsultancy.org';
$username = 'michaelk';
$password = 'Dhis2_12345';

// Fetch Data function
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
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

// Fetch Organisation Units by Level
function fetchOrgUnitsByLevel($baseUrl, $username, $password, $level) {
    $url = $baseUrl . "/api/organisationUnits?fields=id,displayName,path,children::isNotEmpty,memberCount&paging=false&level=$level";
    return fetchData($url, $username, $password);
}

// Fetch all Organisation Units
function fetchAllOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Organisation Unit Group Sets
function fetchOrgUnitGroupSets($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnitGroupSets';
    return fetchData($url, $username, $password);
}

// Fetch Organisation Unit Analytics
function fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnits, $ougs, $columns) {
    $orgUnitsStr = implode(';', $orgUnits);
    $url = $baseUrl . "/api/orgUnitAnalytics?ou=$orgUnitsStr&ougs=$ougs&columns=$columns";
    return fetchData($url, $username, $password);
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrgUnitsByLevel':
            $level = isset($_GET['level']) ? $_GET['level'] : '';
            if ($level) {
                $data = fetchOrgUnitsByLevel($baseUrl, $username, $password, $level);
                echo json_encode($data);
            } else {
                http_response_code(400);
                echo json_encode(['error' => 'Missing required parameter: level']);
            }
            break;
        case 'fetchAllOrgUnits':
            $data = fetchAllOrgUnits($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchOrgUnitGroupSets':
            $data = fetchOrgUnitGroupSets($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchOrgUnitAnalytics':
            $orgUnits = isset($_GET['orgUnits']) ? explode(',', $_GET['orgUnits']) : [];
            $ougs = isset($_GET['ougs']) ? $_GET['ougs'] : '';
            $columns = isset($_GET['columns']) ? $_GET['columns'] : '';
            if ($orgUnits && $ougs && $columns) {
                $data = fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnits, $ougs, $columns);
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
