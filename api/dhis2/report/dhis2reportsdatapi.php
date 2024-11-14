<?php

// Set headers for CORS and JSON content
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 API URL and authentication credentials
$apiUrl = "https://dhis.moh.gov.et/api/organisationUnitGroupSets?fields=id,displayName,organisationUnitGroups[id,displayName]&paging=false";
$auth = base64_encode("michaelk:Dhis2_12345");

/**
 * Fetch data from a given URL using cURL with error handling.
 *
 * @param string $url The URL to fetch data from.
 * @return array The decoded JSON data as an associative array.
 */
function fetchData($url) {
    global $auth;

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ));

    // Execute the cURL request
    $result = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }
    
    // Close the cURL session
    curl_close($ch);

    // Decode JSON response
    $data = json_decode($result, true);
    if ($data === null) {
        http_response_code(500);
        echo json_encode(['error' => 'Invalid JSON response from API']);
        exit;
    }

    return $data;
}

// Fetch the data from the API
$data = fetchData($apiUrl);

// Get filter parameter from URL and standardize it for matching
$filter = isset($_GET['filter']) ? strtolower(str_replace(' ', '', $_GET['filter'])) : '';

// Transform data to the column-oriented structure, with optional filter
$simplifiedData = [];
foreach ($data['organisationUnitGroupSets'] as $groupSet) {
    $setName = strtolower(str_replace(' ', '', $groupSet['displayName']));

    // Apply filter, matching against sanitized setName
    if ($filter && strpos($setName, $filter) === false) {
        continue;
    }

    $columnIdKey = $groupSet['displayName'] . " ID";
    $columnNameKey = $groupSet['displayName'];

    // Initialize columns if they don't exist
    if (!isset($simplifiedData[$columnIdKey])) {
        $simplifiedData[$columnIdKey] = [];
        $simplifiedData[$columnNameKey] = [];
    }

    // Populate columns with IDs and names
    foreach ($groupSet['organisationUnitGroups'] as $unitGroup) {
        $simplifiedData[$columnIdKey][] = $unitGroup['id'];
        $simplifiedData[$columnNameKey][] = $unitGroup['displayName'];
    }
}

// Output the transformed JSON structure
echo json_encode($simplifiedData, JSON_PRETTY_PRINT);

?>
