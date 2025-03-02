<?php
// Include database connection
include '../api/dhis2/eidm_hc/settings/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHIS2 EIDM Data Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { max-width: 1200px; margin: 40px auto; }
        .data-preview { max-height: 500px; overflow-y: auto; margin: 20px 0; }
        .status-box { padding: 15px; margin: 10px 0; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>

        <!-- Add this after <h2> tag -->
<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link active" href="#operations" data-bs-toggle="tab">Operations</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#settings" data-bs-toggle="tab">Settings</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="operations">
        <!-- Existing operations content -->
    </div>
    <div class="tab-pane fade" id="settings">
        <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
    </div>
</div>
        
        <!-- Control Section -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Operations
            </div>
            <div class="card-body">
                <button id="updateData" class="btn btn-success">
                    Update EIDM Data
                </button>
                <div id="status" class="status-box"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class="card">
            <div class="card-header">
                Data Preview (Last Fetched Results)
            </div>
            <div class="card-body">
                <div id="dataPreview" class="data-preview">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#updateData').click(function() {
            const btn = $(this);
            btn.prop('disabled', true);
            $('#status').html('<div class="alert alert-info">Fetching data from API...</div>');

            // Fetch data from API
            $.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    $('#status').html('<div class="alert alert-info">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    $.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                $('#status').html(`
                                    <div class="alert alert-success">
                                        Success! ${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                $('#status').html(`
                                    <div class="alert alert-danger">
                                        Error: ${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            $('#status').html(`
                                <div class="alert alert-danger">
                                    Save failed: ${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    $('#status').html(`
                        <div class="alert alert-danger">
                            API Error: ${xhr.responseJSON?.error || 'Unknown error'}
                        </div>
                    `);
                    btn.prop('disabled', false);
                }
            });
        });

        function loadDataPreview() {
            $.get('../api/dhis2/eidm_hc/fetch_data.php', function(data) {
                const preview = $('#dataPreview');
                preview.html(
                    `<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Indicator</th>
                                <th>Organisation Unit</th>
                                <th>Period</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${data.rows.map(row => `
                                <tr>
                                    <td>${row.indicator}</td>
                                    <td>${row.organisation_unit}</td>
                                    <td>${row.period}</td>
                                    <td>${row.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>`
                );
            }).fail(() => {
                $('#dataPreview').html('<div class="alert alert-warning">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>