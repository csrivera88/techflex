<!DOCTYPE html>
<html>
    <header>
        <meta charset = utf-8>
        <title>Movie Bin</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </header>
    <body id = "index" background = "img/background.jpg">
        <?php include("session.php"); if(isset($_SESSION['login_user'])): ?>
            <h3 style="color:white;">Welcome</h3><br>
            <form method="get" action="logout.php">
                <button type="submit">Log Out</button>
            </form>
            <form method="get" action="review.php">
                <button type="submit">Add a Review</button>
            </form><br><br>
            <?php include("checkadmin.php"); if($isAdmin):?>
                <form method="get" action="addmovie.php">
                    <button type="submit">Add Movie</button><br><br>
                </form>
            <?php endif; ?>    
        <?php else: ?>
            <form method="get" action="login.php">
                <button type="submit">Log In</button><br><br>
            </form>
            <form method="get" action="register.php">
                <button type="submit">Register</button><br><br>
            </form>
        <?php endif; ?>
        <img id = "main" src = "img/Logo.png">
        <form method="post" action="searchTest.php?go" id="searchform">
            <input id="search" type="text" placeholder="Search for movies or genres">
            <input id="submit" name ="search" type="submit" value="Search">
        </form>
        
    </body>
</html>