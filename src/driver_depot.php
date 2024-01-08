<?php
session_start();

?>
<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup2.css"> 
    <meta charset="utf-8">  	 
  </head> 
  <body>  	     
<div class="form-container">
    <form class="form1" action="driver_menu.php" method="POST">
    <?php

        $driverID = $_SESSION['driverID'];
        $_SESSION['id'] = $_REQUEST['id'];
        $depotID = $_SESSION['id'];
        
        require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=0');
        $query = "INSERT INTO 4matic.book_depot (depotID, driverID) VALUES ($depotID,$driverID);";
        if (mysqli_query($conn, $query)) {
            echo "Booking added successfully!";
            header("Refresh:2; url=driver_menu.php?driver_success?id=$depotID");
          } 
        else {
            echo "Error: Can't make booking " . $query . "<br>" . mysqli_error($conn);
          }
        mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=1');
        mysqli_close($conn);
     
    ?>
</form>
</div>
</body> 
</html>