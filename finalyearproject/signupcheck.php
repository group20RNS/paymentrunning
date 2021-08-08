
<?php
                    
          include("dbcon.php");
                    
          session_start();
               
        $salt =md5('io!#asdf');
    function hashword($string,$salt)
       {
            $string=crypt($string,'$1$'.$salt.'$');
            return $string;
        }
        
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{
	
        $name=$_POST['name'];
		$gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $addr=$_POST['addr'];
        $email=$_POST['email'];
    $password=$_POST['password'];
    
		$qry1="select email from user where email='$email';";
        $run1=mysqli_query($conn,$qry1);
        $row1=mysqli_num_rows($run1);
        
		if($row1==0){
            
            
            $password=hashword($password,$salt);
            $qry="INSERT INTO user(`name`,`gender`,`mobile`,`addr`,`email`,`password`) VALUES ('$name','$gender','$mobile','$addr','$email','$password');";
            $run=mysqli_query($conn,$qry);
            $_SESSION['f']=1;   
            header('Location:Successful Registration.php');
               
               exit();
        }
            else
            {
                $_SESSION['f']=0;
                header('Location:USEREXIST.php');
            exit();
        
            }
        }
else
{
    echo "Failed To Connect";
}
?>	

