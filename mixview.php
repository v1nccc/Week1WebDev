<?php
require("controllers.php");
require("header.php");

if(isset($_POST['submit'])){
  insertmix();
}
if(isset($_GET['delete'])){
  deletemix($_GET['delete']);
}
if(isset($_POST['edit'])){
  editmix(($_GET['edit']));
}



?>


    <h1 class="text-center"> Office-Employee </h1>
<table class="table mx-auto table-dark mt-2 w-50">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Usia</th>
      <th scope="col">Office</th>
      <th scope="col">Office Adress</th>
      <th scope="col">City</th>
      <th scope="col">Office Phone</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach(indexmix() as $index=>$mix)
    {
      echo"
        <tr>    

        <td>".$index."</td>
        <td>".$_SESSION['listkaryawan'][$mix->employeeid]->nama."</td>
        <td>".$_SESSION['listkaryawan'][$mix->employeeid]->jabatan."</td>
        <td>".$_SESSION['listkaryawan'][$mix->employeeid]->usia."</td>
        <td>".$_SESSION['listoffice'][$mix->officeid]->name."</td>
        <td>".$_SESSION['listoffice'][$mix->officeid]->adress."</td>
        <td>".$_SESSION['listoffice'][$mix->officeid]->city."</td>
        <td>".$_SESSION['listoffice'][$mix->officeid]->phone."</td>

        
        <td><a href='mixview.php?delete=".$index."'><button class='btn btn-primary'> Delete </button></a></td>
        <td><a href='mixedit.php?edit=".$index."'><button class='btn btn-primary'> Edit </button></a></td>
        </tr>
        ";
    }
    ?>
  </tbody>
</table> 

<h1 class="mt-5 text-center mt-2"> Tambah Office-Employee </h1>
<form method="POST" action="mixview.php" class="mx-auto  mt-2 w-50">
 <div class="form-group col-md-4 mt-3 mb-3 mx-auto text-center">
      <label for="employeeid">Karyawan</label>
      <select required name="employeeid" class="form-select" aria-label="Default select example">
      <?php  foreach(index() as $index=>$karyawan):?>
        <option value="<?=$index?>"><?=$karyawan->nama?></option>
    <?php endforeach; ?>
</select>
       
    </div>



 <div class="mt-3 mb-3 mx-auto text-center form-group col-md-4">
      <label for="officeid">Office</label>
      <select required name="officeid" class="form-select" aria-label="Default select example">
      <?php  foreach(indexoff() as $index=>$office):?>
        <option value="<?=$index?>"><?=$office->name?></option>
    <?php endforeach; ?>
</select>      
    </div>


  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
