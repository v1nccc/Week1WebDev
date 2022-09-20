<?php 


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
 
    foreach(indexmix() as $index=>$mix)
    {
    if($_SESSION['listmix'][$index]->officeid == $id)
    unset($_SESSION['listmix'][$index]);
}
}

function editoffice($id){
    $_SESSION['listoffice'][$id]->name= $_POST['name'];
    $_SESSION['listoffice'][$id]->adress= $_POST['adress'];
    $_SESSION['listoffice'][$id]->city= $_POST['city'];
    $_SESSION['listoffice'][$id]->phone= $_POST['phone'];
    }

?>