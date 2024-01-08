<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="user.css">
  
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="Draft.css">
    <link rel="stylesheet" type="text/css" href="Updates.css">
     <style> 
    fieldset {
  background-color: wheat;
  width: 50%;
  
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
<fieldset>
<form action="admin_menu.php" method="post">
  <input type="submit" value = "Go back to admin menu?" class = "Special-Button"><br> <br>
</form>
<?php

$id =  $_REQUEST['id'];       //retrieve hidden attribute

require_once("config.php");

$conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
$query = "SELECT * FROM 4matic.vehicle WHERE registrationNumber = $id";  //issue query

$result = mysqli_query($conn, $query) or 
die("<strong style=\"color: red;\">Could not execute query!");

while($row = mysqli_fetch_array($result)){ 
   $name = $row['model'] . " " . $row['make'];
   echo "<strong style>$name</strong>";        //prints the name in bold
   echo "<br><br>";
   echo "<strong style> make: </strong>" . $row['make']. "<br>"; 
   echo "<strong style> year: </strong>" . $row['year']. "<br>"; 
   echo "<strong style> number of seats: </strong>" . $row['numberOfSeats']. "<br>";
   echo "<strong style> licence code: </strong>" . $row['licenceCode']. "<br>"; 


}

mysqli_close($conn);


?>
<fieldset>    
    
</nav>



 
</body> 
</html>