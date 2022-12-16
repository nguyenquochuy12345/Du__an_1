<div class="nen">
<div class="edit">
    <form action="index.php?act=updatecs" method="post">
        <table class="form">
            <h1 class="text-[20px] font-[600] py-3">Sửa danh mục</h1>
            <tr>
                <td>Mã cơ sở</td>
                
                <input type="hidden" name="coso_id" value="<?= $cate['coso_id'] ?>">
            </tr>
            <tr>
            <!-- <td><input type="text"  disabled></td> -->
            <td class="cursor-no-drop"><p class="border-[1px] w border-[#cccccc] w-[400px] h-[30px] rounded-[5px] bg-white pl-[10px]"><?= $cate['coso_id'] ?></p></td>
            </tr>
            <tr>
                <td>Tên cơ sở</td>
                
            </tr>
            <tr>
            <td><textarea class="spmt border-2" type="text" name="name_coso" cols="46" rows="5" ><?=$cate['name_coso']?></textarea></td>
            </tr>
            <tr>
                <?php if(isset($_SESSION['cate_error']['name_coso'])) :?>
                    <td class="thongbaoloi"><?=$_SESSION['cate_error']['name_coso'] ?></td>
                    <?php endif?>
            </tr>
            <tr>
                <td><button type="submit" name="update">Sửa</button></td>
            </tr>

            
        </table>
    </form>
    <?php $_SESSION['cate_error']= []?>
</div>
</div>