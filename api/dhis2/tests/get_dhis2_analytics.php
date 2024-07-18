<?php

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
        return ['error' => curl_error($ch)];
    }
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Data Values
function fetchDataValues($baseUrl, $username, $password, $indicator, $orgUnit, $period) {
    $url = $baseUrl . "/api/analytics.json?dimension=dx:$indicator&dimension=ou:$orgUnit&dimension=pe:$period&displayProperty=NAME&outputIdScheme=ID";
    return fetchData($url, $username, $password);
}

// Fetch Indicator Display Name
function fetchIndicatorName($baseUrl, $username, $password, $indicator) {
    $url = $baseUrl . "/api/indicators/$indicator.json?fields=displayName";
    $data = fetchData($url, $username, $password);
    return $data['displayName'] ?? 'Unknown Indicator';
}

// Fetch Organisation Unit Display Name
function fetchOrgUnitName($baseUrl, $username, $password, $orgUnit) {
    $url = $baseUrl . "/api/organisationUnits/$orgUnit.json?fields=displayName";
    $data = fetchData($url, $username, $password);
    return $data['displayName'] ?? 'Unknown Organisation Unit';
}

// Process Data
function processData($data, $indicatorName, $orgUnitName) {
    if (isset($data['rows']) && count($data['rows']) > 0) {
        $headers = array_column($data['headers'], 'column');
        $processedData = [];

        foreach ($data['rows'] as $row) {
            $rowData = array_combine($headers, $row);
            $rowData['Data'] = $indicatorName;
            $rowData['Organisation unit'] = $orgUnitName;
            $processedData[] = $rowData;
        }

        return $processedData;
    } else {
        return ['error' => 'No data available'];
    }
}

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['indicator']) && isset($_GET['orgUnit']) && isset($_GET['period'])) {
        $indicator = $_GET['indicator'];
        $orgUnit = $_GET['orgUnit'];
        $period = $_GET['period'];
        
        $indicatorName = fetchIndicatorName($baseUrl, $username, $password, $indicator);
        $orgUnitName = fetchOrgUnitName($baseUrl, $username, $password, $orgUnit);
        
        $dataValues = fetchDataValues($baseUrl, $username, $password, $indicator, $orgUnit, $period);
        $processedData = processData($dataValues, $indicatorName, $orgUnitName);
        
        header('Content-Type: application/json');
        echo json_encode($processedData);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Missing required parameters']);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid request method']);
}

?>
