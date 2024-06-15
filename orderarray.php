<?php


$array = array("apple", "banana", "cherry", "date", "elderberry");

echo "Original Array: ";
print_r($array);
echo "<br>";
echo "Accessing the second element: ". $array[1]. "<br><br>";


$array[5] = "fig";
echo "After adding a new element: ";
print_r($array);
echo "<br>";
$array[1] = "blueberry";
echo "After changing the second element: ";
print_r($array);
echo "<br><br>";


array_push($array, "grape", "honeydew");
echo "After pushing two new elements: ";
print_r($array);
echo "<br>";
$lastElement = array_pop($array);
echo "Popped element: ". $lastElement. "<br>";
echo "After popping an element: ";
print_r($array);
echo "<br><br>";

$firstElement = array_shift($array);
echo "Shifted element: ". $firstElement. "<br>";
echo "After shifting an element: ";
print_r($array);
echo "<br>";
array_unshift($array, "apricot", "avocado");
echo "After unshifting two new elements: ";
print_r($array);
echo "<br><br>";


unset($array[3]);
echo "After unsetting the fourth element: ";
print_r($array);
echo "<br>";
array_splice($array, 2, 2, array("kiwi", "lemon"));
echo "After splicing two new elements: ";
print_r($array);
echo "<br><br>";


$nestedArray = array("orange", "pineapple", "quince");
$array[] = $nestedArray;
echo "After adding a nested array: ";
print_r($array);
echo "<br>";

?>
