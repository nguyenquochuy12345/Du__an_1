<?php
function showcs()
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT * FROM co_so order by coso_id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cates = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cates;
}
function addcs($name_coso)
{
    include '../ketnoi/ketnoi.php';
    $error = [];
    if ($name_coso == "") {
        $error['name_coso'] = "Bạn chưa nhập tên cơ sở";
    } else if ($name_coso != " ") {
        $sql = "SELECT name_coso FROM co_so WHERE name_coso ='$name_coso'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    $_SESSION['cate_error'] = $error;

    if (!$error) {
        $sql = "INSERT INTO  co_so(name_coso) values('$name_coso')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
function editcs($id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT * FROM  co_so  WHERE coso_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cate = $stmt->fetch(PDO::FETCH_ASSOC);
    return $cate;
}
function updatecs($coso_id, $name_coso)
{
    include '../ketnoi/ketnoi.php';
    $error = [];
    if ($name_coso == "") {
        $error['name_coso'] = "Bạn chưa nhập địa chỉ";
    }
    $_SESSION['cate_error'] = $error;

    if (!$error) {
        $sql = "UPDATE  co_so SET coso_id = '$coso_id',  name_coso = '$name_coso' WHERE coso_id = '$coso_id '";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
function deletecs($id)
{
    include '../ketnoi/ketnoi.php';
    $sql = " UPDATE co_so SET coso_id = '$id' WHERE coso_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($sql) {
        $sql = "DELETE FROM co_so WHERE coso_id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
