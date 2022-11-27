<div class="nen3 mt-5 w-[95%]">
    <div class="listchung">
        <h1 class="py-2 text-[20px] font-[700]">Thống kê danh mục</h1>
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
           </tbody>
        </table>
    </div>
</div>

<div class="nen3 w-[95%]">
<div class="listchung">
        <h1>Top 3 sản phẩm có nhiều lượt xem nhất</h1>
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
                    <td><img class="mx-auto" src="../view/public/img/car/<?= $value['img'] ?>" width="100px" alt=""></td>
                    <td><?= format_currency($value['price']) . " VNĐ" ?></td>
                    <td><strong><?= $value['view'] ?></strong></td>
                </tr>
            <?php endforeach ?>
           </tbody>
        </table>
    </div>
</div>
<div class="nen3 w-[95%]">
<div class="listchung">
        <h1>Top 5 Sản phẩm được bình luận nhiều nhất</h1>
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
                    <td><img src="../view/img/<?= $value['img'] ?>" height="100px" alt=""></td>
                    <td><?= format_currency($value['price']) . " VNĐ" ?></td>
                    <td><strong><?= $value['sobinhluan'] ?></strong></td>
                </tr>
            <?php endforeach ?>
           </tbody>
        </table>
    </div>
</div>
