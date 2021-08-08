<!DOCTYPE html>
<?php
                    
          include("dbcon.php");
                    
          session_start();
               
     
?>	

<html lang="en">
<head>
  <!--<a id="grad"></a>-->
    <title>Registration-Page</title>
    <link rel="stylesheet" href="Registration Form.css">
</head>
    <header>
        <h1>Registration From</h1></header>
    <nav>
        <a href="#">Contact Us</a>
        <a href="Login.php">Login</a>
        <a href="index.php">Home</a>
    </nav>
 
<body>
 <div class="main">
 <h3>Create a new account</h3>
        <div class="container">  
        <h4>Enter your details</h4>
        <hr>
        <form action="signupcheck.php" method="POST"> 
        <label><b> Name: </b></label>   
      <input type="text" id="name" name="name" placeholder= "Enter your full name" size="30" required />   
    
      <label>   
     <b> Gender :  </b>
      </label><br>  <br>
      <input type="radio" value="Male" name="gender"  id="gender"> Male   
      <input type="radio" value="Female" name="gender" id="gender"> Female   
      <input type="radio" value="Other" name="gender" id="gender"> Other   
       <br><br>

    
     <label>   
   <b>   Mobile :  </b>
      </label>  
     <input type="number"  id="mobile" name="mobile" placeholder="Enter your mobile no" size="10" required>   
    
     
    
        <label>
        <b> Current Address : </b> 
    </label> 
      <textarea cols="80" rows="5"  name="addr" placeholder="Enter your current Address" value="addr" required>  
      </textarea>  
    
         <label>
          <b>Email:</b> 
        </label>  
       <input type="email"  id="email" placeholder="Enter your email" name="email" required>  
    
        
          <label><b>Password:</b></label>  
          <input type="password"  id="password" placeholder="Enter Password" name="password" required>  
        



          <input type="submit" class="btn" name="submit" placeholder="Register">  
      </form> 
      </div>
      </div>
   
</body>
 <footer >
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</html>