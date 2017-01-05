<!DOCTYPE html>
<html>
    <header>
        <meta charset = utf-8>
        <title>Movie Bin</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </header>
    <body>
        <nav>
            <ul>
                <li><a href = "index.php">Home</a></li>
            </ul>
        </nav>
<?php

if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){  
        $search = $_POST['search'];
        include("config.php");
        

        $sql = "SELECT  * FROM Movies WHERE Title LIKE '%" . $search .  "%' OR Genre LIKE '%" . $search ."%'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo $row["Title"]. " (" . $row["Year"]. ")<br>" . $row["Description"]. "<br><br>";
            }
        } else {
            echo "No results";
        }

        mysqli_close($conn);
        
    }
} 
else{ 
    echo  "<p>Please enter a search query</p>"; 
} 
     ?>
<br><br>
<a href="index.php"><h3>Search again...<h3></a>  
    </body>
</html>