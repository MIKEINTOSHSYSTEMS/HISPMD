<?php

// URL and API key for the request
$url = "https://viz.hispmd.merqconsultancy.org/api/card/94/query/json";
$apiKey = "mb_NzG94LIVWHnYl75pRAemxffT0/EhYIC5ssI6HIdqMTM=";

// Data to be sent in the POST request
$postData = json_encode([
    "parameters" => "string",
    "format_rows" => false
]);

// Initialize cURL
$ch = curl_init($url);

// Set the cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "content-type: application/json",
    "X-API-KEY: $apiKey"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

// Execute the request and get the response
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    $error = curl_error($ch);
    echo "cURL Error: $error";
} else {
    // Decode the JSON response
    $apiData = json_decode($response, true);

    // Create an associative array to hold aggregated data
    $aggregatedData = [];

    // Map the API response to the 'aggregatedData' structure
    foreach ($apiData as $item) {
        // Remove '%' symbol from "Sum of Value"
        $cleanedValue = str_replace('%', '', $item["Sum of Value"]);
        
        // Clean and cast the Year, removing commas and converting to integer
        $yearString = str_replace(',', '', $item["Year"]); // Remove commas
        $year = (int)$yearString;  // Cast Year directly to integer

        $facilityType = $item["Facility Type → Facility Type Name"];

        // Continue if year is valid
        if ($year > 0) {  // Ensure the year is positive
            // Initialize the year entry if it doesn't exist
            if (!isset($aggregatedData[$year])) {
                $aggregatedData[$year] = [];
            }

            // Initialize the facility type entry if it doesn't exist
            if (!isset($aggregatedData[$year][$facilityType])) {
                $aggregatedData[$year][$facilityType] = 0;
            }

            // Aggregate the values
            $aggregatedData[$year][$facilityType] += (float)$cleanedValue;
        }
    }

    // Sort the years in ascending order
    ksort($aggregatedData);

    // Create the final output structure
    $output = [
        "name" => "Reporting completeness - Representative by National | PRISM Assessment",
        "data" => [],
        "chartType" => "scatter",
        "defaults" => [
            [
                "key" => [["chart"], ["settings"], "title().enabled()"],
                "value" => true
            ],
            [
                "key" => [["chart"], ["settings"], "title().text()"],
                "value" => "Reporting completeness - Representative by National | PRISM Assessment"
            ]
        ]
    ];

    // Prepare the data for output
    foreach ($aggregatedData as $year => $facilityData) {
        foreach ($facilityData as $facilityType => $value) {
            $output['data'][] = [
                "Year" => $year,  // Use the year directly from the API response
                "Facility Type" => $facilityType,
                "value" => $value
                
            ];
        }
    }

    // Output the transformed data as JSON
    header('Content-Type: application/json');
    echo json_encode($output, JSON_PRETTY_PRINT);
}

// Close the cURL session
curl_close($ch);
