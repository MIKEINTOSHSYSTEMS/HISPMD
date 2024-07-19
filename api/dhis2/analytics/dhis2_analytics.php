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

// Fetch Indicators
function fetchIndicators($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/indicators.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Organization Units
function fetchOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Data Values
function fetchDataValues($baseUrl, $username, $password, $indicator, $orgUnit, $period) {
    $url = $baseUrl . "/api/analytics.json?dimension=dx:$indicator&dimension=ou:$orgUnit&dimension=pe:$period&displayProperty=NAME&outputIdScheme=ID";
    return fetchData($url, $username, $password);
}

// Parse and present data
function parseDataValues($dataValues) {
    if (isset($dataValues['rows']) && count($dataValues['rows']) > 0) {
        $headers = array_map(function ($header) {
            return $header['column'];
        }, $dataValues['headers']);

        $rows = $dataValues['rows'];

        $parsedData = [];
        foreach ($rows as $row) {
            $parsedData[] = array_combine($headers, $row);
        }

        return $parsedData;
    } else {
        return [];
    }
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchIndicators':
            $data = fetchIndicators($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchOrgUnits':
            $data = fetchOrgUnits($baseUrl, $username, $password);
            echo json_encode($data);
            break;
        case 'fetchDataValues':
            $indicator = isset($_GET['indicator']) ? $_GET['indicator'] : '';
            $orgUnit = isset($_GET['orgUnit']) ? $_GET['orgUnit'] : '';
            $period = isset($_GET['period']) ? $_GET['period'] : '';
            if ($indicator && $orgUnit && $period) {
                $dataValues = fetchDataValues($baseUrl, $username, $password, $indicator, $orgUnit, $period);
                $parsedData = parseDataValues($dataValues);
                echo json_encode($parsedData);
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
