<?php
// Include the PHPMailer library if using it
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Retrieve form data
// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
$name = 'gigi';
$email = 'quotes@adddit.eu';
$message = 'test invio messaggio';

// Validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit();
}

// Construct email message
$subject = "Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Set sender and recipient email addresses
$senderEmail = "quotes@adddit.eu";
$recipientEmail = "mauro.fioravanzi@gmail.com";

// Send email using PHPMailer (optional)
$mail = new PHPMailer();
$mail->isSMTP();
// $mail->Host = 'your_smtp_host'; // Replace with your SMTP host
// $mail->SMTPAuth = true;
// $mail->Username = 'your_smtp_username'; // Replace with your SMTP username
// $mail->Password = 'your_smtp_password'; // Replace with your SMTP password
// $mail->SMTPSecure = 'tls'; // Or 'ssl' depending on your SMTP server
// $mail->Port = 587; // Or other port as needed

$mail->Host = 'smtps.aruba.it';
$mail->Port = 465;
$mail->Username   = "quotes@adddit.eu";
$mail->Password   = "Milan4ever!";

$mail->setFrom($senderEmail, 'ADDDIT');
$mail->addAddress($recipientEmail);
$mail->Subject = $subject;
$mail->Body = $body;

if (!$mail->send()) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent successfully.';
}
?>