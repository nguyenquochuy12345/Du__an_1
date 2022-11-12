<?php
@session_start();
require_once ("database.php");

class M_user extends database
{
    function read_user()
    {
        $sql="select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function thoat_dang_nhap()
    {
       // session_destroy();
        unset( $_SESSION['user']);
        header("location:index.php");
    }
   
    public function  Insert_user($id_khach_hang,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky)
    {
        $sql ="insert into khach_hang values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_dang_nhap,$mat_khau,$email,""));
    }
    }


?>