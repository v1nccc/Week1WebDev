<?php
require("controller.php");
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
    {echo"
        <tr>    


        <td>".$index."</td>
        <td>".$karyawan->$nama."</td>
        <td>".$karyawan->$jabatan."</td>
        <td>".$karyawan->$usia."</td>
        <td><button class= ' btn btn-primary'> Delete </button></td>
        </tr>
        ";
    }
    ?>
  </tbody>
</table> 
<h1 class="text-center mt-2"> Tambah Karyawan </h1>
</body>
</html>
