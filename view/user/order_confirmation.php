<!-- <div class="content"> -->
<?php if (!isset($_SESSION['user'])) : ?>
    <div class="cart_error">
        <p>Bạn cần đăng nhập để thực hiện chức năng này</p>
        <button type="button"><a href="index.php?act=vao_trang_dangnhap">Đăng nhập</a></button>
    </div>
<?php endif ?>

<?php if (isset($_SESSION['dangkythanhcong'])) { ?>
    <div class="cart_error pt-[200px]">
        <p>Cảm ơn quý khách đã đặt lịch bên Ga-ra! quý khách có thể click nút bên dưới để xem thông tin đặt lịch của bạn</p>
        <button type="button"><a href="index.php?act=vao_datlich">Lịch đặt của tôi</a></button>
    </div>
<?php } else { ?>
    <div class="ltn__appointment-area pb-120">
        <div class="container ">
            <div class="row pt-[200px]">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                        <form action="index.php?act=muahang" method="post">
                            <h6>Thông tin đặt xe của bạn</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" value="<?= $_SESSION['user']['hovaten'] ?>" name="hovaten">
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
                                        <input type="email" value="<?= $_SESSION['user']['email'] ?>" name="email" placeholder="Email address">
                                        <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['email'])) : ?>
                                                <?= $_SESSION['errors_muahhang']['email'] ?>
                                            <?php endif ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" value="<?= $_SESSION['user']['tel'] ?>" name="tel" placeholder="Phone number">
                                        <small style="color: red;"><?php if (isset($_SESSION['errors_muahhang']['tel'])) : ?>
                                                <?= $_SESSION['errors_muahhang']['tel'] ?>
                                            <?php endif ?></small>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6>Thông tin của xe bạn muốn đặt</h6>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Model</option>
                                            <option>Any</option>
                                            <option>6 Series (1)</option>
                                            <option>7 Series (1)</option>
                                            <option>8 Series (1)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Year</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> My vehicle is not listed in the form above..</label></p>
                                </div>
                            </div> -->
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
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" name="ngay_xem" class="form-control" placeholder="Select Date">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-time">
                                                <select class="nice-select" name="ca_xemxe">
                                                    <option value="HH:MM">HH:MM</option>
                                                    <option value="9:00 Sáng - 11:00 Sáng">9:00 Sáng - 11:00 Sáng</option>
                                                    <option value="11:00 Sáng - 13:00 Chiều">11:00 Sáng - 13:00 Chiều</option>
                                                    <option value="13:00 Chiều - 15:00 Chiều">13:00 Chiều - 15:00 Chiều</option>
                                                    <option value="15:00 Chiều - 17:00 Chiều">15:00 Chiều - 17:00 Chiều</option>
                                                    <option value="17:00 Chiều - 19:00 Chiều">17:00 Chiều - 19:00 Chiều</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Cơ sở xem xe</h6>
                                            <div class="input-item">
                                                <select class="nice-select" name="co_so">
                                                    <option value="Trịnh Văn Bô">Địa chỉ</option>
                                                    <option value="Trịnh Văn Bô">Trịnh Văn Bô</option>
                                                    <option value="74 Đường cầu Diễn">74 Đường cầu Diễn</option>
                                                    <option value="Hoàng Quốc Việt - Cầu Giấy">Hoàng Quốc Việt - Cầu Giấy</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                Xin lưu ý rằng ngày và giờ bạn yêu cầu có thể không có sẵn. Chúng tôi sẽ liên hệ với bạn để xác nhận chi tiết cuộc hẹn thực tế của bạn.
                            </div>
                                <div class="btn-wrapper text-center mt-0">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase border-[#212529] bg-[#212529]" name="btn_muahang" type="submit">Đặt lịch ngay bây giờ</button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php unset($_SESSION['dangkythanhcong']) ?>