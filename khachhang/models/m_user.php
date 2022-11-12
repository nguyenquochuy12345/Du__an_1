<?php
include("database.php");
class M_user extends database
{
    function read_user()
    {
        $sql="select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function  Insert_user($id_khach_hang,$ho_ten,$mat_khau,$email,$ngay_dang_ky)
    {
        $sql ="insert into khach_hang values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ho_ten,$mat_khau,$email,""));
    }
    
}
?>