<?php
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
