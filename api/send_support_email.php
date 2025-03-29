<?php
header('Content-Type: application/json');

// Configure these values
$to = "support@merqconsultancy.org";
$subjectPrefix = "[HISPMD Support] ";

$data = json_decode(file_get_contents('php://input'), true);

// Validate required fields
$required = ['name', 'email', 'subject', 'message'];
foreach ($required as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Missing required field: $field"]);
        exit;
    }
}

// Build email message
$message = "New Support Ticket:\n\n";
$message .= "Name: " . $data['name'] . "\n";
$message .= "Email: " . $data['email'] . "\n";
$message .= "Organization: " . ($data['organization'] ?? 'N/A') . "\n";
$message .= "Position: " . ($data['position'] ?? 'N/A') . "\n";
$message .= "Phone: " . ($data['phone'] ?? 'N/A') . "\n";
$message .= "Priority: " . $data['priority'] . "\n\n";
$message .= "Message:\n" . $data['message'];

// Set headers
$headers = "From: " . $data['email'] . "\r\n";
$headers .= "Reply-To: " . $data['email'] . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subjectPrefix . $data['subject'], $message, $headers)) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to send email']);
}