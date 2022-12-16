<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else {
    extract($_SESSION['user']);
    if ($vaitro_id == 1) {
        header("location: ../index.php");
    }
<<<<<<< HEAD
    require_once '../ketnoi/ketnoi.php';
    require_once '../view/admin/header.php';
    require_once "../model/danhmuc.php";
    require_once "../model/sanpham.php";
    require_once "../model/binhluan.php";
    require_once "../model/coso.php";
    require_once '../model/taikhoan.php';
    require_once '../model/donhang.php';
    // require_once "../model/doanhthu.php";    
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'showdm':
                $cates = showdm();
                include_once "../view/admin/danhmuc/list_danhmuc.php";
                break;
            case 'bieudo_danhmuc':
                $cate_bieude = thongke_dm();
                include '../view/admin/danhmuc/bieudo.php';
                break;
                // case 'bieudo_doanhthu':
                //     $bieude_doanhthu = bieude_doanhthu();
                //     include "../view/admin/doanhthu/bieudo_doanhthu.php";
                //     break;
            case 'adddm':
                if (isset($_POST['them'])) {
                    $cate_name = $_POST['cate_name'];
                    add($cate_name);
                    if (!isset($_SESSION['cate_error']['cate_name'])) {
                        $cates = showdm();
                        $_SESSION['cate'] = "Thêm danh mục thành công";
                        header("location: index.php?act=showdm");
                    }
                }
                include "../view/admin/danhmuc/add.php";
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete($id);
=======
}
require_once '../ketnoi/ketnoi.php';
require_once '../view/admin/header.php';
require_once "../model/danhmuc.php";
require_once "../model/sanpham.php";
require_once "../model/binhluan.php";
require_once '../model/taikhoan.php';
require_once '../model/donhang.php';
// require_once "../model/doanhthu.php";    
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'showdm':
            $cates = showdm();
            include_once "../view/admin/danhmuc/list_danhmuc.php";
            break;
        case 'bieudo_danhmuc':
            $cate_bieude = thongke_dm();
            include '../view/admin/danhmuc/bieudo.php';
            break;
            // case 'bieudo_doanhthu':
            //     $bieude_doanhthu = bieude_doanhthu();
            //     include "../view/admin/doanhthu/bieudo_doanhthu.php";
            //     break;
        case 'adddm':
            if (isset($_POST['them'])) {
                $cate_name = $_POST['cate_name'];
                add($cate_name);
                if (!isset($_SESSION['cate_error']['cate_name'])) {
                    $cates = showdm();
                    $_SESSION['cate'] = "Thêm danh mục thành công";
                    header("location: index.php?act=showdm");
>>>>>>> afcb91b010fb7349480ae64d01cbe194669a46f0
                }
            }
            include "../view/admin/danhmuc/add.php";
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete($id);
            }

            $cates = showdm();
            include "../view/admin/danhmuc/list_danhmuc.php";
            break;
        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $cate = edit($id);
            }
            include "../view/admin/danhmuc/edit.php";
            break;
        case 'updatedm':
            if (isset($_POST['update'])) {
                $cate_name = $_POST['cate_name'];
                $cate_id = $_POST['cate_id'];
                updatedm($cate_id, $cate_name);
                if (!isset($_SESSION['cate_error']['cate_name'])) {
                    $_SESSION['cate'] = "Sửa danh mục thành công";
                    $cates = showdm();
                    include "../view/admin/danhmuc/list_danhmuc.php";
                } else {
                    $cate = edit($cate_id);
                    include "../view/admin/danhmuc/edit.php";
                }
            }

            break;

        case "showsp":
            if (isset($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $cate_id = $_POST['cate_id'];
            } else {
                $kyw = "";
                $cate_id = 0;
            }
            $cates = showdm();
            $products = showsp($kyw, $cate_id);
            include "../view/admin/sanpham/list_sp.php";

            break;

        case "addsp":
            $cates = showdm();
            if (isset($_POST['them'])) {
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $total = count($_FILES['img']['name']);
                $description = $_POST['description'];
                $doi_xe = $_POST['doi_xe'];
                $cong_xuat = $_POST['cong_xuat'];
                $color = $_POST['color'];
                $quantity = $_POST['quantity'];
                $cate_id = $_POST['cate_id'];
                // $file4 = $_FILES[''];


                // Loop through each file
                for ($i = 0; $i < $total; $i++) {

                    //Get the temp file path
                    $tmpFilePath = $_FILES['img']['tmp_name'][$i];

                    //Make sure we have a file path
                    if ($tmpFilePath != "") {
                        //Setup our new file path
                        $image[$i] = $_FILES['img']['name'][$i];
                    }
                }
                // $file = $image[0];
                // $file2 = $image[1];
                // $file3 = $image[2];
                // $file4 = $image[3];

<<<<<<< HEAD
            case "delete_sp":
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deletesp($id);
                }
                
                if (isset($_POST['tim'])) {
                    $kyw = $_POST['kyw'];
                    $cate_id = $_POST['cate_id'];
=======
                addsp($product_name, $price, $description, $quantity, $doi_xe, $cong_xuat, $color, $cate_id, $total);
                if (!isset($_SESSION['error_product']['img']) && !isset($_SESSION['error_product']['product_name']) && !isset($_SESSION['error_product']['price']) && !isset($_SESSION['error_product']['quantity'])) {
                    header("location: index.php?act=showsp");
                }
            }
            include "../view/admin/sanpham/add.php";
            break;

        case "delete_sp":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            deletesp($id);
            if (isset($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $cate_id = $_POST['cate_id'];
            } else {
                $kyw = "";
                $cate_id = 0;
            }
            $cates = showdm();
            $products = showsp($kyw, $cate_id);
            include "../view/admin/sanpham/list_sp.php";

            break;
        case "editsp":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = editsp($id);
                $cates = showdm();
            }
            include "../view/admin/sanpham/edit.php";

            break;
        case "updatesp":
            if (isset($_POST['update'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $ngaynhap = $_POST['ngaynhap'];
                $description = $_POST['description'];
                $quantity = $_POST['quantity'];
                $cate_id = $_POST['cate_id'];
                $img = $_POST['oldImg'];
                $file = $_FILES['img'];
                $img2 = $_POST['oldImg2'];
                $file2 = $_FILES['img2'];
                $img3 = $_POST['oldImg3'];
                $file3 = $_FILES['img3'];
                $img4 = $_POST['oldImg4'];
                $file4 = $_FILES['img4'];
                $doi_xe = $_POST['doi_xe'];
                $cong_xuat = $_POST['cong_xuat'];
                $color = $_POST['color'];
                updatesp($product_id, $product_name, $price, $file, $file2, $file3, $file4, $img, $img2, $img3, $img4, $description, $doi_xe, $cong_xuat, $color, $quantity, $cate_id, $ngaynhap);
                if (!isset($_SESSION['error_product']['img']) && !isset($_SESSION['error_product']['img2']) && !isset($_SESSION['error_product']['img3']) && !isset($_SESSION['error_product']['img4']) && !isset($_SESSION['error_product']['product_name']) && !isset($_SESSION['error_product']['price']) && !isset($_SESSION['error_product']['quantity'])) {
                    header("location: index.php?act=showsp");
>>>>>>> afcb91b010fb7349480ae64d01cbe194669a46f0
                } else {
                    $id = $product_id;
                    $product = editsp($id);
                    $cates = showdm();
                    include "../view/admin/sanpham/edit.php";
                }
            }

<<<<<<< HEAD
                break;
            case "updatesp":
                if (isset($_POST['update'])) {
                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    $price = $_POST['price'];
                    $ngaynhap = $_POST['ngaynhap'];
                    $description = $_POST['description'];
                    $quantity = $_POST['quantity'];
                    $cate_id = $_POST['cate_id'];
                    $total = count($_FILES['img']['name']);
                    $doi_xe = $_POST['doi_xe'];
                    $cong_xuat = $_POST['cong_xuat'];
                    $color = $_POST['color'];
                    for ($i = 0; $i < $total; $i++) {

                        //Get the temp file path
                        $tmpFilePath = $_FILES['img']['tmp_name'][$i];

                        //Make sure we have a file path
                        if ($tmpFilePath != "") {
                            //Setup our new file path
                            $image[$i] = $_FILES['img']['name'][$i];
                        }
                    }
                    updatesp($product_id, $product_name, $price,$total, $description, $doi_xe, $cong_xuat, $color, $quantity, $cate_id, $ngaynhap);
                    if (!isset($_SESSION['error_product']['img']) && !isset($_SESSION['error_product']['img2']) && !isset($_SESSION['error_product']['img3']) && !isset($_SESSION['error_product']['img4']) && !isset($_SESSION['error_product']['product_name']) && !isset($_SESSION['error_product']['price']) && !isset($_SESSION['error_product']['quantity'])) {
                        header("location: index.php?act=showsp");
                    } else {
                        $id = $product_id;
                        $product = editsp($id);
                        $cates = showdm();
                        include "../view/admin/sanpham/edit.php";
                    }
                }
=======
            break;
        case 'showuser';
            $users = show_user();
            include '../view/admin/taikhoan/list_user.php';
            break;
        case 'disable_user':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                disable_user($user_id);
            }
>>>>>>> afcb91b010fb7349480ae64d01cbe194669a46f0

            $users = show_user();
            include '../view/admin/taikhoan/list_user.php';
            break;
        case 'edit_user';
            unset($_SESSION['errors']);

            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                $user = edit_user($user_id);
                $vaitro = show_vaitro();
            }
            require_once "../view/admin/taikhoan/edit_user.php";

            break;
        case 'update_user':
            unset($_SESSION['errors']);
            if (isset($_POST['update_user'])) {
                $user_id = $_POST['user_id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $hovaten = $_POST['hovaten'];
                $email = $_POST['email'];
                // $address = $_POST['address'];
                $tel = $_POST['tel'];
                $vaitro_id = $_POST['vaitro_id'];
                // $img = $_POST['oldImg'];
                // $file = $_FILES['img'];
                update_user($user_id, $username, $password, $hovaten, $email, $tel, $vaitro_id);
            }
            if (!isset($_SESSION['errors']['password']) && !isset($_SESSION['errors']['hovaten']) && !isset($_SESSION['errors']['email']) && !isset($_SESSION['errors']['address']) && !isset($_SESSION['errors']['tel'])) {
                $users = show_user();
                include '../view/admin/taikhoan/list_user.php';
            } else {
                $user_id = $_POST['user_id'];
                $user = edit_user($user_id);
                $vaitro = show_vaitro();
                require_once "../view/admin/taikhoan/edit_user.php";
            }
            break;
        case 'showcommemt':
            $binhluan = list_binhluan();
            require_once "../view/admin/binhluan/show_binhluan.php";
            break;
        case 'chitietBinhluan':
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                $chitiet_binhluan = chitietBinhluan($product_id);
                $binhluan_co_traloi = checkbinhluan_co_traloi($product_id);
            }
            include "../view/admin/binhluan/detailbinhluan.php";
            break;
        case 'xoa_binhluan':

            if (isset($_GET['binhluan_id'])) {
                if (isset($_GET['product_id'])) {
                    $binhluan_id =  $_GET['binhluan_id'];
                    admin_xoabinhluan($binhluan_id);
                    $product_id = $_GET['product_id'];
                    $chitiet_binhluan = chitietBinhluan($product_id);
                    $binhluan_co_traloi = checkbinhluan_co_traloi($product_id);
                    include "../view/admin/binhluan/detailbinhluan.php";
                }
            }
            break;
        case 'show_rep_theo_binhluan':
            if (isset($_GET['binhluan_id'])) {
                $binhluan_id = $_GET['binhluan_id'];
                $rep = show_rep_theo_binhluan($binhluan_id);
                include '../view/admin/binhluan/show_rep.php';
            }
            break;
        case "showsp":
            if (isset($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $cate_id = $_POST['cate_id'];
            } else {
                $kyw = "";
                $cate_id = 0;
            }
            $cates = showdm();
            $products = showsp($kyw, $cate_id);
            include "../view/admin/sanpham/list_sp.php";

            break;
        case 'showdonhangadmin':

            if (isset($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $status_id = $_POST['status_id'];
            } else {
                $kyw = "";
                $status_id = 0;
            }

            $show_order = showdonhangadmin($kyw, $status_id);

            // $show_order = showdonhangadmin();
            $status = show_status();
            include '../view/admin/donhang/show_order.php';
            break;

        case 'huy_lich':
            if (isset($_GET['order_id'])) {
                $order_id = $_GET['order_id'];
                $huy_lich = huy_lich($order_id);
            }
            if (isset($_POST['tim'])) {
                $kyw = $_POST['kyw'];
                $status_id = $_POST['status_id'];
            } else {
                $kyw = "";
                $status_id = 0;
            }
            $show_order = showdonhangadmin($kyw, $status_id);
            $status = show_status();
            include '../view/admin/donhang/show_order.php';
            break;

        case 'showdonhang_theo_khachhang':
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                $showdonhang_theo_khachhang = showdonhang_theo_khachhang($user_id);
            }
            include '../view/admin/donhang/show_order_theokhachhang.php';
            break;
        case 'chitiet_donhang':
            if (isset($_GET['order_id'])) {
                $order_id = $_GET['order_id'];
                $order_detail = admin_show_chitiet_order($order_id);
                include '../view/admin/donhang/order_detail.php';
            }
            break;
        case 'chitiet_donhang_theo_khachhang':
            if (isset($_GET['order_id'])) {
                $order_id = $_GET['order_id'];
                $show_chitiet_order_theokhachhang = show_chitiet_order_theokhachhang($order_id);
            }
            include '../view/admin/donhang/show_order_detail_theokhachhang.php';
            break;
        case 'admin_xoa_rep':
            if (isset($_GET['rep_id'])) {
                if (isset($_GET['binhluan_id'])) {
                    $binhluan_id = $_GET['binhluan_id'];
                    $rep_id = $_GET['rep_id'];
                    admin_xoa_rep($rep_id);
                    $rep = show_rep_theo_binhluan($binhluan_id);
<<<<<<< HEAD
                    include '../view/admin/binhluan/show_rep.php';
                }
                break;
            case 'showcoso':
                $cates = showcs();
                include '../view/admin/coso/show.php';
                break;
            case 'addcs':
                if (isset($_POST['them'])) {
                    $name_coso = $_POST['name_coso'];
                    addcs($name_coso);
                    if (!isset($_SESSION['cate_error']['name_coso'])) {
                        $cates = showcs();
                        $_SESSION['cate'] = "Thêm cơ sở thành công";
                        header("location: index.php?act=showcoso");
                    }
                }
                include "../view/admin/coso/add_cs.php";
                break;
            case 'edit_cs':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $cate = editcs($id);
                }
                include '../view/admin/coso/edit_cs.php';
                break;
            case 'updatecs':
                if (isset($_POST['update'])) {
                    $coso_id = $_POST['coso_id'];
                    $name_coso = $_POST['name_coso'];
                    updatecs($coso_id, $name_coso);
                    if (!isset($_SESSION['cate_error']['name_coso'])) {
                        header("location: index.php?act=showcoso");
                    } else {
                        $id = $coso_id;
                        $cate = editcs($id);
                        include "../view/admin/coso/edit_cs.php";
                    }
                }
                break;
            case 'deletecs':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deletecs($id);
                }

                $cates = showcs();
                include "../view/admin/coso/show.php";
                break;
            case 'showdonhangadmin':
                $show_order = showdonhangadmin();
                $status = show_status();
                include '../view/admin/donhang/show_order.php';
                break;

            case 'huy_lich':
                if (isset($_GET['order_id'])) {
                    $order_id = $_GET['order_id'];
                    $huy_lich = huy_lich($order_id);
                }
                $show_order = showdonhangadmin();
                $status = show_status();
                include '../view/admin/donhang/show_order.php';
                break;

            case 'showdonhang_theo_khachhang':
                if (isset($_GET['user_id'])) {
                    $user_id = $_GET['user_id'];
                    $showdonhang_theo_khachhang = showdonhang_theo_khachhang($user_id);
                }
                include '../view/admin/donhang/show_order_theokhachhang.php';
                break;
            case 'chitiet_donhang':
                if (isset($_GET['order_id'])) {
                    $order_id = $_GET['order_id'];
                    $order_detail = admin_show_chitiet_order($order_id);
                    include '../view/admin/donhang/order_detail.php';
                }
                break;
            case 'chitiet_donhang_theo_khachhang':
                if (isset($_GET['order_id'])) {
                    $order_id = $_GET['order_id'];
                    $show_chitiet_order_theokhachhang = show_chitiet_order_theokhachhang($order_id);
                }
                include '../view/admin/donhang/show_order_detail_theokhachhang.php';
                break;
            case 'admin_xoa_rep':
                if (isset($_GET['rep_id'])) {
                    if (isset($_GET['binhluan_id'])) {
                        $binhluan_id = $_GET['binhluan_id'];
                        $rep_id = $_GET['rep_id'];
                        admin_xoa_rep($rep_id);
                        $rep = show_rep_theo_binhluan($binhluan_id);
                        if (!empty($rep)) {
                            $binhluan = list_binhluan();
                            header("location: admin/index.php?act=showcommemt");
                        } else {
                            include '../view/admin/binhluan/detailbinhluan.php  ';
                        }
=======
                    if (!empty($rep)) {
                        $binhluan = list_binhluan();
                        header("location: admin/index.php?act=showcommemt");
                    } else {
                        include '../view/admin/binhluan/detailbinhluan.php  ';
>>>>>>> afcb91b010fb7349480ae64d01cbe194669a46f0
                    }
                }
            }
            break;
        case 'capnhat_donhang':
            if (isset($_POST['btn_capnhat_donhang'])) {
                $order_id = $_POST['order_id'];
                $status = $_POST['trangtdh'];
                $ngaydathang = $_POST['ngaydathang'];
                // $tong = $_POST['tong'];
                capnhat_donhang($status, $order_id, $ngaydathang);
                $show_order = showdonhangadmin($kyw, $status_id);
                header("location: index.php?act=showdonhangadmin");
            }
            break;
        default:
            $khachvip = top3khachhang_muanhieu();
            $sanpham_top1_view = sanpham_xemnhieunhat();
            $cate = thongke_dm();
            // $doanhthu = show_doanhthu();
            $sp_binhluannhieu = sanphamdcbinhluannhieu();
            require_once "../view/admin/home.php";
            break;
    }
} else {
    $sp_binhluannhieu = sanphamdcbinhluannhieu();
    $khachvip = top3khachhang_muanhieu();
    $sanpham_top1_view = sanpham_xemnhieunhat();
    $cate = thongke_dm();
    // $doanhthu = show_doanhthu();
    require_once "../view/admin/home.php";
}
require_once "../view/admin/footer.php";
