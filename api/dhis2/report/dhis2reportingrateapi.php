<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication
$apiUrl = "https://dhis.moh.gov.et/api/";
$auth = base64_encode("michaelk:Dhis2_12345");

/**
 * Fetch data from a given URL with cURL and error handling
 */
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

/**
 * Fetch the display name of a dataset
 */
function fetchDatasetName($dataSetId) {
    global $apiUrl;
    $datasetUrl = $apiUrl . "dataSets/" . $dataSetId . ".json?fields=displayName";
    $datasetData = fetchData($datasetUrl);
    return $datasetData['displayName'] ?? 'Unknown Dataset';
}

/**
 * Fetch analytics data for a given set of parameters
 */
function fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel) {
    global $apiUrl;

    // Fetch the display name of the dataset
    $datasetName = fetchDatasetName($dataSet);

    // Define indicator dimensions for the dataset
    $indicators = [
        "{$dataSet}.ACTUAL_REPORTS",
        "{$dataSet}.EXPECTED_REPORTS",
        "{$dataSet}.REPORTING_RATE",
        "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
        "{$dataSet}.REPORTING_RATE_ON_TIME"
    ];
    $dimensionDx = implode(';', $indicators);
    $dimensionOu = implode(';', $organisationUnits);

    // Construct the analytics API URL with organisationUnit, dataset, and facility ownership filter
    $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod;qxGrmOo1l71:$ownershipType&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
    
    // Fetch data from the API
    $analyticsData = fetchData($queryUrl);

    // Validate and format the response
    $title = $analyticsData['title'] ?? '';
    $headers = $analyticsData['headers'] ?? [];
    $rows = $analyticsData['rows'] ?? [];

    // Prepare header names for rows, removing the prefix
    $headerNames = array_map(function($header) {
        return preg_replace('/^.* - /', '', $header['name']); // Remove prefix from each header name
    }, $headers);

    // Map each row to use header names instead of numeric indexes
    $enhancedRows = array_map(function($row) use ($headerNames, $dataSet, $datasetName, $facilityTypeLabel, $reportPeriod, $ownershipType, $ownershipLabel) {
        $rowWithHeaders = [];
        foreach ($row as $index => $value) {
            $headerName = $headerNames[$index] ?? "Column_$index";
            $rowWithHeaders[$headerName] = $value;
        }
        $rowWithHeaders['Dataset ID'] = $dataSet;
        $rowWithHeaders['Dataset Name'] = $datasetName;
        $rowWithHeaders['Facility Type'] = $facilityTypeLabel;
        $rowWithHeaders['Ownership Type ID'] = $ownershipType; // Include ID
        $rowWithHeaders['Ownership Type Label'] = $ownershipLabel; // Include Label
        $rowWithHeaders['Report Period'] = $reportPeriod;
        return $rowWithHeaders;
    }, $rows);

    return [
        "title" => $title,
        "headers" => array_merge($headerNames, ["Dataset ID", "Dataset Name", "Facility Type", "Ownership Type ID", "Ownership Type Label", "Report Period"]),
        "rows" => $enhancedRows
    ];
}

// Map facility type codes to their IDs and labels
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Map ownership type codes to their IDs and labels
$ownershipTypeMap = [
    "private" => ["id" => "nZ0QfIPU2Up", "label" => "Private"],
    "public" => ["id" => "hdCBfjmUBua", "label" => "Public"],
    "other_government" => ["id" => "Th2AESuCURe", "label" => "Other Government"],
    "ngo" => ["id" => "FBTQspO7YFJ", "label" => "NGO"]
];

// Dynamic parameters for reportPeriod
$reportPeriod = isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : "2016";

// Example organisation units and dataset ID
$organisationUnits = isset($_GET['organisationUnits']) ? explode(',', $_GET['organisationUnits']) : ["b3aCK1PTn5S", "yY9BLUUegel", "UFtGyqJMEZh", "GvFqTavdpGE", "yb9NKGA8uqt", "Fccw8uMlJHN", "tDoLtk2ylu4", "G9hDiPNoB7d", "moBiwh9h5Ce", "b9nYedsL8te", "XU2wpLlX4Vk", "xNUoZIrGKxQ", "PCKGSJoNHXi", "a2QIIR2UXcd", "HIlnt7Qj8do", "Gmw0DJLXGtx"];
$dataSet = isset($_GET['dataSet']) ? $_GET['dataSet'] : "XGlOZxRT9re";  // Example dataset ID

// Ownership type from the query string, default is 'public'
$specifiedOwnershipType = isset($_GET['ownershipType']) ? $_GET['ownershipType'] : null;
$allOwnershipData = [];

// Loop through facility types and ownership types
foreach ($facilityTypeMap as $typeKey => $facilityTypeData) {
    $facilityType = $facilityTypeData['id'];
    $facilityTypeLabel = $facilityTypeData['label'];

    // If an ownership type is specified, use it; otherwise, loop through all ownership types
    if ($specifiedOwnershipType && isset($ownershipTypeMap[$specifiedOwnershipType])) {
        $ownershipData = $ownershipTypeMap[$specifiedOwnershipType];
        $ownershipType = $ownershipData['id'];
        $ownershipLabel = $ownershipData['label'];
        
        // Fetch analytics data for the specific facility and ownership type
        $facilityData = fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel);
        $allOwnershipData[] = $facilityData;
    } else {
        // Loop through all ownership types if none specified
        foreach ($ownershipTypeMap as $ownershipKey => $ownershipData) {
            $ownershipType = $ownershipData['id'];
            $ownershipLabel = $ownershipData['label'];
            
            // Fetch analytics data for each facility and ownership type
            $facilityData = fetchAnalyticsData($organisationUnits, $dataSet, $reportPeriod, $facilityType, $facilityTypeLabel, $ownershipType, $ownershipLabel);
            $allOwnershipData[] = $facilityData;
        }
    }
}

echo json_encode($allOwnershipData);

?>
