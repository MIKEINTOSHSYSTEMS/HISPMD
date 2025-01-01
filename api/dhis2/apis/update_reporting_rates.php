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
$apiUrl = "https://hispmd.merqconsultancy.org/api/dhis2/apis/settings/api_reportingrates.php";

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
        echo "Processing OrganisationUnit_Id: " . $row['Organisation unit ID'] . "\n"; // Log each record being processed
        echo "Processing OrganisationUnit: " . $row['Organisation unit'] . "\n"; // Log each record being processed
        echo "Processing Dataset_Id: " . $row['Dataset ID'] . "\n"; // Log each record being processed
        echo "Processing Dataset_Name: " . $row['Dataset Name'] . "\n"; // Log each record being processed
        echo "Processing Facility_Type: " . $row['Facility Type'] . "\n"; // Log each record being processed
        echo "Processing Report_Period: " . $row['Report Period'] . "\n"; // Log each record being processed        
        echo "Processing Ownership_type_id: " . $row['Ownership Type ID'] . "\n"; // Log each record being processed        
        echo "Processing Ownership_type_label: " . $row['Ownership Type Label'] . "\n"; // Log each record being processed        
        flush(); // Ensure output is sent to browser

        $query = "
        INSERT INTO dhis2_reporting_rates (
            organisationunit_id,
            organisationunit,
            organisationunit_code,
            actual_reports,
            expected_reports,
            reporting_rate,
            actual_reports_on_time,
            reporting_rate_on_time,
            dataset_id,
            dataset_name,
            facility_type,
            report_period,
            ownership_type_id,
            ownership_type_label
        )
        VALUES (
            :organisationunit_id,
            :organisationunit,
            :organisationunit_code,
            :actual_reports,
            :expected_reports,
            :reporting_rate,
            :actual_reports_on_time,
            :reporting_rate_on_time,
            :dataset_id,
            :dataset_name,
            :facility_type,
            :report_period,
            :ownership_type_id,
            :ownership_type_label
        )
        ON CONFLICT (organisationunit_id, dataset_id, facility_type, report_period, ownership_type_id)
        DO UPDATE SET
            actual_reports = EXCLUDED.actual_reports,
            expected_reports = EXCLUDED.expected_reports,
            reporting_rate = EXCLUDED.reporting_rate,
            actual_reports_on_time = EXCLUDED.actual_reports_on_time,
            reporting_rate_on_time = EXCLUDED.reporting_rate_on_time,
            ownership_type_label = EXCLUDED.ownership_type_label;
        ";

        try {
            $stmt = $dbConn->prepare($query);
            $stmt->execute([
                ':organisationunit_id' => $row['Organisation unit ID'],
                ':organisationunit' => $row['Organisation unit'],
                ':organisationunit_code' => $row['Organisation unit code'],
                ':actual_reports' => $row['actual reports'],
                ':expected_reports' => $row['expected reports'],
                ':reporting_rate' => $row['reporting rate'],
                ':actual_reports_on_time' => $row['actual reports on time'],
                ':reporting_rate_on_time' => $row['reporting rate on time'],
                ':dataset_id' => $row['Dataset ID'],
                ':dataset_name' => $row['Dataset Name'],
                ':facility_type' => $row['Facility Type'],
                ':report_period' => $row['Report Period'],
                ':ownership_type_id' => $row['Ownership Type ID'],
                ':ownership_type_label' => $row['Ownership Type Label']
            ]);
            echo "Successfully processed OrganisationUnit_Id: " . $row['Organisation unit ID'] . "\n"; // Log success
            flush(); // Ensure output is sent to browser
        } catch (Exception $e) {
            echo "Error processing OrganisationUnit_Id: " . $row['Organisation unit ID'] . " - " . $e->getMessage() . "\n"; // Log any error during execution
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
    echo "Fetching data from the DHIS2 API...\n";
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
    echo "Starting to upsert data into the HISPMD Database...\n";
    flush(); // Ensure output is sent to browser
    upsertData($dbConn, $apiData);

    echo "Reporting Rates Data successfully updated and inserted into the HISPMD Database.\n";
    flush(); // Ensure output is sent to browser

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n"; // Log any exceptions
    flush(); // Ensure output is sent to browser
}

?>
