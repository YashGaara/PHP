<?php
$array=array("Shyam","Aryan","Jaydeep");
echo count($array);
echo "<br>";

$my_list =[1,6,8,49];
print_r($my_list);
echo "<br>";

echo $my_list[2];
echo "<br>";

$num_var=1;
$file =[1,"cat",2,"Dog","3"];
echo $file[$num_var]; 
echo "<br>";
$file[]="hi";
print_r($file);
echo "<br>";
echo  implode(" ",$file);
echo "<br>";
$new_array=["Naruto","Hinata","sakura","Saske"];  
array_pop($new_array);
print_r ($new_array);

$array_p=["j"];
$pus=array_push($array_p,"helo","hi","no");
print_r ($array_p) ;
?>