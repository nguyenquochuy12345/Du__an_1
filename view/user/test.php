<!-- <div class="content"> -->
<?php if (!isset($_SESSION['user'])) : ?>
    <div class="cart_error">
        <p>Bạn cần đăng nhập để thực hiện chức năng này</p>
        <button type="button"><a href="index.php?act=vao_trang_dangnhap">Đăng nhập</a></button>
    </div>
<?php endif ?>

<div class="ltn__appointment-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__appointment-inner">
                    <form action="index.php?act=capnhat_cart&idcart=0" method="post">
                            <h6>Thông tin của xe bạn muốn đặt</h6>
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
                            </div>
                            <h6>Bạn cần yêu cầu hay ý kiến muốn đóng góp ?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea type='text' name="ltn__message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="row">

                                <!-- <div class="col-lg-4 col-md-6">
                                    <h6>Special Offers</h6>
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Select offers</option>
                                            <option>$20 Off A/C Recharge or Repairs</option>
                                            <option>$25 Off Brake Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <h6>Wait or Droping Off</h6>
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Please Choose</option>
                                            <option>Waiting</option>
                                            <option>Dropping Off Vehicle</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <h6>Choose Location</h6>
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Location</option>
                                            <option>Melbourne (9)</option>
                                            <option>Berlin (12)</option>
                                            <option>New York (5)</option>
                                            <option>london (7)</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="col-lg-6">
                                    <h6>First Choice</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item ltn__datepicker">
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" class="form-control" placeholder="Select Date">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-time">
                                                <select class="nice-select">
                                                    <option>HH:MM</option>
                                                    <option>9:00 AM - 11:00 AM</option>
                                                    <option>11:00 AM - 13:00 PM</option>
                                                    <option>13:00 PM - 15:00 PM</option>
                                                    <option>15:00 PM - 17:00 PM</option>
                                                    <option>17:00 PM - 19:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h6>Second Choice (optional)</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item ltn__datepicker">
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" class="form-control" placeholder="Select Date">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-time">
                                                <select class="nice-select">
                                                    <option>HH:MM</option>
                                                    <option>9:00 AM - 11:00 AM</option>
                                                    <option>11:00 AM - 13:00 PM</option>
                                                    <option>13:00 PM - 15:00 PM</option>
                                                    <option>15:00 PM - 17:00 PM</option>
                                                    <option>17:00 PM - 19:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="alert alert-warning" role="alert">
                                Xin lưu ý rằng ngày và giờ bạn yêu cầu có thể không có sẵn. Chúng tôi sẽ liên hệ với bạn để xác nhận chi tiết cuộc hẹn thực tế của bạn.
                            </div> -->
                            <div class="btn-wrapper text-center mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Đặt lịch ngay bây giờ</button>
                            </div>
            

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- </div> -->