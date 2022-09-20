<?php
require("controllers.php");
require("header.php");

if(isset($_POST['submit'])){
  insertmix();
}
if(isset($_GET['delete'])){
  deletemix($_GET['delete']);
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

<h1 class="text-center mt-2"> Edit Office-Employee </h1>
<form method="POST" action="mixview.php" class="mx-auto  mt-2 w-50">
 <div class="form-group col-md-4 mt-3 mb-3 mx-auto text-center">
      <label for="employeeid">Karyawan</label>
      <select name="employeeid" class="form-select" aria-label="Default select example">
      <?php  foreach(index() as $index=>$karyawan):?>
        <option value="<?=$index?>"><?=$karyawan->nama?></option>
    <?php endforeach; ?>
</select>
       
    </div>



 <div class="mt-3 mb-3 mx-auto text-center form-group col-md-4">
      <label for="officeid">Office</label>
      <select name="officeid" class="form-select" aria-label="Default select example">
      <?php  foreach(indexoff() as $index=>$office):?>
        <option value="<?=$index?>"><?=$office->name?></option>
    <?php endforeach; ?>
</select>      
    </div>


  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
