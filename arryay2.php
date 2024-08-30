<?php
$my_arr=["SHyam","Naruto","Shurya","Aryan"];
array_shift($my_arr);
print_r($my_arr); // this remove values from last 
echo("<br>");

array_unshift($my_arr,"Shyam","Ansh");
print_r($my_arr); // this will add values in first 
echo "<br>";

unset($my_arr[0]); // this will remove spefied values
print_r($my_arr);
echo "<br>";

$new_arr=["Burger","Pizza"];
$insert_value="Panipuri";
$postion=1;

// we write 0 because if we write 1 it will remove values after insert value
array_splice($new_arr,$postion,0,$insert_value);
print_r($new_arr);
echo "<br>";

//this is without variable
array_splice($new_arr,4,0,"Juice");
print_r($new_arr);
echo "<br>";

// Nested Array

$nested_arr=[[1,2],[3,4],[5,6]];
$dollar=($nested_arr[0][1]);
print_r($nested_arr[2][0]);
print_r($dollar);
echo "<br>";

$very_nested=[1,"b",33,["cat",6.1,[9,"!lost",6],"mouse"],7.1];
$very_nested[3][2][1]="found!";
print_r($very_nested);

?>