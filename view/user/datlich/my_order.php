<div class="content pt-[200px]" style="margin-top: 50px;">
    <?php if (empty($my_orders)) { ?>
        <div class="cart_error">
            <h2 class="text-center text-[24px] font-[700]">Bạn chưa có lịch hẹn nào</h2>
            <p class="text-center my-5"><a class="" href="index.php"><button class="theme-btn-2 btn btn-effect-2 border-[#e53e29] bg-[#e53e29]" type="button">QUAY TRỞ LẠI TRANG CHỦ</button></a></p>
        </div>

    <?php } else { ?>
        <div class="donhang w-[85%] mx-auto">
            <h2 class="text-center text-[24px] font-[700] mb-3">Lịch đã đặt</h2>
            <table class="list w-full text-center mb-4">
                <thead class="bg-[#e5e7eb]">
                    <tr>
                        <th>MĐH</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Ngày đặt</th>
                        <th>Ngày xem xe</th>
                        <th>Ca</th>
                        <th>Cơ sở</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết</th>
                        <th>Hủy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($my_orders  as $my_order) : ?>
                        <tr>
                            <td><?= $my_order['order_id'] ?></td>
                            <td id="tenndh"><?= $my_order['hovaten'] ?></td>
                            <td><?= $my_order['email'] ?></td>
                            <td><?= $my_order['tel'] ?></td>
                            <td><?= $my_order['ngaydathang'] ?></td>
                            <td><?= $my_order['ngayxemxe'] ?></td>
                            <td><?= $my_order['name_caxem'] ?></td>
                            <td><?= $my_order['name_coso'] ?></td>

                            <td><?= $my_order['status'] ?>
                            </td>
                            <td><button style="color: green ;" class="chitiet_order"><a href="index.php?act=chitiet_order&order_id=<?= $my_order['order_id'] ?>">Chi tiết</a></button></td>
                            <td>
                                <button style="color: wheat ; background-color: red; font-weight: 600 ; "><a href="index.php?act=huy_lich&order_id=<?= $my_order['order_id']?>" onclick="return confirm('Bạn có chắc chắn muốn hủy lịch hẹn này này không ?')">Hủy lịch hẹn</a></button>
                            </td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    <?php } ?>

</div>