<?php
require("header.php");
require("controllers.php");
if(isset($_POST['submit'])){
  insert();
}
if(isset($_POST['edit'])){
  editkaryawan(($_GET['edit']));
}
if(isset($_GET['delete'])){
  delete($_GET['delete']);
}

?>


    <h1 class="text-center"> List karyawan </h1>
<table class="table mx-auto table-dark mt-2 w-50">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Usia</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
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
        <td><a href='viewkaryawan.php?delete=".$index."'><button class='btn btn-primary'> Delete </button></a></td>
        <td><a href='editkaryawan.php?edit=".$index."'><button class='btn btn-primary'> Edit </button></a></td>
        </tr>
        ";
    }
    ?>
  </tbody>
</table> 
<h1 class="mt-5 text-center mt-2"> Tambah Karyawan </h1>
<form method="POST" action="viewkaryawan.php" class="mx-auto  mt-2 w-50">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama" placeholder="Masukkan Nama" type="text" class="form-control" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input name="jabatan" placeholder="Masukkan Jabatan" type="text" class="form-control" id="jabatan" required>
  </div>
  <div class="mb-3">
    <label for="usia" class="form-label">Usia</label>
    <input name="usia" placeholder="Masukkan usia" type="number" class="form-control" id="usia" required>
  </div>
 

  <button type="submit" name="submit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
