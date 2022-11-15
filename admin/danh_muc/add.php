<article class="ml-14 mt-14 md:ml-72 text-black">
    <form method="POST">
        <label class="">Mã loại</label>
        <br>
        <input
            class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="ma_loai" value="auto number" readonly>
        <br><br>
        <label class="text-black" for="">Danh mục</label> 
        <br>
        <input
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
            type="text" name="danhmuc" placeholder="Danh mục" required> <br>
        <a href="index.php?action=quanlydanhmuc"
            class="bg-gray-500 mr-5 hover:opacity-[0.7] text-white font-bold py-[10px] px-5 rounded focus:outline-none focus:shadow-outline mt-[20px]"
            >Quay lại
        </a>
        <button
            class="bg-blue-500 hover:opacity-[0.7] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]"
            type="submit" name="addCate" class="btn-insert">Thêm mới</button>
        
    </form>
</article>