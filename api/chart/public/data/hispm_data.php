<?php

// API URL to fetch the data
$api_url = 'https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list';

// Fetch the data from the API
$response = file_get_contents($api_url);

// Decode the JSON response
$data = json_decode($response, true);

// Initialize the transformed structure
$transformed = [];

// Loop through the original data and transform it
foreach ($data['data'] as $item) {

    // Initialize transformed entry with proper data types
    $transformed_entry = [
        "Indicator Group" => isset($item['Indicator Group']) ? (string)$item['Indicator Group'] : "", // String
        "indicator" => isset($item['Indicator Name']) ? (string)$item['Indicator Name'] : "", // String
        "Data Source" => isset($item['Data Source']) ? (string)$item['Data Source'] : "", // String
        "Year" => isset($item['Year']) ? (int)$item['Year'] : null, // Integer
        "Scope" => isset($item['Scope']) ? (string)$item['Scope'] : "", // String
        "Region" => isset($item['Region']) ? (string)$item['Region'] : "", // String
        "Administration Unit" => isset($item['Administration Unit']) ? (string)$item['Administration Unit'] : "", // String
        "Facility Type" => isset($item['Facility Type']) ? (string)$item['Facility Type'] : "", // String
        "Data Source Detail" => isset($item['Data Source Detail']) ? (string)$item['Data Source Detail'] : "", // String
        "value" => isset($item['Value']) ? (float)$item['Value'] : "", // Float
//        "Assessment" => isset($item['Assessment']) ? (string)$item['Assessment'] : "", // String
//        "Sex" => isset($item['Sex']) ? (string)$item['Sex'] : "", // String
//        "Baseline" => isset($item['Baseline']) ? (float)$item['Baseline'] : null, // Float
//        "Target" => isset($item['Target']) ? (float)$item['Target'] : null, // Float
//        "Data Representation" => isset($item['Data Representation']) ? (string)$item['Data Representation'] : "" // String
    ];

    // Add the transformed data to the array
    $transformed[] = $transformed_entry;
}

// Output the transformed JSON
header('Content-Type: application/json');
echo json_encode($transformed, JSON_PRETTY_PRINT);

?>
