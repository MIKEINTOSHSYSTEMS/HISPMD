<?php

// Function to fetch data from a given URL using cURL
function fetchDataFromApi($url) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Error:' . curl_error($curl);
        return null;
    }

    curl_close($curl);
    return json_decode($response, true);
}

// Fetch filters data from respective APIs
$status = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/lookup?name=Status')['model'];
$operationalStatuses = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/lookup?name=OperationalStatus')['model'];
$facilityTypes = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/lookup/GetFacilityType')['model'];
$regions = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/location/Regions')['model'];
$zones = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/location/Zones')['model'];
$woredas = fetchDataFromApi('https://mfr-be.k8s.sandboxaddis.com/api/location/Woredas')['model'];

// Function to fetch facilities data with filters
function fetchFacilitiesData($pageNumber, $showPerPage, $filters) {
    $curl = curl_init();

    $postData = array(
        "pageNumber" => $pageNumber,
        "showPerPage" => $showPerPage
    );

    // Use IDs for filters
    $filterMappings = array(
        'status' => 'statusId',
        'operationalStatus' => 'operationalStatusId',
        'facilityType' => 'facilityTypeId',
        'parentFacilityType' => 'parentFacilityTypeId',
        'region' => 'regionId',
        'zone' => 'zoneId',
        'woreda' => 'woredaId'
    );

    foreach ($filters as $key => $value) {
        if (!empty($value)) {
            $postData[$filterMappings[$key]] = $value;
        }
    }

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://mfr-be.k8s.sandboxaddis.com/api/Facility/GetFacilities',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($postData),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json, text/plain, */*',
            'Content-Type: application/json',
            'Origin: https://mfrv2.moh.gov.et',
            'Referer: https://mfrv2.moh.gov.et/',
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Error:' . curl_error($curl);
        return null;
    }

    curl_close($curl);
    return json_decode($response, true);
}

$pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$showPerPage = isset($_GET['showPerPage']) ? (int)$_GET['showPerPage'] : 20;

$filters = array(
    "status" => isset($_GET['status']) ? $_GET['status'] : '',
    "operationalStatus" => isset($_GET['operationalStatus']) ? $_GET['operationalStatus'] : '',
    "facilityType" => isset($_GET['facilityType']) ? $_GET['facilityType'] : '',
    "parentFacilityType" => isset($_GET['parentFacilityType']) ? $_GET['parentFacilityType'] : '',
    "region" => isset($_GET['region']) ? $_GET['region'] : '',
    "zone" => isset($_GET['zone']) ? $_GET['zone'] : '',
    "woreda" => isset($_GET['woreda']) ? $_GET['woreda'] : ''
);

$data = fetchFacilitiesData($pageNumber, $showPerPage, $filters);

if ($data === null) {
    exit('Failed to fetch data.');
}

$totalCount = $data['model'][0]['totalCount'];
$totalPages = $data['model'][0]['pageCount'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Facility List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Facility List</h1>
    <form method="GET" action="">
        <label for="showPerPage">Rows per page:</label>
        <select id="showPerPage" name="showPerPage" onchange="this.form.submit()">
            <option value="10" <?php if ($showPerPage == 10) echo 'selected'; ?>>10</option>
            <option value="20" <?php if ($showPerPage == 20) echo 'selected'; ?>>20</option>
            <option value="50" <?php if ($showPerPage == 50) echo 'selected'; ?>>50</option>
            <option value="100" <?php if ($showPerPage == 100) echo 'selected'; ?>>100</option>
        </select>
        
        <label for="status">Status:</label>
        <select id="status" name="status" onchange="this.form.submit()">
            <option value="">All</option>
            <?php foreach ($status as $statusItem): ?>
                <option value="<?php echo htmlspecialchars($statusItem['code']); ?>" <?php if ($filters['status'] == $statusItem['code']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($statusItem['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <label for="operationalStatus">Operational Status:</label>
        <select id="operationalStatus" name="operationalStatus" onchange="this.form.submit()">
            <option value="">All</option>
            <?php foreach ($operationalStatuses as $operationalstatusItem): ?>
                <option value="<?php echo htmlspecialchars($operationalstatusItem['code']); ?>" <?php if ($filters['operationalStatus'] == $operationalstatusItem['code']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($operationalstatusItem['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="facilityType">Facility Type:</label>
        <select id="facilityType" name="facilityType" onchange="this.form.submit()">
            <option value="">All</option>
            <?php foreach ($facilityTypes as $type): ?>
                <option value="<?php echo htmlspecialchars($type['id']); ?>" <?php if ($filters['facilityType'] == $type['id']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($type['name']); ?>
                </option>
                <?php foreach ($type['childFacilityTypes'] as $childType): ?>
                    <option value="<?php echo htmlspecialchars($childType['id']); ?>" <?php if ($filters['facilityType'] == $childType['id']) echo 'selected'; ?>>
                        &emsp;<?php echo htmlspecialchars($childType['name']); ?>
                    </option>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </select>

        <label for="parentFacilityType">Parent Facility Type:</label>
        <select id="parentFacilityType" name="parentFacilityType" onchange="this.form.submit()">
            <option value="">All</option>
            <?php foreach ($facilityTypes as $type): ?>
                <option value="<?php echo htmlspecialchars($type['id']); ?>" <?php if ($filters['parentFacilityType'] == $type['id']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($type['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="region">Region:</label>
        <select id="region" name="region" onchange="updateZones()">
            <option value="">All</option>
            <?php foreach ($regions as $region): ?>
                <option value="<?php echo htmlspecialchars($region['id']); ?>" <?php if ($filters['region'] == $region['id']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($region['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="zone">Zone:</label>
        <select id="zone" name="zone" onchange="updateWoredas()">
            <option value="">All</option>
        </select>

        <label for="woreda">Woreda:</label>
        <select id="woreda" name="woreda">
            <option value="">All</option>
        </select>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Operational Status</th>
                <th>Facility Type</th>
                <th>Parent Facility Type</th>
                <th>Region</th>
                <th>Zone</th>
                <th>Woreda</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['model'] as $facility): ?>
                <tr>
                    <td><?php echo htmlspecialchars($facility['id']); ?></td>
                    <td><?php echo htmlspecialchars($facility['name']); ?></td>
                    <td><?php echo htmlspecialchars($facility['status']); ?></td>
                    <td><?php echo htmlspecialchars($facility['operationalStatus']); ?></td>
                    <td><?php echo htmlspecialchars($facility['facilityType']); ?></td>
                    <td><?php echo htmlspecialchars($facility['parentFacilityType']); ?></td>
                    <td><?php echo htmlspecialchars($facility['region']); ?></td>
                    <td><?php echo htmlspecialchars($facility['zone']); ?></td>
                    <td><?php echo htmlspecialchars($facility['woreda']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>&showPerPage=<?php echo $showPerPage; ?>&status=<?php echo urlencode($filters['status']); ?>&operationalStatus=<?php echo urlencode($filters['operationalStatus']); ?>&facilityType=<?php echo urlencode($filters['facilityType']); ?>&parentFacilityType=<?php echo urlencode($filters['parentFacilityType']); ?>&region=<?php echo urlencode($filters['region']); ?>&zone=<?php echo urlencode($filters['zone']); ?>&woreda=<?php echo urlencode($filters['woreda']); ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>

    <script>
        var zones = <?php echo json_encode($zones); ?>;
        var woredas = <?php echo json_encode($woredas); ?>;

        function updateZones() {
            var regionId = document.getElementById('region').value;
            var zoneSelect = document.getElementById('zone');
            var woredasSelect = document.getElementById('woreda');

            zoneSelect.innerHTML = '<option value="">All</option>';
            woredasSelect.innerHTML = '<option value="">All</option>';

            if (regionId) {
                zones.forEach(function(zone) {
                    if (zone.regionId == regionId) {
                        var option = document.createElement('option');
                        option.value = zone.id;
                        option.text = zone.name;
                        zoneSelect.add(option);
                    }
                });
            }

            updateWoredas();
        }

        function updateWoredas() {
            var zoneId = document.getElementById('zone').value;
            var woredasSelect = document.getElementById('woreda');

            woredasSelect.innerHTML = '<option value="">All</option>';

            if (zoneId) {
                woredas.forEach(function(woreda) {
                    if (woreda.zoneId == zoneId) {
                        var option = document.createElement('option');
                        option.value = woreda.id;
                        option.text = woreda.name;
                        woredasSelect.add(option);
                    }
                });
            }
        }

        // Initialize dropdowns
        updateZones();
    </script>
</body>
</html>
