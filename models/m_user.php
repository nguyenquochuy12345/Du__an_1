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
   
    function read_user_by_id_pass($email,$mat_khau)
    {
        $sql="select * from nguoi_dung where email=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,md5($mat_khau)));
    }

    function luu_dang_nhap($email,$mat_khau)
    {
        $user = $this->read_user_by_id_pass($email,$mat_khau);
        if(isset($user->ma_quyen) && $user->ma_quyen == 2)
        {
            $_SESSION['user'] = $user;
            $selfURL = explode("/", $_SERVER['REQUEST_URI']);
            echo "<script type='text/javascript'>window.location.href = '". $selfURL[2] ."'</script>";
        }

        else
        {
            return "Thông tin đăng nhập không hợp lệ ";
        }
    }

    public function  Insert_user($id_khach_hang,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky)
    {
        $sql ="insert into khach_hang values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_dang_nhap,$mat_khau,$email,""));
    }
    }


?>