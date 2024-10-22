<?php

// API URL to fetch the data
$api_url = 'https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list&q=(Indicator%20Name~equals~Proportion%20of%20health%20facilities%20which%20reported%20out%20of%20stock%20selected%20registers%20by%20health%20facility%20and%20by%20type%20of%20register)';

// Fetch the data from the API
$response = file_get_contents($api_url);

// Decode the JSON response
$data = json_decode($response, true);

// Initialize the transformed structure
$transformed = [];

// Loop through the original data and transform it
foreach ($data['data'] as $item) {
    // Transform the date and data values
    // Assuming the 'Year' field as the date (you can adjust based on your actual date fields)
    $date = isset($item['Year']) ? $item['Year'] . '-01-01' : null; // Adjust date if needed

    // Create the data array as per your required format
    $transformed[] = [
        $date, // Date (assuming 'Year' as date; modify if necessary)
        isset($item['Value']) ? (float)$item['Value'] : null, // Value (as float)
        isset($item['Indicator Group']) ? (string)$item['Indicator Group'] : null, 
        isset($item['Indicator Name']) ? (string)$item['Indicator Name'] : null, 
        isset($item['Data Source']) ? (string)$item['Data Source'] : null,
        isset($item['Assessment']) ? (string)$item['Assessment'] : null, 
        isset($item['Facility Type']) ? (string)$item['Facility Type'] : null, 
        isset($item['Administration Unit']) ? (string)$item['Administration Unit'] : null,
        isset($item['Scope']) ? (string)$item['Scope'] : null, 
        isset($item['Region']) ? (string)$item['Region'] : null,
        isset($item['Data Representation']) ? (string)$item['Data Representation'] : null,

        // Add additional numerical values as needed. Example placeholders below:
       // isset($item['Value']) ? (float)$item['Value'] + 0.2 : null, // Open (placeholder)
       // isset($item['Value']) ? (float)$item['Value'] - 0.3 : null, // High (placeholder)
       // isset($item['Value']) ? (float)$item['Value'] - 0.1 : null, // Low (placeholder)
       // rand(1000000, 50000000) // Random placeholder for volume (replace as needed)
    ];
}

// Output the transformed JSON in the required format
header('Content-Type: application/json');
echo json_encode($transformed, JSON_PRETTY_PRINT);

?>
