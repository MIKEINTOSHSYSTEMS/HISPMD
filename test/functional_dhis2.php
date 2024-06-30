<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables from .env file in the parent directory
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Retrieve environment variables
$url = getenv('DHIS2_BASE_URL');
$username = getenv('DHIS2_USERNAME');
$password = getenv('DHIS2_PASSWORD');

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Remove this line in production if not needed
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Remove this line in production if not needed

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    echo "Curl error: " . curl_error($ch) . "\n";
    echo "HTTP Code: " . curl_getinfo($ch, CURLINFO_HTTP_CODE) . "\n";
    exit;
}

// Check HTTP status code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($httpCode >= 400) {
    echo "HTTP request failed with status code: $httpCode\n";
    exit;
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Check for JSON decoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg() . "\n";
    exit;
}

// Process the data to find the proportion of functional DHIS-2 systems
$totalSites = 0;
$functionalSites = 0;

foreach ($data['dataElements'] as $element) {
    // Adjust these conditions based on your DHIS2 data structure
    if (isset($element['category']) && $element['category'] === 'DHIS2 Functionality' &&
        isset($element['value']) && $element['value'] === 'Functional') {
        $totalSites++;
        $functionalSites++;
    } elseif (isset($element['category']) && $element['category'] === 'DHIS2 Functionality') {
        $totalSites++;
    }
}

// Calculate proportion of functional sites
$proportionFunctional = ($totalSites > 0) ? ($functionalSites / $totalSites) * 100 : 0;

// Output the result
echo "Proportion of sites with functional DHIS-2 systems: " . number_format($proportionFunctional, 2) . "%\n";
?>
