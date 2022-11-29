<?php
session_start();
ob_start();
include './ketnoi/ketnoi.php';
include './view/user/header.php';
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
include './model/binhluan.php';
include './model/donhang.php';
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
      // Ket noi vs controller 

    case 'guibinhluan':
      unset($_SESSION['thongbaobinhluan']);
      if (isset($_POST['gui'])) {
        if (isset($_SESSION['user'])) {
          if (isset($_GET['id'])) {
            extract($_SESSION['user']);
            $id = $_GET['id'];
            $noidung = $_POST['noidungbl'];
            if ($noidung != "") {
              gui_binhluan($user_id, $id, $noidung);
            } else {
              $_SESSION['thongbaobinhluan'] = "Nội dung bình luận không được để trống ";
            }
          }
        } else {
          $_SESSION['thongbaobinhluan'] = "Bạn cần đăng nhập để bình luận.  ";
        }
      }

      if (isset($_GET['id'])) {
        if (isset($_GET['iddm'])) {
          $id = $_GET['id'];
          $iddm = $_GET['iddm'];
          $reps = show_rep($id);
          $product = chitiet_sp($id);
          if (isset($_GET['so_sanpham_tren1trang'])) {
            $so_sanpham_tren1trang = $_GET['so_sanpham_tren1trang'];
          } else {
            $so_sanpham_tren1trang = 4;
          }
          if (isset($_GET['trang'])) {
            $trang = $_GET['trang'];
          } else {
            $trang = 1;
          }
          $binhluan = show_binhluan($id, $so_sanpham_tren1trang, $trang);
          $sotrang = sotrang($id, $so_sanpham_tren1trang);
          $so_binhluan = dem_binh_luan_theo_sanpham($id);
          $products_lienquan = sanpham_lienquan($id, $iddm);
          header("location: index.php?act=chitiet_sanpham&id=$id&iddm=$iddm");
        }
      }

      break;
    case 'gioithieu':
      include './view/user/gioithieu.php';
      break;

    case 'contact':
      include './view/user/contact/conten.php';
      break;
    case 'tintuc':
      include './view/user/blog/conten.php';
      break;

    case 'sanpham':
      if (isset($_GET['iddm'])) {
        $iddm = $_GET['iddm'];
        $products = showsp_theodm($iddm);
        $categories = showdm_user();
        $top3sp = show_top3_sp();
      }
      include './view/user/home.php';
      break;

    case 'trangchu':
      $products = showsp_trangchu();
      $categories = showdm_user();
      $top3sp = show_top3_sp();
      include './view/user/home.php';
      break;
    case 'timsp':

      if (isset($_POST['timsp'])) {
        if (isset($_POST['kyw']) && ($_POST['kyw'] != " ")) {
          $kyw = $_POST['kyw'];

          $products = timsp($kyw);
        }
      }
      $categories = showdm_user();
      $top3sp = show_top3_sp();
      require_once './view/user/home.php';
      break;

    case 'chitiet_sanpham':

      if (isset($_GET['id'])) {
        if (isset($_GET['iddm'])) {
          $id = $_GET['id'];
          $iddm = $_GET['iddm'];
          if (isset($_GET['so_sanpham_tren1trang'])) {
            $so_sanpham_tren1trang = $_GET['so_sanpham_tren1trang'];
          } else {
            $so_sanpham_tren1trang = 4;
          }
          if (isset($_GET['trang'])) {
            $trang = $_GET['trang'];
          } else {
            $trang = 1;
          }
          $so_binhluan = dem_binh_luan_theo_sanpham($id);
          $binhluan = show_binhluan($id, $so_sanpham_tren1trang, $trang);
          $sotrang = sotrang($id, $so_sanpham_tren1trang);
          $product = chitiet_sp($id);
          $reps = show_rep($id);
          $products_lienquan = sanpham_lienquan($id, $iddm);
          view($id);
        }
      }
      include './view/user/detail_product.php';
      unset($_SESSION['thongbaobinhluan']);
      break;

    case 'phanhoi':
      include './view/user/phanhoi.php';
      break;

      include 'controller/binhluan/guibinhluan.php';

      break;
    case 'gioithieu':

      include './view/user/gioithieu.php';
      break;

    case 'contact':

      include './view/user/contact/conten.php';

      break;
    case 'tintuc':

      include './view/user/blog/conten.php';
      
      break;

    case 'sanpham':
      
      include 'controller/car/sanpham.php';
      
      include './view/user/home.php';
      
      break;

    case 'trangchu':
      
      include 'controller/car/trangchu.php';
      
      include './view/user/home.php';
      
      break;
    
    case 'timsp':
      
      include 'controller/car/timsp.php';
      
      break;
    
    case 'chitiet_datlich':
      
      include 'controller/datlich/chitiet_datlich.php';
      
      break;
    case 'vao_trang_dangnhap':
  
      include_once './view/user/login.php';
  
      include_once './controller/taikhoan/vao_trang_dangnhap.php';
  
      break;
    case 'vao_trang_dangky':
  
      include_once './view/user/sign_up.php';
  
      break;
    case 'dangnhap':
  
      include_once './controller/taikhoan/dangnhap.php';
  
      break;
    case 'dangkytk':
  
      include './controller/taikhoan/dangkytk.php';
  
      break;
    case 'dangxuat':
  
      include './controller/taikhoan/dangxuat.php';
  
      break;
    case 'vao_trang_quenmk':
  
      include_once './view/user/forget_password.php';
  
      break;
    case 'quen_mat_khau':
  
      include './controller/taikhoan/quen_mat_khau.php';
  
      include './view/user/forget_password.php';
  
      break;
    case 'delete_binhluan':
  
      include 'controller/binhluan/delete_binhluan.php';
  
      break;
    case 'muahang':
      include './controller/datlich/datlich.php';
      break;
    case 'guirep':
  
      include 'controller/binhluan/guirep.php';
  
      break;
  
    case 'delete_rep':

      include 'controller/binhluan/delete_rep.php';

      break;
    case 'datlich':

      include './controller/datlich/datlich.php';

      break;
    case 'vao_trang_xacnhan_datlich';

    include './view/user/order_confirmation.php';

      break;
    case 'vao_datlich':
  
      include './controller/datlich/vao_datlich.php';
  
      break;
    case 'chitiet_order':
  
      include './controller/datlich/chitiet_order.php';
  
      include './view/user/order_detail.php';
  
      break;
    case 'vao_trang_doimatkhau':
  
      include './view/user/change_password.php';
  
      break;
    case 'doimatkhau':
  
      include './controller/taikhoan/doimatkhau.php';
  
      break;
    case 'vao_trang_taikhoan':
  
      include './controller/taikhoan/vao_trang_taikhoan.php';
  
      break;
    case 'capnhat_tk';
  
      include './controller/taikhoan/capnhat_tk.php';
  
      break;
    default:
      $products = showsp_trangchu();
      $categories = showdm_user();
      $top3sp = show_top3_sp();
      include './view/user/home.php';
  }
} else {
  $products = showsp_trangchu();
  $categories = showdm_user();
  $top3sp = show_top3_sp();
  include './view/user/home.php';
}
include './view/user/footer.php';
ob_end_flush();
