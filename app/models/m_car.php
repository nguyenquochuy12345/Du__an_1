<?php
require_once 'core/Database.php';
class M_car extends Database
{
    // protected $table = 'products';

    public function show_Product()
    {
        $sql = "SELECT * FROM `sanpham`";
        $read = $this->query($sql);
        return $read;
    }
    public function show_category_Product()
    {
        $sql = "SELECT 'name_danhmuc' FROM `danhmuc` ";
        $read = $this->query($sql);
        return $read;
    }



    public function page_Product($id)
    {
        $data = [
            'PAGE_PRODUCT 1',
            'PAGE_PRODUCT 2',
            'PAGE_PRODUCT 3',
            // '.c:\xampp\htdocs\.'
        ];
        return $data[$id];
    }
}
