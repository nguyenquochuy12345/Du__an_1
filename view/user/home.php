<div class="ltn__product-area ltn__product-gutter mb-120" style="margin-top:150px ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="showing-product-number text-right">
                                <span>Showing 1–12 of 18 results</span>
                            </div>
                        </li>
                        <li>
                            .
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                <!-- ltn__product-item -->

                                <?php foreach ($products as $product) : ?>
                                    <div class="col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><img src="view/public/img/car/<?php echo $product['img'] ?>" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>
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
                                                            <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" title="Add to Cart" data-bs-toggle="" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><?php echo $product['product_name'] ?></a></h2>
                                                <div class="product-price">
                                                    <span>$<?php echo format_currency($product['price'])  ?></span>
                                                    <del>$<?php echo format_currency($product['price']) ?></del>
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

                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->

                                <?php foreach ($products as $product) : ?>

                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><img src="view/public/img/car/<?php echo $product['img'] ?>" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><?php echo $product['product_name'] ?></a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$<?php echo format_currency($product['price'])  ?></span>
                                                    <del>$<?php echo format_currency($product['price']) ?></del>
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
                                                <div class="product-brief">
                                                    <p><?php echo $product['description'] ?></p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" title="Quick View" data-bs-toggle="" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?act=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>" title="Add to Cart" data-bs-toggle="" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
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
                </div>

            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Xe Bán Chạy</h4>
                        <ul>

                            <!-- Show top 3  -->
                            <?php foreach ($top3sp as $top3sp) : ?>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="index.php?act=chitiet_sanpham&id=<?= $top3sp['product_id'] ?>&iddm=<?= $top3sp['cate_id'] ?>"><img src="view/public/img/car/<?= $top3sp['img'] ?>" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="index.php?act=chitiet_sanpham&id=<?= $top3sp['product_id'] ?>&iddm=<?= $top3sp['cate_id'] ?>"><?php echo $top3sp['product_name'] ?></a></h6>
                                            <div class="product-price">
                                                <span>$<?php echo format_currency($top3sp['price'])  ?></span>
                                                <del>$<?php echo format_currency($top3sp['price']) ?></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php endforeach ?>

                        </ul>
                    </div>
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Tìm kiếm xe</h4>
                        <form action="index.php?act=timsp" method="POST">
                            <input type="text" name="kyw" placeholder="Search your keyword...">
                            <button type="submit" name="timsp"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Tagcloud Widget -->
                    <div class="widget ltn__tagcloud-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Danh mục xe</h4>
                        <ul>
                            <?php foreach ($categories as $cate) : ?>
                                <li><a href="index.php?act=sanpham&iddm=<?= $cate['cate_id'] ?>"> <?= $cate['cate_name'] ?> </a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>