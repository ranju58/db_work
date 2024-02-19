<?php
include("connection.php");


$sql = "CREATE TABLE articles(
    ID INT PRIMARY KEY,
    Title VARCHAR(30) NOT NULL,
    Content VARCHAR(30) NOT NULL,
    Image VARCHAR(30) NOT NULL,
    Author_ID VARCHAR(30) NOT NULL
    )";

    if($conn->query($sql)==TRUE) {
        echo "Table created successfully";
    }
    else {
        echo "Failed to create table". $conn->connect_error;
    }
    $conn->close() ;
    ?>