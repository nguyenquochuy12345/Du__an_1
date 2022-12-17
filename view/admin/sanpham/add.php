<div class="nen">
    <div class="add">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">


            <table class="form">
                <h1 class="text-[20px] font-[600] py-3">Thêm sản phẩm</h1>
                <tr>
                    <td>ID sản phẩm</td>
                </tr>
                <tr>
                    <td><input type="text" disabled></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                </tr>
                <tr>
                    <td><input type="text" name="product_name"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                            <?php if (isset($_SESSION['error_product']['product_name'])) : ?>
                                <?= $_SESSION['error_product']['product_name'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Giá</td>
                </tr>
                <tr>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                            <?php if (isset($_SESSION['error_product']['price'])) : ?>
                                <?= $_SESSION['error_product']['price'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ảnh</td>
                </tr>
                <tr>
                    <td>
                        <!-- <input type="file" name="img"> -->
                        <input name="img[]" type="file" multiple="multiple" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                            <?php if (isset($_SESSION['error_product']['img'])) : ?>
                                <?= $_SESSION['error_product']['img'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                </tr>
                <tr>
                    <td><textarea class="spmt border-2 border-[#CCCCCC]" name="description" id="" cols="52" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Đời xe</td>
                </tr>
                <tr>
                    <td><input type="number" min="1" name="doi_xe"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                        <?php if (isset($_SESSION['error_product']['doi_xe'])) : ?>
                                <?= $_SESSION['error_product']['doi_xe'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Công xuất</td>
                </tr>
                <tr>
                    <td><input type="number" min="1" name="cong_xuat"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                        <?php if (isset($_SESSION['error_product']['cong_xuat'])) : ?>
                                <?= $_SESSION['error_product']['cong_xuat'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Màu</td>
                </tr>
                <tr>
                    <td><input type="text" name="color"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                        <?php if (isset($_SESSION['error_product']['color'])) : ?>
                                <?= $_SESSION['error_product']['color'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                </tr>
                <tr>
                    <td><input type="number" min="1" name="quantity"></td>
                </tr>
                <tr>
                    <td>
                        <div class="loi">
                            <?php if (isset($_SESSION['error_product']['quantity'])) : ?>
                                <?= $_SESSION['error_product']['quantity'] ?>
                            <?php endif ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Danh mục</td>
                </tr>
                <tr>
                    <td><select class="trong" name="cate_id" id="">
                            <?php foreach ($cates as $cate) : ?>
                                <option value="<?= $cate['cate_id'] ?>"><?= $cate['cate_name'] ?></option>
                            <?php endforeach ?>
                        </select></td>
                </tr>
                <tr>
                    <td><button type="submit" name="them">Thêm</button></td>
                </tr>
            </table>
        </form>
    </div>
    <?php unset($_SESSION['error_product']) ?>
</div>