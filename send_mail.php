<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require_once 'vendor/autoload.php';

// $mailer = new PHPMailer(true);

// $mailer->SMTPDebug = 0;
// $mailer->isSMTP();
// $mailer->Host       = 'smtp.gmail.com';
// $mailer->SMTPAuth   = true;
								
// $mailer->Username   = ''; // nhập gmail của bạn vào đây
// $mailer->Password   = 'mật khẩu vừa tạo'; // nhập mật khẩu vừa tạo 
// $mailer->SMTPSecure = 'tls';
// $mailer->Port       = 587;
// $mailer->setFrom('gmail', 'Tên doanh nghiệp'); // nhập gmail và tên doanh nghiệp
// $mailer->addAddress('email người nhận' ); // nhập gmail người nhận
// $mailer->isHTML(true);
// $mailer->AddReplyTo('gmail', 'Tên doanh nghiệp'); // nhập gmail và tên doanh nghiệp
// $body = 'This is the HTML message body <b>in bold!</b>'; // nội dung gửi mail
// $mailer->Subject = 'Tiêu đề gmail';
// $mailer->Body = $body;
// $mailer->send();