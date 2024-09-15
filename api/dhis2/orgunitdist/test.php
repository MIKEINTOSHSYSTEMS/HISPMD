<?php

// DHIS2 API URLs
$orgUnitsUrl = 'https://dhis.moh.gov.et/api/organisationUnits?includeAncestors=true&includeDescendants=true';
$groupSetsUrl = 'https://dhis.moh.gov.et/api/organisationUnitGroupSets';

// DHIS2 credentials
$username = 'michaelk'; // Replace with your username
$password = 'Dhis2_12345'; // Replace with your password

// Function to fetch data from a given URL with Basic Authentication
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password"); // Set username and password
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// Fetch organisation units and group sets
$organisationUnits = fetchData($orgUnitsUrl, $username, $password);
$organisationGroupSets = fetchData($groupSetsUrl, $username, $password);

// Initialize counts
$countByGroupSet = [];

// Loop through organisation units and count by group set
foreach ($organisationUnits['organisationUnits'] as $unit) {
    if (isset($unit['organisationUnitGroups'])) {
        foreach ($unit['organisationUnitGroups'] as $group) {
            $groupSetId = $group['organisationUnitGroupSet']['id'];
            if (!isset($countByGroupSet[$groupSetId])) {
                $countByGroupSet[$groupSetId] = 0;
            }
            $countByGroupSet[$groupSetId]++;
        }
    }
}

// Output the counts
foreach ($countByGroupSet as $groupSetId => $count) {
    echo "Group Set ID: $groupSetId, Count: $count\n";
}

?>