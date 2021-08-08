<?php

	include("dbcon.php");
	session_start();
	  $aid=$_SESSION['email'];
		$qry="SELECT * FROM `user` WHERE email='$aid' ;";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run);
    $_SESSION['email']=$aid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--<a id="grad"></a>-->
    <title>User-Page</title>
    <link rel="stylesheet" href="profile.css">
   
</head>
    <header>
        <h1>Your Profile</h1></header>
    <nav>
        <a href="#">Contact Us</a>
        <a href="Login.php">Log-out</a>
        <a href="transaction.php">Transactions</a>  
        <a href="transfer.php">Send Money</a>  
        <a href="index.php">Home</a>
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

th:nth-child(even){background-color: white}

th {
  background-color: #4CAF50;
  color: black;
}
td {
  background-color: grey;
  color: white;
}
</style>
<body style="font-family: 'Quicksand', sans-serif;">

  <h2 style="text-align:center;color:white;">Hello...! &nbsp; <?php echo $data['name'];?></h2>
  <table>
    <tr>
      <th>Email</th>
      <td><?php echo $data['email'];?></td>
    </tr>
   
    <tr>
      <th>Phone</th>
      <td><?php echo $data['mobile'];?></td>
    </tr>
    <tr>
      <th>Gender</th>
      <td><?php echo $data['gender'];?></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><?php echo $data['addr'];?></td>
    </tr>

</body>

<footer style="bottom:5px;position:absolute; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">&copy; 2020 | RNSIT</a>
   
</footer>
</html>
