<?php
if (isset($_GET['id'])) {
  if (isset($_GET['rep_id'])) {
    if (isset($_GET['iddm'])) {
      $id = $_GET['id'];
      $iddm = $_GET['iddm'];
      $rep_id = $_GET['rep_id'];
      delete_rep($rep_id);
      $products_lienquan = sanpham_lienquan($id, $iddm);
      $reps = show_rep($id);
      $product = chitiet_sp($id);
      $products = showsp_theodm($iddm);
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
      $sotrang = sotrang($id, $so_sanpham_tren1trang);
      $so_binhluan = dem_binh_luan_theo_sanpham($id);
      $binhluan = show_binhluan($id, $so_sanpham_tren1trang, $trang);
      include_once './view/user/car/detail_product.php';
    }
  }
}
