<?php
// Database connection parameters
$dbHost = "192.168.128.4";
$dbPort = "5432";
$dbName = "hisp_md";
$dbUser = "hispmddb";
$dbPassword = "hispmddb";

try {
    // Establish PostgreSQL database connection using PDO
    $pdo = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
