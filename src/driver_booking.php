<?php
session_start();
$ses = $_SESSION['driverID'];


?>
<!doctype html> 
<html> 
  <head>
   
    <link rel="stylesheet" type="text/css" href="Fix2.css">
    <link rel="stylesheet" type="text/css" href="footer.css"> 
    <link rel="stylesheet" type="text/css" href="PullUp.css"> 
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>
    <title>Bookings made</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 7px;
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




  <nav class ="aa"> 
    
<div class="inbetween">
    

   <br> <br> <br> <h1>These are the bookings made</h1>

    <?php

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT startDate, endDate, numberOfPassengers, initialCollectionPoint, Destination, booking_time, firstName, lastName, contactNumber FROM 4matic.booking join 4matic.client using(clientID);";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
    <tbody>
            <tr>
              <th>Start date</th>
              <th>End date</th>
              <th>Number of pasengers</th>
              <th>Collection point</th>
              <th>Destination</th>
              <th>Booking time</th>
              <th>first name</th>
              <th>Last name</th>
              <th>Contact number</th>
            

             
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["startDate"] . "</td>";
        echo "<td>" . $row["endDate"] . "</td>";
        echo "<td>" . $row["numberOfPassengers"] . "</td>";
        echo "<td>" . $row["initialCollectionPoint"] . "</td>";
        echo "<td>" . $row["Destination"] . "</td>";
        echo "<td>" . $row["booking_time"] . "</td>";
        echo "<td>" . $row["firstName"] . "</td>";
        echo "<td>" . $row["lastName"] . "</td>";
        echo "<td>" . $row["contactNumber"] . "</td>";
         
    } echo "</tbody>";
    

    mysqli_close($conn);


    ?>
    
</div>
    
</nav>










 


</body> 
</html>