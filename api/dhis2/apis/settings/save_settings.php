<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_set = $_POST['data_set'];
    $report_period = $_POST['report_period'];
    $org_unit = $_POST['org_unit'];
    $facility_types = isset($_POST['facility_types']) ? implode(',', $_POST['facility_types']) : '';
    $ownership_types = isset($_POST['ownership_types']) ? implode(',', $_POST['ownership_types']) : '';

    try {
        $stmt = $pdo->prepare("SELECT id FROM dhis2_reportingrate_settings LIMIT 1");
        $stmt->execute();
        $existingSettings = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingSettings) {
            $stmt = $pdo->prepare("UPDATE dhis2_reportingrate_settings 
                SET data_set = :data_set, 
                    report_period = :report_period, 
                    org_unit = :org_unit, 
                    facility_types = :facility_types, 
                    ownership_types = :ownership_types, 
                    updated_at = CURRENT_TIMESTAMP 
                WHERE id = :id");
            $stmt->execute([
                ':data_set' => $data_set,
                ':report_period' => $report_period,
                ':org_unit' => $org_unit,
                ':facility_types' => $facility_types,
                ':ownership_types' => $ownership_types,
                ':id' => $existingSettings['id']
            ]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO dhis2_reportingrate_settings 
                (data_set, report_period, org_unit, facility_types, ownership_types) 
                VALUES (:data_set, :report_period, :org_unit, :facility_types, :ownership_types)");
            $stmt->execute([
                ':data_set' => $data_set,
                ':report_period' => $report_period,
                ':org_unit' => $org_unit,
                ':facility_types' => $facility_types,
                ':ownership_types' => $ownership_types
            ]);
        }

        header('Location: ../index.php?success=1');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
