<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include './settings/db_connection.php';

header('Content-Type: application/json');

try {
    $action = $_GET['action'] ?? null;

    if (!$action) {
        throw new Exception("Action parameter is missing.");
    }

    // Start transaction
    $pdo->beginTransaction();

    if ($action === 'deleteAll') {
        // Delete all rows
        $stmt = $pdo->prepare("DELETE FROM eidm_hc");
        $stmt->execute();
        $message = "All rows deleted successfully.";
    } elseif ($action === 'deleteNonNull') {
        // Delete rows with non-null data
        $stmt = $pdo->prepare("DELETE FROM eidm_hc WHERE value IS NOT NULL");
        $stmt->execute();
        $message = "Non-null data deleted successfully.";
    } else {
        throw new Exception("Invalid action parameter.");
    }

    $pdo->commit();

    echo json_encode([
        'success' => true,
        'message' => $message
    ]);

} catch (Exception $e) {
    $pdo->rollBack();
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>