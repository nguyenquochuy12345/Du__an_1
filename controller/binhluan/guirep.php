<?php
if (isset($_POST['guirep'])) {
  if (isset($_SESSION['user'])) {
    if (isset($_GET['id_binhluan'])) {
      if (isset($_GET['id'])) {
        if (isset($_GET['iddm'])) {
          extract($_SESSION['user']);
          $id = $_GET['id'];
          $iddm = $_GET['iddm'];
          $id_binhluan = $_GET['id_binhluan'];
          $noidungrep = $_POST['rep'];
          if ($noidungrep != "") {
            guirep($user_id, $id, $noidungrep, $id_binhluan);
          } else {
            $_SESSION['thongbaobinhluan'] = "Nội dung trả lời không được để trống ";
          }

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
          $product = chitiet_sp($id);
          $reps = show_rep($id);
          // $top3sp = show_top3_sp();
          $products = showsp_theodm($iddm);

          $products_lienquan = sanpham_lienquan($id, $iddm);
          include_once './view/user/car/detail_product.php';
        }
      }
    }
  }
}
