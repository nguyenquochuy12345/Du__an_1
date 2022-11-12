<?php
@session_start();
include ("models/m_user.php");
class C_khach_hang
{

    function show_khachhang()
    {
// Models
        $m_user = new M_user();
        // $users = $m_user->read_user()
        // $view = 'views/user/v_user.php';
        include('templates/layout.php');
// View
    }
    function add_user()
    {

        //     $ma_danh_gia,$ten_hv,$anh_hv,$cam_nhan,$ma_khoa_hoc

        $m_user = new M_user();
        if (isset($_POST["btnSave"])) {
            $users = $m_user->read_user();
            $id_khach_hang = NULL;
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $mat_khau = md5($_POST["mat_khau"]);
            $email =$_POST["email"];
            $ngay_dang_ky = NULL;
            //$ma_loai =0;
        // $loai_nd = NULL;
        // $active = NULL;
            foreach ( $users as $us)
            {

                if($ten_dang_nhap == $us->ten_dang_nhap)
                {
                    echo "<script>alert('Tên đăng nhập bị trùng thêm không thành công');window.location='adduser.php'</script>";
                    return;
                }
            }


            $kq = $m_user->Insert_user($id_khach_hang,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky);
            if ($kq) {
                echo "<script>window.location='user.php'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        // $view = 'views/user/v_adduser.php';
        include('templates/layout.php');

    }

    function Hien_thi_dang_nhap()
    {
        // include('templates/layout.php');
        //  $a =0;

        if(isset($_POST["login"]))
        {
            $ten=$_POST["ten_dang_nhap"];
            $m_user =new M_user();
            // $users = $m_user->read_user_by_nameuser($ten);
            //die();
            $mk=$_POST["mat_khau"];

            // $this->luu_dang_nhap($ten,$mk);
        //    $users = $m_user->read_user_by_email($ten);


        }
        if(isset($_SESSION['user_teacher']))
        {
//            if($_SESSION["ma_quyen"]==1) {
                include('templates/layout.php');
//            }
//            if($_SESSION["ma_quyen"]==2) {
//                include('templates_hv/layout.php');
//            }

        }
        else
        {
            $_SESSION['error']="Thông tin đăng nhập không hợp lệ ";
            header("location:index.php");
        }

    }


    function thoat_dang_nhap()
    {
      //  session_destroy();
        unset($_SESSION['user_admin']);
        header("location:login.php");
    }

    function luu_dang_nhap($ten,$mk)
    {
        // $m_user=new M_user();
        // $user = $m_user->read_user_by_id_pass($ten,$mk);
        // if(!empty($user)) {
        //     $_SESSION['user_admin'] = $user;
        // }
    }

}
?>