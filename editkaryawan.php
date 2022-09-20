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
<h1 class="text-center mt-2"> Edit Karyawan </h1>
<form method="POST" action="viewkaryawan.php?edit=<?= $_GET['edit']?>" class="mx-auto  mt-2 w-50">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input value="<?=$_SESSION['listkaryawan'][$_GET['edit']]->nama?>" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input value="<?=$_SESSION['listkaryawan'][$_GET['edit']]->jabatan?>" name="jabatan" placeholder="Masukkan Jabatan" type="text" class="form-control" id="jabatan" required>
  </div>
  <div class="mb-3">
    <label for="usia" class="form-label">Usia</label>
    <input value="<?=$_SESSION['listkaryawan'][$_GET['edit']]->usia?>" name="usia" placeholder="Masukkan usia" type="number" class="form-control" id="usia" required>
  </div>
 

   <button type="submit" name="edit" class="text-center d-block mx-auto btn btn-primary">Save Changes</button>
</form>
</body>
</html>
