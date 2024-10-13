<?php

// URL and API key for the request
$url = "https://viz.hispmd.merqconsultancy.org/api/card/88/query/json";
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

    // Create the structure you want for the final output
    $output = [
        "name" => "Geographical Map Reporting Timeliness by Region",
        "data" => [],
        "chartType" => "map",
        "defaults" => [
            [
                "key" => [["chart"], ["settings"], "title().enabled()"],
                "value" => true
            ],
            [
                "key" => [["chart"], ["settings"], "title().text()"],
                "value" => "Geographical Map Reporting Timeliness by Region"
            ]
        ]
    ];

    // Map the API response to the 'data' structure and remove the '%' symbol from values
    foreach ($apiData as $item) {
        // Remove '%' symbol from "Sum of Value"
        $cleanedValue = str_replace('%', '', $item["Sum of Value"]);

        // Add the cleaned data to the output
        $output['data'][] = [
            "region" => $item["Region → Region Name"],
            "value" => $cleanedValue
        ];
    }

    // Output the transformed data as JSON
    header('Content-Type: application/json');
    echo json_encode($output, JSON_PRETTY_PRINT);
}

// Close the cURL session
curl_close($ch);
