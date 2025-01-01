<?php
// Include the database connection and fetch the settings
include './settings/db_connection.php';
$stmt = $pdo->query("SELECT * FROM dhis2_reportingrate_settings LIMIT 1");
$settings = $stmt->fetch(PDO::FETCH_ASSOC);

// Facility Types Mapping
$facilityTypeMap = [
    "hospital" => ["id" => "nVEDFMfnStv", "label" => "Hospital"],
    "clinic" => ["id" => "kwcNbI9fPdB", "label" => "Clinic"],
    "health_post" => ["id" => "FW4oru60vgc", "label" => "Health Post"],
    "health_center" => ["id" => "j8SCxUTyzfm", "label" => "Health Center"]
];

// Ownership Types Mapping
$ownershipTypeMap = [
    "private" => ["id" => "nZ0QfIPU2Up", "label" => "Private"],
    "public" => ["id" => "hdCBfjmUBua", "label" => "Public"],
    "other_government" => ["id" => "Th2AESuCURe", "label" => "Other Government"],
    "ngo" => ["id" => "FBTQspO7YFJ", "label" => "NGO"]
];

// Extract selected Facility Types and Ownership Types from the database
$selectedFacilityTypes = isset($settings['facility_types']) ? explode(',', $settings['facility_types']) : [];
$selectedOwnershipTypes = isset($settings['ownership_types']) ? explode(',', $settings['ownership_types']) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reporting Rates and Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .settings-summary {
            margin-top: 30px;
            background: #fafafa;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }
        .progress-container {
            margin-top: 20px;
        }
        .log-container {
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
            background: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .log-container pre {
            margin: 0;
            font-size: 14px;
            color: #333;
        }
        button {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Section 1: Reporting Rate Update -->
        <div align="center"><svg width="64px" height="64px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z" fill="#3276c3"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z" fill="#3276c3"></path> </g></svg></div>
        <h1 class="text-center mb-4">Update DHIS2 Reporting Rates</h1>
        <div class="text-center">
            <button id="startUpdate" class="btn btn-primary btn-lg">Update Reporting Rates</button>
        </div>
        <div class="progress-container">
            <div class="progress">
                <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>
        <div class="log-container mt-4">
            <h5>Logs:</h5>
            <pre id="log"></pre>
        </div>
    </div>

    <div class="container">
        <!-- Section 2: Settings Form -->
        <h1>Reporting Rate Settings</h1>
        <form action="./settings/save_settings.php" method="POST">
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
                <label for="facility_types">Facility Types:</label>
                <?php foreach ($facilityTypeMap as $key => $facilityType): ?>
                    <div>
                        <input type="checkbox" id="facility_<?= $key ?>" name="facility_types[]" value="<?= $key ?>" 
                        <?= in_array($key, $selectedFacilityTypes) ? 'checked' : '' ?>>
                        <label for="facility_<?= $key ?>"><?= $facilityType['label'] ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
                <label for="ownership_types">Ownership Types:</label>
                <?php foreach ($ownershipTypeMap as $key => $ownershipType): ?>
                    <div>
                        <input type="checkbox" id="ownership_<?= $key ?>" name="ownership_types[]" value="<?= $key ?>" 
                        <?= in_array($key, $selectedOwnershipTypes) ? 'checked' : '' ?>>
                        <label for="ownership_<?= $key ?>"><?= $ownershipType['label'] ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Settings</button>
            </div>
        </form>

        <div class="settings-summary">
            <h2>Current Settings</h2>
            <p><strong>Data Set:</strong> <?= $settings['data_set'] ?? 'Not Set' ?></p>
            <p><strong>Report Period:</strong> <?= $settings['report_period'] ?? 'Not Set' ?></p>
            <p><strong>Organisation Unit:</strong> <?= $settings['org_unit'] ?? 'Not Set' ?></p>
            <p><strong>Facility Types:</strong> <?= implode(', ', $selectedFacilityTypes) ?: 'Not Set' ?></p>
            <p><strong>Ownership Types:</strong> <?= implode(', ', $selectedOwnershipTypes) ?: 'Not Set' ?></p>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function () {
        $('#startUpdate').on('click', function () {
            const button = $(this);
            const progressBar = $('#progressBar');
            const log = $('#log');

            // Reset progress bar and log
            progressBar.css('width', '0%').attr('aria-valuenow', 0).text('0%');
            log.html('');  // Clear logs
            button.prop('disabled', true).text('Updating...');

            // Start the update process
            $.ajax({
                url: 'update_reporting_rates.php',
                type: 'GET',
                xhr: function () {
                    const xhr = new window.XMLHttpRequest();

                    // Update progress and log in real time
                    xhr.onprogress = function (e) {
                        if (e.lengthComputable) {
                            const progress = Math.floor((e.loaded / e.total) * 100);
                            progressBar.css('width', progress + '%').attr('aria-valuenow', progress).text(progress + '%');
                        }

                        // Append new log data in real time
                        const newLog = e.target.responseText;
                        log.html(newLog);  // Update the log div with the new log data
                    };

                    return xhr;
                },
                success: function (response) {
                    progressBar.css('width', '100%').attr('aria-valuenow', 100).text('100%');
                    button.prop('disabled', false).text('Update Reporting Rates');
                },
                error: function (xhr, status, error) {
                    log.append(`<pre>Error: ${error}</pre>`);
                    button.prop('disabled', false).text('Update Reporting Rates');
                }
            });
        });
    });
    </script>
</body>
</html>
