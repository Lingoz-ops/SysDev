<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css">
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
  
  

    <nav> 
    
<div class="inbetween">
    
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

  <br><br> <h1>Update vehicle information</h1><br>
    <?php

    $id =  $_REQUEST['id'];       //retrieve hidden attribute

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.vehicle WHERE registrationNumber = $id;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
              
            
    while($row = mysqli_fetch_array($result)){

              $dateOfPurchase = $row["dateOfPurchase"];
              $model = $row["model"];
              $make = $row["make"];
              $year = $row["year"];
              $numberOfSeats = $row["numberOfSeats"];
              $licenceCode = $row["licenceCode"];
        
    }

    mysqli_close($conn);

    ?>

<form action="vehicle.php" method="POST" enctype="multipart/form-data">
        <fieldset>
           
            

            <label for="dateOfPurchase">date of purchase: </label><br>
            <input type="date" name="dateOfPurchase" size="15" id="dateOfPurchase" 
                value="<?php echo $dateOfPurchase; ?>" required><br>

            <label for="model">model: </label><br>
            <input type="text" name="model"  size="15" id="model"
                value="<?php echo $model ?>" required><br>

            <label for="make">make: </label><br>
            <input type="text" name="make" size="15"  id="make"
                value="<?php echo $make; ?>" required><br>

            <label for="year">year: </label><br>
            <input type="text" name="year" size="15"  id="year"
                value="<?php echo $year; ?>" required><br>

            <label for="numberOfSeats">number of seats: </label><br>
            <input type="text" name="numberOfSeats" size="15"  id="numberOfSeats"
                value="<?php echo $numberOfSeats; ?>" required><br>


            <label for="licenceCode">licence code: </label><br>
            <input type="text" name="licenceCode" size="15"  id="licenceCode"
                value="<?php echo $licenceCode; ?>" required><br>    

           

            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            
            <input type="submit" name="submit" value="Update vehicle info">

        </fieldset><br>
    </form>




   

    
</div>
    
</nav>
 
</body> 
</html>