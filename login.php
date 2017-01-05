<!DOCTYPE html>
<html>
    <header>
        <meta charset = utf-8>
        <title>Movie Bin</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </header>
    <body id = "index" background = "img/background.jpg">
        <ul class = "login">
        <li><form method = "post">
            Username: <br/>
            <input type = "text" name = "username"><br/>
            Password: <br/>
            <input type = "password" name = "password"><br/>
            <input type = "submit" value = "Log In">
        </form></li>
        </ul>
        <nav>
            <ul>
                <li><a href = "index.php">Home</a></li>
            </ul>
        </nav>
    </body>
</html>

<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo 'login successful';
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>