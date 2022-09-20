<?php
include("modeloffice.php");
include("model.php");
include("modelmix.php");
 if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
 }

include_once("controller.php");
include_once("mixcontroller.php");
include_once("offcontroller.php");
?>