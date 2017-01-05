<?php

if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){  
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pw = $_POST['password'];
        $servername = "localhost";
        $username = "id453543_user";
        $password = "password";
        $dbname = "id453543_search";
    
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //add form data to database
        $sql = "INSERT INTO user (username, email, password) VALUES ('$user', '$email', '$pw')";
        
    }

    if(!mysqli_query($conn, $sql)){
        echo 'Not registered';
    }

    else {
        echo 'Registration successful! You will be redirected to the login page';
    }

     mysqli_close($conn);

    header("refresh:3; url=login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        <title>Register - Movie Bin</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href = "index.php">Home</a></li>
            </ul>
        </nav>
        <form action="register.php?go" method="post">
            <h3>Username: </h3>
            <input type="text" name="username">
            <br>
            <h3>Email: </h3>
            <input type="text" name="email">
            <br>
            <h3>Password: </h3>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="submit" value="register">
        </form>
    
    </body>
</html>