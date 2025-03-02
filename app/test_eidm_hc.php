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
    <!--
    <link href="../api/styles/flatly_bootstrap.css" rel="stylesheet">
-->
    <link href="./styles/bootstrap/flatly/normal/style.css" rel="stylesheet">
    
    
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .nav-tabs .nav-link {
            color: #495057;
            font-weight: bold;
        }

        .nav-tabs .nav-link.active {
            background-color: #337ab7;
            color: white;
            border-radius: 5px 5px 0 0;
        }

        .status-box {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
        }

        .card {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #00274ce9;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }

        .btn-custom {
            font-size: 1rem;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }

        .data-preview {
            max-height: 500px;
            overflow-y: auto;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <h2><svg width="64px" height="64px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z" fill="#3276c3"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z" fill="#3276c3"></path> </g></svg>
        DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>
<br>
        <!-- Tabs Section -->
        <ul class="nav nav-tabs mb-4">
                      <!--
            <li class="nav-item">
                <a class="nav-link active" href="#eidm-operations" data-bs-toggle="tab">Operations</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#eidm-settings" data-bs-toggle="tab">Settings</a>
            </li>
    -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="eidm-operations">
                <!-- Existing operations content -->
            </div>
            <div class="tab-pane fade" id="eidm-settings">
                <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
            </div>
        </div>

        <!-- Control Section -->
        <div class="card">
            <div class="card-header">Operations</div>
            <div class="card-body">
                <button id="eidm-updateData" class="btn btn-success btn-custom">
                    Update EIDM Data
                </button>
                <div id="eidm-status" class="status-box"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class="card">
            <div class="card-header">Data Preview (Last Fetched Results)</div>
            <div class="card-body">
                <div id="eidm-dataPreview" class="data-preview">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#eidm-updateData').click(function() {
            const btn = $(this);
            btn.prop('disabled', true);
            $('#eidm-status').html('<div class="alert alert-info">Fetching data from API...</div>');

            // Fetch data from API
            $.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    $('#eidm-status').html('<div class="alert alert-info">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    $.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                $('#eidm-status').html(`
                                    <div class="alert alert-success">
                                        Success! ${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                $('#eidm-status').html(`
                                    <div class="alert alert-danger">
                                        Error: ${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            $('#eidm-status').html(`
                                <div class="alert alert-danger">
                                    Save failed: ${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    $('#eidm-status').html(`
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
                const preview = $('#eidm-dataPreview');
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
                $('#eidm-dataPreview').html('<div class="alert alert-warning">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>
