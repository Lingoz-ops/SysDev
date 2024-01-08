<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup2.css"> 
    <meta charset="utf-8">  	 
  </head> 
  <body>  	     
<div class="form-container">
    <form class="form1" action="login_email.php" method="POST">
    <?php
    if(isset($_REQUEST['submit'])){
        
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $passW = $_REQUEST['password'];
        $contactNumber = $_REQUEST['contactNumber'];
        $email = $_REQUEST['email'];

        $pw = password_hash($passW,PASSWORD_DEFAULT);

        require_once("config.php");
        $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
        mysqli_query($conn,'SET FOREIGN_KEY_CHECKS=0');
        $query = "INSERT INTO 4matic.client(firstName,lastName,contactNumber,emailAddress,passwordDB) 
                VALUES('$firstName','$lastName','$contactNumber','$email','$pw')";
        if (mysqli_query($conn, $query)) {
            echo "Yebo You have been added successfully!";
            header("Refresh:4; url=login_email.php");
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