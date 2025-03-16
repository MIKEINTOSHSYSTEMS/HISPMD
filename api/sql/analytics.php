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
$perPageOptions = [5, 10, 20, 50, 100, 'All'];
$perPage = isset($_GET['perPage']) && in_array($_GET['perPage'], $perPageOptions) ? $_GET['perPage'] : 5;
$perPage = $perPage === 'All' ? count($backups) : (int)$perPage;

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
    <title>Analytics Database Backups</title>
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
            display: none;
        }
        .progress-bar {
            width: 0%;
            height: 30px;
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
        .pagination {
            margin-top: 20px;
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
        .checkbox-container {
            margin-bottom: 20px;
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
                /* Add this CSS for the new dropdown and "Select All" checkbox */
        .per-page-selector {
            margin-bottom: 20px;
        }
        .per-page-selector label {
            margin-right: 10px;
        }
        .select-all-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-database"></i> HISPMD Matomo Analytics Database Backups</h1>
            <ul>
                <li><button id="backupButton">Backup Now</button></li>
            </ul>
        </div>
    </header>
    <div class="container main">
        <div class="progress-container" id="progressContainer">
            <div class="progress-bar" id="progressBar">0%</div>
        </div>
        <h2>Available Backups</h2>
        <p>Total backups: <?php echo $totalBackups; ?></p>
                <!-- Per Page Selector -->
        <div class="per-page-selector">
            <label for="perPage">Backups per page:</label>
            <select id="perPage" onchange="updatePerPage(this.value)">
                <?php foreach ($perPageOptions as $option): ?>
                    <option value="<?php echo $option; ?>" <?php echo $perPage == $option ? 'selected' : ''; ?>>
                        <?php echo $option; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Select All Checkbox -->
        <div class="select-all-container">
            <label>
                <input type="checkbox" id="selectAll" onclick="toggleSelectAll()"> Select All
            </label>
        </div>
<form id="bulkActionForm" method="post" action="analytics_bulk_action.php">
    <div class="checkbox-container" id="backupList">
        <?php foreach ($pagedBackups as $backup): ?>
        <label>
            <input type="checkbox" name="backups[]" value="<?php echo htmlspecialchars($backup['name']); ?>">
            <?php echo htmlspecialchars($backup['name']); ?>
        </label><br>
        <?php endforeach; ?>
    </div>
    <button type="submit" name="action" value="delete" onclick="return confirmDelete();">Delete Selected</button>
</form>
        <!-- Backup Table -->
        <table>
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

        <!-- Pagination -->
        <div class="pagination">
            <?php if ($currentPage > 1): ?>
                <a href="?page=<?php echo $currentPage - 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>">« Prev</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>" class="<?php echo $i == $currentPage ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?php echo $currentPage + 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>">Next »</a>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Function to update the number of backups per page
        function updatePerPage(perPage) {
            const url = new URL(window.location.href);
            url.searchParams.set('perPage', perPage);
            window.location.href = url.toString();
        }

        // Function to toggle "Select All" checkboxes
        function toggleSelectAll() {
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('#backupList input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        }
                
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
    xhr.open('POST', 'analytics_restore.php', true);
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
    xhr.open('POST', 'analytics_backup.php', true);
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
                    <label>
                        <input type="checkbox" name="backups[]" value="${newBackup.name}">
                        ${newBackup.name}
                    </label><br>`;
                backupList.insertAdjacentHTML('afterbegin', backupHTML);

                const rowHTML = `
                    <tr>
                        <td>${newBackup.name}</td>
                        <td>${newBackup.date}</td>
                        <td>${(newBackup.size / 1024).toFixed(2)} KB</td>
                        <td>
                            <a href="analytics_restore.php?file=${encodeURIComponent(newBackup.name)}" onclick="return confirmRestore();">Restore</a> |
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
