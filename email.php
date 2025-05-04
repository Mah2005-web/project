<?php
$to = "saroj900008@gmail.com";           // Replace with recipient's email
$subject = "Test Email from PHP";        // Email subject
$message = "This is a test email sent from a PHP script.";  // Email body
$headers = "From: admin@aitpune.com";   // Replace with your email

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

