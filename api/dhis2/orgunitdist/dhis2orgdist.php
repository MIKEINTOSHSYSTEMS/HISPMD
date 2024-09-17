<?php
// DHIS2 credentials
$username = 'michaelk';
$password = 'Dhis2_12345';
$baseUrl = 'https://dhis.moh.gov.et/api';

// Function to make cURL request to DHIS2 API
function dhis2Request($endpoint) {
    global $username, $password, $baseUrl;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
}

// Check if the required parameters are set in the GET request
if (isset($_GET['ou']) && isset($_GET['ougs'])) {
    // Get multiple OUs and OUGs by splitting the semicolon-delimited strings
    $ou = $_GET['ou'];  // Handle multiple ou separated by ";"
    $ougs = $_GET['ougs'];  // Handle multiple ougs separated by ";"

    // Construct the API request
    $endpoint = "/orgUnitAnalytics?ou=" . urlencode($ou) . "&ougs=" . urlencode($ougs);

    // Fetch Organisation Unit Analytics based on GET parameters
    $response = dhis2Request($endpoint);

    // Function to organize the JSON response into a more readable structure
    function organizeResponse($response) {
        $organizedData = [];

        if (isset($response['rows'])) {
            foreach ($response['rows'] as $row) {
                // Extract and organize the data from the response
                //$orgUnit = $response['metaData']['items'][$row[0]]['name'];
                $orgUnit = $response['metaData']['items'][$row[0]]['name'];
                $count = $row[count($row) - 1];  // The last column is the count
                $ougs = [];
                $groups = [];

                // Iterate over all columns except the last one (count)
                for ($i = 1; $i < count($row) - 1; $i++) {
                    if ($row[$i] !== 'null') {
                        $group = $response['metaData']['items'][$row[$i]]['name'];
                        if ($i === count($row) - 2) {  // For the second last column
                            $groups[] = $group;
                        } else {
                            $ougs[] = $group;
                        }
                    }
                }

                // Flatten and organize data
                foreach ($ougs as $oug) {
                    foreach ($groups as $group) {
                        $organizedData[] = [
                            'orgunit' => $orgUnit,
                            'ougs' => $oug,
                            'group' => $group,
                            'count' => $count
                        ];
                    }
                }
            }
        }

        return $organizedData;
    }

    // Organize data for output
    $organizedData = organizeResponse($response);

    // Output the organized data in JSON format
    header('Content-Type: application/json');
    echo json_encode($organizedData, JSON_PRETTY_PRINT);

} else {
    // If the required GET parameters are not set, display an error message
    header('Content-Type: application/json');
    echo json_encode([
        'error' => 'Missing required parameters: ou (Organization Unit), ougs (Organization Unit Group Set)'
    ], JSON_PRETTY_PRINT);
}
?>
