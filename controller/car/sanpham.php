<?php
      if (isset($_GET['iddm'])) {
        $iddm = $_GET['iddm'];
        $products = showsp_theodm($iddm);
        $categories = showdm_user();
      }