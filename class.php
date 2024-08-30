<?php

function kk()
{
    echo "hello 876 <br>";
    return "leaning coding php";
}
// kk();
$value = kk();
echo $value;
echo "<br>";

function retuenvalue()
{
    return 6;
}
echo retuenvalue() + 6;
function returnNothing()
{
    echo "<br>";
    echo "hello";
    echo "<br>";
}
$result = returnNothing();

//parameter
function add($name)
{
    echo "my name is $name <br>";
}
add("sam");
add("kk modi");
add("russian");

//multuple parameter
function plus($a, $b)
{
    echo $a + $b;
}
plus(5, 3);
echo "<br>";
plus(4, 8);
echo "<br>";

//default parameter
function defaultparameter($x = "php")
{
    echo "hello $x <br>";
}
defaultparameter("java");
defaultparameter("c");
defaultparameter();

//pass by reference
function addx($param)
{
    $param = $param . "x";
    echo $param;
    echo "<br>";
}
$hello = "sam";
addx($hello);
echo $hello;
echo "<br>"

//variable scope
function clculatedayleft($a,$b,$c);
{
    $result = $a / ($b * $c);
}
echo caculatedayleft(300,2,30);


?>