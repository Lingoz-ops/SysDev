<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="signup.css"> 
    <link rel="stylesheet" type="text/css" href="Fix2.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    
    <meta charset="utf-8"> 
  	 <title>Login Details</title>
  </head> 
  <body>  
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

         
<div class="form-container">
    <nav>
    <form class="form1" action="admin_menu.php" method="POST">
        <h2>Login to Hamba Kahle (For Admin)</h2>
        <input type="text" name="username" placeholder="Please enter Email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="username/email required" required><br>
        <input type="password" name="username" placeholder="Please enter Password" id="password" pattern=".{5,}" title="five or more letters/numbers" required><br>

        Show Password <input type="checkbox" onclick="checkBox()"><br>

        <script>
          function checkBox() {
            var p = document.getElementById("password");
            if (p.type === "password") {
              p.type = "text";
            } else {
              p.type = "password";
            }
          }
          </script>
          
        <a href="forgot_password.php">Forgot password?</a><br><br>
        <input type="submit" name="submit" value="Login"><br><br>
       
        
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