<pre>
<?php
// Sample student records array
$students = [
    [
        'name' => 'John Doe',
        'age' => 20,
        'grade' => 'A'
    ],
    [
        'name' => 'Jane Smith',
        'age' => 22,
        'grade' => 'B'
    ],
    [
        'name' => 'Emily Jones',
        'age' => 19,
        'grade' => 'A'
    ],
    [
        'name' => 'Michael Brown',
        'age' => 21,
        'grade' => 'C'
    ]
];

// Displaying student records using a for loop
echo "Student Records:\n";
for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]['name'] . "\n";
    echo "Age: " . $students[$i]['age'] . "\n";
    echo "Grade: " . $students[$i]['grade'] . "\n";
    
    echo "---------------------\n";
}

// Calculating the average age using a while loop
$totalAge = 0;
$count = 0;
while ($count < count($students)) {
    $totalAge += $students[$count]['age'];
    $count++;
}
$averageAge = $totalAge / count($students);
echo "Average Age: " . $averageAge . "\n";

// // Counting the number of students with grade 'A' using a do...while loop
// $gradeACount = 0;
// $i = 0;
// do {
//     if ($students[$i]['grade'] == 'A') {
//         $gradeACount++;
//     }
//     $i++;
// } while ($i < count($students));
// echo "Number of Students with Grade 'A': " . $gradeACount . "\n";
?>
</pre>