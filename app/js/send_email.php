<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.wanfiberafrica.co.ke'; // Replace with your SMTP server hostname
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@wanfiberafrica.co.ke'; // SMTP username
    $mail->Password   = 'Shencrayz@123'; // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 465; // TCP port to connect to

    // Recipients
    $mail->setFrom('your_email@example.com', 'Your Name'); // Sender's email address and name
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Recipient's email address and name

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of your email';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the plain text version of the email body';

    // Send email0743123489
    $mail->send();
    echo 'Email has been sent successfully';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
First name:
Last name:
Email:
Phone number:
Comment section:
