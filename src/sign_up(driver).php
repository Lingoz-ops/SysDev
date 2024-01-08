<?php
session_start();
$ses = $_SESSION['driverID'];
?>
<!doctype html> 
<html> 
  <head>
  <link rel="stylesheet" type="text/css" href="New.css"> 
  <link rel="stylesheet" type="text/css" href="Fix2.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="Driver.css">
  <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>	 
    <meta charset="utf-8"> 
  	 
  </head> 
  <ul class = "OrderForList">
    <li class = "List"><a href="menu.php" class = "MainMenu"><i class="fas fa-home"></i>Hamba kahle</a></li>
    <div class = "LOGIN">
    
    <li class = "List"><a href="#"><i class="far fa-smile-wink"></i> About Us</a></li>
    <li class = "List" ><a href="#"><i class="fab fa-readme"></i> Reviews</a></li>
    <li class = "List"><a href="#"><i class="fas fa-phone-square-alt"></i> Help?</a></li>
    <li class = "List"><a href="sign_up.php" ><i class="fas fa-sign-in-alt"></i> Sign up</a></li>
    <li class = "List"><a href="login_email.php"><i class="fas fa-users"></i> Login</a></li>
    </div><main>
    </ul>


  <body class = "SignUp">  	     
<div class="form-container">
    <nav>
    <form class="form1" action="signupdB(driver).php" method="POST">
        <h2>Sign up Hamba Kahle</h2>
        <input type="text"  placeholder="First Name" id="firstName" name="firstName" pattern="[A-Za-z]{1,32}" title="first name required" required><br>
        <input type="text"  placeholder="Last Name" id="lastName" name="lastName" pattern="[A-Za-z]{1,32}" title="last name required" required><br>
        <input type="text"  placeholder="Contact Number" id="contactNumber" name="contactNumber" title="Contact Number required" required><br>
        <input type="text"  placeholder="Email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="username/email required" required><br>
        <input type="date"  placeholder="Date of Birth" id="dob" name="dob" title="Date of Birth required" required><br>
        <input type="date"  placeholder="Date Employed" id="dEmp" name="dEmp" title="Date of Employment required" required><br>
        <input type="text"  placeholder="Hometown" id="hTown" name="hTown" title="HomeTown required" required><br>
        <input type="password"  placeholder="Password" id="password" name="password" pattern=".{5,}" title="five or more letters/numbers" required><br>
        <input type="password"  placeholder="Re-enter Password" id="re_password" name="re_password" pattern=".{5,}" title="the two passwords must match" required><br>

        <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("re_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        re_password.onkeyup = validatePassword;
        </script>

        <input type="submit" name="submit" value="Sign Up to be driver!"><br><br>
       
        
    </form>
    </nav>
</div>
<footer class="footer-distributed">
<div class="footer-left">


 
  <a href="menu.php" class = "Decoration"><h3><span>hamba</span>kahle</h3></a>
  <ul class="footer-links">
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Global Citizenship</a></li>
    <li><a href="#">Innovation</a></li>
    <li><a href="#">Covid-19</a></li>
  </ul>

  <p id="copyrights">All Rights &copy; Reserved<a href="#"> &#64;4Matic</a> 2020 </p>
</div>

<div class="footer-center">
  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>29 African street</span> Grahamstown</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>(+27) 82 345 2334</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="hambakahle:hambakahle@gmail.com">hambakahle@gmail.com</a></p>
  </div>

</div>

<div class="footer-right">

  
  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

</div>
<div class="app-badges">
  <a href="#" class="app-store-button">
  <img src="https://bolt.eu/static/en-8de0c47bd0804c7387b44eb24f7af748.svg" alt="Download Hambe Kahle app in App Store">
  </a>
  <a href="#" class="huawei-store-button">
  <img src="https://bolt.eu/static/en-971aaabd768653b568201361a52443d9.svg" alt="Download Bolt app in Huawei App Gallery">
  </a>
 </div>
</footer>

</body> 
</html>