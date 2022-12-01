<?php foreach($order_details as $order_details) {?>
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
                                        <a href="view/public/img/car/<?php echo $order_details['img'] ?>" data-rel="lightcase:myCollection">
                                            <img src="view/public/img/car/<?php echo $order_details['img'] ?>" alt="Image">
                                        </a>
                                    </div>
                                </div>
    
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $order_details['img'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $order_details['img_2'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $order_details['img_3'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $order_details['img_4'] ?>" alt="Image">
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
                                        <li class="review-total"> <a href="#"> <?php echo format_currency($order_details['view']) ?> View</a></li>
                                    </ul>
                                </div>
                                <h3><?php echo $order_details['product_name'] ?></h3>
                                <div class="product-price">
                                    <span><?php echo format_currency($order_details['price']) ?> VNĐ</span>
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                    <ul class="flex flex-col gap-y-2">
                                        <li><strong>Mã sản phẩm:</strong> <span><a href="#"><?php echo $order_details['product_id'] ?></span></a></li>
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
                                                    <li class="<?php echo $order_details['color'] ?>"><a href="#"></a></li>
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
                                <div class="ltn__product-details-menu-2">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <form action="index.php?act=trangchu" method="post">

                                        <?php } else { ?>
                                            <form action="index.php?act=vao_trang_dangnhap" method="post">
                                            <?php } ?>
                                            <ul>
                                                <li>
                                                    <div class="product-buy-btn">
                                                        <?php if ($order_details['quantity'] > 0) { ?>
                                                            <button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="submit" name="thanhtoan"> Đã đặt lịch</button>
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
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Thông tin của xe</h4>
                                <p><?php echo $order_details['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>



