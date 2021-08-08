<!DOCTYPE html>


<html lang="en">
<head>
    <title>Transfer</title>
    <link rel="stylesheet" href="transfer.css">
</head>
    <header>
        <h1>Transfer To Anyone From Anywhere</h1></header>
    <nav>
        <a href="#">Contact Us</a>  
        <a href="login.php">Logout</a>
        <a href="profile.php">Back</a>
        <a href="transaction.php">Transactions</a>
        <a href="index.php">Home</a>
    </nav>
 
<body>
    <div class="main">
    <h3>Enter the Recipient Details</h3>
    <div class="container">
    <h4>Enter the account details</h4>
    <hr>
    <form method="POST" action="otppage.php">
    <label><b> Banck Account Number: </b></label>   
      <input type="text" name="accno" placeholder= "Enter the bank account number" pattern="[0-9]{12}" title=" please enter 12 digit Account no. in proper format..!!!" required />   
      <label><b> IFSC Code:</b> </label>    
      <input type="text"  name="ifsc" placeholder="Enter the IFSC Code" pattern="[A-Za-z]{3}[0-9]{4}" title=" please enter valid IFSC code..!!! eg:SBI0006" required />   

      <label><b> Account Holders Name: </b></label>   
      <input type="text"  name="ownername" placeholder= "Enter the name of account holder"  pattern="[A-Za-z].{3,25}" title="Name should contain only aplphabets..!!" required /> 
      
      <label><b> Amount: </b></label>   
      <input type="number"  name="amount" placeholder= "Enter the amount" min="1" max="100000" required /> 
      <input type="submit" class="btn" name="submit" value="Send">
    </form>
    
    </div>
    
    </div>
</body>
 <footer style="bottom:1px;position:relative; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</html>
