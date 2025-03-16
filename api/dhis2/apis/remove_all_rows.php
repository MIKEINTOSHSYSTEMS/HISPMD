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

// Remove all rows from the dhis2_reporting_rates table
try {
    $stmt = $pdo->prepare("DELETE FROM dhis2_reporting_rates");
    $stmt->execute();
    echo json_encode(['message' => 'All rows removed successfully.']);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>