<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// DHIS2 credentials and base URL
$apiUrl = 'https://dhis2.merqconsultancy.org/api/';
$username = 'admin';
$password = 'district';
$auth = base64_encode("$username:$password");

function fetchData($url, $auth) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ));
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

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrgUnits':
            $url = $apiUrl . "organisationUnits.json?fields=id,displayName&paging=false";
            $data = fetchData($url, $auth);
            echo json_encode($data);
            break;
        case 'fetchDataSets':
            $url = $apiUrl . "dataSets.json?fields=id,displayName&paging=false";
            $data = fetchData($url, $auth);
            echo json_encode($data);
            break;
        case 'fetchReport':
            $organisationUnits = isset($_GET['organisationUnit']) ? $_GET['organisationUnit'] : '';
            $dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : '';
            $reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : '';

            if ($organisationUnits && $dataSet && $reportPeriod) {
                $organisationUnits = explode(',', $organisationUnits);

                // Constructing dimensions for the dataSet (assuming fixed indicator types)
                $indicators = [
                    "{$dataSet}.ACTUAL_REPORTS",
                    "{$dataSet}.EXPECTED_REPORTS",
                    "{$dataSet}.REPORTING_RATE",
                    "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
                    "{$dataSet}.REPORTING_RATE_ON_TIME"
                ];
                $dimensionDx = implode(';', $indicators);

                // Constructing the organisation units parameter
                $dimensionOu = implode(';', $organisationUnits);

                // Fetch data based on selected parameters
                $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
                $analyticsData = fetchData($queryUrl, $auth);

                echo json_encode($analyticsData);
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
