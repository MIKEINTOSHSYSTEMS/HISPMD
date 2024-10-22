<?php
// Disable any accidental script output
ob_start();

// API URL
$url = "https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=\$2y\$10\$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list";

// Fetch the JSON data from the API
$json = file_get_contents($url);
$data = json_decode($json, true);

// Create a new SimpleXMLElement for the root node
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><indicators></indicators>');

// Loop through each data entry and append to the XML
foreach ($data['data'] as $entry) {
    $indicator = $xml->addChild('indicator');

    // Add XML elements based on JSON data
    $indicator->addChild('Indicator_Group', htmlspecialchars($entry['Indicator Group']));
    $indicator->addChild('Indicator_Name', htmlspecialchars($entry['Indicator Name']));
    $indicator->addChild('Baseline', $entry['Baseline'] ?? '');
    $indicator->addChild('Target', $entry['Target'] ?? '');
    $indicator->addChild('Facility_Type', htmlspecialchars($entry['Facility Type'] ?? ''));
    $indicator->addChild('Indicator_Source', htmlspecialchars($entry['Data Source']));
    $indicator->addChild('Assessment', htmlspecialchars($entry['Assessment']));
    $indicator->addChild('Administration_Unit', htmlspecialchars($entry['Administration Unit'] ?? ''));
    $indicator->addChild('Year', htmlspecialchars($entry['Year']));
    $indicator->addChild('Scope', htmlspecialchars($entry['Scope']));
    $indicator->addChild('Region', htmlspecialchars($entry['Region'] ?? ''));
    $indicator->addChild('Sex', htmlspecialchars($entry['Gender/Sex'] ?? ''));
    $indicator->addChild('Value', htmlspecialchars($entry['Value']));
    $indicator->addChild('Indicator_Representation', htmlspecialchars($entry['Data Representation']));
}

// Clear any previous output and set the header to output XML
ob_clean();
header('Content-Type: application/xml');
echo $xml->asXML();
?>
