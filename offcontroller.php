<?php 
include("model.php");
session_start();
if(!isset($_SESSION['listoffice'])){
$_SESSION['listoffice'] = array();
}

function insertoff(){
$office = new office();
$office->name = $_POST['name'];
$office->adress = $_POST['adress'];
$office->city = $_POST['city'];
$office->phone = $_POST['phone'];

array_push($_SESSION['listoffice'],$office);
}

function indexoff(){

return $_SESSION['listoffice'];

}

function deleteoff($id){
    unset($_SESSION['listoffice'][$id]);
}

?>