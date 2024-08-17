<?php

function fetchCSVData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        die('Curl error: ' . curl_error($ch));
    }
    curl_close($ch);
    return $result;
}

function createTable($conn, $tblName, $columns) {
    $columns = array_unique($columns); // Ensure column names are unique
    $columnDefinitions = implode(", ", array_map(function($col) {
        return "`$col` TEXT";
    }, $columns));
    $createTableQuery = "CREATE TABLE IF NOT EXISTS `$tblName` ($columnDefinitions) ENGINE=InnoDB ROW_FORMAT=DYNAMIC";
    if ($conn->query($createTableQuery) !== TRUE) {
        die("Error creating table: " . $conn->error);
    }
}

function CSV_to_table($csv_data, $tblName = 'ethprismcsv') {
    $lines = explode("\n", $csv_data);
    $header = str_getcsv(array_shift($lines));
    
    if (empty($header)) {
        die("Invalid CSV input");
    }

    // Ensure column names are unique
    $header = array_unique($header);

    // Establish a new connection using mysqli
    $conn = new mysqli('localhost', 'surveyctoethprism', 'surveyctoethprism', 'surveyctoethprism');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create table with all columns as TEXT
    createTable($conn, $tblName, $header);

    // Iterate over the CSV data to insert rows
    foreach ($lines as $line) {
        if (empty(trim($line))) {
            continue; // Skip empty lines
        }

        $row = str_getcsv($line);
        $escaped_values = array_map(array($conn, 'real_escape_string'), $row);

        $columns = implode(", ", array_map(function($col) {
            return "`$col`";
        }, $header));
        $values = "'" . implode("', '", $escaped_values) . "'";

        $sql = "INSERT INTO `$tblName` ($columns) VALUES ($values)";
        
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}


// $url = 'https://ethiopiaprism.surveycto.com/api/v1/forms/data/wide/csv/dup_t_module_v_facilityoffice_checklist';
// $url = 'https://ethiopiaprism.surveycto.com/api/v1/forms/data/csv/dup_t_module_v_facilityoffice_checklist?date=2024&r=approved|rejected';
//$url = 'https://ethiopiaprism.surveycto.com/api/v1/forms/data/csv/dup_t_module_v_facilityoffice_checklist';
$url = 'https://ethiopiaprism.surveycto.com/api/v1/forms/data/csv/dup_t_module_v_facilityoffice_checklist';
$username = 'fasil.w@merqconsultancy.org';
$password = 'merq123';


$csv_data = fetchCSVData($url, $username, $password);
CSV_to_table($csv_data);

?>

