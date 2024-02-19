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
        <h3>Data of users</h3>
                    <table>
                        <tr>
                            <td> User ID </td>
                            <td> FullName </td>
                            <td> Password </td>
                            <td> Address </td>
                            <td> Email </td>
                            <td> Phone </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                        </tr>

                        <?php 
                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                               $ID = $row['ID'];
                               $fullname = $row['Fullname'];
                               $password = $row['Password'];
                               $address = $row['Address'];
                               $email = $row['Email'];
                               $phone = $row['Phone'];         
                        ?>
                                <tr>
                                    <td><?php echo $ID ?></td>
                                    <td><?php echo $fullname ?></td>
                                    <td><?php echo $password ?></td>
                                    <td><?php echo $address ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $phone ?></td>

                                    <td><a href="edit_user.php?ID=<?php echo $ID;?>">Edit</a></td>
                                    <td><a href="delete.php?ID=<?php echo $ID;?>">Delete</a></td>
                                </tr>        
                        <?php 
                                }  
                        ?>                                                                    
                    </table>
                            </section>
                            </body>
                            </html>



        