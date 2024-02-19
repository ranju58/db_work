<?php
include("connection.php");
$id = $_GET['ID'];

// sql to delete a record
$sql = "DELETE FROM articles WHERE ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: view_users2.php');
    exit;
} else {
    echo "Error deleting record";
}
?>