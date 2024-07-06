<?php

require 'functions.php';

// Handle form submission
$proportionFunctional = 0;
$proportionOnline = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedOrgUnit = $_POST['orgUnit'];
    $selectedPeriod = $_POST['period'];

    // Fetch data for the indicators
    $dataValuesFunctional = fetchDataValues($baseUrl, $username, $password, 'functional_dhis2', $selectedOrgUnit, $selectedPeriod);
    $dataValuesOnline = fetchDataValues($baseUrl, $username, $password, 'online_dhis2', $selectedOrgUnit, $selectedPeriod);

    // Calculate proportions
    $proportionFunctional = calculateProportion($dataValuesFunctional);
    $proportionOnline = calculateProportion($dataValuesOnline);
}

// Fetch dropdown data
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

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>Proportion of Sites with Functional DHIS-2 System</h2>
    <p><?= $proportionFunctional ?>%</p>

    <h2>Proportion of Sites with Online DHIS-2 System</h2>
    <p><?= $proportionOnline ?>%</p>

    <h2>API Response for Functional DHIS-2 System</h2>
    <pre><?php print_r($dataValuesFunctional); ?></pre>

    <h2>API Response for Online DHIS-2 System</h2>
    <pre><?php print_r($dataValuesOnline); ?></pre>
<?php endif; ?>

</body>
</html>
