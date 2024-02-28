<?php
include("connection.php");


function update_team_members($id,$parameter,$data, $conn){
 $sql  = "UPDATE team_members SET $parameter='$data' WHERE ID='$id'";
 $res = mysqli_query($conn,$sql);
 echo "Updated successfully";
}


update_team_members(02,'password','test', $conn);
 
// $sql  = "UPDATE team_members SET  WHERE ID='$id'";
// $res = mysqli_query($conn,$sql);

?>