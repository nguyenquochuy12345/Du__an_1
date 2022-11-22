<?php

use FTP\Connection;

define('_DIR_ROOT', __DIR__);
// echo __DIR__;
if (!empty($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$folder = str_replace('C:\xampp\htdocs\\', '', _DIR_ROOT);
$folder = strtolower($folder);


$web_root = $web_root . '/' . $folder;

define('_WEB_ROOT', $web_root);

// Tu dong load config

$configs_dir = scandir('configs');



if (!empty($configs_dir)) {
    foreach ($configs_dir as $item) {
        if ($item != '.' && $item != '..' && !file_exists('configs' . $item)) {

            // echo $item;
            // echo '<br>';
            require_once 'configs/' . $item;
            // echo 'configs/'.$item;
        }
    }
}

require_once 'core/Route.php'; // Load Route class
require_once 'app/App.php'; // load app
require_once 'core/Controller.php';  //load base controller
