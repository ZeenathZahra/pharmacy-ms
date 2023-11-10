<?php
// Include config file
require_once "config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$sql= "SELECT * FROM stock"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table class='table'> "; 
        echo "<tr>"; 
        echo "<th scope='col'>STOCK-ID</th>"; 
        echo "<th scope='col'>DRUG NAME</th>"; 
        echo "<th scope='col'>DATE-SUPPLIED</th>"; 
        echo "<th scope='col'>DESCRIPTION</th>"; 
        echo "<th scope='col'>SUPPLIER</th>"; 
        echo "<th scope='col'>QUANTITY</th>"; 
        echo "<th scope='col'>COST</th>"; 
        echo "<th scope='col'>AVAILABILITY</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['stock_id']."</td>"; 
            echo "<td>".$row['drug_name']."</td>"; 
            echo "<td>".$row['date_supplied']."</td>"; 
            echo "<td>".$row['description']."</td>"; 
            echo "<td>".$row['supplier']."</td>"; 
            echo "<td>".$row['quantity']."</td>"; 
            echo "<td>".$row['cost']."</td>"; 
            echo "<td>".$row['availability']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STOCK LIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; padding: 20px;background-color: #edf2f4;  }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<p>
   <a href="welcome.php" class="btn btn-primary">GO BACK</a>
  <a href="update.php" class="btn btn-primary">EDIT</a>
    </p>
</body>
</html>