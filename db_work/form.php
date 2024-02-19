<?php
include("connection.php");

          
         // Taking all 5 values from the form data(input)
         $ID =  $_REQUEST['user_id'];
         $fullname = $_REQUEST['fullname'];
         $password =  $_REQUEST['password'];
         $address = $_REQUEST['address'];
         $email = $_REQUEST['email'];
         $phone = $_REQUEST['phone'];
          
         // Performing insert query execution
        
         $sql = "INSERT INTO team_members VALUES ('$ID', 
             '$fullname','$password','$address','$email','$phone')";
          
         if(mysqli_query($conn, $sql)){
             echo "<h3>data stored in a database successfully.";
  
             echo nl2br("\n$ID \n $fullname\n "
                 . "$password\n $address\n $email\n $phone");
         } 
         else{
             echo "ERROR: Hush! Sorry $sql. "
                 . mysqli_error($conn);
         }
          
         // Close connection
         mysqli_close($conn);
         ?>
<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Database</title>  
  </head>
  <body>

    <form action="form.php" method="POST">
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
        <button type ="Submit" name ="Add">Add User</button><br>
</form>
</body>
</html>