<?php
$routes['default_controller'] = 'home';


// Đường dẫn ảo => Đường dẫn thật

$routes['san-pham'] = 'car/index';
$routes['trang-chu'] = 'home';
$routes['gioi-thieu'] = 'about/index';
$routes['tin-tuc'] = 'news/index';
$routes['check-out'] = 'car/checkout';
$routes['lien-he'] = 'contact/index';
$routes['dang-nhap'] = 'login/index';





$routes['tin-tuc/(.+)'] = 'news/category/$1';
// $routes['tin-tuc/.+-(/d+).html'] = 'news/category/$1';

?>

