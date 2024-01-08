<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="user.css">
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
  	 
  </head>  
  <body> 
  <ul class = "OrderForList">
  <li class = "List"><a href="menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
  <div class = "LOGIN">
  
  <li class = "List"><a href="About.php"><i class="far fa-smile-wink"></i> About Us</a></li>
  <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
  <li class = "List"><a href="help.php"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
  <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
  <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li>
  </div><main>
  </ul>

    <nav> 
    
<div class="inbetween">
    

    <h1>Update trip information</h1><br><br>
    <form action="client_menu.php" method="post">
  <input type="submit" value = "Go back to client menu?" class = "Special-Button"><br> <br>
</form
    <?php

    $id =  $_REQUEST['id'];       //retrieve hidden attribute

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.booking WHERE bookingNumber = $id;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
              
            
    while($row = mysqli_fetch_array($result)){
     
              $startDate = $row["startDate"];
              $endDate = $row["endDate"];
              $numberOfPassengers = $row["numberOfPassengers"];
              $initialCollectionPoint = $row["initialCollectionPoint"];
              $Destination = $row["Destination"];
              $booking_time = $row["booking_time"];
        
    }

    mysqli_close($conn);

    ?>

<form action="rider_bookings.php" method="get" enctype="multipart/form-data">
        <fieldset>

            <label for="startDate">start date: </label><br>
            <input type="date" name="startDate" size="15" id="startDate" 
                value="<?php echo $startDate; ?>" required><br>

            <label for="endDate">end date: </label><br>
            <input type="date" name="endDate"  size="15" id="endDate"
                value="<?php echo $endDate; ?>" required><br>

            <label for="numberOfPassengers">number of passengers: </label><br>
            <input type="text" name="numberOfPassengers" size="15"  id="numberOfPassengers"
                value="<?php echo $numberOfPassengers; ?>" required><br>

            <label for="initialCollectionPoint">initial collection point: </label><br>
            <input type="text" name="initialCollectionPoint" size="15"  id="initialCollectionPoint"
                value="<?php echo $initialCollectionPoint; ?>" required><br>

            <label for="Destination">destination: </label><br>
            <input type="text" name="Destination" size="15"  id="Destination"
                value="<?php echo $Destination; ?>" required><br>


            <label for="booking_time">booking time: </label><br>
            <input type="time" name="booking_time" size="15"  id="booking_time"
                value="<?php echo $booking_time; ?>" required><br>    

           

            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            
            <input type="submit" name="submit" value="Update trip info info">

        </fieldset><br>
    </form>

    
</div>
    
</nav>


 
</body> 
</html>