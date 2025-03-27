<?php
// Define API endpoints (relative paths)
$apiEndpoints = [
    'Main HIS Indicator Data' => 'api/chart/public/data/hispm_data.php',
    'Indicators' => 'app/api/v1.php?table=moh_indicators&action=list',
    'Data Sources' => 'app/api/v1.php?table=moh_datasources&action=list',
    'DHIS2 EIDM Data' => 'api/dhis2/eidm_hc/settings/api_eidmhc.php',
    'DHIS2 Reporting Rates Data' => 'api/dhis2/apis/settings/api_reportingrates.php'
];

// Get current host and construct base API URL
$currentHost = $_SERVER['HTTP_HOST'];
$isHttps = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
$baseUrl = ($isHttps ? 'https://' : 'http://') . $currentHost;
$apiBaseUrl = $baseUrl . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD API Gateways</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
            --info-color: #3498db;
            --sidebar-width: 250px;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(135deg, var(--secondary-color), var(--dark-color));
            color: white;
            padding: 20px 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all var(--transition-speed) ease;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .sidebar-header h3 {
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .sidebar-header h3 i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 3px solid var(--primary-color);
        }

        .sidebar-menu a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: all var(--transition-speed) ease;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .header h1 {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
        }

        .header h1 i {
            margin-right: 15px;
            color: var(--primary-color);
        }

        .header-actions {
            display: flex;
            align-items: center;
        }

        .search-box {
            position: relative;
            margin-right: 15px;
        }

        .search-box input {
            padding: 10px 15px 10px 40px;
            border: 1px solid #ddd;
            border-radius: 30px;
            width: 200px;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .search-box input:focus {
            width: 250px;
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.2);
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .user-profile span {
            font-weight: 500;
            color: var(--secondary-color);
        }

        /* API Dashboard Styles */
        .api-dashboard {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 30px;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .dashboard-header h2 {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 1.5rem;
        }

        .dashboard-actions button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .dashboard-actions button:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-actions button i {
            margin-right: 5px;
        }

        /* Tab Navigation */
        .api-tabs {
            display: flex;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .api-tab {
            padding: 10px 20px;
            cursor: pointer;
            font-weight: 500;
            color: #666;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            position: relative;
        }

        .api-tab:hover {
            color: var(--primary-color);
        }

        .api-tab.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
        }

        .api-tab .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* API Content */
        .api-content {
            display: none;
        }

        .api-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .api-endpoint {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .api-endpoint:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .endpoint-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .endpoint-method {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            color: white;
        }

        .method-get {
            background: var(--success-color);
        }

        .method-post {
            background: var(--info-color);
        }

        .method-put {
            background: var(--warning-color);
        }

        .method-delete {
            background: var(--accent-color);
        }

        .endpoint-url {
            font-family: 'Courier New', Courier, monospace;
            background: #e9ecef;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            word-break: break-all;
        }

        .endpoint-description {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .endpoint-actions {
            display: flex;
            gap: 10px;
        }

        .endpoint-btn {
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
        }

        .endpoint-btn i {
            margin-right: 5px;
        }

        .btn-try {
            background: var(--primary-color);
            color: white;
        }

        .btn-try:hover {
            background: #2980b9;
        }

        .btn-docs {
            background: #f8f9fa;
            color: var(--secondary-color);
            border: 1px solid #ddd;
        }

        .btn-docs:hover {
            background: #e9ecef;
        }

        /* JSON Viewer */
        .json-viewer {
            background: #282c34;
            color: #abb2bf;
            border-radius: 8px;
            padding: 15px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9rem;
            margin-top: 20px;
            overflow-x: auto;
            max-height: 400px;
            display: none;
        }

        .json-viewer pre {
            margin: 0;
            white-space: pre-wrap;
        }

        /* Response Status */
        .response-status {
            margin-top: 10px;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            display: inline-block;
        }

        .status-success {
            background-color: rgba(46, 204, 113, 0.1);
            color: #27ae60;
            border: 1px solid #2ecc71;
        }

        .status-error {
            background-color: rgba(231, 76, 60, 0.1);
            color: #c0392b;
            border: 1px solid #e74c3c;
        }

        /* How to Use Section */
        .how-to-use {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 30px;
        }

        .how-to-use h2 {
            color: var(--secondary-color);
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .usage-step {
            display: flex;
            margin-bottom: 15px;
        }

        .step-number {
            background: var(--primary-color);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.8rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .step-content h4 {
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-weight: 500;
        }

        .step-content p {
            color: #666;
            font-size: 0.95rem;
        }

        .code-block {
            background: #f8f9fa;
            border-radius: 6px;
            padding: 15px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9rem;
            margin: 10px 0;
            overflow-x: auto;
        }

        /* Footer Styles */
        .footer {
            background: var(--secondary-color);
            color: white;
            padding: 30px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .menu-toggle {
                display: block !important;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .header-actions {
                margin-top: 15px;
                width: 100%;
                justify-content: space-between;
            }
            .search-box input {
                width: 100%;
            }
            .search-box input:focus {
                width: 100%;
            }
            .api-tabs {
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 10px;
            }
            .api-tab {
                padding: 10px 15px;
            }
        }

        /* Menu Toggle Button */
        .menu-toggle {
            display: none;
            background: var(--primary-color);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            margin-right: 15px;
            transition: all 0.3s ease;
        }

        .menu-toggle:hover {
            background: #2980b9;
            transform: rotate(90deg);
        }

        /* Loading Spinner */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 5px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Syntax Highlighting for JSON */
        .json-key {
            color: #61afef;
        }
        .json-value {
            color: #98c379;
        }
        .json-string {
            color: #98c379;
        }
        .json-number {
            color: #d19a66;
        }
        .json-boolean {
            color: #d19a66;
        }
        .json-null {
            color: #d19a66;
        }

        /* API Key Manager Styles */
        .api-key-manager {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            margin-bottom: 30px;
        }
        
        .api-key-form {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .api-key-input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }
        
        .api-key-save {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        
        .api-key-save:hover {
            background: #2980b9;
        }
        
        .api-key-status {
            color: var(--success-color);
            font-size: 0.9rem;
            display: none;
        }
        
        .requires-api-key {
            position: relative;
        }
        
        .requires-api-key::after {
            content: "Requires API Key";
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--warning-color);
            color: white;
            border-radius: 4px;
            padding: 2px 5px;
            font-size: 0.7rem;
            font-weight: 500;
        }

        .text-warning {
            color: var(--warning-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-project-diagram"></i> API Navigation</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" class="active" data-section="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#" data-section="documentation"><i class="fas fa-book"></i> Documentation</a></li>
                <li><a href="#" data-section="authentication"><i class="fas fa-key"></i> Authentication</a></li>
                <li><a href="#" data-section="examples"><i class="fas fa-code"></i> Code Examples</a></li>
                <li><a href="#" data-section="support"><i class="fas fa-question-circle"></i> Support</a></li>
                <li><a href="#" data-section="settings"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="mainContent">
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></button>
                    <h1><i class="fas fa-network-wired"></i> HISPMD API Gateways</h1>
                </div>
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search APIs...">
                    </div>
                    <div class="user-profile">
                        <img src="../app/assets/img/mohfavicon.png" alt="User">
                        <span>Ministry Of Health Ethiopia</span>
                    </div>
                </div>
            </div>

            <!-- API Key Manager -->
            <div class="api-key-manager">
                <h2><i class="fas fa-key"></i> API Key Management</h2>
                <div class="api-key-form">
                    <input type="password" id="apiKeyInput" class="api-key-input" placeholder="Enter your API key here...">
                    <button id="saveApiKey" class="api-key-save">Save API Key</button>
                </div>
                <div id="apiKeyStatus" class="api-key-status">
                    <i class="fas fa-check-circle"></i> API key saved successfully
                </div>
                <p><small>Some endpoints require an API key for authentication. Save your key here to automatically include it in requests.</small></p>
            </div>

            <!-- API Dashboard -->
            <div class="api-dashboard" id="dashboardSection">
                <div class="dashboard-header">
                    <h2>API Endpoints</h2>
                    <div class="dashboard-actions">
                        <button id="refreshAll"><i class="fas fa-sync-alt"></i> Refresh All</button>
                    </div>
                </div>

                <!-- API Tabs -->
                <div class="api-tabs">
                    <?php foreach (array_slice($apiEndpoints, 0, 6) as $tabName => $endpoint): ?>
                        <div class="api-tab <?= $tabName === 'Main HIS Indicator Data' ? 'active' : '' ?> <?= in_array($tabName, ['Indicators', 'Data Sources']) ? 'requires-api-key' : '' ?>" data-tab="<?= strtolower(str_replace(' ', '-', $tabName)) ?>">
                            <?= $tabName ?>
                            <?php if ($tabName === 'Main HIS Indicator Data'): ?>
                                <span class="badge">New</span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- API Tab Contents -->
                <?php foreach ($apiEndpoints as $tabName => $endpoint): ?>
                    <div class="api-content <?= $tabName === 'Main HIS Indicator Data' ? 'active' : '' ?>" id="<?= strtolower(str_replace(' ', '-', $tabName)) ?>-content">
                        <div class="api-endpoint">
                            <div class="endpoint-header">
                                <span class="endpoint-method method-get">GET</span>
                                <span class="endpoint-url"><?= $apiBaseUrl . $endpoint ?><?= in_array($tabName, ['Indicators', 'Data Sources']) ? '&apikey=YOUR_API_KEY' : '' ?></span>
                            </div>
                            <div class="endpoint-description">
                                <p>Access <?= $tabName ?> through this API endpoint. The response will be in JSON format containing all relevant data points.</p>
                                <?php if (in_array($tabName, ['Indicators', 'Data Sources'])): ?>
                                    <p class="text-warning"><i class="fas fa-exclamation-triangle"></i> This endpoint requires an API key for authentication.</p>
                                <?php endif; ?>
                            </div>
                            <div class="endpoint-actions">
                                <button class="endpoint-btn btn-try" data-endpoint="<?= $endpoint ?>" <?= in_array($tabName, ['Indicators', 'Data Sources']) ? 'data-requires-key="true"' : '' ?>><i class="fas fa-play"></i> Try it out</button>
                                <button class="endpoint-btn btn-docs"><i class="fas fa-file-alt"></i> View Documentation</button>
                            </div>
                            <div class="json-viewer" id="json-<?= strtolower(str_replace(' ', '-', $tabName)) ?>">
                                <pre>Response will appear here...</pre>
                            </div>
                            <div id="status-<?= strtolower(str_replace(' ', '-', $tabName)) ?>" class="response-status" style="display: none;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- How to Use Section -->
            <div class="how-to-use">
                <h2><i class="fas fa-question-circle"></i> How to Use These APIs</h2>
                
                <div class="usage-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Authentication</h4>
                        <p>Some API endpoints require authentication using an API key. Include your API key in the request URL or header:</p>
                        <div class="code-block">
                            // URL parameter method
                            fetch('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>&apikey=YOUR_API_KEY')
                            
                            // OR header method
                            fetch('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>', {
                                headers: {
                                    'Authorization': 'Bearer YOUR_API_KEY'
                                }
                            })
                        </div>
                    </div>
                </div>
                
                <div class="usage-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Making Requests</h4>
                        <p>Use HTTP GET requests to retrieve data. All responses are in JSON format.</p>
                        <div class="code-block">
                            fetch('<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>')
                            .then(response => response.json())
                            .then(data => console.log(data));
                        </div>
                    </div>
                </div>
                
                <div class="usage-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Response Handling</h4>
                        <p>Successful responses will have a 200 status code. Errors will return appropriate HTTP status codes with error details in the response body.</p>
                        <div class="code-block">
                            {
                                "status": "success",
                                "data": { ... },
                                "timestamp": "2025-03-28T12:00:00Z"
                            }
                        </div>
                    </div>
                </div>
                
                <div class="usage-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Rate Limiting</h4>
                        <p>API requests are limited to 100 requests per minute per API key. Exceeding this limit will result in a 429 status code.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-logo">
            <h3>Health Information Systems Performance Monitoring Dashboard</h3>
            <p>HISPMD V-1.4 BUILD-Ver.2429</p>
        </div>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">API Status</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="footer-copyright">
            © 2025 All Rights Reserved. Ministry of Health Ethiopia.<br>
            Designed & Developed By JSI DUP in collaboration with MERQ Consultancy
        </div>
    </div>

    <script>
        // Menu Toggle for Mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Tab Switching
        const tabs = document.querySelectorAll('.api-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs and contents
                document.querySelectorAll('.api-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.api-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Show corresponding content
                const tabId = this.getAttribute('data-tab');
                document.getElementById(`${tabId}-content`).classList.add('active');
            });
        });

        // Sidebar Navigation
        const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                sidebarLinks.forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Hide all sections
                document.querySelectorAll('.main-content > div').forEach(section => {
                    section.style.display = 'none';
                });
                
                // Show selected section
                const sectionId = this.getAttribute('data-section') + 'Section';
                document.getElementById(sectionId).style.display = 'block';
            });
        });

        // API Key Management
        const apiKeyInput = document.getElementById('apiKeyInput');
        const saveApiKeyBtn = document.getElementById('saveApiKey');
        const apiKeyStatus = document.getElementById('apiKeyStatus');
        
        // Load saved API key from localStorage if available
        if (localStorage.getItem('apiKey')) {
            apiKeyInput.value = localStorage.getItem('apiKey');
            showApiKeyStatus('API key loaded from browser storage');
        }
        
        // Save API key to localStorage
        saveApiKeyBtn.addEventListener('click', function() {
            const apiKey = apiKeyInput.value.trim();
            if (apiKey) {
                localStorage.setItem('apiKey', apiKey);
                showApiKeyStatus('API key saved successfully');
            } else {
                showApiKeyStatus('Please enter a valid API key', false);
            }
        });
        
        function showApiKeyStatus(message, isSuccess = true) {
            apiKeyStatus.innerHTML = `<i class="fas fa-${isSuccess ? 'check' : 'exclamation'}-circle"></i> ${message}`;
            apiKeyStatus.style.color = isSuccess ? 'var(--success-color)' : 'var(--accent-color)';
            apiKeyStatus.style.display = 'block';
            setTimeout(() => {
                apiKeyStatus.style.display = 'none';
            }, 3000);
        }

        // Try It Out Button - Now makes actual API calls with API key support
        const tryButtons = document.querySelectorAll('.btn-try');
        tryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const endpoint = this.getAttribute('data-endpoint');
                const requiresKey = this.getAttribute('data-requires-key') === 'true';
                const tabName = this.closest('.api-content').id.replace('-content', '');
                const jsonViewer = document.getElementById(`json-${tabName}`);
                const statusElement = document.getElementById(`status-${tabName}`);
                
                // Check if API key is required but not provided
                if (requiresKey && !localStorage.getItem('apiKey')) {
                    statusElement.style.display = 'block';
                    statusElement.textContent = 'Error: API key is required for this endpoint. Please save your API key above.';
                    statusElement.className = 'response-status status-error';
                    jsonViewer.querySelector('pre').textContent = 'API key missing';
                    jsonViewer.style.display = 'block';
                    return;
                }
                
                // Show loading state
                const originalText = this.innerHTML;
                this.innerHTML = `<span class="spinner"></span> Loading...`;
                this.disabled = true;
                
                // Show JSON viewer
                jsonViewer.style.display = 'block';
                jsonViewer.querySelector('pre').textContent = 'Loading data...';
                statusElement.style.display = 'none';
                
                // Construct full API URL
                let apiUrl = '<?= $apiBaseUrl ?>' + endpoint;
                
                // Add API key to URL if required
                if (requiresKey) {
                    const apiKey = localStorage.getItem('apiKey');
                    if (apiUrl.includes('?')) {
                        apiUrl += `&apikey=${encodeURIComponent(apiKey)}`;
                    } else {
                        apiUrl += `?apikey=${encodeURIComponent(apiKey)}`;
                    }
                }
                
                // Make actual API call
                fetch(apiUrl)
                    .then(response => {
                        // Show response status
                        statusElement.style.display = 'block';
                        if (response.ok) {
                            statusElement.textContent = `Status: ${response.status} ${response.statusText}`;
                            statusElement.className = 'response-status status-success';
                            return response.json();
                        } else {
                            statusElement.textContent = `Status: ${response.status} ${response.statusText}`;
                            statusElement.className = 'response-status status-error';
                            return response.text().then(text => {
                                try {
                                    return JSON.parse(text);
                                } catch {
                                    return { error: text };
                                }
                            });
                        }
                    })
                    .then(data => {
                        // Format and syntax highlight the JSON
                        jsonViewer.querySelector('pre').innerHTML = syntaxHighlight(JSON.stringify(data, null, 2));
                    })
                    .catch(error => {
                        statusElement.style.display = 'block';
                        statusElement.textContent = `Error: ${error.message}`;
                        statusElement.className = 'response-status status-error';
                        jsonViewer.querySelector('pre').textContent = `Failed to fetch data: ${error.message}`;
                    })
                    .finally(() => {
                        // Reset button state
                        this.innerHTML = originalText;
                        this.disabled = false;
                    });
            });
        });

        // Refresh All Button
        document.getElementById('refreshAll').addEventListener('click', function() {
            const activeTab = document.querySelector('.api-tab.active');
            if (activeTab) {
                const tabId = activeTab.getAttribute('data-tab');
                const tryButton = document.querySelector(`#${tabId}-content .btn-try`);
                if (tryButton) {
                    tryButton.click();
                }
            }
        });

        // JSON Syntax Highlighting
        function syntaxHighlight(json) {
            json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
                let cls = 'json-value';
                if (/^"/.test(match)) {
                    if (/:$/.test(match)) {
                        cls = 'json-key';
                    } else {
                        cls = 'json-string';
                    }
                } else if (/true|false/.test(match)) {
                    cls = 'json-boolean';
                } else if (/null/.test(match)) {
                    cls = 'json-null';
                } else if (!isNaN(parseFloat(match))) {
                    cls = 'json-number';
                }
                return '<span class="' + cls + '">' + match + '</span>';
            });
        }

        // Search Functionality
        const searchBox = document.querySelector('.search-box input');
        searchBox.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const endpoints = document.querySelectorAll('.api-endpoint');
            
            endpoints.forEach(endpoint => {
                const endpointText = endpoint.textContent.toLowerCase();
                if (endpointText.includes(searchTerm)) {
                    endpoint.style.display = 'block';
                } else {
                    endpoint.style.display = 'none';
                }
            });
        });

        // Display current API base URL in console for debugging
        console.log('API Base URL:', '<?= $apiBaseUrl ?>');
    </script>
</body>
    <!--
Designed and Developed By Michael Kifle Teferra | MIKEINTOSH SYSTEMS
Contact: +251913391985 | +251938048182 
EMail: michaelktd7@gmail.com | mikeintoshsys@gmail.com | michael@mikeintoshsys.com
Website: https://mikeintoshsys.com
GitHub: https://github.com/MIKEINTOSHSYSTEMS
Telegram: @mikeintosh
LinkedIn: 
    -->
</html>