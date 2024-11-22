<?php
header('Content-Type: application/json');

// Simple bot protection
if (!empty($_POST['botField'])) {
    echo json_encode(['success' => false, 'message' => 'Bot detected']);
    exit;
}

// Validate input
$name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

// Email details
$to = 'chefjeremynolen@gmail.com'; // Replace with your email address
$subject = 'Savor Germany Contact Form Submission';
$headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

$body = "You have received a new message from your contact form:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message\n";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Unable to send email']);
}
?>
