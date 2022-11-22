<article class="h-full mt-14 mb-10 md:ml-64 text-black mx-auto">
    <h3 class="text-[20px] text-center">Quản trị danh mục</h3>
    <table class="shadow-xl mx-auto text-center">
        <tr class="border w-[100%]" >
            <td class="w-[10%] border">Mã Tài Khoản</td>
            <td class="w-[18%] border">Tên Tài Khoản</td>
            <td class="w-[18%] border">Mật Khẩu</td>
            <td class="w-[15%] border">Email</td>
            <td class="w-[15%] border">Số Điện Thoại</td>
            <td class="w-[4%] border">Quyền</td>
            <td class="w-[20%] border"></td>
        </tr>
        <?php 
        $kq =  loadall_taikhoan();
        $stt = 0;
        foreach($kq as $row){
        ?>
        <tr>
            <td class="border"><?php echo $row["id_taikhoan"] ?></td>
            <td class="border"><?php echo $row["name_taikhoan"]?></td>
            <td class="border"><?php echo $row["pass_taikhoan"]?></td>
            <td class="border"><?php echo $row["email_taikhoan"]?></td>
            <td class="border"><?php echo $row["phone_taikhoan"]?></td>
            <td class="border"><?php echo $row["role"]?></td>
        <td class="pb-[10px] pt-[10px] flex justify-center items-center border">
            <p class="bg-[#02cc8b] hover:opacity-[0.7] text-white px-[5px] py-[3px] rounded-md"><a href="index.php?action=edit_taikhoan&id='.$id. '">Sửa Tài Khoản</a></p>
            <p class="hover:opacity-[0.7] ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md"> <a
            href="index.php?action=delete_taikhoan&id='.$id.'">Khóa Tài Khoản</a></p>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>
</article>