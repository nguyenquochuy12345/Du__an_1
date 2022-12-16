<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if (isset($_GET['iddm'])) {
    $iddm = $_GET['iddm'];
    if (isset($_GET['id_binhluan'])) {
      $id_binhluan = $_GET['id_binhluan'];
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
      delete_binhluan2($id_binhluan);
      delete_binhluan($id_binhluan);
      $reps = show_rep($id);
      $product = chitiet_sp($id);
      $products = showsp_theodm($iddm);
      $so_binhluan = dem_binh_luan_theo_sanpham($id);
      $sotrang = sotrang($id, $so_sanpham_tren1trang);
      $binhluan = show_binhluan($id, $so_sanpham_tren1trang, $trang);
      $products_lienquan = sanpham_lienquan($id, $iddm);
      $top3sp = show_top3_sp();
      include_once './view/user/car/detail_product.php';
    }
  }
}
