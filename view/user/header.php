<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:52:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autixir - Car Services and Auto Mechanic HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Place favicon.png in the root directory -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Icons css -->
    <link rel="stylesheet" href="view/public/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="view/public/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="view/public/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="view/public/css/responsive.css">

    <link rel="stylesheet" href="../view/public/css/admin.css">
    <?php
    function format_currency($n = 0)
    {
        $n = (string)$n;
        $n = strrev($n);
        $res = '';
        for ($i = 0; $i < strlen($n); $i++) {
            if ($i % 3 == 0 && $i != 0) {
                $res .= '.';
            }
            $res .= $n[$i];
        }
        $res = strrev($res);
        return $res;
    }
    ?>

</head>

<body>
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i>Huynqph277841@fpt.edu.vn</a></li>
                                    <li><a href="locations.html"><i class="icon-placeholder"></i>74 Cầu Diễn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__language-menu -->
                                            <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                                <ul>
                                                    <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                        <ul>
                                                            <li><a href="#">Arabic</a></li>
                                                            <li><a href="#">Bengali</a></li>
                                                            <li><a href="#">Chinese</a></li>
                                                            <li><a href="#">English</a></li>
                                                            <li><a href="#">French</a></li>
                                                            <li><a href="#">Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->

            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="index.html"><img src="view/public/img/logo.png" alt="Logo"></a>
                                </div>
                                <div class="get-support clearfix">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>Tư vấn miễn phí</h6>
                                        <h4><a href="tel:+123456789">+84 867435803</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li class=""><a href="index.php?act=trangchu">Trang chủ</a>

                                            </li>
                                            <li class=""><a href="index.php?act=gioithieu">Giới thiệu</a>

                                            </li>
                                            <li class="menu-icon"><a href="index.php?act=trangchu">Xe hơi</a>
                                                <ul>
                                                    <li><span class="float-end">
                                                            << </span><a href="index.php?act=trangchu">Xe hơi</a>
                                                                <ul>
                                                                    <li><a href="index.php?act=sanpham&iddm=1">Ô tô BMW</a></li>
                                                                    <li><a href="index.php?act=sanpham&iddm=2">Ô tô Toyota</a></li>
                                                                    <li><a href="index.php?act=sanpham&iddm=3">Ô tô Masdaz</a></li>
                                                                </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class=""><a href="index.php?act=tintuc">Tin tức</a>
                                            </li>
                                            </li>
                                            <li><a href="index.php?act=contact">Liên hệ</a></li>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="ltn__header-options ltn__header-options-2">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form action="index.php?act=timsp" method="POST">
                                        <input type="text" name="kyw" placeholder="Search here..." />
                                        <button type="submit" name="timsp">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <?php if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <ul>
                                        <li>

                                            <a href="#"><i class="icon-user"></i></a>
                                            <ul>
                                                <li>Chào : <?= $hovaten ?></li>
                                                <?php if ($vaitro_id == 2) : ?>
                                                    <li><a href="admin/index.php">Trang quản trị</a></li>
                                                <?php endif ?>
                                                <li><a href="index.php?act=vao_trang_doimatkhau">Đổi mật khẩu</a></li>
                                                <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                                <!-- <li><a href="account.html">My Account</a></li>
                                                <li><a href="wishlist.html">Admin</a></li> -->

                                            </ul>
                                        <?php
                                    } else {
                                        ?>
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-user"></i></a>
                                                    <ul>
                                                        <li><a href="index.php?act=vao_trang_dangnhap">Đăng nhập</a></li>
                                                    </ul>


                                                </li>

                                            </ul>
                                        <?php } ?>
                            </div>
                            <!-- mini-cart -->
                            <div class="mini-cart-icon">
                                <a href="index.php?act=vao_datlich" class="">
                                    <i class="fa-regular fa-calendar-check"></i>
                                    <!-- <sup>2</sup> -->
                                </a>
                            </div>
                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        
