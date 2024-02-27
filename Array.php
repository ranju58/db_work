<?php

function get_array_subset($array,$length){
    
  $newArray=array_slice($array,1,$length);
    
    return $newArray;
}
//to get array subset
 
 $ranju=[10,20,30,40,50];
 $newranju=get_array_subset($ranju,2);
 var_dump($newranju);
 
//  echo $ranju[3];
//  echo"<br>";
//  print_r($ranju);
 
//  to count the number of elements in an array
 $count=count($ranju);
 echo array_shift($ranju);
 echo"<br>";
 echo $count;
 echo"<br>";

 //to reverse the array
 function reverse_array($array){
    $rev_array=[];
    for($i=(count($array)-1);$i>=0;$i--){
        array_push($rev_array,$array[$i]);
    }
    return $rev_array;
 }

    $saugat=[1,2,3,4,5];
    $rev_saugat=reverse_array($saugat);
    var_dump($rev_saugat);
    echo"<br>";


    //string to array
    $convert ="saugat";
    $convert_arr = str_split($convert);
    $convert_reversed = reverse_array($convert_arr);
    echo (implode("",$convert_reversed));
    echo 'taguas';


    

 //indexed array
 $tens=[10,100,1000];
 print_r($tens);
 echo"<br>";
 array_push($tens,10000,100000);
 print_r($tens);
 echo"<br>";


 //indexed array
 $fruits=array("mango","oranges","pineapple","papaya","watermelon","apple");
 
 //to arrange the array in ascending order
 sort($fruits);
 echo $fruits[4];
 echo"<br>";
 echo $fruits[2];
 echo"<br>";
 echo $fruits[1];
 echo"<br>";
 //to print all the values of the array fruits.
 var_dump($fruits);
 echo"<br>";

//remove the elements from an array
//  unset($fruits[0]);
//  unset($fruits);

 //associative array
 $favourites=[
    "fruit"=>"mango",
    "vegetable"=>"rajma",
    "color"=> ["blue",['ff'=>'dd'],'pppp','ooo']
 ];
 echo ($favourites["color"][2]);

 echo '<br>=====<br>';
 var_dump (array_keys($favourites["color"][1]));
 echo '<br>=====<br>';

 echo $favourites["color"]["ff"];
 echo $favourites["fruit"];
 echo"<br>";
 //to print all values of array 
 print_r ($favourites);
 echo"<br>";
 
 // to check whether the index exists in the given array or not
 if(array_key_exists("color",$favourites)){
    echo"Color exists<br>";
 }
 else{
    echo"color doesnot exits<br>";
 }


 //multidimensional array
 $matrix=[
    [1,2,3],
    [4,5,6],
    [7,8,9]
 ];
 var_dump($matrix);
 echo"<br>";
 print_r($matrix);
 echo"<br>";
 echo $matrix[0][0];
 echo"<br>";
 echo $matrix[0][1];
 echo"<br>";
 echo $matrix[1][0];
 echo"<br>";
 echo $matrix[1][1];
 

?>