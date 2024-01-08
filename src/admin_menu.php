
<!doctype html> 
<html> 
  <head>
  <link rel="stylesheet" type="text/css" href="Fix2.css"> 
    <link rel="stylesheet" type="text/css" href="Footer2.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="Signup3.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="Updates3.css">
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>

    <meta charset="utf-8"> 
  	 <Title>Admin</Title>
  </head>  
  <body> 
 
  
  
  <ul class = "OrderForList">
  <li class = "List"><a href="menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
  <div class = "LOGIN">
  
  <li class = "List"><a href="About.php"><i class="far fa-smile-wink"></i> About Us</a></li>
  
</li>
  <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
  <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
  <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
  <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li>
  
  </div><main>
  </ul>

<form action="admin_menu.php" method="post" class = "Forms">
<table>
 
 <tr>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Manage Bookings" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Manage Drivers" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Manage Vehicles" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Manage Depots" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Vehicle Report" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Employee Report" >
      </td>
      <td> 
      <input type= "submit" class="button" name = "submit" value="Number Of Room Report" >
      </td>
      
 </tr>  
    
 </table>

</form>
<?php 
session_start();

?>
<?php

//$driver_id = $_REQUEST["id"];   //assign driver to i




require_once("config.php");


if($_REQUEST['submit'] == "Manage Bookings"){
  echo "<h3>Manage Bookings </h3>";
  echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search bookings\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";
  
  require_once("config.php");

  
$conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
$query = "SELECT driverID, bookingNumber, startDate, endDate, numberOfPassengers, initialCollectionPoint, Destination, booking_time, firstName, lastName, contactNumber, emailAddress FROM 4matic.booking join 4matic.client using(clientID);";
$result = mysqli_query($conn,$query) or die("Error retriving the records");  
echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
        <tr>
          <th>Driver ID</td>
          <th>Booking Number</td>
          <th>Number of pasengers</th>
          <th>Start date</th>
          <th>End date</th>
          <th>Collection point</th>
          <th>Destination</th>
          <th>Booking time</th>
          <th>first name</th>
          <th>Last name</th>
          <th>Contact number</th>
          <th>Email address</td>
          <th>Driver Status</td>
          <th>Vehicle Status</td>
          
        </tr>";
        
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row["driverID"] . "</td>";   
    echo "<td>" . $row["bookingNumber"] . "</td>";  
    echo "<td>" . $row["numberOfPassengers"] . "</td>";
    echo "<td>" . $row["startDate"] . "</td>";
    echo "<td>" . $row["endDate"] . "</td>";
    echo "<td>" . $row["initialCollectionPoint"] . "</td>";
    echo "<td>" . $row["Destination"] . "</td>";
    echo "<td>" . $row["booking_time"] . "</td>";
    echo "<td>" . $row["firstName"] . "</td>";
    echo "<td>" . $row["lastName"] . "</td>";
    echo "<td>" . $row["contactNumber"] . "</td>";
    echo "<td>" . $row["emailAddress"] . "</td>";
    
    $_SESSION['bookingNumber'] = $row['bookingNumber'];
    $bookingN = $_SESSION['bookingNumber']; 
    echo "<td>". "<a href=\"driver.php?id=" . $bookingN. "\">Assign driver</a>" ."</td>"; 
    echo "<td>" . "<a href=admin_vehicle.php style=\"color:#FF0000\">Assign vehicle</a>" . "</td>";
    echo "</tr>";
}


  mysqli_close($conn);
  

}
elseif($_REQUEST['submit']=="Manage Drivers"){
  echo"<h3>Manage Drivers</h3>";
  echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search drivers\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";
  require_once("config.php");

  $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
  $query = "SELECT * FROM 4matic.driver";
  $result = mysqli_query($conn,$query) or die("Error retriving the records");  
  echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
          <tr>
          <th>driver ID</th>
            <th>first name</th>
            <th>last name</th>
            <th>contact number</th>
            <th>hometown</th>
            <th>Update driver</th>
            <th>Delete driver</th>
          </tr>";
          
  while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["driverID"] . "</td>";
      echo "<td>" . $row["firstName"] . "</td>";
      echo "<td>" . $row["lastName"] . "</td>";
      echo "<td>" . $row["contactNumber"] . "</td>";
      echo "<td>" . $row["hometown"] . "</td>";
      echo "<td>" . "<a href=\"update_driver.php?id=" . $row["driverID"] . "\" >Update</a>" . "</td>";
      echo "<td>" . "<a href=\"delete_driver.php?id=" . $row["driverID"] . "\" onClick=\"return confirm('Are you sure you want to delete: ".$row['firstName']. " " .$row['lastName']."')\"  >Delete</a>" . "</td>";
      echo "</tr>";
  }

  mysqli_close($conn);

}

elseif($_REQUEST['submit']=="Manage Vehicles"){
  echo "<h3>Manage Vehicles</h3>";
  echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search vehicles\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";

  require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.vehicle;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>date of purchase</th>
              <th>model</th>
              <th>make</th>
              <th>year</th>
              <th>number of seats</th>
              <th>licence code</th>
              <th>update</th>
              <th>delete</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["dateOfPurchase"] . "</td>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["make"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["numberOfSeats"] . "</td>";
        echo "<td>" . $row["licenceCode"] . "</td>";
        echo "<td>" . "<a href=\"update_vehicle.php?id=" . $row["registrationNumber"] . "\" >Update</a>" . "</td>";
        echo "<td>" . "<a href=\"delete_vehicle.php?id=" . $row["registrationNumber"] . "\"  onClick=\"return confirm('Are you sure you want to delete: ".$row['model']."')\"   >Delete</a>" . "</td>";

       
    }

    mysqli_close($conn);

}

elseif($_REQUEST['submit']=="Manage Depots"){
  echo"<h3>Manage Depots</h3>";
  echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search depots\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";

  require_once("config.php");
  $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
  $query = "SELECT * FROM 4matic.depot;";
  $result = mysqli_query($conn,$query) or die("Error retriving the records");  
  echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
          <tr>
         
            <th>Depot name</th>
            <th>Street</th>
            <th>Town</th>
            <th>Contact number</th>
            <th>Number of beds available</th>
            <th>Update depot</th>
            <th>Delete depot</th>

          </tr>";
          
  while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["depotName"] . "</td>";
      echo "<td>" . $row["street"] . "</td>";
      echo "<td>" . $row["town"] . "</td>";
      echo "<td>" . $row["contactNumber"] . "</td>";
      echo "<td>" . $row["numberOfBedsAvailable"] . "</td>";
      echo "<td>" . "<a href=\"update_depot.php?id=" . $row["depotID"] . "\" >Update</a>" . "</td>";
      echo "<td>" . "<a href=\"delete_depot.php?id=" . $row["depotID"] . "\" onClick=\"return confirm('Are you sure you want to delete: ".$row['depotName']."')\"  >Delete</a>" . "</td>";
      echo "</tr>";
      
  }

  mysqli_close($conn);
}

elseif($_REQUEST['submit']=="Vehicle Report"){
  echo "<h3>Vehicle Report</h3>";
  echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search vehicle reports\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";

  require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.vehicle;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>model</th>
              <th>make</th>
              <th>details</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["make"] . "</td>";
        echo "<td>" . "<a href=\"vehicle_details.php?id=" . $row["registrationNumber"] . "\" >Details</a>" . "</td>";  
    }

    mysqli_close($conn);

  }

  elseif($_REQUEST['submit']=="Employee Report"){
    echo"<h3>Employee Report</h3>";
    echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search employee reports\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";

    require_once("config.php");
      $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
      $query = "SELECT * FROM 4matic.driver;";
      $result = mysqli_query($conn,$query) or die("Error retriving the records");  
      echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
              <tr>
                <th>name</th>
                <th>details</th>
              </tr>";
              
      while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row["firstName"] . $row["lastName"]. "</td>";
          echo "<td>" . "<a href=\"employee_details.php?id=" . $row["driverID"] . "\" >Details</a>" . "</td>";  
      }
  
      mysqli_close($conn);
  
    }

    elseif($_REQUEST['submit']=="Number Of Room Report"){
      echo "<h3>Number Of Room Report</h3>";
      echo "<br><form action=\"admin_menu.php\" method=\"post\">
  <input type=\"search\" placeholder =\"search room reports\">  
  <input type=\"submit\" name=\"GO\" value= \"GO\"></form><br>";

      require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        $query = "SELECT * FROM 4matic.depot;";
        $result = mysqli_query($conn,$query) or die("Error retriving the records");  
        echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
                <tr>
                  <th>depotName</th>
                  <th>number of rooms available</th>
                </tr>";
                
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row["depotName"] ."</td>";
            echo "<td>" . $row["numberOfBedsAvailable"] . "</td>";  
        }
    
        mysqli_close($conn);
    
      }
  ?>
  <?php 
  session_destroy();
  ?>






</footer>  
</body> 
</html>