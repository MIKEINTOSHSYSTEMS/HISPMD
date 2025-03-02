<?php
include './settings/db_connection.php';

$testData = [
    'rows' => [
        [
            'Indicator' => 'Test Indicator',
            'Organisation Unit' => 'Test Unit',
            'Period' => '2023Q4',
            'Value' => 123.45
        ]
    ]
];

$ch = curl_init('./save_data.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($testData));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($ch);
echo "Response: " . $response;