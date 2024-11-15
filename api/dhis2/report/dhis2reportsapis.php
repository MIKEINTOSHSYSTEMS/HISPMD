<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

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

function fetchDatasetName($dataSetId) {
    global $apiUrl;
    $datasetUrl = $apiUrl . "dataSets/" . $dataSetId . ".json?fields=displayName";
    $datasetData = fetchData($datasetUrl);
    return $datasetData['displayName'] ?? 'Unknown Dataset';
}

function fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel, $settlementType, $settlementLabel) {
    global $apiUrl;

    // Fetch dataset name
    $datasetName = fetchDatasetName($dataSet);

    // Define indicator dimensions
    $indicators = [
        "{$dataSet}.ACTUAL_REPORTS",
        "{$dataSet}.EXPECTED_REPORTS",
        "{$dataSet}.REPORTING_RATE",
        "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
        "{$dataSet}.REPORTING_RATE_ON_TIME"
    ];
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $organisationUnits);

    // Log the URL for debugging
    $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod;hxLghWPCAXE:$settlementType;qxGrmOo1l71:$ownershipType&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    // Debugging: log the query URL
    // echo "Query URL: $queryUrl"; // Uncomment for debugging

    $analyticsData = fetchData($queryUrl);
    $title = $analyticsData['title'] ?? '';
    $headers = $analyticsData['headers'] ?? [];
    $rows = $analyticsData['rows'] ?? [];

    // Clean up header names
    $headerNames = array_map(function($header) {
        return preg_replace('/^.* - /', '', $header['name']);
    }, $headers);

    // Enhance rows with headers and additional details
    $enhancedRows = array_map(function($row) use ($headerNames, $dataSet, $datasetName, $facilityTypeLabel, $reportPeriod, $ownershipType, $ownershipLabel, $settlementType, $settlementLabel) {
        $rowWithHeaders = [];
        foreach ($row as $index => $value) {
            $headerName = $headerNames[$index] ?? "Column_$index";
            $rowWithHeaders[$headerName] = $value;
        }
        // Include additional metadata in the row
        $rowWithHeaders['Dataset ID'] = $dataSet;
        $rowWithHeaders['Dataset Name'] = $datasetName;
        $rowWithHeaders['Facility Type'] = $facilityTypeLabel;
        $rowWithHeaders['Ownership Type ID'] = $ownershipType;
        $rowWithHeaders['Ownership Type Label'] = $ownershipLabel;
        $rowWithHeaders['Settlement Type ID'] = $settlementType;
        $rowWithHeaders['Settlement Type Label'] = $settlementLabel;
        $rowWithHeaders['Report Period'] = $reportPeriod;
        return $rowWithHeaders;
    }, $rows);

    return [
        "title" => $title,
        "headers" => array_merge($headerNames, ["Dataset ID", "Dataset Name", "Facility Type", "Ownership Type ID", "Ownership Type Label", "Settlement Type ID", "Settlement Type Label", "Report Period"]),
        "rows" => $enhancedRows
    ];
}

// Define facility types
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Define ownership types
$ownershipTypeMap = [
    "private" => ["id" => "nZ0QfIPU2Up", "label" => "Private"],
    "public" => ["id" => "hdCBfjmUBua", "label" => "Public"],
    "other_government" => ["id" => "Th2AESuCURe", "label" => "Other Government"],
    "ngo" => ["id" => "FBTQspO7YFJ", "label" => "NGO"]
];

// Define settlement types
$settlementTypeMap = [
    "urban" => ["id" => "nKT0uoFbxdf", "label" => "Urban Settlement"],
    "pastoral" => ["id" => "ZktuKijP5jN", "label" => "Pastoral Settlement"],
    "agrarian" => ["id" => "V9sleOboZJ1", "label" => "Agrarian Settlement"]
];

// Get dynamic parameters from query string
$reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : "2016";
$organisationUnits = isset($_GET['organisationUnits']) ? explode(',', $_GET['organisationUnits']) : ["b3aCK1PTn5S"];
$dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : "XGlOZxRT9re";
$specifiedOwnershipType = isset($_GET['ownershipType']) ? $_GET['ownershipType'] : null;
$specifiedSettlementType = isset($_GET['settlementType']) ? $_GET['settlementType'] : null;

$allData = [];

// Loop through each facility type and settlement type
foreach ($facilityTypeMap as $typeKey => $facilityTypeData) {
    $facilityType = $facilityTypeData['id'];
    $facilityTypeLabel = $facilityTypeData['label'];

    foreach ($settlementTypeMap as $settlementKey => $settlementData) {
        $settlementType = $settlementData['id'];
        $settlementLabel = $settlementData['label'];

        if ($specifiedOwnershipType && isset($ownershipTypeMap[$specifiedOwnershipType])) {
            $ownershipData = $ownershipTypeMap[$specifiedOwnershipType];
            $ownershipType = $ownershipData['id'];
            $ownershipLabel = $ownershipData['label'];

            // Fetch data for specific ownership and settlement type
            $facilityData = fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel, $settlementType, $settlementLabel);
            $allData[] = $facilityData;
        } else {
            foreach ($ownershipTypeMap as $ownershipKey => $ownershipData) {
                $ownershipType = $ownershipData['id'];
                $ownershipLabel = $ownershipData['label'];

                // Fetch data for each ownership and settlement type
                $facilityData = fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel, $settlementType, $settlementLabel);
                $allData[] = $facilityData;
            }
        }
    }
}

echo json_encode($allData);

?>
