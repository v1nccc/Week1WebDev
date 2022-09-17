<?php 
include("model.php");
session_start();
if(!isset($SESSION["listkaryawan"])){

$_SESSION['listkaryawan'] = array();
}
function insert(){
$karyawan = new karyawan();
$karyawan -> nama = $_POST['nama'];
$karyawan -> jabatan = $_POST['jabatan'];
$karyawan -> usia = $_POST['usia'];

array_push($_SESSION['listkaryawan']);

}

function index(){

return $_SESSION['listkaryawan'];
asdasdas
dfaf
}

function delete($id){
    unset($_SESSION['listkaryawan'][$id]);
}

?>