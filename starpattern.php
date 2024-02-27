<?php
//pattern 1
for ($i = 0; $i<=5; $i++) {
    for ($j=0 ; $j<=$i; $j++) {
        echo "*";
    }
    echo"<br>";
}

//christmas tree pattern
for ($i = 0; $i<= 5; $i++) {
    for ($j= 0; $j<=5-$i; $j++) {
        echo "&nbsp;&nbsp";
    }
    for ($k= 0; $k<=$i; $k++) {
        echo "*&nbsp;&nbsp";
    }
echo"<br>";
}

//christmas tree pattern skipping having only odd no of stars
for ($i = 0; $i<= 7; $i+=2) {
    for($j=0;$j<7-$i;$j++){
        echo"&nbsp;&nbsp";
    }
    for ($k= 0; $k<=$i; $k++){
        echo "*&nbsp;&nbsp";
    }
    echo"<br>";
}

//christmas tree pattern skipping having only odd no of stars (the other way)
//
//function triangle($n)
//{
//$k= 2 * $n -2;
//for ($i =0;$i<= $n; $i++){
//    for ($j= 0; $j<$k; $j++)
//        echo "";
//    $k=$k-1;
//    
//for ($j= 0; $j<=$i; $j++) {
//    echo "*";
//}
//echo "\n";
//}
//}
//$n=5;
//triangle($n);
?>