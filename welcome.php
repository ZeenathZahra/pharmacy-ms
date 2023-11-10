<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: #edf2f4; }
    </style>
</head>
<body>
    <div  >
        <h1 class=" bg-primary " style="height: 70px; ; ">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to MYSONS Pharmacy.</h1>
    </div>
    
    <br>
<p>
<a href="enter.php">ENTER YOUR DETAILS</a>.</p>
<p>
<a href="predetails.php">PRESCRIPTION-DETAIL</a>.</p>

<p>
<a href="management.php">MANAGE EMPLOYEES </a>.</p>

<p>
<a href="stock.php">MANAGE STOCKS</a>.</p>
<hr>
<img src="https://t4.ftcdn.net/jpg/02/74/73/01/360_F_274730109_gF0azWfAPbZFLr06yKbFu8S5CPSNMYJs.jpg"/>
<hr>
<p>
<a href="reset.php" class="btn btn-primary">Reset Your Password</a>
        <a href="logout.php" class="btn btn-primary">Sign Out of Your Account</a>
  </p>
</body>
</html>