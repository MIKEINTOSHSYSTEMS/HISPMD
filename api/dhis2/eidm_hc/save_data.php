<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include './settings/db_connection.php';

header('Content-Type: application/json');

try {
    // Verify received data
    $json = file_get_contents('php://input');
    error_log("Raw POST data: " . $json);
    $data = json_decode($json, true);

    if (!$data || !isset($data['rows'])) {
        error_log("Invalid data structure received");
        throw new Exception("Invalid data structure received from API");
    }

    // Start transaction
    $pdo->beginTransaction();
    
    // Truncate table
    error_log("Truncating table");
    $pdo->exec("TRUNCATE TABLE eidm_hc");

    // Prepare statement
    $stmt = $pdo->prepare("
        INSERT INTO eidm_hc 
        (indicator, organisation_unit, relative_period, period, value)
        VALUES (:indicator, :organisation_unit, :relative_period, :period, :value)
    ");

    $insertCount = 0;
    foreach ($data['rows'] as $index => $row) {
        try {
            // Normalize data keys
            $normalized = [
                'indicator' => $row['Indicator'] ?? null,
                'organisation_unit' => $row['Organisation Unit'] ?? null,
                'relative_period' => $row['RelativePeriod'] ?? null, // Add relative_period
                'period' => $row['Period'] ?? null,
                'value' => $row['Value'] ?? null
            ];

            // Validate required fields
            foreach ($normalized as $key => $value) {
                if ($value === null) {
                    throw new Exception("Missing $key in row $index");
                }
            }

            // Validate numeric value
            if (!is_numeric($normalized['value'])) {
                throw new Exception("Invalid numeric value in row $index: " . $normalized['value']);
            }

            // Execute insert
            //$stmt->execute($normalized);
            //$insertCount++;

            // Execute insert
            $stmt->execute($normalized);
            $insertCount++;
        } catch (Exception $e) {
            error_log("Error inserting row $index: " . $e->getMessage());
            throw $e;
        }
    }

    $pdo->commit();
    error_log("Successfully inserted $insertCount rows");

    echo json_encode([
        'success' => true,
        'inserted_rows' => $insertCount
    ]);

} catch (Exception $e) {
    $pdo->rollBack();
    http_response_code(500);
    error_log("Critical Error: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
}
?>
