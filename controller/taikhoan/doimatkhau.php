<?php
if (isset($_POST['xacnhandoimk'])) {
  $username = $_POST['username'];
  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];
  $re_new_password = $_POST['re_new_password'];
  doimatkhau($username, $old_password, $new_password, $re_new_password);
  if (!isset($_SESSION['error_doimk']['username']) && !isset($_SESSION['error_doimk']['old_password']) && !isset($_SESSION['error_doimk']['new_password']) && !isset($_SESSION['error_doimk']['re_new_password'])) {
    $_SESSION['doimatkhau_thanhcong'] = "Đổi mật khẩu thành công";
    header("location: index.php?act=vao_trang_doimatkhau");
  }
  else{
    header("location: index.php?act=vao_trang_doimatkhau");
  }
}
