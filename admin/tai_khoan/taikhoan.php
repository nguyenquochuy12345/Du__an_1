<?php
function insert_taikhoan($user,$pass,$email,$address,$tel){
  $sql = "insert into taikhoan(user,pass,email,address,tel) values('$user','$pass','$email','$address','$tel')";
  pdo_execute($sql);
}
function check_user($user,$pass){
  $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
  $dm = pdo_query_one($sql);
  return $dm;
}
function capnhaptaikhoan($id,$user,$pass,$email,$address,$tel){
  $sql = "update taikhoan set user = '".$user."', pass = '".$pass."', email = '".$email."' ,address = '".$address."'  ,tel = '".$tel."'  where id=".$id;
  pdo_execute($sql);
}
function quenmatkhau($email){
  $sql = "select * from taikhoan where email='".$email."'";
  $dm = pdo_query_one($sql);
  return $dm;
}
function loadall_taikhoan(){
  $sql = "select * from taikhoan";
  $listtaikhoan = pdo_query($sql);
  return $listtaikhoan;
}
function loadone_taikhoan($id){
  $sql = "select * from taikhoan where id=".$id;
  $taikhoan = pdo_query_one($sql);
  return $taikhoan;
}
function update_taikhoan($id,$user, $pass, $email,$address,$tel,$role){
  $sql = "update taikhoan set user = '".$user."', pass = '".$pass."', email = '".$email."' ,address = '".$address."'  ,tel = '".$tel."' ,role = '".$role."' where id=".$id;
  pdo_execute($sql);
  }
function delete_taikhoan($delete){
  $sql_delete_taikhoan = "delete from taikhoan where id = $delete";
  pdo_execute($sql_delete_taikhoan);
} 
?>