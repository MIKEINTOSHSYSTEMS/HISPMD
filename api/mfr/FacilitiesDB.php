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

// Clear existing data in MFR_Facilities table
$conn->query("TRUNCATE TABLE MFR_Facilities");

do {
    // Fetch data from the API
    $apiUrl = "https://mfr-be.k8s.sandboxaddis.com/api/Facility/GetFacilities";
    $ch = curl_init();

    curl_setopt_array($ch, array(
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array('pageNumber' => $pageNumber, 'showPerPage' => $showPerPage)),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json, text/plain, */*',
            'Accept-Language: en-US,en;q=0.9',
            'sec-ch-ua-platform: "Windows"',
            'Cache-Control: no-cache',
            'Content-Length: 33',
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

    // Insert data into MFR_Facilities table
    foreach ($data['model'] as $item) {
        $id = (int)$item['id'];
        $name = $conn->real_escape_string($item['name']);
        $status = $conn->real_escape_string($item['status']);
        $operationalStatus = isset($item['operationalStatus']) ? $conn->real_escape_string($item['operationalStatus']) : null;
        $facilityType = isset($item['facilityType']) ? $conn->real_escape_string($item['facilityType']) : null;
        $parentFacilityType = isset($item['parentFacilityType']) ? $conn->real_escape_string($item['parentFacilityType']) : null;
        $region = isset($item['region']) ? $conn->real_escape_string($item['region']) : null;
        $zone = isset($item['zone']) ? $conn->real_escape_string($item['zone']) : null;
        $woreda = isset($item['woreda']) ? $conn->real_escape_string($item['woreda']) : null;

        $sql = "INSERT INTO MFR_Facilities (id, name, status, operationalStatus, facilityType, parentFacilityType, region, zone, woreda) VALUES ('$id', '$name', '$status', ".($operationalStatus ? "'$operationalStatus'" : "NULL").", ".($facilityType ? "'$facilityType'" : "NULL").", ".($parentFacilityType ? "'$parentFacilityType'" : "NULL").", ".($region ? "'$region'" : "NULL").", ".($zone ? "'$zone'" : "NULL").", ".($woreda ? "'$woreda'" : "NULL").")";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Check if there are more pages to fetch
    $totalCount = $data['model'][0]['totalCount'];
    $pageCount = ceil($totalCount / $showPerPage);
    $pageNumber++;

} while ($pageNumber <= $pageCount);

echo "Data successfully inserted into MFR_Facilities table.";

$conn->close();
?>
