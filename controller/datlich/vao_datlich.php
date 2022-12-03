<?php
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $my_orders = showdonhang_theo_user($user_id);
    // var_dump($my_orders);
    echo '.';
    include './view/user/datlich/my_order.php';
    // echo $user_id;
  }else{
    include './view/user/taikhoan/login.php';
  }