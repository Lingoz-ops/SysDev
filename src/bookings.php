<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Style.css"> 
    <link rel="stylesheet" type="text/css" href="user.css"> 
    <style>
        table {
        border-collapse: collapse;
        
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
    </style>
    <meta charset="utf-8"> 
  	 
  </head>  
  <body> 
  <h1><a href="menu.php">Hamba Kahle</a></h1>
    <nav> 
    
<div class="inbetween">
    

    <h1>These are the bookings made</h1><br><br>

    <?php

    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    $query = "SELECT * FROM 4matic.booking;";
    $result = mysqli_query($conn,$query) or die("Error retriving the records");  
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>Driver ID</td>
              <th>Client ID</td>
              <th>Number of pasengers</th>
              <th>Start date</th>
              <th>End date</th>
              
              <th>Collection point</th>
              
              <th>Driver Status</td>
              <th>Vehicle Status</td>
              <th>Delete trip</td>
              
            </tr>";
            
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["driverID"] . "</td>";
        echo "<td>" . $row["clientID"] . "</td>";    
        echo "<td>" . $row["numberOfPassengers"] . "</td>";
        echo "<td>" . $row["startDate"] . "</td>";
        echo "<td>" . $row["endDate"] . "</td>";
        
        echo "<td>" . $row["initialCollectionPoint"] . "</td>";
      
        echo "<td>" . "<a href=driver.php style=\"color:#FF0000\">Assign driver</a>" . "</td>";
        echo "<td>" . "<a href=vehicle.php style=\"color:#FF0000\">Assign vehicle</a>" . "</td>";
        echo "<td>" . "<a href=vehicle.php style=\"color:#FF0000\">Delete trip</a>" . "</td>";
        

        
    }

    mysqli_close($conn);


    ?>


    

    
    
</div>
    
</nav>

<footer>
  <p>Help the user here, socials and everything</p>
</footer>
 
</body> 
</html>