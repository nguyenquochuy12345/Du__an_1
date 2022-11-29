<?php
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