<?php
// Define API endpoints (relative paths)

// 'Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates'

$apiEndpoints = [
    'Main HIS Indicator Data' => 'api/chart/public/data/hispm_data.php',
    'Indicators' => 'app/api/v1.php?table=moh_indicators&action=list',
    'Indicators Group' => 'app/api/v1.php?table=moh_indicator_groups&action=list',
    'Indicators Target' => 'app/api/v1.php?table=moh_indicators_target&action=list',
    'Data Sources' => 'app/api/v1.php?table=moh_data_sources&action=list',
    'Data Sources Details' => 'app/api/v1.php?table=moh_ir_datasource&action=list',
    'Regions' => 'app/api/v1.php?table=moh_regions&action=list',
    'Facility Types' => 'app/api/v1.php?table=moh_facility_types&action=list',
    'DHIS2 EIDM' => 'app/api/v1.php?table=eidm_hc&action=list',
    'DHIS2 Reporting Rates' => 'app/api/v1.php?table=dhis2_reporting_rates&action=list'
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
    <!-- Favicons -->
    <link href="../app/assets/img/mohfavicon.png" rel="icon">    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles/api.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-python.min.js"></script>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-project-diagram"></i><a href="./"> API Navigation</a></h3>
            </div>

    <!-- Dark Mode Toggle -->
    <div class="dark-mode-toggle">
        <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider round"></span>
        </label>
        <span>Dark Mode</span>
    </div>
    
    
<ul class="sidebar-menu">
    <li><a href="#" class="active" data-section="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li><a href="#" data-section="documentation"><i class="fas fa-book"></i> Documentation</a></li>
    <li><a href="#" data-section="authentication"><i class="fas fa-key"></i> Authentication</a></li>
    <li><a href="#" data-section="examples"><i class="fas fa-code"></i> Code Examples</a></li>
    <li><a href="#" data-section="support"><i class="fas fa-question-circle"></i> Support</a></li>
    <br>
    
    <!--
    <li><a href="#" data-section="settings"><i class="fas fa-cog"></i> Settings</a></li>
    -->
</ul>

<br>
                <h4>     <i class="fas fa-home"></i><a href="../app/start.php" target="_blank"> Go to HISPMD</a></h4>

        </div>

        <!-- Main Content -->
        <div class="main-content" id="mainContent">
            <button class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></button>
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    
                    <div class="user-profile">
                        <img src="../app/assets/img/mohfavicon.png" alt="User">
                        <span>Ministry Of Health Ethiopia</span>
                        <span> </span>
                    </div>                    
                </div>
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search APIs...">
                    </div>
                    <h1><i class="fas fa-network-wired"></i> HISPMD API Gateways</h1>                    
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
                    <?php foreach (array_slice($apiEndpoints, 0, 11) as $tabName => $endpoint): ?>
                        <div class="api-tab <?= $tabName === 'Main HIS Indicator Data' ? 'active' : '' ?> <?= in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? 'requires-api-key' : '' ?>" data-tab="<?= strtolower(str_replace(' ', '-', $tabName)) ?>">
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
                                <span class="endpoint-url"><?= $apiBaseUrl . $endpoint ?><?= in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? '&apikey=YOUR_API_KEY' : '' ?></span>
                            </div>
                            <div class="endpoint-description">
                                <p>Access <?= $tabName ?> through this API endpoint. The response will be in JSON format containing all relevant data points.</p>
                                <?php if (in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates'])): ?>
                                    <p class="text-warning"><i class="fas fa-exclamation-triangle"></i> This endpoint requires an API key for authentication.</p>
                                <?php endif; ?>
                            </div>
                            <div class="endpoint-actions">
                                <button class="endpoint-btn btn-try" data-endpoint="<?= $endpoint ?>" <?= in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? 'data-requires-key="true"' : '' ?>><i class="fas fa-play"></i> Try it out</button>
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

<!-- Authentication Section (hidden by default) -->
<div class="api-authentication" id="authenticationSection" style="display: none;">
    <div class="dashboard-header">
        <h2><i class="fas fa-key"></i> API Authentication</h2>
    </div>

    <div class="auth-content">
        <div class="auth-section">
            <h3><i class="fas fa-key"></i> Get Your API Key</h3>
            <p>To access protected endpoints, you need an API key. Follow these steps to get yours:</p>
            
            <div class="step-by-step">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h5>Register an Account</h5>
                        <p>Visit the registration page to create your account:</p>
                        <div class="code-block">
                            <a href="<?= $baseUrl ?>/app/register.php" target="_blank"><?= $baseUrl ?>/app/register.php</a>
                        </div>
                        <p>Complete the registration form and confirm your email address.</p>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h5>Login to Your Account</h5>
                        <p>After activating your account, login here:</p>
                        <div class="code-block">
                            <a href="<?= $baseUrl ?>/app/login.php" target="_blank"><?= $baseUrl ?>/app/login.php</a>
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h5>Access Your API Key</h5>
                        <p>Once logged in, navigate to your profile security section:</p>
                        <div class="code-block">
                            <a href="<?= $baseUrl ?>/app/userinfo.php" target="_blank"><?= $baseUrl ?>/app/userinfo.php</a>
                        </div>
                        <p>Under the "Keys" tab, you'll find your personal API key.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="auth-section">
            <h3><i class="fas fa-vial"></i> Test Your API Key</h3>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Don't have an API key yet? 
                <a href="<?= $baseUrl ?>/app/register.php" target="_blank" class="alert-link">Register here</a> or 
                <a href="<?= $baseUrl ?>/app/login.php" target="_blank" class="alert-link">login here</a> to get one.
            </div>
            
            <div class="key-tester">
                <div class="key-test-form">
                    <input type="text" id="authApiKey" placeholder="Paste your API key here" class="api-key-input">
                    <button id="validateKey" class="api-key-save">
                        <i class="fas fa-check"></i> Validate Key
                    </button>
                    <button id="copyAuthKey" class="api-key-save" style="background: var(--secondary-color);">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                </div>
                <div id="authKeyStatus" class="api-key-status" style="display: none;"></div>
                
                <div class="key-test-example">
                    <p><small>This key will be used temporarily for testing:</small></p>
                    <div class="code-block">
                        // Example using your key
                        fetch('<?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list', {
                            headers: {
                                'Authorization': 'Bearer <span id="authKeyPlaceholder">YOUR_API_KEY</span>'
                            }
                        })
                    </div>
                </div>
            </div>
        </div>

        <div class="auth-section">
            <h3><i class="fas fa-lock"></i> Using Your API Key</h3>
            <p>Include your API key in requests either as:</p>
            
            <div class="usage-methods">
                <div class="method">
                    <h4>URL Parameter:</h4>
                    <div class="code-block">
                        GET <?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list<b>&apikey=YOUR_API_KEY</b>
                    </div>
                </div>
                
                <div class="method">
                    <h4>Authorization Header:</h4>
                    <div class="code-block">
                        fetch('<?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list', {
                            headers: {
                                <b>'Authorization': 'Bearer YOUR_API_KEY'</b>
                            }
                        })
                    </div>
                </div>
            </div>
        </div>

        <div class="auth-section">
            <h3><i class="fas fa-shield-alt"></i> Security Best Practices</h3>
            <ul>
                <li><strong>Never commit API keys to version control</strong> - Add them to your .gitignore file</li>
                <li><strong>Use environment variables</strong> - Store keys in server environment variables, not in code</li>
                <li><strong>Rotate keys regularly</strong> - Change your keys every 90 days</li>
                <li><strong>Restrict key usage</strong> - Only use keys for their intended purpose</li>
                <li><strong>Monitor usage</strong> - Check your API usage logs for suspicious activity</li>
            </ul>
        </div>

        <div class="auth-section">
            <h3><i class="fas fa-exclamation-triangle"></i> Troubleshooting</h3>
            <div class="troubleshooting-item">
                <h4><i class="fas fa-times-circle text-danger"></i> Key not working?</h4>
                <ul>
                    <li>Ensure you've copied the entire key without extra spaces</li>
                    <li>Check if your account is active (verify your email)</li>
                    <li>Try generating a new key in your profile if issues persist</li>
                    <li>Contact support if you see "Invalid API Key" errors</li>
                </ul>
            </div>
            
            <div class="troubleshooting-item">
                <h4><i class="fas fa-sync-alt text-warning"></i> Regenerating Your Key</h4>
                <p>If your key is compromised or not working:</p>
                <ol>
                    <li>Go to your profile at <code><?= $baseUrl ?>/app/userinfo.php</code></li>
                    <li>Navigate to the "Keys" tab</li>
                    <li>Click "Regenerate Key"</li>
                    <li>Update all your applications with the new key</li>
                </ol>
            </div>
        </div>
    </div>
</div>




<!-- Code Examples Section (hidden by default) -->
<div class="api-documentation" id="examplesSection" style="display: none;">
    <div class="dashboard-header">
        <h2><i class="fas fa-code"></i> Code Examples</h2>
        <div class="dashboard-actions">
            <button id="copyAllCode" class="api-key-save">
                <i class="fas fa-copy"></i> Copy All Examples
            </button>
        </div>
    </div>

    <div class="documentation-content">
        <div class="language-tabs">
            <button class="language-tab active" data-language="javascript">JavaScript</button>
            <button class="language-tab" data-language="php">PHP</button>
            <button class="language-tab" data-language="python">Python</button>
            <button class="language-tab" data-language="integration">Integration</button>
        </div>

        <div class="language-content active" id="javascript-content">
            <div class="example-group">
                <h3><i class="fab fa-js"></i> JavaScript Examples</h3>
                
                <div class="example-card">
                    <div class="example-header">
                        <h4>Basic Fetch Request</h4>
                        <button class="copy-code" data-target="#js-example-1">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Example of a simple GET request to fetch indicator data:</p>
                    </div>
                    <pre id="js-example-1" class="code-block language-javascript"><code>// Example: Fetching Main HIS Indicator Data
fetch('<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>')
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    console.log('API Response:', data);
    // Process your data here
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });</code></pre>
                </div>

                <div class="example-card">
                    <div class="example-header">
                        <h4>Authenticated Request</h4>
                        <button class="copy-code" data-target="#js-example-2">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Example showing both URL parameter and header authentication methods:</p>
                    </div>
                    <pre id="js-example-2" class="code-block language-javascript"><code>// Example: Fetching Indicators with API Key
const apiKey = 'YOUR_API_KEY'; // Replace with your actual key

// Option 1: API Key in URL
fetch('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>?apikey=' + encodeURIComponent(apiKey))
  .then(response => response.json())
  .then(data => console.log(data));

// Option 2: API Key in Headers (recommended)
fetch('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>', {
  headers: {
    'Authorization': `Bearer ${apiKey}`,
    'Content-Type': 'application/json'
  }
})
.then(response => response.json())
.then(data => console.log(data));</code></pre>
                </div>

                <div class="example-card">
                    <div class="example-header">
                        <h4>Error Handling</h4>
                        <button class="copy-code" data-target="#js-example-3">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Comprehensive error handling for API requests:</p>
                    </div>
                    <pre id="js-example-3" class="code-block language-javascript"><code>// Enhanced error handling example
async function fetchData() {
  try {
    const response = await fetch('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>?apikey=YOUR_API_KEY');
    
    if (!response.ok) {
      const errorData = await response.json();
      throw new Error(errorData.error?.message || `HTTP error! status: ${response.status}`);
    }
    
    const data = await response.json();
    
    if (data.status === 'error') {
      console.error('API Error:', data.error);
      // Show user-friendly error message
      showErrorMessage(data.error.message);
    } else {
      console.log('API Success:', data);
      // Process successful response
      processData(data.data);
    }
  } catch (error) {
    console.error('Request Failed:', error);
    // Show user-friendly error message
    showErrorMessage(error.message);
  }
}

// Helper function to display errors to users
function showErrorMessage(message) {
  const errorElement = document.createElement('div');
  errorElement.className = 'api-error';
  errorElement.innerHTML = `
    <i class="fas fa-exclamation-circle"></i>
    <span>${message}</span>
  `;
  document.body.appendChild(errorElement);
  setTimeout(() => errorElement.remove(), 5000);
}</code></pre>
                </div>
            </div>
        </div>

        <div class="language-content" id="php-content">
            <div class="example-group">
                <h3><i class="fab fa-php"></i> PHP Examples</h3>
                
                <div class="example-card">
                    <div class="example-header">
                        <h4>Basic cURL Request</h4>
                        <button class="copy-code" data-target="#php-example-1">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Simple example using PHP's cURL library:</p>
                    </div>
                    <pre id="php-example-1" class="code-block language-php"><code>// Example: Fetching Main HIS Indicator Data in PHP
$apiUrl = '<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>';

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json'
]);

// Execute and close cURL session
$response = curl_exec($ch);

if (curl_errno($ch)) {
    // Handle cURL error
    echo 'Error:' . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $data = json_decode($response, true);
    
    if ($httpCode >= 400) {
        // Handle API error
        echo "API Error: " . ($data['error']['message'] ?? "HTTP status $httpCode");
    } else {
        // Process successful response
        print_r($data);
    }
}

curl_close($ch);</code></pre>
                </div>

                <div class="example-card">
                    <div class="example-header">
                        <h4>Authenticated Request</h4>
                        <button class="copy-code" data-target="#php-example-2">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Making authenticated requests with API key:</p>
                    </div>
                    <pre id="php-example-2" class="code-block language-php"><code>// Example: Fetching Indicators with API Key in PHP
$apiKey = 'YOUR_API_KEY'; // Replace with your actual key
$apiUrl = '<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>';

// Initialize cURL session
$ch = curl_init();

// Set URL and options
curl_setopt($ch, CURLOPT_URL, $apiUrl . '?apikey=' . urlencode($apiKey));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Alternatively with Authorization header:
// curl_setopt($ch, CURLOPT_URL, $apiUrl);
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Authorization: Bearer ' . $apiKey,
//     'Accept: application/json'
// ]);

// Execute the request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode !== 200) {
    $errorData = json_decode($response, true);
    echo "API Request Failed with status: $httpCode\n";
    echo "Error: " . ($errorData['error']['message'] ?? 'Unknown error');
} else {
    $data = json_decode($response, true);
    // Process the data
    print_r($data);
}

// Close cURL session
curl_close($ch);</code></pre>
                </div>
            </div>
        </div>

        <div class="language-content" id="python-content">
            <div class="example-group">
                <h3><i class="fab fa-python"></i> Python Examples</h3>
                
                <div class="example-card">
                    <div class="example-header">
                        <h4>Basic Requests Example</h4>
                        <button class="copy-code" data-target="#python-example-1">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Simple example using Python's requests library:</p>
                    </div>
                    <pre id="python-example-1" class="code-block language-python"><code># Example: Fetching Main HIS Indicator Data in Python
import requests

url = "<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>"

try:
    response = requests.get(url)
    response.raise_for_status()  # Raises an HTTPError for bad responses
    
    data = response.json()
    print("API Response:", data)
    
except requests.exceptions.RequestException as e:
    print(f"Request Failed: {e}")
except ValueError as e:
    print(f"Failed to decode JSON: {e}")</code></pre>
                </div>

                <div class="example-card">
                    <div class="example-header">
                        <h4>Authenticated Request</h4>
                        <button class="copy-code" data-target="#python-example-2">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Making authenticated requests with API key:</p>
                    </div>
                    <pre id="python-example-2" class="code-block language-python"><code># Example with API Key in Python
import requests

api_key = "YOUR_API_KEY"  # Replace with your actual key
url = "<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>"

# Option 1: API Key in URL (not recommended for production)
# response = requests.get(f"{url}?apikey={api_key}")

# Option 2: API Key in Headers (recommended)
headers = {
    "Authorization": f"Bearer {api_key}",
    "Accept": "application/json"
}

try:
    response = requests.get(url, headers=headers)
    response.raise_for_status()
    
    data = response.json()
    
    if data.get("status") == "error":
        print(f"API Error: {data.get('error', {}).get('message', 'Unknown error')}")
    else:
        print("API Success:", data)
        
except requests.exceptions.RequestException as e:
    print(f"Request Failed: {e}")</code></pre>
                </div>
            </div>
        </div>

        <div class="language-content" id="integration-content">
            <div class="example-group">
                <h3><i class="fas fa-plug"></i> Integration Examples</h3>
                
                <div class="example-card">
                    <div class="example-header">
                        <h4>Dashboard Integration</h4>
                        <button class="copy-code" data-target="#integration-example-1">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Example of displaying API data in a web dashboard:</p>
                    </div>
                    <pre id="integration-example-1" class="code-block language-javascript"><code>// Example: Displaying data in a dashboard
async function loadDashboard() {
    try {
        const response = await fetch('<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>');
        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.error?.message || 'Failed to load data');
        }
        
        const dashboard = document.getElementById('dashboard');
        dashboard.innerHTML = ''; // Clear previous content
        
        // Create cards for each indicator
        data.forEach(indicator => {
            const card = document.createElement('div');
            card.className = 'dashboard-card';
            
            // Calculate progress percentage
            const progress = (indicator.value / indicator.target) * 100;
            const progressClass = progress >= 90 ? 'high' : 
                                progress >= 70 ? 'medium' : 'low';
            
            card.innerHTML = `
                <h3>${indicator.indicator_name}</h3>
                <div class="indicator-value">
                    <span class="current">${indicator.value}</span>
                    <span class="target">Target: ${indicator.target}</span>
                </div>
                <div class="progress-bar ${progressClass}" style="width: ${Math.min(progress, 100)}%"></div>
                <div class="meta">
                    <span class="region">${indicator.region}</span>
                    <span class="period">${indicator.period}</span>
                </div>
            `;
            
            dashboard.appendChild(card);
        });
        
    } catch (error) {
        showErrorToast(error.message);
    }
}

// Initialize dashboard when page loads
document.addEventListener('DOMContentLoaded', loadDashboard);</code></pre>
                </div>

                <div class="example-card">
                    <div class="example-header">
                        <h4>Automated Reporting</h4>
                        <button class="copy-code" data-target="#integration-example-2">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="example-description">
                        <p>Generating automated reports with data from multiple endpoints:</p>
                    </div>
                    <pre id="integration-example-2" class="code-block language-javascript"><code>// Example: Generating automated reports
const API_KEY = 'YOUR_API_KEY'; // In production, use environment variables

async function generateMonthlyReport() {
    try {
        // Fetch data from multiple endpoints in parallel
        const [indicators, regions, reportingRates] = await Promise.all([
            fetchData('<?= $apiBaseUrl . $apiEndpoints['Indicators'] ?>'),
            fetchData('<?= $apiBaseUrl . $apiEndpoints['Regions'] ?>'),
            fetchData('<?= $apiBaseUrl . $apiEndpoints['DHIS2 Reporting Rates'] ?>')
        ]);
        
        // Generate report HTML
        const reportDate = new Date().toLocaleDateString();
        const reportHTML = `
            <!DOCTYPE html>
            <html>
            <head>
                <title>HISPMD Monthly Report - ${reportDate}</title>
                <style>
                    /* Report styling */
                </style>
            </head>
            <body>
                <h1>HISPMD Monthly Report</h1>
                <p>Generated on: ${reportDate}</p>
                
                <section class="indicators">
                    <h2>Key Indicators</h2>
                    ${generateIndicatorTable(indicators)}
                </section>
                
                <section class="reporting-rates">
                    <h2>Reporting Rates by Region</h2>
                    ${generateReportingRatesChart(reportingRates, regions)}
                </section>
            </body>
            </html>
        `;
        
        // Save or send the report
        saveReport(reportHTML);
        
    } catch (error) {
        console.error('Report generation failed:', error);
        // Send error notification
        sendErrorNotification(error);
    }
}

// Helper function to fetch data with API key
async function fetchData(endpoint) {
    const response = await fetch(`${endpoint}?apikey=${API_KEY}`);
    if (!response.ok) {
        throw new Error(`Failed to fetch ${endpoint}: ${response.status}`);
    }
    return await response.json();
}

// Run report generation
generateMonthlyReport();</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Support Section (hidden by default) -->
<div class="api-documentation" id="supportSection" style="display: none;">
    <div class="dashboard-header">
        <h2><i class="fas fa-headset"></i> Support Center</h2>
    </div>

    <div class="documentation-content">
        <div class="doc-section">
            <h3><i class="fas fa-envelope-open-text"></i> Contact Our Team</h3>
            <p>Our dedicated support team is available to assist you with any questions or issues regarding the HISPMD API.</p>
            
            <div class="alert alert-info" style="background-color: rgba(46, 204, 113, 0.1); border-left: 4px solid var(--success-color);">
                <i class="fas fa-clock"></i> 
                <strong>Support Hours:</strong> Monday-Friday, 8:30 AM - 5:30 PM EAT (GMT+3)
            </div>
            
            <div class="support-grid">
                <div class="support-card">
                    <div class="support-card-header">
                        <i class="fas fa-envelope"></i>
                        <h4>Email Support</h4>
                    </div>
                    <div class="support-card-body">
                        <p>For technical issues and API-related questions:</p>
                        <div class="contact-method">
                            <i class="fas fa-inbox"></i>
                            <div>
                                <strong>Primary Contact:</strong>
                                <a href="mailto:info@merqconsultancy.org">info@merqconsultancy.org</a>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-code"></i>
                            <div>
                                <strong>Technical Team:</strong>
                                <a href="mailto:support@merqconsultancy.org">support@merqconsultancy.org</a>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-bug"></i>
                            <div>
                                <strong>Bug Reports:</strong>
                                <a href="mailto:dev@merqconsultancy.org">dev@merqconsultancy.org</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="support-card">
                    <div class="support-card-header">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Phone Support</h4>
                    </div>
                    <div class="support-card-body">
                        <p>Speak directly with our support team:</p>
                        <div class="contact-method">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>MERQ Consultancy:</strong>
                                <a href="tel:+251 118 548 754">+251 118 548 754</a>
                                <span class="country-flag">🇪🇹</span>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-building"></i>
                            <div>
                                <strong>Ministry of Health:</strong>
                                <a href="tel:+251115517011">+251 115 517 011</a>
                                <span class="country-flag">🇪🇹</span>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-mobile-alt"></i>
                            <div>
                                <strong>Emergency (After Hours):</strong>
                                <a href="tel:+251 115 517 011">+251 115 517 011</a>
                                <span class="country-flag">🇪🇹</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="support-card">
                    <div class="support-card-header">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Office Location</h4>
                    </div>
                    <div class="support-card-body">
                        <div class="contact-method">
                            <i class="fas fa-map-pin"></i>
                            <div>
                                <strong>MERQ Consultancy PLC</strong>
                                <p>Arbegnoch Street, Tadesse Chekol Bld 8th Floor</p>
                                <p>Addis Ababa, Ethiopia</p>
                            </div>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Visiting Hours:</strong>
                                <p>Monday-Friday: 9:00 AM - 4:00 PM</p>
                                <p>By appointment only</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-ticket-alt"></i> Submit a Support Ticket</h3>
            <p>Fill out the form below and our team will respond as soon as possible.</p>
            
            <form id="supportForm" class="modern-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="supportName">Full Name <span class="required">*</span></label>
                        <input type="text" id="supportName" required class="form-input" placeholder="Your full name">
                    </div>
                    
                    <div class="form-group">
                        <label for="supportEmail">Email Address <span class="required">*</span></label>
                        <input type="email" id="supportEmail" required class="form-input" placeholder="your.email@example.com">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="supportOrganization">Organization</label>
                        <input type="text" id="supportOrganization" class="form-input" placeholder="Your organization name">
                    </div>
                    
                    <div class="form-group">
                        <label for="supportPosition">Position</label>
                        <input type="text" id="supportPosition" class="form-input" placeholder="Your position">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="supportPhone">Phone Number</label>
                        <div class="phone-input">
                            <div class="country-selector">
                                <span class="flag">🇪🇹</span>
                                <span class="country-code">+251</span>
                            </div>
                            <input type="tel" id="supportPhone" class="form-input" placeholder="911223344">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="supportSubject">Subject <span class="required">*</span></label>
                        <select id="supportSubject" class="form-input" required>
                            <option value="">Select a subject</option>
                            <option value="Technical Issue">Technical Issue</option>
                            <option value="API Question">API Question</option>
                            <option value="Feature Request">Feature Request</option>
                            <option value="Account Help">Account Help</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="supportPriority">Priority <span class="required">*</span></label>
                    <div class="priority-selector">
                        <label class="priority-option">
                            <input type="radio" name="priority" value="Low" checked>
                            <span class="priority-badge low">Low</span>
                        </label>
                        <label class="priority-option">
                            <input type="radio" name="priority" value="Medium">
                            <span class="priority-badge medium">Medium</span>
                        </label>
                        <label class="priority-option">
                            <input type="radio" name="priority" value="High">
                            <span class="priority-badge high">High</span>
                        </label>
                        <label class="priority-option">
                            <input type="radio" name="priority" value="Critical">
                            <span class="priority-badge critical">Critical</span>
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="supportMessage">Message <span class="required">*</span></label>
                    <textarea id="supportMessage" rows="6" required class="form-input" placeholder="Please describe your issue in detail..."></textarea>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Submit Ticket
                    </button>
                    <div id="supportFormStatus"></div>
                </div>
            </form>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-handshake"></i> Development Partners</h3>
            <p>The HISPMD API is developed and maintained through collaboration between these organizations:</p>
            
            <div class="partners-grid">
                <div class="partner-card">
                    <div class="partner-logo">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="partner-info">
                        <h4>MERQ Consultancy</h4>
                        <p class="partner-role">Primary developer and technical support provider</p>
                        <div class="partner-contacts">
                            <div class="contact-item">
                                <i class="fas fa-globe"></i>
                                <a href="https://merqconsultancy.org" target="_blank">merqconsultancy.org</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@merqconsultancy.org">info@merqconsultancy.org</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <a href="tel:+251 118 829 399">+251 118 829 399</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="partner-card">
                    <div class="partner-logo">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="partner-info">
                        <h4>MERQ Consultancy's Information Systems & Digital Health Unit</h4>
                        <p class="partner-role">Oversees technical implementation of health information systems</p>
                        <div class="partner-contacts">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:isdh@merqconsultancy.org">isdh@merqconsultancy.org</a>
                            </div>
                        </div>
                    </div>
                </div>                
                
                <div class="partner-card">
                    <div class="partner-logo">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="partner-info">
                        <h4>Ministry of Health Ethiopia</h4>
                        <p class="partner-role">Owns and operates the Health Information System</p>
                        <div class="partner-contacts">
                            <div class="contact-item">
                                <i class="fas fa-globe"></i>
                                <a href="https://www.moh.gov.et" target="_blank">moh.gov.et</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <a href="tel:+251 115 517 011">+251 115 517 011</a>
                            </div> 
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@moh.gov.et">info@moh.gov.et</a>
                            </div>                                                       
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Addis Ababa, Ethiopia</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="partner-card">
                    <div class="partner-logo">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="partner-info">
                        <h4>JSI DUP</h4>
                        <p class="partner-role">Technical implementation partner</p>
                        <div class="partner-contacts">
                            <div class="contact-item">
                                <i class="fas fa-globe"></i>
                                <a href="https://ethiopiadup.jsi.com" target="_blank">ethiopiadup.jsi.com</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:ethiopia@jsi.com">ethiopia@jsi.com</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <a href="tel:+251 116671190">+251 116671190</a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                Ethiopia Data Use Partnership
                                Lidata Subcity, Woreda 09
                                Sengatera Trading Building
                                4th Floor, Room 235    
                                Addis Ababa, Ethiopia</span>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions</h3>
            
            <div class="faq-accordion">
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What are the API rate limits?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The API is currently limited to 100 requests per minute per API key. If you need higher limits for your application, please contact support to discuss your requirements.</p>
                        <p>For development purposes, you can request a temporary increase in rate limits by emailing <a href="mailto:dev-support@merqconsultancy.org">dev-support@merqconsultancy.org</a> with details about your project.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How do I report a bug or issue?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Please use the support form above to report any bugs or issues. For fastest resolution, include:</p>
                        <ul>
                            <li>The endpoint you were calling</li>
                            <li>The exact error message</li>
                            <li>The request parameters you used</li>
                            <li>Any relevant screenshots or code snippets</li>
                            <li>Steps to reproduce the issue</li>
                        </ul>
                        <p>For critical production issues, please call our emergency support line at <a href="tel:+251911223344">+251 91 122 3344</a>.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Can I get historical data through the API?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, most endpoints support date parameters for historical queries. The following parameters are commonly supported:</p>
                        <div class="code-block">
// Example: Get data for a specific date range
fetch('<?= $apiBaseUrl . $apiEndpoints['Main HIS Indicator Data'] ?>?start_date=2025-01-01&end_date=2025-03-31')
                        </div>
                        <p>Contact support for specific documentation on date filtering parameters for each endpoint.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How often is the API documentation updated?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The documentation is updated whenever new features or endpoints are added to the API. We recommend:</p>
                        <ul>
                            <li>Checking the documentation portal monthly for updates</li>
                            <li>Subscribing to our <a href="#">developer newsletter</a> for change announcements</li>
                            <li>Following our <a href="#">API changelog</a> for version-specific updates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>

<!-- Documentation Section (hidden by default) -->
<div class="api-documentation" id="documentationSection" style="display: none;">
    <div class="dashboard-header">
        <h2><i class="fas fa-book"></i> API Documentation</h2>
    </div>

    <div class="documentation-content">
        <div class="doc-section">
            <h3><i class="fas fa-info-circle"></i> Overview</h3>
            <p>The HISPMD API provides programmatic access to health indicators, facility data, and reporting metrics from Ethiopia's Health Information System. This RESTful API returns JSON responses and supports standard HTTP methods.</p>
            
            <div class="doc-features">
                <h4><i class="fas fa-check-circle"></i> Key Features:</h4>
                <ul>
                    <li>Real-time access to health indicators and performance metrics</li>
                    <li>Standardized JSON responses for easy integration</li>
                    <li>Secure authentication via API keys</li>
                    <li>Comprehensive documentation with examples</li>
                    <li>Rate limiting for fair usage (100 requests/minute)</li>
                </ul>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-lock"></i> Authentication</h3>
            <p>Most endpoints require an API key for authentication. Include your key in requests either as:</p>
            
            <div class="doc-methods">
                <div class="method">
                    <h4>URL Parameter:</h4>
                    <div class="code-block">
                        GET <?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list<b>&apikey=YOUR_API_KEY</b>
                    </div>
                </div>
                
                <div class="method">
                    <h4>Authorization Header:</h4>
                    <div class="code-block">
                        fetch('<?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list', {
                            headers: {
                                <b>'Authorization': 'Bearer YOUR_API_KEY'</b>
                            }
                        })
                    </div>
                </div>
            </div>
            
            <div class="doc-note">
                <h4><i class="fas fa-exclamation-triangle"></i> Important Notes:</h4>
                <ul>
                    <li>Keep your API key secure - don't share it or commit it to version control</li>
                    <li>Rotate your keys regularly (at least every 90 days)</li>
                    <li>Contact support if you believe your key has been compromised</li>
                </ul>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-code"></i> Response Format</h3>
            <p>All successful API responses follow this standard format:</p>
            
            <div class="code-block">
{
    "status": "success", // or "error"
    "timestamp": "2025-03-28T12:00:00Z", // ISO 8601 format
    "data": { ... },    // The actual response data
    "metadata": {       // Optional metadata
        "page": 1,      // For paginated results
        "total": 100,  // Total records available
        "limit": 10     // Records per page
    }
}
            </div>
            
            <p>Error responses include additional details:</p>
            
            <div class="code-block">
{
    "status": "error",
    "error": {
        "code": 403,
        "message": "Invalid API key",
        "details": "The provided API key is invalid or expired"
    },
    "timestamp": "2025-03-28T12:00:00Z"
}
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-table"></i> Endpoint Reference</h3>
            
            <div class="endpoint-table">
                <table>
                    <thead>
                        <tr>
                            <th>Endpoint</th>
                            <th>Description</th>
                            <th>Authentication</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($apiEndpoints as $name => $endpoint): ?>
                        <tr>
                            <td><code><?= $endpoint ?></code></td>
                            <td><?= $name ?> data</td>
                            <td><?= in_array($name, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? 'Required' : 'None' ?></td>
                            <td>GET</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-exclamation-triangle"></i> Error Handling</h3>
            <p>The API uses standard HTTP status codes:</p>
            
            <div class="error-codes">
                <div class="error-code">
                    <span class="status-code status-400">400</span>
                    <span class="status-desc">Bad Request - Invalid parameters</span>
                </div>
                <div class="error-code">
                    <span class="status-code status-401">401</span>
                    <span class="status-desc">Unauthorized - Missing or invalid API key</span>
                </div>
                <div class="error-code">
                    <span class="status-code status-404">404</span>
                    <span class="status-desc">Not Found - Resource doesn't exist</span>
                </div>
                <div class="error-code">
                    <span class="status-code status-429">429</span>
                    <span class="status-desc">Too Many Requests - Rate limit exceeded</span>
                </div>
                <div class="error-code">
                    <span class="status-code status-500">500</span>
                    <span class="status-desc">Server Error - Something went wrong</span>
                </div>
            </div>
        </div>

        <div class="doc-section">
            <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <h4>How do I get an API key?</h4>
                <p>Contact the HISPMD administrator at your organization to request an API key. You'll need to provide your name, email, and intended use case.</p>
            </div>
            
            <div class="faq-item">
                <h4>Why am I getting 403 errors?</h4>
                <p>This usually means your API key is invalid, expired, or missing. Verify you're including it correctly in your requests.</p>
            </div>
            
            <div class="faq-item">
                <h4>How often is the data updated?</h4>
                <p>Indicator data is updated nightly at 2 AM local time. Facility and reporting data is updated in real-time.</p>
            </div>
            
            <div class="faq-item">
                <h4>Can I access historical data?</h4>
                <p>Yes, most endpoints support date parameters for historical queries. Contact support for documentation on date filtering.</p>
            </div>
        </div>
    </div>
</div>


    </div>

    <!-- Endpoint Documentation Modals -->
<?php foreach ($apiEndpoints as $tabName => $endpoint): ?>
<div class="endpoint-doc-modal" id="<?= strtolower(str_replace(' ', '-', $tabName)) ?>-doc-modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-file-alt"></i> <?= $tabName ?> Documentation</h3>
            <button class="close-modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="doc-section">
                <h4><i class="fas fa-link"></i> Endpoint URL</h4>
                <div class="code-block">
                    GET <?= $apiBaseUrl . $endpoint ?><?= in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? '&apikey=YOUR_API_KEY' : '' ?>
                </div>
            </div>

            <div class="doc-section">
                <h4><i class="fas fa-info-circle"></i> Description</h4>
                <p>This endpoint provides access to <?= $tabName ?> data. <?php
                    switch($tabName) {
                        case 'Main HIS Indicator Data':
                            echo 'Contains performance metrics and indicators from the national health information system.';
                            break;
                        case 'Indicators':
                            echo 'Lists all health indicators tracked by the Ministry of Health with their metadata.';
                            break;
                        case 'Indicators Group':
                            echo 'Shows how indicators are grouped into logical categories for reporting.';
                            break;
                        case 'Indicators Target':
                            echo 'Provides target values for health indicators at various administrative levels.';
                            break;
                        case 'Data Sources':
                            echo 'Lists all data sources feeding into the health information system.';
                            break;
                        case 'Data Sources Details':
                            echo 'Detailed metadata about each data source including collection methods.';
                            break;
                        case 'Regions':
                            echo 'Geographical regions and administrative units in Ethiopia.';
                            break;
                        case 'Facility Types':
                            echo 'Classification of health facilities by type and level.';
                            break;
                        case 'DHIS2 EIDM':
                            echo 'DHIS2 electronic integrated disease surveillance and response data.';
                            break;
                        case 'DHIS2 Reporting Rates':
                            echo 'Health facility reporting rates and timeliness metrics from DHIS2.';
                            break;
                        default:
                            echo 'Important health information system data for monitoring and evaluation.';
                    }
                ?></p>
            </div>

            <div class="doc-section">
                <h4><i class="fas fa-database"></i> Response Fields</h4>
                <?php if ($tabName === 'Main HIS Indicator Data'): ?>
                <div class="code-block">
{
    "indicator_id": "unique identifier",
    "indicator_name": "name of the indicator",
    "value": "current value",
    "target": "target value",
    "region": "region name",
    "facility_type": "type of facility",
    "period": "reporting period",
    "last_updated": "timestamp of last update"
}
                </div>
                <?php elseif (in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target'])): ?>
                <div class="code-block">
{
    "id": "unique identifier",
    "name": "indicator name",
    "code": "short code",
    "description": "detailed description",
    "category": "category or group",
    "measurement_unit": "unit of measurement",
    "target_value": "target value if applicable",
    "data_source": "source of data"
}
                </div>
                <?php elseif (in_array($tabName, ['Data Sources', 'Data Sources Details'])): ?>
                <div class="code-block">
{
    "source_id": "unique identifier",
    "source_name": "name of data source",
    "type": "type of source (electronic, paper, etc.)",
    "frequency": "how often data is collected",
    "owner": "responsible organization",
    "contact": "contact information",
    "indicators_covered": "array of indicator IDs"
}
                </div>
                <?php elseif (in_array($tabName, ['Regions', 'Facility Types'])): ?>
                <div class="code-block">
{
    "id": "unique identifier",
    "name": "name of region/facility type",
    "code": "short code",
    "parent_id": "parent region if applicable",
    "level": "administrative level",
    "coordinates": "geographic coordinates if available"
}
                </div>
                <?php elseif (in_array($tabName, ['DHIS2 EIDM', 'DHIS2 Reporting Rates'])): ?>
                <div class="code-block">
{
    "period": "reporting period",
    "org_unit": "organization unit ID",
    "org_unit_name": "facility/region name",
    "indicator_code": "DHIS2 indicator code",
    "value": "reported value",
    "numerator": "numerator if ratio",
    "denominator": "denominator if ratio",
    "reporting_status": "on-time/late/missing"
}
                </div>
                <?php endif; ?>
            </div>

            <div class="doc-section">
                <h4><i class="fas fa-filter"></i> Filter Parameters</h4>
                <table class="params-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($tabName === 'Main HIS Indicator Data'): ?>
                        <tr>
                            <td><code>region</code></td>
                            <td>string</td>
                            <td>Filter by region name or ID</td>
                        </tr>
                        <tr>
                            <td><code>period</code></td>
                            <td>YYYY-MM</td>
                            <td>Filter by reporting period</td>
                        </tr>
                        <tr>
                            <td><code>indicator</code></td>
                            <td>string</td>
                            <td>Filter by indicator ID or name</td>
                        </tr>
                        <?php elseif (in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target'])): ?>
                        <tr>
                            <td><code>category</code></td>
                            <td>string</td>
                            <td>Filter by indicator category</td>
                        </tr>
                        <tr>
                            <td><code>search</code></td>
                            <td>string</td>
                            <td>Search in indicator names and descriptions</td>
                        </tr>
                        <?php elseif (in_array($tabName, ['Data Sources', 'Data Sources Details'])): ?>
                        <tr>
                            <td><code>type</code></td>
                            <td>string</td>
                            <td>Filter by data source type</td>
                        </tr>
                        <tr>
                            <td><code>active</code></td>
                            <td>boolean</td>
                            <td>Filter active/inactive sources</td>
                        </tr>
                        <?php elseif ($tabName === 'Regions'): ?>
                        <tr>
                            <td><code>level</code></td>
                            <td>number</td>
                            <td>Filter by administrative level (1-4)</td>
                        </tr>
                        <tr>
                            <td><code>parent</code></td>
                            <td>string</td>
                            <td>Filter by parent region ID</td>
                        </tr>
                        <?php elseif ($tabName === 'Facility Types'): ?>
                        <tr>
                            <td><code>level</code></td>
                            <td>string</td>
                            <td>Filter by facility level (primary, secondary, etc.)</td>
                        </tr>
                        <?php elseif (in_array($tabName, ['DHIS2 EIDM', 'DHIS2 Reporting Rates'])): ?>
                        <tr>
                            <td><code>period</code></td>
                            <td>YYYY-MM</td>
                            <td>Filter by reporting period</td>
                        </tr>
                        <tr>
                            <td><code>org_unit</code></td>
                            <td>string</td>
                            <td>Filter by organization unit ID</td>
                        </tr>
                        <?php endif; ?>
                        <?php if (in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates'])): ?>
                        <tr>
                            <td><code>apikey</code></td>
                            <td>string</td>
                            <td><strong>Required</strong> - Your API key</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="doc-section">
                <h4><i class="fas fa-code"></i> Example Request</h4>
                <div class="code-block">
fetch('<?= $apiBaseUrl . $endpoint ?><?= in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates']) ? '?apikey=YOUR_API_KEY' : '' ?>')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error('Error:', error));
                </div>
            </div>

            <div class="doc-section">
                <h4><i class="fas fa-exclamation-circle"></i> Notes</h4>
                <ul>
                    <?php if (in_array($tabName, ['Indicators', 'Indicators Group', 'Indicators Target', 'Data Sources', 'Data Sources Details', 'Regions', 'Facility Types', 'DHIS2 EIDM', 'DHIS2 Reporting Rates'])): ?>
                    <li>This endpoint <strong>requires authentication</strong> with a valid API key</li>
                    <?php endif; ?>
                    <li>All dates and times are in UTC format</li>
                    <li>Response times may vary based on query complexity</li>
                    <li>For large datasets, use pagination parameters if available</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>








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


// Documentation Button Click Handler
document.querySelectorAll('.btn-docs').forEach(button => {
    button.addEventListener('click', function() {
        const tabName = this.closest('.api-content').id.replace('-content', '');
        const modal = document.getElementById(`${tabName}-doc-modal`);
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });
});

// Close Modal Handlers
document.querySelectorAll('.close-modal').forEach(button => {
    button.addEventListener('click', function() {
        this.closest('.endpoint-doc-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    });
});

// Close modal when clicking outside content
document.querySelectorAll('.endpoint-doc-modal').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

// Authentication Key Handling
const authApiKeyInput = document.getElementById('authApiKey');
const validateKeyBtn = document.getElementById('validateKey');
const copyAuthKeyBtn = document.getElementById('copyAuthKey');
const authKeyStatus = document.getElementById('authKeyStatus');
const authKeyPlaceholder = document.getElementById('authKeyPlaceholder');

// Load saved API key if available
if (localStorage.getItem('apiKey')) {
    authApiKeyInput.value = localStorage.getItem('apiKey');
    authKeyPlaceholder.textContent = localStorage.getItem('apiKey');
}

// Validate API Key
validateKeyBtn.addEventListener('click', function() {
    const apiKey = authApiKeyInput.value.trim();
    if (!apiKey) {
        showAuthKeyStatus('Please enter an API key to test', false);
        return;
    }
    
    // Show loading state
    const originalText = this.innerHTML;
    this.innerHTML = `<span class="spinner"></span> Validating...`;
    this.disabled = true;
    
    // Test the key with a simple endpoint
    fetch(`<?= $apiBaseUrl ?>app/api/v1.php?table=moh_indicators&action=list&apikey=${encodeURIComponent(apiKey)}`)
        .then(response => {
            if (response.ok) {
                showAuthKeyStatus('API key is valid!', true);
                authKeyPlaceholder.textContent = apiKey;
                // Also update the main API key input
                document.getElementById('apiKeyInput').value = apiKey;
            } else {
                showAuthKeyStatus('API key is invalid. Please check and try again.', false);
            }
        })
        .catch(error => {
            showAuthKeyStatus('Error testing API key: ' + error.message, false);
        })
        .finally(() => {
            this.innerHTML = originalText;
            this.disabled = false;
        });
});

// Copy Key Button
copyAuthKeyBtn.addEventListener('click', function() {
    const apiKey = authApiKeyInput.value.trim();
    if (!apiKey) {
        showAuthKeyStatus('No API key to copy', false);
        return;
    }
    
    navigator.clipboard.writeText(apiKey).then(() => {
        showAuthKeyStatus('API key copied to clipboard!', true);
    }).catch(err => {
        showAuthKeyStatus('Failed to copy key: ' + err, false);
    });
});

function showAuthKeyStatus(message, isSuccess) {
    authKeyStatus.innerHTML = `<i class="fas fa-${isSuccess ? 'check' : 'exclamation'}-circle"></i> ${message}`;
    authKeyStatus.style.color = isSuccess ? 'var(--success-color)' : 'var(--accent-color)';
    authKeyStatus.style.display = 'block';
    setTimeout(() => {
        authKeyStatus.style.display = 'none';
    }, 5000);
}

// Support Form Handling
document.getElementById('supportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('supportName').value,
        email: document.getElementById('supportEmail').value,
        organization: document.getElementById('supportOrganization').value,
        position: document.getElementById('supportPosition').value,
        subject: document.getElementById('supportSubject').value,
        message: document.getElementById('supportMessage').value,
        priority: document.getElementById('supportPriority').value
    };
    
    const statusElement = document.getElementById('supportFormStatus');
    
    // In a real implementation, you would send this to your server
    // For now, we'll just show a success message
    statusElement.innerHTML = `
        <div class="alert alert-info">
            <i class="fas fa-check-circle"></i> 
            Thank you, ${formData.name}! Your support ticket has been submitted successfully.
            Our team will contact you at ${formData.email} within 24-48 hours.
        </div>
    `;
    
    // Clear form
    this.reset();
    
    // Hide status after 5 seconds
    setTimeout(() => {
        statusElement.innerHTML = '';
    }, 10000);
});

// Copy to Clipboard Functionality
document.querySelectorAll('.copy-code').forEach(button => {
    button.addEventListener('click', function() {
        const target = document.querySelector(this.dataset.target);
        const code = target.querySelector('code').textContent;
        
        navigator.clipboard.writeText(code).then(() => {
            showCopyFeedback('Code copied to clipboard!', true);
        }).catch(err => {
            showCopyFeedback('Failed to copy code', false);
        });
    });
});

function showCopyFeedback(message, isSuccess) {
    const feedback = document.createElement('div');
    feedback.className = `copy-feedback ${isSuccess ? 'success' : 'error'}`;
    feedback.textContent = message;
    document.body.appendChild(feedback);
    
    setTimeout(() => {
        feedback.remove();
    }, 2000);
}

// Language Tabs Functionality
document.querySelectorAll('.language-tab').forEach(tab => {
    tab.addEventListener('click', function() {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.language-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.language-content').forEach(c => c.classList.remove('active'));
        
        // Add active class to clicked tab
        this.classList.add('active');
        
        // Show corresponding content
        const languageId = this.dataset.language;
        document.getElementById(`${languageId}-content`).classList.add('active');
    });
});

// Enhanced Form Submission
document.getElementById('supportForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = {
        name: this.supportName.value,
        email: this.supportEmail.value,
        organization: this.supportOrganization.value,
        position: this.supportPosition.value,
        phone: this.supportPhone.value,
        subject: this.supportSubject.value,
        message: this.supportMessage.value,
        priority: document.querySelector('input[name="priority"]:checked').value
    };

    const statusElement = document.getElementById('supportFormStatus');
    
    try {
        const response = await fetch('send_support_email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        });

        const result = await response.json();
        
        if (response.ok) {
            statusElement.innerHTML = `
                <i class="fas fa-check-circle"></i>
                Ticket submitted successfully! We'll respond within 24 hours.
            `;
            statusElement.className = 'success';
            this.reset();
        } else {
            statusElement.innerHTML = `
                <i class="fas fa-times-circle"></i>
                ${result.error || 'Submission failed. Please try again.'}
            `;
            statusElement.className = 'error';
        }
        
        statusElement.style.display = 'block';
        setTimeout(() => {
            statusElement.style.display = 'none';
        }, 5000);

    } catch (error) {
        statusElement.innerHTML = `
            <i class="fas fa-times-circle"></i>
            Network error. Please check your connection.
        `;
        statusElement.className = 'error';
        statusElement.style.display = 'block';
    }
});

// Initialize Prism Syntax Highlighting
document.addEventListener('DOMContentLoaded', function() {
    Prism.highlightAll();
});

document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const faqItem = button.closest('.faq-item');
    faqItem.classList.toggle('active');
    
    // Optional: Close other open items
    document.querySelectorAll('.faq-item').forEach(item => {
      if (item !== faqItem) item.classList.remove('active');
    });
  });
});

// Dark Mode Toggle
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

// Check for saved dark mode preference
if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-mode');
    darkModeToggle.checked = true;
}

// Toggle dark mode
darkModeToggle.addEventListener('change', function() {
    if (this.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('darkMode', 'enabled');
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('darkMode', 'disabled');
    }
});

// Update Prism theme when toggling dark mode
darkModeToggle.addEventListener('change', function() {
    const prismLink = document.querySelector('link[href*="prism-"]');
    if (prismLink) {
        if (this.checked) {
            prismLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css';
        } else {
            prismLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css';
        }
    }
});
// Function to close sidebar when clicking outside
function handleClickOutside(event) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.getElementById('menuToggle');
    
    // Check if click is outside the sidebar and not on the menu toggle button
    if (!sidebar.contains(event.target) && event.target !== menuToggle && !menuToggle.contains(event.target)) {
        sidebar.classList.remove('active');
    }
}

// Add event listener for clicks on the document
document.addEventListener('click', handleClickOutside);

// Also close sidebar when pressing Escape key
document.addEventListener('keydown', function(event) {
    const sidebar = document.getElementById('sidebar');
    if (event.key === 'Escape' && sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
    }
});

// Prevent clicks inside the sidebar from closing it
document.getElementById('sidebar').addEventListener('click', function(event) {
    event.stopPropagation();
});
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