<?php


require "config/connection.php";
include 'config/config1.php';
    require "vendor/autoload.php";
    require "config-cloud.php";
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
  
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $var_file_path1="C:\\xampp\htdocs\project\story_share";
    $var_file_path2="C:\\xampp\htdocs\project\story_share";
    $message='';
   $cloud_path1="https://res.cloudinary.com/sachinbisgod/image/upload/";
   $cloud_path2="https://res.cloudinary.com/sachinbisgod/image/upload/";
    $names1='';////to store publicid name
    $names2='';//to store publicid name


    if(isset($_POST['back']))//onclick returns to
    {
header("Location:C:/xampp/htdocs/project/contact_form.php");
    }
    else{



        if(isset($_POST['form_name'])){
             $subjects="FROM share_your_story.PHP";//subject of mail
        if(isset($_POST['form_name'])){
            $usname=$_POST['form_name'];
            $message.='<h5><b>NAME:</b> '.$usname.'</h5>';
            $message.='<br>';
        }
        if(isset($_POST['form_email'])){
            $umail=$_POST['form_email'];
            $message.='<h5><b>MAIL-ID:</b> '.$umail.'</h5>';
            $message.='<br>';
        }
        if(isset($_POST['form_phone'])){
            $phone=$_POST['form_phone'];
            $message.='<h4><b>CONTACT:</b> '.$phone.'</h4>';
            $message.='<br>';
        }
        if(isset($_POST['select_topic'])){
            $select_topic=$_POST['select_topic'];
            $message.='<h4><b>Topic</b> '.$select_topic.'</h4>';
            $message.='<br>';
        }
        if(isset($_POST['select_category'])){
            $select_category=$_POST['select_topic'];
            $message.='<h4><b>Category:</b> '.$select_category.'</h4>';
            $message.='<br>';
        }


        if(isset($_POST['form_message'])){
            $messages=$_POST['form_message'];
            $message.='<h5><b>MESSAGE: </b>'.$messages.'</h5>';
            $message.='<br>';
        }

      

$file1=$_FILES['file1']['name'];
$ext1 = pathinfo($file1, PATHINFO_EXTENSION);  
    
// Get filename without extesion
$filename_without_ext1 = basename($file1, '.'.$ext1);
// Generate new filename
$new_filename1 =$usname.'_'.'storyshare'.'_'.str_replace(' ', '_', $filename_without_ext1) .'.'. $ext1; 

$var_file_path1.="\\".$new_filename1;
$temploc1=$_FILES['file1']['tmp_name'];
$filestore1="story_share/".$new_filename1;


$names1.=$usname.'_'.'storyshare'.'_'.str_replace(' ', '_', $filename_without_ext1);

$path1.=$usname.'_'.'storyshare'.'_'.str_replace(' ', '_', $filename_without_ext1);



//move_uploaded_file(,$filestore1);

$ct=\Cloudinary\Uploader::upload($temploc1,array("public_id"=>$names1));


    $file2=$_FILES['file2']['name'];
$ext2 = pathinfo($file2, PATHINFO_EXTENSION);  
    
// Get filename without extesion
$filename_without_ext2 = basename($file2, '.'.$ext2);
// Generate new filename
$new_filename2 =$usname.'_'.'story_image'.'_'.str_replace(' ', '_', $filename_without_ext2) .'.'. $ext2; 
$var_file_path2="C:\\xampp\htdocs\project\story_share";
$var_file_path2.="\\".$new_filename2;
$temploc2=$_FILES['file2']['tmp_name'];
$filestore2="story_share/".$new_filename2;


$names2.=$usname.'_'.'story_image'.'_'.str_replace(' ', '_', $filename_without_ext2);



echo 'names 2 is: '.$names2.$ext2;
//move_uploaded_file(,$filestore2);

  $ct2= \Cloudinary\Uploader::upload($temploc2,array("public_id"=>$names2));
    
   

//$var1="https://res.cloudinary.com/sachinbisgod/image/upload/".;
$message.='<h4><b>STORY-PDF-URL</b>:'.$ct['url'].'</h4><br>';
//$var2="https://res.cloudinary.com/sachinbisgod/image/upload/".$ct2['url'];;
$message.='<h4><b>STORY-IMAGE-URL</b>:'.$ct2['url'].'</h4><br>';



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



 $mail->Body= $message;
 $mail->addAddress("helpline.oct@gmail.com");//ksha330@gmail.com
 if($mail->Send()){
     echo "THANK YOU FOR CONTACTING US WE WILL REACH YOU SOON";
 header('Location:share_your_story.php?success=2');
 echo $ct['url'];
    }
 else{
     echo "error";
 }
 
 $mail->smtpClose();
}}
 ?>
 <html>
 <a href="share_your_story.php" ><button > back to join page</button></a>
 </html>

