<!doctype html> 
<html> 
  <head>
  <h1><a href="menu.php">Hamba Kahle</a></h1>
    <nav> 
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

        tr:hover {background-color:rgb(184, 142, 142);}
    </style> 
    <meta charset="utf-8"> 
  	 
  </head>  
  <body> 
    <?php

        session_start();
        $driverID =$_REQUEST['id'];
        $bookingN = $_SESSION["bookingN"];
        echo "$driverID";
        echo "$bookingN";
        require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        $query = "UPDATE 4matic.booking SET driverID = $driverID WHERE bookingNumber = $bookingN";
        $result = mysqli_query($conn,$query) or die("Error retriving the records");  
        mysqli_close($conn);
        header("Refresh:0; url=admin_menu.php");
    ?>
    </div>
        </nav>
        
        <footer>
        <p>Help the user here, socials and everything</p>
        </footer>
    </body>

</html>