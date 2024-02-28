<?php
function form($name, $age, $phone, $dob){
    $num = strlen($phone);
    $days=(new DateTime())->diff(new DateTime($dob))->days;
    //echo $days;
  // $year= ( new Datetime('2020-01-30')diff(new Datetime('2010-02-28'))->days);
    if(empty($_POST["username"]) && (empty($_POST["age"])) && (empty($_POST["phone"])) && (empty($_POST["dob"]))){
        echo "All fields are empty"; 
    }
    else if(empty($_POST["username"])){
        echo"The username is empty";
     }
     else if(empty($_POST["age"])){
        echo"The age is empty";
     }
     else if($num>10 || $num<10){
        echo"Invalid phone number";
     }
     else if($days<(18*365)){
        echo "The user is less than 18 years old";
     }
     else{
       echo "Welcome"." ".$name.". "."Your age is"." ".$age  ;
       echo"<br>";
       echo "The phone number is ".$phone ;
       echo"<br>";
       echo "Your date of birth is".$dob;
     }
}
 if(isset($_POST["Submit"])){
    form($_POST["username"],$_POST["age"],$_POST["phone"],$_POST["dob"]);

 }

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>My test page</title>
    <link rel="stylesheet" href="demo.css">
</head>

<body>
    <form action="form.php" method="POST">
        <label for="username">Enter your name</label>
        <input type="text" name="username" id="username" placeholder="username"><br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" placeholder="age"><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" pattern="{0-9}[10]" placeholder="phone"><br>
        <label for="DOB">Date of birth</label>
        <input type="date" name="dob" id="dob" placeholder="2001-12-30"><br>
        <input type="submit" name="Submit"><br>

</body>

</html>