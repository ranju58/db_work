<?php
include("connection.php");

$sql = "CREATE TABLE team_members(
    ID INT PRIMARY KEY,
    Fullname VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    Address VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Phone VARCHAR(30) NOT NULL
    )";

    if($conn->query($sql)==TRUE) {
        echo "Table created successfully";
    }
    else {
        echo "Failed to create table". $conn->connect_error;
    }
    $conn->close() ;
    ?>