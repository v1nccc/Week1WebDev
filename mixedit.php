<?php
require("controllers.php");
require("header.php");
?>



<h1 class="text-center mt-2"> Edit Office-Employee </h1>
<form method="POST" action="mixview.php?edit=<?= $_GET['edit']?>" class="mx-auto  mt-2 w-50">
 <div class="form-group col-md-4 mt-3 mb-3 mx-auto text-center">
      <p>Karyawan: <?=$_SESSION['listkaryawan'][$_SESSION['listmix'][$_GET['edit']]->employeeid]->nama?> </p>
    </div>



 <div class="mt-3 mb-3 mx-auto text-center form-group col-md-4">
      <label for="officeid">Office</label>
      <select name="officeid" class="form-select" aria-label="Default select example">
      <?php  foreach(indexoff() as $index=>$office):?>
        <option value="<?=$index?>"><?=$office->name?></option>
    <?php endforeach; ?>
</select>      
    </div>


  <button type="submit" name="edit" class="text-center d-block mx-auto btn btn-primary">Submit</button>
</form>
</body>
</html>
