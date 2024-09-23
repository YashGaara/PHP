<?php
include_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name']) || isset($_POST['city']) || isset($_POST['age'])) {
        $NAME = $_POST['name'];
        $CITY = $_POST['city'];
        $AGE = $_POST['age'];

        $SQL = "INSERT INTO user (name, city, age) VALUES ('$NAME','$CITY','$AGE')";

        if(mysqli_query($CONN, $SQL)) {
            echo 'New Record Created';
            // header('Location : index.php');
        }else {
            echo mysqli_error($CONN);
        }
    }
    
}

?>

<h1 class="mt-5">Add New Student</h1>

<form method="post">
    <div class="form-group mt-5">
        <label for="name">Name :- </label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group mt-4">
        <label for="name">City :- </label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>
    <div class="form-group mt-4">
        <label for="name">Age :- </label>
        <input type="text" class="form-control" id="age" name="age" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Add In Student List</button>
</form>

<a class="btn btn-secondary mt-3" href="index.php">Back To List</a>