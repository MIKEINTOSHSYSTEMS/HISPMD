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

    // Check for cURL errors
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }

    // Check for HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        http_response_code($httpCode);
        echo json_encode(['error' => 'Unexpected HTTP response code: ' . $httpCode]);
        curl_close($ch);
        exit;
    }

    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Analytics Data
function fetchAnalyticsData($baseUrl, $username, $password, $dataSets, $orgUnits, $reportPeriods) {
    $indicators = [];
    foreach ($dataSets as $dataSet) {
        $indicators[] = "{$dataSet}.ACTUAL_REPORTS";
        $indicators[] = "{$dataSet}.EXPECTED_REPORTS";
        $indicators[] = "{$dataSet}.REPORTING_RATE";
        $indicators[] = "{$dataSet}.ACTUAL_REPORTS_ON_TIME";
        $indicators[] = "{$dataSet}.REPORTING_RATE_ON_TIME";
    }
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $orgUnits);
    $dimensionPe = implode(';', $reportPeriods);
    
    $url = $baseUrl . "/api/analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$dimensionPe&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    return fetchData($url, $username, $password);
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    // Log the action parameter
    error_log("Action: " . $action);

    switch ($action) {
        case 'fetchAnalyticsData':
            $dataSets = isset($_GET['dataSet']) ? (array) $_GET['dataSet'] : [];
            $orgUnits = isset($_GET['organisationUnit']) ? (array) $_GET['organisationUnit'] : [];
            $reportPeriods = isset($_GET['reportPeriod']) ? (array) $_GET['reportPeriod'] : [];

            // Log parameters
            error_log("DataSets: " . print_r($dataSets, true));
            error_log("OrgUnits: " . print_r($orgUnits, true));
            error_log("ReportPeriods: " . print_r($reportPeriods, true));

            if (!empty($dataSets) && !empty($orgUnits) && !empty($reportPeriods)) {
                $analyticsData = fetchAnalyticsData($baseUrl, $username, $password, $dataSets, $orgUnits, $reportPeriods);
                if ($analyticsData) {
                    // Extract title from response
                    $title = isset($analyticsData['title']) ? $analyticsData['title'] : '';

                    // Handle the rows safely
                    $rows = isset($analyticsData['rows']) ? $analyticsData['rows'] : [];

                    // Prepare the output
                    $formattedData = [];
                    foreach ($rows as $row) {
                        $formattedData[] = [
                            "Title" => $title,
                            "Data Set" => implode(', ', $dataSets),
                            "Report Period" => implode(', ', $reportPeriods),
                            "Organisation Unit ID" => isset($row[0]) ? $row[0] : '',
                            "Organisation Unit" => isset($row[1]) ? $row[1] : '',
                            "Organisation Unit Code" => isset($row[2]) ? $row[2] : '',
                            "Organisation Unit Description" => isset($row[3]) ? $row[3] : '',
                            "Actual Reports" => isset($row[4]) ? $row[4] : '',
                            "Expected Reports" => isset($row[5]) ? $row[5] : '',
                            "Reporting Rate" => isset($row[6]) ? $row[6] : '',
                            "Actual Reports On Time" => isset($row[7]) ? $row[7] : '',
                            "Reporting Rate On Time" => isset($row[8]) ? $row[8] : ''
                        ];
                    }

                    echo json_encode([
                        "Title" => $title,
                        "Data Set" => implode(', ', $dataSets),
                        "Report Period" => implode(', ', $reportPeriods),
                        "Data" => $formattedData
                    ], JSON_PRETTY_PRINT);
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
