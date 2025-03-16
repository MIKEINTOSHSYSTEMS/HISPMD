<?php

// DHIS2 API URL and authentication
//$apiUrl = "https://dhis.moh.gov.et/api/40/analytics?dimension=dx:ATly4adG7tLy;wUAjWKVXd5l,saIPeABoPMH:nVEDFMfnStv;j8SCxUTyzfm;FW4oru60vgc;kwcNbI9fPdB&filter=pe:LAST_12_MONTHS&displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false";
$apiUrl = "https://dhis.moh.gov.et/api/40/analytics?dimension=dx:ATly4adG7tLy;wUAjWKVXd5l,saIPeABoPMH:nVEDFMfnStv;j8SCxUTyzfm;FW4oru60vgc;kwcNbI9fPdB&filter=pe:LAST_5_YEARS&displayProperty=NAME&includeNumDen=false&skipMeta=false&skipData=false";
$username = "michaelk";
$password = "Dhis2_12345";
$auth = base64_encode("$username:$password");

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Basic $auth"
]);

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

if (json_last_error() === JSON_ERROR_NONE) {
    // Prepare the output array
    $output = [];

    // Extract relevant data
    foreach ($data['rows'] as $row) {
        $indicatorId = $row[0];
        $facilityTypeId = $row[1];
        $value = $row[2];

        // Get the names from metaData
        $indicatorName = $data['metaData']['items'][$indicatorId]['name'] ?? 'Unknown Indicator';
        $facilityTypeName = $data['metaData']['items'][$facilityTypeId]['name'] ?? 'Unknown Facility Type';

        // Get the period names
        $periods = $data['metaData']['dimensions']['pe'];
        $periodNames = [];
        foreach ($periods as $period) {
            $periodNames[] = $data['metaData']['items'][$period]['name'] ?? 'Unknown Period';
        }

        // Combine period names into a single string
        $periodName = implode(', ', $periodNames);

        // Add to output array
        $output[] = [
            'indicator' => $indicatorName,
            'facility_type' => $facilityTypeName,
            'period' => $periodName,
            'value' => $value
        ];
    }

    // Output the result in pretty JSON format
    echo json_encode($output, JSON_PRETTY_PRINT);
} else {
    echo 'Error decoding JSON: ' . json_last_error_msg();
}
?>