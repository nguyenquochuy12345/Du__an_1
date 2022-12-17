<?php
if (isset($_POST['dangky'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $hovaten = $_POST['hovaten'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  dangky($username, $password, $repassword, $hovaten, $email, $sdt);
  if (!isset($_SESSION['errors']['img']) && !isset($_SESSION['errors']['username']) && !isset($_SESSION['errors']['password']) && !isset($_SESSION['errors']['repassword']) && !isset($_SESSION['errors']['hovaten']) && !isset($_SESSION['errors']['email']) && !isset($_SESSION['errors']['address']) && !isset($_SESSION['errors']['sdt'])) {
    $_SESSION['dangkythanhcong'] = "Đăng ký thành công";
    header("location: index.php?act=vao_trang_dangnhap");
  } else {
    header("location: index.php?act=vao_trang_dangky");
  }
}
