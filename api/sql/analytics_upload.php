<?php
// Set headers to return JSON
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Verify password (replace 'your_password' with your actual password)
$password = $_POST['password'] ?? '';
if ($password !== 'hispmd@moh') { // Change this to your actual password
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Check if file was uploaded without errors
if (!isset($_FILES['backupFile']) || $_FILES['backupFile']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => 'File upload error']);
    exit;
}

$backupDir = './backup';
$fileName = basename($_FILES['backupFile']['name']);
$filePath = $backupDir . '/' . $fileName;

// Check if file already exists
if (file_exists($filePath)) {
    echo json_encode(['success' => false, 'message' => 'File already exists']);
    exit;
}

// Check file size (limit to 100MB)
$maxFileSize = 100 * 1024 * 1024; // 100MB
if ($_FILES['backupFile']['size'] > $maxFileSize) {
    echo json_encode(['success' => false, 'message' => 'File is too large (max 100MB)']);
    exit;
}

// Allowed file extensions
$allowedExtensions = ['sql', 'gz', 'zip', 'backup'];
$fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo json_encode(['success' => false, 'message' => 'Invalid file type. Allowed: .sql, .gz, .zip, .backup']);
    exit;
}

// Move the uploaded file to the backup directory
if (move_uploaded_file($_FILES['backupFile']['tmp_name'], $filePath)) {
    echo json_encode([
        'success' => true,
        'message' => 'File uploaded successfully',
        'fileInfo' => [
            'name' => $fileName,
            'size' => filesize($filePath),
            'date' => date('Y-m-d H:i:s', filemtime($filePath))
        ]
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to move uploaded file']);
}
?>