<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="Updates.css">
    <title>Available Drivers</title>
    <style>
        table {
        border-collapse: collapse;
        
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
    </style> 
    <meta charset="utf-8"> 
  	 
  </head>  
  <body> 
  <ul class = "OrderForList">
  <li class = "List"><a href="menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
  <div class = "LOGIN">
  
  <li class = "List"><a href="#"><i class="far fa-smile-wink"></i> About Us</a></li>
  <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
  <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
  <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
  <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li>
  </div><main>
  </ul>

    <nav> 
<div class="inbetween">
    

<br><h1>These are the drivers available</h1><br><br>
<form action="admin_menu.php" method="post">
  <input type="submit" value = "Go back to Admin Menu?" class = "Special-Button">
</form> <br>
    <?php

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.driver;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>first name</th>
              <th>last name</th>
              <th>contact number</th>
              <th>hometown</th>
              <th>Update driver</th>
              <th>Delete driver</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["firstName"] . "</td>";
        echo "<td>" . $row["lastName"] . "</td>";
        echo "<td>" . $row["contactNumber"] . "</td>";
        echo "<td>" . $row["hometown"] . "</td>";
        echo "<td>" . "<a href=\"update_driver.php?id=" . $row["driverID"] . "\" >Update</a>" . "</td>";
        echo "<td>" . "<a href=\"delete_driver.php?id=" . $row["driverID"] . "\" onClick=\"return confirm('Are you sure you want to delete: ".$row['firstName']. " " .$row['lastName']."')\"  >Delete</a>" . "</td>";
        echo "</tr>";
    }

    mysqli_close($conn);

    ?>

<?php
        if(isset($_REQUEST["submit"])){
        $firstName = $_REQUEST["firstName"];
        $lastName = $_REQUEST["lastName"];
        $dateOfBirth = $_REQUEST["dateOfBirth"];
        $contactNumber = $_REQUEST["contactNumber"];
        $dateEmployed = $_REQUEST["dateEmployed"];
        $hometown = $_REQUEST["hometown"];
        $id = $_REQUEST["id"];

        require_once("config.php");
            
        
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        $query = "UPDATE 4matic.driver SET firstName = '$firstName', lastName = '$lastName',
                    contactNumber = '$contactNumber', hometown = '$hometown', dateEmployed = '$dateEmployed'

        WHERE driverID = $id";  //issue query

        $result = mysqli_query($conn, $query) or 
        die("<strong style=\"color: red;\">Could not execute query!");

        mysqli_close($conn);

        
        header("Refresh:0; url=manage_driver.php?update_succesful!");
        

       
        }




?>

    
</div>
    
</nav>


 
</body> 
</html>