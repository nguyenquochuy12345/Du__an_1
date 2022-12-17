<?php
if (isset($_POST['capnhattk'])) {
  $user_id = $_POST['user_id'];
  $hovaten = $_POST['hovaten'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  // $address = $_POST['address'];
  // $ngaydangky = $_POST['ngaydangky'];
  capnhat_tk($user_id, $hovaten, $email, $tel);
  if (!isset($_SESSION['errors']['hovaten']) && !isset($_SESSION['errors']['email']) && !isset($_SESSION['errors']['sdt'])) {
    $_SESSION['capnhatthanhcong'] = "Cập nhật tài khoản thành công";
    header("location: index.php?act=vao_trang_taikhoan");
  } else {
    header("location: index.php?act=vao_trang_taikhoan");
  }
}
