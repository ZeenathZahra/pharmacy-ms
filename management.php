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



$sql = "SELECT * FROM management"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table class='table'>"; 
        echo "<tr>"; 
        echo "<th scope='col'>STAFF ID</th>"; 
        echo "<th scope='col'>FIRST NAME</th>"; 
        echo "<th scope='col'>LAST NAME</th>"; 
        echo "<th scope='col'>DESIGNATION</th>"; 
        echo "<th scope='col'>PHONE NO</th>"; 
        
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['staff_id']."</td>"; 
            echo "<td>".$row['FirstName']."</td>"; 
            echo "<td>".$row['LastName']."</td>"; 
            echo "<td>".$row['Designation']."</td>"; 
            echo "<td>".$row['Phone_no']."</td>"; 
           
        
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
    <title>EMPLOYEES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background-color: #edf2f4; padding: 20px;border: solid;}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <hr>
<p>
   <a href="update_staff.php" class="btn btn-primary">EDIT</a>
   <a href="welcome.php" class="btn btn-primary">GO BACK</a>
    </p>
</body>
</html>