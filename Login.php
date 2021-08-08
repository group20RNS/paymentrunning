<!DOCTYPE html>
<html lang="en">
<?php
                    
                    include("dbcon.php");
                              
                    session_start();
                    $salt =md5('io!#asdf');
                    function hashword($string,$salt)
                       {
                            $string=crypt($string,'$1$'.$salt.'$');
                            return $string;
                        }   
               
          ?>	
          <?php
          
          if(isset($_POST['submit']))
              {
                  
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  $pass=hashword($password,$salt);
                  $qry="SELECT * FROM user WHERE email='$email' and password='$pass';";
                  $_SESSION['email']=$email;
                  $run=mysqli_query($conn,$qry);
                  $row=mysqli_num_rows($run);
         
                     if($row == 1)
                      {
          
                                          echo "login successfully";
                                          header('Location:profile.php'); 
                                          exit;
                      }
                      ?>
                       <h3 align="center" style="color:red">Incorrect Username/Password<h5 align="center">Login with right credentials</h5></h3>
                      <?php 
                  }     
                        
                else
                
                {
                    ?>
                   
                     <?php goto J;
                  
                }
              J : empty($_POST['submit']);    ?>
<head>
   
    <title>Login-Page</title>
    <link rel="stylesheet" href="Login.css">
</head>
<header>
    <h1>Login-Page</h1></header>
    <nav>
        <a href="#">Contact Us</a>

        <a href="Registration Form.php">Register</a>
        
        <a href="index.php">Home</a>
    </nav>
<body>
<br><br><br>
<br><br><br>
<div class="main">

<h3>Login to your account</h3>
      <div class="container">   
        <h4>Enter the login credentials</h4>
        <hr>
        <form action="Login.php" method="POST" > 

            <label><b>Username :</b>  </label>   
            <input type="text" placeholder="Enter your email" name="email" required> 

            <label><b>Password :</b>  </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  

            <input type="submit" class="btn" name="submit" value="Login">
            </form>  
        </div>   
    </div>
</body>


<footer style="bottom:1px;position:relative; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</div>
</html>