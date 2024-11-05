<?php
// Database connection details
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

// Sorting
$sortField = isset($_GET['sort']) ? $_GET['sort'] : 'date';
$sortOrder = isset($_GET['order']) ? $_GET['order'] : 'desc';

usort($backups, function ($a, $b) use ($sortField, $sortOrder) {
    $cmp = 0;
    if ($sortField == 'name') {
        $cmp = strcmp($a['name'], $b['name']);
    } elseif ($sortField == 'date') {
        $cmp = $a['date'] - $b['date'];
    } elseif ($sortField == 'size') {
        $cmp = $a['size'] - $b['size'];
    }
    return $sortOrder == 'asc' ? $cmp : -$cmp;
});

// Pagination
$perPage = 5;
$totalBackups = count($backups);
$totalPages = ceil($totalBackups / $perPage);
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages));
$offset = ($currentPage - 1) * $perPage;
$pagedBackups = array_slice($backups, $offset, $perPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions Box Database Backups</title>
    <!-- Add Bootstrap CDN for styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv2ZfD/Qv6pkDZjfn6AwV5o0XaUqV6/x5z6eFvV6k5qyywz+M/HeTzM1C2f" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }
        header {
            background: #00274c;
            color: #ffffff;
            padding: 30px 0;
            border-bottom: 3px solid #3a79db;
        }
        header h1 {
            font-size: 28px;
            margin-bottom: 0;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            display: inline-block;
            padding: 0 20px;
        }
        .main {
            padding: 20px;
            background: #ffffff;
            margin-top: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-custom {
            background-color: #3a79db;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #e8491d;
        }
        .progress-container {
            width: 100%;
            background: #f2f2f2;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            display: none;
        }
        .progress-bar {
            width: 0%;
            height: 30px;
            text-align: center;
            color: #ffffff;
            line-height: 30px;
        }
        .pagination {
            margin-top: 20px;
            justify-content: center;
        }
        .pagination a {
            margin: 0 5px;
            padding: 10px 15px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            text-decoration: none;
        }
        .pagination a.active {
            background-color: #3a79db;
            color: #ffffff;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 15px;
            }
            .main {
                padding: 10px;
            }
            table, th, td {
                font-size: 14px;
            }
            .pagination a {
                padding: 8px 12px;
            }
            .btn-custom {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
        /* Table Responsiveness */
        @media (max-width: 576px) {
            table {
                font-size: 12px;
                overflow-x: auto;
                display: block;
            }
            th, td {
                white-space: nowrap;
            }
            .progress-container {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="text-center">
        <div class="container d-flex justify-content-between align-items-center">
            <h1><i class="fas fa-database"></i> HISPMD Suggestion Box Database Backups</h1>
            <ul class="d-flex list-unstyled mb-0">
                <li><button id="backupButton" class="btn btn-custom">Backup Now</button></li>
            </ul>
        </div>
    </header>

    <div class="container main">
        <div class="progress-container" id="progressContainer">
            <div class="progress-bar" id="progressBar">0%</div>
        </div>

        <h2>Available Backups</h2>
        <p>Total backups: <?php echo $totalBackups; ?></p>

        <form id="bulkActionForm" method="post" action="sgb_bulk_action.php">
            <div class="form-check">
                <?php foreach ($pagedBackups as $backup): ?>
                    <input type="checkbox" class="form-check-input" name="backups[]" value="<?php echo htmlspecialchars($backup['name']); ?>" id="backup-<?php echo htmlspecialchars($backup['name']); ?>">
                    <label class="form-check-label" for="backup-<?php echo htmlspecialchars($backup['name']); ?>">
                        <?php echo htmlspecialchars($backup['name']); ?>
                    </label><br>
                <?php endforeach; ?>
            </div>
            <button type="submit" name="action" value="delete" class="btn btn-danger mt-3" onclick="return confirmDelete();">Delete Selected</button>
        </form>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th><a href="?sort=name&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>">Backup Name <i class="fas fa-sort"></i></a></th>
                    <th><a href="?sort=date&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>">Date <i class="fas fa-sort"></i></a></th>
                    <th><a href="?sort=size&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>">Size <i class="fas fa-sort"></i></a></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="backupTable">
                <?php foreach ($pagedBackups as $backup): ?>
                <tr>
                    <td><?php echo htmlspecialchars($backup['name']); ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $backup['date']); ?></td>
                    <td><?php echo round($backup['size'] / 1024, 2); ?> KB</td>
                    <td>
                        <a href="#" onclick="return confirmRestore('<?php echo urlencode($backup['name']); ?>');">Restore</a> |
                        <a href="<?php echo $backupDir . '/' . urlencode($backup['name']); ?>" download onclick="return confirmDownload();">Download</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="pagination d-flex justify-content-center">
            <?php if ($currentPage > 1): ?>
                <a href="?page=<?php echo $currentPage - 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>" class="btn btn-outline-primary">« Prev</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>" class="btn btn-outline-primary <?php echo $i == $currentPage ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?php echo $currentPage + 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>" class="btn btn-outline-primary">Next »</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap and JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ysMNgojs6e3f8BzZa3sahW/ulhN1/p5f5uQRHZZF3k2BoL8AEBU7nVXtX2TxvM4v" crossorigin="anonymous"></script>
    <script>
        function confirmDownload() {
            return confirm('Are you sure you want to download this backup?');
        }

        function confirmRestore() {
            return confirm('Are you sure you want to restore this backup?');
        }

        function confirmDelete() {
            return confirm('Are you sure you want to DELETE this backup?');
        }

        function confirmDelete() {
            const password = prompt("Please enter your password to proceed with deleting the selected backups:");
            if (!password) return false;

            const form = document.getElementById('bulkActionForm');
            const passwordInput = document.createElement('input');
            passwordInput.type = 'hidden';
            passwordInput.name = 'password';
            passwordInput.value = password;
            form.appendChild(passwordInput);

            return true;
        }

        function confirmRestore(backupFile) {
            const password = prompt("Please enter your password to proceed with restoring the backup:");
            if (!password) return false;

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'sgb_restore.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                const response = JSON.parse(xhr.responseText);
                if (xhr.status === 200 && response.success) {
                    alert('Backup restored successfully: ' + backupFile);
                    // Optionally, update the UI to reflect the changes
                    window.location.reload(); // Refresh the page to show the updated backup list
                } else {
                    alert('Failed to restore backup: ' + response.message);
                }
            };
            xhr.onerror = function () {
                alert('Error occurred while restoring the backup.');
            };
            xhr.send('file=' + encodeURIComponent(backupFile) + '&password=' + encodeURIComponent(password));
            return false; // Prevent the default link behavior
        }
        
        // Backup button logic remains the same
        

        document.getElementById('backupButton').addEventListener('click', function() {
            const password = prompt("Please enter your password to proceed:");
            if (!password) return;

            const progressBar = document.getElementById('progressBar');
            const progressContainer = document.getElementById('progressContainer');

            progressContainer.style.display = 'block';
            progressBar.style.backgroundColor = '#3a79db';
            progressBar.style.width = '0%';
            progressBar.textContent = 'Starting backup...';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'sgb_backup.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        progressBar.style.width = '100%';
                        progressBar.textContent = 'Backup completed';
                        progressBar.style.backgroundColor = '#4caf50';

                        // Update the backup list
                        const newBackup = response.newBackup;
                        const backupList = document.getElementById('backupList');
                        const backupTable = document.getElementById('backupTable');

                        const backupHTML = `
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="backups[]" value="${newBackup.name}" id="backup-${newBackup.name}">
                                <label class="form-check-label" for="backup-${newBackup.name}">
                                    ${newBackup.name}
                                </label><br>
                            </div>`;
                        backupList.insertAdjacentHTML('afterbegin', backupHTML);

                        const rowHTML = `
                            <tr>
                                <td>${newBackup.name}</td>
                                <td>${newBackup.date}</td>
                                <td>${(newBackup.size / 1024).toFixed(2)} KB</td>
                                <td>
                                    <a href="sgb_restore.php?file=${encodeURIComponent(newBackup.name)}" onclick="return confirmRestore();">Restore</a> |
                                    <a href="${newBackup.path}" download onclick="return confirmDownload();">Download</a>
                                </td>
                            </tr>`;
                        backupTable.insertAdjacentHTML('afterbegin', rowHTML);

                    } else {
                        progressBar.style.width = '100%';
                        progressBar.textContent = 'Backup failed';
                        progressBar.style.backgroundColor = '#f44336';
                    }
                    setTimeout(() => {
                        progressContainer.style.display = 'none';
                    }, 2000);
                } else {
                    progressBar.style.width = '100%';
                    progressBar.textContent = 'Backup failed';
                    progressBar.style.backgroundColor = '#f44336';
                    setTimeout(() => {
                        progressContainer.style.display = 'none';
                    }, 2000);
                }
            };
            xhr.onerror = function () {
                progressBar.style.width = '100%';
                progressBar.textContent = 'Backup failed';
                progressBar.style.backgroundColor = '#f44336';
                setTimeout(() => {
                    progressContainer.style.display = 'none';
                }, 2000);
            };
            xhr.send('password=' + encodeURIComponent(password));
        });
    </script>
</body>
</html>

