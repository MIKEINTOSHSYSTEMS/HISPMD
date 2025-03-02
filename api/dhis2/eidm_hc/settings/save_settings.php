<?php
include './settings/db_connection.php';

header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);


try {
    // Get posted data
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!isset($data['rows'])) {
        throw new Exception("Invalid data structure");
    }

    // Clear existing data
    $pdo->beginTransaction();
    $pdo->exec("TRUNCATE TABLE eidm_hc");

    // Prepare insert statement
    $stmt = $pdo->prepare("
        INSERT INTO eidm_hc 
        (indicator, organisation_unit, period, value)
        VALUES (?, ?, ?, ?)
    ");

    $insertCount = 0;
    foreach ($data['rows'] as $row) {
        // Convert keys to lowercase with underscores
        $normalized = [
            'indicator' => $row['Indicator'] ?? '',
            'organisation_unit' => $row['Organisation Unit'] ?? '',
            'period' => $row['Period'] ?? '',
            'value' => $row['Value'] ?? 0
        ];

        // Validate numeric value
        if (!is_numeric($normalized['value'])) {
            throw new Exception("Invalid value format: " . $normalized['value']);
        }

        $stmt->execute([
            $normalized['indicator'],
            $normalized['organisation_unit'],
            $normalized['period'],
            (float)$normalized['value']
        ]);
        $insertCount++;
    }

    $pdo->commit();

    echo json_encode([
        'success' => true,
        'inserted_rows' => $insertCount
    ]);

} catch (Exception $e) {
    $pdo->rollBack();
    http_response_code(500);
    error_log("Save Error: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}