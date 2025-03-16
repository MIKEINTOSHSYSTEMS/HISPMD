<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

// Include the database connection
include './settings/db_connection.php'; // Ensure this file is properly configured

// Check if the connection is successful
if (!$pdo) {
    echo json_encode(['error' => 'Database connection failed.']);
    exit;
}

// Fetch data from the dhis2_reporting_rates table
try {
    $stmt = $pdo->query("SELECT * FROM dhis2_reporting_rates");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($data)) {
        echo json_encode(['message' => 'No data found in the table.']);
    } else {
        echo json_encode(['data' => $data]);
    }
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>