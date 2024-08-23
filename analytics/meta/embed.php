<?php
include '../../vendor/autoload.php';

// The url of the metabase installation
$metabaseUrl = '[https://viz.hispmd.merqconsultancy.org]';
// The secret embed key from the admin settings screen
$metabaseKey = '[c7242586ae89ceb5c0dd2ecab564b09c9b4f2b6e78b1491c7e8271f3ba2aa6cd]';
// The id of the dashboard (from the url)
$dashboardId = 2;
// Any parameters to pass to the dashboard
//$params = ['date' => 'past26weeks'];

$metabase = new \Metabase\Embed($metabaseUrl, $metabaseKey);
// Generate the HTML to create an iframe with the embedded dashboard
echo $metabase->dashboardIframe($dashboardId, $params);
?>