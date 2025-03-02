<?php
include './settings/db_connection.php';

// Get current settings
$stmt = $pdo->query("SELECT * FROM eidm_settings ORDER BY id DESC LIMIT 1");
$currentSettings = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="card mb-4">
    <div class="card-header bg-secondary text-white">
        DHIS2 EIDM API Settings
    </div>
    <div class="card-body">
        <form id="settingsForm">
            <div class="mb-3">
                <label class="form-label">DX Parameters</label>
                <textarea class="form-control" name="dx" rows="3" required><?= htmlspecialchars($currentSettings['dx'] ?? '') ?></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">OU Parameters</label>
                <textarea class="form-control" name="ou" rows="3" required><?= htmlspecialchars($currentSettings['ou'] ?? '') ?></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">PE Parameters</label>
                <input type="text" class="form-control" name="pe" value="<?= htmlspecialchars($currentSettings['pe'] ?? '') ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    // When the Settings tab is shown, load the form with current settings.
    $('a[href="#eidm-settings"]').on('shown.bs.tab', function() {
        // Force reload of the settings UI on tab switch if needed
        loadSettings();
    });

    // Function to load the settings data dynamically
    function loadSettings() {
        // Only load the settings if they haven't already been rendered
        $.get('settings/load_settings.php', function(data) {
            const settings = data.settings; // Assuming the server returns the settings in this format
            
            // Populate form fields with the settings
            $('textarea[name="dx"]').val(settings.dx || '');
            $('textarea[name="ou"]').val(settings.ou || '');
            $('input[name="pe"]').val(settings.pe || '');
        });
    }

    // Handle the form submission for saving settings
    $('#settingsForm').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: 'save_settings.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    showAlert('Settings saved successfully!', 'success');
                } else {
                    showAlert('Error: ' + response.error, 'danger');
                }
            },
            error: function() {
                showAlert('Error saving settings', 'danger');
            }
        });
    });

    function showAlert(message, type) {
        const alert = $(`<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                            ${message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                         </div>`);
        $('#settingsForm').prepend(alert);
        setTimeout(() => alert.alert('close'), 3000);
    }
});
</script>
