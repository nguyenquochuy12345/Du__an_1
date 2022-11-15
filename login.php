
<?php
include("controllers/c_user.php");
$c_user=new C_user();

//if(isset($_GET["func"]))
//{
//    $c_user->thoat_dang_nhap();
//}
$c_user->add_user();
// $c_user->show_user();
//include('templates/layout.php');
?>
