<?php
if (isset($_SESSION['user'])) {
    header("location: index.php");
}
?>
<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65 pt-[200px]">
    <?php if (!isset($_SESSION['user'])) : ?>
        <!-- <script>
            alert('Bạn cần đăng nhập đã !');
        </script> -->

    <?php endif ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng nhập</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-[50%] text-center">
            <div class="col-lg-6 w-full">
                <div class="account-login-inner w-full">
                    <form class="w-full" action="index.php?act=dangnhap" method="post">

                        <table class="dangnhap w-full">
                            <tr>
                                <td class="ten_input text-left">Tên đăng nhập</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="username" type="text"></td>
                            </tr>
                            <tr>
                                <td class="ten_input text-left">Mật khẩu</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="password" type="password"></td>
                            </tr>
                            <tr>
                                <td class="thongbao" style="color: red ;">
                                    <?php if (isset($_SESSION['thongbao'])) : ?>
                                        <?= $_SESSION['thongbao'] ?>
                                    <?php endif ?>

                                    <?php if (isset($_SESSION['dangkythanhcong'])) : ?>
                                        <?= $_SESSION['dangkythanhcong'] ?>
                                    <?php endif ?>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="4"> <button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="submit" name="dangnhap" class="dn">Đăng nhập</button></td>
                            </tr>
                            <tr>
                                
                            </tr>
                            <tr>
                                <td class="dangky2 flex item-center justify-center gap-x-1 mt-3" >Bạn  có tài khoản? <a href="index.php?act=vao_trang_dangky">Đăng ký ngay</a><span>Hoặc</span><a href="index.php?act=vao_trang_quenmk">Quên mật khẩu ?</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->