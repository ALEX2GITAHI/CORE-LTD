<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['customerName']);
    $email = htmlspecialchars($_POST['customerEmail']);
    $subject = htmlspecialchars($_POST['contactSubject']);
    $message = htmlspecialchars($_POST['contactMessage']);

    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // Your Gmail
        $mail->Username   = 'alex.gtahi@gmail.com';

        // Replace with your Gmail App Password
        $mail->Password   = 'oddp uetv nrqe gdvf';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom('alex.gtahi@gmail.com', 'CORE LTD');

        // Receiver
        $mail->addAddress('alex.gtahi@gmail.com');

        // Allow Reply to the customer's email
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Website Contact: " . $subject;

        $mail->Body = "
        <h2>Website Contact Message</h2>

        <b>Name:</b> {$name}<br><br>

        <b>Email:</b> {$email}<br><br>

        <b>Subject:</b> {$subject}<br><br>

        <b>Message:</b><br>

        {$message}
        ";

        $mail->send();

        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location='contact.php';
              </script>";
    } catch (Exception $e) {

        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
