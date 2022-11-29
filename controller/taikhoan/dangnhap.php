<?php
      if (isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkuser = checkuser($username, $password);
        if (is_array($checkuser)) {
          $_SESSION['user'] = $checkuser;
          header('location: index.php');
        } else {
          $_SESSION['thongbao'] = "Tài khoản hoặc mật khẩu không đúng";
          header('location: index.php?act=vao_trang_dangnhap');
        }
      }