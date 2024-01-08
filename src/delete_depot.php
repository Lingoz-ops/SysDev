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




<?php
    $id =  $_REQUEST['id'];       //retrieve hidden attribute

    require_once("config.php");

    $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");

    $query = "DELETE FROM 4matic.depot WHERE depotID = $id";  //issue delete query

    $result = mysqli_query($conn, $query) or 
    die("<strong style=\"color: red;\">Could not execute query!");

    mysqli_close($conn);

    header("Location: manage_depot.php");// redirects page back to manage_depot.php

?>

</div>
    
</nav>

<footer>
  <p>Help the user here, socials and everything</p>
</footer>
 
</body> 
</html>