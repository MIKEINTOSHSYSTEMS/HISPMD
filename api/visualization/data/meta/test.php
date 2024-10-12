<?php
// URL and API key for the request
$url = "https://viz.hispmd.merqconsultancy.org/api/card/94/query/json";
$apiKey = "mb_NzG94LIVWHnYl75pRAemxffT0/EhYIC5ssI6HIdqMTM=";

// Data to be sent in the POST request (same as raw body in the Postman structure)
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
    "X-API-KEY: $apiKey", // Updated to X-API-KEY
    "pragma: no-cache",
    "priority: u=1, i",
    "referer: https://viz.hispmd.merqconsultancy.org/api/docs/",
    "sec-ch-ua: \"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"",
    "sec-ch-ua-mobile: ?0",
    "sec-ch-ua-platform: \"Windows\"",
    "accept: */*",
    "accept-language: en-US,en;q=0.9",
    "cache-control: no-cache",
    "origin: https://viz.hispmd.merqconsultancy.org"
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
    $data = json_decode($response, true);
    
    // Output the JSON response (you can also handle or manipulate the data as needed)
    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
}

// Close the cURL session
curl_close($ch);
?>
