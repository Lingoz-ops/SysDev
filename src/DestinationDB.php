<?php
session_start();
$ans = $_SESSION['clientID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="Fix2.css"> 
  <link rel="stylesheet" type="text/css" href="Loader.css"> 
  
  </style> 
  <title>You have been succefully added!</title>
</head>
<body>
 
  <style>
  
<?php

require_once("config.php");
$conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");

 
if(isset($_REQUEST['OK'])){
    $NumberOfPassengers = $_REQUEST["Passenger"];
    $StartDate = $_REQUEST["PickUpdate"];
    $Location = $_REQUEST["Current"];
    $EndDate = $_REQUEST["EndDate"];
    $PickUptime = $_REQUEST["PickUptime"];
    $Destination = $_REQUEST["Destination"];

    //echo "$StartDate";
    $query = "INSERT INTO 4matic.booking(startDate, endDate, numberOfPassengers, initialCollectionPoint,clientID, Destination, booking_time)
    VALUES('$StartDate', '$EndDate', '$NumberOfPassengers', '$Location', '$ans','$Destination', '$PickUptime')";
    if (mysqli_query($conn, $query)) {
          echo "The trip was booked!";
          header("Refresh:2; url=client_menu.php");
        
    }
}

else if (isset($_REQUEST['CANCEL'])){
  header("Refresh:0; url=client_menu.php");
  echo "cancelled";
}

else{
  echo "Error: Can't book trip :/ " . $query . "<br>" . mysqli_error($conn);
}

mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=1');
mysqli_close($conn);
      
      
?> 



</body>
</html>















