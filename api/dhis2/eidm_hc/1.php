<?php

// Set the DHIS2 API endpoint
$apiUrl = "https://dhis.moh.gov.et/api/40/analytics?dimension=dx:UShQ9Rnu0WO;q39ICC6JBpK;FcJP07Upvag,ou:yY9BLUUegel;UFtGyqJMEZh;yb9NKGA8uqt;Fccw8uMlJHN;tDoLtk2ylu4;G9hDiPNoB7d;moBiwh9h5Ce;b9nYedsL8te;XU2wpLlX4Vk;xNUoZIrGKxQ;PCKGSJoNHXi;a2QIIR2UXcd;HIlnt7Qj8do;Gmw0DJLXGtx,pe:LAST_4_QUARTERS&displayProperty=NAME&includeNumDen=true&skipMeta=false&skipData=false";

// User credentials for authentication
$username = "michaelk";
$password = "Dhis2_12345";

// Initialize a cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

// Execute the cURL session and capture the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)], JSON_PRETTY_PRINT);
    exit;
}

// Close the cURL session
curl_close($ch);

// Decode the JSON response into a PHP array
$data = json_decode($response, true);

// Ensure required data exists
if (!isset($data['rows']) || !isset($data['metaData']['items'])) {
    die(json_encode(["error" => "No valid data found."], JSON_PRETTY_PRINT));
}

// Extract metadata mappings for names
$metadata = $data['metaData']['items'];

// Process and reformat data
$formattedData = [];
foreach ($data['rows'] as $row) {
    if (count($row) >= 4) {
        $dxId = $row[0];  // Data Element ID
        $ouId = $row[1];  // Organisation Unit ID

        // Get names from metadata
        $dxName = $metadata[$dxId]['name'] ?? $dxId;
        $ouName = $metadata[$ouId]['name'] ?? $ouId;

        $formattedData[] = [
            "dx"     => $dxName,  // Replace ID with name
            "ou"     => $ouName,  // Replace ID with name
            "period" => $row[2],  // Period
            "value"  => $row[3]   // Value
        ];
    }
}

// Output formatted JSON response
header('Content-Type: application/json');
echo json_encode($formattedData, JSON_PRETTY_PRINT);

?>
