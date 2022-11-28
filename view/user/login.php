<?php
if (isset($_SESSION['user'])) {
    header("location: index.php");
}
?>
<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65" style="margin-top: 50px;">
    <?php if (!isset($_SESSION['user'])) : ?>
        <script>
            alert('Bạn cần đăng nhập đã !');
        </script>
    <?php endif ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Sign In <br>To Your Account</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                        Sit aliquid, Non distinctio vel iste.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="index.php?act=dangnhap" method="post">

                        <table class="dangnhap">
                            <h2 id="dangnhap">Đăng nhập</h2>
                            <tr>
                                <td class="ten_input">Tên đăng nhập</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="username" type="text"></td>
                            </tr>
                            <tr>
                                <td class="ten_input">Mật khẩu</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="password" type="password"></td>
                            </tr>
                            <tr>
                                <td class="thongbao">
                                    <?php if (isset($_SESSION['thongbao'])) : ?>
                                        <?= $_SESSION['thongbao'] ?>
                                    <?php endif ?>

                                    <?php if (isset($_SESSION['dangkythanhcong'])) : ?>
                                        <?= $_SESSION['dangkythanhcong'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td> <button type="submit" name="dangnhap" class="dn">Đăng nhập</button></td>
                                <td class="quen"><a href="index.php?act=vao_trang_quenmk">Quên mật khẩu ?</a></td>
                            </tr>
                            <tr>
                                <td class="hoac" colspan="2">
                                    <h4><span>Hoặc</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="dangky2" colspan="2">Bạn chưa có tài khoản? <a href="index.php?act=vao_trang_dangky">Đăng ký ngay</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p>Add items to your wishlistget personalised recommendations <br>
                        check out more quickly track your orders register</p>
                    <div class="btn-wrapper">
                        <a href="index.php?act=vao_trang_dangky" class="theme-btn-1 btn black-btn">Đăng ký tài khoản ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->