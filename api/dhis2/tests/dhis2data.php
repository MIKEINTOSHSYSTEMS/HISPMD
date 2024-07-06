<?php

// DHIS2 credentials and base URL
$baseUrl = 'https://dhis2.merqconsultancy.org';
$username = 'admin';
$password = 'district';

// Fetch Indicators
function fetchIndicators($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/indicators.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Organization Units
function fetchOrgUnits($baseUrl, $username, $password) {
    $url = $baseUrl . '/api/organisationUnits.json?fields=id,displayName&paging=false';
    return fetchData($url, $username, $password);
}

// Fetch Periods
function fetchPeriods() {
  return [
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
}

// Fetch Data function
function fetchData($url, $username, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return json_decode($result, true);
}

// Fetch Data Values
function fetchDataValues($baseUrl, $username, $password, $indicator, $orgUnit, $period) {
    $url = $baseUrl . "/api/analytics.json?dimension=dx:$indicator&dimension=ou:$orgUnit&dimension=pe:$period&displayProperty=NAME&outputIdScheme=ID";
    return fetchData($url, $username, $password);
}

// Handle form submission
$dataValues = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedIndicator = $_POST['indicator'];
    $selectedOrgUnit = $_POST['orgUnit'];
    $selectedPeriod = $_POST['period'];
    $dataValues = fetchDataValues($baseUrl, $username, $password, $selectedIndicator, $selectedOrgUnit, $selectedPeriod);
}

// Fetch dropdown data
$indicators = fetchIndicators($baseUrl, $username, $password);
$orgUnits = fetchOrgUnits($baseUrl, $username, $password);
$periods = fetchPeriods();

?>

<!DOCTYPE html>
<html>
<head>
    <title>DHIS2 Data Fetch</title>
</head>
<body>

<h1>DHIS2 Data Fetch</h1>

<form method="POST">
    <label for="indicator">Select Indicator:</label>
    <select name="indicator" id="indicator" required>
        <?php foreach ($indicators['indicators'] as $indicator): ?>
            <option value="<?= $indicator['id'] ?>" <?= isset($selectedIndicator) && $selectedIndicator === $indicator['id'] ? 'selected' : '' ?>>
                <?= $indicator['displayName'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label for="orgUnit">Select Organization Unit:</label>
    <select name="orgUnit" id="orgUnit" required>
        <?php foreach ($orgUnits['organisationUnits'] as $orgUnit): ?>
            <option value="<?= $orgUnit['id'] ?>" <?= isset($selectedOrgUnit) && $selectedOrgUnit === $orgUnit['id'] ? 'selected' : '' ?>>
                <?= $orgUnit['displayName'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label for="period">Select Period:</label>
    <select name="period" id="period" required>
        <?php foreach ($periods as $key => $value): ?>
            <option value="<?= $key ?>" <?= isset($selectedPeriod) && $selectedPeriod === $key ? 'selected' : '' ?>>
                <?= $value ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <button type="submit">Fetch Data</button>
</form>

<?php if (!empty($dataValues)): ?>

<br>
<br>
        <table border="1">
            <thead>
                <tr>
                    <?php foreach ($dataValues['headers'] as $header): ?>
                        <th><?= $header['column'] ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataValues['rows'] as $row): ?>
                    <tr>
                        <?php foreach ($row as $cell): ?>
                            <td><?= $cell ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <h2>API Response</h2>
    <pre><?php print_r($dataValues); ?></pre>
    <?php if (isset($dataValues['rows']) && count($dataValues['rows']) > 0): ?>

    <?php else: ?>
        <p>No data available.</p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
