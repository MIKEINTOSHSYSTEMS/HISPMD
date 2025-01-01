<?php
include 'db_connection.php';

// Fetch existing settings from the database
$stmt = $pdo->query("SELECT * FROM dhis2_reportingrate_settings LIMIT 1");
$settings = $stmt->fetch(PDO::FETCH_ASSOC);

$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

$ownershipTypeMap = [
    "private" => ["id" => "nZ0QfIPU2Up", "label" => "Private"],
    "public" => ["id" => "hdCBfjmUBua", "label" => "Public"],
    "other_government" => ["id" => "Th2AESuCURe", "label" => "Other Government"],
    "ngo" => ["id" => "FBTQspO7YFJ", "label" => "NGO"]
];

$selectedFacilityTypes = isset($settings['facility_types']) ? explode(',', $settings['facility_types']) : [];
$selectedOwnershipTypes = isset($settings['ownership_types']) ? explode(',', $settings['ownership_types']) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        /* Styling for better UI presentation */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #444;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="checkbox"] {
            width: auto;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reporting Rate Settings</h1>
        <form action="save_settings.php" method="POST">
            <div class="form-group">
                <label for="data_set">Data Set:</label>
                <input type="text" id="data_set" name="data_set" value="<?= $settings['data_set'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label for="report_period">Report Period:</label>
                <input type="text" id="report_period" name="report_period" value="<?= $settings['report_period'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label for="org_unit">Organisation Unit:</label>
                <input type="text" id="org_unit" name="org_unit" value="<?= $settings['org_unit'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label>Facility Types:</label>
                <?php foreach ($facilityTypeMap as $key => $facilityType): ?>
                    <div>
                        <input type="checkbox" id="facility_<?= $key ?>" name="facility_types[]" value="<?= $key ?>" 
                        <?= in_array($key, $selectedFacilityTypes) ? 'checked' : '' ?>>
                        <label for="facility_<?= $key ?>"><?= $facilityType['label'] ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
                <label>Ownership Types:</label>
                <?php foreach ($ownershipTypeMap as $key => $ownershipType): ?>
                    <div>
                        <input type="checkbox" id="ownership_<?= $key ?>" name="ownership_types[]" value="<?= $key ?>" 
                        <?= in_array($key, $selectedOwnershipTypes) ? 'checked' : '' ?>>
                        <label for="ownership_<?= $key ?>"><?= $ownershipType['label'] ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit">Save Settings</button>
        </form>
    </div>
</body>
</html>
