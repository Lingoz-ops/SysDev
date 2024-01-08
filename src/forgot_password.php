<!doctype html> 
<html> 
  <head>
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <meta charset="utf-8"> 
  	 
  </head> 
  <body>  	     
<div class="form-container">
    <nav>
    <form class="form1" action="menu.php" method="POST">
        <p>Please enter your email address and we will send a link where you can reset password</p>
        <input type="text" name="username" placeholder="Please enter Email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="username/email required" required><br>
        <input type="submit" name="submit" value="Submit email address"><br><br>
   </form>
    </nav>
</div>
</body> 
</html>
    