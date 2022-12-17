<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] pt-3">Danh sách sản phẩm</h1>
        <form action="index.php?act=showsp" method="post" class="search">
        <input type="text" name="kyw">
            <select  name="cate_id">
            <option value="0" selected>Tất cả</option>
                <?php foreach ($cates as $cate) : ?>    
                    <option value="<?= $cate['cate_id'] ?>"><?= $cate['cate_name'] ?></option>
                <?php endforeach ?>
            </select>
            <button type="submit" name="tim">Tìm kiếm</button>
        </form>
        <table class="list">
            <thead>
                <tr>
                    <th>ID sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Đời xe</th>
                    <th>Công xuất</th>
                    <th>Màu</th>
                    <th>Số lượng</th>
                    <th>Danh Mục</th>
                    <th><button id="them"><a href="index.php?act=addsp">Thêm</a></button></th>
                </tr>
            </thead>
            <tbody> <?php foreach ($products as $product) : ?>

                    <tr>
                        <td id="proid"><?= $product['product_id'] ?></td>
                        <td id="tensp"><?= $product['product_name'] ?></td>
                        <td id="gia"> <?= format_currency($product['price']) . " VNĐ" ?></td>
                        <td><img class="" src="../view/public/img/car/<?= $product['img'] ?> " alt=""></td>
                        <td id="description"><p class="w-[150px] text-ellipsis overflow-hidden whitespace-nowrap"><?= $product['description'] ?></p></td>
                        <td id="doi_xe"><?= $product['doi_xe']?></td>
                        <td id="cong_xuat"><?= $product['cong_xuat']?></td>
                        <td class="" id="color"><button class="bg-[<?=$product['color']?>] w-[40px] h-[20px] border-black border-2"></button></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['cate_name'] ?></td>
                        <td id="chucnang" >
                            <button class="ml-[20px] mb-[10px]" id="sua"><a href="index.php?act=editsp&id=<?= $product['product_id'] ?>">Sửa</a></button>
                            <button id="xoa"><a href="index.php?act=delete_sp&id=<?= $product['product_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')">Xóa</a></button>
                        </td>

                    </tr>


                <?php endforeach ?>
            </tbody>

        </table>
        
    </div>
</div>