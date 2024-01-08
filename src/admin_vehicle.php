<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="Updates.css">
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
  
</li>
  <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
  <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
  <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
  <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li></ul>


    <nav> 
<div class="inbetween">
    

<br><br><h1>These are the available vehicles:</h1><br>

    <?php

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.vehicle;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>date of purchase</th>
              <th>model</th>
              <th>make</th>
              <th>year</th>
              <th>number of seats</th>
              <th>licence code</th>
              <th>assign</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["dateOfPurchase"] . "</td>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["make"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["numberOfSeats"] . "</td>";
        echo "<td>" . $row["licenceCode"] . "</td>";
        echo "<td>" . "<a href=\"update_vehicle.php?id=" . $row["registrationNumber"] . "\" >assign</a>" . "</td>";
        
       
    }

    mysqli_close($conn);

    ?>

<?php
        if(isset($_REQUEST["submit"])){
        $dateOfPurchase = $_REQUEST["dateOfPurchase"];
        $model = $_REQUEST["model"];
        $make = $_REQUEST["make"];
        $year = $_REQUEST["year"];
        $numberOfSeats = $_REQUEST["numberOfSeats"];
        $licenceCode = $_REQUEST["licenceCode"];
        $id = $_REQUEST["id"];

        require_once("config.php");
            
        
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        $query = "UPDATE 4matic.vehicle SET dateOfPurchase = '$dateOfPurchase', model = '$model',
                    make = '$make', year = '$year', numberOfSeats = '$numberOfSeats', licenceCode = '$licenceCode'

        WHERE registrationNumber = $id";  //issue query

        $result = mysqli_query($conn, $query) or 
        die("<strong style=\"color: red;\">Could not execute query!");

        mysqli_close($conn);
        header("Refresh:0; url=vehicle.php?update_succesful!");

        
        }

?>

</div>
    
</nav>


</body> 
</html>