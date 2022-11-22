<article class="ml-14 mt-14 mb-10 md:ml-64 text-black">
    <a href="index.php?action=add_product" class="ml-10"><button class="bg-blue-500 hover:opacity-[0.7] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]">Thêm mới</button></a>
    <h3 class="text-[20px] text-center">Quản trị danh mục</h3>
    <form class="mt-10" action="index.php?action=quanlysanpham" method="post">
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
    <table class="text-center w-[80%] mx-auto shadow-xl">
        <tr class="border">
          <td class="w[5%] border">STT</td>
          <td class="w-[20%] border">Tên Sản Phẩm</td>
          <td class="w-[10%] border">Giá</td>
          <td class="w-[12%] border">Ảnh</td>
          <td class="w-[20%] border">Mô Tả</td>
          <td class="w-[5%] border">Lượt Xem</td>
          <td class="w-[5%] border">Danh Mục</td>
          <td class="w-[11%] border-l"></td>
          <td class="w-[11%] border-r"></td>
        </tr>
        <?php 
        foreach($listsanpham as $sanpham){
          extract($sanpham);
          $hinhpath = "./san_pham/image/".$img_sanpham;
          if (is_file($hinhpath)) {
            $hinh="<img width='120px' src='".$hinhpath."'>";
          }else{
            $hinh = "no photo";
          }
    
          echo '<tr>
                  <td class="border">'.$id_sanpham. '</td>
                  <td class="border">' . $name_sanpham.'</td>
                  <td class="border">'.number_format($price_sanpham).' VNĐ</td>
                  <td class="border">'.$hinh.'</td>
                  <td class="border"> <p style="width: 250px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">' . $description_sanpham. '</p></td>
                  <td class="border">' . $view_sanpham. '</td>
                  <td class="border">' . $id_danhmuc. '</td>
                  <td class="border-b">
                    <a href="index.php?action=edit_sanpham&id_sanpham='.$id_sanpham.'" class="cursor-pointer">  
                      <p class="bg-[#02cc8b] hover:opacity-[0.7] w-[100%] mx-auto text-white font-bold py-1 pl-2 pr-3 my-2 rounded">Sửa Sản Phẩm</p>
                    </a>
                  </td>
                  <td class="border-b border-r">
                    <a href="index.php?action=delete_sanpham&id_sanpham='.$id_sanpham.'" class="cursor-pointer">
                      <p class="ml-[10px] bg-[red] hover:opacity-[0.7] text-white px-[5px] py-[3px] rounded-md"> Xóa Sản Phẩm</p>
                    </a>
                  </td>
                </tr>';
          }
          ?>
  </table>
</article>
<!-- END Product -->
</div>
</div>
</body>
</html>