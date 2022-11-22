<?php
session_start();
require_once "boostrap.php";
$app = new C_App();

// echo 'hello';
echo  $app->handleUrl();
// echo $app->;


