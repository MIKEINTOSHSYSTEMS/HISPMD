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

// Connect to the PostgreSQL database (newly created)
$connString = "host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$conn = pg_connect($connString);

if (!$conn) {
    echo json_encode(['success' => false, 'message' => 'Failed to connect to PostgreSQL database']);
    exit;
}

// Drop all tables and other objects in the public schema
$query = "DROP SCHEMA IF EXISTS public CASCADE; CREATE SCHEMA public;";
$result = pg_query($conn, $query);

if (!$result) {
    echo json_encode(['success' => false, 'message' => 'Error dropping schema. Details: ' . pg_last_error($conn)]);
    pg_close($conn);
    exit;
}

// Ensure pg_restore command is correct
// Specify the host explicitly with the -h option
// Pass the password via PGPASSWORD environment variable

$restoreCommand = "PGPASSWORD='$dbPassword' pg_restore -h $dbHost -U $dbUser -d $dbName -v $backupFilePath";

// Provide the full path to pg_restore, if necessary
$fullPathRestoreCommand = "PGPASSWORD='$dbPassword' /usr/bin/pg_restore -h $dbHost -U $dbUser -d $dbName -v $backupFilePath";  // Adjust to where pg_restore is located on your system

// Execute the restore command with shell_exec
$restoreResult = shell_exec($fullPathRestoreCommand . ' 2>&1');

// Capture the output for debugging
if ($restoreResult === null) {
    echo json_encode(['success' => false, 'message' => 'Error executing restore command']);
    pg_close($conn);
    exit;
}

// Check for errors in the restore process
if (strpos($restoreResult, 'error') !== false || strpos($restoreResult, 'failed') !== false) {
    echo json_encode(['success' => false, 'message' => 'Restore failed. Details: ' . $restoreResult]);
    pg_close($conn);
    exit;
}

echo json_encode(['success' => true, 'message' => "Backup successfully restored: $backupFilePath"]);

// Close the PostgreSQL connection
pg_close($conn);


// at line  35 
// we removed the line
/*
// Drop the existing database
$dropDbCommand = "PGPASSWORD='$dbPassword' psql -h $dbHost -U $dbUser -d postgres -c 'DROP DATABASE IF EXISTS $dbName;'";
$dropDbOutput = shell_exec($dropDbCommand . ' 2>&1');

if (strpos($dropDbOutput, 'ERROR') !== false) {
    echo json_encode(['success' => false, 'message' => 'Error dropping database. Details: ' . $dropDbOutput]);
    exit;
}

// Recreate the database
$createDbCommand = "PGPASSWORD='$dbPassword' psql -h $dbHost -U $dbUser -d postgres -c 'CREATE DATABASE $dbName;'";
$createDbOutput = shell_exec($createDbCommand . ' 2>&1');

if (strpos($createDbOutput, 'ERROR') !== false) {
    echo json_encode(['success' => false, 'message' => 'Error creating database. Details: ' . $createDbOutput]);
    exit;
}
*/
