<?php
// API URL to fetch the data
$api_url = 'https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=indicators_dashboard&action=list';

// Fetch the data from the API
$response = file_get_contents($api_url);

// Decode the JSON response
$data = json_decode($response, true);

// Initialize the transformed structure
$transformed = [
    "name" => "Indicators Dashboard by Value",
    "data" => [],
    "chartType" => "bar",
    "defaults" => [
        [
            "key" => [
                ["chart"],
                ["settings"],
                "title().enabled()"
            ],
            "value" => true
        ],
        [
            "key" => [
                ["chart"],
                ["settings"],
                "title().text()"
            ],
            "value" => "Indicators Dashboard by Value"
        ]
    ]
];

// Loop through the original data and transform it
foreach ($data['data'] as $item) {
    // Initialize transformed entry
    $transformed_entry = [
        "indicator" => $item['Indicator Name'],
        "value" => isset($item['Value']) ? (float) $item['Value'] : null
    ];

    // Include all other columns in the transformed entry
    foreach ($item as $key => $value) {
        if (!in_array($key, ['Indicator Name', 'Value'])) {
            $transformed_entry[$key] = $value;
        }
    }

    // Add the transformed data to the array
    if ($transformed_entry['value'] !== null) {
        $transformed['data'][] = $transformed_entry;
    }
}

// Output the transformed JSON
header('Content-Type: application/json');
echo json_encode($transformed, JSON_PRETTY_PRINT);

?>
