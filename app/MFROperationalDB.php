<?php

// Database connection details
$servername = "localhost";
$username = "hisp_md";
$password = "hisp_md";
$dbname = "hisp_md";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initial values for pagination
$pageNumber = 1;
$showPerPage = 20;

// Clear existing data in MFR_Operational_Status table
$conn->query("TRUNCATE TABLE MFR_Operational_Status");

do {
    // Fetch data from the API
    $apiUrl = "https://mfr-be.k8s.sandboxaddis.com/api/Report/Counts";
    $ch = curl_init();

    $postData = json_encode(array('pageNumber' => $pageNumber, 'showPerPage' => $showPerPage));
    curl_setopt_array($ch, array(
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json, text/plain, */*',
            'Accept-Language: en-US,en;q=0.9',
            'sec-ch-ua-platform: "Windows"',
            'Cache-Control: no-cache',
            'Content-Length: ' . strlen($postData),
            'Content-Type: application/json',
            'Origin: https://mfrv2.moh.gov.et',
            'Pragma: no-cache',
            'Referer: https://mfrv2.moh.gov.et/',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Microsoft Edge";v="126"',
            'sec-ch-ua-mobile: ?0'
        ),
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        echo 'Error fetching the API data.';
        return;
    }

    $data = json_decode($response, true);

    if ($data === null) {
        echo 'Error decoding JSON data.';
        return;
    }

    if (!isset($data['model'])) {
        echo 'No model data found in API response.';
        return;
    }

    // Insert data into MFR_Operational_Status table
    foreach ($data['model'] as $item) {
        $operationalStatus = $conn->real_escape_string($item['operationalStatus']);
        $status = $conn->real_escape_string($item['status']);
        $count = (int)$item['count'];

        $sql = "INSERT INTO MFR_Operational_Status (OperationalStatus, Status, Count) VALUES ('$operationalStatus', '$status', $count)";
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Check if there are more pages to fetch
    $totalCount = $data['model'][0]['totalCount'];
    $pageCount = ceil($totalCount / $showPerPage);
    $pageNumber++;

} while ($pageNumber <= $pageCount);

//echo "Data successfully inserted into MFR_Operational_Status table.";

$conn->close();

?>
