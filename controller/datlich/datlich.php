<?php
    if (isset($_POST['btn_datlich'])) {
        $hovaten = trim($_POST['hovaten']);
        $tel = $_POST['tel'];
        $email = trim($_POST['email']);
        // $address = trim($_POST['address']);
        $yeucau = trim($_POST['ltn__message']);
        $ngayxemxe = trim($_POST['ngay_xem']);
        $caxemxe = trim($_POST['ca_xemxe']);
        $cosoxemxe = trim($_POST['co_so']);

        $id_user = $_SESSION['user']['user_id'];
        // $tien = $_POST['tong'];
        dathang($id_user, $hovaten, $tel, $email, $yeucau, $ngayxemxe, $caxemxe, $cosoxemxe);
        if (!isset($_SESSION['errors_muahhang']['hovaten']) && !isset($_SESSION['errors_muahhang']['email'])  && !isset($_SESSION['errors_muahhang']['tel'])) {
          $_SESSION['dangkythanhcong'] = "Đăng ký thành công";
          header("location: index.php?act=vao_trang_xacnhan_datlich");
        } else {
          header("location: index.php?act=vao_trang_xacnhan_datlich");
        }
      }