<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="testsearch.php" method="post">
    <input type="search" name="bookingsearch" placeholder="booking search">
    <input type="submit" name="GO">
</form>
<?php

require_once("config.php");

  if(isset($_REQUEST['bookingsearch'])){
    $search = $_REQUEST['bookingsearch'];
  $conn1 = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
  $querySearch1 = "SELECT *FROM 4matic.booking WHERE numberOfPassengers LIKE '%$search%'";
  $result1 = mysqli_query($conn1,$querySearch1) or die("Error retriving the records"); 
echo"<table>";
    while($row = mysqli_fetch_array($result1)){
    echo "<tr>";
    echo "<td>" . $row["numberOfPassengers"] . "</td>";
    
    
    echo "</tr> <br>" ;
    echo"</table>";
}


  mysqli_close($conn1);
  }
?>

    
</body>
</html>