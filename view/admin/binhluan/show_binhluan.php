<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Danh sách bình luận</h1>

        <form action="" method="post">
            <table class="list">

                <thead>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số bình luận</th>
                        <th>Mới nhất</th>
                        <th>Cũ nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($binhluan as $binhluan) : ?>
                        <tr>
                            <td><img class="my-auto mx-auto w-[100px]" src="../view/public/img/car/<?= $binhluan['img'] ?>" alt="" height="100px"></td>
                            <td><?= $binhluan['product_name'] ?></td>
                            <td><?= $binhluan['soluong'] ?></td>
                            <td><?= $binhluan['moiNhat'] = date("d-m-Y") ?></td>
                            <td><?= $binhluan['cuNhat'] = date("d-m-Y") ?></td>
                            <td><button id="sua"><a href="index.php?act=chitietBinhluan&product_id=<?= $binhluan['product_id'] ?>">Chi tiết</a></button></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </div>
</div>