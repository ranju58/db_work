<?php
// using while loop

$i=0;
while($i<5){
    $i++;
    echo"$i <br>";
}

//using do while loop
$i=5;
do{
    $i++;
    echo "$i <br>";
}
while($i< 10);

//using for loop
for($i=10; $i<=20; $i++){
    echo "$i <br>";
}

//using for each loop
$colors=array("blue","green","yellow","red","white","black");
foreach($colors as $color){
    echo "$color<br>";
}

?>