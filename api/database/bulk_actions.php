<?php
// Database connection details
// Database connection details (if needed for other operations)
// $dbHost = '192.168.128.4';
// $dbUser = 'hispmddb';
// $dbPassword = 'hispmddb';
// $dbName = 'hisp_md';
$backupDir = './backups';

// Check if action and backups are set
if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['backups'])) {
    $backupsToDelete = $_POST['backups'];

    foreach ($backupsToDelete as $backupName) {
        $filePath = "$backupDir/" . basename($backupName);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    header("Location: mb.php?msg=deleted");
    exit();
}

header("Location: mb.php");
exit();
