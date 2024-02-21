<?php
include("connection.php");
if( isset($_GET['update']) )  
{  
$id = $_GET['ID'];  
$query=mysqli_query($conn,"select * from `team_members` where ID='$id'");
$row=mysqli_fetch_array($query);
}  
   
if( isset($_POST['update']) )  
{ 
 $id   = $_GET['ID'];
$fullname = $_POST['fullname'];
$password = $_POST['password']; 
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];      

$sql  = "UPDATE team_members SET fullname='$fullname', password='$password', address='$address', email='$email', phone='$phone' WHERE ID='$id'";  
echo '<br>'.$sql;

$res = mysqli_query($conn,$sql) 
    or die("Could not update".mysqli_error());  
    header('location:view_users.php');
}  
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Database</title>
</head>

<body>
    <form method="POST" action="">
        <!-- <label for="User_ID">ID</label> -->
        <!-- <input type="text" name="user_id" placeholder="user_id"><br><br> -->
        <label for="Fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname" placeholder="fullname"><br><br>
        <label for="Password">Password</label>
        <input type="password" name="password" id="password" placeholder="password"><br><br>
        <label for="Address">Address</label>
        <input type="text" name="address" id="address" placeholder="address"><br><br>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email"><br><br>
        <label for="Phone">Phone</label>
        <input type="number" name="phone" id="phone" placeholder="Phone"><br><br>
        <button type="Submit" name="update">Update User</button><br>
    </form>
</body>

</html>
