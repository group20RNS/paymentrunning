<!DOCTYPE html>
    <?php                
          include("dbcon.php");
                    
          session_start();
               
     
?>	
<html lang="en">
<head>
   
   <title>Login-Page</title>
   <link rel="stylesheet" href="Login.css">
</head>
<header>
   <h1>Login-Page</h1></header>
   <nav>
       <a href="#">Contact Us</a>

       <a href="Registration Form.php">Back</a>
      

       
       <a href="index.php">Home</a>
   </nav>
<body>
   <h3 style="color:red;"><center> USER WITH THIS EMAIL ALREADY EXIST PLEASE LOGIN</center></h3>
<div class="main">
<h3> Login to your account</h3>
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
<footer style="bottom:5px;position:absolute; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>

</footer>
</html>