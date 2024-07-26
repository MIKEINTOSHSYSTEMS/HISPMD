<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// DHIS2 credentials and base URL
$baseUrl = 'https://dhis2.merqconsultancy.org';
$username = 'admin';
$password = 'district';

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

// Fetch Organisation Units
function fetchOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Data Sets
function fetchDataSets($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/dataSets.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Analytics Data
function fetchAnalyticsData($baseUrl, $username, $password, $dataSet, $orgUnits, $reportPeriod) {
    $indicators = [
        "{$dataSet}.ACTUAL_REPORTS",
        "{$dataSet}.EXPECTED_REPORTS",
        "{$dataSet}.REPORTING_RATE",
        "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
        "{$dataSet}.REPORTING_RATE_ON_TIME"
    ];
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $orgUnits);
    $url = $baseUrl . "/api/analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    return fetchData($url, $username, $password);
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrgUnits':
            $data = fetchOrgUnits($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchDataSets':
            $data = fetchDataSets($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchAnalyticsData':
            $dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : '';
            $orgUnits = isset($_GET['organisationUnit']) ? $_GET['organisationUnit'] : [];
            $reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : '';
            if ($dataSet && !empty($orgUnits) && $reportPeriod) {
                $analyticsData = fetchAnalyticsData($baseUrl, $username, $password, $dataSet, $orgUnits, $reportPeriod);
                if ($analyticsData) {
                    echo json_encode($analyticsData);
                } else {
                    http_response_code(500);
                    echo json_encode(['error' => 'Failed to fetch analytics data']);
                }
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
