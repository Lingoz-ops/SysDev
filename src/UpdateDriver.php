<?php

$Id= $_REQUEST ['id'];
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$dateOfBirth = $_REQUEST["dateOfBirth"];
$contactNumber = $_REQUEST["contactNumber"];
$dateEmployed = $_REQUEST["dateEmployed"];
$hometown = $_REQUEST["hometown"];



require_once("config.php");
 $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
 
  
 $query = "UPDATE 4matic.driver set firstName='$firstName', lastName='$lastName';dateOfBirth='$dateOfBirth';
 where driverId = $Id;";
 $result = mysqli_query($conn,$query) or die("<p style=\"color: red\">Error retriving the records </p>");  

mysqli_close($conn);
echo "<p style=\"color: green\">The record was successfully udated!</p>";
?>