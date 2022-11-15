<?php
function loadall_sanpham(){ 
  $sql = "select * from sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($name_sanpham,$price_sanpham,$hinh_sanpham,$description_sanpham,$view_sanpham,$cate_sanpham){
    $sql_insert_product = "insert into sanpham values(null,'$name_sanpham','$price_sanpham','$hinh_sanpham','$description_sanpham','$view_sanpham',$cate_sanpham)";
    pdo_execute($sql_insert_product);
} 

function delete_sanpham($xoa){
    $sql = "delete from sanpham where id_sanpham = $xoa";
    pdo_execute($sql);
} 

function loadall_sanpham_trangchu(){ 
    $sql = "select * from sanpham order by id desc LIMIT 30";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_sanpham_cungloai($kyw,$id_danhmuc){ 
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){ 
        $sql.= " and name like '%".$kyw."%'"; 
    } 
    if($id_danhmuc>0){ 
        $sql.=" and id_danhmuc ='".$id_danhmuc."'"; 
    } 

    $listproduct = pdo_query($sql);
    return $listproduct;
    }

function top10_product_trangchu(){ 
     $sql = "select * from sanpham order by view desc LIMIT 10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// function loadall_sanpham_danhmuc(){ 
//   $sql = "SELECT *
// FROM danhmuc, sanpham 
// WHERE danhmuc.id =sanpham.id_danhmuc";
//     $listsanphamdanhmuc = pdo_query($sql);
//     return $listsanphamdanhmuc;
// }
function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function load_tendanhmuc($id_danhmuc){
    if ($id_danhmuc>0) {
        $sql = "select * from danhmuc where id =".$id_danhmuc;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $dm;
    }else{
        return "";
    }
}
function loadsanpham_cungloai($id,$id_danhmuc){
    $sql = "select * from sanpham where id_danhmuc = '.$id_danhmuc.' AND id<> =".$id;
    $listsanphamdanhmuc = pdo_query($sql);
    return $listsanphamdanhmuc;
}
function update_sanpham($id,$id_danhmuc,$name, $price, $price_sale,$hinh,$description,$view){
    if ($hinh!="") {
        $sql = "update sanpham set id_danhmuc = '".$id_danhmuc."', name = '".$name."', price = '".$price."' ,price_sale = '".$price_sale."' ,img = '".$hinh."' ,description = '".$description."' ,view = '".$view."' where id=".$id;
    } else {
        $sql = "update sanpham set id_danhmuc = '".$id_danhmuc."', name = '".$name."', price = '".$price."' ,price_sale = '".$price_sale."'  ,description = '".$description."' ,view = '".$view."' where id=".$id;
    }
    pdo_execute($sql);
}


function list_sanpham_cungloai($id,$id_danhmuc){
        $sql = "select * from sanpham where id_danhmuc =".$id_danhmuc." AND id <> ".$id;
        $listsanpham_cungloai = pdo_query($sql);
        return $listsanpham_cungloai;
    }
?>