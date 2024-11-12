<?php

// API URL to fetch the data
$api_url = 'https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=indicators_dashboard&action=list&q=(Indicator%20Group~equals~1)&f=(Indicator%20Name~equals~Proportion%20of%20health%20facilities%20(Hospitals%20and%20health%20centers)%20which%20have%20standardized%20medical%20record%20unit%20(MRU))(Data%20Source~equals~PRISM%20Assessment)';

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
        "Period Type" => isset($item['Period ID']) ? (string)$item['Period ID'] : "", // String
        "Period" => isset($item['Period']) ? (string)$item['Period'] : "", // String
        "Year" => isset($item['Year']) ? (int)$item['Year'] : null, // Integer
        "Scope" => isset($item['Scope']) ? (string)$item['Scope'] : "", // String
        "Region" => isset($item['Region']) ? (string)$item['Region'] : "", // String
        "Administration Unit" => isset($item['Administration Unit']) ? (string)$item['Administration Unit'] : "", // String
        "Facility Type" => isset($item['Facility Type']) ? (string)$item['Facility Type'] : "", // String
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
