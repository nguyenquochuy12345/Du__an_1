<div class="nen">
    
</div>
<div class="nen3">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Thống kê danh mục</h1>
        <table class="list" >
            <thead>
            <tr>
                <th>Tên danh mục</th>
                <th>Số sản phẩm</th>
                <th>Giá cao nhất</th>
                <th>Giá Thấp nhất nhất</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cate as $cate) : ?>
                <tr>
                    <td><?= $cate['cate_name'] ?></td>
                    <td><?= $cate['soluong'] ?></td>
                    <td><?=  format_currency($cate['max']) . " VNĐ"?></td>
                    <td><?= format_currency($cate['min']) . " VNĐ" ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td><button id="sua"><a href="index.php?act=bieudo_danhmuc">Biểu đồ</a></button></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="nen3">
<div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Top 3 sản phẩm có nhiều lượt xem nhất</h1>
        <table class="list" >
            <thead>
            <tr> 
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá</th>
                <th>Số lượt xem</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sanpham_top1_view as $value) : ?>
                <tr>
                    <td><?= $value['product_id'] ?></td>
                    <td><?= $value['product_name'] ?></td>
                    <td><img class="my-auto mx-auto w-[100px]" src="../view/public/img/car/<?= $value['img'] ?>" height="100px" alt=""></td>
                    <td><?= format_currency($value['price']) . " VNĐ" ?></td>
                    <td><strong><?= $value['view'] ?></strong></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="nen3">
<div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Top 5 Sản phẩm được bình luận nhiều nhất</h1>
        <table class="list" >
            <thead>
            <tr> 
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá</th>
                <th>Số bình luận</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sp_binhluannhieu as $value) : ?>
                <tr>
                    <td><?= $value['product_id'] ?></td>
                    <td><?= $value['product_name'] ?></td>
                    <td><img class="my-auto mx-auto w-[100px]" src="../view/public/img/car/<?= $value['img'] ?>" height="100px" alt=""></td>
                    <td><?= format_currency($value['price']) . " VNĐ" ?></td>
                    <td><strong><?= $value['sobinhluan'] ?></strong></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
