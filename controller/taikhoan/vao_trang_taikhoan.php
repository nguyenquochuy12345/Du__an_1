<?php
if (isset($_SESSION['user']['user_id'])) {
  $user_id = $_SESSION['user']['user_id'];
  $user = show_tt_theo_user($user_id);
  include './view/user/taikhoan/detail_user.php';
}
