<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup2.css"> 
    <meta charset="utf-8">  	 
  </head> 
  <body>  	     
<div class="form-container">
    <form class="form1" action="login_driver.php" method="POST">
    <?php
    if(isset($_REQUEST['submit'])){
        
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $contactNumber = $_REQUEST['contactNumber'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $empDate = $_REQUEST['dEmp'];
        $homeTown = $_REQUEST['hTown'];
        $passW = $_REQUEST['password'];
        
        $pw = password_hash($passW,PASSWORD_DEFAULT);

        require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=0');
        $query = "INSERT INTO 4matic.driver(firstName,lastName,contactNumber,email,dateOfBirth,dateEmployed,hometown,driverPassword) 
                VALUES('$firstName','$lastName','$contactNumber','$email','$dob','$empDate','$homeTown','$pw')";
        if (mysqli_query($conn, $query)) {
            echo "Yebo You have been added successfully!";
            header("Refresh:3; url=login_driver.php?driver_success");
          } 
        else {
            echo "Error: Can't add user " . $query . "<br>" . mysqli_error($conn);
          }
        mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=1');
        mysqli_close($conn);
        }          
    ?>
</form>
</div>
</body> 
</html>