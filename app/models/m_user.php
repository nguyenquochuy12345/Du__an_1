<?php
require_once 'core/Database.php';
class M_user extends Database
{
    // protected $table = 'products';

    public function sign_up()
    {
        $sql = "SELECT * FROM `sanpham`";
        $read = $this->query($sql);
        return $read;
    }
    




}
