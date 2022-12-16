<div class="nen">
    <div class="edit">
        <form class="mx-auto w-[60%]" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <table class="form">
                <h1 class="text-[20px] font-[600] py-3">Sửa sản phẩm</h1>
                <tr>
                    <td>ID sản phẩm</td>
                </tr>
                <tr>
                    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                    <td class="cursor-no-drop"><p class="border-[1px] w border-[#cccccc] w-[400px] h-[30px] rounded-[5px] bg-white pl-[10px]"><?= $product['product_id'] ?></p></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                </tr>
                <tr>
                    <td><input type="text" name="product_name" value="<?= $product['product_name'] ?>"></td>
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
                    <td><input type="number" name="price" value="<?= $product['price'] ?>"></td>
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
                    <td><img class="w-[50%]" name="img" src="../view/public/img/car/<?= $product['img'] ?>" alt=""></td>
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
                    <td><textarea class="spmt border-2" name="description" id="" cols="52" rows="10"><?= $product['description'] ?></textarea></td>
                </tr>
                <tr>
                    <td>Đời xe</td>
                </tr>
                <tr>
                    <td><input type="number" name="doi_xe" value="<?= $product['doi_xe'] ?>"></td>
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
                    <td><input type="number" name="cong_xuat" value="<?= $product['cong_xuat'] ?>"></td>
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
                    <td><input type="text" name="color" value="<?= $product['color'] ?>"></td>
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
                    <td><input type="number" name="quantity" value="<?= $product['quantity'] ?>"></td>
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

                    <td><select class="trong" name="cate_id">
                            <?php foreach ($cates as $cate) : ?>

                                <option value="<?= $cate['cate_id'] ?>" <?= $product['cate_id'] ?> <?= ($cate['cate_id'] == $product['cate_id']) ? "selected" : "" ?>><?= $cate['cate_name'] ?></option>

                            <?php endforeach ?>
                        </select></td>
                </tr>
                <tr>
                    <input type="hidden" name="ngaynhap" value="<?= $product['ngaynhap'] ?>">
                </tr>
                <tr>
                    <td><button type="submit" name="update">Sửa</button></td>
                </tr>
            </table>
        </form>
    </div>
    <?php unset($_SESSION['error_product']) ?>
</div>