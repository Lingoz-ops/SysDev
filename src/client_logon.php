<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup.css"> 
    <link rel="stylesheet" type="text/css" href="Fix.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css"> 
    <meta charset="utf-8"> 
    <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>
  	 <title>Login Details</title>
  </head>
        <?php
          require_once("config.php");
          if(isset($_REQUEST['submit'])){
            
            $conn = mysqli_connect(servername, username, password, database) or die("Can't connect to server!");
            $mail = $_REQUEST['email'];
            $pw = $_REQUEST['password'];
            
            $query = "SELECT * FROM 4matic.client WHERE emailAddress = '$mail'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            if ($row == FALSE) {
                echo "Error: Can't find email address " . "<br>" . mysqli_error($conn);
                header("Refresh:2; url=login_email.php");
            } 
            else {
                $pw_check = password_verify($pw,$row['passwordDB']);
                if($pw_check == FALSE){
                  header("Refresh:0; url=login_email.php?wrong-password!");
                }
                else{
                    session_start();
                    $_SESSION['clientID'] = $row['clientID'];
                    $ans = $_SESSION['clientID'];

                    $_SESSION['userName'] = $row['firstName'].$row['lastName'];
                    header("Refresh:0; url=client_menu.php?id=$ans?login=success!");
                }         
            }
            mysqli_close($conn);     
          }
        ?>
        <body> 




</body>

</html>