<?php
include("connection.php");
$id = $_GET['ID'];

// sql to delete a record
$sql = "DELETE FROM team_members WHERE ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: view_users.php');
    exit;
} else {
    echo "Error deleting record";
}
?>