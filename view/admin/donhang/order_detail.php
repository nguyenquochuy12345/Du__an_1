<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Chi tiết đơn hàng</h1>
        <table class="list">
            <thead>
                <tr class="table_cart_tr">
                    <th>Mã đơn hàng</th>
                    <th id="tenndh">Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Chi tiết</th>
                    <th>Giá</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($order_detail as $order_detail) : ?>
                    <tr id="hang">
                        <td><?= $order_detail['order_id'] ?></td>
                        <td id="tenndh"><?= $order_detail['product_name'] ?></td>
                        <td> <img class="w-[100px] mx-auto" src="../view/public/img/car/<?= $order_detail['img'] ?>"></td>
                        <td><p class="w-[250px] text-ellipsis overflow-hidden whitespace-nowrap"><?= $order_detail['description'] ?></p></td>
                        <td><?= format_currency($order_detail['price']) . " VNĐ" ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>


    </div>
</div>