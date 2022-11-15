<?php
function loadall_danhmuc(){ 
    $sql="select * from danhmuc "; 
    $listdanhmuc = pdo_query($sql); 
    return $listdanhmuc;
}

function insert_danhmuc($danhmuc){
    $sql_insert = "insert into danhmuc values(null,'$danhmuc')";
    pdo_execute($sql_insert);
}

function  update_danhmuc($id_danhmuc,$name_danhmuc){
    $sql = "update danhmuc set name_danhmuc = '$name_danhmuc' where id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
}

function delete_danhmuc($delete){
    $sql_delete_danhmuc = "delete from danhmuc where id_danhmuc = $delete";
    pdo_execute($sql_delete_danhmuc);
}    
?>