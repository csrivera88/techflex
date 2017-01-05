<?php
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
?> 