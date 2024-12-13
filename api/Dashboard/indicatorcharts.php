<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Indicator Chart</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5; /* Light gray background */
        margin: 0; /* Remove default margin */
        height: 770vh; /* Full viewport height */
        width: 100%;
        overflow: hidden; /* Prevent body scroll */
    }
    .tab-content {
        margin-top: 10px;
    }
    .nav-link {
        transition: background-color 0.3s, color 0.3s;
        border: 2px solid green; /* Green border for default state */
    }
    .nav-link.active {
        background-color: #0e74b8; /* Active tab color */
        color: white !important; /* Active link text color */
        border-color: red; /* Red border for active tab */
        border-radius: 5px 3px 0 0; /* Rounded top corners */
    }
    .nav-link:hover {
        background-color: #0e74b8; /* Hover color */
        color: white; /* Hover text color */
        border-color: red; /* Red border for hovered tab */
    }
    .nav-tabs .nav-item {
        margin-bottom: 0px;
        border-radius: 5px 5px 0 0; /* Rounded top corners */
        border: var(--bs-nav-tabs-border-width) solid #0e74b9;
    }
    .nav-tabs .nav-link.active {
        color: var(--bs-nav-tabs-link-active-color);
        background-color: #0e74b8;
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
            iframe {
            border: none;
            width: 100%;
            height: 77vh;
        }
        @media (max-width: 768px) {
            iframe {
                height: 80vh; /* Adjust height for smaller screens */
            }
        }
        @media (max-width: 480px) {
            iframe {
                height: 70vh; /* Further adjust for mobile devices */
            }
        }
    .full-width-card {
        width: 100vw; /* Full width of the viewport */
        height: calc(100vh - 56px); /* Full height minus nav bar */
        border: none; /* Remove border */
        box-shadow: none; /* Remove shadow */
        background-color: #f5f5f5; /* Background color for the card */
    }
    .card-header {
        background-color: transparent; /* Header background */
        color: #0e74b8; /* Card header text color */
    }
    /* Spinner Styles */
    .spinner-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .spinner-border {
        width: 3rem;
        height: 3rem;
    }
</style>
</head>
<body>

    <div class="container-fluid p-0">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="indicators-tab" data-bs-toggle="tab" data-bs-target="#indicators" type="button" role="tab" aria-controls="settings" aria-selected="false">Indicator Charts</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="indicators" role="tabpanel" aria-labelledby="indicators-tab">
                <div class="card full-width-card">
                    <div class="card-header">
                        <!--Build your custom visualizations and charts-->
                    </div>
                    <div class="card-body p-0">
                        <!--
                        <h5 class="card-title">Build your custom visualizations and charts</h5>
                        <p class="card-text">This is where you will be able to build custom charts and visalizations <br> You can modify your preferences here.</p>
                        <div class="iframe">
                        -->
                            <!-- Spinner -->
                            <div class="spinner-container" id="spinner-indicators">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <!-- Iframe -->
                            <iframe id="iframe-indicators" src="../indicators/dist/" onload="hideSpinner('indicators')"></iframe>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function hideSpinner(tabId) {
            // Hide the spinner when the iframe has loaded
            document.getElementById('spinner-' + tabId).style.display = 'none';
        }
    </script>

</body>
</html>
