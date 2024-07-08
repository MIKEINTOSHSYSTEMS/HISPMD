<?php

function fetchData($pageNumber, $showPerPage) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://mfr-be.k8s.sandboxaddis.com/api/Facility/GetFacilities',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "pageNumber" => $pageNumber,
            "showPerPage" => $showPerPage
        )),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json, text/plain, */*',
            'Accept-Language: en-US,en;q=0.9',
            'sec-ch-ua-platform: "Windows"',
            'Cache-Control: no-cache',
            'Content-Length: 33',
            'Content-Type: application/json',
            'Origin: https://mfrv2.moh.gov.et',
            'Pragma: no-cache',
            'Referer: https://mfrv2.moh.gov.et/',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Microsoft Edge";v="126"',
            'sec-ch-ua-mobile: ?0'
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

$data = fetchData($pageNumber, $showPerPage);

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
    </form>

    <table>
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
        <?php foreach ($data['model'] as $facility): ?>
        <tr>
            <td><?php echo htmlspecialchars($facility['id']); ?></td>
            <td><?php echo htmlspecialchars(trim($facility['name'])); ?></td>
            <td><?php echo htmlspecialchars($facility['status']); ?></td>
            <td><?php echo htmlspecialchars($facility['operationalStatus']); ?></td>
            <td><?php echo htmlspecialchars($facility['facilityType']); ?></td>
            <td><?php echo htmlspecialchars($facility['parentFacilityType']); ?></td>
            <td><?php echo htmlspecialchars($facility['region']); ?></td>
            <td><?php echo htmlspecialchars($facility['zone']); ?></td>
            <td><?php echo htmlspecialchars($facility['woreda']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div>
        <p>Page <?php echo $pageNumber; ?> of <?php echo $totalPages; ?></p>
        <?php if ($pageNumber > 1): ?>
            <a href="?page=<?php echo $pageNumber - 1; ?>&showPerPage=<?php echo $showPerPage; ?>">Previous</a>
        <?php endif; ?>
        <?php if ($pageNumber < $totalPages): ?>
            <a href="?page=<?php echo $pageNumber + 1; ?>&showPerPage=<?php echo $showPerPage; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>
</html>