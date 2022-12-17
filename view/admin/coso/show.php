<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Danh sách cơ sở</h1>
        <table class="list">
            <thead>
                <tr>
                    <th>Mã cơ sở</th>
                    <th>Tên cơ sở</th>
                    <th><button id="them"><a href="index.php?act=addcs">Thêm</a></button></th>
                </tr>
            </thead>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($cates as $cate) : ?>
                    <tr>
                        <td><?= $cate['coso_id'] ?></td>
                        <td><?= $cate['name_coso'] ?></td>
                        <td><?php if ($cate['coso_id'] != 48) : ?> <button id="sua"><a href="index.php?act=edit_cs&id=<?= $cate['coso_id'] ?>">Sửa</a></button><button id="xoa"><a href="index.php?act=deletecs&id=<?= $cate['coso_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')">Xóa</a></button> <?php endif ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>