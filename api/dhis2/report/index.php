<?php

$apiUrl = "https://dhis2.merqconsultancy.org/api/";
$auth = base64_encode("admin:district");

function fetchData($url) {
    global $auth;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Basic $auth",
        "Content-Type: application/json"
    ));
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Organisation Units
$organisationUnits = fetchData($apiUrl . "organisationUnits.json?fields=id,displayName&paging=false");

// Fetch Data Sets
$dataSets = fetchData($apiUrl . "dataSets.json?fields=id,displayName&paging=false");

// Define relative periods
$relativePeriods = [
    'THIS_WEEK' => 'This Week',
    'LAST_WEEK' => 'Last Week',
    'LAST_4_WEEKS' => 'Last 4 Weeks',
    'LAST_12_WEEKS' => 'Last 12 Weeks',
    'LAST_52_WEEKS' => 'Last 52 Weeks',
    'THIS_MONTH' => 'This Month',
    'LAST_MONTH' => 'Last Month',
    'THIS_BIMONTH' => 'This Bimonth',
    'LAST_BIMONTH' => 'Last Bimonth',
    'THIS_QUARTER' => 'This Quarter',
    'LAST_QUARTER' => 'Last Quarter',
    'THIS_SIX_MONTH' => 'This Six Months',
    'LAST_SIX_MONTH' => 'Last Six Months',
    'MONTHS_THIS_YEAR' => 'Months This Year',
    'QUARTERS_THIS_YEAR' => 'Quarters This Year',
    'THIS_YEAR' => 'This Year',
    'MONTHS_LAST_YEAR' => 'Months Last Year',
    'QUARTERS_LAST_YEAR' => 'Quarters Last Year',
    'LAST_YEAR' => 'Last Year',
    'LAST_5_YEARS' => 'Last 5 Years',
    'LAST_12_MONTHS' => 'Last 12 Months',
    'LAST_3_MONTHS' => 'Last 3 Months',
    'LAST_6_BIMONTHS' => 'Last 6 Bimonths',
    'LAST_4_QUARTERS' => 'Last 4 Quarters',
    'LAST_2_SIXMONTHS' => 'Last 2 Six Months',
    'THIS_FINANCIAL_YEAR' => 'This Financial Year',
    'LAST_FINANCIAL_YEAR' => 'Last Financial Year',
    'LAST_5_FINANCIAL_YEARS' => 'Last 5 Financial Years',
];

// Define dropdowns
function createDropdown($name, $options, $label, $selectedValue) {
    echo "<label for='$name'>$label</label>";
    echo "<select name='$name' id='$name' required>";
    echo "<option value=''>Select $label</option>";
    foreach ($options as $key => $value) {
        $selected = ($key == $selectedValue) ? "selected" : "";
        echo "<option value='$key' $selected>$value</option>";
    }
    echo "</select><br><br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DHIS2 Analytics</title>
    <style>
        .scrollable-container {
            max-height: 200px;
            overflow-y: auto;
        }
        .dropdown-container {
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 5px;
            margin-bottom: 10px;
        }
        .dropdown-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .select-all {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>DHIS2 Reporting Rate Summary</h1>
    <h3>Select Parameters</h3>
    <form method="GET" action="">
        <label for="organisationUnit">Organisation Unit</label><br>
        <div class="dropdown-container">
            <input type="checkbox" id="selectAll" class="select-all" onclick="toggleSelectAll()"> Select All<br>
            <div class="scrollable-container">
                <?php
                // Show only the first 10 Organisation Units
                $orgUnitsToShow = array_slice($organisationUnits['organisationUnits'], 0, 10000);
                foreach ($orgUnitsToShow as $unit) {
                    $checked = isset($_GET['organisationUnit']) && in_array($unit['id'], $_GET['organisationUnit']) ? "checked" : "";
                    echo "<input type='checkbox' name='organisationUnit[]' value='{$unit['id']}' $checked> {$unit['displayName']}<br>";
                }
                ?>
            </div>
        </div>
        <br>

        <?php
        createDropdown('dataSet', array_column($dataSets['dataSets'], 'displayName', 'id'), 'Data Set', isset($_GET['dataSet']) ? $_GET['dataSet'] : '');
        createDropdown('reportPeriod', $relativePeriods, 'Report Period', isset($_GET['reportPeriod']) ? $_GET['reportPeriod'] : '');
        ?>
        <button type="submit">Fetch Data</button>
    </form>

    <?php
    if (isset($_GET['organisationUnit']) && isset($_GET['dataSet']) && isset($_GET['reportPeriod'])) {
        $organisationUnits = $_GET['organisationUnit'];
        $dataSet = $_GET['dataSet'];
        $reportPeriod = $_GET['reportPeriod'];

        // Constructing dimensions for the dataSet (assuming fixed indicator types)
        $indicators = [
            "{$dataSet}.ACTUAL_REPORTS",
            "{$dataSet}.EXPECTED_REPORTS",
            "{$dataSet}.REPORTING_RATE",
            "{$dataSet}.ACTUAL_REPORTS_ON_TIME",
            "{$dataSet}.REPORTING_RATE_ON_TIME"
        ];
        $dimensionDx = implode(';', $indicators);

        // Constructing the organisation units parameter
        $dimensionOu = implode(';', $organisationUnits);

        // Fetch data based on selected parameters
        $queryUrl = $apiUrl . "analytics.json?dimension=dx:$dimensionDx&dimension=ou:$dimensionOu&filter=pe:$reportPeriod&columns=dx&rows=ou&tableLayout=true&hideEmptyRows=true&displayProperty=SHORTNAME&includeNumDen=false";
        $analyticsData = fetchData($queryUrl);

        if ($analyticsData && isset($analyticsData['rows'])) {
            echo "<h2>Analytics Data</h2>";
            echo "<table border='1'>";
            echo "<tr>";
            foreach ($analyticsData['headers'] as $header) {
                echo "<th>{$header['name']}</th>";
            }
            echo "</tr>";
            foreach ($analyticsData['rows'] as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data found for the selected parameters.</p>";
        }
    }
    ?>

    <script>
        function toggleSelectAll() {
            var selectAllCheckbox = document.getElementById('selectAll');
            var checkboxes = document.querySelectorAll('.dropdown-container input[type="checkbox"]:not(#selectAll)');
            for (var checkbox of checkboxes) {
                checkbox.checked = selectAllCheckbox.checked;
            }
        }
    </script>
</body>
</html>
