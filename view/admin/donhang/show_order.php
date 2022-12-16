<script>
    function trangthai(i, giatribandau) {
        if (document.getElementsByClassName('trangthaidonhang')[i].value != giatribandau) {
            document.getElementsByClassName('btn_donhang')[i].style.display = "block";
        } else if (document.getElementsByClassName('trangthaidonhang')[i].value == giatribandau) {
            document.getElementsByClassName('btn_donhang')[i].style.display = "none";
        }


    }
</script>
<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] pt-3">Danh sách đơn hàng</h1>
        <form action="index.php?act=showsp" method="post" class="search">
            <input type="text" name="kyw">
            <select name="cate_id">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($cates as $cate) : ?>
                    <option value="<?= $cate['cate_id'] ?>"><?= $cate['cate_name'] ?></option>
                <?php endforeach ?>
            </select>
            <button type="submit" name="tim">Tìm kiếm</button>
        </form>
        <table class=" list ">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Mã khách hàng</th>
                    <th>Người nhận hàng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ngày xem</th>
                    <th>Thời gian</th>
                    <th>Cơ sở</th>
                    <th colspan="2">Trạng thái</th>
                    <th>Trạng thái lịch</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = -1; ?>
                <?php foreach ($show_order as $order) : ?>
                    <tr>

                        <td><?= $order['order_id'] ?></td>
                        <td><?= $order['user_id'] ?></td>
                        <td><?= $order['hovaten'] ?></td>
                        <td><?= $order['email'] ?></td>
                        <td><?= $order['tel'] ?></td>
                        <td><?= $order['ngayxemxe'] = date("d-m-Y") ?></td>
                        <td><p class="w-[50px] text-ellipsis overflow-hidden"><?= $order['name_caxem'] ?></p></td>
                        <td><p class="w-[150px] text-ellipsis overflow-hidden whitespace-nowrap"><?= $order['name_coso'] ?></p></td>
                        <?php $count++; ?>
                        <form class="donhang" action="index.php?act=capnhat_donhang" method="post">
                            <input name="order_id" type="hidden" value="<?= $order['order_id'] ?>">
                            <input type="hidden" name="ngaydathang" value="<?= $order['ngaydathang'] ?>">
                            <!-- <input type="hidden" name="tong" value="<?= $order['tong'] ?>"> -->
                            <td><select <?= ($order['status_id'] == 3 || $order['status_id'] == 5) ? 'disabled' : "" ?> name="trangtdh" class="trangthaidonhang" onchange="trangthai(<?= $count ?>,<?= $order['status_id'] ?>)">
                                    <?php foreach ($status as $value) : ?>
                                        <option value="<?= $value['status_id'] ?>" <?= ($value['status_id'] == $order['status_id']) ? 'selected' : "" ?>><?= $value['status'] ?></option>
                                    <?php endforeach ?>
                                </select></td>
                            <td><button class="btn_donhang border-[#e53e29] bg-[#e53e29] hover:opacity-[0.7] text-white" name="btn_capnhat_donhang" type="submit">Cập nhật</button></td>
                            <td><button><a href="index.php?act=huy_lich&order_id=<?= $order['order_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy lịch hẹn này này không ?')">Huỷ đơn</a></button></td>
                            <td><button class=" border-[#e53e29] bg-[#e53e29] hover:opacity-[0.7] text-[white] py-1 px-2 text-[15px] rounded-md"><a href="index.php?act=chitiet_donhang&order_id=<?= $order['order_id'] ?>">Chi tiết</a></button></td>
                        </form>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>