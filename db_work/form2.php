<?php
include("connection.php");

          
         // Taking all 5 values from the form data(input)
         $ID =  $_REQUEST['article_id'];
         $Title  =  $_REQUEST['title'];
         $Content= $_REQUEST['content'];
         $Image = $_REQUEST['image'];
         $Author_ID= $_REQUEST['author_id'];
          
         // Performing insert query execution
        
         $sql = "INSERT INTO articles VALUES ('$ID', 
             '$Title','$Content','$Image','$Author_ID')";
          
         if(mysqli_query($conn, $sql)){
             echo "<h3>data stored in a database successfully.";
  
             echo nl2br("\n$ID \n $Title\n "
                 . "$Content\n $Image\n $Author_ID");
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
    <link rel="stylesheet" href="">   
  </head>
  <body>

    <form action="form.php" method="POST">
        <label for ="User_ID">ID</label>
        <input type="text" name="user_id" id="user_id" placeholder="user_id" ><br><br>
        <label for ="Title">Title</label>
        <input type="text" name="title" id="title" placeholder="title" ><br><br>
        <label for ="Content">Content</label>
        <input type="text" name="content" id="content" placeholder="content" ><br><br>
        <label for ="Image">Image</label>
        <input type="image" name="image" id="image" placeholder="image" ><br><br>
        <label for ="Author_ID">Author_ID</label>
        <input type="text" name="author_id" id="author_id" placeholder="author_id" ><br><br>

        <button type ="Submit" name ="Add">Add Article</button><br>
</form>
</body>
</html>