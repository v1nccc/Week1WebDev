<?php
require("controller.php");
if(isset($_POST['submit'])){
  insert();
}
if(isset($_GET['delete'])){
  delete($_GET['delete']);
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
    <h1 class="text-center"> List karyawan </h1>
<table class="table mx-auto table-dark mt-2 w-50">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Usia</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(index() as $index=>$karyawan)
    {
      echo"
        <tr>    

        <td>".$index."</td>
        <td>".$karyawan->nama."</td>
        <td>".$karyawan->jabatan."</td>
        <td>".$karyawan->usia."</td>
        <td><a href='view.php?delete=".$index."'><button class='btn btn-primary'> Delete </button></a></td>
        </tr>
        ";
    }
    ?>
  </tbody>
</table> 
<h1 class="text-center mt-2"> Tambah Karyawan </h1>
<form method="POST" action="view.php" class="mx-auto  mt-2 w-50">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama" placeholder="Masukkan Nama" type="text" class="form-control" id="nama">
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input name="jabatan" placeholder="Masukkan Jabatan" type="text" class="form-control" id="jabatan">
  </div>
  <div class="mb-3">
    <label for="usia" class="form-label">Usia</label>
    <input name="usia" placeholder="Masukkan usia" type="number" class="form-control" id="usia">
  </div>
 

  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
