<?php 

if(!isset($_SESSION['listmix'])){
$_SESSION['listmix'] = array();
}

function insertmix(){
$mix = new mix();
$mix->employeeid = $_POST['employeeid'];
$mix->officeid = $_POST['officeid'];


array_push($_SESSION['listmix'],$mix);
}

function indexmix(){

return $_SESSION['listmix'];

}

function deletemix($id){
    unset($_SESSION['listmix'][$id]);
}

function editmix($id){
        $_SESSION['listmix'][$id]->officeid= $_POST['officeid'];
        
}
?>