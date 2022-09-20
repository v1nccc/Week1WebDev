<?php
include("modeloffice.php");
include("modelkaryawan.php");
include("modelmix.php");
 if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
 }

include_once("controllerkaryawan.php");
include_once("mixcontroller.php");
include_once("offcontroller.php");
?>