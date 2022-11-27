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

                                            <li class=""><a href="tin-tuc">Tin tức</a>
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
                                <a href="index.php?act=viewcart" class="">
                                    <i class="icon-shopping-cart"></i>
                                    <!-- <sup>2</sup> -->
                                </a>
                            </div>
                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="view/public/img/product/1.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Wheel Bearing Retainer</a></h6>
                            <span class="mini-cart-quantity">1 x $65.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="view/public/img/product/2.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Brake Conversion Kit</a></h6>
                            <span class="mini-cart-quantity">1 x $85.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="view/public/img/product/3.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">OE Replica Wheels</a></h6>
                            <span class="mini-cart-quantity">1 x $92.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="view/public/img/product/4.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Shock Mount Insulator</a></h6>
                            <span class="mini-cart-quantity">1 x $68.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer">
                    <div class="mini-cart-sub-total">
                        <h5>Subtotal: <span>$310.00</span></h5>
                    </div>
                    <div class="btn-wrapper">
                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                        <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                    </div>
                    <p>Free Shipping on All Orders Over $100!</p>
                </div>

            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="view/public/img/logo.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style - 01</a></li>
                                <li><a href="index-2.html">Home Style - 02</a></li>
                                <li><a href="index-3.html">Home Style - 03</a></li>
                                <li><a href="index-4.html">Home Style - 04</a></li>
                                <li><a href="index-5.html">Home Style - 05 <span class="menu-item-badge">video</span></a></li>
                                <li><a href="index-6.html">Home Style - 06</a></li>
                                <li><a href="index-7.html">Home Style - 07</a></li>
                                <li><a href="index-8.html">Home Style - 08 <span class="menu-item-badge">Map</span></a></li>
                                <li><a href="index-9.html">Home Style - 09</a></li>
                                <li><a href="index-10.html">Home Style - 10</a></li>
                                <li><a href="index-11.html">Home Style - 11</a></li>
                                <li><a href="index-12.html">Home Style - 12</a></li>
                                <li><a href="index-13.html">Home Style - 13</a></li>
                                <li><a href="index-14.html">Home Style - 14</a></li>
                                <li><a href="index-15.html">Home Style - 15</a></li>
                                <li><a href="index-16.html">Home Style - 16</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="product-details-2.html">Shop details 02</a></li>
                                <li><a href="shop-car-grid.html">Shop Car Grid</a></li>
                                <li><a href="shop-car-left-sidebar.html">Shop Car Left sidebar</a></li>
                                <li><a href="shop-car-right-sidebar.html">Shop Car right sidebar</a></li>
                                <li><a href="product-details-3.html">Shop Car details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="history.html">History</a></li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-3) -->
        