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
                                    <div class="single-large-img">
                                        <a href="view/public/img/car/<?php echo $product['img_2'] ?>" data-rel="lightcase:myCollection">
                                            <img src="view/public/img/car/<?php echo $product['img_2'] ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="view/public/img/car/<?php echo $product['img_3'] ?>" data-rel="lightcase:myCollection">
                                            <img src="view/public/img/car/<?php echo $product['img_3'] ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="view/public/img/car/<?php echo $product['img_4'] ?>" data-rel="lightcase:myCollection">
                                            <img src="view/public/img/car/<?php echo $product['img_4'] ?>" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img'] ?>" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="view/public/img/car/<?php echo $product['img_2'] ?>" alt="Image">
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
                                <h3><?php echo $product['product_name'] ?></h3>
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
                                                    <li class="<?php echo $product['color'] ?> border-2 border-black"><a href="#"></a></li>
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
                                                <span>Danh sách yêu thích</span>
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
                                <hr>
                                <div class="ltn__product-details-menu-2">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <form action="index.php?act=vao_trang_xacnhan_datlich&id=<?php echo $product['product_id'] ?>" method="post">

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
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Bình luận (<?php if (isset($so_binhluan['soluong_binhluan'])) { ?> <?= $so_binhluan['soluong_binhluan'] ?> <?php } else { ?> <?= "0" ?> <?php } ?>)</a>
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
                                                            <img src="view/public/img/testimonial/avatar.jpeg" alt="Image">
                                                        </div>
                                                        <div class="ltn__commenter-comment">
                                                            <h6><a href="#"><?= $binhluan['hovaten'] ?></a> <span><?php echo ($binhluan['vaitro_id'] > 1) ? "--Admin--" : "--Khách hàng--"; ?></span></h6>

                                                            <span class="comment-date"><?= $binhluan['ngaybl'] ?></span>
                                                            <p><?= $binhluan['noidung'] ?>
                                                            <div class="chucnang_noidungbl">

                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                    <?php if ($binhluan['user_id'] == $_SESSION['user']['user_id'] || $_SESSION['user']['vaitro_id'] == 2) : ?>
                                                                        <div class="xoa">
                                                                            <a style="color:red ;" href="index.php?act=delete_binhluan&id_binhluan=<?= $binhluan['binhluan_id'] ?>&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không ?')">Xóa</a>
                                                                        </div>
                                                                    <?php endif ?>
                                                                <?php endif ?>

                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                    <?php if ($binhluan['user_id'] != $user_id) : ?>
                                                                        <!--  -->
                                                                        <label for="input__traloi12">
                                                                            <p class="ltn__comment-reply-btn" type="button">Trả lời</p>
                                                                        </label>
                                                                    <?php endif ?>
                                                                <?php endif ?>

                                                                <input type="checkbox" hidden id="input__traloi12" class="input__traloi">


                                                                <?php if (isset($_SESSION['user'])) : ?>
                                                                    <?php if ($binhluan['user_id'] != $user_id) : ?>
                                                                        <form class="formtraloi" action="index.php?act=guirep&id=<?= $product['product_id'] ?>&id_binhluan=<?= $binhluan['binhluan_id'] ?>&iddm=<?= $product['cate_id'] ?>" method="post">
                                                                            <!-- <textarea id="formtraloi" name="rep" cols="30" rows="10" placeholder="Trả lời"></textarea>
                                                            <button type="submit" name="guirep" id="nhan">Gửi</button> -->
                                                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                                                <textarea id="formtraloi" class="pl-[10px] pt-[5px]" type="text" name="rep" placeholder="Trả lời"></textarea>
                                                                            </div>
                                                                            <div class="btn-wrapper">
                                                                                <button id="nhan" name="guirep" class="btn btn-comment theme-btn-1 btn-effect-1 text-uppercase border-[#212529] bg-[#212529]" type="submit"><i class="far fa-comments"></i>Gửi trả lời</button>
                                                                                <?php if (isset($_SESSION['thongbaobinhluan'])) : ?>
                                                                                    <div class="thongbao">
                                                                                        <p style="color:red ;"><?= $_SESSION['thongbaobinhluan'] ?></p>
                                                                                    </div>

                                                                                <?php endif ?>
                                                                            </div>
                                                                        </form>
                                                                    <?php endif ?>
                                                                <?php endif ?>

                                                            </div>
                                                            </p>
                                                            <!-- <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a> -->
                                                        </div>
                                                    </div>
                                                </li>



                                                <ul>
                                                    <li>
                                                        <?php foreach ($reps as $rep) : ?>
                                                            <?php if ($rep['binhluan_id'] == $binhluan['binhluan_id']) : ?>

                                                                <ul>
                                                                    <li>
                                                                        <div class="ltn__comment-item clearfix">
                                                                            <div class="ltn__commenter-img">
                                                                                <img src="view/public/img/testimonial/avatar.jpeg" alt="Image">
                                                                            </div>
                                                                            <div class="ltn__commenter-comment">
                                                                                <h6><a href="#"><?= $rep['hovaten'] ?> <?php if ($rep['vaitro_id'] != 1) : ?> <div class="tenvaitro"></div> <?php endif ?></a></h6>
                                                                                <span class="comment-date"> <?= $rep['ngay_traloi'] ?>
                                                                                </span>
                                                                                <p><?= $rep['noidung'] ?>
                                                                                    <?php if (isset($_SESSION['user'])) : ?>
                                                                                        <?php if ($rep['user_id'] == $_SESSION['user']['user_id'] || $_SESSION['user']['vaitro_id'] == 2) : ?>
                                                                                <div class="xoa">
                                                                                    <a style="color: red;" href="index.php?act=delete_rep&rep_id=<?= $rep['rep_id'] ?>&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không ?')">Xóa</a>
                                                                                </div>
                                                                            <?php endif ?>
                                                                        <?php endif ?></p>
                                                                        <!-- <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a> -->
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            <?php endif ?>

                                                        <?php endforeach ?>
                                                    </li>
                                                </ul>
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
                                                <button name="gui" class="btn btn-comment theme-btn-1 btn-effect-1 text-uppercase border-[#212529] bg-[#212529]" type="submit"><i class="far fa-comments"></i>Gửi bình luận</button>
                                                <?php if (isset($_SESSION['thongbaobinhluan'])) : ?>
                                                    <div class="thongbao">
                                                        <p style="color:red ;"><?= $_SESSION['thongbaobinhluan'] ?></p>
                                                    </div>

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
                    <h1 class="section-title">Ô tô liên quan<span>.</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            <?php foreach ($products as $product) : ?>
                <div class="col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><img class="w-full h-[350px]" src="view/public/img/car/<?php echo $product['img'] ?>" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="soldout-badge">Mới</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" title="Quick View" data-bs-toggle="" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <?php if (isset($_SESSION['user'])) { ?>
                                            <form action="index.php?act=vao_trang_xacnhan_datlich&id=<?php echo $product['product_id'] ?>" method="post">

                                            <?php } else { ?>
                                                <form class="w-full" action="index.php?act=vao_trang_dangnhap" method="post">
                                                <?php } ?>
                                                <button class="w-full"><a class="w-full" title="Add to Cart" data-bs-toggle="" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a></button>
                                                </form>
                                            </form>
                                            <!-- <a href="index.php?act=vao_trang_xacnhan_datlich&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" title="Add to Cart" data-bs-toggle="" data-bs-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a> -->
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><?php echo $product['product_name'] ?></a></h2>
                            <div class="product-price">
                                <span><?php echo format_currency($product['price'])  ?> VNĐ</span>
                            </div>
                            <div class="product-info-brief">
                                <ul>
                                    <li>
                                        <i class="fas fa-car"></i><?php echo $product['doi_xe'] ?>
                                    </li>
                                    <li>
                                        <i class="fas fa-cog"></i>Auto
                                    </li>
                                    <li>
                                        <i class="fas fa-road"></i><?php echo $product['cong_xuat'] ?>kph
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>




        </div>
    </div>
</div>