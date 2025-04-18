<?php
$baseUrl = 'https://dhis.moh.gov.et';//'https://dhis2.merqconsultancy.org';
$username = 'michaelk';
$password = 'Dhis2_12345';

function fetchOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?level=2&fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        return ['error' => curl_error($ch)];
    }
    curl_close($ch);
    return json_decode($result, true);
}

header('Content-Type: application/json');
echo json_encode(fetchOrgUnits($baseUrl, $username, $password));
?>
