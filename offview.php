<?php
require("header.php");
require("controllers.php");
if(isset($_POST['submit'])){
  insertoff();
}
if(isset($_GET['delete'])){
  deleteoff($_GET['delete']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Week 1</title>
</head>
<body>
    <h1 class="text-center"> List office </h1>
<table class="table mx-auto table-dark mt-2 w-50">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Adress</th>
      <th scope="col">City</th>
      <th scope="col">Phone</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(indexoff() as $index=>$office)
    {
      echo"
        <tr>    

        <td>".$index."</td>
        <td>".$office->name."</td>
        <td>".$office->adress."</td>
        <td>".$office->city."</td>
        <td>".$office->phone."</td>
        <td><a href='offview.php?delete=".$index."'><button class='btn btn-primary'> Delete </button></a></td>
        </tr>
        ";
    }
    ?>
  </tbody>
</table> 
<h1 class="text-center mt-2"> Add office </h1>
<form method="POST" action="offview.php" class="mx-auto  mt-2 w-50">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" placeholder="Insert Office Name" type="text" class="form-control" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Adress</label>
    <input name="adress" placeholder="Insert Adress" type="text" class="form-control" id="adress" required>
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input name="city" placeholder="Insert City" type="text" class="form-control" id="city" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input name="phone" placeholder="Insert Phone Number" type="text" class="form-control" id="phone" required>
  </div>
 

  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
