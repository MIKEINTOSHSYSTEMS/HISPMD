<?php
$hardcodedPassword = 'hispmd@moh';

// Check password
if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Database connection details
$dbHost = '192.168.128.4';
$dbUser = 'hispmddb';
$dbPassword = 'hispmddb';
$dbName = 'hisp_md';

// Docker container name
$containerName = 'hispmd_postgres';

// Directory to store backups
$backupDir = './backup';

// Check if file parameter is set
if (!isset($_POST['file'])) {
    echo json_encode(['success' => false, 'message' => 'No file specified.']);
    exit;
}

$backupFile = basename($_POST['file']);
$backupFilePath = "$backupDir/$backupFile";

// Check if file exists
if (!file_exists($backupFilePath)) {
    echo json_encode(['success' => false, 'message' => 'Backup file does not exist.']);
    exit;
}

// Ensure the database exists; if not, create it
$checkDbCommand = "docker exec -i $containerName sh -c \"PGPASSWORD='$dbPassword' psql -h $dbHost -U $dbUser -tAc 'SELECT 1 FROM pg_database WHERE datname = \"$dbName\"'\"";
exec($checkDbCommand, $output, $return_var);

// If the database doesn't exist, create it
if ($return_var !== 0 || empty($output)) {
    $createDbCommand = "docker exec -i $containerName sh -c \"PGPASSWORD='$dbPassword' psql -h $dbHost -U $dbUser -c 'CREATE DATABASE $dbName;'\"";
    exec($createDbCommand, $output, $return_var);
    if ($return_var !== 0) {
        echo json_encode(['success' => false, 'message' => 'Error creating database. Details: ' . implode("\n", $output)]);
        exit;
    }
}

// Drop all tables and other objects in the public schema (clean restore)
$dropAllCommand = "docker exec -i $containerName sh -c \"PGPASSWORD='$dbPassword' psql -h $dbHost -U $dbUser -d $dbName -c 'DROP SCHEMA IF EXISTS public CASCADE; CREATE SCHEMA public;'\"";
exec($dropAllCommand . ' 2>&1', $output, $return_var);

if ($return_var !== 0) {
    echo json_encode(['success' => false, 'message' => 'Error dropping schema. Details: ' . implode("\n", $output)]);
    exit;
}

// Copy the backup file to the Docker container
$copyBackupCommand = "docker cp $backupFilePath $containerName:/tmp/$backupFile";
exec($copyBackupCommand . ' 2>&1', $output, $return_var);

if ($return_var !== 0) {
    echo json_encode(['success' => false, 'message' => 'Error copying backup file to Docker container. Details: ' . implode("\n", $output)]);
    exit;
}

// Restore the backup
$restoreCommand = "docker exec -i $containerName sh -c \"PGPASSWORD='$dbPassword' pg_restore -h $dbHost -U $dbUser -d $dbName -v /tmp/$backupFile\"";
exec($restoreCommand . ' 2>&1', $output, $return_var);

if ($return_var === 0) {
    echo json_encode(['success' => true, 'message' => "Backup successfully restored: $backupFilePath"]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error restoring backup. Details: ' . implode("\n", $output)]);
}
?>
