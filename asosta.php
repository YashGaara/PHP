<?php

$my_array = ["movie"=>"dathe note","food"=>"apple",];
print_r ($my_array);

echo "<br><br>";

$my_array["chalk"]="duster";
print_r($my_array); 
echo "<br>";
echo $my_array["food"];

echo "<br><br>";

$my_array["movie"]="naruto";
print_r($my_array);

echo"<br>";

unset($my_array["chalk"]);
print_r($my_array);

echo"<br>";

$num=[10 => "ten",1=>"one",2=>"two"];
print_r($num);

echo "<br>";

$num["j.p"]='2';
print_r($num);
echo"<br>";
echo $num[2];

echo "<br><br>";

unset($num["j.k"]);
print_r($num);

echo "<br><br>";

$varaiable = $my_array + $num;
print_r($varaiable);

echo "<br><br>";

$number_array=[2,3,7];
$string_array=["one","two","three"];
$uninon_array=$number_array+$string_array;
print($uninon_array);

echo "<br><br>";

$name = $my_array;
$my_array["food"];
echo $my_array["food"];
echo"<br>";
echo $duplicate["food"];

echo"<br><br>";

function juice($drink);
{
  $drink["orange"]="red";
}
$object ={"shape"=>"circle","size"=>"small","orange"=>"orange"};
juice($object);
echo $object["orange"];
echo"<br><br>";

function juice($dodo);
{
  $dodo["orange"]="red";
}
$object ={"shape"=>"circle","size"=>"small","orange"=>"orange"};
juice($object);
echo$object["orange"];










?>