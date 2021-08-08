<?php
            require 'includes/PHPMailer.php';
            require 'includes/SMTP.php';
            require 'includes/Exception.php';
          
           
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
           include("dbcon.php");  

           session_start();
                
         
           error_reporting(E_ERROR | E_WARNING | E_PARSE);
             if(isset($_POST['submit']) || isset($_POST['resend']))
              {
                $code=rand(100000,999999);
                $_SESSION['code']=$code;
                date_default_timezone_set('Asia/Kolkata');
                $accno=$_POST['accno'];
                $ifsc=$_POST['ifsc'];
                $ownername=$_POST['ownername'];
                $email= $_SESSION['email'];
                $amount=$_POST['amount'];
                $date=date("d M Y - h:i:s A");
                $_SESSION['accno']=$accno;
                $_SESSION['ifsc']=$ifsc;
                $_SESSION['ownername']=$ownername;
                $_SESSION['email']=$email;
                $_SESSION['date']=$date;
                $_SESSION['amount']=$amount;
                $to_email = $email;
                $subject = "Verification CODE.!!";
                $body = "Hi, The verification code for your transaction is : $code";
              
                $mail= new PHPMailer();

           $mail->isSMTP();
         $mail->Host="smtp.gmail.com";
           $mail->SMTPAuth="true";
           $mail->SMTPSecure = "tls";
           $mail->Port="587";
        $mail->Username="sachinbhat.cg@gmail.com";
       $mail->Password="S@c290760";
      $mail->Subject=$subjects;
        $mail->setFrom("sachinbhat.cg@gmail.com");
        $mail->isHTML(true);



 $mail->Body= $body;
 $mail->addAddress($email);//ksha330@gmail.com
 if($mail->Send()){
     echo "verify otp sent to mail";
    
    ?> <script>  window.location.href="otppage.php"; </script><?php
  } else {?>
                    <script>window.alert("Failed to sent OTP ..!!");
                     window.location.href="transfer.php";</script>
               <?php }
  }


if(isset($_POST['Submit'])){
  
    $accno=$_SESSION['accno'];
    $ifsc=$_SESSION['ifsc'];
    $ownername=$_SESSION['ownername'];
    $email=$_SESSION['email'];
    $date=$_SESSION['date'];
    $amount=$_SESSION['amount'];
    $otp=$_POST['otp'];
    $code=$_SESSION['code'];
if($otp==$code)
{
       $qry="INSERT INTO transactions(`accno`,`ifsc`,`ownername`,`amount`,`datetime`,`email`) VALUES
         ('$accno','$ifsc','$ownername','$amount','$date','$email');";
        $run=mysqli_query($conn,$qry);
       ?>
       <script>window.alert("Transaction Successful ..!!"); 
               window.location.href="profile.php";</script>
<?php
 }
else
{?> <script>window.alert("Enter the correct otp ..!!");
window.location.href="otppage.php";</script>
<?php
}
}

?>	

<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>OTP VERIFICATION</title>
    <link rel="stylesheet" href="Login.css">
</head>
<header>
    <h1>OTP Page</h1></header>

<body>
<br><br><br>
<br><br><br>
<div class="main">

<h3>OTP VERIFICATION</h3>
      <div class="container">   
        <h4>Enter the otp received </h4>
        <hr>
        <form method="POST" action="otppage.php" > 


            <label><b>OTP CODE :</b>  </label>   
            <input type="password" placeholder="Enter the otp " name="otp" required>  

            <input type="submit" class="btn" name="Submit" value="Submit">
          </form>  
          <!--<form action="otppage.php" method="POST">
          <input type="submit" class="btn" name="resend" value="Resend OTP">
        </form>-->
        </div>   
    </div>
</body>


<footer style="bottom:5px;position:absolute; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</div>
</html>