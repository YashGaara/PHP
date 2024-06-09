<?php
//1
$first = 42;
$second = "Hello World!";
echo gettype($first);  
echo "<br>";
echo gettype($second);
echo "<br>";
var_dump($first);   
var_dump($second); 
echo "<br>";

//2
echo strrev(".pu ti peeK .taerg gniod er'uoY");
echo "<br>";
echo strtolower("SOON, tHiS WILL Look NoRmAL.");
echo "<br>";
echo str_repeat("There's no place like home.<br>", 3);
echo "<br>";

//3
$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";

echo substr_count($essay_one, "really");
echo "<br>";
echo substr_count($essay_two, "obvious");
echo "<br>";

//4
function calculateDistance($num1, $num2) {
    return abs($num1 - $num2);
}
echo calculateDistance(-1, 4);
echo "<br>";
echo calculateDistance(4, -1);
echo "<br>";
echo calculateDistance(3, 7);
echo "<br>";
echo calculateDistance(7, 3);
echo "<br>";
function calculateTip($total) {
    return round($total * 1.18);
}
echo calculateTip(100);
echo "<br>";
echo calculateTip(35);
echo "<br>";
echo calculateTip(88.77);
echo "<br>";

//5
echo getrandmax();  
echo "<br>";  
echo rand();          
echo "<br>";
echo rand(1, 52);     










?>
