<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    $mail->setFrom('mail@xino.in', 'XINO');
    $mail->addAddress('sayamkanwar616@gmail.com', 'Sayam Kanwar');     // Add a recipient
    $mail->addReplyTo('xino@dpsrohini.com', 'XINO');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Mail from PHPMailer';
    $mail->Body    = 'Test123 <b>lol</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>