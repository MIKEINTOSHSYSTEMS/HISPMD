<?php
$hardcodedPassword = 'hispmd@moh';

// Check password
if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Database connection details
$dbHost = '192.168.128.7';
$dbUser = 'hisp_md';
$dbPassword = 'hisp_md';
$dbName = 'hispmd_matomo';

// Docker container name
$containerName = 'hispmd_mariadb';

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

// Create a connection to the MySQL server (not the specific database)
$mysqli = new mysqli($dbHost, $dbUser, $dbPassword);

if ($mysqli->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Cannot connect to the database server.']);
    exit;
}

// Check if the database exists
$dbExistsQuery = "SHOW DATABASES LIKE '$dbName'";
$result = $mysqli->query($dbExistsQuery);

if ($result && $result->num_rows > 0) {
    // Database exists, drop it and recreate
    $dropCreateCommand = "mysql -h $dbHost -u $dbUser -p'$dbPassword' -e 'SET FOREIGN_KEY_CHECKS = 0; DROP DATABASE IF EXISTS $dbName; CREATE DATABASE $dbName; SET FOREIGN_KEY_CHECKS = 1;'";
    $command = "docker run --rm -i --network hispmd_sys_hispmdnet mysql:latest sh -c \"$dropCreateCommand\"";
    exec($command . ' 2>&1', $output, $return_var);

    if ($return_var !== 0) {
        echo json_encode(['success' => false, 'message' => 'Error dropping and recreating the database. Details: ' . implode("\n", $output)]);
        exit;
    }
} else {
    // Database does not exist, so we can directly create it
    $createDatabaseCommand = "mysql -h $dbHost -u $dbUser -p'$dbPassword' -e 'CREATE DATABASE $dbName;'";
    $command = "docker run --rm -i --network hispmd_sys_hispmdnet mysql:latest sh -c \"$createDatabaseCommand\"";
    exec($command . ' 2>&1', $output, $return_var);

    if ($return_var !== 0) {
        echo json_encode(['success' => false, 'message' => 'Error creating the database. Details: ' . implode("\n", $output)]);
        exit;
    }
}

// Copy the backup file to the Docker container
$copyBackupCommand = "docker cp $backupFilePath $containerName:/tmp/$backupFile";
exec($copyBackupCommand . ' 2>&1', $output, $return_var);

if ($return_var !== 0) {
    echo json_encode(['success' => false, 'message' => 'Error copying backup file to Docker container. Details: ' . implode("\n", $output)]);
    exit;
}

// Verify the file is in the container
$verifyFileCommand = "docker exec $containerName ls -l /tmp/$backupFile";
exec($verifyFileCommand . ' 2>&1', $output, $return_var);

if ($return_var !== 0) {
    echo json_encode(['success' => false, 'message' => 'Backup file not found inside Docker container. Details: ' . implode("\n", $output)]);
    exit;
}

// Restore the backup using the container's own MySQL client
$restoreCommand = "mariadb --user=$dbUser --password=$dbPassword --database=$dbName < /tmp/$backupFile";
$command = "docker exec $containerName sh -c \"$restoreCommand\"";
exec($command . ' 2>&1', $output, $return_var);

if ($return_var === 0) {
    echo json_encode(['success' => true, 'message' => "Backup successfully restored: $backupFilePath"]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error restoring backup. Details: ' . implode("\n", $output)]);
}

// Close the MySQL connection
$mysqli->close();
?>
