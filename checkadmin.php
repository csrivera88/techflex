<?php
    include("config.php");
    $sql = "SELECT * FROM user WHERE username = ".$_SESSION['login_user'];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $isAdmin = $row['admin'];

    $count = mysqli_num_rows($result);
    
?>