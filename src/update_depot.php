<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="Updates.css">
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>

    <style>
fieldset {
  background-color: wheat;
  width: 50%;
  
}

legend {
  background-color: grey;
  color: white;
  padding: 5px 10px;
  width: 30%
}

input {
  margin: 10px;
  width: 30%;
}

</style>
    <meta charset="utf-8"> 
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>
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
    

    <h1>Update depot information</h1><br><br>
  
    <?php

    $id =  $_REQUEST['id'];       //retrieve hidden attribute

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.depot WHERE depotID = $id;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
              
            
    while($row = mysqli_fetch_array($result)){
     
              $depotName = $row["depotName"];
              $street = $row["street"];
              $town = $row["town"];
              $contactPerson = $row["contactPerson"];
              $contactNumber = $row["contactNumber"];
              $numberOfBedsAvailable = $row["numberOfBedsAvailable"];
        
    }

    mysqli_close($conn);

    ?>

<form action="manage_depot.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h2><strong><?php echo $depotName; ?></strong></h2>
            

            <label for="depotName">depot name: </label><br>
            <input type="text" name="depotName" size="15" id="depotName" 
                value="<?php echo $depotName; ?>" required><br>

            <label for="street">street: </label><br>
            <input type="text" name="street"  size="15" id="street"
                value="<?php echo $street; ?>" required><br>

            <label for="town">town: </label><br>
            <input type="text" name="town" size="15"  id="town"
                value="<?php echo $town; ?>" required><br>

            <label for="contactPerson">contact person: </label><br>
            <input type="text" name="contactPerson" size="15"  id="contactPerson"
                value="<?php echo $contactNumber; ?>" required><br>

            <label for="contactNumber">contact number: </label><br>
            <input type="text" name="contactNumber" size="15"  id="contactNumber"
                value="<?php echo $contactNumber; ?>" required><br>


            <label for="numberOfBedsAvailable">number of beds available: </label><br>
            <input type="text" name="numberOfBedsAvailable" size="15"  id="numberOfBedsAvailable"
                value="<?php echo $numberOfBedsAvailable; ?>" required><br>    

           

            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            
            <input type="submit" name="submit" value="Update Depot info">
           
        </fieldset><br>
    </form>
    <form action="admin_menu.php" method="post"><input type="submit" value = "Go back to admin menu?" class = "Special-Button"></form>


   

    
</div>
    
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