<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
<h3 class="text-[20px] text-center">Quản trị danh mục</h3>
  <table class="text-center shadow-xl ">
    <tr class="border shadow-2xl ">
      <td class="w-[150px]">ID</td>
      <td class="w-[150px]">Nội Dung</td>
      <td class="w-[150px]">ID User</td>
      <td class="w-[150px]">ID Sản Phẩm</td>
      <td class="w-[250px]">Ngày Bình Luận</td>
    </tr>
    <?php 
  foreach($listbinhluan as $binhluan){
        extract($binhluan);
      echo '<tr>
        <td>'.$id. '</td>
        <td>' . $noidung.'</td>
        <td>' . $iduser. '</td>
        <td>' . $idpro. '</td>
        <td>' . $ngaybinhluan. '</td>
        
      <td class="w-[150px] ">
    <p class="ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md"> <a
          href="index.php?action=delete_binhluan&id='.$id.'">Xóa Bình Luận</a></p>
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