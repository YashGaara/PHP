<?php
$initial = "123";
$a = octdec($initial);
echo $a;
echo "<br>";

$b = deg2rad($a);
echo $b;
echo "<br>";

$c = cos($b);
echo $c; 
echo "<br>";

$d = round($c, 3);
echo $d; // 0.122
echo "<br>";

$e = log($d);
echo $e; 
echo "<br>";

$f = abs($e);
echo $f; 
echo "<br>";

$f = min($f, 1);
$g = acos($f);
echo $g;
echo "<br>";

$h = rad2deg($g);
echo $h; 

$i = floor($h);
echo $i;
echo "<br>";

$j = $i - 47;
echo $j; 
echo "<br>";

?>