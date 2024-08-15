<?php

function fetchJSONData($url, $username, $password) {
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

function alterTable($conn, $tblName, $columns) {
    foreach ($columns as $column) {
        $alterQuery = "ALTER TABLE `$tblName` ADD COLUMN IF NOT EXISTS `$column` TEXT";
        if ($conn->query($alterQuery) !== TRUE) {
            echo "Error altering table: " . $conn->error . "<br>";
        }
    }
}

function JSON_to_table($json_var, $tblName = 'ethprism01') {
    $j_obj = json_decode($json_var, true);

    if (!$j_obj || !is_array($j_obj) || count($j_obj) === 0) {
        die("Invalid JSON input or empty array");
    }

    // Establish a new connection using mysqli
    $conn = new mysqli('localhost', 'surveyctoethprism', 'surveyctoethprism', 'surveyctoethprism');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract column names from the first row of the JSON data
    $firstRow = $j_obj[0];
    $columns = array_keys($firstRow);
    $columnDefinitions = implode(", ", array_map(function($col) {
        return "`$col` TEXT";
    }, $columns));

    // Create table query if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS `$tblName` ($columnDefinitions)";

    if ($conn->query($createTableQuery) !== TRUE) {
        die("Error creating table: " . $conn->error);
    }

    // Iterate over the JSON data to insert rows and handle new columns
    foreach ($j_obj as $row) {
        $keys = array_keys($row);
        
        // Check for new columns and alter the table if needed
        alterTable($conn, $tblName, $keys);

        $columns = implode(", ", array_map(function($key) {
            return "`$key`";
        }, $keys));
        $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($row));
        $values  = "'" . implode("', '", $escaped_values) . "'";

        // Use prepared statements for better security
        $placeholders = implode(", ", array_fill(0, count($keys), '?'));
        $stmt = $conn->prepare("INSERT INTO `$tblName` ($columns) VALUES ($placeholders)");

        if ($stmt === false) {
            echo "Error preparing statement: " . $conn->error;
            continue;
        }

        $stmt->bind_param(str_repeat('s', count($escaped_values)), ...$escaped_values);

        if (!$stmt->execute()) {
            echo "Error executing statement: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}

// Example usage
$url = 'https://ethiopiaprism.surveycto.com/api/v2/forms/data/wide/json/dup_t_module_v_facilityoffice_checklist?date=2024&r=approved|rejected';
$username = 'fasil.w@merqconsultancy.org';
$password = 'merq123';

$json_data = fetchJSONData($url, $username, $password);
JSON_to_table($json_data);

?>
