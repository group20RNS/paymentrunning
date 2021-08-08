<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require "C:/xampp/htdocs/cloudinary/vendor/autoload.php";
require "C:/xampp/htdocs/cloudinary/config-cloud.php";
require "C:/xampp/htdocs/project/mailer/php-mailer-master/PHPMailerAutoload.php";

// Load Composer's autoloader


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   =TRUE;                                   // Enable SMTP authentication
    $mail->Username   = 'testmailbisg@gmail.com';                     // Your gmail address
    $mail->Password   = 'Test@123@';                               // Your gmail password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('testmailbisg@gmail.com', 'your_name');
    $mail->addAddress("sachinbhat.cg@gmail.com");

   //// $file_name = $_FILES["file"]["name"];
   // move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
   // $mail->addAttachment($file_name);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "cool";
    $mail->Body    ="jc";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}