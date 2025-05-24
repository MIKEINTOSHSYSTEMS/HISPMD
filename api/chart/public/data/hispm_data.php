<?php

// Allow cross-origin requests from all domains (or specify a domain instead of '*')
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Get the base URL dynamically (host + protocol)
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

// API URL to fetch the data
$api_url = $base_url . '/app/api/v1.php';
$period_api_url = $base_url . '/app/api/v1.php';

// Add query parameters for the APIs
$api_url .= '?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list';
$period_api_url .= '?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=moh_period_types&action=list';

// Fetch the data from the main API
$response = file_get_contents($api_url);

// Fetch the period data from the period API
$period_response = file_get_contents($period_api_url);

// Decode the JSON responses
$data = json_decode($response, true);
$period_data = json_decode($period_response, true);

// Initialize the transformed structure
$transformed = [];

// Create a mapping of Period ID to period_type
$period_mapping = [];
foreach ($period_data['data'] as $period_item) {
    $period_mapping[$period_item['period_id']] = $period_item['period_type'];
}

// Loop through the original data and transform it
foreach ($data['data'] as $item) {
    // Get the period_type using the Period ID from the mapping
    $period_type = isset($period_mapping[$item['Period ID']]) ? $period_mapping[$item['Period ID']] : "";

    // Initialize transformed entry with proper data types
    $transformed_entry = [
        "Indicator Group" => isset($item['Indicator Group']) ? (string)$item['Indicator Group'] : "", // String
        "indicator" => isset($item['Indicator Name']) ? (string)$item['Indicator Name'] : "", // String
        "Data Source" => isset($item['Data Source']) ? (string)$item['Data Source'] : "", // String
        "Year" => isset($item['Year']) ? (int)$item['Year'] : null, // Integer
        "Period Type" => $period_type, // Use period_type instead of Period ID
        "Period" => isset($item['Period']) ? (string)$item['Period'] : "", // String
        "Scope" => isset($item['Scope']) ? (string)$item['Scope'] : "", // String
        "Region" => isset($item['Region']) ? (string)$item['Region'] : "", // String
        "Administration Unit" => isset($item['Administration Unit']) ? (string)$item['Administration Unit'] : "", // String
        "Facility Type" => isset($item['Facility Type']) ? (string)$item['Facility Type'] : "", // String
        "Data Source Detail" => isset($item['Data Source Detail']) ? (string)$item['Data Source Detail'] : "", // String
        "value" => isset($item['Value']) ? (float)$item['Value'] : "", // Float
        "Target Value" => isset($item['Target Value']) ? (float)$item['Target Value'] : null, // Float
        "Target Year" => isset($item['Target Year']) ? (int)$item['Target Year'] : null, // Integer
        "Baseline Value" => isset($item['Baseline Value']) ? (float)$item['Baseline Value'] : null, // Float
        "Baseline Year" => isset($item['Baseline Year']) ? (int)$item['Baseline Year'] : null, // Integer
        "Data Representation" => isset($item['Data Representation']) ? (string)$item['Data Representation'] : "" // String
    ];

    // Add the transformed data to the array
    $transformed[] = $transformed_entry;
}

// Sort the array by Year and Period
usort($transformed, function($a, $b) {
    // First, compare by Year
    if ($a['Year'] == $b['Year']) {
        // If Year is the same, compare by Period
        return strcmp($a['Period'], $b['Period']);
    }
    return $a['Year'] - $b['Year']; // Ascending order for Year
});

// Output the transformed JSON
header('Content-Type: application/json');
echo json_encode($transformed, JSON_PRETTY_PRINT);

?>
