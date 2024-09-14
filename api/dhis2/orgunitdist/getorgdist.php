<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// DHIS2 credentials and base URL from environment variables for security
$baseUrl = getenv('DHIS2_BASE_URL') ?: 'https://dhis.moh.gov.et';
$username = getenv('DHIS2_USERNAME') ?: 'michaelk';
$password = getenv('DHIS2_PASSWORD') ?: 'Dhis2_12345';

// Fetch Data function
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For testing purposes, not recommended for production
    
    $result = curl_exec($ch);

    // Handle curl errors
    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode(['error' => 'cURL error: ' . curl_error($ch)]);
        curl_close($ch);
        exit;
    }

    // Handle HTTP status codes from DHIS2 API
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode >= 400) {
        http_response_code($httpCode);
        echo json_encode(['error' => 'API returned error with status code ' . $httpCode]);
        curl_close($ch);
        exit;
    }

    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Organisation Unit Groups and create a mapping of IDs to Display Names
function fetchOrganisationUnitGroups($baseUrl, $username, $password) {
    $url = $baseUrl . "/api/organisationUnitGroups?paging=false";
    $data = fetchData($url, $username, $password);
    
    $groupMapping = [];
    if (isset($data['organisationUnitGroups'])) {
        foreach ($data['organisationUnitGroups'] as $group) {
            $groupMapping[$group['id']] = $group['displayName'];
        }
    }
    return $groupMapping;
}

// Fetch Organisation Unit Analytics
function fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnits, $ougs) {
    $orgUnitsStr = implode(';', $orgUnits);
    $ougsStr = implode(';', $ougs);
    $url = $baseUrl . "/api/33/orgUnitAnalytics?ou=$orgUnitsStr&ougs=$ougsStr";
    return fetchData($url, $username, $password);
}

// Transform data to the required format with display names for ougs
function transformData($data, $ougsMapping) {
    $transformedData = [];

    if (isset($data['rows'])) {
        foreach ($data['rows'] as $row) {
            $ou = $row[0];
            $ougs = $row[1] !== 'null' ? $row[1] : null;
            $count = $row[2];

            // Get display name for the ougs
            $ougsDisplayName = $ougs ? ($ougsMapping[$ougs] ?? null) : null;

            $transformedData[] = [
                'ou' => $ou,
                'ougs' => $ougs,
                'ougsDisplayName' => $ougsDisplayName,
                'count' => $count
            ];
        }
    }

    return $transformedData;
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
        case 'fetchOrgUnitAnalytics':
            $orgUnits = isset($_GET['orgUnits']) ? $_GET['orgUnits'] : '';
            $ougs = isset($_GET['ougs']) ? $_GET['ougs'] : '';
            $searchQuery = isset($_GET['searchQuery']) ? $_GET['searchQuery'] : '';
            
            if (!empty($orgUnits) && !empty($ougs)) {
                // Convert string parameters to arrays
                $orgUnitsArray = explode(',', $orgUnits);
                $ougsArray = explode(',', $ougs);

                // Fetch Organisation Unit Groups and create mapping
                $ougsMapping = fetchOrganisationUnitGroups($baseUrl, $username, $password);

                // Fetch Organisation Unit Analytics data
                $data = fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnitsArray, $ougsArray);
                
                // Transform data to include display names
                $transformedData = transformData($data, $ougsMapping);
                
                echo json_encode($transformedData);
            } else {
                http_response_code(400);
                echo json_encode(['error' => 'Missing required parameters']);
            }
            break;
        default:
            http_response_code(400);
            echo json_encode(['error' => 'Invalid action']);
            break;
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}

?>
