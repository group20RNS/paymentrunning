<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Transaction</title>
    <link rel="stylesheet" href="profile.css">
</head>
    <header>
        <h1>Transaction  Details</h1></header>
    <nav>
        <a href="#">Contact Us</a>
        <a href="login.php">Log-out</a>
        <a href="profile.php">Back</a>
    </nav>
    <style>
    
    table {
  border-collapse: collapse;
  width: 50%;
  margin-left:25%;
}

th, td {
  text-align: center;
  padding: 8px;
}



th {
  background-color: #4CAF50;
  color: white;
}

td {
  background-color: grey;
  color: white;
}
</style>
 <body>
    
    <?php
    	include("dbcon.php");
      session_start();
      $i=1;
      $email=$_SESSION['email'];
      $qry="select * from transactions where email='$email';";
      $run=mysqli_query($conn,$qry);
      $row=mysqli_num_rows($run);
    if($row==0)
    {
      goto h;
    }
     ?>
      <h2 style="text-align:center;color:red;">Transaction List</h2>
      <table>
     <tr>
     <th>SL No</th>
     <th>Send To</th>
     <th>Account No</th>
     <th>IFSC Code</th>
     <th>Amount</th>
     <th>Date Time</th>
     </tr>
     <?php
  
		while($data=mysqli_fetch_array($run))
    { ?>
     <tr>
     <td><?php echo $i++; ?></td>
     <td><?php echo $data['ownername'];?></td>
     <td><?php echo $data['accno'];?></td>
     <td><?php echo $data['ifsc'];?></td>
     <td><?php echo $data['amount'];?></td>
     <td><?php echo $data['datetime'];?></td>
     </tr>
     <?php }?>
     </table>
     <?php
     goto g;?>
     <?php h: ?>
     <h3 style="text-align:center; color:red;">No Transactions Found....!!!</h3>
     <?php g:?>
    
 </body>
 <footer style="bottom:1px;position:relative; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</html>