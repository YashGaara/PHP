<?php
$my_array=["name"=>"Shyam","Age"=>18,"Role"=>"Software developer"];
print_r($my_array);
echo "<br>";

$my_array["Food"]="Pizza";
print_r($my_array);
echo "<br>";

echo $my_array["name"]; 
echo "<br>";

$my_array["Age"]="19";
print_r($my_array);
echo "<br>";

unset($my_array["Age"]);
print_r( $my_array);
echo "<br>";

$num=[10=>"Ten",3=>"Three",4=>"Four"];
print_r($num);
echo "<br>";

$file=[6,8,4,90];
$file["color"]="Red";
print_r($file);
echo "<br>";

$array_merge=$num+$file;
print_r($array_merge);
echo "<br>";

$num_array=[1,2,3];
$string_array=["one","two","three","four"];
$unioun_array=$num_array+$string_array;
print_r($unioun_array);
echo "<br>";

$duplicate=$my_array;

$name=&$my_array;
$my_array["name"]="Aryan";
echo $my_array["name"];
echo "<br>";
echo $duplicate["name"];
echo "<br>";
echo $name["name"];
echo "<br>";
function color(&$dodo){
    $dodo["Orange"]="Red";
}
$object=["Shape"=>"circle","Size"=>"Small","orange"=>"orange"];
color($object);
echo $object["orange"];
?>