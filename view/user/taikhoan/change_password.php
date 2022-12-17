<?php
if (!isset($_SESSION['user'])) {
    header("location: index.php");
}
?>
<div class="content  pt-[200px]">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title-area text-center">
                <h1 class="section-title">Đổi mật khẩu</h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col mx-auto w-[50%] text-center">
            <div class="col-lg-6 w-full">
                <div class="account-login-inner w-full">
                    <form class="w-full" action="index.php?act=doimatkhau" method="post">
                        <table class="dangnhap w-full">
                            <tr>
                                <td class="ten_input text-left pl-2">Tài khoản</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="username" type="text" placeholder="Nhập tài khoản của bạn"></td>
                            </tr>
                            <tr>
                                <td class="hidden">
                                    <p style="color: red; text-align: left; margin-bottom: 5px;">
                                    <?php if (isset($_SESSION['error_doimk']['username'])) : ?>

                                        <?= $_SESSION['error_doimk']['username'] ?>
                                    <?php endif ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="ten_input text-left pl-2">Mật khẩu cũ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="old_password" type="password" placeholder="Nhập mật khẩu cũ của bạn"></td>
                            </tr>
                            <tr>
                                <td class="thongbao">
                                    <p  style="color: red; text-align: left; margin-bottom: 5px;">
                                    <?php if (isset($_SESSION['error_doimk']['old_password'])) : ?>

                                        <?= $_SESSION['error_doimk']['old_password'] ?>
                                    <?php endif ?>
                                    </p>
                                </td>
                            </tr>            
                            <tr>
                                <td class="ten_input text-left pl-2">Mật khẩu mới</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="placeholder:tracking-tight" name="new_password" type="password" placeholder="Nhập mật khẩu mới"></td>
                            </tr>
                            <tr>
                                <td class="thongbao">
                                    <p style="color: red; text-align: left; margin-bottom: 5px;">
                                    <?php if (isset($_SESSION['error_doimk']['new_password'])) : ?>

                                        <?= $_SESSION['error_doimk']['new_password'] ?>
                                    <?php endif ?>
                                    </p>
                                </td>
                            </tr>
                            
                            <tr>

                                <td class="ten_input text-left pl-2">Nhập lại mật khẩu mới</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="placeholder:tracking-tight" name="re_new_password" type="password" placeholder="Nhập lại  mật khẩu mới"></td>
                            </tr>
                            <tr>
                                <td class="thongbao">
                                    <p  style="color: red; text-align: left; margin-bottom: 5px;">
                                    <?php if (isset($_SESSION['error_doimk']['re_new_password'])) : ?>

                                        <?= $_SESSION['error_doimk']['re_new_password'] ?>
                                    <?php endif ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="thongbao">
                                    <?php if (isset($_SESSION['doimatkhau_thanhcong'])) : ?>

                                        <?= $_SESSION['doimatkhau_thanhcong'] ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="doimk"> <button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29] mb-30" type="submit" name="xacnhandoimk" class="dn">Xác nhận</button></td>

                            </tr>

                        </table>
                    </form>
                    <?php unset($_SESSION['error_doimk']);
                        unset($_SESSION['doimatkhau_thanhcong']);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>