<?php
    if (isset($_POST['btn_datlich'])) {
        $hovaten = trim($_POST['hovaten']);
        $tel = $_POST['tel'];
        $email = trim($_POST['email']);
        // $address = trim($_POST['address']);
        $yeucau = trim($_POST['ltn__message']);
        $id_product = $_POST['product_id'];
        // echo '<script>alert("$id_product");</script>';
        $ngayxemxe = trim($_POST['ngay_xem']);
        $time_start = strtotime($ngayxemxe);
        $time_now = strtotime(date("Y-m-d"));
        if($time_start < $time_now){
          function loi($a){
            echo "<script>alert('$a');</script>";
          }
          loi('Lỗi đặt ngày');
          // echo '<script>alert("Lỗi đặt ngày");</script>';
          header('location: ./index.php?act=vao_trang_xacnhan_datlich&id='.$id_product.'' );


          die('');
        };


        $caxemxe = trim($_POST['ca_xemxe']);
        $cosoxemxe = trim($_POST['co_so']);

        $id_user = $_SESSION['user']['user_id'];

        dathang($id_user, $hovaten, $tel, $email, $yeucau, $id_product , $ngayxemxe, $caxemxe, $cosoxemxe);
        if (!isset($_SESSION['errors_muahhang']['hovaten']) && !isset($_SESSION['errors_muahhang']['email'])  && !isset($_SESSION['errors_muahhang']['tel'])) {
          $_SESSION['dangkythanhcong'] = "Đăng ký thành công";
          header("location: index.php?act=vao_trang_xacnhan_datlich");
        } else {
          header("location: index.php?act=vao_trang_xacnhan_datlich");
        }
      }

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;
      
      require_once 'vendor/autoload.php';     