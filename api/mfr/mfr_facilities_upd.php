<?php

// Database connection details
$host = "192.168.128.4";
$dbname = "hisp_md";
$username = "hispmddb";
$password = "hispmddb";

// Create connection
$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Initial values for pagination
$pageNumber = 1;
$showPerPage = 20;

// Clear existing data in mfr_facilities table
pg_query($conn, "TRUNCATE TABLE mfr_facilities");

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
            'Cache-Control: no-cache',
            'Content-Length: 33',
            'Content-Type: application/json',
            'Origin: https://mfrv2.moh.gov.et',
            'Referer: https://mfrv2.moh.gov.et/'
        ),
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        echo 'Error fetching the API data.';
        return;
    }

    $data = json_decode($response, true);

    // Insert data into mfr_facilities table
    foreach ($data['model'] as $item) {
        $id = (int)$item['id'];
        $name = pg_escape_string($conn, $item['name']);
        $status = pg_escape_string($conn, $item['status']);
        $operationalStatus = isset($item['operationalStatus']) ? pg_escape_string($conn, $item['operationalStatus']) : null;
        $facilityType = isset($item['facilityType']) ? pg_escape_string($conn, $item['facilityType']) : null;
        $parentFacilityType = isset($item['parentFacilityType']) ? pg_escape_string($conn, $item['parentFacilityType']) : null;
        $region = isset($item['region']) ? pg_escape_string($conn, $item['region']) : null;
        $zone = isset($item['zone']) ? pg_escape_string($conn, $item['zone']) : null;
        $woreda = isset($item['woreda']) ? pg_escape_string($conn, $item['woreda']) : null;

        $sql = "INSERT INTO mfr_facilities (id, name, status, operationalStatus, facilityType, parentFacilityType, region, zone, woreda) 
                VALUES ($id, '$name', '$status', ".($operationalStatus ? "'$operationalStatus'" : "NULL").", ".($facilityType ? "'$facilityType'" : "NULL").", ".($parentFacilityType ? "'$parentFacilityType'" : "NULL").", ".($region ? "'$region'" : "NULL").", ".($zone ? "'$zone'" : "NULL").", ".($woreda ? "'$woreda'" : "NULL").")";

        $result = pg_query($conn, $sql);

        if ($result === false) {
            echo "Error: " . $sql . "<br>" . pg_last_error($conn);
        }
    }

    // Check if there are more pages to fetch
    $totalCount = $data['model'][0]['totalCount'];
    $pageCount = ceil($totalCount / $showPerPage);
    $pageNumber++;

} while ($pageNumber <= $pageCount);

echo "Data successfully inserted into mfr_facilities table.";

pg_close($conn);
?>
