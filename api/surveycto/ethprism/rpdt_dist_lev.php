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

function dropTableIfExists($conn, $tblName) {
    $dropQuery = "DROP TABLE IF EXISTS \"$tblName\"";
    if (!pg_query($conn, $dropQuery)) {
        echo "Error dropping table: " . pg_last_error($conn) . "<br>";
    }
}

function sanitize_column_name($col) {
    // Replace any non-alphanumeric character (except underscore) with an underscore
    return preg_replace('/[^a-zA-Z0-9_]/', '_', $col);
}

function alterTable($conn, $tblName, $columns) {
    foreach ($columns as $column) {
        $alterQuery = "ALTER TABLE \"$tblName\" ADD COLUMN IF NOT EXISTS \"$column\" TEXT";
        if (!pg_query($conn, $alterQuery)) {
            echo "Error altering table: " . pg_last_error($conn) . "<br>";
        }
    }
}

function CSV_to_table($csv_var, $tblName = 'ethprism_national_prism_woreda_level_diagnostic', $max_columns = 1600) {
    $lines = explode("\n", $csv_var);
    $header = str_getcsv(array_shift($lines));

    if (!$header || !is_array($header) || count($header) === 0) {
        die("Invalid CSV input or empty array");
    }

    // Limit columns to max_columns and sanitize column names
    $limited_header = array_slice($header, 0, $max_columns);
    $sanitized_header = array_map('sanitize_column_name', $limited_header);

    // Establish a new connection using pg_connect and if you want to connect to the production db change it hisp_md
    $conn = pg_connect("host=192.168.128.4 dbname=hisp_md user=hispmddb password=hispmddb");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    }

    // Drop the table if it exists
    dropTableIfExists($conn, $tblName);

    $columnDefinitions = implode(", ", array_map(function($col) {
        return "\"$col\" TEXT";
    }, $sanitized_header));

    // Create table query if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS \"$tblName\" ($columnDefinitions)";

    if (!pg_query($conn, $createTableQuery)) {
        die("Error creating table: " . pg_last_error($conn));
    }

    // Iterate over the CSV data to insert rows and handle new columns
    foreach ($lines as $line) {
        if (trim($line) === '') continue; // Skip empty lines
        $row = str_getcsv($line);
        $limited_row = array_slice($row, 0, $max_columns);
        $row_assoc = array_combine($sanitized_header, $limited_row);

        $keys = array_keys($row_assoc);
        $columns = implode(", ", array_map(function($key) {
            return "\"$key\"";
        }, $keys));
        $escaped_values = array_map(function($value) use ($conn) {
            return pg_escape_string($conn, $value);
        }, array_values($row_assoc));
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

// mod_ii_rpdt_dist_lev
$url = 'https://ethiopiaprism.surveycto.com/api/v1/forms/data/csv/mod_ii_rpdt_dist_lev?date=2024';
$username = 'fasil.w@merqconsultancy.org';
$password = 'merq123';

$csv_data = fetchCSVData($url, $username, $password);
CSV_to_table($csv_data);

// Redirect with success message
redirectToIndexWithMessage('Data successfully refreshed');

?>
