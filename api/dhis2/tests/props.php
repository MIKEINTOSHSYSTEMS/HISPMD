<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$baseUrl = "https://dhis2.merqconsultancy.org";
$username = "admin";
$password = "district";

// Function to fetch data from DHIS2 API
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($ch);
    if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch organization units (sites)
$orgUnitsUrl = "$baseUrl/api/organisationUnits.json?paging=false&fields=id,name";
$orgUnits = fetchData($orgUnitsUrl, $username, $password);

if (!$orgUnits) {
    die("Failed to fetch organization units.");
}

$orgUnits = $orgUnits['organisationUnits'];

// Placeholder for total, functional, and online sites
$totalSites = count($orgUnits);
$functionalSites = 0;
$onlineSites = 0;

// Fetch data values for each site (assuming you have a dataset/indicator for functional and online status)
foreach ($orgUnits as $orgUnit) {
    $orgUnitId = $orgUnit['id'];

    // Fetch functional status (replace 'your_functional_status_indicator_id' with the actual indicator ID)
    $functionalUrl = "$baseUrl/api/dataValueSets?orgUnit=$orgUnitId&dataElement=your_functional_status_indicator_id";
    $functionalData = fetchData($functionalUrl, $username, $password);
    if (!$functionalData) {
        echo "Failed to fetch functional status for org unit $orgUnitId.<br>";
        continue;
    }
    if (!empty($functionalData['dataValues'])) {
        foreach ($functionalData['dataValues'] as $dataValue) {
            if ($dataValue['value'] == '1') { // Assuming '1' means functional
                $functionalSites++;
            }
        }
    }

    // Fetch online status (replace 'your_online_status_indicator_id' with the actual indicator ID)
    $onlineUrl = "$baseUrl/api/dataValueSets?orgUnit=$orgUnitId&dataElement=your_online_status_indicator_id";
    $onlineData = fetchData($onlineUrl, $username, $password);
    if (!$onlineData) {
        echo "Failed to fetch online status for org unit $orgUnitId.<br>";
        continue;
    }
    if (!empty($onlineData['dataValues'])) {
        foreach ($onlineData['dataValues'] as $dataValue) {
            if ($dataValue['value'] == '1') { // Assuming '1' means online
                $onlineSites++;
            }
        }
    }
}

// Calculate proportions
$proportionFunctional = ($totalSites > 0) ? ($functionalSites / $totalSites) * 100 : 0;
$proportionOnline = ($totalSites > 0) ? ($onlineSites / $totalSites) * 100 : 0;

// Display results
echo "Total Sites: $totalSites<br>";
echo "Functional Sites: $functionalSites<br>";
echo "Online Sites: $onlineSites<br>";
echo "Proportion of Sites with Functional DHIS-2 System: $proportionFunctional%<br>";
echo "Proportion of Sites with Online DHIS-2 System: $proportionOnline%<br>";
?>
