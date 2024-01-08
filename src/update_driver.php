<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="user.css">
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
  
  <li class = "List"><a href="#"><i class="far fa-smile-wink"></i> About Us</a></li>
  <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
  <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
  <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
  <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li>
  </div><main>
  </ul>




    <nav> 
    
<div class="inbetween">
    

<br> <br> <h1>Update driver information</h1><br>

    <?php

    $id =  $_REQUEST['id'];       //retrieve hidden attribute

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.driver WHERE driverID = $id;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
              
            
    while($row = mysqli_fetch_array($result)){
     
              $firstName = $row["firstName"];
              $lastName = $row["lastName"];
              $dateOfBirth = $row["dateOfBirth"];
              $contactNumber = $row["contactNumber"];
              $dateEmployed = $row["dateEmployed"];
              $hometown = $row["hometown"];
        
    }

    mysqli_close($conn);

    ?>

<form action="manage_driver.php" method="get" enctype="multipart/form-data">
        <fieldset>
            <h2><strong><?php echo $firstName . " " . $lastName; ?></strong></h2>
            

            <label for="firstName">first name: </label><br>
            <input type="text" name="firstName" size="15" id="firstName" 
                value="<?php echo $firstName; ?>" required><br>

            <label for="lastName">last name: </label><br>
            <input type="text" name="lastName"  size="15" id="lastName"
                value="<?php echo $lastName; ?>" required><br>

            <label for="dateOfBirth">date of birth: </label><br>
            <input type="date" name="dateOfBirth" size="15"  id="dateOfBirth"
                value="<?php echo $dateOfBirth; ?>" required><br>

            <label for="contactNumber">contact number: </label><br>
            <input type="text" name="contactNumber" size="15"  id="contactNumber"
                value="<?php echo $contactNumber; ?>" required><br>

            <label for="dateEmployed">date employed: </label><br>
            <input type="date" name="dateEmployed" size="15"  id="dateEmployed"
                value="<?php echo $dateEmployed; ?>" required><br>


            <label for="hometown">hometown: </label><br>
            <input type="text" name="hometown" size="15"  id="hometown"
                value="<?php echo $hometown; ?>" required><br>    

           

            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            
            <input type="submit" name="submit" value="Update Driver info">

        </fieldset><br>
    </form>

    
</div>
    
</nav>


 
</body> 
</html>