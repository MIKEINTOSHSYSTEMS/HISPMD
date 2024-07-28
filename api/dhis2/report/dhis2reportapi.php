<?php
// https://hispmd.merqconsultancy.org/api/dhis2/report/dhis2reportapi.php?action=fetchAnalyticsData&organisationUnit[]=unit1&organisationUnit[]=unit2&dataSet=dataSet1&reportPeriod=THIS_MONTH
// https://hispmd.merqconsultancy.org/api/dhis2/report/dhis2reportapi.php?action=fetchAnalyticsData&organisationUnit[]=Rp268JB6Ne4&organisationUnit[]=GvFqTavdpGE&dataSet=BfMAe6Itzgt&reportPeriod=THIS_MONTH

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$apiUrl = "https://dhis2.merqconsultancy.org/api/";
$auth = base64_encode("admin:district");

function fetchData($url) {
    global $auth;
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

function fetchOrganisationUnits() {
    global $apiUrl;
    return fetchData($apiUrl . "organisationUnits.json?fields=id,displayName&paging=false");
}

function fetchDataSets() {
    global $apiUrl;
    return fetchData($apiUrl . "dataSets.json?fields=id,displayName&paging=false");
}

function fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod) {
    global $apiUrl;
    $indicators = [
        "{$dataSet}.ACTUAL_REPORTS",
        "{$dataSet}.EXPECTED_REPORTS",
        "{$dataSet}.REPORTING_RATE",
        "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
        "{$dataSet}.REPORTING_RATE_ON_TIME"
    ];
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $organisationUnits);
    $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    return fetchData($queryUrl);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrganisationUnits':
            $data = fetchOrganisationUnits();
            echo json_encode($data);
            break;
        case 'fetchDataSets':
            $data = fetchDataSets();
            echo json_encode($data);
            break;
        case 'fetchAnalyticsData':
            $organisationUnits = isset($_GET['organisationUnit']) ? $_GET['organisationUnit'] : [];
            $dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : '';
            $reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : '';
            if (!empty($organisationUnits) && !empty($dataSet) && !empty($reportPeriod)) {
                $data = fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod);
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
