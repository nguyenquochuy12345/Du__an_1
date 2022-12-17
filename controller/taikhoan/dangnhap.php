<?php
if (isset($_POST['dangnhap'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $checkuser = checkuser($username, $password);
  $checkuser_vohieuhoa = checkuser_vohieuhoa($username, $password);


  if (is_array($checkuser)) {
    $_SESSION['user'] = $checkuser;
    header('location: index.php');
  }
  if (is_array($checkuser_vohieuhoa)) {
    $_SESSION['thongbao'] = "Tài khoản đã bị vô hiệu hóa";
    header('location: index.php?act=vao_trang_dangnhap');
  } else {
    $_SESSION['thongbao'] = "Tài khoản hoặc mật khẩu không đúng";

    header('location: index.php?act=vao_trang_dangnhap');
  }
}
