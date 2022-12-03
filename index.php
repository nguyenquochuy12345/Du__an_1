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



// require_once 'vendor/autoload.php';



if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
      // Ket noi vs controller 

    case 'guibinhluan':
      include './controller/binhluan/guibinhluan.php';

      break;
    case 'gioithieu':
      include './view/user/blog/gioithieu.php';
      break;

    case 'contact':
      include './view/user/contact/conten.php';
      break;
    case 'tintuc':
      include './view/user/blog/conten.php';
      break;

    case 'sanpham':
      include './controller/car/sanpham.php';
      include './view/user/car/home.php';
      break;

    case 'trangchu':
      include_once './controller/car/trangchu.php';
      require_once './view/user/car/home.php';
      break;
    case 'timsp':

      include './controller/car/timsp.php';
      require_once './view/user/car/home.php';
      break;

    case 'chitiet_sanpham':

      include './controller/datlich/chitiet_datlich.php';
      include './view/user/car/detail_product.php';
      unset($_SESSION['thongbaobinhluan']);
      break;

      include './controller/binhluan/guibinhluan.php';

      break;


    case 'gioithieu':

      include './view/user/blog/gioithieu.php';
      break;

    case 'contact':

      include './view/user/contact/conten.php';

      break;
    case 'tintuc':

      include './view/user/blog/conten.php';

      break;

    case 'sanpham':

      include 'controller/car/sanpham.php';

      include './view/user/car/home.php';

      break;

    case 'trangchu':

      include 'controller/car/trangchu.php';

      include './view/user/car/home.php';

      break;

    case 'timsp':

      include 'controller/car/timsp.php';

      break;

    case 'chitiet_datlich':

      include 'controller/datlich/chitiet_datlich.php';

      break;
    case 'vao_trang_dangnhap':

      include_once './view/user/taikhoan/login.php';

      include_once './controller/taikhoan/vao_trang_dangnhap.php';

      break;
    case 'vao_trang_dangky':

      include_once './view/user/taikhoan/sign_up.php';

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

      include_once './view/user/taikhoan/forget_password.php';

      break;
    case 'quen_mat_khau':

      include './controller/taikhoan/quen_mat_khau.php';

      include './view/user/taikhoan/forget_password.php';

      break;
    case 'delete_binhluan':

      include 'controller/binhluan/delete_binhluan.php';

      break;
    case 'datlich':
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
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $detail_product = chitiet_sp($id);
        $id_product = $id;
      }
      include './view/user/datlich/order_confirmation.php';

      break;
    case 'vao_datlich':

      include './controller/datlich/vao_datlich.php';

      break;
    case 'huy_lich':
      
      if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];
        $huy_lich = huy_lich_user($order_id);
      }
      echo '.';
      include './controller/datlich/vao_datlich.php';
      
      break;

    case 'chitiet_order':

      include './controller/datlich/chitiet_order.php';

      include './view/user/datlich/order_detail.php';

      break;
    case 'vao_trang_doimatkhau':

      include './view/user/taikhoan/change_password.php';

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
  include './view/user/car/home.php';
}
include './view/user/footer.php';
ob_end_flush();
