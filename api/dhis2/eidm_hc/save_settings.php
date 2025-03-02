<?php
include './settings/db_connection.php';

header('Content-Type: application/json');

try {
    // Validate input
    $dx = $_POST['dx'] ?? '';
    $ou = $_POST['ou'] ?? '';
    $pe = $_POST['pe'] ?? '';

    if (empty($dx) || empty($ou) || empty($pe)) {
        throw new Exception("All fields are required");
    }

    // Insert new settings
    $stmt = $pdo->prepare("
        INSERT INTO eidm_settings (dx, ou, pe)
        VALUES (?, ?, ?)
    ");
    
    $stmt->execute([$dx, $ou, $pe]);

    echo json_encode([
        'success' => true,
        'message' => 'Settings saved successfully'
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}