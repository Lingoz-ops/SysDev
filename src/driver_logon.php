<?php
session_start(); 
?>
<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup.css"> 
    <link rel="stylesheet" type="text/css" href="Style.css">
    <meta charset="utf-8"> 
  	 <title>Login Details</title>
  </head>
        <?php
          require_once("config.php");
          if(isset($_REQUEST['submit'])){
            
            $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
    
            $mail = $_REQUEST['email'];
            $pw = $_REQUEST['password'];
            
            $query = "SELECT * FROM 4matic.driver WHERE email = '$mail'";
            
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
                 
            $_SESSION['driverID'] = $row['driverID'];
            $ses = $row['driverID'];
            if ($row == FALSE) {
                echo "Error: Can't find email address " . "<br>" . mysqli_error($conn);
                header("Refresh:3; url=login_driver.php?wrong_email");
            } 
            else {

                $pw_check = password_verify($pw,$row['driverPassword']);
                if($pw_check == FALSE){
                  echo "Error: wrong password " . "<br>" . mysqli_error($conn);
                  header("Refresh:3; url=login_driver.php?wrong_password");
                }
                else{
                    
                    //$_SESSION['driverID'] = $row['driverID'];
                    //$_SESSION['driverName'] = $row['firstName'].$row['lastName'];
                    //$id = $row['driverID'];
                  
                    header("Refresh:0; url=driver_menu.php?login=success?id=$ses");
                }
                
            }
            mysqli_close($conn);     
          }
        ?>
        </body> 
</html>