<?php

if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){  
        $title = $_POST['title'];
        $description = $_POST['description'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];
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
        $sql = "INSERT INTO Movies (Title, Description, Genre, Year) VALUES ('$title', '$description', '$genre', '$year')";

        
    

        if(!mysqli_query($conn, $sql)){
            echo '<h1 style="color:white"<h1>No movie added'. mysqli_error($conn);
        }
        else {
            echo '<h1 style="color:white"<h1>Thanks for adding a movie! You will be redirected to the home page';
        }
    
        mysqli_close($conn);

        header("refresh:3; url=index.php");
    }
}
?>

<!DOCTYPE html>
<html>
     <header>
        <meta charset = utf-8>
        <title>Movie Bin</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
         <style>body {background-color: black}</style>
    </header>
    <body>
        <nav>
            <ul>
                <li><a href = "index.php">Home</a></li>
            </ul>
        </nav>
        <form id = "review" action="addmovie.php?go" method="post" accept-charset="utf-8">
            <h1 style="color:white">Add a Movie</h1>
            <h3>Title: </h3>
            <input type="text" name="title">
            <br>
            <h3>Synopsis: </h3>
            <input type="text" name="description">
            <br>
            <h3>Genre: </h3>
            <input type="text" name="genre">
            <br>
            <h3>Year: </h3>
            <input type="text" name="year">
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>