<?php
// include_once 'checklogin.php';
include("controllers/c_user.php");
$c_home = new C_user();
$c_home->show_user();
?>