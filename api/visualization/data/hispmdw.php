<?php

// API URL to fetch the data
$api_url = 'https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list';

// Fetch the data from the API
$response = file_get_contents($api_url);

// Decode the JSON response
$data = json_decode($response, true);

// Initialize the transformed structure
$transformed = [];

// Loop through the original data and transform it
foreach ($data['data'] as $item) {
    // Get values from the item, ensuring they're strings or floats as needed
    $indicatorGroup = isset($item['Indicator Group']) ? (string)$item['Indicator Group'] : "";
    $indicatorName = isset($item['Indicator Name']) ? (string)$item['Indicator Name'] : "";
    $dataSource = isset($item['Data Source']) ? (string)$item['Data Source'] : "";
    $year = isset($item['Year']) ? DateTime::createFromFormat('Y', $item['Year'])->format('Y') : "";
    $value = isset($item['Value']) ? (float)$item['Value'] : 0;

    // Additional fields with defaults
    $scope = isset($item['Scope']) ? (string)$item['Scope'] : "";
    $region = isset($item['Region']) ? (string)$item['Region'] : "";
    $adminUnit = isset($item['Administration Unit']) ? (string)$item['Administration Unit'] : "";
    $facilityType = isset($item['Facility Type']) ? (string)$item['Facility Type'] : "";
    $assessment = isset($item['Assessment']) ? (string)$item['Assessment'] : "";
    $sex = isset($item['Sex']) ? (string)$item['Sex'] : "";
    $baseline = isset($item['Baseline']) ? (float)$item['Baseline'] : null;
    $target = isset($item['Target']) ? (float)$item['Target'] : null;
    $dataRepresentation = isset($item['Data Representation']) ? (string)$item['Data Representation'] : "";

    // Create a new entry for the transformed structure if not already present
    if (!isset($transformed[$indicatorGroup])) {
        $transformed[$indicatorGroup] = [];
    }

    if (!isset($transformed[$indicatorGroup][$indicatorName])) {
        $transformed[$indicatorGroup][$indicatorName] = [];
    }

    if (!isset($transformed[$indicatorGroup][$indicatorName][$dataSource])) {
        $transformed[$indicatorGroup][$indicatorName][$dataSource] = [];
    }

    // If not already initialized for the year, create an entry
    if (!isset($transformed[$indicatorGroup][$indicatorName][$dataSource][$year])) {
        $transformed[$indicatorGroup][$indicatorName][$dataSource][$year] = [
            'total_value' => 0,
            'count' => 0,
            'scope' => $scope,
            'region' => $region,
            'administration_unit' => $adminUnit,
            'facility_type' => $facilityType,
            'assessment' => $assessment,
            'sex' => $sex,
            'baseline' => $baseline,
            'target' => $target,
            'data_representation' => $dataRepresentation,
        ];
    }

    // Aggregate the total value and count occurrences
    $transformed[$indicatorGroup][$indicatorName][$dataSource][$year]['total_value'] += $value;
    $transformed[$indicatorGroup][$indicatorName][$dataSource][$year]['count'] += 1;
}

// Convert the transformed structure to an array of objects
$result = [];
foreach ($transformed as $indicatorGroup => $indicators) {
    foreach ($indicators as $indicatorName => $dataSources) {
        foreach ($dataSources as $dataSource => $years) {
            foreach ($years as $year => $data) {
                // Always include the indicator name and set values to defaults if necessary
                $result[] = [
                    'indicator_group' => $indicatorGroup,
                    'indicator_name' => $indicatorName,
                    'data_source' => $dataSource,
                    'year' => $year,
                    'total_value' => $data['total_value'] ?: 0, // Default to 0 if no value
                    'count' => $data['count'] ?: 0, // Default to 0 if no count
                    'scope' => $data['scope'] ?: "", // Default to empty string
                    'region' => $data['region'] ?: "", // Default to empty string
                    'administration_unit' => $data['administration_unit'] ?: "", // Default to empty string
                    'facility_type' => $data['facility_type'] ?: "", // Default to empty string
                    'assessment' => $data['assessment'] ?: "", // Default to empty string
                    'sex' => $data['sex'] ?: "", // Default to empty string
                    'baseline' => $data['baseline'], // Keep as null if no baseline
                    'target' => $data['target'], // Keep as null if no target
                    'data_representation' => $data['data_representation'] ?: "", // Default to empty string
                ];
            }
        }
    }
}

// Output the transformed JSON
header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT);

?>
