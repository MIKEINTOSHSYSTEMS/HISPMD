<?php
// Enable CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: text/html");

// DHIS2 credentials and base URL
$baseUrl = 'https://dhis.moh.gov.et';
$username = 'michaelk';
$password = 'Dhis2_12345';

// Fetch Data function
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Organisation Units
function fetchAllOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Organisation Unit Group Sets
function fetchOrgUnitGroupSets($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnitGroupSets.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Organisation Unit Analytics
function fetchOrgUnitAnalytics($baseUrl, $username, $password, $orgUnits, $ougs, $columns) {
    $orgUnitsStr = implode(';', $orgUnits);
    $url = $baseUrl . "/api/orgUnitAnalytics?ou=$orgUnitsStr&ougs=$ougs&columns=$columns";
    return fetchData($url, $username, $password);
}

// Handle API requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orgUnit = isset($_POST['orgUnit']) ? $_POST['orgUnit'] : '';
    $ougs = isset($_POST['ougs']) ? $_POST['ougs'] : '';

    if ($orgUnit && $ougs) {
        $columns = $ougs; // Assuming columns match OUGs for simplicity
        $data = fetchOrgUnitAnalytics($baseUrl, $username, $password, [$orgUnit], $ougs, $columns);

        if (isset($data['rows'])) {
            // Display the output in a table format
            echo "<h3>Analytics Data</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            foreach ($data['headers'] as $header) {
                echo "<th>" . htmlspecialchars($header['column']) . "</th>";
            }
            echo "</tr>";

            foreach ($data['rows'] as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data found.</p>";
        }
    } else {
        echo "<p>Please select both Organisation Unit and Group Set.</p>";
    }
} else {
    // Fetch Organisation Units and Group Sets for the dropdowns
    $orgUnits = fetchAllOrgUnits($baseUrl, $username, $password);
    $groupSets = fetchOrgUnitGroupSets($baseUrl, $username, $password);
    ?>

    <!-- HTML Form to Select Organisation Unit and Group Set -->
    <h2>Select Organisation Unit and Group Set</h2>
    <form method="POST">
        <label for="orgUnit">Organisation Unit:</label>
        <select name="orgUnit" id="orgUnit">
            <?php foreach ($orgUnits['organisationUnits'] as $unit) { ?>
                <option value="<?= htmlspecialchars($unit['id']) ?>"><?= htmlspecialchars($unit['displayName']) ?></option>
            <?php } ?>
        </select>
        
        <label for="ougs">Organisation Unit Group Set:</label>
        <select name="ougs" id="ougs">
            <?php foreach ($groupSets['organisationUnitGroupSets'] as $groupSet) { ?>
                <option value="<?= htmlspecialchars($groupSet['id']) ?>"><?= htmlspecialchars($groupSet['displayName']) ?></option>
            <?php } ?>
        </select>

        <button type="submit">Get Data</button>
    </form>
    <?php
}
?>
