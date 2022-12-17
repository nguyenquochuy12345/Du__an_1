<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Danh sách tài khoản </h1>
        <table class="list">

            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Họ và tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Vai trò</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['hovaten'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td><?= $user['tel'] ?></td>
                        <?php if ($user['vaitro'] == 'Vô hiệu hóa') { ?>
                            <td style="color: red ; font-weight:600 ;"><?= $user['vaitro'] ?></td>
                        <?php } else { ?>
                            <td><?= $user['vaitro'] ?></td>
                        <?php } ?>
                        <td id="chucnang"><button id="sua"><a href="index.php?act=edit_user&user_id=<?= $user['user_id'] ?>">Sửa</a></button>

                            <?php if ($_SESSION['user']['user_id'] != $user['user_id'] && $user['vaitro'] !=  'Vô hiệu hóa' ) : ?>
                                <button id="xoa"><a href="index.php?act=disable_user&user_id=<?= $user['user_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn vô hiệu hóa tài khoản này không ?')">Vô hiệu</a></button> <?php endif ?>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>