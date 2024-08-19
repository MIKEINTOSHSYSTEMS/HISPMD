<?php
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
if (!isset($_GET['file'])) {
    echo "No file specified.";
    exit;
}

$backupFile = basename($_GET['file']);
$backupFilePath = "$backupDir/$backupFile";

// Check if file exists
if (!file_exists($backupFilePath)) {
    echo "Backup file does not exist.";
    exit;
}

// Command to execute pg_restore inside the Docker container
$command = "docker exec -i $containerName sh -c \"PGPASSWORD='$dbPassword' pg_restore -h $dbHost -U $dbUser -d $dbName -v /tmp/$backupFile\" < $backupFilePath";

// Execute the command
$output = [];
$return_var = 0;
exec($command . ' 2>&1', $output, $return_var);

if ($return_var === 0) {
    echo "Backup successfully restored: $backupFilePath";
} else {
    echo "Error restoring backup. Details:\n";
    echo implode("\n", $output);
}
?>
