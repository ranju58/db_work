<?php 
include("connection.php");

$query = "SELECT * from team_members ";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>View Records</title>
</head>
<body>
    <section>
        <h3>Data of Articles</h3>
         <table>
             <tr>
             <td> ID </td>
             <td>Title </td>
             <td> Content</td>
             <td>Image</td>
             <td>Author_ID </td>
         </tr>

         <?php 
                 
                 while($row=mysqli_fetch_assoc($result))
                 {
                $ID = $row['ID'];
                $title = $row['Title'];
                $content = $row['Content'];
                $image = $row['Image'];
                $author_id = $row['Author_ID'];
         ?>
                 <tr>
                     <td><?php echo $ID ?></td>
                     <td><?php echo $title ?></td>
                     <td><?php echo $content ?></td>
                     <td><?php echo $image?></td>
                     <td><?php echo $author_id ?></td>

                     <td><a href="edit_user?ID=<?php echo $ID;?>">Edit</a></td>
                     <td><a href="delete_article.php?ID=<?php echo $ID;?>">Delete</a></td>
                 </tr>        
         <?php 
                 }  
         ?>                                                                    
                

     </table>
             </section>
             </body>
             </html>



        