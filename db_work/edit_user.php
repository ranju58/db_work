<?php
include("connection.php");
if( isset($_GET['edit']) )  
{  
$id = $_GET['ID'];  
$res= mysql_query("SELECT * FROM team_members WHERE ID='$id'");  
$row= mysql_fetch_array($res);  
}  
   
if( isset($_POST['ID']) )  
{  
 $id   = $_POST['ID'];
$fullname = $_POST['fullname'];
$password = $_POST['password']; 
$address = $_POST['Address'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];      


$sql  = "UPDATE team_members SET fullname='$fullname', password='$password',address='$address',email='$email',phone='$phone' WHERE id='$id'";  
$res = mysql_query($sql) 
    or die("Could not update".mysql_error());  
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

    <form action="edit_user.php" method="POST">
        <label for ="User_ID">ID</label>
        <input type="text" name="user_id" id="user_id" placeholder="user_id" ><br><br>
        <label for ="Fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname" placeholder="fullname" ><br><br>
        <label for ="Password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" ><br><br>
        <label for ="Address">Address</label>
        <input type="text" name="address" id="address" placeholder="address" ><br><br>
        <label for ="Email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" ><br><br>
        <label for ="Phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Phone" ><br><br>
        <button type ="Submit" name ="update">Update User</button><br>
</form>
</body>
</html>

