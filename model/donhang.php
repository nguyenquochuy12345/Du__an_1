<?php
function dathang($id_user, $yeucau, $id_product, $ngayxemxe, $caxemxe, $cosoxemxe)
{
    include './ketnoi/ketnoi.php';
    $errors = [];
    // if ($email == "") {
    //     $errors['email'] = "Email không được để trống";
    // } else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
    //     $errors['email'] = "Email không đúng định dạng";
    // }
    // if ($hovaten == "") {
    //     $errors['hovaten'] = "Họ và tên không được để trống";
    // }

    // if ($tel == "") {
    //     $errors['tel'] = "Số điện thoại không được để trống";
    // }

    if ($ngayxemxe == "") {
        $errors['chonngay'] = "Ngày  không được để trống!";
    }

    if ($caxemxe == "") {
        $errors['chonthoigian'] = "Thời gian xem xe không được để trống!";
    }
    if ($cosoxemxe == "") {
        $errors['chondiachi'] = "Cơ sở xem xe không được để trống!";
    }

    $time_start = strtotime($ngayxemxe);
    $time_now = strtotime(date("Y-m-d"));

    if ($ngayxemxe != "" && $time_start < $time_now) {
        $errors['chonngay'] = "Ngày bạn chọn đã trôi qua !";
    }

    // $sdt = '/0\d{9,10}/';
    // if (!preg_match($sdt, $tel)) {
    //     $errors['tel'] = "Số điện thoại không đúng định dạng";
    // }

    $_SESSION['errors_muahhang'] =  $errors;
    if (!$errors) {
        $sql = "INSERT INTO tbl_order
        (
            user_id,
            yeucau,
            product_id,
            ngayxemxe,
            caxemxe,
            co_so,
            status_id
            ) 
        VALUES
        (
            '$id_user',
            '$yeucau',
            '$id_product',
            '$ngayxemxe',
            '$caxemxe',
            '$cosoxemxe',
            1)
        ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // if ($sql) {
        //     $last_id = $conn->lastInsertId();
        //     foreach ($_SESSION['cart'] as $cart) {
        //         $product_id = $cart[0];
        //         $quantity = $cart[4];
        //         $sql = "INSERT INTO order_detail(order_id,product_id,quantity) VALUES('$last_id','$product_id','$quantity')";
        //         $stmt = $conn->prepare($sql);
        //         $stmt->execute();

        //     }
        // }
    }
    unset($_SESSION['cart']);
}

function showdonhang_theo_user($user_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "SELECT order_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngaydathang,product_id,ngayxemxe,caxemxe,co_so,
    tbl_order.status_id,order_status.status,
    ca_xem_xe.name_caxem,
    co_so.name_coso
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id 
    JOIN ca_xem_xe ON ca_xem_xe.caxem_id = tbl_order.caxemxe
    JOIN co_so ON co_so.coso_id = tbl_order.co_so
    WHERE tbl_order.user_id = '$user_id' order by ngaydathang DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $my_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $my_order;
}
function show_chitiet_order($order_id)
{
    include './ketnoi/ketnoi.php';
    $sql = " SELECT order_id,products.product_id,products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.color,products.view,products.quantity,products.description  FROM tbl_order JOIN products ON products.product_id = tbl_order.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}
function show_chitiet_order_theokhachhang($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = " SELECT order_id,products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.description  FROM tbl_order JOIN products ON products.product_id = tbl_order.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}
function admin_show_chitiet_order($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = " SELECT order_id,products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.description  FROM tbl_order JOIN products ON products.product_id = tbl_order.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}

// function showdonhangadmin()
// {
//     include '../ketnoi/ketnoi.php';
//     // $sql = "SELECT * FROM tbl_order order by ngaydathang desc";
//     $sql = "SELECT order_id,tbl_order.user_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngaydathang,product_id,ngayxemxe,caxemxe,co_so,
//     tbl_order.status_id,order_status.status,
//     ca_xem_xe.name_caxem,
//     co_so.name_coso
//     FROM tbl_order 
//     JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
//     JOIN order_status ON order_status.status_id = tbl_order.status_id 
//     JOIN ca_xem_xe ON ca_xem_xe.caxem_id = tbl_order.caxemxe
//     JOIN co_so ON co_so.coso_id = tbl_order.co_so
//     order by ngaydathang DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $show_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $show_order;
// }

function showdonhangadmin($kyw, $status_id)
{
    include '../ketnoi/ketnoi.php';

    $sql = "SELECT order_id,tbl_order.user_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngaydathang,product_id,ngayxemxe,caxemxe,co_so,
    tbl_order.status_id,order_status.status,
    ca_xem_xe.name_caxem,
    co_so.name_coso
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id 
    JOIN ca_xem_xe ON ca_xem_xe.caxem_id = tbl_order.caxemxe
    JOIN co_so ON co_so.coso_id = tbl_order.co_so  ";
    if ($kyw != "") {
        $sql .= " and taikhoan.email like '%" . $kyw . "%'";
    }
    if ($status_id > 0) {
        $sql .= " and tbl_order.status_id = '$status_id'";
    }
    $sql .= " order by ngaydathang DESC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order;
}





function showdonhanguser()
{
    include './ketnoi/ketnoi.php';
    // $sql = "SELECT * FROM tbl_order order by ngaydathang desc";
    $sql = "SELECT order_id,tbl_order.user_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngaydathang,product_id,ngayxemxe,caxemxe,co_so,
    tbl_order.status_id,order_status.status,
    ca_xem_xe.name_caxem,
    co_so.name_coso
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id 
    JOIN ca_xem_xe ON ca_xem_xe.caxem_id = tbl_order.caxemxe
    JOIN co_so ON co_so.coso_id = tbl_order.co_so
    order by ngaydathang DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order;
}

function showdonhang_theo_khachhang($user_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT *  FROM tbl_order   JOIN order_status on order_status.status_id = tbl_order.status_id WHERE user_id = '$user_id' order by ngaydathang desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order_theo_khachhang = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order_theo_khachhang;
}
function capnhat_donhang($status, $order_id, $ngaydathang)
{
    include '../ketnoi/ketnoi.php';
    if ($status == 3) {
        $sql = "UPDATE  tbl_order SET status_id = 3 ,ngayhoanthanhdonhang = CURRENT_DATE, ngaydathang = '$ngaydathang'   WHERE order_id = '$order_id'  ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // if ($sql) {
        //     $sql = "SELECT ngay FROM   doanhthu WHERE ngay = CURRENT_DATE ";
        //     $stmt = $conn->prepare($sql);
        //     $stmt->execute();
        //     $doanhthu = $stmt->fetch(PDO::FETCH_ASSOC);

        // if (!$doanhthu) {
        //     $sql = "INSERT INTO doanhthu VALUES (CURRENT_DATE,'$tong')";
        //     $stmt = $conn->prepare($sql);
        //     $stmt->execute();
        // } else {
        //     $sql = "UPDATE doanhthu SET tongdoanhthu = tongdoanhthu+$tong WHERE ngay = CURRENT_DATE";
        //     $stmt = $conn->prepare($sql);
        //     $stmt->execute();
        // }
    } else {
        $sql = "UPDATE  tbl_order SET status_id = '$status',ngaydathang = '$ngaydathang' WHERE order_id = '$order_id'  ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
function huy_lich_user($order_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "UPDATE tbl_order
        SET status_id = 5 WHERE order_id = '$order_id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function show_status()
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT * FROM order_status";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $status = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $status;
}

function huy_lich($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "UPDATE tbl_order
        SET status_id = 5 WHERE order_id = '$order_id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}



// xu ly ca xem xe
function show_cosoxem()
{
    include './ketnoi/ketnoi.php';
    $sql = " SELECT *  FROM co_so ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_coso = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_coso;
}


// xu ly co so xem xe
function show_caxem()
{
    include './ketnoi/ketnoi.php';
    $sql = " SELECT *  FROM ca_xem_xe ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_caxemxe = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_caxemxe;
}
