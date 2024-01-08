<?php
session_start();
$ses = $_SESSION['driverID'];
//echo "$ses";

?>
<!doctype html> 
<html> 
  <head>
  <link rel="stylesheet" type="text/css" href="New.css"> 
  <link rel="stylesheet" type="text/css" href="Fix2.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
   <link rel="stylesheet" type="text/css" href="Driver.css"> 
   <link rel="stylesheet" type="text/css" href="driverFooter.css"> 
   <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>
    <meta charset="utf-8"> 
  	 <Title>Admin</Title>
  </head>  
  <body class = "SignUp"> 

  <ul class = "OrderForList">
    <li class = "List"><a href="menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
    <div class = "LOGIN">
    
    <?php 
      if(isset($_SESSION['driverID'])){
        echo "<li class = \"List\"><a href=\"#\"><i class=\"far fa-smile-wink\"></i> About Us</a></li>";
        echo "<li class = \"List\" ><a href=\"#\"><i class=\"fab fa-readme\"></i> Reviews</a></li>";
        echo "<li class = \"List\"><a href=\"#\"><i class=\"fas fa-phone-square-alt\"></i> Help?</a></li>";
        echo "<li class = \"List\"><a href=\"login_email.php\" ><i class=\"fas fa-sign-in-alt\"></i> Logout</a></li>";
        echo "<li class = \"List\"><a href=\"login_email.php\"><i class=\"fas fa-users\"></i>";

        require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");

        //echo "$ses";
        $query = "SELECT * FROM 4matic.driver WHERE driverID = $ses";
        $result = mysqli_query($conn,$query) or die("Error retriving the records");  
            
        while($row = mysqli_fetch_array($result)){
          echo 'Hey'. ' ' . $row["firstName"] . " ". $row["lastName"] . '!';   
        }
      }
      else{
        echo "<li class = \"List\"><a href=\"#\"><i class=\"far fa-smile-wink\"></i> About Us</a></li>";
        echo "<li class = \"List\" ><a href=\"#\"><i class=\"fab fa-readme\"></i> Reviews</a></li>";
        echo "<li class = \"List\"><a href=\"#\"><i class=\"fas fa-phone-square-alt\"></i> Help?</a></li>";
        echo "<li class = \"List\"><a href=\"login_email.php\" ><i class=\"fas fa-sign-in-alt\"></i> Login</a></li>";
        echo "<li class = \"List\"><a href=\"login_email.php\"><i class=\"fas fa-users\"></i>";
      }
      ?>

      </a></li>
      
      </div><main>
      </ul>

      <nav class = ff>
      <form method="POST">
          <button onclick="location.href='driver_booking.php'" type="button" class ="button" >View trips</button>
          <button onclick="location.href='book_depot.php?'" type="button" class ="button" >Book Depots</button>
          <button onclick="location.href='view_booked_depots.php'" type="button" class ="button" >View booked depots</button>

          
          </form>
      </nav>

      <!-- FOOT BELOW -->
      <nav class = aa>
      <footer class="footer-distributed" id = "Foots">
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
    </nav>
  </body> 
  </html>