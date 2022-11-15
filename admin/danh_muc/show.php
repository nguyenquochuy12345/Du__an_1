<article class="ml-14 mt-14 md:ml-64 text-black ">
    <div class=" w-full">
        <a href="index.php?action=add_danhmuc" class="ml-10"><button class="bg-blue-500 hover:opacity-[0.7] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]">Thêm mới</button></a>
        <h3 class="text-[20px] text-center">Quản trị danh mục</h3>
        <table class="shadow-xl border text-center  md:mt-[20px] w-[70%] mx-auto">
            <thead class="w-full">
                <tr class="w-full">
                    <th class="w-[10%] border">STT</th>
                    <th class="w-[35%] border">Tên</th>
                    <th class="w-[55%] border" colspan="3">Quản trị</th>
                    <th></th>
                </tr>
            </thead>
            <?php 
                $kq =  loadall_danhmuc();
                $stt = 0;
                foreach($kq as $row){
            ?>
            <tbody>

            <tr class="border">
                <td class="border"><?= $stt += 1 ?></td>
                <td class="border"><?php echo $row["name_danhmuc"]  ?></td>
                <td class="border">
                    <p
                        class="bg-[#02cc8b] hover:opacity-[0.7] w-[50%] mx-auto text-white font-bold py-1 pl-2 pr-3 my-2 rounded">
                        <a href="index.php?action=edit_danhmuc&id_danhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
                    </p>
                </td>
                <td class="">
                    <p
                        class="bg-red-500 hover:opacity-[0.7] w-[50%] mx-auto text-white font-bold py-1 pl-2 pr-2 my-2 rounded">
                        <a onclick="return confirm('Bạn có muốn xóa không?')"
                        href="index.php?action=delete_danhmuc&id_danhmuc=<?php echo $row['id_danhmuc']?>">Xóa  </a>
                    </p>
                </td>
            </tr>
            </tbody>
            <?php 
                }
            ?>
        </table>
    </div>
</article>