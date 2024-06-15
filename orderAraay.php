<?php
namespace Codecademy;
$first_array = ["hello", 42, "world", 3.14, "PHP"];
echo count($first_array); 
echo "<br>";

$with_function = array("PHP", "popcorn", 555.55);
$with_short = ["PHP", "popcorn", 555.55];

$message = ["Oh hey", " You're doing great", " Keep up the good work!"];
echo "<br>";
$favorite_nums = [7, 201, 33, 88, 91];
echo "<br>";

echo implode("!", $message);
print_r($favorite_nums);
echo "<br>";

$round_one = ["X", "X", "first winner"];
echo "<br>";
$round_two = ["second winner", "X", "X", "X"];
echo "<br>";
$round_three = ["X", "X", "X", "X", "third winner"];
echo "<br>";

$winners = [$round_one[2], $round_two[0], $round_three[4]];
print_r($winners);$change_me = [3, 6, 9];

$change_me[] = "new string"; 
$change_me[] = 100; 
$change_me[1] = "tadpole"; 

print_r($change_me); 
$stack = ["wild success", "failure", "struggle"];

array_push($stack, "blocker", "impediment"); 
echo "After pushing elements: ";
print_r($stack);

while (count($stack) > 1) {
    array_pop($stack);
}

echo "After popping elements: ";
print_r($stack)

?>
