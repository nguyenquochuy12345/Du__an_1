<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
  $sql_insert = "insert into binhluan values(null,'$noidung','$iduser','$idpro','$ngaybinhluan')";
  pdo_execute($sql_insert);
}
function loadall_binhluan(){ 
  $sql="select * from binhluan";

  $listbinhluan=pdo_query($sql); 
  return $listbinhluan;}

function delete_binhluan($delete){
  $sql_delete_binhluan = "delete from binhluan where id = $delete";
  pdo_execute($sql_delete_binhluan);
} 
?>