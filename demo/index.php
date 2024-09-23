<?php
include 'db.php';

$SQL = "SELECT * FROM `[user`";
$RESULT = mysqli_query($CONN, $SQL);


?>

<h1 class="mt-5">Student List</h1>

<a class="btn btn-primary mt-3" href="add.php">Add New Student</a> 

<table class="table mt-4 ">
  <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Age</th>
    </tr>
  </thead>
  <tbody>
  <?php while($ROW = mysqli_fetch_array($RESULT)): ?>
    <tr>
      <td><?= $ROW['Id']?></td>
      <td><?= $ROW['Name']?></td>
      <td><?= $ROW['City']?></td>
      <td><?= $ROW['Age']?></td>
      
      <td>
        <a href="edit-php?id=<?php echo $ROW[id]; ?>" class="btn btn-info">Edit</a>
        <a href="delete-php?id=<?php echo $ROW[id]; ?>" class="btn btn-danger">Delete</a>
        <</td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>