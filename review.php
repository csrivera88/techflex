<?php

if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){  
        $user = $_POST['username'];
        $title = $_POST['movie'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];
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
        $sql = "INSERT INTO Review (title, rating, review) VALUES ('$title', '$rating', '$review')";

        
    }

if(!mysqli_query($conn, $sql)){
    echo 'No review added';
}

else {
    echo 'Thanks for your review! You will be redirected to the home page';
}

 mysqli_close($conn);

header("refresh:3; url=index.php");
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
        <form id = "review" action="review.php?go" method="post" accept-charset="utf-8">
            <fieldset><legend>Movie Review</legend>	
            <p><label>Movie Title</label><br/><input type = "text" name = "movie" /><br/><br/><label for="rating">Stars</label><br/><input type="radio" name="rating"
            value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
            <input type="radio" name="rating" value="3" /> 3 <input type="radio"
            name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>
            <p><label for="review">Review</label><br/><textarea name="review" rows="8" cols="40">
            </textarea></p>
            <p><input type="submit" name="submit" value="Submit Review"></p>
            <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
            <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
            </fieldset>
        </form>
    </body>
</html>