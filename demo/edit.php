<?php
include_once'db.php';

if(isset($_GET["id"])){
    $id = $_GET['id'];

    $result = $mySqli->query("SELECT*FROM user WHERE id=$id");

    if($result->num_rows == 1){
        $row = $result->fecth_assoc();
        $name = $row["name"];
        $city = $row["city"];
        $age = $row["age"];
    }
}
    if(isset($_POST["update"])){
        $id =$_POST["id"];
        $name =$_POST["name"];
        $name =$_POST["city"];
        $name =$_POST["age"];

        $mySqli->query(query:"update user SET name='$name',city='$city,phone=$p")
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
