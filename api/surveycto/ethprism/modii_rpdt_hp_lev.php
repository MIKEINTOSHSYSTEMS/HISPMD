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

function dropTableIfExists($conn, $tblName) {
    $dropQuery = "DROP TABLE IF EXISTS \"$tblName\"";
    if (!pg_query($conn, $dropQuery)) {
        echo "Error dropping table: " . pg_last_error($conn) . "<br>";
    }
}

function alterTable($conn, $tblName, $columns) {
    foreach ($columns as $column) {
        $alterQuery = "ALTER TABLE \"$tblName\" ADD COLUMN IF NOT EXISTS \"$column\" TEXT";
        if (!pg_query($conn, $alterQuery)) {
            echo "Error altering table: " . pg_last_error($conn) . "<br>";
        }
    }
}

function JSON_to_table($json_var, $tblName = 'ethprism_healthpost_level_rhis_performance_diagnostic') {
    $j_obj = json_decode($json_var, true);

    if (!$j_obj || !is_array($j_obj) || count($j_obj) === 0) {
        die("Invalid JSON input or empty array");
    }

    // Establish a new connection using pg_connect and if you want to connect to the production db change it hisp_md
    $conn = pg_connect("host=192.168.128.4 dbname=hisp_md user=hispmddb password=hispmddb");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    }

    // Drop the table if it exists
    dropTableIfExists($conn, $tblName);

    // Extract column names from the first row of the JSON data
    $firstRow = $j_obj[0];
    $columns = array_keys($firstRow);
    $columnDefinitions = implode(", ", array_map(function($col) {
        return "\"$col\" TEXT";
    }, $columns));

    // Create table query if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS \"$tblName\" ($columnDefinitions)";

    if (!pg_query($conn, $createTableQuery)) {
        die("Error creating table: " . pg_last_error($conn));
    }

    // Iterate over the JSON data to insert rows and handle new columns
    foreach ($j_obj as $row) {
        $keys = array_keys($row);
        
        // Check for new columns and alter the table if needed
        alterTable($conn, $tblName, $keys);

        $columns = implode(", ", array_map(function($key) {
            return "\"$key\"";
        }, $keys));
        $escaped_values = array_map(function($value) use ($conn) {
            return pg_escape_string($conn, $value);
        }, array_values($row));
        $placeholders = implode(", ", array_map(function($i) {
            return "$" . ($i + 1);
        }, array_keys($escaped_values)));

        $query = "INSERT INTO \"$tblName\" ($columns) VALUES ($placeholders)";
        
        $result = pg_query_params($conn, $query, $escaped_values);

        if (!$result) {
            echo "Error executing statement: " . pg_last_error($conn) . "<br>";
        }
    }

    pg_close($conn);
}

function redirectToIndexWithMessage($message) {
    session_start();
    $_SESSION['message'] = $message;
    header('Location: ../index.php');
    exit();
}

// Example usage
//mod_ii_rpdt_hp_lev_
$url = 'https://ethiopiaprism.surveycto.com/api/v2/forms/data/wide/json/mod_ii_rpdt_hp_lev_?date=2024&r=approved|rejected';
$username = 'fasil.w@merqconsultancy.org';
$password = 'merq123';

$json_data = fetchJSONData($url, $username, $password);
JSON_to_table($json_data);

// Redirect with success message
redirectToIndexWithMessage('Data successfully refreshed');

?>
