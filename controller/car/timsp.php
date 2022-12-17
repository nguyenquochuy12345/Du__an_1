<?php
if (isset($_POST['timsp'])) {
  if (isset($_POST['kyw']) && ($_POST['kyw'] != " ")) {
    $kyw = $_POST['kyw'];

    $products = timsp($kyw);
  }
}
$categories = showdm_user();
$top3sp = show_top3_sp();
