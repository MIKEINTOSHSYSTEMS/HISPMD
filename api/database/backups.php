<?php
// Database connection details
$dbHost = '192.168.128.4';
$dbUser = 'hispmddb';
$dbPassword = 'hispmddb';
$dbName = 'hispmddb';

// Docker container name
$containerName = 'hispmd_postgres';

// Directory to store backups
$backupDir = './backups';
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0777, true); // Create directory if it doesn't exist
}

// Backup file name with timestamp
$backupFile = 'hispmddb_backup_' . date('Ymd_His') . '.sql';
$backupFilePath = "$backupDir/$backupFile";

// Command to execute pg_dump inside the Docker container
$command = "docker exec $containerName sh -c \"PGPASSWORD='$dbPassword' pg_dump -h $dbHost -U $dbUser -d $dbName -F c -b -v -f /tmp/$backupFile\" && docker cp $containerName:/tmp/$backupFile $backupFilePath";

// Execute the command
$output = [];
$return_var = 0;
exec($command . ' 2>&1', $output, $return_var);

if ($return_var === 0) {
    echo $backupFile;
} else {
    http_response_code(500);
    echo "Error creating backup. Details:\n" . implode("\n", $output);
}
?>
