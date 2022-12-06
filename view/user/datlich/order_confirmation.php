<!-- <div class="content"> -->
<?php if (!isset($_SESSION['user'])) : ?>
    <div class="cart_error">
        <p>Bạn cần đăng nhập để thực hiện chức năng này</p>
        <button type="button"><a href="index.php?act=vao_trang_dangnhap">Đăng nhập</a></button>
    </div>
<?php endif ?>

<?php if (isset($_SESSION['dangkythanhcong'])) { ?>
    <div class="cart_error pt-[200px] mx-auto">
        <h2 class="text-center text-[24px] font-[700]">Cảm ơn quý khách đã đặt lịch bên Ga-ra! quý khách có thể click nút bên dưới để xem thông tin đặt lịch của bạn</h2>
        <p class="text-center my-5"><a class="" href="index.php?act=vao_datlich"><button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="button">Lịch đặt của tôi</button></a></p>
    </div>
<?php } else { ?>
    <div class="ltn__appointment-area pb-120">
        <div class="container ">
            <div class="row pt-[200px]">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                        <form action="index.php?act=datlich" method="post">
                            <h6>Thông tin đặt xe của bạn</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" value="<?= $_SESSION['user']['hovaten'] ?>" name="hovaten" disabled>
                                        <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['hovaten'])) : ?>
                                                <?= $_SESSION['errors_muahhang']['hovaten'] ?>
                                            <?php endif ?></small>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="ltn__lastname">
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" value="<?= $_SESSION['user']['email'] ?>" name="email" placeholder="Email address" disabled>
                                        <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['email'])) : ?>
                                                <?= $_SESSION['errors_muahhang']['email'] ?>
                                            <?php endif ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" value="<?= $_SESSION['user']['tel'] ?>" name="tel" placeholder="Phone number" disabled>
                                        <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['tel'])) :  ?>
                                                <?= $_SESSION['errors_muahhang']['tel'] ?>
                                            <?php endif ?></small>
                                    </div>
                                </div>
                            </div>

                            <h6>
                                <input type="text" name="product_id" value="<?php echo $detail_product['product_id'] ?> " hidden >
                                
                            </h6>

                            <h6>Bạn cần yêu cầu hay ý kiến muốn đóng góp ?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea type='text' name="ltn__message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <h6>First Choice</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item ltn__datepicker">
                                                <div class=" ">
                                                    <input type="date" name="ngay_xem" class="form-control" placeholder="Select Date">
                                                    <!-- <div class="input-group-addon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div> -->

                                                </div>
                                            </div>
                                            <br>
                                            <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['chonngay'])) : ?>
                                                    <?= $_SESSION['errors_muahhang']['chonngay'] ?>
                                                <?php endif ?></small>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-time">
                                                <select class="nice-select" name="ca_xemxe">
                                                    <option value=" ">HH:MM</option>
                                                <?php foreach($caxemxe as $item ) {?>
                                                    <option value="<?php echo $item['caxem_id'] ?>"><?php echo $item['name_caxem'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                            </div>
                                            <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['chonthoigian'])) : ?>
                                                    <?= $_SESSION['errors_muahhang']['chonthoigian'] ?>
                                                <?php endif ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Cơ sở xem xe</h6>
                                            <div class="input-item">
                                                <select class="nice-select" name="co_so">
                                                    <option value="">Địa chỉ</option>
                                                    <?php foreach($cosoxem as $item ) {?>
                                                    <option value="<?php echo $item['coso_id'] ?>"><?php echo $item['name_coso'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                            </div>
                                            <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['chondiachi'])) : ?>
                                                    <?= $_SESSION['errors_muahhang']['chondiachi'] ?>
                                                <?php endif ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    Xin lưu ý rằng ngày và giờ bạn yêu cầu có thể không có sẵn. Chúng tôi sẽ liên hệ với bạn để xác nhận chi tiết cuộc hẹn thực tế của bạn.
                                </div>
                                <div class="btn-wrapper text-center mt-0">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase border-[#212529] bg-[#212529]" name="btn_datlich" type="submit">Đặt lịch ngay bây giờ</button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php unset($_SESSION['dangkythanhcong']) ?>