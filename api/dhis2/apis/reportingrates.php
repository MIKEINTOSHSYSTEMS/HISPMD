<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

// Fetch data function remains the same
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

    $data = json_decode($result, true);
    if ($data === null) {
        http_response_code(500);
        echo json_encode(['error' => 'Invalid JSON response from API']);
        exit;
    }

    return $data;
}

// Fetch dataset name function remains the same
function fetchDatasetName($dataSetId) {
    global $apiUrl;
    $datasetUrl = $apiUrl . "dataSets/" . $dataSetId . ".json?fields=displayName";
    $datasetData = fetchData($datasetUrl);
    return $datasetData['displayName'] ?? 'Unknown Dataset';
}

// Fetch analytics data modified for multiple datasets, periods, and facility types
function fetchAnalyticsData($organisationUnits, $dataSets, $reportPeriods, $facilityTypes) {
    global $apiUrl;

    $allResults = []; // Store results for all combinations

    foreach ($dataSets as $dataSet) {
        $datasetName = fetchDatasetName($dataSet); // Fetch dataset name

        foreach ($facilityTypes as $facilityTypeKey => $facilityType) {
            $facilityTypeId = $facilityType['id'];
            $facilityTypeLabel = $facilityType['label'];

            foreach ($reportPeriods as $reportPeriod) {
                $indicators = [
                    "{$dataSet}.ACTUAL_REPORTS",
                    "{$dataSet}.EXPECTED_REPORTS",
                    "{$dataSet}.REPORTING_RATE",
                    "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
                    "{$dataSet}.REPORTING_RATE_ON_TIME"
                ];
                $dimensionDx = implode(';', $indicators);
                $dimensionOu = implode(';', $organisationUnits);

                // Construct the analytics API URL
                $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod;saIPeABoPMH:$facilityTypeId&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";

                // Fetch data for the current combination
                $analyticsData = fetchData($queryUrl);

                // Extract headers and rows
                $headers = $analyticsData['headers'] ?? [];
                $rows = $analyticsData['rows'] ?? [];

                // Prepare header names
                $headerNames = array_map(function ($header) {
                    return preg_replace('/^.* - /', '', $header['name']); // Remove prefix
                }, $headers);

                // Enhance rows with metadata
                $enhancedRows = array_map(function ($row) use ($headerNames, $dataSet, $datasetName, $facilityTypeLabel, $reportPeriod) {
                    $rowWithHeaders = [];
                    foreach ($row as $index => $value) {
                        $headerName = $headerNames[$index] ?? "Column_$index";
                        $rowWithHeaders[$headerName] = $value;
                    }
                    $rowWithHeaders['Dataset ID'] = $dataSet;
                    $rowWithHeaders['Dataset Name'] = $datasetName;
                    $rowWithHeaders['Facility Type'] = $facilityTypeLabel;
                    $rowWithHeaders['Report Period'] = $reportPeriod;
                    return $rowWithHeaders;
                }, $rows);

                // Merge results
                $allResults = array_merge($allResults, $enhancedRows);
            }
        }
    }

    echo json_encode([
        "rows" => $allResults
    ]);
}

// Facility type mapping remains the same
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Parameters from the query string

$reportPeriods = isset($_GET['reportPeriods']) ? explode(',', $_GET['reportPeriods']) : ['2011','2012','2013','2014','2015','2016','2017']; //["2016"];
//$reportPeriods = isset($_GET['reportPeriods']) ? explode(',', $_GET['reportPeriods']) : ['2017']; //TEST

$facilityTypes = isset($_GET['facilityTypes']) ? explode(',', $_GET['facilityTypes']) : array_keys($facilityTypeMap);

$organisationUnits = isset($_GET['organisationUnits']) ? explode(',', $_GET['organisationUnits']) : ['b3aCK1PTn5S','yY9BLUUegel','UFtGyqJMEZh','yb9NKGA8uqt','Fccw8uMlJHN','tDoLtk2ylu4','G9hDiPNoB7d','moBiwh9h5Ce','b9nYedsL8te','XU2wpLlX4Vk','xNUoZIrGKxQ','PCKGSJoNHXi','a2QIIR2UXcd','HIlnt7Qj8do','Gmw0DJLXGtx'];
//$organisationUnits = isset($_GET['organisationUnits']) ? explode(',', $_GET['organisationUnits']) : ['b3aCK1PTn5S']; //TEST

$dataSets = isset($_GET['dataSets']) ? explode(',', $_GET['dataSets']) : ['XGlOZxRT9re','Mre2Z4B9ngj','jkWs8iiQMoQ','N23zwf6NUtT']; // Default dataset ID ["XGlOZxRT9re"]; 'XGlOZxRT9re', //for multiple
//$dataSets = isset($_GET['dataSets']) ? explode(',', $_GET['dataSets']) : ['Mre2Z4B9ngj']; // TEST

// Convert facility type keys to their full mappings
$facilityTypesMapped = array_map(function ($key) use ($facilityTypeMap) {
    return $facilityTypeMap[$key] ?? $facilityTypeMap["health_post"];
}, $facilityTypes);

// Fetch and output analytics data for all combinations
fetchAnalyticsData($organisationUnits, $dataSets, $reportPeriods, $facilityTypesMapped);

?>
