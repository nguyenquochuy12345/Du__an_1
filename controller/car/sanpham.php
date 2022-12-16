<?php
<<<<<<< HEAD
      if (isset($_GET['iddm'])) {
        $iddm = $_GET['iddm'];
        $products = showsp_theodm($iddm);
        $categories = showdm_user();
        $top3sp = show_top3_sp();
      }
=======
if (isset($_GET['iddm'])) {
  $iddm = $_GET['iddm'];
  $products = showsp_theodm($iddm);
  $categories = showdm_user();
  $top3sp = show_top3_sp();
}
>>>>>>> afcb91b010fb7349480ae64d01cbe194669a46f0
