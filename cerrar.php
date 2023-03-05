<?php
include 'panel.php';
session_start();
$_SESSION=[];
session_destroy();
header("Location:/material1/index.html");
die();

?>