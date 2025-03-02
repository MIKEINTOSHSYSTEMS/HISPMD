<?php

// Enable output buffering flushing
ob_implicit_flush(true);
ob_end_flush();

// Database connection parameters
$dbHost = "192.168.128.4";
$dbPort = "5432";
$dbName = "hisp_md";
$dbUser = "hispmddb";
$dbPassword = "hispmddb";

// API endpoint URL
$apiUrl = "http://yourdomain.com/api_eidmhc.php"; // Replace with the actual URL to api_eidmhc.php

// Fetch data from the API
function fetchApiData($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        echo "Error fetching API data: " . curl_error($ch) . "\n"; // Log error if API fails
        flush(); // Ensure output is sent to browser
        return [];
    }

    curl_close($ch);

    $data = json_decode($result, true);
    if ($data === null) {
        echo "Invalid JSON response from API.\n"; // Log JSON decoding error
        flush(); // Ensure output is sent to browser
        return [];
    }

    echo "Fetched " . count($data['rows']) . " records from the API.\n"; // Log the number of records fetched
    flush(); // Ensure output is sent to browser
    return $data['rows'];
}

// Insert or update data in the database
function upsertData($dbConn, $data) {
    $processed = 0;
    $total = count($data);

    foreach ($data as $row) {
        echo "Processing Indicator: " . $row['Indicator'] . "\n"; // Log each record being processed
        echo "Processing Organisation Unit: " . $row['Organisation Unit'] . "\n"; // Log each record being processed
        echo "Processing Period: " . $row['Period'] . "\n"; // Log each record being processed
        echo "Processing Value: " . $row['Value'] . "\n"; // Log each record being processed
        flush(); // Ensure output is sent to browser

        $query = "
        INSERT INTO eidm_hc (
            indicator,
            organisation_unit,
            period,
            value
        )
        VALUES (
            :indicator,
            :organisation_unit,
            :period,
            :value
        )
        ON CONFLICT (indicator, organisation_unit, period)
        DO UPDATE SET
            value = EXCLUDED.value;
        ";

        try {
            $stmt = $dbConn->prepare($query);
            $stmt->execute([
                ':indicator' => $row['Indicator'],
                ':organisation_unit' => $row['Organisation Unit'],
                ':period' => $row['Period'],
                ':value' => $row['Value']
            ]);
            echo "Successfully processed Indicator: " . $row['Indicator'] . "\n"; // Log success
            flush(); // Ensure output is sent to browser
        } catch (Exception $e) {
            echo "Error processing Indicator: " . $row['Indicator'] . " - " . $e->getMessage() . "\n"; // Log any error during execution
            flush(); // Ensure output is sent to browser
        }

        $processed++;
        $percentage = ($processed / $total) * 100;
        echo "Progress: " . round($percentage, 2) . "% (" . $processed . " of " . $total . ")\n"; // Log progress
        flush(); // Ensure output is sent to browser
    }
}

// Main execution
try {
    // Fetch data from the API
    echo "Fetching data from the EIDM HC API...\n";
    echo "PLEASE WAIT PATIENTLY!\n"; 
    echo "DO NOT CLOSE OR LEAVE THIS PAGE UNTIL OPERATION IS COMPLETED!!!\n";
    flush(); // Ensure output is sent to browser
    $apiData = fetchApiData($apiUrl);

    if (empty($apiData)) {
        echo "No data fetched. Exiting process.\n";
        flush(); // Ensure output is sent to browser
        exit;
    }

    // Connect to the database
    echo "Connecting to the database...\n";
    flush(); // Ensure output is sent to browser
    $dbConn = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Upsert the data
    echo "Starting to upsert data into the EIDM HC table...\n";
    flush(); // Ensure output is sent to browser
    upsertData($dbConn, $apiData);

    echo "EIDM HC Data successfully updated and inserted into the database.\n";
    flush(); // Ensure output is sent to browser

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n"; // Log any exceptions
    flush(); // Ensure output is sent to browser
}

?>