<?php
require("header.php");
require("controllers.php");


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

<h1 class="text-center mt-2"> Edit office </h1>
<form method="POST" action="offview.php?edit=<?= $_GET['edit']?>" class="mx-auto  mt-2 w-50">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input value="<?=$_SESSION['listoffice'][$_GET['edit']]->name?>" name="name" placeholder="Insert Office Name" type="text" class="form-control" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Adress</label>
    <input value="<?=$_SESSION['listoffice'][$_GET['edit']]->adress?>" name="adress" placeholder="Insert Adress" type="text" class="form-control" id="adress" required>
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input value="<?=$_SESSION['listoffice'][$_GET['edit']]->city?>" name="city" placeholder="Insert City" type="text" class="form-control" id="city" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input value="<?=$_SESSION['listoffice'][$_GET['edit']]->phone?>" name="phone" placeholder="Insert Phone Number" type="text" class="form-control" id="phone" required>
  </div>
 

  <button type="submit" name="edit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
