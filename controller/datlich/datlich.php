<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

if (isset($_POST['btn_datlich'])) {
  $hovaten = trim($_POST['hovaten']);
  $tel = $_POST['tel'];
  $email = trim($_POST['email']);
  // $address = trim($_POST['address']);
  $yeucau = trim($_POST['ltn__message']);
  $id_product = $_POST['product_id'];
  $ngayxemxe = trim($_POST['ngay_xem']);
  $caxemxe = trim($_POST['ca_xemxe']);
  $cosoxemxe = trim($_POST['co_so']);
 

  $id_user = $_SESSION['user']['user_id'];

  dathang($id_user, $hovaten, $tel, $email, $yeucau, $id_product, $ngayxemxe, $caxemxe, $cosoxemxe);
  if (!isset($_SESSION['errors_muahhang']['hovaten']) && !isset($_SESSION['errors_muahhang']['email'])  && !isset($_SESSION['errors_muahhang']['tel']) && !isset($_SESSION['errors_muahhang']['chonngay']) && !isset($_SESSION['errors_muahhang']['chonthoigian']) && !isset($_SESSION['errors_muahhang']['chondiachi'])) {
    $_SESSION['dangkythanhcong'] = "Đăng ký thành công";

    // Xử lý gmail
    $mailer = new PHPMailer(true);
    $mailer->SMTPDebug = 0;
    $mailer->isSMTP();
    $mailer->Host       = 'smtp.gmail.com';
    $mailer->SMTPAuth   = true;
  
    $mailer->Username   = 'quochuynguyen11112003@gmail.com'; // nhập gmail của bạn vào đây
    $mailer->Password   = 'dpffhyyfyofvxxwv'; // nhập mật khẩu vừa tạo 
    $mailer->SMTPSecure = 'tls';
    $mailer->Port       = 587;
    $mailer->setFrom('quochuynguyen11112003@gmail.com', 'Ga-ra Autixir'); // nhập gmail và tên doanh nghiệp
    $mailer->addAddress($email); // nhập gmail người nhận
    $mailer->isHTML(true);
    $mailer->AddReplyTo('quochuynguyen11112003@gmail.com', 'Ga-ra Autixir'); // nhập gmail và tên doanh nghiệp
    $body = '
    <h1>Xin chào quý khách !</h1>
    <br>
    <h2>Quý khách đã có lịch đặt xem xe bên Ga-ra Autixir. Thời gian xem xe của quý khách như sau :</h2>
    <br>
    <h3>Ngày xem xe : '.$ngayxemxe.' </h3>
    <br>
    <h3>Thời gian xem xe : '.$caxemxe.'  </h3>
    <br>
    <h3>Cơ sở xem xe : '.$cosoxemxe.'  </h3>
    <br>
    <h2>Cảm ơn quý khách đã tin tưởng và đặt xe bên Ga-ra. Xin trân thành cảm ơn !</h2>
    '; // nội dung gửi mail
    $mailer->Subject = 'Thong bao lich xem xe !';
    $mailer->Body = $body;
    $mailer->send();

    header("location: index.php?act=vao_trang_xacnhan_datlich");
    
  } else {
    header('location: ./index.php?act=vao_trang_xacnhan_datlich&id=' . $id_product . '');
  }
}
