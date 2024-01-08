<?php
session_start();
$ans = $_SESSION['clientID'];

?>
<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="Draft.css">
 
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>	 
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
    <li class = "List"><a href="client_menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
    <div class = "LOGIN">
    
    <li class = "List"><a href="#"><i class="far fa-smile-wink"></i> About Us</a></li>
    <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
    <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
    <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
    <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> <?php require_once("config.php");
$conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
$query = "SELECT * FROM 4matic.client WHERE clientID = $ans";
$result = mysqli_query($conn,$query) or die("Error retriving the records");  
        
while($row = mysqli_fetch_array($result)){
     echo 'Hey'. ' ' . $row["firstName"] . $row["lastName"] . '!';   
}?></a></li>
    
    </div><main>
    </ul>

    <nav> 
    
<div class="inbetween">

<h1>Below are your available bookings:</h1>


    <?php

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.booking WHERE clientID = $ans";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              
              <th>Booking Number</th>
              <th>Booking Time</th>
              <th>Start date</th>
              <th>End date</th>
              <th>Number of pasengers</th>
              <th>Collection point</th>
              <th>Destination</td>
              <th>Update trip</td>
              <th>Delete trip</td>   
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        //echo "<td>" . $row["clientID"] . "</td>";
        echo "<td>" . $row["bookingNumber"] . "</td>";
        echo "<td>" . $row["booking_time"] . "</td>";
        echo "<td>" . $row["startDate"] . "</td>";
        echo "<td>" . $row["endDate"] . "</td>";
        echo "<td>" . $row["numberOfPassengers"] . "</td>";
        echo "<td>" . $row["initialCollectionPoint"] . "</td>";
        echo "<td>" . $row["Destination"] . "</td>";
        echo "<td>" . "<a href=\"update_trip.php?id=" . $row["bookingNumber"] . "\" >Update</a>" . "</td>";
        echo "<td>" . "<a href=\"delete_trip.php?id=" . $row["bookingNumber"] . "\" onClick=\"return confirm('Are you sure you want to delete the trip?  ')\"  >Delete</a>" . "</td>";      
    }

    mysqli_close($conn);

    if(isset($_REQUEST["submit"])){
              $startDate = $_REQUEST["startDate"];
              $endDate = $_REQUEST["endDate"];
              $numberOfPassengers = $_REQUEST["numberOfPassengers"];
              $initialCollectionPoint = $_REQUEST["initialCollectionPoint"];
              $Destination = $_REQUEST["Destination"];
              $booking_time = $_REQUEST["booking_time"];
              $id = $_REQUEST["id"];
      require_once("config.php");
          
      
      $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
      $query = "UPDATE 4matic.booking SET startDate = '$startDate',  endDate = '$endDate',
                  numberOfPassengers = '$numberOfPassengers', initialCollectionPoint = '$initialCollectionPoint', Destination = '$Destination', booking_time = '$booking_time'

      WHERE bookingNumber = $id";  //issue query

      $result = mysqli_query($conn, $query) or 
      die("<strong style=\"color: red;\">Could not execute query!");

      mysqli_close($conn);
      header("Refresh:0; url=rider_bookings.php?update_succesful!");  
      } 
    ?>
</div>
    
</nav>
<footer class="footer-distributed" id = "Footer">
<div class="footer-left">

  <a href="menu.php" class = "Decoration"><h3><span>hamba</span>kahle</h3></a>
  <ul class="footer-links">
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Global Citizenship</a></li>
    <li><a href="#">Innovation</a></li>
    <li><a href="#">Covid-19</a></li>
  </ul>

  <p id="copyrights">All Rights &copy; Reserved<a href="#"> &#64;4Matic</a> 2020 </p>
</div>

<div class="footer-center">
  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>29 African street</span> Grahamstown</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>(+27) 82 345 2334</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="hambakahle:hambakahle@gmail.com">hambakahle@gmail.com</a></p>
  </div>

</div>

<div class="footer-right">

  
  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

</div>
<div class="app-badges">
  <a href="#" class="app-store-button">
  <img src="https://bolt.eu/static/en-8de0c47bd0804c7387b44eb24f7af748.svg" alt="Download Hambe Kahle app in App Store">
  </a>
  <a href="#" class="huawei-store-button">
  <img src="https://bolt.eu/static/en-971aaabd768653b568201361a52443d9.svg" alt="Download Bolt app in Huawei App Gallery">
  </a>
 </div>
</footer>

</body> 
</html>