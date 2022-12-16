<?php
if (isset($_SESSION['user'])) {
    header("location: index.php");
}
?>
<div class="content pt-[200px]">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title-area text-center">
                <h1 class="section-title ">Quyên mật khẩu</h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col mx-auto w-[50%] text-center">
            <div class="col-lg-6 w-full">
                <div class="account-login-inner w-full">
                    <form class="w-full" action="index.php?act=quen_mat_khau" method="post">

                        <table class="dangnhap w-full">
                            <tr>
                                <td class="ten_input text-left pl-2" name="username">Tên đăng nhập</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="username" type="text" placeholder="Nhập tên đăng nhập của bạn"></td>
                            </tr>
                            <tr>
                                <td><p style="color: red ;"><?php if(isset($_SESSION['errors']['username'])) :?>
                                        <?=$_SESSION['errors']['username']?>
                                <?php endif?></p></td>
                            </tr>
                            <tr>
                                <td class="ten_input text-left pl-2" name="email">Email</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="email" type="text" placeholder="Nhập email của bạn"></td>
                            </tr>
                            <tr>
                                <td><p style="color: red ;"><?php if(isset($_SESSION['errors']['email'])) :?>
                                        <?=$_SESSION['errors']['email']?>
                                <?php endif?></p></td>
                            </tr>
                            <!-- <tr>
                                <td class="thongbao">
                                    <?php if (isset($_SESSION['thongbao'])) : ?>
                                        <?= $_SESSION['thongbao'] ?>
                                    <?php endif ?>
                                </td>
                            </tr> -->
                            <tr>
                                <td> <button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="submit" name="gui" class="dn">Gửi</button></td>

                            </tr>
                            <!-- <tr>
                                <td class="hoac" colspan="2">
                                    <h4><span>Hoặc</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="dangky2" colspan="2">Bạn chưa có tài khoản? <a href="index.php?act=vao_trang_dangky">Đăng ký ngay</a></td>
                            </tr> -->
                        </table>
                    </form>
                    <?php unset($_SESSION['thongbao']) ?>
                    <?php unset($_SESSION['errors']) ?>
                </div>
            </div>
        </div>
</div>