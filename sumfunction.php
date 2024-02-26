<?php
// function to add two numbers 
function Sum($num1, $num2){
    $add=$num1+$num2;
    echo"$add<br>";
}
Sum(10,20);

//recursive function to display numbers upto five

 function display($num){
    if($num <=5){
        echo "$num <br>";
        display($num+1);

 }
}
 display(1);

 //function to display the score of the match using function

function MatchScore($num){
    $num+=$num;
    return $num;
}
echo"The score of the match".MatchScore(20);



//function to display the name of students in a class
function students($fname,$lname="Bhusal"){
echo (" The name of the student is ". $fname." ". $lname) ;
echo "<br>";
}
students("Ranju");
students("Nisha", "Rai");
students("Purnima","KC");


//function to display the totals marks of ranju in each subject
function Marks($MarksArray){
$sum=0;
foreach($MarksArray as $Mark){
$sum += $Mark;
}
return $sum;
}
$ranju=[20,30,25,40,50];
$rajan=[20,20,20,20,20];
$Marksranju = Marks($ranju);
$Marksrajan = Marks($rajan);
echo "The total marks of ranju out of 250 is $Marksranju<br>";
echo "The total marks of rajan out of 250 is $Marksrajan";
echo"<br>";


//passing arguments by reference
function addition(&$a)
{
$a="My name is Ranju";
}
$b="I am 22 yrs old";
addition($b);
echo("$b");
echo "<br>";

// passing argument by reference to add numbers
function addtwo(&$number1){
$number1+= 10;
}
$number2=20;
addtwo($number2);
echo("The sum of two numbers is $number2");


?>