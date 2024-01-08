<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Update2.css">
    <link rel="stylesheet" type="text/css" href="Updates.css">  <script src="https://kit.fontawesome.com/d46f0b069b.js" crossorigin="anonymous"></script>	
    <title>About Us</title>
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


<section>
<img src="Joburg.jpg" alt="City of Joburg" class = "pictures"  width="100%" height="600">
<img src="dURBAN3.jpg" alt="Road in Cape Town" class = "pictures"  width="100%" height="600">
<img src="Road.jpg" alt="Road in Cape Town" class = "pictures"  width="100%" height="600">
</section>


<div class = "Contain">
<section >
  <h1 class="Header">About Us</h1><br>
  <h2 class="Semi-qua"><i>NEVER. STOP. EXPLORING.</i></h2><br>
  <h2 class="Article">Hamba Kahle was founded in 2019 to provide a service to transport individuals or small groups of
passengers (clients) to their own selective destinations. We strive to provide a convient and simple way of transportation. Further, our ultimate goal is to provide our clients with a secure form of transportation. Even though we do not provide tours, we have a decent idea of the country. As a result, we are able to provide our clients with the best experience of our country.  </h2>
<br><h2 class="Article"> We believe that simplicity is the ultimate sophistication. As such, we provide our users with the simplest user interface. We are a team which is driven by innovation. We are young and we believe even the sky is not the limit. </h2>
<br><h2 class="Article">As such, we say "Hamba Kahle!"</h2>
</section>
</div>
<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("pictures");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>


</body>
</html>