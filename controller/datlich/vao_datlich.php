<?php
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $my_orders = showdonhang_theo_user($user_id);
    include './view/user/my_order.php';
  }