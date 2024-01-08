<?php
session_start();
$ses = $_SESSION['driverID'];
//echo "$ses";

?>
<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="Fix2.css"> 
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
<form class="form1" action="driver_depot.php?" method="POST">
    <br><h2>Book a depot:</h2>
    <?php
    //$ans = $_REQUEST['depotID'];
    //echo "$ans";
    require_once("config.php");
    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server");
    $query = "SELECT * FROM 4matic.book_depot WHERE driverID = $ses";
    
    $result = mysqli_query($conn,$query) or die("Error retriving the records..."); 
    $rw = mysqli_fetch_array($result);
    $ans = $rw['depotID'];
    //echo "$ans";

    $query2 = "SELECT * FROM 4matic.depot WHERE depotID = $ans;";
    $result2 = mysqli_query($conn,$query2) or die("Error retriving the records");  
   
    echo "<table bgcolor=\"wheat\" style=\"width:50%;\"  >
            <tr>
              <th>Depot name</th>
              <th>Street</th>
              <th>Town</th>
              <th>Contact number</th>
   
            </tr>";

    while($row = mysqli_fetch_array($result2)){
        echo "<tr>";
        echo "<td>" . $row["depotName"] . "</td>";
        echo "<td>" . $row["street"] . "</td>";
        echo "<td>" . $row["town"] . "</td>";
        echo "<td>" . $row["contactNumber"] . "</td>";
        //echo "<td>" . $row["numberOfBedsAvailable"] . "</td>";
        //echo "<td>" . "<input type = \"submit\" name= \"submit\" value= \"Book\" " . "</td>";
        echo "</tr>";

    }
    mysqli_close($conn);
    ?>
    </form>
</div>
    
</nav>


 
</body> 
</html>