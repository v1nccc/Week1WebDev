<?php 


if(!isset($_SESSION['listkaryawan'])){
$_SESSION['listkaryawan'] = array();
}

function insert(){
$karyawan = new karyawan();
$karyawan->nama = $_POST['nama'];
$karyawan->jabatan = $_POST['jabatan'];
$karyawan->usia = $_POST['usia'];
array_push($_SESSION['listkaryawan'],$karyawan);
}

function index(){

return $_SESSION['listkaryawan'];

}

function delete($id){
    unset($_SESSION['listkaryawan'][$id]);
    foreach(indexmix() as $index=>$mix)
    {
    if($_SESSION['listmix'][$index]->employeeid == $id)
    unset($_SESSION['listmix'][$index]);
}
}

function editkaryawan($id){
    $_SESSION['listkaryawan'][$id]->nama= $_POST['nama'];
    $_SESSION['listkaryawan'][$id]->jabatan= $_POST['jabatan'];
    $_SESSION['listkaryawan'][$id]->usia= $_POST['usia'];
    }
?>