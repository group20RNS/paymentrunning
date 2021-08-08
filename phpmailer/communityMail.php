<?php
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    $mailid=$_GET['mailid'];
    $name=$_GET['mname'];
    $contact=$_GET['contact'];
    if(isset($_POST['back']))
    {
header("Location:C:/xampp/htdocs/project/community_contacts.php");
    }
    else{
        if(isset($_POST['submit'])){
    
        if(isset($_POST['uname'])){
            $usname=$_POST['uname'];
        }
        if(isset($_POST['umail'])){
            $umail=$_POST['umail'];
        }
        if(isset($_POST['subject'])){
            $subjects=$_POST['subject'];
        }
        if(isset($_POST['message'])){
            $message=$_POST['message'];
        }
    

    $mail= new PHPMailer();

    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth="true";
    $mail->SMTPSecure = "tls";
    $mail->Port="587";
 $mail->Username="testmailbisg@gmail.com";
 $mail->Password="Test@123@";
 $mail->Subject=$subjects;
 $mail->setFrom("bcs.oct@gmail.com");
 $mail->Body=$message;
 $mail->addAddress($mailid);
 if($mail->Send()){
     echo "sent";
 }
 else{
     echo "error";
 }

 $mail->smtpClose();
}}
 ?>
 <html>
 <form action="#" method="post">
 <input type="text" placeholder="ENTER YOUR NAME" name="uname">
 <br>
 <tr>
 </tr>
 <input type="text" placeholder="ENTER YOUR MAIL" name="umail">
 <br>
 <tr>
 </tr>
 <input type="text" placeholder="SUBJECT" name="subject">
 <br>
 <tr>
 </tr>
 <textarea name="message"> TYPE MESSAGE HERE==>></textarea>
 <input type="submit" name="submit" value="send" class="btn btn_wave_info">
 </form>
 <a href=" community_contacts.php" ><button > back to community page</button></a>