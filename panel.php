<?php
session_start();
if(!isset($_SESSION["nombreusuario"])){
header("Location:/material1/index.html");
exit(); }	

?>
