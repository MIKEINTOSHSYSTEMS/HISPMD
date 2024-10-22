<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Disable any accidental script output
ob_start();

// API URL
$url = "https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=\$2y\$10\$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list";

// Fetch the JSON data from the API
$json = @file_get_contents($url);
if ($json === false) {
    die('Error fetching data from API');
}

$data = json_decode($json, true);

// Check if data is valid
if (!isset($data['data']) || !is_array($data['data'])) {
    die('No data available');
}

// Create a new SimpleXMLElement for the root node
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><indicators></indicators>');

// Function to determine series type based on representation
function getSeriesType($representation) {
    switch ($representation) {
        case 'column':
            return 'column';
        case 'line':
            return 'line';
        case 'range-area':
            return 'range-area';
        default:
            return 'line'; // Defaulting to line if no match
    }
}

// Array to group indicators by name and type
$groupedIndicators = [];

// Group the indicators
foreach ($data['data'] as $entry) {
    $indicatorName = $entry['Indicator Name'] ?? 'Unknown';
    $indicatorGroup = strtolower(str_replace(' ', '_', $entry['Indicator Group'] ?? 'unknown'));
    $year = $entry['Year'] ?? 'Unknown Year';

    // Initialize if not set
    if (!isset($groupedIndicators[$indicatorGroup][$indicatorName])) {
        $groupedIndicators[$indicatorGroup][$indicatorName] = [
            'years' => [],
            'description' => [],
            'abbreviation' => $entry['Data Source'] ?? 'Unknown Source'
        ];
    }

    // Collect year and value
    $groupedIndicators[$indicatorGroup][$indicatorName]['years'][$year][] = [
        'value' => $entry['Value'] ?? 'N/A',
        'representation' => $entry['Data Representation'] ?? 'line',
    ];

    // Collect description parts if available
    $descriptionParts = [];
    if (!empty($entry['Indicator Group'])) {
        $descriptionParts[] = "<b>Group:</b> " . htmlspecialchars($entry['Indicator Group']);
    }
    if (!empty($entry['Scope'])) {
        $descriptionParts[] = "<b>Scope:</b> " . htmlspecialchars($entry['Scope']);
    }
    if (!empty($entry['Data Source'])) {
        $descriptionParts[] = "<b>Source:</b> " . htmlspecialchars($entry['Data Source']);
    }
    if (!empty($entry['Assessment'])) {
        $descriptionParts[] = "<b>Assessment:</b> " . htmlspecialchars($entry['Assessment']);
    }
    if (!empty($entry['Administration Unit'])) {
        $descriptionParts[] = "<b>Administration Units:</b> " . htmlspecialchars($entry['Administration Unit']);
    }

    // Combine descriptions only if there are parts available
    if (count($descriptionParts) > 0) {
        $groupedIndicators[$indicatorGroup][$indicatorName]['description'] = implode('<br/>', array_unique($descriptionParts));
    } else {
        // Optional: provide a fallback description
        $groupedIndicators[$indicatorGroup][$indicatorName]['description'] = "<b>No description available</b>";
    }
}

// Loop through each grouped indicator
foreach ($groupedIndicators as $group => $indicators) {
    foreach ($indicators as $name => $data) {
        // Create a new indicator entry
        $indicator = $xml->addChild('indicator');

        // Set the type
        $indicator->addAttribute('type', $group);

        // Title and abbreviation
        $indicator->addChild('title', htmlspecialchars($name));
        $indicator->addChild('abbreviation', htmlspecialchars($data['abbreviation']));

        // Description
        $description = $data['description'];
        if (!empty($description)) {
            addCdata($indicator->addChild('description'), $description);
        }

        // Defaults section
        $defaults = $indicator->addChild('defaults');

        // Separate arrays for periods and values
        $periods = [];
        $values = [];

        // Collect periods and values
        foreach ($data['years'] as $year => $entries) {
            foreach ($entries as $entry) {
                // Add to periods
                $periods[] = $year; // Collect all periods
                // Add to values
                $values[] = [
                    'value' => $entry['value'],
                    'representation' => $entry['representation'],
                ]; // Collect all values
            }
        }

        // Add periods to XML
        foreach ($periods as $period) {
            $periodItem = $defaults->addChild('item');
            $periodItem->addAttribute('name', 'period');
            $periodItem->addAttribute('value', htmlspecialchars($period));
            $periodItem->addAttribute('type', 'number');
        }

        // Add values to XML
        foreach ($values as $entry) {
            $valueItem = $defaults->addChild('item');
            $valueItem->addAttribute('name', 'value');
            $valueItem->addAttribute('value', htmlspecialchars($entry['value']));
            $valueItem->addAttribute('type', getSeriesType($entry['representation'])); // Use representation for type
        }
    }
}

// Clear any previous output and set the header to output XML
ob_clean();
header('Content-Type: application/xml');
echo $xml->asXML();

// Function to add CDATA
function addCdata($element, $data) {
    $dom = dom_import_simplexml($element);
    $cdata = $dom->ownerDocument->createCDATASection($data);
    $dom->appendChild($cdata);
}
?>
