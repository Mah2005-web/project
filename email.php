<?php
$to = "saroj900008@gmail.com"; // Replace with recipient's email
$subject = "Test Email from PHP";
$message = "This is a test email sent from a PHP script.";

// Sender info
$senderName = "John Doe";
$senderEmail = "admin@aitpune.com";

// Set content-type header for UTF-8 and HTML email if needed
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

// Add From header with custom name
$headers .= "From: {$senderName} <{$senderEmail}>" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
