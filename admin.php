<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "search";

//create connection
$conn = mysqli_connect($servername, $username, $passoword, $dbname);
//check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//create tables
$sql = "CREATE TABLE Title (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
description VARCHAR(500) NOT NULL,
year INT(4)
directorID INT(2) NOT NULL,
genreID INT(2) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Title created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE Actor (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Actor created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}
    
$sql = "CREATE TABLE Director (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Director created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}
    
$sql = "CREATE TABLE Genre (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Genre created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
    
?>