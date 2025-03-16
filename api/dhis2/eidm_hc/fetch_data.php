<?php
include './settings/db_connection.php';

header('Content-Type: application/json');

try {
    $stmt = $pdo->query("
        SELECT indicator, organisation_unit, relative_period, period, value
        FROM eidm_hc
        ORDER BY period DESC
        LIMIT 100
    ");
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'rows' => $data
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>