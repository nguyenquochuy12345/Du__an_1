<div class="nen">
    <div class="add">
        <form action="index.php?act=addcs" method="post">
            <h1 class="text-[20px] font-[600] py-3">Thêm cơ sở</h1>
            <table class="form">
                <tr>
                    <td>Mã cơ sở</td>
                </tr>
                <tr>
                    <td><input type="text" disabled placeholder="auto numble"></td>
                </tr>
                <tr>
                    <td>Tên cơ sở</td>
                </tr>
                <tr>
                    <td><input type="text" name="name_coso"></td>
                </tr>

                <tr>
                    <?php if (isset($_SESSION['cate_error']['cate_name'])) : ?>
                        <td class="thongbaoloi"><?= $_SESSION['cate_error']['cate_name'] ?></td>
                    <?php endif ?>
                </tr>

                <?php
                ?>
                <tr>
                    <td><button type="submit" name="them">Thêm</button></td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>


            </table>
        </form>
        <?php $_SESSION['cate_error'] = [] ?>
    </div>
</div>