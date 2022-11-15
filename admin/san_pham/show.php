<article class="ml-14 mt-14 mb-10 md:ml-64 text-black">
    <a href="index.php?action=add_product" class="ml-10"><button class="bg-blue-500 hover:opacity-[0.7] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]">Thêm mới</button></a>
    <form action="index.php?action=quanlysanpham" method="post">
        <!-- <input type="text" name="kyw" class="border " placeholder="Tìm Kiếm Sản Phẩm"> -->
        <!-- <select name="id_danhmuc">
            <option value="0" selected>Tất Cả Sản Phẩm</option>
            <?php foreach ($listdanhmuc as $danhmuc) { 
            extract ($danhmuc); 
            echo '<option value="'.$id_danhmuc.'"> '.$name_danhmuc.' </option>'; 
        } 
        ?>
        </select> -->
        <!-- <input type="submit" value="Tìm Kiếm" name="filter"> -->
    </form>
    <table class="text-center  ">
        <tr class="border shadow-2xl ">
        <td class="">STT</td>
        <td class="w-[150px]">Tên Sản Phẩm</td>
        <td class="w-[150px]">Giá</td>
        <td class="">Ảnh</td>
        <td class="w-[250px]">Mô Tả</td>
        <td class="w-[130px]">Danh Mục</td>
        </tr>
        <?php 
            $kq =  loadall_sanpham();
            $stt = 0;
            foreach($kq as $row){
            extract($row);
        ?>
        <tr>
            <td><?= $stt += 1 ?></td>
            <td><?php echo $row["name_sanpham"]?></td>
            <td><?php echo $row["price_sanpham"]  ?> VNĐ</td>
            <td><img src="./san_pham/image/toi.jpg" alt="lỗi"></td>
            <td><?php echo $row["description_sanpham"]?></td>
            <td><?php echo $row["id_danhmuc"]?></td>
            <td class="">
                <p class="bg-[#02cc8b] hover:opacity-[0.7] text-white px-[5px] py-[3px] rounded-md"><a href="index.php?action=edit_product&id_sanpham= <?php echo $row['id_sanpham']?>">Sửa Sản Phẩm</a></p>
                </td>
                <td class="">
            <p class="ml-[10px] bg-[red] hover:opacity-[0.7] text-white px-[5px] py-[3px] rounded-md"> <a
                href="index.php?action=delete_sanpham&id_sanpham=<?php echo $row['id_sanpham']?>">Xóa
                Sản Phẩm</a></p>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</article>
<!-- END Product -->
</div>
</div>
</body>
</html>