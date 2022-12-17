<?php
function showsp($kyw, $cate_id)
{
    include '../ketnoi/ketnoi.php';

    $sql = "SELECT product_id,quantity,product_name,price,img,img_2,img_3,img_4,doi_xe,cong_xuat,color,description,ngaynhap,categories.cate_id,categories.cate_name FROM products JOIN categories ON categories.cate_id = products.cate_id  ";
    if ($kyw != "") {
        $sql .= " and product_name like '%" . $kyw . "%'";
    }
    if ($cate_id > 0) {
        $sql .= " and products.cate_id = '$cate_id'";
    }
    $sql .= " order by product_id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function showsp_theodm($cate_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "SELECT * from products  where cate_id = '$cate_id'  ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function showsp_trangchu()
{
    include './ketnoi/ketnoi.php';

    $sql = "SELECT * FROM products  order by ngaynhap desc limit 9 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function show_top3_sp()
{
    include './ketnoi/ketnoi.php';

    $sql = "SELECT * FROM products where 1 order by view desc limit 0,3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function view($id)
{
    include './ketnoi/ketnoi.php';

    $sql = " UPDATE products SET view = view + 1 where  product_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function chitiet_sp($id)
{
    include './ketnoi/ketnoi.php';

    $sql = "SELECT * FROM products where  product_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    return $product;
}
function addsp($product_name, $price, $description, $quantity, $doi_xe, $cong_xuat, $color, $cate_id, $total)
{
    include '../ketnoi/ketnoi.php';
    $error = [];
    for ($i = 0; $i < $total; $i++) {
        $tmpFilePath = $_FILES['img']['tmp_name'][$i];
        if ($tmpFilePath != "") {
            $image[$i] = $_FILES['img']['name'][$i];
            if (strlen($image[$i]) > 0) {
                $ext = pathinfo($image[$i]);
                $ext = $ext['extension'];
                if ($ext != "png" && $ext != "jpeg" && $ext != "jpg" && $ext != "gif") {
                    $error['img'] = "Không đúng định dạnh ảnh";
                } else {
                    $ima[$i] = $image[$i];
                }
            } else {
                $error['img'] = "Bạn chưa up ảnh";
            }
            $img = $ima[0];
            $img2 = $ima[1];
            $img3 = $ima[2];
            $img4 = $ima[3];
            // if (strlen($file2) > 0) {
            //     $ext2 = pathinfo($file2);
            //     $ext2 = $ext2['extension'];
            //     if ($ext2 != "png" && $ext2 != "jpeg" && $ext2 != "jpg" && $ext2 != "gif") {
            //         $error['img2'] = "Không đúng định dạnh ảnh";
            //     } else {
            //         $img2 = $file2;
            //     }
            // }
            // if (strlen($file3) > 0) {
            //     $ext3 = pathinfo($file3);
            //     $ext3 = $ext3['extension'];
            //     if ($ext3 != "png" && $ext3 != "jpeg" && $ext3 != "jpg" && $ext3 != "gif") {
            //         $error['img3'] = "Không đúng định dạnh ảnh";
            //     } else {
            //         $img3 = $file3;
            //     }
            // }
            // if (strlen($file4) > 0) {
            //     $ext4 = pathinfo($file4);
            //     $ext4 = $ext4['extension'];
            //     if ($ext4 != "png" && $ext4 != "jpeg" && $ext4 != "jpg" && $ext4 != "gif") {
            //         $error['img4'] = "Không đúng định dạnh ảnh";
            //     } else {
            //         $img4 = $file4;
            //     }
            // }
        } else {
            $error['img'] = "Bạn chưa up ảnh";
        }
    }
    if ($quantity == "") {
        $error['quantity'] = "Bạn chưa nhập số lượng";
    } else if ($quantity <= 0) {
        $error['quantity'] = "Số lượng phải là số dương";
    }
    if ($product_name == "") {
        $error['product_name'] = "Bạn chưa nhập tên sản phẩm";
    }
    if ($price == "") {
        $error['price'] = "Bạn chưa nhập giá sản phẩm";
    } else if ($price <= 0) {
        $error['price'] = "Giá phải là số dương";
    }
    if ($doi_xe == "") {
        $error['doi_xe'] = "Bạn chưa nhập số lượng";
    }
    if ($cong_xuat == "") {
        $error['cong_xuat'] = "Bạn chưa nhập số lượng";
    }
    if ($color == "") {
        $error['color'] = "Bạn chưa nhập màu";
    }
    $_SESSION['error_product'] = $error;
    if (!$error) {
        $sql = "INSERT INTO products(product_name,price,img,img_2,img_3,img_4,description,doi_xe,cong_xuat,color,quantity,cate_id,ngaynhap) VALUES ('$product_name','$price','$img','$img2','$img3','$img4','$description','$doi_xe','$cong_xuat','$color',$quantity,' $cate_id',CURRENT_DATE-1)";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        // $file = $image[0];
        // $file2 = $image[1];
        // $file3 = $image[2];
        // $file4 = $image[3];
        for ($i = 0; $i < $total; $i++) {

            //Get the temp file path
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];

            //Make sure we have a file path
            if ($tmpFilePath != "") {
                //Setup our new file path
                $image = $_FILES['img']['name'][$i];
                move_uploaded_file($tmpFilePath, '../view/public/img/car/' . $image);
            }
        }

        // move_uploaded_file($tmpFilePath, '../view/public/img/car/' . $img2);
        // move_uploaded_file($tmpFilePath, '../view/public/img/car/' . $img3);
        // move_uploaded_file($tmpFilePath, '../view/public/img/car/' . $img4);
    }
}
function deletesp($id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "DELETE FROM rep WHERE product_id = '$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($sql) {
        $sql = "DELETE FROM binhluan WHERE product_id = '$id' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($sql) {
            $sql = "DELETE FROM products WHERE product_id = '$id' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    }
}
function editsp($id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT * FROM  products  WHERE product_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    return $product;
}
function updatesp($product_id, $product_name, $price, $total, $description, $doi_xe, $cong_xuat, $color, $quantity, $cate_id, $ngaynhap)
{
    include '../ketnoi/ketnoi.php';

    $error = [];
    for ($i = 0; $i < $total; $i++) {
        $tmpFilePath = $_FILES['img']['tmp_name'][$i];
        if ($tmpFilePath != "") {
            $image[$i] = $_FILES['img']['name'][$i];
            if (strlen($image[$i]) > 0) {
                $ext = pathinfo($image[$i]);
                $ext = $ext['extension'];
                if ($ext != "png" && $ext != "jpeg" && $ext != "jpg" && $ext != "gif") {
                    $error['img'] = "Không đúng định dạnh ảnh";
                } else {
                    $ima[$i] = $image[$i];
                }
            } else {
                $error['img'] = "Bạn chưa up ảnh";
            }
            $img = $ima[0];
            $img2 = $ima[1];
            $img3 = $ima[2];
            $img4 = $ima[3];
        } else {
            $img = $image;
        }
    }
    if ($quantity == "") {
        $error['quantity'] = "Bạn chưa nhập số lượng";
    } else if ($quantity <= 0) {
        $error['quantity'] = "Số lượng phải là số dương";
    }
    if ($product_name == "") {
        $error['product_name'] = "Bạn chưa nhập tên sản phẩm";
    }
    if ($doi_xe == "") {
        $error['doi_xe'] = "Bạn chưa nhập số lượng";
    }
    if ($cong_xuat == "") {
        $error['cong_xuat'] = "Bạn chưa nhập số lượng";
    }
    if ($color == "") {
        $error['color'] = "Bạn chưa nhập màu";
    }
    if ($price == "") {
        $error['price'] = "Bạn chưa nhập giá sản phẩm";
    } else if ($price <= 0) {
        $error['price'] = "Giá phải là số dương";
    }
    $_SESSION['error_product'] = $error;
    if (!$error) {
        $sql = "UPDATE  products SET product_id = '$product_id' , product_name = '$product_name' ,price = '$price',img = '$img',img_2 = '$img2',img_3 = '$img3',img_4 = '$img4',description = '$description',doi_xe = '$doi_xe',cong_xuat = '$cong_xuat',color = '$color',quantity = '$quantity' ,cate_id = ' $cate_id' ,ngaynhap= '$ngaynhap'  WHERE product_id = '$product_id'";
        // chuẩn bị
        $stmt = $conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];
            if ($tmpFilePath != "") {
                $image = $_FILES['img']['name'][$i];
                move_uploaded_file($file['tmp_name'], '../view/public/img/car/' . $image);
            } else {
                move_uploaded_file($tmpFilePath, '../view/public/img/car/' . $image);
            }
            // move_uploaded_file($file2['tmp_name'], '../view/img/' . $img2);
            // move_uploaded_file($file3['tmp_name'], '../view/img/' . $img3);
            // move_uploaded_file($file4['tmp_name'], '../view/img/' . $img4);
        }
    }
}
function sanpham_lienquan($id, $iddm)
{
    include './ketnoi/ketnoi.php';
    $sql = " SELECT * FROM products WHERE cate_id = '$iddm' AND product_id != '$id' order by RAND() limit 4";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products_lienquan = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products_lienquan;
}
function timsp($kyw)
{
    include './ketnoi/ketnoi.php';
    $sql = " SELECT * FROM products WHERE product_name like '%" . $kyw . "%'  order by product_id desc   ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function sanpham_xemnhieunhat()
{
    include '../ketnoi/ketnoi.php';
    $sql = " SELECT * FROM products order by view desc limit 3   ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product_top1_view = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $product_top1_view;
}
function sanphamdcbinhluannhieu()
{

    include '../ketnoi/ketnoi.php';
    $sql = " SELECT * , COUNT(binhluan.product_id) as 'sobinhluan' FROM products JOIN binhluan ON binhluan.product_id= products.product_id GROUP BY products.product_name order by sobinhluan  DESC LIMIT 5 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $psanphamdcbinhluannhieu = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $psanphamdcbinhluannhieu;
}
