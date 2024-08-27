<?php

$hardcodedPassword = 'hispmd@moh';

if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

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
?>