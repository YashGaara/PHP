<?php
class Person {
    private $name;
    private $age;

    // Constructor to initialize properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getter and setter for name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter and setter for age
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // Method to display person's details
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

class Student extends Person {
    private $studentID;
    private $major;

    // Constructor to initialize properties
    public function __construct($name, $age, $studentID, $major) {
        parent::__construct($name, $age);
        $this->studentID = $studentID;
        $this->major = $major;
    }

    // Getter and setter for studentID
    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Getter and setter for major
    public function getMajor() {
        return $this->major;
    }

    public function setMajor($major) {
        $this->major = $major;
    }

    // Method to calculate the student's age based on the current year
    public function calculateAge($currentYear) {
        return $currentYear - ($currentYear - $this->getAge());
    }

    // Overridden method to display student's details
    public function displayInfo() {
        parent::displayInfo();
        echo "Student ID: " . $this->studentID . "<br>";
        echo "Major: " . $this->major . "<br>";
    }
}

class StudentUtils {
    // Static method to format student details
    public static function formatStudentDetails($student) {
        return "Student Details:\n" .
               "Name: " . $student->getName() . "\n" .
               "Age: " . $student->getAge() . "\n" .
               "Student ID: " . $student->getStudentID() . "\n" .
               "Major: " . $student->getMajor() . "\n";
    }
}


// Instantiate a Student object
$student = new Student("yash bhimani", 20, "S12345", "Computer Science");

// Display student details using the displayInfo() method
$student->displayInfo();

// Format and print student details using the static formatStudentDetails() method
echo "<pre>" . StudentUtils::formatStudentDetails($student) . "</pre>";



?>
