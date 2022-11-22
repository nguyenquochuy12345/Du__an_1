<?php
session_start();
ob_start();
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);  
    }
    // if ($role == 1) {
    include "../models/database.php"; 
    include "./sideber.php"; 
    include "./danh_muc/danh_muc.php";
    include "./san_pham/san_pham.php";
    include "./tai_khoan/taikhoan.php";
    include "./binh_luan/binhluan.php";
    // $listsanpham = loadall_sanpham();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            include "./home/home.php";
            break;
        case 'quanlydanhmuc':
            include "./danh_muc/show.php";
            break;
        case 'add_danhmuc':
            if(isset($_POST["addCate"])){
                $danhmuc = $_POST['danhmuc'];
                insert_danhmuc($danhmuc);
                include './danh_muc/show.php';
                break;
            }
            include './danh_muc/add.php';
            break;
        case 'edit_danhmuc':
            if(isset($_GET["id_danhmuc"])){
                $sql = "select * from danhmuc where id_danhmuc=".$_GET["id_danhmuc"];
            }
            $danhmuc = pdo_query_one($sql);
            include "danh_muc/edit_danhmuc.php";
            break;
        case 'update_danhmuc':
            if(isset($_POST["update_danhmuc"])){
                $id_danhmuc = $_POST['id_danhmuc'];
                $name_danhmuc = $_POST['name_danhmuc'];
                update_danhmuc($id_danhmuc,$name_danhmuc);
            }
            echo '<script>alert("Cập Nhập Thành Công")</script>';
            include "danh_muc/show.php";
            break;
        case 'delete_danhmuc':
            if(isset($_GET['id_danhmuc'])){
                $delete = $_GET['id_danhmuc'];
                delete_danhmuc($delete);
            }
            include "./danh_muc/show.php";
            break;

        //Quản lý sản phẩm

        case 'quanlysanpham':
            if(isset($_POST['filter'])&&($_POST['filter'])){ 
            $kyw=$_POST['kyw']; 
            $id_danhmuc=$_POST['id_danhmuc']; 
            }
            else{  
            $kyw='' ;
            $id_danhmuc=0;
            } 
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
            include "san_pham/show.php";
            break;
                
        case 'add_product':
            if(isset($_POST["btn_insert"])){
                $name_sanpham = $_POST['name_sanpham'];
                $price_sanpham = $_POST['price_sanpham'];
                $hinh_sanpham = $_FILES['hinh_sanpham']['name'];
                $tmp_img = $_FILES['hinh_sanpham']['tmp_name'];
                move_uploaded_file($tmp_img, './san_pham/image/'.$hinh_sanpham);
                $description_sanpham = $_POST['description_sanpham'];
                $view_sanpham = $_POST['view_sanpham'];
                $cate_sanpham = $_POST['cate_sanpham'];
                insert_sanpham($name_sanpham,$price_sanpham,$hinh_sanpham,$description_sanpham,$view_sanpham,$cate_sanpham);
                echo '<script>alert("Thêm Thành Công")</script>';
                if(isset($_POST['filter'])&&($_POST['filter'])){ 
                    $kyw=$_POST['kyw']; 
                    $id_danhmuc=$_POST['id_danhmuc']; 
                    }
                    else{  
                    $kyw='' ;
                    $id_danhmuc=0;
                    } 
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
                    include "san_pham/show.php";
                    break;
            }
            $listdanhmuc = loadall_danhmuc();
            include "san_pham/add.php";
            break;
        case 'update_sanpham':
            if(isset($_POST["btn_insert"])){
                $name_sanpham = $_POST['name_sanpham'];
                $price_sanpham = $_POST['price_sanpham'];
                $hinh_sanpham = $_FILES['hinh_sanpham']['name'];
                $tmp_img = $_FILES['hinh_sanpham']['tmp_name'];
                move_uploaded_file($tmp_img, './san_pham/image/'.$hinh_sanpham);
                $description_sanpham = $_POST['description_sanpham'];
                $view_sanpham = $_POST['view_sanpham'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_sanpham($id_sanpham,$name_sanpham,$price_sanpham,$hinh_sanpham,$description_sanpham,$view_sanpham,$id_danhmuc);
                $id_danhmuc = $_POST['id_danhmuc'];
                $name_danhmuc = $_POST['name_danhmuc'];
                update_danhmuc($id_danhmuc,$name_danhmuc);
            }
            if(isset($_POST['filter'])&&($_POST['filter'])){ 
                $kyw=$_POST['kyw']; 
                $id_danhmuc=$_POST['id_danhmuc']; 
                }
                else{  
                $kyw='' ;
                $id_danhmuc=0;
                } 
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
                echo '<script>alert("Cập Nhập Thành Công")</script>';
            include "san_pham/show.php";
            break;
        case 'edit_sanpham':
            if(isset($_GET["id_sanpham"])){
                $sql = "select * from sanpham where id_sanpham=".$_GET["id_sanpham"];
            }
            if(isset($_POST['filter'])&&($_POST['filter'])){ 
                $kyw=$_POST['kyw']; 
                $id_danhmuc=$_POST['id_danhmuc']; 
                }
            else{  
            $kyw='' ;
            $id_danhmuc=0;
            } 
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
            $sanpham = pdo_query_one($sql);
            include "san_pham/edit_sanpham.php";
            break;
        case 'delete_sanpham':
            if(isset($_GET['id_sanpham'])){
                $delete = $_GET['id_sanpham'];
                delete_sanpham($delete);
                echo '<script>alert("Xóa Thành Công")</script>';
            }
            if(isset($_POST['filter'])&&($_POST['filter'])){ 
                $kyw=$_POST['kyw']; 
                $id_danhmuc=$_POST['id_danhmuc']; 
                }
                else{  
                $kyw='' ;
                $id_danhmuc=0;
                } 
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
            include "./san_pham/show.php";
            break;
        case 'quanlytaikhoan':
            include 'tai_khoan/show.php';
            break;
        case 'quanlybinhluan':
            // if(isset($_POST['filter'])&&($_POST['filter'])){ 
            // $kyw=$_POST['kyw']; 
            // $id_binhluan=$_POST['id_binhluan']; 
            // }
            // else{  
            // $kyw='' ;
            // $id_binhluan=0;
            // } 
            $listbinhluan = loadall_binhluan();
            include 'binh_luan/show.php';
            break;
    }
}
?>