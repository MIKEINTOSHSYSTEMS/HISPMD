<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Dashboard Home Landing Page</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* #e9ecef Set a light gray background for the body */
            margin: 0; /* Remove default margin */
            height: 100vh; /* Full viewport height */
            overflow: hidden; /* Prevent body scroll */
        }
        .tab-content {
            margin-top: 10px;
        }
        .nav-link.active {
            color: #0e74b8 !important; /* Active link color */
        }
        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }
        .iframe-container {
            position: relative;
            width: 100%;
            height: 100%; /* Ensure it takes the full height of the card */
            overflow: hidden; /* Hide overflow to prevent scrollbars */
        }
        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        .full-width-card {
            width: 100vw; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            border: none; /* Remove border */
            box-shadow: none; /* Remove shadow */
            background-color: #f5f5f5; /* #e9ecef Background color for the card */
        }
        .card-header {
            background-color: transparent; /* Header background */
            color: white; /* Card header text color */
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Info</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dashboard</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card full-width-card">
                    <div class="card-header">
                        <!--Info Tab-->
                    </div>
                    <div class="card-body p-0">
                        <div class="iframe-container">
                            <iframe src="./sources.php"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card full-width-card">
                    <div class="card-header">
                        <!--Indicators-->
                    </div>
                    <div class="card-body p-0">
                    <!--    <h5 class="card-title">Charts</h5>-->
                        <!--<p class="card-text">Indicators Dashboard by Group</p>-->
                        <div class="iframe-container">
                            
                            <iframe src="../meta/main.php"></iframe>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="card full-width-card">
                    <div class="card-header">
                        Settings Tab
                    </div>
                    <div class="card-body p-0">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">This is where your settings will be. You can modify your preferences here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
