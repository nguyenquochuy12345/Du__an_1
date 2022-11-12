
<?php
include("khachhang/controllers/c_khachhang.php");
$c_khachhang = new C_khach_hang();
if(isset($_GET["func"]))
{
    $c_khachhang->thoat_dang_nhap();
}
$c_khachhang->Hien_thi_dang_nhap();
?>
