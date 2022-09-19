<?php
require("header.php");
require("mixcontroller.php");
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
      <th scope="col">Office</th>
      <th scope="col">Employee</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(indexmix() as $index=>$mix)
    {
      echo"
        <tr>    

        <td>".$_SESSION['listkaryawan']->nama."</td>
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
<form method="POST" action="mixview.php" class="mx-auto  mt-2 w-50">
  <!-- <h3> Nama </h3> -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
 

  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
