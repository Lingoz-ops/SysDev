<?php
session_start();
$ses = $_SESSION['clientID'];

?>
<!doctype html> 
<html> 
<link rel="stylesheet" type="text/css" href="Fix2.css"> 
<link rel="stylesheet" type="text/css" href="Client_menu.css">
    <link rel="stylesheet" type="text/css" href="FooterForUser.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <style> 
    fieldset {
  background-color: wheat;
  width: 50%;
  
}


</style>
    
    <meta charset="utf-8"> 
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>	 
    <title>Make a booking</title>

    <body class = "UserPicture">  
  
  <ul class = "OrderForList">
    <li class = "List"><a href="client_menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
    <div class = "LOGIN">
    
    <li class = "List"><a href="About.php"><i class="far fa-smile-wink"></i> About Us</a></li>
    <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
    <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
    <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
    <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> <?php require_once("config.php");
$conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
$query = "SELECT * FROM 4matic.client WHERE clientID = $ses";
$result = mysqli_query($conn,$query) or die("Error retriving the records");  
        
while($row = mysqli_fetch_array($result)){
     echo 'Hey'. ' ' . $row["firstName"] . '!';   
}?></a></li>
    
    </div><main>
    </ul>
       <nav class = "Options"> 
  </main>
  </nav>
  
  </head>  

 
</div>
<fieldset>	
    <nav> 
 
    <h1>Make a booking with Hamba Kahle</h1><br><br>
    
    <filedset> 

    <h2 style="font-size:30px">Book a trip:</h2><br> 
    
    <form action="DestinationDB.php" method="post" class="booking">
    <label for="" name= "Passenger">Number of passengers</label>
    <select id="Passengers" name="Passenger">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="1">5</option>
  <option value="2">6</option>
  <option value="3">7</option>
  <option value="4">8</option>
  <option value="1">9</option>
  <option value="2">10</option>
  <option value="3">11</option>
  <option value="4">12</option>
  <option value="4">13</option>
  <option value="1">14</option>
  <option value="2">15</option>
</select><br><br>
<label for="" name= "Current"> Pick a current location:</label>
<input class = "y" type="text" name = "Current"><br><br>
<label for="" name= "Destination">Pick a destination:</label>
<input type="text" name = "Destination"><br><br>
<label for="" name= "PickUpdate">Pick up date:</label>
<input type="date" name = "PickUpdate"><br><br>
<label for="" name= "PickUptime">Pick up time:</label>
<input type="time" name = "PickUptime"><br><br>
<label for="" name= " EndDate">End Date</label>
<input type="date" name = "EndDate"><br><br>
<label for="" name= "Submit">Submit trip booking</label>
<input class = "submit" type= "submit" name="OK" value = "OK"> 
<input class = "submit" type="submit" name ="CANCEL" value = "BACK"><br><br>
    </form>


</div>
</fieldset>
 
</nav>
<footer class="footer-distributed">
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