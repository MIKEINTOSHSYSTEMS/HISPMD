<?php
$backupDir = './backup';
$backupFiles = array_diff(scandir($backupDir), array('.', '..'));

$backups = [];
foreach ($backupFiles as $file) {
    $filePath = "$backupDir/$file";
    $backups[] = [
        'name' => $file,
        'date' => filemtime($filePath),
        'size' => filesize($filePath)
    ];
}

if (isset($_GET['sort'])) {
    $sortField = $_GET['sort'];
    usort($backups, function ($a, $b) use ($sortField) {
        if ($sortField == 'name') {
            return strcmp($a['name'], $b['name']);
        } elseif ($sortField == 'date') {
            return $a['date'] - $b['date'];
        }
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Backups</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #00274c;
            color: #ffffff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #3a79db 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: right;
            display: inline;
            padding: 0 20px 0 20px;
        }
        .main {
            padding: 20px;
            background: #ffffff;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            cursor: pointer;
            background-color: #f2f2f2;
        }
        th.sorting {
            background-color: #e2e2e2;
        }
        button {
            background: #3a79db;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #e8491d;
        }
        .progress-container {
            width: 100%;
            background: #f2f2f2;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .progress-bar {
            width: 0%;
            height: 30px;
            background: #3a79db;
            text-align: center;
            color: #ffffff;
            line-height: 30px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .alert-success {
            background: #4caf50;
        }
        .alert-error {
            background: #f44336;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-database"></i> HISPMD Database Backups</h1>
            <ul>
                <li><button id="backupButton">Backup Now</button></li>
            </ul>
        </div>
    </header>
    <div class="container main">
        <h2>Available Backups</h2>
        <p>Total backups: <?php echo count($backups); ?></p>
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="alert alert-success">Backup successfully created: <?php echo htmlspecialchars($_GET['file']); ?></div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($_GET['message']); ?></div>
        <?php endif; ?>
        <div class="progress-container" id="progressContainer" style="display: none;">
            <div class="progress-bar" id="progressBar">0%</div>
        </div>
        <table>
            <thead>
                <tr>
                    <th><a href="?sort=name&order=asc">Backup Name <i class="fas fa-sort"></i></a></th>
                    <th><a href="?sort=date&order=asc">Date <i class="fas fa-sort"></i></a></th>
                    <th><a href="?sort=size&order=asc">Size <i class="fas fa-sort"></i></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($backups as $backup): ?>
                <tr>
                    <td><?php echo htmlspecialchars($backup['name']); ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $backup['date']); ?></td>
                    <td><?php echo round($backup['size'] / 1024, 2); ?> KB</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        document.getElementById('backupButton').addEventListener('click', function() {
            const progressBar = document.getElementById('progressBar');
            const progressContainer = document.getElementById('progressContainer');
            progressContainer.style.display = 'block';
            progressBar.style.width = '0%';
            progressBar.innerHTML = '0%';

            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'backup.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        window.location.href = 'index.php?status=success&file=' + encodeURIComponent(xhr.responseText);
                    } else {
                        window.location.href = 'index.php?status=error&message=' + encodeURIComponent(xhr.responseText);
                    }
                }
            };
            xhr.onprogress = function (event) {
                if (event.lengthComputable) {
                    const percentComplete = (event.loaded / event.total) * 100;
                    progressBar.style.width = percentComplete + '%';
                    progressBar.innerHTML = Math.round(percentComplete) + '%';
                }
            };
            xhr.send();
        });
    </script>
</body>
</html>
