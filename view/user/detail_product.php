<div class="ltn__shop-details-area mb-120 pt-[200px]">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    <div class="single-large-img">
                                        <a href="view/public/img/car/<?php echo $product['img'] ?>" data-rel="lightcase:myCollection">
                                            <img src="view/public/img/car/<?php echo $product['img'] ?>" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img_3'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img_4'] ?>" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="modal-product-info shop-details-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> <?php echo format_currency($product['view']) ?> View</a></li>
                                    </ul>
                                </div>
                                <h3>Mercedes A-Class</h3>
                                <div class="product-price">
                                    <span><?php echo format_currency($product['price']) ?> VNĐ</span>
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                    <ul class="flex flex-col gap-y-2">
                                        <li><strong>Mã sản phẩm:</strong> <span><a href="#"><?php echo $product['product_id'] ?></span></a></li>
                                        <li>
                                            <strong>Người tư vấn:</strong>
                                            <span>
                                                <a href="#">Nhân viên</a>
                                            </span>
                                        </li>
                                        <li>
                                            <strong>Product Type:</strong>
                                            <span>
                                                <a href="#">Mới</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="ltn__color-widget clearfix">
                                                <strong class="alignleft">Màu</strong>
                                                <ul>
                                                    <li class="<?php echo $product['color'] ?>"><a href="#"></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="ltn__countdown ltn__countdown-2 mb-10" data-countdown="2021/01/01"></div> -->
                                <div class="ltn__product-details-menu-3">
                                    <ul>
                                        <li>
                                            <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i>
                                                <span>Dang sách yêu thích</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                <i class="fas fa-exchange-alt"></i>
                                                <span>So sách</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li>Chia sẻ:</li>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                    </ul>
                                </div>
                                <hr>
                                <div class="ltn__safe-checkout">
                                    <h5>Thanh toán</h5>
                                    <img src="view/public/img/icons/payment-2.png" alt="Payment Image">
                                </div>
                                <hr>
                                <div class="ltn__product-details-menu-2">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <form action="index.php?act=vao_trang_xacnhan_datlich" method="post">

                                        <?php } else { ?>
                                            <form action="index.php?act=vao_trang_dangnhap" method="post">
                                            <?php } ?>
                                            <ul>
                                                <li>
                                                    <div class="product-buy-btn">
                                                        <?php if ($product['quantity'] > 0) { ?>
                                                            <button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="submit" name="thanhtoan">Đặt lịch</button>
                                                        <?php } else { ?>
                                                            <h2 class=" thongbao_detailsp">Ô tô đã hết hàng</h2>
                                                        <?php } ?>

                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- SHOP DETAILS TAB AREA START -->
<div class="ltn__shop-details-tab-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-tab-inner">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Mô tả</a>
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a> -->
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Bình luận</a>
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_4" class="">Shipping Policy</a> -->
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Thông tin của xe</h4>
                                <p><?php echo $product['description'] ?></p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="liton_tab_details_1_3">
                            <div class="ltn__shop-details-tab-content-inner">
                                <!-- comment-area -->
                                <div class="ltn__comment-area mb-30">
                                    <h4 class="title-2">Bình luận (<?php if (isset($so_binhluan['soluong_binhluan'])) { ?> <?= $so_binhluan['soluong_binhluan'] ?> <?php } else { ?> <?= "0" ?> <?php } ?>)</h4>
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            <?php foreach ($binhluan as $binhluan) : ?>

                                                <li>
                                                    <div class="ltn__comment-item clearfix">
                                                        <div class="ltn__commenter-img">
                                                            <img src="view/public/img/testimonial/1.jpg" alt="Image">
                                                        </div>
                                                        <div class="ltn__commenter-comment">
                                                            <h6><a href="#"><?= $binhluan['hovaten'] ?></a> <span><?php echo ($binhluan['vaitro_id'] > 1)?"--Admin--":"--Nhân viên--"; ?></span></h6>
                                                            
                                                            <span class="comment-date"><?= $binhluan['ngaybl'] ?></span>
                                                            <p><?= $binhluan['noidung'] ?>
                                                            <div class="chucnang_noidungbl">
                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                    <?php if ($binhluan['user_id'] != $_SESSION['user']['user_id']) : ?>
                                                                        <div class=" sangdi">

                                                                            <button class="ltn__comment-reply-btn" type="button">Trả lời</button>
                                                                        </div>
                                                                    <?php endif ?>
                                                                <?php endif ?>
                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                    <?php if ($binhluan['user_id'] == $_SESSION['user']['user_id'] || $_SESSION['user']['vaitro_id'] == 2) : ?>
                                                                        <div class="xoa">
                                                                            <a href="index.php?act=delete_binhluan&id_binhluan=<?= $binhluan['binhluan_id'] ?>&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không ?')">Xóa</a>
                                                                        </div>
                                                                    <?php endif ?>
                                                                <?php endif ?>
                                                            </div>
                                                            </p>
                                                            <!-- <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a> -->
                                                        </div>
                                                    </div>
                                                </li>


                                                <li>
                                                    <?php foreach ($reps as $rep) : ?>
                                                        <?php if ($rep['binhluan_id'] == $binhluan['binhluan_id']) : ?>

                                                            <ul>
                                                                <li>
                                                                    <div class="ltn__comment-item clearfix">
                                                                        <div class="ltn__commenter-img">
                                                                            <img src="view/public/img/testimonial/4.jpg" alt="Image">
                                                                        </div>
                                                                        <div class="ltn__commenter-comment">
                                                                            <h6><a href="#"><?= $rep['hovaten'] ?> <?php if ($rep['vaitro_id'] != 1) : ?> <div class="tenvaitro">QTV</div> <?php endif ?></a></h6>
                                                                            <span class="comment-date"> <?= $rep['ngay_traloi'] ?>
                                                                            </span>
                                                                            <p><?= $rep['noidung'] ?>
                                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                                    <?php if ($rep['user_id'] == $_SESSION['user']['user_id'] || $_SESSION['user']['vaitro_id'] == 2) : ?>
                                                                            <div class="xoa">
                                                                                <a href="index.php?act=delete_rep&rep_id=<?= $rep['rep_id'] ?>&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không ?')">Xóa</a>
                                                                            </div>
                                                                        <?php endif ?>
                                                                    <?php endif ?></p>
                                                                    <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        <?php endif ?>

                                                    <?php endforeach ?>

                                                </li>


                                            <?php endforeach ?>


                                        </ul>
                                    </div>
                                </div>
                                <!-- comment-reply -->
                                <div class="ltn__comment-reply-area ltn__form-box">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <form action="index.php?act=guibinhluan&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" method="post">
                                        <?php } else { ?>
                                            <form action="index.php?act=vao_trang_dangnhap" method="post">
                                            <?php } ?>
                                            <h4 class="title-2">Để lại bình luận</h4>
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea class="pl-[10px] pt-[5px]" type="text" name="noidungbl" placeholder="Nhận xét của bạn...."></textarea>
                                            </div>


                                            <div class="btn-wrapper">
                                                <button name="gui" class="btn theme-btn-1 btn-effect-1 text-uppercase border-[#212529] bg-[#212529]" type="submit"><i class="far fa-comments"></i>Gửi bình luận</button>
                                                <?php if (isset($_SESSION['thongbaobinhluan'])) : ?>
                                                    <div class="thongbao"><?= $_SESSION['thongbaobinhluan'] ?></div>

                                                <?php endif ?>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS TAB AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color">// cars</h6>
                    <h1 class="section-title">Related Products<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="view/public/img/car/<?php echo $product['img'] ?>" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="soldout-badge">New</li>
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Mercedes A-Class</a></h2>
                        <div class="product-price">
                            <span>$65,000</span>
                            <del>$68,000</del>
                        </div>
                        <div class="product-info-brief">
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i>2020
                                </li>
                                <li>
                                    <i class="fas fa-cog"></i>Auto
                                </li>
                                <li>
                                    <i class="fas fa-road"></i>90kph
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="view/public/img/car/<?php echo $product['img'] ?>" alt="#"></a>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">BMW 4 Series</a></h2>
                        <div class="product-price">
                            <span>$50,000</span>
                            <del>$62,000</del>
                        </div>
                        <div class="product-info-brief">
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i>2020
                                </li>
                                <li>
                                    <i class="fas fa-cog"></i>Auto
                                </li>
                                <li>
                                    <i class="fas fa-road"></i>95kph
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="view/public/img/car/<?php echo $product['img_3'] ?>" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="soldout-badge">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Tesla Model S</a></h2>
                        <div class="product-price">
                            <span>$49,000</span>
                            <del>$55,000</del>
                        </div>
                        <div class="product-info-brief">
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i>2020
                                </li>
                                <li>
                                    <i class="fas fa-cog"></i>Auto
                                </li>
                                <li>
                                    <i class="fas fa-road"></i>80kph
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="view/public/img/car/<?php echo $product['img_2'] ?>" alt="#"></a>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Toyota Corolla </a></h2>
                        <div class="product-price">
                            <span>$43,000</span>
                            <del>$48,000</del>
                        </div>
                        <div class="product-info-brief">
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i>2020
                                </li>
                                <li>
                                    <i class="fas fa-cog"></i>Auto
                                </li>
                                <li>
                                    <i class="fas fa-road"></i>70kph
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>